<?php
// Configuración de la base de datos
$host = 'localhost';     // Servidor de la base de datos (en XAMPP es localhost)
$dbname = 'ristorante';  // Nombre de la base de datos
$username = 'root';      // Usuario (en XAMPP el usuario por defecto es 'root')
$password = '';          // Contraseña (en XAMPP no tiene contraseña por defecto)

// Crear conexión
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error para PDO (opcional, para depuración)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";  // Mensaje para confirmar que la conexión fue exitosa
} catch (PDOException $e) {
    // Si ocurre un error, muestra el mensaje de error
    echo "Error de conexión: " . $e->getMessage();
}
?>