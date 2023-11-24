<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <?php
// session_start();
// // Get the form data
// $username = $_POST["username"];
// $tuition = $_POST["tuition"];
// $labs = $_POST["labs"];
// $miscellaneous = $_POST["miscellaneous"];
// $activities = $_POST["activities"];

// // Check if the user exists in the external file
// $user_exists = false;
// $file_data = file_get_contents("../data/userPass.txt");
// $users = explode("\n", $file_data);
// foreach($users as $user) {
//     $user_data = explode("||", $user);
//     if($user_data[0] == $username) {
//         $user_exists = true;
//         break;
//     }
// }

// // If the user exists, calculate the total and partial fees
// if($user_exists) {
//     $total = $tuition + $labs + $miscellaneous + $activities;
//     $partial = $total * 0.6; // 60% of total
    
//     // Update the user's fees data in the external file
//     $new_file_data = "";
//     foreach($users as $user) {
//         $user_data = explode("||", $user);
//         if($user_data[0] == $username) {
//             $user_data[4] = $tuition;
//             $user_data[5] = $labs;
//             $user_data[6] = $miscellaneous;
//             $user_data[7] = $activities;
//             $user_data[8] = $total;
//             $user_data[9] = $partial;
//             $new_user_data = implode("||", $user_data);
//             $new_file_data .= $new_user_data . "\n";
//         } else {
//             $new_file_data .= $user . "\n";
//         }
//     }
//     file_put_contents("../data/userPass.txt", $new_file_data);
    
//     // Redirect to the admin dashboard
//     header("Location: ../admin.php");
//     exit();
// } else {
//     // If the user doesn't exist, display an error message and a link to the admin dashboard
//     echo "Error: User not found.<br>";
//     echo "<a href=\"admin.php\">Back to dashboard</a>";
// }
?>

<?php
session_start();
require_once('../models/feesdb.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST["username"];
    $tuition = $_POST["tuition"];
    $labs = $_POST["labs"];
    $miscellaneous = $_POST["miscellaneous"];
    $activities = $_POST["activities"];

    // Validate
    if (empty($username) || empty($tuition) || empty($labs) || empty($miscellaneous) || empty($activities)) {
        echo '<p>All fields are required.</p>';
    }
    else{
       $user = ['username'=>$username, 'tuition'=> $tuition, 'labs'=> $labs, 'miscellaneous'=> $miscellaneous, 'activities'=> $activities, 'total'=> $total];
        $status = addFees($user);
            
        if($status){
            header('location: ../views/admin.php');
        }else{
            echo "<p>DB error, please try again</p>";
        }
    }
}else{
        
    header('location: ../views/admin.php');
}
?>
        </div>
    </div>
</body>
</html>