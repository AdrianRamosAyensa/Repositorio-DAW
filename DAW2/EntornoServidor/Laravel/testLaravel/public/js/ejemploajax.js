console.log("enlazado");

$('#buscar').click(function(e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#filtro').val();
    console.log(data);

    $.get("/studies/filter?filter=" + data, function(data, status) {
        // console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);
        $('#destinofiltro').html(data);
    });
})

function grabar(data) {
    //recorrer el data y grabar en una tabla html
}