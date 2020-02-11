<?php if(isset($selectCategory)){ ?>
    <h4 class="w-100 my-5"><?= $selectCategory->nombre ?></h4>
    <?php if ($todosProductos->rowCount() == 0){ ?>
            <p>No existen productos para esta categoria</p>
    <?php }else{ ?>
      <?php while ($productos = $todosProductos->fetchObject()){ ?>
            <a href="#" class="decoration">
                <div class="card col-4 p-3 bg-light border-light">
               <?php if ($productos->imagen != null){ ?>
                    <div class="card-body">
                        <img class="" height="150" width="" src="uploads/img/<?= $productos->imagen ?>" class="card-img-top w-50 p-3 mx-auto" alt="">
                    </div>
               <?php } ?>                   
                </div>
            </a>
         <?php } ?>
    <?php } ?>
<?php }else{ ?>
      <h3>Categoria no existe</h3>
<?php } ?>
