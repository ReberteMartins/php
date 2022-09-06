<?php

$json = '[{"nome":"Reberte","idade":22},{"nome":"Leticia","idade":20}]';

$data = json_decode($json, true);

var_dump($data);
?>