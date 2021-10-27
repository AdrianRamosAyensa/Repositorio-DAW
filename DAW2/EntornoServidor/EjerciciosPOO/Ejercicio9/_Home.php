<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

    <form method="POST" action="Index.php?method=new">

        <input type="text" name="articulo"/>
        <input type="submit" value="Nuevo"/>

    </form>


    <?php

        function logout() {
            if (isset($_COOKIE)) {
                unset($_COOKIE); 
                //setcookie('loginUsuario', null, -1, '/'); 
                return true;
            } else {
                return false;
            }
        }
    ?>

    </body>
</html>