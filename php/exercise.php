<!DOCTYPE html>  
<html>  
<head> 
	<?php  
		$var = "PHP Tutorial";  
	?> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8">  
	<title><?php echo $var; ?> - DevTools</title>  
</head>  
<body>  
	<h1><?php echo $var; ?></h1>  
	<p>PHP, an acronym for PHP Hypertext Preprocessor, is a widely-used open source general-purpose scripting language.</p>  
	<p><a href="http://www.php.net">Go to the <?php echo $var; ?></a>.</p> 
	
	<?php
	
		$color = array("white", "green", "red", array("yellow", "pink"));
		
		echo "<p>\"The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon\"</p>";
		
		//echo $color[3];
		
		print_r($color);
		
		//echo $color[1];
		
		echo $color[3][0];
	
	?>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	 
</body>  
</html> 
