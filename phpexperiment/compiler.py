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

    idir2 = indir + os.sep + "art"
    odir2 = odir1 + os.sep + "art"
    os.mkdir(odir2)
    _man = proto.Manifest()
    glb = glob.iglob(
        "%s%s**%s*.png" % (idir2, os.sep, os.sep), recursive=True
    )
    for num, file in enumerate(glb, start=1):
        _entry = proto.ManifestEntry()
        _entry.name = file.split(os.sep)[-1]
        shutil.copy2(file, odir2)
        sys.stderr.write("art: %d\r" % num)
    sys.stderr.write("\n")
    write_file(odir2 + os.sep + "manifest.mf.bytes", _proj)

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
        ("story", "story", proto.StoryDef),
    )
    for stem, subdir, ptype in form:
        odir3 = odir2 + os.sep + subdir
        try:
            os.mkdir(odir3)
        except FileExistsError:
            pass
        _man = proto.Manifest()
        glb = glob.iglob(
            "%s%s**%s*.%s.txt" % (idir2, os.sep, os.sep, stem),
            recursive=True,
        )
        for num, file in enumerate(glb, start=1):
            _entry = proto.ManifestEntry()
            _entry.name = subdir + os.sep + file.split(os.sep)[-1]
            this_file = ptype()
            parse_file(file, this_file)
            write_file(odir2 + os.sep + _entry.name, this_file)
            sys.stderr.write("%s: %d\r" % (stem, num))
        sys.stderr.write("\n")
    write_file(odir2 + os.sep + "manifest.mf.bytes", _proj)

    with zipfile.ZipFile(
        outdir + os.sep + o_name + ".cpz", "w"
    ) as myzip:
        cwd = os.getcwd()
        os.chdir(odir1)
        for num, line in enumerate(glob.iglob("**", recursive=True), start=1):
            myzip.write(line)
            sys.stderr.write("cpz: %d\r" % num)
        sys.stderr.write("\n")
        os.chdir(cwd)
    shutil.rmtree(odir0)


if "__main__" == __name__:
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument(
        "-p",
        "--pack",
        choices=["re", "df", "hk"],
        help="choose whether REturns, DragonFall, or HongKong format",
    )
    parser.add_argument("directory", type=str, nargs=1)
    args = parser.parse_args()
    if args.pack == "hk":
        import hk_pb2 as proto
    elif args.pack == "df":
        import df_pb2 as proto
    else:
        import re_pb2 as proto

    if args.directory:
        make_directory(args.directory[0], ".")
    print("-30-")
