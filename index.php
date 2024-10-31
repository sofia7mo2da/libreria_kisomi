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
        <!-- Logo -->
        <div class="header-left">
            <a href="#">
                <img src="img/Logotipo.png" class="logo" alt="Logo">
            </a>
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-container">
            <form action="buscar.php" method="GET">
                <input type="text" placeholder="¿Qué estás buscando?" class="search-input" name="search">
                <button class="search-button" type="submit">Buscar</button>
            </form>
        </div>

        <!-- Menú de usuario y carrito -->
        <div class="header-right">
            <!-- Ayuda -->
            <div class="menu-ayuda">
                <a href="#" class="header-link"><i class="fas fa-question-circle"></i> Ayuda</a>
                <div class="contenido-ayuda">
                    <a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos."><i class="fab fa-whatsapp"></i> +543795003045</a><br>
                    <a href="mailto:info@libreriaenjoy.com.ar"><i class="fas fa-envelope"></i> info@libreria_kisomi.com.ar</a>
                </div>
            </div>

            <!-- Cuenta de usuario -->
            <div class="menu-cuenta">
                <a href="#" class="header-link" id="botonCuenta"><i class="fas fa-user-circle"></i> Mi cuenta</a>
                <div class="contenido-cuenta" id="menuCuentaDesplegable">
                    <p><a href="registrarse.php"><i class="fas fa-user-plus"></i> Registrarse</a></p>
                    <p><a href="iniciar_sesion.php"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a></p>
                </div>
            </div>

            <!-- Carrito de compras -->
            <div class="cart-dropdown">
                <a href="#" class="header-link" onclick="toggleDropdown()">
                    <i class="fas fa-shopping-cart"></i> Mi carrito (0)
                </a>
                <div id="dropdown-menu" class="dropdown-menu">
                    <div class="cart-item">
                        <p>No hay productos en el carrito</p>
                    </div>
                    <div class="cart-total">
                        <p>Total: $0.00</p>
                        <a href="#" class="checkout-button">Ir al carrito</a>
                    </div>
                    <div class="view-more">
                        <a href="productos.php" class="view-more-button">Ver más productos</a>
                    </div>
                    <form action="#" method="POST">
    <button type="submit">Vaciar Carrito</button>
</form>
                </div>
            </div>
        </div>
    </div>
</header>

            </div>
            <script src="script.js"></script>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </header>

  <!-- JavaScript para manejar el carrito -->
  <script>
        let carrito = []; // Array para almacenar los productos en el carrito

        function añadirAlCarrito(idProducto) {
            // Busca si el producto ya existe en el carrito
            const productoExistente = carrito.find(producto => producto.id === idProducto);

            if (productoExistente) {
                productoExistente.cantidad++; // Aumenta la cantidad si ya existe
            } else {
                carrito.push({ id: idProducto, cantidad: 1 }); // Agrega un nuevo producto con cantidad 1
            }

            actualizarCarritoUI(); // Actualiza el menú del carrito
            alert("Producto añadido al carrito");
        }

        function actualizarCarritoUI() {
            // Actualiza el contador en el icono del carrito
            const totalProductos = carrito.reduce((sum, producto) => sum + producto.cantidad, 0);
            document.querySelector('.header-link').innerText = `Mi carrito (${totalProductos})`;

            // Actualiza el menú desplegable con los productos en el carrito
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.innerHTML = ''; // Limpia el contenido previo

            if (carrito.length === 0) {
                dropdownMenu.innerHTML = '<p>No hay productos en el carrito</p>';
            } else {
                carrito.forEach(producto => {
                    const item = document.createElement('div');
                    item.classList.add('cart-item');
                    item.innerHTML = `<p>Producto ID: ${producto.id} - Cantidad: ${producto.cantidad}</p>`;
                    dropdownMenu.appendChild(item);
                });
            }
        }

        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        }
    </script>

    <!-- Menú de navegación -->
    <nav class="nav-bar">
        <div class="container">
            <ul>
                <li><a href="index.html">Inicio</a></li><br>
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
                <li><a href="promociones.php">Promociones</a></li><br>
                <li><a href="contacto.php">Contacto</a></li><br>
            </ul>
        </div>
    </nav>
    <br>
   
<!-- Carrusel de Imágenes -->
<div class="carousel-container">
    <div class="carousel">
        <div class="carousel-slide">
            <img src="img/1.png" alt="Imagen 1">
        </div>
        <div class="carousel-slide">
            <img src="img/2.png" alt="Imagen 2">
        </div>
        <div class="carousel-slide">
            <img src="img/3.png" alt="Imagen 3">
        </div>   
         <div class="carousel-slide">
            <img src="img/4.png" alt="Imagen 4">  
        </div>
        <div class="carousel-slide">
            <img src="img/5.png" alt="Imagen 4">  
        </div>
    </div>
    <button class="prev-btn">❮</button>
    <button class="next-btn">❯</button>
</div>
   
<!-- sesion instagram-->
<div class="instagram">
    <h2>@kisomi_libreria</h2>
    <p>SEGUINOS Y ENTERATE DE TODAS LAS NOVEDADES</p>
    <a href="https://www.instagram.com/kisomi_libreria/profilecard/?igsh=MTVra2t0aXY3djJsZQ==" target="_blank">Ir a Instagram</a>
  </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>

<!-- sección de Productos -->
<div class="products-container">
    <h2>Nuestros Productos Destacados:</h2>
        <div class="products-grid">
        <div class="product-card">
            <img src="" alt="Producto 1">
            <h3>Biromes</h3>
            <p class="brand">Marca: Faber Castell</p>
            <p>$5.280,00</p>
            <p>3 cuotas sin interés de $1.760,00</p>
        </div>

        <!-- Producto 2 -->
        <div class="product-card">
            <img src="product2.jpg" alt="Producto 2">
            <h3>Mochilas</h3>
            <p class="brand">Marca: Mooving</p>
            <p>$25.430,00</p>
            <p>3 cuotas sin interés de $476,67</p>
        </div>

        <div class="product-card">
            <img src="product2.jpg" alt="Producto 2">
            <h3>Cartucheras</h3>
            <p class="brand">Marca: Mooving</p>
            <p>$15.430,00</p>
            <p>3 cuotas sin interés de $476,67</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Borrador</h3>
        <p class="brand">Marca: Bic</p>
        <p>$1.000,00</p>
        <p>3 cuotas sin interés de $476,67</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Tijeras</h3>
        <p class="brand">Marca: Filgo</p>
        <p>$2.430,00</p>
        <p>3 cuotas sin interés de $476,67</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Regla</h3>
        <p class="brand">Marca: Mapped</p>
        <p>$1.400,00</p>
        <p>3 cuotas sin interés de $476,67</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Compases</h3>
        <p class="brand">Marca: Mapped</p>
        <p>$3.430,00</p>
        <p>3 cuotas sin interés de $476,67</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Producto 2">
        <h3>Lapiz</h3>
        <p class="brand">Marca: Bic</p>
        <p>$2.430,00</p>
        <p>3 cuotas sin interés de $476,67</p>
    </div>
</div>
<div class="view-more-products">
    <a href="productos.php" class="ver-productos-btn">Ver más productos</a>
</div>
</div>

</div><br>

<!-- Sección de Promociones -->
<div class="container my-5">
    <h2>Promociones:</h2>
    <div id="carouselProductos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            $query = "
                SELECT prom.IDProducto, prom.Nombre, prom.Descripcion, prom.Fecha_Inicio, prom.Fecha_Fin, 
                       prom.Porcentaje_Descuento, img.URL_Imagen
                FROM promociones prom
                LEFT JOIN producto prod ON prom.IDProducto = prod.IDProducto
                LEFT JOIN imagenes_producto img ON prod.IDProducto = img.IDProducto
            ";
            $result = $conexion->query($query);
            $counter = 0;
            $isActive = true; 
            while ($promo = $result->fetch_assoc()) {
                $idProducto = $promo['IDProducto'];
                $urlImagen = $promo['URL_Imagen'] ? $promo['URL_Imagen'] : 'img/default.jpg'; 
                if ($isActive) {
                    echo '<div class="carousel-item active">';
                    $isActive =false; 
                } else {
                    echo '<div class="carousel-item">';
                }
                
                echo '<div class="row">';
                echo '<div class="col-md-3">';
                echo '<div class="product-card">';
                echo '<span class="offer-label">' . htmlspecialchars($promo['Porcentaje_Descuento']) . '% OFF</span>';
                echo '<img src="' . htmlspecialchars($urlImagen) . '" alt="Producto ' . htmlspecialchars($promo['Nombre']) . '" class="product-image">';
                echo '<p class="product-name">' . htmlspecialchars($promo['Nombre']) . '</p>';
                echo '<p class="brand">Marca: ' . htmlspecialchars($promo['Nombre']) . '</p>';
                echo '<p class="product-price">$' . number_format($promo['Porcentaje_Descuento'], 2) . '</p>';
                echo '<input type="number" value="1" min="1" class="quantity-input" />';
                echo '<button class="btn btn-custom" onclick="añadirAlCarrito(' . htmlspecialchars($idProducto) . ')">Añadir al carrito</button>';
                echo '</div>'; 
                echo '</div>';  
                echo '</div>';  
                echo '</div>';  
            }
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Sección de Novedades -->
<div class="container my-5">
    <h2>Novedades:</h2>
    <div id="carouselNovedades" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Se mueve cada 3 segundos -->
        <div class="carousel-inner">
            <?php
            $conexion = new mysqli("localhost", "root", "46840711", "libreria_kisomi");
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta para obtener los datos de la tabla `novedades`
            $query = "
                SELECT nov.Nombre, nov.Descripcion, nov.Precio, nov.IDMarca, nov.URL_Imagen, marca.Nombre AS nombre_marca
                FROM novedades nov
                LEFT JOIN marca ON nov.IDMarca = marca.IDMarca
            ";
            $result = $conexion->query($query);

            $counter = 0;
            $isActive = true; 
            while ($novedad = $result->fetch_assoc()) {
                $urlImagen = $novedad['URL_Imagen'] ? $novedad['URL_Imagen'] : 'img/default.jpg'; 

                if ($counter % 4 == 0) {
                    if ($counter > 0) echo '</div></div>'; 
                    echo $isActive ? '<div class="carousel-item active"><div class="row">' : '<div class="carousel-item"><div class="row">';
                    $isActive = false;
                }

            
                echo '<div class="col-md-3">';
                echo '<div class="product-card">';
                echo '<img src="' . htmlspecialchars($urlImagen) . '" alt="Novedad ' . htmlspecialchars($novedad['Nombre']) . '" class="product-image">';
                echo '<p class="product-name">' . htmlspecialchars($novedad['Nombre']) . '</p>';
                echo '<p class="brand">Marca: ' . htmlspecialchars($novedad['nombre_marca']) . '</p>';
                echo '<p class="product-price">$' . number_format($novedad['Precio'], 2) . '</p>';
                echo '<input type="number" value="1" min="1" class="quantity-input" />';
                echo '<button class="btn btn-custom" onclick="añadirAlCarrito(' . htmlspecialchars($novedad['Nombre']) . ')">Añadir al carrito</button>';
                echo '</div>';  
                echo '</div>';  

                $counter++;
            }
            echo '</div></div>'; 
            $conexion->close();
            ?>
        </div>
        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovedades" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselNovedades" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>


<div class="marcas-destacadas">
    <h2>Marcas Destacadas</h2>
    <div class="logos">
      <img src="img/descarga.jpeg" alt="Mooving">
      <img src="img/descarga (1).jpeg" alt="Faber Castell">
      <img src="img/logo3.png" alt="Maped">
      <img src="img/bic.png" alt="Bic">
      <img src="img/koby.jpeg" alt="Koby">
      <img src="img/filgo.png" alt="Filgo">
      <img src="img/rivadavialogoseo.webp" alt="Rivadavia">
      <img src="img/voligoma.jpg" alt="Voligoma">
      <img src="img/ezco.jpeg" alt="Ezco">
    </div>
  </div>  

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
</body>
</html>
			

