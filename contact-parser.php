<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
	$contacts = explode("\n", $contents);
	array_pop($contacts);

	foreach ($contacts as $contact) {
		$newArray = explode("|", $contact);

		$associativeArray = [];
		$associativeArray["name"] = $newArray[0];
		
		$areacode = substr($newArray[1], 0, 3);
		$prefix   = substr($newArray[1], 3, 3);
		$number   = substr($newArray[1], 6, 4);
	
		$associativeArray["phone"] = "$areacode-$prefix-$number";;

		array_push($contacts, $associativeArray);
		array_shift($contacts);

		fclose($handle);
		}
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));


