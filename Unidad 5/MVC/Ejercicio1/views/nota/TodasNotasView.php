<?php

    while($nota = $todasNotas->fetchObject()){
        echo $nota->nombre." ".$nota->apellidos."---->".$nota->titulo." - ".$nota->descripcion." - ".$nota->fecha."<br>";
    }
