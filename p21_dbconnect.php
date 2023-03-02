<?php

// *******connection***************
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
?>