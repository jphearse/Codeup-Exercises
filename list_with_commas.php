<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($string, $sort = false){

	$physicistsArray = explode (", " , $string);	//puts string into array

	if ($sort == "sort"){
		sort($physicistsArray);							//sorts array by names
	}

	$lastName = array_pop($physicistsArray);		//takes last name off
	array_push($physicistsArray, "and ".$lastName);//pushes "and " and the last name on

	$famousFakePhysicists = implode(", ", $physicistsArray); //breaks array with comma and space

	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
}
humanizedList($physicistsString);
