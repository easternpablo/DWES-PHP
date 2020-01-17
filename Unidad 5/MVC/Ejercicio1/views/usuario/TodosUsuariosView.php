<?php

    while($user = $todosUsuarios->fetchObject()){
        echo $user->id."------>".$user->nombre."-".$user->email."-".$user->fecha." <a href='index.php?c=Usuarios&&a=delete&&idDelete=$user->id'>Eliminar<a/> | <a href='index.php?c=Notas&&a=MostrarNotasId&&iduser=$user->id'>Notas</a><br>";
    }