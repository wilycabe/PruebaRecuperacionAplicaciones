
$(document).ready(function () {
    $("#btnregistrar_vacuna").click(function () { 
        cbx_mascota_seleccion = $("#cbx_mascota_seleccion").val()
        dtfecha = $("#dtfecha").val()
        txtenfermedad = $("#txtenfermedad").val()
        dtfechaproxima = $("#dtfechaproxima").val()

        if (txtenfermedad != "" && txtenfermedad != null) {
            
            // alert(parseInt(dtfecha.lenght))
        //if (dtfecha.isBefore(dtfechaproxima)) {
                $.ajax({
                    type: "POST",
                    url: "../Modelo/registro_vacuna.php",
                    data: {'cbx_mascota_seleccion':cbx_mascota_seleccion, 'dtfecha':dtfecha, 'txtenfermedad':txtenfermedad,'dtfechaproxima':dtfechaproxima},
                    
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
        //     } 
        //     else {
        //         alert("Verifique las fecha sea menor que la fecha proxima")
        //     }
        } 
        else {
            alert("Verifique que la enfermedad esté llena")
        }
    });
});


