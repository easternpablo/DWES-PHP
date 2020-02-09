<h2 class="w-100">Registrarse</h2>
<form action="index.php?c=Usuarios&&a=RegistrarUsuario" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around flex-wrap text-left mt-5">
    <div class="form-group mx-2 col-5">
        <label for="nombre">Name address:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="nombre" name="nombre">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="apellidos">Surname address:</label>
        <input type="text" class="form-control" placeholder="Enter surname" id="apellidos" name="apellidos">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="emailR">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="emailR" name="emailR">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="pwdR">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwdR" name="pwdR">
    </div>
    <div class="form-group mx-2 col-5">
        <label for="rol">Rol address:</label>
        <input type="text" class="form-control" placeholder="Enter rol" id="rol" name="rol">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="imagen">Image address:</label>
        <input type="file" class="form-control" placeholder="Enter image" id="imagen" name="imagen">               
    </div>
    <button type="submit" name="submit" class="btn btn-success col-6">Registro</button>
</form>