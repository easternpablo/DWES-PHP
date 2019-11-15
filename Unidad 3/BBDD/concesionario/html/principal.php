<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Concesionario - index</title>
        <meta charset="utf-8">
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
            <?php if(isset($_SESSION['usuario'])){session_destroy();}?>
            <?php echo "Bienvenido: ".$_SESSION['usuario']?>
            <div class="row">
                <div class="col-lg-6">
                    <img src="../imagenes/oportunidad-negocio.jpg" alt="Imagen coches del concesionario"/>
                </div>
                <div class="col-lg-6">
                    <img src="../imagenes/15359692674468.jpg" alt="Imagen coches del concesionario 2">
                </div>
            </div>           
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>