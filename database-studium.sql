-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 05:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `word` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`id`, `username`, `word`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'riansyah', 'rian1641'),
(6, 'skuyliving', 'skulha'),
(7, 'admintutor', 'admintutor'),
(8, 'admintutor', 'admintuor'),
(9, 'riansyah', 'rian1641'),
(10, 'gg@gmail.com', 'rian1641'),
(11, 'rian@gmail.com', 'rian1641'),
(12, 'yofaprsty@gmail.com', 'ypypyp'),
(13, 'try@gmail.com', '12345678'),
(14, 'gg@gmail.com', 'rian1641'),
(15, 'iwaktahu@gmail.com', 'iwaktahu'),
(16, 'yofaprsty@gmail.com', 'ekayofa'),
(17, 'yofa@gmail.com', 'a'),
(18, 'anjer@gmail.com', 'anjer');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `gambar`, `judul`, `isi`) VALUES
(1, 'riansyah', 'ig.png', 'sssss', 'rahasia'),
(2, 'riansyah', 'ig.png', 'sssss', 'rahasia'),
(3, 'riansyah', 'ig.png', 'sssss', 'rahasia'),
(8, 'asd', 'ig.png', 'cekjudul', 'rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `nomor` bigint(20) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `Nama`, `nomor`, `nominal`, `keterangan`, `bukti`) VALUES
(3, 'muhammad eka dasono', 1000000, 0, 'untuk siswa kurang mampu ', 'background-rumah.jpg'),
(4, 'yofa', 10000, 0, 'belajar blokk', 'background-ganteng2.jpg'),
(5, 'jijh', 123, 0, 'SDA', 'background-tembok.jpg'),
(6, 'jjj', 99999, 0, '', 'background kantor.jpg'),
(7, 'jjj', 99999, 0, 'hjvhjhv', 'background kantor.jpg'),
(8, 'hjvhjnb', 123124, 0, 'asdsa', 'Screenshot (194).png');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `gambar1` varchar(500) NOT NULL,
  `gambar2` varchar(500) NOT NULL,
  `gambar3` varchar(500) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kualitas` varchar(10) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `harga` int(200) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `genre`, `judul`, `kualitas`, `alamat`, `lokasi`, `harga`, `kode`, `keterangan`) VALUES
(41, 'fis1.jpg', 'fis2.jpg', 'fis4.jpg', '', 'Fisika', 'fisika osn SMA', 'B', 'jln. kalimantan, GKB 1 ,Manyar ,Gresik', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.642846008121!2d112.6372796138506!3d-7.167221072314583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8006bc36b1f31%3A0x32767629be4e0a01!2sJl.%20Sunan%20Giri%20Gg.%20III%20A%2017%2C%20Kesemen%2C%20Sukorame%2C%20Kec.%20Gresik%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061121!5e0!3m2!1sen!2sid!4v1634370949729!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 25000, 'fis-azz1', 'terdapat halaman yang sobek , keluaran tahun 2015 , belum ada coretan , jumlah halaman 385 '),
(42, 'fix1.jpg', 'fix3.jpg', 'fix4.jpg', '', 'Kimia', 'kimia airlangga kelas 10', 'A', 'Jl. Sunan Giri Gg. III A 17, Kesemen, Sukorame, Kec. Gresik, Kabupaten Gresik, Jawa Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348.6066698966244!2d112.63918434115979!3d-7.166324506098098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800695d1c57c3%3A0x2200efa18a52f9fa!2sToko%20Ima!5e0!3m2!1sen!2sid!4v1634371153608!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 40000, 'kim-UD12', 'masih bagus , buku tahun 2019 , halaman 340 , kertas bagus , ada coretan sedikit.'),
(43, 'mtk1.jpg', 'mtk3.jpg', 'mtk4.jpg', '', 'Matematika', 'matematika airlangga ,kelas 12', 'B', 'Toko Ima Jl. Sunan Giri No.8, Putat Luar, Sukorame, Kec. Gresik, Kabupaten Gresik, Jawa Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.6627563399674!2d112.63831652913639!3d-7.166279569047866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8011dc33c8d8d%3A0x3d9611309390969c!2sKONTER%20ICON%20ACCESORIES!5e0!3m2!1sen!2sid!4v1634371349066!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 30000, 'mtk-suk13', 'masih bagus , ada coretan sedikit , buku tahun 2020 ,dan banyak halaman 234 , buatan airlangga'),
(44, 'mtkk1.jpg', 'mtkk3.jpg', 'mtkk4.jpg', '', 'Matematika', 'matematika UTBK ', 'B', 'aranggondang, Yosowilangun, Manyar, Gresik Regency, ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.42516065611815!2d112.61227530734024!3d-7.148813299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77ff1005ce678b%3A0xe2ca9960dd53bea6!2sGKB%20Convex!5e0!3m2!1sen!2sid!4v1634371523017!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 50000, 'mtk-UT13', 'buku tahun 2020 , materi kelas 10 - 12 , banyak halaman 410 buatan Grasindo ');

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor` bigint(25) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `pesanan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`id`, `nama`, `nomor`, `alamat`, `kode`, `pesanan`) VALUES
(1, 'muhammad febriansyah', 82144445148, 'jln manuggal 2 ds penjangganan rt 6 rw 1', 'QW123SD', ''),
(6, 'muhammad febriansyah', 82144445768, 'jln manuggal 2 ds penjangganan rt 6 rw 1,manyar ,gresik', 'bin252', 'background-tembok.jpg'),
(7, 'Sesta  cahya utama', 87546781234, 'jalan manuggal 2 desa Penjangganan RT 6 RW 01 , Manyar ,Gresik ', 'bio121', 'combinasi.jpg'),
(8, 'yofa', 81615979096, 'gkb', 'mtk-eyp', 'background-rumah.jpg'),
(9, 'test beli', 82731822382, 'jln. kalimantan, GKB 1 ,Manyar ,Gresik', 'bin_ryn12', 'Screenshot (194).png');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--
-- Error reading structure for table login.pembayaran: #1932 - Table 'login.pembayaran' doesn't exist in engine
-- Error reading data for table login.pembayaran: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `login`.`pembayaran`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran1`
--

CREATE TABLE `pembayaran1` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nomorhp` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pemesanan` varchar(50) NOT NULL,
  `orang` varchar(50) NOT NULL,
  `harga` bigint(100) NOT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran1`
--

INSERT INTO `pembayaran1` (`id`, `nama`, `nomorhp`, `email`, `bukti`, `tanggal`, `pemesanan`, `orang`, `harga`, `mapel`) VALUES
(58, 'test bayar', 2147483647, 'try@gmail.com', 'Screenshot (192).png', '2021-10-22', '1', '2 orang', 100000, 'Matematika'),
(59, 'try test 2', 2147483647, 'gg@gmail.com', 'Screenshot (602).png', '2021-10-22', '2', '5 orang', 300000, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran2`
--

CREATE TABLE `pembayaran2` (
  `id` int(255) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `komen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran2`
--

INSERT INTO `pembayaran2` (`id`, `nama`, `kelas`, `komen`) VALUES
(6, 'pelajar_12', '12', 'bimbel studium keren , modul praktis , dan penutornya sangat kece bet dah!!!'),
(7, 'rian', '10', 'kereeen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran1`
--
ALTER TABLE `pembayaran1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bukti` (`bukti`);

--
-- Indexes for table `pembayaran2`
--
ALTER TABLE `pembayaran2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran1`
--
ALTER TABLE `pembayaran1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pembayaran2`
--
ALTER TABLE `pembayaran2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
