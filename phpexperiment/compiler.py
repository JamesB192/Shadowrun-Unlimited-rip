#!/usr/bin/env python3
"""Try to compile DragonFall extended content packs."""
import glob
import os
import shutil
import tempfile
import zipfile

import df_pb2
import google.protobuf.text_format as tf


def parse_file(infile, type_instance):
    with open(infile, 'r') as frp:
        tf.Parse(frp.read(), type_instance)


def write_file(outfile, instance):
    with open(outfile, 'wb') as fwp:
        fwp.write(instance.SerializeToString())


def make_directory(indir, outdir):
    _proj = df_pb2.ProjectDef()

    parse_file(indir + os.sep + 'project.cpack.txt', _proj)
    o_name = f'{_proj.project_id}-{_proj.project_name}'

    odir0 = tempfile.mkdtemp(suffix='-work', prefix='DFEcompiler-', dir=outdir)
    odir1 = odir0 + os.sep + o_name
    os.mkdir(odir1)
    write_file(odir1 + os.sep + 'project.cpack.bytes', _proj)

    idir2 = indir + os.sep + 'art'
    odir2 = odir1 + os.sep + 'art'
    os.mkdir(odir2)
    _man = df_pb2.Manifest()
    glb = glob.iglob('%s%s**%s*.png' %(
        idir2, os.sep, os.sep
        ), recursive=True)
    #glb = glob.glob(odir2, '*.png', recursive=True)
    for file in glb:
        #print(repr(file))
        _entry = df_pb2.ManifestEntry()
        _entry.name = file.split(os.sep)[-1]
        #print(repr(file), repr(odir2 + os.sep + _entry.name))
        shutil.copy2(file, odir2)
    write_file(odir2 + os.sep + 'manifest.mf.bytes', _proj)

    idir2 = indir + os.sep + 'data'
    odir2 = odir1 + os.sep + 'data'
    os.mkdir(odir2)
    _man = df_pb2.Manifest()
    # stem outdir prototyper
    form = (('item', 'items', df_pb2.ItemDef),
            ('ab', 'abilities', df_pb2.AbilityDef),
            ('convo', 'convos', df_pb2.Conversation),
            ('srm', 'maps', df_pb2.MapDef),
            ('srt', 'scenes', df_pb2.SceneDef),
            ('ch_inst', 'chars', df_pb2.CharacterInstance),
            ('mode', 'modes', df_pb2.ModeDef),
            ('pb', 'props', df_pb2.PropDef),
            ('eq_sht', 'chars', df_pb2.EquipmentSheet),
            ('ch_sht', 'chars', df_pb2.Character),
            ('story', 'story', df_pb2.StoryDef),
            )
    for stem, subdir, ptype in form:
        odir3 = odir2 + os.sep + subdir
        try:
            os.mkdir(odir3)
        except FileExistsError:
            pass
        _man = df_pb2.Manifest()
        glb = glob.iglob('%s%s**%s*.%s.txt' %(
            idir2, os.sep, os.sep, stem
            ), recursive=True)
        for file in glb:
            _entry = df_pb2.ManifestEntry()
            _entry.name = subdir + os.sep +file.split(os.sep)[-1]
            this_file = ptype()
            parse_file(file, this_file)
            write_file(odir2 + os.sep + _entry.name, this_file)
    write_file(odir2 + os.sep + 'manifest.mf.bytes', _proj)

    with zipfile.ZipFile(outdir + os.sep + o_name + '.cpz', 'w') as myzip:
        for line in glob.iglob(odir0 + os.sep + '**', recursive=True):
            print(line)
            myzip.write(line)
    shutil.rmtree(odir0)


make_directory('../SR-Unlimited', 'scrap')

#file = '''Desktop/SrU/SR-Unlimited/data/maps/The Docks3.srm.txt'''
#_map = df_pb2.MapDef()
#with open(file, 'r') as frp:
    ##_map.text_format.Parse(frp.read())
    #tf.Parse(frp.read(), _map)

#for prop in _map.props:
    #pass

#with open(file+'.2', 'w') as fwp:
    #tf.PrintMessage(out=fwp, message=_map, float_format='.3g')
