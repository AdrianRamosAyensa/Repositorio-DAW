<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
    </head>
    <body>
        <h2>Formulario</h2>
       
        <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>

        <?php $resultado = 0 ?>

        <label>Numero 1: </label><input type="text" value="" name="numero1"> <br>
        <label>Numero 2: </label><input type="text" value="" name="numero2"> <br>
        <br>
        <input type="submit" value="suma" name="operacion"/>
        <input type="submit" value="resta" name="operacion"/>
        <input type="submit" value="multiplicacion" name="operacion"/>
        <input type="submit" value="division" name="operacion"/>
    </form>

    <?php
    if(isset($_POST) && !empty($_POST)){
        
        if ( $_POST['numero1'] != '' && $_POST['numero2'] != '') {

            switch ($_POST['operacion']){

                case 'suma': 
                    $resultado = "$_POST[numero1] + $_POST[numero2] = " . floatval( $_POST['numero1'] ) + floatval( $_POST['numero2'] );
                    break;

                case 'resta': 
                    $resultado = "$_POST[numero1] - $_POST[numero2] = " . floatval( $_POST['numero1'] ) - floatval( $_POST['numero2'] );
                    break;
                    
                case 'multiplicacion': 
                    $resultado = "$_POST[numero1] * $_POST[numero2] = " . ( floatval( $_POST['numero1'] ) * floatval( $_POST['numero2'] ) );
                    break;

                case 'division': 
                    if ( $_POST['numero2'] != 0 ){
                        $resultado = "$_POST[numero1] / $_POST[numero2] = " . floatval( $_POST['numero1'] ) / floatval( $_POST['numero2'] );
                    } else {
                        $resultado = 'INFINITO <br> na, no funciona, no dividas para 0 porfiplis';
                    }
                    break;

            }
            echo "<br> Resultado: " . $resultado;
        } else {
            echo "Nombre no valido";
        }
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
    
    </body>
</html>