<?php
    $nombre = "Adrian";
    $direccion = "C/ Mi casa Nº5 3ºDerecha";
    $mail = "email@ejemplo.com";

    echo "<table border=1>";

        echo "<tr bgcolor = gainsboro>";
        echo "<th>Nombre</th>";
        echo "<th>Dirección</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>", $nombre, "</td>";
        echo "<td>", $direccion, "</td>";
        echo "<td>", $mail, "</td>";
        echo "</tr>";
    echo "</table>";
?>
