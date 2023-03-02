<?php

//1.open your file
//2.read file
//3.close your file

$open=fopen("p22_file.txt" , "r"); // here "r" is read mode

$read=fread($open, filesize("p22_file.txt")); // filesize gives no. of character

echo "$read";

fclose($open);

?>