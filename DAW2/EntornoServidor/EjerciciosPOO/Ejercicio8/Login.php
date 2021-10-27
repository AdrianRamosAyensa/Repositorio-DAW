<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio Login </title>
    </head>
    <body>

        <form method="POST" action="Controller.php?method=auth">
    
            <?php $login = []; ?>
            <label>Usuario: </label> </label><input type="text" value="" name="login[]"> <br>
            <label>Contraseña: </label><input type="password" value="" name="login[]"> <br>
            <br>
            <input type="submit" value="enviar"/>
        </form>

    </body>
</html>