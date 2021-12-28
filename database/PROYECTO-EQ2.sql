-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-12-2021 a las 21:56:42
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
  `admin_id` int NOT NULL,
  `admin_nombre` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `admin_correo` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `admin_contras` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alum_id` int NOT NULL,
  `alum_nombre` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `alum_correo` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `alum_correop` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `alum_contras` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `doc_id` int NOT NULL,
  `doc_nombre` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `doc_correo` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `doc_correop` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `doc_contras` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `mat_id` int NOT NULL,
  `mat_nombre` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `mat_descrip` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
