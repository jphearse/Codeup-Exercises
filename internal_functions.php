<?php

// TODO: Create your inspect() function here
function inspect($passed){
		$type = gettype($passed);
		$value = $passed;

	if (is_numeric($passed)) {
		echo "	The $type is $value\n";
	} elseif (is_bool($passed)) {
		if ($passed == 0) {
			$value = 'false';
		} elseif ($passed == 1){
			$value = 'true';
		}
		echo "	The $type is $value\n";	
	} elseif (is_array($passed)) {
		if(empty($passed)){
			echo "	The value is an empty $type\n";
		} else{
			echo "	The value is an $type\n";
		}
	} elseif (is_string($passed)) {
		if (empty($passed)) {
			echo "	This value is an empty $type\n";
		} else {
			echo "	The $type is $value\n";
		}
	} elseif (is_null($passed)) {
		echo "	The value is $type\n";
	}
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
	inspect($num1);
echo 'Inspecting $num2:' . PHP_EOL;
	inspect($num2);
echo 'Inspecting $num3:' . PHP_EOL;
	inspect($num3);
echo 'Inspecting $num4:' . PHP_EOL;
	inspect($num4);
echo 'Inspecting $null:' . PHP_EOL;
	inspect($null);
echo 'Inspecting $bool1' . PHP_EOL;
	inspect($bool1);
echo 'Inspecting $bool2' . PHP_EOL;
	inspect($bool2);
echo 'Inspecting $string1' . PHP_EOL;
	inspect($string1);
echo 'Inspecting $string2' . PHP_EOL;
	inspect($string2);
echo 'Inspecting $array1' . PHP_EOL;
	inspect($array1);
echo 'Inspecting $array2' . PHP_EOL;
	inspect($array2);