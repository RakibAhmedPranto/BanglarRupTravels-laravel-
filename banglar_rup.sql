-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 04:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banglar_rup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `check_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `title`, `address`, `phone_number`, `email`, `room_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 'rakib Ahmed Pranto', 'jatrabari', '01966853144', 'pranto@gmail.com', 4, '10.5.19', '12.5.19', '2019-04-15 16:29:51', '2019-04-15 16:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'dhaka dhaka', NULL, '2019-04-15 14:19:46', '2019-04-15 14:19:46'),
(2, 'New Dhaka', 'jnsfkjnwej fnkjenfjnen', 1, '2019-04-15 14:20:51', '2019-04-15 14:21:16'),
(3, 'Old Dhaka', 'hbjhfh sdvhgcvsdg hshvcgvhgd', 1, '2019-04-15 14:22:07', '2019-04-15 14:22:07'),
(4, 'khulna', 'njkanncjksjcbjnkjncjnj jnfjkancnja', NULL, '2019-04-15 14:22:22', '2019-04-15 14:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `image`, `discription`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Galaxy', 'Dhaka , Mirpur', NULL, 'Dhaka , Mirpur Dhaka , Mirpur Dhaka , Mirpur Dhaka , Mirpur Dhaka , Mirpur Dhaka , Mirpur', '2019-04-15 14:18:08', '2019-04-15 14:18:08'),
(2, 'Holy Artison', 'Khulna', NULL, 'knjnskjbfhbhdbchsdhjvv hjbchjb dh hjsbdvhjd vhjbsdb', '2019-04-15 14:18:36', '2019-04-15 14:18:36'),
(3, 'Hotel XinXian', 'Chittagong', NULL, 'hhjcvgdvcvgcgh gvghagvagc gavghcgdvcgh gasvcghavsghcv a', '2019-04-15 14:19:24', '2019-04-15 14:19:24');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_02_194916_create_hotels_table', 1),
(4, '2019_04_03_194611_create_catagories_table', 1),
(5, '2019_04_03_194830_create_rooms_table', 1),
(6, '2019_04_03_194854_create_admins_table', 1),
(7, '2019_04_03_201303_create_room_images_table', 1),
(8, '2019_04_15_200228_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbers_room` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `catagory_id`, `hotel_id`, `title`, `discription`, `slug`, `numbers_room`, `price`, `offer_price`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(14, 1, 2, 'room1', 'bbshjbchjsb  bshdbcjsbdh jbcjsdhjbc bdhcbsd bn  j chjsdb', 'room1', 2, 1000, NULL, 0, 1, '2019-04-16 03:14:30', '2019-04-16 03:14:30'),
(15, 2, 1, 'room2', 'hbhjbcjhbd hbhjchjsd bhjbc jhsb hbchjbdshj cb hjb hjcdbshcb  b hdbchjdbd', 'room2', 2, 1200, NULL, 0, 1, '2019-04-16 03:15:51', '2019-04-16 03:15:51'),
(16, 4, 3, 'room3', 'njcnsdj jncjksdkj jknsjkdb vkjsd  jdjk sdk j  kjcbsdn', 'room3', 3, 2000, NULL, 0, 1, '2019-04-16 03:17:30', '2019-04-16 03:17:30'),
(17, 2, 1, 'room4', 'bhbdhcb hbdjhc hbc sdhjb h hjcbsdjh h hj bsc sb j h vshb jvbsb', 'room4', 2, 1500, NULL, 0, 1, '2019-04-16 03:18:37', '2019-04-16 03:18:37'),
(18, 3, 1, 'room5', 'jbhbhv jbvhbdvb vjbhdvbv sdjk bvh bsdkv', 'room5', 3, 1200, NULL, 0, 1, '2019-04-16 03:23:21', '2019-04-16 03:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`id`, `room_id`, `image`, `created_at`, `updated_at`) VALUES
(34, 14, '394145750.jpg', '2019-04-16 03:14:30', '2019-04-16 03:14:30'),
(35, 14, '1293565154.jpg', '2019-04-16 03:14:30', '2019-04-16 03:14:30'),
(36, 14, '844504565.jpg', '2019-04-16 03:14:30', '2019-04-16 03:14:30'),
(37, 15, '1472048964.jpg', '2019-04-16 03:15:51', '2019-04-16 03:15:51'),
(38, 15, '373311212.jpg', '2019-04-16 03:15:52', '2019-04-16 03:15:52'),
(39, 15, '31940559.jpg', '2019-04-16 03:15:52', '2019-04-16 03:15:52'),
(40, 16, '1362092638.jpg', '2019-04-16 03:17:30', '2019-04-16 03:17:30'),
(41, 16, '277320499.jpg', '2019-04-16 03:17:30', '2019-04-16 03:17:30'),
(42, 16, '1172601609.jpg', '2019-04-16 03:17:30', '2019-04-16 03:17:30'),
(43, 17, '350120360.jpg', '2019-04-16 03:18:37', '2019-04-16 03:18:37'),
(44, 17, '36085355.jpg', '2019-04-16 03:18:37', '2019-04-16 03:18:37'),
(45, 17, '732548448.jpg', '2019-04-16 03:18:37', '2019-04-16 03:18:37'),
(46, 18, '1475842371.jpg', '2019-04-16 03:23:21', '2019-04-16 03:23:21'),
(47, 18, '1207667343.jpg', '2019-04-16 03:23:21', '2019-04-16 03:23:21'),
(48, 18, '539322005.jpg', '2019-04-16 03:23:22', '2019-04-16 03:23:22');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wwerety', 'pranto@gmail.com', NULL, '$2y$10$Ga3lj7VPigG4JV9jQzg0R.EwlYsiL/PcXlCWRa4eorhROx3Bc8AYm', NULL, '2019-04-17 03:31:06', '2019-04-17 03:31:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
