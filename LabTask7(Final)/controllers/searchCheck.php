<?php
require_once("../models/userModel.php");

if (isset($_GET['username'])) {
  $username = $_GET['username'];
  $result = searchUser($username);
  if ($result->num_rows > 0) {
        echo "<table width='40%'>";
        echo "<tr><td><h3>Username</h3></td><td><h3>Name</h3></td><td><h3>Contact No.</h3></td></tr>";
        while ($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $name = $row["name"];
        $contact = $row["contactNo"];
        echo "<tr><td><p>$username</p></td><td><p>$name</p></td><td><p>$contact</p></td></tr>";
        echo '<button onclick="removeData()">Hide Information</button>';
        }
        echo "</table>";
    } else {
    echo "<p>No results found.</p>";
    }
}
?>