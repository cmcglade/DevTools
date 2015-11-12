<!DOCTYPE html>  
<html>  
<head> 
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8">  
	<title>Nov 11 Exercises DevTools</title>  
</head>  
<body>  
	<h1>This is absolute value</h1>  
	<?php 
		$var = -20;
		echo abs($var);
	?> 
	
	<p>this is integers and strings</p>
	<?php 
		$varA = 1 + "3 houses";
		echo $varA;
	?>
	
	<p>this is rounding up or down</p>
	
	<?php
		$varb = 12.138;
		echo round($varb, 2);
	
	?> 
	<p>this is arrays: don't forget, computers start indexing arrays at zero!</p>
	<?php
		$fruit = array("apples", "oranges", "bananas", "cherries");
		echo $fruit[4];
		$fruit[4] = "strawberries";
		//echo $fruit[4];
		print_r($fruit);
	?>
	
	<p>more arrays</p>
	<?php
		$various = array("turnips", 12, "potato", array("veggies", "fruits", "meats", "fishes"));
		//echo $various[1];
		echo $various[2];
		print_r($various[3]);
		
	?>
	
	<p>replacing items in arrays</p>
	
	<?php
		$various = array("turnips", 12, "potato", array("veggies", "fruits", "meats", "fishes"));
		echo "$various[2] <br>";
		$various[2] = "aubergine";
		echo "$various[2] <br>";
		print_r($various);
		
	?>
	<p>shorter form version of arrays after php 5.4</p>
	
	<?php
		$various = ["turnips", 12, "potato"];
		echo "$various[2]<br>";
		print_r($various);
		
		$various_b = array("turnips", 12, "potato");
	?>
	
	<p>associative arrays: name value pairs</p>
	
	<?php
		$various = array("first_name" => "Donald", "last_name" => "Duck");
	?>
	
</body>  
</html> 
