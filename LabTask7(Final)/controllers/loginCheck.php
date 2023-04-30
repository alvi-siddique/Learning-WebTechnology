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

// form submitted kina check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //form data nibe
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate
    if (empty($username) || empty($password)) {
        echo '<p>All fields are required.</p>';
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
             echo "<p>invalid user</p>";
         }
     }
}else{
        
    header('location: ../index.html');
}
?>
        </div>
    </div>
</body>
</html>