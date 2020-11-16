function VerificarStock() {

    var Ref = $("#Ref").val();
    var Col = $("#Col").val();
    var Cant = parseInt($("#Cant").val());

    $.ajax({
        url: "VerificarStock.php",
        type: "post",
        data: { Ref, Col, Cant },
        success: function (result) {

            var Nombre = $("#Nombre").val();
            var Referencia = $("#Ref").val();
            var Cantidad = $("#Cant").val();
            var Precio = $("#monedaInput").val();

            if (Nombre === null || Nombre === "" || Referencia === null || Referencia === "" || Cantidad === null || Cantidad === "" || Precio === null || Precio === "") {

                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Complete todos los campos!!</p>"
            } else {

                if (result >= 0) {
                    registrarVenta();


                } else if (result < 0) {
                    var Result = parseInt(result) + parseInt(Cant);
                    alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Cantidad insuficiente!!<br> Quedan " + Result + " unidades de la Referencia " + Ref + " en color " + Col + "!!</p>"


                }
            }
        }



    });

}

function registrarVenta() {

    var datos = $("#formVentas").serialize();
    $.ajax({
        url: "RegistrarVentas.php",
        type: "POST",
        data: datos,
        success: function (e) {
            if (e == 1) {
                alerta.innerHTML = "<p style='color:black;background:#88f268;padding:5px;width:200px'>Venta registrada exitosamente!!</p>"
                ActualizarStock();
            } else {
                alerta.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Error en la conexión a la base de datos!!</p>"
            }
        }
    });
}

function ActualizarStock() {

    var Ref = $("#Ref").val();
    var Col = $("#Col").val();
    var Cant = parseInt($("#Cant").val());
    $.ajax({

        type: "post",
        url: "ActualizarStock.php",
        data: { Ref, Col, Cant },
        success: function () {
            UnidadesExistentes();
            VentaCliente()


        }
    });
}


function UnidadesExistentes() {

    var Ref = $("#Ref").val();
    var Col = $("#Col").val();
    $.ajax({
        type: "post",
        url: "Unidadesexistentes.php",
        data: { Ref, Col },
        success: function (e) {
            if (e <= 5) {
                var Result = parseInt(e);
                Unidadesexistentes.innerHTML = "<p style='color:black;background:#ff8119;padding:5px;width:200px'>Quedan " + Result + " unidades de la Referencia " + Ref + " en color " + Col + "!!</p>"

            }

        }
    })
}

function VentaCliente() {


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

    $("#formVentas").trigger('reset');
}

