-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2021 at 09:59 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `alamat`, `status`) VALUES
('1', 'Deswita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('2', 'Bejo Suloyo', '8376323', 'Laki-laki', 'Pekalongan', '1998-12-22', 'SLTP 2 Pekalongan', 'Sumedang', 'Masih Seleksi'),
('3', 'Slamet', '956354', 'Laki-laki', 'Semarang', '1998-01-06', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('4', 'Ahmad', '123456785', 'Laki-laki', 'Semarang', '1990-12-12', 'SMP Negeri 86 Nusantara', 'Jakarta', 'Masih Seleksi'),
('5', 'Alex', '12345', 'Laki-laki', 'Pemalang', '2021-10-07', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Tidak Diterima'),
('6', 'Dita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('7', 'Dewita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Tidak Diterima'),
('8', 'Bambang Sugiyono', '00065675465675', 'Laki-laki', 'Bandung', '2004-07-15', 'SMP 4 Bandung', 'Bandung, Jawa Barat', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pass` varchar(260) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `type`) VALUES
('1', 'admin', 'admin', 'admin'),
('2', 'siswa', 'siswa', 'siswa'),
('3', 'Denis Listiadi', '12345', 'siswa'),
('4', 'Slamet', 'slamet', 'siswa'),
('5', 'Bejo', 'bejo', 'siswa'),
('6', 'Maikel', 'maikel', 'siswa'),
('7', 'Alex', 'alex', 'siswa'),
('8', 'murid', 'murid', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
