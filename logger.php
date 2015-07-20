<?php

function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");
	$time = date("h:i:sa");
	$log = "$date $time";
	$filename = $date . '.txt';
	//read file and parse contacts
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL . "$log $logLevel: $message");
    fclose($handle);
}
function logInfo($message){
	logMessage("INFO", $message);
}
function logError($message){
	logMessage("ERROR", $message);
}
logInfo('Here is some more info.');
logError('Oh nose, an error!');
?>