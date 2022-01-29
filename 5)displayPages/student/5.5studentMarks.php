<?php 

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

$SEM = 'First';
// TAKE THIS VALUE FROM THE SESSION VARIABLE.

$stmt = ("SELECT * FROM test_time_table_2 WHERE SEM='$SEM'");
$stmt_run = mysqli_query($con, $stmt);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container1">
        <div class="leftContainer1">
            <div class="log1">
                <div class="innerLog1">
                    <input type="submit" class="btn" name="myProfile" value="VR">
                    <!-- here value should be from php, the first letter of both first and last names. -->
                    <a href="myProfile.html">
                        <h1>VR</h1>
                    </a>
                </div>
                <h4>Profile</h4>
            </div>
            <div class="listOfContents">
                <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="students.html">Students</a></li>
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="exams.html">Exams</a></li>
                    <li><a href="assignments.html">Assignments</a></li>
                </ul>
            </div>
        </div>

        <div class="middleContainer">
            <div class="upperMiddleContainer">
                <h1>Hello Name</h1>
            </div>

            <hr>

            <div class="heading">
                    <?php
                        $row = mysqli_fetch_assoc($stmt_run);

                        echo '<h1>', $row['title'], " ", "Time-Table", '</h1>';
                        echo '<h1>', $row['SEM'], " ", "SEM", '</h1>';
                    ?>
            </div>

            <div class="middleMiddleContainer">
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">10:00AM to 11:30AM</th>
                            <th scope="col">2:30PM to 4:00PM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                echo '<tr>';
                                    echo '<th scope="row">', $row['first_day'], '</th>';
                                    echo '<td>', $row['first_test'], '</td>';
                                    echo '<td>', $row['second_test'], '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                    echo '<th scope="row">', $row['second_day'], '</th>';
                                    echo '<td>', $row['third_test'], '</td>';
                                    echo '<td>', $row['fourth_test'], '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                    echo '<th scope="row">', $row['third_day'], '</th>';
                                    echo '<td>', $row['fifth_test'], '</td>';
                                    echo '<td>', $row['sixth_test'], '</td>';
                                echo '</tr>';
                            
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>