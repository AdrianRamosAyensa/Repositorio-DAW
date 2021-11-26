function fcmCalc() {

    // Limpio el textarea en el que se muestra el resultado de la fcm
    document.getElementById('resultado').value = "";

    // Recojo el valor de la edad
    var preEdad = parseInt(document.getElementById('edad').value);

    // Si el valor de la edad no es válido se pinta de rojo el campo de texto y se indica que la edad es incorrecta
    // Si la edad es correcta se muestra en el textarea y se muestran los valores
    var edad = !isNaN(preEdad) ? preEdad : 0;

    if (edad > 0 && edad < 200) {
        document.getElementById("resultado").style.backgroundColor = "";

        var fcm = 220 - edad;
        document.getElementById("resultado").value = fcm;

        document.getElementById("recuperacion").textContent = parseInt(fcm * 0.6) + " - " + parseInt(fcm * 0.7);
        document.getElementById("aerobica").textContent = parseInt(fcm * 0.7) + " - " + parseInt(fcm * 0.8);
        document.getElementById("anaerobica").textContent = parseInt(fcm * 0.8) + " - " + parseInt(fcm * 0.9);
        document.getElementById("roja").textContent = parseInt(fcm * 0.9) + " - " + fcm;
    } else {
        document.getElementById("resultado").style.backgroundColor = "Indianred";

        document.getElementById("recuperacion").textContent = " ERROR EDAD INCORRECTA ";
        document.getElementById("aerobica").textContent = " ERROR EDAD INCORRECTA ";
        document.getElementById("anaerobica").textContent = " ERROR EDAD INCORRECTA ";
        document.getElementById("roja").textContent = " ERROR EDAD INCORRECTA ";
        return;
    }

}