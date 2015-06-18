<?php
date_default_timezone_set('UTC');
$now=time();

$letter=" abcdefghijkl";
$oldwords=[
 "Aardvark"
,"Abrupt"
,"Abstract"
];

$word=["",
 "Accordian"
,"Adamany"
,"Aevil"
,"Affluent"
,"Agog"
,"Ah"
,"Ailing"
,"Ajax"
];

$today = getdate();
 /* 2015f June 15 z2005 -- Abstract */


printf("%04u%s z%02u%02u -- %s", $today["year"], $letter[$today["mon"]], $today["hours"], $today["minutes"], $word[1]);

?>
