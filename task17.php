<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pattern17</title>
</head>
<body>

 <?php
$a = 5;

for ($i = 1; $i <= 5; $i++)
	{

		for($j = 2; $j <= $i; $j++ )
		{
			echo "&nbsp&nbsp";
		}
		for($k = 1; $k <= $a; $k++ )
		{
			$p = $k + $i - 1;
			echo "$p";
		}
		$a--;
		echo "<br>";
	}

?>
</body>
</html>