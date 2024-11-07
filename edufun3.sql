-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 01:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun3`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `writer_id`, `views`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Id tempora expedita est.', 'Labore animi dolorem aliquam sapiente ea sit repellendus aut. Animi nihil quia facilis cumque ex. Dolores aperiam quidem ipsa iste et et iure. Iste at molestias assumenda et dolorum fugiat sed.', 6, 2, 'images/course/1.jpg', '2024-02-11 22:55:08', '2024-11-03 10:45:19'),
(8, 'In in cumque aut quis enim totam illum.', 'Numquam sed recusandae explicabo aperiam saepe veritatis. Quae qui eveniet officia dolorem. Quia voluptas ut atque ut sint error error. Voluptate adipisci atque ut consectetur animi natus velit.', 4, 3, 'images/course/2.jpg', '2024-01-15 10:18:23', '2024-11-03 10:21:30'),
(9, 'Ut incidunt provident molestias amet.', 'Ea minus aut cumque culpa cupiditate. Cumque qui est odit. Et tempora expedita esse.', 3, 6, 'images/course/3.jpg', '2024-05-17 18:21:27', '2024-11-03 07:09:37'),
(10, 'Veritatis aut assumenda animi blanditiis ea.', 'Dolor vitae sed aperiam et ex. Maiores animi officia et sint inventore eum.', 3, 5, 'images/course/4.jpg', '2024-01-01 21:00:22', '2024-11-03 10:21:58'),
(11, 'Laudantium ut cum sunt vitae sunt fugiat.', 'Expedita illum optio qui facere pariatur. Repellendus voluptas nulla quam animi.', 5, 5, 'images/course/5.jpg', '2024-01-08 22:59:01', '2024-11-03 07:08:17'),
(12, 'Soluta officia dolore numquam ducimus voluptas.', 'Est hic et eaque in. Iste explicabo nesciunt quo voluptas. Alias qui quod quaerat dolorum voluptatem voluptatibus.', 5, 2, 'images/course/6.jpg', '2024-06-03 13:03:16', '2024-11-03 06:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `created_at`, `updated_at`) VALUES
(1, 'Data Science', NULL, NULL),
(2, 'Network Security', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `category_id`, `writer_id`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Machine Learning', 1, 1, 'This course provides an in-depth exploration of machine learning techniques, including supervised and unsupervised learning. Participants will learn about algorithms such as decision trees, support vector machines, and neural networks. The curriculum includes hands-on projects using real-world datasets to build predictive models, evaluate their performance, and implement them in practical applications. Ideal for aspiring data scientists and professionals seeking to enhance their analytical skills.', 'images/course/1.jpg', '2024-11-03 17:00:00', NULL),
(2, 'Deep Learning', 1, 3, 'Dive into the world of deep learning, where you\'ll discover how to build complex neural networks that power cutting-edge applications like image recognition and natural language processing. This course covers foundational concepts such as convolutional neural networks (CNNs) and recurrent neural networks (RNNs), along with advanced topics like transfer learning and generative adversarial networks (GANs). Expect hands-on experience with frameworks like TensorFlow and Keras, suitable for students with a basic understanding of machine learning.', 'images/course/2.jpg', '2024-11-02 17:00:00', NULL),
(3, 'Natural Language Processing', 1, 5, 'This course introduces the fundamental techniques and tools used in natural language processing (NLP), enabling machines to understand human language. Topics include tokenization, part-of-speech tagging, sentiment analysis, and language modeling. Participants will gain practical experience in building NLP applications, such as chatbots and recommendation systems, using popular libraries like NLTK and SpaCy. Perfect for those interested in linguistics, AI, or software development.', 'images/course/3.jpg', '2024-11-02 17:00:00', NULL),
(4, 'Software Security', 2, 2, 'Explore the principles of software security and learn how to design secure applications from the ground up. This course covers various security practices, including threat modeling, secure coding techniques, and vulnerability assessment. Participants will engage in practical exercises to identify and mitigate security risks in software development. Ideal for software engineers, architects, and IT professionals aiming to enhance their security knowledge.', 'images/course/4.jpg', '2024-11-02 17:00:00', NULL),
(5, 'Network Administration', 2, 4, 'Gain the skills needed to manage and maintain complex networks in this comprehensive network administration course. Topics include network protocols, IP addressing, routing, and switching. Participants will also learn about network security measures, troubleshooting techniques, and how to implement network policies. This course is designed for aspiring network administrators and IT professionals who wish to deepen their understanding of networking principles.', 'images/course/5.jpg', '2024-11-03 17:00:00', NULL),
(6, 'Popular Network Technology', 2, 6, 'Stay ahead of the curve by learning about the latest advancements in network technology. This course covers emerging technologies such as cloud networking, software-defined networking (SDN), and the Internet of Things (IoT). Participants will explore how these technologies impact business operations and security. This course is ideal for IT professionals looking to enhance their knowledge of modern networking solutions.', 'images/course/6.jpg', '2024-11-02 17:00:00', NULL);

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2024_11_02_1_create_categories_table', 1),
(17, '2024_11_02_2_create_writers_table', 1),
(18, '2024_11_02_3_create_articles_table', 1),
(19, '2024_11_02_4_create_courses_table', 1),
(22, '2024_11_03_085808_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('e1fgqAw3xoegxLxjnIUl6c1jXHX3XTyIozSKbXeO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieUtESHpscmg0Q3ZYVTNoa2loWE1CdUlheUZJUTRvTWN6UGNVZFpVQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3B1bGFyP3BhZ2U9MiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTA6InZpZXdfb3JkZXIiO3M6NDoiZGVzYyI7fQ==', 1730655194),
('XTPsvvlFkz93I0K9WSrrRm4Q3iEaiIfJFxyvxgS1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSFBKMG1WREdKczhLaEV1QUhpa2tRZk5vZVdMTzc3Q3pZMlltYXlJZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTA6InZpZXdfb3JkZXIiO3M6NDoiZGVzYyI7fQ==', 1730656104);

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `writerName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writerName`, `image`, `speciality`, `created_at`, `updated_at`) VALUES
(1, 'Balidin Pangestu', 'images/writers/1.jpg', 'Data Science', '2024-11-03 01:29:07', '2024-11-03 01:29:07'),
(2, 'Kezia Nuraini', 'images/writers/2.jpg', 'Network Security', '2024-11-03 01:29:07', '2024-11-03 01:29:07'),
(3, 'Uda Capa Prakasa S.Psi', 'images/writers/3.jpg', 'Data Science', '2024-11-03 01:29:07', '2024-11-03 01:29:07'),
(4, 'Ratih Mardhiyah', 'images/writers/4.jpg', 'Network Security', '2024-11-03 01:29:07', '2024-11-03 01:29:07'),
(5, 'Lidya Aryani', 'images/writers/5.jpg', 'Data Science', '2024-11-03 01:29:07', '2024-11-03 01:29:07'),
(6, 'Lintang Tina Farida', 'images/writers/6.jpg', 'Network Security', '2024-11-03 01:29:07', '2024-11-03 01:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
