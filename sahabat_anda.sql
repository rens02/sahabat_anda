-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2022 at 12:55 PM
-- Server version: 5.7.40-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `sahabat_anda`
--

CREATE TABLE `sahabat_anda` (
  `kode` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `harga` int(9) NOT NULL,
  `stock` int(100) NOT NULL,
  `perusahaan` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sahabat_anda`
--

INSERT INTO `sahabat_anda` (`kode`, `nama`, `jenis`, `harga`, `stock`, `perusahaan`, `gambar`) VALUES
(112, 'Mie Goreng Rendang', 'Makanan', 3500, 77, 'Indofood', 'mirendang.jpg'),
(113, 'Mie Goreng pedas', 'Makanan', 3500, 77, 'Indofood', 'mipedas.jpg'),
(114, 'Mie Goreng jumbo', 'Makanan', 3500, 85, 'Indofood', 'mijumbo.jpg'),
(121, 'Mie kuah ayam bawang', 'Makanan', 3500, 41, 'Indofood', 'mikabw.jpg'),
(122, 'Mie kuah Soto', 'Makanan', 3500, 21, 'Indofood', 'miksoto.jpg'),
(123, 'Mie kuah kari ayam', 'Makanan', 3500, 23, 'Indofood', 'mikabw.jpg'),
(124, 'Mie kuah ayam spesial', 'Makanan', 3500, 41, 'Indofood', 'mikas.jpg'),
(201, 'Kopi Golda', 'Minuman', 2500, 121, 'Wingscorp', 'golda.jpg'),
(202, 'Kopi Kapal Api', 'Minuman', 4500, 77, 'Kapal Api', 'kapalapi.jpg'),
(211, 'Larutan Penyegar Cap Badak Rasa Leci', 'Minuman', 5300, 121, 'Sinde', 'badleci.jpg'),
(212, 'Larutan Penyegar Cap Badak Rasa Anggur', 'Minuman', 6200, 73, 'Sinde', 'badagr.jpg'),
(213, 'Larutan Penyegar Cap Badak Rasa Sirsak', 'Minuman', 6500, 22, 'Sinde', 'badsir.jpg'),
(214, 'Larutan Penyegar Cap Badak Rasa Lemon', 'Minuman', 7100, 11, 'Sinde', 'badlem.jpg'),
(221, 'pocari saset', 'Minuman', 2500, 101, 'Otsuka', 'pocsaset.jpg'),
(222, 'pocari botol kecil', 'Minuman', 5500, 64, 'Otsuka', 'pockecil.jpg'),
(223, 'pocari botol besar', 'Minuman', 10000, 171, 'Otsuka', 'pocbesar.jpg'),
(301, 'Insto', 'Obat', 19700, 59, 'Pharma Health Care', 'insto.jpg'),
(302, 'Promag', 'Obat', 14200, 73, 'Kalbe', 'promag.jpg'),
(311, 'Panadol Merah', 'Obat', 4300, 73, 'GSK', 'panamera.jpg'),
(312, 'Panadol Biru', 'Obat', 6500, 12, 'GSK', 'panabiru.jpg'),
(313, 'Panadol Extra', 'Obat', 6100, 79, 'GSK', 'panaextra.jpg'),
(314, 'Panadol Flu dan batuk', 'Obat', 7200, 85, 'GSK', 'panacom.jpg'),
(321, 'OBH Batuk Berdahak', 'Obat', 11300, 81, 'Combiphar', 'obhbb.jpg'),
(322, 'OBH Combi', 'Obat', 17400, 95, 'Combiphar', 'obhc.jpg'),
(323, 'OBH Combi Kids', 'Obat', 2200, 33, 'Combiphar', 'obhck.jpg'),
(401, 'Spidol Hitam', 'Perlengkapan', 6100, 18, 'Snowman', 'spidol.jpg'),
(402, 'Penggaris', 'Perlengkapan', 16700, 31, 'Butterfly', 'penggaris.jpg'),
(403, 'Mug Putih', 'Perlengkapan', 7400, 6, '-', 'mug.jpg'),
(404, 'Tempat Pensil', 'Perlengkapan', 33000, 23, '-', 'tpensil.jpg'),
(405, 'Kabel Data', 'Perlengkapan', 64100, 37, 'Baseus', 'kabel.jpg'),
(406, 'Sendok Plastik', 'Perlengkapan', 11100, 48, '-', 'sendok.jpg'),
(407, 'Pulpen', 'Perlengkapan', 2600, 22, 'Standart', 'pulpen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sahabat_anda`
--
ALTER TABLE `sahabat_anda`
  ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
