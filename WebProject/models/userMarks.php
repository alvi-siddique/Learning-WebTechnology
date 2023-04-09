<?php 
    require_once('db.php');

    function addMark($user){
        $con = getConnection();
        $sql = "insert into usermarks values('', '{$user['username']}', '{$user['marks']}', '{$user['course']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readMark(){
        $con = getConnection();
        $sql = "select * from usermarks";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function selfMark($username){
        $con = getConnection();
        $sql = "select * from usermarks where username = '$username'";
        $self = mysqli_query($con, $sql);
        return $self;
    }


?>