-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 05:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_siperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `pengarang` varchar(191) NOT NULL,
  `penerbit` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fb_user`
--

CREATE TABLE `tb_fb_user` (
  `fb_id` varchar(25) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fb_user`
--

INSERT INTO `tb_fb_user` (`fb_id`, `fullname`, `email`, `picture`) VALUES
('1135810060272385', 'Alvian Avis', 'progamers5567@gmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1135810060272385&height=200&ext=1626662994&hash=AeRIhRy71_-hwSNs6Pw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_google_user`
--

CREATE TABLE `tb_google_user` (
  `google_id` varchar(25) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_google_user`
--

INSERT INTO `tb_google_user` (`google_id`, `fullname`, `email`, `picture`) VALUES
('109766920699834431555', 'Avis Alvian', 'avisalvian44@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14Gi04YZByDJHvlY0uIVrS1JljzNCAS76eAUEaXb31A=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nrp_mhs` varchar(10) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nrp`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_fb_user`
--
ALTER TABLE `tb_fb_user`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `tb_google_user`
--
ALTER TABLE `tb_google_user`
  ADD PRIMARY KEY (`google_id`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `FK_kode_buku` (`kode_buku`),
  ADD KEY `FK_nrp_mhs` (`nrp_mhs`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `FK_kode_buku` FOREIGN KEY (`kode_buku`) REFERENCES `tb_buku` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_nrp_mhs` FOREIGN KEY (`nrp_mhs`) REFERENCES `tb_anggota` (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
