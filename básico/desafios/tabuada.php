<?php

$multiplicador = 7;

for ($i=1; $i <= 100 ; $i++) { 
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}