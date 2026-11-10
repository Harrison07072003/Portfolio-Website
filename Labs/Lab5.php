<?php
    echo "<h1>Thank you for taking the survey </h1>";
    echo "<p>Below are your answers to the survey questions:</p>";
    echo "<h2>1. Demographic Information:</h2>";
    
    echo "Your gender: " . "<b>" . $_POST["gender"] . "</b>" . "<br>";
    echo "Your age: " . "<b>" . $_POST["age"]  . "</b>" . "<br>";
    echo "Your level: " . "<b>" . $_POST["level"]  . "</b>" . "<br>";
    echo "Your school: " . "<b>" . $_POST["school"]  ."</b>" . "<br>";
    
    echo "<h2>2. Have your computers been affected by a virus before:</h2>";
    
    echo "You responded: " . "<b>" . $_POST["response"] . "</b>";
    
    echo "<h2>3. What anti-virus software do you usually use:</h2>";
    

    if(isset($_POST["Norton"]) && $_POST["Norton"] == "yes" ) {
        echo "<b>" . "Norton" ."</b>" . "<br> ";
    }
    if(isset($_POST["McAfee"]) && $_POST["McAfee"] == "yes" ) {
        echo "<b>" . "McAfee" ."</b>" . "<br> ";
    }
    if(isset($_POST["Kasperski"]) && $_POST["Kasperski"] == "yes" ) {
        echo "<b>" . "Kasperski" ."</b>" . "<br> ";
    }
    if(isset($_POST["AVG"]) && $_POST["AVG"] == "yes" ) {
        echo "<b>" . "AVG" ."</b>" . "<br> ";
    }
    if(isset($_POST["MalwareBytes"]) && $_POST["MalwareBytes"] == "yes" ) {
        echo "<b>" . "MalwareBytes" ."</b>" . "<br> ";
    }
    if(isset($_POST["Avast"]) && $_POST["Avast"] == "yes" ) {
       echo "<b>" . "Avast" ."</b>" . "<br> ";
    }
    
    echo "<h2>4: Your ratings:</h2>";
    
    echo "I know how to create a strong password: " . "<b>" . $_POST["password"] . "</b>" . "<br>";
    
    echo "I know how to remove malware from my computer: " . "<b>" . $_POST["malware"] . "</b>" . "<br>";
    
    echo "I know how to protect my personal information when surfing on the internet: " . "<b>" . $_POST["information"] . "</b>" . "<br>";



?>