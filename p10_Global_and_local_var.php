<?php 
echo "Local and Global variable in PHP". "<br>";

$a=100;// global variable

// if we want to access global variable in to a function then we use "global" keyword
function printNum(){
global $a;
$a=1000;// ye global ki value permanently change kar dega
$b=200;// Local Variable

echo " Num is $a <br>";
echo " Num is $b";

}

printNum();

echo "<br> $a". "<br>";
?>