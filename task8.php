<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern8</title>
</head>
<body>
  <?php
  $n = range('A', 'Z');
  $k = 0;
  for($i=0; $i<=4; $i++)
  {
  for($j=0; $j<=$i; $j++)
    echo $n[$k++];
    echo "<br>";
}
?>
</body>
</html>