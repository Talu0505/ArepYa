<?php
include("conexion.php");

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];
    $fecha_elaboracion = $_POST['fecha_elaboracion'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $lote = $_POST['lote'];

    $sql = "UPDATE inventario SET producto_id=$producto_id, cantidad='$cantidad', fecha_elaboracion='$fecha_elaboracion', fecha_vencimiento='$fecha_vencimiento', lote='$lote' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Inventario actualizado correctamente.";
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
} else {
    echo "Datos incompletos.";
}
?>