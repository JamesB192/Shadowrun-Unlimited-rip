#!/usr/bin/python
from dosubby2 import original_text_fragment, replacement_text
import os
import re
import stat


class dosubby:
    new = []
    old = []
    common = 0

    def __init__(self, a, b):
        self.old = a
        self.new = b
        self.common = min(len(a), len(b))

    def fileEdit(self, fname):
        lenny = 0
        result = []
        count = 0
        uncount = 0

        try:
            fp = open(fname, "r")
            blob = fp.read(4000000)
        finally:
            fp.close

        for x in ['\n', '\r\n', '\r']:
            splitter = x + "}" + x
            chunks = blob.split(splitter)
            lenny = len(chunks)
            if lenny > 1:
                break

        for chunk in chunks:
            swapped = False
            for x in range(self.common):
                foo = self.old[x].search(chunk)
                if foo:
                    count += 1
                    result += [self.new[x]]
                    swapped = True
            if not swapped:
                result += [chunk]
                uncount += 1
        print('%4d\t%4d\t%4d\t%s' % (count, uncount,
                                     (len(chunks)-count-uncount), fname))
        try:
            fp = open(fname, "w")
            fp.write(splitter.join(result))
        finally:
            fp.close

    def descend(self, dir):
        txt = re.compile('.*\.txt')
        for f in os.listdir(dir):
            mode = os.stat(f).st_mode
            if stat.S_ISREG(mode) and txt.search(f):
                self.fileEdit(f)


if __name__ == '__main__':
    from sys import argv
    foo = dosubby(original_text_fragment, replacement_text)
    if len(argv) < 2:
        file = "graveyard.srt.txt"
    else:
        file = argv[1]
    foo.fileEdit(file)
