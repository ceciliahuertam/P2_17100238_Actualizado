<?php
 class Conexion {
     public static function Conectar() {
         define('servidor', 'localhost');//Nombre de nuestro servidor
         define('nombre_bd', 'picmove');//Nombre de la bd
         define('usuario', 'root');//Usuario
         define('password', '');//En mi caso, no tengo contrase;a
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try {
    //Mandamos los parametros a la conexion 
    $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password,
    $opciones);
    return $conexion; //Devuelve la conexion
} catch (Exception $e) {// Si no se puede conectar marcara este msj 
    die("El error de conexion es: " .$e->getMessage);
}
     }
    }
    //En mi caso yo tengo instalado xampp y para que me muestre mi carpeta en el localhost debo agregar mi carpeta grid_usuarios 
    //en la siguiente ruta
    //C:\xampp\htdocs\grid_usuarios