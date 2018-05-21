-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 03:13 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geofisik_bmkgweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buletin`
--

CREATE TABLE `tb_buletin` (
  `id_buletin` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `vol` varchar(50) NOT NULL,
  `tgl_rilis` varchar(25) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buletin`
--

INSERT INTO `tb_buletin` (`id_buletin`, `judul`, `vol`, `tgl_rilis`, `ket`, `size`) VALUES
('1500001', 'Geodinamika', '1', '22/05/2018', 'Berisikan tentang keadaan gempa ', ''),
('1500002', 'Geodinamika 3', '9', '08/02/2018', 'Geodinamika ', ''),
('1500003', 'Geodinamika 7', '8', '08/02/2018', 'Geodinamika ', ''),
('1500004', 'Geodinamika 9', '9', '08/02/2018', 'Geodinamika ', ''),
('1500005', 'Geodinamika 19', '3', '08/02/2018', 'Geodinamika ', ''),
('1500006', 'Geodinamika 19', '2', '08/02/2018', 'Geodinamika ', ''),
('1500007', 'Geodinamika 7', '8', '08/02/2018', 'Geodinamika ', ''),
('1500008', 'Geodinamika 9', '9', '08/02/2018', 'Geodinamika ', ''),
('1500009', 'Geodinamika 19', '3', '08/02/2018', 'Geodinamika ', ''),
('1500010', 'Geodinamika 19', '2', '08/02/2018', 'Geodinamika ', ''),
('1500011', 'Coba ', '6', '22/06/2018', 'coba', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buletin`
--
ALTER TABLE `tb_buletin`
  ADD PRIMARY KEY (`id_buletin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
