-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2017 a las 05:26:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mantenedor_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE IF NOT EXISTS `detalles` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id_alumno`, `nombres`, `apellidos`, `imagen`) VALUES
(114, 'Juan Andres', 'Riquelme Vera', 'imagenes/hombre.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_registro`
--

CREATE TABLE IF NOT EXISTS `nuevo_registro` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(13) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `telefonos` varchar(25) NOT NULL,
  `edad` int(2) NOT NULL,
  `comuna` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `carrera` varchar(80) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `situacion` varchar(15) NOT NULL,
  PRIMARY KEY (`id_alumno`,`rut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=172 ;

--
-- Volcado de datos para la tabla `nuevo_registro`
--

INSERT INTO `nuevo_registro` (`id_alumno`, `rut`, `nombres`, `apellidos`, `telefonos`, `edad`, `comuna`, `direccion`, `carrera`, `correo`, `situacion`) VALUES
(114, '17.239.673-2', 'Juan Andres', 'Riquelme Vera', '56998964323', 30, 'La Cisterna', 'san cisterna 290', 'Técnico en Marketing', 'juan2130@gmail.com', 'Monografía'),
(166, '13.563.212-k', 'Victor Alejandro', 'Rodriguez Donayre', '+56992133289', 28, 'La Pintana', 'san beca ', 'Técnico en Gestión de Empresas', 'victorr@gmail.com', 'Monografía'),
(168, '14.674.323-5', 'Gabriel Rolando', 'Canales Godoy', '+56996745321', 30, 'Maipú', 'Rinconada 1208', 'Técnico en Topografía', 'cgodoy2017@gmail.com', 'Egresado'),
(170, '16.890.453-2', 'Luis Andres', 'Castañeda Viñedos', '+56994212345', 31, 'Quinta Normal', 'san pablo 6743', 'Técnico en Relaciones Públicas', 'luiscasta2017@gmail.com', 'En práctica'),
(171, '16.890.342-1', 'fddffd', 'sedsdssds', '+56967767788', 33, 'Quinta Normal', 'ssddsdsdssds 23', 'Técnico en Marketing', 'wewweweewqeweewew@fgg.com', 'Monografía');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `nuevo_registro` (`id_alumno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
