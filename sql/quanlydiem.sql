-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2022 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `day`
--

CREATE TABLE `day` (
  `MaDayHoc` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Magv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLopHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHocKy` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `MoTaPhanCong` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `day`
--

INSERT INTO `day` (`MaDayHoc`, `MaMonHoc`, `Magv`, `MaLopHoc`, `MaHocKy`, `MoTaPhanCong`) VALUES
('62970', 'TOAN', '1', '10A1', 'HK1', 'none'),
('62971', 'VAN', '2', '10A1', 'HK1', 'none'),
('62973', 'TA', '3', '10A1', 'HK1', 'none'),
('62974', 'GDCD', '5', '10A1', 'HK1', 'none'),
('62975', 'HH', '6', '10A1', 'HK1', 'none'),
('62976', 'IT', '7', '10A1', 'HK1', 'none'),
('62977', 'LS', '8', '10A1', 'HK1', 'none'),
('62978', 'VL', '9', '10A1', 'HK1', 'none'),
('62990', 'CN', '4', '10A1', 'HK1', 'none'),
('62996', 'TOAN', '1', '10A1', 'HK1', 'Phan cong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `MaDiem` int(6) NOT NULL,
  `MaHocKy` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLopHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiemMieng` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Diem15Phut1` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Diem15Phut2` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Diem1Tiet1` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Diem1Tiet2` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `DiemThi` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `DiemTB` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`MaDiem`, `MaHocKy`, `MaMonHoc`, `MaHS`, `MaLopHoc`, `DiemMieng`, `Diem15Phut1`, `Diem15Phut2`, `Diem1Tiet1`, `Diem1Tiet2`, `DiemThi`, `DiemTB`) VALUES
(300, 'HK1', 'TOAN', '6297027', '10A1', '6', '8', '9', '8', '7', '', 0),
(301, 'HK1', 'TOAN', '6297038', '10A1', '10', '10', '9', '9', '9', '', 0),
(307, 'HK1', 'TOAN', '2147483647', '10A1', '5', '6', '6', '7', '5', '', 0),
(312, 'HK1', 'VAN', '6297027', '10A1', '6', '7', '8', '9', '9', '7', 0),
(313, 'HK1', 'VAN', '6297038', '10A1', '8', '9', '9', '6', '9', '8', 0),
(319, 'HK1', 'VAN', '2147483647', '10A1', '2', '8', '9', '9', '5', '8', 0),
(324, 'HK1', 'TOAN', '6297027', '10A1', '100', '100', '100', '100', '100', '100', 0),
(325, 'HK1', 'TOAN', '6297038', '10A1', '', '', '', '', '', '', 0),
(331, 'HK1', 'TOAN', '2147483647', '10A1', '', '', '', '', '', '', 0),
(336, 'HK1', 'TOAN', '6297027', '10A1', '100', '', '', '', '', '', 0),
(337, 'HK1', 'TOAN', '6297038', '10A1', '', '', '', '', '', '', 0),
(343, 'HK1', 'TOAN', '2147483647', '10A1', '', '', '', '', '', '', 0),
(348, 'HK1', 'TOAN', '6297027', '10A1', '10', '', '', '', '', '', 0),
(349, 'HK1', 'TOAN', '6297038', '10A1', '', '', '', '', '', '', 0),
(355, 'HK1', 'TOAN', '2147483647', '10A1', '', '', '', '', '', '', 0),
(360, 'HK1', 'TOAN', '6297027', '10A1', '', '', '', '', '', '', 0),
(361, 'HK1', 'TOAN', '6297038', '10A1', '', '', '', '', '', '', 0),
(367, 'HK1', 'TOAN', '2147483647', '10A1', '', '', '', '', '', '', 0),
(368, 'HK1', 'TOAN', '629', '10A1', '', '', '', '', '', '', 0),
(369, 'HK1', 'TOAN', '17218', '10A1', '', '', '', '', '', '', 0),
(370, 'HK1', 'TOAN', '81510', '10A1', '', '', '', '', '', '', 0),
(375, 'HK1', 'TOAN', '4353242', '10A1', '', '', '', '', '', '', 0),
(376, 'HK1', 'TOAN', '6297027', '10A1', '', '', '', '', '', '', 0),
(377, 'HK1', 'TOAN', '6297038', '10A1', '', '', '', '', '', '', 0),
(383, 'HK1', 'TOAN', '2147483647', '10A1', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `Magv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Tengv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `passwordgv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`Magv`, `MaMonHoc`, `Tengv`, `DiaChi`, `SDT`, `passwordgv`) VALUES
('1', 'TOAN', 'Lô Phước Sơn', 'Xã Quang Trọng, Huyện Thạch An, Cao Bằng', '0123456789', 'e10adc3949ba59abbe56e057f20f883e'),
('2', 'VAN', 'Cát Hữu Toàn', 'Xã Quang Trọng, Huyện Thạch An, Cao Bằng', '0123456788', 'e10adc3949ba59abbe56e057f20f883e'),
('3', 'TA', 'Lã Tuấn Ðức', 'Xã Quang Trọng, Huyện Thạch An, Cao Bằng', '0123456787', 'e10adc3949ba59abbe56e057f20f883e'),
('4', 'CN', 'Tấn Tường Anh', 'Xã Quảng Xuân, Huyện Quảng Trạch, Quảng Bình', '0890836452', '123456'),
('5', 'GDCD', 'Ánh Mạnh Hùng', 'Xã Minh Đức, Huyện Mỹ Hào, Hưng Yên', '0565206987', '123456'),
('6', 'HH', 'Quản Xuân Kiên', 'Xã Đông Bình, Thị xã Bình Minh, Vĩnh Long', '0842630951', '123456'),
('7', 'IT', 'Đăng Xuân Cao', 'Xã Long Phú, Huyện Long Phú, Sóc Trăng', '0842841075', '123456'),
('8', 'LS', 'Thành Mai Khôi', 'Xã Đức Thạnh, Huyện Mộ Đức, Quảng Ngãi', '0369184672', '123456'),
('9', 'VL', 'Liêu Đan Linh', 'Xã Tây Thuận, Huyện Tây Sơn, Bình Định', '0897620541', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `tacvu` varchar(255) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `doituong` varchar(255) NOT NULL,
  `dulieucu` int(11) NOT NULL,
  `dulieumoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `tacvu`, `tacgia`, `thoigian`, `doituong`, `dulieucu`, `dulieumoi`) VALUES
(5, 'CAP NHAT DIEM', 'Lô Phước Sơn', '04-06-22 08:00:09', '', 0, 0),
(7, 'THEM DIEM', 'Lô Phước Sơn', '04-06-22 08:02:46', '', 0, 0),
(8, 'THEM DIEM', 'Lô Phước Sơn', '04-06-22 08:02:56', '', 0, 0),
(9, 'THEM LOP', 'ADMIN', '04-06-22 08:37:04', '', 0, 0),
(10, 'THEM LOP', 'ADMIN', '04-06-22 08:38:24', '', 0, 0),
(11, 'THEM LOP', 'ADMIN', '04-06-22 08:40:00', '10A5', 0, 0),
(12, 'XOA LOP', 'ADMIN', '04-06-22 08:41:23', '10A4', 0, 0),
(24, 'XOA MON', 'ADMIN', '05-06-22 06:39:13', 'AD', 0, 0),
(25, 'THEM MON HOC', 'ADMIN', '05-06-22 06:49:46', 'TEST', 0, 0),
(26, 'SUA MON HOC', 'ADMIN', '05-06-22 06:51:01', 'TEST MON ', 0, 0),
(27, 'SUA MON HOC', 'ADMIN', '05-06-22 06:51:43', 'TEST MON', 0, 0),
(28, 'SUA MON HOC', 'ADMIN', '05-06-22 06:52:41', 'TE', 0, 0),
(29, 'SUA MON HOC', 'ADMIN', '05-06-22 06:54:14', 'test mon', 0, 0),
(30, 'XOA MON', 'ADMIN', '05-06-22 06:54:19', 'TE', 0, 0),
(31, 'THEM MON HOC', 'ADMIN', '05-06-22 06:54:26', 'test mon hoc', 0, 0),
(32, 'THEM HOC SINH', 'ADMIN', '05-06-22 07:58:15', '84528', 0, 0),
(33, 'SUA HOC SINH', 'ADMIN', '05-06-22 08:06:24', '64902', 0, 0),
(34, 'SUA HOC SINH', 'ADMIN', '05-06-22 08:06:47', '64902', 0, 0),
(35, 'SUA HOC SINH', 'ADMIN', '05-06-22 08:08:16', '', 0, 0),
(36, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:09:48', '84528', 0, 0),
(37, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:09:58', '64902', 0, 0),
(38, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:10:04', '629', 0, 0),
(39, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:10:08', '629', 0, 0),
(40, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:10:16', '629', 0, 0),
(41, 'XOA HOC SINH', 'ADMIN', '05-06-22 08:10:22', '629', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `MaHocKy` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenHocKy` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `HeSoHK` int(1) NOT NULL,
  `NamHoc` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `TenHocKy`, `HeSoHK`, `NamHoc`) VALUES
('HK1', 'Học Kỳ 1', 1, '2021-2022'),
('HK2', 'Học Kỳ 2', 2, '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLopHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenHS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `noisinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dantoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hotencha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hotenme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `passwordhs` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `MaLopHoc`, `TenHS`, `GioiTinh`, `NgaySinh`, `noisinh`, `dantoc`, `hotencha`, `hotenme`, `passwordhs`) VALUES
('17218', '10A1', 'Mâu Minh Ân', 'Nam', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Nguyen Pham', 'binh', 'e10adc3949ba59abbe56e057f20f883e'),
('2147483647', '10A1', 'Khổng Quang Tuấn', 'Nam', '2000-01-02', 'Xã Song Hồ, Huyện Thuận Thành, Bắc Ninh', 'Kinh', 'Hoa Mạnh Hùng', 'Đôn Anh Ðào', 'e10adc3949ba59abbe56e057f20f883e'),
('4353242', '10A1', 'Mâu Minh Ân', 'Nam', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Liễu Khánh Bình', 'binh', 'e10adc3949ba59abbe56e057f20f883e'),
('629', '10A1', 'Mâu Minh Ân', 'Nam', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Nguyen Pham', 'binh', 'e10adc3949ba59abbe56e057f20f883e'),
('6297027', '10A1', 'Mâu Minh Ân', 'Nam', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Liễu Khánh Bình', 'Thôi Vũ Anh', 'e10adc3949ba59abbe56e057f20f883e'),
('629703', '10A2', 'Vương Long Quân', 'Nam', '2000-01-04', 'Xã Thượng Đình, Huyện Phú Bình, Thái Nguyên', 'Kinh', 'Liêu Ðông Sơn', 'Ân Ân Thiện', 'e10adc3949ba59abbe56e057f20f883e'),
('6297038', '10A1', 'Cát Lâm Nhi', 'Nữ', '2000-01-03', 'Xã Triệu Tài, Huyện Triệu Phong, Quảng Trị', 'Kinh', 'Vũ Công Bằng', 'Bình Hạnh Phương', 'e10adc3949ba59abbe56e057f20f883e'),
('629704', '11A1', 'Tô Lan Hương', 'Nữ', '1999-12-01', 'Xã Võ Lao, Huyện Thanh Ba, Phú Thọ', 'Kinh', 'Đức Ái Khanh', 'Lạc Duy Hạnh', 'e10adc3949ba59abbe56e057f20f883e'),
('62970499', '10A2', 'Quảng Khởi Phong', 'Nam', '2000-01-06', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Hạ Quốc Thiện', 'Quang Hải Thụy', 'e10adc3949ba59abbe56e057f20f883e'),
('629705', '11A2', 'Phong Hồng Nhật', 'Nữ', '1999-12-05', 'Xã Hưng Khánh Trung A, Huyện Mỏ Cày Bắc, Bến Tre', 'Kinh', 'Linh Hồng Sơn', 'Bì Diễm Trang', 'e10adc3949ba59abbe56e057f20f883e'),
('629705155', '11A1', 'Hàn Quỳnh Sa', 'Nữ', '1999-12-03', 'Xã Tân Hòa, Huyện Bình Gia, Lạng Sơn', 'Kinh', 'An Hòa Bình', 'Khu Thụ Nhân', 'e10adc3949ba59abbe56e057f20f883e'),
('6297056', '11A1', 'Phan Phú Bình', 'Nữ', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Mục Vĩnh Thọ', 'Kiều Minh Hải', 'e10adc3949ba59abbe56e057f20f883e'),
('62970598', '11A2', 'Tinh Huy Vũ', 'Nam', '1999-12-05', 'Xã Giang Ly, Huyện Khánh Vĩnh, Khánh Hòa', 'Kinh', 'Phong Hồng Nhật', 'Tiêu Thụy Miên', 'e10adc3949ba59abbe56e057f20f883e'),
('629706', '12A2', 'Hàn Minh Huấn', 'Nam', '1998-01-01', 'Xã Quang Trọng, Huyện Thạch An, Cao Bằng', 'Kinh', 'Giao Quốc Hạnh', 'Khà Nhật Tiến', 'e10adc3949ba59abbe56e057f20f883e'),
('6297069', '12A1', 'Đào Ðức Giang', 'Nam', '2000-01-01', 'Xã Quang Trọng, Huyện Thạch An, Cao Bằng', 'Kinh', 'Tống Ðăng Minh', 'Mạc Từ Ðông', 'e10adc3949ba59abbe56e057f20f883e'),
('81510', '10A1', 'Mâu Minh Ân', 'Nam', '2000-01-01', 'Xã Bàu Chinh, Huyện Châu Đức, Bà Rịa - Vũng Tàu', 'Kinh', 'Liễu Khánh Bình', 'binh', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLopHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenlophoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `KhoiHoc` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLopHoc`, `Tenlophoc`, `KhoiHoc`) VALUES
('10A1', '10A1', '10'),
('10A2', '10A2', '10'),
('10A3', '10A3', '10'),
('11A1', '11A1', '11'),
('11A2', '11A2', '11'),
('11A3', '11A3', '11'),
('12A1', '12A1', '12'),
('12A2', '12A2', '12'),
('12A3', '12A3', '12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenMonHoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SoTiet` int(20) NOT NULL,
  `HeSoMonHoc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`, `SoTiet`, `HeSoMonHoc`) VALUES
('CN', 'Công Nghệ', 50, 1),
('GDCD', 'Giáo Dục Công Dân', 50, 1),
('HH', 'Hóa Học', 70, 1),
('IT', 'Tin Học', 100, 1),
('LS', 'Lịch Sử', 100, 1),
('TA', 'Tiếng Anh', 105, 1),
('TE', 'test mon hoc', 0, 0),
('TOAN', 'Toán', 100, 1),
('VAN', 'Văn', 120, 1),
('VL', 'Vật lý', 100, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`) VALUES
(1, 'binh', '123456', 1),
(2, 'dat', '123456', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`MaDayHoc`),
  ADD KEY `fk_day_monhoc` (`MaMonHoc`),
  ADD KEY `fk_day_gv` (`Magv`),
  ADD KEY `fk_day_hocky` (`MaHocKy`),
  ADD KEY `fk_day_lophoc` (`MaLopHoc`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`MaDiem`),
  ADD KEY `fk_diem_mahk` (`MaHocKy`),
  ADD KEY `fk_diem_monhoc` (`MaMonHoc`),
  ADD KEY `MaLopHoc` (`MaLopHoc`),
  ADD KEY `fk_diem_hocsinh` (`MaHS`) USING BTREE;

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`Magv`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD KEY `fk_gv_mh` (`MaMonHoc`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHocKy`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHS`),
  ADD KEY `fk_hs_lh` (`MaLopHoc`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLopHoc`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `MaDiem` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `day`
--
ALTER TABLE `day`
  ADD CONSTRAINT `day_ibfk_1` FOREIGN KEY (`Magv`) REFERENCES `giaovien` (`Magv`),
  ADD CONSTRAINT `fk_day_hocky` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`),
  ADD CONSTRAINT `fk_day_lophoc` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`),
  ADD CONSTRAINT `fk_day_monhoc` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`),
  ADD CONSTRAINT `fk_diem_mahk` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`),
  ADD CONSTRAINT `fk_diem_monhoc` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `fk_gv_mh` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `fk_hs_lh` FOREIGN KEY (`MaLopHoc`) REFERENCES `lophoc` (`MaLopHoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
