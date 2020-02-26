<h1 class="w-100 mb-4">Gestionar productos</h1>
<div class="w-100">
    <a href="index.php?c=Productos&&a=agregar" class="btn btn-success w-25">Crear Producto</a>
</div>
<div class="w-100 d-flex justify-content-center">
    <table class="table mt-3 w-75 border">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php $productosTodos = ProductosController::MostrarTodo(); ?>
        <?php while ($product = $productosTodos->fetchObject()){ ?>
                <tr>
                    <td><?= $product->id; ?></td>
                    <td><?= $product->nombre; ?></td>
                    <td><?= $product->precio; ?></td>
                    <td><?= $product->stock; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-info w-100">Editar</a>
                            <a href="index.php?c=Productos&&a=borrarProducto&&id=<?=$product->id?>" class="btn btn-danger w-100 ml-1">Eliminar</a>
                        </div>
                    </td>
                </tr>
                
        <?php } ?>
    </table>
</div>