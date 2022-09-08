<?php

$dt = new DateTime();

$periodo = new DateInterval("P25D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt-> format("d/m/Y H:i:s")
?>