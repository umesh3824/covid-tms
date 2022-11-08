<?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con=mysqli_connect("localhost","u799378581_covid","Covid@123","u799378581_covidtmsdb");

// $con=mysqli_connect("localhost","root","","covidtmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
