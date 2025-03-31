<?php

class Conexion
{
    public static function conectar()
    {
        // Actualiza el nombre de la base de datos para que coincida con el nombre completo
        $link = new PDO("mysql:host=localhos;dbname=gestor_venta", "root", "", array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        return $link;
    }
}
?>
