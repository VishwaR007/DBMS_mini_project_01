<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(mysqli_connect_error()){
    exit('Error connecting to the database' . mysqli_connect_error());
}

session_start();

$hai = "hai";
$_SESSION["hai"] = $hai;

$_SESSION["RollNumber"] = $_POST['SSN'];
$_SESSION["FirstName"] = $_POST['FirstName'];
$_SESSION["LastName"] = $_POST['LastName'];


// This below one is for validation :
/* if(!isset($_POST['FirstName'], $_POST['LastName'], $_POST['SSN'], etc...)){
    exit('Empty Field(s)');
} */

/* if(empty($_POST['FirstName']) || empty($_POST['LastName']) || empty($_POST['SSN']) || etc.. ){
    exit('Values Empty');
} */



// This below one is to check wether the given SSN is already there in the database if not then enter the data into the database if already present then print an error msg.
if($stmt = $con->prepare('SELECT SSN FROM teacher_register WHERE SSN = ?')){
    $stmt->bind_param('s', $_POST['SSN']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo "SSN already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO teacher_register (`First Name`, `Last Name`, `SSN`, `Branch`, `e-mail`, `Password`, `Phone Number`) VALUES (?, ?, ?, ?, ?, ?, ?)')){
            $stmt->bind_param('ssssssd', $_POST['FirstName'], $_POST['LastName'], $_POST['SSN'], $_POST['Branch'], $_POST['Email'], $_POST['Password'], $_POST['PhoneNumber']);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:3.21)subSelectionByTeachers.php");
        }else{
            echo "Error Occured";
        }
    }
    $stmt->close();
}else{
    echo "Error Occured at last";
}
$con->close();



?>


<?php


    