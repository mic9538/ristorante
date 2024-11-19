-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2024 a las 13:25:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ristorante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `image`, `created_at`) VALUES
(1, 'Pizza Margherita', 'Pizza con salsa de tomate, mozzarella y albahaca fresca', 12.00, 'mages/Pizza Margherita.jpg', '2024-11-10 17:47:39'),
(2, 'Pasta Carbonara', 'Pasta con salsa cremosa, panceta y queso parmesano', 15.00, 'images/pasta-carbonara.jpg', '2024-11-10 17:47:39'),
(3, 'Burgers Gourmet', 'Hamburguesa con queso, lechuga, tomate y salsa especial', 10.00, 'images/burgers-gourmet.jpg', '2024-11-10 17:47:39'),
(4, 'Ensalada César', 'Ensalada con pollo, lechuga, crutones y aderezo César', 8.00, 'images/ensalada-cesar.jpg', '2024-11-10 17:47:39'),
(5, 'Platillo Nuevo', '', 10.00, NULL, '2024-11-11 20:09:28'),
(6, 'Ravioli', 'Ravioli relleno de queso ricotta y espinaca con salsa de tomate.', 18.00, NULL, '2024-11-11 20:14:34'),
(7, 'Lasagna', 'Capas de pasta, carne molida, queso y salsa bechamel.', 20.00, NULL, '2024-11-11 20:14:34'),
(8, 'Gnocchi', 'Deliciosas bolitas de papa servidas con salsa de tomate y albahaca.', 16.00, NULL, '2024-11-11 20:14:34'),
(9, 'Pizza 4 Quesos', 'Pizza con mozzarella, gorgonzola, parmesano y ricotta.', 17.00, NULL, '2024-11-11 20:14:34'),
(10, 'Focaccia', 'Pane italiano con aceite de oliva, romero y sal marina.', 8.00, NULL, '2024-11-11 20:14:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `menu_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `status`, `menu_item_id`) VALUES
(84, '2024-11-10 20:23:24', 'pending', 3),
(85, '2024-11-10 20:23:24', 'pending', 3),
(86, '2024-11-10 20:23:24', 'pending', 3),
(87, '2024-11-10 20:23:24', 'pending', 3),
(88, '2024-11-10 20:23:24', 'pending', 3),
(89, '2024-11-10 20:23:24', 'pending', 3),
(90, '2024-11-10 20:23:24', 'pending', 3),
(91, '2024-11-10 20:23:24', 'pending', 3),
(92, '2024-11-10 20:23:36', 'pending', 3),
(93, '2024-11-10 20:23:36', 'pending', 3),
(94, '2024-11-10 20:23:36', 'pending', 3),
(95, '2024-11-10 20:23:36', 'pending', 3),
(96, '2024-11-10 20:23:36', 'pending', 3),
(97, '2024-11-10 20:23:36', 'pending', 3),
(98, '2024-11-10 20:23:36', 'pending', 3),
(99, '2024-11-10 20:23:36', 'pending', 3),
(100, '2024-11-10 20:23:36', 'pending', 3),
(101, '2024-11-10 20:23:36', 'pending', 3),
(102, '2024-11-10 20:23:36', 'pending', 3),
(103, '2024-11-10 20:23:36', 'pending', 3),
(104, '2024-11-10 20:23:36', 'pending', 3),
(105, '2024-11-10 20:23:36', 'pending', 3),
(106, '2024-11-10 20:23:36', 'pending', 3),
(107, '2024-11-10 20:23:36', 'pending', 3),
(108, '2024-11-10 20:23:36', 'pending', 3),
(109, '2024-11-10 20:23:36', 'pending', 3),
(110, '2024-11-10 20:23:36', 'pending', 3),
(111, '2024-11-10 20:23:36', 'pending', 3),
(112, '2024-11-10 20:23:37', 'pending', 3),
(113, '2024-11-10 20:23:37', 'pending', 3),
(114, '2024-11-10 20:23:37', 'pending', 3),
(115, '2024-11-10 20:23:38', 'pending', 3),
(116, '2024-11-10 20:23:38', 'pending', 3),
(117, '2024-11-10 20:23:38', 'pending', 3),
(118, '2024-11-10 20:23:38', 'pending', 3),
(119, '2024-11-10 20:23:38', 'pending', 3),
(120, '2024-11-10 20:23:38', 'pending', 3),
(121, '2024-11-10 20:23:38', 'pending', 3),
(122, '2024-11-10 20:23:38', 'pending', 3),
(123, '2024-11-10 20:23:38', 'pending', 3),
(124, '2024-11-10 20:23:38', 'pending', 3),
(125, '2024-11-10 20:23:38', 'pending', 3),
(126, '2024-11-10 20:23:38', 'pending', 3),
(127, '2024-11-10 20:23:38', 'pending', 3),
(128, '2024-11-10 20:23:38', 'pending', 3),
(129, '2024-11-10 20:23:38', 'pending', 3),
(130, '2024-11-10 20:23:38', 'pending', 3),
(131, '2024-11-10 20:23:38', 'pending', 3),
(132, '2024-11-10 20:25:11', 'pending', 2),
(133, '2024-11-10 20:28:36', 'pending', 4),
(134, '2024-11-10 20:32:13', 'pending', 2),
(135, '2024-11-10 20:33:33', 'pending', 4),
(136, '2024-11-10 20:39:39', 'pending', 3),
(137, '2024-11-10 20:40:46', 'pending', 2),
(138, '2024-11-10 20:41:51', 'pending', 4),
(139, '2024-11-10 20:42:37', 'pending', 1),
(140, '2024-11-10 20:44:23', 'pending', 1),
(141, '2024-11-10 20:45:52', 'pending', 1),
(142, '2024-11-10 20:47:11', 'pending', 3),
(143, '2024-11-10 20:48:37', 'pending', 3),
(144, '2024-11-10 20:49:31', 'pending', 1),
(145, '2024-11-10 21:15:57', 'pending', 3),
(147, '2024-11-11 20:02:36', 'pending', 4),
(148, '2024-11-11 20:02:49', 'pending', 4),
(149, '2024-11-11 20:07:08', 'pending', 4),
(150, '2024-11-11 20:09:28', 'pending', 5),
(151, '2024-11-11 20:12:00', 'pending', 5),
(152, '2024-11-11 20:15:01', 'pending', 4),
(153, '2024-11-11 20:15:42', 'pending', 4),
(154, '2024-11-11 20:19:58', 'pending', 4),
(155, '2024-11-11 20:21:30', 'pending', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `menu_item_id`, `quantity`, `price`, `name`) VALUES
(127, 137, 2, 1, 15.00, 'Pasta Carbonara'),
(128, 138, 4, 1, 8.00, 'Ensalada César'),
(129, 141, 1, 1, 12.00, 'Pizza Margherita'),
(130, 142, 3, 1, 10.00, 'Burgers Gourmet'),
(131, 143, 3, 1, 10.00, 'Burgers Gourmet'),
(132, 144, 1, 1, 12.00, 'Pizza Margherita'),
(133, 145, 3, 1, 10.00, 'Burgers Gourmet'),
(134, 147, 4, 1, 8.00, 'Ensalada César'),
(135, 148, 4, 1, 8.00, 'Ensalada César'),
(136, 149, 4, 1, 8.00, 'Ensalada César'),
(137, 150, 5, 1, 10.00, 'Platillo Nuevo'),
(138, 153, 4, 1, 8.00, 'Ensalada César'),
(139, 154, 4, 1, 8.00, 'Ensalada César'),
(140, 155, 4, 1, 8.00, 'Ensalada César');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') DEFAULT 'customer',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(1, '', '2006', 'customer', 'michizabaleta@gmail.com'),
(9, 'mic', 'mic14', 'customer', 'michiz@gmail.com'),
(10, 'mz', 'moi123', 'customer', 'mzambrano@gmail.com'),
(11, 'reichel', 'rei12', 'customer', 'rzambrano@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_item` (`menu_item_id`);

--
-- Indices de la tabla `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `menu_item_id` (`menu_item_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_menu_item` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`);

--
-- Filtros para la tabla `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
