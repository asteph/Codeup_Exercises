<?php 
require_once 'Log.php';
$log = new Log('cli');
$log->logMessage('ERROR', 'This is an error');
$log->info('This is some info');
$log->error('This is another error');
// below won't work since it is protected
// $log->handle = 'newthing';
?>