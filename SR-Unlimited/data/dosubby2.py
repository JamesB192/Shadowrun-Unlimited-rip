# just as an example

original_text_fragments = [
    "stock paydata 1 3 6 7 6 3 1",
    ]
replacement_text_fragments = [
    """triggers {
  name: "on(CurtainUp) stock paydata 1 3 6 7 6 3 1"
  events {
    ops {
      functionName: "On Curtains Up"
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
            string_value: "Matrix-Paydata1"
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
            int_value: 0
          }
        }
      }
      args {
        int_value: -1
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
            string_value: "Matrix-Paydata1"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Random (int)"
              args {
                int_value: 0
              }
              args {
                int_value: 2
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
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
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
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
                  }
                }
              }
            }
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
            string_value: "Matrix-Paydata2"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Random (int)"
              args {
                int_value: 0
              }
              args {
                int_value: 2
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
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
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
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
                  }
                }
              }
            }
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
            string_value: "Matrix-Paydata3"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Random (int)"
              args {
                int_value: 0
              }
              args {
                int_value: 2
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
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
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
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
                  }
                }
              }
            }
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
            string_value: "Matrix-Paydata4"
          }
        }
      }
      args {
        call_value {
          functionName: "Arithmetic (int)"
          args {
            call_value {
              functionName: "Random (int)"
              args {
                int_value: 0
              }
              args {
                int_value: 2
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
            call_value {
              functionName: "Arithmetic (int)"
              args {
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
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
                call_value {
                  functionName: "Random (int)"
                  args {
                    int_value: 0
                  }
                  args {
                    int_value: 2
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "5aa4506a3430323441006d2f"
  }
  elseActions {
  }
  is_oneshot: true""",
]
