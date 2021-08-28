-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2021 a las 18:23:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(3, 236374014, 520468378, 'Hola!'),
(4, 520468378, 236374014, 'Hola, cómo estas?'),
(5, 236374014, 520468378, 'Hola perro!'),
(6, 520468378, 236374014, 'Habla causa, en qué andas?'),
(7, 520468378, 236374014, 'Chupla!'),
(8, 236374014, 520468378, 'YaAAAAA'),
(9, 236374014, 520468378, '!!!'),
(10, 236374014, 520468378, 'GAAAA!!!'),
(11, 236374014, 520468378, 'Hola!'),
(12, 236374014, 589716716, 'Hola Antony!'),
(13, 589716716, 236374014, 'Hola rosa!'),
(14, 589716716, 236374014, 'Qué tal ?'),
(15, 236374014, 589716716, 'Todo bien!'),
(16, 498984923, 236374014, 'Hola Maria!'),
(17, 236374014, 498984923, 'Hola!!!'),
(18, 498984923, 236374014, 'hola'),
(19, 236374014, 498984923, 'jaja'),
(20, 236374014, 498984923, 'jajaja'),
(21, 236374014, 498984923, 'jajaja'),
(22, 236374014, 498984923, 'jajajknalnld'),
(23, 236374014, 498984923, 'asbdasklad'),
(24, 236374014, 498984923, 'jkaidn;ad'),
(25, 236374014, 498984923, 'i;dkanda;knda'),
(26, 236374014, 498984923, 'nda;nad;da'),
(27, 236374014, 498984923, 'iadn;adnda'),
(28, 236374014, 498984923, 'adkn;ad'),
(29, 498984923, 236374014, 'kaka'),
(30, 498984923, 236374014, 'jajaj'),
(31, 498984923, 236374014, 'jaja'),
(32, 498984923, 236374014, 'jajajhaha'),
(33, 498984923, 236374014, 'jaja'),
(34, 498984923, 236374014, 'jaja'),
(35, 498984923, 236374014, 'jaja'),
(36, 498984923, 236374014, 'jajaj'),
(37, 498984923, 236374014, 'jaja'),
(38, 498984923, 236374014, 'hello!'),
(39, 498984923, 236374014, 'jaja'),
(40, 498984923, 236374014, 'jaja'),
(41, 236374014, 498984923, 'naam nei'),
(42, 236374014, 498984923, 'jaja'),
(43, 236374014, 498984923, 'jaja'),
(44, 236374014, 498984923, 'jaja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 236374014, 'Antony', 'Milian', 'antonymilian19@gmail.com', 'jorgemilian', '1624489893jaja.jpg', 'Offline now'),
(2, 1060300977, 'Lourdes', 'García', 'lourdesgarcia@gmail.com', 'jorgemilian', '1624490073163228771_2757773901150956_5268884367719831528_n.jpg', 'Offline now'),
(3, 498984923, 'Maria', 'Espinoza', 'mariaespinoza@gmail.com', 'jorgemilian', '1624490212iajoajao.jpg', 'Offline now'),
(4, 520468378, 'Mario', 'López', 'mariolopez@gmail.com', 'jorgemilian', '1624491367Sin título-1.jpg', 'Offline now'),
(5, 271629733, 'Eduardo', 'Aguilar', 'eduardoelias@gmail.com', 'jorgemilian', '16245012732.jpg', 'Offline now'),
(7, 589716716, 'Rosa', 'Maldini', 'rosamaldini@gmail.com', 'jorgemilian', '162514899311111111.jpg', 'Activo ahora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
