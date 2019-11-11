<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - Concesionario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        
        <?php require_once '../includes/navbar.html'; ?>
        
        <div class="seccion-principal">
            <div class="row">
                <div class="col-lg-6">
                    <form class="formulario-login" action="../includes/mysql_bbdd/login.php" method="POST">
                        <fieldset>
                            <legend>Iniciar Sesión</legend>
                            <div class="form-group">
                                <label>Email</label><br>
                                <input type="email" placeholder="Enter email" class="form-control" name="email" required="true"/>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label><br>
                                <input type="password" placeholder="Enter contraseña" class="form-control" name="password" required="true"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </fieldset>
                    </form> 
                </div>
                <div class="col-lg-6">
                    <form class="formulario-registro" action="../includes/mysql_bbdd/registro_usuario.php" method="POST">
                        <fieldset>
                            <legend>Registro Usuario</legend>
                            <div class="form-group">
                                <label>Email</label><br>
                                <input type="email" placeholder="Enter email" class="form-control" name="email" required="true"/>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label><br>
                                <input type="password" placeholder="Enter contraseña" class="form-control" name="password1" required="true"/>
                            </div>
                            <div class="form-group">
                                <label>Repita Contraseña</label><br>
                                <input type="password" placeholder="Repeat contraseña" class="form-control" name="password2" required="true"/>
                            </div>
                            <div class="form-group">
                                <label>Nombre</label><br>
                                <input type="text" placeholder="Enter your name" class="form-control" name="nombre"/>
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label><br>
                                <input type="text" placeholder="Enter your surname" class="form-control" name="apellidos"/>
                            </div>
                            <div class="form-group">
                                <label>Edad</label><br>
                                <input type="number" placeholder="Enter your age" class="form-control" name="edad"/>
                            </div>
                            <div class="form-group">
                                <label>Dirección</label><br>
                                <input type="text" placeholder="Enter your address" class="form-control" name="direccion"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <button type="reset" class="btn btn-primary">Resetear</button>
                            </div>
                        </fieldset>
                    </form> 
                </div>
            </div>           
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
