$(document).ready(function () {
    recargarlista();
    $("cbx_mascota_seleccion").change(function(){
        recargarlista();
    })

    function recargarlista(){
        $.ajax({
            type: "POST",
            url: "../Modelo/seleccion_mascota.php",
            success: function (p) {
                $('#cbx_mascota_seleccion').html(p);
            }   
        });
    }

});