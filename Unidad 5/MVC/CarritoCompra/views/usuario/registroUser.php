<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online - Nuevo Usuario</title>
        <link rel="icon" href="assets/img/carrito.png"/>
        <link rel="stylesheet" href="assets/css/estilos.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">REGISTRO</strong></h3>
                    <form action="index.php?c=Usuarios&&a=RegistrarUsuario" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Name address:</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="nombre" name="nombre">               
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Surname address:</label>
                            <input type="text" class="form-control" placeholder="Enter surname" id="apellidos" name="apellidos">               
                        </div>
                        <div class="form-group">
                            <label for="emailR">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="emailR" name="emailR">               
                        </div>
                        <div class="form-group">
                            <label for="pwdR">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwdR" name="pwdR">
                        </div>
                        <div class="form-group">
                            <label for="rol">Rol address:</label>
                            <input type="text" class="form-control" placeholder="Enter rol" id="rol" name="rol">               
                        </div>
                        <div class="form-group">
                            <label for="imagen">Image address:</label>
                            <input type="file" class="form-control" placeholder="Enter image" id="imagen" name="imagen">               
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Registro</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>