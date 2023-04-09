<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View your fees</title>
</head>
<body>
    



<?php
    require_once('../models/feesdb.php');
    session_start();
    $username = $_SESSION['username'];
    $fees = readFees($username);
    ?>
<table width="30%" >
    <?php while ($row = mysqli_fetch_assoc($fees)) { ?>
    <tr>
        <td><b>Tuition:</b></td>
        <td><?php echo $row['tuition']; ?></td>
    </tr>
    <tr>
        <td><b>Labs:</b></td>
        <td><?php echo $row['labs']; ?></td>
    </tr>
    <tr>
        <td><b>Miscellaneous:</b></td>
        <td><?php echo $row['miscellaneous']; ?></td>
    </tr>
    <tr>
        <td><b>Activities:</b></td>
        <td><?php echo $row['activities']; ?></td>
    </tr>
    <tr>
        <td><b>Total:</b></td>
        <td><?php echo $row['total']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
