#!/usr/bin/python
import os
import re
import stat
import sys

inshvy = """
  leyLine {
    leyline_level: 2
    spell_hp_damage_mod: 4
    spell_ap_damage_mod: 2
    spell_cooldown_mod: -1
    spell_accuracy_mod: 0.15
  }
"""

inslig = """
  leyLine {
    leyline_level: 0
    spell_hp_damage_mod: 0
    spell_ap_damage_mod: 0
    spell_cooldown_mod: 0
    spell_accuracy_mod: 0.05
  }
"""

insmed = """
  leyLine {
    leyline_level: 1
    spell_hp_damage_mod: 2
    spell_ap_damage_mod: 1
    spell_cooldown_mod: 0
    spell_accuracy_mod: 0.1
  }
"""

tpat = re.compile('tempbad_leyline_([^\"]+)', re.M)


def inner_thing(fbase):
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
        chunks = blob.split("\n}\n")
        for chunk in chunks:
            foo = tpat.search(chunk)
            if foo:
                bar = foo.group(1)
                flug = re.sub("tempbad_leyline_", "leylines_leyline_", chunk)
                if bar == 'light':
                    flug += inslig
                elif bar == 'medium':
                    flug += insmed
                elif bar == 'heavy':
                    flug += inshvy
                result += [flug]
            else:
                result += [chunk]
    finally:
        fp.close

    try:
        fh = fbase + ".new"
        fp = open(fh, "w")
        fp.write("\n}\n".join(result))
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
