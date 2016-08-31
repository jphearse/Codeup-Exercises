<?php 
do{
	fwrite(STDOUT, "Starting Number: ");		//ask for first number, keep asking until get number
	$firstNumber = trim(fgets(STDIN));
} while(!is_numeric($firstNumber));

do{
	fwrite(STDOUT, "Ending Number: ");			//ask for second number, keep asking until get number
	$secondNumber = trim(fgets(STDIN));
	if($secondNumber == $firstNumber){			//if second number is same get new one
		echo "Same number as first. Enter new number.\n";
	}
} while(!is_numeric($secondNumber) || $secondNumber == $firstNumber);

if($firstNumber < $secondNumber){				//if first number is less than second increment
	fwrite(STDOUT, "Increment by: ");
	$increment = trim(fgets(STDIN));

	(is_numeric($increment)) ? $increment = $increment : $increment = 1;	//check if number

	for($firstNumber; $firstNumber <= $secondNumber; $firstNumber += $increment){	//outputs numbers
		echo "$firstNumber\n";
	}
} else {										//if first numer is bigger than second decrement
	fwrite(STDOUT, "Decrement by: ");
	$decrement = trim(fgets(STDIN));

	(is_numeric($decrement)) ? $decrement = $decrement : $decrement = 1; //check if number

	for($firstNumber; $firstNumber >= $secondNumber; $firstNumber -= $decrement){	//outputs numbers
		echo "$firstNumber\n";
	}	
}

