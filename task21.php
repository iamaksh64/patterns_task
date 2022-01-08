<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern21</title>
</head>
<body>
  <?php
$n = 5;
$num = 5;
for ($i = 0; $i < $n; $i++) {
    for ($s = 0; $s < $i; $s++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < $n - $i; $j++) {
        echo $num;
    }
    $num = $num - 1;
    echo '<br>';
}
?>
</body>
</html>