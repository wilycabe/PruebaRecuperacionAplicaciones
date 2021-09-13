$(get_datos());

function get_datos(dato) {
    $.ajax({
        type: "POST",
        url: "../Modelo/busqueda.php",
        data: {'dato':dato},       
    })
    .done(function(resultado){
        $("#tabla_datos").html(resultado);
    })

}

$(document).on('keyup','#buscador',function () {

    var buscar=$(this).val();
    if(buscar!=""){
        get_datos(buscar);
    }
    else{
        get_datos();
    }
});