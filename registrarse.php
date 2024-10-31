<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta - Librería Kisomi</title>
    <link rel="shortcut icon"  href="img/logo.jpg">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <a href="carrito.html" class="header-link"><i class="fas fa-shopping-cart"></i>Mi carrito (0)</a>
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
            <li><a href="categorias.html">Categorías</a></li><br>
            <li><a href="promociones.html">Promociones</a></li><br>
            <li><a href="contacto.html">Contacto</a></li><br>
        </ul>
    </div>
</nav>
<br>

<?php
require_once 'conexion_db.php';
session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO registrar (Nombre, Apellido, Correo_Electronico, Password) VALUES (:nombre, :apellido, :email, :password)";
        $stmt = $conn->prepare($sql);

        // Enlazar los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            $message = "Cuenta creada exitosamente";
        } else {
            $message = "Error al crear la cuenta";
        }
    } else {
        $message = "Las contraseñas no coinciden.";
    }
}
?>

    <main>
        <section class="register-section">
            <h1>Crear cuenta</h1>
            <p>Comprá más rápido y llevá el control de tus pedidos, ¡en un solo lugar!</p>
            <form method="POST" >
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" required>

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Correo Electronico" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirmar contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Crear cuenta</button><br>
            </form>

              <?php if ($message): ?>
                <p><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
        
            <p>¿Ya tenés una cuenta? <a href="iniciar_sesion.php">Iniciá sesión</a></p>
        </section>
    </main><br>


</div class="whatsapp">
<a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos." target="_blank" class="whatsapp-button">
    <img src="img/Imagen de WhatsApp.jpg" alt="WhatsApp" />
  </a>

    <footer>
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
    </footer>
</body>
</html>

