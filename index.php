<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante 5 Estrellas</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="background-image">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="menu.php">Menú</a></li>
                    <?php if(isset($_SESSION['user'])) { ?>
                        <li><a href="order.php">Realizar Pedido</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    <?php } else { ?>
                        <li><a href="login.php">Iniciar sesión</a></li>
                        <li><a href="register.php">Registrarse</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <h1>Bienvenidos a Restaurante 5 Estrellas</h1>
        </header>
        <main>
            <section class="intro">
                <h2>¿Qué te apetece hoy?</h2>
                <p>Disfruta de nuestros platillos gourmet elaborados con los mejores ingredientes.</p>
                <a href="menu.php" class="btn">Ver Menú</a>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Restaurante 5 Estrellas. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>
