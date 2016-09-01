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

function modulus($a, $b)
{
	return $a / $b;
}

function square($a)
{
	return $a * $a;
}

function sqroot($a)
{
	return sqrt($a);
}

$a = 20;
$b = 10;

echo add($a, $b) .PHP_EOL;
echo subtract($a, $b) .PHP_EOL;
echo multiply($a, $b) .PHP_EOL;
echo divide($a, $b) .PHP_EOL;
echo modulus($a, $b) .PHP_EOL;
echo square($a) .PHP_EOL;
echo sqroot($a) .PHP_EOL;
