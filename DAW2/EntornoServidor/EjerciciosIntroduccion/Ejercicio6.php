<?php

$anterior = 0;
$actual = 1;

for ( $i = 0; $i < 10; $i++ ){

    $numero = $anterior + $actual;
    echo $numero . "<br>";
    $anterior = $actual;
    $actual = $numero;
    
}