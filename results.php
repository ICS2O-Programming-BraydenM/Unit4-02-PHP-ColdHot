<?php
// This function displays a statement to see if the inputted temperature is considered hot or cold in my opinion 

  // declare constants 
  define (DEGREES_THRESHOLD, 15);
  
	// get user input (degrees in celsius)
	$temperature = $_POST['degrees'];

  // if statements, if number is correct, display a message that tells them so, if number is incorrect, display a message that tells them so 
	if ($temperature >= DEGREES_THRESHOLD) {
		echo "It is hot outside!";
	}

  else {
    echo "It is cold outside.";
  }
?>