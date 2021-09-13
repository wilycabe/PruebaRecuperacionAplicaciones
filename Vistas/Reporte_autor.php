<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
        <script src="../Controlador/seleccion_a.js"></script> 
        <title>Control de biblioteca</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand" href="/index.php">Inicio</a>
                    <a class="nav-item nav-link active" href="/Vistas/Registro_autor.php">Registro de autores <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="/Vistas/Registro_libro.php">Registro de libros</a>
                    <a class="nav-item nav-link active" href="/Vistas/Eliminacion_libro.php">Eliminar libros</a>
                    <a class="nav-item nav-link active" href="/Vistas/Reporte_autor.php">Reportes</a>
                </div>
            </div>
        </nav>

        <div id="seleccion_autores">
            <h1>Seleccione un autor para conocer sus libros</h1>
            <form method="post" action="../Controlador/reportes/reporte_autor.php">
                <div>Elija un autor:
                    <select name="cbx_autores_seleccion" id="cbx_autores_seleccion" class="btn btn-secondary dropdown-toggle">

                    </select>
                </div>
                <button class="btn btn-success" name="seleccionar" id="seleccionar">Seleccionar</button>
            </form>
        </div>
  
    </body>
    
</html>