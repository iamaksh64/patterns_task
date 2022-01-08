<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern24</title>
</head>
<body>
  <?php
    for($i=1;$i<=5;$i++){
      for($j=1;$j<=$i;$j++){
        echo $j;
      }
      for($j=$i*2;$j<5*2;$j++){
        echo " &nbsp;";
      }
      for($l=$i;$l>=1;$l--){
        echo $l;
      }
      echo "<br>";
    }
  ?>
</body>
</html>