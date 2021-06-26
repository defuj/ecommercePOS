-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 02:52 PM
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
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `user_id`, `alamat`, `provinsi`, `kota`, `kecamatan`, `desa`, `kode_pos`, `is_active`) VALUES
(16, 7, 'Dusun Citembong Girang, RT01/RW03, Ds.Cikeusi, Kec.Daramaraja, Kab.Sumedang', 'Jawa Barat', 'Sumedang', 'Cibugel', 'Ciputat', 45372, 1),
(17, 7, 'Perum pesona gading blok E4 no 21, RT003/RW016, Desa Wanajaya, Kec Cibitung, Kab Bekasi, Jawa Barat', 'Jawa Barat', 'Sumedang', 'Cikarang', 'Cibeureum', 45372, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dat_produk`
--

CREATE TABLE `dat_produk` (
  `id` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `kode_item` varchar(30) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_sub_jenis` int(11) DEFAULT NULL,
  `id_merk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
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

INSERT INTO `dat_produk` (`id`, `tipe`, `kode_item`, `nama_item`, `slug`, `id_jenis`, `id_sub_jenis`, `id_merk`, `id_kategori`, `rak`, `status_jual`, `stok_minimum`, `ket`, `berat`, `panjang`, `lebar`, `tinggi`, `pot_umum`, `pot_reseller`, `pot_dealer`, `link_share`, `id_varian`, `kondisi_barang`, `id_toko`, `deskripsi_ecommerce`, `id_cover_img`, `cover_img`, `stok`, `satuan_dasar`, `is_active`) VALUES
(48, 0, '654324', 'ASUS Vivobook', 'asus-vivobook', 0, NULL, 0, 1, '', 20, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 400, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-1.jpg', 20, 3000000, 0),
(49, 0, '5287398', 'ASUS ROG', 'asus-rog', 0, NULL, 0, 1, '', 26, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 450, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-2.jpg', 15, 6000000, 0),
(52, 0, '3526138', 'Lenovo Yoga', 'lenovo-yoga', 0, NULL, 0, 1, '', 8, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 670, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-3.jpg', 16, 10000000, 0),
(53, 0, '9283653', 'ASUS Laptop E410MA', 'asus-laptop-e410ma', 0, NULL, 0, 1, '', 5, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 800, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-4.jpg', 5, 6000000, 0),
(54, 0, '9378274', 'ASUS X200MA', 'asus-x200ma', 0, NULL, 0, 1, '', 3, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 800, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-5.jpg', 0, 6666000, 0),
(55, 0, '3531782', 'Lenovo Ideapad 320 14', 'lenovo-ideapad-320-14', 0, NULL, 0, 1, '', 2, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 900, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 0, 'card-6.jpg', 2, 3800000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'notebook/laptop'),
(2, 'perangkat pc'),
(3, 'pc'),
(4, 'lcd'),
(5, 'aksesoris'),
(6, 'ups'),
(7, 'printer'),
(8, 'storage'),
(9, 'networking'),
(10, 'proyektor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `no_telp` varchar(13) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','lainnya') DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `image`, `no_telp`, `tgl_lahir`, `jenis_kelamin`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Andi Muhyi Mayapada', 'Prommpd830', 'andimayapada04@gmail.com', 'user.png', '085524569631', '2021-06-10', 'laki-laki', '$2y$10$Q49tPCHuHPmHPaRwPI3HVesM9.p81U69ny0ZMt6VpyefmsKkinpv2', 2, 1, 1624359785),
(7, 'Andi Muhyi Mayapada', 'prommpd830', 'proandimmpd327@gmail.com', 'user.png', '08552456963', '2003-07-18', 'laki-laki', '$2y$10$v275ZqbjwTUulr9ieDbieebIN2AcsVBR9HtyRY8MSl731JAIDUxgm', 2, 1, 1624359846);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD KEY `is_active` (`is_active`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dat_produk`
--
ALTER TABLE `dat_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
