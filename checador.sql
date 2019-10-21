-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2019 a las 10:48:45
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `checador`
--
CREATE DATABASE IF NOT EXISTS `checador` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `checador`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `notas` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `direccion`, `notas`) VALUES
(1, 'cliente de prueba 1', 'apellido', 'direccion', ''),
(2, 'cliente de prueba 2', 'apellido 2', 'drrirreccion 2', 'notas notas'),
(3, 'cliente de prueba', 'apellido de prueba', 'santa lucia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

DROP TABLE IF EXISTS `motos`;
CREATE TABLE IF NOT EXISTS `motos` (
  `idMoto` int(11) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `placas` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`idMoto`, `marca`, `placas`) VALUES
(1, 'yamaha', 'pol345'),
(2, 'italika', 'fuj-456-th2'),
(3, 'marca1', 'placa1'),
(4, 'm1', 'placa11'),
(5, 'm1', 'placa11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `idRegistro` int(11) NOT NULL,
  `horaSalida` datetime NOT NULL,
  `horaLlegada` datetime NOT NULL,
  `clienteDestino` int(3) NOT NULL,
  `monto` double NOT NULL,
  `chofer` int(2) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `estatus` int(1) NOT NULL COMMENT 'si es 0 esta taerminada si es  1 esta en proceso'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`idRegistro`, `horaSalida`, `horaLlegada`, `clienteDestino`, `monto`, `chofer`, `observaciones`, `estatus`) VALUES
(1, '2019-10-19 03:20:31', '2019-10-21 10:01:00', 1, 600, 2, 'obser', 0),
(2, '2019-10-28 04:09:00', '2019-10-31 05:12:00', 2, 800, 2, 'ob', 0),
(3, '2019-10-21 08:34:00', '0000-00-00 00:00:03', 3, 65, 22, 'ob', 0),
(4, '2019-10-21 08:39:00', '2019-10-21 10:08:00', 1, 678.76, 22, '9898989jhjhj', 0),
(5, '2019-10-21 08:45:00', '2019-10-21 09:59:00', 1, 5672.2, 22, 'jhjhjh', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` int(2) NOT NULL,
  `descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'chofer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(2) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `nombreUsuario` varchar(40) NOT NULL,
  `password` longtext NOT NULL,
  `idRol` int(2) NOT NULL,
  `idMoto` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `nombreUsuario`, `password`, `idRol`, `idMoto`) VALUES
(20, 'juan', 'juan', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 2, 0),
(21, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(22, 'pedro', 'pedro', 'pedro', 'c6cc8094c2dc07b700ffcc36d64e2138', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`idMoto`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`idRegistro`), ADD KEY `clienteDestino` (`clienteDestino`), ADD KEY `chofer` (`chofer`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`), ADD KEY `idRol` (`idRol`), ADD KEY `idMoto` (`idMoto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `idMoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
