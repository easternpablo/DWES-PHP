<?php

    while($nota = $todasNotas->fetchObject()){
        echo $nota->id." ---> ".$nota->usuario_id." *** ".$nota->titulo." - ".$nota->descripcion." - ".$nota->fecha."<br>";
    }
