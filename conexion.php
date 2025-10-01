<?php
$conexion = new mysqli("localhost", "root", "", "arepya");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>