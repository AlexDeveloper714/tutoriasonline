-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2017 a las 16:49:42
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `tipoDocumento` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `universidad` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `tipoCliente` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `estadoUsuario` varchar(200) NOT NULL,
  `clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes-tutorias`
--

CREATE TABLE `clientes-tutorias` (
  `idCliente` int(20) NOT NULL,
  `idTutoria` int(20) NOT NULL,
  `tipoCliente` varchar(200) NOT NULL,
  `materia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes-universidades`
--

CREATE TABLE `clientes-universidades` (
  `idCliente` int(20) NOT NULL,
  `idUniversidad` int(20) NOT NULL,
  `materia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soportes`
--

CREATE TABLE `soportes` (
  `idSoporte` int(20) NOT NULL,
  `idCliente` int(20) NOT NULL,
  `tipoSolicitud` varchar(200) NOT NULL,
  `estadoSoporte` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorias`
--

CREATE TABLE `tutorias` (
  `idTutorias` int(20) NOT NULL,
  `estadoTutoria` varchar(200) NOT NULL,
  `locX` int(20) NOT NULL,
  `locY` int(20) NOT NULL,
  `horas` int(20) NOT NULL,
  `precio` int(20) NOT NULL,
  `calidadServicio` int(20) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `universidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `idUniversidad` int(20) NOT NULL,
  `nombreUniversidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`idUniversidad`, `nombreUniversidad`) VALUES
(1, 'ANDES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(20) NOT NULL,
  `idCliente` int(20) NOT NULL,
  `horas` int(20) NOT NULL,
  `precio` int(20) NOT NULL,
  `idTutor` int(20) NOT NULL,
  `estadoVenta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `clientes-tutorias`
--
ALTER TABLE `clientes-tutorias`
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idTutoria` (`idTutoria`);

--
-- Indices de la tabla `clientes-universidades`
--
ALTER TABLE `clientes-universidades`
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idUniversidad` (`idUniversidad`) USING BTREE;

--
-- Indices de la tabla `soportes`
--
ALTER TABLE `soportes`
  ADD PRIMARY KEY (`idSoporte`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `tutorias`
--
ALTER TABLE `tutorias`
  ADD PRIMARY KEY (`idTutorias`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`idUniversidad`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `soportes`
--
ALTER TABLE `soportes`
  MODIFY `idSoporte` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tutorias`
--
ALTER TABLE `tutorias`
  MODIFY `idTutorias` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `idUniversidad` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes-tutorias`
--
ALTER TABLE `clientes-tutorias`
  ADD CONSTRAINT `clientes-tutorias_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `clientes-tutorias_ibfk_2` FOREIGN KEY (`idTutoria`) REFERENCES `tutorias` (`idTutorias`);

--
-- Filtros para la tabla `clientes-universidades`
--
ALTER TABLE `clientes-universidades`
  ADD CONSTRAINT `clientes-universidades_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `clientes-universidades_ibfk_2` FOREIGN KEY (`idUniversidad`) REFERENCES `universidades` (`idUniversidad`);

--
-- Filtros para la tabla `soportes`
--
ALTER TABLE `soportes`
  ADD CONSTRAINT `soportes_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
