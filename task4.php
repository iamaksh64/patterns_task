<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern4</title>
</head>
<body>
<?php
for($i=1; $i<=5; $i++)
{
 for($j=1; $j<$i; $j++)
  echo "&nbsp;&nbsp;";
 for($k=5; $k>=$i; $k--)
  echo "*";
 echo "<br>";
}
?>
</body>
</html>