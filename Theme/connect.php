<?php
session_start();
$username="root";

$password="";

$dbname="townsearch";


$con=mysqli_connect("localhost",$username,$password,$dbname);


// Check connection


if (mysqli_connect_errno($con))  

{  

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
}


?>
