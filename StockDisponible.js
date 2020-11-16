$(buscar_producto());


function buscar_producto(consulta) {
    $.ajax({
        url: "StockDisponible.php",
        type: "POST",
        datatype: "html",
        data: { consulta: consulta },        
    })
        .done(function (respuesta) {
            $("#inventario").html(respuesta);
        })
        .fail(function () {
            console.log("error");
    })
}

$(document).on('keyup', '#buscar', function () {
    var valor = $(this).val();
    if (valor != "") {
        buscar_producto(valor);
    } else {
        buscar_producto();
    }
})
