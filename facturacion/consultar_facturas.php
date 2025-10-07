<?php
$conexion = new mysqli("localhost", "root", "", "arepya"); 

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT f.id as id, f.fecha as fecha, c.nombre as nombre, f.total as total FROM factura f INNER JOIN cliente c ON f.id_cliente = c.id;";
$resultado = $conexion->query($sql);

$cliente = [];

while ($fila = $resultado->fetch_assoc()) {
    $cliente[] = $fila;
}

echo json_encode($cliente);
$conexion->close();
?>