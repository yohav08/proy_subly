-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2025 a las 03:25:20
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
-- Base de datos: `proy_subly`
--
CREATE DATABASE IF NOT EXISTS `proy_subly` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proy_subly`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `clave` text DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `correo`, `clave`) VALUES
(123, 'Catalina Lozano', 'catalinalozano@gmail.com', '123456'),
(1234, 'Ana Sanabria', 'anas@gmail.com', '123456'),
(12345, 'Dania Riaño', 'danriar@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `cod_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`cod_producto`,`id_cliente`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`cod_producto`, `id_cliente`) VALUES
(101, 111),
(101, 555),
(102, 555),
(106, 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `clave` text DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `correo`, `clave`, `telefono`) VALUES
(111, 'Bryan Sanchez', 'bsanchez@gmail.com', '123', 3255662450),
(333, 'Yohana Avila', 'yohav08@gmail.com', '123', 3104839109),
(555, 'Yohana Avila', 'yohagmail.com', '123', 3105862235);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `cod_compra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `num_tarjeta` bigint(20) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`cod_compra`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`cod_compra`, `fecha`, `direccion`, `ciudad`, `num_tarjeta`, `id_cliente`, `id_admin`) VALUES
(1, '2023-01-01', 'Carrera 73 #50a-41', 'Bogotá DC', 1004521045, 555, 1234),
(2, '2023-01-02', 'Calle 83 #20b-11', 'Bogotá DC', 54000456, 333, 123),
(3, '2023-01-03', 'Carrera 30 #31a-15', 'Bogotá DC', 843004567, 111, 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `cod_tipo` int(11) NOT NULL,
  PRIMARY KEY (`cod_producto`),
  KEY `cod_tipo` (`cod_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `nombre`, `unidades`, `precio`, `descripcion`, `cod_tipo`) VALUES
(101, 'Gorra Nike', 20, 25000, 'Gorra color negro que incluye en su diseño la personalización con el logo de Nike', 4),
(102, 'Camisa Casa Blanca', 40, 31000, 'Camisa color blanco que incluye en su diseño la personalización con el logo de la Nasa', 1),
(103, 'Mug osos escandalosos1', 30, 15000, 'Mug color azul claro que incluye en su diseño la personalización con una imagen de los osos escandalosos', 1),
(104, 'Botella Sublimada', 21, 40000, 'Botella con un diseño personalizado al gusto.', 1),
(106, 'Camisa Negra', 56, 50000, 'Camisa Negra con estampado de serpiente amarilla', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_compra`
--

CREATE TABLE IF NOT EXISTS `producto_compra` (
  `cod_producto` int(11) NOT NULL,
  `cod_compra` int(11) NOT NULL,
  PRIMARY KEY (`cod_producto`,`cod_compra`),
  KEY `cod_compra` (`cod_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_compra`
--

INSERT INTO `producto_compra` (`cod_producto`, `cod_compra`) VALUES
(101, 2),
(102, 2),
(102, 3),
(103, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `cod_tipo` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`cod_tipo`, `tipo`) VALUES
(1, 'Camiseta'),
(2, 'Mug'),
(3, 'Caramañola'),
(4, 'Gorra');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_admin`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo` (`cod_tipo`);

--
-- Filtros para la tabla `producto_compra`
--
ALTER TABLE `producto_compra`
  ADD CONSTRAINT `producto_compra_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`),
  ADD CONSTRAINT `producto_compra_ibfk_2` FOREIGN KEY (`cod_compra`) REFERENCES `compra` (`cod_compra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
