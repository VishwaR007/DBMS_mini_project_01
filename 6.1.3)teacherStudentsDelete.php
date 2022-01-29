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
    $USN = $_GET['delete'];
    $stmt3 = ("DELETE FROM student_register WHERE USN='$USN'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:6.1)teacherStudents.php');
    } else {
        echo "fail";
    }
}





if (isset($_POST['Update'])) {

                        $fname = $_POST['FirstName'];
                        $lname = $_POST['LastName'];
                        $USN = $_POST['USN'];
                        $Branch = $_POST['Branch'];
                        $Sem = $_POST['SEM'];
                        $PhoneNumber = $_POST['PhoneNumber'];
                    
                        $stmt2 = ("UPDATE student_register SET `First Name`='$fname', `Last Name`='$lname', `USN`='$USN', `Branch`='$Branch', `SEM`='$Sem', `Phone Number`='$PhoneNumber' WHERE USN='$USN'");
                        $stmt2_run = mysqli_query($con, $stmt2);
                    
                        if ($stmt2_run) {
                            echo "Success";
                            // header('Location:5.0)studentProfile.php');
                            header('Location:6.1)teacherStudents.php');
                        } else {
                            echo "fail";
                        }
                    }