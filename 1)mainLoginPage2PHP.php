<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

session_start();

$stmt = $con->prepare("SELECT * FROM student_register WHERE `e-mail` = ?");
$stmt->bind_param("s", $_POST['Email']);
$stmt->execute();
$res = $stmt->get_result();

// var_dump($res);

if ($res->num_rows == 0) {
    echo "Invalid email not student";
    $stmt1 = $con->prepare("SELECT * FROM teacher_register WHERE `e-mail` = ?");
    $stmt1->bind_param("s", $_POST['Email']);
    $stmt1->execute();
    $res = $stmt1->get_result();

    if ($res->num_rows == 0) {
        echo "Invalid email not teacher";
    } else {
        $row = $res->fetch_assoc();
        if ($row['Password'] === $_POST['Password']) {
            echo "Login Successfully Teacher";

            // echo "<pre>";
            // var_dump($row);
            // echo "</pre>";

            $_SESSION['FirstName'] = $row['First Name'];
            $_SESSION['LastName'] = $row['Last Name'];
            $_SESSION['RollNumber'] = $row['SSN'];
            $_SESSION['SEM'] = $row['SEM'];

            header("Location:4)mainPage.php");
        } else {
            echo "Invalid password";
        }
    }
} else {
    $row = $res->fetch_assoc();
    if ($row['Password'] === $_POST['Password']) {
        echo "Login Successfully Student";

        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";

        $_SESSION['FirstName'] = $row['First Name'];
        $_SESSION['LastName'] = $row['Last Name'];
        $_SESSION['RollNumber'] = $row['USN'];
        $_SESSION['SEM'] = $row['SEM'];

        header("Location:4)mainPage.php");
    } else {
        echo "Invalid password";
    }
}








if (isset($_POST['SignupBtn'])) {
    echo "Go to register page";
    echo '<pre>';
    echo var_dump($_POST['SignupBtn']);
    echo '</pre>';

    // $nammaPath = realpath('/xampp/htdocs/mini_project/3)registrationPages/student/index.html');
    // echo $nammaPath;
    header('Location:2)selectTheCategory.html');
}
