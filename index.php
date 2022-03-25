<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="website for calculating area and perimeter">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP website calculating area for a Triangle</title>
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Area of a Triangle in PHP</h1></center><br>';
			echo "<p>This website allows you to calculate the area of a Triangle! <br> Enter the Height and Base below:</p>";
		?>
		<!-- Text field and button -->
		<form method = "post">
			Height: <input type="number" name="height">   
			<br><br>   
			Base: <input type="number" name="base"> <br>
			<br><br>
			<input type = "submit" name = "submit" value="Calculate">
		<!-- Calculations for area and perimeter (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
				$height = $_POST['height'];
				$base = $_POST['base'];
				$area = ($height*$base) / 2;
				$area = number_format($area, 2);
				echo "<br><br>The area of a Triangle with " . $height . "cm for a height and " . $base . "cm" . " for a base is $area" . "cm² <br>";   
			}
		?>
  </body>
</html>