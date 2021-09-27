<?php
    
    $numero = 1;
    for ($bucles = 0; $bucles < 10; $bucles = $bucles + 1){

        if ( ( $numero % 3 ) == 0 ){

            echo $numero . "<br>";

        }
        $numero = $numero + 1;
    }
?>