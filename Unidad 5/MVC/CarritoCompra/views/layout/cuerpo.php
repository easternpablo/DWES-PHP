<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-body">
                <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> LOGIN </strong></h3>
                <form>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">               
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-body">
                <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> REGISTRO </strong></h3>
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
    <div class="col-lg-8"></div>
</div>