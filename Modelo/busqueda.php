<?php
    include_once 'conexion.php';
    $objeto=new Conexion();
    $conexion=$objeto->Conectar();

    $tabla="";
    $queryBusqueda="SELECT * FROM mascotas INNER JOIN vacunas ON mascotas.IdMascota=vacunas.IdMascota";

    if(isset($_POST['dato'])){
        $query_aux=$conexion->real_escape_string($_POST['dato']);
        $queryBusqueda="SELECT * FROM mascotas INNER JOIN vacunas ON mascotas.IdMascota=vacunas.IdMascota WHERE 
        mascotas.IdMascota LIKE '%".$query_aux."%' OR
        mascotas.IdCliente LIKE '%".$query_aux."%' OR
        vacunas.FechaProxima LIKE '%".$query_aux."%'";
        // $queryBusqueda="SELECT * FROM libro WHERE
        // idLibro LIKE '%".$query_aux."%' OR
		// nombre LIKE '%".$query_aux."%' OR
		// descripcion LIKE '%".$query_aux."%' OR
		// nro_paginas LIKE '%".$query_aux."%' OR
		// Autor_idAutor LIKE '%".$query_aux."%'";
    }


    $buscar=$conexion->query($queryBusqueda);
    
    if ( $buscar->num_rows > 0)
    {
        $tabla.= 
        '<table id="busqueda" class="table">
            <tr class="bg-primary">
                <td>IdMascota</td>
                <td>IdCliente</td>
                <td>FechasProxima</td>
            </tr>';
    
        while($fila= $buscar->fetch_assoc())
        {
            $tabla.=
            '<tr>
                <td>'.$fila['IdMascota'].'</td>
                <td>'.$fila['IdCliente'].'</td>
                <td>'.$fila['FechaProxima'].'</td>
             </tr>
            ';
        }
    
        $tabla.='</table>';
    } else
        {
            $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
        }
    
    
    echo $tabla;
    
?> 