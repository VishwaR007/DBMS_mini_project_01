<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

// $USN = '092';
$SEM = $_GET['edit'];

$stmt = ("SELECT * FROM test_time_table_2 WHERE SEM='$SEM'");
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

    <style>
        label{
            font-size: 25px;
        }
    </style>
    
</head>

<body>

    <div class="container1">
        <div class="container2">
            <!-- <div class="iconBox">
                <i class="fas fa-user-secret"></i>
            </div> -->
            <div class="table1">


                <form class="row g-3" action="6.5.3)teacherTimetableDelete.php" method="post">
                    <div class="col-md-6">
                        <label for="inputLastName" class="">Title : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="Title" name="title" value=<?php echo $row['title'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputLastName" class="">SEM : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="SEM" name="SEM" value=<?php echo $row['SEM'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">First Day Date : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="First Day Date" name="first_day" value=<?php echo $row['first_day'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Second Day Date : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Second Day Date" name="second_day" value=<?php echo $row['second_day'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Third Day Date : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Third Day Date" name="third_day" value=<?php echo $row['third_day'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control visually-hidden" id="USN" placeholder="Third Day Date" name="third_day" value=<?php echo $row['third_day'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">First Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="First Test" name="first_test" value=<?php echo $row['first_test'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Second Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Second Test" name="second_test" value=<?php echo $row['second_test'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Third Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Third Test" name="third_test" value=<?php echo $row['third_test'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Fourth Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Fourth Test" name="fourth_test" value=<?php echo $row['fourth_test'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Fifth Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Fifth Test" name="fifth_test" value=<?php echo $row['fifth_test'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="USN" class="">Sixth Test : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Sixth Test" name="sixth_test" value=<?php echo $row['sixth_test'] ?> required>
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