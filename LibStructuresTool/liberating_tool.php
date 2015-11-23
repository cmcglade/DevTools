<!doctype html>

<html lang ="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Structure Your Structure</title>
	
	<?php

	$goals_string = file_get_contents('goals.txt');
	//$goals = explode(";", $goals_string);
	
	//take each item in the array and explode it into the number and string using = as the delimiter
	
	//for ($item=0; $goals[$item]; $item++) 
	//	$new_pair=explode("=", $goals[$item]);
		//$new_goals = array($new_pair[0] => $new_pair[1]);
		//$item++;
	
	
	//code found online that should be useful
	$temp = explode(";", $goals_string);
	$new_goals = array();
	foreach ($temp as $value) {
		$array = explode('=', $value);
		$array[1] = trim($array[1], '\t\n\r');
		$array[0] = trim($array[0], '\t\n\r');
		//int($array[0]);
		$new_goals[$array[0]] = $array[1];
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
	<form action ="" method="POST">
	
	<?php
		foreach($new_goals as $number => $goal_statement) {
			echo "<label id='goal'>$goal_statement</label>";
			echo "<input id='priority' type='number' name='$number'><br/><br/>";	
		}
	?>
	</form>
</body>
</html>