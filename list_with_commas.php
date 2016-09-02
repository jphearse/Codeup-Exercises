<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($string, $sort = false){

	$physicistsArray = explode (", " , $string);	//puts string into array

	if ($sort == "sort"){
		sort($physicistsArray);						//sorts array by names
	}

	$lastName = array_pop($physicistsArray);		//takes last name off
	array_push($physicistsArray, "and ".$lastName);	//pushes "and " and the last name on

	return implode(", ", $physicistsArray); 		//breaks array with comma and space
}

$famousFakePhysicists = humanizedList($physicistsString, "sort");
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;
