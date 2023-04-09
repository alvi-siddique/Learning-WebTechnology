<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
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
        $sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function readUser(){
        $con = getConnection();
        $sql = "select * from users";
        $info = mysqli_query($con, $sql);
        return $info;
    }

    function updateUser($user) {
        $con = getConnection();
        $sql = "UPDATE users SET password='{$user['password']}', email='{$user['email']}' WHERE username='{$user['username']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    
    function retrieve_password($username, $email) {
        $con = getConnection();

        // Query the database to retrieve the password for the specified user
        $sql = "SELECT password FROM users WHERE username = '$username' AND email = '$email'";
        $result = mysqli_query($con, $sql);

        // Check if a password was found
        if (mysqli_num_rows($result) > 0) {
            // Retrieve the password and return it
            $row = mysqli_fetch_assoc($result);
            return "Your password is:". $row['password'];
        } else {
            // Return an error message
            return "Invalid username or email";
        }
}


    



?>