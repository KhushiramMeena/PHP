<?php
$a="KHUSHIRAM MEENA"; //in string initialization we can use single or double quotes

echo "hello my Name is $a <br> ";
echo strlen($a)."<br>";    //string length (include white spaces)

echo strrev($a)."<br>";    //string reverse
echo str_word_count($a)."<br>";   //string word count

echo strpos($a,"MEENA")."<br>";  // position of "MEENA" in string a. (start with Zero)

echo str_replace("MEENA","CHEETA",$a)."<br>"; //replace "MEENA" to "CHEETA"
echo str_repeat($a,6)."<br>";     //repeat with 6 times

echo "<pre>";
echo rtrim("     $a         "); //use to remove Right side blank space
echo "</pre>";

echo "<pre>";
echo ltrim("                  $a                    ");//use to remove Left side blank space
echo "</pre>";
?>