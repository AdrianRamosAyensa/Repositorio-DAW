<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
       
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>

        <?php $array = [] ?>

        <label>Nombre 1: </label><input type="text" value="" name="nombres[]"> <br>
        <label>Nombre 2: </label><input type="text" value="" name="nombres[]"> <br>
        <label>Nombre 3: </label><input type="text" value="" name="nombres[]"> <br>
        <br>
        <input type="submit" value="enviar"/>
    </form>

    <?php
    if(isset($_POST) && !empty($_POST)){

        echo 'Los nombres introducidos son: <br>';
        foreach ( $_POST['nombres'] as $nombre ) {
            echo $nombre . "<br>";
        }
        
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
    
    </body>
</html>