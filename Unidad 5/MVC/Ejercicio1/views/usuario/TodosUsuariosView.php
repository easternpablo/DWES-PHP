<?php

    while($user = $todosUsuarios->fetchObject()){
        echo $user->nombre."-".$user->email."-".$user->fecha."<br>";
    }