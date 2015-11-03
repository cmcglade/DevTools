<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Working File</title>
    <meta name="description" content="A file we're using to build php scripts">
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>

<body>
    <p>This is html text but everything else that follows is php</p>
    
 	<p>
	    <?php 
		/* this is how concatentation works */
		$var1 = "This";
        	$var2 = "Magic";
        	$var3 = $var1 . " " . $var2;
		
		echo "$var3 <br>";
		
        	echo "{$var1} is {$var2} <br>";
		
	    ?>
	</p>
	
	
	<p>
	    <?php
		/*This is how you can build a string incrementally*/
		$var1 = "I could keep writing code for hours...";
		$var2 = "and hours..<br>";
		
		$var3 = $var1;
		$var3 .=$var2;
		
		echo $var3;
		
	    ?>
		
	</p>
	
	<p>
	    <!--this is about functions you can do on strings-->
	    Lowercase: <?php echo strtolower($var3); ?><br>
	    Uppercase first: <?php echo ucfirst($var3); ?><br>
	    
	    There are other string functions: there is one called strtoupper, and one called ucwords. <br>
	    Can you guess what they do?  Try them and see!
	    
	    the trim() function takes out spaces.
		
	 
	</p>
	
	<p>
	    <?php
		/*This is a short way of adding incrementally*/
		$var4 = 5;
		$var5 = 6;
		
		$var5 += 1;
		
		echo $var5;
	    ?>
	</p>
	
</body>
</html>