<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$data = [
    "nome"=>"Reberte"
];

define('SECRET', pack('a16', 'senha'));
define('SECRET_IV', pack('a16', 'senha'));

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-256-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

$string = openssl_decrypt(
    $openssl,
    'AES-256-CBC',
    SECRET,
    0,
    SECRET_IV 
);

echo $string;
?>