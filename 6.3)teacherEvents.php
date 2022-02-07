<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

$stmt = ("SELECT * FROM events ORDER BY id ASC");
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
                        <h1>
                            <?php session_start();

                            echo ucfirst(substr($_SESSION['FirstName'], 0, 1));
                            echo ucfirst(substr($_SESSION['LastName'], 0, 1));
                            ?>
                        </h1>
                    </a>
                </div>
                <h4>Profile</h4>
            </div>
            <hr>
            <div class="listOfContents">
                <ul>
                    <li><a href="6.1)teacherStudents.php">Students</a></li>
                    <li><a href="6.2)teacherTeachers.php">Teachers</a></li>
                    <li style="background-color: red;"><a href="6.3)teacherEvents.php">Events</a></li>
                    <li><a href="6.4)teacherAssignments.php">Assignments</a></li>
                    <li><a href="6.5)teacherTimetable.php">Exams</a></li>
                    <li><a href="6.6)teacherMarks.php">Marks</a></li>
                </ul>
            </div>
        </div>

        <div class="middleContainer">
            <div class="upperMiddleContainer">
                <div class="left">
                    <h1><?php echo ucfirst($_SESSION['FirstName']); ?></h1>
                    <h2><?php echo $_SESSION['RollNumber']; ?></h2>
                </div>
                <div class="right">
                    <a href="4)mainPage.php" class="HOMEBUTTON">HOME</a>
                </div>
            </div>

            <hr>

            <div class="middleMiddleContainer">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Event Number</th> -->
                            <th scope="col">Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Discription</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php while ($row = mysqli_fetch_array($stmt_run)) { ?>
                            <tr>
                                <!-- <th><?php echo $row['id']; ?></th> -->
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['discription']; ?></td>
                                <td><a href="6.3.2)teacherEventsEdit.php?edit=<?php echo $row['id'] ?>" class="btn btn-success"> Edit </a></td>
                                <td><a href="6.3.3)teacherEventsDelete.php?delete=<?php echo $row['id'] ?> " class="btn btn-danger"> Delete </a></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

            <div class="lastAddBtn">
                <a href="6.3.4)teacherStudentAddEvent.html" class="btn btn-primary"> Add Event </a>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>