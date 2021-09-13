<?php 
    class Conexion{	  
        public static function Conectar() {        
            $servidor='localhost';
            $nombre_bd='veterinaria';
            $usuario= 'root';
            $password= '';					        		
            try{
                $conexion = new mysqli($servidor, $usuario, $password,$nombre_bd);			
                return $conexion;
            }catch (Exception $e){
                echo '<script>alert(("El error de Conexión es: ". $e->getMessage()))</script>';
            }
        }
    }
?>