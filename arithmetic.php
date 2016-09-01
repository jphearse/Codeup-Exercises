<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
	return $a * $b;
}

function divide($a, $b)
{
	return $a / $b;
}

$number1 = 20;
$number2 = 10;

echo add($number1, $number2) .PHP_EOL;
echo subtract($number1, $number2) .PHP_EOL;
echo multiply($number1, $number2) .PHP_EOL;
echo divide($number1, $number2) .PHP_EOL;
