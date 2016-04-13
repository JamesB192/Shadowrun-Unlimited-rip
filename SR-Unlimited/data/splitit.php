<?php

$I=$argv[1];
echo "splitting:\t".$I."\n";
$handle = @fopen($I, "r");

$bub = @fopen("parts/bub", "w");
$part="";
$count=111;

$inny=0;
if ($handle) {
	while (($buffer = fgets($handle, 4096)) !== false) {
		if($inny==0) {
			if(preg_match("|^\S.*\{$|", $buffer)) {
				// begin new trigger/misc
				$fname=sprintf("parts/part-%03u", $count++);
				$part=@fopen($fname, "w");
				fwrite($part, $buffer);
				$inny=1;
			  } else {
				// this in not an inner
				fwrite($bub, $buffer);
			  }
	          } else {
			if(preg_match("/^\}$/", $buffer)) {
				// print the closing bracket of the trigger/misc
				fwrite($part, $buffer);
				$inny=0;
				fclose($part);
			  } else {
				// print addtional line in trigger/misc
				fwrite($part, $buffer);
			  }
	          }
//        echo $buffer;
	  }
	if (!feof($handle)) {
		echo "Error: unexpected fgets() fail\n";
	  }
	fclose($handle);
	fclose($bub);
  }
?>
