<?php
// ***********1.connection**************
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


// we created a table "table1" already


$sql="INSERT INTO `table1` ( `name`, `gender`, `date`) VALUES ( 'Geeta', 'female', '2022-01-24 14:06:49.000000')";
$result=mysqli_query($conn,$sql);

// checking that data insertion successful or not
if($result){
    echo "New data  was inserted successfully"."<br>";
}
else{
    echo "new data was not inserted successfully".mysqli_error($conn);
}
?>