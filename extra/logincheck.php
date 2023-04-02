<?php 
    session_start();
    
    
    if(isset($_REQUEST['login'])){
        
        // 1
        // $username = $_REQUEST['username'];
        // $password = $_REQUEST['password'];

        if($_POST['username'] == "" && $_POST['password'] == ""){
            echo "null data found...";
?>

<br>
<a href="userLogin.php">Try again</a>

<?php    
        } 
        elseif ($name == 'admin' && $password == 'admin') {
            // Login as admin
            session_start();
            $_SESSION['user_type'] = 'admin';
            header('Location: admin.php');
            exit;}

        else{
            $file = file('data/userPass.txt');
            $found = false;

            foreach($file as $line) {
                $parts = explode('||', $line);
                $username = trim($parts[0]);
                $password = trim($parts[1]);
            
                if($username == $_POST['username'] && $password == $_POST['password'] ) {
                    $found = true;
                    break;
                }
                
            }
            

            if($found) {
                // allow access to the desired content
                // echo "Access granted.";
                $_SESSION['username'] = $username;
                setcookie('flag', 'true',time()+3600,'/');
                header('location: home.php');

                if(!empty($_POST["remember"])) {
                    setcookie ("username",$_POST["username"],time()+ 3600);
                    setcookie ("password",$_POST["password"],time()+ 3600);
                    
                } else {
                    setcookie("username","");
                    setcookie("password","");
                    
                }
            }
                   
            else {
                // deny access
                echo "Access denied.";
            }
?>

<br>
<a href="userLogin.php">Try again</a>

<?php
        }
    
    
    }else{
        header('location: userLogin.php');
    }

?>