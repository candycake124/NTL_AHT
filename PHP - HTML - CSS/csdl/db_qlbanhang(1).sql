-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 01, 2020 lúc 12:07 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadonban`
--

CREATE TABLE `cthoadonban` (
  `id_ct` int(255) NOT NULL,
  `id_hd` int(255) NOT NULL,
  `id_sp` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `giatien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadonban`
--

INSERT INTO `cthoadonban` (`id_ct`, `id_hd`, `id_sp`, `soluong`, `giatien`) VALUES
(47, 45, 6, 2, 600),
(48, 45, 9, 10, 200),
(49, 46, 13, 8, 180),
(50, 46, 6, 6, 600),
(51, 46, 20, 10, 700),
(52, 47, 5, 10, 400),
(53, 48, 7, 10, 1000),
(54, 48, 10, 12, 160),
(55, 49, 56, 4, 180),
(56, 49, 45, 10, 50),
(57, 50, 26, 18, 150),
(58, 50, 43, 5, 160),
(59, 50, 23, 6, 230),
(60, 50, 21, 8, 150),
(61, 50, 18, 3, 900),
(62, 51, 17, 3, 220),
(63, 51, 15, 23, 220),
(64, 51, 23, 3, 230),
(65, 51, 22, 5, 250),
(66, 51, 25, 6, 120),
(67, 52, 43, 5, 160),
(68, 52, 24, 7, 700),
(69, 52, 15, 8, 220),
(70, 52, 17, 3, 220),
(71, 53, 5, 10, 400),
(72, 53, 6, 10, 600),
(73, 53, 12, 10, 110),
(74, 53, 14, 10, 150),
(75, 53, 24, 10, 700),
(76, 53, 26, 2, 150),
(77, 53, 17, 10, 220),
(78, 53, 11, 10, 350),
(79, 54, 5, 81, 400);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadonnhap`
--

CREATE TABLE `cthoadonnhap` (
  `id_ct` int(255) NOT NULL,
  `id_hd` int(255) NOT NULL,
  `id_sp` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `giatien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadonnhap`
--

INSERT INTO `cthoadonnhap` (`id_ct`, `id_hd`, `id_sp`, `soluong`, `giatien`) VALUES
(33, 22, 5, 100, 300),
(34, 22, 6, 100, 180),
(35, 23, 7, 11, 800),
(36, 23, 8, 15, 180),
(37, 24, 9, 17, 120),
(38, 24, 10, 30, 100),
(39, 24, 11, 23, 250),
(40, 24, 12, 32, 80),
(41, 25, 12, 16, 80),
(42, 26, 12, 20, 80),
(43, 26, 13, 32, 100),
(44, 26, 14, 11, 80),
(45, 26, 15, 33, 150),
(46, 26, 16, 12, 120),
(47, 26, 17, 33, 150),
(48, 27, 16, 14, 120),
(49, 27, 17, 34, 150),
(50, 27, 18, 54, 800),
(51, 27, 19, 33, 800),
(52, 28, 18, 100, 800),
(53, 28, 19, 100, 800),
(54, 28, 20, 100, 600),
(55, 28, 21, 100, 100),
(56, 28, 22, 100, 180),
(57, 28, 23, 100, 170),
(58, 28, 24, 100, 600),
(59, 28, 25, 101, 80),
(60, 28, 26, 101, 100),
(61, 28, 43, 102, 100),
(62, 28, 44, 103, 50),
(63, 28, 45, 104, 20),
(64, 28, 56, 105, 120),
(65, 28, 57, 100, 2000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `id_hd` int(255) NOT NULL,
  `id_nv` int(255) NOT NULL,
  `id_k` int(255) NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`id_hd`, `id_nv`, `id_k`, `ngayban`, `tongtien`) VALUES
(45, 1, 1, '2020-07-31', 3200),
(46, 1, 5, '2020-07-31', 12040),
(47, 3, 1, '2020-07-31', 4000),
(48, 3, 1, '2020-07-31', 11920),
(49, 7, 13, '2020-07-31', 1220),
(50, 7, 1, '2020-07-31', 8780),
(51, 8, 15, '2020-07-31', 8380),
(52, 8, 14, '2020-07-31', 8120),
(53, 9, 6, '2020-07-31', 25600),
(54, 1, 1, '2020-08-01', 32400);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `id_hd` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `tongtien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`id_hd`, `id_nv`, `ngaynhap`, `tongtien`) VALUES
(22, 1, '2020-07-31', 48000),
(23, 1, '2020-07-31', 11500),
(24, 3, '2020-07-31', 13350),
(25, 3, '2020-07-31', 1280),
(26, 7, '2020-07-31', 17020),
(27, 8, '2020-07-31', 76380),
(28, 9, '2020-07-31', 573210);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_k` int(255) NOT NULL,
  `tenk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_k`, `tenk`, `gioitinh`, `sdt`, `ngaythem`) VALUES
(1, 'Khách Ngoài', 'Nam', '1111', '2020-06-22'),
(2, 'Lục Tần', 'Nam', '0493468', '2020-04-29'),
(4, 'Thời Sênh', 'Nam', '02358345858', '2020-06-19'),
(5, 'Sênh Ca', 'Nam', '035835945', '2020-06-18'),
(6, 'Phượng Từ', 'Nam', '0358348959', '2020-06-17'),
(7, 'Lam Tần 1', 'Nữ', '023489375909', '2020-02-10'),
(9, 'Tần ca', 'Nam', '0999', '2020-06-11'),
(13, 'Văn Huynh', 'Nam', '0213', '2020-06-05'),
(14, 'Nguyễn Lưu Ly', 'nữ', '023943058', '2020-07-01'),
(15, 'Từ Sênh', 'Nữ', '235345', '2020-07-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loaisp` int(255) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loaisp`, `tenloaisp`) VALUES
(1, 'Iphone'),
(2, 'SamSung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(7, 'Vsmart');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(255) NOT NULL,
  `tennv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaygianhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `tennv`, `gioitinh`, `ngaysinh`, `diachi`, `sdt`, `hinhanh`, `ngaygianhap`) VALUES
(1, 'Nguyễn Thị Ly', 'Nữ', '1999-11-24', 'Nhã Lộng-Phú Bình-Thái Nguyên', '2435', 'ly.jpg', '2020-06-10'),
(3, 'Bùi Thanh Loan', 'Nữ', '1999-11-11', 'Ninh Bình', '048269172', 'n1.jpg', '2020-02-11'),
(6, 'Bùi Hồng Vi', 'Nữ', '1999-03-10', 'Quảng Ninh', '023923440', 'n3.jpg', '2020-03-03'),
(7, 'Hi Vi Vi', 'Nữ', '1999-10-10', 'Hà Nội', '02923034853', 'n2.jpg', '2020-02-02'),
(8, 'Kính Lâm', 'Nam', '1999-10-10', 'Hòa Bình', '02383435302', 'n5.jpg', '2020-03-10'),
(9, 'Thời Sênh', 'Nam', '1999-10-10', 'Lạng Sơn', '0238234303', 'n4.png', '2020-02-02'),
(10, 'Phượng', 'Nữ', '1999-10-10', 'Cao Bằng', '0232340353', 'n7.jpg', '2019-10-10'),
(21, 'Bùi Thanh Văn', 'Nam', '2019-05-27', 'Thanh Hóa', '0337000', 'n3.jpg', '2018-05-28'),
(23, 'Bùi Văn', 'Nam', '2021-05-28', 'Thanh Hóa', '099921', 'n2.jpg', '2019-05-28'),
(25, 'Nguyễn Lưu Ly', 'nữ', '1999-11-24', 'Thái Nguyên', '0997986785', 'n7.jpg', '2020-07-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(255) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_loaisp` int(255) NOT NULL,
  `giaban` int(255) NOT NULL,
  `gianhap` int(11) NOT NULL,
  `soluong` int(255) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `id_loaisp`, `giaban`, `gianhap`, `soluong`, `hinhanh`, `mota`) VALUES
(5, 'Iphone 7 plus', 1, 400, 300, 0, 'ip7pl.jpg', 'Made in VietNam'),
(6, 'Iphone 8 plus', 1, 600, 180, 90, 'ip8pl.jpg', 'Made in China'),
(7, 'Iphone XSMax', 1, 1000, 800, 25, 'ipx.jpg', 'Iphone XSMax'),
(8, 'Oppo Reno 2F', 3, 250, 180, 15, 'oppo2f.jpg', 'Oppo reno 2f'),
(9, 'Oppo A3S', 3, 200, 120, 25, 'oppoa3s.jpg', 'Oppo A3S'),
(10, 'Oppo A7', 3, 160, 100, 128, 'oppoa7.jpg', 'Oppo A7'),
(11, 'Oppo F11 Pro', 3, 350, 250, 13, 'oppof11.jpg', 'Oppo F11 Pro'),
(12, 'Oppo F1S', 3, 110, 80, 77, 'oppof1s.jpg', 'Oppo F1S'),
(13, 'Oppo F5', 3, 180, 100, 32, 'oppof5.jpg', 'Oppo F5'),
(14, 'Redmi Note 5', 4, 150, 80, 20, 'redminote5.jpg', 'Redmi Note 5'),
(15, 'Redmi Note 6', 4, 220, 150, 11, 'redminote6.jpg', 'Redmi Note 6'),
(16, 'Redmi Note 7', 4, 200, 120, 36, 'redminote7.jpg', 'Redmi Note 7'),
(17, 'Redmi Note 8', 4, 220, 150, 81, 'redminote8.jpg', 'Redmi Note 8'),
(18, 'SamSung S10', 2, 900, 800, 161, 'ss10.jpg', 'SamSung S10'),
(19, 'SamSung S11', 2, 1000, 800, 153, 'ss11.jpg', 'SamSung S11'),
(20, 'SamSung S8', 2, 700, 600, 100, 'ss8.jpg', 'SamSung S8'),
(21, 'SamSung A20s', 2, 150, 100, 112, 'ssa20.jpg', 'SamSung A20'),
(22, 'SamSung A50', 2, 250, 180, 105, 'ssa50.jpg', 'SamSung A50'),
(23, 'SamSung Galaxy A7', 2, 230, 170, 101, 'ssa7.jpg', 'SamSung Galaxy A7'),
(24, 'SamSung Note 10', 2, 700, 600, 103, 'ssnote10.jpg', 'SamSung Note 10'),
(25, 'Xiaomi 8', 4, 120, 80, 115, 'xiaomi8.jpg', 'Xiaomi 8'),
(26, 'Xiaomi 8 lite', 4, 150, 100, 101, 'xiaomi8lite.jpg', 'Xiaomi 8 lite'),
(43, 'Vsmart live', 7, 160, 100, 102, 'live.jpg', 'Made in VietNam'),
(44, 'Vsmart Star', 7, 90, 50, 103, 'star.png', 'Made in VietNam'),
(45, 'Iphone 3 plus', 1, 50, 20, 104, 'ip6.jpg', 'ipx.jpg'),
(56, 'Vsmat active', 7, 180, 120, 151, 'live.jpg', 'Made in Pham Nhat Vuong'),
(57, 'ip', 1, 3000, 2000, 100, 'ip6pl.jpg', 'sbtb'),
(58, 'ss', 2, 2000, 3000, 0, 'ssa50.jpg', 'jhcjhcc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_nv` int(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `taikhoan`, `matkhau`, `id_nv`, `level`) VALUES
(1, 'admin', '123', 1, 1),
(3, 'nd3', 'nd3', 3, 2),
(7, 'nd7', 'nd7', 7, 2),
(8, 'nd8', 'nd8', 8, 2),
(11, 'nd10', 'nd10', 9, 2),
(12, 'nd4', 'nd4', 6, 2),
(13, 'nd05', 'nd05', 10, 2),
(14, 'van', '1', 21, 1),
(20, 'lyly', 'lyly', 25, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthoadonban`
--
ALTER TABLE `cthoadonban`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `cthoadonnhap`
--
ALTER TABLE `cthoadonnhap`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_k`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cthoadonban`
--
ALTER TABLE `cthoadonban`
  MODIFY `id_ct` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `cthoadonnhap`
--
ALTER TABLE `cthoadonnhap`
  MODIFY `id_ct` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `id_hd` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_k` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loaisp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
