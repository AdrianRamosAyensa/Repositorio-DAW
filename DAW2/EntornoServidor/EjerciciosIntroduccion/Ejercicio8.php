<?php

$jugadores = ['Pepe','Paco','Pedro','Pablo','Pipo'];

print_r($jugadores);

$jugadores2 = [0 => 'Pepe', 1 => 'Paco', 2 => 'Pedro', 3 => 'Pablo', 4 => 'Pipo'];

$jugadoresJson = json_encode($jugadores2);

echo '<br>' . $jugadoresJson;