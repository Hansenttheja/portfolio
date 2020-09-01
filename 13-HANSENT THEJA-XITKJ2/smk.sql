-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 02:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `nama` varchar(50) NOT NULL,
  `jenis` text NOT NULL,
  `tanggal` date NOT NULL,
  `harga` text NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`nama`, `jenis`, `tanggal`, `harga`, `warna`) VALUES
('hanse', 'roda2', '2020-07-26', '12321', '#ff0000'),
('hanse2', 'roda2', '2020-08-04', '12321', '#00ffee'),
('Hansent442233', 'roda4', '2020-08-03', '123213122312', '#fb1313');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `nama`, `gender`, `tanggal`, `jam`) VALUES
(12335, 'hoko3233232', 'male', '2020-08-18', '16:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` int(13) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `tinggi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`nama`, `email`, `telp`, `berat`, `tinggi`) VALUES
('Hansent', 'vincenttheja@gmail.com', 80811, '70-79', '12321'),
('Hansent32', 'vincenttheja@gmail.com', 1212, '50-59', '21321'),
('Hansent5', 'hansenttheja@gmail.com', 1212, '50-59', '12');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `nik` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jenjang` text NOT NULL,
  `hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`nik`, `nama`, `tanggal`, `jenjang`, `hobby`) VALUES
(12321, 'hanse2', '2020-08-18', 'SD', 'nonton, dengar lagu');

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `nig` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form5`
--

INSERT INTO `form5` (`nig`, `nama`, `tanggal`, `jam`, `keperluan`) VALUES
(12, 'bahasa2', '2020-08-04', '19:53:00', 'Buku Paket, Buku Tulis');

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `lama` int(2) NOT NULL,
  `telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form6`
--

INSERT INTO `form6` (`nama`, `tanggal`, `jam`, `jenis`, `lama`, `telp`) VALUES
('Hansent1', '2020-08-03', '13:43:00', 'Karet Sintetis', 22, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `form7`
--

CREATE TABLE `form7` (
  `id` int(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `gender` text NOT NULL,
  `telp` int(13) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form7`
--

INSERT INTO `form7` (`id`, `email`, `nama`, `gender`, `telp`, `color`) VALUES
(12312, 'hansenttheja@gmail.com', 'ererrr', 'P', 1232131211, '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `ulangan1`
--

CREATE TABLE `ulangan1` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulangan1`
--

INSERT INTO `ulangan1` (`id`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `skills`) VALUES
(1, 'andi', 'L', '0852587545', 'Jl. Ayani No 1', 'HTML, CSS, Javascript'),
(2, 'Budi', 'L', '08525875454', 'Jl. Ayani No 2', 'HTML, PHP, MYSQL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`nig`);

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `form7`
--
ALTER TABLE `form7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulangan1`
--
ALTER TABLE `ulangan1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ulangan1`
--
ALTER TABLE `ulangan1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
