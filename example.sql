-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 02:50:52
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
-- Base de datos: `example`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Business-focused asynchronous architectureasdasdasd', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(2, 'Diverse fault-tolerant systemengine', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(3, 'Compatible non-volatile systemengine', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(4, 'Diverse analyzing artificialintelligence', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(5, 'Progressive reciprocal capacity', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(6, 'Polarised executive extranet', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(7, 'Pre-emptive heuristic alliance', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(8, 'Phased multi-state superstructure', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(9, 'Self-enabling directional firmware', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(10, 'Multi-channelled needs-based leverage', 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(11, 'MANEJATE', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_movie`
--

CREATE TABLE `category_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `category_movie`
--

INSERT INTO `category_movie` (`id`, `movie_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, NULL, NULL),
(2, 4, 5, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 1, 9, NULL, NULL),
(5, 1, 10, NULL, NULL),
(6, 7, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Motor Vehicle Inspector', 'Mouse only growled in reply. \'Idiot!\' said the Mouse. \'--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria--\"\' \'Ugh!\' said the Gryphon. \'We can do without lobsters, you know. Which.', 2, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(2, 'Recordkeeping Clerk', 'And then, turning to Alice, and sighing. \'It IS the same tone, exactly as if it wasn\'t trouble enough hatching the eggs,\' said the Dodo. Then they all spoke at once, in a great hurry. \'You did!\'.', 6, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(3, 'System Administrator', 'However, \'jury-men\' would have this cat removed!\' The Queen had only one who got any advantage from the sky! Ugh, Serpent!\' \'But I\'m NOT a serpent, I tell you!\' But she did so, and were resting in.', 10, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(4, 'Fitness Trainer', 'I\'ve finished.\' So they began moving about again, and we put a stop to this,\' she said to Alice; and Alice looked up, and there was no more of the ground, Alice soon came to ME, and told me he was.', 3, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(5, 'Photoengraver', 'Mouse, who was a little now and then dipped suddenly down, so suddenly that Alice could see it trot away quietly into the book her sister on the bank, and of having nothing to what I see\"!\' \'You.', 4, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(6, 'Project Manager', 'Majesty,\' said Alice angrily. \'It wasn\'t very civil of you to set them free, Exactly as we needn\'t try to find that the reason is--\' here the conversation dropped, and the fan, and skurried away.', 4, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(7, 'Machine Operator', 'Cat. \'I don\'t think it\'s at all know whether it would not give all else for two Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the jury consider their verdict,\' the King was.', 10, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(8, 'Talent Director', 'Mock Turtle to the other, trying every door, she ran off at once to eat her up in a low trembling voice, \'Let us get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s.', 5, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(9, 'Order Filler', 'Dormouse!\' And they pinched it on both sides of it, and they repeated their arguments to her, one on each side, and opened their eyes and mouths so VERY much out of the Lobster Quadrille, that she.', 3, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(10, 'Nuclear Engineer', 'I beg your acceptance of this rope--Will the roof of the court,\" and I could shut up like a steam-engine when she first saw the White Rabbit, \'and that\'s the jury, and the sound of a book,\' thought.', 10, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_rental`
--

CREATE TABLE `movie_rental` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `rental_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `observations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movie_rental`
--

INSERT INTO `movie_rental` (`id`, `movie_id`, `rental_id`, `price`, `observations`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 10000, 'Pelicula Rentada en perfecto estado', NULL, NULL),
(2, 9, 1, 10000, 'Pelicula Rentada en perfecto estado', NULL, NULL),
(3, 4, 11, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentals`
--

CREATE TABLE `rentals` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NULL DEFAULT NULL,
  `total` double DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rentals`
--

INSERT INTO `rentals` (`id`, `start_date`, `end_date`, `total`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, '1996-01-30 04:33:22', '2012-03-15 21:49:07', 45260262.33012, 7, 1, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(2, '1970-08-13 11:30:34', '1986-12-07 12:05:55', 187906616.79467, 5, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(3, '1996-03-27 05:51:55', '2008-02-28 06:13:04', 310840126.95, 1, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(4, '1979-07-23 03:17:00', '1988-01-29 00:50:21', 2626, 7, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(5, '1989-07-05 18:31:48', '1979-10-22 10:00:35', 5022, 4, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(6, '2011-07-17 04:23:34', '2016-07-29 04:46:53', 4358664, 3, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(7, '2017-06-02 01:49:07', '1984-11-22 04:44:46', 22968656.658, 5, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(8, '1977-05-27 10:55:28', '1987-04-17 02:45:25', 3237874.9559, 6, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(9, '1971-09-21 14:48:43', '2015-07-26 18:25:49', 95.3935589, 3, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(10, '1980-06-22 18:24:45', '2001-09-17 10:23:17', 81.45064174, 9, 1, '2020-08-21 23:18:11', '2020-08-21 23:18:11'),
(11, '2020-09-25 05:00:00', '2020-09-26 05:00:00', 123123, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(2, 'Empleado', 1, '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(3, 'Cliente', 1, '2020-08-21 23:18:08', '2020-08-21 23:18:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `type_status_id`, `created_at`, `updated_at`) VALUES
(1, 'Activo', 1, '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(2, 'Inactivo', 1, '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(3, 'Bloqueado', 2, '2020-08-22 01:04:59', '2020-08-22 01:04:59'),
(4, 'Alquilado', 3, '2020-08-22 01:05:19', '2020-08-22 01:05:19'),
(5, 'Disponible', 3, '2020-08-22 01:05:19', '2020-08-22 01:05:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_statuses`
--

CREATE TABLE `type_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_statuses`
--

INSERT INTO `type_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'General', '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(2, 'Usuario', '2020-08-21 23:18:08', '2020-08-21 23:18:08'),
(3, 'Peliculas', '2020-08-21 23:18:08', '2020-08-21 23:18:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zachary Reilly', 'bradtke.may@kertzmann.info', NULL, '$2y$10$Ni9N6uqT3eV4D8PsyYBMxuwE1zSH4aMoGsy46NvM/vE9nyXY5Ce0G', 2, 2, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(2, 'Dr. Cruz Jenkins', 'lueilwitz.kaia@gaylord.biz', NULL, '$2y$10$qW4F92em18XBx4kzwg6lI.JIUnttGnR.6p1vLCJuN2LT5pe4Kj5Jm', 1, 2, NULL, '2020-08-21 23:18:09', '2020-08-21 23:21:42'),
(3, 'Cruz Stamm II', 'dewayne49@gmail.com', NULL, '$2y$10$sLadSaNraZswCJ.KAfPjZeKPaxlR6v5hLw9TeELNE/KhL7vFHJccG', 1, 1, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(4, 'Lorenzo Fay', 'jayme63@gmail.com', NULL, '$2y$10$yA3DzcGLioM3NEZsoQPXWurZtt/lMpsrj98/zJT9ffyBbjU1QGZTS', 2, 2, NULL, '2020-08-21 23:18:09', '2020-08-21 23:21:51'),
(5, 'Otho Greenholt', 'jaskolski.estrella@hotmail.com', NULL, '$2y$10$GPQTSFqd1deD2QykAb9FVuhLWFScKEjQJ.Pl6m6nJlvxYaYFtCO/O', 1, 1, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(6, 'Malcolm Harvey PhD', 'iernser@luettgen.com', NULL, '$2y$10$JlpTyRIqRQzRUwngxivHq.O2ggaNOjox/ar8PH8s6YUad5tB9.JSi', 1, 1, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(7, 'Dr. Tyree Feeney PhD', 'kaci.franecki@gmail.com', NULL, '$2y$10$A3u0S2XdbsfUuTJnMEpzSeX.Q2OulHmLq5.VXyv1oOdgW1jEt7WMi', 1, 1, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(8, 'Nannie Friesen', 'carlo43@gmail.com', NULL, '$2y$10$C9RPodBEOzQJnl7Hvs.Ot.oL.BcIr8CJWL1IPFT73sRYTH4fjfM7a', 1, 1, NULL, '2020-08-21 23:18:09', '2020-08-21 23:18:09'),
(9, 'Diana Lopez', 'qrippin@kuhn.com', NULL, '$2y$10$CsPSfu4pNdLYuh4bGMvMxOWE8YAX66tNMLhXlgI0gL/MjzBDm54m.', 1, 1, NULL, '2020-08-21 23:18:10', '2020-08-21 23:18:10'),
(10, 'Mozell Ward', 'rherman@yahoo.com', NULL, '$2y$10$Vp4iihfw1bmjwo8B4L9ZFul3M6jBYHVxAAdVjq9Y./GiWlDIww3gO', 2, 3, NULL, '2020-08-21 23:18:10', '2020-08-22 00:27:03'),
(11, 'Alejandro Munevar', 'alejandro@alejandro.com', NULL, '$2y$10$DNvldqDTZo1bSP35e5O5vemDS1JgnYIksG9JRTDIQ72NlfKXxOn1S', 1, 1, NULL, '2020-08-21 23:19:16', '2020-08-21 23:19:16'),
(12, 'Pedro Perez', 'pedro@pedro.com', NULL, '$2y$10$gdASKajPd4MV.LB5A3l/UuqtiD4gVIyWgGgjmQVlWhbbKZfF4f4jG', 1, 1, NULL, '2020-08-21 23:48:05', '2020-08-21 23:48:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_movie_movie_id_foreign` (`movie_id`),
  ADD KEY `category_movie_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_user_id_foreign` (`user_id`),
  ADD KEY `movies_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_rental_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_rental_rental_id_foreign` (`rental_id`);

--
-- Indices de la tabla `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_type_status_id_foreign` (`type_status_id`);

--
-- Indices de la tabla `type_statuses`
--
ALTER TABLE `type_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_status_id_foreign` (`status_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `category_movie`
--
ALTER TABLE `category_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `type_statuses`
--
ALTER TABLE `type_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD CONSTRAINT `category_movie_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `category_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD CONSTRAINT `movie_rental_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_rental_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_type_status_id_foreign` FOREIGN KEY (`type_status_id`) REFERENCES `type_statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
