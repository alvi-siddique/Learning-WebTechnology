<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from employee where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into employee values('', '{$user['name']}', '{$user['contactNo']}','{$user['username']}', '{$user['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function updateUser($user) {
        $con = getConnection();
        $sql = "UPDATE employee SET password='{$user['password']}', contactNo='{$user['contactNo']}', name='{$user['name']}' WHERE username='{$user['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    
    function deleteUser($user) {
        $con = getConnection();
        $sql = "DELETE FROM employee WHERE username='{$user['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchUser($username) {
        
        $con = getConnection();
        $sql = "SELECT * FROM employee WHERE username LIKE '%$username%'";
        $result = mysqli_query($con, $sql);
      
        return $result;
      
      }
?>