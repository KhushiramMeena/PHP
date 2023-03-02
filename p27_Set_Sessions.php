<?php

session_start(); //session has been started

$_SESSION['username'] = "Khushiram";
$_SESSION['FavCat']="Books";
echo  "We have saved your session !!!";

?>