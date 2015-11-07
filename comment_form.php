<!doctype html>

<html lang="en">
	<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="This is a demo page for class 6">
	<title>Demo Page</title>
	<link rel="stylesheet" type="text/css" href="formstyles.css">
	</head>
	<body> 
		<h1>Please share your comments below</h1>
		<FORM METHOD=POST>
			<p>Your Name: <input class="styled" type="text" name="name" ></p>
			<p>Your Email: <input type="text" name="email" ></p>
			<p>Gender: <br><input type="radio" name="gender" value="m"> Male <br>
				<input type="radio" name="gender" value="f"> Female </p>
			<p>How you found us: <select name="referrer">
				<option value="search">Search engine</option>
				<option value="tv">TV Ad</option>
				<option value="billboard">Billboard</option>
				<option selected value="other">Other</option>
				</select>
			</p>
			<p>May we email you? <input type="checkbox" name="may_contact" value="Y" checked></p>
			<h2>Comments</h2>
			<textarea class="styled" name="comments">Enter your comments here</textarea>
			<br>
			<br>
			<br>
			<input type="submit" value="send comments">
		</FORM>
		
		<!--this code will print what is going into the POST array -->
		
		<?php /*
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";*/
		?> 
		
	</body>
</html>