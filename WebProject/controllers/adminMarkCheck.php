<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <?php

// $marks_file = "../models/marks.txt";

// if (!file_exists($marks_file)) {
//     die("Marks file does not exist.");
// }

// // form submission check krbe
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $username = $_POST["username"];
//     $marks = $_POST["marks"];
//     $course = $_POST["course"];

//     // file append krbe
//     $handle = fopen($marks_file, "a");

//     fwrite($handle, $username . "||" . $marks . "||" . $course . "\n");

    
//     fclose($handle);
// }

?>


<?php
session_start();
require_once('../models/userMarks.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $marks = $_POST['marks'];
    $course = $_POST['course'];
    // $confirm_password = $_POST['confirm_password'];

    // Validate
    if (empty($username) || empty($marks) || empty($course)) {
        echo '<p>All fields are required.</p>';
    }
    else{
       $user = ['username'=>$username, 'marks'=> $marks, 'course'=> $course];
        $status = addMark($user);
            
        if($status){
            header('location: ../views/admin.php');
        }else{
            echo "<p>DB error, please try again</p>";
        }
    }
}else{
        
    header('location: ../views/admin.php');
}
?>
        </div>
    </div>
</body>
</html>