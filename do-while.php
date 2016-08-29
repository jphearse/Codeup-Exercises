<?php 

$count = 100;

do {
	echo $count . PHP_EOL;
	$count -= 5;
} while($count >=0);


$a = 2;
do {
	echo $a . PHP_EOL;
	$a = $a * $a;
} while($a < 1000000);