<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar coche</title>
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
            <form class="formulario-modificacion" method="POST">
                <div class="form-group">
                    <label>Identificador</label>
                    <input type="number" class="form-control" id="identificador" name="identificador" placeholder="Enter id"/>
                </div>
                <button type="submit" class="btn btn-primary">Visualizar</button>
                <button type="reset" class="btn btn-primary">Resetear</button>
            </form>
        </div>
        
        <?php
            
            if(isset($_POST)){
                
                $id = (int)$_POST['identificador'];
            
                $sql = " SELECT marca,modelo,precio,stock FROM Coches WHERE id=$id ";
                $resultado = mysqli_query($conexion,$sql);

                /*if($resultado){
                    
                }else{
                    echo "No existe."
                }*/
            }
            
        ?>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>