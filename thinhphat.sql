-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 01:38 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thinhphat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `path`, `seo_title`, `seo_description`, `isActive`, `order`, `level`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Phòng Khách', 'images/uploads/images/danhmuc/temp_list_category_banne_phongkhach.jpg', '<p>Ph&ograve;ng Kh&aacute;ch</p>', 'phong-khach', 'Phòng Khách', '<p>Ph&ograve;ng Kh&aacute;ch</p>', 1, 1, 0, NULL, 1, '2017-12-26 13:03:40', '2017-12-26 13:03:40'),
(2, 'Phòng Ngủ', 'images/uploads/images/danhmuc/temp_list_category_banne_phongngu.jpg', '<p>Ph&ograve;ng Ngủ</p>', 'phong-ngu', 'Phòng Ngủ', '<p>Ph&ograve;ng Ngủ</p>', 1, 2, 0, NULL, 1, '2017-12-26 13:04:17', '2017-12-26 13:04:17'),
(3, 'Gian Bếp', 'images/uploads/images/danhmuc/temp_list_category_banne_gianbep.jpg', '<p>Gian Bếp</p>', 'gian-bep', 'Gian Bếp', '<p>Gian Bếp</p>', 1, 3, 0, NULL, 1, '2017-12-26 13:04:42', '2017-12-26 13:04:42'),
(4, 'Hành Lang', 'images/uploads/images/danhmuc/temp_list_category_banne_hanhlang.jpg', '<p>H&agrave;nh Lang</p>', 'hanh-lang', 'Hành Lang', '<p>H&agrave;nh Lang</p>', 1, 4, 0, NULL, 1, '2017-12-26 13:05:04', '2017-12-26 13:05:04'),
(5, 'Showroom - Nhà Hàng', 'images/uploads/images/danhmuc/temp_list_category_banne_showroom.jpg', '<p>Showroom - Nh&agrave; H&agrave;ng</p>', 'showroom-nha-hang', 'Showroom - Nhà Hàng', '<p>Showroom - Nh&agrave; H&agrave;ng</p>', 1, 5, 0, NULL, 1, '2017-12-26 13:05:29', '2017-12-26 13:05:29'),
(6, 'Tranh Nghệ Thuật', 'images/uploads/images/danhmuc/temp_list_category_banne_tranhnghethuat.jpg', '<p>Tranh Nghệ Thuật</p>', 'tranh-nghe-thuat', 'Tranh Nghệ Thuật', '<p>Tranh Nghệ Thuật</p>', 1, 6, 0, NULL, 1, '2017-12-26 13:05:59', '2017-12-26 13:05:59'),
(7, 'Thiết Bị Khác', 'images/uploads/images/danhmuc/temp_list_category_banne_thietbikhac.jpg', '<p>Thiết Bị Kh&aacute;c</p>', 'thiet-bi-khac', 'Thiết Bị Khác', '<p>Thiết Bị Kh&aacute;c</p>', 1, 7, 0, NULL, 1, '2017-12-26 13:06:19', '2017-12-26 13:06:19'),
(8, 'Đồ Trang Trí', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đồ Trang Tr&iacute;</p>', 'do-trang-tri', 'Đồ Trang Trí', '<p>Đồ Trang Tr&iacute;</p>', 1, 8, 0, NULL, 1, '2017-12-26 13:06:40', '2017-12-26 13:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2017-12-23 13:04:28', '2017-12-23 13:04:28'),
(2, 'User', '2017-12-23 13:04:28', '2017-12-23 13:04:28'),
(3, 'Loại Sản Phẩm', '2017-12-24 02:03:30', '2017-12-24 02:03:30'),
(4, 'Sản Phẩm', '2017-12-26 08:57:53', '2017-12-26 08:57:53');

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
(3, '2017_12_23_195635_create_entrust_setup_tables', 2),
(4, '2017_12_24_085328_create_categories_table', 3),
(5, '2017_12_26_140629_create_products_table', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2017-12-23 13:06:50', '2017-12-23 13:06:50'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2017-12-23 13:06:51', '2017-12-23 13:06:51'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2017-12-23 13:06:51', '2017-12-23 13:06:51'),
(9, 'category-list', 'Xem Toàn Bộ Loại Sản Phẩm', 'Được Xem Toàn Bộ Loại Sản Phẩm', 3, '2017-12-24 02:04:45', '2017-12-24 02:04:45'),
(10, 'category-create', 'Tạo Loại Sản Phẩm Mới', 'Được Tạo Loại Sản Phẩm Mới', 3, '2017-12-24 02:04:45', '2017-12-24 02:04:45'),
(11, 'category-edit', 'Cập Nhật Loại Sản Phẩm', 'Được Cập Nhật Loại Sản Phẩm', 3, '2017-12-24 02:04:45', '2017-12-24 02:04:45'),
(12, 'category-delete', 'Xóa Loại Sản Phẩm', 'Được Xóa Loại Sản Phẩm', 3, '2017-12-24 02:04:45', '2017-12-24 02:04:45'),
(13, 'product-list', 'Xem Toàn Bộ Sản Phẩm', 'Được Xem Toàn Bộ Sản Phẩm', 4, '2017-12-26 08:58:57', '2017-12-26 08:58:57'),
(14, 'product-create', 'Tạo Sản Phẩm Mới', 'Được Tạo Sản Phẩm Mới', 4, '2017-12-26 08:58:57', '2017-12-26 08:58:57'),
(15, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 4, '2017-12-26 08:58:57', '2017-12-26 08:58:57'),
(16, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 4, '2017-12-26 08:58:57', '2017-12-26 08:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` int(11) DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `path`, `isActive`, `image`, `description`, `seo_title`, `seo_description`, `price`, `sale`, `final_price`, `order`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'HL0171806 L', 'hl0171806-l', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach1.jpg', '<p>HL0171806 L</p>', 'HL0171806 L', '<p>HL0171806 L</p>', '12400000', 30, 8680000, 1, 1, 1, '2017-12-26 13:58:02', '2017-12-26 14:00:23'),
(2, 'HL0171806 M', 'hl0171806-m', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach1.jpg', '<p>HL0171806 M</p>', 'HL0171806 M', '<p>HL0171806 M</p>', '8910000', 30, 6237000, 2, 1, 1, '2017-12-26 14:00:09', '2017-12-26 14:00:09'),
(3, 'HL0151042', 'hl0151042', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach2.jpg', '<p>HL0151042</p>', 'HL0151042', '<p>HL0151042</p>', '8360000', 30, 5852000, 2, 1, 1, '2017-12-26 14:02:31', '2017-12-26 14:02:31'),
(4, 'HL0161072', 'hl0161072', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach3.jpg', '<p>HL0161072</p>', 'HL0161072', '<p>HL0161072</p>', '10750000', 30, 7525000, 4, 1, 1, '2017-12-26 14:16:57', '2017-12-26 14:16:57'),
(5, 'HL018018-10+5', 'hl018018-105', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach5.jpg', '<p>HL018018-10+5</p>', 'HL018018-10+5', '<p>HL018018-10+5</p>', '12000000', 30, 8400000, 6, 1, 1, '2017-12-26 14:18:22', '2017-12-26 14:20:24'),
(6, 'HL088070-10+5', 'hl088070-105', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach4.jpg', '<p>HL088070-10+5</p>', 'HL088070-10+5', '<p>HL088070-10+5</p>', '15600000', 30, 10920000, 7, 1, 1, '2017-12-26 14:20:02', '2017-12-26 14:20:02'),
(7, 'HL088006-10+5', 'hl088006-105', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach6.jpg', '<p>HL088006-10+5</p>', 'HL088006-10+5', '<p>HL088006-10+5</p>', '15000000', 30, 10500000, 1, 1, 1, '2017-12-26 14:21:38', '2017-12-26 14:21:38'),
(8, 'HL0121056 L', 'hl0121056-l', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach7.jpg', '<p>HL0121056 L</p>', 'HL0121056 L', '<p>HL0121056 L</p>', '7300000', 30, 5110000, 1, 1, 1, '2017-12-26 14:24:02', '2017-12-26 14:24:02'),
(9, 'HL0121056 M', 'hl0121056-m', 1, 'images/uploads/images/sanpham/phongkhach/phongkhach8.jpg', '<p>HL0121056 M</p>', 'HL0121056 M', '<p>HL0121056 M</p>', '5860000', 30, 4102000, 1, 1, 1, '2017-12-26 14:24:47', '2017-12-26 14:24:47'),
(10, 'HL1086048-H2', 'hl1086048-h2', 1, 'images/uploads/images/sanpham/phongngu/phongngu1.jpg', '<p>HL1086048-H2</p>', 'HL1086048-H2', '<p>HL1086048-H2</p>', '4750000', 30, 3325000, 1, 1, 2, '2017-12-26 14:32:32', '2017-12-26 14:32:32'),
(11, 'HL093333-7-61191', 'hl093333-7-61191', 1, 'images/uploads/images/sanpham/phongngu/phongngu2.png', '<p>HL093333-7-61191</p>', 'HL093333-7-61191', '<p>HL093333-7-61191</p>', '3450000', 30, 2415000, 1, 1, 2, '2017-12-26 14:40:18', '2017-12-26 14:40:18'),
(12, 'HL093333-7-61174', 'hl093333-7-61174', 1, 'images/uploads/images/sanpham/phongngu/phongngu3.png', '<p>HL093333-7-61174</p>', 'HL093333-7-61174', '<p>HL093333-7-61174</p>', '4000000', 30, 2800000, 1, 1, 2, '2017-12-26 14:42:30', '2017-12-26 14:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '<p>administer the website and manage users</p>', '2017-12-23 13:01:45', '2017-12-26 12:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$rG8VdWRLxK5QeV4VA2SM5uANYeHpYtwj2B3WWWyfzwl7gAa3zHkFu', NULL, '2017-12-23 11:59:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
