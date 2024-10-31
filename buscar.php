<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisomi Librería Escolar</title>
    <link rel="shortcut icon"  href="img/logo.jpg">
    <link rel="stylesheet" href="styles.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="top-bar">
        <div class="container">
            <p>📦 Envíos a domicilios 🏠 🛵</p>
        </div>
    </div>

    <!-- Encabezado principal -->
    <header class="main-header">
        <div class="container">
            <div class="header-left">
                <a href="#">
                    <img src="img/Logotipo.png" class="logo">
            </div>
            <div class="search-container">
                <form action="buscar.php" method="GET">
                    <input type="text" placeholder="¿Qué estás buscando?" class="search-input" name="search">
                    <button class="search-button" type="submit">Buscar</button>
                </form>
            </div>            
            <br>
            <div class="header-right">
                <div class="menu-ayuda">
                    <a href="#" class="header-link"><i class="fas fa-question-circle"></i> Ayuda</a>
                    <div class="contenido-ayuda">
                        <a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos."><i class="fab fa-whatsapp"></i> +543795003045</a><br>
                        <a href="mailto:info@libreriaenjoy.com.ar"><i class="fas fa-envelope"></i> info@libreria_kisomi.com.ar</a>
                    </div>
                </div>
                <div class="menu-cuenta">
                    <a href="#" class="header-link" id="botonCuenta"><i class="fas fa-user-circle"></i> Mi cuenta</a>
                    <div class="contenido-cuenta" id="menuCuentaDesplegable">
                        <p>
                            <a href="registrarse.php">
                                <i class="fas fa-user-plus"></i> Registrarse
                            </a>
                        </p>
                        <p>
                            <a href="iniciar_sesion.php">
                                <i class="fas fa-sign-in-alt"></i> Iniciar sesión
                            </a>
                        </p>
                    </div>
                </div>
                <div class="cart-dropdown">
                    <a href="#" class="header-link" onclick="toggleDropdown()">
                        <i class="fas fa-shopping-cart"></i>Mi carrito (0)
                    </a>
                    <!-- Menú desplegable del carrito -->
                    <div id="dropdown-menu" class="dropdown-menu">
                        <div class="cart-item">
                            <p>No hay productos en el carrito</p>
                        </div>
                        <div class="cart-total">
                            <p>Total: $0.00</p><br>
                            <a href="agregar_carrito.php" class="checkout-button">Ir al carrito</a>
                        </div>  
                <div class="view-more">
                    <a href="productos.php" class="view-more-button">Ver más productos</a>
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        
            <script src="script.js"></script>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </header>

    <!-- Menú de navegación -->
    <nav class="nav-bar">
        <div class="container">
            <ul>
                <li><a href="index.php">Inicio</a></li><br>
                <li><a href="productos.php">Productos</a></li><br>
                <li class="dropdown">
                    <a href="#">Categorías</a>
                    <div class="dropdown-content">
                        <div class="column">
                            <a href="#">Agendas</a>
                            <a href="#">Archivadores</a>
                            <a href="#">Aros</a>
                            <a href="#">Borradores</a>
                            <a href="#">Biromes</a>
                            <a href="#">Blocks</a>
                            <a href="#">Correctores</a>
                            <a href="#">Calculadoras</a>
                            <a href="#">Carpetas</a>
                            <a href="#">Cuadernos</a>
                        </div>
                        <div class="column">
                            <a href="#">Cartucheras</a>
                            <a href="#">Clips</a>
                            <a href="#">Compases</a>
                            <a href="#">Grapadoras</a>
                            <a href="#">Lapices</a>
                            <a href="#">Libretas</a>
                            <a href="#">Marcadores</a>
                            <a href="#">Mochilas</a>
                            <a href="#">Pegamento</a>
                            <a href="#">Post-it</a>
                        </div>
                        <div class="column">
                            <a href="#">Reglas</a>
                            <a href="#">Resaltadores</a>
                            <a href="#">Tempera</a>
                            <a href="#">Tijeras</a>
                            <a href="#">Sacapuntas</a>
                            
                        </div>
                        <!-- Agrega más columnas según sea necesario -->
                    </div>
                </li><br>
                <li><a href="promociones.html">Promociones</a></li><br>
                <li><a href="contacto.html">Contacto</a></li><br>
            </ul>
        </div>
    </nav>
    <br>

<?php
$conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_GET['search'])) {
    $search = trim($conexion->real_escape_string($_GET['search'])); // Escapar el término de búsqueda para seguridad y eliminar espacios
    echo "<div class='container'>";
    echo "<h2 class='my-4 text-center'>Resultados de búsqueda:</h2>";

    $sql = "SELECT * FROM producto WHERE Nombre LIKE '%$search%' OR Descripcion LIKE '%$search%'";
    $result = $conexion->query($sql);

    // Mostrar resultados en un formato de tarjeta
    if ($result && $result->num_rows > 0) {
        echo "<div class='row'>";
        while ($row = $result->fetch_assoc()) {
            echo "
                <div class='col-md-4 mb-4'>
                    <div class='card h-100 shadow-sm'>
                        <img src='ruta_de_la_imagen.png' class='card-img-top' alt='" . htmlspecialchars($row['Nombre']) . "'>
                        <div class='card-body'>
                            <h4 class='card-title text-primary font-weight-bold'>" . htmlspecialchars($row['Nombre']) . "</h4>
                            <p class='card-text text-muted' style='font-size: 1.1rem;'>" . htmlspecialchars($row['Descripcion']) . "</p>
                            <p class='card-text' style='font-size: 1.3rem; color: #27ae60;'><strong>Precio:</strong> $" . number_format($row['Precio'], 2) . "</p>
                            <p class='card-text' style='font-size: 1.1rem; color: #888;'><strong>Stock:</strong> " . ($row['Stock'] > 0 ? 'Disponible' : 'No disponible') . " unidades</p>
                        </div>
                        <div class='card-footer'>
                            <button class='btn btn-info btn-lg btn-block'>Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            ";
        }
        echo "</div>"; // Cerrar row
    } else {
        echo "<div class='alert alert-warning text-center'>No se encontraron productos.</div>";
    }

    echo "</div>"; // Cerrar container
} else {
    echo "<div class='alert alert-info text-center'>Por favor ingresa un término de búsqueda.</div>";
}

// Cerrar la conexión si existe
if ($conexion) {
    $conexion->close();
}
?>

</div class="whatsapp">
<a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos." target="_blank" class="whatsapp-button">
    <img src="img/Imagen de WhatsApp.jpg" alt="WhatsApp" />
  </a>

<!-- pie de pagina-->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <h2>Sobre Nosotros</h2>
            <p>Somos una librería escolar dedicada a ofrecer productos de alta calidad a precios accesibles, ayudando a estudiantes y familias a prepararse para el éxito académico.</p><br>
            <p>&copy; 2024 Librería Escolar. Todos los derechos reservados.</p>
        </div>

        <div class="footer-section links">
            <h2>Enlaces Rápidos</h2>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.html">Producto</a></li>
                <li><a href="categorias.html">Categorías</a></li>
                <li><a href="promociones.html">Promociones</a></li>
                <li><a href="contacto.html">Contáctanos</a></li>
            </ul>
        </div>

        <div class="footer-section payment">
            <h2>Medios de Pago</h2>
            <p>Aceptamos las siguientes formas de pago:</p>
            <ul>
                <li><i class="fas fa-credit-card"></i> Tarjetas de crédito y débito</li>
                <li><i class="fas fa-money-bill-alt"></i> Transferencias bancarias</li>
                <li><i class="fas fa-wallet"></i> Efectivo en tienda</li>
                <li><i class="fas fa-mobile-alt"></i> Pago por aplicaciones móviles</li>
            </ul>
        </div>


        <div class="footer-section delivery">
            <h2>Delivery</h2>
            <p>Ofrecemos servicio de entrega a domicilio dentro de Corrientes. También puedes retirar tu pedido en nuestra Libreria.🛵</p>
        </div>

        <div class="footer-section contact">
            <h2>Contáctanos</h2>
            <p><i class="fas fa-map-marker-alt"></i> Calle Falsa 123, Corrientes, Argentina</p>
            <p><i class="fas fa-phone-alt"></i> +54 3795003045</p>
            <p><i class="fas fa-envelope"></i>info@libreriaescolar.com</p>
        </div>

        <div class="footer-section social">
            <h2>Síguenos</h2>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/kisomi_libreria/profilecard/?igsh=MTVra2t0aXY3djJsZQ=="><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos."><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</footer>