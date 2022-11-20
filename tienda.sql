-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-11-2022 a las 18:44:46
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendavehiculos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `NewCar` (IN `mar` VARCHAR(50), IN `mode` VARCHAR(50), IN `pate` VARCHAR(10), IN `tipo` VARCHAR(50), IN `pre` INT(10), IN `run` VARCHAR(10))   insert into vehiculos(marca,modelo,patente,tipoV,precio,rut)
values(mar, mode, pate, tipo, pre, run)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `NewUser` (`nom` VARCHAR(30), `user` VARCHAR(30), `ape` VARCHAR(30), `run` INT(10), `direc` VARCHAR(60), `Ncel` VARCHAR(12), `crreo` VARCHAR(60), `pass` VARCHAR(60))   INSERT INTO usuarios(nombre, usuario, apellido, rut, direccion, Ncelular, correo, pwd)
VALUES(nom, user, ape, run, direc, Ncel, crreo, pass)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `comentarios` (
  `comentario` varchar(300) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `inscripcion` (
  `marca` varchar(25) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `patente` varchar(10) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

CREATE TABLE `usuarios` (
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `rut` varchar(12) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `direccion` varchar(65) DEFAULT NULL,
  `numerocontacto` int(11) DEFAULT NULL,
  `correoelectronico` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `comentarios`
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--
ALTER TABLE `inscripcion`
  ADD KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
