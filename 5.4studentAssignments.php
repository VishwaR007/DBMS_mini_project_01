<?php 

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

$USN = 11;
// TAKE THIS ABOVE VARAIBLE VALUE FROM SESSION.

// $stmt = ("SELECT * FROM assignments_and_test_marks WHERE USN='$USN'");
// $stmt_run = mysqli_query($con, $stmt);
$stmt = ("SELECT * FROM sub1 WHERE USN='$USN'");
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
            <hr>
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

            <div class="middleMiddleContainer">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">USN</th>
                            <th scope="col">Subject Code</th>
                            <th scope="col">Assignment 1</th>
                            <th scope="col">Assignment 2</th>
                            <th scope="col">Assignment 3</th>
                            <!-- <th scope="col">IA 1</th>
                            <th scope="col">IA 2</th>
                            <th scope="col">IA 3</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = mysqli_fetch_array($stmt_run)){
                                echo '<tr>';
                                    echo '<th scope="row">', $row['USN'], '</th>';
                                    echo '<td>', $row['subCode'], '</td>';
                                    echo '<td>', $row['asm1'], '</td>';
                                    echo '<td>', $row['asm2'], '</td>';
                                    echo '<td>', $row['asm3'], '</td>';
                                echo '</tr>';
                            }
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