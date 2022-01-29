<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

// $SEM = 'First';
// TAKE THIS VALUE FROM THE SESSION VARIABLE.

// $stmt = ("SELECT * FROM test_time_table_2 WHERE SEM='$SEM'");
$stmt = ("SELECT * FROM test_time_table_2");
$stmt_run = mysqli_query($con, $stmt);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.studentAllStyle.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container1">
        <div class="leftContainer1">
            <div class="log1">
                <div class="innerLog1">
                    <!-- <input type="submit" class="btn" name="myProfile" value="VR"> -->
                    <!-- here value should be from php, the first letter of both first and last names. -->
                    <a href="6.0)teacherProfile.php">
                        <h1>VR</h1>
                    </a>
                </div>
                <h4>Profile</h4>
            </div>
            <hr>
            <div class="listOfContents">
                <ul>
                    <li><a href="6.1)teacherStudents.php">Students</a></li>
                    <li><a href="6.2)teacherTeachers.php">Teachers</a></li>
                    <li><a href="6.3)teacherEvents.php">Events</a></li>
                    <li><a href="6.4)teacherAssignments.php">Assignments</a></li>
                    <li style="background-color: red;"><a href="6.5)teacherTimetable.php">Exams</a></li>
                    <li><a href="6.6)teacherMarks.php">Marks</a></li>
                </ul>
            </div>
        </div>

        <div class="middleContainer">
            <div class="upperMiddleContainer">
                <div class="left">
                    <h1>Hello Name</h1>
                    <h2>1ME19CS092</h2>
                </div>
                <div class="right">
                    <a href="4)mainPage.html" class="HOMEBUTTON">HOME</a>
                </div>
            </div>

            <hr>

            <div class="heading">
                <?php
                // $row = mysqli_fetch_assoc($stmt_run);

                // echo '<h1>', $row['title'], " ", "Time-Table", '</h1>';
                // echo '<h1>', $row['SEM'], " ", "SEM", '</h1>';
                ?>
            </div>

            <?php while ($row = mysqli_fetch_array($stmt_run)) { ?>
                <div class="middleMiddleContainer">


                    <table class="table table-striped table-hover" style="margin-bottom: 30px;">

                        <div style="display: flex; justify-content:space-between; background-color: rgba(216, 219, 112, 0.685)">
                            <?php echo '<h1>', $row['title'], " ", "Time-Table", '</h1>';
                            echo '<h1>', $row['SEM'], " ", "SEM", '</h1>'; ?>
                        </div>

                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">10:00AM to 11:30AM</th>
                                <th scope="col">2:30PM to 4:00PM</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <th><?php echo $row['first_day']; ?></th>
                                <td><?php echo $row['first_test']; ?></td>
                                <td><?php echo $row['second_test']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo $row['second_day']; ?></th>
                                <td><?php echo $row['third_test']; ?></td>
                                <td><?php echo $row['fourth_test']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo $row['third_day']; ?></th>
                                <td><?php echo $row['fifth_test']; ?></td>
                                <td><?php echo $row['sixth_test']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="lastAddBtn">
                    <a href="6.5.2)teacherTimetableEdit.php?edit=<?php echo $row['SEM'] ?>" class="btn btn-success" style="width: 120px;"> Edit </a>
                    <a href="6.5.3)teacherTimetableDelete.php?delete=<?php echo $row['SEM'] ?> " class="btn btn-danger" style="width: 120px;"> Delete </a>
                </div>
            <?php } ?>
            <div style="display: flex; justify-content:center; margin-bottom:30px;">
                <a href="6.5.4)teacherTimetableAddNew.html?edit=<?php echo $row['SEM'] ?>" class="btn btn-primary" style="width: 220px;"> Add Test </a>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>