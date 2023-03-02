<?php 
 function sum($a,$b){
    echo $sum=$a+$b;
     return $sum;
 };
 
 $sum=sum(100,10);



echo"<br>";


 function  StudentMarks($Name,$marks){
     $i=0;
    for($i=0;$i<count($marks);$i++){
     echo " Marks of $Name[$i] is $marks[$i] out of 100 "."<br>";
 }
 };
 
 $name=array("Ram","Shyam","Mahesh");
 $marks=array(96,85,98);

StudentMarks($name,$marks);
    
 ?>