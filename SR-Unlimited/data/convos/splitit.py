#!/usr/bin/python
import sys


def inner_thing(fbase):
    fnum = 111
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
        chunks = blob.split("\n}\n")
        for chunk in chunks:
            fh = "parts/part-%u" % fnum
            fnum += 1
            try:
                fq = open(fh, "w")
                fq.write(chunk)
                fq.write("\n}")
            finally:
                fq.close
    finally:
        fp.close


# fname = "yakuza lab.srm.txt"
fname = sys.argv[1]

inner_thing(fname)
