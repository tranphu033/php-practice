<?php
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
echo "<br/>";

$i = 1;
do {
    echo $i;
    $i++;
} while ($i < 6);
echo "<br/>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    echo "$x <br>";
}

$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
print_r($colors);
echo "<br/>";
 
