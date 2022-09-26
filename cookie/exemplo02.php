<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"], true);

    echo $obj["pessoa"];
}

?>