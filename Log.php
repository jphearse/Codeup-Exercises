<?php 

class Log 
{
	private $filename;
	private $handle;
	public function __construct($prefix = 'log') 
	{
		$this->setFilename($prefix);
		$this->setHandle($prefix);
	}
	private function setFilename($prefix)
	{
		$this->filename = "{$prefix}-" . date('Y-m-d') . ".log";
	}
	private function setHandle()
	{
		$this->handle = fopen($this->filename, 'a');
	}
	public function __destruct()
	{
		fclose($this->handle);
	}


	public function logMessage($logLevel, $message)
	{		
		date_default_timezone_set('America/Chicago');

		$date = date("Y/m/d h:i:s");

		fwrite($this->handle, $date . " " .$logLevel .": ".$message. PHP_EOL . "-----------------------------------------------------" . PHP_EOL);
	}

	public function info($message){
		$this->logMessage("INFO", $message);
	}
	public function error($message){
		$this->logMessage("ERROR", $message);
	}
}

?>