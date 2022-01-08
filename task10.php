<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern10</title>
</head>
<body>
  <?php
  function task10($n){

      for($i=1;$i<=$n;$i++)
      {
        for($k=6;$k>=$i;$k--)
        {
          echo "  ";
        }
        for($j=0;$j<$i;$j++)
        {
          echo "*";
        }
        echo "<br>";
      }
      for($i=5;$i>=1;$i--)
        {
          for($k=6;$k>=$i;$k--)
          {
            echo "  ";
          }
          for($j=0;$j<$i;$j++)
          {
            echo "*";
          }
        echo "<br>";
      }
  }

  $n = 6;
  task10($n);

?>
</body>
</html>