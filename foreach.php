<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing){
    if (is_numeric($thing)) {
        echo "{$thing} is a number\n";
    } else if (is_string($thing)) {
        echo "{$thing} is a string\n";
    } else if (is_float($thing)) {
        echo "{$thing} is float\n";
    }else if (is_array($thing)) {
        echo "{$thing} is an array\n";
    }

}