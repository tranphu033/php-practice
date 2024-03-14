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
