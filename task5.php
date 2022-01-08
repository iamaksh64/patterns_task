<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pattern5</title>
</head>
<body>
  <?php
  for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
		echo "*&nbsp;";
    }
  echo "<br />";
  }
  ?>
</body>
</html>