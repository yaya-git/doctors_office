-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2015 a las 07:11:19
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doctors_office`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `address`, `phone`, `birthdate`) VALUES
(1, 1, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)965-45-02', '1980-01-19 00:00:00'),
(2, 2, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)654-85-25', '1982-01-19 00:00:00'),
(3, 3, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)122-22-43', '1983-01-19 00:00:00'),
(4, 4, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)255-88-17', '1984-01-19 00:00:00'),
(5, 5, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)236-86-01', '1985-03-19 00:00:00'),
(6, 6, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)159-08-36', '1986-04-19 00:00:00'),
(7, 7, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)523-99-35', '1987-08-19 00:00:00'),
(8, 8, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '(664)258-96-41', '1988-01-19 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Cirugía general'),
(2, 'Traumatología y ortopedia'),
(3, 'Cirugía platica reconstructiva'),
(4, 'Medicina interna'),
(5, 'Neurología'),
(6, 'Terapia intensiva'),
(7, 'Rehabilitación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fernando', 'ballesteros arreguin', 'fernando@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(2, 'samai', 'vazquez', 'samai.vazquez@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(3, 'susana', 'gamiz', 'susana.gamiz@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(4, 'claudia', 'silva', 'claudia.silva@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(5, 'horacio', 'villalobos', 'horasitu@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(6, 'pilar', 'voliver', 'pilar.voliver@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(7, 'luis', 'ovando esquivel', 'luis.ovando@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(8, 'graciela', 'vazquez', 'gabriela.vazquez@hotmail.com', 'PAS', 1, '2015-08-05 00:00:00', '2015-08-05 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `service_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `views`
--

INSERT INTO `views` (`id`, `user_id`, `description`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, '2015-08-05 00:00:00', '2015-08-05 00:00:00'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3, '2015-06-04 00:00:00', '2015-06-04 00:00:00'),
(3, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4, '2015-06-30 00:00:00', '2015-06-30 00:00:00'),
(4, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4, '2015-06-30 00:00:00', '2015-06-30 00:00:00'),
(5, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4, '2015-06-30 00:00:00', '2015-06-30 00:00:00'),
(6, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4, '2015-05-30 00:00:00', '2015-05-30 00:00:00'),
(7, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, '2015-06-30 00:00:00', '2015-06-30 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
