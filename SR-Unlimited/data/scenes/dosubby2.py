# just as an example

original_text_fragments = [
    "invisible runner?"
    ]
replacement_text_fragments = [
"""triggers {
  name: "spawn invisible runnner"
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
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 1
              }
            }
          }
          args {
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
            int_value: 0
          }
        }
      }
      args {
        call_value {
          functionName: "Get Map Item (Region)"
          args {
            string_value: "54517874363735ac050020f1"
          }
        }
      }
    }
    ops {
      functionName: "Evaluate If Actor is Inside Region"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 2
              }
            }
          }
          args {
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
            int_value: 0
          }
        }
      }
      args {
        call_value {
          functionName: "Get Map Item (Region)"
          args {
            string_value: "54517874363735ac050020f1"
          }
        }
      }
    }
    ops {
      functionName: "Evaluate If Actor is Inside Region"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Player)"
              args {
                int_value: 3
              }
            }
          }
          args {
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
            int_value: 0
          }
        }
      }
      args {
        call_value {
          functionName: "Get Map Item (Region)"
          args {
            string_value: "54517874363735ac050020f1"
          }
        }
      }
    }
    ops {
      functionName: "Invert Bool"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "riskPermaDeath"
          }
        }
      }
    }
  }
  actions {
    ops {
      functionName: "Change Actor Team"
      args {
        call_value {
          functionName: "Specific Actor"
          args {
            call_value {
              functionName: "Get Map Item (Actor)"
              args {
                string_value: "5263ff8e3363311c210066c7"
              }
            }
          }
          args {
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (string)"
          args {
            string_value: "FactionList"
          }
          args {
            int_value: 0
          }
        }
      }
      args {
        call_value {
          functionName: "Get Map Item (SceneDimension)"
          args {
            string_value: "Default"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "5a8c4fb2343032c0250068c5"
  }
  elseActions {
  }
  is_oneshot: true"""
]
