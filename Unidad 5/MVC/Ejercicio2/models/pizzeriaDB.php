<?php

class Database{
    
    private static $pdo_db = 'mysql:host=localhost;dbname=Pizzas;charset=utf8';
    private static $pdo_user = 'easternpablo';
    private static $pdo_password = 'pThIHF6r@@##';
    
    public function conectaDB(){
        try{
            $conexion = new PDO(self::$pdo_db, self::$pdo_user, self::$pdo_password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $excepcion) {
            echo("Error de conexion: ".$excepcion->getMessage());
        }
        return $conexion;
    }
}