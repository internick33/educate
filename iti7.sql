-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 16:12:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iti7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `APaterno` varchar(50) NOT NULL,
  `AMaterno` varchar(50) DEFAULT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `APaterno`, `AMaterno`, `calle`, `numero`, `colonia`, `municipio`, `estado`, `cp`, `telefono`, `email`) VALUES
('1000', 'Bruno', 'Garcia', 'Lopez', 'Zapata', '22', 'Granjas de Guadalupe', 'Nicolas Romero', 'Estado de Mexico', '54474', '5538879954', 'uno@dos.com'),
('2000', 'Alexander', 'Garcia', 'Guevara', 'Juarez', '56', 'Heroes de Independencia', 'Atizapan de Zaragoza', 'Estado de Mexico', '54789', '5558275253', 'dos@dos.com'),
('3000', 'Andrea', 'Garcia', 'Cabrera', 'Revolucion', '560', 'Mexico86', 'Atizapan de Zaragoza', 'Estado de Mexico', '54789', '5538879954', 'andy@dos.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno-curso`
--

CREATE TABLE `alumno-curso` (
  `matricula` varchar(10) NOT NULL,
  `clave` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno-curso`
--

INSERT INTO `alumno-curso` (`matricula`, `clave`) VALUES
('1000', '10'),
('1000', '20'),
('2000', '10'),
('2000', '20'),
('3000', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `clave` varchar(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `duracion` int(2) NOT NULL,
  `precio` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`clave`, `nombre`, `descripcion`, `duracion`, `precio`) VALUES
('10', 'Programación Básica', 'curso de programación básica', 30, 500.00),
('20', 'SQL Avanzado', 'Curso de SQL avanzado', 20, 600.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(1) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombre`, `password`, `role`) VALUES
(1, 'trigalo', '123456', 'ADMIN_ROLE'),
(2, 'bruno', '123456', 'USER_ROLE'),
(3, 'andrea', '654321', 'ADMIN_ROLE'),
(4, 'angel', '654321', 'USER_ROLE'),
(5, 'Abigail', '123456', 'ADMIN_ROLE'),
(6, 'Perla', '123456', 'ADMIN_ROLE'),
(7, 'Miguel', '123456', 'USER_ROLE'),
(8, 'Salvador', '123456', 'USER_ROLE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `alumno-curso`
--
ALTER TABLE `alumno-curso`
  ADD PRIMARY KEY (`matricula`,`clave`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
