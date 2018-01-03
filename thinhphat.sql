-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2018 at 04:06 PM
-- Server version: 10.1.18-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thinhphatlighti_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `path`, `seo_title`, `seo_description`, `isActive`, `order`, `level`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Đèn Trang Trí - Đèn Chiếu Sáng', 'images/uploads/images/danhmuc/den_trnag_tri.jpg', '<p>Đ&egrave;n Trang Tr&iacute; - Đ&egrave;n Chiếu S&aacute;ng</p>', 'den-trang-tri-den-chieu-sang', 'Đèn Trang Trí - Đèn Chiếu Sáng', '<p>Đ&egrave;n Trang Tr&iacute; - Đ&egrave;n Chiếu S&aacute;ng</p>', 1, 1, 0, 0, 1, '2017-12-26 13:03:40', '2018-01-03 03:41:48'),
(2, 'Thiết Bị Điện', 'images/uploads/images/danhmuc/temp_list_category_banne_phongngu.jpg', '<p>Thiết Bị Điện</p>', 'thiet-bi-dien', 'Thiết Bị Điện', '<p>Thiết Bị Điện</p>', 1, 2, 0, 0, 1, '2017-12-26 13:04:17', '2018-01-01 03:04:37'),
(3, 'Thiết Bị Nước - Thiết Bị Vệ Sinh', 'images/uploads/images/danhmuc/temp_list_category_banne_gianbep.jpg', '<p>Thiết Bị Nước - Thiết Bị Vệ Sinh</p>', 'thiet-bi-nuoc-thiet-bi-ve-sinh', 'Thiết Bị Nước - Thiết Bị Vệ Sinh', '<p>Thiết Bị Nước - Thiết Bị Vệ Sinh</p>', 1, 3, 0, 0, 1, '2017-12-26 13:04:42', '2018-01-01 03:05:20'),
(4, 'Thiết Bị Nhà Bếp', 'images/uploads/images/danhmuc/temp_list_category_banne_hanhlang.jpg', '<p>Thiết Bị Nh&agrave; Bếp</p>', 'thiet-bi-nha-bep', 'Thiết Bị Nhà Bếp', '<p>Thiết Bị Nh&agrave; Bếp</p>', 1, 4, 0, 0, 1, '2017-12-26 13:05:04', '2018-01-01 03:06:05'),
(5, 'Thiết Kế Thi Công', 'images/uploads/images/danhmuc/temp_list_category_banne_showroom.jpg', '<p>Thiết Kế Thi C&ocirc;ng</p>', 'thiet-ke-thi-cong', 'Thiết Kế Thi Công', '<p>Thiết Kế Thi C&ocirc;ng</p>', 0, 5, 0, 0, 1, '2017-12-26 13:05:29', '2018-01-01 03:31:11'),
(6, 'Đèn Chùm', 'images/uploads/images/danhmuc/temp_list_category_banne_tranhnghethuat.jpg', '<p>Đ&egrave;n Ch&ugrave;m</p>', 'den-chum', 'Đèn Chùm', '<p>Đ&egrave;n Ch&ugrave;m</p>', 1, 1, 1, 1, 1, '2017-12-26 13:05:59', '2018-01-01 03:14:53'),
(7, 'Đèn Pha Lê', 'images/uploads/images/danhmuc/temp_list_category_banne_thietbikhac.jpg', '<p>Đ&egrave;n Pha L&ecirc;</p>', 'den-pha-le', 'Đèn Pha Lê', '<p>Đ&egrave;n Pha L&ecirc;</p>', 1, 2, 1, 1, 1, '2017-12-26 13:06:19', '2018-01-01 03:15:07'),
(8, 'Đèn Mâm', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n M&acirc;m</p>', 'den-mam', 'Đèn Mâm', '<p>Đ&egrave;n M&acirc;m</p>', 1, 3, 1, 1, 1, '2017-12-26 13:06:40', '2018-01-01 03:15:27'),
(9, 'Đèn Thả', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Thả</p>', 'den-tha', 'Đèn Thả', '<p>Đ&egrave;n Thả</p>', 1, 4, 1, 1, 1, '2018-01-01 03:08:50', '2018-01-01 03:15:37'),
(10, 'Đèn Ốp Trần', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Ốp Trần</p>', 'den-op-tran', 'Đèn Ốp Trần', '<p>Đ&egrave;n Ốp Trần</p>', 1, 5, 1, 1, 1, '2018-01-01 03:09:21', '2018-01-01 03:15:48'),
(11, 'Đèn Quạt - Quạt Trần', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Quạt - Quạt Trần</p>', 'den-quat-quat-tran', 'Đèn Quạt - Quạt Trần', '<p>Đ&egrave;n Quạt - Quạt Trần</p>', 1, 6, 1, 1, 1, '2018-01-01 03:10:00', '2018-01-01 03:16:27'),
(12, 'Đèn Downlight', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Downlight</p>', 'den-downlight', 'Đèn Downlight', '<p>Đ&egrave;n Downlight</p>', 1, 7, 1, 1, 1, '2018-01-01 03:10:33', '2018-01-01 03:17:11'),
(13, 'Đèn Ốp Tường', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Ốp Tường</p>', 'den-op-tuong', 'Đèn Ốp Tường', '<p>Đ&egrave;n Ốp Tường</p>', 1, 8, 1, 1, 1, '2018-01-01 03:11:12', '2018-01-01 03:17:22'),
(14, 'Đèn Soi Tranh', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Soi Tranh</p>', 'den-soi-tranh', 'Đèn Soi Tranh', '<p>Đ&egrave;n Soi Tranh</p>', 1, 9, 1, 1, 1, '2018-01-01 03:11:40', '2018-01-01 03:17:33'),
(15, 'Đèn Bàn', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n B&agrave;n</p>', 'den-ban', 'Đèn Bàn', '<p>Đ&egrave;n B&agrave;n</p>', 1, 10, 1, 1, 1, '2018-01-01 03:12:14', '2018-01-01 03:17:45'),
(16, 'Đèn Sân Vườn - Ngoại Thất', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n S&acirc;n Vườn - Ngoại Thất</p>', 'den-san-vuon-ngoai-that', 'Đèn Sân Vườn - Ngoại Thất', '<p>Đ&egrave;n S&acirc;n Vườn - Ngoại Thất</p>', 1, 11, 1, 1, 1, '2018-01-01 03:12:39', '2018-01-01 03:17:54'),
(17, 'Đèn Nghệ Thuật', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Nghệ Thuật</p>', 'den-nghe-thuat', 'Đèn Nghệ Thuật', '<p>Đ&egrave;n Nghệ Thuật</p>', 1, 12, 1, 1, 1, '2018-01-01 03:12:59', '2018-01-01 03:18:01'),
(18, 'Đèn Cho Bé', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Đ&egrave;n Cho B&eacute;</p>', 'den-cho-be', 'Đèn Cho Bé', '<p>Đ&egrave;n Cho B&eacute;</p>', 1, 13, 1, 1, 1, '2018-01-01 03:14:02', '2018-01-01 03:18:09'),
(19, 'Các Loại Đèn Khác', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>C&aacute;c Loại Đ&egrave;n Kh&aacute;c</p>', 'cac-loai-den-khac', 'Các Loại Đèn Khác', '<p>C&aacute;c Loại Đ&egrave;n Kh&aacute;c</p>', 1, 14, 1, 1, 1, '2018-01-01 03:14:38', '2018-01-01 03:18:20'),
(20, 'Thiết Bị Điện Panaonic', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Thiết Bị Điện Panaonic</p>', 'thiet-bi-dien-panaonic', 'Thiết Bị Điện Panaonic', '<p>Thiết Bị Điện Panaonic</p>', 1, 1, 1, 2, 1, '2018-01-01 03:19:06', '2018-01-01 03:19:06'),
(21, 'Thiết Bị Điện Schneider', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Thiết Bị Điện Schneider</p>', 'thiet-bi-dien-schneider', 'Thiết Bị Điện Schneider', '<p>Thiết Bị Điện Schneider</p>', 1, 2, 1, 2, 1, '2018-01-01 03:19:36', '2018-01-01 03:30:50'),
(22, 'Thiết bị điện MPE', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Thiết bị điện MPE</p>', 'thiet-bi-dien-mpe', 'Thiết bị điện MPE', '<p>Thiết bị điện MPE</p>', 1, 3, 1, 2, 1, '2018-01-01 03:19:52', '2018-01-01 03:21:00'),
(23, 'Thiết bị điện Sino', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Thiết bị điện Sino</p>', 'thiet-bi-dien-sino', 'Thiết bị điện Sino', '<p>Thiết bị điện Sino</p>', 1, 4, 1, 2, 1, '2018-01-01 03:20:48', '2018-01-01 03:20:48'),
(24, 'Ống Nước & Phụ Kiện', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Ống Nước &amp; Phụ Kiện</p>', 'ong-nuoc-phu-kien', 'Ống Nước & Phụ Kiện', '<p>Ống Nước &amp; Phụ Kiện</p>', 1, 1, 1, 3, 1, '2018-01-01 03:21:57', '2018-01-01 03:21:57'),
(25, 'Bồn Cầu', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Bồn Cầu</p>', 'bon-cau', 'Bồn Cầu', '<p>Bồn Cầu</p>', 1, 2, 1, 3, 1, '2018-01-01 03:22:19', '2018-01-01 03:22:34'),
(26, 'Lavabo', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Lavabo</p>', 'lavabo', 'Lavabo', '<p>Lavabo</p>', 1, 3, 1, 3, 1, '2018-01-01 03:23:07', '2018-01-01 03:23:07'),
(27, 'Vòi Sen', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>V&ograve;i Sen</p>', 'voi-sen', 'Vòi Sen', '<p>V&ograve;i Sen</p>', 1, 4, 1, 3, 1, '2018-01-01 03:23:30', '2018-01-01 03:23:30'),
(28, 'Vòi Bếp', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>V&ograve;i Bếp</p>', 'voi-bep', 'Vòi Bếp', '<p>V&ograve;i Bếp</p>', 1, 5, 1, 3, 1, '2018-01-01 03:23:54', '2018-01-01 03:23:54'),
(29, 'Chậu Rửa Inox - Chậu Rửa Đá', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Chậu Rửa Inox - Chậu Rửa Đ&aacute;</p>', 'chau-rua-inox-chau-rua-da', 'Chậu Rửa Inox - Chậu Rửa Đá', '<p>Chậu Rửa Inox - Chậu Rửa Đ&aacute;</p>', 1, 6, 1, 3, 1, '2018-01-01 03:24:34', '2018-01-01 03:24:34'),
(30, 'Bồn Nước Inox', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Bồn Nước Inox</p>', 'bon-nuoc-inox', 'Bồn Nước Inox', '<p>Bồn Nước Inox</p>', 1, 7, 1, 3, 1, '2018-01-01 03:25:09', '2018-01-01 03:25:09'),
(31, 'Năng Lượng Mặt Trời', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Năng Lượng Mặt Trời</p>', 'nang-luong-mat-troi', 'Năng Lượng Mặt Trời', '<p>Năng Lượng Mặt Trời</p>', 1, 8, 1, 3, 1, '2018-01-01 03:25:33', '2018-01-01 03:26:21'),
(32, 'Máy Lọc Nước', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>M&aacute;y Lọc Nước</p>', 'may-loc-nuoc', 'Máy Lọc Nước', '<p>M&aacute;y Lọc Nước</p>', 1, 9, 1, 3, 1, '2018-01-01 03:26:06', '2018-01-01 03:26:06'),
(33, 'Bình Nóng Lạnh', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>B&igrave;nh N&oacute;ng Lạnh</p>', 'binh-nong-lanh', 'Bình Nóng Lạnh', '<p>B&igrave;nh N&oacute;ng Lạnh</p>', 1, 10, 1, 3, 1, '2018-01-01 03:27:08', '2018-01-01 03:27:08'),
(34, 'Phụ Kiện Phòng Tắm', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Phụ Kiện Ph&ograve;ng Tắm</p>', 'phu-kien-phong-tam', 'Phụ Kiện Phòng Tắm', '<p>Phụ Kiện Ph&ograve;ng Tắm</p>', 1, 11, 1, 3, 1, '2018-01-01 03:27:38', '2018-01-01 03:27:38'),
(35, 'Lò Nướng', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>L&ograve; Nướng</p>', 'lo-nuong', 'Lò Nướng', '<p>L&ograve; Nướng</p>', 1, 1, 1, 4, 1, '2018-01-01 03:28:19', '2018-01-01 03:28:19'),
(36, 'Bếp Từ', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Bếp Từ</p>', 'bep-tu', 'Bếp Từ', '<p>Bếp Từ</p>', 1, 2, 1, 4, 1, '2018-01-01 03:28:39', '2018-01-01 03:28:39'),
(37, 'Quạt Hút', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Quạt H&uacute;t</p>', 'quat-hut', 'Quạt Hút', '<p>Quạt H&uacute;t</p>', 1, 3, 1, 4, 1, '2018-01-01 03:29:02', '2018-01-01 03:29:02'),
(38, 'Thiết Kế Kiến Trúc', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', '<p>Thiết Kế Kiến Tr&uacute;c</p>', 'thiet-ke-kien-truc', 'Thiết Kế Kiến Trúc', '<p>Thiết Kế Kiến Tr&uacute;c</p>', 1, 1, 1, 5, 1, '2018-01-01 03:29:48', '2018-01-01 03:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE IF NOT EXISTS `category_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_permissions_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2017-12-23 13:04:28', '2017-12-23 13:04:28'),
(2, 'User', '2017-12-23 13:04:28', '2017-12-23 13:04:28'),
(3, 'Loại Sản Phẩm', '2017-12-24 02:03:30', '2017-12-24 02:03:30'),
(4, 'Sản Phẩm', '2017-12-26 08:57:53', '2017-12-26 08:57:53'),
(5, 'Page', '2017-12-30 12:21:43', '2017-12-30 12:21:43'),
(6, 'Post', '2017-12-30 12:21:44', '2017-12-30 12:21:44'),
(7, 'Catalogue', '2018-01-01 04:06:39', '2018-01-01 04:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`),
  KEY `permissions_category_permission_id_foreign` (`category_permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=30 ;

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
(16, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 4, '2017-12-26 08:58:57', '2017-12-26 08:58:57'),
(17, 'page-list', 'Xem Toàn Bộ Trang', 'Được Xem Toàn Bộ Trang', 5, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(18, 'page-create', 'Tạo Trang Mới', 'Được Tạo Trang Mới', 5, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(19, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 5, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(20, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 5, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(21, 'post-list', 'Xem Toàn Bộ Bài Viết', 'Được Xem Toàn Bộ Bài Viết', 6, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(22, 'post-create', 'Tạo Bài Viết Mới', 'Được Tạo Bài Viết Mới', 6, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(23, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 6, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(24, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 6, '2017-12-30 12:24:39', '2017-12-30 12:24:39'),
(26, 'catalogue-list', 'Xem Toàn Bộ Catalogue', 'Được Xem Toàn Bộ Catalogue', 7, '2018-01-01 04:08:33', '2018-01-01 04:08:33'),
(27, 'catalogue-create', 'Tạo Catalogue Mới', 'Được Tạo Catalogue Mới', 7, '2018-01-01 04:08:33', '2018-01-01 04:08:33'),
(28, 'catalogue-edit', 'Cập Nhật Catalogue', 'Được Cập Nhật Catalogue', 7, '2018-01-01 04:08:33', '2018-01-01 04:08:33'),
(29, 'catalogue-delete', 'Xóa Catalogue', 'Được Xóa Catalogue', 7, '2018-01-01 04:08:33', '2018-01-01 04:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
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
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `seo_title`, `seo_description`, `post_type`, `isActive`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới Thiệu', 'gioi-thieu', '<p>123</p>', '<p>123</p>', '0', '123', '<p>123</p>', 0, 1, 1, '2018-01-01 02:22:24', '2018-01-01 02:22:24'),
(2, 'Catalogue Đèn Trang Trí', 'catalogue-den-trang-tri', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Đèn Trang Trí', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', 2, 1, 1, '2018-01-01 04:16:07', '2018-01-01 04:16:07'),
(3, 'Catalogue Thiết Bị Điện', 'catalogue-thiet-bi-dien', '<p>Catalogue Thiết Bị Điện</p>', '<p>Catalogue Thiết Bị Điện</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Điện', '<p>Catalogue Thiết Bị Điện</p>', 2, 1, 1, '2018-01-01 04:16:40', '2018-01-01 04:16:40'),
(4, 'Catalogue Thiết Bị Nước - WC', 'catalogue-thiet-bi-nuoc-wc', '<p>Catalogue Thiết Bị Nước - WC</p>', '<p>Catalogue Thiết Bị Nước - WC</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Nước - WC', '<p>Catalogue Thiết Bị Nước - WC</p>', 2, 1, 1, '2018-01-01 04:17:04', '2018-01-01 04:17:04'),
(5, 'Catalogue Thiết Bị Nhà Bếp', 'catalogue-thiet-bi-nha-bep', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Nhà Bếp', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', 2, 1, 1, '2018-01-01 04:17:31', '2018-01-01 04:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

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
(12, 'HL093333-7-61174', 'hl093333-7-61174', 1, 'images/uploads/images/sanpham/phongngu/phongngu3.png', '<p>HL093333-7-61174</p>', 'HL093333-7-61174', '<p>HL093333-7-61174</p>', '4000000', 30, 2800000, 1, 1, 2, '2017-12-26 14:42:30', '2017-12-26 14:42:30'),
(13, 'HL04116', 'hl04116', 1, 'images/uploads/images/sanpham/phongngu/phongngu4.jpg', '<p>HL04116</p>', 'HL04116', '<p>HL04116</p>', '3250000', 30, 2275000, 1, 1, 2, '2017-12-27 03:06:01', '2017-12-27 03:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '<p>administer the website and manage users</p>', '2017-12-23 13:01:45', '2017-12-26 12:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$rG8VdWRLxK5QeV4VA2SM5uANYeHpYtwj2B3WWWyfzwl7gAa3zHkFu', NULL, '2017-12-23 11:59:19', NULL);

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
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
