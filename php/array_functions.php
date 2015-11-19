<!doctype html>
<html lang ="en">
<head>
	<meta charset ="utf-8">
	<title>Array functions</title>
</head>
<body>
	
	<!--<p>This is how we count the elements in an array</p>

	<?php
		$users = ["Mary", "Megan", "Odelia", "Jon", 
				"Aline", "Ting", "Alejandro"];
		$number_users = count($users);
		echo "$number_users <br>";

		print_r($users);

		//echo count($users); 
	?>

	<br> 

	<pre>
	<?php print_r($users); ?>
	</pre>

	<ul>
		<li><?php echo $users[0]; ?></li>
		<li><?php echo $users[1]; ?></li>
		<li><?php echo $users[2]; ?></li>
		<li><?php echo $users[3]; ?></li>
		<li><?php echo $users[4]; ?></li>
		<li><?php echo $users[5]; ?></li>
		<li><?php echo $users[6]; ?></li>
		<li><?php echo $users[7]; ?></li>
	</ul> -->

	

	<h2>Array functions</h2>
	
	<?php $numbers = array(8, 23, 56, 9, 15, 12);
		print_r($numbers);
	?>

	<br>

	<?php 

		$names = array("Salima", "Antonio", "Krystal", "Christine");
		print_r($names);
	?>
	
	<p>Count:	<?php echo count($numbers); ?><br>
	Max value:	<?php echo max($numbers); ?><br>
	Min value:	<?php echo min($numbers); ?><br>
	</p> 

	<p>Count:	<?php echo count($names); ?><br>
	Max value:	<?php echo max($names); ?><br>
	Min value:	<?php echo min($names); ?><br>
	</p> 
	
	



	<!--<h2>Sorting values in arrays</h2>
	<?php print_r($numbers); ?>
	
	<p><pre>
	Sort: <?php echo sort($numbers); print_r($numbers); ?><br>
	Reverse sort: <?php echo rsort($numbers); print_r($numbers); ?><br>
	</pre>
	Note that sort of a destructuve function: our array is now in the new order, it has been changed "in place"
	</p>-->
	
	<!--<h2>Implode and Explode an array</h2>
	
	<p>This is really handy if you want to turn a comma seperated list for example, into array.  You will often get
	csv files that have a lot of info in them and you may want to turthat name, lastname, address, etc into an
	array.<br>
	First, turning an array into a string is done using the function implode:</p>
	
	<?php echo implode(" + ", $numbers); ?><br>
	
	<?php $string = "Christine, McGlade, 243 Roxton Road, M6G3R1";
	$new_array = explode(", ", $string);
	print_r($new_array);
	?><br>-->
	
	<!--<h2>keys and values</h2>
	<p>will return the keys and the values only from an associative array<br>
	looks like: array_keys() or array_values()</p>-->
	
	
	
	

</body>
</html>
