<?php


$user_file = "../data/userPass.txt";


if (!file_exists($user_file)) {
    die("User file does not exist.");
}

//file theke info read
$user_data = file_get_contents($user_file);


if (empty($user_data)) {
    die("No user information found.");
}


$user_data = explode("\n", $user_data);


echo "<table>";
echo "<tr><th>Username</th><th>Email</th></tr>";
foreach ($user_data as $user) {
    $user_info = explode("||", $user);
    echo "<tr><td>{$user_info[0]}</td><td>{$user_info[2]}</td></tr>";
}
echo "</table>";

?>
