-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2024 lúc 04:47 PM
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
-- Cơ sở dữ liệu: `qlgr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baoduong`
--

CREATE TABLE `baoduong` (
  `MABD` varchar(10) NOT NULL,
  `NGAYNHAN` date NOT NULL,
  `NGAYTRA` date NOT NULL,
  `SOKM` int(11) NOT NULL,
  `NOIDUNG` varchar(100) NOT NULL,
  `SOXE` varchar(10) NOT NULL,
  `THANHTIEN` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `MACV` varchar(10) NOT NULL,
  `TENCV` varchar(20) NOT NULL,
  `DONGIA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bd`
--

CREATE TABLE `ct_bd` (
  `MABD` varchar(10) NOT NULL,
  `MACV` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` varchar(10) NOT NULL,
  `HOTENKH` varchar(50) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `DIENTHOAI` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `SOXE` varchar(10) NOT NULL,
  `HANGXE` varchar(20) NOT NULL,
  `NAMSX` int(11) NOT NULL,
  `MAKH` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baoduong`
--
ALTER TABLE `baoduong`
  ADD PRIMARY KEY (`MABD`),
  ADD KEY `baoduong_ibfk_1` (`SOXE`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `ct_bd`
--
ALTER TABLE `ct_bd`
  ADD PRIMARY KEY (`MABD`,`MACV`),
  ADD KEY `ctbd_ibfk_2` (`MACV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`SOXE`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baoduong`
--
ALTER TABLE `baoduong`
  ADD CONSTRAINT `baoduong_ibfk_1` FOREIGN KEY (`SOXE`) REFERENCES `xe` (`SOXE`);

--
-- Các ràng buộc cho bảng `ct_bd`
--
ALTER TABLE `ct_bd`
  ADD CONSTRAINT `ctbd_ibfk_1` FOREIGN KEY (`MABD`) REFERENCES `baoduong` (`MABD`),
  ADD CONSTRAINT `ctbd_ibfk_2` FOREIGN KEY (`MACV`) REFERENCES `congviec` (`MACV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
