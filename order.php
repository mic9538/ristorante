<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ristorante";  // Asegúrate de que el nombre de la base de datos sea correcto

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el id del platillo desde la URL
if (isset($_GET['id'])) {
    $menu_item_id = $_GET['id'];

    // Insertar el pedido en la tabla 'orders'
    $sql_order = "INSERT INTO orders (menu_item_id, status) VALUES (?, 'pending')";
    
    if ($stmt_order = $conn->prepare($sql_order)) {
        $stmt_order->bind_param("i", $menu_item_id); // 'i' es para enteros (menu_item_id)
        
        if ($stmt_order->execute()) {
            $order_id = $stmt_order->insert_id;  // Obtener el ID del pedido insertado

            // Obtener el nombre y el precio del platillo para mostrarlo en el mensaje
            $sql_name = "SELECT name, price FROM menu_items WHERE id = ?";
            if ($stmt_name = $conn->prepare($sql_name)) {
                $stmt_name->bind_param("i", $menu_item_id);
                $stmt_name->execute();
                $stmt_name->bind_result($name, $price);
                $stmt_name->fetch(); // Fetch the result

                // Cerrar la consulta SELECT antes de continuar
                $stmt_name->close(); // IMPORTANTE: Cerrar la consulta SELECT

                // Insertar el detalle del pedido en la tabla 'order_details'
                $quantity = 1; // Supongamos que la cantidad es 1 por defecto
                $sql_detail = "INSERT INTO order_details (order_id, menu_item_id, quantity, price, name) VALUES (?, ?, ?, ?, ?)";
                if ($stmt_detail = $conn->prepare($sql_detail)) {
                    $stmt_detail->bind_param("iiids", $order_id, $menu_item_id, $quantity, $price, $name);

                    if ($stmt_detail->execute()) {
                        $detail_message = "Detalle del pedido insertado con éxito!";
                    } else {
                        $detail_message = "Error al insertar el detalle del pedido: " . $conn->error;
                    }

                    $stmt_detail->close();
                } else {
                    $detail_message = "Error en la preparación de la consulta para el detalle: " . $conn->error;
                }

                // Mostrar mensaje de éxito en un modal
                $message = "¡Pedido realizado con éxito!<br>Has pedido: $name<br>Precio: $$price<br>$detail_message";
            } else {
                $message = "Error al obtener el nombre y el precio del platillo: " . $conn->error;
            }

        } else {
            $message = "Error al realizar el pedido: " . $conn->error;
        }

        $stmt_order->close();
    } else {
        $message = "Error en la preparación de la consulta para la orden: " . $conn->error;
    }
} else {
    $message = "No se ha seleccionado un plato.";
}

$conn->close();
?>

<!-- Ventana Modal -->
<div id="orderModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Pedido realizado con éxito</h2>
        <p><?php echo $message; ?></p>
        <a href="index.php">Volver al inicio</a>
    </div>
</div>

<!-- Botón para activar el modal -->
<script>
    // Obtener el modal
    var modal = document.getElementById("orderModal");

    // Abrir el modal al realizar el pedido
    modal.style.display = "block";

    // Obtener el <span> que cierra el modal
    var span = document.getElementsByClassName("close")[0];

    // Cuando el usuario haga clic en <span> (x), cerrar el modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Cuando el usuario haga clic fuera del modal, cerrarlo
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<!-- Estilos CSS para el Modal -->
<style>
    /* El modal */
    .modal {
        display: none; /* Escondido por defecto */
        position: fixed;
        z-index: 1; /* Encima de todo */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Hacer scroll si es necesario */
        background-color: rgb(0, 0, 0); /* Fondo oscuro */
        background-color: rgba(0, 0, 0, 0.4); /* Fondo oscuro con opacidad */
    }

    /* Contenido del modal */
    .modal-content {
        background-color: #fefefe;
        margin: auto; /* Centrado automáticamente */
        padding: 20px;
        border: 1px solid #888;
        width: 50%; /* Tamaño más pequeño para la ventana modal */
        max-width: 400px; /* Limitar el tamaño máximo */
        border-radius: 10px;
        text-align: center;
    }

    /* El botón de cierre */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Estilo del mensaje */
    .modal h2 {
        color: #4CAF50;
        font-size: 20px;
    }

    .modal p {
        font-size: 16px;
        margin: 20px 0;
    }

    .modal a {
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
        text-decoration: none;
        color: #008CBA;
    }

    .modal a:hover {
        text-decoration: underline;
    }
</style>
