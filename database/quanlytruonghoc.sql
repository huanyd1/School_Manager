-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2020 lúc 09:50 AM
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
(1, 'Công nghệ phần mềm', 1, 'congnghephanmem.png'),
(2, 'Tin kinh tế', 1, 'tinkinhte.png'),
(14, 'Môi trường', 2, 'moitruong.jfif'),
(16, 'Xây dựng', 5, '129688374_2772349733003586_7819071321057261915_n.png');

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
(1, 2, 1, 10),
(1, 2, 1, 5),
(1, 2, 1, 5),
(2, 3, 1, 9),
(1, 2, 1, 11),
(1, 2, 1, 11),
(1, 3, 2, 11),
(1, 3, 2, 11),
(1, 2, 2, 11),
(1, 2, 1, 11),
(2, 2, 2, 10),
(1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `idGiangvien` int(11) NOT NULL,
  `tenGiangvien` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `idBomon` int(11) NOT NULL,
  `imgGiangvien` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`idGiangvien`, `tenGiangvien`, `idBomon`, `imgGiangvien`) VALUES
(1, 'Đỗ Văn Huân', 1, 'congnghephanmem.png'),
(2, 'Phí Văn Kiên', 1, 'congnghephanmem.png');

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
(0, 'Khoa', 'tải xuống 3.jfif'),
(1, 'Khoa Công nghệ thông tin', 'tải xuống.png'),
(2, 'Khoa Môi trường', 'tải xuống.jfif'),
(3, 'Khoa Cơ điện', 'tải xuống (1).jfif'),
(4, 'Khoa Quản trị kinh doanh', 'tải xuống (1).png'),
(5, 'Khoa Mỏ', '130499089_1011715622669100_1424898874299484109_n.png'),
(9, 'Khoa Công nghệ thông tin 1', 'tinkinhte.png'),
(10, 'Khoa', 'tải xuống.jfif');

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
(1, 'Công nghệ phần mềm K63A', 1, 'congnghephanmem.png'),
(2, 'Công nghệ phần mềm K63B', 1, 'congnghephanmem.png');

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
(2, 'Mạng máy tính AA', 80, 1, 'congnghephanmem.png'),
(3, 'Mạng máy tính', 80, 2, 'tinkinhte.png');

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
(1, 'Đỗ Văn Huân', 'Nam', '2000-05-09', 2, 'IMG_2327.JPG'),
(2, 'Phí Văn Kiên', 'Nam', '2000-11-15', 2, '127187656_815325589253324_3940224272665804592_n - Copy (2).jpg'),
(6, 'Nguyễn Mạnh Tú', 'Nam', '2000-07-01', 1, 'congnghephanmem.png'),
(7, 'Nguyễn Mạnh Tú', 'Nam', '2020-12-10', 1, 'tinkinhte.png'),
(8, 'Nguyễn Mạnh Tú 1', 'Nam', '2002-12-31', 2, 'IMG_2149.JPG'),
(9, 'Nguyễn Mạnh Tú', 'Nam', '2002-12-31', 1, 'IMG_2157.JPG'),
(10, 'Nguyễn Mạnh Tú', 'Nam', '2002-12-31', 1, 'IMG_2149.JPG'),
(11, 'Nguyễn Mạnh Tú', 'Nam', '2002-12-31', 1, 'tải xuống.png'),
(12, 'fgưewgư', 'Nam', '2002-12-31', 1, 'tải xuống (1).jfif'),
(13, 'fgưewgưggg', 'Nam', '2002-12-31', 1, 'tải xuống (1).png'),
(14, 'Nguyễn Mạnh Tú', 'Nam', '0000-00-00', 1, 'IMG_2149.JPG');

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
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `gioiTinh` bit(1) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `isAdmin` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `fName`, `lName`, `email`, `username`, `password`, `gioiTinh`, `note`, `isAdmin`) VALUES
(1, 'ĐỖ', 'VĂN HUÂN', 'huanyd1@gmail.com', 'huanyd1', 'e10adc3949ba59abbe56e057f20f883e', b'1', '', b'1'),
(2, 'PHẠM', 'NGỌC THỊNH', 'ngocthinh0910@gmail.com', 'thinhpn', 'e10adc3949ba59abbe56e057f20f883e', b'1', 'Điền thêm một vài thông tin', b'1'),
(4, '$fName', '$lName', '$email', '$username', '$password', NULL, '', NULL),
(5, 'Đỗ', 'Văn Đoàn', 'doandv@gamil.com', 'doandv', 'e10adc3949ba59abbe56e057f20f883e', NULL, '', b'0');

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
  MODIFY `idBomon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `idGiangvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `idKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `idLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `idMonhoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `idSinhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
