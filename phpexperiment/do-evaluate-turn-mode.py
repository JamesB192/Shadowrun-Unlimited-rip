#!/usr/bin/env python3
"""Try to transmute DragonFall maps to Hong Kong."""
import glob
import os

import phpexperiment.hk_pb2 as hk
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


def cook_node(node):
    node.functionName = "Evaluate Turn Mode in Dimension"
    tmp = node.args.add()
    tmp.call_value.functionName = "Get Map Item (SceneDimension)"
    tmp = tmp.call_value.args.add() 
    tmp.string_value = "Default"


if "__main__" == __name__:
    SL = os.sep
    stem, subdir, ptype = "srt", "scenes", hk.SceneDef
    ipb = IoProtoBuf(ptype)
    glb = glob.iglob(SL.join(["**", "*.srt.txt"]), recursive=True)
    for file in glb:
        ipb.parse_text(file)
        tally = 0
        for node in ipb.stored.triggers:
            for op in node.conditions.ops:
                if "Evaluate Turn Mode" == op.functionName:
                    cook_node(op)
                    tally += 1
        if tally != 0:
            print(repr([file, tally]))
            ipb.write_text(file)
        ipb.reset()
    print("-30-")
