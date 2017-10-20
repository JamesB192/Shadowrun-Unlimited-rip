#!/usr/bin/python
import os
import re
import stat
import sys

substitute = """triggers {
  name: "Body Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "FitnessTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Main_Health"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Actor Attribute"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
            call_value {
              functionName: "Get Preset Value (int)"
              args {
                string_value: "BaseOrCurrent"
              }
              args {
                int_value: 1
              }
            }
          }
          args {
            call_value {
              functionName: "Get Preset Value (int)"
              args {
                string_value: "ActorAttributes"
              }
              args {
                int_value: 8
              }
            }
          }
        }
      }
    }
    ops {
      functionName: "Apply Attribute Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Get Story Variable (int)"
              args {
                string_value: "51f15c62336331d02c00440e"
              }
              args {
                string_value: "FitnessTraining"
              }
            }
          }
          args {
            call_value {
              functionName: "Get Preset Value (int)"
              args {
                string_value: "Arithmetic Ops"
              }
              args {
                int_value: 2
              }
            }
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorAttributes"
          }
          args {
            int_value: 0
          }
        }
      }
      args {
        string_value: "Fitness Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 0
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Actor Base Attribute"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Main_Health"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorAttributes"
          }
          args {
            int_value: 8
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "529961613363310822005749"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Combat Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "CombatTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "CombatTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        string_value: "Close Combat Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "5299617a336331082200574a"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Decker Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "DeckerTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "DeckerTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 5
          }
        }
      }
      args {
        string_value: "Decking Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "52996195336331082200574b"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Drone Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "DroneTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "DroneTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 10
          }
        }
      }
      args {
        string_value: "Drone Control Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "529961b0336331082200574c"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "FireArms Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "FireArmsTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "FireArmsTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 0
          }
        }
      }
      args {
        string_value: "Firearms Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "529961c8336331082200574d"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Spell Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "SpellTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "SpellTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 3
          }
        }
      }
      args {
        string_value: "Spellcraft Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "529961e6336331082200574e"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Summon Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
    ops {
      functionName: "Comparison (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "SummonTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "Comparison Ops"
          }
          args {
            int_value: 2
          }
        }
      }
      args {
        int_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Apply Skill Status Effect to Actor"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 0
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "SummonTraining"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "ActorSkills"
          }
          args {
            int_value: 8
          }
        }
      }
      args {
        string_value: "Summoning Training"
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "BuffDebuffType"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        int_value: -1
      }
    }
  }
  isActive: true
  idRef {
    id: "52996202336331082200574f"
  }
  elseActions {
  }
  is_oneshot: true"""

original = re.compile('name: "unified Training innate"', re.M)


def inner_thing(fbase):
    terminate = "\n"
    splitter = terminate + "}" + terminate
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    chunks = blob.split(splitter)
    for chunk in chunks:
        foo = original.search(chunk)
        if foo:
            result += [substitute]
        else:
            result += [chunk]

#    print(splitter.join(result))
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
