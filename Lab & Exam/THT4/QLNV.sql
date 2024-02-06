-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 08:00 PM
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
-- Cơ sở dữ liệu: `qlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `MaChiNhanh` varchar(40) NOT NULL,
  `TenChiNhanh` varchar(40) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `MaCongTy` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chinhanh`
--

INSERT INTO `chinhanh` (`MaChiNhanh`, `TenChiNhanh`, `DiaChi`, `MaCongTy`) VALUES
('CN01', 'Hà Nội', '76 Nguyễn Công Phương, Q.Hoàng Mai', 'CT01'),
('CN02', 'Đà Lạt', '123 Nguyễn Trãi', 'CT02'),
('CN03', 'Khánh Hoà', '274 Bùi Thị Xuân', 'CT03'),
('CN04', 'TP HCM', '101 Võ Văn Ngân', 'CT04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `MaCongTy` varchar(40) NOT NULL,
  `TenCongTy` varchar(40) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`MaCongTy`, `TenCongTy`, `DiaChi`) VALUES
('CT01', 'Viễn Thông A', '12 Tô Vĩnh Ký, Q.12, TP.HCM'),
('CT02', 'CellPhoneS', '16 Hùng Vương, Q.Cầu Giấy, Hà Nội'),
('CT03', 'Bách hóa xanh', '136 Nguyễn Thái Học, Q.1, TP HCM'),
('CT04', 'Thế Giới Di Động', '125 Lê Văn Việt, Q.Thủ Đức, TP HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` varchar(40) NOT NULL,
  `TenNhanVien` varchar(40) NOT NULL,
  `LuongThang` float NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `MaPhong` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `TenNhanVien`, `LuongThang`, `GioiTinh`, `MaPhong`) VALUES
('NV01', 'Đỗ Minh Khánh', 25000000, 1, 'PB03'),
('NV02', 'Võ Phạm Duy Đức', 23000000, 1, 'PB03'),
('NV03', 'Phạm Anh Khoa', 30000000, 1, 'PB04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MaPhong` varchar(40) NOT NULL,
  `TenPhong` varchar(40) NOT NULL,
  `MaChiNhanh` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MaPhong`, `TenPhong`, `MaChiNhanh`) VALUES
('PB01', 'Marketing', 'CN01'),
('PB02', 'Nhân sự', 'CN01'),
('PB03', 'Marketing', 'CN02'),
('PB04', 'Nhân sự', 'CN02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`MaChiNhanh`) USING BTREE,
  ADD KEY `MaCongTy` (`MaCongTy`);

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`MaCongTy`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaPhong` (`MaPhong`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPhong`),
  ADD KEY `MaChiNhanh` (`MaChiNhanh`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD CONSTRAINT `chinhanh_ibfk_1` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaPhong`) REFERENCES `phongban` (`MaPhong`);

--
-- Các ràng buộc cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD CONSTRAINT `phongban_ibfk_1` FOREIGN KEY (`MaChiNhanh`) REFERENCES `chinhanh` (`MaChiNhanh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
