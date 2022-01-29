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
    $SEM = $_GET['delete'];
    $stmt3 = ("DELETE FROM test_time_table_2 WHERE SEM='$SEM'");
    $stmt3_run = mysqli_query($con, $stmt3);
    echo 'hai';
    if ($stmt3_run) {
        echo "Success";
        header('Location:6.5)teacherTimetable.php');
    } else {
        echo "fail";
    }
}





if (isset($_POST['Update'])) {
    $SEM = $_POST['SEM'];
    $title = $_POST['title'];
    $first_day = $_POST['first_day'];
    $second_day = $_POST['second_day'];
    $third_day = $_POST['third_day'];
    $first_test = $_POST['first_test'];
    $second_test = $_POST['second_test'];
    $third_test = $_POST['third_test'];
    $fourth_test = $_POST['fourth_test'];
    $fifth_test = $_POST['fifth_test'];
    $sexth_test = $_POST['sexth_test'];

    $stmt2 = ("UPDATE test_time_table_2 SET `SEM`='$SEM', `title`='$title', `first_day`='$first_day', `second_day`='$second_day', `third_day`='$third_day', `first_test`='$first_test', `second_test`='$second_test', `third_test`='$third_test', `fourth_test`='$fourth_test', `fifth_test`='$fifth_test', `sixth_test`='$sixth_test'  WHERE SEM='$SEM'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        header('Location:6.5)teacherTimetable.php');
    } else {
        echo "fail";
    }
}