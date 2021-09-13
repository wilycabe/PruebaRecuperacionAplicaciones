 /-<?php
    include_once 'conexion.php';
    $objeto=new Conexion();
    $conexion=$objeto->Conectar();

    $cbx_mascota_seleccion=(isset($_POST['cbx_mascota_seleccion']))?$_POST['cbx_mascota_seleccion']:"nombre mal ingresada";
    $dtfecha=(isset($_POST['dtfecha']))?$_POST['dtfecha']:"apelldio mal ingresada";
    $txtenfermedad=(isset($_POST['txtenfermedad']))?$_POST['txtenfermedad']:"edad mal ingresada";
    $dtfechaproxima=(isset($_POST['dtfechaproxima']))?$_POST['dtfechaproxima']:"edad mal ingresada";

    try{
        //$insert="INSERT INTO `vacunas`(`IdMascota`, `Fecha`, `Enfermedad`, `FechaProxima`) VALUES ('$cbx_mascota_seleccion', '$dtfecha', '$txtenfermedad', '$dtfechaproxima');";
        $insert="INSERT INTO `vacunas`(`IdMascota`, `Fecha`, `Enfermedad`, `FechaProxima`) VALUES ('$cbx_mascota_seleccion','$dtfecha','$txtenfermedad','$dtfechaproxima')";
        //echo $insert;
        if(($resultado=mysqli_query($conexion,$insert))===true){
            echo $resultado;
        }  
    }
    catch (Exception $e){
        die(mysqli_error($conexion));
    }
?>