<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisomi Librería Escolar - Contacto</title>
    <link rel="shortcut icon"  href="img/logo.jpg">
    <link rel="stylesheet" href="styles.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div>
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
                <input type="text" placeholder="¿Qué estás buscando?" class="search-input">
                <button class="search-button">Buscar</button>
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
                            <a href="micarrito.html" class="checkout-button">Ir al carrito</a>
                        </div>  
                <div class="view-more">
                    <a href="productos.html" class="view-more-button">Ver más productos</a>
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
                <li><a href="index.html">Inicio</a></li><br>
                <li><a href="productos.html">Productos</a></li><br>
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
                    
                    </div>
                </li><br>
                <li><a href="promociones.html">Promociones</a></li><br>
                <li><a href="contacto.html">Contacto</a></li><br>
            </ul>
        </div>
    </nav>
    <br>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Contacto</h2>
            <p>Encontranos de lunes a viernes de 8 a 21 hs y los sábados de 8 a 20 hs.</p>
            <ul>
                <li>
                <i class="fab fa-whatsapp"></i>
                <a href="https://wa.me/543795003045 target="_blank>+543795003045</a>
                </li>

                <li>
                <i class="fa fa-phone"></i> 
                <a href="tel:+543795003045">3795003045</a>
                </li>

                <li>
                <i class="fa fa-envelope"></i> 
                <a href="mailto:libreriakisomi@gmail.com">libreriakisomi@gmail.com</a>
               </li>
                <li>
                 <i class="fa fa-map-marker"></i>
                 <a href="https://www.google.com/maps?q=" target="_blank"> La rioja 1122</a>
                </li>
            </ul>
        </div>
        <div class="contact-form">
            <form  action="enviar_contacto.php" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="phone">Teléfono:</label>
                <input type="tel" id="phone" name="phone" required>
    
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit">Enviar</button>
            </form>
            <div id="formResponse"></div> <!-- Aquí aparecerá el mensaje -->
</div>
<script>
    function handleFormSubmit(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        var form = document.getElementById('contactForm');
        var formData = new FormData(form);

        fetch('contacto.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('formResponse').innerHTML = '<p style="color: green;">¡Mensaje enviado correctamente!</p>';
            form.reset(); // Reinicia el formulario
        })
        .catch(error => {
            document.getElementById('formResponse').innerHTML = '<p style="color: red;">Hubo un error al enviar el mensaje. Inténtalo nuevamente.</p>';
        });

        return false; // Previene el comportamiento predeterminado
}
</script>
        </div>
    </div>
        
    

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


