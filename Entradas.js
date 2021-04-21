$(document).ready(function () {
    $("#AgregarC").on('click', function (e) {
        e.preventDefault();
        RegistrarEntradas();
    })
})

function RegistrarEntradas() {

    var datos = $("#FormEntradasC").serialize();
    $.ajax({

        url: "RegistrarEntrada.php",
        type: "POST",
        data: datos,
        success: function (e) {
            if (e == 1) {
                alerta.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:300px'>¡Entrada registrada exitosamente!</p>"
            } else if (e == "Sin Datos") {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡Falta la Referencia!</p>"
            } else {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡Error en la conexión a la base de datos!</p>"
            }
        }
    });

    $("#FormEntradasC").trigger('reset');
}



$(document).ready(function () {
    $("#AgregarN").on('click', function (e) {
        e.preventDefault();
        RegistrarNuevo();
    })
})

function RegistrarNuevo() {

    var datos = $("#FormAgregarN").serialize();
    $.ajax({

        url: "RegistrarNuevo.php",
        type: "POST",
        data: datos,
        success: function (e) {
            alert(e)
            if (e == 1) {
                Anuncio.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:300px'>¡Referencia registrada correctamente!</p>"
            } else if (e == "Referencia Existente") {
                
                Anuncio.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡La Referencia ya se encuenra registrada!</p>"
            } else if (e == "Referencia sin ingresar"){

                Anuncio.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡No has ingresado datos!</p>"
            }
        }
    });

    $("#FormAgregarN").trigger('reset');
}
