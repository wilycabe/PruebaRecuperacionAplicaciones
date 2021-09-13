
$(document).ready(function () {
    $("#btnregistrar_mascota").click(function () { 
        cbx_cliente_seleccion = $("#cbx_cliente_seleccion").val()
        txtaliasmascota = $("#txtaliasmascota").val()
        txtespecie = $("#txtespecie").val()
        cbx_raza = $("#cbx_raza").val()


        if (txtespecie != "" && txtespecie != null) {
            
            // alert(parseInt(txtaliasmascota.lenght))
            // if (txtaliasmascota.lenght==4) {
                $.ajax({
                    type: "POST",
                    url: "../Modelo/registro_mascota.php",
                    data: {'cbx_cliente_seleccion':cbx_cliente_seleccion, 'txtaliasmascota':txtaliasmascota, 'txtespecie':txtespecie,'cbx_raza':cbx_raza},
                    
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
            // } 
            // else {
            //     alert("Verifique que el Alias de la mascota tenga 5 carácteres")
            // }
        } 
        else {
            alert("Verifique que el nombre del cliente y especie de la mascota estén llenos")
        }
    });
});


