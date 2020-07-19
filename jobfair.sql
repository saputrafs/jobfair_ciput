-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 09:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'UUS', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `mulai`, `selesai`, `active`) VALUES
(1, 'Jofair umum', '2020-06-08', '2020-08-25', 1),
(2, 'h3h3 job', '2020-06-16', '2020-06-17', 0),
(3, 'kiwil', '2020-06-15', '2020-06-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` int(11) NOT NULL,
  `id_loker` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `hasil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `id_loker`, `id_user`, `cv`, `ktp`, `ijazah`, `sertifikat`, `hasil`) VALUES
(15, 17, 2, '580b585b2edbce24c47b2481.png', '1008465_132060743666119_1583397240_o.jpg', '76321.jpg', '_1_.jpg', 'tolak'),
(16, 17, 3, '84-847632_wheat-vector-black-and-white-wheat-stalk-clipart.png.jpg', '6058239553_31aabce05e_b.jpg', '100.PNG', '76321.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `persyaratan` text NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `kouta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan`, `id_event`, `nama_pekerjaan`, `jenis`, `persyaratan`, `tgl_buka`, `tgl_tutup`, `kouta`) VALUES
(17, 1, 1, 'Ngamen', 'fulltime', '<p>Diskripsi Pekerjaan dan persyaratan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Diskripsi Pekerjaan dan persyaratan</p>\r\n\r\n<p>Diskripsi Pekerjaan dan persyaratan</p>\r\n', '2020-06-03', '2020-06-08', 1),
(18, 2, 1, 'Desainer', 'fulltime', '<p>yang penting bisa desain menguasai corel, photoshop, after effect</p>\r\n', '2020-06-10', '2020-06-13', 21),
(19, 1, 1, 'Teknisi', 'parttime', '<p>Diskripsi Pekerjaan dan persyaratan</p>\r\n\r\n<p>Diskripsi Pekerjaan dan persyaratanDiskripsi Pekerjaan dan persyaratan</p>\r\n\r\n<p>Diskripsi Pekerjaan dan persyaratan</p>\r\n', '2020-06-10', '2020-06-13', 1),
(20, 3, 2, 'Macul', 'parttime', '<p>apa saja yg penting bisa macul tanah</p>\r\n', '2020-06-15', '2020-06-17', 1000),
(21, 3, 3, 'nguli', 'fulltime', '<p>Diskripsi Pekerjaan dan persyarata</p>\r\n\r\n<p>asa</p>\r\n\r\n<p>sda</p>\r\n\r\n<p>sda</p>\r\n\r\n<p>sd</p>\r\n\r\n<p>asdan</p>\r\n', '2020-06-15', '2020-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `nama_p` varchar(40) NOT NULL,
  `no_telp` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `ket` text NOT NULL,
  `logo` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `npwp`, `nama_p`, `no_telp`, `alamat`, `kota`, `ket`, `logo`, `email`, `password`) VALUES
(1, '2016531031', 'CV JAYA ABADIq', '12345654321', 'Mana aja boleh', 'KUDUS', 'Siapa saja yang penting manusia', 'disnaker.png', 'a@gmail.com', 'a'),
(2, '124387205761', 'BURHAN NUDIN', '0816253728', 'Kudus Jl Pramuka No 10', 'JAWA TENGAH', 'Ruko Biru Hadap Selatan', 'car.jpg', 'saputrafirdaus35@yahoo.co.id', 's'),
(3, '123456789', 'CV LEMPOK', '08232675930', 'Dirumah aja', 'JAWA TENGAH', 'Belum ada', '_1_.jpg', 'saputrafirdaus35@yahoo.co.id', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_u` varchar(40) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama_u`, `ttl`, `jekel`, `no_hp`, `ktp`, `email`, `password`) VALUES
(2, '201653103', 'Budi', 'Kudus Gebog', 'Laki-Laki', '0853729854663', '6058239553_31aabce05e_b.jpg', 'a@gmail.com', 'a'),
(3, '11', 'puta', 'aaaaaaaa', 'Laki-Laki', '1111', '2.png', 'a@a.com', 'a'),
(4, '123123', 'saasda', '', 'Laki-Laki', '1231', '', '1@ada.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `id_loker` (`id_loker`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_loker`) REFERENCES `loker` (`id_loker`),
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `loker_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
