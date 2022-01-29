<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}






if (isset($_GET['delete1'])) {
    $USN = $_GET['delete1'];
    $subCode = $_GET['delete2'];
    $stmt3 = ("DELETE FROM sub1 WHERE USN='$USN' AND subCode='$subCode'");
    $stmt3_run = mysqli_query($con, $stmt3);
    echo 'hai';
    if ($stmt3_run) {
        echo "Success";
        header('Location:6.4)teacherAssignments.php');
    } else {
        echo "fail";
    }
}





if (isset($_POST['Update'])) {
    $USN = $_POST['USN'];
    $subCode = $_POST['subCode'];
    $asm1 = $_POST['asm1'];
    $asm2 = $_POST['asm2'];
    $asm3 = $_POST['asm3'];

    $stmt2 = ("UPDATE sub1 SET `USN`='$USN', `subCode`='$subCode', `asm1`='$asm1', `asm2`='$asm2', `asm3`='$asm3' WHERE USN='$USN'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        // header('Location:5.0)studentProfile.php');
        header('Location:6.4)teacherAssignments.php');
    } else {
        echo "fail";
    }
}