<?php
    require('fpdf183\fpdf.php');

    class PDF extends FPDF{

        function Header() {
            $this->SetFont('Arial', '', 20);
            $this->Cell(0, 10, 'Reporte de los libros dependiendo del autor', 0, 10,'C');
        }

        function CargarDatos(){
            include_once '../../Modelo/conexion.php';
            $objeto=new Conexion();
            $conexion=$objeto->Conectar();
            $this->Ln();

            //Datos del autor

            $this->SetFont('Arial', '', 15);
            $this->cell(5);
            $this->Cell(120, 9, utf8_decode('Datos sobre el autor'), 10, 10); 
            $this->Ln();
            $seleccion=(isset($_POST['cbx_autores_seleccion']))?$_POST['cbx_autores_seleccion']:"id mal ingresado";
            $this->SetFont('Arial', '', 12);
            $this->cell(10);
            try{
                $reporte="SELECT * FROM `autor` WHERE '$seleccion'=idAutor";
                $resultado=$conexion->query($reporte);           
                $autor= mysqli_fetch_row($resultado);
                $this->Cell(120, 9, utf8_decode('- Identificador del autor: '.$autor[0].''), 10, 10);
                $this->Cell(120, 9, utf8_decode('- Nombre del autor: '.$autor[1].''), 10, 10);
                $this->Cell(120, 9, utf8_decode('- Apellido del autor: '.$autor[2].''), 10, 10);
                $this->Cell(120, 9, utf8_decode('- Edad del autor: '.$autor[3].''), 10, 10);
            }
            catch (Exception $e){
                die(mysqli_error($conexion));
            }

            //Cargar numero de libros del autor

            $reporte="SELECT count(*) FROM `autor`";
            $resultado=$conexion->query($reporte);
            if ($row = $resultado->fetch_array()) {
                $this->Cell(120, 9, ($row[0]), 10, 10);
            }  
              
            //

            //Guardar datos de los libros

            $reporte="SELECT * FROM `libro` WHERE Autor_idAutor=$seleccion";
            $resultado=$conexion->query($reporte);  
            $libros = array();
            while($datos= mysqli_fetch_assoc($resultado)){
                $libros[] = $datos;
            }


            //Crear tabla para los libros

            $encabezado = array('Identificador','Nombre','Descripción','Número de páginas');  
            $w = array(25, 60, 60, 45);

            //Impresion cabecera

            $this->Ln();
            for ($i = 0; $i < count($w); $i++) {
                $this->Cell($w[$i], 8, utf8_decode($encabezado[$i]), 1); 
            }
            
            //Impresion datos de los libros

            foreach($libros as $fila){
                $this->Ln();
                $this->Cell($w[0], 6, $fila['idLibro'], 1);
                $this->Cell($w[1], 6, utf8_decode($fila['nombre']), 1);
                $this->Cell($w[2], 6, utf8_decode($fila['descripcion']), 1);
                $this->Cell($w[3], 6, $fila['nro_paginas'], 1);
            }
            
        }
    }

    $pdf = new PDF();

    $pdf->SetFont('Arial','',11);
    $pdf->AddPage();
    //$pdf->DatosInformativos();
    $pdf->CargarDatos();
    $pdf->Output();
?>

