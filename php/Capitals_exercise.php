<!doctype html>
<html lang ="en">
<head>
	<meta charset ="utf-8">
	<title>Array functions</title>
</head>
<body>
	<?php 
		$capitals = array( "Italy"=>"Rome", 
			"Luxembourg"=>"Luxembourg", 
			"Belgium"=> "Brussels", 
			"Denmark"=>"Copenhagen", 
			"Finland"=>"Helsinki", 
			"France" => "Paris", 
			"Slovakia"=>"Bratislava", 
			"Slovenia"=>"Ljubljana", 
			"Germany" => "Berlin");

		//asort($capitals);
		ksort($capitals);

		foreach($capitals as $country_name => $city_name)
		{
		echo "The capital of $country_name is $city_name <br>";	
		}
	
	?>

</body>
</html>