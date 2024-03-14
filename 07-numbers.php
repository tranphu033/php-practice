<?php
$x = 5985;
var_dump(is_int($x));
echo "<br/>";
$x = 59.85;
var_dump(is_int($x));
echo "<br/>";
$x = 1.9e411;
var_dump($x);
echo "<br/>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br/>";
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast."<br/>";
echo (int)"123";