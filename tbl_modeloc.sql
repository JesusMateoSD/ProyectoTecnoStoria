-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2022 a las 00:28:35
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmedicina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modeloc`
--

CREATE TABLE `tbl_modeloc` (
  `id` int(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `modelo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_modeloc`
--

INSERT INTO `tbl_modeloc` (`id`, `nombre`, `modelo`) VALUES
(2, 'DFSFS', 'fdsdfsd'),
(7, 'FDSDFS', 'fddfs');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_modeloc`
--
ALTER TABLE `tbl_modeloc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_modeloc`
--
ALTER TABLE `tbl_modeloc`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
