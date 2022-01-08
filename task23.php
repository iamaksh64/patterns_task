<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 23</title>
</head>
<body>
  <?php
    for($i=1;$i<=5;$i++){
      for($j=5;$j>$i;$j--){
        echo "&nbsp;&nbsp;";
      }
      for($k=1;$k<=$i;$k++){
        echo $k;
      }
      for($l=$i-1;$l>=1;$l--){
        echo $l;
      }
      echo "<br>";
    }
  ?>
</body>
</html>