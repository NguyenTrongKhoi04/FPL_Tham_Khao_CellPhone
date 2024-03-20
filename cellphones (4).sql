-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2024 lúc 11:31 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cellphones`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_product`, `id_user`, `comment`) VALUES
(2, 46, 31, 'long dz'),
(3, 22, 31, 'davfdgnfghfndfgff'),
(4, 22, 31, 'lòbdfbsbsb'),
(5, 22, 31, 'sdbnfgdsfegsdng'),
(6, 22, 31, 'long dz'),
(7, 22, 31, 'dffbdf'),
(8, 22, 31, 'Long thích hàng này'),
(9, 7, 31, 'lòngvsdvav'),
(10, 64, 31, 'Long thích cái này'),
(11, 41, 31, 'rbrbr'),
(12, 46, 4, 'sdvdsvsd'),
(13, 12, 31, 'long'),
(14, 2, 31, 'sản phẩm rất tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `hang` varchar(20) NOT NULL,
  `kichthuoc` varchar(50) NOT NULL,
  `trongluong` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `rom` varchar(20) NOT NULL,
  `hedieuhanh` varchar(20) NOT NULL,
  `loaiman` varchar(20) NOT NULL,
  `kichthuocman` float NOT NULL,
  `dophangiai` varchar(20) NOT NULL,
  `sosim` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detail`
--

INSERT INTO `detail` (`id`, `id_products`, `hang`, `kichthuoc`, `trongluong`, `ram`, `rom`, `hedieuhanh`, `loaiman`, `kichthuocman`, `dophangiai`, `sosim`) VALUES
(2, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(3, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(4, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(5, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(6, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(7, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(9, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(11, 78, 'Nokia', '12mm', '126', '2', '64', 'androi', 'amoled', 10.8, '12k', 1),
(12, 2, 'Nokia', '12mm', '126g', '4', '64', 'Androi', 'Amoled', 5.6, '1080X260', 2),
(13, 11, 'Nokia', '22mm', '126g', '4', '128', 'Androi', 'Amoled', 5.4, '1080X260', 2),
(14, 12, 'Nokia', '24mm', '120', '4', '32', 'Androi', 'Amoled', 4.5, '12k', 2),
(15, 76, 'Nokia', '12mm', '40', '4', '32', 'Androi', 'Amoled', 6.5, '12k', 2),
(16, 77, 'Nokia', '30mm', '40', '4', '32', 'Androi', 'Amoled', 4.3, '1080X260', 2),
(17, 79, 'Nokia', '24mm', '120', '12', '128', 'Androi', 'Amoled', 3.5, '1080X260', 2),
(18, 7, 'Sam sung', '22mm', '120', '12', '528', 'Androi', 'Amoled', 12.4, '12k', 1),
(19, 16, 'Sam sung', '22mm', '126', '8', '128', 'Androi', 'Amoled', 12.4, '12k', 1),
(20, 17, 'Sam sung', '158.0mm', '40', '8', '128', 'Androi', 'Amoled', 2.5, '8k', 1),
(21, 27, 'Apple', '12mm', '120', '4', '128', 'Ios', 'Amoled', 3.5, '8k', 1),
(22, 28, 'Apple', '12mm', '120', '12', '524', 'Ios', 'Amoled', 2.5, '8k', 2),
(23, 29, '0', '12mm', '120', '8', '128', 'Ios', 'Amoled', 3.5, '8k', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailold`
--

CREATE TABLE `detailold` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `hang` varchar(20) NOT NULL,
  `kichthuoc` varchar(50) NOT NULL,
  `trongluong` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `rom` varchar(20) NOT NULL,
  `hedieuhanh` varchar(20) NOT NULL,
  `loaiman` varchar(20) NOT NULL,
  `kichthuocman` float NOT NULL,
  `dophangiai` varchar(20) NOT NULL,
  `sosim` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detailold`
--

INSERT INTO `detailold` (`id`, `id_products`, `hang`, `kichthuoc`, `trongluong`, `ram`, `rom`, `hedieuhanh`, `loaiman`, `kichthuocman`, `dophangiai`, `sosim`) VALUES
(2, 1, 'Sam sung', '158.0mm - 77.8mm - 8.1mm', '226g', '4', '32', 'Androi', 'Super Retina XDR', 4.5, '2688 x 1242', 1),
(3, 2, 'Nokia', '11mm', '123', '2', '12', 'androi', 'amoled', 4.3, '12k', 1),
(4, 3, 'Nokia', '11mm', '123', '2', '32', 'androi', 'amoled', 5.7, '12k', 1),
(5, 4, 'Nokia', '11mm', '123', '2', '12', 'androi', 'amoled', 7.6, '2', 2),
(6, 5, 'Nokia', '11mm', '123', '2', '32', 'androi', 'amoled', 7.6, '12k', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangcu`
--

CREATE TABLE `hangcu` (
  `id` int(11) NOT NULL,
  `id_nsx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `slsp` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photo1` varchar(50) NOT NULL,
  `photo2` varchar(50) NOT NULL,
  `photo3` varchar(50) NOT NULL,
  `photo4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangcu`
--

INSERT INTO `hangcu` (`id`, `id_nsx`, `name`, `description`, `slsp`, `hot`, `price`, `discount`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 3, 'Sam sung galaxy J4 price', '<p><strong><em>H&agrave;ng cũ 99%</em></strong></p>\r\n', 2, 1, 2000000, 0, '1600331086_dienthoai5.jpg', '', '', '', ''),
(2, 2, 'Iphone 6 99%', '', 0, 1, 1200000, 23, '1600331101_dienthoai3.jpg', '', '', '', ''),
(3, 2, 'Iphone 7 99%', '', 0, 1, 2300000, 23, '1600331110_dienthoai2.jpg', '', '', '', ''),
(4, 3, 'Sam sung galaxy J4 price 99%', '', 0, 1, 1200000, 34, '1600331125_dienthoai3.jpg', '', '', '', ''),
(5, 3, 'Sam sung galaxy J4 price 88%', '', 0, 1, 1200000, 45, '1600331139_dienthoai4.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `id_nsx` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `slsp` int(11) NOT NULL DEFAULT 0,
  `hot` int(11) NOT NULL DEFAULT 0,
  `price` float NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(50) NOT NULL,
  `photo1` varchar(50) NOT NULL,
  `photo2` varchar(50) NOT NULL,
  `photo3` varchar(50) NOT NULL,
  `photo4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `id_nsx`, `parent_id`, `name`, `description`, `slsp`, `hot`, `price`, `discount`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 1, 0, 'Điện thoại', '', 0, 0, 0, 0, '1599645126_danhmuc.dienthoai4.jpg', '1599645126_chitiet-icon1.jpg', '', '', ''),
(2, 1, 1, 'Nokia 5.2', '<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q', 25, 1, 1000000, 10, '1604198663_dienthoai3.jpg', '1604198663_dienthoai4.jpg', '1604198663_dienthoai5.jpg', '1604198663_dienthoai2.jpg', '1604198663_dienthoai4.jpg'),
(3, 4, 0, 'Lap top', '', 0, 0, 0, 0, '1599645156_danhmuc.dienthoai3.jpg', '1599644742_chitiet-iphone3.jpg', '', '', ''),
(5, 3, 0, 'Điện thoại', '', 0, 0, 0, 0, '1599645516_chitiet-icon1.jpg', '', '', '', ''),
(6, 5, 0, 'Lap top', '', 0, 0, 0, 0, '1599645616_amthanh3.jpg', '', '', '', ''),
(7, 3, 5, 'Sam sung galaxy Note 10 Plus', '', 0, 1, 12000000, 10, '1600069617_danhmuc.dienthoai5.jpg', '1604198889_dienthoai1.jpg', '1604198889_dienthoai3.jpg', '1604198889_dienthoai5.jpg', '1604198889_dienthoai2.jpg'),
(8, 7, 0, 'Tai nghe', '', 0, 0, 0, 0, '1599729667_chitiet-icon1.jpg', '', '', '', ''),
(9, 2, 0, 'Mac book', '', 0, 0, 0, 0, '1600075319_laptop1.jpg', '', '', '', ''),
(10, 2, 0, 'Điện thoại', '', 0, 0, 0, 0, '', '', '', '', ''),
(11, 1, 1, 'Nokia 5.3', '<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q', 0, 1, 5000000, 2, '1604198707_dienthoai3.jpg', '1604198707_dienthoai5.jpg', '1604198707_dienthoai4.jpg', '1604198707_dienthoai2.jpg', '1604198707_dienthoai4.jpg'),
(12, 1, 1, 'Nokia 5.4', '<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q', 0, 1, 2000000, 47, '1604198740_dienthoai1.jpg', '1604198740_dienthoai2.jpg', '1604198740_dienthoai3.jpg', '1604198740_dienthoai4.jpg', '1604198740_dienthoai5.jpg'),
(13, 4, 3, 'Lap top LG 01', '', 0, 1, 0, 0, '1600074974_laptop5.jpg', '', '', '', ''),
(14, 4, 3, 'Lap top LG 02', '', 0, 1, 30000000, 45, '1600075007_laptop3.jpg', '', '', '', ''),
(15, 4, 3, 'Lap top LG 03', '', 0, 1, 1200000, 0, '1600075176_laptop1.jpg', '', '', '', ''),
(16, 3, 5, 'Sam sung galasy s10', '', 0, 1, 120000000, 50, '1600069632_dienthoai4.jpg', '1604198918_dienthoai4.jpg', '1604198918_dienthoai1.jpg', '1604198918_dienthoai4.jpg', '1604198918_dienthoai5.jpg'),
(17, 3, 5, 'Sam sung galaxy s20', '', 0, 1, 1200000, 2, '1600069677_dienthoai5.jpg', '1604198946_dienthoai1.jpg', '1604198946_dienthoai2.jpg', '1604198946_dienthoai4.jpg', '1604198946_dienthoai3.jpg'),
(18, 5, 6, 'Dell Vistro 01', '', 0, 1, 3000000, 3, '1600075237_laptop2.jpg', '', '', '', ''),
(19, 5, 6, 'Dell Vistro 02', '', 0, 1, 40000000, 30, '1600075267_laptop5.jpg', '', '', '', ''),
(20, 5, 6, 'Dell Vistro 03', '', 0, 1, 5000000000, 50, '1600075290_laptop2.jpg', '', '', '', ''),
(21, 7, 8, 'Tai nghe Anker 01', '', 150, 1, 12000000, 3, '1600152677_amthanh3.jpg', '', '', '', ''),
(22, 7, 8, 'Tai nghe Anker 02', '', 157, 1, 15000000, 50, '1600152728_amthanh5.jpg', '', '', '', ''),
(23, 7, 8, 'Tai nghe Anker 03', '', 60, 1, 150007000, 90, '1600152748_amthanh2.jpg', '', '', '', ''),
(24, 2, 9, 'Mac book 01', '', 0, 1, 1200000, 0, '1600075340_laptop1.jpg', '', '', '', ''),
(25, 2, 9, 'Mac book 02', '', 0, 1, 4000000, 4, '1600075363_laptop1.jpg', '', '', '', ''),
(26, 2, 9, 'Mac book 03', '', 0, 1, 9484580, 34, '1600075387_laptop1.jpg', '', '', '', ''),
(27, 2, 10, 'Iphone 5s', '', 0, 1, 120000000, 2, '1604198245_dienthoai1.jpg', '1604198979_dienthoai5.jpg', '1604198979_dienthoai3.jpg', '1604198979_dienthoai4.jpg', ''),
(28, 2, 10, 'Iphone SX Max 2020 VNA', '', 0, 1, 5000000, 3, '1604198309_dienthoai4.jpg', '', '', '', ''),
(29, 2, 10, 'IPhone XR 2020 VNA', '', 0, 1, 2000000, 2, '1604198416_dienthoai1.jpg', '', '', '', ''),
(31, 15, 0, 'Điện thoại', '', 0, 0, 0, 0, '', '', '', '', ''),
(32, 15, 31, 'Mi Note 10 - Lite', '', 1230, 1, 120000, 5, '1600071392_danhmuc.dienthoai2.jpg', '', '', '', ''),
(33, 15, 31, 'MI SE 2020', '', 0, 1, 0, 0, '1600071410_dienthoai4.jpg', '', '', '', ''),
(34, 15, 31, 'Red Mi note 9', '', 0, 1, 0, 0, '1600069749_dongho1.jpg', '', '', '', ''),
(35, 5, 0, 'Điện thoại', '', 0, 0, 0, 0, '', '', '', '', ''),
(36, 5, 35, 'Dell phone 2020 VNA', '', 0, 1, 200000000, 4, '1600071527_dienthoai3.jpg', '', '', '', ''),
(37, 15, 0, 'Lap top', '', 0, 0, 0, 0, '', '', '', '', ''),
(38, 15, 37, 'MiBook Air 2020', '', 1200000, 1, 1200000, 4, '1600074552_laptop4.jpg', '', '', '', ''),
(39, 15, 37, 'Redmi Book Pro 1', '', 0, 1, 1200000, 5, '1600074670_laptop5.jpg', '', '', '', ''),
(40, 15, 37, 'Note Book Pro 15', '', 0, 1, 1200000, 0, '1600074741_laptop2.jpg', '', '', '', ''),
(41, 15, 37, 'Suface Book', '', 0, 1, 1200000, 35, '1600074947_laptop3.jpg', '', '', '', ''),
(42, 15, 0, 'Tai nghe', '', 0, 0, 0, 0, '', '', '', '', ''),
(43, 15, 42, 'Basic Xiaomi', '', 120, 1, 1200000, 30, '1600152905_amthanh1.jpg', '', '', '', ''),
(44, 15, 31, 'Xaoimi True WireLess', '', 12000000, 1, 12000000, 50, '1600152966_amthanh5.jpg', '', '', '', ''),
(45, 6, 0, 'Tai nghe', '', 0, 0, 0, 0, '', '', '', '', ''),
(46, 6, 45, 'Tai nghe nhét tai', '', 0, 1, 12000000, 12, '1600153058_amthanh3.jpg', '', '', '', ''),
(47, 6, 45, 'Tai nghe IG935B', '', 0, 1, 120000, 2, '1600153121_amthanh4.jpg', '', '', '', ''),
(48, 15, 0, 'Đồng hồ', '', 0, 0, 0, 0, '', '', '', '', ''),
(49, 15, 48, 'Xioami Mi Band 3', '', 0, 1, 400000, 0, '1600237878_dongho1.jpg', '', '', '', ''),
(50, 15, 48, 'Xioami Mi Band 4', '', 0, 1, 0, 0, '1600237902_dongho4.jpg', '', '', '', ''),
(51, 15, 48, 'Xioami Mi Band 5', '', 0, 1, 1000000, 2, '1600237931_dongho2.jpg', '', '', '', ''),
(52, 15, 48, 'Xioami Mi Band 6', '', 0, 1, 1200000, 3, '1600237959_dongho3.jpg', '', '', '', ''),
(53, 3, 0, 'Đồng hồ', '', 0, 0, 0, 0, '', '', '', '', ''),
(54, 3, 53, 'Galaxy Fit One', '', 0, 1, 1200000, 3, '1600238038_dongho4.jpg', '', '', '', ''),
(55, 6, 53, 'Galaxy Fit True', '', 0, 1, 12000000, 34, '1600238082_dongho5.jpg', '', '', '', ''),
(56, 6, 53, 'Galaxy Fit Three', '', 0, 1, 2000000, 23, '1600238125_dongho1.jpg', '', '', '', ''),
(57, 2, 0, 'Đồng hồ', '', 0, 0, 0, 0, '', '', '', '', ''),
(58, 2, 57, 'Apple Watch Series 3', '', 0, 1, 12000000, 12, '1600238226_dongho2.jpg', '', '', '', ''),
(59, 2, 57, 'Apple Watch Series Mini 4', '', 0, 1, 1233340, 12, '1600238263_dongho5.jpg', '', '', '', ''),
(60, 2, 57, 'Apple Watch Series 5', '', 0, 1, 120000000, 50, '1600238295_dongho5.jpg', '', '', '', ''),
(61, 15, 48, 'Band 12', '', 0, 0, 325435000, 23, '1600244481_dongho2.jpg', '', '', '', ''),
(62, 15, 48, 'Đồng hồ A', '<p>Th&ocirc;ng tin m&aacute;y chủ</p>\r\n', 1231, 1, 13131400, 23, '1600310802_dongho5.jpg', '', '', '', ''),
(63, 2, 0, 'Phụ kiện', '', 0, 0, 0, 0, '', '', '', '', ''),
(64, 2, 63, 'Tai nghe bluetooth AirPods', '<p><strong>Tai nghe Apple AirPods 2 &ndash; Thiết kế tối giản, chất lượng &acirc;m thanh tuyệt vời</strong></p>\r\n\r\n<p><em>Vừa qua, Apple đ&atilde; ch&iacute;nh thức cho ra mắt chiếc tai nghe&nbsp;<strong>Airpods 2</strong>. Thế hệ thứ 2 lần n&agrave;y kh&ocirc;ng c&oacute; nhiều sự kh&aacute;c biệt so với thế hệ đầu về ngoại h&igrave;nh, trừ một số chi tiết về đ&egrave;n b&aacute;o hiệu cũng như ra mắt th&ecirc;m phi&ecirc;n bản sạc kh&ocirc;ng d&acirc;y v&agrave; sạc thường (sạc c&oacute; d&acirc;y). Ngo&agrave;i ra, bạn c&oacute; thể tham khảo th&ecirc;m&nbsp;<a href=\"https://cellphones.com.vn/apple-airpods-3.html\" target=\"_blank\">Apple Airpods 3</a>, sắp được ra mắt trong thời gian tới.</em></p>\r\n\r\n<p><em>Vừa qua, Apple đ&atilde; ch&iacute;nh thức cho ra mắt chiếc tai nghe&nbsp;<strong>Airpods 2</strong>. Thế hệ thứ 2 lần n&agrave;y kh&ocirc;ng c&oacute; nhiều sự kh&aacute;c biệt so với thế hệ đầu về ngoại h&igrave;nh, trừ một số chi tiết về đ&egrave;n b&aacute;o hiệu cũng như ra mắ', 0, 1, 1200000, 12, '1600328481_amthanh1.jpg', '', '', '', ''),
(65, 17, 0, 'Phụ kiện', '', 0, 0, 0, 0, '1602503846_dienthoai1.jpg', '', '', '', ''),
(66, 17, 65, 'Pin sạc dự phòng ENERGIZER', '<p><strong>Dung lượng khủng 10000 mAh c&ugrave;ng c&ocirc;ng nghệ Auto Voltage Sensing an to&agrave;n</strong></p>\r\n\r\n<p><em><strong>Pin dự ph&ograve;ng Energizer 10000 mAh UE10045</strong>&nbsp;sẽ l&agrave; sản phẩm m&agrave; người d&ugrave;ng c&acirc;n nhắc sở hữu khi nhu cầu về thời gian sử dụng điện thoại di động đang gia tăng nhằm đ&aacute;p ứng c&aacute;c mục đ&iacute;ch c&ocirc;ng việc hay giải tr&iacute;. B&ecirc;n cạnh dung lượng pin cao, sản phẩm c&ograve;n sở hữu khả năng sạc nhanh c&ocirc;ng suất đến 10W.</em></p>\r\n', 0, 1, 1200000, 0, '1600328799_phukien3.jpg', '', '', '', ''),
(67, 3, 0, 'Phụ kiện', '', 0, 0, 0, 0, '', '', '', '', ''),
(68, 3, 67, 'Tai nghe Sam sung Galaxy Buds', '<h2>iPhone XS Max Cũ gi&aacute; rẻ, hiệu năng cao</h2>\r\n\r\n<p>iPhone XS Max l&agrave; mẫu điện thoại tr&agrave;n viền, loại bỏ ho&agrave;n to&agrave;n n&uacute;t home c&ugrave;ng camera k&eacute;p của Apple đ&aacute;ng để trải nghiệm. Nếu bạn chưa đủ t&agrave;i ch&iacute;nh để sở hữu sản phẩm mới th&igrave; iPhone XS Max cũ sẽ l&agrave; lựa chọn ph&ugrave; hợp.</p>\r\n\r\n<p><a href=\"https://cellphones.com.vn/hang-cu/iphone/iphone-x.html\" target=\"_blank\"><strong>Điện thoại iPhone XS Max cũ</strong></a>&nbsp;sẽ c&oacute; hiệu năng kh&ocirc;ng thua k&eacute;m qu&aacute; nhiều so với bản mới, nhưng gi&aacute; th&agrave;nh sẽ rẻ hơn một v&agrave;i triệu, t&ugrave;y v&agrave;o t&igrave;nh trạng trầy xước. Khi mua iPhone XS Max cũ bạn vẫn c&oacute; thể trải nghiệm si&ecirc;u phẩm năm 2018 với hiệu năng mạnh nhờ chip Apple A12, 4GB Ram c&ugrave;ng dung lượng pin lớn.</p>\r\n', 0, 0, 1200000, 12, '1600328973_phukien2.jpg', '', '', '', ''),
(69, 17, 65, 'Tay chơi game cao cấp', '<h2>iPhone XS Max Cũ gi&aacute; rẻ, hiệu năng cao</h2>\r\n\r\n<p>iPhone XS Max l&agrave; mẫu điện thoại tr&agrave;n viền, loại bỏ ho&agrave;n to&agrave;n n&uacute;t home c&ugrave;ng camera k&eacute;p của Apple đ&aacute;ng để trải nghiệm. Nếu bạn chưa đủ t&agrave;i ch&iacute;nh để sở hữu sản phẩm mới th&igrave; iPhone XS Max cũ sẽ l&agrave; lựa chọn ph&ugrave; hợp.</p>\r\n\r\n<p><a href=\"https://cellphones.com.vn/hang-cu/iphone/iphone-x.html\" target=\"_blank\"><strong>Điện thoại iPhone XS Max cũ</strong></a>&nbsp;sẽ c&oacute; hiệu năng kh&ocirc;ng thua k&eacute;m qu&aacute; nhiều so với bản mới, nhưng gi&aacute; th&agrave;nh sẽ rẻ hơn một v&agrave;i triệu, t&ugrave;y v&agrave;o t&igrave;nh trạng trầy xước. Khi mua iPhone XS Max cũ bạn vẫn c&oacute; thể trải nghiệm si&ecirc;u phẩm năm 2018 với hiệu năng mạnh nhờ chip Apple A12, 4GB Ram c&ugrave;ng dung lượng pin lớn.</p>\r\n', 12, 1, 1200000, 12, '1600329120_phukien2.jpg', '', '', '', ''),
(70, 3, 67, 'Tai nghe Sam sung Galaxy Buds 2', '<h2>iPhone XS Max Cũ gi&aacute; rẻ, hiệu năng cao</h2>\r\n\r\n<p>iPhone XS Max l&agrave; mẫu điện thoại tr&agrave;n viền, loại bỏ ho&agrave;n to&agrave;n n&uacute;t home c&ugrave;ng camera k&eacute;p của Apple đ&aacute;ng để trải nghiệm. Nếu bạn chưa đủ t&agrave;i ch&iacute;nh để sở hữu sản phẩm mới th&igrave; iPhone XS Max cũ sẽ l&agrave; lựa chọn ph&ugrave; hợp.</p>\r\n\r\n<p><a href=\"https://cellphones.com.vn/hang-cu/iphone/iphone-x.html\" target=\"_blank\"><strong>Điện thoại iPhone XS Max cũ</strong></a>&nbsp;sẽ c&oacute; hiệu năng kh&ocirc;ng thua k&eacute;m qu&aacute; nhiều so với bản mới, nhưng gi&aacute; th&agrave;nh sẽ rẻ hơn một v&agrave;i triệu, t&ugrave;y v&agrave;o t&igrave;nh trạng trầy xước. Khi mua iPhone XS Max cũ bạn vẫn c&oacute; thể trải nghiệm si&ecirc;u phẩm năm 2018 với hiệu năng mạnh nhờ chip Apple A12, 4GB Ram c&ugrave;ng dung lượng pin lớn.</p>\r\n', 0, 1, 20000000, 12, '1600329202_amthanh2.jpg', '', '', '', ''),
(71, 3, 67, 'Pin sạc dự phòng Sam sung03', '<p><strong>Phụ kiện rẻ nhất H&agrave; Nội</strong></p>\r\n', 12, 1, 1200000, 34, '1600330259_phukien4.jpg', '', '', '', ''),
(72, 2, 63, 'Apple AirPods', '<h2><strong>Pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80 - Tốc độ thể hiện tr&ecirc;n vẻ ngo&agrave;i</strong></h2>\r\n\r\n<p>Golf Candy l&agrave; một trong những thương hiệu nổi tiếng tr&ecirc;n thế giới về sản xuất phụ kiện&nbsp;<a href=\"https://cellphones.com.vn/phu-kien/pin-du-phong.html\" target=\"_self\" title=\"Pin dự phòng chính hãng\">pin dự ph&ograve;ng</a>. Một trong những c&aacute;i t&ecirc;n phải n&oacute;i đến khi nghe đến thương hiệu n&agrave;y đ&oacute; ch&iacute;nh l&agrave;&nbsp;<strong>pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80</strong>. Với phong c&aacute;ch thiết kế sang trọng bắt mắt v&agrave; dung lượng pin cao l&ecirc;n đến 10.000mAh mang đến cho người d&ugrave;ng một trải nghiệm ho&agrave;n to&agrave;n mới về khả năng sạc pin tr&ecirc;n pin dự ph&ograve;ng. Để c&oacute; c&aacute;i nh&igrave;n chung hơn, chi tiết hơn về sản phẩm n&agrave;y, h&atilde;y c&ugrave;ng CellphoneS t&igrave;m hiểu xem G80 đang sở hữu g&igrave; nh&eacute;!</p>\r\n', 0, 1, 2399000, 34, '1600330358_amthanh1.jpg', '', '', '', ''),
(73, 17, 65, 'Tai chơi game', '<h2><strong>Pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80 - Tốc độ thể hiện tr&ecirc;n vẻ ngo&agrave;i</strong></h2>\r\n\r\n<p>Golf Candy l&agrave; một trong những thương hiệu nổi tiếng tr&ecirc;n thế giới về sản xuất phụ kiện&nbsp;<a href=\"https://cellphones.com.vn/phu-kien/pin-du-phong.html\" target=\"_self\" title=\"Pin dự phòng chính hãng\">pin dự ph&ograve;ng</a>. Một trong những c&aacute;i t&ecirc;n phải n&oacute;i đến khi nghe đến thương hiệu n&agrave;y đ&oacute; ch&iacute;nh l&agrave;&nbsp;<strong>pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80</strong>. Với phong c&aacute;ch thiết kế sang trọng bắt mắt v&agrave; dung lượng pin cao l&ecirc;n đến 10.000mAh mang đến cho người d&ugrave;ng một trải nghiệm ho&agrave;n to&agrave;n mới về khả năng sạc pin tr&ecirc;n pin dự ph&ograve;ng. Để c&oacute; c&aacute;i nh&igrave;n chung hơn, chi tiết hơn về sản phẩm n&agrave;y, h&atilde;y c&ugrave;ng CellphoneS t&igrave;m hiểu xem G80 đang sở hữu g&igrave; nh&eacute;!</p>\r\n', 0, 1, 12000000, 34, '1600330404_phukien2.jpg', '', '', '', ''),
(74, 17, 65, 'Pin sạc dự phòng Golf Candy', '<h2><strong>Pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80 - Tốc độ thể hiện tr&ecirc;n vẻ ngo&agrave;i</strong></h2>\r\n\r\n<p>Golf Candy l&agrave; một trong những thương hiệu nổi tiếng tr&ecirc;n thế giới về sản xuất phụ kiện&nbsp;<a href=\"https://cellphones.com.vn/phu-kien/pin-du-phong.html\" target=\"_self\" title=\"Pin dự phòng chính hãng\">pin dự ph&ograve;ng</a>. Một trong những c&aacute;i t&ecirc;n phải n&oacute;i đến khi nghe đến thương hiệu n&agrave;y đ&oacute; ch&iacute;nh l&agrave;&nbsp;<strong>pin sạc dự ph&ograve;ng Golf Candy 10.000mAh G80</strong>. Với phong c&aacute;ch thiết kế sang trọng bắt mắt v&agrave; dung lượng pin cao l&ecirc;n đến 10.000mAh mang đến cho người d&ugrave;ng một trải nghiệm ho&agrave;n to&agrave;n mới về khả năng sạc pin tr&ecirc;n pin dự ph&ograve;ng. Để c&oacute; c&aacute;i nh&igrave;n chung hơn, chi tiết hơn về sản phẩm n&agrave;y, h&atilde;y c&ugrave;ng CellphoneS t&igrave;m hiểu xem G80 đang sở hữu g&igrave; nh&eacute;!</p>\r\n', 0, 1, 12000000, 23, '1604131305_phukien4.jpg', '', '', '', ''),
(75, 3, 67, 'Tai nghe Sam sung mới nhất', '<h2>Đi&ecirc;̣n thoại Vsmart Live 4 - Cấu h&igrave;nh khủng, camera ấn tượng</h2>\r\n\r\n<p><em>Tin tức v&ecirc;̀ th&ecirc;́ h&ecirc;̣ ti&ecirc;́p theo của Vsmart Live khi&ecirc;́n cho các tín đ&ocirc;̀ c&ocirc;ng ngh&ecirc;̣ đứng ng&ocirc;̀i kh&ocirc;ng y&ecirc;n. Mới đ&acirc;y, những c&acirc;́u hình của&nbsp;</em><em><strong>Vsmart Live 4</strong>&nbsp;đã được l&ocirc;̣ di&ecirc;̣n, với màn hình &quot;đục l&ocirc;̃&quot; kích thước lớn, cụm camera AI 4 &ocirc;́ng kính và cảm bi&ecirc;́n v&acirc;n tay mặt lưng, chắc chắn sẽ là chi&ecirc;́c smartphone n&ocirc;̉i b&acirc;̣t nh&acirc;́t trong ph&acirc;n khúc trung c&acirc;́p.</em></p>\r\n\r\n<h3>Màn hình &quot;đục l&ocirc;̃&quot; Full HD+ kích thước lớn, nhi&ecirc;̀u lựa chọn màu sắc</h3>\r\n\r\n<p>Live 4 sẽ có thay đ&ocirc;̉i lớn trước ti&ecirc;n là v&ecirc;̀ màn hình. Thay vì thi&ecirc;́t k&ecirc;́ &quot;giọt nước&quot; hoặc &quot;v&ocirc; cực&quot; như trước, điện thoại Vsmart n&agrave;y hướng ', 0, 1, 1200000, 23, '1600332136_amthanh1.jpg', '', '', '', ''),
(76, 1, 1, 'Nokia 3', '<p>Sản phẩm tốt nhất hiện nay</p>\r\n\r\n<p><em>gi&aacute; cả v&ocirc; c&ugrave;ng hợp l&yacute;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh', 0, 1, 1200000, 23, '1600674112_dienthoai1.jpg', '1600674112_dienthoai2.jpg', '1600674112_dienthoai3.jpg', '1600674112_dienthoai4.jpg', '1600674112_dienthoai5.jpg'),
(77, 1, 1, 'Nokia 4', '', 0, 1, 1232320, 12, '1600671783_dienthoai1.jpg', '1604198810_dienthoai5.jpg', '1604198810_dienthoai4.jpg', '1604198810_dienthoai3.jpg', '1604198810_dienthoai2.jpg'),
(78, 1, 1, 'Nokia 5', '<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q', 0, 1, 45655700, 23, '1604198776_dienthoai3.jpg', '1604198776_dienthoai4.jpg', '1604198776_dienthoai2.jpg', '1604198776_dienthoai5.jpg', '1604198776_dienthoai2.jpg'),
(79, 1, 1, 'Điện thoại nokia', '<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>\r\n\r\n<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>\r\n\r\n<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q', 0, 1, 12000000, 3, '1604197972_dienthoai1.jpg', '1604198836_dienthoai5.jpg', '1604198836_dienthoai4.jpg', '1604198836_dienthoai2.jpg', '1604198836_dienthoai2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`id`, `name`, `address`, `contact`, `soluong`, `hot`) VALUES
(1, 'Nokia', '123 Hồ Bạch Đằng', '3456', 123, 0),
(2, 'Apple', '123 Hồ Bạch Đằng', '3456', 0, 1),
(3, 'Sam sung', '123 Hồ Bạch Đằng', '3456', 12345, 1),
(4, 'LG', '123 Hồ Bạch Đằng', '3456', 0, 1),
(5, 'Dell', '123 Hồ Bạch Đằng', '3456', 0, 0),
(6, 'Sam sung', '', '3456', 0, 0),
(7, 'Anker', '123 Hồ Bạch Đằng đông', '3456', 0, 0),
(15, 'Xioami', '123 Hồ Bạch Đằng đông', '', 1277, 1),
(16, 'Mi', '', '', 34, 0),
(17, 'BackBeri', 'LosAnggerles', '02131413211', 12345, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(129, 76, 20, 1, 2500000000),
(130, 76, 60, 1, 60000000),
(131, 77, 58, 1, 10560000),
(132, 77, 21, 1, 11640000),
(133, 78, 58, 1, 10560000),
(134, 78, 21, 1, 11640000),
(135, 78, 28, 1, 4850000),
(136, 84, 69, 1, 1056000),
(137, 84, 54, 1, 1164000),
(138, 84, 24, 1, 1200000),
(139, 85, 13, 1, 0),
(140, 85, 69, 1, 1056000),
(141, 86, 52, 1, 1164000),
(142, 86, 11, 2, 4900000),
(143, 87, 52, 1, 1164000),
(144, 87, 17, 2, 1176000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`, `status`) VALUES
(76, 31, '2020-12-03', 2560000000, 1),
(77, 31, '2020-12-03', 22200000, 0),
(78, 31, '2020-12-03', 27050000, 0),
(79, 31, '2020-11-03', 22200000, 0),
(80, 31, '2020-11-03', 27050000, 0),
(81, 31, '2020-10-03', 2560000000, 0),
(82, 31, '2020-10-03', 2560000000, 0),
(83, 31, '2020-11-03', 2560000000, 0),
(84, 31, '2021-01-25', 3420000, 0),
(85, 36, '2024-02-19', 1056000, 0),
(86, 36, '2024-02-20', 10964000, 0),
(87, 36, '2024-02-20', 3516000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `id_user`, `star`) VALUES
(30, 55, 31, 5),
(32, 62, 31, 4),
(33, 21, 30, 4),
(34, 21, 31, 3),
(36, 7, 31, 5),
(38, 79, 31, 4),
(39, 11, 31, 5),
(40, 59, 31, 3),
(41, 70, 31, 5),
(42, 17, 31, 2),
(43, 15, 31, 1),
(44, 14, 31, 5),
(45, 2, 4, 3),
(47, 11, 4, 4),
(51, 64, 4, 3),
(53, 70, 4, 1),
(54, 72, 4, 3),
(58, 12, 4, 4),
(59, 59, 4, 4),
(60, 60, 4, 1),
(61, 47, 4, 3),
(62, 25, 4, 3),
(64, 2, 31, 4),
(65, 47, 31, 2),
(66, 12, 31, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratingold`
--

CREATE TABLE `ratingold` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ratingold`
--

INSERT INTO `ratingold` (`id`, `product_id`, `id_user`, `star`) VALUES
(49, 1, 4, 5),
(50, 4, 4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `password`, `first_name`, `last_name`, `picture`, `country`, `city`, `position`, `created_at`, `updated_at`) VALUES
(1, 'long@gmail.com', '', 'd9b1d7db4cd6e70935368a1efb10e377', 'long', 'hoàng', '1599754140_amthanh5.jpg', 'Việt Nam', 'Hà Nội', 0, NULL, NULL),
(2, 'shika@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'long', 'hoàng', '', 'VN', 'HD', 1, NULL, NULL),
(4, 'nvb@gmail.com', '', '202cb962ac59075b964b07152d234b70', '1231412', '3424234', '', '', '', 0, NULL, NULL),
(8, 'test123@gmail.com', '', '1234', 'test123', 'ưvwevw', '', '', '', 0, NULL, NULL),
(11, 'abcxyz@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'John', '2020-02-13', '', 'VN', 'Trung quốc', 0, NULL, NULL),
(12, 'uuuu@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'John', '2020-02-13', '', 'VN', 'Hà Nội', 0, NULL, NULL),
(14, 'nva@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'ewf', 'ưefwe', '', 'ưefwe', 'ưefwe', 0, NULL, NULL),
(15, 'admin@admin.vn', '', 'd9b1d7db4cd6e70935368a1efb10e377', 'long44', '2020-02-13', '1599628289_5.jpg', '123', 'Trung quốc', 0, NULL, NULL),
(20, 'admin@admin.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '1599629295_5.jpg', '', '', 0, NULL, NULL),
(21, 'admin@sdvs', '', '07eb1b1c7944fd376c9ff7ab13b035b4', 'áv', 'avda', '', 'âcs', 'âcs', 0, NULL, NULL),
(22, 'shiszka@gmail.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(24, 'g@ss', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(25, 'nva@gmail.comb', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(26, 'long@gmail.comg', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(27, 'admin1@admin.comgg', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(28, 'long@gmail.comsvds', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 0, NULL, NULL),
(29, 'ndcsdva@gmail.com', '', '426270f6d5ca1938faa24ccb07b11327', 'abc', 'hoang', '', 'VN', '', 0, NULL, NULL),
(30, 'shika@gmail.commoc', '', '202cb962ac59075b964b07152d234b70', 'long', 'hoàng', '1599729247_chitiet-iphone2.jpg', '', '', 0, NULL, NULL),
(31, 'test@test.com', '19001009', '202cb962ac59075b964b07152d234b70', 'Hoàng', 'Long', '1605585280_a.jpg', 'Việt Nam', 'Số nhà 20,120 Nguyễn Văn Cừ, Tp Hà Nội, Việt Nam', 0, NULL, NULL),
(32, 'longcute@gmail.com', '0123456', '202cb962ac59075b964b07152d234b70', 'Hoàng', 'Long', '1604162800_amthanh4.jpg', 'Việt Nam', 'Hà Nội', 0, NULL, NULL),
(33, 'testlong@test.com', '03279275', '202cb962ac59075b964b07152d234b70', 'Hoàng Long', 'Long', '1604164283_amthanh2.jpg', 'Việt Nam', 'Hà Nội Việt Nam', 0, NULL, NULL),
(34, 'testtindungsv@gmail.com', '19001009', '202cb962ac59075b964b07152d234b70', 'Hoàng', 'Long', '', 'Việt Nam', 'Hà Nội', 2, NULL, NULL),
(35, 'testcellphone@gmail.com', '03413213251435', 'c4ca4238a0b923820dcc509a6f75849b', 'tesst', 'tesst', '', 'HN', 'HN', 0, NULL, NULL),
(36, 'khoi@gmail.com', '4654', 'c4ca4238a0b923820dcc509a6f75849b', 'k', '1', '', 'hn', 'hà nội', 0, NULL, NULL),
(37, 'admin@gmail.com', '03413213251435', 'c4ca4238a0b923820dcc509a6f75849b', 'tesst', 'tesst', '', 'HN', 'hà nội', 1, NULL, NULL),
(38, 'khoi1@gmail', '0876523858', 'c4ca4238a0b923820dcc509a6f75849b', 'nguyễn', 'khôi', '1708389776_LOOP _.jpg', 'Việt Nam', 'Hà Nội', 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_products` (`id_products`);

--
-- Chỉ mục cho bảng `detailold`
--
ALTER TABLE `detailold`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_products` (`id_products`);

--
-- Chỉ mục cho bảng `hangcu`
--
ALTER TABLE `hangcu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nsx` (`id_nsx`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ratingold`
--
ALTER TABLE `ratingold`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `detailold`
--
ALTER TABLE `detailold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hangcu`
--
ALTER TABLE `hangcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `ratingold`
--
ALTER TABLE `ratingold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `loaisp` (`id`);

--
-- Các ràng buộc cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD CONSTRAINT `loaisp_ibfk_1` FOREIGN KEY (`id_nsx`) REFERENCES `nhasanxuat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
