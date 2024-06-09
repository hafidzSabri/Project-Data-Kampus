-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 10:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadsn`
--

CREATE TABLE `datadsn` (
  `noDsn` int(10) NOT NULL,
  `nikDsn` varchar(14) NOT NULL,
  `namaDsn` varchar(30) NOT NULL,
  `tlpDsn` varchar(14) NOT NULL,
  `jnsKelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadsn`
--

INSERT INTO `datadsn` (`noDsn`, `nikDsn`, `namaDsn`, `tlpDsn`, `jnsKelamin`) VALUES
(4, '3640543580', 'Chaerul Anwar', '089654217896', 'Laki-laki'),
(5, '3640543582', 'Augury El Rayeb', '089654217896', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `datalogin`
--

CREATE TABLE `datalogin` (
  `noUser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `roles` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datalogin`
--

INSERT INTO `datalogin` (`noUser`, `username`, `password`, `roles`) VALUES
(1, 'hafidz', 'admin', 2),
(2, 'sabri', 'admin', 2),
(6, 'pandu', 'user', 1),
(7, 'alaro', 'user', 1),
(9, 'rajasa', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `noMhs` int(15) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `namaMhs` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jnsKelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`noMhs`, `NIM`, `namaMhs`, `telepon`, `alamat`, `jnsKelamin`) VALUES
(5, '2021081023', 'Hafidz', '089653439878', 'Ciputat', 'Laki-laki'),
(6, '2021081024', 'arul', '087454935621', 'Ciputat', 'Laki-laki'),
(7, '2021081025', 'nisrina', '087542968456', 'pesanggrahan', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `datamatkul`
--

CREATE TABLE `datamatkul` (
  `noMatKul` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `namaMatKul` varchar(50) NOT NULL,
  `SKS` varchar(2) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamatkul`
--

INSERT INTO `datamatkul` (`noMatKul`, `kode`, `namaMatKul`, `SKS`, `semester`) VALUES
(4, 'INS106', 'Perancangan dan Pemrograman Web', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadsn`
--
ALTER TABLE `datadsn`
  ADD PRIMARY KEY (`noDsn`);

--
-- Indexes for table `datalogin`
--
ALTER TABLE `datalogin`
  ADD PRIMARY KEY (`noUser`);

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`noMhs`);

--
-- Indexes for table `datamatkul`
--
ALTER TABLE `datamatkul`
  ADD PRIMARY KEY (`noMatKul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadsn`
--
ALTER TABLE `datadsn`
  MODIFY `noDsn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `datalogin`
--
ALTER TABLE `datalogin`
  MODIFY `noUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `noMhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `datamatkul`
--
ALTER TABLE `datamatkul`
  MODIFY `noMatKul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
