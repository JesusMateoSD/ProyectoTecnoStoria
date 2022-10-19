-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2022 a las 13:51:52
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
-- Estructura de tabla para la tabla `tbl_evolucion`
--

CREATE TABLE `tbl_evolucion` (
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
  `mconsulta` varchar(500) NOT NULL,
  `alerta` varchar(500) NOT NULL,
  `tipodiagprin` varchar(300) NOT NULL,
  `diagprin` varchar(300) NOT NULL,
  `diagrel1` varchar(300) NOT NULL,
  `diagrel2` varchar(300) NOT NULL,
  `procedimiento` varchar(300) NOT NULL,
  `consulta` varchar(300) NOT NULL,
  `complicacion` varchar(500) NOT NULL,
  `evolucion` varchar(1000) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `docusuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_evolucion`
--

INSERT INTO `tbl_evolucion` (`id`, `fecha`, `hora`, `tipodocumento`, `paciente`, `documento`, `direccion`, `telefono`, `edad`, `fechan`, `mconsulta`, `alerta`, `tipodiagprin`, `diagprin`, `diagrel1`, `diagrel2`, `procedimiento`, `consulta`, `complicacion`, `evolucion`, `usuario`, `docusuario`) VALUES
(4, '2021-05-27', '10:51:23', 'CC', 'JESUS MATEO SANCHEZ DIAZ', '123456', 'manzana 14 casa 11', '3134907212', 17, '2003-09-21', 'fdfsdfdfsdfs', 'dsdfsdfssdf', 'Impresión diagnóstica', 'A032', '0', 'A031', '231302', '890701', 'Sin Complicacion', 'frewrwewrewerewrerwewr', 'JESUS MATEO SANCHEZ DIAZ', '12345679');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_evolucion`
--
ALTER TABLE `tbl_evolucion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_evolucion`
--
ALTER TABLE `tbl_evolucion`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
