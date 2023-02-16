<?php
  if(isset($_POST['submit_button'])){
     $degree = $_POST['degree'];

    $error = [];
    if(empty($_POST['degree'])){
        $error['degree'] = '<br> Insert Your degree';
    }
    else{
        echo "degree is : ". $degree;
    }

  }
?>

<html>
<head>
<title>Degree</title>
</head>
<body>
  
    <table>
      <td>
    <form action="" method="post" novalidate>
      <fieldset>
        <legend>degree</legend>
        <hr>
        <input type="checkbox"  name="degree"  id="SSC" value="SSC">SSC
        <input type="checkbox"  name="degree" id="HSC" value="HSC">HSC
        <input type="checkbox"  name="degree" id="BSc" value="BSc">BSc
        <input type="checkbox"  name="degree" id="MSc" value="MSc">MSc
        <br>
        <button type="submit" name ="submit_button">Register</button>
    </fieldset>
    <span>
      <?php
      if(isset($error['degree'])){
        echo $error['degree'];
      }
        ?>
    <br>
    </span>
</form>
  
  </td>
  </table>
</body>
</html>