<?php 
echo "Welcome to dates tutorial"."<br>";

// to more explore, check php.net/dates
date_default_timezone_set('Asia/Kolkata');// time will be display accordingly timezone

$d=date(" d F Y, h:i A");


echo " today is $d ";
?>