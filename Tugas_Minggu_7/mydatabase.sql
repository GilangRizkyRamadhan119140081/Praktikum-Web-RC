-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 08:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `NIM` int(30) NOT NULL,
  `NAMA` varchar(35) NOT NULL,
  `PRODI` varchar(30) NOT NULL,
  `ALAMAT` text NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `GAMBAR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`NIM`, `NAMA`, `PRODI`, `ALAMAT`, `EMAIL`, `GAMBAR`) VALUES
(192111678, 'Mikael', 'Teknik Sipil', 'JL.KENCANA NO 02 ', 'mikaelll@gmail.com', '619c8c917df7a.jpg'),
(192222278, 'Fani Anisa', 'Teknik Informatika', 'uNKnown ROAD no 04 ', 'faniiii@gmail.com ', '619c8d30e31a1.jpg'),
(192300078, 'Rani Inta', 'Perencanaan Wilayah dan Kota', 'uNKnown ROAD No 03', 'ranirani@gmail.com ', '619c8c45ecad9.jpg'),
(192345678, 'Daniel', 'Sains Aktuaria', 'JL.KELENGKENG NO 02 PURWOSARI', 'daniell@gmail.com', '619c8bfebb29b.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
