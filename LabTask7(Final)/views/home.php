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



<h1>Welcome home! <?=$_SESSION['username']?></h1> <br> <br> <br>


    <a href="../controllers/logout.php">Log out</a>


<?php
    }else{
        echo "<p>invalid request, please login first...</p>";
?>

<br>
<a href="login.php">Try again</a>

<?php
    }

?>
    </div>
</div>

<script src="../Asset/loadNot.js"></script>


</body>
</html>