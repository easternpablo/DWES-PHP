<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modificar coche</title>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">      
    </head>
    <body>
        
        <?php require_once 'conexion.php'; ?>
        <?php require_once '../includes/navbar.html'; ?>
        
        <?php 
            
            if(isset($_GET['modificarid'])){
                
                $id = $_GET['modificarid'];
                
                $sql = "SELECT * FROM Coches WHERE id=$id ";
                $resultado = mysqli_query($conexion,$sql);
                $fila = mysqli_fetch_assoc($resultado); ?>
                
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
                    
                    <form class="formulario-modificacion" action="modificar.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="identificador" name="identificador" value=<?=$fila['id']?>>
                            <label>Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" value=<?=$fila['modelo']?>>
                            <label>Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" value=<?=$fila['marca']?>>
                            <label>Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" value=<?=$fila['precio']?>>
                            <label>Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value=<?=$fila['stock']?>>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
        
      <?php } ?>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
