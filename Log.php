<?php 

class Log 
{
	public $filename;

	public function logMessage($logLevel, $message)
	{
	    // todo - complete this function
		$handle = fopen($this->filename, 'a');
		
		date_default_timezone_set('America/Chicago');
		// $date = new DateTime();
		$date = date("Y/m/d h:i:s");

		fwrite($handle, $date . " " .$logLevel .": ".$message. PHP_EOL . "-----------------------------------------------------" . PHP_EOL);
		fclose($handle);
	}

	public function info($message){
		$this->logMessage("INFO", $message);
	}
	public function error($message){
		$this->logMessage("ERROR", $message);
	}
}

?>