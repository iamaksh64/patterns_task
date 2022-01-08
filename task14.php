<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 14</title>
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
    for($i=2;$i<$num+1;$i++){
        for($j=$i;$j<$num+1;$j++){
          echo " &nbsp;";
        }
        for($j=1;$j<=(2*$i-1);$j++){
          if($j%2==0){
            echo "*";
          }
          else{
            echo "_";
          }
        }
        echo "<br>";
      }

      for($i=$num+1;$i>1;$i--){
        for($j=$i;$j<$num+1;$j++){
          echo " &nbsp;";
        }
        for($j=1;$j<=(2*$i-1);$j++){
          if($j%2==0){
            echo "*";
          }
          else{
            echo "_";
          }
        }
        echo "<br>";
      }
  }
  
  ?>
</body>
</html>