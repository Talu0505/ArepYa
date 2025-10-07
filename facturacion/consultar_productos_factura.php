<?php
$conexion = new mysqli("localhost", "root", "", "arepya"); 

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id_factura = $_POST['id_factura'];

$sql = "SELECT fp.id_factura, p.nombre as nombreProducto, p.presentacion, p.precio as precioUnidad, fp.cantidad, fp.precio as precioTotal FROM factura_producto fp INNER JOIN productos p on fp.id_producto = p.ID_Producto WHERE fp.id_factura=$id_factura;";
$resultado = $conexion->query($sql);

$facturas = [];

while ($fila = $resultado->fetch_assoc()) {
    $facturas[] = $fila;
}

echo json_encode($facturas);
$conexion->close();
?>