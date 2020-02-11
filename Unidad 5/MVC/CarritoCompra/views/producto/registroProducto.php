<h2 class="w-100">Registrar Producto</h2>
<form action="index.php?c=Productos&&a=agregarProducto" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around flex-wrap text-left mt-5">
    <div class="form-group mx-2 col-5">
        <label for="nombre">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="nombre" name="nombre">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="categoria">Category:</label>
        <input type="number" class="form-control" placeholder="Enter category" id="categoria" name="categoria">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="descripcion">Description:</label>
        <input type="text" class="form-control" placeholder="Enter description" id="descripcion" name="descripcion">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="precio">Price:</label>
        <input type="number" class="form-control" step="0.01" placeholder="Enter price" id="precio" name="precio">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="stock">Stock:</label>
        <input type="number" class="form-control" placeholder="Enter stock" id="stock" name="stock">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="oferta">Oferta:</label>
        <input type="text" class="form-control" placeholder="Enter oferta(si o no)" id="oferta" name="oferta">               
    </div>
    <div class="form-group mx-2 col-5">
        <label for="imagen">Image address:</label>
        <input type="file" class="form-control" placeholder="Enter image" id="imagen" name="imagen">
        <br>
        <button type="submit" name="submit" class="btn btn-success col-12">Agregar</button>
    </div> 
</form>