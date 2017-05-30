#!/usr/bin/python
import os
import re
import stat
import sys


original = re.compile('pc_spawn_number: 3', re.M)


def inner_thing(fbase):
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    chunks = blob.split("\n}\n")
    for chunk in chunks:
        foo = original.search(chunk)
        if foo:
            print chunk


def descend():
    for f in os.listdir("."):
        mode = os.stat(f).st_mode
        if stat.S_ISREG(mode) and True:
            inner_thing(f)

# fname = "yakuza lab.srm.txt"
fname = sys.argv[1]

inner_thing(fname)
