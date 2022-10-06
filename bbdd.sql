-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-10-2022 a las 05:59:05
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `rut` varchar(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(35) DEFAULT NULL,
  `Ndecontacto` int(12) DEFAULT NULL,
  `Celectronico` varchar(30) DEFAULT NULL,
  `placa` varchar(10) NOT NULL,
  `modelo` varchar(25) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Disparadores `inscripcion`
--
DELIMITER $$
CREATE TRIGGER `newsell` AFTER INSERT ON `inscripcion` FOR EACH ROW INSERT INTO new_sell(rut, nombre, apellido, direccion, Ndecontacto, 
Celectronico, placa, modelo, marca, precio, fecha_venta)
VALUES(NEW.rut, NEW.nombre, NEW.apellido, NEW.direccion, NEW.Ndecontacto, NEW.Celectronico, NEW.placa, NEW.modelo, NEW.marca, NEW.precio,
NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `new_sell`
--

CREATE TABLE `new_sell` (
  `rut` varchar(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(35) DEFAULT NULL,
  `Ndecontacto` int(12) DEFAULT NULL,
  `Celectronico` varchar(30) DEFAULT NULL,
  `placa` varchar(10) NOT NULL,
  `modelo` varchar(25) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `fecha_venta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

