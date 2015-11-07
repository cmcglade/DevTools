<!doctype html>
<html>
<head>
<title>Basic html</title>

</head>

<body>
	<h1>This is a php command</h1>
	<!-- the echo command -->
	<p>
	<?php /*commenting on one line
		echo "This is the php echo command<br>"; 
		echo "hello" . "Class"; */
		$var_a = 1;
		$var_b = 2;
		$var_c = $var_a + $var_b;
		echo $var_c;
	?>
	</p>
	<p>
	<?php
		/*$greeting = "Hello<br>";
		echo $greeting;
		//concatenation is done with a period
		$greeting = "This";
		$username = "Magic";
		$sentence = $greeting . " " . $username . "<br>"; 
		$leaving_site = "Goodbye";         
		echo $sentence;
	?>

	<?php 
		echo "Hey there $username<br>";
	?>

	<?php
		$exercise = "We're learning \"scary\" code today!";
		echo $exercise;
	?>

	<?php  
		$exit_greeting = $leaving_site . " " . $username;
		echo $exit_greeting;*/
	?>

	<?php 
		$name = "SALIMA";
		$new_name = strtolower($name);
		echo ucfirst($new_name);
	
		$sentence = "Greetings username, we're happy to see you";
	
		echo $sentence;
		echo str_replace("username", "Salima", $sentence);



	?>



	
	</p>

</body>
</html>