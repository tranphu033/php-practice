<?php
echo strlen("Hello world!")."<br/>";
echo str_word_count("Hello world!")."<br/>";
echo strpos("Hello world!", "world")."<br/>";

// $x = "Hello World!";
// echo strtoupper($x);
// echo "<br/>";
// echo str_replace("World", "Dolly", $x);
// echo "<br/>";
// echo strrev($x);
// echo "<br/>";
// echo trim(" Hello World! ");
// echo "<br/>";
// $y = explode(" ", $x);
// print_r($y);
// echo "<br/>";

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z."<br/>";

$x = "Hello World!";
echo substr($x, 6)."<br/>";
echo "We are the so-called \"Vikings\" from the north.";