<?php
  
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";
  
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  
  
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}
   



if(isset($_POST['Update'])){

    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $SSN = $_POST['SSN'];
    $Branch = $_POST['Branch'];
    $email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];

    $stmt2 = ("UPDATE teacher_register SET `First Name`='$fname', `Last Name`='$lname', `SSN`='$SSN', `Branch`='$Branch', `e-mail`='$email', `Phone Number`='$PhoneNumber' WHERE SSN='$SSN'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if($stmt2_run){
        echo "Success";
        header('Location:6.0)teacherProfile.php');
    }else{
        echo "fail";
    }
}
?>