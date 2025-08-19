<!DOCTYPE html>
<html>
	<head>
		<title>Declare Variable in PHP</title>
	</head>

	<body>


		<?php
			define("PI" , 3.124);
			define("Name" , "FOO");
			$radus = 10;

			// formula perimeter & area of circle
			$perimeter = 2 * PI * $radus;
			$area = PI * ($radus * $radus);

            echo "<h2>Calculation the Circle</h2><br>";
			echo "<b>Perimeter of Circle:</b> $perimeter<br>";
			echo "<b>Area of Circle:</b> $area";
			echo "<h6>Solve by  ". Name,"</h6>";

		?>
	</body>
</html>
