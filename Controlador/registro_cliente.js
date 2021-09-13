
$(document).ready(function () {
    $("#btnregistrar_cliente").click(function () { 
        txtnombrecliente = $("#txtnombrecliente").val()

        if ((txtnombrecliente != "" && txtnombrecliente != null) ) {

            $.ajax({
                type: "POST",
                url: "../Modelo/registro_cliente.php",
                data: {'txtnombrecliente':txtnombrecliente},
                
                success: function (p) {
                    alert(p)
                    resultado="1";
                    if (p.indexOf(resultado)!==-1) {
                        alert("Se ingreso correctamente los datos")
                    } else {
                        alert("No se ingreso correctamente los datos")
                    }
                },
            })

        } 
        else {
            alert("Verifique que el nombreestén llenos")
        }

    });
});


