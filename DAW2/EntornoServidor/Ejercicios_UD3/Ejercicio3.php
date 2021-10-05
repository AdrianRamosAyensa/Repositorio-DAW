<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
       
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>

        <?php $nombre = $_POST["nombre"]; ?>

        <label>Nombre</label><input type="text" value="<?php echo $nombre; ?>" name="nombre"> <br>
        <br>
        <input type="submit" value="enviar">
    </form>

    <?php
    if(isset($_POST) && !empty($_POST)){
        
        $nombre = '';

        if ( $_POST['nombre'] != '' &&  strlen( $_POST['nombre'] ) > 2 ) {
            echo "Bienvenido $_POST[nombre]";
        } else {
            $nombre = $_POST['nombre'];
            echo "Nombre no valido";
        }
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
    
    </body>
</html>