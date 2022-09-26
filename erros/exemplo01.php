<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);

function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));
}

set_error_handler("error_handler");

echo 100/0;

?>