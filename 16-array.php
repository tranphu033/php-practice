<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
    echo "$x <br>";
}
array_push($cars, "Ford");
print_r($cars);
echo "<br/>";

$car = array("brand" => "Ford", "model" => "Mustang");
$car["year"] = 1964;
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
unset($cars[0]);
print_r($cars);
echo "<br/>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
print_r($cars);
echo "<br/>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
print_r($newarray);
echo "<br/>";

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo "<br/>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);
echo "<br/>";

