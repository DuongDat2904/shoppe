-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2023 lúc 09:54 AM
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
-- Cơ sở dữ liệu: `shopee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address_ship`
--

CREATE TABLE `address_ship` (
  `username` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `macdinh` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `address_ship`
--

INSERT INTO `address_ship` (`username`, `address`, `sodienthoai`, `macdinh`) VALUES
('duongdat', 'C14 Bắc Hà, Tố Hữu , Nam Từ Liêm , Hà Nội', '0987566654', b'1'),
('duongdat1', 'C14 Bắc Hà, Tố Hữu , Nam Từ Liêm , Hà Nội', '0655997556', b'0'),
('duongdat', '110 Trần Duy Hưng , Trung Hòa , Cầu Giấy, Hà Nội', '0365698452', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_name`
--

CREATE TABLE `bank_name` (
  `viettat` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `tennganhang` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bank_name`
--

INSERT INTO `bank_name` (`viettat`, `tennganhang`) VALUES
('ABBank', 'NHTMCP An Binh'),
('ACB', 'ACBNH TMCP A Chau'),
('Agribank', 'Agribank - NH NN & PTNT Viet Nam'),
('Bac A bank', 'Bac A bank - NHTMCP Bac A'),
('BIDV', 'BIDV - NH Dau tu & Phat trien Viet Nam'),
('LienVietPostBank', 'Lien Viet Post Bank - NH TMCP Buu Dien Lien Viet'),
('MB', 'MB - NHTMCP Quan Doi'),
('NamABank', 'Nam A Bank - NHTMCP Nam A'),
('Sacombank', 'Sacombank - NHTMCP Sai gon Thuong Tin'),
('SaigonBank', 'SaigonBank - NHTMCP Sai Gon Cong Thuong'),
('Seabank', 'Seabank - NHTMCP Dong Nam A'),
('Techcombank', 'Techcombank - NHTMCP Ky thuong VN'),
('TPBank', 'Tien Phong Bank - NH TMCP Tien Phong'),
('VCB', 'VCB - NH TMCP Ngoai Thuong Viet Nam'),
('VDB', 'VDB - NH Phat trien Viet Nam'),
('VIB', 'VIB - NHTMCP Quoc Te'),
('VietABank', 'VietABank - NHTMCP Viet A'),
('VietBank', 'VietBank - NHTMCP Viet Nam Thuong Tin'),
('Vietinbank', 'Vietinbank - NH Cong Thuong Viet Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_visa`
--

CREATE TABLE `bank_visa` (
  `username` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `sotaikhoan` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenchukhoan` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `loaithe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `macdinh` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bank_visa`
--

INSERT INTO `bank_visa` (`username`, `sotaikhoan`, `tenchukhoan`, `loaithe`, `macdinh`) VALUES
('duongdat', '31699874569874', 'DUONG TIEN DAT', 'VISA', b'1'),
('duongdat', '16545649879854', 'DUONG TIEN DAT', 'VISA', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `addcart` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `ma_sanpham` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `phanloai` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `thanhtien` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`addcart`, `username`, `ma_sanpham`, `phanloai`, `soluong`, `thanhtien`) VALUES
('64376b9627493', 'duongdat', 'SP01', 'Trắng,M', '1', '111000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `MaDM` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenDanhMuc` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `AnhDanhMuc` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`MaDM`, `TenDanhMuc`, `AnhDanhMuc`, `Hang`) VALUES
('BHOL', 'bách hóa online', '9-9.png', 2),
('BL&TVN', 'balo & túi ví nam', '11.png', 1),
('CSNC', 'Giặt giũ & chăm sóc nhà cửa', '12-12.png', 2),
('CSTC', 'chăm sóc thú cưng', '13.png', 1),
('DC', 'đồ chơi', '12.png', 1),
('DC&TTDC', 'dụng cụ & thiết bị dụng cụ', '14.png', 1),
('DH', 'đồng hồ', '6.png', 1),
('DT&PK', 'Điện thoại & phụ kiện', '2.png', 1),
('GDN', 'giày dép nam', '7.png', 1),
('GDNU', 'giày dép nữ', '6-6.png', 2),
('M&B', 'Mẹ & bé', '2-2.png', 2),
('MA&MQP', 'Máy ảnh & máy quay phim', '5.png', 1),
('MT&LT', 'Máy tính & Laptop', '4.png', 1),
('NC&DS', 'Nhà cửa & đời sống', '3-3.png', 2),
('NSOL', 'Nhà sách online', '10-10.png', 2),
('OXD', 'ôtô & xe máy & xe đạp', '10.png', 1),
('PK&TSN', 'phụ kiện & trang sức nữ', '8-8.png', 2),
('SD', 'sắc đẹp', '4-4.png', 2),
('SK', 'sức khỏe', '5-5.png', 2),
('TBDT', 'Thiết bị điện tử', '3.png', 1),
('TBGD', 'thiết bị gia dụng', '8.png', 1),
('TT&DL', 'thể thao & du lịch', '9.png', 1),
('TTN', 'Thời trang nam', '1.png', 1),
('TTNU', 'Thời trang nữ', '1-1.png', 2),
('TTTE', 'Thời trang trẻ em', '11-11.png', 2),
('TVN', 'túi ví nữ', '7-7.png', 2),
('VC&DV', 'voucher & dịch vụ', '13-13.png', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `ma_sanpham` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `name_evaluate` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `sosao` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `timeEvaluate` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `phanloai` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `chatlieu` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `mausac` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `motakhimua` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `coment` text COLLATE utf8_vietnamese_ci NOT NULL,
  `anh1` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh2` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh3` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh4` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh5` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `function`
--

CREATE TABLE `function` (
  `MaCN` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenCN` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `AnhCN` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `function`
--

INSERT INTO `function` (`MaCN`, `TenCN`, `AnhCN`) VALUES
('NDT', 'Nạp điện thoại & Thẻ Game', '1.png'),
('SSL', 'Khung giờ săn sale', '2.png'),
('FRS', 'Gì cũng rẻ - Mua là FreeShip', '3.png'),
('MGG', 'Mã giảm giá', '4.png'),
('FRVC', 'Miễn phí vận chuyển', '5.png'),
('TR', 'Bắt Trend - Giá sốc', '6.png'),
('HX', 'Hoàn xu Xtra từ 100K', '7.png'),
('HH', 'Hàng hiệu giá tốt', '8.png'),
('KX', 'Chia kho xu 30 triệu', '9.png'),
('HQT', 'Hàng quốc tế', '10.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `id_oder` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `ma_sanpham` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `phanloai` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `thanhtien` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`id_oder`, `username`, `ma_sanpham`, `phanloai`, `soluong`, `thanhtien`, `trangthai`) VALUES
('64376cfd53ee2', 'duongdat', 'SP01', 'Trắng', '2', '254700', 'Đơn hàng đã được đặt'),
('6437756bb6376', 'duongdat', 'SP01', 'Trắng', '1', '143700', 'Đơn hàng đang giao đến bạn'),
('6437759e6e64a', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đơn hàng đang giao đến bạn'),
('643775a0692a3', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đơn hàng đang giao đến bạn'),
('643775a305c2c', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đơn hàng đang giao đến bạn'),
('643775a464bbd', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đơn hàng đang giao đến bạn'),
('643775a69ac32', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Chờ thanh toán'),
('643775a82dffc', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Chờ thanh toán'),
('643775a96535a', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đơn hàng đã đến kho phân loại 21-HNI Thanh Oai 2 SOC'),
('643775ab4a001', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Hoàn thành'),
('643775acc9cac', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Hoàn thành'),
('643775ae6baf5', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Đã hủy'),
('643775b69a67f', 'duongdat', 'SP01', 'Trắng', '3', '365700', 'Chờ đánh giá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ma_sanpham` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_sanpham` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ma_shop` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaDM` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh_sanpham` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `GiaBan` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sldaban` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ma_sanpham`, `ten_sanpham`, `ma_shop`, `MaDM`, `anh_sanpham`, `GiaBan`, `sldaban`) VALUES
('SP01', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP02', 'TTN', '7.jpg', '120000', '0'),
('SP02', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP02', 'TTNU', '2.png', '120000', '200'),
('SP03', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP03', 'TTN', '3.png', '24000', '1.2k'),
('SP04', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTNU', '4.png', '80000', '2.5k'),
('SP05', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'BHOL', '5.png', '150000', '2.3k'),
('SP06', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'SD', '6.png', '23000', '2k'),
('SP07', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'SK', '7.png', '250000', '2k'),
('SP08', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'SD', '8.png', '600000', '1.2k'),
('SP09', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'SK', '9.png', '120000', '5k'),
('SP10', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'BHOL', '10.png', '280000', '2k'),
('SP100', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '35.jpg', '100000', '3,1k'),
('SP101', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '36.jpg', '100000', '3,1k'),
('SP102', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '37.jpg', '100000', '3,1k'),
('SP103', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '39.jpg', '100000', '3,1k'),
('SP104', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '40.jpg', '100000', '3,1k'),
('SP105', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '41.jpg', '100000', '3,1k'),
('SP106', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '42.jpg', '100000', '3,1k'),
('SP107', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '43.jpg', '100000', '3,1k'),
('SP108', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '44.jpg', '100000', '3,1k'),
('SP109', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '45.jpg', '100000', '3,1k'),
('SP11', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'BHOL', '11.png', '62000', '2k'),
('SP110', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '46.jpg', '100000', '3,1k'),
('SP111', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '47.jpg', '100000', '3,1k'),
('SP112', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '48.jpg', '100000', '3,1k'),
('SP113', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP114', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP115', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP116', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP117', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP118', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP119', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP12', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTN', '12.png', '120000', '1.2k'),
('SP120', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP121', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP122', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP123', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP124', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP125', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP126', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP127', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP128', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP129', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP13', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTNU', '13.png', '60000', '1.2k'),
('SP130', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP131', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP132', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP133', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP134', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP135', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP136', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP137', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP138', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP139', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP14', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTN', '14.png', '20000', '1k'),
('SP140', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP141', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP142', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP143', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP144', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP145', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP146', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP147', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP148', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP149', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP15', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTNU', '15.png', '12000', '12k'),
('SP150', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP151', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP152', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP153', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP154', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP155', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP156', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP157', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP158', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP159', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP16', 'Nước Hoa Cho Nam Christian Dior Sauvage EDP, 100ml Đậm Tính Chất Hiện Đại Lịch Lãm Lưu Hương Trên 8h', 'SHOP01', 'TTN', '16.png', '12000', '6k'),
('SP160', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP161', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP162', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP163', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP164', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP165', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP166', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP167', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP168', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP169', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP17', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '1.jpg', '120000', '999'),
('SP170', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP171', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP172', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP173', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP174', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP175', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP176', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP177', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP178', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP179', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP18', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '2.jpg', '120000', '999'),
('SP180', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP181', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP182', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP183', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP184', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP185', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP186', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP187', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP188', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP189', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP19', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '3.jpg', '120000', '999'),
('SP190', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP191', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP192', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP193', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP194', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP195', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP196', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP197', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP198', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP199', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP20', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '4.jpg', '120000', '999'),
('SP200', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP201', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP202', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP203', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP204', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP205', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP206', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP207', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP208', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP209', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP21', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '5.jpg', '120000', '999'),
('SP210', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP211', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP212', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP213', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP214', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP215', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP216', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP217', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP218', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP219', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP22', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '6.jpg', '120000', '999'),
('SP220', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP221', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP222', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP223', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP224', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP225', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP226', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP227', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP228', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP229', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP23', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '7.jpg', '120000', '999'),
('SP230', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP231', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP232', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP233', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP234', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP235', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP236', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP237', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP238', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP239', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP24', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '8.jpg', '120000', '999'),
('SP240', 'Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK', 'SHOP01', 'TTN', '1.jpg', '120000', '996'),
('SP25', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '9.jpg', '120000', '999'),
('SP26', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '10.jpg', '120000', '999'),
('SP27', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '11.jpg', '120000', '999'),
('SP28', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '12.jpg', '120000', '999'),
('SP29', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '13.jpg', '120000', '999'),
('SP30', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '14.jpg', '120000', '999'),
('SP31', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '15.jpg', '120000', '999'),
('SP32', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '16.jpg', '120000', '999'),
('SP33', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '17.jpg', '120000', '999'),
('SP34', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '18.jpg', '120000', '999'),
('SP35', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '19.jpg', '120000', '999'),
('SP36', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '20.jpg', '120000', '999'),
('SP37', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '21.jpg', '120000', '999'),
('SP38', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '22.jpg', '120000', '999'),
('SP39', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '23.jpg', '120000', '999'),
('SP40', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '24.jpg', '120000', '999'),
('SP41', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '25.jpg', '120000', '999'),
('SP42', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '26.jpg', '120000', '999'),
('SP43', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '27.jpg', '120000', '999'),
('SP44', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '28.jpg', '120000', '999'),
('SP45', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '29.jpg', '120000', '999'),
('SP46', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '30.jpg', '120000', '999'),
('SP47', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '31.jpg', '120000', '999'),
('SP48', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '32.jpg', '120000', '999'),
('SP49', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '33.jpg', '120000', '999'),
('SP50', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '34.jpg', '120000', '999'),
('SP51', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '35.jpg', '120000', '999'),
('SP52', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '36.jpg', '120000', '999'),
('SP53', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '37.jpg', '120000', '999'),
('SP54', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '38.jpg', '120000', '999'),
('SP55', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '39.jpg', '120000', '999'),
('SP56', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '40.jpg', '120000', '999'),
('SP57', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '41.jpg', '120000', '999'),
('SP58', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '42.jpg', '120000', '999'),
('SP59', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '43.jpg', '120000', '999'),
('SP60', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '44.jpg', '120000', '999'),
('SP61', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '45.jpg', '120000', '999'),
('SP62', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '46.jpg', '120000', '999'),
('SP63', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '47.jpg', '120000', '999'),
('SP64', 'Nước hoa Unisex lelabo 13 Another 100ml thơm lâu hương cá tính thơm ngọt', 'SHOP01', 'TTN', '48.jpg', '120000', '999'),
('SP65', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '49.jpg', '100000', '3,1k'),
('SP66', '[HOT] Nước hoa nam Afnan 9PM EDP', 'SHOP01', 'TTNU', '50.jpg', '155000', '3,1k'),
('SP67', '[Combo Lịch Lãm] Nước Hoa Nam Nguyên Liệu Nhập Pháp Hương Thơm Lịch Lãm, Bí Ẩn, Cuốn Hút 10mlx3 - Dạng Xịt', 'SHOP01', 'TTNU', '51.jpg', '100000', '3,1k'),
('SP68', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '1.jpg', '100000', '3,1k'),
('SP69', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '2.jpg', '100000', '3,1k'),
('SP70', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '3.jpg', '100000', '3,1k'),
('SP71', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '4.jpg', '100000', '3,1k'),
('SP72', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '5.jpg', '100000', '3,1k'),
('SP73', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '6.jpg', '100000', '3,1k'),
('SP74', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '7.jpg', '100000', '3,1k'),
('SP75', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '8.jpg', '100000', '3,1k'),
('SP76', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '10.jpg', '100000', '3,1k'),
('SP77', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '11.jpg', '100000', '3,1k'),
('SP78', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '12.jpg', '100000', '3,1k'),
('SP79', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '13.jpg', '100000', '3,1k'),
('SP80', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '14.jpg', '100000', '3,1k'),
('SP81', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '15.jpg', '100000', '3,1k'),
('SP82', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '16.jpg', '100000', '3,1k'),
('SP83', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '17.jpg', '100000', '3,1k'),
('SP84', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '18.jpg', '100000', '3,1k'),
('SP85', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '19.jpg', '100000', '3,1k'),
('SP86', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '20.jpg', '100000', '3,1k'),
('SP87', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '21.jpg', '100000', '3,1k'),
('SP88', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '22.jpg', '100000', '3,1k'),
('SP89', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '23.jpg', '100000', '3,1k'),
('SP90', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '24.jpg', '100000', '3,1k'),
('SP91', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '25.jpg', '100000', '3,1k'),
('SP92', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '26.jpg', '100000', '3,1k'),
('SP93', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '27.jpg', '100000', '3,1k'),
('SP94', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '28.jpg', '100000', '3,1k'),
('SP95', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '30.jpg', '100000', '3,1k'),
('SP96', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '31.jpg', '100000', '3,1k'),
('SP97', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '32.jpg', '100000', '3,1k'),
('SP98', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '33.jpg', '100000', '3,1k'),
('SP99', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', 'SHOP01', 'TTNU', '34.jpg', '100000', '3,1k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_main`
--

CREATE TABLE `product_main` (
  `ma_sanpham` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_sale` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `sl_danhgia` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sl_daban` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh1` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh2` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh3` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh4` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh5` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh6` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `motasp` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product_main`
--

INSERT INTO `product_main` (`ma_sanpham`, `gia_sale`, `sl_danhgia`, `sl_daban`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`, `anh6`, `motasp`) VALUES
('SP01', '100000', '0', '0', '7.jpg', '8.jpg', '10.jpg', '9.jpg', '11.jpg', '12.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">Nước hoa nam Las & Co Sauvage 10ml lịch lãm, nam tính\r\n----------------------------------------------------\r\nLas & Co xin hân hạnh giới thiệu đến bạn sản phẩm Nước hoa nam Las & Co Sauvage 10ml lịch lãm, nam tính\r\n\r\nSản phẩm Nước hoa nam Las & Co Sauvage 10ml lịch lãm, nam tính thích hợp sử dụng hằng ngày, đi chơi, làm quà tặng với mùi hương thơm mát dịu nhẹ từ thiên nhiên. Mang đến cám hứng cho ngày dài bất tận.\r\n\r\nNhóm: Hương hoa cỏ \r\nGiới tính: Nam\r\nĐộ lưu hương trên da: 6 - 8h\r\nĐộ lưu hương trên quần áo: 8 - 12h\r\nĐộ toả hương: Toả hương trong vòng bán kính trên 1 mét\r\nThời điểm khuyên dùng: Ngày, Đêm, Thu, Đông\r\nPhong cách: Lịch Lãm, Nam Tính\r\n\r\nCÔNG DỤNG:\r\n- Lưu lại hương thơm trên cơ thể\r\n- Giúp bạn tự tin và thu hút hơn \r\nHương Đầu: Quế, Bạch Đậu Khấu, Nhục Đậu Khấu và Quả Bưởi;\r\nHương Giữa: Hoa Oải Hương;\r\nHương Cuối: Gỗ Đàn Hương, Cam Thảo, Hổ Phách, Cỏ Vetiver Haiti và Cây Hoắc Hương.\r\n\r\nHƯỚNG DẪN SỬ DỤNG:\r\nBước 1: Tắm rửa sạch sẽ cơ thể và lau khô trước khi sử dụng nước hoa, hoặc lau sạch những vị trí sẽ định xịt nước hoa\r\nBước 2: Nhắm vào vùng da bạn muốn xịt nước hoa như cổ, ngực, vai, sau tai…Với những nước hoa có nồng độ mùi đậm thì nên xịt vào cổ tay bởi sẽ giúp hương thơm theo mạch máu lan tỏa khắp cơ thể, còn những da khác thì nên xịt khách khoảng từ 10-15cm.\r\nBước 3: Sau khi xịt xong để nước hoa khô một cách tự nhiên, không xoa bởi có thể làm mất đi cấu trúc làm giảm hương thơm và độ lưu hương. Khi hương thơm phai dần thì nên xịt lại vào cổ tay.\r\n\r\nLƯU Ý: Bạn nên xịt nước hoa với khoảng cách từ 5 – 10cm, xịt mạnh tay và tạo ra những tia phun sương mạnh, điều đó sẽ giúp nước hoa có mùi hương hay nhất và thể hiện rõ các tầng hương.\r\n-------------------------------------------------------\r\nCAM KẾT CỦA SHOP:\r\n+ Sản phẩm 100% chính hãng\r\n+ Chất lượng sản phẩm tốt 100%.\r\n+ Sản phẩm được kiểm tra kĩ càng, nghiêm ngặt trước khi giao hàng.\r\n+ Sản phẩm luôn có sẵn trong kho hàng. \r\n+ Giao hàng ngay khi nhận được đơn hàng.\r\n+ Hoàn tiền ngay nếu sản phẩm không giống với mô tả.\r\n+ Đổi trả miễn phí nếu do lỗi của shop\r\n+ Quay video nhận hàng làm bằng chứng khi muốn đổi trả\r\n-------------------------------------------------------\r\n#nuochoa #nuochoanam #nuochoanu #nuochoachinhhang #nuochoamini #nuochoa10ml #nuochoachiet #dauthom #tinhdauthom #tinhdaunuochoa #nuochoanamthomlau #dauthomnam #nuochoabody #nuochoanammini #nuochoagiare #nuochoanamchinhhang #nuochoathomlau #nuochoachonam\r\n\r\nLƯU Ý : Thương hiệu Las & Co đã được đăng kí bảo hộ của pháp luật nghiêm cấm sao chép dưới mọi hình thức, ngoài ra sản phẩm bên shop không phải là nước hoa chiết từ các hãng khách hàng lưu ý kĩ trước khi đặt hàng để tránh sự nhầm lẫn.</p></div></div>'),
('SP02', '90000', '702', '9k', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '11.jpg', '12.jpg', '<div class=\"MCCLkq\">\r\n                            <div class=\"f7AU53\">\r\n                                <p class=\"irIKAp\">? Loại sản phẩm:Áo Sơ Mi Nam Sọc Chữ Dài Tay Mã KM01 Thời Trang Cao Cấp PONIVA Phong Cách Trẻ Trung, Nam Tính Hàng Chất Lượng XNK</p>\r\n                                <p class=\"irIKAp\">? Áo Sơ Mi Nam được thiết kế từ chất liệu cao cấp, mềm mịn, không chỉ mang lại cảm giác thoải mái khi mặc, mà còn tạo phong cách trẻ trung, lịch lãm cho phái mạnh.</p>\r\n                                <p class=\"irIKAp\">? Áo Sơ Mi Nam màu sắc trang nhã, lịch sự dễ dàng kết hợp với nhiều trang phục.</p>\r\n                                <p class=\"irIKAp\">? Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm.</p>\r\n                                <p class=\"irIKAp\">? Dễ giặt sạch, dễ ủi thẳng khi sử dụng, tiết kiệm nhiều thời gian.</p>\r\n                                <p class=\"irIKAp\">? Dễ dàng phối hợp cùng nhiều phụ kiện khác mang đến phong cách thời trang riêng cho phái mạnh giúp bạn thêm tự tin khi ra đường.</p>\r\n                                <p class=\"irIKAp\">? CHÍNH SÁCH</p>\r\n                                <p class=\"irIKAp\">? FREESHIP cho tất cả các đơn hàng từ 150K</p>\r\n                                <p class=\"irIKAp\">? Cam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh.</p>\r\n                                <p class=\"irIKAp\">? Hoàn tiền nếu sản phẩm không giống với mô tả.</p>\r\n                                <p class=\"irIKAp\">? Cam kết được đổi trả hàng</p>\r\n                                <p class=\"irIKAp\"> ? HƯỚNG DẪN CÁCH ĐẶT HÀNG</p>\r\n                                <p class=\"irIKAp\">⏩ Cách chọn size: Shop có bảng size mẫu. Bạn NÊN INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE</p>\r\n                                <p class=\"irIKAp\">⏩ Mã sản phẩm đã có trong ảnh</p>\r\n                                <p class=\"irIKAp\">⏩ Cách đặt hàng: Nếu bạn muốn mua 2 sản phẩm khác nhau hoặc 2 size khác nhau, để được freeship</p>\r\n                                <p class=\"irIKAp\">- Bạn chọn từng sản phẩm rồi thêm vào giỏ hàng</p>\r\n                                <p class=\"irIKAp\">- Khi giỏ hàng đã có đầy đủ các sản phẩm cần mua, bạn mới tiến hành ấn nút “ Thanh toán”</p>\r\n                                <p class=\"irIKAp\">⏩ Shop luôn sẵn sàng trả lời inbox để tư vấn</p>\r\n                                <p class=\"irIKAp\">?????????Dễ mua dễ mặc nhanh tay chọn ngay cho mình 1 size phù hợp</p>\r\n                                <p class=\"irIKAp\">?SIZE M: Cân nặng 48-55kg, Cao 1m50 - 1m62, \" Áo Dài giữa cổ sau đến lai bầu 68cm, Vai 38cm, Vòng ngực 88cm, Chiết eo 76cm, Dài tay 54cm\"</p>\r\n                                <p class=\"irIKAp\">?SIZE L: Cân nặng 55- 60kg, Cao 1m60 - 1m68, \" Áo Dài giữa cổ sau đến lai bầu 70cm, Vai 40cm, Vòng Ngực 92cm, Chiết eo 80cm, Dài tay 56cm\"</p>\r\n                                <p class=\"irIKAp\">?SIZE XL: cân nặng 60 - 65kg, Cao 1m65 - 1m</p>\r\n                                <p class=\"irIKAp\">?Tùy thể trạng và sở thích mặc ôm body hay rộng thoải mái chọn tăng giảm size</p>\r\n                                <p class=\"irIKAp\">?Giá đăng là giá 1 cái</p>\r\n                                <p class=\"irIKAp\">✔️Hàng thời trang may sẵn theo thông số chung sản phẩm phù hợp với đa số khách hàng nhưng cũng sẽ có vài trường hợp khách hàng \" không hợp \" _ Đẹp với nhiều người nhưng không thể hài lòng được tất cả, nếu quý khách hàng có gì chưa được hài lòng hãy nhắn cho shop để shop được phục vụ quý khách tốt hơn</p>\r\n                                <p class=\"irIKAp\">⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡Chúc quý khách mua sắm vui vẻ⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡</p>\r\n                                <p class=\"irIKAp\">?Theo dõi shop ngay hôm nay để cập nhật thường xuyên những mẫu thời trang cao cấp với giá tốt nhất khó có thể tìm mua sản phẩm tương tự ở nơi khác </p>\r\n                                <p class=\"irIKAp\">??? ?????????</p>\r\n                                <p class=\"irIKAp\">?Mọi thắc mắc và yêu cầu đổi trả mong quý khách hàng liên hệ qua sdt: 0866497968</p>\r\n                                <p class=\"irIKAp\">?BÊN SHOP CÒN RẤT NHIỀU MẪU ĐẸP GIÁ RẺ QUÝ KHÁCH VÀO GIAN HÀNG ĐỂ XEM NHIỀU HƠN.</p>\r\n                                <p class=\"irIKAp\">??? ??? ??? ??? ????????????????????????</p>\r\n                                <p class=\"irIKAp\">#sominam# #aosominam# #sominam# #sominamgiare# #sominamhanquoc# #aosomi# #somi# #aosomicaocap##aosomidep #aosominamdaitay #aosomitrang #aosomidenim #aosomiden #somicotau #aosominamcotau #aosominamcotaudaitay#poniva#aosominam#aosomithoitrang #aosomicongso #aosomidep #aosomidaitay #aosomicaro #aosomikesoc #aosomihoatiet#aonam #ao #aosomi #aosơminam #aosominamthoitrang #aosomi</p>\r\n                            </div>\r\n                        </div>'),
('SP03', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP04', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP05', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP06', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP07', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP08', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP09', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>'),
('SP10', '90000', '950', '1.5k', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '<div class=\"MCCLkq\"><div class=\"f7AU53\"><p class=\"irIKAp\">? MÔ TẢ SẢN PHẨM \r\n- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố\r\n\r\n? HƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. \r\n\r\n️? Giao hàng đúng size, lỗi 1 đổi 1 \r\n️? Giao COD toàn quốc \r\n️? Hỗ trợ đổi size và đổi màu trong vòng 7 ngày kể từ khi nhận hàng, sản phẩm đổi phải còn nguyên tem mac và chưa qua sử dụng.\r\n⚠️ LƯU Ý: Khi mở sản phẩm, khách yêu vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Áo thun VENDER giao bị lỗi.\r\n\r\n#ao #thun #phong #cotton #unisex #nam #nu #from #rong #tay #ngan \r\n#aothun #aophong #fromrong #tayngan #aothuntaylo #aothunnamnu #aothununisex #aothunoversize #aothunformrong #aothunnuformrong #aotaylo #aothundep #vender #Streetwear</p></div></div>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_sale`
--

CREATE TABLE `product_sale` (
  `ma_sanpham` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gia_sale` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phantram_sale` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sldaban` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product_sale`
--

INSERT INTO `product_sale` (`ma_sanpham`, `gia_sale`, `phantram_sale`, `sldaban`) VALUES
('SP02', '60000', '50', 40),
('SP03', '2000', '35', 2),
('SP04', '60000', '55', 5),
('SP05', '90000', '45', 8),
('SP06', '75000', '20', 10),
('SP07', '98000', '12', 12),
('SP08', '120000', '32', 12),
('SP09', '20000', '22', 7),
('SP10', '27000', '14', 4),
('SP11', '95000', '80', 8),
('SP12', '99000', '70', 8),
('SP13', '12000', '45', 13),
('SP14', '60000', '50', 18),
('SP15', '68000', '51', 7),
('SP16', '97000', '45', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_show`
--

CREATE TABLE `product_show` (
  `ma_sanpham` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `ten_sanpham` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_sanpham` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_ban` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `sl_ban` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product_show`
--

INSERT INTO `product_show` (`ma_sanpham`, `ten_sanpham`, `anh_sanpham`, `gia_ban`, `sl_ban`) VALUES
('SP01', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '1.jpg', '120000', '3.6k'),
('SP02', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '2.jpg', '120000', '3.6k'),
('SP03', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '3.jpg', '120000', '3.6k'),
('SP04', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '4.jpg', '120000', '3.6k'),
('SP05', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '5.jpg', '120000', '3.6k'),
('SP06', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '6.jpg', '120000', '3.6k'),
('SP07', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '7.jpg', '120000', '3.6k'),
('SP08', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '8.jpg', '120000', '3.6k'),
('SP09', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '9.jpg', '120000', '3.6k'),
('SP10', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '10.jpg', '120000', '3.6k'),
('SP11', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '11.jpg', '120000', '3.6k'),
('SP12', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '12.jpg', '120000', '3.6k'),
('SP13', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '13.jpg', '120000', '3.6k'),
('SP14', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '14.jpg', '120000', '3.6k'),
('SP15', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '15.jpg', '120000', '3.6k'),
('SP16', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '16.jpg', '120000', '3.6k'),
('SP17', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '17.jpg', '120000', '3.6k'),
('SP18', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '18.jpg', '120000', '3.6k'),
('SP19', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '19.jpg', '120000', '3.6k'),
('SP20', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '20.jpg', '120000', '3.6k'),
('SP21', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '21.jpg', '120000', '3.6k'),
('SP22', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '22.jpg', '120000', '3.6k'),
('SP23', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '23.jpg', '120000', '3.6k'),
('SP24', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '24.jpg', '120000', '3.6k'),
('SP25', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '25.jpg', '120000', '3.6k'),
('SP26', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '26.jpg', '120000', '3.6k'),
('SP27', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '27.jpg', '120000', '3.6k'),
('SP28', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '28.jpg', '120000', '3.6k'),
('SP29', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '29.jpg', '120000', '3.6k'),
('SP30', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '30.jpg', '120000', '3.6k'),
('SP31', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '31.jpg', '120000', '3.6k'),
('SP32', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '32.jpg', '120000', '3.6k'),
('SP33', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '33.jpg', '120000', '3.6k'),
('SP34', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '34.jpg', '120000', '3.6k'),
('SP35', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '35.jpg', '120000', '3.6k'),
('SP36', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '36.jpg', '120000', '3.6k'),
('SP37', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '37.jpg', '120000', '3.6k'),
('SP38', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '38.jpg', '120000', '3.6k'),
('SP39', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '39.jpg', '120000', '3.6k'),
('SP40', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '40.jpg', '120000', '3.6k'),
('SP41', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '41.jpg', '120000', '3.6k'),
('SP42', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '42.jpg', '120000', '3.6k'),
('SP44', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '44.jpg', '120000', '3.6k'),
('SP45', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '45.jpg', '120000', '3.6k'),
('SP46', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '46.jpg', '120000', '3.6k'),
('SP47', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '47.jpg', '120000', '3.6k'),
('SP48', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '48.jpg', '120000', '3.6k'),
('SP49', 'Áo khoác Nỉ THỎ xanh from rộng Unisex, Áo khoác nỉ mùa đông Tay bồng chất nỉ dày dặn', '1.jpg', '200000', '15k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `search_top`
--

CREATE TABLE `search_top` (
  `ten_search` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh_search` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sldaban` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `search_top`
--

INSERT INTO `search_top` (`ten_search`, `anh_search`, `sldaban`) VALUES
('Áo Thun Local Brand', '1.jpg', '85K+'),
('Đồ Chơi Lego', '2.jpg', '82K+'),
('Túi Xách Nữ Đeo Chéo', '3.jpg', '12K+'),
('Túi Xách Nữ', '4.jpg', '22K+'),
('Quần Lót Nam Co Dãn', '5.jpg', '31K+'),
('Quần Jean Nam Rách', '6.jpg', '85K+'),
('Thắt Lưng Nam', '7.jpg', '102K+'),
('Áo Thun Polo Nam Ngắn', '8.jpg', '84K+'),
('Son Kem Lì', '9.jpg', '85K+'),
('Áo Sơ Mi Nam Ngắn Tay', '10.jpg', '80K+'),
('Quần Ống Loe', '11.jpg', '83K+'),
('Quần Ống Loe', '12.jpg', '82K'),
('Quần Âu Nam', '13.jpg', '90K+'),
('Quần Legging Cạp Cao', '14.jpg', '70K+'),
('Dép Lông', '15.jpg', '88K+'),
('Quần Tất Siêu Dai', '16.jpg', '99K+'),
('Combo 100 Bao Lì Xì', '17.jpg', '88K+'),
('Nước Tẩy Trang L`Oread', '18.jpg', '68K+'),
('Bảng Mắt Focallure', '19.jpg', '76K+'),
('Quần Jean Nam Rách', '20.jpg', '35K+');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop`
--

CREATE TABLE `shop` (
  `ma_shop` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `shop_name` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `loai_shop` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `anh_shop` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `shop`
--

INSERT INTO `shop` (`ma_shop`, `shop_name`, `loai_shop`, `anh_shop`) VALUES
('SHOP01', 'Sulwhasoo Official Store', 'shop-mall', '1.png'),
('SHOP02', 'Sabina Việt Nam', 'shop-mall', '1-1.png'),
('SHOP03', 'Sulwhasoo Official Store', 'shop-mall', '2.png'),
('SHOP04', 'LG Household & Health Care', 'shop-mall', '2-2.png'),
('SHOP05', 'Zero Sports', 'shop-mall', '3.png'),
('SHOP06', 'Merries Official Store', 'shop-mall', '3-3.png'),
('SHOP07', 'Youwatch', 'shop-mall', '4.png'),
('SHOP08', 'Long Hưng Mobile Mall', 'shop-mall', '4-4.png'),
('SHOP09', 'ShopDunk Official Store', 'shop-mall', '5.png'),
('SHOP10', 'HAPPY PHONE MALL', 'shop-mall', '5-5.png'),
('SHOP11', '82X Official Store', 'shop-mall', '6.png'),
('SHOP12', 'SEXYLOOK Chính Hãng', 'shop-mall', '6-6.png'),
('SHOP13', 'Sulwhasoo Official Store', 'shop-mall', '7.png'),
('SHOP14', 'Youwatch', 'shop-yeuthich', '4.png'),
('SHOP15', 'Long Hưng Mobile Mall', 'shop-yeuthich', '4-4.png'),
('SHOP16', 'ShopDunk Official Store', 'shop-yeuthich', '5.png'),
('SHOP17', 'HAPPY PHONE MALL', '', '5-5.png'),
('SHOP18', '82X Official Store', '', '6.png'),
('SHOP19', 'SEXYLOOK Chính Hãng', '', '6-6.png'),
('SHOP20', 'Sulwhasoo Official Store', '', '7.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliner_show`
--

CREATE TABLE `sliner_show` (
  `anh_sline` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vitri` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sliner_show`
--

INSERT INTO `sliner_show` (`anh_sline`, `vitri`) VALUES
('sline1.jpg', '1'),
('sline2.jpg', '1'),
('sline3.jpg', '1'),
('sline4.jpg', '1'),
('sline5.jpg', '1'),
('sline6.jpg', '1'),
('sline7.jpg', '1'),
('1.jpg', '2'),
('2.jpg', '2'),
('3.jpg', '2'),
('4.jpg', '2'),
('5.jpg', '2'),
('6.jpg', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_rank` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `user_rank`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'AD'),
('duongdat', 'e10adc3949ba59abbe56e057f20f883e', 'KH'),
('duongdat1', 'e10adc3949ba59abbe56e057f20f883e', 'KH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_bank_often`
--

CREATE TABLE `user_bank_often` (
  `username` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `viettat` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `sotaikhoan` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `hotenTK` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `macdinh` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user_bank_often`
--

INSERT INTO `user_bank_often` (`username`, `viettat`, `sotaikhoan`, `hotenTK`, `macdinh`) VALUES
('duongdat', 'VCB', '12345678912345', 'DUONG TIEN DAT', b'1'),
('duongdat', 'BIDV', '03664544564564', 'DUONG TIEN DAT', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_main`
--

CREATE TABLE `user_main` (
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoDT` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Anh_user` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user_main`
--

INSERT INTO `user_main` (`username`, `HoTen`, `Email`, `SoDT`, `NgaySinh`, `Anh_user`) VALUES
('admin', '', '', '', '', 'hacker.jpg'),
('duongdat', 'Dương Đạt', 'datduongnv@gmail.com', '0987654321', '13/06/2000', '1.png'),
('duongdat1', 'DUONG TIEN DAT', 'datduongnvty@gmail.com', '0987654321', '12-12/1999', 'Screenshot 2023-03-31 103504.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address_ship`
--
ALTER TABLE `address_ship`
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `bank_name`
--
ALTER TABLE `bank_name`
  ADD PRIMARY KEY (`viettat`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ma_sanpham`),
  ADD KEY `fk_product_shop` (`ma_shop`),
  ADD KEY `FK_category_product` (`MaDM`);

--
-- Chỉ mục cho bảng `product_sale`
--
ALTER TABLE `product_sale`
  ADD KEY `fk_product_sale` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ma_shop`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `password_2` (`password`);

--
-- Chỉ mục cho bảng `user_main`
--
ALTER TABLE `user_main`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_category_product` FOREIGN KEY (`MaDM`) REFERENCES `category` (`MaDM`),
  ADD CONSTRAINT `fk_product_shop` FOREIGN KEY (`ma_shop`) REFERENCES `shop` (`ma_shop`);

--
-- Các ràng buộc cho bảng `product_sale`
--
ALTER TABLE `product_sale`
  ADD CONSTRAINT `fk_product_sale` FOREIGN KEY (`ma_sanpham`) REFERENCES `product` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `user_main`
--
ALTER TABLE `user_main`
  ADD CONSTRAINT `fk_user_main` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
