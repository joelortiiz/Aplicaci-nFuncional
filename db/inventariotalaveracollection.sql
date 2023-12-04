-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 17:34:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventariotalaveracollection`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `codalmacen` int(6) NOT NULL,
  `nomalmacen` varchar(50) NOT NULL,
  `direccionalmacen` varchar(100) NOT NULL,
  `telefonoalmacen` varchar(15) NOT NULL,
  `codusuario` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`codalmacen`, `nomalmacen`, `direccionalmacen`, `telefonoalmacen`, `codusuario`) VALUES
(1, 'coleccion magic', 'avenida pepe', '12345', 1),
(2, 'ropa verano', 'Av. América 142', '12345', 1),
(3, 'electrodomésticos', 'Avenida venida', '9459496', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE `objeto` (
  `Claveobjeto` int(6) NOT NULL,
  `Nombreobjeto` varchar(50) NOT NULL,
  `Estadoobjeto` varchar(20) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Stock` int(100) NOT NULL,
  `Anio` date NOT NULL,
  `Comentario` varchar(100) NOT NULL,
  `Codalmacen` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`Claveobjeto`, `Nombreobjeto`, `Estadoobjeto`, `Marca`, `Stock`, `Anio`, `Comentario`, `Codalmacen`) VALUES
(5, 'Laptop', 'Nuevo', 'HP', 20, '2023-01-15', 'Último modelo, pantalla táctil', 1),
(6, 'Smartphone', 'Usado', 'Samsung', 15, '2023-02-02', 'Pequeños rasguños en la parte posterior', 1),
(7, 'Auriculares', 'Nuevo', 'Sony', 50, '2023-03-10', 'Cancelación de ruido, cable desmontable', 1),
(8, 'Cámara', 'Seminuevo', 'Canon', 10, '2023-04-05', 'Incluye estuche y tarjeta de memoria', 2),
(9, 'Impresora', 'Nuevo', 'Epson', 5, '2023-05-20', 'Impresión a color, conexión inalámbrica', 1),
(10, 'Altavoces', 'Reacondicionado', 'Bose', 8, '2023-06-08', 'Calidad de sonido mejorada, garantía de 1 año', 2),
(11, 'Teclado', 'Nuevo', 'Logitech', 30, '2023-07-15', 'Retroiluminado, teclas mecánicas', 1),
(12, 'Monitor', 'Nuevo', 'Dell', 12, '2023-08-03', 'Pantalla IPS de alta resolución', 1),
(13, 'Laptop', 'Semi-Nuevo', 'HP Victus', 5, '2023-01-15', 'Último modelo, pantalla táctil', 3),
(14, 'Tablet', 'Nuevo', 'Apple', 25, '2023-09-12', 'Pantalla retina, procesador potente', 3),
(15, 'Smartwatch', 'Usado', 'Fitbit', 10, '2023-10-08', 'Funciona perfectamente, batería nueva', 3),
(16, 'Micrófono', 'Nuevo', 'Audio-Technica', 15, '2023-11-20', 'Calidad de grabación profesional', 3),
(17, 'Gafas VR', 'Seminuevo', 'Oculus', 7, '2023-12-01', 'Inmersión total, caja original incluida', 3),
(18, 'Router', 'Nuevo', 'Linksys', 3, '2023-01-05', 'Conexión de alta velocidad, fácil configuración', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Codusuario` int(6) NOT NULL,
  `Nomusuario` varchar(50) NOT NULL,
  `Contraseñausuario` varchar(255) NOT NULL,
  `Direccionusuario` varchar(100) NOT NULL,
  `Telefonousuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Codusuario`, `Nomusuario`, `Contraseñausuario`, `Direccionusuario`, `Telefonousuario`) VALUES
(1, 'joelortiz', '1234', 'Avenida casa', '98765'),
(3, 'jowell', '926e27eecdbc7a18858b3798ba99bddd', 'Avenida avenida', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`codalmacen`),
  ADD KEY `fk_codusuario` (`codusuario`);

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`Claveobjeto`),
  ADD KEY `fk_codalmacen` (`Codalmacen`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Codusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `codalmacen` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `Claveobjeto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Codusuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `fk_codusuario` FOREIGN KEY (`codusuario`) REFERENCES `usuario` (`Codusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `fk_codalmacen` FOREIGN KEY (`Codalmacen`) REFERENCES `almacen` (`codalmacen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
