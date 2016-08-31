<?php 
$startingNumber = 1;
$endingNumber = 100;

for($startingNumber; $startingNumber <= $endingNumber; $startingNumber++){
	if($startingNumber % 3 == 0 && $startingNumber % 5 == 0){			//if multiple of 3 or 5 FizzBuzz
		echo "FizzBuzz\n";
	} elseif ($startingNumber % 3 == 0) {			// if multiple of 3 Fizz
		echo "Fizz\n";
	} elseif($startingNumber % 5 == 0){				// if multiple of 5 Buzz
		echo "Buzz\n";
	} else {
		echo "$startingNumber\n";					// if neither print number
	}
}