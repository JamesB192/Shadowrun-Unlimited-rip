#!/usr/bin/python
import os
import re
import stat
import string
import sys

substitute = """
"""

original = re.compile('  name: "Calculate Deck Storage 4', re.M)


def inner_thing(fbase):
    terminate = "\r\n"
    splitter = terminate + "}" + terminate
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    count = 0;
    chunks = blob.split(splitter)
    for chunk in chunks:
        foo = original.search(chunk)
        if foo:
            count += 1
#            tmp1    =  string.replace(chunk, ': 100', ': 500')
#            tmp1    =  string.replace(chunk, ': 50',  ': 250')
#            tmp1    =  string.replace(chunk, ': 25',  ': 100')
            tmp1    =  string.replace(chunk, ': 200', ': 1000')
            result += [tmp1]
        else:
            result += [chunk]
#            count += 1

#    print(splitter.join(result))
    print count,
    try:
        fp = open(fbase, "w")
        fp.write(splitter.join(result))
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
