<?php
session_start();

// check if admin is logged in
if (!isset($_SESSION['admin_username']) || $_SESSION['admin_username'] !== 'admin') {
    header('Location: admin-login.php');
    exit;
}

// read all users from external file
$users = file('users.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <?php $data = explode(',', $user); ?>
                <tr>
                    <td><?php echo $data[0]; ?></td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="admin-logout.php">Logout</a>
</body>
</html>
