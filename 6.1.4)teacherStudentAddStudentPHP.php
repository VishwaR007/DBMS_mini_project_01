
<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(mysqli_connect_error()){
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



if(isset($_POST['Add'])){
if($stmt = $con->prepare('SELECT USN FROM student_register WHERE USN = ?')){
    $stmt->bind_param('s', $_POST['USN']);
    $stmt->execute();
    $stmt->store_result();
                        
    if($stmt->num_rows>0){
        echo "USN already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO student_register (`First Name`, `Last Name`, `USN`, `Branch`, `Year`, `SEM`, `e-mail`, `Password`, `Phone Number`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)')){
            $stmt->bind_param('ssssssssd', $_POST['FirstName'], $_POST['LastName'], $_POST['USN'], $_POST['Branch'], $_POST['Year'], $_POST['SEM'], $_POST['Email'], $_POST['Password'], $_POST['PhoneNumber']);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:6.1)teacherStudents.php");
        }else{
            echo "Error Occured";
        }
    }
    $stmt->close();
}else{
    echo "Error Occured at last";
}
$con->close();
}
?>


