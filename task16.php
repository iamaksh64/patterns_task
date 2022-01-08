<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern16</title>
</head>
<body>
  <?php
    for($i=4;$i>=0;$i--){
      for($j=0;$j<5;$j++){
        if($i==5){
          continue;
        }
        if($j<$i){
          echo "&nbsp&nbsp;";
        }
        else{
          echo $j-$i+1;
        }
      }
      echo "<br>";
    }
  ?>
</body>
</html>