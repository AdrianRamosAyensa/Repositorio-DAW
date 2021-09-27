<?php
    
    define ('NUMERO_A_MULTIPLICAR', 8 );

    $numero = 0;
    for ($bucles = 0; $bucles <= 10; $bucles = $bucles + 1){

        echo $numero . "<br>";
        $numero = $numero + NUMERO_A_MULTIPLICAR;
    }
?>
