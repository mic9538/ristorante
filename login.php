<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "ristorante");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
    } else {
        $error = "Correo o contraseña incorrectos";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="login-container">
        <header>
            <h1>Iniciar sesión</h1>
        </header>
        <main>
            <form method="POST">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" required>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required>
                <button type="submit">Iniciar sesión</button>
            </form>
            <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
            <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
        </main>
    </div>
</body>
</html>
