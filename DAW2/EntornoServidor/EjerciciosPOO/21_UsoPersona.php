<?php
    require('Persona.php');
    require('Cliente.php');
    $p1 = new Persona ('Juan', 'García', 18);
    echo "hola";
    echo $p1->saludar();
    echo "<br>";
    echo "Soy $p1";
    echo "<br>";
    echo "Mi nombre completo es ".$p1->getNombre();
    echo "<br>";
    echo "<br>";

    $c1 = new Cliente ('Pepe', 'Viyuela', 48, 50);

    echo "Hola, soy: " . $c1;