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
$id = $_GET['edit'];

$stmt = ("SELECT * FROM events WHERE id='$id'");
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
            font-size: 32px;
        }
    </style>
    
</head>

<body>

    <div class="container1">
        <div class="container2">
            <div class="iconBox">
                <i class="fas fa-user-secret"></i>
            </div>
            <div class="table1">


                <form class="row g-3" action="6.3.3)teacherEventsDelete.php" method="post">
                    <div class="col-md-12">
                        <label for="inputLastName" class="">id : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="id" name="id" value=<?php echo $row['id'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="inputLastName" class="">Date : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputLastName" placeholder="Date" name="Date" value=<?php echo $row['date'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="USN" class="">Title : </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="USN" placeholder="Title" name="Title" value=<?php echo $row['title'] ?> required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="discriptionid">Discription : </label>
                        <div class="input-group">
                            <textarea id="discriptionid" name="Discription" rows="4" cols="60" >
                                <?php echo $row['discription']; ?>
                            </textarea>
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