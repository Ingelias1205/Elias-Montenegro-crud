-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2020 a las 02:02:10
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud`
--
CREATE DATABASE `crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE IF NOT EXISTS `analisis` (
  `codregesp` int(7) NOT NULL AUTO_INCREMENT,
  `idespecie` int(6) NOT NULL,
  `idfamilia` int(4) NOT NULL,
  `nomespest` varchar(70) NOT NULL,
  `proyecto` varchar(50) NOT NULL,
  `base` varchar(300) NOT NULL,
  `anio` int(4) NOT NULL,
  `dept` int(2) NOT NULL,
  `mnpio` int(4) NOT NULL,
  `localidad` varchar(10) NOT NULL,
  `latitud` varchar(30) NOT NULL,
  `longitud` varchar(30) NOT NULL,
  `autor` varchar(40) NOT NULL,
  `feccapt` varchar(10) NOT NULL,
  `ecoregion` varchar(40) NOT NULL,
  PRIMARY KEY (`codregesp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`codregesp`, `idespecie`, `idfamilia`, `nomespest`, `proyecto`, `base`, `anio`, `dept`, `mnpio`, `localidad`, `latitud`, `longitud`, `autor`, `feccapt`, `ecoregion`) VALUES
(3, 1, 1, 'espe1', '1', 'gturdgfhsngu fiudhsuigfd', 2020, 21, 1, 'ewifs', 'ds', 'hi', 'i', 'ji', '1'),
(4, 1, 1, 'ndsds', '1', 'dowifgudi', 2020, 1, 4, 'dms', '13232', '3232', 'Elias Montenegro', '12/06/2020', '2'),
(5, 1, 1, 'ndsds', '1', 'dowifgudi', 2020, 1, 4, 'dms', '13232', '3232', 'Elias Montenegro', '12/06/2020', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `IdDepart` int(2) NOT NULL,
  `NomDep` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`IdDepart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`IdDepart`, `NomDep`) VALUES
(1, 'Antioquia'),
(3, 'Atlantico'),
(5, 'Bolivar'),
(7, 'Boyaca'),
(21, 'Magdalena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE IF NOT EXISTS `especies` (
  `idespecie` int(6) NOT NULL AUTO_INCREMENT,
  `nomespecie` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`idespecie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `especies`
--

INSERT INTO `especies` (`idespecie`, `nomespecie`) VALUES
(1, 'Salmon'),
(2, 'Pez Dorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE IF NOT EXISTS `familia` (
  `idfamilia` int(4) NOT NULL AUTO_INCREMENT,
  `nomfamilia` varchar(50) NOT NULL,
  PRIMARY KEY (`idfamilia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`idfamilia`, `nomfamilia`) VALUES
(1, 'Beloniformes'),
(2, 'Characiformes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
  `codmun` int(4) NOT NULL,
  `idmun` int(3) NOT NULL,
  `NomMunicipio` varchar(100) NOT NULL,
  `IdDept` int(2) NOT NULL,
  PRIMARY KEY (`codmun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`codmun`, `idmun`, `NomMunicipio`, `IdDept`) VALUES
(1, 1, 'Santa Marta', 21),
(2, 8, 'Algarrobo', 21),
(3, 16, 'Cienaga', 21),
(4, 39, 'Argelia', 1),
(5, 49, 'Bello', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
