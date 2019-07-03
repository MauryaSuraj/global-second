-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 03:34 PM
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
-- Database: `globalagravaishchamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_listings`
--

CREATE TABLE `bussiness_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `locations` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `opening_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bussiness_listings`
--

INSERT INTO `bussiness_listings` (`id`, `user_id`, `category_id`, `tag_id`, `locations`, `name`, `description`, `image`, `price`, `opening_time`, `closing_time`, `views`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 1, NULL, 'About Elite Club', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '1562146643.jpg', 1300.00, '12', '13', 0, 'https://www.youtube.com/embed/9eY2W7uUkDE', 0, '2019-07-03 04:07:23', '2019-07-03 04:07:23'),
(2, 1, 20, 1, NULL, 'pankaj catering service', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '1562147572.jpeg', 1200.00, '11:00 am', '12 : 00 pm', 0, 'https://www.youtube.com/embed/UCtjnqMLJjc', 0, '2019-07-03 04:22:53', '2019-07-03 04:22:53'),
(3, 1, 25, 1, NULL, 'pankaj real estate', 'Duis congue ante placerat, finibus diam vel, ultricies elit. In hendrerit enim quis nibh aliquam consectetur. Duis congue id est ut pharetra. Vestibulum quis tortor eget ante vestibulum sollicitudin. Curabitur interdum lacus dui, sed volutpat est sollicitudin quis. Duis ex ex, iaculis mattis est nec, imperdiet auctor quam. Nullam malesuada, mi eget feugiat malesuada, nisi enim efficitur risus, vitae auctor metus ex non sem. Vivamus ut semper nunc, nec aliquet ex. Fusce egestas aliquet metus eget vestibulum. Donec pellentesque fringilla tempor. Morbi tincidunt finibus lectus eu placerat. Quisque egestas sagittis metus, molestie tincidunt sem pellentesque ut. Proin non semper ante, vel lobortis purus. Proin scelerisque venenatis ante et elementum.', '1562147714.jpg', 1200.00, '9 : 00 am', '10 : 00 pm', 0, 'https://www.youtube.com/embed/UCtjnqMLJjc', 0, '2019-07-03 04:25:14', '2019-07-03 04:25:14'),
(4, 1, 23, 1, NULL, 'om jewellery', 'Duis congue ante placerat, finibus diam vel, ultricies elit. In hendrerit enim quis nibh aliquam consectetur. Duis congue id est ut pharetra. Vestibulum quis tortor eget ante vestibulum sollicitudin. Curabitur interdum lacus dui, sed volutpat est sollicitudin quis. Duis ex ex, iaculis mattis est nec, imperdiet auctor quam. Nullam malesuada, mi eget feugiat malesuada, nisi enim efficitur risus, vitae auctor metus ex non sem. Vivamus ut semper nunc, nec aliquet ex. Fusce egestas aliquet metus eget vestibulum. Donec pellentesque fringilla tempor. Morbi tincidunt finibus lectus eu placerat. Quisque egestas sagittis metus, molestie tincidunt sem pellentesque ut. Proin non semper ante, vel lobortis purus. Proin scelerisque venenatis ante et elementum.', '1562147903.jpg', 0.00, '9 : 00 am', '9 : 00 pm', 0, 'https://www.youtube.com/embed/uctjnqmljjc', 0, '2019-07-03 04:28:23', '2019-07-03 04:28:23'),
(5, 1, 17, 1, NULL, 'yusuf makeup artist', 'Curabitur facilisis magna et tortor rutrum venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ut aliquet nisi, vitae lobortis leo. Vestibulum ac nunc sodales, pretium diam eu, tempus justo. Curabitur consectetur dolor vitae purus aliquam, ac faucibus enim varius. Integer arcu massa, facilisis et orci nec, mattis fringilla justo. Aliquam ullamcorper, ligula non fermentum porttitor, nunc arcu vehicula neque, hendrerit sodales dui nisl non nibh. Vestibulum mattis dolor enim, at euismod orci imperdiet ut. Mauris iaculis consectetur mi ut imperdiet. Morbi eleifend tincidunt nisi. Aliquam eget tortor sit amet quam vehicula porta. Etiam quis elit a dui commodo rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '1562148061.jpg', 99838.00, '12: 00 pm', '12 : am', 0, 'https://www.youtube.com/embed/uctjnqmljjc', 0, '2019-07-03 04:31:01', '2019-07-03 04:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(18, 'Elite Club', 'Elite Club', '1562141708.png', '2019-07-03 02:45:08', '2019-07-03 02:45:08'),
(19, 'Banquet', 'Banquet', '1562141743.png', '2019-07-03 02:45:43', '2019-07-03 02:45:43'),
(20, 'Caterer', 'Caterer', '1562141761.png', '2019-07-03 02:46:01', '2019-07-03 02:46:01'),
(21, 'Fashion', 'Fashion', '1562141775.png', '2019-07-03 02:46:15', '2019-07-03 02:46:15'),
(22, 'Hotel & Resort', 'Hotel & Resort', '1562141805.png', '2019-07-03 02:46:45', '2019-07-03 02:46:45'),
(23, 'Jewellery', 'Jewellery', '1562141827.png', '2019-07-03 02:47:07', '2019-07-03 02:47:07'),
(24, 'Makeup & artist', 'Makeup & artist', '1562141860.png', '2019-07-03 02:47:40', '2019-07-03 02:47:40'),
(25, 'Real Estate', 'Real Estate', '1562141882.png', '2019-07-03 02:48:02', '2019-07-03 02:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_listings`
--

CREATE TABLE `contact_form_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bussiness_listings_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE `family_member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullaname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `married` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_member` tinyint(1) NOT NULL DEFAULT '0',
  `membership_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_member`
--

INSERT INTO `family_member` (`id`, `fullaname`, `birthdate`, `married`, `is_member`, `membership_id`, `created_at`, `updated_at`) VALUES
(1, 'family member1', '2019-07-02', 'unmarried', 0, 3, '2019-07-02 07:02:09', '2019-07-02 07:02:09'),
(2, 'family member2', '2019-07-02', 'divorced', 0, 3, '2019-07-02 07:03:17', '2019-07-02 07:03:17'),
(3, 'family member 3', '2019-07-13', 'unmarried', 0, 3, '2019-07-02 07:05:45', '2019-07-02 07:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `featured_members`
--

CREATE TABLE `featured_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_low` double NOT NULL,
  `price_high` double NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bussiness_listings_id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` double NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_ships`
--

CREATE TABLE `member_ships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `membership_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_ships`
--

INSERT INTO `member_ships` (`id`, `user_id`, `membership_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'unpaid', '2019-07-02 01:46:42', '2019-07-02 01:46:42'),
(2, 2, 'unpaid', '2019-07-02 01:49:59', '2019-07-02 01:49:59'),
(3, 3, 'unpaid', '2019-07-02 05:37:55', '2019-07-02 05:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `member_ship_fronts`
--

CREATE TABLE `member_ship_fronts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pincode` int(11) DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `caste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `originalplace` text COLLATE utf8mb4_unicode_ci,
  `loksabha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vidhansabha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panchayat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessname` text COLLATE utf8mb4_unicode_ci,
  `officeaddress` text COLLATE utf8mb4_unicode_ci,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celebrity` tinyint(1) DEFAULT NULL,
  `celebrity_details` text COLLATE utf8mb4_unicode_ci,
  `married` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_ship_fronts`
--

INSERT INTO `member_ship_fronts` (`id`, `name`, `address`, `pincode`, `fax`, `mobile`, `email`, `birthdate`, `caste`, `originalplace`, `loksabha`, `vidhansabha`, `panchayat`, `businessname`, `officeaddress`, `category_id`, `celebrity`, `celebrity_details`, `married`, `image`, `user_id`, `family_id`, `created_at`, `updated_at`) VALUES
(1, 'test account', 'some address here', 110091, '9982', '8851121212', 'testaccount@gmail.com', '2019-07-02', 'some caste here', 'some original address here', 'lokshabha here', 'vidhansabha here', 'panchayt', 'office name', 'office address', 'category name', NULL, NULL, NULL, 'profile/WmHwt7zMlmyF79oTxyjBBkFfnrMMJ6S55COVMm97.jpeg', '2', NULL, '2019-07-02 02:50:10', '2019-07-02 02:50:10'),
(2, 'suraj maurya', NULL, NULL, NULL, '75980653', 'mauryasuraj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, '2019-07-02 05:37:55', '2019-07-02 05:37:55');

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
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2019_06_21_051308_create_categories_table', 1),
(49, '2019_06_21_051658_create_profiles_table', 1),
(50, '2019_06_21_051755_create_tags_table', 1),
(51, '2019_06_21_051911_create_locations_table', 1),
(52, '2019_06_21_052018_create_reviews_table', 1),
(53, '2019_06_21_052122_create_images_table', 1),
(54, '2019_06_21_052242_create_contact_form_listings_table', 1),
(55, '2019_06_21_061536_create_bussiness_listings_table', 1),
(56, '2019_06_24_072701_create_featured_members_table', 1),
(57, '2019_06_24_082710_create_contacts_table', 1),
(58, '2019_06_27_104218_create_member_ships_table', 1),
(59, '2019_07_01_061346_create_member_ship_fronts_table', 1),
(60, '2019_07_01_065058_create_family_member_table', 1);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `featured_member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'business', '2019-07-03 04:01:38', '2019-07-03 04:01:38'),
(2, 'Elite Club', 'elite', '2019-07-03 04:01:56', '2019-07-03 04:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `user_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'suraj maurya', 'surajmaurya450@gmail.com', NULL, 'admin', NULL, '$2y$10$LcPcwhSUOZyk/n7bOyWg4eZe5j0uNKv8SC7zw6RlozhTueadgkYhG', NULL, '2019-07-02 01:46:42', '2019-07-02 01:46:42'),
(2, 'test account', 'testaccount@gmail.com', NULL, 'user', NULL, '$2y$10$l68lQ.YG7DVprWA8Z8qdC.opp4RZ2Remsd1M449S.qMZrVK9DssAm', NULL, '2019-07-02 01:49:59', '2019-07-02 01:49:59'),
(3, 'suraj maurya', 'mauryasuraj@gmail.com', NULL, 'user', NULL, '$2y$10$B217Qvt2ofr6En.E.hZRFe.KSLRQjca/wyMiHDu.VocqxxDTBDUC2', NULL, '2019-07-02 05:37:54', '2019-07-02 05:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness_listings`
--
ALTER TABLE `bussiness_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_listings`
--
ALTER TABLE `contact_form_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_member`
--
ALTER TABLE `family_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_members`
--
ALTER TABLE `featured_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_ships`
--
ALTER TABLE `member_ships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_ship_fronts`
--
ALTER TABLE `member_ship_fronts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_ship_fronts_email_unique` (`email`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `bussiness_listings`
--
ALTER TABLE `bussiness_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form_listings`
--
ALTER TABLE `contact_form_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_member`
--
ALTER TABLE `family_member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `featured_members`
--
ALTER TABLE `featured_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_ships`
--
ALTER TABLE `member_ships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_ship_fronts`
--
ALTER TABLE `member_ship_fronts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
