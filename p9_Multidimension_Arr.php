<?php 
$array =array(
    array(4,2,3,6),
    array(3,8,6,4),
    array(7,9,8,6)  
);

for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}



;?>