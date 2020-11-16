
$('#BuscarClienteVenta').on('click', function () {
    buscar_Cliente();

})
function buscar_Cliente() {

    var Nombre = $("#Nombre").val();
    var Fecha = $("#Fecha").val();
    
    $.ajax({
        url: "MostrarVenta.php",
        type: "POST",
        data: { Nombre, Fecha },
        success: function (e) {

            var Datos = e;

            var contenido = document.getElementById("contenido");
            contenido.innerHTML = Datos;
        }
    })
}
