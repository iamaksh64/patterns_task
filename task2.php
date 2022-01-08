<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=10">
 <title>Pattern2</title>
</head>
<body>
 <?php
  $n = 5;
  $k = 2*$n-2;
  for($i=0;$i<$n;$i++){
    for($j=0;$j<$k;$j++){
      echo "&nbsp";
    }
    $k = $k - 2;
    
    for($j=0;$j<=$i;$j++){
      echo "*";
    }
    echo "<br>";
  }
 ?>
</body>
</html>