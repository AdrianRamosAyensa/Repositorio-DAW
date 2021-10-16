<!--
Subida de ficheros:
  usar el atributo enctype="multipart/form-data" y el método POST
  para el fichero se usa la etiqueta <input type = "file">
--> 

<form action="procesar_subida.php" method="post" enctype="multipart/form-data">
    Escoja dos ficheros
    <br>
    <input type="file" name="fichero1">
    <br>
    <input type="file" name="fichero2">
    <br>
    <input type="submit" value="subir fichero">

</form>
