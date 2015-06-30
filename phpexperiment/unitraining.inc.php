triggers {
  name: "unified Training"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
  conditions {
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
    id: "529961613363310822005749"
  }
  elseActions {
  }
  is_oneshot: true
}
