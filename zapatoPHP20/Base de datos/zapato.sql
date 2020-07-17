-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2020 a las 11:42:52
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dboestilo`
--

CREATE TABLE `dboestilo` (
  `id_estilo` int(11) NOT NULL,
  `estilo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dboestilo`
--

INSERT INTO `dboestilo` (`id_estilo`, `estilo`) VALUES
(4, 'Casual'),
(5, 'Deportivo'),
(6, 'Formal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbogenero`
--

CREATE TABLE `dbogenero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dbogenero`
--

INSERT INTO `dbogenero` (`id_genero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbotalla`
--

CREATE TABLE `dbotalla` (
  `id_talla` int(11) NOT NULL,
  `talla` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dbotalla`
--

INSERT INTO `dbotalla` (`id_talla`, `talla`) VALUES
(1, '8'),
(2, '9'),
(3, '5'),
(4, '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbozapato`
--

CREATE TABLE `dbozapato` (
  `id_zapato` int(11) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `color` varchar(45) NOT NULL,
  `id_estilo` int(11) NOT NULL,
  `id_talla` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dbozapato`
--

INSERT INTO `dbozapato` (`id_zapato`, `precio`, `color`, `id_estilo`, `id_talla`, `id_genero`, `cantidad`) VALUES
(2, '36.00', 'Rosado brillante', 5, 1, 3, 52),
(7, '15.50', 'azul', 5, 3, 3, 5454);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dboestilo`
--
ALTER TABLE `dboestilo`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Indices de la tabla `dbogenero`
--
ALTER TABLE `dbogenero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `dbotalla`
--
ALTER TABLE `dbotalla`
  ADD PRIMARY KEY (`id_talla`);

--
-- Indices de la tabla `dbozapato`
--
ALTER TABLE `dbozapato`
  ADD PRIMARY KEY (`id_zapato`),
  ADD KEY `id_estilo` (`id_estilo`),
  ADD KEY `id_talla` (`id_talla`),
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dboestilo`
--
ALTER TABLE `dboestilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dbogenero`
--
ALTER TABLE `dbogenero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dbotalla`
--
ALTER TABLE `dbotalla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dbozapato`
--
ALTER TABLE `dbozapato`
  MODIFY `id_zapato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dbozapato`
--
ALTER TABLE `dbozapato`
  ADD CONSTRAINT `dbozapato_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `dbogenero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dbozapato_ibfk_2` FOREIGN KEY (`id_estilo`) REFERENCES `dboestilo` (`id_estilo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dbozapato_ibfk_3` FOREIGN KEY (`id_talla`) REFERENCES `dbotalla` (`id_talla`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
