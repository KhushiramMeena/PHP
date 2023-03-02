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


// To fetching data from db run this query

$sql="SELECT * FROM `table01`";
$result=mysqli_query($conn,$sql);

// if we want to get total no. of data rows in our db table...

$num=mysqli_num_rows($result);
echo "$num"."<br/>";

// if we want to access all rows then...
if($num>0){

    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // better way.........
  
        // while($row = mysqli_fetch_assoc($result)){
        //     echo var_dump($row);
            
        //     echo "<br>";
        // }
}


echo "<br>******************************* <br>";

if($num>0){
while($row = mysqli_fetch_assoc($result)){
         
    echo $row['s.no.']." Hello ".$row['first name']." ".$row['last name'];
    echo "<br>";
}
}
?>