<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}


$stmt = $con->prepare("SELECT * FROM student_register WHERE `e-mail` = ?");
$stmt->bind_param("s", $_POST['Email']);
$stmt->execute();
$res = $stmt->get_result();


if ($res->num_rows < 0) {
    echo "Invalid email";
} else {
    $row = $res->fetch_assoc();
    if ($row['Password'] === $_POST['Password']) {
        echo "Login Successfully";
    } else {
        echo "Invalid password";
    }
}



if(isset($_POST['SignupBtn'])){
    echo "Go to register page";
    echo '<pre>';
    echo var_dump($_POST['SignupBtn']);
    echo '</pre>';
}
