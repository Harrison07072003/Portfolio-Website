<?php
	echo "<h1>Thank you for taking the survey!</h1>";
	echo "<h2>Below are the answers to the survey questions:</h2>";
	
	echo "Your favorite web site: " . $_POST["website"] . "<br><br>";
	echo "Your favorite color: " . $_POST["color1"] . "<br><br>";
	echo "Your least favorite color: " . $_POST["color2"] . "<br><br>";
	echo "Your favorite day in the year: " . $_POST["day"] . "<br><br>";
	echo "Your height: " . $_POST["feet"] . " feet " . $_POST["inches"] . " inches" . "<br><br>";
	echo "Your satisfaction with this web site:" . $_POST["score"] . "<br><br>";
	
	echo"<h3>Your opinion about classes:</h3>";
	echo "I like classes starting at 8am: " . $_POST["response"] . "<br><br>";
	echo "I like evening classes: " . $_POST["response2"] . "<br><br>";

?>