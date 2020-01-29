<nav class="navbar navbar-expand-sm bg-dark navbar-dark" action="index.php?c=Categorias&&a=MostrarTodo">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="assets/img/icono.jpg" alt="logo" style="width:40px;">
    </a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
        </li>        
        <?php
        if(isset($categorias)){ ?>
            <li class="nav-item">
                <a class="nav-link" href="#"> <?=$categorias->nombre?> </a>
            </li>              
  <?php } ?>
        <li class="nav-item">
            <a class="nav-link border-white" href="#">+</a>
        </li>
    </ul>
</nav>