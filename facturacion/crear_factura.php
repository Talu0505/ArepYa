<?php
include '../conexion.php';

$id_cliente = $_POST['id_cliente'];
$total = $_POST['total'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO factura (id_cliente, total, fecha)
        VALUES ($id_cliente, $total, '$fecha')";

$result_save = $conexion->query($sql);
if ($result_save) {
    echo json_encode($conexion->insert_id);
} else {
    echo "Error: " . $conexion->error;
}
?>