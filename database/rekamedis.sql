-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 03:21 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekamedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Kd_User` int(3) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `level` int(1) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Kd_User`, `Username`, `Password`, `level`, `aktif`) VALUES
(1, 'SuperAdmin', 'aec60231d83fe6cf81444bc536596887', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `Kd_Petugas` varchar(3) NOT NULL,
  `Nm_Petugas` varchar(30) NOT NULL,
  `Bagian` varchar(12) NOT NULL,
  `Kd_User` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Kd_Petugas`, `Nm_Petugas`, `Bagian`, `Kd_User`) VALUES
('P01', 'Rismawan', 'Petugas ', 1),
('P02', 'Rifky', 'Petugas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `KdPoli` int(3) NOT NULL,
  `NmPoli` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`KdPoli`, `NmPoli`) VALUES
(1, 'Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE IF NOT EXISTS `rekammedis` (
  `No_Rm` varchar(11) NOT NULL,
  `No_Pasien` varchar(10) NOT NULL,
  `Kd_User` int(3) NOT NULL,
  `Diagnosa` text NOT NULL,
  `Keluhan` text NOT NULL,
  `Tgl_Pemberiksaan` date NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbdokter`
--

CREATE TABLE IF NOT EXISTS `tbdokter` (
  `Kd_Dokter` varchar(3) NOT NULL,
  `NmDokter` varchar(30) NOT NULL,
  `TmpLahir` varchar(25) NOT NULL,
  `TglLahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `NoTelp` varchar(13) NOT NULL,
  `Kd_Poli` varchar(2) NOT NULL,
  `Kd_User` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbkunjungan`
--

CREATE TABLE IF NOT EXISTS `tbkunjungan` (
  `IdKunjungan` int(5) NOT NULL,
  `TglKunjungan` date NOT NULL,
  `NoPasien` varchar(10) NOT NULL,
  `KdPoli` varchar(2) NOT NULL,
  `JamKunjungan` time NOT NULL,
  `No_Antrian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbpasien`
--

CREATE TABLE IF NOT EXISTS `tbpasien` (
  `NoPasien` varchar(10) NOT NULL,
  `NmPasien` varchar(30) NOT NULL,
  `J_Kel` varchar(15) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `Tmp_Lahir` varchar(20) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `No_Telp` varchar(13) NOT NULL,
  `Foto` varchar(32) NOT NULL,
  `Tgl_Registrasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`NoPasien`, `NmPasien`, `J_Kel`, `Agama`, `Alamat`, `Tmp_Lahir`, `Tgl_Lahir`, `No_Telp`, `Foto`, `Tgl_Registrasi`) VALUES
('1', 'Ade F', 'L', 'Islam', '         a           ', 'a', '2016-01-06', '1', 'anim.gif', '2016-01-04'),
('10', 'Rismawan', 'L', 'Islam', '       a             ', 'a', '1998-10-18', '1', '2015-06-16 12.05.23.jpg', '2016-01-27'),
('99', 'Rismawan', 'L', 'Islam', '   aa                 ', 'aa', '2016-01-05', '11', 'anim.gif', '2016-01-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Kd_User`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`KdPoli`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`No_Rm`);

--
-- Indexes for table `tbdokter`
--
ALTER TABLE `tbdokter`
  ADD PRIMARY KEY (`Kd_Dokter`);

--
-- Indexes for table `tbkunjungan`
--
ALTER TABLE `tbkunjungan`
  ADD PRIMARY KEY (`IdKunjungan`);

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`NoPasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Kd_User` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `KdPoli` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbkunjungan`
--
ALTER TABLE `tbkunjungan`
  MODIFY `IdKunjungan` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
