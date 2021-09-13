$(document).ready(function () {
    recargarlista();
    $("cbx_cliente_seleccion").change(function(){
        recargarlista();
    })

    function recargarlista(){
        $.ajax({
            type: "POST",
            url: "../Modelo/seleccion_cliente.php",
            success: function (p) {
                $('#cbx_cliente_seleccion').html(p);
            }   
        });
    }

});