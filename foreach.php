<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing){
    if (is_array($thing)) {
        echo gettype($things) . " (";
        	foreach ($thing as $number){
        		echo  $number;
        	}
        echo ")\n";
    } elseif (is_scalar($thing)) {
       echo "$thing\n";
    } elseif (is_null($thing)) {
       echo "$thing\n";
    }

}