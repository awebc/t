<?php

file_put_contents(__DIR__.'/api_request_log_local.php',var_export(['time'=>date('Ymd-His'),'data'=> $_SERVER],true));
$line= $_GET['line'] ?: 'local2';
echo file_get_contents(__DIR__.'/line_'.$line.'.json');