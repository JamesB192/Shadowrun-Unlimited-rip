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


def add_props(node, props, lines):
    # Check how many properties need reset.
    add = set(props.keys())
    for prop in props:
        for preset in node.properties:
            key = preset.property_id
            if key in add:
                add.remove(key)
                preset.string_value = props[key]

    # Add properties not already there
    for prop in list(add):
        print(repr([add, prop, props[prop]]))  # FIXME: commentary
        t = node.properties.add()
        t.property_id = prop
        t.string_value = props[prop]

    # Set Ley Line attributes creatinf as needed
    if not hasattr(node, "leyLine"):
        node.leyLine = hk.LeyLineEffects()
    t = node.leyLine
    for prop in lines:
        setattr(t, prop[0], prop[1])


if "__main__" == __name__:
    props = {
        "light": {
            "leyline_fx_on_tile": "LeyLineLow",
            "leyline_sfx_on_tile": "StandOnLeylineFar",
            "leyline_fx_on_visible": "LeyLineTileLow",
        },
        "medium": {
            "leyline_fx_on_tile": "LeyLineMedium",
            "leyline_sfx_on_tile": "StandOnLeylineMed",
            "leyline_fx_on_visible": "LeyLineTileMed",
        },
        "heavy": {
            "leyline_fx_on_tile": "LeyLineHigh",
            "leyline_sfx_on_tile": "StandOnLeylineClose",
            "leyline_fx_on_visible": "LeyLineTileHigh",
        },
    }
    lines = {
        "light": [
            ["leyline_level", 0],
            ["spell_hp_damage_mod", 0],
            ["spell_ap_damage_mod", 0],
            ["spell_cooldown_mod", 0],
            ["spell_accuracy_mod", 0.05],
        ],
        "medium": [
            ["leyline_level", 1],
            ["spell_hp_damage_mod", 2],
            ["spell_ap_damage_mod", 1],
            ["spell_cooldown_mod", 0],
            ["spell_accuracy_mod", 0.1],
        ],
        "heavy": [
            ["leyline_level", 2],
            ["spell_hp_damage_mod", 4],
            ["spell_ap_damage_mod", 2],
            ["spell_cooldown_mod", -1],
            ["spell_accuracy_mod", 0.15],
        ],
    }
    SL = os.sep
    stem, subdir, ptype = "srm", "maps", hk.MapDef
    ipb = IoProtoBuf(ptype)
    glb = glob.iglob(SL.join(["**", "*.srm.txt"]), recursive=True)
    for file in glb:
        ipb.parse_text(file)
        tally = 0
        for node in ipb.stored.props:
            if node.name.startswith("tempbad_leyline_"):
                end = node.name[16:]
                if end in ("light", "medium", "heavy"):
                    tally += 1
                    add_props(node, props[end], lines[end])
        print(repr([file, tally]))
        if tally != 0:
            ipb.write_text(file)
        ipb.reset()
    print("-30-")
