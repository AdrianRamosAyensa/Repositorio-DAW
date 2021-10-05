<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <br>
        <input type="submit" value="enviar">
    </form>
    <?php
    if(isset($_POST) && !empty($_POST)){
        
        if ( $_POST['nombre'] != '' ) {
            echo "Bienvenido $_POST[nombre]";
        } else {
            echo '<h2 style="color: red;">Es obligatorio el nombre</h2>';
        }
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
    </body>
</html>