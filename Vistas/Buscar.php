<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
        <script src="../Controlador/busqueda.js"></script>
        <title>Control de biblioteca</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand" href="/index.php">Inicio</a>
                    <a class="nav-item nav-link active" href="/Vistas/Registro_cliente.php">Registro de clientes <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="/Vistas/Registro_mascota.php">Registro de mascotas</a>
                    <a class="nav-item nav-link active" href="/Vistas/Registro_vacuna.php">Registro de vacunas</a>
                    <a class="nav-item nav-link active" href="/Vistas/Buscar.php">Buscar</a>
                    <a class="nav-item nav-link active" href="/Vistas/Reporte.php">Reportes</a>
                </div>
            </div>
        </nav>

        <div id="busqueda_libros">
            <div>
                <h1>Buscador</h1>
                <input type="text" id="buscador" placeholder="Ingrese el dato a buscar">
            </div>

            <br>

            <div id="tabla_datos">     
            </div>
        </div>
  
    </body>
    
</html>