-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 10:50:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database_centro_computo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `idCapacitacion` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `capacitacion` varchar(50) NOT NULL,
  `modo` varchar(15) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`idCapacitacion`, `nombre`, `apellido`, `capacitacion`, `modo`, `correo`, `fecha`) VALUES
(1, 'Nicole', 'Duran', 'Office', 'grupal', 'niclodur@gmail.com', '2021-11-17'),
(2, 'Frida', 'Lizarraga', 'windows', 'individual', 'frizalizarraga@gmail', '2021-12-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `uso` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `tiempo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `nombre`, `apellido`, `correo`, `uso`, `fecha`, `tiempo`) VALUES
(1, 'Emiliano ', 'Cruz ', 'emilianocruz@gmail.com', 'academico', '2021-12-02', '2hr.'),
(2, 'Juan', 'Tavares', 'juantav@gmail.com', 'Personal', '2021-12-14', '1hr.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas`
--

CREATE TABLE `problemas` (
  `idProblema` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `personal` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`idProblema`, `nombre`, `apellido`, `correo`, `tipo`, `personal`, `fecha`) VALUES
(1, 'Mariana', 'Hernandez', 'marihrdz@gmail.com', 'administrativo', 'recepcion', '2021-11-30'),
(2, 'Sonia', 'Carrasco', 'SonCarr@gmail.com', 'servicio', 'Capacitacion office', '2021-12-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_empleados`
--

CREATE TABLE `servicios_empleados` (
  `idServicios` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios_empleados`
--

INSERT INTO `servicios_empleados` (`idServicios`, `nombre`, `apellido`, `correo`, `area`, `servicio`, `fecha`) VALUES
(1, 'Javier ', 'Garay', 'Javiergar@gmail.com', 'Administracion', 'Reposición de credencial', '2021-12-03'),
(2, 'Karla', 'Melendez', 'melendezkar@gmail.com', 'Supervicion de salas', 'Alta en el sistema', '2021-12-06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`idCapacitacion`),
  ADD KEY `idCapacitacion` (`idCapacitacion`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`);

--
-- Indices de la tabla `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`idProblema`);

--
-- Indices de la tabla `servicios_empleados`
--
ALTER TABLE `servicios_empleados`
  ADD PRIMARY KEY (`idServicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `idCapacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `problemas`
--
ALTER TABLE `problemas`
  MODIFY `idProblema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios_empleados`
--
ALTER TABLE `servicios_empleados`
  MODIFY `idServicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
