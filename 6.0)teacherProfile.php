<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

// session_start();
// $USN = $_SESSION['RollNumber'];

$SSN = '55';

$stmt = ("SELECT * FROM teacher_register WHERE SSN='$SSN'");
$stmt_run = mysqli_query($con, $stmt);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.0)studentProfileStyle.css" class="rel">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awsome : -->
    <script src="https://kit.fontawesome.com/a6e2755b4d.js" crossorigin="anonymous">
    </script>
    <!-- Google Fonts :  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container1">
        <div class="container2">
            <div class="iconBox">
                <i class="fas fa-user-secret"></i>
            </div>
            <div class="table1">
                <?php
                $row = mysqli_fetch_array($stmt_run);
                // var_dump($row);

                echo '<h2>', 'First Name :', ' ', $row['First Name'], '</h2>';
                echo '<h2>', 'Last Name :', ' ', $row['Last Name'], '</h2>';
                echo '<h2>', 'SSN :', ' ', $row['SSN'], '</h2>';
                echo '<h2>', 'Branch :', ' ', $row['Branch'], '</h2>';
                echo '<h2>', 'e-mail :', ' ', $row['e-mail'], '</h2>';
                echo '<h2>', 'Phone Number :', ' ', $row['Phone Number'], '</h2>';
                // echo '<h5>', 'First Sem :', ' ', $row['First Sem'], '</h5>';
                // echo '<h5>', 'Second Sem :', ' ', $row['Second Sem'], '</h5>';
                // echo '<h5>', 'Third Sem :', ' ', $row['Third Sem'], '</h5>';
                // echo '<h5>', 'Fourth Sem :', ' ', $row['Fourth Sem'], '</h5>';
                // echo '<h5>', 'Fifth Sem :', ' ', $row['Fifth Sem'], '</h5>';
                // echo '<h5>', 'Sixth Sem :', ' ', $row['Sixth Sem'], '</h5>';
                // echo '<h5>', 'Seventh Sem :', ' ', $row['Seventh Sem'], '</h5>';
                // echo '<h5>', 'Eighth Sem :', ' ', $row['Eighth Sem'], '</h5>';

                ?>

            </div>
            <div class="editButton">
                <form action="6.01)teacherProfileEdit.php">
                    <input type="submit" class="btn btn-success btn-lg" name="Edit" value="Edit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>