-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 23:27:05
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
-- Base de datos: `tienda`
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

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `rut` int(10) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `Ncelular` int(8) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `pwd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `rut` int(10) NOT NULL,
  `tipoV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD KEY `rut` (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `rut` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `usuarios` (`rut`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
