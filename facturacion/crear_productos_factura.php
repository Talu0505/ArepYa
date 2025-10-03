<?php
include '../conexion.php';

$id_factura = $_POST['id_factura'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO factura_producto (id_factura, id_producto, cantidad, precio)
        VALUES ($id_factura, $id_producto, $cantidad, $precio)";

if ($conexion->query($sql)) {
    echo "Producto factura registrado con éxito";
} else {
    echo "Error: " . $conexion->error;
}
?>