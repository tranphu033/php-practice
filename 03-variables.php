<?php
$txt = "W3Schools.com";
echo "I love $txt!";
echo "<br>";

$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;
echo "<br>";

var_dump($x);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
echo "<br>";

$a = $b = $c = "Fruit";
echo "$a, $b, $c<br>";

// variables scope:

// $x = 5; // global scope
// function myTest() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();
// echo "<p>Variable x outside function is: $x</p>";

// $x = 5;
// $y = 10;
// function myTest()
// {
//     global $x, $y;
//     $y = $x + $y;
//     echo $GLOBALS['x'] . "<br>";
// }
// myTest();
// echo $y;

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  myTest();
  myTest();
  myTest();
