<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern15</title>
</head>
<body>
  <?php
for($i=5;$i>=1;$i--)
 {
   for($j=$i;$j>=1;$j--)
    {
     echo $j."";
     if($j==1)
     {
       echo " ";
       echo "<br>";
     }
   }
} 

?>
</body>
</html>