-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 06:11:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquilers`
--

CREATE TABLE `alquilers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valor_pelicula` double NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alquilers`
--

INSERT INTO `alquilers` (`id`, `valor_pelicula`, `fecha_inicio`, `fecha_fin`, `user_id`, `pelicula_id`, `created_at`, `updated_at`) VALUES
(1, 44, '2024-01-07', '2024-01-02', 2, 8, '2023-01-26 05:25:51', '2023-01-26 05:25:51'),
(2, 573, '2022-09-26', '2023-05-08', 2, 7, '2023-01-26 06:06:33', '2023-01-26 06:06:33'),
(3, 159, '2023-06-14', '2022-11-11', 2, 8, '2023-01-26 06:06:58', '2023-01-26 06:06:58'),
(4, 263, '2023-01-25', '2023-01-27', 2, 9, '2023-01-26 08:30:20', '2023-01-26 08:30:20'),
(6, 9999, '2023-01-26', '2023-01-26', 2, 1, '2023-01-27 05:50:27', '2023-01-27 05:50:27'),
(8, 610, '2023-01-26', '2023-02-01', 2, 2, '2023-01-27 08:08:37', '2023-01-27 08:08:37'),
(9, 6202, '2023-01-28', '2023-02-01', 1, 6, '2023-01-27 10:01:58', '2023-01-27 10:01:58'),
(11, 667.8, '2023-01-28', '2023-02-02', 1, 7, '2023-01-27 10:03:17', '2023-01-27 10:03:17'),
(12, 299, '2023-01-27', '2023-01-28', 1, 9, '2023-01-27 10:04:52', '2023-01-27 10:04:52'),
(15, 920, '2023-01-28', '2023-02-02', 1, 10, '2023-01-27 10:07:04', '2023-01-27 10:07:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(49, '2019_08_19_000000_create_failed_jobs_table', 1),
(50, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(51, '2023_01_25_012655_create_pelicula_table', 1),
(52, '2023_01_25_133042_create_alquiler_table', 2),
(53, '2023_01_25_133734_create_alquiler_table', 3),
(54, '2023_01_26_002304_create_alquilers_table', 4),
(55, '2023_01_26_033721_create_pelicula_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `precio_unitario` double NOT NULL,
  `genero` varchar(255) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `lanzamiento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `sinopsis`, `precio_unitario`, `genero`, `fecha_estreno`, `image`, `estado`, `lanzamiento`, `created_at`, `updated_at`) VALUES
(5, 'Jung E', 'es una película surcoreana de ciencia ficción escrita y dirigida por Yeon Sang-ho, y protagonizada por Kang Soo-yeon, Kim Hyun-joo y Ryu Kyung-soo.​ Su estreno, programado en principio para 2022 en la plataforma Netflix', 200, 'accion', '2023-01-20', 'img/books/1674794711-Jung E.jpg', 1, 'Nuevos lanzamientos', '2023-01-27 09:45:11', '2023-01-27 09:45:11'),
(6, 'Atenea', 'Horas después de la trágica muerte de su hermano menor en circunstancias inexplicables, las vidas de tres hermanos se ven sumidas en el caos.', 155, 'accion', '2022-09-02', 'img/books/1674794794-Atenea.jpg', 1, 'Peliculas viejas', '2023-01-27 09:46:34', '2023-01-27 09:50:57'),
(7, 'La luz del diablo', 'Una joven monja se encuentra en una batalla por el alma de una niña que está poseída por el mismo demonio que atormentó a su propia madre años antes.', 126, 'terror', '2022-10-26', 'img/books/1674794871-La luz del diablo.jpg', 1, 'Peliculas normales', '2023-01-27 09:47:51', '2023-01-27 09:47:51'),
(8, 'Encanto', 'Una joven colombiana puede ser la última esperanza para su familia, cuando descubre que la magia que rodea a Encanto, un lugar encantado que bendice a los niños con dones únicos, se encuentra en serio peligro.', 322, 'familiar', '2021-11-24', 'img/books/1674794955-Encanto.jpeg', 1, 'Peliculas viejas', '2023-01-27 09:49:15', '2023-01-27 09:49:15'),
(9, 'Lightyear', 'Buzz Lightyear se embarca en una aventura intergaláctica con un grupo de reclutas ambiciosos y su compañero robot. Los amigos tendrán que aprender a trabajar juntos para escapar del malvado Zurg y su ejército de robots.', 299, 'familiar', '2022-06-17', 'img/books/1674795037-Lightyear.jpg', 1, 'Peliculas normales', '2023-01-27 09:50:37', '2023-01-27 09:50:37'),
(10, 'Ant-Man and the Wasp: Quantumania', 'Ant-Man and the Wasp: Quantumania es una próxima película de superhéroes estadounidense basada en los personajes de Marvel Comics,', 184, 'accion', '2023-02-16', 'img/books/1674795167-Quantumania.png', 1, 'Nuevos lanzamientos', '2023-01-27 09:52:47', '2023-01-27 09:52:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$fa9qmz9IAuenYcPJvAYnxutG055VHjJa6KkAJs9Y146m0.2G906Iy', NULL, NULL, NULL, NULL, '2023-01-25 08:11:10', '2023-01-27 09:53:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquilers`
--
ALTER TABLE `alquilers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquilers`
--
ALTER TABLE `alquilers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
