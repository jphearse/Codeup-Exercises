<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'M';

function search ($names, $query){

	$result = array_search($query, $names);
	if (is_numeric($result)) {
		echo "Found $query at index $result" . PHP_EOL;
		return true;
	} else {
		echo "Did not find $query" . PHP_EOL;
		return false;
	}
}

function compareArray($names, $compare){
	$count = 0;
	foreach ($names as $name) {
		echo $name . PHP_EOL;
		$query = $name;
		$result = array_search($query, $compare);
		if (is_numeric($result)) {
			echo "Found $query at index $result" . PHP_EOL;
			$count++;
		} else {
			echo "Did not find $query" . PHP_EOL;	
		}
	}
	echo "There are $count values in common" .PHP_EOL;
}
compareArray($names, $compare);