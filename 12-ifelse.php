<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;