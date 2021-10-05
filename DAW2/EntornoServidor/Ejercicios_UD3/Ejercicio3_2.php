<?php

echo '<form method="POST" action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . '>
<label>Nombre</label><input type="text" value="' . $nombre . '" name="nombre"> <br>
<br>
<input type="submit" value="enviar">';

if ( $_POST['nombre'] != '') {
    $nombre = '';

    if ( $_POST['nombre'] != '' &&  strlen( $_POST['nombre'] ) > 2 ) {
        echo "Bienvenido $_POST[nombre]";
    } else {
        $nombre = $_POST['nombre'];
    }
}
 else {
     echo "Todavía no hemos recibido nada!";
}
