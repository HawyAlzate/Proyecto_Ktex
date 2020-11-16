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
                alerta.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:200px'>Entrada registrada exitosamente!!</p>"
            } else if (e == "Sin Datos") {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Llene todos los datos!!</p>"
            } else {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Error en la conexión a la base de datos!!</p>"
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
                Anuncio.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:200px'>Referencia registrada correctamente!!</p>"
            } else if (e ==2) {
                
                Anuncio.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>La Referencia ya se encuenra registrada!!</p>"
            }
        }
    });

    $("#FormAgregarN").trigger('reset');
}
