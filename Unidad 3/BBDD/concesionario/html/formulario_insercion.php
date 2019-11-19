<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Insertar coche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        
        <?php require_once 'conexion.php'; ?>
        <?php require_once '../includes/navbar.html'; ?>
        
        <div class="seccion-principal">
            <?php
            
                if(isset($_SESSION['errores'])){
                    foreach ($_SESSION['errores'] as $error){
                        echo "* ".$error."<br>";
                        $_SESSION['errores'] = null;
                    }                   
                }
                
                if(isset($_SESSION['usuario'])){echo "Usuario: ".$_SESSION['usuario'];}
            ?>
            <form class="formulario-insercion" action="insertar.php" method="POST">               
                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Enter modelo"/>
                    <label>Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Enter marca"/>
                    <label>Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Enter precio"/>
                    <label>Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter stock"/>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-primary">Resetear</button>
            </form>
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>