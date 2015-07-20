<?php

function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");
	$time = date("h:i:sa");
	$log = "$date $time ";
	$filename = $date . '.txt';
	//read file and parse contacts
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL . $log . $message);
    // todo - complete this function
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");

?>