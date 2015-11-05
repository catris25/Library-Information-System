-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 10:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nim_nip` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `pekerjaan` varchar(9) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  PRIMARY KEY (`id_anggota`),
  UNIQUE KEY `nim_nip` (`nim_nip`),
  KEY `nim_nip_2` (`nim_nip`),
  KEY `nim_nip_3` (`nim_nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `nim_nip`, `jurusan`, `fakultas`, `pekerjaan`, `jenis_kelamin`, `tgl_masuk`) VALUES
(106, 'Mickey Mouse', 'M01234', 'Agrobisnis', 'F. Pertanian', 'Mahasiswa', 'L', '2015-06-17 15:07:06'),
(107, 'Minnie Mouse', 'M01212', 'Matematika', 'F. MIPA', 'Mahasiswa', 'P', '2015-06-17 15:07:36'),
(108, 'Spongebob Squarepants', 'F01234', 'Teknik Sipil', 'F. Teknik', 'Mahasiswa', 'L', '2015-06-17 15:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `deskripsi_fisik` varchar(100) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `subyek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_buku`),
  KEY `isbn` (`isbn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `deskripsi_fisik`, `isbn`, `subyek`) VALUES
(251, 'The Lord of the Rings: The Fellowship of the Ring', 'J. R. R. Tolkien', 'Gramedia Pustaka Utama', '2013', '512 hlm, 23 cm, cetakan 10', '9799792288322', 'fiksi'),
(252, 'Mahasiswa Mengejar Deadline', 'Mahasiswa', 'Universitas Antah Berantah Press', '2019', 'belum dicetak, masih dalam softcopy', '9791234567899', 'komedi');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kembali` date DEFAULT NULL,
  `id_buku` varchar(13) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `id_petugas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_anggota` (`id_anggota`),
  KEY `id_buku` (`id_buku`),
  KEY `id_petugas` (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `kembali`, `id_buku`, `id_anggota`, `id_petugas`) VALUES
(35, '2015-06-02', '2015-06-09', '2015-06-17', '9799792288322', 'F01234', 'M0513019'),
(36, '2015-06-09', '2015-06-16', NULL, '9791234567899', 'M01234', 'M0513019');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `nip`, `jenis_kelamin`, `username`, `password`) VALUES
(10101, 'Fembi Rekrisna Grandea Putra', 'M0513019', 'L', 'fembi', 'fembi'),
(20202, 'Lia Ristiana', 'M0513027', 'P', 'lia', 'lia'),
(301301, 'Shafira Audreyna', 'M0513042', 'P', 'fira', 'fira');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `id_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`nim_nip`),
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`isbn`),
  ADD CONSTRAINT `id_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
