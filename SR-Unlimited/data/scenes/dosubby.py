#!/usr/bin/python
import os
import re
import stat
import sys

substitute = """characters {
  name: "chars_icon_playerIcon"
  gridPoint {
    x: -48
    y: 0
    z: 96
  }
  orientation: ORIENTATION_S
  GeneralTags: "Clockwork"
  idRef {
    id: "52c97907336331280d007519"
  }
  lod: 0
  character_instance {
    prefab_name: "Seattle:Story/ThaddeusRyker"
    character_sheet_id: "runner Clockwork"
    character_mod {
      archetypeName: "Player"
      attitude: AttitudeAggressive
      vulnerabilities {
      }
    }
    equipment {
      prefab_name: "smg SSC ak97carbine"
    }
    equipment {
      prefab_name: "DroneRepairKit"
    }
    team_id: "Shadowrunners"
    char_name: "Clockwork"
    GeneralTags: "Clockwork"
    enabled_at_start: false
    pc_spawn_number: -1
    hiring_type: HiringType_None
    cyberware_eyes: "Vision Magnification Eyes 2"
    cyberware_jack: "Datajack"
    cyberware_right_arm: "Obvious Cyberarm"
    portrait {
      filename: "backer_humanmale_jamestbenton"
    }
    karma: 77
    hiring_cost_override: 1000
  }"""

original = re.compile('GeneralTags: "Clockwork"', re.M)


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
            result += [substitute]
        else:
            result += [chunk]

    try:
        fp = open(fbase, "w")
        fp.write("\n}\n".join(result))
#        print("\n}\n".join(result))
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
