<?php

function error($showErrors=true){
    if($showErrors){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }else{
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    }
}

require_once("config.php");

$sql = new Sql();

$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>