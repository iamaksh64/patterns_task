<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern9</title>
</head>
<body>
  <?php
$a = range('A','Z');
for($i=0;$i<5;$i++){
    for($j=0;$j<=4-$i;$j++){
        echo " &nbsp"; 
    }
    for($j=0;$j<=$i;$j++){
      echo "&nbsp".$a[$i]."&nbsp;";
    }
    echo "<br>";
  }
?>
</body>
</html>