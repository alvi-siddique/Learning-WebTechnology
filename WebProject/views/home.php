<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Dashboard</title>
</head>
<body>
<div class="bg">
    <div class="o">
    <?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Welcome home! <?=$_SESSION['username']?></h1>

    <a href="notification.php">Notification</a> <br>
    <a href="findUs.php">Find Us</a><br>
    <a href="contact.php">Contact Us</a> <br>
    <a href="viewFees.php">View tuition fees</a><br>
    <a href="view-results.php">Results</a><br>
    <a href="changeInfo.php">Update your Information</a><br>
    <br>
    <br>
    <a href="../controllers/logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>
    </div>
</div>


</body>
</html>