nodes {
  idRef {
    id: "537d7687303266d80e004bff"
  }
  index: <?php echo $a[0]."\n"; ?>
  text: "<?php echo $a[4]."\"\n";
	foreach($a[5] as $b) {
		printf("  branches {\n    responseText: \"%s\"\n    nextNodeIndex: %u\n  }\n", $b, ($a[0]+2));
	  }
?>
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
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
              string_value: "Custom_Skill-Negotiation"
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
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
                  string_value: "Pay"
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
                    functionName: "Arithmetic (int)"
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
                      int_value: 10
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: <?php printf("%u", ($a[0]+1)); ?>
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: <?php printf("%u", $exit); ?>
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
  actions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Pay"
          }
        }
      }
      args {
        int_value: <?php echo $a[1],"\n"; ?>
      }
    }
  }
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: <?php printf("%u", ($a[0]+1)); ?>
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
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
              string_value: "Employed"
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
      ops {
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
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
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
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
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
<?php

/* 0 Nodenumber
 * 1 pay (in nuyen)
 * 2 elevator pitch
 * 3 short tag
 * 4 description
 * 5 responses
 * 6 mission type extra
 */
?>
