import re
# just as an example

originala = [
    re.compile('Runner-Ricky Payment', re.M),
    re.compile('Runner-Verum Payment', re.M),
    re.compile('Runner-Clockwork Payment', re.M),
    re.compile('Runner-Arglye Payment', re.M),
    re.compile('Runner-Trent Payment', re.M),
    re.compile('Runner-SmashJacker Payment', re.M)
    ]
substitutea = [
"""triggers {
  name: "Runner-Ricky Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Ricky"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_Ricky"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Ricky_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 150
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 5
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Contract_Ricky"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Ricky_Damage_Pay"
          }
        }
      }
      args {
        int_value: -25
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "RickyVanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Ricky"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_Ricky_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_Ricky_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c5a9ef3363315c170010d9"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Verum Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Verum"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_Verum"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Verum_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 150
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 10
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Contract_Verum"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Verum_Damage_Pay"
          }
        }
      }
      args {
        int_value: -50
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "VerumVanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Verum"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_Verum_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_Verum_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c5a6a73363315c17000e25"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Clockwork Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Clockwork"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_Clockwork"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Clockwork_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 150
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 10
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Contract_Clockwork"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Clockwork_Damage_Pay"
          }
        }
      }
      args {
        int_value: -50
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "Clockwork Vanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Clockwork"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_Clockwork_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_Clockwork_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c97ee13363318c21000813"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Arglye Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Argyle"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_Argyle"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Argyle_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 200
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 10
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Argyle_Damage_Pay"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Argyle_Damage_Pay"
          }
        }
      }
      args {
        int_value: -50
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "Argyle Vanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Argyle"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_Argyle_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_Argyle_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c97f793363318c21000818"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Trent Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Trent"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_Trent"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Trent_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 200
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 15
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Contract_Trent"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Trent_Damage_Pay"
          }
        }
      }
      args {
        int_value: -50
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "Trent Vanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Hired_Runner_Trent"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_Trent_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_Trent_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c984213363318c2100087b"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-SmashJacker Payment"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "Job\'s Over"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (bool)"
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
  actions {
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
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
                    string_value: "Contract_SmashJacker"
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
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "SmashJacker_Damage_Pay"
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
                        int_value: 0
                      }
                    }
                  }
                  args {
                    int_value: 200
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 100
          }
        }
      }
    }
    ops {
      functionName: "Remove Nuyen"
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Arithmetic (int)"
                  args {
                    int_value: 15
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
                    call_value {
                      functionName: "Get Story Variable (int)"
                      args {
                        string_value: "51f15c62336331d02c00440e"
                      }
                      args {
                        string_value: "Contract_SmashJacker"
                      }
                    }
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
                call_value {
                  functionName: "Get Story Variable (int)"
                  args {
                    string_value: "51f15c62336331d02c00440e"
                  }
                  args {
                    string_value: "Pay"
                  }
                }
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
                int_value: 3
              }
            }
          }
          args {
            int_value: 10000
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "SmashJacker_Damage_Pay"
          }
        }
      }
      args {
        int_value: -50
      }
    }
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "SmashJacker Vanish"
          }
        }
      }
    }
    ops {
      functionName: "Add To Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "TeamCount"
          }
        }
      }
      args {
        int_value: -1
      }
    }
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Runner_SmashJacker_Loyalty"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Arithmetic (int)"
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
                        string_value: "Runner_SmashJacker_Loyalty"
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
                    int_value: 19
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
                    int_value: 3
                  }
                }
              }
              args {
                int_value: 20
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
                int_value: 0
              }
            }
          }
          args {
            int_value: 2
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "52c97e0e3363318c21000996"
  }
  elseActions {
  }
  is_oneshot: false"""
]
