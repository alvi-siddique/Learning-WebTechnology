<?php
session_start();
require_once('../models/userModel.php');

// form submitted kina check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //form data nibe
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate
    if (empty($username) || empty($password)) {
        echo 'All fields are required.';
    } elseif ($username == 'admin' && $password == 'admin') {
        // Login admin
        session_start();
        $_SESSION['user_type'] = 'admin';
        header('Location: ../views/admin.php');
        exit;
    } else{

        $status = auth($username, $password);
         if($status){
             $_SESSION['flag'] = "true";
             session_start();
            $_SESSION['username'] = "$username";
             header('location: ../views/home.php');
         }else{
             echo "invalid user";
         }
     }
}else{
        
    header('location: ../index.html');
}
?>