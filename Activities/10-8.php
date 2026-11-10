<?php
	echo "<h1>Thank you for your regisration<h1>";
	if($_POST["password1"] != $_POST["password2"]){
		echo "Passwords don't match.<br>";
		exit();
	}
	echo "<h2>Your personal information:</h2>";
	echo "Your first name: " . $_POST["fname"] . "<br>";
	echo "Your last name: " . $_POST["lname"] . "<br>";
	echo "Your email: " . $_POST["email"] . "<br>";
	echo "Your phone number: " . $_POST["phone"] . "<br>";
	echo "Your level: " . $_POST["level"] . "<br>";
	
	echo "<h2>Your IT Preference:</h2>";
	if(isset($_POST["ownComputer"]) && $_POST["ownComputer"] == "yes" ){
		echo "You own a computer.<br>";
	}
	echo "Your favorite web browser:";
	$browser = "";
	$count = 0;
	if(isset($_POST["edge"]) && $_POST["edge"] == "yes"){
	    $browser = "edge" . $browser;
	    $count++;
	}
	if(isset($_POST["firefox"]) && $_POST["firefox"] == "yes"){
	    if($count > 0) {
	        $browser .= ", ";
	    }
	    $browser .= "firefox";
	    $count++;
	}
	if(isset($_POST["chrome"]) && $_POST["chrome"] == "yes"){
	    if($count > 0) {
	        $browser .= ", ";
	    }
	    $browser .= "chrome";
	    $count++;
	}
	if(isset($_POST["safari"]) && $_POST["safari"] == "yes"){
	    if($count > 0) {
	        $browser .= ", ";
	    }
	    $browser .= "safari";
	}
	echo $browser . "<br>";
	echo "Your favorite computer brand: " . $_POST["computer"] . "<br>";
	echo "Your concentration: " . $_POST["concentration"] . "<br>";
?>