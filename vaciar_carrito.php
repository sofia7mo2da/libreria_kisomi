<?php
session_start();

if (!isset($_SESSION['id_carrito'])) {
    echo "No tienes un carrito activo.";
    exit();
}

$idCarrito = $_SESSION['id_carrito'];

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");

// Eliminar los productos del carrito
$query = "DELETE FROM detalle_carrito WHERE IDCarrito = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $idCarrito);
$stmt->execute();

echo "Carrito vaciado.";
?>
