<h3 class="w-100">Gestionar categorias</h3>
<div class="w-100">
    <a href="index.php?c=Categorias&&a=crear" class="btn btn-success w-25">Crear categoria</a>
</div>
<table class="table mt-3 w-50">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
    </tr>
    <?php $categoriasMenu = CategoriasController::MostrarTodo(); ?>
    <?php while ($category = $categoriasMenu->fetchObject()){ ?>
            <tr>
                <td><?= $category->id; ?></td>
                <td><?= $category->nombre; ?></td>
            </tr>
    <?php } ?>
</table>
