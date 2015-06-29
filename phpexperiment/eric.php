<?php

$exit=49;
$flot=50;
include_once("eric_jobs.jsob");
foreach ($missions as $that) {
//	echo $that[2]."\n";
	$that[0]=$flot;
	$a=$that;
	include("eric_job1.php");
	$flot=$flot+4;
  }


?>
