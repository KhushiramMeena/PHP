<?php 

$servername="localhost";
$username="root";
$password="";// space not allowed

// connecting...
$conn = mysqli_connect($servername,$username,$password);

// echo " Connection was successful";

if (!$conn){
    die("Sorry we are failed to connect ".mysqli_connect_error());
   
}

else{
    echo "Successful";
}

?>