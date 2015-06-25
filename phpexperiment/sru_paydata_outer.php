idRef {
  id: "<?php echo "5573a0b0646632381d005f33"; ?>"
}

ui_name: "<?php /* BlaCK */
$outmost=0;

$loopy2=[ ["Blue", 10, [
		   ["Local Survey Datafile", [
			 ["1",  150]
			,["1a", 165]
			,["1b", 190]
		]],["Employee Scheduling Datafile", [
			 ["2",  185]
			,["2a", 210]
			,["2b", 200]
		]],["Email Data", [
			 ["3",  225]
			,["3a", 200]
			,["3b", 215]
		]]
	]],["Green", 20, [
		   ["Security Procedures", [
			 ["4",  450]
			,["4a", 460]
			,["4b", 470]
		]],["Email Data", [
			 ["5",  475]
			,["5a", 480]
			,["5b", 510]
		]],["System Activity", [
			 ["6",  490]
			,["6a", 505]
			,["6b", 530]
		]]
	]],["Yellow", 30, [
		   ["Corporate Profile", [
			 ["7",   1200]
			,["8",   1260]
			,["7a",  1105]
			,["8a",  1175]
		]],["Long Range Goals", [
			 ["9",   1300]
			,["10",  1360]
			,["9a",  1275]
			,["10a", 1275]
		]],["Capital Expenditure", [["11", 1375]
		]]
	]],["Orange", 50, [
		   ["Capital Expenditure", [
			 ["12",  1525]
			,["12a", 1510]
			,["12b", 1610]
		]],["Security Expenses", [
			 ["13",  1650]
			,["14",  1675]
			,["13a", 1535]
			,["14a", 1635]
		]],["Local Accounts", [
			 ["15",  1710]
			,["15a", 1735]
		]]
	]],["Red", 75, [
		    ["Corporate Accounts", [
			 ["16",  2250]
			,["16a", 2010]
			,["16b", 2110]
		 ]],["Corporate Accounts", [
			 ["17",  2275]
			,["17a", 2210]
			,["17b", 2315]
		 ]],["Bank Account Numbers", [
			 ["18",  2340]
			,["18a", 2515]
			,["18b", 2240]
		]]
	]],["Black", 100, [
		   ["Bank Account Numbers", [
			 ["19", 1675]
			,["19a",2775]
		]],["Prototype Blueprints", [
			 ["20", 2775]
			,["20a",2875 ]
		]],["Classified Corporate Files", [["21", 2975]
		]],["Open Projects Data", [["22", 2650]
		]],["Prototype Blueprints", [["23 ", 2740]
		]],["Prototype Blueprints", [["24", 2940]
		]],["Email Data", [["25", 3150]
		]]
]]];
$color=$loopy2[$outmost][0];
$megapulse=$loopy2[$outmost][1];
echo $color;

 ?> PayData"
nodes {
  idRef {
    id: "557a56d5646632cc23005502"
  }
  index: 0
  text: ""
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5573bbff646632381d005f4c"
  }
  index: 1
  text: ""
  branches {
    responseText: ""
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
              string_value: "Genera_Use"
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
              int_value: 3
            }
          }
        }
        args {
          int_value: <?php echo $megapulse; ?>
        }
      }
    }
    nextNodeIndex: 2
  }
  branches {
    responseText: ""
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
              string_value: "Genera_Use"
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
              int_value: 4
            }
          }
        }
        args {
          int_value: <?php echo $megapulse; ?>
        }
      }
    }
    actions {
      ops {
        functionName: "Display Text over Actor"
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
              string_value: "TextPopupStyle"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          string_value: "Your deck storage is full. Better unload some of your digital loot."
        }
        args {
          float_value: 0
        }
        args {
          float_value: 0
        }
        args {
          float_value: 0
        }
        args {
          float_value: 0
        }
        args {
          float_value: 3
        }
        args {
          float_value: 3
        }
        args {
          float_value: 0
        }
      }
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
    }
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
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
            string_value: "Genera_Use"
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
                string_value: "Deck_Total_Storage"
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
                int_value: 1
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
                string_value: "Deck_Storage_Used"
              }
            }
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5573bf1a646632381d005f64"
  }
  index: 2
  text: ""
<?php

 ?>
  nodeType: ConversationNodeType_Simple
  comment: "infinite loop or not"
}
roots {
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
            string_value: "Deck_Storage_FileCount"
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
            int_value: 3
          }
        }
      }
      args {
        int_value: 6
      }
    }
  }
  actions {
    ops {
      functionName: "Display Text over Actor"
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
            string_value: "TextPopupStyle"
          }
          args {
            int_value: 1
          }
        }
      }
      args {
        string_value: "You can not have more than six PayData files in storage"
      }
      args {
        float_value: 0
      }
      args {
        float_value: 0
      }
      args {
        float_value: 0
      }
      args {
        float_value: 0
      }
      args {
        float_value: 3
      }
      args {
        float_value: 3
      }
      args {
        float_value: 0
      }
    }
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
  }
  nextNodeIndex: 0
}
roots {
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
            string_value: "Deck_Storage_FileCount"
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
            int_value: 4
          }
        }
      }
      args {
        int_value: 6
      }
    }
  }
  actions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Variable (int)"
          args {
            string_value: "PayData"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: <?php /* 9 */ ?>
          }
        }
      }
    }
  }
  nextNodeIndex: 1
}
