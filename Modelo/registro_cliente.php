/-<?php
    include_once 'conexion.php';
    $objeto=new Conexion();
    $conexion=$objeto->Conectar();

    $txtnombrecliente=(isset($_POST['txtnombrecliente']))?$_POST['txtnombrecliente']:"nombre mal ingresada";
    
    try{
        $insert="INSERT INTO `cliente`(`Nombre`) VALUES ('$txtnombrecliente');";
        if(($resultado=mysqli_query($conexion,$insert))===true){
            echo $resultado;
        }  
    }
    catch (Exception $e){
        die(mysqli_error($conexion));
    }
?>