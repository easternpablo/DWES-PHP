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
                <i class="fa fa-gamepad"></i>
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
                    <h2>Últimas entradas</h2>
                    <?php 
                        
                        $sql = " SELECT E.id,E.titulo,C.nombre,E.fecha,E.descripcion FROM entradas E INNER JOIN categorias C ON E.categoria_id = C.id ORDER BY E.fecha DESC ";
                        $consulta = mysqli_query($conexion,$sql);
                        
                        if(mysqli_num_rows($consulta)>0){ 
                            while($fila = mysqli_fetch_assoc($consulta)){ ?>
                                <div class="entrada">
                                    <h2><?=$fila['titulo']?></h2>
                                    <p><?=$fila['nombre']?> | <?=$fila['fecha']?></p>
                                    <p><?=$fila['descripcion']?></p>
                                    <p>
                                        <a href="formModificarEntrada.php?modificarid=<?=$fila['id']?>" class="fa fa-edit"></a> 
                                        <a href="../acciones/eliminarEntrada.php?borrarid=<?=$fila['id']?>" class="fa fa-trash"></a>
                                    </p>                                
                                </div>
                        <?php    
                            }
                        }                  
                        ?>
                   
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="buscador">
                            <div class="formulario">
                                <form class="form-inline md-form form-sm active-cyan-2 mt-2" action="formBusqueda.php" method="post">
                                    <input name="campoBuscar" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                                    <button type="submit" class="btn btn-success">Buscar</button>
                                </form>
                            </div>
                        </div>
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