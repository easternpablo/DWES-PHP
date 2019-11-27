<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nueva categoria - Blog</title>
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
                <i style="text-decoration: none;" class="fa fa-gamepad"></i>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="principal.php">Inicio</a>
                </li>
                <?php   
                
                    $sql = "SELECT * FROM categorias ";
                    $result = mysqli_query($conexion,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($fila = mysqli_fetch_assoc($result)){?>
                            <li class="nav-item">
                                <a class="nav-link"><?=$fila['nombre']?></a>
                            </li>
                <?php   
                        }
                    }                  
                ?>
                 
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
                <div id="primera-columna" class="col-lg-8">
                    <div class="formulario-categoria">
                        <fieldset>
                            <legend>Nueva categoria</legend>
                            <form class="form-login" action="../acciones/registrarCategoria.php" method="post">
                                <div class="form-group">
                                    <label>Categoria</label><br>
                                    <input type="text" placeholder="Enter categoria" class="form-control" name="categoria" required/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="buscador"></div>
                        <div class="opciones">
                            <?php if(isset($_SESSION['usuario'])){echo "Usuario: ".$_SESSION['usuario'];}?><br><br>
                            <div class="btn-group-vertical">
                                <a href="formEntrada.php"><button type="button" class="btn btn-success">Crear entrada</button></a><br>
                                <a href="formCategoria.php"><button type="button" class="btn btn-primary">Crear categoría</button></a><br>
                                <a href="formMisDatos.php"><button type="button" class="btn btn-warning">Mis datos</button></a><br>
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