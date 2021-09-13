<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
        <script src="../Controlador/registro_mascota.js"></script> 
        <script src="../Controlador//seleccion_cliente.js"></script> 
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
            <h1>Registro de mascotas</h1>
            <form method="post">
                <div class = "form-group">
                    <label for="lblnombre">Nombre: </label>
                    <select name="cbx_cliente_seleccion" id="cbx_cliente_seleccion" class="btn btn-secondary dropdown-toggle">

                    </select>
                </div>
                <div class="form-group">
                    <label for="lblapellido">Alias Mascota: </label>
                    <input type="text" class="form-control" name="txtaliasmascota" id="txtaliasmascota" aria-describedby="emailHelp" placeholder="Alias Mascota" >
                </div>
                <div class = "form-group">
                    <label for="lblespecie">Especie: </label>
                    <input type="text" class="form-control" name="txtespecie" id="txtespecie" aria-describedby="emailHelp" placeholder="Especie" >
                </div>
                <div class = "form-group">
                    <label for="lblraza">raza: </label>
                    <select name="cbx_raza" id="cbx_raza" class="btn btn-secondary dropdown-toggle">
                        <option>PitBull</option>
                        <option>Pastor</option>
                        <option>Cocker</option>
                        <option>Pekinés</option>
                    </select>
                </div>
                    <button type="submit" id="btnregistrar_mascota" class="btn btn-primary">Registrar</button>
            </form>
        </div>

    </body>
    
</html>