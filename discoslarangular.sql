-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2016 a las 15:09:18
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `discoslarangular`
--
CREATE DATABASE IF NOT EXISTS `discoslarangular` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `discoslarangular`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `album_id` int(11) NOT NULL,
  `album_titulo` varchar(255) NOT NULL,
  `album_fechapublicacion` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`album_id`, `album_titulo`, `album_fechapublicacion`, `updated_at`, `created_at`) VALUES
(2, 'Fantasmas', '2015-04-12', '2016-05-17 12:07:44', '2016-05-17 01:13:22'),
(4, 'fcfcf', '2016-05-11', '2016-05-17 01:39:30', '2016-05-17 01:39:30'),
(5, 'fcfcf', '2016-05-11', '2016-05-17 01:40:18', '2016-05-17 01:40:18'),
(6, 'Magnate', '2016-05-11', '2016-05-17 02:41:14', '2016-05-17 01:42:15'),
(7, 'Sonata del cielo', '2016-05-26', '2016-05-17 02:45:36', '2016-05-17 01:43:53'),
(8, 'LAst chancs', '2016-05-19', '2016-05-17 02:49:25', '2016-05-17 02:49:25'),
(9, 'pepl', '2016-05-12', '2016-05-17 02:56:17', '2016-05-17 02:56:17'),
(10, 'Chavez vive', '2016-05-19', '2016-05-17 02:58:18', '2016-05-17 02:58:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `artista_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `artista_nombre` varchar(100) NOT NULL,
  `artista_rol` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`artista_id`, `album_id`, `artista_nombre`, `artista_rol`, `updated_at`, `created_at`) VALUES
(2, 1, 'juan', 'pop', '2016-05-16 22:03:43', '2016-05-16 22:03:43'),
(4, 2, 'Mark Antoni', 'salsa', '2016-05-17 12:27:00', '2016-05-17 01:13:23'),
(5, 2, 'juan ddvd', 'pop', '2016-05-17 12:49:21', '2016-05-17 01:13:23'),
(6, 2, 'maria', 'jass', '2016-05-17 01:13:23', '2016-05-17 01:13:23'),
(7, 3, 'pepe', 'rock', '2016-05-17 01:39:10', '2016-05-17 01:39:10'),
(8, 3, 'juan', 'pop', '2016-05-17 01:39:10', '2016-05-17 01:39:10'),
(9, 3, 'maria', 'jass', '2016-05-17 01:39:10', '2016-05-17 01:39:10'),
(10, 4, 'pepe', 'rock', '2016-05-17 01:39:31', '2016-05-17 01:39:31'),
(12, 4, 'maria', 'jass', '2016-05-17 01:39:31', '2016-05-17 01:39:31'),
(13, 5, 'pepe', 'rock', '2016-05-17 01:40:18', '2016-05-17 01:40:18'),
(14, 5, 'juan', 'pop', '2016-05-17 01:40:18', '2016-05-17 01:40:18'),
(15, 5, 'maria', 'jass', '2016-05-17 01:40:18', '2016-05-17 01:40:18'),
(16, 7, '1a', '1b', '2016-05-17 01:43:54', '2016-05-17 01:43:54'),
(17, 7, '2a', '2b', '2016-05-17 01:43:54', '2016-05-17 01:43:54'),
(18, 9, 'cxxzc', 'xc', '2016-05-17 02:56:17', '2016-05-17 02:56:17'),
(19, 10, 'pepe', 'guitarra', '2016-05-17 02:58:19', '2016-05-17 02:58:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`album_id`);

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`artista_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `artista_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
