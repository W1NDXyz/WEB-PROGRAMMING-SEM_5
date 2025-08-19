<!DOCTYPE html>
<html>
	<head>
		<title>Declare Variable in PHP</title>
	</head>

	<body>


		<?php
			$num1 = 10;
			$num2 = 5;

			$num = $num1 + $num2;
			$different = $num1 - $num2;
			$multiple = $num1 * $num2;
			$division = $num1 / $num2;
			$modules = $num1 % $num2;

            echo "<h2>Operation Test</h2><br>";
			echo "<b>Total:</b> $num<br>";
			echo "<b>Different:</b> $different<br>";
			echo "<b>Multiple:</b> $multiple<br>";
			echo "<b>Division:</b> $division<br>";
			echo "<b>Modules:</b> $modules<br>";

		?>
	</body>
</html>
