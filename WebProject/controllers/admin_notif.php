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
// form theke data neya
session_start();
require_once('../models/notifdb.php');
$notice = $_POST['notice'];
$time = date("Y-m-d H:i:s");

if (empty($notice)) {
    echo '<p>Notice can not be empty</p>';
} else {
    $user = ['notice'=>$notice, 'time'=> $time];
        $status = addNot($user);
            
        if($status){
            header('location: ../views/admin.php');
        }else{
            echo "<p>DB error, please try again</p>";
        }

}

//DB=======================

// $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');


// $sql = "insert into notification values('','$message' , '$time' )";
// $status=mysqli_query($con, $sql);
// header('Location: ../views/admin.php');




?>

        </div>
    </div>
</body>
</html>