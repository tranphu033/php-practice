<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") . "<br/>";

echo "The time is " . date("H:i:s") . "<br/>";
// date_default_timezone_set("America/New_York");
// echo "The time is " . date("H:i:s") . "<br/>";
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br/>";
$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br/>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Days");
echo date("Y-m-d h:i:sa", $d) . "<br>";

