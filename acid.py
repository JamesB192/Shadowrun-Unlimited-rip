#!/usr/bin/env python3
"""Try to compile DragonFall extended content packs."""
import glob
import os
import shutil
import subprocess
import tempfile
import zipfile

import phpexperiment.df_pb2 as df_pb2
import google.protobuf.text_format as tf


class IoProtoBuf:
    _typed = None
    stored = None

    def __init__(self, typical):
        if not callable(typical):
            return
        self._typed = typical
        self.reset()

    def compile(self, text, bites):
        self.parse_text(text)
        self.write_bytes(bites)
        self.reset()

    def decompile(self, bites, text):
        self.parse_bytes(bites)
        self.write_text(text)
        self.reset()

    def reset(self):
        self.stored = self._typed()

    def parse_bytes(self, infile):
        with open(infile, mode="rb") as frp:
            self.stored.ParseFromString(frp.read())

    def parse_text(self, infile):
        with open(infile, mode="r") as frp:
            tf.Parse(frp.read(), self.stored)

    def set(self, key, value):
        if not hasattr(self.stored, key):
            return False
        setattr(self.stored, key, value)
        return True

    def write_bytes(self, outfile):
        with open(outfile, mode="wb") as fwp:
            fwp.write(self.stored.SerializeToString())

    def write_text(self, outfile):
        with open(outfile, mode="w") as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)


class ShipLabel:
    _stored = None

    def __init__(self):
        self.reset()

    def add(self, label, size=None, digest=None, hasher=None):
        mine = self._stored.ManifestEntry.Add()
        mine.name = label
        if size != None:
            mine.size = size
        if digest != None:
            mine.digest = digest
        if hasher != None:
            self.digest_method = hasher

    def reset(self):
        self._stored = df_pb2.Manifest()

    def write_bytes(self, outfile):
        with open("manifest.mf.bytes", "wb") as fwp:
            fwp.write(self._stored.SerializeToString())

    def write_text(self, outfile):
        with open("manifest.mf.txt", "w") as fwp:
            tf.PrintMessage(out=fwp, message=self._stored)


def crankzip(parent, indir, outcpz):
    where = os.getcwd()
    try:
        with zipfile.ZipFile(outcpz, "w") as myzip:
            os.chdir(parent)
            for line in glob.iglob(
                indir + os.sep + "**", recursive=True
            ):
                print(line)
                myzip.write(line)
    except Exception as exc:
        print("something went worng...")
        print(repr(exc))
        print(repr(locals()))
    finally:
        os.chdir(where)


def make_copy(idir, odir, subdir, iglob, man=None, xmog=None):
    exc = None
    try:
        if man == None:
            man = ShipLabel()
        idir2 = idir + SL + subdir
        odir2 = odir + SL + subdir
        os.mkdir(odir2)
        glb = glob.iglob(SL.join([idir2, "**", iglob]), recursive=True)
        for myfile in glb:
            rfrag = odir2 + myfile.split(idir2)[1]
            if xmog == None:
                shutil.copy2(myfile, rfrag)
            else:
                xmog.compile(myfile, rfrag)
            print("No Faz!")
            lenny = int(os.stat(odir2+rfrag).st_size)
            print("No Amber!")
            man.add(file, size=lenny)
            print("No Robin!")
        man.write_bytes()
    except Exception as exc:
        print("something went grown...")
        print(repr(exc))
        print(repr(locals()))
        exit(1)


def make_directory(indir, outfile):
    print(os.getcwd())
    tmpdir0 = tempfile.mkdtemp(
        suffix="-work", prefix="DFEcompiler-", dir=os.getcwd()
    )
    _proj = IoProtoBuf(df_pb2.ProjectDef)
    try:
        p1 = Popen(["git", "log", "--pretty=%at", "-1"], stdout=PIPE)
        p2 = Popen(
            [
                "date",
                "-u",
                "+%y/%j-%H:%M",
                "--date=@" + p1.communicate[0],
            ],
            stdin=p1.stdout,
            stdout=PIPE,
        )
        tags = [p2.communicate()[0], ""]
    except Exception:
        tags = ["%Y/%j-%H%MZ", ""]
    try:
        p1 = Popen(
            ["git", "describe", "--tags", "--long", "--dirty"],
            stdout=PIPE,
        )
        p2 = Popen(
            ["sed", "-r's|^([^-]+)-|\1+|g'"],
            stdin=p1.stdout,
            stdout=PIPE,
        )
        p1.stdout.close()  # Allow p1 to receive a SIGPIPE if p2 exits.
        tags[1] = p2.communicate()[0]
    except Exception:
        tags[1] = "Tag+%d-g%09x"
    _proj.parse_text("SR-Unlimited" + os.sep + "project.cpack.txt")
    _proj.set("project_version", " ".join(tags))
    _proj.set("preview_image", "ci-spawn.png")
    o_name = f"{_proj.stored.project_id}-{_proj.stored.project_name}"

    odir1 = tmpdir0 + os.sep + o_name
    os.mkdir(odir1)
    _proj.write_bytes(odir1 + os.sep + "project.cpack.bytes")
    shutil.copy2(indir + SL + "ci-spawn.png", odir1)
    make_copy(indir, odir1, "art", "*.png")

    idir2 = indir + os.sep + "data"
    odir2 = odir1 + os.sep + "data"
    os.mkdir(odir2)
    # stem outdir prototyper
    form = (
        ("item", "items", df_pb2.ItemDef),
        ("ab", "abilities", df_pb2.AbilityDef),
        ("convo", "convos", df_pb2.Conversation),
        ("srm", "maps", df_pb2.MapDef),
        ("srt", "scenes", df_pb2.SceneDef),
        ("ch_inst", "chars", df_pb2.CharacterInstance),
        ("mode", "modes", df_pb2.ModeDef),
        ("pb", "props", df_pb2.PropDef),
        ("eq_sht", "chars", df_pb2.EquipmentSheet),
        ("ch_sht", "chars", df_pb2.Character),
        ("story", "story", df_pb2.StoryDef),
    )
    man = ShipLabel()
    for stem, subdir, ptype in form:
        make_copy(indir, odir2, subdir, "**.%s.txt" % stem, man, ptype)
    # man.write_bytes()

    outcpz = "%s-%s(%s-%s).cpz" % (
        _proj.stored.project_id,
        _proj.stored.project_name,
        tags[1],
        tags[0],
    )
    crankzip(tmpdir0, odir1, outcpz)
    shutil.rmtree(tmpdir0)


def dump_manifests():
    vectors_1 = [
        "Dragonfall:berlin:art",
        "Dragonfall:berlin:data",
        "Dragonfall:dead_man_switch:art",
        "Dragonfall:dead_man_switch:data",
        "Dragonfall:DragonfallExtended:art",
        "Dragonfall:DragonfallExtended:data",
        "Dragonfall:seattle:art",
        "Dragonfall:seattle:data",
        "Dragonfall:shadowrun_core:art",
        "Dragonfall:shadowrun_core:data",
    ]
    vectors_2 = [
        "SRHK:hk_coda:art",
        "SRHK:hk_coda:data",
        "SRHK:HongKong:art",
        "SRHK:HongKong:data",
        "SRHK:shadowrun_core:art",
        "SRHK:shadowrun_core:data",
    ]
    vectors_3 = [
        ["Dragonfall Director's Cut", vectors_1],
        ["Hong Kong", vectors_2],
    ]

    fmt  = "/home/jamesb/.steam/steam/steamapps/"
    fmt += "common/Shadowrun %s/%s_Data/StreamingAssets/"
    fmt += "ContentPacks/%s/%s/manifest.mf.bytes"
    denater = IoProtoBuf(df_pb2.Manifest)

    for index2 in vectors_3:
        for index in index2[1]:
            bits = [index2[0]] + list(index.split(":"))
            src = fmt % tuple(bits)
            denater.decompile(src, index)


if "__main__" == __name__:
    SL = os.sep
    make_directory("SR-Unlimited", ".")
    # dump_manifests()
