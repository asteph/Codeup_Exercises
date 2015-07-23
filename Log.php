<?php
class Log{
	public $filename;
	public function logMessage($logLevel, $message)
	{
		$date = date("Y-m-d");
		$time = date("h:i:sa");
		$log = "$date $time";
		// $filename = $date . '.txt';
		//read file and parse contacts
	    $handle = fopen($this->filename, 'a');
	    fwrite($handle, PHP_EOL . "$log $logLevel: $message");
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