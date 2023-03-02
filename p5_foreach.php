<?php 
$a= array("RAM","SHYAM","SEETA","GEETA");

// way-1 to iterate array
$i=0;
for($i=0;$i<count($a);$i++){
    echo " $a[$i]"."<br>";
}

//better way to iterate array
echo"Way-2"."<br>";

foreach ($a as  $value) {
    echo "$value"."<br>";
}
?>