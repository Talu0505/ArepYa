<?php
include("conexion.php");
                
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $numerodocumento = $_POST['numerodocumento'];
    $tipoid = $_POST['tipoid'];
    $celular = $_POST['celular'];
    $contraseña = $_POST['contraseña'];
    $nombreusuario = $_POST['nombreusuario'];
    $fechaingreso = $_POST['fechaingreso'];
    $rol = $_POST['rol'];

    $sql = "UPDATE usuarios SET nombre='$nombre', direccion='$direccion', numerodocumento='$numerodocumento', tipoid='$tipoid', celular='$celular', contraseña='$contraseña', nombreusuario='$nombreusuario', fechaingreso='$fechaingreso', rol='$rol' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario actualizado correctamente.";
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
} else {
    echo "Datos incompletos.";
}
?>