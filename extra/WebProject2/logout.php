<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>

<?php 

    setcookie("username","");
    setcookie("password","");    

    setcookie('flag', 'true', time()-10, '/');
    header("location: login.php");

?>