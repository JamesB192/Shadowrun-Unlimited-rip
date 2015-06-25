idRef {
  id: "54a75c74646632f817006099"
}
ui_name: "deck storage purge - filled"
nodes {
  idRef {
    id: "54a771a36466324026002c4d"
  }
  index: 0
  text: "cyberdeck file cull v0.1-alpha1\nMMLIII Micodeck Inc.\nRedmond, UCAS"
  branches {
    responseText: "{{GM}}Cancel{{/GM}}"
    nextNodeIndex: -1
  }
<?php
$loopy=[
	 [["1",	"1a",	"1b"],	"10",	"Local Survey Datafile"]
	,[["2",	"2a",	"2b"],	"10",	"Employee Scheduling Datafile"]
	,[["3",	"3a",	"3b"],	"10",	"Email Data"]

	,[["4",	"4a",	"4b"],	"20",	"Security Procedures"]
	,[["5",	"5a",	"5b"],	"20",	"Email Data"]
	,[["6",	"6a",	"6b"],	"20",	"System Activity"]

	,[["7",	"7a"	],	"30",	"Corporate Profile"]
	,[["8a",	"8a"]	,	"30",	"Corporate Profile"]
	,[["9",	"9a"	],	"30",	"Long Range Goals"]
	,[["10",	"10a"]	,	"30",	"Long Range Goals"]
	,[["11"		],	"30",	"Capital Expenditure"]

	,[["12",	"12a",	"12b"],	"50",	"Capital Expenditure"]
	,[["13",	"13a"	],	"50",	"Security Expenses"]
	,[["14",	"14a"	],	"50",	"Security Expenses"]
	,[["15",	"15a"	],	"50",	"Local Accounts"]

	,[["16",	"16a",	"16b"],	"75",	"Local Accounts"]
	,[["17",	"17a",	"17b"],	"75",	"Corporate Accounts"]
	,[["18",	"18a",	"18b"],	"75",	"Bank Account Numbers"]

	,[["19",	"19a"	],	"100",	"Bank Account Numbers"]
	,[["20",	"20a"	],	"100",	"Prototype Blueprints"]
	,[["21"		],	"100",	"Classified Corporate Files"]
	,[["22"		],	"100",	"Open Projects Data"]
	,[["23 "	],	"100",	"Prototype Blueprints"]
	,[["24"		],	"100",	"Prototype Blueprints"]
	,[["25"		],	"100",	"Classified Corporate Files"]
  ];
foreach ($loopy as $outer) {
	$item_title=$outer[2];
	$item_size=$outer[1];
	foreach ($outer[0] as $item_id) {
		include "sru_file_purge_inner.php";
	  }
  }
?>  nodeType: ConversationNodeType_Simple
}
roots {
  responseText: ""
  nextNodeIndex: 0
}

