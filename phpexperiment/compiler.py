#!/usr/bin/env python3
# -*- coding: utf-8 -*-
# Copyright James Browning
# SPDX-License-Identifier: CC-BY-NC-SA-4.0
"""Try to compile DragonFall extended content packs."""

import argparse
import glob
import os
import shutil
import sys
import tempfile
import zipfile
import polib
import google.protobuf.text_format as tf


def parse_file(infile, type_instance):
    with open(infile, "r") as frp:
        tf.Parse(frp.read(), type_instance)


def write_file(outfile, instance):
    with open(outfile, "wb") as fwp:
        fwp.write(instance.SerializeToString())


def make_directory(indir, outdir):
    _proj = proto.ProjectDef()

    parse_file(indir + os.sep + "project.cpack.txt", _proj)
    o_name = f"{_proj.project_id}-{_proj.project_name}"

    odir0 = tempfile.mkdtemp(
        suffix="-work", prefix="DFEcompiler-", dir=outdir
    )
    odir1 = odir0 + os.sep + o_name
    os.mkdir(odir1)
    write_file(odir1 + os.sep + "project.cpack.bytes", _proj)
    shutil.copy2(indir + os.sep + "preview.png", odir1)

    idir2 = indir + os.sep + "art"
    odir2 = odir1 + os.sep + "art"
    os.mkdir(odir2)
    _man = proto.Manifest()
    glb = glob.iglob(
        "%s%s**%s*.png" % (idir2, os.sep, os.sep), recursive=True
    )
    for num, file in enumerate(glb, start=1):
        _entry = _man.entries.add()
        _entry.name = file.split(os.sep)[-1]
        _entry.size = os.stat(file).st_size
        shutil.copy2(file, odir2)
        sys.stderr.write("art %d: %s\n" % (num, file.split(os.sep)[-1]))
    sys.stderr.write("\n")
    write_file(odir2 + os.sep + "manifest.mf.bytes", _man)

    idir2 = indir + os.sep + "data"
    odir2 = odir1 + os.sep + "data"
    os.mkdir(odir2)
    _man = proto.Manifest()
    # stem outdir prototyper
    form = (
        ("item", "items", proto.ItemDef),
        ("ab", "abilities", proto.AbilityDef),
        ("convo", "convos", proto.Conversation),
        ("srm", "maps", proto.MapDef),
        ("srt", "scenes", proto.SceneDef),
        ("ch_inst", "chars", proto.CharacterInstance),
        ("mode", "modes", proto.ModeDef),
        ("pb", "props", proto.PropDef),
        ("eq_sht", "chars", proto.EquipmentSheet),
        ("ch_sht", "chars", proto.Character),
        ("story", "stories", proto.StoryDef),
    )
    for stem, subdir, ptype in form:
        odir3 = odir2 + os.sep + subdir
        try:
            os.mkdir(odir3)
        except FileExistsError:
            pass
        glb = glob.iglob(
            "%s%s**%s*.%s.txt" % (idir2, os.sep, os.sep, stem),
            recursive=True,
        )
        for num, file in enumerate(glb, start=1):
            this_file = ptype()
            parse_file(file, this_file)
            out_file = odir3 + os.sep + file.split(os.sep)[-1][:-3] + "bytes"
            write_file(out_file, this_file)
            _entry = _man.entries.add()
            _entry.name = os.sep.join(out_file.split(os.sep)[-3:])
            _entry.size = os.stat(out_file).st_size
            sys.stderr.write("%s: %d\r" % (stem, num))
        sys.stderr.write("\n")
    write_file(odir2 + os.sep + "manifest.mf.bytes", _man)

    odir3 = os.sep.join([odir2, "misc"])
    idir3 = os.sep.join([idir2, "misc"])
    glb = glob.iglob(idir3 + os.sep + "*.txt")
    os.mkdir(odir3)
    for num, file in enumerate(glb, start=1):
        shutil.copy2(file, odir3)
        sys.stderr.write("misc: %d\r" % num)
    sys.stderr.write("\n")

    os.mkdir(os.sep.join([odir1, "resources"]))
    os.mkdir(os.sep.join([odir1, "resources", "locale"]))
    for num, lang in enumerate(('de', 'es', 'fr', 'ru'), start=1):
        po = polib.pofile(os.sep.join([indir, "resources", "locale", "%s.po" % lang]))
        modata = po.to_binary()
        po.save_as_mofile(os.sep.join([odir1, "resources", "locale", "%s.mo" % lang]))
        sys.stderr.write("lang %d: %s\r" % (num, lang))
    sys.stderr.write("\n")

    with zipfile.ZipFile(
        outdir + os.sep + o_name + ".cpz", "w"
    ) as myzip:
        cwd = os.getcwd()
        os.chdir(odir0)
        manifest = list(glob.iglob("**", recursive=True))
        for num, line in enumerate(sorted(manifest), start=1):
            myzip.write(line)
            sys.stderr.write("cpz: %d\r" % num)
        sys.stderr.write("\n")
        os.chdir(cwd)
    #shutil.rmtree(odir0)


if "__main__" == __name__:
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument(
        "-p",
        "--pack",
        choices=["re", "df", "hk", "hkci", "stableish"],
        help="choose whether REturns, DragonFall, or HongKong format",
    )
    parser.add_argument("directory", type=str, nargs=1)
    args = parser.parse_args()
    if args.pack in ["hk", "hkci"]:
        import hk_pb2 as proto
    elif args.pack in ["df", "stableish"]:
        import df_pb2 as proto
    else:
        import re_pb2 as proto

    if args.directory:
        make_directory(args.directory[0], ".")
    print("-30-")
