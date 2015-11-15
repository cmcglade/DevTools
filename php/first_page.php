<!doctype html>
<html lang ="en">
<head>
	<meta charset ="utf-8">
	<title>First Page</title>
</head>
<body>
	
	<a href="second_page.php">Second Page</a><br>
	
	<?php $link_name = "Second Page"; ?>
	<?php $id = 3; ?>
	
	<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
	  
	
	
	
</body>
</html>