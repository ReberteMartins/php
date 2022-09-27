<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once("vendor/autoload.php");

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>