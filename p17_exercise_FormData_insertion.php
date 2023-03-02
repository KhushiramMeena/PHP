<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<form action="p17_exercise_FormData_insertion.php" method="post">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" placeholder="Enter first name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelp" placeholder="Enter last name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control"name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>




  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control"  name="status" id="status" placeholder="Employed/unemployed/student">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<!-- php for storing data -->

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Email=$_POST['email'];
    $Status=$_POST['status'];

//  connection
$servername="localhost";
$username="root";
$password="";
$database="dbkhushiram";
// connecting...
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo"Sorry !!! something went wrong so we are unable to connect".mysqli_connect_error();
}

else{echo "connection is successful  !!!!!!!!!!!!!!!";

    $sql="INSERT INTO `table01` ( `first name`, `last name`, `email`, `status`, `date`) VALUES ( '$Fname', '$Lname', '$Email', '$Status', current_timestamp()) ";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "Your entry has been successfully submitted"."<br/>";
    }

    else{
        echo "Sorry!!!! your entry not submitted successfully";
    }

}
}
?>



</body>
</html>