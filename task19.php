<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern 19</title>
</head>
<body>
  <?php
$n=8;
for($i=1;$i<=$n;$i++){
    if($i%2==0){
        continue;
    }
    for ($k = 1; $k <= $n - $i; $k++) {
        echo "&nbsp";
     }
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "<br>";

}


for($i=6;$i>=1;$i--){
    if($i%2==0){
        continue;
    }
    for ($k = 1; $k <= $n - $i; $k++) {
        echo "&nbsp";
     }
    for($j=1;$j<=$i;$j++){
        echo($j);
    }
    echo "<br>";
    
}?>
</body>
</html>