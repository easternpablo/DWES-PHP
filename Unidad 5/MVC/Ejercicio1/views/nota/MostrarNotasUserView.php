<?php
    
    while($todasNotasId = $notasUser->fetchObject()){
        echo $todasNotasId->id." ---> ".$todasNotasId->titulo." - ".$todasNotasId->descripcion." - ".$todasNotasId->fecha."<br>";
    }
    