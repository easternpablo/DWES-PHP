<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Blog</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php require_once '../includes/header.html'; ?>
        <?php require_once '../includes/navbarlogin.html'; ?>
        
        <div class="seccion-principal">
            <?php 
            
                session_start();
                
                if(isset($_SESSION['erroresRegistro'])){
                    foreach ($_SESSION['erroresRegistro'] as $error){
                        echo "* ".$error."<br>";
                        $_SESSION['erroresRegistro'] = null;
                    }
                }
                
                if(isset($_SESSION['erroresLogin'])){
                    foreach ($_SESSION['erroresLogin'] as $error){
                        echo "* ".$error."<br>";
                        $_SESSION['erroresLogin'] = null;
                    }
                }
                
                if(isset($_SESSION['usuario'])){session_destroy();}
            ?>
            <div class="row">
                <div id="primera-columna" class="col-lg-8"></div>
                <div class="col-lg-4">
                    <aside>
                        <div class="formulario-login">
                            <fieldset>
                                <legend>Iniciar Sesión</legend>
                                <form class="form-login" action="../acciones/login.php" method="post">
                                    <div class="form-group">
                                        <label>Email</label><br>
                                        <input type="email" placeholder="Enter email" class="form-control" name="emailLogin" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label><br>
                                        <input type="password" placeholder="Enter password" class="form-control" name="passwordLogin" required/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                        <div class="formulario-registro">
                            <fieldset>
                                <legend>Registro</legend>
                                <form class="form-login" action="../acciones/registrarUsuario.php" method="post">
                                    <div class="form-group">
                                        <label>Email</label><br>
                                        <input type="email" placeholder="Enter email" class="form-control" name="emailRegistro" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" placeholder="Enter name" class="form-control" name="nombreRegistro" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" placeholder="Enter surname" class="form-control" name="apellidosRegistro" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label><br>
                                        <input type="password" placeholder="Enter password" class="form-control" name="passwordRegistro" required/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Crear cuenta</button>
                                        <button type="reset" class="btn btn-primary">Resetear</button>
                                    </div>
                                </form>
                            </fieldset>                            
                        </div> 
                    </aside>
                </div>
            </div>
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
