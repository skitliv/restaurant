-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2021 a las 17:28:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE `img` (
  `idIMG` int(11) NOT NULL,
  `idDish` int(11) NOT NULL,
  `Link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `img`
--

INSERT INTO `img` (`idIMG`, `idDish`, `Link`) VALUES
(1, 1, 'arroz_vegetariano'),
(2, 2, 'Helado_chocolate'),
(3, 3, 'arroz_lenteja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idDish` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `category` varchar(45) NOT NULL,
  `settingsId` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idDish`, `name`, `price`, `category`, `settingsId`, `img`) VALUES
(1, 'Arroz vegetariano', '5.00', 'Plato Fuerte', 1, 'arroz_vegetariano'),
(2, 'Helado de Chocolate', '3.00', 'Postres', 5, 'helado_chocolate'),
(3, 'Arroz con lenteja', '7.00', 'Plato Fuerte', 2, 'arroz_lenteja'),
(4, 'Helado de Vainilla', '5.00', 'Postres', 5, 'helado_vainilla'),
(5, 'Papas fritas', '2.50', 'Sides', 6, 'papas_fritas'),
(6, 'Guatita', '5.00', 'Plato Fuerte', 7, 'guatita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `IDorder` int(11) NOT NULL,
  `IDemployee` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `table` int(2) NOT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `order`
--

INSERT INTO `order` (`IDorder`, `IDemployee`, `date`, `table`, `subtotal`, `total`, `status`) VALUES
(1, 5, '2021-08-05 01:19:46', 0, 46, 49, 'started'),
(2, 5, '2021-08-05 10:43:40', 5, 106, 112, 'started'),
(3, 5, '2021-08-05 10:47:46', 8, 104, 110, 'ordered'),
(4, 5, '2021-08-06 15:36:41', 0, 78, 83, 'ordered'),
(5, 5, '2021-08-06 15:45:08', 0, 21, 22, 'ordered'),
(6, 5, '2021-08-06 17:04:50', 0, 15, 16, 'ordered'),
(7, 5, '2021-08-08 12:19:15', 0, 32, 34, 'ordered'),
(8, 5, '2021-08-08 13:31:40', 0, 26, 28, 'ordered'),
(9, 5, '2021-08-09 12:25:55', 0, 60, 64, 'ordered'),
(10, 5, '2021-08-10 15:33:44', 0, 27, 29, 'ordered'),
(11, 5, '2021-08-10 15:34:01', 10, 17, 18, 'ordered'),
(12, 5, '2021-08-10 15:34:11', 0, 27, 29, 'ordered'),
(13, 5, '2021-08-10 15:34:24', 0, 28, 30, 'ordered'),
(14, 5, '2021-08-10 15:34:56', 0, 35, 37, 'ordered'),
(15, 5, '2021-08-10 15:35:32', 0, 44, 47, 'ordered'),
(16, 5, '2021-08-10 15:36:13', 0, 27, 29, 'ordered'),
(17, 5, '2021-08-10 15:36:18', 0, 5, 5, 'ordered'),
(18, 5, '2021-08-10 15:44:36', 0, 39, 41, 'ordered'),
(19, 5, '2021-08-10 15:51:04', 0, 20, 21, 'ordered'),
(20, 5, '2021-08-10 16:29:13', 10, 28, 29, 'ordered'),
(21, 5, '2021-08-10 16:29:22', 0, 36, 38, 'ordered'),
(22, 5, '2021-08-10 16:29:56', 0, 42, 45, 'ordered'),
(23, 5, '2021-08-10 16:31:29', 5, 41, 43, 'ordered'),
(24, 5, '2021-08-10 16:31:35', 0, 17, 18, 'ordered'),
(25, 5, '2021-08-10 16:33:33', 0, 17, 18, 'ordered'),
(26, 5, '2021-08-10 16:33:42', 0, 19, 20, 'ordered'),
(27, 5, '2021-08-10 19:10:31', 0, 29, 31, 'ordered'),
(28, 5, '2021-08-10 19:10:44', 0, 30, 31, 'ordered'),
(29, 5, '2021-08-11 20:39:12', 10, 28, 29, 'ordered');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdetails`
--

CREATE TABLE `orderdetails` (
  `IDdetails` int(11) NOT NULL,
  `IDdish` int(11) NOT NULL,
  `priceU` decimal(5,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `Detalles` varchar(100) NOT NULL,
  `priceT` decimal(5,2) NOT NULL,
  `IDorder` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orderdetails`
--

INSERT INTO `orderdetails` (`IDdetails`, `IDdish`, `priceU`, `cantidad`, `size`, `Detalles`, `priceT`, `IDorder`, `status`) VALUES
(1, 1, '0.00', 1, 'pequeño', '', '5.00', 20, 0),
(2, 3, '0.00', 1, 'pequeño', '', '7.00', 20, 0),
(3, 6, '0.00', 1, 'pequeño', '', '5.00', 20, 0),
(4, 4, '0.00', 1, 'pequeño', '', '5.00', 20, 0),
(5, 2, '0.00', 1, 'pequeño', '', '3.00', 20, 0),
(6, 5, '0.00', 1, 'pequeño', '', '2.50', 20, 0),
(7, 3, '0.00', 1, 'pequeño', '', '7.00', 21, 0),
(8, 3, '0.00', 1, 'pequeño', '', '7.00', 21, 0),
(9, 3, '0.00', 1, 'pequeño', '', '7.00', 21, 0),
(10, 6, '0.00', 1, 'pequeño', '', '5.00', 21, 0),
(11, 6, '0.00', 1, 'pequeño', '', '5.00', 21, 0),
(12, 1, '0.00', 1, 'pequeño', '', '5.00', 21, 0),
(13, 1, '0.00', 1, 'pequeño', '', '5.00', 22, 0),
(14, 1, '0.00', 1, 'pequeño', '', '5.00', 22, 0),
(15, 3, '0.00', 1, 'pequeño', '', '7.00', 22, 0),
(16, 3, '0.00', 1, 'pequeño', '', '7.00', 22, 0),
(17, 6, '0.00', 1, 'pequeño', '', '5.00', 22, 0),
(18, 6, '0.00', 1, 'pequeño', '', '5.00', 22, 0),
(19, 2, '0.00', 1, 'pequeño', '', '3.00', 22, 0),
(20, 4, '0.00', 1, 'pequeño', '', '5.00', 22, 0),
(21, 1, '0.00', 1, 'pequeño', '', '5.00', 23, 0),
(22, 3, '0.00', 3, 'pequeño', '', '21.00', 23, 0),
(23, 6, '0.00', 3, 'pequeño', '', '15.00', 23, 0),
(24, 1, '0.00', 1, 'pequeño', '', '5.00', 24, 0),
(25, 3, '0.00', 1, 'pequeño', '', '7.00', 24, 0),
(26, 6, '0.00', 1, 'pequeño', '', '5.00', 24, 0),
(27, 3, '0.00', 1, 'pequeño', '', '7.00', 25, 0),
(28, 6, '0.00', 1, 'pequeño', '', '5.00', 25, 0),
(29, 1, '0.00', 1, 'pequeño', '', '5.00', 25, 0),
(30, 3, '0.00', 1, 'pequeño', '', '7.00', 26, 0),
(31, 3, '0.00', 1, 'pequeño', '', '7.00', 26, 0),
(32, 1, '0.00', 1, 'pequeño', '', '5.00', 26, 0),
(33, 3, '0.00', 1, 'pequeño', '', '7.00', 27, 0),
(34, 3, '0.00', 1, 'pequeño', '', '7.00', 27, 0),
(35, 1, '0.00', 1, 'pequeño', '', '5.00', 27, 0),
(36, 1, '0.00', 1, 'pequeño', '', '5.00', 27, 0),
(37, 6, '0.00', 1, 'pequeño', '', '5.00', 27, 0),
(38, 6, '0.00', 1, 'pequeño', '', '5.00', 28, 0),
(39, 6, '0.00', 1, 'pequeño', '', '5.00', 28, 0),
(40, 6, '0.00', 1, 'pequeño', '', '5.00', 28, 0),
(41, 3, '0.00', 1, 'pequeño', '', '7.00', 28, 0),
(42, 1, '0.00', 1, 'pequeño', '', '5.00', 28, 0),
(43, 5, '0.00', 1, 'pequeño', '', '2.50', 28, 0),
(44, 1, '0.00', 1, 'pequeño', '', '5.00', 29, 0),
(45, 3, '0.00', 1, 'pequeño', '', '7.00', 29, 0),
(46, 6, '0.00', 1, 'pequeño', '', '5.00', 29, 0),
(47, 2, '0.00', 1, 'pequeño', '', '3.00', 29, 0),
(48, 4, '0.00', 1, 'pequeño', '', '5.00', 29, 0),
(49, 5, '0.00', 1, 'pequeño', '', '2.50', 29, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`idIMG`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idDish`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`IDorder`);

--
-- Indices de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`IDdetails`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `IDorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `IDdetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
