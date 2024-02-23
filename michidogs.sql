-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 02:03:17
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
-- Base de datos: `michidogs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categ_id` int(15) NOT NULL,
  `categ_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categ_id`, `categ_nombre`) VALUES
(1, 'Juguete'),
(2, 'Accesorio'),
(3, 'Alimento'),
(4, 'Snack'),
(5, 'Medicamento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pro_id` int(15) NOT NULL,
  `pro_proveedor` int(11) DEFAULT NULL,
  `pro_nombre` varchar(30) NOT NULL,
  `pro_marca` varchar(30) NOT NULL,
  `pro_precio` double NOT NULL,
  `pro_vencimiento` date NOT NULL,
  `pro_stock` int(30) NOT NULL,
  `pro_peso` double NOT NULL,
  `pro_dispo` varchar(30) NOT NULL,
  `pro_categoria` int(15) NOT NULL,
  `pro_tipoMascota` varchar(30) NOT NULL,
  `pro_img` varchar(250) DEFAULT NULL,
  `pro_descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pro_id`, `pro_proveedor`, `pro_nombre`, `pro_marca`, `pro_precio`, `pro_vencimiento`, `pro_stock`, `pro_peso`, `pro_dispo`, `pro_categoria`, `pro_tipoMascota`, `pro_img`, `pro_descrip`) VALUES
(1, 7, 'mirringo', '3454556', 3454556, '2024-02-24', 3445, 34, 'si', 3, 'gato', 'michidogs (1).sql', 'ftrttgfgfgf'),
(2, 5, 'mirringaaaaaa', '3456', 3456, '2024-01-30', 4554, 4545, 'si', 1, 'perro', '', 'sddhbgdfhghdfghdg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `nombre_rol` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Comprador'),
(3, 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `usu_apellido` varchar(50) DEFAULT NULL,
  `usu_contrasena` varchar(200) DEFAULT NULL,
  `usu_correo` varchar(120) DEFAULT NULL,
  `usu_nombre` varchar(50) DEFAULT NULL,
  `usu_telefono` varchar(15) DEFAULT NULL,
  `usu_estado` varchar(20) DEFAULT NULL,
  `usu_fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rol_id`, `usu_apellido`, `usu_contrasena`, `usu_correo`, `usu_nombre`, `usu_telefono`, `usu_estado`, `usu_fecha_creacion`) VALUES
(2, 1, 'Gomez', '202cb962ac59075b964b07152d234b70', 'darwinandresgomez9@gmail.com', 'Darwin', '3125489179', 'Activo', '2024-02-16'),
(4, 1, 'Gomez', '202cb962ac59075b964b07152d234b70', 'darwin@gmail.com', 'Darwin', '31235666', 'Activo', '2024-02-17'),
(5, 1, 'arias', 'c4ca4238a0b923820dcc509a6f75849b', 'camilo@gmail.com', 'camilo', '344345465', 'Activo', '2024-02-22'),
(7, 1, 'aaaa', 'c20ad4d76fe97759aa27a0c99bff6710', 'youner@gmail.com', 'youner', '355656', 'Activo', '2024-02-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_categoria` (`pro_categoria`),
  ADD KEY `pro_proveedor` (`pro_proveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UKbgoa01v78qtl1a48ouacaj4mi` (`usu_correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categ_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `pro_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`pro_categoria`) REFERENCES `categoria` (`categ_id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`pro_proveedor`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
