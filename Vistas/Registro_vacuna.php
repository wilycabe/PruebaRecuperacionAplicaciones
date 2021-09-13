<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
        <script src="../Controlador/registro_vacuna.js"></script>  
        <script src="../Controlador/seleccion_mascota.js"></script>
        <link rel="stylesheet" href="/css/style.css">
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

        <div id="registro">
            <h1>Registro de autores</h1>
            <form method="post">
                <div class = "form-group">
                <label for="lblnombre">Nombre: </label>
                    <select name="cbx_mascota_seleccion" id="cbx_mascota_seleccion" class="btn btn-secondary dropdown-toggle">

                    </select>                
                </div>
                <div class="form-group">
                    <label for="lblapellido">Fecha: </label>
                    <input type="date" class="form-control" name="dtfecha" id="dtfecha">
                </div>
                <div class = "form-group">
                    <label for="lbledad">Enfermedad: </label>
                    <input type="text" class="form-control" name="txtenfermedad" id="txtenfermedad" aria-describedby="emailHelp" placeholder="Enfermedad">
                </div>
                <div class="form-group">
                    <label for="lblapellido">Fecha Próxima: </label>
                    <input type="date" class="form-control" name="dtfechaproxima" id="dtfechaproxima" max="2021-12-31">
                </div>
                    <button type="submit" id="btnregistrar_vacuna" class="btn btn-primary">Registrar</button>
            </form>
        </div>

    </body>
    
</html>