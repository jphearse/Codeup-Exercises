<?php 
do{
	fwrite(STDOUT, "Starting Number: ");
	$firstNumber = trim(fgets(STDIN));
} while(!is_numeric($firstNumber));

do{
fwrite(STDOUT, "Ending Number: ");
$secondNumber = trim(fgets(STDIN));
} while(!is_numeric($secondNumber));

fwrite(STDOUT, "Increment by: ");
$increment = trim(fgets(STDIN));

(is_numeric($increment)) ? $increment = $increment : $increment = 1;

for($firstNumber; $firstNumber <= $secondNumber; $firstNumber+= $increment){
	echo "$firstNumber\n";
}