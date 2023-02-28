<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <center>
    <table border="1" width="80%" >
        <tr>
            <td width="70%">
                <p>X Company</p>
            </td>
            
            <td>
                <a href="#">Home</a>
                <a href="#">Login</a>
                <a href="reg.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <br>
                <br>
                <br>
            <form method="POST" action="regCh.php" enctype="">
            <fieldset>
                <legend>Registration</legend>
                Name: <input type="text" name="name" value=""/> <br> <hr>
                Username: <input type="text" name="username" value=""/> <br> <hr>
                Password: <input type="password" name="password" value=""/> <br> <hr>
                Confirm Password: <input type="password" name="cpassword" value=""/> <br> <hr>
                
                <fieldset>
                    <legend>Gender</legend>
        
                    <input type="radio" id="Male" name="gender" value="Male">Male
                    <input type="radio"  id = "Female" name="gender" value = "Female">Female
                    <input type="radio"  id = "Other" name="gender" value = "Other">Other
                </fieldset>


                <fieldset>
                <legend>Date of Birth</legend>
                    <input type="date"  name="dob"  value="" >
                    (dd/mm/yyyy)
                </fieldset>


                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="reset"/>
            </fieldset>
            
        </form> 
        <br>   
        <br>   
        <br>   
        <br>   


            </td>
        </tr>
        <tr>
            <th colspan="5">
                <h6>Copywrite &copy; 2017 </h6>
            </th>
        </tr>
    </table>
    </center>
</body>
</html>