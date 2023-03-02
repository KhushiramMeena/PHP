<?php 

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password); 

if(!$conn){
    die("sorry we failed to connect:-").mysqli_connect_error()."<br>";
}
else{
    echo "connection successful"."<br>";
}
// To create a database, we  will run a sql query...

// *************************SQL QUERY****************
$sql= "CREATE DATABASE dbKhushiram";                //database name: dbkhushiram
$result=mysqli_query($conn,$sql);
$result=var_dump($result);                     //it will returns true/false and  tells us that DB is created or not!!!
// **************************************************

// if($result){
//     echo "DB was created successfully"."<br>";
// }
// else{
//     echo "The DB was not created successfully".mysqli_error($conn);
// }
?>