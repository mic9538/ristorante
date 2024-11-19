<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "ristorante");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $username = $_POST['username']; // Agregar el nombre de usuario
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        // Guardar en la base de datos
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php"); // Redirige a login después del registro exitoso
        } else {
            $error = "Error al registrar el usuario";
        }
    } else {
        $error = "Las contraseñas no coinciden";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="register-container">
        <header>
            <h1>Registrarse</h1>
        </header>
        <main>
            <form method="POST">
                <label for="username">Nombre de usuario:</label>
                <input type="text" name="username" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>

                <label for="password">Contraseña:</label>
                <input type="password" name="password" required>

                <label for="confirm_password">Confirmar contraseña:</label>
                <input type="password" name="confirm_password" required>

                <button type="submit">Registrarse</button>
            </form>
            <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </main>
    </div>
</body>
</html>
