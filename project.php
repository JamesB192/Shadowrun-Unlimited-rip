<?php
date_default_timezone_set('UTC');
$now=time();

$letter=" abcdefghijkl";
$oldwords=[
 "Aardvark"
,"Abrupt"
,"Abstract"
,"Accordian"
];

$word=["",
 "Acerbic"
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


printf("%04u%s %s %02u z%02u%02u -o++o- %s", $today["year"], $letter[$today["mon"]], $today["month"], $today["mday"], $today["hours"], $today["minutes"], $word[1]);

?>
