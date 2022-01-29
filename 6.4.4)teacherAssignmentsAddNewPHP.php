
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
    if ($stmt = $con->prepare('SELECT USN and subCode FROM sub1 WHERE USN = ? and subCode = ?')) {
        $stmt->bind_param('ss', $_POST['USN'], $_POST['subCode']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "id already exists. Try again";
        } else {
            if ($stmt = $con->prepare('INSERT INTO sub1 (`USN`, `subCode`, `asm1`, `asm2`, `asm3`) VALUES (?, ?, ?, ?, ?)')) {
                $stmt->bind_param('ssddd', $_POST['USN'], $_POST['subCode'], $_POST['asm1'], $_POST['asm2'], $_POST['asm3']);
                $stmt->execute();
                echo "Succesfully registered";
                header("Location:6.4)teacherAssignments.php");
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


