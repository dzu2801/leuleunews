-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 14, 2019 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `leuleunews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `CateName` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `CateDescription` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CateColor` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `CateStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `CateName`, `CateDescription`, `CateColor`, `CateStatus`) VALUES
(1, 'SMARTPHONE', 'Tin tức mới nhất về mảng điện thoại thông minh', 'light-coral cat_name', 0),
(2, 'LAPTOP & PC', 'Tin tức mới nhất về mảng điện laptop và Pc', 'blue-dark cat_name', 1),
(3, 'SMART HOME ', 'giới thiệu sản phẩm nhà thông minh', 'glod cat_name', 1),
(4, 'CAR & MOTO', NULL, 'red cat_name', 1),
(5, 'REVIEW', NULL, 'light-coral cat_name', 1),
(6, 'NETWORK SECURITY', NULL, 'blue-dark cat_name', 1),
(7, 'ELECTRONIC DEVICES', NULL, 'glod cat_name', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `CmtID` int(11) NOT NULL,
  `CmtUser` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtEmail` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtContent` varchar(350) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtDate` datetime DEFAULT NULL,
  `CmtStatus` tinyint(1) DEFAULT NULL,
  `PostID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MDate` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `OptID` int(11) NOT NULL,
  `OptName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `OptValue` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `OptStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`OptID`, `OptName`, `OptValue`, `OptStatus`) VALUES
(1, 'hotline', '0378035875 - 0901010709', 1),
(2, 'logoweb', 'uploads/leuleu2.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `PostName` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostDescription` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostContent` varchar(10000) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostPhoto` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PostDate` date DEFAULT NULL,
  `PostView` int(11) DEFAULT NULL,
  `CateID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CmtID`),
  ADD KEY `PostID` (`PostID`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptID`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CateID` (`CateID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `OptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `posts` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`CateID`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
