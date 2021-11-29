// Arrays de actividades y fisioterapeutas
var arrayActividades = ["Zumba", "Spinning", "Pilates", "Kickboxing", "Yoga", "Natacion", "Gap"];
var fisioterapeutas = ["Marta", "Paco", "Juan", "Alicia", "Pedro", "Julia", "Oscar", "Manuel", "Antonio"];

// Función que rellena la tabla del horario de actividades
function tabla1() {

    // Se recoje en variable la tabla
    var tabla = document.getElementById("horario");

    // Bucle en el que se crea cada fila de la tabla
    for (var index = 0; index < 7; index++) {
        var fila = document.createElement("tr");

        // Creacion de la celda de horas
        var hora = document.createElement("th");
        if (index == 0) hora.innerHTML = "7:00-9:00";
        if (index == 1) hora.innerHTML = "9:00-11:00";
        if (index == 2) hora.innerHTML = "11:00-13:00";
        if (index == 3) hora.innerHTML = "13:00-15:00";
        if (index == 4) hora.innerHTML = "15:00-17:00";
        if (index == 5) hora.innerHTML = "17:00-19:00";
        if (index == 6) hora.innerHTML = "19:00-21:00";
        fila.appendChild(hora);

        // Bucle de creacion de las celdas para las actividades de una hora/fila
        for (var index2 = 0; index2 < 6; index2++) {
            var activ = document.createElement("td");
            var actividad = arrayActividades[Math.floor(Math.random() * 7)];
            activ.innerHTML = actividad;
            activ.setAttribute("class", actividad);
            fila.appendChild(activ);
        }

        tabla.appendChild(fila);
    }


}

// Función que rellena la tabla del horario de fisioterapeutas
function tabla2() {

    // Se recoje en variable la tabla
    var tabla = document.getElementById("fisioterapia");

    // Bucle en el que se crea cada fila de la tabla
    for (var index = 0; index < 12; index++) {
        var fila = document.createElement("tr");

        // Creacion de la celda de horas
        var hora = document.createElement("th");
        if (index == 0) hora.innerHTML = "10:00-10:45";
        if (index == 1) hora.innerHTML = "10:45-11:30";
        if (index == 2) hora.innerHTML = "11:30-12:15";
        if (index == 3) hora.innerHTML = "12:15-13:00";
        if (index == 4) hora.innerHTML = "13:00-13:45";
        if (index == 5) hora.innerHTML = "";
        if (index == 6) hora.innerHTML = "17:00-17:45";
        if (index == 7) hora.innerHTML = "17:45-18:30";
        if (index == 8) hora.innerHTML = "18:30-19:15";
        if (index == 9) hora.innerHTML = "19:15-20:00";
        if (index == 10) hora.innerHTML = "20:00-20:45";
        if (index == 11) hora.innerHTML = "20:45-21:15";
        fila.appendChild(hora);

        // Bucle de creacion de las celdas para los fisioterapeutas de una hora/fila
        for (var index2 = 0; index2 < 5; index2++) {
            var activ = document.createElement("td");
            if (index == 5) {
                var fisioterapeuta = "--";
            } else {
                var fisioterapeuta = fisioterapeutas[Math.floor(Math.random() * 9)];
                activ.setAttribute("class", fisioterapeuta + " tablaFisios");
            }
            activ.innerHTML = fisioterapeuta;

            fila.appendChild(activ);
        }

        tabla.appendChild(fila);
    }


}

// Funcion que cambia de color el texto de las celdas de la tabla de actividades respecto a las seleccionadas
// Se le llama al hacer clic en los checkbox que hay debajo de la primera tabla
function checkClic(actividad) {

    // Recoger en variable el checkbox que se acaba de activar/desactivar
    var activ = document.querySelector("input[type='checkbox'][value='" + actividad.toLowerCase() + "']");

    // Recoger en variable las celdas de la tabla que tienen el mismo texto que el checkbox al que se le ha dado clic
    var actividades = document.getElementsByClassName(actividad);

    // Si se ha activado el checkbox se pinta el texto de las celdas correspondientes a rojo
    // Si se ha desactivado, las celdas correspondientes de la tabla se dejan a negro otra vez
    if (activ.checked) {
        for (var index = 0; index < actividades.length; index++) {
            actividades[index].style.color = "red";
        }
    } else {
        for (var index = 0; index < actividades.length; index++) {
            actividades[index].style.color = "";
        }
    }
}

// Funcion que cambia de color el texto de las celdas de la tabla de fisioterapeutas respecto a la seleccionada en el combobox
// Se le llama al cambiar la seleccion del combobox
function fisioChange() {

    // Recojo en variable el combobox de los fisioterapeutas
    var selectFisioterapeutas = document.getElementsByName('selectFisios')[0];

    // Recojo en variable las celdas de la segunda tabla correspondientes al valor seleccionado del select
    var fisios = document.getElementsByClassName(selectFisioterapeutas.value);

    // Recojo en variable todas las celdas de la segunda tabla
    var fisiosTabla = document.getElementsByClassName('tablaFisios');

    // Pongo en negro el texto de todas las celdas de la segunda tabla
    for (var index = 0; index < fisiosTabla.length; index++) {
        fisiosTabla[index].style.color = "";
    }

    // Cambio a rojo el texto de las celdas correspondientes al fisioterapeuta seleccionado
    for (var index2 = 0; index2 < fisios.length; index2++) {
        fisios[index2].style.color = "red";
    }
}