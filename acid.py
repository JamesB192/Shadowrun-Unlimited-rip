#!/usr/bin/env python3
"""Try to compile DragonFall extended content packs."""
import glob
import os
import shutil
import subprocess as SP
import tempfile
import time
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
        with open(infile[:-4] + ".bytes", mode="rb") as frp:
            self.stored.ParseFromString(frp.read())

    def parse_text(self, infile):
        with open(
            infile[:-4] + ".txt", mode="r", encoding="latin-1"
        ) as frp:
            tf.Parse(frp.read(), self.stored)

    def get(self, key):
        return getattr(self.stored, key)

    def set(self, key, value):
        if not hasattr(self.stored, key):
            return False
        setattr(self.stored, key, value)
        return True

    def write_bytes(self, outfile):
        with open(outfile[:-4] + ".bytes", mode="wb") as fwp:
            fwp.write(self.stored.SerializeToString())

    def write_text(self, outfile):
        with open(
            outfile[:-4] + ".txt", mode="w", encoding="latin-1"
        ) as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)


class ShipLabel:
    _stored = None

    def __init__(self):
        self.reset()

    def add(self, label, size=None, digest=None, hasher=None):
        mine = self._stored.entries.add()
        mine.name = label
        if size is not None:
            mine.size = size
        if digest is not None:
            mine.digest = digest
        if hasher is not None:
            self.digest_method = hasher

    def reset(self):
        self._stored = df_pb2.Manifest()

    def write_bytes(self):
        with open("manifest.mf.bytes", "wb") as fwp:
            fwp.write(self._stored.SerializeToString())

    def write_text(self):
        with open("manifest.mf.txt", "w", encoding="latin-1") as fwp:
            tf.PrintMessage(out=fwp, message=self._stored)


def crankzip(parent, indir, outcpz):
    where = os.getcwd()
    try:
        os.chdir(parent)
        with zipfile.ZipFile(outcpz, "w") as myzip:
            for line in glob.iglob(indir + SL + "**", recursive=True):
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
        if man is None:
            man = ShipLabel()
        idir2 = idir + SL + subdir
        odir2 = odir + SL + subdir
        try:
            os.mkdir(odir2)
        except FileExistsError:
            pass
        glb = glob.iglob(SL.join([idir2, "**", iglob]), recursive=True)
        for myfile in glb:
            rfrag = odir2 + myfile.split(idir2)[1]
            scub = SL.join(rfrag.split(SL)[:-1])
            try:
                os.mkdir(scub)
            except FileExistsError:
                pass
            if xmog is None:
                shutil.copy2(myfile, rfrag)
            else:
                xmog.compile(myfile, rfrag)
            lenny = int(os.stat(rfrag).st_size)
            man.add(myfile, size=lenny)
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
    try:
        with SP.Popen(
            ["git", "log", "--pretty=%at", "-1"], stdout=SP.PIPE
        ) as pipe_one:
            out = str(pipe_one.communicate()[0])[2:-3]
            out = time.gmtime(int(out))
            tags = [time.strftime("%y%j-%H%MZ ", out), ""]
    except Exception:
        tags = ["%Y/%j-%H%MZ ", ""]
    try:
        with SP.Popen(
            ["git", "describe", "--tags", "--long", "--dirty"],
            stdout=SP.PIPE,
        ) as pipe_one:
            out = str(pipe_one.communicate()[0])[2:-3]
            out = out.split("-")
            tags[1] = "%s+%s" % (out[0], "-".join(out[1:]))
    except Exception:
        tags[1] = "Tag+%d-g%09x"
    _proj = IoProtoBuf(df_pb2.ProjectDef)
    _proj.parse_text("SR-Unlimited" + SL + "project.cpack.txt")
    _proj.set("project_version", " ".join(tags))
    _proj.set("preview_image", "ci-spawn.png")
    _proj.set("read_only", True)
    o_name = f"{_proj.stored.project_id}-{_proj.stored.project_name}"

    _sto = IoProtoBuf(df_pb2.StoryDef)
    _sto.parse_text(
        SL.join(["SR-Unlimited", "data", "stories", "story.story.txt"])
    )
    _tmp = _sto.get('description')
    _sto.set("description", _tmp % (tags[0], "EOL CI"))

    _co = IoProtoBuf(df_pb2.ItemDef)
    _co.parse_text(
        SL.join(
            [
                "SR-Unlimited",
                "data",
                "items",
                "Quest",
                "Commlink.item.txt",
            ]
        )
    )
    _tmp = _co.stored.uirep
    _tmp = _tmp.description % tags[0] + "EOL CI"
    _co.stored.uirep.description = _tmp

    odir1 = tmpdir0 + SL + o_name
    os.mkdir(odir1)

    _proj.write_bytes(odir1 + SL + "project.cpack.txt")
    _sto.write_bytes(
        SL.join([odir1, "data", "stories", "story.story.txt"])
    )
    _co.write_bytes(
        SL.join(
            [
                "SR-Unlimited",
                "data",
                "items",
                "Quest",
                "Commlink.item.txt",
            ]
        )
    )
    shutil.copy2(indir + SL + "ci-spawn.png", odir1)
    make_copy(indir, odir1, "art", "*.png")

    idir2 = indir + SL + "data"
    odir2 = odir1 + SL + "data"
    os.mkdir(odir2)
    # stem outdir prototyper
    form = (
        ("pb", "props", df_pb2.PropDef),
        ("ab", "abilities", df_pb2.AbilityDef),
        ("convo", "convos", df_pb2.Conversation),
        ("srm", "maps", df_pb2.MapDef),
        ("srt", "scenes", df_pb2.SceneDef),
        ("ch_inst", "chars", df_pb2.CharacterInstance),
        ("mode", "modes", df_pb2.ModeDef),
        ("eq_sht", "chars", df_pb2.EquipmentSheet),
        ("ch_sht", "chars", df_pb2.Character),
        ("item", "items", df_pb2.ItemDef),
    )
    man = ShipLabel()
    for stem, subdir, ptype in form:
        ipb = IoProtoBuf(ptype)
        make_copy(idir2, odir2, subdir, "**.%s.txt" % stem, man, ipb)
    # man.write_bytes()

    outcpz = "%s-%s(%s-%s).cpz" % (
        _proj.stored.project_id,
        _proj.stored.project_name,
        tags[1],
        tags[0],
    )
    crankzip(tmpdir0, odir1, outcpz)
    print("Self clean")
    # shutil.rmtree(tmpdir0)


if "__main__" == __name__:
    SL = os.sep
    make_directory("SR-Unlimited", ".")
    # dump_manifests()
