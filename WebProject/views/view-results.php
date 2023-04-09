<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    

<?php
    require_once('../models/userMarks.php');
    session_start();
    $username = $_SESSION['username'];
    $marks = selfMark($username);
    ?>
<table width="30%" >
    <thead>
        <tr>
            <td><h3>Course</h3></td>
            <td><h3>Marks</h3></td>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($marks)) { ?>
        <tr>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['marks']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
