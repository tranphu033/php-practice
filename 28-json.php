<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age)."<br/>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);
foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }