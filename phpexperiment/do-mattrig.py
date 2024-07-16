#!/usr/bin/env python3
"""Try to transmute DragonFall maps to Hong Kong."""
import glob
import os

import hk_pb2 as hk
import google.protobuf.text_format as tf


class IoProtoBuf:
    _typed = None
    stored = None

    def __init__(self, typical):
        if not callable(typical):
            return
        self._typed = typical
        self.reset()

    def reset(self):
        self.stored = self._typed()

    def parse_text(self, infile):
        with open(
            infile[:-4] + ".txt", mode="r", encoding="latin-1"
        ) as frp:
            tf.Parse(frp.read(), self.stored)

    def write_text(self, outfile):
        with open(
            outfile[:-4] + ".txt", mode="w", encoding="latin-1"
        ) as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)


if "__main__" == __name__:
    values = {
        'Slave-Door Disable Test': 2,
        'Slave-Camera Disable Test': 2,
        'Access Node-Spoof_Pass (A)': 1,
        'Access Node-Spoof_Pass (B)': 1,
        'CPU Disable Test': 4,
    }

    SL = os.sep
    stem, subdir, ptype = "srt", "scenes", hk.SceneDef
    ipb = IoProtoBuf(ptype)
    glb = glob.iglob(SL.join(["**", "ma*.srt.txt"]), recursive=True)
    for file in glb:
        ipb.parse_text(file)
        tally = 0
        for trigger in ipb.stored.triggers:
            if trigger.name in values.keys():
                tally += 1
                baz = hk.TsCall()
                baz.functionName = 'Get Story Variable (int)'
                buz = hk.TsVariant()
                buz.string_value = '51f15c62336331d02c00440e'
                buz = hk.TsVariant()
                buz.string_value = 'Arena2-xpbits'
                bar = hk.TsVariant(call_value=baz)
                foo = hk.TsCall()
                foo.functionName = 'Add To Variable (int)'
                foo.args.append(bar)
                bar = hk.TsVariant()
                bar.int_value = values[trigger.name]
                foo.args.append(bar)
                trigger.actions.ops.append(foo)
        print(repr([tally, file]))
        if tally != 0:
            ipb.write_text(file)
        ipb.reset()
    print("-30-")
