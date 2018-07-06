#!/usr/bin/python
import dosubby2
# import os
# import re
# import stat
import sys

def inner_thing(fbase):
    terminate = "\n"
    splitter = terminate + "}" + terminate
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    count = 0
    chunks = blob.split(splitter)
    for chunk in chunks:
        foo = dosubby2.original.search(chunk)
        if foo:
            count += 1
            result += [dsubby2.substitute]
        else:
            result += [chunk]
#            count += 1
#    print(splitter.join(result))
    print('%d\t%s' % (count, fbase))
    try:
        fp = open(fbase, "w")
        fp.write(splitter.join(result))
    finally:
        fp.close


fname = sys.argv[1]
inner_thing(fname)
