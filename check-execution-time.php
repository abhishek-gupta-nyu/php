<?php

$start_time = microtime(true);
// In place of microtime(), time() can be used to get time in seconds.

// Code that needs to run 

$end_time = microtime(true); 
$execution_time = ($end_time - $start_time); 

$log  = "Execution Time = ".$execution_time." ".date("F j, Y, g:i a").PHP_EOL.
        "-------------------------".PHP_EOL;
        
file_put_contents('./clock_logs'.'.log', $log, FILE_APPEND);

?>
