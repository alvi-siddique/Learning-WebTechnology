<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        $name = $_REQUEST['name']; 
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $cpassword = $_REQUEST['cpassword']; 
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob']; 

        if($name == "" && $username == "" &&  $password == "" && $cpassword="" && $gender="" && $dob="") {
            echo "Null value ...";
        }else{
           $file = fopen('user.txt', 'a');
           $user = $name."|".$username."|".$password."|".$cpassword."|".$gender."|".$dob."\r\n";
           fwrite($file, $user);
            header('location: login.php');
        }
    }else{
        echo "invalid request...";
    }
?>




