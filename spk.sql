-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 07:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `L` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id_adm`, `username`, `nama`, `password`, `L`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'adm'),
(3, 'admin5', 'admin5', '26a91342190d515231d7238b0c5438e1', '');

-- --------------------------------------------------------

--
-- Table structure for table `banksoal`
--

CREATE TABLE `banksoal` (
  `idsoal` int(11) NOT NULL,
  `nama_peminatan` text NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban_benar` text NOT NULL,
  `jawaban_a` text NOT NULL,
  `jawaban_b` text NOT NULL,
  `jawaban_c` text NOT NULL,
  `jawaban_d` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banksoal`
--

INSERT INTO `banksoal` (`idsoal`, `nama_peminatan`, `pertanyaan`, `jawaban_benar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`) VALUES
(2, 'Sistem Informasi', 'karakter sistem yang mempunyai ketergantungan dengan bagian lainnya adalah ...', 'B', 'organisasi', 'interdependensi', 'integrasi', 'tujuan pokok'),
(3, 'Sistem Informasi', 'Proses yang digunakan oleh analisis sistem untuk mengembangkan sistem informasi dan membangun sistem disebut ...', 'C', 'SDCL', 'SCL', 'SDLC', 'SLC'),
(4, 'Sistem Informasi', 'Salah satu sumber daya bisnis yang vital yang berguna dallam pengambilan keputusan baik bagi pihak internal maupun eksternal di sebut ?', 'A', 'Informasi', 'Sistem', 'SDM', 'SIA'),
(1, 'Sistem Informasi', 'Sekumpulan objek atau elemen-elemen yang saling berinteraksi satu sama lain untuk pencapaian suatu tujuan tertentu di sebut ?', 'C', 'analisa sistem', 'perancangan sistem', 'sistem', 'komponen sistem'),
(5, 'Sistem Informasi', 'Sebuah rangkaian prosedur formal dimana data dikumpulkan, di proses menjadi informasi, dan di distribusikan kepada para pemakai di sebut ...', 'C', 'SIA', 'Informasi', 'Sistem Informasi', 'sistem'),
(6, 'Teknik Informatika', 'Suatu bagian komputer yang berfungsi sebagai pusat arus listrik adalah', 'C', 'Motherboard', 'Processor', 'Power Supply', 'ALU'),
(10, 'Teknik Informatika', 'Salah satu cara untuk masuk ke dalam BIOS sebuah PC adalah dengan menekan tombol ', 'A', 'Del', 'BIOS', 'Esc', 'Ctrl +lt'),
(7, 'Teknik Informatika', 'Berikut ini yang bukan termasuk hardware sebuah komputer adalah', 'D', 'Matherboard', 'Processor', 'Power Supply', 'Windows'),
(8, 'Teknik Informatika', 'Salah satu penyebab konsletnya power supply yang mengakibatkan power supply meledak adalah ?', 'D', 'Shut down', 'Dumping', 'Swich Usser', 'Hank'),
(9, 'Teknik Informatika', 'Pada saat menghidupkan komputer, apa yang harus dilakukan agar komputer dapat menyala', 'C', 'Tekan Tombol power pada monitor', 'Pasang arus listrik', 'Tekan tombol power CPU', 'Tekan reset'),
(11, 'Psikotes', 'suatu seri 0-2-4-6-8-10 seri selanjutnya', 'B', '11', '12', '15', '20'),
(12, 'Psikotes', 'suatu seri 97-87-78-70-63 seri selanjutnya', 'C', '59', '58', '57', '56'),
(13, 'Psikotes', 'suatu seri 1-3-6-10-15-21 seri selanjutnya', 'A', '28', '25', '23', '22'),
(14, 'Psikotes', 'Seekor kuda mempunyai kesamaan yang terbanyak dengan seekor ..', 'D', 'Kucing', 'Bajing', 'Keledai', 'Lembu'),
(15, 'Psikotes', 'Lawan kata "harapan"', 'B', 'Duka', 'Putus Asa', 'Sengsara', 'Cinta'),
(27, 'Manajemen Informatika', 'Ada berapa aplikasi siklus produksi aktivitas dasar', 'C', '2', '3', '4', '5'),
(28, 'Manajemen Informatika', 'Apa tujuan perancangan produksi ', 'A', 'Untuk merancang sebuah produk yang memenuhi permintaan dalam hal kualitas', 'Untuk mencari data yang ada di dalam produk', 'Untuk mengirim data produk', 'Jawaban A dan B salah'),
(29, 'Manajemen Informatika', 'Sebutkan entry pesanan penjualan', 'A', 'Mengambil pesanan dari penjual', 'Mengirim pesanan', 'Mengirim penjualan', 'jawaban A, B, dan C salah');

-- --------------------------------------------------------

--
-- Table structure for table `cmhs`
--

CREATE TABLE `cmhs` (
  `id` int(11) NOT NULL,
  `idmahasiswabaru_` varchar(9) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmhs`
--

INSERT INTO `cmhs` (`id`, `idmahasiswabaru_`, `nama_lengkap`, `email`, `password`) VALUES
(6, 'STMIK0006', 'Kartika Dewi Lestara', 'kartika@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'STMIK0007', 'elsa', 'elsa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'STMIK0001', 'Yesi Nursoliha', 'yesi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'STMIK0010', 'Yati Haryati', 'yati@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'STMIK0009', 'ela', 'ela@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'STMIK0016', 'Annisa Aina N', 'annisa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'STMIK0023', 'tes', 'tes@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(25, 'STMIK0024', 'uuu', 'uuu', 'c70fd4260c9eb90bc0ba9d047c068eb8');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswabaru`
--

CREATE TABLE `mahasiswabaru` (
  `idmahasiswabaru` int(11) NOT NULL,
  `nama_mahasiswabaru` text NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nilai_mtk` float NOT NULL,
  `nilai_bindonesia` float NOT NULL,
  `nilai_binggris` float NOT NULL,
  `nilai_psikotes` varchar(3) NOT NULL,
  `nilai_peminatan` varchar(3) NOT NULL,
  `nilai_TI` text NOT NULL,
  `nilai_SI` text NOT NULL,
  `nilai_MI` text NOT NULL,
  `status` text NOT NULL,
  `minat` text NOT NULL,
  `idmahasiswabaru_` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`idmahasiswabaru`, `nama_mahasiswabaru`, `asal_sekolah`, `nilai_mtk`, `nilai_bindonesia`, `nilai_binggris`, `nilai_psikotes`, `nilai_peminatan`, `nilai_TI`, `nilai_SI`, `nilai_MI`, `status`, `minat`, `idmahasiswabaru_`) VALUES
(6, 'Kartika Dewi Lestara', 'SMA Negeri Darmaraja', 80, 85, 80, '80', '60', '100', '20', '0', 'Done', 'Sistem Informasi', 'STMIK0006'),
(5, 'Yesi Nursoliha', 'SMK Negeri 2 Sumedang', 70, 77, 75, '80', '50', '20', '80', '0', 'Done', 'Teknik Informatika', 'STMIK0001'),
(7, 'elsa', 'smk', 90, 80, 85, '33', '27', '33', '20', '0', 'Done', 'Teknik Informatika', 'STMIK0007'),
(15, 'Yati Haryati', 'SMK YPK Sumedang', 80, 75, 80, '80', '54', '100', '20', '33', 'Done', 'Sistem Informasi', 'STMIK0010'),
(9, 'ela', 'smkn 2 sumedang', 90, 70, 90, '20', '20', '20', '20', '0', 'Done', 'Sistem Informasi', 'STMIK0009'),
(21, 'Annisa Aina N', 'MA Tanjungsari ', 78, 70, 80, '80', '23', '0', '20', '67', 'Done', 'Manajemen Informatika', 'STMIK0016'),
(25, 'uuu', 'uuu', 76, 70, 76, '20', '31', '20', '20', '67', 'Done', 'Teknik Informatika', 'STMIK0024'),
(23, 'tes', 'tes', 0, 0, 0, '20', '', '', '', '', 'Done', 'Teknik Informatika', 'STMIK0023');

-- --------------------------------------------------------

--
-- Table structure for table `peminatan`
--

CREATE TABLE `peminatan` (
  `idpeminatan` int(11) NOT NULL,
  `nama_peminatan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminatan`
--

INSERT INTO `peminatan` (`idpeminatan`, `nama_peminatan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi'),
(3, 'Manajemen Informatika'),
(4, 'Psikotes');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_peminatan`
--

CREATE TABLE `ujian_peminatan` (
  `id` int(11) NOT NULL,
  `id_peserta` text NOT NULL,
  `kategori_soal_peminatan` text NOT NULL,
  `jawaban_peminatan` text NOT NULL,
  `nilai` text NOT NULL,
  `bobot` text NOT NULL,
  `kategori_soal` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian_psikotes`
--

CREATE TABLE `ujian_psikotes` (
  `id` int(11) NOT NULL,
  `id_peserta` text NOT NULL,
  `kode_soal_psikotes` text NOT NULL,
  `jawaban_psikotes` text NOT NULL,
  `nilai` text NOT NULL,
  `bobot` text NOT NULL,
  `kategori_soal` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `banksoal`
--
ALTER TABLE `banksoal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `cmhs`
--
ALTER TABLE `cmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  ADD PRIMARY KEY (`idmahasiswabaru`);

--
-- Indexes for table `peminatan`
--
ALTER TABLE `peminatan`
  ADD PRIMARY KEY (`idpeminatan`);

--
-- Indexes for table `ujian_peminatan`
--
ALTER TABLE `ujian_peminatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian_psikotes`
--
ALTER TABLE `ujian_psikotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banksoal`
--
ALTER TABLE `banksoal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `cmhs`
--
ALTER TABLE `cmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  MODIFY `idmahasiswabaru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `peminatan`
--
ALTER TABLE `peminatan`
  MODIFY `idpeminatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ujian_peminatan`
--
ALTER TABLE `ujian_peminatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
--
-- AUTO_INCREMENT for table `ujian_psikotes`
--
ALTER TABLE `ujian_psikotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
