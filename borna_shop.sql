-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 12:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borna_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Male', 'TShirt', '1576924108.jpg', 'active', '2019-12-21 04:28:28', '2019-12-23 05:07:47'),
(3, 'Male', 'erfesrgfv', '1576924151.jpg', 'active', '2019-12-21 04:29:11', '2019-12-21 04:29:11'),
(4, 'Female', 'hdfjj', '1577075915.jpg', 'active', '2019-12-22 22:38:35', '2019-12-22 22:38:35'),
(5, 'Kids', 'wefvv', '1577075930.jpg', 'active', '2019-12-22 22:38:50', '2019-12-22 22:38:50'),
(6, 'Toy', 'rfgrf', '1577075948.jpg', 'active', '2019-12-22 22:39:08', '2019-12-22 22:39:08'),
(7, 'Foods', 'aqdx', '1577080401.jpg', 'active', '2019-12-22 23:53:21', '2019-12-22 23:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_12_21_044041_create_categories_table', 1),
(22, '2019_12_21_044112_create_products_table', 1),
(23, '2019_12_21_044203_create_product_images_table', 1),
(24, '2019_12_21_044233_create_product_colors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `details`, `original_price`, `discount_percentage`, `discount_amount`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'TShirt', 'jjjjhggg', '230', '50%', '200', '345', 'active', '2019-12-22 11:49:27', '2019-12-23 05:09:40'),
(2, 4, 'sharri', 'sdffvd', '2333', '30%', '345', '45646', 'active', '2019-12-22 22:39:48', '2019-12-22 22:39:48'),
(3, 5, 'Shoe', 'wfesfc', '345', '56%', '35', '300', 'active', '2019-12-22 22:40:25', '2019-12-22 22:40:25'),
(4, 6, 'Bat', 'adsf', '400', '30%', '35', '200', 'active', '2019-12-22 22:40:53', '2019-12-22 22:40:53'),
(5, 4, 'chador', 'afregv', '2333', '30%', '35', '45646', 'active', '2019-12-22 23:57:34', '2019-12-22 23:57:34'),
(6, 4, 'qawdse', 'ewafzxsfe', '2333', '30%', '35', '200', 'active', '2019-12-23 00:51:54', '2019-12-23 00:51:54'),
(7, 4, 'qawdse', 'ewafzxsfe', '2333', '30%', '35', '200', 'active', '2019-12-23 00:53:56', '2019-12-23 00:53:56'),
(8, 4, 'Sadxf', 'ert5rg', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:08:01', '2019-12-23 01:08:01'),
(9, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:18:10', '2019-12-23 01:18:10'),
(10, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:18:46', '2019-12-23 01:18:46'),
(11, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:20:00', '2019-12-23 01:20:00'),
(12, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:24:00', '2019-12-23 01:24:00'),
(13, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:24:26', '2019-12-23 01:24:26'),
(14, 5, 'gv vf', 'rffff', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:25:14', '2019-12-23 01:25:14'),
(15, 6, 'y6hyy', 'ttyu', '2333', '30%', '35', '2000', 'active', '2019-12-23 01:29:04', '2019-12-23 01:29:04'),
(16, 7, 'eeeds', '3eeee', '345', '30%', '35', '300', 'active', '2019-12-23 01:29:51', '2019-12-23 01:29:51'),
(17, 4, 'ADXSDD', 'DSDSDS', '2333', NULL, NULL, NULL, 'active', '2019-12-23 03:44:26', '2019-12-23 03:44:26'),
(18, 4, 'trgrtgg', 'ggfg', '2333', '30%', NULL, NULL, 'active', '2019-12-23 04:24:13', '2019-12-23 04:24:13'),
(19, 5, 'rtgftg', 'tgftgf', '2333', '30%', NULL, 'NaN', 'active', '2019-12-23 04:24:39', '2019-12-23 04:24:39'),
(20, 2, 'Sohana Kabir Borna', 'nice product', '2000', '5', '100.00', '1900.00', 'active', '2019-12-23 04:52:47', '2019-12-23 04:52:47'),
(21, 4, 'nssns', 'yyuyjh', '1000', '30', '300.00', '700.00', 'active', '2019-12-23 04:56:10', '2019-12-23 04:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_name`, `created_at`, `updated_at`) VALUES
(1, 11, 'red', NULL, NULL),
(2, 12, 'red', NULL, NULL),
(3, 13, 'red', NULL, NULL),
(4, 14, 'red', NULL, NULL),
(5, 15, 'red', NULL, NULL),
(6, 16, 'red', NULL, NULL),
(7, 16, 'blue', NULL, NULL),
(8, 17, 'blue', NULL, NULL),
(9, 17, 'red', NULL, NULL),
(10, 18, 'red', NULL, NULL),
(11, 21, 'red', NULL, NULL),
(12, 21, 'blue', NULL, NULL),
(13, 21, 'green', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 14, '1577085914.jpg', NULL, NULL),
(2, 15, '1577086144.jpg', NULL, NULL),
(3, 16, '1577086191.jpg', NULL, NULL),
(4, 16, '1577086191.jpg', NULL, NULL),
(5, 17, '1577094266.jpg', NULL, NULL),
(6, 18, '1577096653.jpg', NULL, NULL),
(7, 21, '1577098570.jpg', NULL, NULL),
(8, 21, '1577098570.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohana Kabir Borna', 'borna350@gmail.com', NULL, '$2y$10$kgChp8/tSZHO8LNOZen32uEjGeDXU8iZ.jA9yl9JRy7cMnTTKmyRO', 0, 'VV3t1RMvV6OxMk7hCVnqoAyeZdjrCUc9iDfBZ5idkbtjlfddeqqkojKoCzpX', '2019-12-21 04:10:04', '2019-12-22 23:03:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
