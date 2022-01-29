
<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}

// This below one is for validation :
/* if(!isset($_POST['FirstName'], $_POST['LastName'], $_POST['USN'], etc...)){
    exit('Empty Field(s)');
} */

/* if(empty($_POST['FirstName']) || empty($_POST['LastName']) || empty($_POST['USN']) || etc.. ){
    exit('Values Empty');
} */



// This below one is to check wether the given USN is already there in the database if not then enter the data into the database if already present then print an error msg.



if (isset($_POST['Add'])) {
    if ($stmt = $con->prepare('SELECT SEM FROM test_time_table_2 WHERE SEM = ?')) {
        $stmt->bind_param('s', $_POST['SEM']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "This SEM alredy has a test";
        } else {
            if ($stmt = $con->prepare('INSERT INTO test_time_table_2 (`title`, `SEM`, `first_day`, `second_day`, `third_day`, `first_test`, `second_test`, `third_test`, `fourth_test`, `fifth_test`, `sixth_test`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
                $stmt->bind_param('sssssssssss', $_POST['title'], $_POST['SEM'], $_POST['first_day'], $_POST['second_day'], $_POST['third_day'], $_POST['first_test'], $_POST['second_test'], $_POST['third_test'], $_POST['fourth_test'], $_POST['fifth_test'], $_POST['sixth_test']);
                $stmt->execute();
                echo "Succesfully registered";
                header("Location:6.5)teacherTimetable.php");
            } else {
                echo "Error Occured";
            }
        }
        $stmt->close();
    } else {
        echo "Error Occured at last";
    }
    $con->close();
}

// if ($stmt = $con->prepare('INSERT INTO events (`date`, `title`, `discription`) VALUES (?, ?, ?)')) {
//     $stmt->bind_param('sss', $_POST['Date'], $_POST['Title'], $_POST['Discription']);
//     $stmt->execute();
//     echo "Succesfully registered";
//     header("Location:6.3)teacherEvents.php");
// } else {
//     echo "Error Occured";
// }


?>


