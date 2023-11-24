<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Admin Portal</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <h1>Welcome Home Admin</h1>
    <a href="all.php">All students Information</a> <br> <br>
    <a href="findUs.php">Find Us</a><br> <br>
    <a href="allGrades.php">Result</a><br> <br> <br> <br>
    <a href="adminAnnounce.php">Announce</a><br> <br>
    <a href="adminMarks.php">Give marks</a><br> <br>
    <a href="add-fees.php">Give fees</a><br> <br> <br> <br>
    <a href="../controllers/logout.php">Log Out</a>
        </div>
    </div>

    <button onclick="loadUsers()">Load Data</button>
	<table>
		<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
		</tr>
		</thead>
		<tbody id="info-data">
		
		</tbody>
	</table>
		</div>
	</div>

	<script src="../Asset/loadUserData.js"></script>
    
</body>
</html>