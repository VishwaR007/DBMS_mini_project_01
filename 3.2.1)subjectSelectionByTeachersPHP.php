<?php


$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mini_project_01";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}

// $namma;

if (isset($_POST['ok'])) {
    // var_dump($_POST['ok']);
    // echo $_POST['subCode'];
    if ($stmt = $con->prepare('SELECT * FROM sub_code_and_sub_name WHERE SubCode = ?')) {
        $stmt->bind_param('s', $_POST['subCode']);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows < 0) {
            echo "No value is selected";
        } else {
            // var_dump($stmt);
            $row = $res->fetch_assoc();
            echo $row['SubName'];
            // $namma = 1;
            // header("Location:3.2.1)subjectSelectionByTeachers.php");
        }
    }
}




// create a row in the database table with name select and assign it value 'no subject handelled'. 

/*

<?php
            if (isset($_POST['ok'])) {
                // var_dump($_POST['ok']);
                // echo $_POST['subCode'];
                if ($stmt = $con->prepare('SELECT * FROM sub_code_and_sub_name WHERE SubCode = ?')) {
                    $stmt->bind_param('s', $_POST['subCode']);
                    $stmt->execute();
                    $res = $stmt->get_result();

                    if ($res->num_rows < 0) {
                        echo "No value is selected";
                    } else {
                        // var_dump($stmt);
                        $row = $res->fetch_assoc();
                        // echo $row['SubName'];
                        $namma = 1;
                    }
                }
            }
            ?>

            <?php if ($namma == 1) { ?>
                <div class="subNameBox">
                    <h1><?php echo $row['SubCode'] ?> </h1>
                    <h1><?php echo $row['SubName'] ?> </h1>
                </div>
            <?php } ?>

*/