<?php
    require('fpdf183\fpdf.php');

    class PDF extends FPDF{

        function Header() {
            $this->SetFont('Arial', '', 20);
            $this->Cell(0, 10, 'Reporte de las mascotas', 0, 10,'C');
        }

        function CargarDatos(){
            include_once '../../Modelo/conexion.php';
            $objeto=new Conexion();
            $conexion=$objeto->Conectar();
            $this->Ln();

            //Datos del autor

            // $this->SetFont('Arial', '', 15);
            // $this->cell(5);
            // $this->Cell(120, 9, utf8_decode('Datos sobre el autor'), 10, 10); 
            // $this->Ln();
            // $seleccion=(isset($_POST['cbx_autores_seleccion']))?$_POST['cbx_autores_seleccion']:"id mal ingresado";
            // $this->SetFont('Arial', '', 12);
            // $this->cell(10);
            // try{
            //     $reporte="SELECT * FROM `mascota` WHERE '$seleccion'=IdMascota";
            //     $resultado=$conexion->query($reporte);           
            //     $autor= mysqli_fetch_row($resultado);
            //     $this->Cell(120, 9, utf8_decode('- Identificador de la mascota: '.$autor[0].''), 10, 10);
            //     $this->Cell(120, 9, utf8_decode('- Id Mascota: '.$autor[1].''), 10, 10);
            //     $this->Cell(120, 9, utf8_decode('- Alias Mascota: '.$autor[2].''), 10, 10);
            //     $this->Cell(120, 9, utf8_decode('- Especie: '.$autor[3].''), 10, 10);
            //     $this->Cell(120, 9, utf8_decode('- Raza: '.$autor[4].''), 10, 10);
            // }
            // catch (Exception $e){
            //     die(mysqli_error($conexion));
            // }

            //Cargar numero de libros del autor

            // $reporte="SELECT count(*) FROM `autor`";
            // $resultado=$conexion->query($reporte);
            // if ($row = $resultado->fetch_array()) {
            //     $this->Cell(120, 9, ($row[0]), 10, 10);
            // }  
              
            //

            //Guardar datos de los libros

            $reporte="SELECT * FROM `mascotas`";
            $resultado=$conexion->query($reporte);  
            $mascotas = array();
            while($datos= mysqli_fetch_assoc($resultado)){
                $mascotas[] = $datos;
            }


            //Crear tabla para los libros

            $encabezado = array('IdMascota','IdCliente','AliasMascota','Especie','Raza');  
            $w = array(25,25,25,25,25);

            //Impresion cabecera

            $this->Ln();
            for ($i = 0; $i < count($w); $i++) {
                $this->Cell($w[$i], 8, utf8_decode($encabezado[$i]), 1); 
            }
            
            //Impresion datos de los libros

            foreach($mascotas as $fila){
                $this->Ln();
                $this->Cell($w[0], 6, $fila['IdMascota'], 1);
                $this->Cell($w[1], 6, utf8_decode($fila['IdCliente']), 1);
                $this->Cell($w[2], 6, utf8_decode($fila['AliasMascota']), 1);
                $this->Cell($w[3], 6, $fila['Especie'], 1);
                $this->Cell($w[4], 6, $fila['Raza'], 1);
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

