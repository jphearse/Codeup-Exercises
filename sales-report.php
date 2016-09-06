<?php
function report($file){
	$arrayOfInfo = [];
	$unitsSold = 0;
	$handle = fopen($file, 'r');
	$contents = fread($handle, filesize($file));
	$info = explode("\n", $contents);
	for ($i=0; $i < 6 ; $i++) { 
		array_shift($info);
	}
	foreach ($info as $employee) {
		$exploded = explode(', ', $employee);
		// var_dump($exploded). PHP_EOL;
		$associativeArray = [];
		$associativeArray["employee #"] = $exploded[0];
		$associativeArray["first name"] = $exploded[1];
		$associativeArray["last name"] = $exploded[2];
		$associativeArray["units sold"] = $exploded[3];

		$unitsSold += $exploded[3];

		array_push($arrayOfInfo, $associativeArray);
	}
	
	foreach ($arrayOfInfo as $key => $row) {
	    $soldUnit[$key] = $row['units sold'];
	}

	array_multisort($soldUnit, SORT_DESC, $arrayOfInfo);

	// var_dump($arrayOfInfo) . PHP_EOL;
	echo "Numbers of Employees: " . count($arrayOfInfo). PHP_EOL;
	echo "Units Sold: " . $unitsSold . PHP_EOL;
	echo "Avg units per employee: " . $unitsSold/count($arrayOfInfo) . PHP_EOL;

	echo "Units 	|	Full Name 		| 	Employee Number\n";
	foreach ($arrayOfInfo as $orderedArray => $key) {
		$fullName = $key['first name'] . " " .$key['last name'];
		echo $key['units sold'] ."	 	". str_pad($fullName, 35) . " " .$key['employee #']. PHP_EOL;
	}
	fclose($handle);
}

report('report.txt');