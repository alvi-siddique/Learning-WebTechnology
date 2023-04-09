<?php
// form theke data neya
$message = $_POST['message'];
$time = date("Y-m-d H:i:s");

//DB=======================

$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');


$sql = "insert into notification values('','$message' , '$time' )";
$status=mysqli_query($con, $sql);
header('Location: ../admin.php');

?>
