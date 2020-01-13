<?php

    while($nota = $todasNotas->fetchObject()){
        echo $nota->titulo."-".$nota->descripcion."-".$nota->fecha."<br>";
    }

