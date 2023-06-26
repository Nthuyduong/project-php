-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th6 26, 2023 lúc 06:13 AM
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
  `Password` varchar(20) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime DEFAULT NULL,
  `Active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Admins`
--

INSERT INTO `Admins` (`ID`, `Email`, `Password`, `Created_at`, `Updated_at`, `Active_status`) VALUES
(3, 'thuy@gmail.com', '1110', '2023-06-16 11:47:38', '2023-06-17 18:47:09', 1),
(4, 'duong@gmail.com', 'ntd', '2023-06-21 11:47:38', '2023-06-21 18:48:09', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Collections`
--

CREATE TABLE `Collections` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Collections`
--

INSERT INTO `Collections` (`ID`, `Name`) VALUES
(1, 'Spring'),
(2, 'Summer'),
(3, 'Autumn'),
(4, 'Winter'),
(5, 'Wedding');

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
  `Password` varchar(20) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime DEFAULT NULL,
  `Active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Customers`
--

INSERT INTO `Customers` (`ID`, `Address`, `Name`, `Phone`, `Email`, `Password`, `Created_at`, `Updated_at`, `Active_status`) VALUES
(1, '8 Ton That Thuyet', 'Nguyen Thuy Duong', '0123456789', 'duong@gmail.com', 'ntd', '2023-06-16 11:53:54', '2023-06-17 18:52:45', 1),
(2, 'Dong Du - Gia Lam - Hà Nội', 'Nguyen Thanh Thủy', '023232323', 'thuy@gmail.com', '1110', '2023-06-21 11:53:54', '2023-06-21 19:52:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Medias`
--

CREATE TABLE `Medias` (
  `ID` int(11) NOT NULL,
  `Url` varchar(30) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Medias`
--

INSERT INTO `Medias` (`ID`, `Url`, `Product_ID`, `Created_at`, `Updated_at`) VALUES
(5, '/rings/eternity/1.1.1.png', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(6, '/rings/eternity/1.1.2.png', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(7, '/rings/eternity/1.1.3.png', 1, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(8, '/rings/eternity/1.2.1.png', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(9, '/rings/eternity/1.2.2.png', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(10, '/rings/eternity/1.2.3.png', 2, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(11, '/rings/eternity/1.3.1.png', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(12, '/rings/eternity/1.3.2.png', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(13, '/rings/eternity/1.3.3.png', 4, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(14, '/rings/eternity/1.4.1.png', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(15, '/rings/eternity/1.4.2.png', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(16, '/rings/eternity/1.4.3.png', 5, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(17, '/rings/eternity/1.5.1.png', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(18, '/rings/eternity/1.5.2.png', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(19, '/rings/eternity/1.5.3.png', 6, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(20, '/rings/eternity/1.6.1.png', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(21, '/rings/eternity/1.6.2.png', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(22, '/rings/eternity/1.6.3.png', 7, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(23, '/rings/cocktail/1.1.1.png', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(24, '/rings/cocktail/1.1.2.png', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(25, '/rings/cocktail/1.1.3.png', 8, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(26, '/rings/cocktail/1.2.1.png', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(27, '/rings/cocktail/1.2.2.png', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(28, '/rings/cocktail/1.2.3.png', 9, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(29, '/rings/cocktail/1.3.1.png', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(30, '/rings/cocktail/1.3.2.png', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(31, '/rings/cocktail/1.3.3.png', 10, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(32, '/rings/cocktail/1.4.1.png', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(33, '/rings/cocktail/1.4.2.png', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(34, '/rings/cocktail/1.4.3.png', 11, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(35, '/rings/cocktail/1.5.1.png', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(36, '/rings/cocktail/1.5.2.png', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(37, '/rings/cocktail/1.5.3.png', 12, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(38, '/rings/cocktail/1.6.1.png', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(39, '/rings/cocktail/1.6.2.png', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(40, '/rings/cocktail/1.6.3.png', 13, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(41, '/rings/wedding/1.1.1.png', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(42, '/rings/wedding/1.1.2.png', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(43, '/rings/wedding/1.1.3.png', 14, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(44, '/rings/wedding/1.2.1.png', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(45, '/rings/wedding/1.2.2.png', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(46, '/rings/wedding/1.2.3.png', 15, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(47, '/rings/wedding/1.3.1.png', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(48, '/rings/wedding/1.3.2.png', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(49, '/rings/wedding/1.3.3.png', 16, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(50, '/rings/wedding/1.4.1.png', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(51, '/rings/wedding/1.4.2.png', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(52, '/rings/wedding/1.4.3.png', 17, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(53, '/rings/wedding/1.5.1.png', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(54, '/rings/wedding/1.5.2.png', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(55, '/rings/wedding/1.5.3.png', 18, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(56, '/rings/wedding/1.6.1.png', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(57, '/rings/wedding/1.6.2.png', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(58, '/rings/wedding/1.6.3.png', 19, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(59, '/earrings/stud/1.1.1.png', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(60, '/earrings/stud/1.1.2.png', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(61, '/earrings/stud/1.1.3.png', 20, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(62, '/earrings/stud/1.2.1.png', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(63, '/earrings/stud/1.2.2.png', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(64, '/earrings/stud/1.2.3.png', 21, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(65, '/earrings/stud/1.3.1.png', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(66, '/earrings/stud/1.3.2.png', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(67, '/earrings/stud/1.3.3.png', 22, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(68, '/earrings/stud/1.4.1.png', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(69, '/earrings/stud/1.4.2.png', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(70, '/earrings/stud/1.4.3.png', 23, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(71, '/earrings/stud/1.5.1.png', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(72, '/earrings/stud/1.5.2.png', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(73, '/earrings/stud/1.5.3.png', 24, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(74, '/earrings/stud/1.6.1.png', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(75, '/earrings/stud/1.6.2.png', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(76, '/earrings/stud/1.6.3.png', 25, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(77, '/earrings/dropdangle/1.1.1.png', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(78, '/earrings/dropdangle/1.1.2.png', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(79, '/earrings/dropdangle/1.1.3.png', 26, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(80, '/earrings/dropdangle/1.2.1.png', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(81, '/earrings/dropdangle/1.2.2.png', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(82, '/earrings/dropdangle/1.2.3.png', 27, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(83, '/earrings/dropdangle/1.3.1.png', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(84, '/earrings/dropdangle/1.3.2.png', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(85, '/earrings/dropdangle/1.3.3.png', 28, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(86, '/earrings/dropdangle/1.4.1.png', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(87, '/earrings/dropdangle/1.4.2.png', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(88, '/earrings/dropdangle/1.4.3.png', 29, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(89, '/earrings/dropdangle/1.5.1.png', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(90, '/earrings/dropdangle/1.5.2.png', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(91, '/earrings/dropdangle/1.5.3.png', 30, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(92, '/earrings/dropdangle/1.6.1.png', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(93, '/earrings/dropdangle/1.6.2.png', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(94, '/earrings/dropdangle/1.6.3.png', 31, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(95, '/earrings/hoop/1.1.1.png', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(96, '/earrings/hoop/1.1.2.png', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(97, '/earrings/hoop/1.1.3.png', 32, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(98, '/earrings/hoop/1.2.1.png', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(99, '/earrings/hoop/1.2.2.png', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(100, '/earrings/hoop/1.2.3.png', 33, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(101, '/earrings/hoop/1.3.1.png', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(102, '/earrings/hoop/1.3.2.png', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(103, '/earrings/hoop/1.3.3.png', 34, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(104, '/earrings/hoop/1.4.1.png', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(105, '/earrings/hoop/1.4.2.png', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(106, '/earrings/hoop/1.4.3.png', 35, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(107, '/earrings/hoop/1.5.1.png', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(108, '/earrings/hoop/1.5.2.png', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(109, '/earrings/hoop/1.5.3.png', 36, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(110, '/earrings/hoop/1.6.1.png', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(111, '/earrings/hoop/1.6.2.png', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(112, '/earrings/hoop/1.6.3.png', 37, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(113, '/bracelets/chain/1.1.1.png', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(114, '/bracelets/chain/1.1.2.png', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(115, '/bracelets/chain/1.1.3.png', 38, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(116, '/bracelets/chain/1.2.1.png', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(117, '/bracelets/chain/1.2.2.png', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(118, '/bracelets/chain/1.2.3.png', 39, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(119, '/bracelets/chain/1.3.1.png', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(120, '/bracelets/chain/1.3.2.png', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(121, '/bracelets/chain/1.3.3.png', 40, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(122, '/bracelets/chain/1.4.1.png', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(123, '/bracelets/chain/1.4.2.png', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(124, '/bracelets/chain/1.4.3.png', 41, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(125, '/bracelets/chain/1.5.1.png', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(126, '/bracelets/chain/1.5.2.png', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(127, '/bracelets/chain/1.5.3.png', 42, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(128, '/bracelets/chain/1.6.1.png', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(129, '/bracelets/chain/1.6.2.png', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(130, '/bracelets/chain/1.6.3.png', 43, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(131, '/bracelets/bangle/1.1.1.png', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(132, '/bracelets/bangle/1.1.2.png', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(133, '/bracelets/bangle/1.1.3.png', 44, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(134, '/bracelets/bangle/1.2.1.png', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(135, '/bracelets/bangle/1.2.2.png', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(136, '/bracelets/bangle/1.2.3.png', 45, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(137, '/bracelets/bangle/1.3.1.png', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(138, '/bracelets/bangle/1.3.2.png', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(139, '/bracelets/bangle/1.3.3.png', 46, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(140, '/bracelets/bangle/1.4.1.png', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(141, '/bracelets/bangle/1.4.2.png', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(142, '/bracelets/bangle/1.4.3.png', 47, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(143, '/bracelets/bangle/1.5.1.png', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(144, '/bracelets/bangle/1.5.2.png', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(145, '/bracelets/bangle/1.5.3.png', 48, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(146, '/bracelets/bangle/1.6.1.png', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(147, '/bracelets/bangle/1.6.2.png', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(148, '/bracelets/bangle/1.6.3.png', 49, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(149, '/bracelets/tennis/1.1.1.png', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(150, '/bracelets/tennis/1.1.2.png', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(151, '/bracelets/tennis/1.1.3.png', 50, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(152, '/bracelets/tennis/1.2.1.png', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(153, '/bracelets/tennis/1.2.2.png', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(154, '/bracelets/tennis/1.2.3.png', 51, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(155, '/bracelets/tennis/1.3.1.png', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(156, '/bracelets/tennis/1.3.2.png', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(157, '/bracelets/tennis/1.3.3.png', 52, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(158, '/bracelets/tennis/1.4.1.png', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(159, '/bracelets/tennis/1.4.2.png', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(160, '/bracelets/tennis/1.4.3.png', 53, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(161, '/bracelets/tennis/1.5.1.png', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(162, '/bracelets/tennis/1.5.2.png', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(163, '/bracelets/tennis/1.5.3.png', 54, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(164, '/bracelets/tennis/1.6.1.png', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(165, '/bracelets/tennis/1.6.2.png', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(166, '/bracelets/tennis/1.6.3.png', 55, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(167, '/necklaces/chain/1.1.1.png', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(168, '/necklaces/chain/1.1.2.png', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(169, '/necklaces/chain/1.1.3.png', 56, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(170, '/necklaces/chain/1.2.1.png', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(171, '/necklaces/chain/1.2.2.png', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(172, '/necklaces/chain/1.2.3.png', 57, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(173, '/necklaces/chain/1.3.1.png', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(174, '/necklaces/chain/1.3.2.png', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(175, '/necklaces/chain/1.3.3.png', 58, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(176, '/necklaces/chain/1.4.1.png', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(177, '/necklaces/chain/1.4.2.png', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(178, '/necklaces/chain/1.4.3.png', 59, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(179, '/necklaces/chain/1.5.1.png', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(180, '/necklaces/chain/1.5.2.png', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(181, '/necklaces/chain/1.5.3.png', 60, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(182, '/necklaces/chain/1.6.1.png', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(183, '/necklaces/chain/1.6.2.png', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(184, '/necklaces/chain/1.6.3.png', 61, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(185, '/necklaces/everyday/1.1.1.png', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(186, '/necklaces/everyday/1.1.2.png', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(187, '/necklaces/everyday/1.1.3.png', 62, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(188, '/necklaces/everyday/1.2.1.png', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(189, '/necklaces/everyday/1.2.2.png', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(190, '/necklaces/everyday/1.2.3.png', 63, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(191, '/necklaces/everyday/1.3.1.png', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(192, '/necklaces/everyday/1.3.2.png', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(193, '/necklaces/everyday/1.3.3.png', 64, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(194, '/necklaces/everyday/1.4.1.png', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(195, '/necklaces/everyday/1.4.2.png', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(196, '/necklaces/everyday/1.4.3.png', 65, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(197, '/necklaces/everyday/1.5.1.png', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(198, '/necklaces/everyday/1.5.2.png', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(199, '/necklaces/everyday/1.5.3.png', 66, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(200, '/necklaces/everyday/1.6.1.png', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(201, '/necklaces/everyday/1.6.2.png', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(202, '/necklaces/everyday/1.6.3.png', 67, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(203, '/necklaces/layering/1.1.1.png', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(204, '/necklaces/layering/1.1.2.png', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(205, '/necklaces/layering/1.1.3.png', 68, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(206, '/necklaces/layering/1.2.1.png', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(207, '/necklaces/layering/1.2.2.png', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(208, '/necklaces/layering/1.2.3.png', 69, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(209, '/necklaces/layering/1.3.1.png', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(210, '/necklaces/layering/1.3.2.png', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(211, '/necklaces/layering/1.3.3.png', 70, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(212, '/necklaces/layering/1.4.1.png', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(213, '/necklaces/layering/1.4.2.png', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(214, '/necklaces/layering/1.4.3.png', 71, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(215, '/necklaces/layering/1.5.1.png', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(216, '/necklaces/layering/1.5.2.png', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(217, '/necklaces/layering/1.5.3.png', 72, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(218, '/necklaces/layering/1.6.1.png', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(219, '/necklaces/layering/1.6.2.png', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47'),
(220, '/necklaces/layering/1.6.3.png', 73, '2023-06-26 04:57:47', '2023-06-26 04:57:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Orders`
--

CREATE TABLE `Orders` (
  `Code` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Grand total` decimal(10,0) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Orders`
--

INSERT INTO `Orders` (`Code`, `Customer_ID`, `Grand total`, `Status`, `Created_at`, `Updated_at`) VALUES
(1, 1, '25000', 'Pending', '2023-06-21 13:21:22', '2023-06-21 13:19:59'),
(2, 2, '30000', 'Processing', '2023-06-21 13:21:22', '2023-06-21 13:19:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Order_items`
--

CREATE TABLE `Order_items` (
  `Order_code` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Order_items`
--

INSERT INTO `Order_items` (`Order_code`, `Product_ID`, `Quantity`, `Price`) VALUES
(1, 1, 1, '20200'),
(1, 2, 1, '9225');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Payments`
--

CREATE TABLE `Payments` (
  `Order_code` int(11) NOT NULL,
  `Shipping_ID` int(11) NOT NULL,
  `Payment_method` varchar(30) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Payments`
--

INSERT INTO `Payments` (`Order_code`, `Shipping_ID`, `Payment_method`, `Created_at`, `Updated_at`) VALUES
(1, 1, 'Visa', '2023-06-21 13:31:06', '2023-06-21 13:29:26'),
(2, 2, 'Mastercard', '2023-06-21 13:31:06', '2023-06-21 13:29:26');

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Products`
--

INSERT INTO `Products` (`ID`, `Unit`, `Name`, `Material`, `Price`, `Description`, `Thumb`, `Sub_category_ID`, `Jewelry_type`, `Collection`, `Created_at`, `Updated_at`) VALUES
(1, 'pcs', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '1.png', 1, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(2, 'pcs', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '2.png', 1, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(4, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '3.png', 1, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(5, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '4.png', 1, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(6, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '5.png', 1, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(7, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '6.png', 1, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(8, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '7.png', 2, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(9, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '8.png', 2, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(10, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '9.png', 2, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(11, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '10.png', 2, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(12, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '11.png', 2, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(13, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '12.png', 2, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(14, 'pcs', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '13.png', 3, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(15, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '14.png', 3, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(16, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '15.png', 3, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(17, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '16.png', 3, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(18, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '17.png', 3, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(19, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '18.png', 3, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(20, 'pair', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '19.png', 4, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(21, 'pair', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '20.png', 4, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(22, 'pair', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '21.png', 4, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(23, 'pair', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '22.png', 4, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(24, 'pair', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '23.png', 4, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(25, 'pair', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '24.png', 4, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(26, 'pair', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '25.png', 5, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(27, 'pair', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '26.png', 5, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(28, 'pair', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '27.png', 5, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(29, 'pair', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '28.png', 5, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(30, 'pair', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '29.png', 5, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(31, 'pair', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '30.png', 5, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(32, 'pair', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '31.png', 6, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(33, 'pair', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '32.png', 6, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(34, 'pair', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '33.png', 6, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(35, 'pair', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '34.png', 6, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(36, 'pair', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '35.png', 6, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(37, 'pair', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '36.png', 6, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(38, 'pcs', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '37.png', 7, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(39, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '38.png', 7, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(40, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '39.png', 7, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(41, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '40.png', 7, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(42, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '41.png', 7, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(43, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '42.png', 7, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(44, 'pcs', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '43.png', 8, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(45, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '44.png', 8, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(46, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '45.png', 8, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(47, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '46.png', 8, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(48, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '47.png', 8, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(49, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '48.png', 8, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(50, 'pcs', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '49.png', 9, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(51, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '50.png', 9, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(52, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '51.png', 9, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(53, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '52.png', 9, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(54, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '53.png', 9, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(55, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '54.png', 9, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(56, 'pcs', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '55.png', 10, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(57, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '56.png', 10, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(58, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '57.png', 10, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(59, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '58.png', 10, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(60, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '59.png', 10, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(61, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '60.png', 10, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(62, 'pcs', 'Vine Bypass Ring', 'Platinum', '20200', 'With an intensity that rivals the night sky, Tiffany Victoria celebrates the blazing brilliance of Tiffany diamonds. The organic vine motif of this bypass ring complements the beauty of mixed-cut sapphires and diamonds.\r\n\r\nPlatinum with round and marquise sapphires and round brilliant diamonds\r\nSapphires, carat total weight 1.47\r\nDiamonds, carat total weight .82\r\nProduct number:68267935', '61.png', 11, 'Sapphires', 'Spring', '2023-06-21 12:58:11', '2023-06-21 12:47:27'),
(63, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '62.png', 11, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(64, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '63.png', 11, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(65, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '64.png', 11, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(66, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '65.png', 11, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(67, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '66.png', 11, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27'),
(68, 'pcs', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '67.png', 12, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22'),
(69, 'pcs', 'Hexagon Ring', 'Gold', '6100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color combinations and bold design. This hexagon ring features a custom-cut rubellite framed in an 18k gold setting. Stack this ring with other Paloma\'s Studio rings for a unique look that\'s all your own.\r\n\r\n18k gold with a rubellite\r\n8 mm diameter\r\nCarat weight .90\r\nOriginal designs copyrighted by Paloma Picasso\r\nProduct number:67945557', '68.png', 12, 'Rubellite', 'Spring', '2023-06-26 02:58:11', '2023-06-26 12:47:27'),
(70, 'pcs', 'Vine Ring', 'Platinum', '18000', 'Inspired by nature, Tiffany Victoria captures the beauty of flowers and vines with a mix of expertly cut diamonds. This ring features a round aquamarine at its center and an organic vine motif of marquise diamonds. Creating color, light and movement, Tiffany Victoria designs are proof that more diamonds are always better.\r\n\r\nPlatinum with an aquamarine and diamonds\r\nRound aquamarine, carat weight 2.75\r\nMarquise and round brilliant diamonds, carat total weight .54\r\nProduct number:68268095', '69.png', 12, 'Aquamarine', 'Summer', '2023-06-26 04:58:11', '2023-06-26 11:47:27'),
(71, 'pcs', 'Ring', 'Platinum', '6350', 'Ring in platinum with round brilliant diamonds.\r\n\r\nPlatinum with diamonds\r\nRound brilliant center diamond, carat weight .15, color D-F, clarity IF-VS\r\nOther round brilliant diamonds, carat total weight .28\r\nProduct number:60140144', '70.png', 12, 'Diamond', 'Winter', '2023-06-24 18:58:11', '2023-06-24 19:47:27'),
(72, 'pcs', 'Baguette Three-stone Ring', 'Gold', '16100', 'The Paloma\'s Studio collection celebrates the designer’s love of exuberant color through unexpected gemstone combinations and bold design. Featuring bright hues and graphic lines, this design is set with rich green tourmalines.\r\n\r\n18k gold with baguette green tourmalines\r\nCarat total weight 3.05\r\nThis special capsule collection is now available on Tiffany.com and at select Tiffany stores\r\nProduct number:62820497', '71.png', 12, 'Tourmaline', 'Summer', '2023-06-25 21:58:11', '2023-06-25 22:47:27'),
(73, 'pcs', 'Sixteen Stone Ring', 'Gold', '15000', 'Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Brilliant sapphires and diamonds alternate with golden X\'s, creating this dazzling design.\r\n\r\n18k gold and platinum with diamonds and sapphires\r\nRound pink sapphires, carat total weight .75\r\nRound brilliant diamonds, carat total weight .59\r\nProduct number:60126634', '72.png', 12, 'Sapphire', 'Autumn', '2023-06-26 01:58:11', '2023-06-26 09:47:27');

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Shipping`
--

CREATE TABLE `Shipping` (
  `ID` int(11) NOT NULL,
  `Shipping_method` varchar(20) NOT NULL,
  `Shipping_fee` decimal(10,0) NOT NULL,
  `Receiver_name` varchar(50) NOT NULL,
  `Receiver_phone` varchar(20) NOT NULL,
  `Shipping_address` varchar(100) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Shipping`
--

INSERT INTO `Shipping` (`ID`, `Shipping_method`, `Shipping_fee`, `Receiver_name`, `Receiver_phone`, `Shipping_address`, `Created_at`, `Updated_at`) VALUES
(1, 'Standard', '5', 'Tran Mai Hien', '0333333333', '8 Ton That Thuyet', '2023-06-21 13:17:38', '2023-06-21 13:17:38'),
(2, 'Express', '10', 'Vu Thi Huế', '055555555', '8 Ton That Thuyet', '2023-06-21 13:17:38', '2023-06-21 13:17:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Sub_categories`
--

CREATE TABLE `Sub_categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Sub_categories`
--

INSERT INTO `Sub_categories` (`ID`, `Name`, `Category`) VALUES
(1, 'cocktail', 'rings'),
(2, 'eternity', 'rings'),
(3, 'wedding', 'rings'),
(4, 'dropdangle', 'earrings'),
(5, 'hoop', 'earrings'),
(6, 'stud', 'earrings'),
(7, 'chain', 'bracelets'),
(8, 'bangle', 'bracelets'),
(9, 'tennis', 'bracelets'),
(10, 'chain', 'necklaces'),
(11, 'everyday', 'necklaces'),
(12, 'layering', 'necklaces');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `Collections`
--
ALTER TABLE `Collections`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT cho bảng `Collections`
--
ALTER TABLE `Collections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `Medias`
--
ALTER TABLE `Medias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT cho bảng `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `Shipping`
--
ALTER TABLE `Shipping`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `Sub_categories`
--
ALTER TABLE `Sub_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

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
