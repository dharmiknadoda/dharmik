-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'dharmik', 'adi@gmail.com', 'The purpose of feedback in the assessment and learning process is to improve a student performance not put a damper on it\r\nFeedback is any response regarding a student performance or behavior. It can be verbal, written or gestural.', '2024-01-24 10:36:26', '2024-01-24 10:36:26'),
(2, 'adi', 'adi@gmail.com', 'The purpose of feedback in the assessment and learning process is to improve a student performance not put a damper on it\r\nFeedback is any response regarding a student performance or behavior. It can be verbal, written or gestural.', '2024-01-24 10:38:27', '2024-01-24 10:38:27'),
(5, 'ayush', 'adi12@gmail.com', 'improve a student performance not put a damper on itThe purpose of feedback in the assessment and learning process is to improve a student performance not put a damper on it', '2024-01-25 09:18:05', '2024-01-25 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `quantity`, `details`, `date`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Rice', '2000', '5', 'dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil', '2005-11-07', 'dish-1.png', '2024-01-25 04:28:54', '2024-01-25 04:28:54'),
(2, 'Rice noodles with Vegetables', '49', '50', 'Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet', '2005-11-07', 'dish-2.png', '2024-01-25 04:45:15', '2024-01-25 04:45:15'),
(5, 'Rice with peas and vegetables', '500', '500', 'Proin dolor enim, placerat at quam non, mattis placerat nulla. Nulla rhoncus ultricies velit eu tincidunt.', '2005-11-07', 'dish-3.png', '2024-01-25 09:41:17', '2024-01-25 09:41:17'),
(6, 'Rice with peas', '650', '20', 'Nulla rhoncus ultricies velit eu tincidunt. Proin dolor enim, placerat at quam non, mattis placerat nulla.', '2024-01-16', 'dish-1.png', '2024-01-25 09:42:09', '2024-01-25 09:42:09'),
(15, 'Vegetables', '200', '5', 'Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet', '2024-01-07', '01_breakfast.jpg', '2024-01-26 09:21:19', '2024-01-26 09:21:19'),
(16, 'Rice with Vegetables', '798', '10', 'Mauris mollis eget urna in ultrices. Integer a vulputate mi, in venenatis enim.', '2024-01-25', '02_lunch.jpg', '2024-01-26 09:21:50', '2024-01-26 09:21:50'),
(17, 'Rice with peas', '20', '20', 'Proin dolor enim, placerat at quam non, mattis placerat nulla. Nulla rhoncus ultricies velit eu tincidunt.', '2024-01-09', '03_dinner.jpg', '2024-01-26 09:22:22', '2024-01-26 09:22:22'),
(18, 'Vegetables', '205', '10', 'Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet', '2024-01-18', '01_breakfast.jpg', '2024-01-26 09:23:00', '2024-01-26 09:23:00'),
(19, 'Rice noodles with Vegetables', '100', '20', 'Nulla rhoncus ultricies velit eu tincidunt. Proin dolor enim, placerat at quam non, mattis placerat nulla.', '2024-01-26', 'dish-1.png', '2024-01-26 09:29:27', '2024-01-26 09:29:27'),
(20, 'Rice with peas and vegetables', '100', '20', 'Proin dolor enim, placerat at quam non, mattis placerat nulla. Nulla rhoncus ultricies velit eu tincidunt.', '2024-01-11', 'dish-2.png', '2024-01-26 09:29:59', '2024-01-26 09:29:59'),
(21, 'Rice noodles with Vegetables', '10000', '50', 'Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet', '2024-01-18', 'dish-3.png', '2024-01-26 09:30:33', '2024-01-26 09:30:33'),
(22, 'Rice', '200', '52', 'dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil', '2024-01-02', 'dish-1.png', '2024-01-26 09:31:08', '2024-01-26 09:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_24_154417_create_feedback_table', 1),
(6, '2024_01_25_093748_create_food_table', 2),
(7, '2024_01_25_100138_create_user_table', 3),
(8, '2024_01_25_110633_create_order_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `price`, `address`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Rice noodles with Vegetables', '49', '1301 sreenath gardania', '6', '294', '2024-01-26 04:33:13', '2024-01-26 04:33:13'),
(2, 'Rice', '2000', '1101 manki house', '50', '100000', '2024-01-26 04:39:10', '2024-01-26 04:39:10'),
(3, 'Rice', '2000', '1101 manki house', '50', '100000', '2024-01-26 04:40:08', '2024-01-26 04:40:08'),
(4, 'Rice noodles with Vegetables', '49', '1101 shikshapatry', '5', '245', '2024-01-26 04:41:51', '2024-01-26 04:41:51'),
(5, 'Rice noodles with Vegetables', '49', '1101 loyadham', '1', '49', '2024-01-26 05:08:30', '2024-01-26 05:08:30'),
(6, 'Rice', '2000', '1301 sreenath gardania', '60', '120000', '2024-01-26 10:27:25', '2024-01-26 10:27:25'),
(7, 'Rice with Vegetables', '798', '1301 sreenath gardania', '5', '3990', '2024-01-29 03:48:15', '2024-01-29 03:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `date`, `created_at`, `updated_at`) VALUES
(1, 'dharmik', 'adi@gmail.com', '123456', '2024-01-07', '2024-01-25 04:39:54', '2024-01-25 04:39:54'),
(2, 'ayush', 'adi@gmail.com', 'dharmik123', '2024-01-16', '2024-01-25 09:20:03', '2024-01-25 09:20:03'),
(3, 'adi', 'viratkohli@gmail.com', 'qwe123', '2024-01-18', '2024-01-25 09:20:17', '2024-01-25 09:20:17'),
(4, 'dharmik', 'dhaemiknadoda0711@gmail.com', '1q2w3e', '2024-01-12', '2024-01-25 22:17:38', '2024-01-25 22:17:38'),
(5, 'dharmik', 'adi@gmail.com', '123qwe', '2024-01-27', '2024-01-26 02:16:42', '2024-01-26 02:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
