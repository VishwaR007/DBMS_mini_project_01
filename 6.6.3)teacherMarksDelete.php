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
    $stmt3 = ("DELETE FROM sub2 WHERE USN='$USN' AND subCode='$subCode'");
    $stmt3_run = mysqli_query($con, $stmt3);
    echo 'hai';
    if ($stmt3_run) {
        echo "Success";
        header('Location:6.6)teacherMarks.php');
    } else {
        echo "fail";
    }
}





if (isset($_POST['Update'])) {
    $USN = $_POST['USN'];
    $subCode = $_POST['subCode'];
    $IA1 = $_POST['IA1'];
    $IA2 = $_POST['IA2'];
    $IA3 = $_POST['IA3'];
    $finals = $_POST['finals'];

    $stmt2 = ("UPDATE sub2 SET `USN`='$USN', `subCode`='$subCode', `IA1`='$IA1', `IA2`='$IA2', `IA3`='$IA3', `finals`='$finals' WHERE USN='$USN'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        // header('Location:5.0)studentProfile.php');
        header('Location:6.6)teacherMarks.php');
    } else {
        echo "fail";
    }
}