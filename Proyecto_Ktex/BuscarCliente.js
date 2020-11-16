 $(buscar_Cliente());


function buscar_Cliente(consulta) {
    $.ajax({
        url: "BuscarCliente.php",
        type: "POST",
        datatype: "html",
        data: { consulta: consulta },
        
    })
        .done(function (respuesta) {
            $("#datos").html(respuesta);
        })
        .fail(function () {
            console.log("error");
    })
}

$(document).on('keyup', '#buscar', function () {
    var valor = $(this).val();
    if (valor != "") {
        buscar_Cliente(valor);
    } else {
        buscar_Cliente();
    }
})