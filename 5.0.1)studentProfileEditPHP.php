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
    $USN = $_POST['USN'];
    $Branch = $_POST['Branch'];
    $Year = $_POST['Year'];
    $Sem = $_POST['SEM'];
    $email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];

    $stmt2 = ("UPDATE student_register SET `First Name`='$fname', `Last Name`='$lname', `USN`='$USN', `Branch`='$Branch', `Year`='$Year', `SEM`='$Sem', `e-mail`='$email', `Phone Number`='$PhoneNumber' WHERE USN='$USN'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if($stmt2_run){
        echo "Success";
        header('Location:5.0)studentProfile.php');
    }else{
        echo "fail";
    }
}
?>