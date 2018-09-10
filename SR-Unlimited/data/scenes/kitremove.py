#!/usr/bin/python
import os
import re
import stat
import sys

substitute = """
"""

splitter = """
    equipment {
      prefab_name: "GhoulFist"
    }
"""


def inner_thing(fbase):
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    chunks = blob.split(splitter)
    for chunk in chunks:
        # foo = original.search(chunk)
        # if foo:
        #     result += [substitute]
        # else:
            result += [chunk]

#    print(splitter.join(result))
    try:
        fp = open(fbase, "w")
        fp.write(substitute.join(result))
    finally:
        fp.close


def descend():
    for f in os.listdir("."):
        mode = os.stat(f).st_mode
        if stat.S_ISREG(mode) and True:
            inner_thing(f)


# fname = "yakuza lab.srm.txt"
fname = sys.argv[1]

inner_thing(fname)
