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
        
        <?php require_once '../includes/navbarLogin.html'; ?>
        
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
                <div class="col-lg-6">
                    <form class="formulario-login" action="login.php" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <div class="form-group">
                            <label>Usuario</label><br>
                            <input type="text" placeholder="Enter username" class="form-control" name="userLogin" required/>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label><br>
                            <input type="password" placeholder="Enter password" class="form-control" name="passwordLogin" required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-6">
                    <form class="formulario-registro" action="registro_usuario.php" method="POST">
                        <h2>Registrar usuario</h2>
                        <div class="form-group">
                            <label>Usuario</label><br>
                            <input type="text" placeholder="Enter username" class="form-control" name="user" required/>
                        </div>
                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="email" placeholder="Enter email" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label><br>
                            <input type="password" placeholder="Enter contraseña" class="form-control" name="password1" required/>
                        </div>
                        <div class="form-group">
                            <label>Repita Contraseña</label><br>
                            <input type="password" placeholder="Repeat contraseña" class="form-control" name="password2" required/>
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
                    </form> 
                </div>
            </div>           
        </div>
        
        <?php require_once '../includes/footer.html'; ?>
        
    </body>
</html>
