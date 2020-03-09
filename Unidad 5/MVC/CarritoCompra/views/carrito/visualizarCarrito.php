<h3 class="w-100">Carrito</h3>
<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
    <table class="table">
        <tr class="table-header">
            <th>imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>opciones</th>
        </tr>
        <?php
            foreach ($_SESSION['carrito'] as $indice => $elemento) : {
                $producto = $elemento['producto'];
            }
        ?>
        <tr class="table-body">
            <?php if ($producto->imagen != NULL): ?>
              <td><img  src="uploads/img/<?= $producto->imagen ?>" width="80" alt=""></td>
            <?php endif; ?>
            <td> 
                <a href="#"> <?= $producto->nombre ?></a>
            </td>
            <td><?= $producto->precio ?></td>
            <td>
                <p class="w-100"><?= $elemento['unidades'] ?></p>
                <a href="#"  class="btn btn-success w-25">+</a>
                <a href="#"  class="btn btn-success w-25">-</a>
            </td>
            <td> <a href="#" class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No tienes productos en el carrito</p>  
<?php endif; ?>
