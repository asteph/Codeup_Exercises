<?php 
require_once 'Log.php';
$log = new Log();
$log->filename = date("Y-m-d") . '.log';
$log->logMessage('ERROR', 'This is an error');
$log->info('This is some info');
$log->error('This is another error');

?>