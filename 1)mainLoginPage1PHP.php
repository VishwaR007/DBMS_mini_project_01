<?php

// $DATABASE_HOST = "localhost";
// $DATABASE_USER = "root";
// $DATABASE_PASS = "";
// $DATABASE_NAME = "mini_project_01";

// $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


$con = new PDO('mysql:host=localhost;port=3306;dbname=mini_project_01', 'root', '');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




// if(isset($_GET['LoginBtn'])){
//     header("Location : index2.php");
//     echo "hello";
// }
// // if(isset($_POST['LoginBtn'])){
// //     header("Location : index2.php");
// //     echo "hello";
// // }

// $Email = $_POST['Email'];
// $Password = $_POST['Password'];


// This below one os for validation :
/* if(empty($Email)){
    header("Location: index.html?erro=User Name is required");
}
else if(empty($Password)){
    header(("Location: index.html?error=Password is required"));
} */

echo '<pre>';
var_dump($_POST);
echo '</pre>';


// This below one checks if the entered email is there in the database or not
if($stmt = $con->prepare('SELECT `e-mail` FROM student_register WHERE `e-mail` = ?')){
    $stmt->bindValue('?', $_POST['Email']);
    // $stmt->execute();
    // echo '<pre>';
    // var_dump($stmt);
    // echo '<pre>';
    // exit();
    // $stmt->store_result();
    if($stmt->fetchColumn()< 0){
        echo "Wrong email";
    }else{
        $stmt2 = $con->prepare('SELECT * FROM $stmt ORDER BY USN DESC');
        // $stmt2->execute();
        $products = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        if($products['e-mail'] == $_POST['Email']){
            echo '<pre>';
            var_dump($products);
            echo '</pre>';
            echo "Logged In";
        }else{
            echo "error";
        }
    }
}else{
    echo "Last error";
}



?>