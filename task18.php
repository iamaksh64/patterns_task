<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 18</title>
</head>
<body>
  <?php
  $k = 1;
  for($i=1;$i<=5;$i++){
    for($j=0;$j<$i;$j++){
      echo $k;
      $k++;
    }
    echo "<br>";
  }
  ?>
</body>
</html>