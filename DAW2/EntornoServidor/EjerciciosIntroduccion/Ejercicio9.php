<?php

$jugadores = [];

array_push($jugadores, "Pepe");
array_push($jugadores, "Paco");
array_push($jugadores, "Pedro");
array_push($jugadores, "Pablo");
array_push($jugadores, "Pipo");

$jugadoresJson = json_encode($jugadores);

echo '<br>' . $jugadoresJson;