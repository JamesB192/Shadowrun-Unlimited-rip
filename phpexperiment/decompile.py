#!/usr/bin/env python3
"""Try to compile DragonFall extended content packs."""
import os
import sys

import hk_pb2 as proto
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
        with open(
            infile, mode="r", encoding="latin-1"
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
        with open(outfile, mode="wb") as fwp:
            fwp.write(self.stored.SerializeToString())

    def write_text(self, outfile):
        with open(
            outfile, mode="w", encoding="latin-1"
        ) as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)


def decompile(name):
    form = (
        ("pb", "props", proto.PropDef),
        ("ab", "abilities", proto.AbilityDef),
        ("convo", "convos", proto.Conversation),
        ("srm", "maps", proto.MapDef),
        ("srt", "scenes", proto.SceneDef),
        ("ch_inst", "chars", proto.CharacterInstance),
        ("mode", "modes", proto.ModeDef),
        ("eq_sht", "chars", proto.EquipmentSheet),
        ("ch_sht", "chars", proto.Character),
        ("cvf", "chars", proto.CharacterVariant),
        ("item", "items", proto.ItemDef),
        ("story", "stories", proto.StoryDef),
    )
    # Strip down to just file nae and change extension, ugh.
    oname = '.'.join(name.split('/')[-1].split('.')[:-1])+'.txt'
    for item in form:
        if item[0] in name.lower():
            ipb = IoProtoBuf(item[2])
            ipb.parse_bytes(name)
            ipb.write_text(oname)
            print(oname, '->', oname)
            return


if "__main__" == __name__:
    SL = os.sep
    for fname in sys.argv:
        decompile(fname)
    print('-30-')
