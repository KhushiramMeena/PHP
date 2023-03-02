<?php

// $file=fopen("p22_file.txt", "r");
// $a=fgets($file);//it will read file line by line
// echo "$a";
// echo "$a";



$file=fopen("p22_file.txt", "r");
$a=fgetc($file);//it will read file char by char
echo "$a";


fclose($file)

?>