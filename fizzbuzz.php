<?php 
$startingNumber = 1;
$endingNumber = 100;

for($startingNumber; $startingNumber <= $endingNumber; $startingNumber++){
	if($startingNumber % 3 == 0 && $startingNumber % 5 == 0){
		echo "FizzBuzz\n";
	} elseif ($startingNumber % 3 == 0) {
		echo "Fizz\n";
	} elseif($startingNumber % 5 == 0){
		echo "Buzz\n";
	} else {
		echo "$startingNumber\n";
	}
}