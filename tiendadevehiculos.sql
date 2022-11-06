-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2022 a las 20:16:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendadevehiculos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminavehiculo` (IN `placa` VARCHAR(10))   DELETE FROM inscripcion WHERE patente=placa$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ingresousuario` (`usuario` VARCHAR(30), `clave` VARCHAR(30), `idusuario` VARCHAR(3))   INSERT INTO inicio_de_sesion 
VALUES (usuario, clave, idusuario)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevocomentario` (`comentario` VARCHAR(300), `idusuario` VARCHAR(3))   INSERT INTO comentarios 
VALUES (comentario, idusuario)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario` varchar(300) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`comentario`, `idusuario`) VALUES
('sdfsdfds', 'a11'),
('sdfsdfsdfsdfsdfsd', 'a11');

--
-- Disparadores `comentarios`
--
DELIMITER $$
CREATE TRIGGER `comentarios_AI` AFTER INSERT ON `comentarios` FOR EACH ROW INSERT INTO registrocomentarios(comentario, idusuario, fecha) VALUES(NEW.comentario, NEW.idusuario, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresousuario`
--

CREATE TABLE `ingresousuario` (
  `usuario` varchar(30) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresousuario`
--

INSERT INTO `ingresousuario` (`usuario`, `idusuario`, `fecha`) VALUES
(NULL, NULL, '2022-11-05 21:03:44'),
('usuario2', 'a22', '2022-11-05 21:09:47'),
('usuario1', 'a11', '2022-11-05 21:26:03'),
('werwer', 'a33', '2022-11-06 16:11:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_de_sesion`
--

CREATE TABLE `inicio_de_sesion` (
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `idusuario` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_de_sesion`
--

INSERT INTO `inicio_de_sesion` (`usuario`, `clave`, `idusuario`) VALUES
('usuario1', 'A21DXL616', 'a11'),
('werwer', 'werwerwe', 'a33');

--
-- Disparadores `inicio_de_sesion`
--
DELIMITER $$
CREATE TRIGGER `usuarios_AI` AFTER INSERT ON `inicio_de_sesion` FOR EACH ROW INSERT INTO ingresousuario(usuario, idusuario, fecha) VALUES(NEW.usuario, NEW.idusuario, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `marca` varchar(25) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `patente` varchar(10) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `inscripcion`
--
DELIMITER $$
CREATE TRIGGER `vehiculos_AD` AFTER DELETE ON `inscripcion` FOR EACH ROW INSERT INTO vehiculosEliminados(marca, modelo, patente, precio, idusuario, fecha) 
VALUES(OLD.marca, OLD.modelo, OLD.patente, OLD.precio, OLD.idusuario, NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `vehiculos_AI` AFTER INSERT ON `inscripcion` FOR EACH ROW INSERT INTO registrovehiculos(marca, modelo, patente, precio, idusuario, fecha) 
VALUES(NEW.marca, NEW.modelo, NEW.patente, NEW.precio, NEW.idusuario, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocomentarios`
--

CREATE TABLE `registrocomentarios` (
  `comentario` varchar(300) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrocomentarios`
--

INSERT INTO `registrocomentarios` (`comentario`, `idusuario`, `fecha`) VALUES
('sdfsdfds', 'a11', '2022-11-05 21:26:37'),
('sdfsdfsdfsdfsdfsd', 'a11', '2022-11-06 16:03:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovehiculos`
--

CREATE TABLE `registrovehiculos` (
  `marca` varchar(25) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `patente` varchar(10) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrovehiculos`
--

INSERT INTO `registrovehiculos` (`marca`, `modelo`, `patente`, `precio`, `idusuario`, `fecha`) VALUES
('rolls royce', 'cullinan', 'ASD23', 355000000, 'a11', '2022-11-05 22:32:30'),
('rolls royce', 'cullinan', 'ASD23', 355000000, 'a11', '2022-11-06 16:14:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `correoelectronico` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculoseliminados`
--

CREATE TABLE `vehiculoseliminados` (
  `marca` varchar(25) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `patente` varchar(10) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `idusuario` varchar(3) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculoseliminados`
--

INSERT INTO `vehiculoseliminados` (`marca`, `modelo`, `patente`, `precio`, `idusuario`, `fecha`) VALUES
('rolls royce', 'cullinan', 'ASD23', 355000000, 'a11', '2022-11-05 22:10:12'),
('rolls royce', 'cullinan', 'ASD23', 355000000, 'a11', '2022-11-05 22:33:54'),
('rolls royce', 'cullinan', 'ASD23', 355000000, 'a11', '2022-11-06 16:15:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `inicio_de_sesion`
--
ALTER TABLE `inicio_de_sesion`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD KEY `ideusuario` (`idusuario`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `inicio_de_sesion` (`idusuario`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `inicio_de_sesion` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
