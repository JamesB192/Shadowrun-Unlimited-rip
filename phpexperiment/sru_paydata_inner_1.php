  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (int)"
        args {
          int_value: <?php /* 4 */ ?>
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
          call_value {
            functionName: "Get Variable (int)"
            args {
              string_value: "PayData"
            }
          }
        }
      }
      ops {
        functionName: "Evaluate If Actor Has Item"
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
            functionName: "Get Preset Value (int)"
            args {
              string_value: "HasOrHasNot"
            }
            args {
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Map Item (Item)"
            args {
              string_value: "Pay Data <?php /* 22 */ ?>"
            }
          }
        }
      }
    }
    actions {
      ops {
        functionName: "Cause Damage"
        args {
          call_value {
            functionName: "Specific Actor"
            args {
              call_value {
                functionName: "Triggering Actor"
              }
            }
            args {
            }
          }
        }
        args {
          int_value: 1
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "HPOrAP"
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
              string_value: "WithOrWithout"
            }
            args {
              int_value: 1
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
              string_value: "Deck_Storage_FileCount"
            }
          }
        }
        args {
          int_value: 1
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
              string_value: "Deck_Storage_Used"
            }
          }
        }
        args {
          int_value: <?php /* 100 */ ?>
        }
      }
      ops {
        functionName: "Add Item to Actor"
        args {
          call_value {
            functionName: "Get Map Item (Item)"
            args {
              string_value: "Pay Data <?php /* 22 */ ?>"
            }
          }
        }
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
            functionName: "Get Preset Value (int)"
            args {
              string_value: "WithOrWithout"
            }
            args {
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: -1
    comment: "<?php /* 4 */ ?>"
  }
