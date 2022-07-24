#!/usr/bin/env python3
"""Fabricate armor of SR:u Hong Kong or something."""
# import sys
import hk_pb2 as pb
import google.protobuf.text_format as tf

table = [
    [
        "arm",
        1000,
        None,
        "tattoo_arm_air",
        "Magical Tattoo: Fists of Air",
        "The speed of the air makes you more deadly with a blade. +1 Melee Weapons",
        [
            [pb.Specialization_CC_Edged, 1],
        ],
    ],
    [
        "arm",
        1000,
        None,
        "tattoo_arm_earth",
        "Magical Tattoo: Fists of Earth",
        "Your blows have the strength of the earth. +1 Strength",
        [
            [pb.Attribute_Strength, 1],
        ],
    ],
    [
        "arm",
        1000,
        None,
        "tattoo_arm_fire",
        "Magical Tattoo: Fists of Fire",
        "The fists of fire give you an affinity for firearms. +1 Ranged Combat",
        [
            [pb.Skill_RangedCombat, 1],
        ],
    ],
    [
        "arm",
        1000,
        None,
        "tattoo_arm_water",
        "Magical Tattoo: Fists of Water",
        "The flexibility of water makes you a more capable combatant. +1 Close Combat",
        [
            [pb.Skill_CloseCombatCombat, 1],
        ],
    ],
]


class IoProtoBuf:
    _typed = None
    stored = None

    def __init__(self, typical):
        if not callable(typical):
            return
        self._typed = typical
        self.reset()

    def write_text(self, outfile):
        with open(outfile, mode="w", encoding="latin-1") as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)

    def reset(self):
        self.stored = self._typed()


if "__main__" == __name__:
    item = IoProtoBuf(pb.ItemDef)
    for row in table:
        pass
