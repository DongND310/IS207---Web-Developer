-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2024 lúc 05:13 PM
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
-- Cơ sở dữ liệu: `qlcl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cd_tc`
--

CREATE TABLE `cd_tc` (
  `MaCD` varchar(10) NOT NULL,
  `MaTC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cd_tc`
--

INSERT INTO `cd_tc` (`MaCD`, `MaTC`) VALUES
('CD01', 'TC01'),
('CD01', 'TC02'),
('CD01', 'TC03'),
('CD02', 'TC02'),
('CD02', 'TC04'),
('CD03', 'TC01'),
('CD03', 'TC03'),
('CD03', 'TC06'),
('CD04', 'TC01'),
('CD04', 'TC02'),
('CD05', 'TC05'),
('CD06', 'TC02'),
('CD06', 'TC06'),
('CD07', 'TC01'),
('CD07', 'TC03'),
('CD07', 'TC05'),
('CD08', 'TC01'),
('CD08', 'TC03'),
('CD08', 'TC04'),
('CD09', 'TC02'),
('CD09', 'TC03'),
('CD10', 'TC01'),
('CD10', 'TC05'),
('CD11', 'TC01'),
('CD11', 'TC02'),
('CD12', 'TC01'),
('CD12', 'TC02'),
('CD12', 'TC03'),
('CD12', 'TC04'),
('CD12', 'TC05'),
('CD12', 'TC06'),
('CD13', 'TC04'),
('CD13', 'TC05'),
('CD13', 'TC06'),
('CD14', 'TC01'),
('CD14', 'TC02'),
('CD14', 'TC03'),
('CD15', 'TC01'),
('CD15', 'TC02'),
('CD16', 'TC03'),
('CD16', 'TC04'),
('CD17', 'TC05'),
('CD17', 'TC06'),
('CD18', 'TC01'),
('CD18', 'TC05'),
('CD18', 'TC06'),
('CD19', 'TC01'),
('CD19', 'TC03'),
('CD20', 'TC02'),
('CD20', 'TC03'),
('CD20', 'TC06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congdan`
--

CREATE TABLE `congdan` (
  `MaCD` varchar(10) NOT NULL,
  `TenCD` varchar(50) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NamSinh` date NOT NULL,
  `NuocVe` varchar(50) NOT NULL,
  `MaDCL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congdan`
--

INSERT INTO `congdan` (`MaCD`, `TenCD`, `GioiTinh`, `NamSinh`, `NuocVe`, `MaDCL`) VALUES
('CD01', 'Nguyễn Văn Hiếu', 1, '2000-01-11', 'EngLand', 'DCL04'),
('CD02', 'Quy', 1, '2002-02-02', 'Singapore', 'DCL01'),
('CD03', 'Ní Hạo', 0, '2002-03-03', 'China', 'DCL03'),
('CD04', 'Tu', 0, '2002-04-04', 'Italy', 'DCL07'),
('CD05', 'Mai', 0, '2002-05-05', 'Campuchia', 'DCL01'),
('CD06', 'Long', 1, '2002-06-06', 'Myanmar', 'DCL08'),
('CD07', 'Tuyết', 0, '2002-07-07', 'Malaysia', 'DCL02'),
('CD08', 'Nhi', 1, '2002-08-08', 'ThaiLand', 'DCL04'),
('CD09', 'An', 1, '2002-09-09', 'America', 'DCL05'),
('CD10', 'Hà', 0, '2002-01-15', 'France', 'DCL06'),
('CD11', 'Alexander I', 1, '2002-11-11', 'France', 'DCL01'),
('CD12', 'Elsu', 1, '2002-12-12', 'AOG', 'DCL12'),
('CD13', 'Lilianna', 0, '2003-03-12', 'AOG', 'DCL12'),
('CD14', 'Aya', 0, '1999-09-30', 'Hà Nội', 'DCL09'),
('CD15', 'Aoi', 0, '2222-02-02', 'Canada', 'DCL12'),
('CD16', 'Trần', 0, '2023-02-16', 'China', 'DCL04'),
('CD17', 'Lê', 0, '2023-02-16', 'ThaiLand', 'DCL03'),
('CD18', 'Nguyễn', 0, '2023-02-15', 'Korea', 'DCL09'),
('CD19', 'Ngô', 0, '2023-02-16', 'Japan', 'DCL01'),
('CD20', 'Phạm', 0, '2023-02-16', 'Campuchia', 'DCL01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemcachly`
--

CREATE TABLE `diemcachly` (
  `MaDCL` varchar(10) NOT NULL,
  `TenDCL` varchar(20) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SucChua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diemcachly`
--

INSERT INTO `diemcachly` (`MaDCL`, `TenDCL`, `DiaChi`, `SucChua`) VALUES
('DCL01', 'Biên Hòa', 'DC1', 1000),
('DCL02', 'Moon', 'Moon', 1000),
('DCL03', 'Dĩ An', 'DC3', 1000),
('DCL04', 'Bình Dương', 'Bình Dương', 1000),
('DCL05', 'Earth', 'Earth', 100000),
('DCL06', 'Bình Định', 'Bình Định', 1000),
('DCL07', 'No Name', 'where', 500),
('DCL08', 'Úc', 'Úc', 2000),
('DCL09', 'KTX Khu A ', 'Bình Dương', 6000),
('DCL10', 'KTX Khu B', 'Bình Dương - Thủ Đức', 8000),
('DCL11', 'Hà Nội', 'Hà Nội', 5000),
('DCL12', 'Bình Nguyên Vô Tận', 'AOG', 200),
('DCL13', 'dc13', 'dc13', 131313),
('DCL14', 'Điểm cách ly 14', 'AOG', 190),
('DCL15', 'Điểm cách ly 15', 'Mars', 100000000),
('DCL16', 'Điểm cách ly 16', 'Địa chỉ 16', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trieuchung`
--

CREATE TABLE `trieuchung` (
  `MaTC` varchar(10) NOT NULL,
  `TenTC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trieuchung`
--

INSERT INTO `trieuchung` (`MaTC`, `TenTC`) VALUES
('TC01', 'Sốt'),
('TC02', 'Ho'),
('TC03', 'Khó thở'),
('TC04', 'Đau đầu'),
('TC05', 'Mỏi mắt'),
('TC06', 'Đau lưng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cd_tc`
--
ALTER TABLE `cd_tc`
  ADD PRIMARY KEY (`MaCD`,`MaTC`),
  ADD KEY `cn_tc_ibfk_2` (`MaTC`);

--
-- Chỉ mục cho bảng `congdan`
--
ALTER TABLE `congdan`
  ADD PRIMARY KEY (`MaCD`),
  ADD KEY `congdan_ibfk_1` (`MaDCL`);

--
-- Chỉ mục cho bảng `diemcachly`
--
ALTER TABLE `diemcachly`
  ADD PRIMARY KEY (`MaDCL`);

--
-- Chỉ mục cho bảng `trieuchung`
--
ALTER TABLE `trieuchung`
  ADD PRIMARY KEY (`MaTC`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cd_tc`
--
ALTER TABLE `cd_tc`
  ADD CONSTRAINT `cn_tc_ibfk_1` FOREIGN KEY (`MaCD`) REFERENCES `congdan` (`MaCD`),
  ADD CONSTRAINT `cn_tc_ibfk_2` FOREIGN KEY (`MaTC`) REFERENCES `trieuchung` (`MaTC`);

--
-- Các ràng buộc cho bảng `congdan`
--
ALTER TABLE `congdan`
  ADD CONSTRAINT `congdan_ibfk_1` FOREIGN KEY (`MaDCL`) REFERENCES `diemcachly` (`MaDCL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
