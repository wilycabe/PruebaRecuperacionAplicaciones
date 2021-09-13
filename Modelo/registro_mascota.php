 /-<?php
    include_once 'conexion.php';
    $objeto=new Conexion();
    $conexion=$objeto->Conectar();

    $cbx_cliente_seleccion=(isset($_POST['cbx_cliente_seleccion']))?$_POST['cbx_cliente_seleccion']:"nombre mal ingresada";
    $txtaliasmascota=(isset($_POST['txtaliasmascota']))?$_POST['txtaliasmascota']:"apelldio mal ingresada";
    $txtespecie=(isset($_POST['txtespecie']))?$_POST['txtespecie']:"edad mal ingresada";
    $cbx_raza=(isset($_POST['cbx_raza']))?$_POST['cbx_raza']:"edad mal ingresada";

    try{
        $insert="INSERT INTO `mascotas`(`IdCliente`, `AliasMascota`, `Especie`, `Raza`) VALUES ('$cbx_cliente_seleccion', '$txtaliasmascota', '$txtespecie', '$cbx_raza');";
        if(($resultado=mysqli_query($conexion,$insert))===true){
            echo $resultado;
        }  
    }
    catch (Exception $e){
        die(mysqli_error($conexion));
    }
?>