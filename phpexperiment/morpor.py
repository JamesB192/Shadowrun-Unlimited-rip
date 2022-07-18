#!/usr/bin/env python3
"""Try to add portraits to Shadowrun Hong Kong."""
import sys
import re_pb2 as pb


sexmap = [
    ['female', pb.Gender_Female],
    ['male', pb.Gender_Male],
    ]
racemap = [
    ["human", pb.Race_Human],
    ["dwarf", pb.Race_Dwarf],
    ["elf", pb.Race_Elf],
    ["ork", pb.Race_Ork],
    ["troll", pb.Race_Troll],
    ["dragon", pb.Race_Dragon],
    ["ghoul", pb.Race_Ghoul],
    ["spirit", pb.Race_Spirit],
    ["drone", pb.Race_Drone],
    ["object", pb.Race_Object],
    ["creature", pb.Race_Creature],
    ["bug", pb.Race_Bug],
    ["freespirit", pb.Race_FreeSpirit],
    ["freedrone", pb.Race_FreeDrone],
    ["matrix", pb.Race_Matrix],
    ["matrixesp", pb.Race_MatrixESP],
    ]


def map_str_from_num(mapped, num):
    tmp = map(lambda x: x[1], mapped)
    if num in tmp:
        return mapped[tmp.index(num)][1]
    return str(num)


if "__main__" == __name__:
    with open("hongkong.pl.bytes", mode="rb") as frp:
        instance = pb.PortraitList()
        instance.ParseFromString(frp.read())

    for name in sys.argv[1:]:
        entry = instance.entry.new()
        lname = name.lower()
        entry.gender = pb.Gender_None
        for entry in sexmap:
            if entry[0] in lname:
                entry.gender = getattr(sexmap, entry[0])
                break
        entry.race = pb.Gender_None
        for entry in racemap:
            if entry[0] in lname:
                entry.race = getattr(racemap, entry[0])
                break

    for entry in instance.entries:
        print("%14s\t%6s\t'%s'" % (
              map_str_from_num(racemap, entry.race),
              map_str_from_num(sexmap, entry.gender),
              entry.value))

    sys.exit(0)
    if 1 < len(sys.argv):
        with open("hongkong.pl.bytes", 'wb') as fwp:
            fwp.write(instance.SerializeToString())
