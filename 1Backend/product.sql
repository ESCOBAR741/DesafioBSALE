-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2022 a las 20:19:12
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bsale_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(7) NOT NULL,
  `name` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `url_image` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `price` int(90) NOT NULL,
  `discount` int(50) NOT NULL,
  `category` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `url_image`, `price`, `discount`, `category`) VALUES
(11110, 'Zephyrus Duo 15', 'https://media.pasionmovil.com/2020/04/60573513-gx550-c14-v8-light.jpg', 900000, 10, 9999990),
(11111, 'Asus ROG Strix G15', 'https://ripleycl.imgix.net/https%3A%2F%2Fr.btcdn.co%2Fr%2FeyJzaG9wX2lkIjozNTk5LCJnIjoiMTAwMHgifQ%2F9', 1399999, 0, 9999991),
(11112, 'Zenbook PRO DUO', 'https://i.blogs.es/d16602/zenbook-pro-duo-review-xataka/1366_2000.jpg', 2750000, 5, 9999992);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
