<!DOCTYPE html>  
<html>  
<head>  
<title>Simple Form Exercise</title>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>  
<body>  
	<form method='POST'>  
		<h2>Please input your name:</h2>  
		<label>Name</label><input type="text" name="name"> <br> 
		<label>Last Name</label><input type="text" name="last_name"> <br>
		<label>Postal Code</label><input type="text" name="postal_code"> <br> 
		<input type="submit" value="Submit Name">  
	</form> 
	
	<?php   
		$vara = $_POST['name'];
		$varb = $_POST['last_name'];
		$varc = $_POST['postal_code'];
		//strtoupper($varc);
		//upper($var);
		echo "<h3> Hello $vara $varb, your postal code is $varc</h3>";
	
	//print_r($_POST);
	
	?> 
		
		
		 
</body>  
</html> 
