<?php
$nextnode=$parent;
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
	foreach ($outmost[2] as $outer) {
		$item_title=$outer[0];
		foreach ($outer[1] as $inner) {
			$item_nuyen=$inner[1]; $item_id=$inner[0];
			include "sru_file_sell_inner.php";
		  }
	  }
  }
?>
