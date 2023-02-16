<?php
  if(isset($_POST['submit_button'])){
     $name = $_POST['name'];

    $error = [];
    if(empty($_POST['name'])){
        $error['name'] = 'Insert a Name';
    }
    else{
        echo "Name : ". $name;
    }

  }
?>

<html>
<head>
<title>Name</title>
</head>
<body>
  <div>
    <table>
      <td>
      <form action="" method="post" >
      <fieldset>
        <legend>Name</legend>
        <hr>
        <input type="text"  name="name" value="<?php if(isset($name)) echo $name ?>" >
        <span>
          <?php
          if(isset($error['name'])){
            echo $error['name'];
          }
            ?>
        <br>
        </span>

      <button type="submit"  name ="submit_button">Submit</button>
      </fieldset>
  </form>
  </div>
  </td>
  </table>
</body>
</html>
