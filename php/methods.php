<!doctype html>
<html lang ="en">
<head>
	<meta charset ="utf-8">
	<title>Get, Post, and Cookie</title>
</head>
<body>
	<h1>Getting Info From users</h1>
	
	<?php
		$names = array("christine", "sasha", "quinn", "cameron");
		
		print_r($names);
		
		echo "<br><br>";
		
		foreach ($names as $name) {
			$new = ucfirst($name);
			echo "$new <br>";
		}
	?>
	
	<!--<p><?php print_r($names); ?></p>
	Note that this didn't change our array-->
	
	
</body>
</html>
