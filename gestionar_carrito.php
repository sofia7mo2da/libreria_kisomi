<script>
function añadirAlCarrito(idProducto) {
    fetch('gestionar_carrito.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `idProducto=${idProducto}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.querySelector('.header-link .cart-count').textContent = `(${data.totalProductos})`;
        } else {
            alert('Error al añadir al carrito');
        }
    })
    .catch(error => console.error('Error:', error));
}
<script>

<?php
session_start();
$conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idProducto = $_POST['idProducto'];

    // Verificar si existe un carrito activo
    $queryCarrito = "SELECT IDRegistrar FROM carrito WHERE Estado = 'activo' LIMIT 1";
    $resultCarrito = $conexion->query($queryCarrito);

    if ($resultCarrito->num_rows > 0) {
        // Obtener el ID del carrito activo
        $carrito = $resultCarrito->fetch_assoc();
        $idCarrito = $carrito['IDRegistrar'];
    } else {
        // Crear un nuevo carrito si no existe uno activo
        $queryNuevoCarrito = "INSERT INTO carrito (Estado) VALUES ('activo')";
        $conexion->query($queryNuevoCarrito);
        $idCarrito = $conexion->insert_id;
    }

    // Insertar el producto en detalle_carrito
    $queryDetalle = "INSERT INTO detalle_carrito (IDCarrito, IDProducto) VALUES (?, ?)";
    $stmt = $conexion->prepare($queryDetalle);
    $stmt->bind_param("ii", $idCarrito, $idProducto);
    $stmt->execute();

    // Calcular el total de productos en el carrito
    $queryTotal = "SELECT COUNT(*) AS totalProductos FROM detalle_carrito WHERE IDCarrito = ?";
    $stmt = $conexion->prepare($queryTotal);
    $stmt->bind_param("i", $idCarrito);
    $stmt->execute();
    $resultTotal = $stmt->get_result();
    $totalProductos = $resultTotal->fetch_assoc()['totalProductos'];

    echo json_encode(['success' => true, 'totalProductos' => $totalProductos]);
    exit;
}

echo json_encode(['success' => false]);
?>

