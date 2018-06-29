-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2018 lúc 10:08 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thinhphat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `image`, `image_mobile`, `description`, `path`, `seo_title`, `seo_description`, `seo_keywords`, `isActive`, `order`, `level`, `parent_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Đèn Trang Trí - Đèn Chiếu Sáng', 'images/uploads/images/danhmuc/den_trnag_tri.jpg', NULL, '<p>Đ&egrave;n Trang Tr&iacute; - Đ&egrave;n Chiếu S&aacute;ng</p>', 'den-trang-tri-den-chieu-sang', 'Đèn Trang Trí - Đèn Chiếu Sáng', '<p>Đ&egrave;n Trang Tr&iacute; - Đ&egrave;n Chiếu S&aacute;ng</p>', NULL, 1, 1, 0, 0, 1, '2017-12-26 13:03:40', '2018-01-03 03:41:48'),
(2, 'Thiết Bị Điện', 'images/uploads/images/danhmuc/temp_list_category_banne_phongngu.jpg', NULL, '<p>Thiết Bị Điện</p>', 'thiet-bi-dien', 'Thiết Bị Điện', '<p>Thiết Bị Điện</p>', NULL, 1, 2, 0, 0, 1, '2017-12-26 13:04:17', '2018-01-01 03:04:37'),
(3, 'Thiết Bị Nước - Thiết Bị Vệ Sinh', 'images/uploads/images/danhmuc/temp_list_category_banne_gianbep.jpg', NULL, '<p>Thiết Bị Nước - Thiết Bị Vệ Sinh</p>', 'thiet-bi-nuoc-thiet-bi-ve-sinh', 'Thiết Bị Nước - Thiết Bị Vệ Sinh', '<p>Thiết Bị Nước - Thiết Bị Vệ Sinh</p>', NULL, 1, 3, 0, 0, 1, '2017-12-26 13:04:42', '2018-01-01 03:05:20'),
(4, 'Thiết Bị Nhà Bếp', 'images/uploads/images/danhmuc/temp_list_category_banne_hanhlang.jpg', NULL, '<p>Thiết Bị Nh&agrave; Bếp</p>', 'thiet-bi-nha-bep', 'Thiết Bị Nhà Bếp', '<p>Thiết Bị Nh&agrave; Bếp</p>', NULL, 1, 4, 0, 0, 1, '2017-12-26 13:05:04', '2018-01-01 03:06:05'),
(5, 'Thiết Kế Thi Công', 'images/uploads/images/danhmuc/temp_list_category_banne_showroom.jpg', NULL, '<p>Thiết Kế Thi C&ocirc;ng</p>', 'thiet-ke-thi-cong', 'Thiết Kế Thi Công', '<p>Thiết Kế Thi C&ocirc;ng</p>', NULL, 0, 5, 0, 0, 1, '2017-12-26 13:05:29', '2018-01-01 03:31:11'),
(6, 'Đèn Treo', 'images/uploads/images/danhmuc/dentreo.jpg', 'http://localhost:8080/thinhphat/http://localhost:8080/thinhpha', '<p>\r\n	Đ&egrave;n Treo\r\n</p>', 'den-treo', 'Đèn Treo', 'Đèn Treo', NULL, 1, 1, 1, 1, 1, '2017-12-26 13:05:59', '2018-06-29 06:48:33'),
(7, 'Đèn Pha Lê', 'images/uploads/images/danhmuc/denphale.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Pha L&ecirc;\r\n</p>', 'den-pha-le', 'Đèn Pha Lê', '<p>Đèn Pha Lê</p>', NULL, 1, 2, 1, 1, 1, '2017-12-26 13:06:19', '2018-06-29 06:53:07'),
(8, 'Đèn Chùm Hiện Đại', 'images/uploads/images/danhmuc/denchumhiendai.jpg', 'http://localhost:8080/thinhphat/http://localhost:8080/thinhpha', '<p>\r\n	Đ&egrave;n Ch&ugrave;m Hiện Đại\r\n</p>', 'den-chum-hien-dai', 'Đèn Chùm Hiện Đại', 'Đèn Chùm Hiện Đại', 'Đèn Chùm Hiện Đại', 1, 3, 1, 1, 1, '2017-12-26 13:06:40', '2018-06-29 06:54:10'),
(9, 'Đèn Chùm Tân Cổ Điển', 'images/uploads/images/danhmuc/denchumtancodien.jpg', 'http://localhost:8080/thinhphat/http://localhost:8080/thinhpha', '<p>\r\n	Đ&egrave;n Ch&ugrave;m T&acirc;n Cổ Điển\r\n</p>', 'den-chum-tan-co-dien', 'Đèn Chùm Tân Cổ Điển', 'Đèn Chùm Tân Cổ Điển', 'Đèn Chùm Tân Cổ Điển', 1, 4, 1, 1, 1, '2018-01-01 03:08:50', '2018-06-29 06:55:04'),
(10, 'Đèn Ốp Trần', 'images/uploads/images/danhmuc/denoptran.png', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Ốp Trần\r\n</p>', 'den-op-tran', 'Đèn Ốp Trần', '<p>Đèn Ốp Trần</p>', NULL, 1, 5, 1, 1, 1, '2018-01-01 03:09:21', '2018-06-29 06:55:43'),
(11, 'Đèn Quạt - Quạt Trần', 'images/uploads/images/danhmuc/denquattran.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Quạt - Quạt Trần\r\n</p>', 'den-quat-quat-tran', 'Đèn Quạt - Quạt Trần', '<p>Đèn Quạt - Quạt Trần</p>', NULL, 1, 6, 1, 1, 1, '2018-01-01 03:10:00', '2018-06-29 06:56:41'),
(12, 'Đèn Downlight', 'images/uploads/images/danhmuc/dendownlight.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Downlight\r\n</p>', 'den-downlight', 'Đèn Downlight', '<p>Đèn Downlight</p>', NULL, 1, 7, 1, 1, 1, '2018-01-01 03:10:33', '2018-06-29 06:57:45'),
(13, 'Đèn Ốp Tường', 'images/uploads/images/danhmuc/denoptuong.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Ốp Tường\r\n</p>', 'den-op-tuong', 'Đèn Ốp Tường', '<p>Đèn Ốp Tường</p>', NULL, 1, 8, 1, 1, 1, '2018-01-01 03:11:12', '2018-06-29 06:59:07'),
(14, 'Đèn Soi Tranh', 'images/uploads/images/danhmuc/densoitranh.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Soi Tranh\r\n</p>', 'den-soi-tranh', 'Đèn Soi Tranh', '<p>Đèn Soi Tranh</p>', NULL, 1, 9, 1, 1, 1, '2018-01-01 03:11:40', '2018-06-29 07:00:13'),
(15, 'Đèn Bàn', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'images/uploads/images/danhmuc/denban.jpg', '<p>\r\n	Đ&egrave;n B&agrave;n\r\n</p>', 'den-ban', 'Đèn Bàn', '<p>Đèn Bàn</p>', NULL, 1, 10, 1, 1, 1, '2018-01-01 03:12:14', '2018-06-29 07:01:04'),
(16, 'Đèn Sân Vườn - Ngoại Thất', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'images/uploads/images/danhmuc/densanvuon.png', '<p>\r\n	Đ&egrave;n S&acirc;n Vườn - Ngoại Thất\r\n</p>', 'den-san-vuon-ngoai-that', 'Đèn Sân Vườn - Ngoại Thất', '<p>Đèn Sân Vườn - Ngoại Thất</p>', NULL, 1, 11, 1, 1, 1, '2018-01-01 03:12:39', '2018-06-29 07:02:20'),
(17, 'Đèn Nghệ Thuật', 'images/uploads/images/danhmuc/dennghethuat.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Đ&egrave;n Nghệ Thuật\r\n</p>', 'den-nghe-thuat', 'Đèn Nghệ Thuật', '<p>Đèn Nghệ Thuật</p>', NULL, 1, 12, 1, 1, 1, '2018-01-01 03:12:59', '2018-06-29 07:03:13'),
(18, 'Đèn Cho Bé', 'images/uploads/images/danhmuc/denchobe.jpg', 'images/uploads/images/danhmuc/denchobe.jpg', '<p>\r\n	Đ&egrave;n Cho B&eacute;\r\n</p>', 'den-cho-be', 'Đèn Cho Bé', '<p>Đèn Cho Bé</p>', NULL, 1, 13, 1, 1, 1, '2018-01-01 03:14:02', '2018-06-29 07:28:08'),
(19, 'Các Loại Đèn Khác', 'images/uploads/images/danhmuc/denkhac.png', 'images/uploads/images/danhmuc/denkhac.png', '<p>\r\n	C&aacute;c Loại Đ&egrave;n Kh&aacute;c\r\n</p>', 'cac-loai-den-khac', 'Các Loại Đèn Khác', '<p>Các Loại Đèn Khác</p>', NULL, 1, 14, 1, 1, 1, '2018-01-01 03:14:38', '2018-06-29 07:28:29'),
(20, 'Thiết Bị Điện Panaonic', 'images/uploads/images/danhmuc/dienpanasonic.png', 'images/uploads/images/danhmuc/dienpanasonic.png', '<p>\r\n	Thiết Bị Điện Panaonic\r\n</p>', 'thiet-bi-dien-panaonic', 'Thiết Bị Điện Panaonic', '<p>Thiết Bị Điện Panaonic</p>', NULL, 1, 1, 1, 2, 1, '2018-01-01 03:19:06', '2018-06-29 07:15:53'),
(21, 'Thiết Bị Điện Schneider', 'images/uploads/images/danhmuc/dienschneider.jpg', 'images/uploads/images/danhmuc/dienschneider.jpg', '<p>\r\n	Thiết Bị Điện Schneider\r\n</p>', 'thiet-bi-dien-schneider', 'Thiết Bị Điện Schneider', '<p>Thiết Bị Điện Schneider</p>', NULL, 1, 2, 1, 2, 1, '2018-01-01 03:19:36', '2018-06-29 07:16:06'),
(22, 'Thiết bị điện MPE', 'images/uploads/images/danhmuc/dienmpe.jpg', 'images/uploads/images/danhmuc/dienmpe.jpg', '<p>\r\n	Thiết bị điện MPE\r\n</p>', 'thiet-bi-dien-mpe', 'Thiết bị điện MPE', '<p>Thiết bị điện MPE</p>', NULL, 1, 3, 1, 2, 1, '2018-01-01 03:19:52', '2018-06-29 07:16:20'),
(23, 'Thiết bị điện Sino', 'images/uploads/images/danhmuc/diensino.jpg', 'images/uploads/images/danhmuc/diensino.jpg', '<p>\r\n	Thiết bị điện Sino\r\n</p>', 'thiet-bi-dien-sino', 'Thiết bị điện Sino', '<p>Thiết bị điện Sino</p>', NULL, 1, 4, 1, 2, 1, '2018-01-01 03:20:48', '2018-06-29 07:16:33'),
(24, 'Ống Nước & Phụ Kiện', 'images/uploads/images/danhmuc/ongnuocvaphukien.jpg', 'images/uploads/images/danhmuc/ongnuocvaphukien.jpg', '<p>\r\n	Ống Nước &amp; Phụ Kiện\r\n</p>', 'ong-nuoc-phu-kien', 'Ống Nước & Phụ Kiện', '<p>Ống Nước & Phụ Kiện</p>', NULL, 1, 1, 1, 3, 1, '2018-01-01 03:21:57', '2018-06-29 07:16:51'),
(25, 'Bồn Cầu', 'images/uploads/images/danhmuc/boncau.jpg', 'images/uploads/images/danhmuc/boncau.jpg', '<p>\r\n	Bồn Cầu\r\n</p>', 'bon-cau', 'Bồn Cầu', '<p>Bồn Cầu</p>', NULL, 1, 2, 1, 3, 1, '2018-01-01 03:22:19', '2018-06-29 07:17:03'),
(26, 'Lavabo', 'images/uploads/images/danhmuc/lavabo.jpg', 'images/uploads/images/danhmuc/lavabo.jpg', '<p>\r\n	Lavabo\r\n</p>', 'lavabo', 'Lavabo', '<p>Lavabo</p>', NULL, 1, 3, 1, 3, 1, '2018-01-01 03:23:07', '2018-06-29 07:17:17'),
(27, 'Vòi Sen', 'images/uploads/images/danhmuc/voisen.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	V&ograve;i Sen\r\n</p>', 'voi-sen', 'Vòi Sen', '<p>Vòi Sen</p>', NULL, 1, 4, 1, 3, 1, '2018-01-01 03:23:30', '2018-06-29 07:18:29'),
(28, 'Vòi Bếp', 'images/uploads/images/danhmuc/voibep.png', 'http://localhost:8080/thinhphat', '<p>\r\n	V&ograve;i Bếp\r\n</p>', 'voi-bep', 'Vòi Bếp', '<p>Vòi Bếp</p>', NULL, 1, 5, 1, 3, 1, '2018-01-01 03:23:54', '2018-06-29 07:19:04'),
(29, 'Chậu Rửa Inox - Chậu Rửa Đá', 'images/uploads/images/danhmuc/chauruainox.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Chậu Rửa Inox - Chậu Rửa Đ&aacute;\r\n</p>', 'chau-rua-inox-chau-rua-da', 'Chậu Rửa Inox - Chậu Rửa Đá', '<p>Chậu Rửa Inox - Chậu Rửa Đá</p>', NULL, 1, 6, 1, 3, 1, '2018-01-01 03:24:34', '2018-06-29 07:20:56'),
(30, 'Bồn Nước Inox', 'images/uploads/images/danhmuc/bonruainox.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Bồn Nước Inox\r\n</p>', 'bon-nuoc-inox', 'Bồn Nước Inox', '<p>Bồn Nước Inox</p>', NULL, 1, 7, 1, 3, 1, '2018-01-01 03:25:09', '2018-06-29 07:21:51'),
(31, 'Năng Lượng Mặt Trời', 'images/uploads/images/danhmuc/nangluongmattroi.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Năng Lượng Mặt Trời\r\n</p>', 'nang-luong-mat-troi', 'Năng Lượng Mặt Trời', '<p>Năng Lượng Mặt Trời</p>', NULL, 1, 8, 1, 3, 1, '2018-01-01 03:25:33', '2018-06-29 07:22:52'),
(32, 'Máy Lọc Nước', 'images/uploads/images/danhmuc/maylocnuoc.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	M&aacute;y Lọc Nước\r\n</p>', 'may-loc-nuoc', 'Máy Lọc Nước', '<p>Máy Lọc Nước</p>', NULL, 1, 9, 1, 3, 1, '2018-01-01 03:26:06', '2018-06-29 07:23:32'),
(33, 'Bình Nóng Lạnh', 'images/uploads/images/danhmuc/binhnonglanh.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	B&igrave;nh N&oacute;ng Lạnh\r\n</p>', 'binh-nong-lanh', 'Bình Nóng Lạnh', '<p>Bình Nóng Lạnh</p>', NULL, 1, 10, 1, 3, 1, '2018-01-01 03:27:08', '2018-06-29 07:24:12'),
(34, 'Phụ Kiện Phòng Tắm', 'images/uploads/images/danhmuc/phukienphongtam.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Phụ Kiện Ph&ograve;ng Tắm\r\n</p>', 'phu-kien-phong-tam', 'Phụ Kiện Phòng Tắm', '<p>Phụ Kiện Phòng Tắm</p>', NULL, 1, 11, 1, 3, 1, '2018-01-01 03:27:38', '2018-06-29 07:25:09'),
(35, 'Lò Nướng', 'images/uploads/images/danhmuc/lonuong.png', 'http://localhost:8080/thinhphat', '<p>\r\n	L&ograve; Nướng\r\n</p>', 'lo-nuong', 'Lò Nướng', '<p>Lò Nướng</p>', NULL, 1, 1, 1, 4, 1, '2018-01-01 03:28:19', '2018-06-29 07:25:50'),
(36, 'Bếp Từ', 'images/uploads/images/danhmuc/beptu.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Bếp Từ\r\n</p>', 'bep-tu', 'Bếp Từ', '<p>Bếp Từ</p>', NULL, 1, 2, 1, 4, 1, '2018-01-01 03:28:39', '2018-06-29 07:26:25'),
(37, 'Quạt Hút', 'images/uploads/images/danhmuc/quathut.jpg', 'http://localhost:8080/thinhphat', '<p>\r\n	Quạt H&uacute;t\r\n</p>', 'quat-hut', 'Quạt Hút', '<p>Quạt Hút</p>', NULL, 1, 3, 1, 4, 1, '2018-01-01 03:29:02', '2018-06-29 07:27:16'),
(38, 'Thiết Kế Kiến Trúc', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', NULL, '<p>Thiết Kế Kiến Tr&uacute;c</p>', 'thiet-ke-kien-truc', 'Thiết Kế Kiến Trúc', '<p>Thiết Kế Kiến Tr&uacute;c</p>', NULL, 1, 1, 1, 5, 1, '2018-01-01 03:29:48', '2018-01-01 03:29:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_permissions`
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
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p>\r\n	<strong><em><span style=\"background-color:#f1c40f;\">Hotline đặt hàng</span>:</em></strong><em>&nbsp;&nbsp;<strong>097.388.9336 - 0914.675.777</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;&nbsp;<strong>097.388.9336</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Thông tin liên hệ với chúng tôi:</em></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THÉP KHÁNH NAM</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>TRỤ SỞ CHÍNH:</strong>&nbsp;<em>201 Bình Thành, KP 4, P. Bình Hưng Hòa, Q. Bình Tân, thành phố Hồ Chí Minh</em>\r\n</p>\r\n\r\n<p>\r\n	<strong>Di động:</strong><em>&nbsp;097.388.9336 - 0914.675.777</em>\r\n</p>', NULL, NULL, 1, NULL, '2018-03-30 09:07:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_23_195635_create_entrust_setup_tables', 2),
(4, '2017_12_24_085328_create_categories_table', 3),
(5, '2017_12_26_140629_create_products_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
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
-- Đang đổ dữ liệu cho bảng `permissions`
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
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
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
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `category_item_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `seo_title`, `seo_description`, `seo_keywords`, `post_type`, `isActive`, `category_item_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới Thiệu', 'gioi-thieu', '<p>123</p>', '<p>123</p>', '0', '123', '<p>123</p>', NULL, 0, 1, 0, 1, '2018-01-01 02:22:24', '2018-01-01 02:22:24'),
(2, 'Catalogue Đèn Trang Trí', 'catalogue-den-trang-tri', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Đèn Trang Trí', '<p>Catalogue Đ&egrave;n Trang Tr&iacute;</p>', NULL, 2, 1, 0, 1, '2018-01-01 04:16:07', '2018-01-01 04:16:07'),
(3, 'Catalogue Thiết Bị Điện', 'catalogue-thiet-bi-dien', '<p>Catalogue Thiết Bị Điện</p>', '<p>Catalogue Thiết Bị Điện</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Điện', '<p>Catalogue Thiết Bị Điện</p>', NULL, 2, 1, 0, 1, '2018-01-01 04:16:40', '2018-01-01 04:16:40'),
(4, 'Catalogue Thiết Bị Nước - WC', 'catalogue-thiet-bi-nuoc-wc', '<p>Catalogue Thiết Bị Nước - WC</p>', '<p>Catalogue Thiết Bị Nước - WC</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Nước - WC', '<p>Catalogue Thiết Bị Nước - WC</p>', NULL, 2, 1, 0, 1, '2018-01-01 04:17:04', '2018-01-01 04:17:04'),
(5, 'Catalogue Thiết Bị Nhà Bếp', 'catalogue-thiet-bi-nha-bep', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', 'images/uploads/images/danhmuc/temp_list_category_banne_dotrangtri.jpg', 'Catalogue Thiết Bị Nhà Bếp', '<p>Catalogue Thiết Bị Nh&agrave; Bếp</p>', NULL, 2, 1, 0, 1, '2018-01-01 04:17:31', '2018-01-01 04:17:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `is_best_sale` tinyint(4) DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` int(11) DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `path`, `isActive`, `is_best_sale`, `image`, `description`, `content`, `code`, `seo_title`, `seo_description`, `seo_keywords`, `price`, `sale`, `final_price`, `order`, `user_id`, `category_product_id`, `created_at`, `updated_at`) VALUES
(1, 'HL0171806 L', 'hl0171806-l', 1, 1, 'images/uploads/images/sanpham/denchumhiendai/HL0171806_L.jpg', '<p>\r\n	HL0171806 L\r\n</p>', '<p>\r\n	HL0171806 L\r\n</p>', 'HL0171806', 'HL0171806 L', 'HL0171806 L', 'HL0171806 L', '12400000', 30, 8680000, 1, 1, 8, '2017-12-26 13:58:02', '2018-06-29 08:07:51'),
(2, 'HL0171806 M', 'hl0171806-m', 1, 0, 'images/uploads/images/sanpham/denchumhiendai/HL0171806_M.jpg', '<p>\r\n	HL0171806 M\r\n</p>', '<p>\r\n	HL0171806\r\n</p>', 'HL0171806', 'HL0171806 M', 'HL0171806', 'HL0171806', '8910000', 30, 6237000, 2, 1, 8, '2017-12-26 14:00:09', '2018-06-29 08:05:14'),
(3, 'HL0151042', 'hl0151042', 1, 0, 'images/uploads/images/sanpham/denchumhiendai/HL0151042.jpg', '<p>\r\n	HL0151042\r\n</p>', '<p>\r\n	HL0151042\r\n</p>', 'HL0151042', 'HL0151042', 'HL0151042', 'HL0151042', '8360000', 30, 5852000, 2, 1, 8, '2017-12-26 14:02:31', '2018-06-29 08:04:09'),
(4, 'HL120072', 'hl120072', 1, 1, 'images/uploads/images/sanpham/denchumtancodien/HL120072.jpg', '<p>\r\n	HL120072\r\n</p>', '<p>\r\n	HL120072\r\n</p>', 'HL120072', 'HL120072', 'HL120072', 'HL120072', '10750000', 30, 7525000, 4, 1, 9, '2017-12-26 14:16:57', '2018-06-29 08:01:36'),
(5, 'HL018018-10+5', 'hl018018-105', 1, 0, 'images/uploads/images/sanpham/denchumtancodien/HL018018_10_5.jpg', '<p>\r\n	HL018018-10+5\r\n</p>', '<p>\r\n	HL018018\r\n</p>', 'HL018018', 'HL018018-10+5', 'HL018018-10+5', 'HL018018-10+5', '12000000', 30, 8400000, 6, 1, 9, '2017-12-26 14:18:22', '2018-06-29 07:55:11'),
(6, 'HL088070-10+5', 'hl088070-105', 1, 0, 'images/uploads/images/sanpham/denchumtancodien/HL088070_10_5.jpg', '<p>\r\n	HL088070-10+5\r\n</p>', '<p>\r\n	HL088070\r\n</p>', 'HL088070', 'HL088070-10+5', 'HL088070', 'HL088070', '15600000', 30, 10920000, 7, 1, 9, '2017-12-26 14:20:02', '2018-06-29 07:53:47'),
(7, 'HL088006-10+5', 'hl088006-105', 1, 0, 'images/uploads/images/sanpham/denchumtancodien/HL088006_10_5.jpg', '<p>\r\n	HL088006-10+5\r\n</p>', '<p>\r\n	HL088006-10+5\r\n</p>', NULL, 'HL088006-10+5', 'HL088006-10+5', 'HL088006-10+5', '15000000', 30, 10500000, 1, 1, 9, '2017-12-26 14:21:38', '2018-06-29 07:52:29'),
(8, 'HL0121056 L', 'hl0121056-l', 1, 1, 'images/uploads/images/sanpham/denchumhiendai/HL0121056_L.jpg', '<p>\r\n	HL0121056 L\r\n</p>', NULL, NULL, 'HL0121056 L', '<p>HL0121056 L</p>', NULL, '7300000', 30, 5110000, 1, 1, 8, '2017-12-26 14:24:02', '2018-06-29 07:51:08'),
(9, 'HL0121056 M', 'hl0121056-m', 1, 1, 'images/uploads/images/sanpham/denchumhiendai/HL0121056_M.jpg', '<p>\r\n	HL0121056 M\r\n</p>', NULL, NULL, 'HL0121056 M', '<p>HL0121056 M</p>', NULL, '5860000', 30, 4102000, 1, 1, 8, '2017-12-26 14:24:47', '2018-06-29 07:49:41'),
(10, 'HL1086048-H2', 'hl1086048-h2', 1, 0, 'images/uploads/images/sanpham/dentreo/HL1086048-H2.jpg', '<p>\r\n	HL1086048-H2\r\n</p>', '<p>\r\n	HL1086048-H2\r\n</p>', NULL, 'HL1086048-H2', 'HL1086048-H2', 'HL1086048-H2', '4750000', 30, 3325000, 1, 1, 6, '2017-12-26 14:32:32', '2018-06-29 07:47:51'),
(11, 'HL093333-7-61191', 'hl093333-7-61191', 1, 0, 'images/uploads/images/sanpham/denban/HL093333-7-61191.jpg', '<p>\r\n	HL093333-7-61191\r\n</p>', '<p>\r\n	HL093333\r\n</p>', 'HL093333', 'HL093333-7-61191', 'HL093333-7-61191', NULL, '3450000', 30, 2415000, 1, 1, 15, '2017-12-26 14:40:18', '2018-06-29 07:44:52'),
(12, 'HL093333-7-61174', 'hl093333-7-61174', 1, 1, 'images/uploads/images/sanpham/denban/HL093333.jpg', '<p>\r\n	HL093333-7-61174\r\n</p>', NULL, NULL, 'HL093333-7-61174', 'HL093333-7-61174', NULL, '4000000', 30, 2800000, 1, 1, 15, '2017-12-26 14:42:30', '2018-06-29 07:43:28'),
(13, 'HL04116', 'hl04116', 1, 1, 'images/uploads/images/sanpham/dentreo/HL1086048.jpg', '<p>\r\n	HL04116\r\n</p>', NULL, NULL, 'HL04116', '<p>HL04116</p>', NULL, '3250000', 30, 2275000, 1, 1, 6, '2017-12-27 03:06:01', '2018-06-29 07:40:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
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
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '<p>administer the website and manage users</p>', '2017-12-23 13:01:45', '2017-12-26 12:27:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$rG8VdWRLxK5QeV4VA2SM5uANYeHpYtwj2B3WWWyfzwl7gAa3zHkFu', NULL, '2017-12-23 11:59:19', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_product_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
