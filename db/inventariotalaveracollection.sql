-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 19:25:33
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
  MODIFY `codalmacen` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `Claveobjeto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Codusuario` int(6) NOT NULL AUTO_INCREMENT;

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



INSERT INTO `objeto` (`Claveobjeto`, `Nombreobjeto`, `Estadoobjeto`, `Marca`, `Stock`, `Anio`, `Comentario`, `Codalmacen`) 
VALUES 
(NULL, 'Laptop', 'Nuevo', 'HP', 20, '2023-01-15', 'Último modelo, pantalla táctil', 1),
(NULL, 'Smartphone', 'Usado', 'Samsung', 15, '2023-02-02', 'Pequeños rasguños en la parte posterior', 1),
(NULL, 'Auriculares', 'Nuevo', 'Sony', 50, '2023-03-10', 'Cancelación de ruido, cable desmontable', 1),
(NULL, 'Cámara', 'Seminuevo', 'Canon', 10, '2023-04-05', 'Incluye estuche y tarjeta de memoria', 2),
(NULL, 'Impresora', 'Nuevo', 'Epson', 5, '2023-05-20', 'Impresión a color, conexión inalámbrica',1),
(NULL, 'Altavoces', 'Reacondicionado', 'Bose', 8, '2023-06-08', 'Calidad de sonido mejorada, garantía de 1 año', 2),
(NULL, 'Teclado', 'Nuevo', 'Logitech', 30, '2023-07-15', 'Retroiluminado, teclas mecánicas', 2),
(NULL, 'Monitor', 'Nuevo', 'Dell', 12, '2023-08-03', 'Pantalla IPS de alta resolución', 1);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
