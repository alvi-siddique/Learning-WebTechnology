<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<script>
  function validateLogin() {
    // Get form inputs
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Check if all fields are filled
    if (username == "" || password == "") {
      alert("All fields are required!");
      return false;
    }
  
    // Check if username and password match the registration data
    if (username != "exampleuser" || password != "examplepassword") {
      alert("Invalid username or password!");
      return false;
    }
  
    // If all checks pass, login
    alert("Login successful!");
    return true;
  }
  
</script>
</body>
</html>