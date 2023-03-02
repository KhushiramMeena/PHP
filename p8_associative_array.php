<?php
echo"Associative Arraay : "."<br>";

$a=array('Ram'=>'89',
        'Shyam'=>'97',
        'Ramesh'=>'100');


        echo "$a[Ram]"."<br>";

foreach($a as $key => $val){
    echo "marks of $key is $val <br>";
}

?>