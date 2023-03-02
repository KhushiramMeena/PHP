<?php


$servername="localhost";
$username="root";
$password="";
$database="dbkhushiram"; //if we creating a DB then we can mention database in to connection

$conn=mysqli_connect($servername,$username,$password,$database); 

if(!$conn){
    die("sorry we failed to connect:-".mysqli_connect_error())."<br>";
}
else{
    echo "connection successful"."<br>";

}

$sql="SELECT * FROM `table01` WHERE 'first name'='neha'";
$result=mysqli_query($conn,$sql);

// if we want to get total no. of data rows in our db table...

$num=mysqli_num_rows($result);
echo "$num"."<br/>";


if($num>0){
    while($row= mysqli_fetch_assoc($result)){

        echo $row['s.no.']." Hello ".$row['first name']."<br>";
     
    
    }
    }


    // data updation using where clause

   $sql=" UPDATE `table01` SET `last name` = 'Vaishnav' WHERE `table01`.`s.no.` = 1";
   $result=mysqli_query($conn,$sql);

   if($result){
       echo "record updated successfully";

   }
   else{
       echo "record Could not updated successfully";
   }

//    if we want to know that how many recorrds are updated then..
$aff=mysqli_affected_rows($conn);
echo "<br> total no. of updation :".$aff;

?>