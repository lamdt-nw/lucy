-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 02:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `json_information` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_at` datetime DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT 1,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M' COMMENT 'Giới tính M: nam',
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `function_id` bigint(20) UNSIGNED DEFAULT NULL,
  `degree_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `avatar`, `role`, `json_information`, `is_super_admin`, `status`, `remember_token`, `login_at`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`, `gender`, `birthday`, `phone`, `address`, `department_id`, `function_id`, `degree_id`) VALUES
(1, 'Thắng Nguyễn', 'huuthangb2k50@gmail.com', '$2y$10$YAZxnGGJPJfmHh.y1L0tv.eZfz9VvqbzH8EKQKx3q6S0FrlXgOUGS', '/themes/frontend/biz9/images/user.png', 1, NULL, 1, 'active', NULL, '2023-06-07 10:20:56', 1, 1, '2021-09-24 01:48:18', '2023-06-07 03:20:56', 'M', NULL, NULL, NULL, 1, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', '$2y$10$A2ZVxBeus6Xo9UcoHdrAKektpW94OFmGr.duSN3ePepBlidSboPNC', NULL, 1, NULL, 1, 'active', NULL, '2023-12-19 20:34:28', 1, 1, '2022-09-23 09:44:45', '2023-12-19 13:34:28', 'M', NULL, NULL, NULL, 1, NULL, NULL),
(3, 'Nguyen Duong', 'duongnt04@gmail.com', '$2y$10$2pZ/j9fodiWd6w1GeeHh/..tWR7ycGS.9BF17VfNFG4Oh/FnuchGW', NULL, 1, NULL, 0, 'active', NULL, '2023-03-10 09:07:50', 1, 1, '2022-10-03 03:29:02', '2023-03-10 02:07:50', 'M', NULL, NULL, NULL, 1, NULL, NULL),
(4, 'Linh Lê', 'linhle@gmail.com', '$2y$10$s72A27skdsUWrN2A7WD53.GER3nPrLoQvxFWlB3f6VEoARFHx5qPq', NULL, 2, NULL, 0, 'active', NULL, NULL, 1, 1, '2022-10-03 03:33:00', '2022-10-03 03:33:00', 'M', NULL, NULL, NULL, 2, NULL, NULL),
(5, 'Hoàng Long', 'haduong@gmail.com', '$2y$10$UjF3ABKSt0uKl4w3fmQ2iO2rdIHItolkLKmKPi4nML4EF6Q/o0V4S', '/public/data/cms-image/huuthangb2k50/a7b75f828ce04da9a9e45cc8e67a2949%20(1).png', 1, NULL, 0, 'active', NULL, NULL, 1, 1, '2022-10-03 03:33:44', '2022-11-28 03:52:05', 'M', NULL, NULL, NULL, 2, NULL, NULL),
(6, 'NKT LIEN', 'nktlien@gmail.com', '$2y$10$qyYJ2Gw3j7FZIK7o4O4jhOXS7Ot/Gg7TEujLnxkPB1HEbdXPXX04C', NULL, 1, NULL, 0, 'active', NULL, '2023-12-13 13:45:23', 1, 1, '2023-06-07 02:59:31', '2023-12-13 06:45:23', 'M', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_21_090133_create_admins_table', 1),
(5, '2021_09_29_090019_create_tb_options_table', 1),
(6, '2021_09_29_090048_create_tb_logs_table', 1),
(7, '2021_09_29_090107_create_tb_admin_menus_table', 1),
(8, '2021_09_29_090214_create_tb_modules_table', 1),
(9, '2021_09_29_090233_create_tb_module_functions_table', 1),
(10, '2021_09_29_090301_create_tb_roles_table', 1),
(11, '2021_09_29_090402_create_tb_menus_table', 1),
(12, '2021_09_29_090455_create_tb_blocks_table', 1),
(13, '2021_09_29_090509_create_tb_block_contents_table', 1),
(14, '2021_09_29_090709_create_tb_cms_taxonomys_table', 1),
(15, '2021_09_29_090743_create_tb_cms_posts_table', 1),
(16, '2021_10_09_013236_create_tb_pages_table', 1),
(17, '2021_10_26_210129_change_tb_users_table', 1),
(24, '2022_04_25_163138_create_tb_widgets_table', 3),
(25, '2022_04_25_163922_create_tb_components_table', 3),
(26, '2022_04_26_155008_create_tb_widget_configs_table', 4),
(27, '2022_04_26_155035_create_tb_component_configs_table', 4),
(28, '2022_06_02_102255_create_tb_bookings_table', 5),
(29, '2022_02_14_165457_create_tb_contacts_table', 6),
(30, '2022_02_14_170033_create_tb_orders_table', 6),
(31, '2022_02_14_170056_create_tb_order_details_table', 6),
(32, '2022_06_27_162451_create_tb_popups_table', 7),
(33, '2022_08_23_161159_create_tb_affiliates_table', 8),
(34, '2022_08_23_162428_create_tb_affiliates_table', 9),
(35, '2022_08_31_150106_add_column_posts', 10),
(36, '2022_08_31_152204_change_column_posts', 11),
(37, '2022_09_06_105720_change_column_posts_2', 12),
(38, '2022_09_10_103404_create_tb_post_comment_table', 13),
(39, '2022_09_13_095523_change_column_post_comment', 14),
(40, '2022_09_26_153846_created_table_tb_post_history', 15),
(41, '2022_10_07_150551_create_table_royalties', 15),
(42, '2022_10_14_164924_created_table_royalties', 16),
(43, '2022_10_14_165443_create_table_tb_royaltie', 17),
(44, '2022_10_14_175233_create_table_live_reporting', 18),
(45, '2022_10_14_175313_create_table_live_reporting_detail', 18),
(46, '2022_10_24_095513_create_table_online_exchange', 19),
(47, '2022_10_14_175233_create_table_experts', 20),
(48, '2022_10_24_100059_create_table_online_exchange_detail', 20),
(49, '2022_09_06_105720_create_table_resource', 21),
(50, '2022_11_24_141755_create_table_department', 22),
(51, '2022_11_24_141839_create_table_function', 22),
(52, '2022_11_24_141902_create_table_degree', 22),
(53, '2022_11_24_142303_change_column_table_admins', 22),
(54, '2022_11_24_170037_created_table_cms_document', 23),
(55, '2022_11_25_092548_create_table_message', 23),
(56, '2023_01_12_220328_create_table_products', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin_menus`
--

CREATE TABLE `tb_admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `is_check` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `toolbar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_admin_menus`
--

INSERT INTO `tb_admin_menus` (`id`, `parent_id`, `name`, `icon`, `url_link`, `iorder`, `status`, `is_check`, `toolbar`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(3, 10, 'Quản lý người dùng', 'fa fa-user-plus', 'admins', 3, 'active', 'deactive', 'deactive', 1, 1, '2021-09-30 00:38:46', '2022-03-02 12:25:15'),
(5, 10, 'Quản lý nhóm quyền', 'fa fa-users', 'roles', 4, 'active', 'deactive', 'active', 1, 1, '2021-09-30 02:57:11', '2022-03-02 12:25:00'),
(6, 10, 'Quản lý Menu Admin', 'fa fa-tasks', 'admin_menus', 5, 'active', 'deactive', 'deactive', 1, 1, '2021-09-30 14:41:45', '2022-03-02 12:26:32'),
(10, NULL, 'Quản lý hệ thống', 'fa fa-server', NULL, 99, 'active', 'deactive', 'deactive', 1, 1, '2021-10-01 10:10:06', '2022-03-02 12:35:52'),
(13, NULL, 'Quản lý cấu hình', 'fa fa-home', NULL, 98, 'active', 'deactive', 'deactive', 1, 1, '2021-10-02 03:26:41', '2022-03-02 12:35:45'),
(42, 13, 'Quản lý Menu Website', 'fa fa-bars', 'menus', NULL, 'active', 'deactive', 'deactive', 1, 2, '2022-03-02 11:19:53', '2023-12-08 01:27:59'),
(43, 10, 'Khai báo tham số hệ thống', 'fa fa-wrench', 'options', 99, 'active', 'deactive', 'deactive', 1, 2, '2022-03-02 11:20:20', '2023-12-06 14:28:39'),
(44, 13, 'Quản lý hình ảnh hệ thống', 'fa fa-picture-o', 'web_image', NULL, 'active', 'deactive', 'deactive', 1, 1, '2022-03-02 11:23:03', '2022-03-02 12:20:05'),
(45, 13, 'Quản lý thông tin Website', 'fa fa-globe', 'web_information', NULL, 'active', 'deactive', 'deactive', 1, 1, '2022-03-02 11:23:28', '2022-03-02 12:34:25'),
(46, 13, 'Quản lý liên kết MXH', 'fa fa-share-alt-square', 'web_social', NULL, 'active', 'deactive', 'deactive', 1, 1, '2022-03-02 11:23:43', '2022-03-02 12:43:26'),
(51, NULL, 'Quản lý tin', NULL, 'cms_posts', NULL, 'active', 'deactive', NULL, 1, 1, '2022-05-30 01:46:23', '2022-10-26 07:13:15'),
(52, 69, 'Quản lý danh mục / thể loại', 'fa fa-bars', 'cms_taxonomys', 1, 'active', 'deactive', NULL, 1, 1, '2022-05-30 01:46:51', '2023-01-17 07:19:30'),
(53, 51, 'Tin tức', 'fa fa-newspaper-o', 'cms_posts', 1, 'active', 'active', NULL, 1, 1, '2022-05-30 02:56:47', '2023-02-10 07:37:11'),
(55, 51, 'Tin giới thiệu', 'fa fa-twitch', 'introduction', 1, 'active', 'active', NULL, 1, 6, '2022-05-30 02:57:21', '2023-06-27 04:25:51'),
(58, 13, 'Quản lý mã nhúng CSS - JS', NULL, 'web_source', NULL, 'active', 'deactive', NULL, 1, 1, '2022-06-06 19:41:52', '2022-06-06 19:42:21'),
(66, 69, 'Bình luận', 'fa fa-comment', 'comment', 9, 'deactive', 'deactive', NULL, 1, 1, '2022-09-19 04:41:50', '2022-11-28 03:51:08'),
(67, 10, 'Quản lý độc giả', 'fa fa-users', 'users', NULL, 'deactive', 'deactive', NULL, 1, 1, '2022-10-07 04:45:16', '2022-10-28 10:35:37'),
(69, NULL, 'Sản phẩm - Danh mục', 'fa fa-cog', NULL, 1, 'active', 'deactive', NULL, 1, 1, '2022-10-11 07:40:32', '2023-02-10 07:36:50'),
(80, 69, 'Quản lý khối nội dung', 'fa fa-object-group', 'block_contents', 9, 'active', 'deactive', NULL, 1, 1, '2022-10-28 08:47:09', '2023-02-02 10:43:37'),
(84, 69, 'Quản lý sản phẩm', 'fa fa-bitbucket', 'cms_products', NULL, 'deactive', 'deactive', NULL, 1, 2, '2023-01-12 15:24:15', '2023-12-14 03:43:28'),
(85, 10, 'Quản lý blocks', NULL, 'blocks', NULL, 'active', 'deactive', NULL, 1, 1, '2023-03-31 04:22:37', '2023-03-31 04:22:37'),
(88, 51, 'Liên hệ', 'fa fa-calendar', 'contacts', NULL, 'active', 'deactive', NULL, 2, 2, '2023-05-05 03:13:32', '2023-12-19 08:09:57'),
(89, NULL, 'Quản lý dịch vụ', NULL, NULL, NULL, 'deactive', 'deactive', NULL, 2, 2, '2023-05-09 03:53:31', '2023-12-06 14:28:54'),
(90, 89, 'Danh mục dịch vụ', 'fa fa-bars', 'cms_dichvu', NULL, 'active', 'deactive', NULL, 2, 2, '2023-05-09 03:54:41', '2023-05-09 03:55:25'),
(91, 51, 'Quản lý tin dịch vụ', 'fa fa-newspaper-o', 'cms_posts_dichvu', NULL, 'active', 'active', NULL, 2, 6, '2023-05-09 03:54:59', '2023-11-28 14:15:50'),
(92, NULL, 'Quản lý dịch ngôn ngữ', NULL, NULL, NULL, 'active', 'deactive', NULL, 2, 2, '2023-12-06 14:24:15', '2023-12-06 14:24:15'),
(93, 92, 'Quản lý ngôn ngữ', NULL, 'cms_language', 1, 'active', 'deactive', NULL, 2, 2, '2023-12-06 14:24:44', '2023-12-06 14:25:10'),
(94, 92, 'Quản lý bản dịch', NULL, 'cms_translate', 2, 'active', 'deactive', NULL, 2, 2, '2023-12-06 14:24:58', '2023-12-06 14:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blocks`
--

CREATE TABLE `tb_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_config` tinyint(1) NOT NULL DEFAULT 1,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_blocks`
--

INSERT INTO `tb_blocks` (`id`, `name`, `description`, `block_code`, `json_params`, `is_config`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(43, 'Khối nội dung slide', NULL, 'slide', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:03:34', '2023-12-15 07:03:34'),
(44, 'Khối nội dung danh sách dịch vụ', NULL, 'service', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:03:50', '2023-12-15 07:04:03'),
(45, 'Khối nội dung giới thiệu', NULL, 'introduct', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:04:32', '2023-12-15 07:04:32'),
(46, 'Khối nội dung booking', NULL, 'booking', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:05:48', '2023-12-15 07:05:48'),
(47, 'Khối nội dung đánh giá', NULL, 'comment', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:06:27', '2023-12-15 07:06:27'),
(48, 'Khối nội dung hình ảnh nổi bật', NULL, 'photo', NULL, 1, NULL, 'active', 2, 2, '2023-12-15 07:07:03', '2023-12-15 07:07:03'),
(49, 'Khối nội dung câu hỏi - hỏi đáp', NULL, 'question', NULL, 1, NULL, 'active', 2, 2, '2023-12-16 08:13:01', '2023-12-16 08:13:01'),
(50, 'Khối nội dung giới thiệu lý do', NULL, 'why_different', NULL, 1, NULL, 'active', 2, 2, '2023-12-18 03:17:38', '2023-12-18 03:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_block_contents`
--

CREATE TABLE `tb_block_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `link_iframe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_block_contents`
--

INSERT INTO `tb_block_contents` (`id`, `parent_id`, `title`, `brief`, `content`, `block_code`, `json_params`, `image`, `image_background`, `icon`, `url_link`, `url_link_title`, `position`, `system_code`, `iorder`, `status`, `link_iframe`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(171, NULL, '{\"en\":\"Lucy Beauty Studio\"}', '{\"en\":\"Welcome to Lucy Beauty Studio, your ultimate destination for all your beauty needs. We are dedicated to providing exceptional services and helping you look and feel your best.\"}', '{\"en\":null}', 'slide', NULL, NULL, '/public/upload/admin/slide/AdobeStock_548157938.jpg', NULL, '#', '{\"en\":\"Book Now\"}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:11:11', '2023-12-15 07:26:00'),
(172, 171, '{\"en\":\"Lucy Beauty Studio\"}', '{\"en\":\"Welcome to Lucy Beauty Studio, your ultimate destination for all your beauty needs. We are dedicated to providing exceptional services and helping you look and feel your best.\"}', '{\"en\":null}', 'slide', NULL, NULL, '/public/upload/admin/slide/AdobeStock_538843186.jpg', NULL, '#', '{\"en\":\"Book Now\"}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:16:31', '2023-12-15 07:26:05'),
(173, NULL, '{\"en\":\"Our Service\"}', '{\"en\":null}', '{\"en\":null}', 'service', NULL, NULL, '/public/upload/admin/service/flower.png', NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:25:16', '2023-12-15 07:26:11'),
(174, NULL, '{\"en\":\"Lucy Beauty Studio Story\"}', '{\"en\":\"Our highly skilled technicians and services focus on enhancing your natural beauty through the most advanced products and semi-permanent techniques available on the market. Our services include a wide choice of semi \\u2013 permanent makeup options including brow techniques, lash extensions, skin care and tattoos. We also offer Henna brows, brow & lash tinting, brow lamination and waxing services.\"}', '{\"en\":null}', 'introduct', NULL, '/public/upload/admin/intro/intro_1.jpg', '/public/upload/admin/intro/flower.png', NULL, '#', '{\"en\":\"View more\"}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:29:23', '2023-12-15 15:50:05'),
(175, NULL, '{\"en\":\"We are here to help you.\"}', '{\"en\":null}', '{\"en\":null}', 'booking', NULL, NULL, NULL, NULL, '#', '{\"en\":\"BOOK NOW\"}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:31:21', '2023-12-15 07:31:21'),
(176, NULL, '{\"en\":\"What Clients Say\"}', '{\"en\":null}', '{\"en\":null}', 'comment', NULL, NULL, '/public/upload/admin/comment/comment.jpg', NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:33:49', '2023-12-15 07:33:49'),
(177, 176, '{\"en\":\"Kendra Halliday\"}', '{\"en\":\"\\\"Such a wonderful place! I was quite nervous getting lash extensions done for the first time recently. She did an amazing job! The staff i encountered were very sweet, too! I absolutely love my lashes and will 100% be coming back. Highly recommend. Very talented people. Beautiful studio as well :)\\\"\"}', '{\"en\":null}', 'comment', NULL, 'https://lh3.googleusercontent.com/a-/AD_cMMSih465HUnTN3Q3GQ42Rh__xNjg4ECbaSgjiDbLcg=s120-c-c-rp-w64-h64-mo-br100', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:34:23', '2023-12-16 02:56:03'),
(178, 176, '{\"en\":\"Ronni T\"}', '{\"en\":\"\\\"Lucy was beyond sweet and professional. I had gotten Nano Brows done by her and I love, love, love them so much! I have gotten compliments on them and very happy that I don\'t have to do my eyebrows everyday anymore. I 100% recommend her for your eyebrows! You definitely won\'t be disappointed.\\\"\"}', '{\"en\":null}', 'comment', NULL, 'https://lh3.googleusercontent.com/a-/AD_cMMRsPfA_cw4bXW6x313Q342rGGlz0nqnjcDdllHe=s120-c-c-rp-w64-h64-mo-br100', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:34:38', '2023-12-16 02:56:45'),
(179, 176, '{\"en\":\"Emily\"}', '{\"en\":\"\\\"Lucy Beauty Studio is my go-to for all my grooming needs. Their facial and body waxing service is top-notch. The staff is professional and friendly, and they make sure I\'m comfortable throughout the entire process. I always leave feeling fresh and confident.\\\"\"}', '{\"en\":null}', 'comment', NULL, 'https://lh3.googleusercontent.com/a-/AD_cMMRb49ZzkuUS463ukEw4dYkfDfv0ip6OYESC34BQi9Y=s120-c-c-rp-w64-h64-mo-br100', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:34:55', '2023-12-16 02:56:59'),
(180, NULL, '{\"en\":\"Take the tour\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:35:09', '2023-12-15 07:35:09'),
(181, 180, '{\"en\":\"Photo 1\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, '/public/upload/admin/photo/photo1.jpg', NULL, NULL, '#', '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:41:22', '2023-12-15 07:41:22'),
(182, 180, '{\"en\":\"Photo 2\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, '/public/upload/admin/photo/photo2.jpg', NULL, NULL, '#', '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:41:35', '2023-12-15 07:41:35'),
(183, 180, '{\"en\":\"Photo 3\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, '/public/upload/admin/photo/photo3.jpg', NULL, NULL, '#', '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:41:46', '2023-12-15 07:41:46'),
(184, 180, '{\"en\":\"Photo 4\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, '/public/upload/admin/photo/photo4.jpg', NULL, NULL, '#', '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:41:58', '2023-12-15 07:41:58'),
(185, 180, '{\"en\":\"Photo 5\"}', '{\"en\":null}', '{\"en\":null}', 'photo', NULL, '/public/upload/admin/photo/photo5.jpg', NULL, NULL, '#', '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-15 07:42:17', '2023-12-15 07:42:17'),
(186, NULL, '{\"en\":\"Pre-Care & After-Care\"}', '{\"en\":\"*SEND ME A TEXT (703) 269-8459 FOR MORE INFOMATIONS\"}', '{\"en\":null}', 'question', NULL, NULL, '/public/upload/admin/question/PRE-CARE-bg.jpg', NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-16 08:14:08', '2023-12-16 08:14:08'),
(187, 186, '{\"en\":\"PERMANENT MAKEUP IS NOT FOR ANYONE THAT\"}', '{\"en\":null}', '{\"en\":\"<h6><em><strong>Permanent makeup is not for anyone that:<\\/strong><\\/em><\\/h6>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Under 18<\\/li>\\r\\n\\t<li>Is pregnant or nursing.<\\/li>\\r\\n\\t<li>Has diabetes.<\\/li>\\r\\n\\t<li>Has uncontrolled blood pressure or poor general health.<\\/li>\\r\\n\\t<li>Has a Heart condition \\/ Pace Maker.<\\/li>\\r\\n<\\/ul>\"}', 'question', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-16 08:14:37', '2023-12-16 08:14:37'),
(188, 186, '{\"en\":\"WHAT TO EXPECT AT YOUR PMU BROW APPOINTMENT\"}', '{\"en\":null}', '{\"en\":\"<p>The average time required for a procedure is between 1.5 to 3.5 hours, depending on the work needing to be done. A touch-up appointment lasts anywhere from 1-2 hours, depending on the amount of work that needs touching up.<\\/p>\\r\\n\\r\\n<h6>\\u200b<b>A standard appointment will have the following steps:<\\/b><\\/h6>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\u200b<b>Virtual consultation:<\\/b><\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Profile the client:<\\/p>\\r\\n\\r\\n<p>First, I will assess the client\\u2019s lifestyle and taste in eyebrows by text or call.<\\/p>\\r\\n\\r\\n<p>Do you want something bold or natural? Do you wear makeup every day or just special occasions? What face shape do you have? Do you keep the same color hair? Do you change your hair? This interview will help me create the best brows for you.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Check to make sure the client is suitable candidate for PMU&nbsp;<\\/strong><\\/li>\\r\\n<\\/ul>\"}', 'question', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-16 08:15:06', '2023-12-16 08:15:06'),
(189, 186, '{\"en\":\"WHAT TO EXPECT AFTER PMU SERVICES\"}', '{\"en\":null}', '{\"en\":\"<p>Don\\u2019t be concerned that your eyebrows initially appear 20 \\u2013 30% darker and thicker in size then you desire, this can last up to 2 weeks and is all part of the healing process. Your skin is red under the pigment, which causes the color of the pigment to appear darker and as your brows begin to flake they will narrow in size.<\\/p>\"}', 'question', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-16 08:15:29', '2023-12-16 08:15:29'),
(190, 186, '{\"en\":\"\\u1eebaesgrdxthfyju\"}', '{\"en\":\"tfcyjgvkuhbljk\"}', '{\"en\":\"tcfyjgvkubhil;jkml\"}', 'question', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'delete', NULL, 2, 2, '2023-12-16 08:41:06', '2023-12-16 08:41:37'),
(191, 186, '{\"en\":\"Service\"}', '{\"en\":\"ethdz\"}', '{\"en\":\"tdznz\"}', 'question', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'delete', NULL, 2, 2, '2023-12-16 08:41:24', '2023-12-16 08:41:34'),
(192, NULL, '{\"en\":\"Why We Are Different\"}', '{\"en\":null}', '{\"en\":null}', 'why_different', NULL, NULL, NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 03:17:58', '2023-12-18 03:17:58'),
(193, 192, '{\"en\":\"Expertise\"}', '{\"en\":null}', '{\"en\":\"Our beauty studio is staffed by highly skilled staff who have extensive knowledge and experience in their respective fields. From hairstyling to skincare, eyelash extensions and tattooing, you can trust that our team is fully equipped to meet your beauty needs.\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-4.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:54:32', '2023-12-18 09:54:32'),
(194, 192, '{\"en\":\"Personalized Approach\"}', '{\"en\":null}', '{\"en\":\"We believe in providing personalized services tailored to each client\\u2019s unique preferences and requirements. Our beauticians take the time to understand your goals and concerns.\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-11.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:54:53', '2023-12-18 09:54:53'),
(195, 192, '{\"en\":\"Quality Products\"}', '{\"en\":null}', '{\"en\":\"We only use top quality beauty products known for their effectiveness and safety. Whether it\\u2019s a skin care product, a hair care product or a tattoo brand, we are committed to using exceptional and reputable brands that deliver results.\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-9.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:55:11', '2023-12-18 09:55:11'),
(196, 192, '{\"en\":\"Welcoming Atmosphere\"}', '{\"en\":null}', '{\"en\":\"When you enter our beauty studio, you are greeted by a warm and inviting atmosphere. We strive to create a comfortable and relaxing environment where you can relax and enjoy your beauty experience.\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-8.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:57:03', '2023-12-18 10:13:17'),
(197, 192, '{\"en\":\"Comprehensive Services\"}', '{\"en\":null}', '{\"en\":\"Our beauty studio offers a wide range of services to meet all of your beauty needs. From facials and art to tattoo removal and body treatments, we have everything you need to look and feel your best from head to toe\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-10.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:57:27', '2023-12-18 10:13:23'),
(198, 192, '{\"en\":\"Customer Satisfaction\"}', '{\"en\":null}', '{\"en\":\"Customer satisfaction is our top priority. We work extra hard to ensure that every client that leaves our beauty studio feels satisfied and confident in their appearance. Our dedicated team is committed to providing exceptional service and exceeding your expectations.\"}', 'why_different', NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-12.png', NULL, NULL, NULL, '{\"en\":null}', NULL, NULL, NULL, 'active', NULL, 2, 2, '2023-12-18 09:57:45', '2023-12-18 10:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bookings`
--

CREATE TABLE `tb_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bookings`
--

INSERT INTO `tb_bookings` (`id`, `customer_id`, `name`, `email`, `phone`, `address`, `customer_note`, `department_id`, `doctor_id`, `booking_date`, `booking_time`, `admin_note`, `json_params`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Thắng Nguyễn EDU', NULL, '0912 568 999', NULL, NULL, 10, 28, '2022-06-08', '04:00 PM', 'Thử comment', NULL, 'processed', NULL, 1, '2022-06-01 22:26:04', '2022-06-08 02:03:14'),
(2, NULL, 'Thắng Nguyễn EDU', NULL, '0912 568 999', NULL, NULL, 10, 28, '2022-06-02', NULL, NULL, NULL, 'new', NULL, NULL, '2022-06-01 22:26:31', '2022-06-01 22:26:31'),
(3, NULL, 'Thắng Nguyễn EDU', NULL, '0912 568 999', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.', 10, 28, '2022-06-02', NULL, NULL, NULL, 'new', NULL, NULL, '2022-06-01 22:29:25', '2022-06-01 22:29:25'),
(4, NULL, 'Thắng Nguyễn EDU', NULL, '0912 568 999', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.', 10, 28, '2022-06-02', '06:00 PM', NULL, NULL, 'new', NULL, 1, '2022-06-01 22:34:29', '2022-06-08 02:04:26'),
(6, NULL, 'Nguyễn Hữu Thắng', NULL, '098 226 9600', NULL, 'Thử chức năng booking bác sĩ chi tiết', 10, 28, '2022-06-30', '9:30 AM', NULL, NULL, 'new', NULL, NULL, '2022-06-21 01:48:51', '2022-06-21 01:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_dichvu`
--

CREATE TABLE `tb_cms_dichvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `iorder` int(11) DEFAULT NULL,
  `hienthi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `news_position` int(4) DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_document`
--

CREATE TABLE `tb_cms_document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_receive_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_at` datetime DEFAULT NULL COMMENT 'Đọc lần đầu lúc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_document`
--

INSERT INTO `tb_cms_document` (`id`, `department_id`, `admin_created_id`, `admin_receive_id`, `title`, `content`, `date_at`, `created_at`, `updated_at`) VALUES
(9, NULL, 1, 2, 'Thông báo Tổ chức Noel 2022', '<p>Một năm cũ sắp qua, mùa giáng sinh&nbsp;đã tới len lỏi trên các con phố, len lỏi trong từng ngõ ngách, từng hơi thở của cuộc sống.Trải dài khắp Việt Nam và trên toàn thế giới, tháng 12 đâu đâu cũng rộn ràng bởi những khúc ca Giáng &nbsp;sinh&nbsp; vui tươi và ngập tràn màu sắc của mùa Noel, của tuyết phủ trắng xóa, của những nhánh cây thông xanh rực rỡ…Hòa chung không khí mùa Noel đang tràn ngập khắp mọi nơi, Trường Mầm non Happy Kids sẽ tổ chức Chương trình “DECEMBER MELODY” với các tiết mục văn nghệ do các bé yêu của&nbsp; trường biểu diễn Thời gian tổ chức cụ thể như sau:</p><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Thời gian:</strong>&nbsp;15h00 -&nbsp;17h00, thứ Sáu ngày 20&nbsp;tháng 12&nbsp; năm 2019</p><p>*<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chương trình cụ thể như sau:</strong></p><ol><li>Zumba lớp Sun “Jingle Bells”</li><li>Zumba lớp Mercury, Venus1, Venus2 “Baby Shark” Remix</li><li>Biểu diễn giáo cụ âm nhạc lớp Venus1, Venus2 “ Clap along with me”</li><li>Biểu diễn giáo cụ âm nhạc lớp Jupiter “ Tap your Sticks”</li><li>Biểu diễn giáo cụ âm nhạc lớp Sun “ Fur Elise”</li><li>Zumba lớp Jupiter “ We wish you a Merry Christmas”</li></ol><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Địa điểm:</strong>&nbsp;Sân Trường mầm non Happy Kids</p><p>*&nbsp; &nbsp; &nbsp;&nbsp;<strong>Chuẩn bị quà cho bé:&nbsp;</strong>mỗi<strong>&nbsp;</strong>phụ huynh chuẩn bị <i>trang phục Noel và một phần quà</i> cho bé yêu của mình&nbsp; ( Quà đã được gói cẩn thận và có ghi tên bé) và gửi cho giáo viên chủ nhiệm của các lớp, chậm nhất là trước&nbsp;<i>ngày 20/12/2019</i>. Những phần quà này sẽ được Ông già Noel tặng cho các bé yêu trong phần tặng quà của Chương trình “December Melody”</p><p>Tài liệu đính kèm:</p><p><a href=\"/public/data/cms-image/huuthangb2k50/1669139067_doantotnghiep_final.docx\">đồ án tốt nghiệp</a></p><p><a href=\"/public/data/cms-image/huuthangb2k50/%C4%90%E1%BB%81%20%C3%B4n%20luy%E1%BB%87n%20KT%20x%C3%A2y%20l%E1%BA%AFp.pdf\">Tài liệu hướng dẫn</a></p>', '2022-11-28 10:49:12', '2022-11-28 03:21:04', '2022-11-28 03:49:12'),
(10, NULL, 1, 3, 'Thông báo Tổ chức Noel 2022', '<p>Một năm cũ sắp qua, mùa giáng sinh&nbsp;đã tới len lỏi trên các con phố, len lỏi trong từng ngõ ngách, từng hơi thở của cuộc sống.Trải dài khắp Việt Nam và trên toàn thế giới, tháng 12 đâu đâu cũng rộn ràng bởi những khúc ca Giáng &nbsp;sinh&nbsp; vui tươi và ngập tràn màu sắc của mùa Noel, của tuyết phủ trắng xóa, của những nhánh cây thông xanh rực rỡ…Hòa chung không khí mùa Noel đang tràn ngập khắp mọi nơi, Trường Mầm non Happy Kids sẽ tổ chức Chương trình “DECEMBER MELODY” với các tiết mục văn nghệ do các bé yêu của&nbsp; trường biểu diễn Thời gian tổ chức cụ thể như sau:</p><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Thời gian:</strong>&nbsp;15h00 -&nbsp;17h00, thứ Sáu ngày 20&nbsp;tháng 12&nbsp; năm 2019</p><p>*<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chương trình cụ thể như sau:</strong></p><ol><li>Zumba lớp Sun “Jingle Bells”</li><li>Zumba lớp Mercury, Venus1, Venus2 “Baby Shark” Remix</li><li>Biểu diễn giáo cụ âm nhạc lớp Venus1, Venus2 “ Clap along with me”</li><li>Biểu diễn giáo cụ âm nhạc lớp Jupiter “ Tap your Sticks”</li><li>Biểu diễn giáo cụ âm nhạc lớp Sun “ Fur Elise”</li><li>Zumba lớp Jupiter “ We wish you a Merry Christmas”</li></ol><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Địa điểm:</strong>&nbsp;Sân Trường mầm non Happy Kids</p><p>*&nbsp; &nbsp; &nbsp;&nbsp;<strong>Chuẩn bị quà cho bé:&nbsp;</strong>mỗi<strong>&nbsp;</strong>phụ huynh chuẩn bị <i>trang phục Noel và một phần quà</i> cho bé yêu của mình&nbsp; ( Quà đã được gói cẩn thận và có ghi tên bé) và gửi cho giáo viên chủ nhiệm của các lớp, chậm nhất là trước&nbsp;<i>ngày 20/12/2019</i>. Những phần quà này sẽ được Ông già Noel tặng cho các bé yêu trong phần tặng quà của Chương trình “December Melody”</p><p>Tài liệu đính kèm:</p><p><a href=\"/public/data/cms-image/huuthangb2k50/1669139067_doantotnghiep_final.docx\">đồ án tốt nghiệp</a></p><p><a href=\"/public/data/cms-image/huuthangb2k50/%C4%90%E1%BB%81%20%C3%B4n%20luy%E1%BB%87n%20KT%20x%C3%A2y%20l%E1%BA%AFp.pdf\">Tài liệu hướng dẫn</a></p>', NULL, '2022-11-28 03:21:04', '2022-11-28 03:21:04'),
(11, NULL, 1, 4, 'Thông báo Tổ chức Noel 2022', '<p>Một năm cũ sắp qua, mùa giáng sinh&nbsp;đã tới len lỏi trên các con phố, len lỏi trong từng ngõ ngách, từng hơi thở của cuộc sống.Trải dài khắp Việt Nam và trên toàn thế giới, tháng 12 đâu đâu cũng rộn ràng bởi những khúc ca Giáng &nbsp;sinh&nbsp; vui tươi và ngập tràn màu sắc của mùa Noel, của tuyết phủ trắng xóa, của những nhánh cây thông xanh rực rỡ…Hòa chung không khí mùa Noel đang tràn ngập khắp mọi nơi, Trường Mầm non Happy Kids sẽ tổ chức Chương trình “DECEMBER MELODY” với các tiết mục văn nghệ do các bé yêu của&nbsp; trường biểu diễn Thời gian tổ chức cụ thể như sau:</p><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Thời gian:</strong>&nbsp;15h00 -&nbsp;17h00, thứ Sáu ngày 20&nbsp;tháng 12&nbsp; năm 2019</p><p>*<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chương trình cụ thể như sau:</strong></p><ol><li>Zumba lớp Sun “Jingle Bells”</li><li>Zumba lớp Mercury, Venus1, Venus2 “Baby Shark” Remix</li><li>Biểu diễn giáo cụ âm nhạc lớp Venus1, Venus2 “ Clap along with me”</li><li>Biểu diễn giáo cụ âm nhạc lớp Jupiter “ Tap your Sticks”</li><li>Biểu diễn giáo cụ âm nhạc lớp Sun “ Fur Elise”</li><li>Zumba lớp Jupiter “ We wish you a Merry Christmas”</li></ol><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Địa điểm:</strong>&nbsp;Sân Trường mầm non Happy Kids</p><p>*&nbsp; &nbsp; &nbsp;&nbsp;<strong>Chuẩn bị quà cho bé:&nbsp;</strong>mỗi<strong>&nbsp;</strong>phụ huynh chuẩn bị <i>trang phục Noel và một phần quà</i> cho bé yêu của mình&nbsp; ( Quà đã được gói cẩn thận và có ghi tên bé) và gửi cho giáo viên chủ nhiệm của các lớp, chậm nhất là trước&nbsp;<i>ngày 20/12/2019</i>. Những phần quà này sẽ được Ông già Noel tặng cho các bé yêu trong phần tặng quà của Chương trình “December Melody”</p><p>Tài liệu đính kèm:</p><p><a href=\"/public/data/cms-image/huuthangb2k50/1669139067_doantotnghiep_final.docx\">đồ án tốt nghiệp</a></p><p><a href=\"/public/data/cms-image/huuthangb2k50/%C4%90%E1%BB%81%20%C3%B4n%20luy%E1%BB%87n%20KT%20x%C3%A2y%20l%E1%BA%AFp.pdf\">Tài liệu hướng dẫn</a></p>', NULL, '2022-11-28 03:21:04', '2022-11-28 03:21:04'),
(12, NULL, 1, 5, 'Thông báo Tổ chức Noel 2022', '<p>Một năm cũ sắp qua, mùa giáng sinh&nbsp;đã tới len lỏi trên các con phố, len lỏi trong từng ngõ ngách, từng hơi thở của cuộc sống.Trải dài khắp Việt Nam và trên toàn thế giới, tháng 12 đâu đâu cũng rộn ràng bởi những khúc ca Giáng &nbsp;sinh&nbsp; vui tươi và ngập tràn màu sắc của mùa Noel, của tuyết phủ trắng xóa, của những nhánh cây thông xanh rực rỡ…Hòa chung không khí mùa Noel đang tràn ngập khắp mọi nơi, Trường Mầm non Happy Kids sẽ tổ chức Chương trình “DECEMBER MELODY” với các tiết mục văn nghệ do các bé yêu của&nbsp; trường biểu diễn Thời gian tổ chức cụ thể như sau:</p><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Thời gian:</strong>&nbsp;15h00 -&nbsp;17h00, thứ Sáu ngày 20&nbsp;tháng 12&nbsp; năm 2019</p><p>*<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chương trình cụ thể như sau:</strong></p><ol><li>Zumba lớp Sun “Jingle Bells”</li><li>Zumba lớp Mercury, Venus1, Venus2 “Baby Shark” Remix</li><li>Biểu diễn giáo cụ âm nhạc lớp Venus1, Venus2 “ Clap along with me”</li><li>Biểu diễn giáo cụ âm nhạc lớp Jupiter “ Tap your Sticks”</li><li>Biểu diễn giáo cụ âm nhạc lớp Sun “ Fur Elise”</li><li>Zumba lớp Jupiter “ We wish you a Merry Christmas”</li></ol><p>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Địa điểm:</strong>&nbsp;Sân Trường mầm non Happy Kids</p><p>*&nbsp; &nbsp; &nbsp;&nbsp;<strong>Chuẩn bị quà cho bé:&nbsp;</strong>mỗi<strong>&nbsp;</strong>phụ huynh chuẩn bị <i>trang phục Noel và một phần quà</i> cho bé yêu của mình&nbsp; ( Quà đã được gói cẩn thận và có ghi tên bé) và gửi cho giáo viên chủ nhiệm của các lớp, chậm nhất là trước&nbsp;<i>ngày 20/12/2019</i>. Những phần quà này sẽ được Ông già Noel tặng cho các bé yêu trong phần tặng quà của Chương trình “December Melody”</p><p>Tài liệu đính kèm:</p><p><a href=\"/public/data/cms-image/huuthangb2k50/1669139067_doantotnghiep_final.docx\">đồ án tốt nghiệp</a></p><p><a href=\"/public/data/cms-image/huuthangb2k50/%C4%90%E1%BB%81%20%C3%B4n%20luy%E1%BB%87n%20KT%20x%C3%A2y%20l%E1%BA%AFp.pdf\">Tài liệu hướng dẫn</a></p>', NULL, '2022-11-28 03:21:04', '2022-11-28 03:21:04'),
(14, 1, 1, 2, 'Chụp ảnh Xuân Quý Mão 2023', '<p>Năm 2019 đã sắp khép lại và xuân Canh Tý đang đến rất gần, bố mẹ nào cũng mong muốn làm những điều tuyệt vời cho bé yêu của mình. Một bộ lịch tết đẹp, kể câu chuyện về bé bằng hình ảnh để tặng người thân, bạn bè của mình, dịp tết Canh Tý sẽ là một ý tưởng thú vị. Đây cũng sẽ là một món quà xuân tuyệt vời mà bố mẹ có thể dành tặng cho các bé yêu của mình.</p><p>Với mong muốn giúp phụ huynh dễ dàng và thuận tiện hơn trong việc tạo ra những bộ lịch đẹp, dễ thương dành tặng cho các bé. Mầm non Happy Kids đã liên hệ với đơn vị làm ảnh lịch chuyên nghiệp- người sẽ ghi lại được những khoảnh khắc và hình ảnh đẹp của bé trong các bộ lịch.</p><p><i><strong>Kế hoạch dự kiến như sau:</strong></i></p><ul><li>Thời gian chụp: thứ Hai, ngày 9/12/2019</li><li>Về đồng phục:</li></ul><p>+ Tất cả các bé mặc đồng phục mùa đông Happy Kids chụp ảnh theo lớp để in lịch tập thể.</p><p>+ Ngoài ra,&nbsp; kính đề nghị Quý Phụ huynh chuẩn bị sẵn 01 bộ quần áo đẹp của các con mà bố mẹ yêu thích để trong ba lô, lúc chụp cô giáo sẽ thay cho con.</p><ul><li>Từng bé sẽ được chụp ảnh cá nhân với đồ gia đình tự chuẩn bị.</li></ul><p>&nbsp;Nhà trường &nbsp;sẽ tặng cho mỗi bé 01 tấm ảnh tập thể lớp để làm kỷ niệm năm học.</p><p>Quý Phụ huynh nào có nhu cầu in thêm ảnh/lịch hay ảnh khung cho con, xin vui lòng liên hệ với văn phòng nhà trường.</p><p>Trân trọng!</p>', '2022-11-28 10:49:33', '2022-11-28 03:25:46', '2022-11-28 03:49:33'),
(15, 1, 1, 3, 'Chụp ảnh Xuân Quý Mão 2023', '<p>Năm 2019 đã sắp khép lại và xuân Canh Tý đang đến rất gần, bố mẹ nào cũng mong muốn làm những điều tuyệt vời cho bé yêu của mình. Một bộ lịch tết đẹp, kể câu chuyện về bé bằng hình ảnh để tặng người thân, bạn bè của mình, dịp tết Canh Tý sẽ là một ý tưởng thú vị. Đây cũng sẽ là một món quà xuân tuyệt vời mà bố mẹ có thể dành tặng cho các bé yêu của mình.</p><p>Với mong muốn giúp phụ huynh dễ dàng và thuận tiện hơn trong việc tạo ra những bộ lịch đẹp, dễ thương dành tặng cho các bé. Mầm non Happy Kids đã liên hệ với đơn vị làm ảnh lịch chuyên nghiệp- người sẽ ghi lại được những khoảnh khắc và hình ảnh đẹp của bé trong các bộ lịch.</p><p><i><strong>Kế hoạch dự kiến như sau:</strong></i></p><ul><li>Thời gian chụp: thứ Hai, ngày 9/12/2019</li><li>Về đồng phục:</li></ul><p>+ Tất cả các bé mặc đồng phục mùa đông Happy Kids chụp ảnh theo lớp để in lịch tập thể.</p><p>+ Ngoài ra,&nbsp; kính đề nghị Quý Phụ huynh chuẩn bị sẵn 01 bộ quần áo đẹp của các con mà bố mẹ yêu thích để trong ba lô, lúc chụp cô giáo sẽ thay cho con.</p><ul><li>Từng bé sẽ được chụp ảnh cá nhân với đồ gia đình tự chuẩn bị.</li></ul><p>&nbsp;Nhà trường &nbsp;sẽ tặng cho mỗi bé 01 tấm ảnh tập thể lớp để làm kỷ niệm năm học.</p><p>Quý Phụ huynh nào có nhu cầu in thêm ảnh/lịch hay ảnh khung cho con, xin vui lòng liên hệ với văn phòng nhà trường.</p><p>Trân trọng!</p>', NULL, '2022-11-28 03:25:46', '2022-11-28 03:25:46'),
(16, 2, 1, 4, 'Chụp ảnh Xuân Quý Mão 2023', '<p>Năm 2019 đã sắp khép lại và xuân Canh Tý đang đến rất gần, bố mẹ nào cũng mong muốn làm những điều tuyệt vời cho bé yêu của mình. Một bộ lịch tết đẹp, kể câu chuyện về bé bằng hình ảnh để tặng người thân, bạn bè của mình, dịp tết Canh Tý sẽ là một ý tưởng thú vị. Đây cũng sẽ là một món quà xuân tuyệt vời mà bố mẹ có thể dành tặng cho các bé yêu của mình.</p><p>Với mong muốn giúp phụ huynh dễ dàng và thuận tiện hơn trong việc tạo ra những bộ lịch đẹp, dễ thương dành tặng cho các bé. Mầm non Happy Kids đã liên hệ với đơn vị làm ảnh lịch chuyên nghiệp- người sẽ ghi lại được những khoảnh khắc và hình ảnh đẹp của bé trong các bộ lịch.</p><p><i><strong>Kế hoạch dự kiến như sau:</strong></i></p><ul><li>Thời gian chụp: thứ Hai, ngày 9/12/2019</li><li>Về đồng phục:</li></ul><p>+ Tất cả các bé mặc đồng phục mùa đông Happy Kids chụp ảnh theo lớp để in lịch tập thể.</p><p>+ Ngoài ra,&nbsp; kính đề nghị Quý Phụ huynh chuẩn bị sẵn 01 bộ quần áo đẹp của các con mà bố mẹ yêu thích để trong ba lô, lúc chụp cô giáo sẽ thay cho con.</p><ul><li>Từng bé sẽ được chụp ảnh cá nhân với đồ gia đình tự chuẩn bị.</li></ul><p>&nbsp;Nhà trường &nbsp;sẽ tặng cho mỗi bé 01 tấm ảnh tập thể lớp để làm kỷ niệm năm học.</p><p>Quý Phụ huynh nào có nhu cầu in thêm ảnh/lịch hay ảnh khung cho con, xin vui lòng liên hệ với văn phòng nhà trường.</p><p>Trân trọng!</p>', NULL, '2022-11-28 03:25:46', '2022-11-28 03:25:46'),
(17, 2, 1, 5, 'Chụp ảnh Xuân Quý Mão 2023', '<p>Năm 2019 đã sắp khép lại và xuân Canh Tý đang đến rất gần, bố mẹ nào cũng mong muốn làm những điều tuyệt vời cho bé yêu của mình. Một bộ lịch tết đẹp, kể câu chuyện về bé bằng hình ảnh để tặng người thân, bạn bè của mình, dịp tết Canh Tý sẽ là một ý tưởng thú vị. Đây cũng sẽ là một món quà xuân tuyệt vời mà bố mẹ có thể dành tặng cho các bé yêu của mình.</p><p>Với mong muốn giúp phụ huynh dễ dàng và thuận tiện hơn trong việc tạo ra những bộ lịch đẹp, dễ thương dành tặng cho các bé. Mầm non Happy Kids đã liên hệ với đơn vị làm ảnh lịch chuyên nghiệp- người sẽ ghi lại được những khoảnh khắc và hình ảnh đẹp của bé trong các bộ lịch.</p><p><i><strong>Kế hoạch dự kiến như sau:</strong></i></p><ul><li>Thời gian chụp: thứ Hai, ngày 9/12/2019</li><li>Về đồng phục:</li></ul><p>+ Tất cả các bé mặc đồng phục mùa đông Happy Kids chụp ảnh theo lớp để in lịch tập thể.</p><p>+ Ngoài ra,&nbsp; kính đề nghị Quý Phụ huynh chuẩn bị sẵn 01 bộ quần áo đẹp của các con mà bố mẹ yêu thích để trong ba lô, lúc chụp cô giáo sẽ thay cho con.</p><ul><li>Từng bé sẽ được chụp ảnh cá nhân với đồ gia đình tự chuẩn bị.</li></ul><p>&nbsp;Nhà trường &nbsp;sẽ tặng cho mỗi bé 01 tấm ảnh tập thể lớp để làm kỷ niệm năm học.</p><p>Quý Phụ huynh nào có nhu cầu in thêm ảnh/lịch hay ảnh khung cho con, xin vui lòng liên hệ với văn phòng nhà trường.</p><p>Trân trọng!</p>', NULL, '2022-11-28 03:25:46', '2022-11-28 03:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_language`
--

CREATE TABLE `tb_cms_language` (
  `id` int(11) NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  `admin_created_id` bigint(20) DEFAULT NULL,
  `admin_updated_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_language`
--

INSERT INTO `tb_cms_language` (`id`, `lang_code`, `title`, `image`, `is_default`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', NULL, 1, 1, 2, 2, '2023-12-06 15:41:20', '2023-12-13 16:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_media`
--

CREATE TABLE `tb_cms_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_coppy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torder` int(11) DEFAULT 1,
  `iorder` int(11) DEFAULT 1,
  `news_position` int(11) DEFAULT 0,
  `number_like` int(11) DEFAULT NULL,
  `number_comment` int(11) DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `number_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `nhuanbut` int(11) DEFAULT 0,
  `aproved_date` datetime DEFAULT current_timestamp(),
  `rating` double(18,2) DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'open',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'tài khoản người dùng',
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iframe_video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_posts`
--

CREATE TABLE `tb_cms_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_coppy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torder` int(11) DEFAULT 1,
  `iorder` int(11) DEFAULT 1,
  `news_position` int(11) DEFAULT 0,
  `number_like` int(11) DEFAULT NULL,
  `number_comment` int(11) DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `number_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `nhuanbut` int(11) DEFAULT 0,
  `aproved_date` datetime DEFAULT current_timestamp(),
  `rating` double(18,2) DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'open',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'tài khoản người dùng',
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iframe_video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_posts`
--

INSERT INTO `tb_cms_posts` (`id`, `taxonomy_id`, `is_type`, `title`, `brief`, `content`, `json_params`, `image`, `image_list`, `image_thumb`, `status`, `author`, `url_coppy`, `url_part`, `torder`, `iorder`, `news_position`, `number_like`, `number_comment`, `number_view`, `number_download`, `nhuanbut`, `aproved_date`, `rating`, `category`, `cms_tag`, `relation`, `comment_status`, `seo_title`, `seo_keyword`, `seo_description`, `user_id`, `admin_updated_id`, `admin_created_id`, `created_at`, `updated_at`, `iframe_video`) VALUES
(704, 125, 'post', '{\"en\":\"Policy\"}', '{\"en\":null}', '{\"en\":\"<p>We understand that life is often unpredictable. We accept cancellation, but we respectfully request at least a 24 \\u2013 hour notice to cancel your appointment.<br \\/>\\r\\nWe reserve the right to charge $50 for any appointments that are missed without notice in 24 hours<\\/p>\\r\\n\\r\\n<p>For the respect of our clients and technicians, if you are more than 15 minutes late, we have to reschedule as our appointments are timed, and back-to-back. If you are more than 15 minutes late without notice, it will be considered a \\u201cno \\u2013 show\\u201d, and a $50 booking fee will be charged at your next visit.<\\/p>\\r\\n\\r\\n<p>$50 Deposits are required when booking for Semi \\u2013 permanent brows &amp; Lip Blush services through e-transfer to my email: info@lucybeauty.ca (please leave your full name and phone number in the note when you e-tranfer)<br \\/>\\r\\nThe deposit will go toward to your total service cost<br \\/>\\r\\nAll deposits are non-refundable and non-transferable, no exception!<\\/p>\\r\\n\\r\\n<p>Thank you for your understanding!<\\/p>\"}', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 'policy', 1, 1, 0, NULL, NULL, '0', '0', 0, '2023-12-17 14:05:44', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-17 07:05:44', '2023-12-17 07:05:44', NULL),
(705, 123, 'intro', '{\"en\":\"Lucy Beauty Studio\"}', '{\"en\":\"YOUR BEAUTY SALON IN OTTAWA \\u2013 GATINEAU REGION\"}', '{\"en\":\"Our highly skilled technicians and services focus on enhancing your natural beauty through the most advanced products and semi-permanent techniques available on the market. Our services include a wide choice of semi \\u2013 permanent makeup options including brow techniques, lash extensions, and advanced skin care. We also offer Henna brows, brow &amp; lash tinting, brow lamination and waxing services.\"}', NULL, '/public/upload/admin/intro/IMG_0385-1.jpg', '', NULL, 'active', NULL, NULL, 'lucy-beauty-studio', 1, NULL, 0, NULL, NULL, '0', '0', 0, '2023-12-18 09:22:19', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-18 02:22:19', '2023-12-18 02:22:19', NULL),
(706, 123, 'intro', '{\"en\":\"About Studio\"}', '{\"en\":null}', '{\"en\":\"Lucy Beauty Studio \\u2013 the center for creating a luxurious image. We make every woman uniquely beautiful! We have a team of professional masters, we work on the highest quality materials and now set the standard for standards of beauty!\"}', NULL, NULL, '/public/upload/admin/intro/intro_list_2.jpg;/public/upload/admin/intro/intro_list_3.jpg;/public/upload/admin/intro/intro_list_1.jpg', NULL, 'active', NULL, NULL, 'about-studio', 1, NULL, 0, NULL, NULL, '0', '0', 0, '2023-12-18 09:44:01', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-18 02:44:01', '2023-12-18 02:46:56', NULL),
(707, 127, 'post', '{\"en\":\"Changes in recent consultancy styles now a days\"}', '{\"en\":\"Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren\\u2019t you can make the changes needed to get the best\"}', '{\"en\":\"<p>Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren\\u2019t you can make the changes needed to get the best results out of your business.<\\/p>\\r\\n\\r\\n<p>These are the concepts that shape our distinctive culture &amp; differentiate us from others. They ture the unique spirit of our Firm guide the behaviors that enable us to deliver the promises we make to our clients and our people.<\\/p>\\r\\n\\r\\n<h4 data-wow-delay=\\\"ms\\\">Immigway Values<\\/h4>\\r\\n\\r\\n<p>At Immigration our culture comes to life through three core values:<\\/p>\\r\\n\\r\\n<p>We seize opportunities to innovate and grow<\\/p>\\r\\n\\r\\n<p>We are one firm with a shared sense of purpose<\\/p>\\r\\n\\r\\n<p>We care about each other and the world around us<\\/p>\\r\\n\\r\\n<p>We guide our clients through difficult issues, bringing our insight and judgment to each situa- tion. Our innovative approaches create original solutions to our clients\\u2019 most complex domes-tic &amp; multi jurisdic tional deals and disputes.<\\/p>\\r\\n\\r\\n<p>By thinking on behalf of our clients every day, we anticipate what they want, provide what they need<br \\/>\\r\\n&amp; build lasting relationships. These are the concept that shape our distinctive culture and differentiate us from others.<\\/p>\\r\\n\\r\\n<p><img alt=\\\"\\\" decoding=\\\"async\\\" height=\\\"771\\\" src=\\\"https:\\/\\/demo.bravisthemes.com\\/immigway\\/wp-content\\/uploads\\/2023\\/10\\/video-blog.jpg\\\" width=\\\"1291\\\" \\/><\\/p>\\r\\n\\r\\n<p>By thinking on behalf of our clients every daywe anticipate what they want provide what they need &amp; build lasting relationships.These are the concepts that shape our distinctive culture &amp; differentiate us from others.<\\/p>\\r\\n\\r\\n<p>Our clients every day wanticipate what they want, provide what they need &amp; build relationships. These are the concepts that shape our distinctive culture &amp; differentiate us from others.<\\/p>\"}', NULL, 'https://demo.bravisthemes.com/immigway/wp-content/uploads/2023/10/Challanges-of-consultating-new-Business-Firms.jpg', NULL, NULL, 'active', NULL, NULL, 'changes-in-recent-consultancy-styles-now-a-days', 1, 1, 0, NULL, NULL, '14', '0', 0, '2023-12-19 09:30:25', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-19 02:30:25', '2023-12-19 13:35:33', NULL),
(708, 127, 'post', '{\"en\":\"Papers you needed for Spouse visa accompanied with work permit\"}', '{\"en\":\"Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren\\u2019t you can make the changes needed to get the best\"}', '{\"en\":\"<p>Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working and which ones aren\\u2019t you can make the changes needed to get the best results out of your business.<\\/p>\\r\\n\\r\\n<p>These are the concepts that shape our distinctive culture &amp; differentiate us from others. They ture the unique spirit of our Firm guide the behaviors that enable us to deliver the promises we make to our clients and our people.<\\/p>\\r\\n\\r\\n<h4 data-wow-delay=\\\"ms\\\">Immigway Values<\\/h4>\\r\\n\\r\\n<p>At Immigration our culture comes to life through three core values:<\\/p>\\r\\n\\r\\n<p>We seize opportunities to innovate and grow<\\/p>\\r\\n\\r\\n<p>We are one firm with a shared sense of purpose<\\/p>\\r\\n\\r\\n<p>We care about each other and the world around us<\\/p>\\r\\n\\r\\n<section data-element_type=\\\"section\\\" data-id=\\\"780ae09\\\">\\r\\n<p><img alt=\\\"\\\" decoding=\\\"async\\\" height=\\\"444\\\" src=\\\"https:\\/\\/demo.bravisthemes.com\\/immigway\\/wp-content\\/uploads\\/2023\\/10\\/image-blog-left.jpg\\\" width=\\\"630\\\" \\/><\\/p>\\r\\n\\r\\n<p><img alt=\\\"\\\" decoding=\\\"async\\\" height=\\\"444\\\" src=\\\"https:\\/\\/demo.bravisthemes.com\\/immigway\\/wp-content\\/uploads\\/2023\\/10\\/image-blog-right.jpg\\\" width=\\\"630\\\" \\/><\\/p>\\r\\n<\\/section>\\r\\n\\r\\n<p>We guide our clients through difficult issues, bringing our insight and judgment to each situa- tion. Our innovative approaches create original solutions to our clients\\u2019 most complex domes-tic &amp; multi jurisdic tional deals and disputes.<\\/p>\\r\\n\\r\\n<p>By thinking on behalf of our clients every day, we anticipate what they want, provide what they need<br \\/>\\r\\n&amp; build lasting relationships. These are the concept that shape our distinctive culture and differentiate us from others.<\\/p>\\r\\n\\r\\n<p><img alt=\\\"\\\" decoding=\\\"async\\\" height=\\\"771\\\" src=\\\"https:\\/\\/demo.bravisthemes.com\\/immigway\\/wp-content\\/uploads\\/2023\\/10\\/video-blog.jpg\\\" width=\\\"1291\\\" \\/><\\/p>\\r\\n\\r\\n<p>By thinking on behalf of our clients every daywe anticipate what they want provide what they need &amp; build lasting relationships.These are the concepts that shape our distinctive culture &amp; differentiate us from others.<\\/p>\\r\\n\\r\\n<p>Our clients every day wanticipate what they want, provide what they need &amp; build relationships. These are the concepts that shape our distinctive culture &amp; differentiate us from others.<\\/p>\"}', NULL, 'https://demo.bravisthemes.com/immigway/wp-content/uploads/2023/10/blog4-740x474.jpg', NULL, NULL, 'active', NULL, NULL, 'papers-you-needed-for-spouse-visa-accompanied-with-work-permit', 1, 1, 0, NULL, NULL, '53', '0', 0, '2023-12-19 09:57:38', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-19 02:57:38', '2023-12-19 13:35:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_posts_dichvu`
--

CREATE TABLE `tb_cms_posts_dichvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_coppy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torder` int(11) DEFAULT 1,
  `iorder` int(11) DEFAULT 1,
  `news_position` int(11) DEFAULT 0,
  `number_like` int(11) DEFAULT NULL,
  `number_comment` int(11) DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `number_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `nhuanbut` int(11) DEFAULT 0,
  `aproved_date` datetime DEFAULT current_timestamp(),
  `rating` double(18,2) DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'open',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'tài khoản người dùng',
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iframe_video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_posts_dichvu`
--

INSERT INTO `tb_cms_posts_dichvu` (`id`, `taxonomy_id`, `is_type`, `title`, `brief`, `content`, `json_params`, `image`, `image_list`, `image_thumb`, `status`, `author`, `url_coppy`, `url_part`, `torder`, `iorder`, `news_position`, `number_like`, `number_comment`, `number_view`, `number_download`, `nhuanbut`, `aproved_date`, `rating`, `category`, `cms_tag`, `relation`, `comment_status`, `seo_title`, `seo_keyword`, `seo_description`, `user_id`, `admin_updated_id`, `admin_created_id`, `created_at`, `updated_at`, `iframe_video`) VALUES
(743, 131, 'post', '{\"en\":\"Introduct\"}', '{\"en\":null}', '{\"en\":\"eafsdgh\"}', NULL, NULL, '/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-11.png;/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-12.png;/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-4.png;/public/upload/admin/why_diffirent/elements-50-spa-line-green-black-icons-EGVMGU-2017-12-07-8.png', NULL, 'active', NULL, NULL, 'introduct', 1, 1, 0, NULL, NULL, '0', '0', 0, '2023-12-19 17:34:19', NULL, NULL, NULL, NULL, 'open', NULL, NULL, NULL, NULL, 2, 2, '2023-12-19 10:34:19', '2023-12-19 10:37:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_profile`
--

CREATE TABLE `tb_cms_profile` (
  `id` int(11) NOT NULL,
  `taxonomy` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `iorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(22) DEFAULT NULL,
  `admin_updated_id` bigint(22) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_taxonomys`
--

CREATE TABLE `tb_cms_taxonomys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `iorder` int(11) DEFAULT NULL,
  `hienthi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `news_position` int(4) DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_taxonomys`
--

INSERT INTO `tb_cms_taxonomys` (`id`, `taxonomy`, `parent_id`, `title`, `url_part`, `brief`, `content`, `json_params`, `is_featured`, `iorder`, `hienthi`, `status`, `news_position`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`, `number_view`) VALUES
(123, 'intro', NULL, '{\"en\":\"About Katy\"}', 'about-katy', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":\"\\/public\\/upload\\/admin\\/intro\\/background_top.png\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, 1, ';0;', 'active', 0, 2, 2, '2023-12-15 09:11:46', '2023-12-18 01:59:58', NULL),
(124, 'service', NULL, '{\"en\":\"Services\"}', 'services', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":\"\\/public\\/upload\\/admin\\/background\\/background_bottom_menu.jpg\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, 2, ';0;', 'active', 0, 2, 2, '2023-12-15 09:19:13', '2023-12-15 09:23:37', NULL),
(125, 'policy', NULL, '{\"en\":\"Policy\"}', 'policy', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":null,\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, 3, ';0;', 'active', 0, 2, 2, '2023-12-15 09:21:26', '2023-12-15 09:24:00', NULL),
(126, 'contact', NULL, '{\"en\":\"Contact\"}', 'contact', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":\"\\/public\\/upload\\/admin\\/background\\/background_bottom_menu2.jpg\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, 4, ';0;', 'active', 0, 2, 2, '2023-12-15 09:22:14', '2023-12-15 09:24:12', NULL),
(127, 'news', NULL, '{\"en\":\"Blog\"}', 'blog', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":\"\\/public\\/upload\\/admin\\/background\\/background_bottom_menu.jpg\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, 5, ';0;', 'active', 0, 2, 2, '2023-12-15 09:22:36', '2023-12-15 09:24:20', NULL),
(128, 'service', 124, '{\"en\":\"t4rwedxhftgnethd\"}', 't4rwedxhftgnethd', NULL, '{\"en\":null}', '{\"image\":null,\"image_background\":null,\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, NULL, ';;', 'delete', 0, 2, 2, '2023-12-15 10:36:26', '2023-12-15 10:37:17', NULL),
(129, 'service', 124, '{\"en\":\"Lash Extensions\"}', 'lash-extensions', NULL, '{\"en\":\"At Lucy Beauty Studio, we take pride in offering truly tailored lash design experience for our customers. First, a consultation between the client with our lash stylist to assess the unique eye shape and personal style. Various lengths, curls and widths of lashes are carefully selected to create the custom lash set for each client. We offer various lash design effects to complement different eye shapes so whether you like natural, glamorous or sexy look, you will be satisfied with your new look. All our lash technicians are experienced and trained extensively, they are meticulous in the lash application to ensure exact symmetry with every applied lash and are passionate to create that stunning look for you.\"}', '{\"image\":\"https:\\/\\/lucybeauty.ca\\/wp-content\\/uploads\\/2023\\/08\\/D68EC5F5-6F00-4840-854D-DBAD250FCD8B-1.jpg\",\"image_background\":\"https:\\/\\/lucybeauty.ca\\/wp-content\\/uploads\\/2023\\/08\\/1DBA00E5-0C43-42E8-B1AE-D174F48EDD1F.jpg\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, NULL, ';;', 'active', 0, 2, 2, '2023-12-15 15:04:51', '2023-12-19 10:12:41', NULL),
(130, 'service', 124, '{\"en\":\"Lip  blush\"}', 'lip-blush', NULL, '{\"en\":\"Lip blush is the hottest lip trend. Lip blush is a semi-permanent tattoo that enhances and softly defines your lips\\u2026\"}', '{\"image\":null,\"image_background\":\"https:\\/\\/lucybeauty.ca\\/wp-content\\/uploads\\/2023\\/08\\/0C1C3388-A890-48FB-B48C-C2EF53F10444-1024x726.png\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, NULL, ';;', 'active', 0, 2, 2, '2023-12-15 15:05:42', '2023-12-15 15:05:42', NULL),
(131, 'service', 124, '{\"en\":\"Lash and Brow Bar\"}', 'lash-and-brow-bar', NULL, '{\"en\":\"Our dedicated team of skilled artists specializes in creating stunning lash extensions and perfectly sculpted brows,\\u2026\"}', '{\"image\":null,\"image_background\":\"https:\\/\\/lucybeauty.ca\\/wp-content\\/uploads\\/2023\\/08\\/0ED6ED0E-81AF-4524-9E08-349C7DDA5F55-1.jpg\",\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 0, NULL, ';;', 'active', 0, 2, 2, '2023-12-15 15:06:45', '2023-12-15 15:06:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_translate`
--

CREATE TABLE `tb_cms_translate` (
  `id` bigint(20) NOT NULL,
  `local` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_param` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) DEFAULT NULL,
  `admin_updated_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cms_translate`
--

INSERT INTO `tb_cms_translate` (`id`, `local`, `json_param`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(15, 'Home', '{\"en\":\"Home\"}', 2, 2, '2023-12-15 09:44:16', '2023-12-15 09:44:16'),
(16, 'Booking now', '{\"en\":\"Book now\"}', 2, 2, '2023-12-15 14:34:56', '2023-12-16 09:30:37'),
(17, 'Services', '{\"en\":\"Services\"}', 2, 2, '2023-12-16 13:44:23', '2023-12-16 13:44:38'),
(18, 'Contact Us', '{\"en\":\"Contact Us\"}', 2, 2, '2023-12-17 06:12:52', '2023-12-17 06:12:52'),
(19, 'Submit', '{\"en\":\"Submit\"}', 2, 2, '2023-12-17 06:29:25', '2023-12-17 06:29:25'),
(20, 'About Us', '{\"en\":\"About Us\"}', 2, 2, '2023-12-18 01:56:39', '2023-12-18 01:56:39'),
(21, 'View more', '{\"en\":\"View more\"}', 2, 2, '2023-12-18 03:02:02', '2023-12-18 03:02:02'),
(22, 'Recent posts', '{\"en\":\"Recent posts\"}', 2, 2, '2023-12-19 03:32:03', '2023-12-19 03:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_components`
--

CREATE TABLE `tb_components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `component_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_components`
--

INSERT INTO `tb_components` (`id`, `component_code`, `parent_id`, `title`, `brief`, `content`, `json_params`, `image`, `image_background`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'menu', NULL, 'Main menu', NULL, NULL, '{\"menu_id\":\"24\"}', NULL, NULL, 1, 'active', 1, 1, '2022-05-04 01:23:05', '2022-08-23 04:01:35'),
(2, 'banner_image', NULL, 'Adv banner', NULL, NULL, NULL, '/data/cms-image/banner/no-banner.jpg', NULL, 2, 'active', 1, 1, '2022-05-04 03:25:30', '2022-05-04 03:25:30'),
(3, 'menu', NULL, 'Primary sidebar', 'Primary sidebar section', NULL, '{\"menu_id\":\"33\"}', NULL, NULL, 3, 'active', 1, 1, '2022-05-19 00:24:44', '2022-05-19 18:38:15'),
(4, 'custom', NULL, 'Footer content', NULL, NULL, NULL, NULL, NULL, 4, 'active', 1, 1, '2022-05-19 08:21:27', '2022-05-19 08:21:27'),
(5, NULL, 2, 'Right banner 1', 'Description to this banner', NULL, '{\"url_link\":\"#\",\"url_link_title\":\"Show now\",\"target\":\"_self\"}', '/data/cms-image/meta-logo-favicon.png', NULL, 5, 'delete', 1, 1, '2022-05-19 21:24:40', '2022-05-19 23:23:36'),
(6, NULL, 2, 'Right banner 1', 'Description to this banner', NULL, '{\"url_link\":\"#\",\"url_link_title\":\"Show now\",\"target\":\"_self\"}', '/data/cms-image/meta-logo-favicon.png', NULL, 1, 'active', 1, 1, '2022-05-19 21:27:07', '2022-05-19 21:27:07'),
(7, NULL, 2, 'Right banner 2', NULL, NULL, '{\"url_link\":\"#\",\"url_link_title\":\"View more\",\"target\":\"_self\"}', '/data/banner/architektura-5.jpg', NULL, 2, 'active', 1, 1, '2022-05-19 23:25:03', '2022-05-19 23:25:03'),
(8, NULL, 2, 'Right banner 3', NULL, NULL, '{\"url_link\":null,\"url_link_title\":null,\"target\":\"_self\"}', '/data/banner/ewx_cslxkaio8su.jpg', NULL, 3, 'active', 1, 1, '2022-05-19 23:27:24', '2022-05-19 23:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_component_configs`
--

CREATE TABLE `tb_component_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_config` tinyint(1) NOT NULL DEFAULT 1,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_component_configs`
--

INSERT INTO `tb_component_configs` (`id`, `name`, `description`, `component_code`, `json_params`, `is_config`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Menu', NULL, 'menu', NULL, 1, 1, 'active', 1, 1, '2022-04-26 02:53:00', '2022-04-26 02:53:00'),
(2, 'Custom', NULL, 'custom', NULL, 1, 2, 'active', 1, 1, '2022-04-26 02:53:17', '2022-04-26 02:53:17'),
(3, 'Banner / Image', NULL, 'banner_image', NULL, 1, 3, 'active', 1, 1, '2022-04-26 02:53:50', '2022-04-26 02:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contacts`
--

CREATE TABLE `tb_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'contact',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_degree`
--

CREATE TABLE `tb_degree` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`id`, `title`, `note`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Phòng đào tạo', NULL, 0, 'active', 1, 1, '2022-11-25 07:57:59', '2022-11-25 07:57:59'),
(2, 'Phòng hành chính', NULL, 0, 'active', 1, 1, '2022-11-25 07:57:59', '2022-11-25 07:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_experts`
--

CREATE TABLE `tb_experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chuyên gia',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ảnh đại diện',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_experts`
--

INSERT INTO `tb_experts` (`id`, `title`, `description`, `image`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(3, 'Vũ Văn Kiên', 'CEO: Công ty TNHH Phần mềm', '/data/avatar/logo.png', 1, 1, '2022-10-24 07:06:54', '2022-10-24 07:06:54'),
(4, 'Nguyễn Trường Giang', 'Chuyên gia tâm lý', '/data/avatar/DSC08910-567-crop-200-112.jpg', 1, 1, '2022-10-24 07:41:57', '2022-10-24 07:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_function`
--

CREATE TABLE `tb_function` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_live_reporting`
--

CREATE TABLE `tb_live_reporting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thành viên viết bài',
  `manage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Người duyệt',
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_live_reporting`
--

INSERT INTO `tb_live_reporting` (`id`, `taxonomy_id`, `title`, `url_part`, `brief`, `image`, `image_thumb`, `content`, `start_date`, `end_date`, `member`, `manage`, `json_params`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 38, 'Trực tuyến khai giảng đầu năm', 'truc-tuyen-khai-giang-dau-nam', 'Trực tuyến khai giảng đầu năm', NULL, NULL, '<p>Đang cập nhật</p>', '2022-10-17 15:00:00', '2022-10-17 19:00:00', ',2,3,', ',4,5,', '{\"seo_title\":\"Tr\\u1ef1c tuy\\u1ebfn khai gi\\u1ea3ng \\u0111\\u1ea7u n\\u0103m\",\"seo_keyword\":\"Tr\\u1ef1c tuy\\u1ebfn khai gi\\u1ea3ng \\u0111\\u1ea7u n\\u0103m\",\"seo_description\":\"Tr\\u1ef1c tuy\\u1ebfn khai gi\\u1ea3ng \\u0111\\u1ea7u n\\u0103m\"}', 'active', 1, 1, '2022-10-17 07:54:34', '2022-10-19 10:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_live_reporting_detail`
--

CREATE TABLE `tb_live_reporting_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `live_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_live_reporting_detail`
--

INSERT INTO `tb_live_reporting_detail` (`id`, `live_id`, `content`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Bình luận bài viết</p>', 'active', 1, 1, '2022-10-17 10:13:41', '2022-10-26 07:27:05'),
(2, 1, '<p>Bình luận trực tuyến, chủ đề khai giảng đầu năm học</p>', 'active', 2, 2, '2022-10-19 10:51:16', '2022-10-19 10:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logs`
--

CREATE TABLE `tb_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url_referer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `params` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logged_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_media_image`
--

CREATE TABLE `tb_media_image` (
  `id` bigint(20) NOT NULL,
  `media_id` bigint(20) DEFAULT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_media_image`
--

INSERT INTO `tb_media_image` (`id`, `media_id`, `link_image`, `status`, `created_at`, `updated_at`) VALUES
(29, 1, '/public/upload/admin/doctor/post-6-1170x658.jpg', 'active', '2023-05-10 02:17:32', '2023-05-10 02:17:32'),
(30, 1, '/public/upload/admin/doctor/post-8-1170x658.jpg', 'active', '2023-05-10 02:17:32', '2023-05-10 02:17:32'),
(31, 1, '/public/upload/admin/doctor/post-6-1170x658.jpg', 'active', '2023-05-10 02:17:32', '2023-05-10 02:17:32'),
(32, 1, '/public/upload/admin/doctor/post-8-1170x658.jpg', 'active', '2023-05-10 02:17:32', '2023-05-10 02:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_media_video`
--

CREATE TABLE `tb_media_video` (
  `id` bigint(20) NOT NULL,
  `media_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menus`
--

CREATE TABLE `tb_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_menus`
--

INSERT INTO `tb_menus` (`id`, `parent_id`, `name`, `description`, `url_link`, `menu_type`, `system_code`, `json_params`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(45, NULL, 'Menu chính', NULL, NULL, 'header', NULL, NULL, 1, 'active', 2, 2, '2023-04-28 07:16:29', '2023-04-28 07:16:29'),
(46, 45, 'Trang chủ', NULL, '/', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 1, 'active', 2, 2, '2023-04-28 07:16:46', '2023-05-17 08:41:48'),
(47, 45, 'Giới thiệu', NULL, '/tin-tuc/gioi-thieu.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 2, 'active', 2, 2, '2023-04-28 07:17:03', '2023-05-17 08:41:48'),
(48, 45, 'Thư viện video', NULL, '/thu-vien/thu-vien-video.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 5, 'active', 2, 2, '2023-04-28 07:17:19', '2023-05-17 08:41:48'),
(50, 45, 'Chuyên khoa', NULL, '/tin-tuc/chuyen-khoa.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 3, 'deactive', 2, 2, '2023-04-28 07:17:51', '2023-05-17 08:41:48'),
(55, 45, 'Dịch vụ khám', NULL, '/dich-vu', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 4, 'active', 2, 2, '2023-04-28 07:19:48', '2023-05-17 08:41:48'),
(56, 55, 'Da liễu thẩm mỹ', NULL, '/dich-vu/da-lieu-tham-my.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 1, 'active', 2, 2, '2023-04-28 07:20:23', '2023-05-17 08:41:48'),
(57, 55, 'Tai mũi họng', NULL, '/dich-vu/tai-mui-hong.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 2, 'active', 2, 2, '2023-04-28 07:20:38', '2023-05-17 08:41:48'),
(62, 45, 'Tin tức', NULL, '/tin-tuc/tin-tuc.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 6, 'active', 2, 2, '2023-04-28 07:23:54', '2023-05-17 08:41:48'),
(65, 45, 'Liên hệ', NULL, '/lien-he', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 7, 'active', 2, 2, '2023-04-28 07:24:47', '2023-05-17 08:41:48'),
(66, 55, 'Tiêm chủng', NULL, '/dich-vu/tiem-chung.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 3, 'active', 2, 2, '2023-05-09 10:37:42', '2023-05-17 08:41:48'),
(67, 55, 'Dinh dưỡng', NULL, '/dich-vu/dinh-duong.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 4, 'active', 2, 2, '2023-05-09 10:37:58', '2023-05-17 08:41:48'),
(68, 55, 'Chuyên khoa sản', NULL, '/dich-vu/chuyen-khoa-san.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 5, 'active', 2, 2, '2023-05-09 10:38:17', '2023-05-17 08:41:48'),
(69, 55, 'Khám sức khỏe định kỳ', NULL, '/dich-vu/kham-suc-khoe-dinh-ky.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 6, 'active', 2, 2, '2023-05-09 10:38:36', '2023-05-17 08:41:48'),
(70, 55, 'Cận lâm sàng - xét nghiệm, siêu âm, X Quang', NULL, '/dich-vu/can-lam-sang-xet-nghiem-sieu-am-x-quang.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 7, 'active', 2, 2, '2023-05-09 10:38:57', '2023-05-17 08:41:48'),
(71, 55, 'Khám bệnh nghề nghiệp', NULL, '/dich-vu/kham-benh-nghe-nghiep.html', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 8, 'active', 2, 2, '2023-05-09 10:39:11', '2023-06-02 02:50:16'),
(74, NULL, 'Menu chính test', NULL, NULL, NULL, NULL, NULL, 2, 'delete', 2, 2, '2023-12-08 03:20:50', '2023-12-11 01:58:36'),
(75, 74, '{\"en\":\"Home\",\"vi\":\"Trang ch\\u1ee7\"}', NULL, '/', NULL, NULL, '{\"icon\":null,\"target\":\"_self\"}', 1, 'active', 2, 2, '2023-12-11 01:43:15', '2023-12-11 01:43:15'),
(76, NULL, 'aaaaaaaaaa', NULL, NULL, 'footer', NULL, NULL, 3, 'delete', 2, 2, '2023-12-11 01:58:14', '2023-12-11 01:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'id_id',
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_receive_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_at` datetime DEFAULT NULL COMMENT 'Đọc lần đầu lúc',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `user_key`, `media`, `content`, `admin_created_id`, `admin_receive_id`, `date_at`, `status`, `created_at`, `updated_at`) VALUES
(1, '1_2', NULL, 'Xin chào', 1, 2, '2022-11-28 15:42:47', 'active', '2022-11-28 08:42:47', '2022-11-28 08:42:47'),
(2, '1_2', NULL, 'Chào bạn. Rất vui được làm quen với bạn', 2, 1, '2022-11-28 15:43:30', 'active', '2022-11-28 08:43:30', '2022-11-28 08:43:30'),
(3, '1_2', 'uploads/huuthangb2k50/1669708748.png', 'cho mình xin số điện thoại của bạn', 1, 2, NULL, 'active', '2022-11-29 07:59:08', '2022-11-29 07:59:08'),
(4, '1_3', '', 'Xin chào Đan Thanh', 1, 3, NULL, 'active', '2022-11-29 08:17:34', '2022-11-29 08:17:34'),
(5, '1_3', '', 'Mong bạn sớm phản hồi', 1, 3, NULL, 'active', '2022-11-29 08:23:43', '2022-11-29 08:23:43'),
(6, '1_4', '', 'Chào Linh Lê', 1, 4, NULL, 'active', '2022-11-29 08:34:24', '2022-11-29 08:34:24'),
(7, '1_4', '', 'Linh lê ơi', 1, 4, NULL, 'active', '2022-11-29 08:36:08', '2022-11-29 08:36:08'),
(8, '1_4', '', 'Chào bạn', 1, 4, NULL, 'active', '2022-11-29 08:39:44', '2022-11-29 08:39:44'),
(9, '1_4', '', 'Mong bạn phản hồi', 1, 4, NULL, 'active', '2022-11-29 08:42:21', '2022-11-29 08:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modules`
--

CREATE TABLE `tb_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_modules`
--

INSERT INTO `tb_modules` (`id`, `module_code`, `name`, `description`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'users', 'Quản lý người dùng', 'Chức năng quản lý người dùng hệ thống website ngoài', 1, 'active', 1, 1, '2021-10-01 05:35:15', '2021-10-01 06:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_module_functions`
--

CREATE TABLE `tb_module_functions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `function_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_module_functions`
--

INSERT INTO `tb_module_functions` (`id`, `module_id`, `function_code`, `name`, `description`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'users.index', 'Xem danh sách', 'Xem danh sách người dùng', 1, 'active', 1, 1, '2021-10-01 09:26:47', '2021-10-01 09:26:47'),
(2, 1, 'users.create', 'Thêm mới', NULL, 2, 'active', 1, 1, '2021-10-01 09:29:02', '2021-10-01 11:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_online_exchange`
--

CREATE TABLE `tb_online_exchange` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thành viên viết bài',
  `manage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Người duyệt',
  `experts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Chuyên gia',
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_online_exchange`
--

INSERT INTO `tb_online_exchange` (`id`, `taxonomy_id`, `title`, `url_part`, `image`, `image_thumb`, `brief`, `content`, `start_date`, `end_date`, `member`, `manage`, `experts`, `json_params`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 39, 'Giao lưu với các chuyên gia hàng đầu', 'giao-luu-voi-cac-chuyen-gia-hang-dau', NULL, NULL, 'Giao lưu với các chuyên gia hàng đầu', '<p>Giao lưu với các chuyên gia hàng đầu</p>', '2022-10-24 14:36:00', '2022-10-25 20:42:00', ',1,2,', ',4,5,', ',3,4,', '{\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 'active', 1, 1, '2022-10-24 07:36:49', '2022-10-25 01:51:36'),
(2, 39, 'Giao lưu trực tuyến: \"Sẵn sàng Kỳ thi tốt nghiệp THPT năm 2022\"', 'giao-luu-truc-tuyen-san-sang-ky-thi-tot-nghiep-thpt-nam-2022', 'https://photo-cms-giaoducthoidai.zadn.vn/w820/Uploaded/2022/rgtzzn/2022-06-06/san-sang-ky-thi-01.jpg', NULL, '“Sẵn sàng Kỳ thi tốt nghiệp THPT năm 2022” là chủ đề giao lưu trực tuyến trên báo Giáo dục và Thời đại điện tử diễn ra từ 9h30 - 10h30 thứ Ba ngày 7/6.', '<p>Chương trình giao lưu có sự tham gia của 2 khách mời:</p><p><strong>Ông Phùng Quốc Lập, Phó Giám đốc Sở Giáo dục và Đào tạo tỉnh Phú Thọ;</strong></p><p><strong>Thầy Lâm Đức Thành, Hiệu trưởng Trường THPT Bùi Hữu Nghĩa (quận Bình Thuỷ, TP Cần Thơ).</strong></p><p>Kỳ thi tốt nghiệp THPT năm 2022 được tổ chức vào các ngày 7,8/7 và cơ bản giữ ổn định như năm 2021. Theo đó, Bộ Giáo dục và Đào tạo chỉ đạo chung; các tỉnh/thành phố trực thuộc Trung ương chủ trì toàn bộ công tác tổ chức thi tại địa phương bảo đảm an toàn, nghiêm túc, chất lượng. Điểm mới căn bản năm nay là việc tổ chức đăng ký dự thi trực tuyến cho các học sinh lớp 12 năm học 2021-2022.</p><p>Hiện nay, công tác chuẩn bị cho Kỳ thi được triển khai tích cực. Bộ Giáo dục và Đào tạo đã ban hành Hướng dẫn tổ chức Kỳ thi. Ban Chỉ đạo cấp quốc gia và Ban Chỉ đạo cấp tỉnh/thành Kỳ thi tốt nghiệp THPT năm 2022 đã được thành lập. Thủ tướng Chính phủ cũng đã ban hành Chỉ thị tăng cường chỉ đạo, phối hợp tổ chức Kỳ thi tốt nghiệp THPT và tuyển sinh đại học, giáo dục nghề nghiệp năm 2022.</p><p>Trên cơ sở những kinh nghiệm đã đạt được trong việc tổ chức Kỳ thi tốt nghiệp THPT năm 2021 trong bối cảnh dịch Covid-19 diễn biến phức tạp, Bộ Giáo dục và Đào tạo đã ban hành phương án tổ chức thi tốt nghiệp THPT năm 2022 cho các học sinh bị ảnh hưởng bởi dịch Covid-19.</p><p>Theo đó, thí sinh thuộc diện F0 có giấy xác nhận do cơ quan có thẩm quyền cấp sẽ được xét đặc cách tốt nghiệp THPT. Trường hợp có nguyện vọng tham dự Kỳ thi, các thí sinh này phải nộp đơn xin dự thi, cam kết tuân thủ các quy định phòng chống, dịch Covid-19, được cha, mẹ hoặc người giám hộ ký xác nhận đồng ý. Các thí sinh này được Hội đồng thi bố trí dự thi tại các phòng thi riêng đáp ứng yêu cầu về phòng, chống dịch Covid-19.</p><p>Thời điểm này, công tác chuẩn bị cho Kỳ thi đang được các địa phương, cơ sở giáo dục chuẩn bị tích cực, với phương châm không để bị động trong mọi tình huống. Các khách mời tham gia giao lưu sẽ chia sẻ những thông tin đáng chú ý xung quanh công tác này.</p><p>Để giao lưu cùng các khách mời, độc giả có thể gửi câu hỏi tới khách mời tại đây, hoặc qua email của Báo Giáo dục và Thời đại: gdtddientu@gmail.com hoặc tương tác qua Fanpage của Báo.</p>', '2022-10-25 08:57:00', '2022-11-30 08:57:00', ',1,2,', ',4,5,', '', '{\"seo_title\":null,\"seo_keyword\":null,\"seo_description\":null}', 'active', 1, 1, '2022-10-25 01:58:28', '2022-11-09 04:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_online_exchange_detail`
--

CREATE TABLE `tb_online_exchange_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exchange_id` bigint(20) UNSIGNED DEFAULT NULL,
  `experts_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL COMMENT 'Trả lời bình luận',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tác giả câu hỏi',
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_online_exchange_detail`
--

INSERT INTO `tb_online_exchange_detail` (`id`, `exchange_id`, `experts_id`, `parent_id`, `author`, `content`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Phùng Văn Hà', 'Bình luận giao lưu trực tuyến', 'active', 1, 1, '2022-10-24 08:09:14', '2022-10-24 08:09:14'),
(2, 1, 3, 1, NULL, '<p>Đang bình luận….</p>', 'active', 1, 1, '2022-10-24 10:23:30', '2022-10-25 02:55:44'),
(3, 1, 4, 1, NULL, '<p>Tôi đồng ý quan điểm với ông Vũ Văn Kiên</p>', 'active', 1, 1, '2022-10-24 11:03:10', '2022-10-25 02:55:36'),
(4, 1, NULL, NULL, 'Văn Thanh', 'Công tác phối hợp trong tổ chức thi tốt nghiệp THPT năm 2022 tại Phú Thọ được triển khai như thế nào?', 'active', NULL, NULL, '2022-10-25 03:01:00', '2022-10-25 03:09:48'),
(5, 1, 4, 4, NULL, '<p>Trước hết, Sở GD&amp;ĐT xây dựng văn bản phối hợp với các sở, ban, ngành, đoàn thể liên quan và ủy ban nhân dân các huyện, thành, thị triển khai những nội dung liên quan đến tổ chức Kỳ thi; đặc biệt quan tâm đến nội dung đảm bảo an ninh, trật tự, an toàn giao thông, vệ sinh, an toàn thực phẩm, phòng, chống dịch bệnh và xây dựng phương án trong tình huống mưa, bão, lũ, lụt, thời tiết bất thường xảy ra,...</p><p>Sở GD&amp;ĐT đồng thời có văn bản phối hợp Công an tỉnh rà soát, xây dựng phương án đảm bảo an toàn, an ninh; phối hợp cử lực lượng tham gia các khâu tổ chức Kỳ thi. Cùng với đó, phối hợp với trường Đại học Hùng Vương kiểm tra, rà soát, chuẩn bị cơ sở vật chất, trang thiết bị và các điều kiện phục vụ các khâu tổ chức Kỳ thi.</p>', 'active', 1, 1, '2022-10-25 08:19:35', '2022-10-25 08:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_options`
--

CREATE TABLE `tb_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_system_param` tinyint(1) DEFAULT 1,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_options`
--

INSERT INTO `tb_options` (`id`, `option_name`, `option_value`, `description`, `is_system_param`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(2, 'information', '{\"site_name\":\"Nobu Beauty\",\"hotline\":\"0969 584 998\",\"phone\":\"0969 584 998\",\"slogan\":null,\"email\":\"info@gmail.com\",\"address\":\"66 Broklyn Golden Street New York. USA\",\"brief\":null,\"copyright\":\"\\u00a9 Copyright 2023 by Themesflat\",\"seo_title\":\"Nobu Beauty\",\"seo_keyword\":null,\"seo_description\":null,\"url_booking\":\"#\"}', 'Các dữ liệu cấu trúc liên quan đến thông tin liên hệ của hệ thống website', 0, 1, 2, '2021-10-01 22:06:00', '2023-12-16 14:27:50'),
(5, 'image', '{\"logo_header\":\"\\/public\\/upload\\/admin\\/logo\\/logo.png\",\"logo_footer\":\"\\/public\\/upload\\/admin\\/logo\\/logo.png\",\"favicon\":\"\\/public\\/upload\\/admin\\/logo\\/logo.png\",\"seo_og_image\":\"\\/public\\/upload\\/admin\\/logo\\/logo.png\"}', 'Danh sách các hình ảnh cấu hình trên hệ thống tại các vị trí', 0, 1, 2, '2021-10-11 02:22:56', '2023-12-15 09:30:58'),
(6, 'social', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/\",\"zalo\":\"https:\\/\\/zalo.me\\/\",\"messenger\":\"https:\\/\\/m.me\\/\",\"twitter\":\"https:\\/\\/m.me\\/\",\"tiktok\":\"https:\\/\\/tiktok.com\",\"instagram\":\"https:\\/\\/www.instagram.com\"}', 'Danh sách các Social network của hệ thống', 0, 1, 2, '2022-02-14 03:35:40', '2023-12-18 10:21:06'),
(7, 'page', '{\r\n\"frontend.home\":  1\r\n}', NULL, 0, 1, 1, '2022-05-26 04:03:52', '2022-06-08 21:03:39'),
(8, 'source_code', '{\"css\":null,\"javascript\":null,\"map\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3724.1052501370496!2d105.85000457515294!3d21.02847428062073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac69f861af3f%3A0x331250d72cd2fa28!2zSOG7kyBHxrDGoW0gKEhvYcyAbiBLacOqzIFtKQ!5e0!3m2!1svi!2s!4v1702735209524!5m2!1svi!2s\\\" width=\\\"360\\\" height=\\\"200\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"><\\/iframe>\",\"fanpage\":null}', NULL, 0, 1, 2, '2022-06-06 19:24:11', '2023-12-16 14:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product',
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`id`, `is_type`, `customer_id`, `name`, `email`, `phone`, `address`, `customer_note`, `admin_note`, `json_params`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'service', NULL, 'Nguyễn Hữu Thắng', 'thangnh.edu@gmail.com', '098 226 9600', NULL, 'Thử chức năng order dịch vụ bắc hà', NULL, NULL, 'new', NULL, NULL, '2022-06-08 20:43:21', '2022-06-08 20:43:21'),
(2, 'service', NULL, 'Nguyễn Dũng', 'huuthangb2k50@gmail.com', '098 11 22 334', NULL, 'Thử đặt dịch vụ', NULL, NULL, 'processed', NULL, 1, '2022-06-09 01:19:49', '2022-06-09 01:59:28'),
(6, 'product', NULL, 'Nguyen Thang', 'huuthangb2k50@gmail.com', '098 226 9600', 'Xuan Khanh, Son Tay, Ha Noi', 'Thu chuc nang', 'Đang xử lý', NULL, 'processing', NULL, 1, '2022-06-17 02:27:34', '2022-06-19 20:00:02'),
(7, 'product', NULL, 'Nguyễn Dũng', NULL, '1900 1570', 'Tây Hồ, HN', NULL, NULL, NULL, 'processed', NULL, 1, '2022-06-17 02:31:11', '2022-06-19 20:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_details`
--

CREATE TABLE `tb_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double(20,2) DEFAULT NULL,
  `discount` double(20,2) DEFAULT NULL,
  `customer_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order_details`
--

INSERT INTO `tb_order_details` (`id`, `order_id`, `item_id`, `quantity`, `price`, `discount`, `customer_note`, `admin_note`, `json_params`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, NULL, NULL, NULL, NULL, '{\"post_type\":\"service\",\"post_link\":\"http:\\/\\/bacha.test\\/dich-vu\\/kham-chua-benh\\/family-planning.html?id=5\"}', NULL, NULL, NULL, '2022-06-08 20:43:21', '2022-06-08 20:43:21'),
(2, 2, 21, 1, NULL, NULL, NULL, NULL, '{\"post_type\":\"service\",\"post_link\":\"http:\\/\\/bacha.test\\/dich-vu\\/kham-chua-benh\\/intensive-care.html?id=21\"}', NULL, NULL, NULL, '2022-06-09 01:19:49', '2022-06-09 01:19:49'),
(4, 6, 35, 2, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 6, 34, 10, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 33, 5, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-06-19 20:37:55'),
(7, 7, 35, 2, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, 34, 10, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 7, 33, 1, 3500000000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pages`
--

CREATE TABLE `tb_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pages`
--

INSERT INTO `tb_pages` (`id`, `name`, `title`, `keyword`, `description`, `content`, `route_name`, `alias`, `json_params`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', NULL, 'Keyword for Home Category Page', 'Description for Home Category Page', 'Content for Home Category Page', 'frontend.home', 'trang-chu', '{\"og_image\":\"\\/data\\/cms-image\\/demo\\/3.jpg\",\"template\":\"home.primary\",\"block_content\":[\"75\",\"74\",\"19\",\"79\",\"80\",\"81\",\"82\",\"83\",\"84\",\"85\",\"93\"]}', 1, 'active', 1, 1, '2022-03-23 02:35:33', '2022-06-06 21:04:55'),
(3, 'Bài viết', NULL, NULL, NULL, NULL, 'frontend.cms.post_category', 'bai-viet', '{\"template\":\"post.category.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 2, 'active', 1, 1, '2022-06-02 04:20:50', '2022-06-02 04:27:43'),
(4, 'Chi tiết bài viết', NULL, NULL, NULL, NULL, 'frontend.cms.post', 'chi-tiet-bai-viet', '{\"template\":\"post.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 3, 'active', 1, 1, '2022-06-02 19:52:10', '2022-06-02 19:52:21'),
(5, 'Gói dịch vụ', NULL, NULL, NULL, NULL, 'frontend.cms.service_category', 'dich-vu', '{\"template\":\"service.category.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 4, 'delete', 1, 1, '2022-06-02 20:48:58', '2022-10-26 07:33:50'),
(6, 'Chi tiết dịch vụ', NULL, NULL, NULL, NULL, 'frontend.cms.service', 'chi-tiet-dich-vu', '{\"template\":\"service.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 5, 'delete', 1, 1, '2022-06-02 20:50:17', '2022-10-26 07:33:05'),
(7, 'Chuyên khoa', 'Chuyên khoa', NULL, NULL, NULL, 'frontend.cms.department', 'chuyen-khoa', '{\"og_image\":null,\"template\":\"department.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 6, 'delete', 1, 1, '2022-06-02 21:55:21', '2022-10-26 07:33:02'),
(8, 'Tìm kiếm tin tức', 'Tìm kiếm tin tức', NULL, NULL, NULL, 'frontend.cms.post', 'search', '{\"og_image\":null,\"template\":\"post.default\"}', 7, 'active', 1, 1, '2022-06-03 00:37:09', '2022-09-24 04:09:34'),
(9, 'Thông tin cá nhân', NULL, NULL, NULL, NULL, 'frontend.cms.user', 'profile', '{\"og_image\":null,\"template\":\"doctor.detail\"}', 8, 'active', 1, 1, '2022-06-03 00:37:30', '2022-09-10 04:06:17'),
(10, 'Thư viện', NULL, NULL, NULL, NULL, 'frontend.cms.resource_category', 'thu-vien', '{\"template\":\"resource.category.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 9, 'delete', 1, 1, '2022-06-03 01:26:47', '2022-10-26 07:32:49'),
(11, 'Chi tiết video', NULL, NULL, NULL, NULL, 'frontend.cms.resource', 'chi-tiet-video', '{\"template\":\"resource.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 10, 'delete', 1, 1, '2022-06-03 01:27:09', '2022-10-26 07:32:43'),
(13, 'Liên hệ', 'Liên hệ với chúng tôi', NULL, NULL, NULL, 'frontend.contact', 'lien-he', '{\"og_image\":null,\"template\":\"contact.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 11, 'active', 1, 1, '2022-06-07 00:35:49', '2022-06-07 01:10:18'),
(14, 'Sản phẩm', NULL, NULL, NULL, NULL, 'frontend.cms.product_category', 'san-pham', '{\"og_image\":null,\"template\":\"product.category.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 12, 'delete', 1, 1, '2022-06-10 02:26:56', '2022-10-26 07:32:39'),
(15, 'Chi tiết sản phẩm', NULL, NULL, NULL, NULL, 'frontend.cms.product', 'chi-tiet-san-pham', '{\"og_image\":null,\"template\":\"product.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 13, 'delete', 1, 1, '2022-06-10 02:27:42', '2022-10-26 07:32:36'),
(16, 'Giỏ hàng', 'Giỏ hàng', NULL, NULL, NULL, 'frontend.order.cart', 'gio-hang', '{\"og_image\":null,\"template\":\"cart.default\",\"block_content\":[\"75\",\"94\",\"93\"]}', 14, 'delete', 1, 1, '2022-06-16 20:53:32', '2022-10-26 07:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_popups`
--

CREATE TABLE `tb_popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_popups`
--

INSERT INTO `tb_popups` (`id`, `title`, `content`, `image`, `json_params`, `start_time`, `end_time`, `duration`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Home Popup', '<p>Nullam mollis ultrices est. Nulla in justo lacinia, scelerisque purus et, semper tortor. Donec bibendum leo vitae commodo porttitor. Proin tempus sollicitudin odio in feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices vitae nisl tristique commodo. Phasellus porttitor metus at mattis ultricies. In imperdiet nec nunc in tincidunt.</p>\r\n\r\n<p>Curabitur faucibus dolor at dui lobortis, eget dictum nisi mattis. Fusce risus dui, fringilla non elit sit amet, lobortis interdum eros. Donec mattis lectus quis elit fermentum lacinia. Nullam at ligula semper ante mollis pretium. Nam euismod velit ut quam accumsan vestibulum. Etiam diam augue, dapibus ac placerat nec, accumsan eget nibh. Cras sodales, leo ut volutpat laoreet, velit enim pharetra magna, at dapibus lacus elit vel mi. Nullam a massa ac ligula scelerisque maximus. Quisque dictum quis lorem ut sodales. Duis at semper odio. Morbi in sapien vel lacus posuere mattis ac eget ante. Etiam viverra accumsan rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>', '/data/cms-image/banner/no-banner.jpg', '{\"page\":[\"1\",\"3\",\"4\"]}', '2022-06-27 00:00:00', '2022-06-28 00:00:00', 5, 'active', 1, 1, '2022-06-27 08:22:00', '2022-06-27 11:01:38'),
(2, 'Thông báo bảo trì hệ thống', NULL, '/data/cms-image/banner/1.jpg', '{\"page\":[\"1\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"13\",\"14\",\"15\",\"16\"]}', '2022-06-28 00:00:00', '2022-06-28 00:00:00', NULL, 'deactive', 1, 1, '2022-06-27 08:42:38', '2022-06-27 11:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post_comment`
--

CREATE TABLE `tb_post_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1: chờ duyệt',
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_post_document`
--

CREATE TABLE `tb_post_document` (
  `id` bigint(22) NOT NULL,
  `post_id` bigint(22) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_post_history`
--

CREATE TABLE `tb_post_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_coppy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_like` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhuanbut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aproved_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_aproved` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_post_image`
--

CREATE TABLE `tb_post_image` (
  `id` bigint(22) NOT NULL,
  `post_id` bigint(22) DEFAULT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giakm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mô tả',
  `chitiet` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nội dung',
  `diemban` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Điểm bán',
  `giayto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Giấy tờ sản phẩm',
  `hienthi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Vị trí hiển thị sản phẩm',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0 COMMENT 'Lượt xem',
  `iorder` int(11) DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`id`, `taxonomy_id`, `title`, `alias`, `gia`, `giakm`, `mota`, `chitiet`, `diemban`, `giayto`, `hienthi`, `image`, `image_thumb`, `view`, `iorder`, `tinhtrang`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `admin_created_id`, `admin_updated_id`, `json_params`, `created_at`, `updated_at`) VALUES
(2, 5, 'GLUCOSAMIN ECOLIFE', 'glucosamin-ecolife', 'Liên hệ', NULL, 'GLUCOSAMIN ECOLIFE ( Viên bổ khớp )', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>GLUCOSAMIN ECOLIFE ( Viên bổ khớp )</strong></span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>- Công dụng: Phục hồi tái tạo sụn khớp, tăng tiết dịch cho ổ khớp, giúp khớp vận động dễ dàng.</strong></span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>Hỗ trợ làm chậm quá trình thoái hóa khớp, giảm các triệu chứng &nbsp;khô khớp, thoái hóa khớp, viên khớp.</strong></span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>- Liều dùng: Người bị viêm sưng, thoái hóa khớp, khô khớp vận động khó khăn nặng: Sáng 1viên, trưa 1viên, tối 1viên ( sau ăn ).</strong></span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>Người khô, mỏi khớp nhẹ: Sáng 1 viên, tối 1 viên ( sau ăn ).</strong></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(128,0,128);\"><strong>GLUCOSAMIN ECOLIFE ( Viên bổ khớp )</strong></span></p>', NULL, ';0;1;', '/public/images/z4079675150285_0583f0d428acc5efe11536daf209424f.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 1, 3, NULL, '2023-01-14 09:11:55', '2023-02-11 02:37:22'),
(3, 6, 'GINKGO NATO COENZYM Q10  ( Viên bổ não )', 'ginkgo-nato-coenzym-q10-vien-bo-nao', NULL, NULL, 'GINKGO NATO COENZYM Q10  ( Viên bổ não )', '<p><span style=\"background-color:hsl(0,0%,100%);color:hsl(270,75%,60%);\"><strong>GINKGO NATO COENZYM Q10 &nbsp;( Viên bổ não )</strong></span></p><p><span style=\"background-color:hsl(0,0%,100%);color:hsl(270,75%,60%);\"><strong>Công dụng:&nbsp;</strong></span></p><p><span style=\"background-color:hsl(0,0%,100%);color:hsl(270,75%,60%);\"><strong>- Giúp hoạt huyết, hỗ trợ tăng cường tuần hoàn máu não, tuần hoàn ngoại vi.</strong></span></p><p><span style=\"background-color:hsl(0,0%,100%);color:hsl(270,75%,60%);\"><strong>- Hỗ trợ giảm triệu chứng của thiểu năng tuần hoàn não như: Đau đầu, chóng mặt, mất ngủ.</strong></span></p><p><span style=\"background-color:hsl(0,0%,100%);color:hsl(270,75%,60%);\"><strong>- Hỗ trợ cải thiện sau tai biến mạch máu não do tắc mạch.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Đối tượng sử dụng:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Người bị thiểu năng tuần hoàn não, người tai biến mạch mãu não do tắc mạch.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Người khí huyết ứ trệ, lưu thông kém, đau vai gáy</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Liều dùng:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Uống sau bữa ăn 30-60 phút</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Người lớn : 1 viên/lần và 2 lần/ngày</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Trẻ em trên 12 tuổi: 1 viên/lần/ngày</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Lưu ý: Không dùng cho trẻ em dưới 12 tuổi, phụ nữ mang thai và cho con bú, phụ nữ đang bị rong kinh, người xuất huyết não, người chuẩn bị phẫu thuật cần tham khảo thầy thuốc trước khi sử dụng.</strong></span></p>', NULL, NULL, ';0;', '/public/images/IMG_9382.png', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 1, NULL, '2023-02-11 03:36:03', '2023-02-11 04:15:19'),
(5, 8, 'BIBI ( Kẹo dẻo Can xi )', 'bibi-keo-deo-can-xi', NULL, NULL, 'BIBI ( Kẹo dẻo Can xi )', '<p><span style=\"color:hsl(270,75%,60%);\"><strong>BIBI ( Kẹo dẻo Can xi )</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Thành phần:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Nguyên liệu nhập khẩu Châu Âu ( Đan Mạch, Pháp, Ý )</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Cung cấp nhiều Vitamin khoáng chất, bổ xung canxi, các chất tăng đề kháng, tăng chiều cao, tăng miễn dịch, mùi vị thơm ngon bổ dưỡng.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Ghi chú: &nbsp;</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Sản phẩm dùng đường không năng lượng nên có thể dùng cho người ăn kiêng, béo phì, người tiểu đường….</strong></span></p>', NULL, NULL, ';0;1;', '/public/images/z4079675175786_304fffb6b291da762b4dad43cb431574.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 04:39:39', '2023-02-11 07:34:35'),
(6, 42, 'PROPEPTIT ( Cốm ho )', 'propeptit-com-ho', NULL, NULL, 'PROPEPTIT ( Cốm ho )', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>PROPEPTIT ( Cốm ho )</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần nổi trội:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Cao bướm bạc hàm lượng cao, được kết hợp Propolis keo ong, và Cao kha tử</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Giúp tiêu viêm, mát phổi, bổ phổi, giảm ho, tiêu đờm, chảy mũi, cảm lạnh, viêm họng, rát họng, viêm phế quản, khó thở</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Chỉ định:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- &nbsp;Dùng được cho trẻ sơ sinh, phụ nữ có thai và cho con bú.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Ghi chú:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Mùi vị thơm ngon, có thể pha nước, ngậm trực tiếp hoặc pha với sữa vô cùng tiện lợi</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Sử dụng dạng gói lên có thể chi lẻ ra để bán cho khách hàng.</strong></span></p><p>&nbsp;</p>', NULL, NULL, ';0;1;', '/public/images/z4079675159605_eb5f8d3008bf8e7065cd381a9cbd7cb7.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 04:54:29', '2023-02-11 04:54:29'),
(7, 43, 'GINLADY ( Giúp da nhẵn mịn trắng sáng )', 'ginlady-giup-da-nhan-min-trang-sang', NULL, NULL, 'GINLADY ( Giúp da nhẵn mịn trắng sáng )', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>GINLADY ( Giúp da nhẵn mịn trắng sáng )&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Nguyên liệu nhập khẩu từ Pháp, Ý, có Glutathione</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Bổ sung các chất chống oxy hóa, tăng sức khỏe của da, làm da nhẵn mịn trắng sáng</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Giúp giảm thâm, nám sạm da, giúp da sáng đẹp tự nhiên</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Đối tượng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Phụ nữ bị thâm, nám, sạm, tàn nhang, da nhăn nheo xù xì mụn mằn.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Liều dùng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Tháng đầu dùng tăng cường sáng 2 viên, tối 2 viên. Từ tháng 2 trở đi uống 1 viên sáng và 1 viên tối sau ăn.</strong></span></p>', NULL, NULL, ';0;1;', '/public/images/z4079675166448_7548fdf327f3195523700f06bde0d757.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 05:14:07', '2023-02-11 05:14:07'),
(8, 44, 'MOMENGAN', 'momengan', NULL, NULL, 'MOMENGAN', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>MOMENGAN</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Công thức thảo dược quý hiếm, cao kế sữa có tác dụng giúp tăng chức năng gan, giải độc gan, giảm triệu trứng dị ứng, mẩn ngứa, mề đay, mệt mỏi, chán ăn.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Thành phần kết hợp thêm cỏ cà ri, cao lá sen giúp giảm cân tiêu mỡ, máu nhiễm mỡ</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Chống viêm gan, sơ gan, uống nhiều bia rượu và các chất độc cho gan, gan nhiễm mỡ, sơ gan.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Liều dùng:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Điều trị Gan nhiễm mỡ, mỡ máu: Ngày uống 6 viên chia 3 lần, sáng, trưa, tối</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Điều trị xơ gan, viêm gan: Ngày 4 - 6 viên chia làm 2 lần sáng và tối</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Điều trị mẩn ngứa, giái độc gan: ngày uống 2 - 4 viên chia làm 2 lần sáng tối.</strong></span></p>', NULL, NULL, ';0;1;', '/public/images/IMG_9403.png', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 07:06:12', '2023-02-11 07:06:12'),
(9, 44, 'BROLIVER ( Tăng cường chức nang gan )', 'broliver-tang-cuong-chuc-nang-gan', NULL, NULL, 'BROLIVER( Tăng cường chức nang gan )', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>BROLIVER</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Chứa các thảo dược quý như Cao cà gai leo, Cao kế sữa, Cao diệp hạ châu, các vitamin C, B3, B2</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Các chất đặc trị Argimin CHL, L-Ornithine , L-Aspartate</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>-Thanh nhiệt giải độc gan, mát gan, bảo vệ tế bào gan, tăng cường chức năng gan.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Đối tượng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Dùng cho người viêm gan, xơ gan, men gan cao, uống nhiều bia rượu, sử dụng nhiều chất độc hại cho gan, vàng dai, mẩn ngứa, rôm sảy, nổi mề đay, nhuận tràng, chống táo bón.</strong></span></p>', NULL, NULL, ';0;1;', '/public/images/z4079675167070_284504c223d2fac16e583bf2fe9274eb.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 07:23:02', '2023-02-11 07:23:02'),
(10, 45, 'FEROFOLIC ( Bổ xung Sắt III và Acid folic )', 'ferofolic-bo-xung-sat-iii-va-acid-folic', NULL, NULL, 'FEROFOLIC ( Bổ xung Sắt III và Acid folic )', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>FEROFOLIC ( Bổ xung Sắt III và Acid folic )</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Bổ xung phức hợp Sắt III hấp thụ trực tiếp vào máu hàm lượng cao.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Bổ xung Acid Folic hàm lượng cao cùng với B12 tạo thành công thức tốt nhất, tăng khả năng tạo hồng cầu, giảm nguy cơ thiếu máu do thiếu sắt.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Ngoài ra còn có B1, B6 giúp bổ máu ăn ngon</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Đối tượng sử dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Phụ nữ có thai, cho con bú, trẻ em tuổi dậy thì, người trong kỳ kinh nguyệt.</strong></span></p>', NULL, NULL, ';0;', '/public/images/IMG_9443.png', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 07:32:48', '2023-02-11 07:32:48'),
(11, 43, 'COLLAGEN DIÊN XUÂN', 'collagen-dien-xuan', NULL, NULL, 'COLLAGEN DIÊN XUÂN', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>COLLAGEN DIÊN XUÂN</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Nguyên liệu:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Nhập khẩu Nhật Bản&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Tác dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Không chỉ dùng cho đẹp da, chống lão hóa mà bài thuốc này còn điều trị về nội tiết rất hiệu quả: Phụ nữ khô rát âm đạo, thiếu hụt nội tiết, bốc hỏa, đau đầu chóng mặt.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Điều hòa kinh nguyệt: Kinh nguyệt không đều, rối loạn kinh nguyệt, tắc kinh, tiền mãn kinh.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Ghi chú:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Không dùng cho người có u vú, u xơ tử cung vì có tinh chất mầm đậu lành.</strong></span></p>', NULL, NULL, ';0;1;', '/public/images/IMG_9417.png', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 09:42:03', '2023-02-11 09:42:03'),
(12, 42, 'HOABIPHA', 'hoabipha', NULL, NULL, 'HOABIPHA', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>HOABIPHA</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Thyme Extract nhập khẩu châu Âu</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Có tác dụng giảm triệu chứng của viêm phế quản, viêm họng, ho nhiều đờm, đau rát họng, khản tiếng.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Tốt cho cả cho hen phế quản, cảm cúm.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Tiện dụng:&nbsp;</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Ngon, đậm đặc, không bị khé cổ, ống dễ chia liều, tiện lợi. Không bị hỏng dùng không hết để dành, bán lẻ và chia liều.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Liều dùng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>-Trẻ em dưới 1 tuổi có thể ngày dùng 1 ống</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>-Trẻ từ 1- 3 tuổi ngày dùng 2 ống chia làm 2 lần</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>-Trẻ từ 7-12 tuổi ngày uống 3 ống</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Người lớn sáng 2 ống, tối 2 ống</strong></span></p><p>&nbsp;</p><p>&nbsp;</p>', NULL, NULL, ';0;', '/public/images/z4079675180726_1eb2ed104d6540350d14caf9051cea33.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 09:52:12', '2023-02-11 09:52:12'),
(13, 44, 'LIVERMAX ( Hỗ trợ hạ men gan )', 'livermax-ho-tro-ha-men-gan', NULL, NULL, 'LIVERMAX ( Hỗ trợ hạ men gan )', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>LIVERMAX ( Hỗ trợ hạ men gan )</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Cà gai leo hàm lượng cao, xạ đen, kim ngân hoa, mướp đắng…</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng\"</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Giúp tăng cường chức năng gan, hiệu quả cho bệnh nhân men gan cao, rôm xẩy, mẩn ngứa, chán ăn, mệt mỏi do chức năng gan kém.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Hiệu quả cho người hay đi tiếp khách, rượu bia nhiều: Kim ngân hoa, mướp đắng và xạ đen giúp gan đào thải nhanh.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Tiện dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Viên nang cứng nhỏ dễ uống</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Dùng vỉ lên có thể bán lẻ, bán chia liều</strong></span></p><p>&nbsp;</p>', NULL, NULL, ';0;1;', '/public/images/Liver%20max.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 10:02:27', '2023-02-11 10:02:27'),
(14, 44, 'BROGA', 'broga', NULL, NULL, 'BROGA', '<p><span style=\"color:hsl(270, 75%, 60%);\"><strong>BROGA</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Thành phần: Là hỗn hợp cao các loại dược liệu quý, hàm lượng dược chất cao như Cà gai leo, giảo cổ lam, diệp hạ châu…</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Thanh nhiệt mát gan, bảo vệ tế bào gan, tăng chức năng gan, bổ xung vitamin, tăng đề kháng cho cơ thể.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Đối tượng sử dụng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>- Dùng cho người rượu bia nhiều, giúp giải rượu, men gan cao, viêm gan, sơ gan, nổi mề đay, ăn uống khó tiêu, do chức năng gan kém, người dùng thuốc có hại cho gan.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>-Người có sức đề kháng kém, chảy máu chân răng, kém ăn kém ngủ, nóng gan nóng thận.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Liều dùng:</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Trẻ từ 4 đén 13 tuổi: Ngày 1 gói chia 2 lần pha với 200ml nước ấm hoặc mát.</strong></span></p><p><span style=\"color:hsl(270, 75%, 60%);\"><strong>Trẻ từ 14 tuổi trở lên sáng 1 gói tối 1 gói.</strong></span></p><p>&nbsp;</p>', NULL, NULL, ';0;1;', '/public/images/z4079675157744_c421723e9eabb63a9a0f3bb4453e9999.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 10:13:14', '2023-02-11 10:13:14'),
(15, 46, 'ANTRIL BRO ( Tốt trĩ )', 'antril-bro-tot-tri', NULL, NULL, 'ANTRIL BRO ( Tốt trĩ )', '<p><span style=\"color:hsl(270,75%,60%);\"><strong>ANTRIL BRO ( Tốt trĩ )</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Thành phần: Công thức đặc biệt, hàm lượng dược chất cao</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Công dụng:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Nhuận tràng, bền thành mạch, giảm táo bón, mát gan, chống táo bón, đau rát hậu môn, chảy máu, sa búi trĩ.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Đặc biệt tốt cho người suy giảm tĩnh mạch, nguy cơ bị trĩ, ăn ít chất sơ.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Liều dùng:</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Trẻ em 6 tuổi uống sáng 1 viên, tối 1 viên.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>- Người lơn uống sáng 1 viên, trưa 1 viên, tối 1 viên.</strong></span></p><p><span style=\"color:hsl(270,75%,60%);\"><strong>Nên dùng từ 1 - 3 tháng</strong></span></p><p>&nbsp;</p>', NULL, NULL, ';0;1;', '/public/images/z4079675151965_296ab6737d20e632b1247a50b2b67bb5.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-02-11 10:24:15', '2023-02-11 10:24:15'),
(16, 8, 'ANTOT ( Giúp trẻ ăn ngon miệng )', 'antot-giup-tre-an-ngon-mieng', NULL, NULL, 'Giúp trẻ ăn ngon miệng', '<p>ĂN TỐT</p><p>- GIúp trẻ ăn ngon miệng</p><p>- Giúp tăng cường tiêu hóa</p><p>- Hỗ trợ tăng sức đề kháng cho trẻ.</p>', NULL, NULL, ';1;', '/public/images/An%20TOT.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-03-10 02:28:11', '2023-03-10 02:58:44'),
(17, 47, 'TOTO ( Men cốm )', 'toto-men-com', NULL, NULL, 'Men cốm lợi khuẩn', '<p>TOTO ( MEN CỐM LỢI KHUẨN )</p><p>- Bổ xung lợi khuẩn đường ruột</p><p>- Hỗ trợ giảm các triệu chứng rối loạn tiêu hóa do loạn khuẩn đường ruột</p>', NULL, NULL, ';1;', '/public/images/ToTO.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-03-10 02:33:45', '2023-03-10 02:59:29'),
(18, 47, 'METI ( Men nước )', 'meti-men-nuoc', NULL, NULL, 'MEN NƯỚC LỢI KHUẨN', '<p>METI ( Men nước lợi khuẩn )</p><p>- Trẻ em từ 1 tuổi trở lên và người lớn bị rối loạn tiêu hóa</p><p>- Người uống kháng sinh gây rối loạn đường ruột.</p>', NULL, NULL, ';;', '/public/images/MENTI.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-03-10 02:42:56', '2023-03-10 02:59:56'),
(19, 44, 'GAKID ( Thanh nhiệt mát gan cho trẻ )', 'gakid-thanh-nhiet-mat-gan-cho-tre', NULL, NULL, 'HỖ TRỢ THANH NHIỆT', '<p>GAKID</p><p>- Giúp thanh nhiệt</p><p>- Hỗ trợ giảm triệu chứng: Rôm sảy, mề đay, mẩn ngứa.</p>', NULL, NULL, ';1;', '/public/images/Gan%20kid.jpg', NULL, 0, NULL, 1, 1, NULL, NULL, NULL, 3, 3, NULL, '2023-03-10 02:52:27', '2023-03-10 03:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resource`
--

CREATE TABLE `tb_resource` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_access` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_roles`
--

INSERT INTO `tb_roles` (`id`, `name`, `description`, `json_access`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Quyền quản trị hệ thống', 'Dành cho nhân viên thiết kế và cập nhật nội dung', '{\"menu_id\":[\"92\",\"93\",\"94\",\"51\",\"91\",\"88\",\"55\",\"53\",\"69\",\"52\",\"80\",\"13\",\"58\",\"46\",\"45\",\"44\",\"10\",\"85\",\"3\",\"5\",\"6\",\"43\"]}', 1, 'active', 1, 6, '2021-10-02 03:59:48', '2023-12-13 06:46:14'),
(2, 'Quản trị nội dung', 'Quyền dành cho người quản trị hệ thống', '{\"menu_id\":[\"51\",\"53\",\"55\",\"69\",\"84\",\"52\",\"80\",\"13\",\"58\",\"46\",\"45\",\"44\",\"10\"]}', 2, 'active', 1, 1, '2021-10-02 04:28:09', '2023-02-11 04:25:54'),
(3, 'Phóng viên - Cộng tác viên', 'Phóng viên', '{\"menu_id\":[\"51\",\"84\",\"53\",\"55\"]}', 3, 'active', 1, 1, '2022-10-26 07:41:22', '2023-02-02 10:44:46'),
(4, 'Phóng viên cấp cao', NULL, '{\"menu_id\":[\"51\",\"56\",\"53\",\"70\",\"71\",\"72\",\"73\",\"74\",\"78\",\"79\",\"69\",\"75\",\"76\",\"77\",\"52\",\"66\",\"55\"]}', 4, 'active', 1, 1, '2022-10-26 08:04:29', '2022-10-26 08:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_royaltie`
--

CREATE TABLE `tb_royaltie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `json_action` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_created_id` int(11) NOT NULL,
  `admin_updated_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`id`, `role_id`, `json_action`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"92\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"93\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"94\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"51\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"91\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"88\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"55\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"53\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"69\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"52\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"80\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"13\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"58\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"46\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"45\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"44\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"10\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"85\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"3\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"5\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"6\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"43\":[\"index\",\"create\",\"update\",\"delete\",\"show\"]}', 1, 6, '2022-10-19 08:36:53', '2023-12-13 06:46:14'),
(2, 2, '{\"51\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"53\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"55\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"69\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"84\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"52\":[\"index\",\"create\",\"delete\",\"show\"],\"80\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"13\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"58\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"46\":[\"index\",\"create\",\"delete\",\"show\"],\"45\":[\"index\",\"create\",\"delete\",\"show\"],\"44\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"10\":[\"index\",\"create\",\"update\",\"delete\",\"show\"]}', 1, 1, '2022-10-19 08:37:38', '2023-02-11 04:25:54'),
(3, 3, '{\"51\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"84\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"53\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"55\":[\"index\",\"create\",\"update\",\"delete\",\"show\"]}', 1, 1, '2022-10-26 08:00:01', '2023-02-02 10:44:46'),
(4, 4, '{\"51\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"56\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"53\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"70\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"71\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"72\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"73\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"74\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"78\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"79\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"69\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"75\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"76\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"77\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"52\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"66\":[\"index\",\"create\",\"update\",\"delete\",\"show\"],\"55\":[\"index\",\"create\",\"update\",\"delete\",\"show\"]}', 1, 1, '2022-10-26 08:04:29', '2022-10-26 08:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_views`
--

CREATE TABLE `tb_views` (
  `id` int(11) NOT NULL,
  `ngay` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `web` int(11) NOT NULL,
  `toantrang` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_views`
--

INSERT INTO `tb_views` (`id`, `ngay`, `mobile`, `web`, `toantrang`, `created_at`, `updated_at`) VALUES
(2, 1621184400, 14, 70, 84, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(3, 1621270800, 70, 162, 232, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(4, 1621357200, 69, 247, 316, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(5, 1621443600, 218, 551, 769, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(6, 1621530000, 141, 667, 808, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(7, 1621616400, 80, 387, 467, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(8, 1621702800, 31, 44, 75, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(9, 1621789200, 109, 357, 466, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(10, 1621875600, 20, 234, 254, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(11, 1621962000, 67, 158, 225, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(12, 1622048400, 24, 28, 52, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(13, 1622134800, 14, 88, 102, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(14, 1622221200, 7, 18, 25, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(15, 1622307600, 3, 1, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(16, 1622394000, 0, 80, 80, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(17, 1622480400, 16, 145, 161, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(18, 1622566800, 5, 178, 183, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(19, 1622653200, 17, 46, 63, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(20, 1622739600, 65, 174, 239, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(21, 1622826000, 3, 65, 68, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(22, 1622912400, 0, 13, 13, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(23, 1622998800, 71, 242, 313, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(24, 1623085200, 72, 205, 277, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(25, 1623171600, 6, 54, 60, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(26, 1623258000, 2, 37, 39, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(27, 1623430800, 0, 44, 44, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(28, 1623517200, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(29, 1623603600, 1, 32, 33, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(30, 1623690000, 1, 6, 7, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(31, 1623776400, 3, 8, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(32, 1623862800, 0, 27, 27, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(33, 1623949200, 2, 2, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(34, 1624035600, 2, 1, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(35, 1624122000, 1, 1, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(36, 1624294800, 1, 1, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(37, 1624381200, 1, 0, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(38, 1624554000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(39, 1624813200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(40, 1624899600, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(41, 1625331600, 3, 0, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(42, 1625418000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(43, 1625504400, 1, 0, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(44, 1625590800, 2, 2, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(45, 1625677200, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(46, 1625763600, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(47, 1625850000, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(48, 1625850000, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(49, 1626022800, 2, 0, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(50, 1626109200, 3, 27, 30, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(51, 1626195600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(52, 1626368400, 1, 0, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(53, 1626541200, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(54, 1626800400, 0, 8, 8, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(55, 1626886800, 1, 0, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(56, 1626973200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(57, 1627059600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(58, 1627146000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(59, 1627232400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(60, 1627318800, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(61, 1627578000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(62, 1627664400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(63, 1627750800, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(64, 1627750800, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(65, 1627837200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(66, 1627923600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(67, 1628010000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(68, 1628096400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(69, 1628182800, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(70, 1628442000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(71, 1628528400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(72, 1629219600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(73, 1629824400, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(74, 1629997200, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(75, 1630083600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(76, 1630342800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(77, 1630429200, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(78, 1630688400, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(79, 1630774800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(80, 1631034000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(81, 1631293200, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(82, 1631379600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(83, 1631466000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(84, 1631638800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(85, 1631811600, 6, 4, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(86, 1631811600, 6, 4, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(87, 1631811600, 6, 4, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(88, 1632070800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(89, 1632070800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(90, 1632157200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(91, 1632243600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(92, 1632330000, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(93, 1632416400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(94, 1632502800, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(95, 1632589200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(96, 1632675600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(97, 1632762000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(98, 1633021200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(99, 1633107600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(100, 1633194000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(101, 1633280400, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(102, 1633366800, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(103, 1633453200, 1, 1, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(104, 1633539600, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(105, 1633626000, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(106, 1633712400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(107, 1633885200, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(108, 1633971600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(109, 1634144400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(110, 1634230800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(111, 1634403600, 0, 6, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(112, 1634749200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(113, 1634922000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(114, 1635008400, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(115, 1635181200, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(116, 1635267600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(117, 1635526800, 0, 10, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(118, 1635613200, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(119, 1635699600, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(120, 1635786000, 0, 17, 17, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(121, 1635872400, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(122, 1635958800, 0, 7, 7, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(123, 1636218000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(124, 1636304400, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(125, 1636390800, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(126, 1636736400, 0, 10, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(127, 1636822800, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(128, 1636909200, 0, 10, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(129, 1636995600, 5, 11, 16, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(130, 1637082000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(131, 1637168400, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(132, 1637254800, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(133, 1637514000, 0, 20, 20, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(134, 1637600400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(135, 1637686800, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(136, 1637773200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(137, 1637859600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(138, 1637946000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(139, 1638032400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(140, 1638118800, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(141, 1638205200, 0, 11, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(142, 1638291600, 0, 24, 24, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(143, 1638378000, 8, 9, 17, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(144, 1638464400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(145, 1638550800, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(146, 1638637200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(147, 1638723600, 0, 11, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(148, 1638810000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(149, 1639328400, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(150, 1639414800, 0, 22, 22, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(151, 1639501200, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(152, 1639674000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(153, 1640106000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(154, 1640192400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(155, 1640278800, 0, 11, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(156, 1640365200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(157, 1640451600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(158, 1640538000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(159, 1640624400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(160, 1640710800, 6, 2, 8, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(161, 1640797200, 9, 0, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(162, 1640883600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(163, 1640970000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(164, 1641056400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(165, 1641142800, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(166, 1641488400, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(167, 1641574800, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(168, 1641661200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(169, 1641747600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(170, 1641920400, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(171, 1642006800, 0, 11, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(172, 1642093200, 0, 6, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(173, 1642179600, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(174, 1642266000, 3, 7, 10, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(175, 1642352400, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(176, 1642438800, 0, 6, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(177, 1642611600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(178, 1642698000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(179, 1642784400, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(180, 1642870800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(181, 1642957200, 0, 15, 15, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(182, 1643130000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(183, 1643216400, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(184, 1643475600, 0, 13, 13, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(185, 1643562000, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(186, 1643648400, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(187, 1643734800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(188, 1643821200, 7, 4, 11, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(189, 1643994000, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(190, 1644080400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(191, 1644166800, 0, 5, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(192, 1644253200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(193, 1644339600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(194, 1644512400, 2, 0, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(195, 1644598800, 2, 0, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(196, 1644685200, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(197, 1644771600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(198, 1644858000, 0, 13, 13, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(199, 1644944400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(200, 1645030800, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(201, 1645117200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(202, 1645203600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(203, 1645376400, 0, 6, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(204, 1645462800, 0, 8, 8, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(205, 1645549200, 3, 0, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(206, 1645635600, 2, 0, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(207, 1645894800, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(208, 1645981200, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(209, 1646067600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(210, 1646154000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(211, 1646240400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(212, 1646326800, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(213, 1646499600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(214, 1646586000, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(215, 1646672400, 0, 9, 9, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(216, 1646758800, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(217, 1646845200, 0, 3, 3, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(218, 1647190800, 0, 4, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(219, 1647277200, 4, 0, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(220, 1647450000, 5, 8, 13, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(221, 1647536400, 3, 2, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(222, 1647622800, 2, 2, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(223, 1647795600, 3, 58, 61, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(224, 1647882000, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(225, 1647968400, 0, 12, 12, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(226, 1648054800, 0, 12, 12, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(227, 1648141200, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(228, 1648227600, 0, 1, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(229, 1648400400, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(230, 1648486800, 8, 113, 121, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(231, 1648573200, 20, 78, 98, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(232, 1648659600, 35, 45, 80, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(233, 1648746000, 7, 19, 26, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(234, 1649005200, 11, 29, 40, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(235, 1649178000, 11, 8, 19, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(236, 1649264400, 0, 6, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(237, 1649350800, 3, 1, 4, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(238, 1649523600, 0, 2, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(239, 1649610000, 1, 0, 1, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(240, 1649782800, 0, 26, 26, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(241, 1649869200, 0, 29, 29, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(242, 1649955600, 2, 0, 2, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(243, 1650042000, 4, 1, 5, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(244, 1650301200, 13, 47, 60, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(245, 1650387600, 0, 8, 8, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(246, 1650474000, 8, 4, 12, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(247, 1650560400, 2, 5, 7, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(248, 1650819600, 1, 44, 45, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(249, 1650906000, 25, 19, 44, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(250, 1650992400, 32, 99, 131, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(251, 1651078800, 27, 44, 71, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(252, 1651165200, 15, 32, 47, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(253, 1651251600, 7, 32, 39, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(254, 1651338000, 18, 112, 130, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(255, 1651424400, 11, 128, 139, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(256, 1651510800, 21, 2, 23, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(257, 1651597200, 11, 19, 30, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(258, 1651683600, 4, 62, 66, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(259, 1651770000, 13, 31, 44, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(260, 1651856400, 3, 3, 6, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(261, 1651942800, 1, 15, 16, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(262, 1652029200, 8, 9, 17, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(263, 1652115600, 142, 108, 250, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(264, 1652202000, 355, 262, 617, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(265, 1652288400, 693, 566, 1259, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(266, 1652374800, 1775, 1327, 3102, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(267, 1652461200, 739, 264, 1003, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(268, 1652547600, 125, 64, 189, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(269, 1652634000, 109, 233, 342, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(270, 1652720400, 1446, 1457, 2903, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(271, 1652806800, 721, 699, 1418, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(272, 1652893200, 133, 191, 324, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(273, 1652979600, 217, 300, 516, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(274, 1653066000, 76, 36, 112, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(275, 1653152400, 13, 45, 58, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(276, 1653238800, 113, 285, 398, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(277, 1653325200, 102, 183, 285, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(278, 1653411600, 72, 116, 188, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(279, 1653498000, 1390, 1764, 3152, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(280, 1653584400, 2875, 4141, 7007, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(281, 1653670800, 2723, 4177, 6896, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(282, 1653757200, 2700, 3648, 6345, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(283, 1653843600, 1366, 1871, 3237, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(284, 1653930000, 514, 230, 744, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(285, 1654016400, 283, 179, 462, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(286, 1654102800, 236, 89, 324, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(287, 1654189200, 205, 265, 470, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(288, 1654275600, 209, 426, 635, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(289, 1654362000, 96, 90, 186, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(290, 1654448400, 145, 424, 569, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(291, 1654534800, 242, 292, 534, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(292, 1654621200, 48, 160, 208, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(293, 1654707600, 65, 187, 252, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(294, 1654794000, 57, 77, 134, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(295, 1654880400, 113, 205, 318, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(296, 1654966800, 80, 92, 172, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(297, 1655053200, 169, 278, 447, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(298, 1655139600, 132, 169, 301, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(299, 1655226000, 265, 332, 597, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(300, 1655312400, 292, 273, 565, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(301, 1655398800, 173, 154, 327, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(302, 1655485200, 115, 106, 221, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(303, 1655571600, 61, 46, 107, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(304, 1655658000, 59, 86, 145, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(305, 1655744400, 36, 51, 87, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(306, 1655830800, 37, 39, 76, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(307, 1655917200, 52, 89, 141, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(308, 1656003600, 60, 73, 133, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(309, 1656090000, 91, 140, 231, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(310, 1656176400, 46, 38, 84, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(311, 1656262800, 98, 203, 301, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(312, 1656349200, 201, 141, 342, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(313, 1656435600, 173, 235, 408, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(314, 1656522000, 141, 228, 369, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(315, 1656608400, 256, 310, 566, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(316, 1656694800, 328, 242, 570, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(317, 1656781200, 270, 145, 415, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(318, 1656867600, 131, 104, 235, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(319, 1656954000, 263, 152, 415, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(320, 1657040400, 527, 228, 755, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(321, 1657126800, 258, 92, 350, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(322, 1657213200, 170, 137, 307, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(323, 1657299600, 128, 80, 208, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(324, 1657386000, 99, 49, 148, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(325, 1657472400, 438, 159, 597, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(326, 1657558800, 108, 96, 204, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(327, 1657645200, 60, 102, 162, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(328, 1657731600, 212, 172, 384, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(329, 1657818000, 96, 101, 197, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(330, 1657904400, 98, 79, 177, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(331, 1657990800, 62, 78, 140, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(332, 1658077200, 70, 112, 182, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(333, 1658163600, 88, 50, 138, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(334, 1658250000, 144, 84, 228, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(335, 1658336400, 327, 148, 475, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(336, 1658422800, 92, 101, 193, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(337, 1658509200, 51, 67, 118, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(338, 1658595600, 61, 107, 168, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(339, 1658682000, 44, 95, 139, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(340, 1658768400, 52, 69, 121, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(341, 1658854800, 59, 80, 139, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(342, 1658941200, 68, 114, 182, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(343, 1659027600, 57, 177, 234, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(344, 1659114000, 56, 81, 137, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(345, 1659200400, 74, 79, 153, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(346, 1659286800, 403, 146, 549, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(347, 1659373200, 124, 108, 232, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(348, 1659459600, 73, 95, 168, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(349, 1659546000, 48, 82, 130, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(350, 1659632400, 48, 60, 108, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(351, 1659718800, 56, 107, 163, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(352, 1659805200, 49, 78, 127, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(353, 1659891600, 84, 107, 191, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(354, 1659978000, 43, 74, 117, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(355, 1660064400, 37, 55, 92, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(356, 1660150800, 149, 99, 248, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(357, 1660237200, 60, 56, 116, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(358, 1660323600, 38, 113, 151, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(359, 1660410000, 69, 72, 141, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(360, 1660496400, 81, 103, 184, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(361, 1660582800, 68, 92, 160, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(362, 1660669200, 49, 68, 117, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(363, 1660755600, 51, 91, 142, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(364, 1660842000, 62, 105, 167, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(365, 1660928400, 55, 83, 138, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(366, 1661014800, 43, 81, 124, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(367, 1661101200, 50, 135, 185, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(368, 1661187600, 65, 237, 302, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(369, 1661274000, 49, 111, 160, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(370, 1661360400, 37, 68, 105, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(371, 1661446800, 62, 99, 161, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(372, 1661533200, 60, 112, 172, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(373, 1661619600, 67, 83, 150, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(374, 1661706000, 64, 100, 164, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(375, 1661792400, 47, 182, 229, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(376, 1661878800, 55, 145, 200, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(377, 1661965200, 37, 67, 104, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(378, 1662051600, 52, 55, 107, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(379, 1662138000, 33, 74, 107, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(380, 1662224400, 45, 109, 154, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(381, 1662310800, 49, 161, 210, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(382, 1662397200, 39, 120, 159, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(383, 1662483600, 33, 157, 190, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(384, 1662570000, 72, 88, 160, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(385, 1662656400, 85, 76, 161, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(386, 1662742800, 47, 85, 132, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(387, 1662829200, 64, 67, 131, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(388, 1662915600, 73, 88, 161, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(389, 1663002000, 46, 78, 124, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(390, 1663088400, 55, 100, 155, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(391, 1663174800, 52, 62, 114, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(392, 1663261200, 70, 59, 129, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(393, 1663347600, 63, 38, 101, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(394, 1663434000, 58, 45, 103, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(395, 1663520400, 71, 68, 139, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(396, 1663606800, 35, 68, 103, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(397, 1663693200, 6, 126, 132, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(398, 1663779600, 9, 37, 46, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(399, 1663866000, 34, 68, 102, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(400, 1663952400, 76, 61, 137, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(401, 1664038800, 44, 74, 118, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(402, 1664125200, 40, 103, 143, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(403, 1664211600, 47, 91, 138, '2022-09-28 10:43:52', '2022-09-28 10:43:52'),
(404, 1664298000, 4, 575, 579, '2022-09-28 10:43:52', '2022-09-28 18:35:42'),
(405, 1664384400, 0, 32, 32, '2022-09-29 09:50:15', '2022-09-29 17:45:36'),
(406, 1666890000, 20, 29, 49, '2022-10-28 15:54:29', '2022-10-28 15:58:50'),
(407, 1667149200, 0, 1, 1, '2022-10-31 08:43:08', '2022-10-31 08:43:08'),
(408, 1669222800, 0, 11, 11, '2022-11-24 09:18:36', '2022-11-24 11:38:22'),
(409, 1669222800, 0, 1, 1, '2022-11-24 09:18:36', '2022-11-24 09:18:36'),
(410, 1669309200, 0, 3, 3, '2022-11-25 09:19:51', '2022-11-25 11:20:44'),
(411, 1669568400, 0, 2, 2, '2022-11-28 08:45:08', '2022-11-28 10:48:50'),
(412, 1669654800, 0, 1, 1, '2022-11-29 08:55:10', '2022-11-29 08:55:10'),
(413, 1670173200, 0, 23, 23, '2022-12-05 17:32:21', '2022-12-05 18:20:23'),
(414, 1670346000, 0, 1, 1, '2022-12-07 09:15:09', '2022-12-07 09:15:09'),
(415, 1673456400, 0, 2, 2, '2023-01-12 21:35:00', '2023-01-12 21:41:45'),
(416, 1673802000, 0, 23, 23, '2023-01-16 17:40:55', '2023-01-16 22:57:53'),
(417, 1673888400, 0, 30, 30, '2023-01-17 14:26:51', '2023-01-17 15:22:47'),
(418, 1680714000, 0, 1, 1, '2023-04-06 08:57:55', '2023-04-06 08:57:55'),
(419, 1683046800, 0, 1, 1, '2023-05-03 08:33:15', '2023-05-03 08:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_widgets`
--

CREATE TABLE `tb_widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `widget_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_widgets`
--

INSERT INTO `tb_widgets` (`id`, `widget_code`, `title`, `brief`, `json_params`, `image`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'header', 'Header Style 1', 'Header 1 brief content', '{\"layout\":null,\"style\":null,\"component\":[\"1\",\"2\"]}', NULL, 10, 'active', 1, 1, '2022-05-04 07:59:07', '2022-05-10 00:29:20'),
(2, 'footer', 'Footer Style 1', NULL, '{\"layout\":null,\"style\":null,\"component\":[\"2\",\"1\"]}', NULL, 20, 'active', 1, 1, '2022-05-10 00:29:03', '2022-05-10 00:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_widget_configs`
--

CREATE TABLE `tb_widget_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `widget_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_config` tinyint(1) NOT NULL DEFAULT 1,
  `iorder` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `admin_created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_widget_configs`
--

INSERT INTO `tb_widget_configs` (`id`, `name`, `description`, `widget_code`, `json_params`, `is_config`, `iorder`, `status`, `admin_created_id`, `admin_updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Header', NULL, 'header', NULL, 1, 1, 'active', 1, 1, '2022-04-26 02:40:39', '2022-08-23 04:02:09'),
(2, 'Footer', NULL, 'footer', NULL, 1, 2, 'active', 1, 1, '2022-04-26 02:42:09', '2022-04-26 02:42:09'),
(3, 'Left Sidebar', NULL, 'left_sidebar', NULL, 1, 3, 'active', 1, 1, '2022-04-26 02:42:46', '2022-04-26 02:42:46'),
(4, 'Right Sidebar', NULL, 'right_sidebar', NULL, 1, 4, 'active', 1, 1, '2022-04-26 02:43:02', '2022-04-26 02:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `email_verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `is_super_user` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view_info` int(11) NOT NULL DEFAULT 0,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `json_params` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `json_profiles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `admin_updated_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `email_verified`, `email_verification_code`, `status`, `is_super_user`, `avatar`, `birthday`, `sex`, `phone`, `count_view_info`, `country_id`, `city_id`, `district_id`, `json_params`, `json_profiles`, `admin_updated_id`) VALUES
(1, 'Thành Phùng', 'thangnh@gmail.com', 'thangnh', NULL, '$2y$10$T7U7Yj45WwVHYs2i./Qs.OCmQbLqlVvTzDRd3Szm5oQ5exjNLK8xG', NULL, NULL, '2022-09-16 03:12:43', NULL, 0, NULL, 'active', 0, '/member/hinhanh1/1663297963.jpg', '1999-09-14', '0', '0969584998', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Hữu Thắng', 'huuthangb2k50@gmail.com', 'huuthangb2k50', NULL, '$2y$10$T7U7Yj45WwVHYs2i./Qs.OCmQbLqlVvTzDRd3Szm5oQ5exjNLK8xG', NULL, '2022-09-28 04:26:26', '2022-09-28 04:32:34', NULL, 0, NULL, 'active', 0, '/member/hinhanh2/1664339554.png', '2000-09-12', '0', '102381234', 0, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_department_id_foreign` (`department_id`),
  ADD KEY `admins_function_id_foreign` (`function_id`),
  ADD KEY `admins_degree_id_foreign` (`degree_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `tb_admin_menus`
--
ALTER TABLE `tb_admin_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_admin_menus_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_admin_menus_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_blocks`
--
ALTER TABLE `tb_blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_blocks_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_blocks_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_block_contents`
--
ALTER TABLE `tb_block_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bookings`
--
ALTER TABLE `tb_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `tb_bookings_department_id_foreign` (`department_id`),
  ADD KEY `tb_bookings_doctor_id_foreign` (`doctor_id`),
  ADD KEY `tb_bookings_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_bookings_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_cms_dichvu`
--
ALTER TABLE `tb_cms_dichvu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cms_taxonomys_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_cms_taxonomys_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_cms_document`
--
ALTER TABLE `tb_cms_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cms_document_department_id_foreign` (`department_id`),
  ADD KEY `tb_cms_document_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_cms_document_admin_receive_id_foreign` (`admin_receive_id`);

--
-- Indexes for table `tb_cms_language`
--
ALTER TABLE `tb_cms_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cms_media`
--
ALTER TABLE `tb_cms_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cms_posts_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `tb_cms_posts_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_cms_posts_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_cms_posts`
--
ALTER TABLE `tb_cms_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cms_posts_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `tb_cms_posts_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_cms_posts_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_cms_posts_dichvu`
--
ALTER TABLE `tb_cms_posts_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cms_profile`
--
ALTER TABLE `tb_cms_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cms_taxonomys`
--
ALTER TABLE `tb_cms_taxonomys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cms_taxonomys_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_cms_taxonomys_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_cms_translate`
--
ALTER TABLE `tb_cms_translate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_components`
--
ALTER TABLE `tb_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_components_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_components_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_component_configs`
--
ALTER TABLE `tb_component_configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_component_configs_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_component_configs_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_contacts`
--
ALTER TABLE `tb_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_contacts_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_contacts_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_degree`
--
ALTER TABLE `tb_degree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_degree_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_degree_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_department_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_department_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_experts`
--
ALTER TABLE `tb_experts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_experts_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_experts_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_function`
--
ALTER TABLE `tb_function`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_function_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_function_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_live_reporting`
--
ALTER TABLE `tb_live_reporting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_live_reporting_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_live_reporting_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_live_reporting_detail`
--
ALTER TABLE `tb_live_reporting_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_live_reporting_detail_live_id_foreign` (`live_id`),
  ADD KEY `tb_live_reporting_detail_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_live_reporting_detail_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_logs_user_created_id_foreign` (`user_created_id`),
  ADD KEY `tb_logs_admin_created_id_foreign` (`admin_created_id`);

--
-- Indexes for table `tb_media_image`
--
ALTER TABLE `tb_media_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_media_video`
--
ALTER TABLE `tb_media_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menus`
--
ALTER TABLE `tb_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_menus_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_menus_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_message_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_message_admin_receive_id_foreign` (`admin_receive_id`);

--
-- Indexes for table `tb_modules`
--
ALTER TABLE `tb_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_module_functions`
--
ALTER TABLE `tb_module_functions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_online_exchange`
--
ALTER TABLE `tb_online_exchange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_online_exchange_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `tb_online_exchange_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_online_exchange_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_online_exchange_detail`
--
ALTER TABLE `tb_online_exchange_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_online_exchange_detail_exchange_id_foreign` (`exchange_id`),
  ADD KEY `tb_online_exchange_detail_experts_id_foreign` (`experts_id`),
  ADD KEY `tb_online_exchange_detail_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_online_exchange_detail_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_options`
--
ALTER TABLE `tb_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_orders_customer_id_foreign` (`customer_id`),
  ADD KEY `tb_orders_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_orders_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_order_details`
--
ALTER TABLE `tb_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_order_details_order_id_foreign` (`order_id`),
  ADD KEY `tb_order_details_item_id_foreign` (`item_id`),
  ADD KEY `tb_order_details_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_order_details_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_pages`
--
ALTER TABLE `tb_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_pages_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_pages_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_popups`
--
ALTER TABLE `tb_popups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_popups_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_popups_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_post_comment`
--
ALTER TABLE `tb_post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_document`
--
ALTER TABLE `tb_post_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_history`
--
ALTER TABLE `tb_post_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_image`
--
ALTER TABLE `tb_post_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_products_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `tb_products_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_products_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_resource`
--
ALTER TABLE `tb_resource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_resource_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `tb_resource_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_resource_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_roles_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_roles_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_royaltie`
--
ALTER TABLE `tb_royaltie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_royaltie_post_id_foreign` (`post_id`),
  ADD KEY `tb_royaltie_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_royaltie_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_views`
--
ALTER TABLE `tb_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_widgets`
--
ALTER TABLE `tb_widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_widgets_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_widgets_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `tb_widget_configs`
--
ALTER TABLE `tb_widget_configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_widget_configs_admin_created_id_foreign` (`admin_created_id`),
  ADD KEY `tb_widget_configs_admin_updated_id_foreign` (`admin_updated_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_admin_menus`
--
ALTER TABLE `tb_admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tb_blocks`
--
ALTER TABLE `tb_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_block_contents`
--
ALTER TABLE `tb_block_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `tb_bookings`
--
ALTER TABLE `tb_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_cms_dichvu`
--
ALTER TABLE `tb_cms_dichvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tb_cms_document`
--
ALTER TABLE `tb_cms_document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_cms_language`
--
ALTER TABLE `tb_cms_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_cms_media`
--
ALTER TABLE `tb_cms_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_cms_posts`
--
ALTER TABLE `tb_cms_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709;

--
-- AUTO_INCREMENT for table `tb_cms_posts_dichvu`
--
ALTER TABLE `tb_cms_posts_dichvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=744;

--
-- AUTO_INCREMENT for table `tb_cms_profile`
--
ALTER TABLE `tb_cms_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_cms_taxonomys`
--
ALTER TABLE `tb_cms_taxonomys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tb_cms_translate`
--
ALTER TABLE `tb_cms_translate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_components`
--
ALTER TABLE `tb_components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_component_configs`
--
ALTER TABLE `tb_component_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_contacts`
--
ALTER TABLE `tb_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_degree`
--
ALTER TABLE `tb_degree`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_experts`
--
ALTER TABLE `tb_experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_function`
--
ALTER TABLE `tb_function`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_live_reporting`
--
ALTER TABLE `tb_live_reporting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_live_reporting_detail`
--
ALTER TABLE `tb_live_reporting_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_media_image`
--
ALTER TABLE `tb_media_image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_media_video`
--
ALTER TABLE `tb_media_video`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menus`
--
ALTER TABLE `tb_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_modules`
--
ALTER TABLE `tb_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_module_functions`
--
ALTER TABLE `tb_module_functions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_online_exchange`
--
ALTER TABLE `tb_online_exchange`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_online_exchange_detail`
--
ALTER TABLE `tb_online_exchange_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_options`
--
ALTER TABLE `tb_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_order_details`
--
ALTER TABLE `tb_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pages`
--
ALTER TABLE `tb_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_popups`
--
ALTER TABLE `tb_popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_post_comment`
--
ALTER TABLE `tb_post_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_post_document`
--
ALTER TABLE `tb_post_document`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_post_history`
--
ALTER TABLE `tb_post_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_post_image`
--
ALTER TABLE `tb_post_image`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_resource`
--
ALTER TABLE `tb_resource`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_royaltie`
--
ALTER TABLE `tb_royaltie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_views`
--
ALTER TABLE `tb_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_degree_id_foreign` FOREIGN KEY (`degree_id`) REFERENCES `tb_degree` (`id`),
  ADD CONSTRAINT `admins_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `tb_department` (`id`),
  ADD CONSTRAINT `admins_function_id_foreign` FOREIGN KEY (`function_id`) REFERENCES `tb_function` (`id`);

--
-- Constraints for table `tb_cms_document`
--
ALTER TABLE `tb_cms_document`
  ADD CONSTRAINT `tb_cms_document_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_cms_document_admin_receive_id_foreign` FOREIGN KEY (`admin_receive_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_cms_document_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `tb_department` (`id`);

--
-- Constraints for table `tb_degree`
--
ALTER TABLE `tb_degree`
  ADD CONSTRAINT `tb_degree_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_degree_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD CONSTRAINT `tb_department_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_department_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_experts`
--
ALTER TABLE `tb_experts`
  ADD CONSTRAINT `tb_experts_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_experts_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_function`
--
ALTER TABLE `tb_function`
  ADD CONSTRAINT `tb_function_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_function_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_live_reporting`
--
ALTER TABLE `tb_live_reporting`
  ADD CONSTRAINT `tb_live_reporting_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_live_reporting_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_live_reporting_detail`
--
ALTER TABLE `tb_live_reporting_detail`
  ADD CONSTRAINT `tb_live_reporting_detail_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_live_reporting_detail_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_live_reporting_detail_live_id_foreign` FOREIGN KEY (`live_id`) REFERENCES `tb_live_reporting` (`id`);

--
-- Constraints for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD CONSTRAINT `tb_message_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_message_admin_receive_id_foreign` FOREIGN KEY (`admin_receive_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tb_online_exchange`
--
ALTER TABLE `tb_online_exchange`
  ADD CONSTRAINT `tb_online_exchange_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_online_exchange_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_online_exchange_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `tb_cms_dichvu` (`id`);

--
-- Constraints for table `tb_online_exchange_detail`
--
ALTER TABLE `tb_online_exchange_detail`
  ADD CONSTRAINT `tb_online_exchange_detail_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_online_exchange_detail_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_online_exchange_detail_exchange_id_foreign` FOREIGN KEY (`exchange_id`) REFERENCES `tb_online_exchange` (`id`),
  ADD CONSTRAINT `tb_online_exchange_detail_experts_id_foreign` FOREIGN KEY (`experts_id`) REFERENCES `tb_experts` (`id`);

--
-- Constraints for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD CONSTRAINT `tb_products_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_products_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_products_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `tb_cms_dichvu` (`id`);

--
-- Constraints for table `tb_resource`
--
ALTER TABLE `tb_resource`
  ADD CONSTRAINT `tb_resource_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_resource_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_resource_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `tb_cms_dichvu` (`id`);

--
-- Constraints for table `tb_royaltie`
--
ALTER TABLE `tb_royaltie`
  ADD CONSTRAINT `tb_royaltie_admin_created_id_foreign` FOREIGN KEY (`admin_created_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_royaltie_admin_updated_id_foreign` FOREIGN KEY (`admin_updated_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tb_royaltie_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `tb_cms_media` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
