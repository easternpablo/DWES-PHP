<div class="d-flex">
    <aside class="w-25 bg-light mt-3 p-3 shadow">
    <?php if(!isset($_SESSION['user'])){ ?>
        <h3>LOGIN</h3>
        <form action="index.php?c=Usuarios&&a=LoginUsuario" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">               
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
            <a href="index.php?c=Usuarios&&a=registrar" class="btn btn-warning text-dark mt-1 mb-3 w-100">Registrar aqui</a>
        </form>  
    <?php  } else { ?>
        <p><?=$_SESSION['user']->nombre?> <?=$_SESSION['user']->apellidos?></p>
        <div class="mt-3">
            <h3>MI CARRITO</h3>
            <a href="#" class="btn btn-outline-info text-dark w-100 mt-1">Productos:</a>
            <a href="#" class="btn btn-outline-info text-dark w-100 mt-1">Total:</a>
            <a href="#" class="btn btn-outline-info text-dark w-100 mt-1">Ver el carrito</a>
        </div>
        <div class="mt-3">
     <?php if($_SESSION['admin']){ ?>
                <a href="index.php?c=Categorias&&a=index" class="btn btn-outline-success text-dark w-100 mt-1">Gestionar categoria</a>
                <a href="index.php?c=Productos&&a=gestionProductos" class="btn btn-outline-success text-dark w-100 mt-1">Gestionar producto</a>
                <a href="#" class="btn btn-outline-success text-dark w-100 mt-1">Gestionar pedidos</a>
                <a href="#" class="btn btn-outline-success text-dark w-100 mt-1">Mis Pedidos</a>
                <a href="index.php?c=Usuarios&&a=CerrarSession" class="btn btn-outline-danger text-dark w-100 my-1">Cerrar Sesión</a>
      <?php } else { ?>
                <a href="#" class="btn btn-outline-success text-dark w-100 mt-1">Mis Pedidos</a>
                <a href="index.php?c=Usuarios&&a=CerrarSession" class="btn btn-outline-danger text-dark w-100 my-1">Cerrar Sesión</a>
      <?php } ?>
        </div>
    <?php  } ?>
    </aside>
<div class="w-75 bg-light mt-3 p-3 pl-4 border-left shadow">
    <div class="row d-flex justify-content-around text-center">
