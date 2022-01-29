<?php

$mysqli = new mysqli("localhost", "root", "", "mini_project_01");
  
if ($mysqli == false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$SSN = $_POST['SSN'];
$Branch = $_POST['Branch'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$PhoneNumber = $_POST['PhoneNumber'];



$sql = "INSERT INTO teacher_register (`First Name`, `Last Name`, `SSN`) VALUES ($FirstName, $LastName, $SSN) ";


if ($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}
  
// Close connection
$mysqli->close();