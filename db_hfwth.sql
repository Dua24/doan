-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

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
  `gia_sp` double NOT NULL,
  `img_sp` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `img_sp`, `dm_id`) VALUES
(1, '2020 Travel Jacket', 550, 'https://cf.shopee.vn/file/0699dbf7a1cd4f2863e7df73ffdaa4e3', 5),
(2, '13 Long Sleeve', 550, 'https://cf.shopee.vn/file/cd058188f51a1e93387bedf718c6b244_tn', 6),
(3, '2021 Travel Jacket', 550, 'https://cf.shopee.vn/file/be4500077fefdbff1f1a358ffb5ed9a6_tn', 5),
(4, '2021 Hoodie', 500, 'https://cf.shopee.vn/file/ad1318cc500a34ad6ea370782cb27add_tn', 4),
(6, '2022 Hoodie', 500, 'https://cf.shopee.vn/file/fff2c605d5020e51db0c40f5ea79e3b5_tn', 4),
(7, '420 Long Sleeve', 500, 'https://cf.shopee.vn/file/7e956cfa0af0e914b0c8a365da6f958e_tn', 6),
(8, '4×4 Sweater', 500, 'https://cf.shopee.vn/file/cf0e4bae459ef72f232aa5eb41cd5665_tn', 8),
(10, 'All Black backpack', 500, 'https://cf.shopee.vn/file/87f49aeaa9a9ea97ccf4ebfa6c6d0f5c_tn', 1),
(11, 'All Black Jacket', 550, 'https://cf.shopee.vn/file/a0b693799499ab956bc128f02a4b0487_tn', 5),
(13, 'B/W Jacket', 500, 'https://cf.shopee.vn/file/93ca64858a424eaf7003d784c998629e_tn', 5),
(14, 'B/W long sleeve', 550, 'https://cf.shopee.vn/file/b87261b3a63ab24da2d13006d2c891ea_tn', 6),
(15, 'Bag Summer', 350, 'https://cf.shopee.vn/file/45d68c430462ca07b666475badd18ea6_tn', 1),
(16, 'Baseball Logo Jacket', 650, 'https://havefunwiththehomies.com/wp-content/uploads/2022/07/b93ffa214ba54a4a8dd6178a3fab9c31_tn.jpg', 5),
(17, 'Basketball Jacket', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_6214-768x768.jpg', 5),
(18, 'Bee Hoodie', 500, 'https://cf.shopee.vn/file/4cd09340ec879a3b8c47d15f95e13652_tn', 4),
(19, 'Bee Sweater', 350, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/received_327203865426327-300x300.jpeg', 8),
(20, 'Bee Tee', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_1217243362097503-300x300.jpeg', 10),
(21, 'Best Friends For Life tee', 350, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/275581806_1669575246711900_4078449404988102382_n-300x300.jpg', 10),
(22, 'Black Down Vest', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/Black-Down-Vest1-300x300.jpg', 1),
(23, 'Black Hoodie', 500, 'https://cf.shopee.vn/file/c7c69d863135c63ee7cab4fbd86fa17b_tn', 4),
(24, '16 Long sleeve', 600, 'https://cf.shopee.vn/file/4d819e25676dba93789b091998b49d76_tn', 6),
(25, 'BB/W2 sleeve', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2022/05/2.jpg', 6),
(26, 'Black Shirt', 390, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_450508989751870-300x300.jpeg', 9),
(27, 'Black Signature Shoes', 890, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/shoes-black1.jpg', 14),
(28, 'Black White Shorts', 420, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/IMG_7246_Facetune_30-05-2021-15-02-56-300x300.jpeg', 13),
(29, 'Black Windbearker Logo', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/black-windbreaker-1-300x300.jpg', 1),
(31, 'Bracelet', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/braclet-300x300.jpg', 3),
(32, 'Bum Bag', 350, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/bum-bag.jpg', 3),
(33, 'Camp Table', 600, 'https://havefunwiththehomies.com/wp-content/uploads/2021/12/Camp-table-300x300.png', 1),
(34, 'Car Long Sleeve', 420, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_20211116_155648-300x300.jpg', 6),
(35, 'Card Holder', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/2e3933521ce9c2c89f6b4379fe4f7272_tn.jpg', 3),
(36, 'Collabration long sleeve', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/Collabration-long-sleeve-600-300x300.jpg', 6),
(37, 'Crop Top', 350, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_20211116_160617-300x300.jpg', 2),
(38, 'Cropped Pants', 390, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/IMG_1211-300x300.png', 12),
(39, 'Diamonds Tee', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_306138141330794-300x300.jpeg', 10),
(40, 'Dirt Bike long sleeve', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/Dirtbike-long-sleeve-300x300.jpg', 6),
(41, 'Dirtbike Sweatpants', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/275713656_3184818818421664_7268474583070335106_n-300x300.jpg', 12),
(42, 'Duffel bag', 800, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/Duffe-bag-800-300x300.jpg', 1),
(43, 'Friends Diamonds Moisanite chain', 37, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/Friends-diamonds-moisanite-chain-37-tr-300x300.png', 3),
(44, 'Gang tee', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_428234618684584-300x300.jpeg', 10),
(45, 'HFWTH Boxer', 150, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/boxer-300x300.jpg', 11),
(46, 'HFWTH Logo Kaki Pants 22', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2022/07/1-300x300.png', 12),
(47, 'Holiday 2020 Jacket', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/Holiday-2020.jpg', 5),
(48, 'Holiday Pants', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/holiday-pants-300x300.jpg', 12),
(49, 'Jacket Nón Nỉ Trắng', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/ni-trang-300x300.jpg', 1),
(50, 'Khaki Pants', 390, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_425535765831963-300x300.jpeg', 12),
(51, 'Life A Beach jacket', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/Life-a-beach-jacket-550-300x300.jpg', 5),
(52, 'Life A Beach Sweater', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/lifes-a-beach-sweater-300x300.jpg', 8),
(53, 'Logo backpack', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2022/04/9a2743a60dac46c2837df980193f3ca8-300x300.jpg', 3),
(54, 'Logo Jacket', 600, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_20211116_160433-300x300.jpg', 5),
(55, 'Logo shorts', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2022/08/IMG_20220806_220423-300x300.jpg', 13),
(56, 'Love Weed Tee', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/weed-300x300.jpg', 10),
(57, 'Nike Socks', 80, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/nike-socks-300x300.jpg', 1),
(58, 'Pocket jacket', 600, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/275719811_763798908315373_8181744820904500384_n-300x300.jpg', 5),
(59, 'Puffer jacket', 600, 'https://havefunwiththehomies.com/wp-content/uploads/2022/03/Puffer-jacket-600_1-300x300.jpg', 5),
(60, 'Pullover Logo', 500, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/received_183758130628753-768x727.jpeg', 7),
(61, 'Robot Hoodie', 550, 'https://cf.shopee.vn/file/1fb6432b41f813e4433130abe36455f8_tn', 4),
(62, 'Shoulder Bag', 350, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/bag.jpg', 2),
(63, 'Skull shorts', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2022/08/IMG_20220806_220423-300x300.jpg', 13),
(64, 'Summer 22 Sunglasses', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2022/08/4c1ca1f9e3d5640b99ffc836ebf7860d_tn.jpg', 3),
(65, 'Summer Tank Top', 290, 'https://havefunwiththehomies.com/wp-content/uploads/2022/06/287932454_517976706783060_1453979869858515443_n-300x300.jpg', 3),
(66, 'Surf Jacket', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_20211116_154047-300x300.jpg', 5),
(67, 'Sweater 2021', 550, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/sweater-300x300.png', 8),
(68, 'Tank Top', 200, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_874868109883558-300x300.jpeg', 1),
(69, 'Tee 13', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/received_420873356318270-300x300.jpeg', 10),
(70, 'Tee Police', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/IMG_20211117_143451-300x300.jpg', 10),
(71, 'Tee robot', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/EFED75F6-F2F3-493A-BCF6-25C694E6A3F2-300x300.jpg', 10),
(72, 'Tee Shoes', 300, 'https://havefunwiththehomies.com/wp-content/uploads/2021/10/received_422435739375502-300x300.jpeg', 10),
(73, 'Travel Sweat Pants', 450, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/E6CFC33D-8327-443D-BB8B-514498B5F5A6-3.jpg', 12),
(74, 'White Shorts', 420, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/white-shorts-300x300.jpg', 13),
(75, 'White Signature Shoes', 890, 'https://havefunwiththehomies.com/wp-content/uploads/2021/11/shoes-white-300x300.jpg', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `role`) VALUES
(2, 'toiladuynguyen', '25f9e794323b453885f5181f1b624d0b', '0'),
(4, 'toiladuynguyen1', '25f9e794323b453885f5181f1b624d0b', '0'),
(5, 'toiladuynguyen12', '25f9e794323b453885f5181f1b624d0b', '0'),
(18, 'admin1', '25f9e794323b453885f5181f1b624d0b', '1'),
(26, 'toilaadmin123456789', '25f9e794323b453885f5181f1b624d0b', '1');

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
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
