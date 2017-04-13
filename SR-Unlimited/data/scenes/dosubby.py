#!/usr/bin/python
import os
import re
import stat
import sys

substitute = """roster_overrides {
  roster_entries {
    reference_id: "Runner_Argyle"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_Argyle"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }
  roster_entries {
    reference_id: "Runner_Clockwork"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_Clockwork"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }
  roster_entries {
    reference_id: "Runner_Ricky"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_Ricky"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }
  roster_entries {
    reference_id: "Runner_SmashJacker"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_SmashJacker"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }
  roster_entries {
    reference_id: "Runner_Trent"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_Trent"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }
  roster_entries {
    reference_id: "Runner_Verum"
    hiring_conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Met_Verum"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "IsOrIsNot"
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
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
    }
    hiring_cost: -1
    content_pack_source: ""
  }"""

original = re.compile('roster_overrides {', re.M)


def inner_thing(fbase):
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    chunks = blob.split("\r\n}\r\n")
    for chunk in chunks:
        foo = original.search(chunk)
        if foo:
            result += [substitute]
        else:
            result += [chunk]

    try:
        fp = open(fbase, "w")
        fp.write("\r\n}\r\n".join(result))
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
