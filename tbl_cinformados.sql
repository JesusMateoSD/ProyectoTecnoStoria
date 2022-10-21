-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2022 a las 00:24:34
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
-- Estructura de tabla para la tabla `tbl_cinformados`
--

CREATE TABLE `tbl_cinformados` (
  `id` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(30) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL,
  `paciente` varchar(300) NOT NULL,
  `documento` varchar(60) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `edad` int(30) NOT NULL,
  `fechan` varchar(60) NOT NULL,
  `consentimiento` varchar(300) NOT NULL,
  `modelos` varchar(300) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `docusuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cinformados`
--

INSERT INTO `tbl_cinformados` (`id`, `fecha`, `hora`, `tipodocumento`, `paciente`, `documento`, `direccion`, `telefono`, `edad`, `fechan`, `consentimiento`, `modelos`, `observaciones`, `usuario`, `docusuario`) VALUES
(2, '2021-05-27', '10:41:23', 'CC', 'JESUS MATEO SANCHEZ DIAZ', '123456', 'manzana 14 casa 11', '3134907212', 17, '2003-09-21', 'fdsdfsd', 'DFSFS', '', 'JESUS MATEO SANCHEZ DIAZ', '12345679');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cinformados`
--
ALTER TABLE `tbl_cinformados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cinformados`
--
ALTER TABLE `tbl_cinformados`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
