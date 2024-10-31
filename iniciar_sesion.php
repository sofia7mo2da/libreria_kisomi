<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Kisomi Librería</title>
    <link rel="shortcut icon" href="img/logo.jpg">
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
                </a>
            </div>
            <div class="search-container">
                <input type="text" placeholder="¿Qué estás buscando?" class="search-input">
                <button class="search-button">Buscar</button>
            </div>
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
                <a href="carrito.html" class="header-link"><i class="fas fa-shopping-cart"></i> Mi carrito (0)</a>
            </div>
        </div>
    </header>

    <!-- Menú de navegación -->
    <nav class="nav-bar">
        <div class="container">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="categorias.php">Categorías</a></li>
                <li><a href="promociones.php">Promociones</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </nav>
<br>

<?php
require_once 'conexion_db.php';
session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['Password'];

    // Consulta para obtener los datos del usuario por correo electrónico
    $sql = "SELECT * FROM registrar WHERE Correo_Electronico = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($user && password_verify($password, $user['Password'])) {
        $_SESSION['IDUsuario'] = $user['IDRegistrar'];

        // Registrar inicio de sesión en la tabla inicio_sesion
        $sqlInsert = "INSERT INTO inicio_sesion (Correo_Electronico, Password) VALUES (:email, :password)";
        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bindParam(':email', $email, PDO::PARAM_STR);
        $stmtInsert->bindParam(':password', $user['Password'], PDO::PARAM_STR); 
        $stmtInsert->execute();

        $message = "Inicio de sesión exitoso";
    } else {
        $message = "Correo o contraseña incorrectos";
    }
}
?>
    <script>
        // Función para mostrar/ocultar contraseña
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.textContent = "🙈";
            } else {
                passwordField.type = "password";
                eyeIcon.textContent = "👁️";
            }
        }
    </script>

    <section class="login-section"> 
        <h1>Iniciar sesión</h1>
        <p>Accedé a tu cuenta para gestionar tus pedidos.</p>
        <form method="POST">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Correo Electrónico" required><br>
    
            <div class="password-container">
            <label for="password">Contraseña:</label>
            <span id="eyeIcon" class="eye-icon" onclick="togglePassword()">👁️</span>
        </div>
        <input type="password" name="Password" id="password" required><br>
    
            <button type="submit">Iniciar sesión</button><br>
        </form>
        <br>
    <button onclick="window.location.href='index.php'" class="btn">Volver al inicio</button>
    <br><br>
    <a href="registrar.php">¿Olvidaste tu contraseña?</a>

        <?php if ($message): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <p>¿No tenés cuenta? <a href="registrarse.php">Crear cuenta</a></p>
    </section>


<br>
    <!-- Botón de WhatsApp -->
    <div class="whatsapp">
        <a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos." target="_blank" class="whatsapp-button">
            <img src="img/Imagen de WhatsApp.jpg" alt="WhatsApp">
        </a>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Sobre Nosotros</h2>
                <p>Somos una librería escolar dedicada a ofrecer productos de alta calidad a precios accesibles, ayudando a estudiantes y familias a prepararse para el éxito académico.</p>
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
                <p><i class="fas fa-envelope"></i> info@libreriaescolar.com</p>
            </div>
            <div class="footer-section social">
                <h2>Síguenos</h2>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/kisomi_libreria/profilecard/?igsh=MTVra2t0aXY3djJsZQ=="><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/543795003045?text=Más%20información%20sobre%20los%20productos."><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
