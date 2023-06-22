-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th6 21, 2023 lúc 01:34 PM
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
(1, '1.1.1.png', 1, '2023-06-21 13:13:02', '2023-06-21 13:13:02'),
(2, '1.1.2.png', 1, '2023-06-21 13:13:02', '2023-06-21 13:13:02'),
(3, '1.2.1.png', 2, '2023-06-21 13:13:51', '2023-06-21 13:13:51'),
(4, '1.2.2.png', 2, '2023-06-21 13:13:51', '2023-06-21 13:13:51');

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
(2, 'pcs', 'Band Ring', 'Platinum', '9225', 'Tiffany Embrace® band ring with a full circle of round pink sapphires and round brilliant diamonds in platinum, 3mm wide.\r\n\r\nRound pink sapphires, carat total weight 1.00\r\nround brilliant diamonds, carat total weight .80.\r\nProduct number:60003534', '2.png', 2, 'Diamonds', 'Summer', '2023-06-21 12:59:56', '2023-06-21 13:58:22');

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
(1, 48, 3, 1, '2023-06-21 13:11:11', '2023-06-21 13:11:11'),
(2, 50, 10, 1, '2023-06-21 13:11:11', '2023-06-21 13:11:11'),
(3, 48, 5, 2, '2023-06-21 13:11:50', '2023-06-21 13:11:50'),
(4, 50, 13, 2, '2023-06-21 13:11:50', '2023-06-21 13:11:50');

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

--
-- Đang đổ dữ liệu cho bảng `Reviews`
--

INSERT INTO `Reviews` (`ID`, `Product_ID`, `Customer_ID`, `Comments`, `Star_rate`, `Created_at`, `Updated_at`) VALUES
(1, 1, 1, 'Nice product', 5, '2023-06-21 13:31:55', '2023-06-21 13:31:33'),
(2, 2, 2, 'Absolutely amazing customer service', 5, '2023-06-21 13:33:34', '2023-06-21 13:31:59');

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
(6, 'stud', 'earrings');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Admins`
--
ALTER TABLE `Admins`
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
-- AUTO_INCREMENT cho bảng `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `Medias`
--
ALTER TABLE `Medias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `Products`
--
ALTER TABLE `Products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `Product_details`
--
ALTER TABLE `Product_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
