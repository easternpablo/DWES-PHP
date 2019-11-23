<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Main - Blog</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php require_once '../acciones/conexion.php'; ?>
        <?php require_once '../includes/header.html'; ?>
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">
                <i style='text-decoration: none;' class="fa fa-gamepad"></i>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="seccion-principal">
            <div class="row">
                <div id="primera-columna" class="col-lg-8"></div>
                <div class="col-lg-4">
                    <aside>
                        <div class="buscador"></div>
                        <div class="opciones">
                            <?php if(isset($_SESSION['usuario'])){echo "Usuario: ".$_SESSION['usuario'];}?>
                            <br>
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success">Crear entrada</button><br>
                                <button type="button" class="btn btn-primary">Crear categoría</button><br>
                                <button type="button" class="btn btn-warning">Mis datos</button><br>
                                <a href="../acciones/desconexion.php"><button type="button" class="btn btn-danger">Cerrar sesión</button></a><br>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
