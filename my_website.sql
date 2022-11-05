-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 12:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa_description1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa_description2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa_description3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `institute_name1`, `year1`, `cgpa_description1`, `institute_name2`, `year2`, `cgpa_description2`, `institute_name3`, `year3`, `cgpa_description3`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '20+ Years Experience In this game, Me Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable', NULL, 'Daffodill International University', '2018-2022', 'CGPA: 3.33 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.', 'Thakurgaon Govt. Collage', '2015-2017', 'GPA: 4.08 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.', 'Mollapara High School', '2015', 'GPA: 5.00 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.', '2022-11-01 09:14:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(1, '4', 'Programming Language', 'upload/blog/1748643510777270.webp', 'home,tech', '<p>hello mim</p>', '2022-11-05 02:20:05', NULL),
(2, '2', 'Achieving', 'upload/blog/1748645213187059.jpg', 'home,tech', '<p>efasd</p>', '2022-11-05 02:47:08', NULL),
(4, '3', 'HTML Title', 'upload/blog/1748645261692809.jpg', 'home,tech', '<p>dfsadf</p>', '2022-11-05 02:47:54', NULL),
(5, '5', 'this is tezt', 'upload/blog/1748645297038917.jpg', 'home,tech', '<p>aCS</p>', '2022-11-05 02:48:28', NULL),
(6, '4', 'this is tezt', 'upload/blog/1748645336304758.jpg', 'home,tech', '<p>aCS</p>', '2022-11-05 02:49:05', NULL),
(7, '6', 'this is tezt zbd dn', 'upload/blog/1748645894959547.jpg', 'home,tech', '<p>ASDF</p>', '2022-11-05 02:57:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2022-11-01 09:14:04', '2022-11-05 03:12:41'),
(2, 'HTML', '2022-11-01 09:14:04', '2022-11-05 03:12:50'),
(3, 'C ++', '2022-11-01 09:14:04', '2022-11-05 03:12:58'),
(4, 'Python', '2022-11-01 09:14:04', '2022-11-05 03:13:06'),
(5, 'Js', '2022-11-01 09:14:04', '2022-11-05 03:13:15'),
(6, 'React', '2022-11-01 09:14:04', '2022-11-05 03:13:23'),
(7, 'C', '2022-11-01 09:14:04', '2022-11-05 03:13:28'),
(21, 'PHP', '2022-11-05 04:25:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(252, 'MD. FAHIM ISLAM', 'admin@gmail.com', 'CSE', '1234567890', 'gfn st hrt rfghdfg hfg fgnffrtfth  fgfg fg nf ghsamn adtmafng aedn.', '2022-11-03 03:11:49', NULL),
(253, 'demo', 'demo@gmail.com', 'demo', '1234567890', 'demo', '2022-11-03 08:17:55', NULL),
(254, 'demo1', 'farhad@gmail.com', 'demo1', '12345678', 'asdfk ertyu sdfghjk', '2022-11-03 08:21:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `adress`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '01750770075', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'Level 13, 2 Elizabeth Steereyt set', 'mim@gmail.com', 'facebook.com', 'twitter.com', 'Copyright @ EasyCode 2021 All right Reserved', '2022-11-01 09:14:04', '2022-11-03 08:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_slide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time.', 'I m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences', NULL, 'https://www.youtube.com/watch?v=OpnIHNIp31s&list=RDGMEM916WJxafRUGgOvd6dVJkeQ&index=6', '2022-11-01 09:14:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_19_093624_create_home_slides_table', 1),
(6, '2022_10_19_134441_create_abouts_table', 1),
(7, '2022_10_25_115410_create_multi_images_table', 1),
(8, '2022_10_26_094550_create_portfolios_table', 1),
(9, '2022_10_27_101223_create_blog_categories_table', 1),
(10, '2022_10_27_111501_create_blogs_table', 1),
(11, '2022_10_30_134230_create_footers_table', 1),
(12, '2022_10_31_105522_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `multi_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(1, 'Mobilising resources', 'Earlier this month, Musk proposed to proceed with his original.', 'upload/portfolio/1748465194470742.jpg', '<p>Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.</p>', '2022-11-03 03:04:26', '2022-11-03 03:05:49'),
(2, 'Mobilising resources', 'Meeting challenges and threats', 'upload/portfolio/1748465183595823.jpg', '<p>Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.Earlier this month, Musk proposed to proceed with his original $44 billion bid, calling for an end to the lawsuit by Twitter.</p>', '2022-11-03 03:05:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mim', 'mim@gmail.com', 'Mim', '2022-11-01 09:14:04', '$2y$10$O05PEniXx69oD/2N2IwBVeONfqg.FXXGyurSRseeP4pUf83T7kR/K', NULL, '2022-11-01 09:14:04', NULL),
(2, 'Farhad Islam Mim', 'farhad@gmail.com', 'Farhad', '2022-11-01 09:14:04', '$2y$10$8NaBQ6YC/AZ8jFdkfdVkHOw9L2XawltfISnymJMhBExtJQkXXX6JW', NULL, '2022-11-01 09:14:04', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
