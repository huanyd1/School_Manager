-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2020 lúc 03:10 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlytruonghoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `idBomon` int(11) NOT NULL,
  `tenBomon` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `idKhoa` int(11) NOT NULL,
  `imgBomon` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`idBomon`, `tenBomon`, `idKhoa`, `imgBomon`) VALUES
(1, 'Bộ môn Tin học Trắc địa', 1, 'logo-dhmo.jpg'),
(2, 'Bộ môn Tin học địa chất', 1, 'logo-dhmo.jpg'),
(3, 'Bộ môn Tin học Mỏ', 1, 'logo-dhmo.jpg'),
(4, 'Bộ môn Tin học Kinh tế', 1, 'logo-dhmo.jpg'),
(5, 'Bộ môn Công nghệ phần mềm', 1, 'logo-dhmo.jpg'),
(6, 'Bộ môn Mạng máy tính', 1, 'logo-dhmo.jpg'),
(7, 'Bộ môn Tin học cơ bản', 1, 'logo-dhmo.jpg'),
(8, 'Bộ môn Khoa học Máy tính', 1, 'logo-dhmo.jpg'),
(9, 'Bộ môn Điện khí hóa', 2, 'logo-dhmo.jpg'),
(10, 'Bộ môn Kỹ thuật cơ khí', 2, 'logo-dhmo.jpg'),
(11, 'Bộ môn Kỹ thuật Điện - Điện tử', 2, 'logo-dhmo.jpg'),
(12, 'Bộ môn Máy và thiết bị mỏ', 2, 'logo-dhmo.jpg'),
(13, 'Bộ môn Tự động hóa xí nghiệp m', 2, 'logo-dhmo.jpg'),
(14, 'Bộ môn Địa chất dầu khí', 3, 'logo-dhmo.jpg'),
(15, 'Bộ môn Địa vật lý', 3, 'logo-dhmo.jpg'),
(16, 'Bộ môn Khoan - Khai thác', 3, 'logo-dhmo.jpg'),
(17, 'Bộ môn Thiết bị Dầu khí và Côn', 3, 'logo-dhmo.jpg'),
(18, 'Bộ môn Lọc - Hóa dầu', 3, 'logo-dhmo.jpg'),
(19, 'Bộ môn Địa chất', 4, 'logo-dhmo.jpg'),
(20, 'Bộ môn Địa chất công trình', 4, 'logo-dhmo.jpg'),
(21, 'Bộ môn Địa chất thủy văn', 4, 'logo-dhmo.jpg'),
(22, 'Bộ môn Địa chất biển', 4, 'logo-dhmo.jpg'),
(23, 'Bộ môn Khoáng sản\r\n', 4, 'logo-dhmo.jpg'),
(24, 'Bộ môn Khoáng thạch và Địa hóa', 4, 'logo-dhmo.jpg'),
(25, 'Bộ môn Nguyên liệu khoáng', 4, 'logo-dhmo.jpg'),
(26, 'Bộ môn Tìm kiếm - thăm dò', 4, 'logo-dhmo.jpg'),
(27, 'Bộ môn Khai thác hầm lò', 5, 'logo-dhmo.jpg'),
(28, 'Bộ môn Tuyển khoáng', 5, 'logo-dhmo.jpg'),
(29, 'Bộ môn Sức bền vật liệu', 5, 'logo-dhmo.jpg'),
(30, 'Bộ môn Khai thác lộ thiên', 5, 'logo-dhmo.jpg'),
(31, 'Bộ môn Địa sinh thái và công n', 6, 'logo-dhmo.jpg'),
(32, 'Bộ môn Kỹ thuật môi trường mỏ', 6, 'logo-dhmo.jpg'),
(33, 'Bộ môn Môi trường cơ sở\r\n', 6, 'logo-dhmo.jpg'),
(34, 'Bộ môn Bản đồ', 7, 'logo-dhmo.jpg'),
(35, 'Bộ môn Địa chính', 7, 'logo-dhmo.jpg'),
(36, 'Bộ môn Đo ảnh và viễn thám', 7, 'logo-dhmo.jpg'),
(37, 'Bộ môn Trắc địa cao cấp', 7, 'logo-dhmo.jpg'),
(38, 'Bộ môn Trắc địa mỏ', 7, 'logo-dhmo.jpg'),
(39, 'Bộ môn Trắc địa phổ thông và s', 7, 'logo-dhmo.jpg'),
(40, 'Bộ môn Trắc địa công trình', 7, 'logo-dhmo.jpg'),
(41, 'Bộ môn Xây dựng công trình ngầ', 8, 'logo-dhmo.jpg'),
(42, 'Bộ môn Kỹ thuật Xây dựng', 8, 'logo-dhmo.jpg'),
(43, 'Bộ môn Xây dựng hạ tầng cơ sở', 8, 'logo-dhmo.jpg'),
(44, 'Bộ môn Quản trị doanh nghiệp m', 9, 'logo-dhmo.jpg'),
(45, 'Bộ môn Quản trị doanh nghiệp Đ', 9, 'logo-dhmo.jpg'),
(46, 'Bộ môn Kinh tế cơ sở', 9, 'logo-dhmo.jpg'),
(47, 'Bộ môn Kế toán doanh nghiệp', 9, 'logo-dhmo.jpg'),
(48, 'Bộ môn Tin học Mỏ', 2, 'logo-dhmo.jpg'),
(49, 'nfdnnd', 2, 'logo-dhmo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthi`
--

CREATE TABLE `diemthi` (
  `idSinhvien` int(11) NOT NULL,
  `idMonhoc` int(11) NOT NULL,
  `lanThi` int(1) NOT NULL,
  `diemThi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diemthi`
--

INSERT INTO `diemthi` (`idSinhvien`, `idMonhoc`, `lanThi`, `diemThi`) VALUES
(1, 1, 1, 8),
(2, 1, 1, 7),
(3, 1, 1, 5),
(4, 1, 1, 9),
(5, 2, 1, 8),
(6, 2, 1, 7),
(7, 2, 1, 5),
(8, 2, 1, 9),
(9, 3, 1, 8),
(10, 3, 1, 7),
(11, 3, 1, 5),
(12, 3, 1, 9),
(13, 4, 1, 8),
(14, 4, 1, 7),
(15, 4, 1, 5),
(16, 4, 1, 9),
(17, 5, 1, 8),
(18, 5, 1, 7),
(19, 5, 1, 5),
(19, 5, 1, 9),
(20, 6, 1, 8),
(21, 6, 1, 7),
(22, 6, 1, 5),
(23, 6, 1, 9),
(24, 7, 1, 8),
(25, 7, 1, 7),
(26, 7, 1, 5),
(27, 7, 1, 9),
(28, 8, 1, 8),
(28, 8, 1, 7),
(29, 8, 1, 5),
(30, 8, 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `idGiangvien` int(11) NOT NULL,
  `tenGiangvien` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `idBomon` int(11) NOT NULL,
  `chucVu` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `imgGiangvien` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`idGiangvien`, `tenGiangvien`, `idBomon`, `chucVu`, `imgGiangvien`) VALUES
(1, 'Đỗ Văn Huân', 1, 'Giảng viên', 'Huan.jpg'),
(2, 'Phí Văn Kiên', 2, 'Giảng viên', 'kien.jpg'),
(3, 'Phạm Ngọc Thịnh', 3, 'Giảng viên', 'thinh.jpg'),
(4, 'Đồng Văn Toàn', 4, 'Giảng viên', 'toan.jpg'),
(5, 'Trần Kim Long', 4, 'Giảng viên', 'long.jpg'),
(6, 'Phạm Đức Duy', 6, 'Giảng viên', 'duy.jpg'),
(7, 'Nguyễn Huyền Hường', 7, 'Giảng viên', 'huong.jpg'),
(8, 'Nguyễn Minh Trang', 8, 'Giảng viên', 'trang.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `idKhoa` int(11) NOT NULL,
  `tenKhoa` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `imgKhoa` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`idKhoa`, `tenKhoa`, `imgKhoa`) VALUES
(1, 'Khoa Công nghệ thông tin', 'logo-dhmo.jpg'),
(2, 'Khoa Cơ - Điện', 'logo-dhmo.jpg'),
(3, 'Khoa Dầu khí', 'logo-dhmo.jpg'),
(4, 'Khoa Khoa học và Kỹ thuật Địa ', 'logo-dhmo.jpg'),
(5, 'Khoa Mỏ', 'logo-dhmo.jpg'),
(6, 'Khoa Môi trường', 'logo-dhmo.jpg'),
(7, 'Khoa Trắc địa – Bản đồ và Quản', 'logo-dhmo.jpg'),
(8, 'Khoa Xây dựng', 'logo-dhmo.jpg'),
(9, 'Khoa Kinh tế Quản trị kinh doa', 'logo-dhmo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `kh_user`
-- (See below for the actual view)
--
CREATE TABLE `kh_user` (
`idUser` int(11)
,`fName` varchar(30)
,`lName` varchar(30)
,`email` varchar(40)
,`username` varchar(20)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `idLop` int(11) NOT NULL,
  `tenLop` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `idBomon` int(11) NOT NULL,
  `imgLop` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`idLop`, `tenLop`, `idBomon`, `imgLop`) VALUES
(1, 'Tin Học Trắc Địa K63A', 1, 'tải xuống.jfif'),
(2, 'Tin Học Trắc Địa K63B', 1, 'trắc địa a.jfif'),
(3, 'Tin Học Địa Chất K63 A', 2, 'trắc địa a.jfif'),
(4, 'Tin Học Mỏ K63 A', 3, 'tinhocmo.png'),
(5, 'Tin Kinh Tế K63 B', 4, 'tinkinhte.png'),
(6, 'Công Nghệ Phần Mềm K63B', 5, 'tải xuống.png'),
(7, 'Mạng Máy Tính K63 B', 6, 'mangmaytinh.jfif'),
(8, 'Tin Học Cơ Bản K63 C', 7, 'tinhoccoban.jfif'),
(9, 'Tin Học Địa Chất K63 B', 2, 'địa chất a.jfif'),
(10, 'Tin Học Mỏ K63 B', 3, 'tinhocmo.png'),
(11, 'Tin Kinh Tế K63 A', 4, 'tinkinhte.png'),
(12, 'Công Nghệ Phần Mềm K63 A', 5, 'tải xuống.png'),
(13, 'Mạng Máy Tính K63 C', 6, 'mangmaytinh.jfif'),
(14, 'Tin Học Cơ Bản K63 B', 7, 'tinhoccoban.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `idMonhoc` int(11) NOT NULL,
  `tenMonhoc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `soTinchi` int(1) NOT NULL,
  `idGiangvien` int(11) NOT NULL,
  `imgMonhoc` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`idMonhoc`, `tenMonhoc`, `soTinchi`, `idGiangvien`, `imgMonhoc`) VALUES
(1, 'Lập trình C++', 3, 1, 'c++.jpg'),
(2, 'Trí tuệ nhân tạo', 3, 2, 'AI.jpg'),
(3, 'Mã nguồn mở', 2, 3, 'ma nguon mo 2.png'),
(4, 'Tin học đại cương', 3, 4, 'tin học đc.jpg'),
(5, 'Logic đại cương', 3, 5, 'logic dai cuong.jpg'),
(6, 'Pháp luật đại cương', 3, 6, 'PLĐC.jpg'),
(7, 'Tiếng anh', 2, 7, 'TA.jpg'),
(8, 'Phát tiển ứng dụng Web', 4, 8, 'html.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `idSinhvien` int(11) NOT NULL,
  `tenSinhvien` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `gioiTinh` varchar(8) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `idLop` int(11) NOT NULL,
  `imgSinhvien` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`idSinhvien`, `tenSinhvien`, `gioiTinh`, `ngaySinh`, `idLop`, `imgSinhvien`) VALUES
(1, 'Đỗ Văn Huân', 'Male', '2000-09-05', 1, 'logo-dhmo.jpg'),
(2, 'Phí Văn Kiên', 'Male', '2000-11-15', 1, 'logo-dhmo.jpg'),
(3, 'Phạm Ngọc Thịnh', 'Male', '2000-10-09', 2, 'logo-dhmo.jpg'),
(4, 'Trần Kim Long', 'Male', '2000-10-09', 2, 'logo-dhmo.jpg'),
(5, 'Nguyễn Mạnh Tú', 'Male', '2000-10-09', 3, 'logo-dhmo.jpg'),
(6, 'Nguyễn Huyền Trang', 'Male', '2000-12-02', 3, 'logo-dhmo.jpg'),
(7, 'Nguyễn Văn Tiến', 'Male', '2000-10-09', 4, 'logo-dhmo.jpg'),
(8, 'Lê Thị Oanh', 'Female', '2000-10-09', 4, 'logo-dhmo.jpg'),
(9, 'Hoàng Văn Thịnh', 'Male', '2000-10-29', 5, 'logo-dhmo.jpg'),
(10, 'Nguyễn Minh Hường', 'Female', '2000-10-09', 5, 'logo-dhmo.jpg'),
(11, 'Nguyễn Văn Anh', 'Male', '2000-02-09', 6, 'logo-dhmo.jpg'),
(12, 'Lê Thị Huyền', 'Female', '2000-05-12', 6, 'logo-dhmo.jpg'),
(13, 'Nguyễn Văn Toàn', 'Male', '2000-02-09', 7, 'logo-dhmo.jpg'),
(14, 'Hoàng Thị Oanh', 'Female', '2000-01-09', 7, 'logo-dhmo.jpg'),
(15, 'Hoàng Thị Hoài', 'Female', '2000-12-09', 8, 'logo-dhmo.jpg'),
(16, 'Lê Hà Oanh', 'Female', '2000-10-09', 8, 'logo-dhmo.jpg'),
(17, 'Nguyễn Văn Hòa', 'Male', '2000-04-09', 9, 'logo-dhmo.jpg'),
(18, 'Lê Việt Anh', 'Female', '2000-10-09', 9, 'logo-dhmo.jpg'),
(19, 'Nguyễn Nan Đô', 'Male', '2000-10-09', 10, 'logo-dhmo.jpg'),
(20, 'Lê Thị Oanh', 'Female', '2000-10-09', 10, 'logo-dhmo.jpg'),
(21, 'Nguyễn Văn Tèo', 'Male', '2000-10-09', 11, 'logo-dhmo.jpg'),
(22, 'Lê Hồng Đào', 'Female', '2000-10-09', 11, 'logo-dhmo.jpg'),
(23, 'Nguyễn Méc Xi', 'Male', '2000-10-09', 12, 'logo-dhmo.jpg'),
(24, 'Lê Thị Oanh', 'Female', '2000-10-09', 12, 'logo-dhmo.jpg'),
(25, 'Nguyễn Văn Việt Anh', 'Male', '2000-10-09', 13, 'logo-dhmo.jpg'),
(26, 'Lê Thị Hằng', 'Female', '2000-10-09', 13, 'logo-dhmo.jpg'),
(27, 'Nguyễn Văn Tý', 'Male', '2000-10-09', 14, 'logo-dhmo.jpg'),
(28, 'Hoàng Cẩm Tú', 'Female', '2000-10-09', 14, 'logo-dhmo.jpg'),
(29, 'Nguyễn Văn Tồ', 'Male', '2000-10-09', 13, 'logo-dhmo.jpg'),
(30, 'Hoàng Như Quỳnh', 'Female', '2000-10-09', 14, 'logo-dhmo.jpg'),
(31, 'Nguyễn Văn Tũn', 'Male', '2000-10-09', 14, 'logo-dhmo.jpg'),
(32, 'Đỗ Văn Huân', 'Nam', '2002-12-31', 1, 'logo-dhmo.jpg'),
(33, 'Đỗ Văn Huân', 'Nam', '2002-12-31', 1, 'logo-dhmo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `fName` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `lName` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gioiTinh` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `isAdmin` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `fName`, `lName`, `email`, `username`, `password`, `gioiTinh`, `note`, `isAdmin`) VALUES
(1, 'ĐỖ', 'VĂN HUÂN', 'huanyd1@gmail.com', 'huanyd1', 'e10adc3949ba59abbe56e057f20f883e', '1', '', b'1'),
(2, 'PHẠM', 'NGỌC THỊNH', 'ngocthinh0910@gmail.com', 'thinhpn', 'e10adc3949ba59abbe56e057f20f883e', '1', 'Điền thêm một vài thông tin', b'1'),
(4, '$fName', '$lName', '$email', '$username', '$password', NULL, '', NULL),
(5, 'Đỗ', 'Văn Đoàn', 'doandv@gamil.com', 'doandv', 'e10adc3949ba59abbe56e057f20f883e', NULL, '', b'0'),
(6, 'Đỗ Văn', 'Huân', 'huanyd1@gmail.com', 'huydv', '123456', 'male', '', b'1'),
(7, 'Đỗ Văn', 'Huân', 'huanyd1@gmail.com', 'huy1dv', '123456', 'male', '', b'1'),
(8, 'Đỗ Văn ', 'Huy', 'sgdgs@gmail.com', 'huydv', 'e10adc3949ba59abbe56e057f20f883e', 'male', '', b'1'),
(9, 'Đỗ Văn ', 'Huy', 'sgdgs@gmail.com', 'huy2dv', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc cho view `kh_user`
--
DROP TABLE IF EXISTS `kh_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kh_user`  AS  select `user`.`idUser` AS `idUser`,`user`.`fName` AS `fName`,`user`.`lName` AS `lName`,`user`.`email` AS `email`,`user`.`username` AS `username` from `user` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`idBomon`),
  ADD KEY `fk_bomon` (`idKhoa`);

--
-- Chỉ mục cho bảng `diemthi`
--
ALTER TABLE `diemthi`
  ADD KEY `fk_diemthi1` (`idSinhvien`),
  ADD KEY `fk_diemthi2` (`idMonhoc`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`idGiangvien`),
  ADD KEY `fk_giangvien` (`idBomon`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`idKhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`idLop`),
  ADD KEY `fk_lop` (`idBomon`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`idMonhoc`),
  ADD KEY `fk_monhoc2` (`idGiangvien`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`idSinhvien`),
  ADD KEY `fk_sinhvien` (`idLop`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `idBomon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `idGiangvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `idKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `idLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `idMonhoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `idSinhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD CONSTRAINT `fk_bomon` FOREIGN KEY (`idKhoa`) REFERENCES `khoa` (`idKhoa`);

--
-- Các ràng buộc cho bảng `diemthi`
--
ALTER TABLE `diemthi`
  ADD CONSTRAINT `fk_diemthi1` FOREIGN KEY (`idSinhvien`) REFERENCES `sinhvien` (`idSinhvien`),
  ADD CONSTRAINT `fk_diemthi2` FOREIGN KEY (`idMonhoc`) REFERENCES `monhoc` (`idMonhoc`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `fk_giangvien` FOREIGN KEY (`idBomon`) REFERENCES `bomon` (`idBomon`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_lop` FOREIGN KEY (`idBomon`) REFERENCES `bomon` (`idBomon`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `fk_monhoc2` FOREIGN KEY (`idGiangvien`) REFERENCES `giangvien` (`idGiangvien`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `fk_sinhvien` FOREIGN KEY (`idLop`) REFERENCES `lop` (`idLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
