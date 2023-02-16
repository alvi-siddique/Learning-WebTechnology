<html>
<head>
<title>Blood group</title>
</head>
<body>
    <table>
      <td>
    <form action="" method="post" novalidate>
      <fieldset>
        <legend>Blood Group</legend>
        <hr>
        <select name="blood">
          <option value=""></option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="O+">O+</option>
        </select>
            <br>
      <button type="submit" name ="submit_button">Submit</button>
      </fieldset>
  </form>
  </td>
  </table>
  <?php
  if(isset($_POST['submit_button'])){
     $blood = $_POST['blood'];

    $error = [];
    if(empty($_POST['blood'])){
        $error['blood'] = 'Insert Your blood group';
    }
    else{
        echo "Blood Group is : ". $blood;
    }

  }
?> 
</body>
</html>