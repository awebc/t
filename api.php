<?php

file_put_contents(__DIR__.'/api_request_log.php',var_export(['time'=>date('Ymd-His'),'data'=> $_SERVER],true));
echo file_get_contents(__DIR__.'/line_local2.json');