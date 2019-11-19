<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Compras realizadas</title>
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
            
     <?php if(isset($_GET['ventasclienteid'])){
                
                $idcliente = $_GET['ventasclienteid'];
                
                $sql = " SELECT E.id,C.marca,C.modelo,C.precio FROM Encargos E INNER JOIN Coches C ON E.coche_id = C.id WHERE E.cliente_id = $idcliente ";
                $resultado = mysqli_query($conexion,$sql);
                
                if(mysqli_num_rows($resultado)>0){ ?>
                    <div class="seccion-principal">
                        <?php if(isset($_SESSION['usuario'])){echo "Usuario: ".$_SESSION['usuario'];}?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Identificador</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                                while($fila = mysqli_fetch_assoc($resultado)){ ?>
                                
                                    <tr>
                                        <td><?= $fila['id'] ?></td>
                                        <td><?= $fila['marca'] ?></td>
                                        <td><?= $fila['modelo'] ?></td>
                                        <td><?= $fila['precio'] ?></td>
                                    </tr>
                                    
                          <?php }
                           
                }else{
                    echo "0 registros";
                }?>
                                    
                            </tbody>
                        </table>
                    </div>
      <?php } ?>
            
        <?php require_once '../includes/footer.html'; ?>
             
    </body>
</html>