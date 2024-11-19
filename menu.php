<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Restaurante Italiano</title>
    <link rel="stylesheet" href="menu.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
<div class="back-to-home">
        <a href="index.php" class="btn btn-back">Volver al Inicio</a>
    </div>
    <div class="menu">
        <!-- Platillo 1 -->
        <div class="menu-item" id="menu-item-1">
            <img src="images/pasta-carbonara.png" alt="Pasta Carbonara" class="menu-item-img">
            <h3>Pasta Carbonara</h3>
            <p>Deliciosa pasta con salsa cremosa y bacon.</p>
            <p>Precio: $18.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=1" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=1" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 2 -->
        <div class="menu-item" id="menu-item-2">
            <img src="images/pizza-margherita.jpg" alt="Pizza Margherita" class="menu-item-img">
            <h3>Pizza Margherita</h3>
            <p>Pizza clásica con mozzarella, tomate y albahaca.</p>
            <p>Precio: $17.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=2" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=2" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 3 -->
        <div class="menu-item" id="menu-item-3">
            <img src="images/ensalada-ceasar.jpg" alt="Ensalada César" class="menu-item-img">
            <h3>Ensalada César</h3>
            <p>Ensalada fresca con pollo y aderezo césar.</p>
            <p>Precio: $12.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=3" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=3" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 4 -->
        <div class="menu-item" id="menu-item-4">
            <img src="images/raviolis.jpg" alt="Ravioli" class="menu-item-img">
            <h3>Ravioli</h3>
            <p>Ravioli relleno de queso ricotta y espinaca con salsa de tomate.</p>
            <p>Precio: $18.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=4" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=4" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 5 -->
        <div class="menu-item" id="menu-item-5">
            <img src="images/lasagna.jpg" alt="Lasagna" class="menu-item-img">
            <h3>Lasagna</h3>
            <p>Capas de pasta, carne molida, queso y salsa bechamel.</p>
            <p>Precio: $20.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=5" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=5" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 6 -->
        <div class="menu-item" id="menu-item-6">
            <img src="images/gnocchi.jpg" alt="Gnocchi" class="menu-item-img">
            <h3>Gnocchi</h3>
            <p>Deliciosas bolitas de papa servidas con salsa de tomate y albahaca.</p>
            <p>Precio: $16.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=6" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=6" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 7 -->
        <div class="menu-item" id="menu-item-7">
            <img src="images/pizza-four-cheese.jpg" alt="Pizza 4 Quesos" class="menu-item-img">
            <h3>Pizza 4 Quesos</h3>
            <p>Pizza con mozzarella, gorgonzola, parmesano y ricotta.</p>
            <p>Precio: $17.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=7" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=7" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Platillo 8 -->
        <div class="menu-item" id="menu-item-8">
            <img src="images/focaccia.jpg" alt="Focaccia" class="menu-item-img">
            <h3>Focaccia</h3>
            <p>Pane italiano con aceite de oliva, romero y sal marina.</p>
            <p>Precio: $8.00</p>
            
            <!-- Botones con la clase para ser ocultos por CSS -->
            <div class="menu-item-buttons">
                <a href="details.php?id=8" class="btn btn-details">Ver más detalles</a>
                <a href="order.php?id=8" class="btn btn-order">Ordenar</a>
            </div>
            
            <!-- Botón para alternar la clase active -->
            <button onclick="this.parentElement.classList.toggle('active')">Mostrar opciones</button>
        </div>

        <!-- Más platillos aquí siguiendo el mismo formato -->
    </div>

    <script src="script.js">
        function scrollMenu(direction) {
    const menu = document.querySelector('.menu');
    if (direction === 'left') {
        menu.scrollBy({ left: -300, behavior: 'smooth' });
    } else {
        menu.scrollBy({ left: 300, behavior: 'smooth' });
    }
}

    </script> <!-- Si necesitas un archivo JS adicional -->
</body>
</html>
