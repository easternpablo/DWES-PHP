<div class="container-fluid text-center">
<?php  if(!isset($_SESSION['user'])){ ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">LOGIN</strong></h3>
                    <form action="index.php?c=Usuarios&&a=LoginUsuario" method="post">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">               
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                        <a href="views/usuario/registroUser.php">Registrar aqui</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php  } else { ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">MI CARRITO</strong></h3>
                    <ul style="text-decoration: none;">
                        <li><a href="">Productos:</a></li>
                        <li><a href="">Total:</a></li>
                        <li><a href="">Ver el carrito</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <p><?=$_SESSION['user']->nombre?> <?=$_SESSION['user']->apellidos?></p>
                    <?php if($_SESSION['admin']){ ?>
                        <ul style="text-decoration: none;">
                            <li><a href="">Gestionar categoria</a></li>
                            <li><a href="">Gestionar producto</a></li>
                            <li><a href="">Gestionar pedidos</a></li>
                            <li><a href="">Mis Pedidos</a></li>
                            <li><a href="index.php?c=Usuarios&&a=CerrarSession">Cerrar Session</a><li>
                        
                    <?php } else { ?>
                            <li><a href="">Mis Pedidos</a></li>
                            <li><a href="index.php?c=Usuarios&&a=CerrarSession">Cerrar Session</a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
</div>