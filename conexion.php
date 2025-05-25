<?php
$host = "sql209.infinityfree.com";
$usuario = "if0_39077671";
$clave = "w7GtUDDybXqY3";
$bd = "if0_39077671_onepiece";

$conexion = new mysqli($host, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
