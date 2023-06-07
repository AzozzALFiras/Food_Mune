<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Food";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 




$title = "Food Dashbord";
$desction = "Food Managers ";
$DataNow = date("Y-m-d H:i:s");
$DatahashNow = date("Ymdhis");


