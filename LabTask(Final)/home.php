<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>



<h1>Welcome home! <?=$_SESSION['user_type']?></h1>

    <a href="notification/notification.php">Notification</a> <br>
    <br>
    <br>
    <a href="logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>

