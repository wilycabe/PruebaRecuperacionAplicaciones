<?php
    include_once 'conexion.php';
    $objeto=new Conexion();
    $conexion=$objeto->Conectar();

    try{
        $queryBusqueda="SELECT idCliente,Nombre FROM `cliente`";
        if($resultado=$conexion->query($queryBusqueda)){
            $opciones="";
            while($fila=mysqli_fetch_row($resultado)){
                $opciones=$opciones.'<option class="btnOpcion" value='.($fila[0]).'>'.utf8_encode($fila[1]).'</option>';
            }
            echo $opciones."";
        }
    }
    catch (Exception $e){
        die(mysqli_error($conexion));
    }

    
?> 