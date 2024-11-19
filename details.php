<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ristorante";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del platillo desde la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Obtener los detalles del platillo
$sql = "SELECT id, name, description, price, image FROM menu_items WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = htmlspecialchars($row['name']);
    $description = htmlspecialchars($row['description']);
    $price = number_format($row['price'], 2);
    $image = 'image/' . $row['image'];
} else {
    echo "<h2>Platillo no encontrado.</h2>";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Platillo - <?php echo $name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="details-container">
        <h1><?php echo $name; ?></h1>
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="menu-item-img">
        <div class="description">
            <h3>Descripción</h3>
            <p><?php echo $description; ?></p>

            <h3>Precio</h3>
            <p>$<?php echo $price; ?></p>

            <h3>Emplatado</h3>
            <p>Un buen emplatado debe ser equilibrado, armónico y diverso, con color, textura y volumen. También debe tener un punto focal, destacando un elemento protagónico del plato.</p>

            <h3>Composición</h3>
            <p>La composición del plato debe estar equilibrada en formas, texturas, sabores, colores y métodos de cocción. Usamos números impares para aportar armonía y unidad al plato.</p>

            <h3>Alturas</h3>
            <p>Jugar con diferentes alturas en el plato agrega interés visual y profundidad. Usamos aros de emplatado y moldes para crear niveles visuales atractivos.</p>

            <h3>Salsas</h3>
            <p>Las salsas complementan los ingredientes, por lo que las usamos con moderación para no opacar los sabores principales. Puedes pedir salsas adicionales al gusto.</p>
        </div>

        <div class="actions">
            <a href="order.php?id=<?php echo $id; ?>" class="btn btn-order">Ordenar</a>
            <a href="menu.php" class="btn btn-back">Volver al Menú</a>
        </div>
    </div>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.details-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    max-width: 600px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.menu-item-img {
    width: 100%;
    border-radius: 10px;
    margin: 20px 0;
}

.description h3 {
    margin-top: 20px;
    color: #007bff;
}

.description p {
    margin: 10px 0;
}

.actions {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.btn {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}

.btn-order {
    background-color: #28a745;
}

.btn-back {
    background-color: #6c757d;
}

.btn:hover {
    opacity: 0.9;
}
</style>
