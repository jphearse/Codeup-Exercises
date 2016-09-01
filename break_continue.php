<?php

for ($i=1; $i <= 100 ; $i++) { 
	if ($i % 2 != 0) {
		continue; 				//next itteration
	}
	echo $i . PHP_EOL;
}

for ($i=1; $i <= 100 ; $i++) { 
	if ($i == 11) {
		break; 					// breaks out of loop
	}
	echo $i . PHP_EOL;
}