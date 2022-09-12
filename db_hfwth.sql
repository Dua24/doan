-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 12, 2022 lúc 11:11 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_hfwth`
--
CREATE DATABASE IF NOT EXISTS `db_hfwth` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_hfwth`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `dm_id` int(11) NOT NULL,
  `dm_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`dm_id`, `dm_ten`) VALUES
(1, 'Other'),
(2, 'NEW Stuff'),
(3, 'Accessories'),
(4, 'Hoodie'),
(5, 'Jacket'),
(6, 'Long Sleeve'),
(7, 'Pullover'),
(8, 'Sweater'),
(9, 'T-shirt'),
(10, 'Shirt'),
(11, 'Boxer'),
(12, 'Pants'),
(13, 'Shorts'),
(14, 'Shoes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dvt_sp` int(11) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `img_sp` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `dvt_sp`, `gia_sp`, `img_sp`) VALUES
(1, '2020 Travel Jacket', 1, 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/travel-jk-2020-300x300.jpg'),
(2, '13 Long Sleeve', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/13-Long-sleeve-300x298.jpg'),
(4, '2021 Hoodie', 1, 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/2021-hoodie-1-300x300.jpg'),
(5, '2021 Tee', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/received_872269623650048-300x300.jpeg'),
(7, '420 Long Sleeve', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/04/275836079_681406796531237_4606127084557607464_n-300x300.jpg'),
(8, '4×4 Sweater', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/4x4_1-300x300.png'),
(9, '7 Years Anniversary tee', 1, 350, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/275912827_3308037416149087_666438548718182088_n-300x300.jpg'),
(10, 'All Black backpack', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/275838259_1157483268330983_378567575171538868_n-300x300.jpg'),
(11, 'All Black Jacket', 1, 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/all-black-jacket-300x300.png'),
(12, 'All Black Summer tee', 1, 350, 'https://havefunwiththehomies.com/wp-content/uploads/2022/08/298199601_732274261406691_4792795996622145105_n-300x300.jpg'),
(13, 'B/W Jacket', 1, 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/bw-300x300.jpg'),
(14, 'B/W long sleeve', 1, 550, 'https://havefunwiththehomies.com/wp-content/uploads/2022/05/3-300x300.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
