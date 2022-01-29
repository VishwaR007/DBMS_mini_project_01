<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}






if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt3 = ("DELETE FROM events WHERE id='$id'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:6.3)teacherEvents.php');
    } else {
        echo "fail";
    }
}





if (isset($_POST['Update'])) {
    $id = $_POST['id'];
    $Date = $_POST['Date'];
    $Title = $_POST['Title'];
    $Discription = $_POST['Discription'];

    $stmt2 = ("UPDATE events SET `date`='$Date', `title`='$Title', `discription`='$Discription' WHERE id='$id'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        // header('Location:5.0)studentProfile.php');
        header('Location:6.3)teacherEvents.php');
    } else {
        echo "fail";
    }
}