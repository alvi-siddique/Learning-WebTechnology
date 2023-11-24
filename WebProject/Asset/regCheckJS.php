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
  function validateForm() {

    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
  

    if (username == "" || email == "" || password == "" || confirmPassword == "") {
      alert("All fields are required!");
      return false;
    }


    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");
    if (atIndex < 1 || dotIndex < (atIndex+2) || (dotIndex+2) >= email.length) {
      alert("Invalid email!");
      return false;
    }
  

    if (password.length < 8) {
      alert("Password must be at least 8 characters long!");
      return false;
    }
  

    if (password != confirmPassword) {
      alert("Passwords do not match!");
      return false;
    }

  

    alert("Form submitted successfully!");
    return true;
  }
  
</script>
</body>
</html>