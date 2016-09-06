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

		array_push($contacts, $newArray);
		array_shift($contacts);
		}
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));


