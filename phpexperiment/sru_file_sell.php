idRef {
  id: "52a0f69b336331ac3a007d38"
}
ui_name: "SerialRogue"
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d6e"
  }
  index: 0
  text: ""
  branches {
    responseText: ""
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
              string_value: "MetSerialRogue"
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
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 1
    hideIfUnavailable: true
  }
  branches {
    responseText: "Rogue. I wanna make a deal."
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
              string_value: "MetSerialRogue"
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
    nextNodeIndex: 5
    hideIfUnavailable: true
  }
  branches {
    responseText: "Nevermind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d71"
  }
  index: 1
  text: "Hey \'runner. What brings you here?"
  branches {
    responseText: "What makes you think I\'m a \'runner?"
    nextNodeIndex: 2
  }
  nodeType: ConversationNodeType_Simple
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
            string_value: "MetSerialRogue"
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
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d74"
  }
  index: 2
  text: "Well only two types of people come around these parts, I can tell you certainly aren\'t one of these digital groupies."
  branches {
    responseText: "Keen eye."
    nextNodeIndex: 3
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d77"
  }
  index: 3
  text: "Well the analyze program I ran on your persona helps."
  branches {
    responseText: "Very clever."
    nextNodeIndex: 4
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d7a"
  }
  index: 4
  text: "Let me introduce myself. My handle is Serial Rogue, and I deal in all manner of pay data you might scrounge from raided data stores. So if your looking to unload some digital loot, let me know."
  branches {
    responseText: "Something tells me, we will be seeing a lot of each other Rogue."
    nextNodeIndex: 0
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d80"
  }
  index: 5
  text: "Well let\'s just see what you have shall we?"
<?php
$nextnode=5;
$loopy2=[ ["blue", 10, [
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
	]],["green", 20, [
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
	]],["yellow", 30, [
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
	]],["orange", 50, [
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
	]],["red", 75, [
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
	]],["black", 100, [
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
foreach ($loopy2 as $outmost) {
	$item_size=$outmost[1]; $color=$outmost[0];
//	printf("%4u %s\n", $outmost[1], $outmost[0]);
	foreach ($outmost[2] as $outer) {
		$item_title=$outer[0];
//		printf("\t%s\n", $outer[0]);
		foreach ($outer[1] as $inner) {
			$item_nuyen=$inner[1]; $item_id=$inner[0];
//			printf("\t\t%4u  :%s:\n", $inner[1], $inner[0]);
//			printf("%3uMp   %4uNuyen\t%s\t%s\t:%s:\n", $size, $nuyen, $questitem, $color=$outmost[0], $name);
			include "sru_file_sell_inner.php";
		  }
	  }
/*	$item_title=$outer[2];
	$item_size=$outer[1];
	foreach ($outer[0] as $item_id) {
//		include "sru_file_sell_inner.php";
	  }
*/  }
?>
  nodeType: ConversationNodeType_Simple
}
roots {
  responseText: ""
  nextNodeIndex: 0
}

