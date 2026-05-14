-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 08:19:28
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_stargud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `idAlbum` int(11) NOT NULL,
  `nombreAlbum` varchar(200) NOT NULL,
  `imagenPrincipal` varchar(200) NOT NULL,
  `descripAlbum` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`idAlbum`, `nombreAlbum`, `imagenPrincipal`, `descripAlbum`) VALUES
(1, 'Primera sesión', 'img2.jpg', 'Descripción'),
(2, 'Primer evento', 'foto5.jpeg', 'Descripción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `nombreImagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `nombreImagen`) VALUES
(1, 'stargudUva.jpg'),
(2, 'stargudLim.jpg'),
(3, 'stargudPilas.jpg'),
(4, 'narandina2.png'),
(5, 'stargudMora.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_album`
--

CREATE TABLE `imagenes_album` (
  `idImagenesAlbum` int(11) NOT NULL,
  `nombreImagen` varchar(255) NOT NULL,
  `tituloImagen` varchar(255) DEFAULT NULL,
  `descripcionImagen` varchar(255) DEFAULT NULL,
  `FK_ID_ALBUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_album`
--

INSERT INTO `imagenes_album` (`idImagenesAlbum`, `nombreImagen`, `tituloImagen`, `descripcionImagen`, `FK_ID_ALBUM`) VALUES
(1, 'img1.jpg', 'Primera sesión', NULL, 1),
(2, 'foto1.jpeg', 'Primer evento', NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `imagenes_album`
--
ALTER TABLE `imagenes_album`
  ADD PRIMARY KEY (`idImagenesAlbum`),
  ADD KEY `FK_ID_ALBUM` (`FK_ID_ALBUM`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `idAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagenes_album`
--
ALTER TABLE `imagenes_album`
  MODIFY `idImagenesAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes_album`
--
ALTER TABLE `imagenes_album`
  ADD CONSTRAINT `imagenes_album_ibfk_1` FOREIGN KEY (`FK_ID_ALBUM`) REFERENCES `album` (`idAlbum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
