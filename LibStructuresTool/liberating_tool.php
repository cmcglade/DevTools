<!doctype html>

<html lang ="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Structure Your Structure</title>
	
	<?php

	$goals_string = file_get_contents('goals.txt');
	$struc_string = file_get_contents('structures.txt');
	
	
	//take each item in the array and explode it into the number and string using = as the delimiter
	
	
	$temp = explode(";", $goals_string);
	$new_goals = array();
	foreach ($temp as $value) {
		$array = explode('=', $value);
		$array[1] = trim($array[1], '\t\n\r');
		$array[0] = trim($array[0], '\t\n\r');
		//int($array[0]);
		$new_goals[$array[0]] = $array[1];
	}
	
	$temp = explode(";", $struc_string);
	$new_struc = array();
	foreach ($temp as $value) {
		$array = explode('=', $value);
		$array[1] = trim($array[1], '\t\n\r');
		$array[0] = trim($array[0], '\t\n\r');
		//int($array[0]);
		$new_struc[$array[0]] = $array[1];
	}

	?>
	
</head>

<body>
	
	<!--<p>Here is the text file read into a string</p>
	<?php echo $goals_string; ?>-->

	<!-- <p>Here is the array that seperates the items</p>
	
	<pre>
	<?php print_r($goals); ?>
	</pre> -->
	
	<!--<p>Here is the associative array that makes the number of the goal the key</p>
	
	<pre>
		
	<?php print_r($new_goals); ?>
	
	</pre>-->

	<!--<pre>
		
	<?php print_r($new_struc); ?>
	
	</pre>-->
	
	<h1>Liberating Structures Stringing Tool</h1>

	<p>Choose 4 - 7 goals from the list below, assigning them a number that puts them in priority order</p><br>
	<form action ="" method="POST">
	
	<?php
		foreach($new_goals as $number => $goal_statement) {
			echo "<label id='goal'>$goal_statement</label>";
			echo "<input id='priority' type='number' name='$number'><br/><br/>";	
		}
	?>
	
	<input type="submit"/>
	</form>
	
	<!--<?php print_r($_POST); ?>-->
	
	
</body>
</html>
