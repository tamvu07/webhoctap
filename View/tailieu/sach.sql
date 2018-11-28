-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 04:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `ISBN` int(11) NOT NULL,
  `TieuDe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ISBN`, `TieuDe`, `TacGia`, `Gia`, `hinhanh`) VALUES
(0, '111', 'e', 1, ''),
(123, 'tuoi tho', 'tam', 1000, 'tam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
