<?php
// echo readfile("webdictionary.txt");
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile, filesize("webdictionary.txt"));
// echo fgets($myfile);
// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }
while (!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
