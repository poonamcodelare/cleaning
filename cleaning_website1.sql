-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 02:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `price`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'aut', 10.00, 'kg', '2019-03-25 01:36:30', '2019-03-25 01:36:30'),
(2, 'deserunt', 9.00, 'kg', '2019-03-25 01:36:30', '2019-03-25 01:36:30'),
(3, 'non', 8.00, 'stain', '2019-03-25 01:36:30', '2019-03-25 01:36:30'),
(4, 'ut', 10.00, 'kg', '2019-03-25 01:36:30', '2019-03-25 01:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Randeep', 'randeep.singh@codelare.com', NULL, '$2y$10$bPZwHKU9yVPJZdeTxszzLOa.OfgtGI7fpPcgu0QGNKhs3mMW7y20K', 'R2zBuPvC6gxZNEbwD9PQxV9kOQd3IO1UQDccwQZYXm4nzgf7zwJGZw5l52PL', '2019-06-01 03:19:05', '2019-06-01 03:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'et', 'Voluptatem illo est aut. Itaque est in sequi ut. Qui rerum totam veniam quaerat. Aut sunt et quas autem totam.', 'officia', 0, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(2, 'accusamus', 'Dolore delectus odio minima velit enim libero ut. Vitae non nobis id sint laboriosam natus vel maiores. Omnis quam est sint molestiae ut reiciendis voluptas. Ducimus explicabo rerum error eos.', 'vel', 1, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(3, 'et', 'Beatae alias debitis similique enim asperiores. Ut maxime facilis dignissimos laboriosam. Velit qui quis eius quia eius quia vel. Et ut fugit quae culpa excepturi harum laboriosam.', 'dolor', 1, '2019-03-25 00:08:53', '2019-03-25 00:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tennessee', '2019-03-25 00:15:05', '2019-03-25 00:15:05'),
(2, 'New Jersey', '2019-03-25 00:15:05', '2019-03-25 00:15:05'),
(3, 'South Carolina', '2019-03-25 00:15:05', '2019-03-25 00:15:05'),
(4, 'Iowa', '2019-03-25 00:15:05', '2019-03-25 00:15:05'),
(5, 'North Carolina', '2019-03-25 00:15:05', '2019-03-25 00:15:05'),
(6, 'Hawaii', '2019-03-25 00:15:05', '2019-03-25 00:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2019_03_22_050222_create_locations_table', 2),
(6, '2019_03_25_045144_create_locations_table', 3),
(9, '2014_10_12_000000_create_users_table', 4),
(10, '2014_10_12_100000_create_password_resets_table', 4),
(11, '2019_03_19_084423_create_categories_table', 4),
(12, '2019_03_19_085656_create_services_table', 4),
(13, '2019_03_25_050756_create_locations_table', 4),
(14, '2019_03_25_050810_create_prices_table', 4),
(15, '2019_03_25_064116_create_addons_table', 5),
(16, '2019_03_25_070523_create_addons_table', 6),
(17, '2019_03_26_044457_create_store_addresses_table', 7),
(20, '2019_06_01_054917_create_admins_table', 8),
(22, '2019_06_21_114857_add_number_to_users', 9),
(26, '2019_06_22_090305_add_image_to_users', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('poonam.nayak@codelare.com', '$2y$10$nsfEXlHhNGw9cHjpcPgeJ.4ny5choyYWx.rya/JsnEzCknapce9r6', '2019-06-21 06:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_load` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `service_id`, `location_id`, `amount`, `unit`, `min_load`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 46.00, 'stain', 13, '2019-03-25 00:22:42', '2019-03-25 00:22:42'),
(2, 2, 2, 60.00, 'kg', 9, '2019-03-25 00:22:42', '2019-03-25 00:22:42'),
(3, 6, 1, 64.00, 'kg', 6, '2019-03-25 00:22:42', '2019-03-25 00:22:42'),
(4, 3, 3, 72.00, 'kg', 8, '2019-03-25 00:22:42', '2019-03-25 00:22:42'),
(5, 4, 6, 53.00, 'stain', 13, '2019-03-25 00:22:42', '2019-03-25 00:22:42'),
(6, 2, 5, 54.00, 'stain', 12, '2019-03-25 00:22:42', '2019-03-25 00:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` double NOT NULL,
  `service_discount` double NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `service_name`, `service_image`, `service_description`, `service_price`, `service_discount`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'sed', 'et', 'Similique impedit ut reprehenderit. Nam voluptatem omnis et ipsum. Ea beatae earum aperiam occaecati.', 25.24, 14, 1, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(2, 1, 'sit', 'quia', 'Cumque sit quia quasi accusamus et modi sint possimus. Quis sit cum possimus nemo. Enim inventore dicta sit temporibus voluptatibus. Maiores iusto aut nostrum unde voluptatem.', 85.2, 16, 0, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(3, 2, 'est', 'sed', 'Amet dolores deleniti consequatur officiis cumque rerum. Ut ut eum eum quia quisquam placeat sit. Eaque ullam quasi quibusdam consectetur quae.', 57.31, 13, 0, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(4, 2, 'at', 'fugiat', 'Accusamus unde accusamus dolor et. Deleniti consequatur voluptatem est nobis. Saepe velit voluptas possimus quod eum enim.', 66.29, 19, 0, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(5, 3, 'totam', 'minus', 'Iure ab aut pariatur tenetur maxime tenetur hic. Quam molestiae est vero. Fugiat ipsam quasi aspernatur.', 39.51, 9, 0, '2019-03-25 00:08:53', '2019-03-25 00:08:53'),
(6, 3, 'occaecati', 'et', 'Neque facilis magnam nihil facilis. Vel eum sint eligendi totam. Quisquam labore sit consequatur asperiores aut nihil. Perspiciatis rerum quod pariatur. Libero aut omnis animi aut.', 65.28, 13, 1, '2019-03-25 00:08:53', '2019-03-25 00:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `store_addresses`
--

CREATE TABLE `store_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_addresses`
--

INSERT INTO `store_addresses` (`id`, `location_id`, `address`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 4, '58119 Ward Forks Suite 939\nLake Eden, UT 85103-6301', '35961', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(2, 2, '55408 Ezequiel Court\nTillmantown, OH 10266-9077', '43611', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(3, 4, '8095 Myah Points Suite 866\nSouth Nicholas, GA 53003', '14096-1438', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(4, 5, '787 Graham Rest\nNew Hortenseville, KY 65941', '69088', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(5, 1, '2503 Breitenberg Junction Suite 292\nNorth Sofia, MA 18484', '23455-9003', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(6, 3, '6830 Bernier Bridge Suite 869\nShanahanstad, WA 67441-5847', '81229', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(7, 2, '80736 Candice Orchard\nEast Pollyfort, WY 28983-5883', '19783', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(8, 3, '462 Stanton Village Apt. 668\nNorth Edmund, WV 33340', '45146-4664', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(9, 5, '3771 Wuckert Shoal Suite 103\nStefanview, UT 57222', '19256-8281', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(10, 1, '2324 Theresia Villages Apt. 108\nNorth Vince, NH 10277', '46009-2145', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(11, 3, '607 Tracey Shores\nGreenhaven, DE 97953-5721', '06815', '2019-03-26 00:47:25', '2019-03-26 00:47:25'),
(12, 2, '66432 Julius Falls Suite 937\nNew Randy, PA 52905-6548', '69046-3511', '2019-03-26 00:47:25', '2019-03-26 00:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `Address`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Randeep virdi', 'randeep.singh@codelare.com', NULL, '$2y$10$QjJI2a2YD1nn0GfWPgKkX.xYfZbrVM6FrKetzaV4Pa67u276dvLtO', '', '', NULL, NULL, '2019-04-09 23:32:12', '2019-04-09 23:32:12'),
(2, 'poonam', 'poonam.nayak@codelare.com', NULL, '$2y$10$Hz26Djogdj8LwqGXibCOLO0Pg8zfWCfdSECrsPeuo6xn73EGJIV82', '', '', NULL, NULL, '2019-06-20 23:36:12', '2019-06-20 23:36:12'),
(3, 'test', 'randeep.singh@codelare.co', NULL, '$2y$10$T.fORwBKAd3IcrRo2/V3deRsJbp8nW07ZEbI53IrIghNrr72QrgjG', '9874563210', 'test', NULL, NULL, '2019-06-21 07:36:45', '2019-06-21 07:36:45'),
(4, 'new', 'newtext@gmail.com', NULL, '$2y$10$gzpLpY9tRSM/SLMi2lYpw.r/hRnehDcMeZoyfHq4tA5Y/FE68zLWO', '6526454632', 'sdjsd', 'avatar-female.png', NULL, '2019-06-22 02:39:02', '2019-06-22 05:53:32'),
(5, 'NEHA', 'neha12@gmail.com', NULL, '$2y$10$MRYwrRt7ZQpQNPwQVS8IKur4bA3QaGQB0SRZ.rWSFylok6BSg89JW', '6284982395', 'sec42', 'avatar-female.png', NULL, '2019-06-22 06:06:09', '2019-06-22 06:08:15'),
(6, 'oopss', 'oops@codelare.com', NULL, '$2y$10$Av2soml.XqUvrTVgwuxTxO0Gk9h/xnoQc6WmTAoHaSIso9CyLrs.y', '6865636363', 'sec45', '1.jpg', NULL, '2019-06-22 06:13:31', '2019-06-22 07:19:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_service_id_foreign` (`service_id`),
  ADD KEY `prices_location_id_foreign` (`location_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_addresses`
--
ALTER TABLE `store_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_address_location_id_foreign` (`location_id`);

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
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store_addresses`
--
ALTER TABLE `store_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prices_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `store_addresses`
--
ALTER TABLE `store_addresses`
  ADD CONSTRAINT `store_address_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
