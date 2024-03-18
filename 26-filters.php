<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br/>";

$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "<br/>";

$int = 0;
if (filter_var($int, FILTER_VALIDATE_INT) === 0) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "<br/>";

$email = "john.doe@example.com";
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}
echo "<br/>";

//advanced
$int = 122;
$min = 1;
$max = 200;

if (!filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["options" =>
    ["min_range" => $min, "max_range" => $max]]
)) {
    echo ("Variable value is not within the legal range");
} else {
    echo ("Variable value is within the legal range");
}
echo "<br/>";

$url = "https://www.w3schools.com?keyword=1";
if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}