<?php

session_start();

// var_dump($_SESSION['hai']);
// var_dump($_SESSION['SSN']);

$SSN = $_SESSION['RollNumber'];

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}


// if ($stmt = $con->prepare('SELECT * FROM teacher_register WHERE SSN = ?')) {
//     $stmt->bind_param('s', $_SESSION['SSN']);
//     $stmt->execute();
//     // $res = $stmt->get_result();



//     if ($stmt = $con->prepare('INSERT INTO teacher_register (`First Sem`, `Second Sem`, `Third Sem`, `Fourth Sem`, `Fifth Sem`, `Sixth Sem`, `Seventh Sem`, `Eighth Sem`) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ')) {
//         $stmt->bind_param('ssssssss', $_POST['FirstSem'], $_POST['SecondSem'], $_POST['ThirdSem'], $_POST['FourthSem'], $_POST['FifthSem'], $_POST['SixthSem'], $_POST['SeventhSem'], $_POST['EighthSem']);
//         $stmt->execute();
//     }
// }

$FirstSem = $_POST['FirstSem'];
$SecondSem = $_POST['SecondSem'];
$ThirdSem = $_POST['ThirdSem'];
$FourthSem = $_POST['FourthSem'];
$FifthSem = $_POST['FifthSem'];
$SixthSem = $_POST['SixthSem'];
$SeventhSem = $_POST['SeventhSem'];
$EighthSem = $_POST['EighthSem'];

// $stmt = $con->prepare('UPDATE teacher_register SET `First Sem`= `?` WHERE SSN=`?');
$query = "UPDATE teacher_register SET `First Sem`='$FirstSem', `Second Sem`='$SecondSem',`Third Sem`='$ThirdSem', `Fourth Sem`='$FourthSem', `Fifth Sem`='$FifthtSem', `Sixth Sem`='$SixthSem', `Seventh Sem`='$SeventhSem', `Eighth Sem`='$EighthSem'  WHERE SSN='$SSN'";
$query_run = mysqli_query($con, $query);



if ($query_run == true) {
    echo "Inserted";
    header("Location:1)mainLoginPage.html");
} else {
    echo "Not inserted";
}
