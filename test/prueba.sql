-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2022 a las 19:32:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_inscripcion`
--

CREATE TABLE `formato_inscripcion` (
  `nombre_curso_aspira` varchar(60) NOT NULL,
  `fecha_diligenciamiento` date NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `lugar_nacimiento` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(10) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `numero_documento` int(10) NOT NULL,
  `lugar_expedicion` varchar(100) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `desplazado` varchar(2) NOT NULL,
  `desvinculado` varchar(2) NOT NULL,
  `madre_soltera` varchar(2) NOT NULL,
  `tiene_hijos` varchar(2) NOT NULL,
  `cuantos_hijos` int(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estrato` int(10) NOT NULL,
  `telefono_fijo` int(10) NOT NULL,
  `celular` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contributivo` varchar(1) DEFAULT NULL,
  `eps` varchar(30) DEFAULT NULL,
  `cotizante` varchar(1) DEFAULT NULL,
  `beneficiario` varchar(1) DEFAULT NULL,
  `subsidiado_sisben` varchar(1) DEFAULT NULL,
  `puntaje_sisben` varchar(20) DEFAULT NULL,
  `gp_sangre_rh` varchar(10) NOT NULL,
  `emergencia_nombre` varchar(60) NOT NULL,
  `emergencia_telefono` int(10) NOT NULL,
  `tiene_enfermedad` varchar(2) DEFAULT NULL,
  `que_enfermedad` varchar(60) DEFAULT NULL,
  `tiene_discapacidad` varchar(2) DEFAULT NULL,
  `que_discapacidad` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `nombre_curso_aspira` varchar(60) DEFAULT NULL,
  `fecha_diligenciamiento` date DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int(10) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `numero_documento` int(10) DEFAULT NULL,
  `lugar_expedicion` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `desplazado` varchar(2) DEFAULT NULL,
  `desvinculado` varchar(2) DEFAULT NULL,
  `madre_soltera` varchar(2) DEFAULT NULL,
  `tiene_hijos` varchar(2) DEFAULT NULL,
  `cuantos_hijos` int(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `estrato` int(10) DEFAULT NULL,
  `telefono_fijo` int(10) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `contributivo` varchar(1) DEFAULT NULL,
  `eps` varchar(30) DEFAULT NULL,
  `cotizante` varchar(1) DEFAULT NULL,
  `beneficiario` varchar(1) DEFAULT NULL,
  `subsidiado_sisben` varchar(1) DEFAULT NULL,
  `puntaje_sisben` varchar(20) DEFAULT NULL,
  `gp_sangre_rh` varchar(10) DEFAULT NULL,
  `emergencia_nombre` varchar(60) DEFAULT NULL,
  `emergencia_telefono` int(10) DEFAULT NULL,
  `tiene_enfermedad` varchar(2) DEFAULT NULL,
  `que_enfermedad` varchar(60) DEFAULT NULL,
  `tiene_discapacidad` varchar(2) DEFAULT NULL,
  `que_discapacidad` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `nombre_curso_aspira`, `fecha_diligenciamiento`, `apellido`, `nombre`, `lugar_nacimiento`, `fecha_nacimiento`, `edad`, `genero`, `tipo_documento`, `numero_documento`, `lugar_expedicion`, `estado_civil`, `desplazado`, `desvinculado`, `madre_soltera`, `tiene_hijos`, `cuantos_hijos`, `direccion`, `estrato`, `telefono_fijo`, `celular`, `email`, `contributivo`, `eps`, `cotizante`, `beneficiario`, `subsidiado_sisben`, `puntaje_sisben`, `gp_sangre_rh`, `emergencia_nombre`, `emergencia_telefono`, `tiene_enfermedad`, `que_enfermedad`, `tiene_discapacidad`, `que_discapacidad`) VALUES
(1, 'ADSI', '2022-08-15', 'Ocampo', 'Juan Jose', 'Medellín', '2003-04-04', 18, 'Masculino', 'cedula', 1002643864, 'Abejorral', 'Soltero', 'NO', 'NO', 'N/', 'N/', 0, 'CL 44C #64-87', 3, 8658765, 2147483647, 'jjocampo@misena.edu.co', 'X', '', ' ', ' ', 'S', 'C13', 'O+', 'Pedro Ocampo', 2147483647, 'SI', 'ADHD', 'NO', ''),
(2, 'ADSI', '0000-00-00', 'AWDG', 'AWFAWF', 'AWF', '0000-00-00', 234, 'N', 'cedula', 132512, 'DIAYWD', 'SEFAAFA', 'NO', 'NO', 'N/', 'N/', 123, 'AWFEGAW #B', 2, 12523456, 2147483647, 'OUAIYUFSA@FTUAW.COM', 'X', 'SURA', 'X', 'X', 'S', 'C400', 'C++', 'CANIPUTMYBALLS OCAMPO', 23545869, 'SI', 'ADHD', 'NO', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formato_inscripcion`
--
ALTER TABLE `formato_inscripcion`
  ADD PRIMARY KEY (`tipo_documento`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
