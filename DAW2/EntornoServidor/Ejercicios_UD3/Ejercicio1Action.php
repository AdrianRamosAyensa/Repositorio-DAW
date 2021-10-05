<?php
    if(isset($_POST) && !empty($_POST)){

        if ( $_POST[ 'Nombre' ] != '' ) {
            echo "Bienvenido $_POST[nombre]";
        } else {
            echo "No se ha recibido el usuario";
        }

    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>