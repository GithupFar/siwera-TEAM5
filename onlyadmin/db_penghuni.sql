-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penghuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `P_NRP` varchar(11) NOT NULL,
  `PB_ID` char(5) DEFAULT NULL,
  `P_NAMA` varchar(100) DEFAULT NULL,
  `P_TGLLAHIR` date DEFAULT NULL,
  `P_DEPARTEMEN` varchar(20) DEFAULT NULL,
  `P_JALURMASUK` varchar(10) DEFAULT NULL,
  `P_FAKULTAS` varchar(20) DEFAULT NULL,
  `P_JENISKELAMIN` char(1) DEFAULT NULL,
  `P_EMAIL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`P_NRP`, `PB_ID`, `P_NAMA`, `P_TGLLAHIR`, `P_DEPARTEMEN`, `P_JALURMASUK`, `P_FAKULTAS`, `P_JENISKELAMIN`, `P_EMAIL`) VALUES
('5116100001', 'PB001', 'Jo Jinho', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100002', 'PB002', 'Yang Hongseok', '0000-00-00', 'Informatika', 'Bidik Misi', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100003', 'PB001', 'Kim Jongkook', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100004', 'PB001', 'Jeon Jungkook', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100005', 'PB001', 'Lee Jihyo', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'P', 'jojinho11@gmail.com'),
('5116100006', 'PB001', 'Lee Kwangsoo', '0000-00-00', 'Informatika', 'Bidik Misi', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100007', 'PB001', 'Ji Seok Jin', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100008', 'PB001', 'Seo In Guk', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'L', 'jojinho11@gmail.com'),
('5116100009', 'PB001', 'Miyawaki Sakura', '0000-00-00', 'Informatika', 'Bidik Misi', 'FTIK', 'P', 'jojinho11@gmail.com'),
('5116100010', 'PB001', 'Takeuchi Miyu', '0000-00-00', 'Informatika', 'Regular', 'FTIK', 'P', 'jojinho11@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`P_NRP`),
  ADD UNIQUE KEY `P_NRP` (`P_NRP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
