<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname="Food";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
// $send=$_POST['send'];

if (isset($_POST["send"])) {
$fname=$_POST['firstname'];
$sname=$_POST['secondname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$addressp=$_POST['addressp'];
$age=$_POST['age'];
$numberofunc=$_POST['numberofunc'];
$dateofreserv=$_POST['dateofreserv'];
$sqlInsert = "INSERT INTO user(firstname , secondname , email , phonenumber,addressp,age,numberofunc,dateofreserv) VALUES (' $fname',' $sname',' $email', '$phonenumber', ' $addressp', ' $age', '$numberofunc', '$dateofreserv')";
if(mysqli_query($conn,$sqlInsert)){
session_start();
$_SESSION["send"] = "Passport booking has been successfully completed!";
header("Location:admin.php");
} else{
die("Something went wrong");
}
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2> <strong> online passport reservation </strong></h2>
<h6>Welcome to our online passport reservation website. Please fill out the form below</h6>
<form action="data.php" method="POST">
<div class="form-group">
First Name: <input type="text" class="form-control" name="firstname" placeholder="First name here..."/>
</div>
<div class="form-group">
Second Name: <input type="text" class="form-control" name="secondname" placeholder="Second name here..."/>
</div>
<div class="form-group">
Email : <input type="email" class="form-control" name="email" placeholder="Email here..."/>
</div>
<div class="form-group">
Phone number :<input type="text" class="form-control" name="phonenumber" placeholder="phone number here.."/>
</div>
<div class="form-group">
Address : <input type="text" class="form-control" name="addressp" placeholder="Address here..."/>
</div>
<div class="form-group">
Age :<input type="date" class="form-control" name="age" />
</div>
<div class="form-group">
Number of UNC:<input type="text" class="form-control" name="numberofunc" placeholder="Number Unified National Card here.."/>
</div>
<div class="form-group">
date of reservation :<input type="date" class="form-control" name="dateofreserv" />
</div>
<div class="form-btn">
<input type="submit" class="btn btn-primary" value="Register" name="send"/>
</div>
</form>


<div>
<div><p>Already Registered <a href="login.php">Login Here</a></p></div>
</div>
</div> 




</body>
</html>