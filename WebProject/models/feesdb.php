<?php 
    require_once('db.php');

    function addFees($user){
        $con = getConnection();
        $total = $user['tuition'] + $user['labs'] + $user['miscellaneous'] + $user['activities'];
        $sql = "insert into fees values('', '{$user['username']}', '{$user['tuition']}', '{$user['labs']}', '{$user['miscellaneous']}', '{$user['activities']}', '{$total}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    

    function readFees($username){
        $con = getConnection();
        $sql = "select * from fees where username = '$username'";
        $info = mysqli_query($con, $sql);
        return $info;
    }
    


?>