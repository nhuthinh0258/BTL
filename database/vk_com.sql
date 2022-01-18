-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2022 lúc 12:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vk.com`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_media`
--

CREATE TABLE `db_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `ten_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_up` datetime NOT NULL,
  `trangthai` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `chusohuu` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_media`
--

INSERT INTO `db_media` (`id`, `ten_file`, `ngay_up`, `trangthai`, `chusohuu`) VALUES
(1, 'Base.png', '2022-01-18 03:58:52', '1', 1),
(2, '2.jpg', '2022-01-18 04:03:13', '1', 1),
(3, 'catagory.png', '2022-01-18 04:25:17', '1', 1),
(4, '4.jpg', '2022-01-18 04:26:45', '1', 1),
(5, 'Lina Happy clients.png', '2022-01-18 04:31:04', '1', 1),
(6, '1.Hệ phương trình tuyến tính.pdf', '2022-01-18 05:48:41', '1', 1),
(8, 'Body Champ Cardio $342.00 .png', '2022-01-18 14:26:45', '1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_userdangnhap`
--

CREATE TABLE `db_userdangnhap` (
  `mauser` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0 COMMENT 'DEFAULT ''0''',
  `email_check_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_userdangnhap`
--

INSERT INTO `db_userdangnhap` (`mauser`, `email`, `sodienthoai`, `matkhau`, `email_check`, `trangthai`, `email_check_date`) VALUES
(1, 'nhuthinh0258@gmail.com', '01234567899', '1524658a', '', 0, NULL),
(3, 'zzbalitaba@gmail.com', '123456786', '$2y$10$BaqEabRgcb3774IawrqvcekEv/TemxyUz2qmVUnBSGmMbfMsDXvMK', '782b7c8ac72ee5d9b3e64eeb2220113d4780', 0, NULL),
(6, 'thinhnn72@wru.vn', '123456789', '$2y$10$oi2uHrnH61yY759q/AIlduHMmvjq5FeUDs/ZZ1fZHqxKhoHPk4KFW', '22e5d84063ba838ac90720bc3d44d93c3968', 1, '2022-01-18 05:21:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_userlog`
--

CREATE TABLE `db_userlog` (
  `id` int(11) NOT NULL,
  `mauser` int(10) UNSIGNED NOT NULL,
  `ho_dem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_userlog`
--

INSERT INTO `db_userlog` (`id`, `mauser`, `ho_dem`, `ten`, `ngaysinh`, `gioitinh`) VALUES
(1, 6, 'Nguyễn Như', 'Thịnh', '1999-12-04', 'Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_media`
--
ALTER TABLE `db_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chusohuu` (`chusohuu`);

--
-- Chỉ mục cho bảng `db_userdangnhap`
--
ALTER TABLE `db_userdangnhap`
  ADD PRIMARY KEY (`mauser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `db_userlog`
--
ALTER TABLE `db_userlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mauser` (`mauser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_media`
--
ALTER TABLE `db_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `db_userdangnhap`
--
ALTER TABLE `db_userdangnhap`
  MODIFY `mauser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_userlog`
--
ALTER TABLE `db_userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_media`
--
ALTER TABLE `db_media`
  ADD CONSTRAINT `db_media_ibfk_1` FOREIGN KEY (`chusohuu`) REFERENCES `db_userdangnhap` (`mauser`);

--
-- Các ràng buộc cho bảng `db_userlog`
--
ALTER TABLE `db_userlog`
  ADD CONSTRAINT `db_userlog_ibfk_1` FOREIGN KEY (`mauser`) REFERENCES `db_userdangnhap` (`mauser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
