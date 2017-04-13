#!/usr/bin/python
import os
import re
import stat
import sys

substitute = """triggers {
  name: "Runner-Smash Jacker Load"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Evaluate If Actor is Inside Region"
      args {
        call_value {
          functionName: "All Actors With Tag"
          args {
            call_value {
              functionName: "Get Map Item (SenseTagList)"
              args {
                string_value: "Smash Jacker"
              }
            }
          }
          args {
            call_value {
              functionName: "Get Preset Value (int)"
              args {
                string_value: "AllOrAny"
              }
              args {
                int_value: 1
              }
            }
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "AreOrAreNot"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        call_value {
          functionName: "Get Map Item (Region)"
          args {
            string_value: "543ea6ee363735ec180067a0"
          }
        }
      }
    }
  }
  actions {
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Smash_Jacker"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "58d80c953037369c2670f987"
  }
  elseActions {
  }
  is_oneshot: true"""

original = re.compile('name: "Runner-SmashJacker Load"', re.M)


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
