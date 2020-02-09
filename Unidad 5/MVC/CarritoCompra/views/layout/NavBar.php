<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="assets/img/icono.jpg" alt="logo" style="width:40px;">
    </a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <?php $categoriasMenu = CategoriasController::MostrarTodo(); ?>
        <?php while($category = $categoriasMenu->fetchObject()){ ?>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#"><?= $category->nombre ?></a>
                </li>
        <?php } ?>
    </ul>
</nav>