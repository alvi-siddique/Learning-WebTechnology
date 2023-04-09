<?php
// form theke data neya
session_start();
require_once('../models/notifdb.php');
$notice = $_POST['notice'];
$time = date("Y-m-d H:i:s");

if (empty($notice)) {
    echo 'Notice can not be empty';
} else {
    $user = ['notice'=>$notice, 'time'=> $time];
        $status = addNot($user);
            
        if($status){
            header('location: ../views/admin.php');
        }else{
            echo "DB error, please try again";
        }

}

//DB=======================

// $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');


// $sql = "insert into notification values('','$message' , '$time' )";
// $status=mysqli_query($con, $sql);
// header('Location: ../views/admin.php');




?>
