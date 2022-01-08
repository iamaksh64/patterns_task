<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <form method="post">
    Enter a number:<input type="number" name="num1" id=""><br><br>
    <input type="submit" name="submit" class="btn btn-primary">
  </form>
  <br>
  <?php
    if(isset($_POST['submit'])){
      $num = $_POST['num1'];
      for($i=9;$i>0;$i--){
      for($j=0;$j<10;$j++){
        if($i==10){
          continue;
        }
        if($j<$i){
          echo "_";
        }
        else{
          echo "*";
        }
      }
      echo "<br>";
    }

    for($i=0;$i<10;$i++){
      for($j=0;$j<10;$j++){
        if($j<$i){
          echo "_";
        }
        else{
          echo "*";
        }
      }
      echo "<br>";
    }
    }
  ?>
</body>
</html>