<?php
function myMessage()
{
    echo "Hello world!<br/>";
}

myMessage();

function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";

function myFamily($lastname, ...$firstname)
{
    $txt = "";
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, "52");
