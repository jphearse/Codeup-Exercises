<?php

function add($a, $b)
{
	if( is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else{
    	return errorNotNumber();
    }
}

function subtract($a, $b)
{
    if( is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    } else{
    	return errorNotNumber();
    }
}

function multiply($a, $b)
{
	if( is_numeric($a) && is_numeric($b)){
    	return $a * $b;
    } else{
    	return errorNotNumber();
    }
}

function divide($a, $b)
{
	if($b === 0){
    	return errorByZero();
    } else if(is_numeric($a) && is_numeric($b)){
    	return $a / $b;
    }else{
    	return errorNotNumber();
    }
}

function modulus($a, $b)
{
	if($b === 0){
    	return errorByZero();
    } else if(is_numeric($a) && is_numeric($b)){
    	return $a % $b;
    }else{
    	return errorNotNumber();
    }
}

function square($a)
{
	if( is_numeric($a)){
    	return $a * $a;
    } else{
    	return errorNotNumber();
    }
}

function sqroot($a)
{
	if( is_numeric($a)){
    	return sqrt($a);
    } else{
    	return errorNotNumber();
    }
}

function errorByZero (){
	return "Error: Dividing by 0";	
}
function errorNotNumber(){
	return "Error: Inputs not numbers";
}

$a = 20;
$b = 45;

echo "First Number: $a Second Number: $b" . PHP_EOL;
echo "Add: ". add($a, $b) .PHP_EOL;
echo "Subtract: ".  subtract($a, $b) .PHP_EOL;
echo "Multiply: ". multiply($a, $b) .PHP_EOL;
echo "Divide: ". divide($a, $b) .PHP_EOL;
echo "Modulus: ". modulus($a, $b) .PHP_EOL;
echo "Square: ". square($a) .PHP_EOL;
echo "Square Root: ". sqroot($a) .PHP_EOL;
