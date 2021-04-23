$(document).ready(function () {
    $("#AgregarEntrada").on('click', function (e) {
        e.preventDefault();
        RegistrarEntrada();
    })
})

function RegistrarEntrada() {
    var datos = $("#FormEntradaC").serialize();
    $.ajax({

        url: "RegistrarEntrada.php",
        type: "POST",
        data: datos,
        success: function (e) {
            if (e == 1) {
                alerta.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:300px'>¡Cantidad registrada exitosamente!</p>"
            } else if (e == "Sin Datos") {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡Falta la Referencia!</p>"
            } else {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡Error en la conexión a la base de datos!</p>"
            }
        }
    });

    $("#FormEntradaC").trigger('reset');
}


//Eliminar Entradas...........................................................................................................

$(document).ready(function () {
    $("#EliminarEntrada").on('click', function (e) {
        e.preventDefault();
        EliminarEntrada();
    })
})
function EliminarEntrada(){
    
    var Referencia = $("#Ref").val();
    var Negro = $("#Negro").val();
    var Blanco = $("#Blanco").val();
    var Rojo = $("#Rojo").val();
    var Azul = $("#Azul").val();
    var Vinotinto = $("#Vinotinto").val();
    var Mostaza = $("#Mostaza").val();
    var VerdeMilitar = $("#VerdeMilitar").val();
    var PaloDeRosa = $("#PaloDeRosa").val();
    var Lila = $("#Lila").val();
    var Otro = $("#Otro").val();
    $.ajax({

        type: "post",
        url: "EliminarEntrada.php",
        data: { Referencia, Negro, Blanco, Rojo, Azul, Vinotinto, VerdeMilitar, Mostaza, PaloDeRosa, Lila, Otro },
        success: function (e) {
            alert(e)
            if (e == 1) {
                alerta.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:300px'>¡Cantidad eliminada exitosamente!</p>"
            } else {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:300px'>¡No se pudo eliminar!</p>"
            }


        }
    });

    $("#EliminarEntrada").trigger('reset');

}



//Registrar Nueva Referencia.................................................................................................................



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


