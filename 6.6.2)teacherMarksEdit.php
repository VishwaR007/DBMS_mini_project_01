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
$USN = $_GET['edit'];

$stmt = ("SELECT * FROM sub2 WHERE USN='$USN'");
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


                <form class="row g-3" action="6.6.3)teacherMarksDelete.php" method="post">
                    <div class="col-md-12">
                        <label for="inputLastName" class="">USN : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="USN" name="USN" value=<?php echo $row['USN'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="inputLastName" class="">Subject Code : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="Subject Code" name="subCode" value=<?php echo $row['subCode'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="">IA 1 : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="IA 1" name="IA1" value=<?php echo $row['IA1'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="">IA 2 : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="IA 2" name="IA2" value=<?php echo $row['IA2'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="">IA 3 : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="IA 2" name="IA3" value=<?php echo $row['IA3'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="">Finals : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Finals" name="finals" value=<?php echo $row['finals'] ?> required>
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