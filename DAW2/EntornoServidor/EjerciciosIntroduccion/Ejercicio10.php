<?php

$jugadores = array (
    'Base' => 'Pepe',
    'Alero' => 'Paco',
    'Pivot' => 'Pedro',
    'Escolta' => 'Pablo',
    'Alapivot' => 'Pipo'
);

foreach ($jugadores as $posicion => $jugador){
    echo $posicion . ": " . $jugador . '<br>';
}