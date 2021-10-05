<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <label>Título</label><input type="text" value="" name="titulo"> <br>
        <br>
        <label>Autor</label><input type="text" value="" name="autor"> <br>
        <br>
        <label>Editorial</label><input type="text" value="" name="editorial"> <br>
        <br>
        <label>Páginas</label><input type="text" value="" name="paginas"> <br>
        <br>
        <input type="submit" value="enviar">
    </form>
    <?php
    if(isset($_POST) && !empty($_POST)){
        
        echo "Datos del libro: <br>";
        echo "Titulo: $_POST[titulo] <br>";
        echo "Autor: $_POST[autor] <br>";
        echo "Editorial: $_POST[editorial] <br>";
        echo "Páginas: $_POST[paginas] <br>";

    }
     
    ?>
    </body>
</html>