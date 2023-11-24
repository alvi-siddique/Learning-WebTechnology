<?php
include '../models/userModel.php';
$data = [];
$info = readUser();
if ($info->num_rows > 0) {
    while($row = $info->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);

//echo json_encode(readUser());

// function loadUserData()
// {
//     $info = readUser();
//     echo json_encode($info);
// }

// loadUserData();

// if ($info->num_rows > 0) {
//     while($row = $info->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["username"] . "</td>";
//         echo "<td>" . $row["email"] . "</td>";
//         echo "</tr>";
//     }
// } else {
//     echo "0 results";
// }