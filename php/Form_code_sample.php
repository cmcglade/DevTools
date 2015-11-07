<!DOCTYPE html>
<html lang="en>"
<head>
	<meta charset="UTF-8" />
	<title>Forms</title>
	<link rel="stylesheet" href="formstyles.css">
</head>
<body>
	<form class="group" action="#">
		<ol>
			<li class="group">
				<label for="countyfield">Name</label>
				<input type="text" maxlength="10" name="name" id="namefield" />
			</li>
			<li class="group">
				<label for="agefield">Age</label>
				<input type="number" min="13" max="18" name="age" id="agefield" />
			</li>
			<li class="group">
				<!-- this code will generate a calendar -->
				<label for="datetimefield">Reservation Date</label>
				<input type="date" min="2015-12-01" max="2015-12-31" name="date" id="date" />
			</li>
		</ol>
		<button type="submit">send</button>
	</form>
</body>
</html>
