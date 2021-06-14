-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_megacom`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_produk`
--

CREATE TABLE `dat_produk` (
  `id` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `kode_item` varchar(30) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_sub_jenis` int(11) DEFAULT NULL,
  `id_merk` int(11) NOT NULL,
  `rak` varchar(10) NOT NULL,
  `status_jual` int(11) NOT NULL,
  `stok_minimum` int(11) NOT NULL,
  `ket` text DEFAULT NULL,
  `berat` int(11) NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `pot_umum` int(11) NOT NULL,
  `pot_reseller` int(11) NOT NULL,
  `pot_dealer` int(11) NOT NULL,
  `link_share` text DEFAULT NULL,
  `id_varian` int(11) NOT NULL,
  `kondisi_barang` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `deskripsi_ecommerce` text NOT NULL,
  `id_cover_img` int(11) NOT NULL,
  `cover_img` varchar(255) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `satuan_dasar` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_produk`
--

INSERT INTO `dat_produk` (`id`, `tipe`, `kode_item`, `nama_item`, `id_jenis`, `id_sub_jenis`, `id_merk`, `rak`, `status_jual`, `stok_minimum`, `ket`, `berat`, `panjang`, `lebar`, `tinggi`, `pot_umum`, `pot_reseller`, `pot_dealer`, `link_share`, `id_varian`, `kondisi_barang`, `id_toko`, `deskripsi_ecommerce`, `id_cover_img`, `cover_img`, `stok`, `satuan_dasar`, `is_active`) VALUES
(48, 0, '654324', 'ASUS Vivobook', 0, NULL, 0, '', 20, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 400, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-1.jpg', 20, 3000000, 0),
(49, 0, '5287398', 'ASUS ROG', 0, NULL, 0, '', 26, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 450, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-2.jpg', 15, 6000000, 0),
(52, 0, '3526138', 'Lenovo Yoga', 0, NULL, 0, '', 8, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 670, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-3.jpg', 16, 10000000, 0),
(53, 0, '9283653', 'ASUS Laptop E410MA', 0, NULL, 0, '', 5, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 800, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-4.jpg', 5, 6000000, 0),
(54, 0, '9378274', 'ASUS X200MA', 0, NULL, 0, '', 3, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 800, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-5.jpg', 0, 6666000, 0),
(55, 0, '3531782', 'Lenovo Ideapad 320 14', 0, NULL, 0, '', 2, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 900, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-6.jpg', 2, 3800000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_produk`
--
ALTER TABLE `dat_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_item` (`kode_item`),
  ADD KEY `id_toko` (`id_toko`),
  ADD KEY `id_cover_img` (`id_cover_img`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_sub_jenis` (`id_sub_jenis`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_varian` (`id_varian`),
  ADD KEY `is_active` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_produk`
--
ALTER TABLE `dat_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
