<?php
$file_path = 'data/userPass.txt';

// form submitted kina check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //form data nibe
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate
    if (empty($name) || empty($password)) {
        $error_message = 'All fields are required.';
    } elseif ($name == 'admin' && $password == 'admin') {
        // Login admin
        session_start();
        $_SESSION['user_type'] = 'admin';
        header('Location: admin.php');
        exit;
    } else {
        // Check user existsance
        $user_data = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($user_data as $user) {
            list($user_name,  $user_password, $user_email) = explode('||', $user);
            if ($name == $user_name && $password == $user_password) {
                // Login user
                session_start();
                $_SESSION['user_type'] = $name;
                setcookie('flag', 'true',time()+3600,'/'); // set cookie for user
                header('Location: home.php');
                exit;
            }
        }

        $error_message = 'Invalid name or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login">
        <p>Don't have an account? <a href="reg.php">create one </a> </p>
        <a href="forgotpass.php">Forgot password?</a>
    </form>
</body>
</html>
