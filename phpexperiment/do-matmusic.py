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

    SL = os.sep
    stem, subdir, ptype = "srt", "scenes", hk.SceneDef
    ipb = IoProtoBuf(ptype)
    glb = glob.iglob(SL.join(["**", "m*.srt.txt"]), recursive=True)
    for file in glb:
        ipb.parse_text(file)
        tally = 0
        for region in ipb.stored.regions:
            if region.is_camera_region:
                tally += 1
                region.combat_music = "HongKong-Combat-Matrix2"
                region.default_music = "HongKong-Stealth-Matrix1"
                region.combat_intense_music = "HongKong-Combat-Matrix2"
                region.combat_wrapup_music = "Silence"
        print(repr([file, tally]))
        if tally != 0:
            ipb.write_text(file)
        ipb.reset()
    print("-30-")
