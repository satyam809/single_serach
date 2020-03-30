<?php
//Database connection.
$con = mysqli_connect(
   "localhost", //Server host name.
   "root", //Database username.
   "", //Database password.
   "tiqto_database" //Database name or anything you would like to call it.
);
//Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
