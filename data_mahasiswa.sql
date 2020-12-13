-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 10:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(10) DEFAULT NULL,
  `tanggal_lahir` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_b`
--

CREATE TABLE `tabel_b` (
  `id_006` int(11) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_b`
--

INSERT INTO `tabel_b` (`id_006`, `kolom_jurusan`, `kolom_kelas`, `kolom_isi`) VALUES
(1, 'd3rpl', 'kelas A', 0),
(2, 'D3RPL', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_d`
--

CREATE TABLE `tabel_d` (
  `id_06` int(11) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_d`
--

INSERT INTO `tabel_d` (`id_06`, `kolom_kelas`, `kolom_jurusan`, `kolom_isi`) VALUES
(12, 'kelas A', 'd3 rpl', 'siswa baru'),
(13, 'aa', 'bbb', '30'),
(14, 'SS', 'pahlawan', 'mabar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tabel_b`
--
ALTER TABLE `tabel_b`
  ADD PRIMARY KEY (`id_006`);

--
-- Indexes for table `tabel_d`
--
ALTER TABLE `tabel_d`
  ADD PRIMARY KEY (`id_06`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_b`
--
ALTER TABLE `tabel_b`
  MODIFY `id_006` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_d`
--
ALTER TABLE `tabel_d`
  MODIFY `id_06` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
