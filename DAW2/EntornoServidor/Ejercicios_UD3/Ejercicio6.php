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

        <p>¿Que lenguaje se utiliza principalmente en la asignatura de entorno servidor?</p>
        <select name="P1" id="SelectP1">

            <option value="C">C</option>
            <option value="Java">Java</option>
            <option value="PHP">PHP</option>

        </select>
        <br/>
        <h3>Pregunta 2: </h3>
        <p>¿Que sistema de control de versiones utilizamos en clase?</p>
        <select name="P2" id="SelectP2">

            <option value="Git">Git</option>
            <option value="SVN">SVN</option>
            <option value="Tortoise">Tortoise</option>

        </select>
        <br/>

        <h3>Pregunta 3: </h3>
        <p>¿Como se llama la profesora de interfaces?</p>
        <select name="P3" id="SelectP3">

            <option value="Ester">Ester</option>
            <option value="Yolanda">SVN</option>
            <option value="Marta">Marta</option>

        </select>
        <br/>
        
        <h3>Pregunta 4: </h3>
        <p>¿Cuantas horas a la semana tenemos de servidor?</p>
        <select name="P4" id="SelectP4">

            <option value="5">5</option>
            <option value="6">6</option>
            <option value="4">4</option>

        </select>
        <br/>

        <h3>Pregunta 5: </h3>
        <p>¿Que servidor web utilizamos en la asignatura de entorno servidor?</p>
        <select name="P5" id="SelectP5">

            <option value="Nginx">Nginx</option>
            <option value="IIS">IIS</option>
            <option value="Apache">Apache</option>

        </select>
        <br/>
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