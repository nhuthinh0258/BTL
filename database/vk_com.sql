-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2022 lúc 05:57 AM
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
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `_id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(500) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `last_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friendship`
--

CREATE TABLE `friendship` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group`
--

CREATE TABLE `group` (
  `_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `last_updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `group`
--

INSERT INTO `group` (`_id`, `name`, `description`, `created_date`, `last_updated`) VALUES
(1, 'Chơi đồ Kamen Rider\r\n', 'Group cho kamen raider', '2022-01-19', '2022-01-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `url` text NOT NULL,
  `caption` varchar(80) NOT NULL,
  `media_type` enum('video','audio','document','photo') NOT NULL DEFAULT 'photo',
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership`
--

CREATE TABLE `membership` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `_id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(80) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `last_updated` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `birthday` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email_check` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `last_updated` date NOT NULL DEFAULT current_timestamp(),
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`_id`, `first_name`, `last_name`, `gender`, `birthday`, `phone`, `email`, `email_check`, `username`, `password`, `created_date`, `last_updated`, `role`) VALUES
(2, 'Thịnh', 'Nguyễn Như', 'male', '1999-12-04', '0981149985', 'nhuthinh@gmail.com', '', 'nhuthinh', 'Nhutren@@123', '2022-01-18', '2022-01-18', 'admin'),
(10, 'Hiếu', 'Nguyễn Minh', 'male', '2022-01-18', NULL, 'zzbalitaba@gmail.com', '', 'zzbalitaba', 'Nhutren@@123', '2022-01-18', '2022-01-18', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`user_id`,`friend_id`),
  ADD KEY `FK_FRIENDS_2` (`friend_id`);

--
-- Chỉ mục cho bảng `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`_id`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `source_id` (`user_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`group_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `group`
--
ALTER TABLE `group`
  MODIFY `_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `user` (`_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`_id`);

--
-- Các ràng buộc cho bảng `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `FK_FRIENDS_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`_id`),
  ADD CONSTRAINT `FK_FRIENDS_2` FOREIGN KEY (`friend_id`) REFERENCES `user` (`_id`);

--
-- Các ràng buộc cho bảng `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group` (`_id`),
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `post` (`_id`);

--
-- Các ràng buộc cho bảng `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`_id`),
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`_id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `user` (`_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `group` (`_id`);
COMMIT;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`_id`, `user_id`, `group_id`, `post_id`, `url`, `caption`, `media_type`, `created_date`) VALUES
(1, 10, NULL, NULL, 'Base.png', '', 'photo', '2022-01-18'),
(2, 10, NULL, NULL, '2.jpg', '', 'photo', '2022-01-18'),
(3, 10, NULL, NULL, 'catagory.png', '', 'photo', '2022-01-18'),
(4, 10, NULL, NULL, '4.jpg', '', 'photo', '2022-01-18'),
(5, 10, NULL, NULL, 'Lina Happy clients.png', '', 'photo', '2022-01-18'),
(6, 10, NULL, NULL, '1.Hệ phương trình tuyến tính.pdf', '', 'photo', '2022-01-18'),
(8, 10, NULL, NULL, 'Body Champ Cardio $342.00 .png', '', 'photo', '2022-01-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
