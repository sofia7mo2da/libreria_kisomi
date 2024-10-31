<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisomi Librería Escolar - Promociones</title>
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
                            <a href="registrarse.html">
                                <i class="fas fa-user-plus"></i> Registrarse
                            </a>
                        </p>
                        <p>
                            <a href="iniciar_sesion.html">
                                <i class="fas fa-sign-in-alt"></i> Iniciar sesión
                            </a>
                        </p>
                    </div>
                </div>
                <a href="carrito.html" class="header-link"><i class="fas fa-shopping-cart"></i>Mi carrito (0)</a>
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
                </li><br>
                <li><a href="promociones.php">Promociones</a></li><br>
                <li><a href="contacto.html">Contacto</a></li><br>
            </ul>
        </div>
        <script>
            document.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
                e.preventDefault();
                var dropdownMenu = document.querySelector('.dropdown-menu');
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
        
            // Cerrar el menú si haces clic fuera de él
            window.addEventListener('click', function(e) {
                var dropdownMenu = document.querySelector('.dropdown-menu');
                if (!e.target.matches('.dropdown-toggle')) {
                    dropdownMenu.style.display = 'none';
                }
            });
        </script>
    </nav>
<!-- Sección de Promociones -->
<div class="container my-5">
    <h2>Ofertas:</h2>
    <div id="carouselProductos" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Se mueve cada 3 segundos -->
        <div class="carousel-inner">
            <?php
            // Conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta para obtener promociones con la URL de imagen desde `imagenes_producto`
            $query = "
                SELECT prom.IDProducto, prom.Nombre, prom.Descripcion, prom.Fecha_Inicio, prom.Fecha_Fin, 
                       prom.Porcentaje_Descuento, img.URL_Imagen
                FROM promociones prom
                LEFT JOIN producto prod ON prom.IDProducto = prod.IDProducto
                LEFT JOIN imagenes_producto img ON prod.IDProducto = img.IDProducto
            ";
            $result = $conexion->query($query);

            $counter = 0;
            $isActive = true; // Activar la primera diapositiva
            while ($promo = $result->fetch_assoc()) {
                $idProducto = $promo['IDProducto'];
                $urlImagen = $promo['URL_Imagen'] ? $promo['URL_Imagen'] : 'img/default.jpg'; // Imagen predeterminada si no hay URL

                // Abrir un nuevo slide cada 4 productos
                if ($counter % 2 == 0) {
                    if ($counter > 0) echo '</div></div>'; // Cerrar slide anterior
                    echo $isActive ? '<div class="carousel-item active"><div class="row">' : '<div class="carousel-item"><div class="row">';
                    $isActive = false;
                }

                // Mostrar tarjeta de producto
                echo '<div class="col-md-3">';
                echo '<div class="product-card">';
                echo '<span class="offer-label">' . htmlspecialchars($promo['Porcentaje_Descuento']) . '% OFF</span>';
                echo '<img src="' . htmlspecialchars($urlImagen) . '" alt="Producto ' . htmlspecialchars($promo['Nombre']) . '" class="product-image">';
                echo '<p class="product-name">' . htmlspecialchars($promo['Nombre']) . '</p>';
                echo '<p class="brand">Marca: ' . htmlspecialchars($promo['Nombre']) . '</p>';
                echo '<p class="product-price">$' . number_format($promo['Porcentaje_Descuento'], 2) . '</p>';
                echo '<input type="number" value="1" min="1" class="quantity-input" />';
                echo '<button class="btn btn-custom" onclick="añadirAlCarrito(' . htmlspecialchars($idProducto) . ')">Añadir al carrito</button>';
                echo '</div>';  // Cierre de product-card
                echo '</div>';  // Cierre de col-md-3

                $counter++;
            }

            echo '</div></div>'; // Cerrar el último slide y fila
            $conexion->close();
            ?>
        </div>
        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

    
    <br>

</div class="whatsapp">
<a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos." target="_blank" class="whatsapp-button">
    <img src="img/Imagen de WhatsApp.jpg" alt="WhatsApp" />
  </a>

<!-- Incluimos Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="javascript.js"></script>

<!-- Agregar Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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