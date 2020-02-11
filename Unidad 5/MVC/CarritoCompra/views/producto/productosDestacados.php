<H3 class="w-100 border-bottom pb-3">Algunos de nuestros productos</H3>
<?php while ($produc = $producto->fetchObject()) { ?>
    <a href="#" class="hover pt-2 decoration">
        <div class="card col-4 p-3 bg-light border-light" >
            <?php if ($produc->imagen != NULL): ?>
                <img class="" height="150" src="uploads/img/<?= $produc->imagen ?>" class="card-img-top w-50 p-3 mx-auto" alt="">
            <?php endif; ?>
            <div class="card-body text-decoration-none">
                <h5 class="card-title mb-0 text-success"><?= $produc->nombre ?></h5>
                <p class="card-text mb-0 text-dark"><?= $produc->precio ?> €</p>
                <p class="card-text  text-dark font-weight-bold"> <?= $produc->stock ?> Unidades disponibles</p>
            </div>
            <a href="#" class="btn btn-success">Agregar a carrito</a>
        </div>
    </a>
<?php } ?>
