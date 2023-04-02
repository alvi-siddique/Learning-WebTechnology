<?php
// load user information from external file
$file = fopen('users.txt', 'r');
$users = [];
while ($line = fgets($file)) {
    $user = json_decode($line, true);
    $users[$user['username']] = $user;
}
fclose($file);

// get current user's information
session_start();
$current_username = $_SESSION['username'];
$current_user = $users[$current_username];

// handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate form data
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_password = $_POST['password'];
    $new_confirm_password = $_POST['confirm_password'];

    $errors = [];
    if (empty($new_username)) {
        $errors[] = 'Username is required.';
    }
    if (empty($new_email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    } elseif ($new_email !== $current_user['email'] && array_key_exists($new_email, $users)) {
        $errors[] = 'Email already exists.';
    }
    if (!empty($new_password) && strlen($new_password) < 8) {
        $errors[] = 'Password must be at least 8 characters long.';
    }
    if ($new_password !== $new_confirm_password) {
        $errors[] = 'Password and confirm password do not match.';
    }

    // update user information if there are no errors
    if (empty($errors)) {
        $current_user['username'] = $new_username;
        $current_user['email'] = $new_email;
        if (!empty($new_password)) {
            $current_user['password'] = password_hash($new_password, PASSWORD_DEFAULT);
        }
        $users[$new_username] = $current_user;

        // save updated user information to external file
        $file = fopen('users.txt', 'w');
        foreach ($users as $user) {
            fwrite($file, json_encode($user) . "\n");
        }
        fclose($file);

        // redirect to user dashboard
        header('Location: dashboard.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Personal Information</title>
</head>
<body>
    <h2>Update Personal Information</h2>
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $current_user['username']; ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $current_user['email']; ?>" required>
        <br>
        <label>New Password:</label>
        <input type="password" name="password">
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">
        <br>
        <button type="submit">Update Information</button>
    </form>
</body>
</html>
