-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-01-2022 a las 11:03:05
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PROYECTO-EQ2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `admin_numempleado` int NOT NULL,
  `admin_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `admin_correoP` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `admin_correoA` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `admin_telefono` int NOT NULL,
  `admin_contras` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alum_boleta` int NOT NULL,
  `alum_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alum_grupo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `alum_correoP` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alum_correoA` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alum_telefono` int NOT NULL,
  `alum_contras` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `cita_orden` int NOT NULL,
  `cita_numempleado` int NOT NULL,
  `cita_boleta` int NOT NULL,
  `cita_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `doc_numempleado` int NOT NULL,
  `doc_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doc_grupo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `doc_correoP` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doc_correoA` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doc_telefono` int NOT NULL,
  `doc_contras` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `grupo_docgrup` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_adminnum` int NOT NULL,
  `grupo_docnum` int NOT NULL,
  `grupo_boleta` int NOT NULL,
  `grupo_evaluacion` int NOT NULL,
  `grupo_observacion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `mat_id` int NOT NULL,
  `mat_grupo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `mat_bloque` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mat_tema` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mat_subtema` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mat_tipomaterial` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mat_actividad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admin_numempleado`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`alum_boleta`),
  ADD KEY `alum_grupo` (`alum_grupo`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`cita_orden`),
  ADD KEY `cita_numempleado` (`cita_numempleado`,`cita_boleta`),
  ADD KEY `cita_boleta` (`cita_boleta`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`doc_numempleado`),
  ADD KEY `doc_grupo` (`doc_grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD KEY `grupo_docgrup` (`grupo_docgrup`,`grupo_adminnum`,`grupo_docnum`,`grupo_boleta`),
  ADD KEY `grupo_adminnum` (`grupo_adminnum`),
  ADD KEY `grupo_boleta` (`grupo_boleta`),
  ADD KEY `grupo_docnum` (`grupo_docnum`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`mat_id`),
  ADD KEY `mat_grupo` (`mat_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `cita_orden` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `mat_id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`alum_grupo`) REFERENCES `docente` (`doc_grupo`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`cita_numempleado`) REFERENCES `docente` (`doc_numempleado`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`cita_boleta`) REFERENCES `alumno` (`alum_boleta`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`grupo_adminnum`) REFERENCES `administrador` (`admin_numempleado`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`grupo_docgrup`) REFERENCES `docente` (`doc_grupo`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_ibfk_3` FOREIGN KEY (`grupo_boleta`) REFERENCES `alumno` (`alum_boleta`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_ibfk_4` FOREIGN KEY (`grupo_docnum`) REFERENCES `docente` (`doc_numempleado`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`mat_grupo`) REFERENCES `docente` (`doc_grupo`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
