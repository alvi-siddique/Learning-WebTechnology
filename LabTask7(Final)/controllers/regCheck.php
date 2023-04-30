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
session_start();
require_once('../models/userModel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $name = $_POST['name'];
    $contactNo = $_POST['contactNo'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate
    if (empty($username) || empty($name) || empty($contactNo) || empty($password) || empty($confirm_password)) {
        echo '<p>All fields are required.</p>';
    } elseif (strlen($password) < 8) {
        echo '<p>Password must be at least 8 characters long.</p>'; 
    }
    elseif ($password != $confirm_password) {
        echo '<p>Password does not match.</p>';
    }else{
        $user = ['username'=>$username, 'name'=>$name, 'password'=> $password, 'contactNo'=> $contactNo];
        $status = addUser($user);
            
        if($status){
            header('location: ../views/admin.php');
        }else{
            echo "<p>DB error, please try again</p>";
        }
    }
}else{
        
    header('location: ../views/login.php');
}
?>
        </div>
    </div>
</body>
</html>