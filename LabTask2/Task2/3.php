<?php
  if(isset($_POST['submit_button'])){
     $dob = $_POST['dob'];

    $error = [];
    if(empty($_POST['dob'])){
        $error['dob'] = 'Insert DOB';
    }
    else{
        echo "Date of birth is : ". $dob;
    }

  }
?>


<html>
<head>
<title>DOB</title>
</head>
<body>
  <div>
    <table>
      <td>
      <form action="" method="post" >
      <fieldset>
        <legend>Date of Birth</legend>
        <hr>
        <input type="date"  name="dob"  value="<?php if(isset($dob)) echo $dob ?>" >
        <span>
          <?php
          if(isset($error['dob'])){
            echo $error['dob'];
          }
            ?>
        <br>
        </span>
        <button type="submit" name ="submit_button">Submit</button>
        </fieldset>
        </form>
        </div>
        </td>
    </table>
</body>
</html>
