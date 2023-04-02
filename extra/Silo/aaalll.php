<?php

// get user's information from external file
$users = file("../data/userPass.txt");

foreach($users as $user){
  $info = explode("||", $user);
  
    $username = trim($info[0]);
    $email = trim($info[2]);
    break;
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Fees</title>
</head>
<body>
    <center>
      <h1>My Fees</h1>
  <table width="30%">
    <tr>
      <td><h5>Username</h5></td>
      <td><h5>Email</h5></td>
    </tr>
    <tr>
      <td><?php echo $username; ?></td>
      <td><?php echo $email; ?></td>
    </tr>
  </table>
  </center>
</body>
</html>
