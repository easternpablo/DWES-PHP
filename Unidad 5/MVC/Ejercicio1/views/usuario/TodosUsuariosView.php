<?php

    while($user = $todosUsuarios->fetchObject()){
        echo $user->nombre."-".$user->email."-".$user->fecha." <a href='index.php?c=Usuarios&&a=delete&&idDelete=$user->id'>Eliminar<a/><br>";
    }