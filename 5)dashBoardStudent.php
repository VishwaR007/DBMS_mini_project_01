<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.studentAllStyle.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts :  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">

    <style>
        .middleMiddleContainer1 h1 {
            font-size: 60px;
            font-family: 'Supermercado One', cursive;
            color: black;
            animation: homeButton infinite alternate 3s linear;

        }

        @keyframes homeButton {
            0% {
                color: greenyellow;
            }

            50% {
                color: red;
            }
        }
    </style>

</head>

<body>

    <div class="container1">
        <div class="leftContainer1">
            <div class="log1">
                <div class="innerLog1">
                    <!-- <input type="submit" class="btn" name="myProfile" value="VR"> -->
                    <!-- here value should be from php, the first letter of both first and last names. -->
                    <a href="5.0)studentProfile.php">
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
                    <li><a href="5.1)studentStudents.php">Students</a></li>
                    <li><a href="5.2)studentTeachers.php">Teachers</a></li>
                    <li><a href="5.3)studentEvents.php">Events</a></li>
                    <li><a href="5.4)studentAssignments.php">Assignments</a></li>
                    <li><a href="5.5)studentTimetable.php">Exams</a></li>
                    <li><a href="5.6)studentMarks.php">Marks</a></li>
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

            <div class="middleMiddleContainer1" style="margin: 150px;">

                <h1>Welcome to Student's Dashboard</h1>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>