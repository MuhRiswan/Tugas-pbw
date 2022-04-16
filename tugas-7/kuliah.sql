-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 11:02 AM
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
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `npm` char(13) NOT NULL,
  `kodemk` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `npm`, `kodemk`) VALUES
(12, '201063117001', '202203'),
(15, '201063117002', '202201'),
(18, '201063117003', '202201');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi','') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `alamat`) VALUES
('201063117001', 'Lily', 'Teknik Informatika', 'Jl.Kemang asri no 3 RT03/15 Cilegon'),
('201063117002', 'Rusman', 'Teknik Informatika', 'Jl. Geng Cyn RT03/3 Cililitan\r\n'),
('201063117003', 'Jacky', 'Sistem Informasi', 'Jl Jannies RT03/05 Cilegon '),
('201063117004', 'Ryan', 'Teknik Informatika', 'Jl. Swaiper RT03/11 Kebon asem'),
('201063117050', 'gampang', 'Teknik Informatika', 'gampang');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `nama`, `jumlah_sks`) VALUES
('202201', 'Program Berorientasi Object', 5),
('202202', 'RPL', 4),
('202203', 'Kecerdasan Buatan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(11, 'dian', 'dian', '$2y$10$mzJqE0GXov7XMv2mXLeyHuZe0j0bP1f/rcyy0bdzdqY63CkVr0vgm'),
(12, 'jackky', 'jackky', '$2y$10$T5c3wKVmRqCEiTIkzIr80.8XBqLOqv4YM0LiLPzG3qqJt4m/Bc/qK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`,`kodemk`),
  ADD KEY `kodemk` (`kodemk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
