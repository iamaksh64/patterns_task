<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 25</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <form method="post">
    Number 1: <input type="number" name="num1" id=""><br><br>
    Number 2: <input type="number" name="num2" id=""><br><br>
    <input type="submit" name="submit" class="btn btn-primary">
  </form>
  <br>
  <?php
  if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($num1%2==0){
      echo $n;
      for($i=$num1-2;$i<=$num2;$i=$i+2){
        for($j=$num1-2;$j<$i;$j=$j+2){
          echo $i;
        }
        echo "<br>";
      }
    }
    else{
      $d = $num1 + 1;
      for($i=$d-2;$i<=$num2;$i=$i+2){
        for($j=$d-2;$j<$i;$j=$j+2){
          echo $i;
        }
        echo "<br>";
      }
    }
  }
  ?>
</body>
</html>