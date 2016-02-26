-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2016 at 05:32 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Kd_User`, `Username`, `Password`, `level`, `aktif`) VALUES
(1, 'SuperAdmin', 'aec60231d83fe6cf81444bc536596887', 3, 'Y'),
(2, 'junandia', 'aec60231d83fe6cf81444bc536596887', 1, 'Y'),
(3, 'DR02', 'aec60231d83fe6cf81444bc536596887', 1, 'Y'),
(4, 'PTG02', '7246c1256b84017a6fafdbdca9b19950', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `Kd_Petugas` varchar(10) NOT NULL,
  `Nm_Petugas` varchar(30) NOT NULL,
  `Bagian` varchar(12) NOT NULL,
  `Kd_User` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Kd_Petugas`, `Nm_Petugas`, `Bagian`, `Kd_User`) VALUES
('P01', 'Rismawan Junandia', '3', 1),
('PTG02', 'Rifky Akbar', '2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `KdPoli` int(3) NOT NULL,
  `NmPoli` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`KdPoli`, `NmPoli`) VALUES
(1, 'Mata'),
(2, 'THT'),
(3, 'Hati');

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
  `Tgl_Pemeriksaan` date NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`No_Rm`, `No_Pasien`, `Kd_User`, `Diagnosa`, `Keluhan`, `Tgl_Pemeriksaan`, `Ket`) VALUES
('RM01', '2', 0, '<p>awd</p>\r\n', '<p>awd</p>\r\n', '2016-02-17', '<p>awdwd</p>\r\n'),
('RM02', 'PSN04', 2, '', '<p>awd</p>\r\n', '2016-02-17', '<p>awd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbdokter`
--

CREATE TABLE IF NOT EXISTS `tbdokter` (
  `Kd_Dokter` varchar(5) NOT NULL,
  `NmDokter` varchar(30) NOT NULL,
  `TmpLahir` varchar(25) NOT NULL,
  `TglLahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `NoTelp` varchar(13) NOT NULL,
  `Kd_Poli` varchar(2) NOT NULL,
  `Kd_User` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdokter`
--

INSERT INTO `tbdokter` (`Kd_Dokter`, `NmDokter`, `TmpLahir`, `TglLahir`, `Alamat`, `NoTelp`, `Kd_Poli`, `Kd_User`) VALUES
('DR01', 'DR. JUNANDIA', 'smi ', '1998-10-18', 'Jl. Karamat no 2 ', '0856597365694', '1 ', 2),
('DR02', 'DR. RISMAWAN', 'Sukabumi ', '1970-01-01', 'jl ', '002', '3 ', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkunjungan`
--

INSERT INTO `tbkunjungan` (`IdKunjungan`, `TglKunjungan`, `NoPasien`, `KdPoli`, `JamKunjungan`, `No_Antrian`) VALUES
(1, '2016-02-17', 'PSN04', '1', '15:51:56', 1),
(2, '2016-02-23', 'PSN04', '1', '08:05:31', 1),
(3, '2016-02-26', 'PSN04', '1', '10:48:25', 1),
(4, '2016-02-26', 'PSN01', '3', '10:50:56', 2);

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
  `Foto` text NOT NULL,
  `Tgl_Registrasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`NoPasien`, `NmPasien`, `J_Kel`, `Agama`, `Alamat`, `Tmp_Lahir`, `Tgl_Lahir`, `No_Telp`, `Foto`, `Tgl_Registrasi`) VALUES
('PSN01', 'DEA AUDINA', 'P', 'Islam ', 'a ', 'a ', '2016-01-06', '1', 'anim.gif', '2016-01-04'),
('PSN02', 'RISMAWAN', 'L', 'Islam ', 'aa ', 'aa ', '2016-01-05', '00', 'anim.gif', '2016-01-08'),
('PSN03', 'JUNANDIA', 'L', 'Islam  ', 'Jl.Karamat ', 'smi  ', '1998-02-21', '8565973569', '12358286_1198628856820656_119498568_n.jpg', '2016-01-27'),
('PSN04', 'SAHA WAE', 'P', 'Budha', 'indonesia', 'sukabumi', '1970-01-01', '666', 'Screenshot_2.png', '2016-02-21'),
('PSN05', 'RIFKY', 'L', 'Islam', 'a', 'a', '1970-01-01', '080808', 'Koala.jpg', '2016-02-23'),
('PSN06', 'A', 'P', 'Kristen Katolik ', 'a ', 'a ', '1970-01-01', '2', 'Lighthouse.jpg', '2016-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Kd_User`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`Kd_Petugas`);

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
  MODIFY `Kd_User` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `KdPoli` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbkunjungan`
--
ALTER TABLE `tbkunjungan`
  MODIFY `IdKunjungan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
