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

// ********2.then we creats a database(but hum pehle hi kr chuke h DB)******************



// ***********3.creating table****************
//(i)  first, go to phpmyadmin and create a table.
//(ii) click the console button and do copy sqlQuery of that table and paste it.
//(iii)and change the table name.

// You can see here..........
$sql="CREATE TABLE `dbkhushiram`.`table2` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(11) NOT NULL ,  `gender` VARCHAR(11) NOT NULL ,  `date` DATETIME NOT NULL ,    PRIMARY KEY  (`sno`))";

// now we can check that table is created or not..

$result=mysqli_query($conn,$sql);

if($result){
    echo "Table was created successfully"."<br>";
}
else{
    echo "The Table was not created successfully".mysqli_error($conn);
}
?>