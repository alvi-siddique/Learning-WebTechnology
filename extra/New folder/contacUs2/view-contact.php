<?php
// read contact information from external file
$file = fopen('contact.txt', 'r');
$address = fgets($file);
$telephone = fgets($file);
$email = fgets($file);
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Information</title>
</head>
<body>
    <h2>Contact Information</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>Telephone No.</td>
            <td><?php echo $telephone; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>
