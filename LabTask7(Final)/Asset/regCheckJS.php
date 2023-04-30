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
    var name = document.getElementById("name").value;
    var contactNo = document.getElementById("contactNo").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
  

    if (name == "" || username == "" || contactNo == "" || password == "" || confirmPassword == "") {
      alert("All fields are required!");
      return false;
    }

    alert("Form submitted successfully!");
    return true;
  }
  
</script>
</body>
</html>