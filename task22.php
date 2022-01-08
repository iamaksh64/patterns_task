<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern22</title>
</head>
<body>
<?php
for($i=5;$i>=1;$i--){
    for ($k = 1; $k <= 5 - $i; $k++) {
        echo "&nbsp";
     }
    for($j=1;$j<=$i;$j++){
        echo $i;
    }
    echo "<br>";
}

for($i=2;$i<=5;$i++){

    for ($k = 1; $k <= 5 - $i; $k++) {
        echo("&nbsp");
     }
    for($j=1;$j<=$i;$j++){
        echo $i;
    } 
    echo "<br>";

    
}
?>

</body>
</html>