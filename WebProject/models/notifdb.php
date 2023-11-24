<?php 
    require_once('db.php');

    function addNot($user){
        $con = getConnection();
        // $sql = "insert into notification values('','$message' , '$time' )";
        $sql = "insert into notification values('', '{$user['notice']}', '{$user['time']}' )";
        $status=mysqli_query($con, $sql);
        return $status;
    }

    function readNot(){
        $con = getConnection();
        $sql = "select * from notification";
        $info = mysqli_query($con, $sql);
        return $info;
    }


?>