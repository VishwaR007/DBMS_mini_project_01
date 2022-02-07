<?php
session_start();

var_dump($_SESSION['RollNumber']);




$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}

$stmt = $con->prepare("SELECT * FROM student_register WHERE `USN` = ?");
$stmt->bind_param("s", $_SESSION['RollNumber']);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows == 0) {
    echo "Invalid not a student";
    $stmt = $con->prepare("SELECT * FROM teacher_register WHERE `SSN` = ?");
    $stmt->bind_param("s", $_SESSION['RollNumber']);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows == 0) {
        echo "This also invalid";
    } else {
        echo "Teacher Success";
        echo "Go to teachers dashBoard";
        header("Location:6)dashBoardTeacher.php");
    }
}else{
    echo "Student Sucess";
    echo "Go to student dashBoard";
    header("Location:5)dashBoardStudent.php");
}
