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


$row = mysqli_fetch_array($stmt_run);
// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.01)studentProfieEditStyle.css" class="rel">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font awsome : -->
    <script src="https://kit.fontawesome.com/a6e2755b4d.js" crossorigin="anonymous">
    </script>
    <!-- Google Fonts :  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="container1">
        <div class="container2">
            <div class="iconBox">
                <i class="fas fa-user-secret"></i>
            </div>
            <div class="table1">


                <form class="row g-3" action="6.01)teacherProfileEditPHP.php" method="post">
                    <div class="col-md-12">
                        <label for="inputFirstName" class="visually-hidden">First Name: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg> -->
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="FirstName" value=<?php echo $row['First Name'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="inputLastName" class="visually-hidden">Last Name: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="LastName" value=<?php echo $row['Last Name'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="visually-hidden">SSN: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <!-- <i class="bi bi-pencil-square"></i> -->
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <input type="text" class="form-control" id="USN" placeholder="SSN" name="SSN" value=<?php echo $row['SSN'] ?> required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="Branch" class="form-label visually-hidden">Branch: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <select id="Branch" class="form-select" name="Branch" required>
                                <option selected> <?php echo $row['Branch'] ?> </option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="MEC">MEC</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="EEE">EEE</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="inputEmail" class="form-label visually-hidden">Email: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-envelope-open-fill"></i>
                            </div>
                            <input type="email" class="form-control" id="inputEmail" placeholder="e-mail" name="Email" value=<?php echo $row['e-mail'] ?> required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="PHONENUMBER" class="form-label visually-hidden">Phone Number: </label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-telephone-forward-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="PHONENUMBER" placeholder="Phone Number" name="PhoneNumber" value=<?php echo $row['Phone Number'] ?> required>
                        </div>
                    </div>

                    <div class="updateButton" style="text-align: center;">
                        <!-- <button type="submit" class="btn btn-primary btn-lg" name="Register">Register</button> -->
                        <input type="submit" class="btn btn-outline-primary" name="Update" value="Update">
                    </div>
                </form>
               

            </div>
        </div>
    </div>

</body>

</html>