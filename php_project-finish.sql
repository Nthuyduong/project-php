-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th7 21, 2023 lúc 12:20 AM
-- Phiên bản máy phục vụ: 5.7.34
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Admins`
--

CREATE TABLE `Admins` (
  `ID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL,
  `Active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Admins`
--

INSERT INTO `Admins` (`ID`, `Email`, `Password`, `Created_at`, `Updated_at`, `Active_status`) VALUES
(3, 'thuy@gmail.com', '2cbca44843a864533ec05b321ae1f9d1', '2023-06-16 11:47:38', '2023-06-17 11:47:09', 1),
(4, 'duong@gmail.com', '1658f23b58329d8356a33f6ecdff0d0c', '2023-06-21 11:47:38', '2023-06-21 11:48:09', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CheckMailAdmin`
--

CREATE TABLE `CheckMailAdmin` (
  `AdminID` int(11) NOT NULL,
  `Code` int(7) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CheckMailUser`
--

CREATE TABLE `CheckMailUser` (
  `CustomerID` int(11) NOT NULL,
  `Code` int(7) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Customers`
--

CREATE TABLE `Customers` (
  `ID` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL,
  `Active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Customers`
--

INSERT INTO `Customers` (`ID`, `Address`, `Name`, `Phone`, `Email`, `Password`, `Created_at`, `Updated_at`, `Active_status`) VALUES
(1, '8 Ton That Thuyet', 'Nguyen Thuy Duong', '0123456789', 'duong@gmail.com', 'b66ba7c8c3a82c68278ab55fff0ff06e', '2023-06-16 11:53:54', '2023-06-17 11:52:45', 1),
(2, 'Dong Du - Gia Lam - Ha Noi', 'Nguyen Thanh Thuy', '023232323', 'thuy@gmail.com', '9a74fdd05b7a2bfc99976b208dc3cb6a', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(3, 'Long Trị, Long Mỹ, Hậu Giang', 'Lương Anh Phụng', '0909.051.951', 'phung@gmail.com', 'a5a7158118e59ee590424b55bb9aed17', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(4, '300/43 Nguyễn Văn Linh, Phường Bình Thuận, Quận 7', 'Hoàng Trung Chính', '0907.248.555', 'chinh@gmail.com', '5aee410122e9d1d76f194496cb2f90de', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(5, '41/27 Hương Lộ 14, H/Tân, Q.10', 'Đặng Huỳnh Thành Nhân', '0908.285.117', 'nhandang@gmail.com', 'ae0e08163d22befd4635f47bef1b6e3f', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(6, '33/5, Trần Bình Trọng, P1, Q5', 'Đặng Ngọc Hưng', '0908.327.657', 'hungdang@gmail.com', 'b4288d9c0ec0a1841b3b3728321e7088', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(7, '2/41 Cao Thắng P5, Q3', 'Đinh Thị Hoài Phương', '0907.222.605', 'phuongdth@gmail.com', 'c361bc7b2c033a83d663b8d9fb4be56e', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(8, '57/65 Trần Bình Trọng, P1, Q5', 'Đỗ Bích Hương', '0987.663.777', 'huongdo@gmail.com', 'abc391d516938d4a28236575d567b9a4', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(9, '15 Hoa Lâm – Long Biên - Hà Nội', 'Vũ Thị Thu Thủy', '0963.686.189', 'thuthuy@gmail.com', '67ba02d73c54f0b83c05507b7fb7267f', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(10, 'khu đô thị mới-Trung văn -Thanh Xuân -Hà Nội', 'Đoàn Hữu Tiến', '0988925428', 'tien@gmail.com', '609c5e5089a9aa967232aba2a4d03114', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(11, 'TT Đầu Máy - Yên Thường - Gia Lâm - HN', 'Trần Thái Bình', '0904405804', 'ttb@gmail.com', '5e5dd00d770ef3e9154a4257edcb80b8', '2023-06-16 11:53:54', '2023-06-17 11:52:45', 1),
(12, 'Số 10 phố Đặng Tất - Ba Đình - HN', 'Phan Thị Lan Hương', '0913542554', 'huonglan@gmail.com', 'cc33d39430f943a3c4b4116a5b644496', '2023-06-16 11:53:54', '2023-06-17 11:52:45', 1),
(13, '123 Phố 8/3 P. Quỳnh Mai - Q. Hai Bà Trưng - HN', 'Nguyễn Thu Hà', '0912000147', 'hathu@gmail.com', '8d5e957f297893487bd98fa830fa6413', '2023-06-16 11:53:54', '2023-06-17 11:52:45', 1),
(14, '278 Nguyễn Hoàng- TP Đà Nẵng', 'Huỳnh Đức Phúc', '0935219069', 'phuc@gmail.com', '8a47481ae534860850adf59f145e6b40', '2023-06-16 11:53:54', '2023-06-17 11:52:45', 1),
(15, '80Ấp Đồng Phước-Tân Long Thành Đồng Nai', 'Mai Thanh Tuấn', '0983.263.294', 'tuan@gmail.com', '7a430339c10c642c4b2251756fd1b484', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(16, '25/8 02 Ấp hải Phong2,Long hải _BR VT', 'Phùng Thùy Trang', '01222991693', 'phungtrang@gmail.com', 'b59a51a3c0bf9c5228fde841714f523a', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(17, 'Ninh sơn, Ninh Hòa, Khánh hòa', 'Nguyễn Thanh Bình', '0916.785.794', 'binh@gmail.com', '6e7506828002e87381af2aa2c0e250e2', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(18, '114/4 Tây Lân Bà Điểm HM', 'Lê Thị Mỹ Lệ', '08.7127658', 'myle@gmail.com', 'e77910ebb93b511588557806310f78f1', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(19, '19/203 Đường 26/3, F17, Gò Vấp', 'Bùi Thị Hồng Oanh', '0232630089', 'oanh@gmail.com', '692bf3658e41106e0685c99ffc6f3343', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(20, '94/2 Khu phố 1, Phường Tân Hòa, Tp.Biên Hòa, Đồng Nai', 'Nguyễn Thái Hưng', '0613.981514', 'hung@gmail.com', '83f2550373f2f19492aa30fbd5b57512', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(21, 'Hải Lý -Hải Hậu-Nam Định', 'Bùi Thị Dịu', '0977191553', 'diubui@gmail.com', '18ead4c77c3f40dabf9735432ac9d97a', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(22, '413 Hưng Phú ,F 9 ,Q8', 'Phan Thị Hòang Mai', '0903371128', 'phanmai@gmail.com', '3fe78a8acf5fda99de95303940a2420c', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(23, 'Liên Nghĩa,Đức trọng,Lâm đồng', 'Trần Nữ Anh Thư', '0976505230', 'anhthu@gmail.com', 'bd3258b003bcc4ebbfe86c0d13227a7e', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(24, '308 Lô II CX Lý Thái Tổ F1 Q3', 'Nguyễn Việt Minh Châu', '0919668677', 'chau@gmail.com', '8d1ed83551849403401631563cc12c62', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(25, '163/23 Thành Thái P14.Q10', 'Trần Kim Hiếu', '0938080870', 'hieu@gmail.com', '534c8a502668ffb700a07524dedf6df5', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(26, '103/13 Nguyễn Hồng Đào P4 Q.Tân Bình', 'Nguyễn Thị Vi	', '01222594885', 'ntv@gmail.com', '7a48b6e7efa8475f61dc5ecd419fda73', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(27, '930 Trường Chinh, P15, Tân Bình', 'Nguyễn Đức Thọ', '0909707270', 'tho@gmail.com', '7f489f642a0ddb10272b5c31057f0663', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(28, 'Thái Lương, Thái Bình', 'Lê Văn Dũng', '08.2937060', 'dungle@gmail.com', 'ab4c389364232588a6680ad92ec170c7', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(29, '333 Trần Não, p. Bình Khánh, Q2', 'Lê Huy Ngọc', '0902300998', 'ngoc@gmail.com', '02cf483061fae92743db1fe7d22159a6', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1),
(30, '26/O Trịnh Đình Trọng, Q. Tân Phú', 'Trần Thuỵ Đăng Thư', '0918665758', 'thuttd@gmail.com', '588e343066cf54ec3db5132231df7d68', '2023-06-21 11:53:54', '2023-06-21 12:52:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Medias`
--

CREATE TABLE `Medias` (
  `ID` int(11) NOT NULL,
  `Url` varchar(50) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Medias`
--

INSERT INTO `Medias` (`ID`, `Url`, `Product_ID`, `Created_at`, `Updated_at`) VALUES
(5, '/rings/eternity/1.1.1.webp', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(6, '/rings/eternity/1.1.2.webp', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(7, '/rings/eternity/1.1.3.webp', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(8, '/rings/eternity/1.2.1.webp', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(9, '/rings/eternity/1.2.2.webp', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(10, '/rings/eternity/1.2.3.webp', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(11, '/rings/eternity/1.3.1.webp', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(12, '/rings/eternity/1.3.2.webp', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(13, '/rings/eternity/1.3.3.webp', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(14, '/rings/eternity/1.4.1.webp', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(15, '/rings/eternity/1.4.2.webp', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(16, '/rings/eternity/1.4.3.webp', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(17, '/rings/eternity/1.5.1.webp', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(18, '/rings/eternity/1.5.2.webp', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(19, '/rings/eternity/1.5.3.webp', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(20, '/rings/eternity/1.6.1.webp', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(21, '/rings/eternity/1.6.2.webp', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(22, '/rings/eternity/1.6.3.webp', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(23, '/rings/cocktail/1.1.1.webp', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(24, '/rings/cocktail/1.1.2.webp', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(25, '/rings/cocktail/1.1.3.webp', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(26, '/rings/cocktail/1.2.1.webp', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(27, '/rings/cocktail/1.2.2.webp', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(28, '/rings/cocktail/1.2.3.webp', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(29, '/rings/cocktail/1.3.1.webp', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(30, '/rings/cocktail/1.3.2.webp', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(31, '/rings/cocktail/1.3.3.webp', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(32, '/rings/cocktail/1.4.1.webp', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(33, '/rings/cocktail/1.4.2.webp', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(34, '/rings/cocktail/1.4.3.webp', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(35, '/rings/cocktail/1.5.1.webp', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(36, '/rings/cocktail/1.5.2.webp', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(37, '/rings/cocktail/1.5.3.webp', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(38, '/rings/cocktail/1.6.1.webp', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(39, '/rings/cocktail/1.6.2.webp', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(40, '/rings/cocktail/1.6.3.webp', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(41, '/rings/wedding/1.1.1.webp', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(42, '/rings/wedding/1.1.2.webp', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(43, '/rings/wedding/1.1.3.webp', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(44, '/rings/wedding/1.2.1.webp', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(45, '/rings/wedding/1.2.2.webp', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(46, '/rings/wedding/1.2.3.webp', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(47, '/rings/wedding/1.3.1.webp', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(48, '/rings/wedding/1.3.2.webp', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(49, '/rings/wedding/1.3.3.webp', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(50, '/rings/wedding/1.4.1.webp', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(51, '/rings/wedding/1.4.2.webp', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(52, '/rings/wedding/1.4.3.webp', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(53, '/rings/wedding/1.5.1.webp', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(54, '/rings/wedding/1.5.2.webp', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(55, '/rings/wedding/1.5.3.webp', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(56, '/rings/wedding/1.6.1.webp', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(57, '/rings/wedding/1.6.2.webp', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(58, '/rings/wedding/1.6.3.webp', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(59, '/earrings/stud/1.1.1.webp', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(60, '/earrings/stud/1.1.2.webp', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(61, '/earrings/stud/1.1.3.webp', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(62, '/earrings/stud/1.2.1.webp', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(63, '/earrings/stud/1.2.2.webp', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(64, '/earrings/stud/1.2.3.webp', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(65, '/earrings/stud/1.3.1.webp', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(66, '/earrings/stud/1.3.2.webp', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(67, '/earrings/stud/1.3.3.webp', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(68, '/earrings/stud/1.4.1.webp', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(69, '/earrings/stud/1.4.2.webp', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(70, '/earrings/stud/1.4.3.webp', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(71, '/earrings/stud/1.5.1.webp', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(72, '/earrings/stud/1.5.2.webp', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(73, '/earrings/stud/1.5.3.webp', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(74, '/earrings/stud/1.6.1.webp', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(75, '/earrings/stud/1.6.2.webp', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(76, '/earrings/stud/1.6.3.webp', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(77, '/earrings/dropdangle/1.1.1.webp', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(78, '/earrings/dropdangle/1.1.2.webp', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(79, '/earrings/dropdangle/1.1.3.webp', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(80, '/earrings/dropdangle/1.2.1.webp', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(81, '/earrings/dropdangle/1.2.2.webp', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(82, '/earrings/dropdangle/1.2.3.webp', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(83, '/earrings/dropdangle/1.3.1.webp', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(84, '/earrings/dropdangle/1.3.2.webp', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(85, '/earrings/dropdangle/1.3.3.webp', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(86, '/earrings/dropdangle/1.4.1.webp', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(87, '/earrings/dropdangle/1.4.2.webp', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(88, '/earrings/dropdangle/1.4.3.webp', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(89, '/earrings/dropdangle/1.5.1.webp', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(90, '/earrings/dropdangle/1.5.2.webp', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(91, '/earrings/dropdangle/1.5.3.webp', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(92, '/earrings/dropdangle/1.6.1.webp', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(93, '/earrings/dropdangle/1.6.2.webp', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(94, '/earrings/dropdangle/1.6.3.webp', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(95, '/earrings/hoop/1.1.1.webp', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(96, '/earrings/hoop/1.1.2.webp', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(97, '/earrings/hoop/1.1.3.webp', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(98, '/earrings/hoop/1.2.1.webp', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(99, '/earrings/hoop/1.2.2.webp', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(100, '/earrings/hoop/1.2.3.webp', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(101, '/earrings/hoop/1.3.1.webp', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(102, '/earrings/hoop/1.3.2.webp', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(103, '/earrings/hoop/1.3.3.webp', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(104, '/earrings/hoop/1.4.1.webp', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(105, '/earrings/hoop/1.4.2.webp', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(106, '/earrings/hoop/1.4.3.webp', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(107, '/earrings/hoop/1.5.1.webp', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(108, '/earrings/hoop/1.5.2.webp', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(109, '/earrings/hoop/1.5.3.webp', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(110, '/earrings/hoop/1.6.1.webp', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(111, '/earrings/hoop/1.6.2.webp', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(112, '/earrings/hoop/1.6.3.webp', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(113, '/bracelets/chain/1.1.1.webp', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(114, '/bracelets/chain/1.1.2.webp', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(115, '/bracelets/chain/1.1.3.webp', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(116, '/bracelets/chain/1.2.1.webp', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(117, '/bracelets/chain/1.2.2.webp', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(118, '/bracelets/chain/1.2.3.webp', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(119, '/bracelets/chain/1.3.1.webp', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(120, '/bracelets/chain/1.3.2.webp', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(121, '/bracelets/chain/1.3.3.webp', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(122, '/bracelets/chain/1.4.1.webp', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(123, '/bracelets/chain/1.4.2.webp', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(124, '/bracelets/chain/1.4.3.webp', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(125, '/bracelets/chain/1.5.1.webp', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(126, '/bracelets/chain/1.5.2.webp', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(127, '/bracelets/chain/1.5.3.webp', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(128, '/bracelets/chain/1.6.1.webp', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(129, '/bracelets/chain/1.6.2.webp', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(130, '/bracelets/chain/1.6.3.webp', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(131, '/bracelets/bangle/1.1.1.webp', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(132, '/bracelets/bangle/1.1.2.webp', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(133, '/bracelets/bangle/1.1.3.webp', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(134, '/bracelets/bangle/1.2.1.webp', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(135, '/bracelets/bangle/1.2.2.webp', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(136, '/bracelets/bangle/1.2.3.webp', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(137, '/bracelets/bangle/1.3.1.webp', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(138, '/bracelets/bangle/1.3.2.webp', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(139, '/bracelets/bangle/1.3.3.webp', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(140, '/bracelets/bangle/1.4.1.webp', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(141, '/bracelets/bangle/1.4.2.webp', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(142, '/bracelets/bangle/1.4.3.webp', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(143, '/bracelets/bangle/1.5.1.webp', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(144, '/bracelets/bangle/1.5.2.webp', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(145, '/bracelets/bangle/1.5.3.jpeg', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(146, '/bracelets/bangle/1.6.1.webp', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(147, '/bracelets/bangle/1.6.2.webp', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(148, '/bracelets/bangle/1.6.3.jpeg', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(149, '/bracelets/tennis/1.1.1.webp', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(150, '/bracelets/tennis/1.1.2.webp', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(151, '/bracelets/tennis/1.1.3.webp', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(152, '/bracelets/tennis/1.2.1.webp', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(153, '/bracelets/tennis/1.2.2.webp', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(154, '/bracelets/tennis/1.2.3.webp', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(155, '/bracelets/tennis/1.3.1.webp', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(156, '/bracelets/tennis/1.3.2.webp', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(157, '/bracelets/tennis/1.3.3.webp', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(158, '/bracelets/tennis/1.4.1.webp', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(159, '/bracelets/tennis/1.4.2.webp', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(160, '/bracelets/tennis/1.4.3.webp', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(161, '/bracelets/tennis/1.5.1.webp', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(162, '/bracelets/tennis/1.5.2.webp', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(163, '/bracelets/tennis/1.5.3.webp', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(164, '/bracelets/tennis/1.6.1.webp', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(165, '/bracelets/tennis/1.6.2.webp', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(166, '/bracelets/tennis/1.6.3.webp', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(167, '/necklaces/chain/1.1.1.webp', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(168, '/necklaces/chain/1.1.2.webp', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(169, '/necklaces/chain/1.1.3.webp', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(170, '/necklaces/chain/1.2.1.webp', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(171, '/necklaces/chain/1.2.2.webp', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(172, '/necklaces/chain/1.2.3.webp', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(173, '/necklaces/chain/1.3.1.webp', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(174, '/necklaces/chain/1.3.2.webp', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(175, '/necklaces/chain/1.3.3.webp', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(176, '/necklaces/chain/1.4.1.webp', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(177, '/necklaces/chain/1.4.2.webp', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(178, '/necklaces/chain/1.4.3.webp', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(179, '/necklaces/chain/1.5.1.webp', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(180, '/necklaces/chain/1.5.2.webp', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(181, '/necklaces/chain/1.5.3.webp', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(182, '/necklaces/chain/1.6.1.webp', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(183, '/necklaces/chain/1.6.2.webp', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(184, '/necklaces/chain/1.6.3.webp', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(185, '/necklaces/everyday/1.1.1.webp', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(186, '/necklaces/everyday/1.1.2.webp', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(187, '/necklaces/everyday/1.1.3.webp', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(188, '/necklaces/everyday/1.2.1.webp', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(189, '/necklaces/everyday/1.2.2.webp', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(190, '/necklaces/everyday/1.2.3.webp', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(191, '/necklaces/everyday/1.3.1.webp', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(192, '/necklaces/everyday/1.3.2.webp', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(193, '/necklaces/everyday/1.3.3.webp', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(194, '/necklaces/everyday/1.4.1.webp', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(195, '/necklaces/everyday/1.4.2.webp', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(196, '/necklaces/everyday/1.4.3.webp', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(197, '/necklaces/everyday/1.5.1.webp', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(198, '/necklaces/everyday/1.5.2.webp', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(199, '/necklaces/everyday/1.5.3.webp', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(200, '/necklaces/everyday/1.6.1.webp', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(201, '/necklaces/everyday/1.6.2.webp', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(202, '/necklaces/everyday/1.6.3.webp', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(203, '/necklaces/layering/1.1.1.webp', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(204, '/necklaces/layering/1.1.2.webp', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(205, '/necklaces/layering/1.1.3.webp', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(206, '/necklaces/layering/1.2.1.webp', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(207, '/necklaces/layering/1.2.2.webp', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(208, '/necklaces/layering/1.2.3.webp', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(209, '/necklaces/layering/1.3.1.webp', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(210, '/necklaces/layering/1.3.2.webp', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(211, '/necklaces/layering/1.3.3.webp', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(212, '/necklaces/layering/1.4.1.webp', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(213, '/necklaces/layering/1.4.2.webp', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(214, '/necklaces/layering/1.4.3.webp', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(215, '/necklaces/layering/1.5.1.webp', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(216, '/necklaces/layering/1.5.2.webp', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(217, '/necklaces/layering/1.5.3.webp', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(218, '/necklaces/layering/1.6.1.webp', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(219, '/necklaces/layering/1.6.2.webp', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(220, '/necklaces/layering/1.6.3.webp', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Orders`
--

CREATE TABLE `Orders` (
  `Code` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Grand_total` decimal(10,0) NOT NULL,
  `Status` tinyint(5) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Orders`
--

INSERT INTO `Orders` (`Code`, `Customer_ID`, `Grand_total`, `Status`, `Created_at`, `Updated_at`) VALUES
(1, 1, '10005', 3, '2023-06-01 13:21:22', '2023-06-02 06:19:59'),
(2, 2, '13010', 3, '2023-06-03 13:21:22', '2023-06-05 06:19:59'),
(3, 3, '36005', 3, '2023-06-04 13:21:22', '2023-06-05 06:19:59'),
(4, 4, '74010', 3, '2023-06-05 13:21:22', '2023-06-05 14:19:59'),
(5, 5, '2280', 3, '2023-06-07 13:21:22', '2023-06-09 06:19:59'),
(6, 6, '40610', 3, '2023-06-08 13:21:22', '2023-06-08 14:19:59'),
(7, 7, '13805', 3, '2023-06-09 13:21:22', '2023-06-10 06:19:59'),
(8, 8, '39010', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(9, 9, '19605', 3, '2023-06-10 13:21:22', '2023-06-12 06:19:59'),
(10, 10, '44010', 3, '2023-06-11 13:21:22', '2023-06-12 06:19:59'),
(11, 11, '12205', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(12, 12, '13010', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(13, 13, '24005', 3, '2023-06-12 13:21:22', '2023-06-12 14:19:59'),
(14, 14, '22810', 3, '2023-06-13 13:21:22', '2023-06-14 06:19:59'),
(15, 15, '76505', 3, '2023-06-15 13:21:22', '2023-06-17 06:19:59'),
(16, 16, '21960', 3, '2023-06-17 13:21:22', '2023-06-19 06:19:59'),
(17, 17, '22005', 3, '2023-06-18 13:21:22', '2023-06-20 06:19:59'),
(18, 18, '11760', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(19, 19, '79005', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(20, 20, '34010', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(21, 21, '5905', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(22, 22, '2735', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(23, 23, '16705', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(24, 24, '5660', 3, '2023-06-22 13:21:22', '2023-06-23 06:19:59'),
(25, 25, '24405', 3, '2023-06-23 13:21:22', '2023-06-26 06:19:59'),
(26, 26, '25785', 3, '2023-06-21 13:21:22', '2023-06-21 06:19:59'),
(27, 27, '31305', 3, '2023-06-28 13:21:22', '2023-06-30 14:19:59'),
(28, 28, '50210', 2, '2023-06-30 13:21:22', '2023-07-03 06:19:59'),
(29, 29, '79605', 2, '2023-07-04 13:21:22', '2023-07-05 06:19:59'),
(30, 30, '21910', 2, '2023-07-07 13:21:22', '2023-07-10 06:19:59'),
(31, 12, '20000', 2, '2023-07-06 13:21:22', '2023-07-10 06:19:59'),
(32, 18, '6800', 2, '2023-07-11 13:21:22', '2023-07-12 06:19:59'),
(33, 21, '6300', 2, '2023-07-13 13:21:22', '2023-07-14 14:19:59'),
(34, 25, '4500', 2, '2023-07-15 13:21:22', '2023-07-17 06:19:59'),
(35, 7, '4500', 1, '2023-07-18 13:21:22', '2023-07-19 06:19:59'),
(36, 12, '76500', 1, '2023-07-20 13:21:22', '2023-07-21 06:19:59'),
(37, 15, '10400', 1, '2023-07-21 00:09:38', NULL),
(38, 30, '20000', 1, '2023-07-21 00:09:38', NULL),
(39, 1, '48800', 1, '2023-07-21 00:10:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Order_items`
--

CREATE TABLE `Order_items` (
  `Order_code` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Size` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Order_items`
--

INSERT INTO `Order_items` (`Order_code`, `Product_ID`, `Size`, `Quantity`, `Price`) VALUES
(1, 1, 50, 1, '6000'),
(1, 2, 52, 1, '4000'),
(2, 4, 48, 1, '4000'),
(2, 20, NULL, 1, '4500'),
(2, 39, 18, 1, '4500'),
(3, 5, 48, 1, '20000'),
(3, 50, 19, 1, '16000'),
(4, 6, 50, 1, '30000'),
(4, 21, NULL, 1, '15900'),
(4, 55, 18, 1, '28100'),
(5, 22, NULL, 1, '2275'),
(6, 23, NULL, 1, '6800'),
(6, 43, 18, 1, '11300'),
(6, 56, NULL, 1, '12500'),
(7, 7, 52, 1, '3300'),
(7, 57, NULL, 1, '10500'),
(8, 8, 50, 1, '15000'),
(8, 51, 19, 1, '11800'),
(8, 67, NULL, 1, '12200'),
(9, 9, 48, 1, '6100'),
(9, 59, NULL, 1, '13500'),
(10, 10, 50, 1, '18000'),
(10, 24, NULL, 1, '10500'),
(10, 45, 18, 1, '25500'),
(11, 11, 48, 1, '7000'),
(11, 68, NULL, 1, '5200'),
(12, 12, 52, 1, '8300'),
(12, 27, NULL, 1, '4100'),
(12, 60, NULL, 1, '600'),
(13, 13, 48, 1, '10500'),
(13, 49, 17, 1, '13500'),
(14, 14, 50, 1, '5000'),
(14, 28, NULL, 1, '3800'),
(14, 69, NULL, 1, '14000'),
(15, 38, 18, 1, '76500'),
(16, 16, 52, 1, '3200'),
(16, 30, NULL, 1, '12800'),
(16, 47, 19, 1, '5950'),
(17, 17, 48, 1, '15800'),
(17, 52, 17, 1, '6200'),
(18, 18, 50, 1, '6300'),
(18, 34, NULL, 1, '1700'),
(18, 66, NULL, 1, '3750'),
(19, 19, 50, 1, '22500'),
(19, 25, NULL, 1, '56500'),
(20, 15, 52, 1, '10300'),
(20, 44, 17, 1, '13300'),
(20, 62, NULL, 1, '10400'),
(21, 26, NULL, 1, '2950'),
(21, 65, NULL, 1, '2950'),
(22, 29, NULL, 1, '475'),
(22, 40, 17, 1, '400'),
(22, 58, NULL, 1, '1850'),
(23, 31, NULL, 1, '8900'),
(23, 73, NULL, 1, '7800'),
(24, 32, NULL, 1, '1250'),
(24, 41, 18, 1, '1250'),
(24, 63, NULL, 1, '3150'),
(25, 33, NULL, 1, '24400'),
(26, 36, NULL, 1, '775'),
(26, 46, 19, 1, '20200'),
(26, 64, NULL, 1, '4800'),
(27, 35, NULL, 1, '6900'),
(27, 71, NULL, 1, '24400'),
(28, 37, NULL, 1, '9450'),
(28, 48, 17, 1, '37000'),
(28, 61, NULL, 1, '3750'),
(29, 42, 18, 1, '24400'),
(29, 54, 19, 1, '55200'),
(30, 53, 18, 1, '10400'),
(30, 70, NULL, 1, '1500'),
(30, 72, NULL, 1, '10000'),
(31, 5, 48, 1, '20000'),
(32, 23, NULL, 1, '6800'),
(33, 63, NULL, 2, '3150'),
(34, 20, NULL, 1, '4500'),
(35, 20, NULL, 1, '4500'),
(36, 38, 18, 1, '76500'),
(37, 62, NULL, 1, '10400'),
(38, 72, NULL, 2, '10000'),
(39, 33, NULL, 2, '24400');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Payments`
--

CREATE TABLE `Payments` (
  `Order_code` int(11) NOT NULL,
  `Shipping_ID` int(11) NOT NULL,
  `Payment_method` varchar(30) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Payments`
--

INSERT INTO `Payments` (`Order_code`, `Shipping_ID`, `Payment_method`, `Created_at`, `Updated_at`) VALUES
(1, 1, 'Visa', '2023-06-21 13:31:06', '2023-06-21 06:29:26'),
(2, 2, 'Mastercard', '2023-06-21 13:31:06', '2023-06-21 06:29:26'),
(3, 3, 'Paypal', '2023-07-13 03:04:26', '2023-07-12 20:03:50'),
(4, 4, 'MasterCard', '2023-07-13 03:04:26', '2023-07-12 20:03:50'),
(5, 5, 'Visa', '2023-07-13 03:05:04', '2023-07-12 20:04:38'),
(6, 6, 'Paypal', '2023-07-13 03:05:04', '2023-07-12 20:04:38'),
(7, 7, 'Visa', '2023-07-13 03:05:25', '2023-07-12 20:05:06'),
(8, 8, 'MasterCard', '2023-07-13 03:05:25', '2023-07-12 20:05:06'),
(9, 9, 'Paypal', '2023-07-13 03:05:45', '2023-07-12 20:05:27'),
(10, 10, 'Visa', '2023-07-13 03:05:45', '2023-07-12 20:05:27'),
(11, 11, 'Visa', '2023-07-13 03:06:07', '2023-07-12 20:05:47'),
(12, 12, 'Paypal', '2023-07-13 03:06:07', '2023-07-12 20:05:47'),
(13, 13, 'Visa', '2023-07-13 03:06:32', '2023-07-12 20:06:09'),
(14, 14, 'MasterCard', '2023-07-13 03:06:32', '2023-07-12 20:06:09'),
(15, 15, 'Visa', '2023-07-13 03:06:51', '2023-07-12 20:06:34'),
(16, 16, 'Paypal', '2023-07-13 03:06:51', '2023-07-12 20:06:34'),
(17, 17, '', '2023-07-13 03:06:58', '2023-07-12 20:06:53'),
(18, 18, 'Visa', '2023-07-13 03:08:07', '2023-07-12 20:07:46'),
(19, 19, 'Paypal', '2023-07-13 03:08:07', '2023-07-12 20:07:46'),
(20, 20, 'Paypal', '2023-07-13 03:08:38', '2023-07-12 20:08:08'),
(21, 21, 'MasterCard', '2023-07-13 03:08:38', '2023-07-12 20:08:08'),
(22, 22, 'Visa', '2023-07-13 03:08:59', '2023-07-12 20:08:41'),
(23, 23, 'Visa', '2023-07-13 03:08:59', '2023-07-12 20:08:41'),
(24, 24, 'Paypal', '2023-07-13 03:09:23', '2023-07-12 20:09:01'),
(25, 25, 'MasterCard', '2023-07-13 03:09:23', '2023-07-12 20:09:01'),
(26, 26, 'Paypal', '2023-07-13 03:10:38', '2023-07-12 20:10:11'),
(27, 27, 'Visa', '2023-07-13 03:10:38', '2023-07-12 20:10:11'),
(28, 28, 'MasterCard', '2023-07-13 03:11:04', '2023-07-12 20:10:40'),
(29, 29, 'Visa', '2023-07-13 03:11:04', '2023-07-12 20:10:40'),
(30, 30, 'Paypal', '2023-07-13 03:11:15', '2023-07-12 20:11:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Products`
--

CREATE TABLE `Products` (
  `ID` int(11) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Material` varchar(20) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` text NOT NULL,
  `Thumb` varchar(30) NOT NULL,
  `Sub_category_ID` int(11) NOT NULL,
  `Jewelry_type` varchar(20) NOT NULL,
  `Collection` varchar(30) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL,
  `Deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Products`
--

INSERT INTO `Products` (`ID`, `Unit`, `Name`, `Material`, `Price`, `Description`, `Thumb`, `Sub_category_ID`, `Jewelry_type`, `Collection`, `Created_at`, `Updated_at`, `Deleted_at`) VALUES
(1, 'pcs', 'Marquise Crescendo Pavé Ring', 'Gold', '6000', '—The Crescendo Collection\r\n\r\nA harmony of tapering lines and floating diamonds.  \r\n\r\nCrafted of polished 18 karat gold, our signature Crescendo ring showcases a prong set marquise cut diamond with a tapering diamond band.\r\n\r\nModel is wearing a 1.00ct and a 0.50ct in the photos.\r\n\r\n *Setting only, final price will vary upon center stone selection.\r\n\r\nDiamond carat weight (not including center stone) 0.19ct\r\n\r\nCustom variations can be done with alternative stone color and sizes. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\n*Setting only, final price will vary upon center stone selection\r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.\r\n\r\nGiven the nature of the open ring design, this ring cannot be resized. Please confirm your ring size before placing your order.\r\n\r\n-Handcrafted in Los Angeles, California. \r\n', '1.webp', 2, 'Diamond', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(2, 'pcs', 'Pear Serif Ring', 'Gold', '4000', 'Handcrafted in polished 18 karat gold, our Pear Serif Ring showcases a sparkling pear diamond (0.40ct) that dangles from two nestled diamonds.\r\n\r\nApprox 0.53tcw\r\n\r\nDiamond Grade: F/G color, VS clarity\r\n\r\nAvailable in Yellow Gold\r\n\r\nThis item is ready to ship', '2.webp', 2, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(4, 'pcs', 'Marquise Crescendo Ring', 'Platinum', '4000', 'A harmony of tapering lines and floating diamonds.  \r\n\r\nCrafted of polished 18 karat gold, our signature Crescendo ring showcases a prong set marquise cut diamond. \r\n\r\nModel is wearing a 1.00ct and a 0.50ct in the photos.\r\n\r\n *Setting only, final price will vary upon center stone selection.\r\n\r\nCustom variations can be done with alternative stone color and sizes. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.\r\n\r\nGiven the nature of the open ring design, this ring cannot be resized. Please confirm your ring size before placing your order.\r\n\r\n-Handcrafted in Los Angeles, California. ', '3.webp', 2, 'Diamond', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(5, 'pcs', 'Diamond Trace Ring', 'Gold', '20000', 'The Diamond Trace Ring is crafted in polished 18 karat gold, showcasing a fluid line of gold that delicately dances around the finger with a nestled pear cut diamond. \r\n\r\n1.6ct G color, VS2 clarity diamond (GIA certified) \r\n\r\nCustom variations can be made with alternative stone sizes. For inquiries: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.\r\n', '4.webp', 2, 'Diamond', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(6, 'pcs', 'Brilliant Duét Ring', 'Gold', '30000', 'Crafted of polished 18k gold, our signature Brilliant Duét Ring features two 1ct brilliant cut diamonds that intertwine in perfect harmony . This piece symbolizes love and unity as two individuals coming together in this modern yet timeless design that includes an eternity of micropavé diamonds to complete our tribute to eternal love. \r\n\r\n2.32tcw G color, VS2 clarity (GIA certification) / 4.80 grams\r\n\r\nCustom variations can be made with alternative stone sizes. For inquiries: bespoke@katkimfinejewelry.com \r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold - Platinum upon request. \r\n\r\nPlease note: All our pieces are made to order and require 2-4 weeks for production. \r\n\r\n-Handcrafted in Los Angeles, California. ', '5.webp', 2, 'Diamond', 'Autumn', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(7, 'pcs', 'Pearl Crescendo Ring', 'Gold', '3300', 'A harmony of tapering lines and floating pearls.  \r\n\r\nCrafted of polished 18 karat yellow gold, our Pearl Crescendo Ring wraps around the finger and showcases a 5mm Akoya pearl enclosed in delicate diamond pavéd prongs.\r\n\r\nCustom variations can be done with alternative stone color and sizes. For inquires: bespoke@katkimfinejewelry.com', '6.webp', 2, 'Pear', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(8, 'pcs', 'Sixteen Stone Ring', 'Platinum', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with X\'s, creating this dazzling design.\r\n\r\nPlatinum with diamonds and sapphires\r\nRound sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60127491', '7.webp', 1, 'Sapphire', 'Summer', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(9, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '8.webp', 1, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(10, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '9.webp', 1, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(11, 'pcs', 'Mixed Cluster Ring', 'Platinum', '7000', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. Set with brilliant diamonds, this ring is the epitome of understated elegance.\r\n\r\nPlatinum with diamonds\r\nMarquise diamonds, carat total weight .27\r\nPear-shaped diamonds, carat total weight .20\r\nRound brilliant diamonds, carat total weight .13\r\nProduct number:60149145', '10.webp', 1, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(12, 'pcs', 'Ring', 'Platinum', '8300', 'Shimmering diamonds surround an intensely colored aquamarine. Ring in platinum with a round aquamarine and a double row of round brilliant diamonds. Aquamarine, carat weight .70; diamonds, carat total weight .43.\r\n\r\nProduct number:60144757', '11.webp', 1, 'Aquamarine', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(13, 'pcs', 'Sapphire and Diamond Ring', 'Platinum', '10500', 'Shimmering diamonds surround a velvety sapphire set in platinum. Round sapphire, carat weight .45; diamonds, carat total weight .36.\r\n\r\nProduct number:60145718', '12.webp', 1, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(14, 'pcs', 'Asscher Diamond Cosma Ring', 'Gold', '5000', 'Crafted of polished 18K gold, our Asscher Diamond Cosma Ring is designed to emulate the diamonds silhouette in a clean bezel setting.\r\n\r\n — Model is wearing a 2ct asscher cut diamond / 3.47 grams\r\n\r\n*Setting only, final price will vary upon center stone selection.\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold, and Platinum upon request.\r\n\r\nCustom variations can be made with alternative stones and diamond specifications. For purchasing options contact: bespoke@katkimfinejewelry.com\r\n\r\nPlease note: All our pieces are custom made to order and requires 2-4 weeks for production.\r\n\r\n-Handcrafted in Los Angeles, California.', '13.webp', 3, 'Diamond', 'Autumn', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(15, 'pcs', 'Grande Anerise Diamond Ring', 'Gold', '10300', 'The Grande Anerise Diamond Ring is crafted of polished 18 karat gold, showcasing an eternity of invisible set princess cut diamonds.\r\n\r\nApprox 3.15 carats\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\nQuarter sizes are available upon request. Please make a note at checkout.\r\n\r\nCustom variations can be made with alternative stone sizes. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\n Please note: All our pieces are made to order and requires 2-4 weeks for production.', '14.webp', 3, 'Diamond', 'Winter', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(16, 'pcs', 'Diamond Zipper Ring', 'Rose Gold', '3200', 'The Diamond Zipper Ring is handcrafted from 18-karat gold with 0.68ct of floating brilliant cut diamonds that create a sparkling zipper silhouette.\r\n\r\n1.41 grams\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.\r\n', '15.webp', 3, 'Diamond', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(17, 'pcs', 'Éternal Baguette Cascade Band', 'Gold', '15800', 'Celebrating love. A collection to remember the unforgettable moments, special occasions, and the beauty of what life brings. An iconic symbol of continual happiness and love.\r\n\r\nThe Eternal Baguette Cascade Band is delicately made from 18-karat gold with a full eternity of G color VS clarity baguette diamond surround. \r\n\r\n4.9mm width ; approx 4.3ctw / 5.9 grams\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\nQuarter sizes are available upon request. Please make a note at checkout.\r\n\r\nCustom variations can be made with alternative stone sizes. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request.\r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.', '16.webp', 3, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(18, 'pcs', 'Cerré Infinity Band', 'Gold', '6300', 'Our Cerré Infinity Band is delicately made from solid 18 karat gold that carries a soft silhouette with the perfect balance of symmetry that is bold alone and can also compliment other pieces in the collection.\r\n\r\n3.8mm ; approx 1.8tcw\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\nCustom variations can be made with alternative stone sizes. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold, White Gold, Rose Gold — Platinum upon request. \r\n\r\nPlease note: All our pieces are made to order and requires 2-4 weeks for production.', '17.webp', 3, 'Diamond', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(19, 'pcs', 'Asscher Emerald Cosma Ring', 'Gold', '22500', 'Celebrating love. A collection to remember the unforgettable moments, special occasions, and the beauty of what life brings. An iconic symbol of continual happiness and love.\r\n\r\nCrafted of polished 18K gold, our Asscher Emerald Cosma Ring is designed to emulate the stone\'s silhouette in a clean bezel setting.\r\n\r\n3ct asscher cut Muzo emerald / 5.2 grams\r\n\r\nQuarter sizes are available upon request.\r\n\r\nAvailable in Yellow Gold and White Gold upon request.\r\n\r\nCustom variations can be made with alternative stones and diamond specifications. For purchasing options contact: bespoke@katkimfinejewelry.com\r\n\r\nPlease note: All our pieces are custom made to order and requires 2-4 weeks for production.\r\n\r\n-Handcrafted in Los Angeles, California.', '18.webp', 3, 'Emerald', 'Winter', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(20, 'pair', 'Triple Drop Earrings', 'Rose gold', '4500', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. Playing with tension and proportion, these earrings are perfectly balanced and cradled by a fine chain.\r\n\r\n18k rose gold\r\nDesigned to be comfortable and easy to wear\r\nProduct number:63008990', '19.webp', 4, 'None', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(21, 'pair', 'Vine Drop Earrings', 'Gold', '15900', 'Inspired by the natural world, Tiffany Victoria designs capture the fluid movement of flowers, vines and leaves with a mix of expertly cut diamonds. These long drop vine earrings are crafted of 18k gold that features a contrast of high polish and sandblasted finishes. Round brilliant and marquise diamonds totaling nearly one carat play off the light and accentuate the vine motif. When too many diamonds are never enough, Tiffany Victoria is the ultimate way to shine. For maximum impact, wear these long drop earrings on their own.\r\n\r\n18k yellow gold with round brilliant and marquise diamonds\r\n2.92” long\r\nCarat total weight .99\r\nProduct number:69523528', '20.webp', 4, 'Diamond', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(22, 'pair', 'Graduated Link Earrings', 'Silver', '2275', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. Linear and industrial, these earrings make a chic statement.\r\n\r\nSterling silver\r\nDesigned to be comfortable and easy to wear\r\nProduct number:60013154', '21.webp', 4, 'None', 'Winter', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(23, 'pair', 'Drop Earrings', 'Rose gold', '6800', 'The entwined ends of Tiffany Knot’s signature motif symbolize the power of connections between people. Balancing strength and elegance, each Tiffany Knot design is a complex feat of craftsmanship. These drop earrings are crafted with rose gold and pavé diamonds, then polished by hand for high shine. Each round brilliant diamond—specifically chosen to meet Tiffany’s high standards—is hand set at precise angles to maximize brilliance. Wear these earrings on their own for maximum impact.\r\n\r\n18k rose gold with round brilliant diamonds\r\nCarat total weight .31\r\nPost closure\r\nFeatures Tiffany & Co. hallmark\r\nProduct number:69526101', '22.webp', 4, 'Diamond', 'Autumn', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(24, 'pair', 'Pearl and Diamond Earrings', 'Platinum', '10500', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. South Sea cultured pearls elegantly complement the fiery radiance of platinum-set diamond earrings.\r\n\r\nPlatinum with South Sea cultured pearls and round brilliant diamonds\r\nPearls, 11-12 mm\r\nDiamonds, carat total weight .47\r\nProduct number:60145414', '23.webp', 4, 'Pearl', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(25, 'pair', 'Mixed Cluster Drop Earrings', 'Platinum', '56500', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. Alternating mixed-cut diamonds create striking constellations of light.\r\n\r\nPlatinum with diamonds\r\nMarquise diamonds, carat total weight 1.67\r\nPear-shaped diamonds, carat total weight 1.48\r\nRound brilliant diamonds, carat total weight 1.10\r\nProduct number:60011807', '24.webp', 4, 'Diamond', 'Winter', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(26, 'pair', 'T1 Hoop Earrings', 'Rose gold', '2950', 'Tiffany T1 designs reinvent our iconic Tiffany T collection with bold details and dimension. These 18k rose gold hoop earrings are precisely crafted with a beveled edge to bring out the striking profile. Whether worn alone or with a mix of stud earrings for an unexpected look, they make a perfect finishing touch.\r\n\r\n18k rose gold\r\nSize extra small\r\nProduct number:70811197', '25.webp', 5, 'None', 'Autumn', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(27, 'pair', 'T1 Hoop Earrings', 'Gold', '4100', 'Tiffany T1 designs reinvent our iconic Tiffany T collection with bold profiles and powerful details. These hoop earrings are precisely crafted in 18k yellow gold and feature a beveled edge traced with round brilliant diamonds. Wear on their own as a striking statement or style with a mix of stud earrings for an unexpected look.\r\n\r\n18k yellow gold with round brilliant diamonds\r\nSize extra small\r\nCarat total weight .40\r\nProduct number:69783015', '26.webp', 5, 'Diamond', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(28, 'pair', 'X Hoop Earrings', 'Gold', '3800', 'Hoop earrings get a modern update in highly polished 18k yellow gold. The sleek knife edge profile of this design—a code of the house since the introduction of the Tiffany® Setting engagement ring in 1886—is pushed to a magnified scale for bold visual impact. Wearable emblems inspired by the Roman numerals on the iconic clock at the New York flagship store, the Atlas X collection is a reminder to take time into your own hands and treasure what matters most. Pair these statement-making earrings with a delicate Tiffany pendant to round out your look.\r\n\r\n18k yellow gold\r\nSize large\r\n34.1 mm diameter each\r\nProduct number:67786106', '27.webp', 5, 'None', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(29, 'pair', 'Olive Leaf Hoop Earrings', 'Silver', '475', 'With beautifully sculpted leaves, Paloma honors the olive branch, a symbol of peace and abundance.\r\n\r\nSterling silver\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:60571961', '28.webp', 5, 'None', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(30, 'pair', 'Diamond Vine Circle Earrings', 'Rose gold', '12800', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. Mixed-cut diamonds add a striking display of light to these circle earrings.\r\n\r\n18k rose gold with round brilliant and marquise diamonds\r\nSize small\r\nCarat total weight .81\r\nProduct number:68287472', '29.webp', 5, 'Diamond', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(31, 'pair', 'Diamond Hoop Earrings', 'White Gold', '8900', 'Brilliant diamonds elegantly outline these hoop earrings. As multifaceted as it is iconic, the Tiffany T collection is a tangible reminder of the connections we feel but can\'t always see. Style these earrings with a simple Tiffany necklace to complete your outfit.\r\n\r\n18k white gold with round brilliant diamonds\r\nSize medium\r\nCarat total weight .41\r\nProduct number:60011242', '30.webp', 5, 'Diamond', 'Spring', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(32, 'pair', 'Diamonds by the Yard® Earrings', 'Gold', '1250', 'A modern take on classic diamond studs, the simple design of these earrings takes center stage with hand-polished bezel-set diamonds. Elsa Peretti’s revolutionary Diamonds by the Yard® collection features bezel-set stones that forever changed the role of diamonds in fashion. Wear these diamond studs on their own or mix and match with statement-making drop earrings for a bold look.\r\n\r\n18k yellow gold with bezel-set round brilliant diamonds\r\nCarat total weight .10\r\nOriginal designs copyrighted by Elsa Peretti\r\nProduct number:60017484\r\n', '31.webp', 6, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(33, 'pair', 'Mixed Cluster Earrings', 'Platinum', '24400', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. Here, stones alternate in perfect proportion to beautifully frame the face.\r\n\r\nPlatinum with diamonds\r\nSize large\r\nMarquise diamonds, carat total weight .93\r\nPear-shaped diamonds, carat total weight .84\r\nProduct number:60011821', '32.webp', 6, 'Diamond', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(34, 'pair', 'Stud Earrings', 'Platinum', '1700', 'Earrings in 18k white gold with Akoya cultured pearls and round brilliant diamonds. Pearls, 7-7.5 mm. Carat total weight .16.\r\n\r\nProduct number:60126527', '33.webp', 6, 'Pearl', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(35, 'pair', 'Earrings', 'Rose gold', '6900', 'Earrings in 18k rose gold with round brilliant diamonds.\r\n\r\n18k rose gold with diamonds\r\nRound brilliant center diamonds, carat total weight .31, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .30\r\nProduct number:60006721', '34.webp', 6, 'Diamond', 'Autumn', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(36, 'pair', 'Olive Leaf Heart Earrings', 'Gold', '775', 'In 18k gold. Original designs copyrighted by Paloma Picasso.\r\n\r\nProduct number:60021166', '35.webp', 6, 'None', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(37, 'pair', 'Diamond Vine Earrings', 'Rose gold', '9450', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The unique vine shape of these classic diamond earrings are a striking addition to any outfit.\r\n\r\n18k rose gold with round brilliant and marquise diamonds\r\nSize small\r\nCarat total weight .64\r\nProduct number:66912167', '36.webp', 6, 'Diamond', 'Summer', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(38, 'pcs', 'Link Bracelet', 'Rose gold', '76500', 'Tiffany HardWear is inspired by the attitude and energy of New York City. This 18k rose gold bracelet features the collection’s signature gauge links in a striking contrast of metal and pavé diamonds. Tiffany artisans carefully hand set each diamond in a honeycomb pattern to achieve maximum shine. The closure is hidden as a link creating a continuous, uninterrupted look. It makes a beautiful statement worn on its own or mixed with other metals.\r\n\r\n18k rose gold with round brilliant diamonds\r\nSize medium\r\n7.79\" long\r\nCarat total weight 8.83\r\nProduct number:70751054', '37.webp', 7, 'Diamond', 'Summer', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(39, 'pcs', 'Link Bracelet', 'Gold', '4500', 'Tiffany HardWear is inspired by the attitude and energy of New York City. This 18k yellow gold bracelet features the collection’s signature gauge links with freshwater pearls—a striking interplay of textures and shapes. Add this modern take on pearl jewelry to your favorite bracelet stack.\r\n\r\n18k yellow gold with freshwater pearls\r\nSize medium\r\nFits wrists up to 6.25\"\r\nPearls, 8.5-9 mm each\r\nProduct number:70606143', '38.webp', 7, 'Pearl', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(40, 'pcs', 'Venetian Link Bracelet', 'Silver', '400', 'Designed with interlocking sterling silver links, this Venetian link bracelet was inspired by ancient Roman arches. Tiffany men\'s jewelry and accessories reflect the brand\'s authority as the purveyor of American luxury goods—direct, uncomplicated and rooted in a legacy of expert craftsmanship. This style looks just as cool worn solo as it does paired with a Tiffany watch.\r\n\r\nSterling silver\r\nSize medium\r\n7.5\" long\r\nProduct number:60150727', '39.webp', 7, 'None', 'Spring', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(41, 'pcs', 'Makers Wide Chain Bracelet', 'Silver', '1250', 'Featuring sterling silver and 18k gold, this mixed metal wide chain bracelet captures the utilitarian spirit of classic American design. Crafted with a makers symbol inspired by the renowned Tiffany hollowware shop, the Tiffany 1837 Makers collection honors Tiffany\'s legacy of expert craftsmanship through a modern lens. This style looks just as cool worn solo as it does paired with a Tiffany watch.\r\n\r\nSterling silver and 18k gold\r\nSize medium\r\n8.25\" long\r\nProduct number:66875458\r\n', '40.webp', 7, 'None', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(42, 'pcs', 'Large Link Bracelet', 'Rose gold', '24400', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. Here, dazzling diamonds illuminate bold gauge links.\r\n\r\n18k rose gold with round brilliant diamonds\r\nLink size, large\r\nWrist size, medium\r\nFits wrists up to 6.25\"\r\nCarat total weight 1.70\r\nDesigned to be comfortable and easy to wear\r\nProduct number:60451095', '41.webp', 7, 'Diamond', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(43, 'pcs', 'Makers I.D. Chain Bracelet', 'Gold', '11300', 'Designed in 18k gold with a bar perfect for engraving, this I.D. chain bracelet captures the utilitarian spirit of classic American design. Crafted with a makers symbol inspired by the renowned Tiffany hollowware shop, the Tiffany 1837® Makers collection honors Tiffany\'s legacy of expert craftsmanship through a modern lens. This style looks just as cool worn solo as it does paired with a Tiffany watch.\r\n\r\n18k gold\r\nSize medium\r\n8\" long\r\nProduct number:63526339', '42.webp', 7, 'None', 'Summer', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(44, 'pcs', 'T1 Narrow Hinged Bangle', 'Gold', '13300', 'Wrapped around the wearer in a continuous, unbroken circle, this hinged bangle features scintillating diamonds and a strong \"T\" motif at the center. A reinvention of a Tiffany icon, Tiffany T1 designs represent individual strength and perpetual power, worn outwardly to express what lies within. Stack this hinged bangle with other Tiffany T bracelets for a bold look, or simply wear it on its own.\r\n\r\n18k gold with round brilliant diamonds\r\nSize medium\r\nFits wrists up to 6.25\"\r\nCarat total weight 1.00\r\nProduct number:68315689', '43.webp', 8, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(45, 'pcs', 'Double Row Hinged Bangle', 'Gold', '25500', 'The entwined ends of Tiffany Knot’s signature motif symbolize the power of connections between people. Balancing strength and elegance, each Tiffany Knot design is a complex feat of craftsmanship. This bangle is crafted with yellow gold and pavé diamonds, then polished by hand for high shine. Each round brilliant diamond—specifically chosen to meet Tiffany’s high standards—is hand set at precise angles to maximize brilliance. Wear this bangle on its own or partnered with classic silhouettes for an unexpected pairing.\r\n\r\n18k yellow gold with round brilliant diamonds\r\nCarat total weight, 2.05\r\nSize medium\r\nFits wrists up to 6.25\"\r\nKnot motif conceals clasp\r\nPush down the tail end of the knot and rotate it to open the bracelet\r\nFeatures Tiffany & Co. hallmark\r\nProduct number:68887542\r\n', '44.webp', 8, 'Diamond', 'Summer', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(46, 'pcs', 'Hinged Bypass Bangle', 'Platinum', '20200', 'Reimagining diamond jewelry from a contemporary point of view, the Tiffany Edge collection is defined by a signature 18k yellow gold accent that joins together multiple rows of round brilliant diamonds. A balance of clean lines and showstopping diamonds, this Tiffany Edge hinged bypass bangle features a striking contrast of precious metals. Wear it solo or stacked with other Tiffany bracelets for maximum impact.\r\n\r\nPlatinum and 18k yellow gold with round brilliant diamonds\r\nSize medium\r\nFits wrists up to 6.25\"\r\nCarat total weight 1.87\r\nProduct number:70920751', '45.webp', 8, 'Diamond', 'Winter', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(47, 'pcs', 'Vine Wire Bracelet', 'Rose gold', '5950', 'Inspired by the natural world, Tiffany Victoria designs capture the fluid movement of flowers, vines and leaves with a mix of expertly cut diamonds. This wire bracelet is crafted of 18k rose gold that features a contrast of high polish and sandblasted finishes. Round brilliant and marquise diamonds play off the light and accentuate the vine motif. When too many diamonds are never enough, Tiffany Victoria is the ultimate way to shine. Wear on its own or paired with your favorite diamond tennis bracelet for sparkle you can’t ignore.\r\n\r\n18k rose gold with round brilliant and marquise diamonds\r\nSize large\r\nFits wrists up to 6.75\"\r\nCarat total weight .25\r\nProduct number:69523676', '46.webp', 8, 'Diamond', 'Autumn', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(48, 'pcs', 'X Closed Wide Hinged Bangle', 'Rose gold', '37000', 'Featuring over 675 pavé-set diamonds, this intricately designed closed hinged bangle took over 36 hours to complete. The sleek knife edge profile of this design—a code of the house since the introduction of the Tiffany® Setting engagement ring in 1886—is pushed to a magnified scale for bold visual impact. Wearable emblems inspired by the Roman numerals on the iconic clock at the New York flagship store, the Atlas X collection is a reminder to take time into your own hands and treasure what matters most. Pair this bold piece with other Atlas X bangles, with or without diamonds, for a strong style statement.\r\n\r\n18k rose gold with over 675 pavé-set round brilliant diamonds\r\nSize medium\r\nFits wrists up to 6.25\"\r\nCarat total weight 2.81\r\nProduct number:68174414', '47.webp', 8, 'Diamond', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(49, 'pcs', 'X Closed Narrow Hinged Bangle', 'White Gold', '13500', 'Traced with over 100 round brilliant diamonds, this closed hinged bangle is designed with an iconic knife edge profile, a Tiffany code of the house since the introduction of the Tiffany® Setting engagement ring in 1886. Wearable emblems inspired by the Roman numerals on the iconic clock at the New York flagship store, the Atlas X collection is a reminder to take time into your own hands and treasure what matters most. Pair this narrow bangle with other Tiffany bracelets, with or without diamonds, for a strong style statement.\r\n\r\n18k white gold with over 100 round brilliant diamonds\r\nSize medium\r\nFits wrists up to 6.25\"\r\nCarat total weight .33\r\nProduct number:68174198', '48.webp', 8, 'Diamond', 'Spring', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(50, 'pcs', 'Diamond Eternity Bracelet', 'Gold', '16000', 'Crafted of polished 18K gold, our Diamond Eternity Bracelet features G VS1 princess cut diamonds that ends with a champagne diamond ombré for a modern take on a classic bracelet.\r\n\r\n4.55cts\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\n6.5” length\r\n\r\nCustom variations can be made with alternative stone color and lengths. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold and White Gold — Platinum upon request.\r\n', '49.webp', 9, 'Diamond', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(51, 'pcs', 'Diamond Trace Eternity', 'Gold', '11800', 'Crafted of polished 18K gold, our Emerald Trace Diamond Eternity Bracelet features an infinity of 1.25cts G VS1 round brilliant diamonds that trace a 0.50ct pear cut diamond in an 18k gold setting.\r\n\r\nBracelet Diamond Grade: G color, VS clarity\r\n\r\nPear Diamond: G color, VS2 clarity (GIA certification)\r\n\r\nAvailable in lengths of 6.5” and 7”\r\n\r\nCustom variations can be made with alternative stone color and lengths. For inquires: bespoke@katkimfinejewelry.com\r\n\r\nAvailable in Yellow Gold and White Gold.', '50.webp', 9, 'Diamond', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(52, 'pcs', 'Petite Diamond Eternity', 'Gold', '6200', 'Crafted of polished 18K gold, our Petite Diamond Eternity Bracelet features an infinity of G VS1 round brilliant diamonds.\r\n\r\n1.25cts\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\nAvailable in lengths of 6.5” and 7”', '51.webp', 9, 'Diamond', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(53, 'pcs', 'Emerald Trace Eternity', 'Gold', '10400', 'Crafted of polished 18K gold, our Emerald Trace Diamond Eternity Bracelet features an infinity of 1.25cts G VS1 round brilliant diamonds that trace a 0.56ct Columbian emerald in an 18k gold setting.\r\n\r\nDiamond Grade: G color, VS clarity\r\n\r\nAvailable in lengths of 6.5” and 7”', '52.webp', 9, 'Emerald', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(54, 'pcs', 'Cluster Tennis Bracelet', 'Platinum', '55200', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. Elegantly wrapping the wrist, this bracelet possesses an endless brilliance.\r\n\r\nPlatinum with diamonds\r\nMarquise diamonds, carat total weight 3.79\r\nRound brilliant diamonds, carat total weight 2.22\r\nProduct number:60134421', '53.webp', 9, 'Diamond', 'Spring', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(55, 'pcs', 'Tennis Bracelet', 'Platinum', '28100', 'Inspired by the fire and radiance of our superlative diamonds, Tiffany Victoria uses a unique combination of cuts for a distinctly romantic sensibility. Shining with every movement, classic pearls complement striking diamonds in this stunning bracelet.\r\n\r\nPlatinum with Akoya cultured pearls and marquise diamonds\r\nSize medium\r\nFits wrists up to 7\"\r\nPearls, 6.5-7 mm\r\nMarquise diamonds, carat total weight 1.94\r\nProduct number:60152988', '54.webp', 9, 'Pearl', 'Summer', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(56, 'pcs', 'Medium Link Necklace', 'Rose gold', '12500', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A bold chain of gauge links captures the urban edge of the city, making a stunning statement.\r\n\r\n18k rose gold\r\nLink size, medium\r\n18\" long\r\nDesigned to be comfortable and easy to wear\r\nProduct number:70881470', '55.webp', 10, 'None', 'Autumn', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(57, 'pcs', 'Small Link Necklace', 'Gold', '10500', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A bold chain of gauge links captures the urban edge of the city, making a stunning statement.\r\n\r\n18k yellow gold\r\nLink size, small\r\n18\" long\r\nDesigned to be comfortable and easy to wear\r\nProduct number:60153062', '56.webp', 10, 'None', 'Summer', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(58, 'pcs', 'Freshwater Pearl Necklace', 'Silver', '1850', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A lustrous pearl drop takes center stage in this sterling silver wrap necklace.\r\n\r\nSterling silver with a freshwater cultured pearl\r\n32\" long\r\nPearl, 9.5-10 mm\r\nDesigned to be comfortable and easy to wear\r\nProduct number:64047957', '57.webp', 10, 'Pearl', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(59, 'pcs', 'Link Necklace', 'Rose gold', '13500', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A statement-maker, this bold chain of gauge links captures the urban edge of the city.\r\n\r\n18k rose gold\r\n17\" long\r\nDesigned to be comfortable and easy to wear\r\nProduct number:63982385', '58.webp', 10, 'None', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(60, 'pcs', '18k Gold Chain', 'Gold', '600', '18k gold chain necklace, 18\" long.\r\n\r\nProduct number:60011416', '59.webp', 10, 'None', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(61, 'pcs', 'Small Wrap Necklace', 'Silver', '3750', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A bold chain of gauge links captures the urban edge of the city, making a stunning statement.\r\n\r\nSterling silver\r\nLink size, small\r\n36\" long\r\n19 mm diameter\r\nDesigned to be comfortable and easy to wear\r\nProduct number:60153372', '60.webp', 10, 'Pearl', 'Winter', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(62, 'pcs', 'Diamond Vine Circle Pendant', 'Platinum', '10400', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. Mixed-cut diamonds add dimension to the fluid fronds of this striking pendant.\r\n\r\nPlatinum with round brilliant and marquise diamonds\r\nSize large\r\non a 18\" chain\r\nCarat total weight .70\r\nProduct number:63919144', '61.webp', 11, 'Diamond', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27', NULL),
(63, 'pcs', 'Lynn Pendant', 'Gold', '3150', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. This delicate pendant is a timeless design.\r\n\r\n18k gold and platinum with round brilliant diamonds\r\nOn a 16\" chain\r\nCarat total weight .21\r\nProduct number:60022674', '62.webp', 11, 'Diamond', 'Summer', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(64, 'pcs', 'Pendant', 'Rose gold', '4800', 'The entwined ends of Tiffany Knot’s signature motif symbolize the power of connections between people. Balancing strength and elegance, each Tiffany Knot design is a complex feat of craftsmanship. This pendant is crafted with rose gold and pavé diamonds, then polished by hand for high shine. Each round brilliant diamond—specifically chosen to meet Tiffany’s high standards—is hand set at precise angles to maximize brilliance. Wear this pendant on its own or partnered with classic silhouettes for an unexpected pairing.', '63.webp', 11, 'Diamond', 'Autumn', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(65, 'pcs', 'Heart Pendant', 'Gold', '2950', 'Pendant in 18k gold with diamonds.\r\n\r\n18k gold with round brilliant diamonds\r\nOn a 16\" chain\r\nSize mini\r\nCarat total weight .25\r\nProduct number:67124693', '64.webp', 11, 'Diamond', 'Spring', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(66, 'pcs', 'Pendant', 'Rose gold', '3750', 'In 18k rose gold with round brilliant diamonds. On a 16\" chain. Carat total weight .30.\r\n\r\nProduct number:60007673', '65.webp', 11, 'Diamond', 'Winter', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(67, 'pcs', 'Double Link Pendant', 'Rose gold', '12200', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. Bold gauge links with pavé diamonds and a delicate chain define this modern link pendant.\r\n\r\n18k rose gold with pavé diamonds\r\nOn a 16\" chain\r\nCarat total weight .74\r\nDesigned to be comfortable and easy to wear\r\nProduct number:68692504', '66.webp', 11, 'Diamond', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL),
(68, 'pcs', 'Diamond Vine Pendant', 'Rose gold', '5200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. Mixed-cut diamonds add dimension to the fluid vines of this striking pendant.\r\n\r\n18k rose gold with round brilliant and marquise diamonds\r\nOn a 16\" chain\r\nCarat total weight .31\r\nProduct number:66960838\r\n', '67.webp', 12, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22', NULL),
(69, 'pcs', 'Color by the Yard Sprinkle', 'Platinum', '14000', 'The Elsa Peretti® Color by the Yard collection features bezel-set stones that shimmer against the skin. This delicate necklace is sprinkled with brilliant sapphires and scintillating diamonds.\r\n\r\nPlatinum with round sapphires and round brilliant diamonds\r\n36\" long\r\nRound sapphires, carat total weight 2.59\r\nRound brilliant diamonds, carat total weight .34\r\nOriginal designs copyrighted by Elsa Peretti\r\nProduct number:68789303', '68.webp', 12, 'Sapphire', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27', NULL),
(70, 'pcs', 'Oval Tag Station Necklace', 'Silver', '1500', 'Inspired by the iconic key ring first introduced in 1969, the Return to Tiffany collection is a classic reinvented. Featuring alternating oval tags on a sleek sterling silver chain, this station necklace makes a bold style statement.\r\n\r\nSterling silver\r\nSize small oval tags, 20 mm wide x 13 mm high\r\nSize medium oval tags, 28 mm wide x 18 mm high\r\nNecklace, 55\" long\r\nProduct number:68892546', '69.webp', 12, 'None', 'Winter', '2023-06-26 04:58:11', '2023-06-26 11:47:27', NULL),
(71, 'pcs', 'Small Wrap Necklace', 'Platinum', '24400', 'Tiffany HardWear is elegantly subversive and captures the spirit of the women of New York City. A bold chain of gauge links captures the urban edge of the city, making a stunning statement.\r\n\r\n18k rose gold\r\nLink size, small\r\n36\" long\r\n19 mm diameter\r\nDesigned to be comfortable and easy to wear\r\nProduct number:63008923', '70.webp', 12, 'None', 'Autumn', '2023-06-24 18:58:11', '2023-06-24 19:47:27', NULL),
(72, 'pcs', 'Extra Large Smile Pendant', 'Gold', '10000', 'Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. Traced with scintillating diamonds, the sleek curve of this pendant makes an elegant style statement.\r\n\r\n18k gold with round brilliant diamonds\r\nAdjustable, 16-18\" long\r\nCarat total weight .90\r\nProduct number:67513460', '71.webp', 12, 'Diamond', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27', NULL),
(73, 'pcs', 'Open Heart Pendant', 'Gold', '7800', 'The simple, evocative shape of Elsa Peretti Open Heart designs celebrates the spirit of love. This elegant creation is one of her most celebrated icons.\r\n\r\n18k gold\r\n36 mm wide\r\nOn a 28.5\" mesh chain\r\nOriginal designs copyrighted by Elsa Peretti\r\nProduct number:60018407', '72.webp', 12, 'None', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Product_details`
--

CREATE TABLE `Product_details` (
  `ID` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Product_details`
--

INSERT INTO `Product_details` (`ID`, `Size`, `Stock`, `Product_ID`, `Created_at`, `Updated_at`) VALUES
(5, 48, 5, 1, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(6, 50, 10, 1, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(7, 52, 5, 1, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(8, 48, 5, 2, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(9, 50, 10, 2, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(10, 52, 5, 2, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(11, 48, 5, 4, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(12, 50, 10, 4, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(13, 52, 5, 4, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(14, 48, 5, 5, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(15, 50, 10, 5, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(16, 52, 5, 5, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(17, 48, 5, 6, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(18, 50, 10, 6, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(19, 52, 5, 6, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(20, 48, 5, 7, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(21, 50, 10, 7, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(22, 52, 5, 7, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(23, 48, 5, 8, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(24, 50, 10, 8, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(25, 52, 5, 8, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(26, 48, 5, 9, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(27, 50, 10, 9, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(28, 52, 5, 9, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(29, 48, 5, 10, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(30, 50, 10, 10, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(31, 52, 5, 10, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(32, 48, 5, 11, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(33, 50, 10, 11, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(34, 52, 5, 11, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(35, 48, 5, 12, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(36, 50, 10, 12, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(37, 52, 5, 12, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(38, 48, 5, 13, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(39, 50, 10, 13, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(40, 52, 5, 13, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(41, 48, 5, 14, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(42, 50, 10, 14, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(43, 52, 5, 14, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(44, 48, 5, 15, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(45, 50, 10, 15, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(46, 52, 5, 15, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(47, 48, 5, 16, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(48, 50, 10, 16, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(49, 52, 5, 16, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(50, 48, 5, 17, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(51, 50, 10, 17, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(52, 52, 5, 17, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(53, 48, 5, 18, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(54, 50, 10, 18, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(55, 52, 5, 18, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(56, 48, 5, 19, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(57, 50, 10, 19, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(58, 52, 5, 19, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(59, 17, 5, 38, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(60, 18, 10, 38, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(61, 19, 5, 38, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(62, 17, 5, 39, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(63, 18, 10, 39, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(64, 19, 5, 39, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(65, 17, 5, 40, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(66, 18, 10, 40, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(67, 19, 5, 40, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(68, 17, 5, 41, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(69, 18, 10, 41, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(70, 19, 5, 41, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(71, 17, 5, 42, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(72, 18, 10, 42, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(73, 19, 5, 42, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(74, 17, 5, 43, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(75, 18, 10, 43, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(76, 19, 5, 43, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(77, 17, 5, 44, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(78, 18, 10, 44, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(79, 19, 5, 44, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(80, 17, 5, 45, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(81, 18, 10, 45, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(82, 19, 5, 45, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(83, 17, 5, 46, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(84, 18, 10, 46, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(85, 19, 5, 46, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(86, 17, 5, 47, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(87, 18, 10, 47, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(88, 19, 5, 47, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(89, 17, 5, 48, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(90, 18, 10, 48, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(91, 19, 5, 48, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(92, 17, 5, 49, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(93, 18, 10, 49, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(94, 19, 5, 49, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(95, 17, 5, 50, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(96, 18, 10, 50, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(97, 19, 5, 50, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(98, 17, 5, 51, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(99, 18, 10, 51, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(100, 19, 5, 51, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(101, 17, 5, 52, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(102, 18, 10, 52, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(103, 19, 5, 52, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(104, 17, 5, 53, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(105, 18, 10, 53, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(106, 19, 5, 53, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(107, 17, 5, 54, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(108, 18, 10, 54, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(109, 19, 5, 54, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(110, 17, 5, 55, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(111, 18, 10, 55, '2023-06-26 04:00:25', '2023-06-26 04:00:25'),
(112, 19, 5, 55, '2023-06-26 04:00:25', '2023-06-26 04:00:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Reviews`
--

CREATE TABLE `Reviews` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Comments` text NOT NULL,
  `Star_rate` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Reviews`
--

INSERT INTO `Reviews` (`ID`, `Product_ID`, `Customer_ID`, `Comments`, `Star_rate`, `Created_at`, `Updated_at`) VALUES
(3, 1, 1, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(4, 2, 1, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(5, 4, 2, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(6, 5, 3, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(7, 6, 4, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(8, 7, 7, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(9, 8, 8, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(10, 9, 9, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(11, 10, 10, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(12, 11, 11, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(13, 12, 12, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(14, 13, 13, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(15, 14, 14, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(16, 15, 20, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(17, 16, 16, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(18, 17, 17, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(19, 18, 18, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(20, 19, 19, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(21, 20, 2, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(22, 21, 4, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(23, 22, 5, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(24, 23, 6, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(25, 24, 10, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(26, 25, 19, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(27, 26, 21, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(28, 27, 12, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(29, 28, 14, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(30, 29, 22, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(31, 30, 16, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(32, 31, 23, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(33, 32, 24, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(34, 33, 25, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(35, 34, 18, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(36, 35, 27, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(37, 36, 26, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(38, 37, 28, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(39, 38, 15, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(40, 39, 2, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(41, 40, 22, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(42, 41, 24, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(43, 42, 29, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(44, 43, 6, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(45, 44, 20, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(46, 45, 10, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(47, 46, 26, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(48, 47, 16, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(49, 48, 28, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(50, 49, 13, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(51, 50, 3, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(52, 51, 8, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(53, 52, 17, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(54, 53, 30, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(55, 54, 29, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(56, 55, 4, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(57, 56, 6, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(58, 57, 7, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(59, 58, 22, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(60, 59, 9, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(61, 60, 12, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(62, 61, 28, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(63, 62, 20, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(64, 63, 24, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(65, 64, 26, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(66, 65, 21, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(67, 66, 18, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(68, 67, 8, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(69, 68, 11, 'Nice product but chain was small... also got a set as a gift', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(70, 69, 14, 'Nice product', 4, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(71, 70, 30, 'Very quick service and let you know every step of the way', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(72, 71, 27, 'Nice product', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(73, 72, 30, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33'),
(74, 73, 23, 'Nice product. I love this', 5, '2023-07-13 03:13:38', '2023-07-12 20:12:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Shipping`
--

CREATE TABLE `Shipping` (
  `ID` int(11) NOT NULL,
  `Shipping_method` tinyint(1) NOT NULL,
  `Shipping_fee` decimal(10,0) NOT NULL,
  `Receiver_name` varchar(50) NOT NULL,
  `Receiver_phone` varchar(20) NOT NULL,
  `Shipping_address` varchar(100) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Shipping`
--

INSERT INTO `Shipping` (`ID`, `Shipping_method`, `Shipping_fee`, `Receiver_name`, `Receiver_phone`, `Shipping_address`, `Created_at`, `Updated_at`) VALUES
(1, 1, '5', 'Tran Mai Hien', '0333333333', '8 Ton That Thuyet', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(2, 2, '10', 'Vu Thi Hue', '055555555', '8 Ton That Thuyet', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(3, 1, '5', 'Trần Quỳnh Trang', '0879678678', '42 Lý Nam Đế', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(4, 2, '10', 'Mai Thạch Thọ', '0386754682', '2/3 Lê Hồng Phong - Hải Phòng', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(5, 1, '5', 'Hoàng Thị Thanh Hương', '0963286888', 'Số 60 - ngõ 28 Xuân La', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(6, 2, '10', 'Vũ Thị Thu Thủy', '0963686189', '15 Hoa Lâm Long Biên', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(7, 1, '5', 'Trần Thu Hường', '0917752850', 'P310 - Khu B11B Nam Trung Yên', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(8, 2, '10', 'Nguyễn Thị Lệ Quyên', '0963283868', 'Đầm Trấu - Bạch Đằng - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(9, 1, '5', 'Đào Văn Hùng', '0963152252', '6A2 Xưởng Mộc - An Dương - Tây Hồ', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(10, 2, '10', 'Nguyễn Lan Hương', '0963161978', 'Đại Mỗ - Từ Liêm - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(11, 1, '5', 'Hà Trung Hiệu', '0963033979', 'P209 E4 Thanh Xuân Bắc - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(12, 2, '10', 'Hoàng Lê Minh', '042048268', 'Tổng cục 2 Xuân Đỉnh - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(13, 1, '5', 'Đoàn Thị Thanh Bình', '0963004328', '32B ngõ 94 phố Tân Mai - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(14, 2, '10', 'Tô Nam Phương', '0962000328', 'Số 4 dãy 37/16 Lê Thanh Nghị', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(15, 1, '5', 'Lại Quỳnh Chi', '0912353577', '12C Dốc Thọ Lão - Hai Bà Trưng - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(16, 2, '10', 'Trần Thị Nguyệt Minh', '0963182888', '49 ngách 93/20 Hoàng Văn Thái', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(17, 1, '5', 'Vũ Thị Tú Anh', '0963030999', '17/70 ngõ Văn Chương - Đống Đa', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(18, 2, '10', 'Nguyễn Thị Hạnh', '0963000336', 'P504 TT Đường Sông - Võ Thị Sáu - Quận Hai Bà Trưng', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(19, 1, '5', 'Nguyễn Thị Thanh Huyền', '0963555246', 'Số 2A ngõ 68 - ngách 88 Cầu Giấy', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(20, 2, '10', 'Nguyễn Hoàng Dương', '0986718983', '173B Quang Trung - Hà Đông', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(21, 1, '5', 'Bùi Thế Mạnh', '0914476296', 'Số 13 - ngõ 162 Lê Trọng Tấn', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(22, 2, '10', 'Đỗ Việt Hùng', '0962007490', '127 Tôn Đức Thắng - Đống Đa', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(23, 1, '5', 'Vũ Minh Giang', '0963068069', 'Số 23 ngách 20 ngõ Hồng Hà - Hoàng Mai', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(24, 2, '10', 'Lê Hồng Quang', '0962007113', '16/6 Đền Lừ - Hoàng Mai', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(25, 1, '5', 'Nguyễn Khánh Tùng', '0963379399', 'Số 221 Khuất Duy Tiến - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(26, 2, '10', 'Lê Văn Hiếu', '0982162082', '10/14 ngõ Thống Nhất - Đại La - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(27, 1, '5', 'Trần Ngọc Doanh', '0963350999', 'Thanh Trì - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(28, 2, '10', 'Dương Mạnh Tuấn', '0986597808', 'Số 14 hẻm 5/4/15 Hoàng Quốc Việt', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(29, 1, '5', 'Nguyễn Tuấn Trường', '0963081256', '38/35 Nguyễn An Ninh - Hoàng Mai', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(30, 2, '10', 'Nguyễn Anh Quân', '0963771983', 'Gia Lâm - Hà Nội', '2023-06-21 13:17:38', '2023-06-21 13:17:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Sub_categories`
--

CREATE TABLE `Sub_categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Sub_categories`
--

INSERT INTO `Sub_categories` (`ID`, `Name`, `Category`, `Description`) VALUES
(1, 'cocktail', 'rings', 'From diamond cocktail rings to emerald cocktail rings and more, these extraordinary designs showcase the world’s most beautiful gemstones and finest craftsmanship.'),
(2, 'eternity', 'rings', 'Meticulously crafted with Tiffany’s renowned diamonds, these are rings to wear—and love—for eternity. Wear one on its own or stacked with an engagement ring.'),
(3, 'wedding', 'rings', 'Symbols of enduring partnership and commitment, our wedding rings for women feature classic and contemporary designs crafted by Tiffany’s master artisans.'),
(4, 'dropdangle', 'earrings', 'From classic styles to bold takes, our collection of drop earrings turns heads every time.'),
(5, 'hoop', 'earrings', 'A jewelry box essential, hoops work equally well for day or night. Explore expertly crafted diamond hoop earrings, gold hoop earrings, sterling silver hoop earrings and more.'),
(6, 'stud', 'earrings', 'From delicate diamond studs to statement rose gold designs, our style-defining earrings are striking worn solo or as part of an earring stack.'),
(7, 'chain', 'bracelets', 'With sleek silhouettes or bold links, our chain bracelets are a worthy addition to your jewelry collection.'),
(8, 'bangle', 'bracelets', 'Our collection of sterling silver and 18k yellow, white and rose gold bangles feature eye-catching details and sparkling diamonds—a must-have to transform any day or night ensemble.'),
(9, 'tennis', 'bracelets', 'An iconic design that was originally sported by players on the court, the tennis bracelet has become an elegant style staple. Explore diamond tennis bracelets, sapphire tennis bracelets and more.'),
(10, 'chain', 'necklaces', 'Whether worn solo or layered together, chains are a jewelry must-have. Discover yellow gold chains, rose gold chains and sterling silver chains.'),
(11, 'everyday', 'necklaces', 'These striking diamond necklaces are designed to be worn on repeat.'),
(12, 'layering', 'necklaces', 'Why stop at just one necklace? Whether you choose two, three or more, these designs are perfect for creating an effortless layered necklace look.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `CheckMailAdmin`
--
ALTER TABLE `CheckMailAdmin`
  ADD KEY `AdminID` (`AdminID`);

--
-- Chỉ mục cho bảng `CheckMailUser`
--
ALTER TABLE `CheckMailUser`
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Chỉ mục cho bảng `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `Medias`
--
ALTER TABLE `Medias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID_Medias` (`Product_ID`);

--
-- Chỉ mục cho bảng `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `Customer_ID_Orders` (`Customer_ID`);

--
-- Chỉ mục cho bảng `Order_items`
--
ALTER TABLE `Order_items`
  ADD PRIMARY KEY (`Order_code`,`Product_ID`),
  ADD KEY `Order_code_Order_items` (`Order_code`),
  ADD KEY `Product_ID_Order_items` (`Product_ID`);

--
-- Chỉ mục cho bảng `Payments`
--
ALTER TABLE `Payments`
  ADD KEY `Order_code_Payments` (`Order_code`),
  ADD KEY `Shipping_ID_Payments` (`Shipping_ID`);

--
-- Chỉ mục cho bảng `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Sub_category_Product` (`Sub_category_ID`);

--
-- Chỉ mục cho bảng `Product_details`
--
ALTER TABLE `Product_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID_Product_details` (`Product_ID`);

--
-- Chỉ mục cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID_Reviews` (`Product_ID`),
  ADD KEY `Customer_ID_Reviews` (`Customer_ID`);

--
-- Chỉ mục cho bảng `Shipping`
--
ALTER TABLE `Shipping`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `Sub_categories`
--
ALTER TABLE `Sub_categories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Admins`
--
ALTER TABLE `Admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `Medias`
--
ALTER TABLE `Medias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT cho bảng `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `Products`
--
ALTER TABLE `Products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `Product_details`
--
ALTER TABLE `Product_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `Shipping`
--
ALTER TABLE `Shipping`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `Sub_categories`
--
ALTER TABLE `Sub_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `CheckMailAdmin`
--
ALTER TABLE `CheckMailAdmin`
  ADD CONSTRAINT `checkmailadmin_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `Admins` (`ID`);

--
-- Các ràng buộc cho bảng `CheckMailUser`
--
ALTER TABLE `CheckMailUser`
  ADD CONSTRAINT `checkmailuser_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`ID`);

--
-- Các ràng buộc cho bảng `Medias`
--
ALTER TABLE `Medias`
  ADD CONSTRAINT `medias_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `Products` (`ID`);

--
-- Các ràng buộc cho bảng `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `Customers` (`ID`);

--
-- Các ràng buộc cho bảng `Order_items`
--
ALTER TABLE `Order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`Order_code`) REFERENCES `Orders` (`Code`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `Products` (`ID`);

--
-- Các ràng buộc cho bảng `Payments`
--
ALTER TABLE `Payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`Shipping_ID`) REFERENCES `Shipping` (`ID`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`Order_code`) REFERENCES `Orders` (`Code`);

--
-- Các ràng buộc cho bảng `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Sub_category_ID`) REFERENCES `Sub_categories` (`ID`);

--
-- Các ràng buộc cho bảng `Product_details`
--
ALTER TABLE `Product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `Products` (`ID`);

--
-- Các ràng buộc cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `Products` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `Customers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
