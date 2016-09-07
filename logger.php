<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
    $filename = "log-". date('Y-m-d') . '.log';
	$handle = fopen($filename, 'a');
	
	date_default_timezone_set('America/Chicago');
	// $date = new DateTime();
	$date = date("Y/m/d h:i:s");

	fwrite($handle, $date . " " .$logLevel .": ".$message. PHP_EOL . "-----------------------------------------------------" . PHP_EOL);
	fclose($handle);
}

function loginfo($message){
	logMessage("INFO", $message);
}
function logError($message){
	logMessage("ERROR", $message);
}
// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");
loginfo("User logged in successfully");
logError("User or password is incorrect");