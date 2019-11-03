<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de coches</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        
            require_once 'conexion.php';
            
            require_once '../includes/navbar.html';
    
            $sql = "SELECT * FROM Coches";
    
            $result = mysqli_query($conexion,$sql);
    
            if(mysqli_num_rows($result)>0){ ?>
                <div class="seccion-principal">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                                while($fila = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?= $fila['id'] ?></td>
                                        <td><?= $fila['marca'] ?></td>
                                        <td><?= $fila['modelo'] ?></td>
                                        <td><?= $fila['precio'] ?></td>
                                        <td><?= $fila['stock'] ?></td>
                                    </tr>
                          <?php }
                
                require_once 'desconexion.php';          
                          
            }else{
                echo "0 registros";
                require_once 'desconexion.php';
            }?>
                        </tbody>
                    </table>
                </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
