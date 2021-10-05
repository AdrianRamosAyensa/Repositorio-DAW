<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
       
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>

        <h3>Pregunta 1: </h3>

<select name="P1" id="SelectP1">

    <option value="C">C</option>
    <option value="Java">Java</option>
    <option value="PHP">PHP</option>

</select>

        <p>¿Que lenguaje se utiliza principalmente en la asignatura de entorno servidor?</p>
        <label>C </label><input type="radio" name="C" value="C"/><br/>
        <label>Java </label><input type="radio" name="Java" value="Java"/><br/>
        <label>PHP </label><input type="radio" name="PHP" value="PHP"/><br/>

        <h3>Pregunta 2: </h3>
        <p>¿Que sistema de control de versiones utilizamos en clase?</p>
        <label>Git </label><input type="radio" name="Git" value="Git"/><br/>
        <label>SVN </label><input type="radio" name="SVN" value="SVN"/><br/>
        <label>Tortoise </label><input type="radio" name="Tortoise" value="tortoise"/><br/>

        <h3>Pregunta 3: </h3>
        <p>¿?</p>
        <label>C </label><input type="radio" name="C" value="C"/><br/>
        <label>Java </label><input type="radio" name="Java" value="Java"/><br/>
        <label>PHP </label><input type="radio" name="PHP" value="PHP"/><br/>

        <h3>Pregunta 1: </h3>
        <p>¿Que lenguaje se utiliza principalmente en la asignatura de entorno servidor?</p>
        <label>C </label><input type="radio" name="C" value="C"/><br/>
        <label>Java </label><input type="radio" name="Java" value="Java"/><br/>
        <label>PHP </label><input type="radio" name="PHP" value="PHP"/><br/>

        <h3>Pregunta 1: </h3>
        <p>¿Que lenguaje se utiliza principalmente en la asignatura de entorno servidor?</p>
        <label>C </label><input type="radio" name="C" value="C"/><br/>
        <label>Java </label><input type="radio" name="Java" value="Java"/><br/>
        <label>PHP </label><input type="radio" name="PHP" value="PHP"/><br/>

        <label>Pregunta 1: </label><br/>
        <p>¿Que lenguaje se utiliza principalmente en la asignatura de entorno servidor?</p>
        <label>C </label><input type="radio" name="C" value="C"/><br/>
        <label>Java </label><input type="radio" name="Java" value="Java"/><br/>
        <label>PHP </label><input type="radio" name="PHP" value="PHP"/><br/>
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