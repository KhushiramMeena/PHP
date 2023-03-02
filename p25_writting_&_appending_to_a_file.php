<?php

// sabse pehle "p45_file.txt" namm ki file banegi....

// $file=fopen("p25_file.txt","w");// write mode
// fwrite($file,"Hello today is sunday");
// fwrite($file, "My name id KHUSHIRASM MEENA");


// appending to a file

$file=fopen("p25_file.txt","a");// write mode
fwrite($file,"Hello today is Monday");
fwrite($file, "i am in KOTA");
fclose($close);
?>