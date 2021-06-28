-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 02:27 PM
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
(17, 7, 'Perum pesona gading blok E4 no 21, RT003/RW016, Desa Wanajaya, Kec Cibitung, Kab Bekasi, Jawa Barat', 'Jawa Barat', 'Sumedang', 'Cikarang', 'Cibeureum', 45372, 0),
(20, 6, 'Dusun Citembong Girang, RT01/RW03, Ds.Cikeusi, Kec.Daramaraja, Kab.Sumedang', 'Jawa Barat', 'Sumedang', 'Darmaraja', 'Ciputat', 45372, 1),
(25, 9, 'Dusun Citembong Girang, RT01/RW03, Ds.Cikeusi, Kec.Daramaraja, Kab.Sumedang', 'Jawa Timur', 'Sumedang', 'Darmaking', 'Cipulang', 45371, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_img_produk`
--

CREATE TABLE `dat_img_produk` (
  `id` bigint(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_img_produk`
--

INSERT INTO `dat_img_produk` (`id`, `id_produk`, `nama_file`) VALUES
(1, 2, 'kabel-belden.jpg'),
(2, 3, 'dell-20.jpg'),
(3, 4, 'printer-epson.jpg'),
(4, 5, 'lenovo-112.jpg'),
(5, 5, 'card-1.jpg'),
(6, 5, 'card-2.jpg'),
(7, 5, 'card-3.jpg'),
(8, 5, 'card-4.jpg'),
(9, 5, 'card-5.jpg'),
(10, 5, 'card-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dat_item_penjualan`
--

CREATE TABLE `dat_item_penjualan` (
  `id` bigint(20) NOT NULL,
  `id_master_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `nama_item` text DEFAULT NULL,
  `kode_item` varchar(30) DEFAULT NULL,
  `nama_satuan` varchar(15) DEFAULT NULL,
  `harga` double NOT NULL,
  `diskon` int(11) NOT NULL,
  `tipe_diskon` varchar(15) NOT NULL,
  `pot_member` int(11) NOT NULL,
  `harga_akhir` double NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `hpp` double NOT NULL,
  `time_add_to_cart` datetime NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_item_penjualan`
--

INSERT INTO `dat_item_penjualan` (`id`, `id_master_penjualan`, `id_produk`, `id_satuan`, `id_toko`, `kode_transaksi`, `nama_item`, `kode_item`, `nama_satuan`, `harga`, `diskon`, `tipe_diskon`, `pot_member`, `harga_akhir`, `qty`, `total`, `hpp`, `time_add_to_cart`, `creator_id`) VALUES
(13, 27, 3, 10, 1, 'PNJ-UTM-00002', 'DELL 20INCH', 'MONITOR', 'pcs', 400000, 0, 'no_diskon', 0, 400000, 1, 400000, 350000, '2021-06-25 11:06:57', 1),
(14, 28, 4, 10, 1, 'PNJ-UTM-00003', 'PRINTER EPSON', 'prtr0001', 'pcs', 750000, 0, 'no_diskon', 0, 750000, 1, 750000, 600000, '2021-06-25 12:41:49', 1),
(15, 29, 3, 10, 1, 'PNJ-UTM-00004', 'DELL 20INCH', 'MONITOR', 'pcs', 400000, 0, 'no_diskon', 0, 400000, 2, 800000, 350000, '2021-06-27 17:05:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_konversi_satuan`
--

CREATE TABLE `dat_konversi_satuan` (
  `id` bigint(20) NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `barcode` text DEFAULT NULL,
  `satuan` int(11) NOT NULL,
  `konversi` int(11) NOT NULL,
  `harga_pokok` double NOT NULL,
  `harga_jual` double NOT NULL,
  `diskon` double NOT NULL DEFAULT 0,
  `harga_akhir` double NOT NULL,
  `tipe_diskon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_konversi_satuan`
--

INSERT INTO `dat_konversi_satuan` (`id`, `id_produk`, `barcode`, `satuan`, `konversi`, `harga_pokok`, `harga_jual`, `diskon`, `harga_akhir`, `tipe_diskon`) VALUES
(1, 2, '89189189', 13, 1, 4000, 6000, 10, 5400, 'persen'),
(3, 3, '33335', 10, 1, 350000, 400000, 0, 400000, 'no_diskon'),
(4, 4, '12345', 10, 1, 600000, 750000, 0, 750000, 'no_diskon'),
(5, 2, '190190', 14, 305, 800000, 1000000, 0, 1000000, 'no_diskon'),
(6, 5, '1123123', 10, 1, 30000, 50000, 10000, 670000, 'nominal'),
(7, 5, '', 12, 5, 140000, 200000, 0, 200000, 'no_diskon'),
(8, 5, '', 11, 1, 0, 0, 0, 0, 'no_diskon'),
(9, 5, '', 13, 1, 0, 0, 0, 0, 'no_diskon'),
(10, 5, '', 14, 1, 0, 0, 0, 0, 'no_diskon'),
(11, 4, '', 11, 1, 0, 0, 0, 0, 'no_diskon'),
(12, 4, '', 12, 1, 0, 0, 0, 0, 'no_diskon');

-- --------------------------------------------------------

--
-- Table structure for table `dat_level_user`
--

CREATE TABLE `dat_level_user` (
  `id` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_level_user`
--

INSERT INTO `dat_level_user` (`id`, `level`) VALUES
(1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `dat_master_penjualan`
--

CREATE TABLE `dat_master_penjualan` (
  `id` bigint(20) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `waktu_trx` datetime NOT NULL,
  `id_sales` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `status_trx` int(11) NOT NULL,
  `total` double NOT NULL,
  `potongan` double DEFAULT NULL,
  `ppn` int(11) NOT NULL,
  `total_akhir` double NOT NULL,
  `cash` double NOT NULL,
  `kembali` double DEFAULT NULL,
  `metode_pembayaran` int(11) NOT NULL,
  `merchant` varchar(50) DEFAULT NULL,
  `no_ref` text DEFAULT NULL,
  `sisa_kredit` double DEFAULT NULL,
  `tgl_jatuh_tempo` text DEFAULT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_master_penjualan`
--

INSERT INTO `dat_master_penjualan` (`id`, `id_toko`, `kode_transaksi`, `waktu_trx`, `id_sales`, `id_pelanggan`, `status_trx`, `total`, `potongan`, `ppn`, `total_akhir`, `cash`, `kembali`, `metode_pembayaran`, `merchant`, `no_ref`, `sisa_kredit`, `tgl_jatuh_tempo`, `creator_id`) VALUES
(27, 1, 'PNJ-UTM-00002', '2021-06-25 11:07:28', 0, 0, 1, 400000, 750000, 0, -350000, 0, 350000, 0, NULL, '', 0, '', 1),
(28, 1, 'PNJ-UTM-00003', '2021-06-25 12:42:16', 0, 0, 1, 750000, 0, 0, 750000, 250000, 0, 3, NULL, '', 500000, '2021-07-01', 1),
(29, 1, 'PNJ-UTM-00004', '2021-06-27 17:05:40', 0, 0, 1, 800000, 0, 0, 800000, 100000, 0, 3, NULL, '', 700000, '2021-07-01', 1),
(30, 1, 'PNJ-UTM-00005', '2021-06-27 17:05:40', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_order_detail`
--

CREATE TABLE `dat_order_detail` (
  `id` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_ongkir` int(11) NOT NULL,
  `ekspedisi` varchar(50) DEFAULT NULL,
  `level_ongkir` varchar(10) DEFAULT NULL,
  `ongkir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_order_detail`
--

INSERT INTO `dat_order_detail` (`id`, `id_penjualan`, `nama_penerima`, `nomor_hp`, `alamat`, `id_ongkir`, `ekspedisi`, `level_ongkir`, `ongkir`) VALUES
(1, 17, 'kl', '09808', 'skjskijs', 1, 'GO-war', 'biaya_2', 7500),
(2, 28, 'Randy', '0909090', 'Sumedang No7 blok C', 1, 'GO-war', 'biaya_1', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `dat_pelanggan`
--

CREATE TABLE `dat_pelanggan` (
  `id` int(11) NOT NULL,
  `kode_pelanggan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `no_rek` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `rek_atas_nama` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `group_pelanggan` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dat_pelanggan`
--

INSERT INTO `dat_pelanggan` (`id`, `kode_pelanggan`, `nama`, `alamat`, `kota`, `provinsi`, `negara`, `kode_pos`, `telepon`, `fax`, `email`, `username`, `password`, `img`, `no_rek`, `keterangan`, `rek_atas_nama`, `bank`, `group_pelanggan`) VALUES
(0, 'UMUM', 'UMUM', '', '', '', '', '', '', '', '', '', '', 'user.png', '', '', '', '', 0),
(7, 'PLG000001', 'RESELLER', 'Sumedang', '', '', '', '', '', '', '', '', '', 'user.png', '', '', '', '', 1),
(8, 'PLG000002', 'DEALER', 'BANDUNG', '', '', '', '', '', '', '', '', '', 'user.png', '', '', '', '', 2),
(9, '', 'Andi Muhyi Mayapada', '', '', '', '', '', '0855245696311', '', 'andimayapada04@gmail.com', 'Prommpd830', '$2y$10$pvbdsJ9Hn0qj2OPb.PFPY.BwP.RSjVPF90tQ/asTyXsl9g3.Shq8C', 'user.png', '', '', '', '', 0),
(10, '', '', '', '', '', '', '', '0855245696344', '', 'user@gmail.com', 'shadowverse', '$2y$10$lGSE8WN1iIfzYLXb1SbcbePc/eC1//O//ScxlYv3zs9mZ3HMCUG7e', 'user.png', '', '', '', '', 0),
(11, '', 'Andi Guntur Mario', '', '', '', '', '', '084564839264', '', 'andigunturmario@gmail.com', 'mario', '$2y$10$rc2JRnRymZYTNO8Si0FZ1.rwpaqamvjVG1/J3eS8JTXqCBLEYJ02O', 'user.png', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dat_pembayaran_piutang`
--

CREATE TABLE `dat_pembayaran_piutang` (
  `id` int(11) NOT NULL,
  `id_piutang` int(11) NOT NULL,
  `waktu_bayar` datetime NOT NULL,
  `jml_pembayaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_pembayaran_piutang`
--

INSERT INTO `dat_pembayaran_piutang` (`id`, `id_piutang`, `waktu_bayar`, `jml_pembayaran`) VALUES
(3, 1, '2021-06-27 06:48:17', 100000),
(4, 1, '2021-06-27 06:48:52', 50000),
(5, 1, '2021-06-27 06:48:58', 350000);

-- --------------------------------------------------------

--
-- Table structure for table `dat_piutang`
--

CREATE TABLE `dat_piutang` (
  `id` int(11) NOT NULL,
  `id_master_penjualan` int(11) NOT NULL,
  `piutang` double NOT NULL,
  `sisa_piutang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_piutang`
--

INSERT INTO `dat_piutang` (`id`, `id_master_penjualan`, `piutang`, `sisa_piutang`) VALUES
(1, 28, 500000, 0),
(2, 29, 700000, 700000);

-- --------------------------------------------------------

--
-- Table structure for table `dat_produk`
--

CREATE TABLE `dat_produk` (
  `id` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `kode_item` varchar(30) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
  `deskripsi_ecommerce` text NOT NULL,
  `id_cover_img` int(11) NOT NULL,
  `satuan_dasar` int(11) NOT NULL,
  `is_rakit` int(11) DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_produk`
--

INSERT INTO `dat_produk` (`id`, `tipe`, `kode_item`, `nama_item`, `slug`, `id_jenis`, `id_sub_jenis`, `id_merk`, `rak`, `status_jual`, `stok_minimum`, `ket`, `berat`, `panjang`, `lebar`, `tinggi`, `pot_umum`, `pot_reseller`, `pot_dealer`, `link_share`, `id_varian`, `kondisi_barang`, `deskripsi_ecommerce`, `id_cover_img`, `satuan_dasar`, `is_rakit`, `is_active`) VALUES
(2, 1, 'LAN001', 'KABEL LAN BELDEN', 'kabel-lan-belden', 9, 1, 1, '', 1, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0, 0, 2, 10, NULL, 0, 1, '                Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 1, 0, 0),
(3, 1, 'MONITOR', 'DELL 20INCH', 'dell-20inch', 5, 1, 0, '', 1, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0, 0, 10, 20, NULL, 0, 1, '                Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2, 3, 0, 0),
(4, 1, 'prtr0001', 'PRINTER EPSON', 'printer-epson', 2, NULL, 0, '', 1, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0, 0, 0, 0, NULL, 0, 1, '                Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 3, 4, 0, 0),
(5, 1, 'LNV112', 'LENOVO 112', 'lenovo-112', 1, 0, 0, '', 1, 0, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, 0, 0, 0, 0, 0, 0, NULL, 0, 1, '                Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 4, 6, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dat_sales`
--

CREATE TABLE `dat_sales` (
  `id` int(11) NOT NULL,
  `kode_sales` varchar(45) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(255) NOT NULL DEFAULT 'default_ktp.png',
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_rek` varchar(20) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `nama_akun_bank` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `preview_npwp` varchar(255) NOT NULL DEFAULT 'default_npwp.png',
  `group_sales_id` int(11) NOT NULL,
  `isValidate` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT 'default_sales.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_sales`
--

INSERT INTO `dat_sales` (`id`, `kode_sales`, `nama`, `ktp`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `negara`, `kode_pos`, `telepon`, `email`, `no_rek`, `bank`, `nama_akun_bank`, `npwp`, `preview_npwp`, `group_sales_id`, `isValidate`, `isActive`, `foto`) VALUES
(1, 'SL000001', 'adfs1', 'default_ktp.png', 'dsaf1', 'adsf1', 'sadf1', 'adsf1', 'asdf1', '2343241', '343241', 'asdf1', '32132131', '1232131', 'asdf1', 'asdf1', 'default.png', 5, 1, 1, 'default_sales.png'),
(2, 'SL000002', 'Ihsan', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '1', 'sumedang', '1', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '1', '1', '1', '1', 'default.png', 4, 1, 1, '8968d557676a3b8db8344bd936f3641b.jpg'),
(3, 'SL000003', 'eko haryadi', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, 'default_sales.png'),
(4, 'SL000004', 'cek', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, 'default_sales.png'),
(5, 'SL000005', 's', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, 'default_sales.png'),
(6, 'SL000006', 's', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, 'default_sales.png'),
(7, 'SL000007', 'dsfadf', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, 'default_sales.png'),
(8, 'SL000008', 'asdfadsf', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 0, '540cb5812c6494842dc155aaccfda229.jpeg'),
(12, 'SL000016', 'dsfdsf', 'default_ktp.png', 'jl babakan hurip no 54\r\nsumedang utara', '', 'sumedang', '', 'Indonesia', '45322', '089658882214', 'ninoidgt@gmail.com', '', '', '', '', 'default.png', 4, 1, 1, '233d708a307df0b81e03371df4b52893.jpeg'),
(29, 'SL000013', 'adsf', 'default_ktp.png', 'dfasf', '', '', '', '', '', '', '', '', '', '', '', 'default.png', 4, 1, 1, 'ffd92091a9330b701b2c5274bfcaa058.png'),
(30, 'SL000014', 'ihsan', 'default_ktp.png', 'hk', 'kh', 'hlk', '', 'asdasdsadasdkhfadlskfhlk', 'jh', 'kljh', 'kl', 'hj', 'klh', 'h', 'jk', 'default_npwp.png', 4, 1, 1, 'default_sales.png');

-- --------------------------------------------------------

--
-- Table structure for table `dat_stok_toko`
--

CREATE TABLE `dat_stok_toko` (
  `id` bigint(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `stok` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_stok_toko`
--

INSERT INTO `dat_stok_toko` (`id`, `id_produk`, `id_toko`, `stok`) VALUES
(19, 2, 1, 100),
(20, 2, 2, 100),
(21, 2, 3, 100),
(22, 3, 1, 97),
(23, 3, 2, 100),
(24, 3, 3, 100),
(25, 4, 1, 99),
(26, 4, 2, 98),
(27, 4, 3, 100),
(28, 5, 1, 100),
(29, 5, 2, 100),
(30, 5, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `dat_supplier`
--

CREATE TABLE `dat_supplier` (
  `id` int(11) NOT NULL,
  `kode_supplier` varchar(145) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `negara` varchar(45) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_rek` varchar(45) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `rek_atas_nama` varchar(50) DEFAULT NULL,
  `bank` varchar(45) DEFAULT NULL,
  `npwp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dat_supplier`
--

INSERT INTO `dat_supplier` (`id`, `kode_supplier`, `nama`, `alamat`, `kota`, `provinsi`, `negara`, `kode_pos`, `telepon`, `fax`, `email`, `no_rek`, `keterangan`, `rek_atas_nama`, `bank`, `npwp`) VALUES
(9, 'SP000001', 'ihsan', 'jl babakan hurip no 54\r\nsumedang utara', 'ihsa', '', 'Indonesia', '45322', '089658882214', '', 'ninoidgt@gmail.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dat_toko`
--

CREATE TABLE `dat_toko` (
  `id` int(11) NOT NULL,
  `fungsi` varchar(15) NOT NULL,
  `kode_toko` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `no_fax` varchar(30) DEFAULT NULL,
  `tipe_printer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_toko`
--

INSERT INTO `dat_toko` (`id`, `fungsi`, `kode_toko`, `nama`, `alamat`, `telepon`, `no_fax`, `tipe_printer`) VALUES
(1, 'pusat', 'UTM', 'MEGAKOMPUTER', 'test alamat nanti di isi saja yg bener nya disini', '(999)02920', '', 1),
(2, 'cabang', 'CBGAMD', 'AMD COMP', 'test alamat nanti di isi saja yg bener nya disini', '(999)02920', '', 2),
(3, 'cabang', 'CBGGITA', 'GITA COMP', 'test alamat nanti di isi saja yg bener nya disini', '(999)02920', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_user`
--

CREATE TABLE `dat_user` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `kode_cabang` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_user`
--

INSERT INTO `dat_user` (`id`, `id_level`, `id_toko`, `kode_cabang`, `nama`, `username`, `password`) VALUES
(1, 1, 1, 'UTM', 'Super Administrator', 'superadmin', '202cb962ac59075b964b07152d234b70'),
(2, 2, 3, 'CBGGITA', 'Kasir', 'kasir', '202cb962ac59075b964b07152d234b70');

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
-- Table structure for table `konf_print`
--

CREATE TABLE `konf_print` (
  `id` int(11) NOT NULL,
  `printer` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `footer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konf_print`
--

INSERT INTO `konf_print` (`id`, `printer`, `type`, `footer`) VALUES
(1, 'dotmatrix', '58mm', 'Terimakasih telah berbelanja<br>                 Barang yang sudah dibeli tidak dapat ditukar/dikembalikan tanpa perjanjian sebelumnya');

-- --------------------------------------------------------

--
-- Table structure for table `log_login`
--

CREATE TABLE `log_login` (
  `id` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `time_login` datetime NOT NULL,
  `time_logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_login`
--

INSERT INTO `log_login` (`id`, `id_user`, `nama`, `username`, `time_login`, `time_logout`) VALUES
(2, 1, 'Super Administrator', 'superadmin', '2021-06-17 15:47:47', '2021-06-17 15:47:55'),
(3, 1, 'Super Administrator', 'superadmin', '2021-06-17 15:51:49', '2021-06-17 15:55:36'),
(4, 2, 'Kasir', 'kasir', '2021-06-17 15:55:40', '2021-06-17 15:58:46'),
(5, 2, 'Kasir', 'kasir', '2021-06-17 16:01:12', '2021-06-17 16:01:28'),
(6, 1, 'Super Administrator', 'superadmin', '2021-06-17 16:01:38', '2021-06-17 16:18:53'),
(7, 1, 'Super Administrator', 'superadmin', '2021-06-17 16:19:02', '2021-06-17 16:36:32'),
(8, 2, 'Kasir', 'kasir', '2021-06-17 16:22:30', '0000-00-00 00:00:00'),
(9, 2, 'Kasir', 'kasir', '2021-06-17 16:36:20', '2021-06-17 16:36:30'),
(10, 2, 'Kasir', 'kasir', '2021-06-17 16:36:40', '2021-06-17 16:52:26'),
(11, 1, 'Super Administrator', 'superadmin', '2021-06-17 16:36:48', '0000-00-00 00:00:00'),
(12, 1, 'Super Administrator', 'superadmin', '2021-06-18 06:09:59', '2021-06-18 06:22:31'),
(13, 1, 'Super Administrator', 'superadmin', '2021-06-18 06:23:12', '2021-06-18 06:23:20'),
(14, 2, 'Kasir', 'kasir', '2021-06-18 06:23:24', '2021-06-18 07:10:24'),
(15, 1, 'Super Administrator', 'superadmin', '2021-06-18 07:10:28', '0000-00-00 00:00:00'),
(16, 1, 'Super Administrator', 'superadmin', '2021-06-18 11:28:19', '0000-00-00 00:00:00'),
(17, 1, 'Super Administrator', 'superadmin', '2021-06-18 23:42:10', '0000-00-00 00:00:00'),
(18, 1, 'Super Administrator', 'superadmin', '2021-06-19 07:23:44', '0000-00-00 00:00:00'),
(19, 1, 'Super Administrator', 'superadmin', '2021-06-19 08:10:11', '0000-00-00 00:00:00'),
(20, 1, 'Super Administrator', 'superadmin', '2021-06-19 12:29:27', '0000-00-00 00:00:00'),
(21, 1, 'Super Administrator', 'superadmin', '2021-06-19 18:12:27', '0000-00-00 00:00:00'),
(22, 1, 'Super Administrator', 'superadmin', '2021-06-20 05:31:37', '0000-00-00 00:00:00'),
(23, 1, 'Super Administrator', 'superadmin', '2021-06-21 08:05:06', '0000-00-00 00:00:00'),
(24, 1, 'Super Administrator', 'superadmin', '2021-06-21 14:19:00', '2021-06-21 16:59:16'),
(25, 1, 'Super Administrator', 'superadmin', '2021-06-21 16:59:30', '0000-00-00 00:00:00'),
(26, 1, 'Super Administrator', 'superadmin', '2021-06-21 17:01:39', '0000-00-00 00:00:00'),
(27, 1, 'Super Administrator', 'superadmin', '2021-06-21 17:02:26', '0000-00-00 00:00:00'),
(28, 1, 'Super Administrator', 'superadmin', '2021-06-22 09:05:12', '0000-00-00 00:00:00'),
(29, 1, 'Super Administrator', 'superadmin', '2021-06-22 12:13:34', '0000-00-00 00:00:00'),
(30, 1, 'Super Administrator', 'superadmin', '2021-06-23 05:11:30', '0000-00-00 00:00:00'),
(31, 1, 'Super Administrator', 'superadmin', '2021-06-23 14:01:14', '0000-00-00 00:00:00'),
(32, 1, 'Super Administrator', 'superadmin', '2021-06-23 18:47:16', '0000-00-00 00:00:00'),
(33, 1, 'Super Administrator', 'superadmin', '2021-06-23 22:34:56', '0000-00-00 00:00:00'),
(34, 1, 'Super Administrator', 'superadmin', '2021-06-24 08:31:39', '0000-00-00 00:00:00'),
(35, 1, 'Super Administrator', 'superadmin', '2021-06-24 08:34:24', '0000-00-00 00:00:00'),
(36, 1, 'Super Administrator', 'superadmin', '2021-06-24 12:33:14', '0000-00-00 00:00:00'),
(37, 1, 'Super Administrator', 'superadmin', '2021-06-24 14:37:51', '0000-00-00 00:00:00'),
(38, 1, 'Super Administrator', 'superadmin', '2021-06-24 16:50:28', '0000-00-00 00:00:00'),
(39, 1, 'Super Administrator', 'superadmin', '2021-06-25 07:58:18', '0000-00-00 00:00:00'),
(40, 1, 'Super Administrator', 'superadmin', '2021-06-25 11:07:32', '0000-00-00 00:00:00'),
(41, 1, 'Super Administrator', 'superadmin', '2021-06-25 11:07:48', '0000-00-00 00:00:00'),
(42, 1, 'Super Administrator', 'superadmin', '2021-06-25 21:48:49', '0000-00-00 00:00:00'),
(43, 1, 'Super Administrator', 'superadmin', '2021-06-26 12:25:24', '0000-00-00 00:00:00'),
(44, 1, 'Super Administrator', 'superadmin', '2021-06-27 05:52:00', '0000-00-00 00:00:00'),
(45, 1, 'Super Administrator', 'superadmin', '2021-06-27 17:04:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_bank`
--

CREATE TABLE `ref_bank` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_bank`
--

INSERT INTO `ref_bank` (`id`, `kode`, `nama_bank`) VALUES
(1, '11', 'BRI'),
(2, '11', 'BCA'),
(3, '111', 'MANDIRI'),
(4, '22', 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `ref_emoney`
--

CREATE TABLE `ref_emoney` (
  `id` int(11) NOT NULL,
  `emoney` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_emoney`
--

INSERT INTO `ref_emoney` (`id`, `emoney`, `ket`) VALUES
(1, 'GO-PAY', 'GOPAY'),
(2, 'SHOPEE PAY', 'SHOPEE PAY'),
(3, 'LINK AJA', 'LINK AJA PAYMENT'),
(4, 'DANA', 'DANA PAY'),
(5, 'OVO', '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_group_pelanggan`
--

CREATE TABLE `ref_group_pelanggan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_group_pelanggan`
--

INSERT INTO `ref_group_pelanggan` (`id`, `name`) VALUES
(0, 'umum'),
(1, 'reseller'),
(2, 'dealer');

-- --------------------------------------------------------

--
-- Table structure for table `ref_group_sales`
--

CREATE TABLE `ref_group_sales` (
  `id` int(11) NOT NULL,
  `nama_group` varchar(255) DEFAULT NULL,
  `komisi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_group_sales`
--

INSERT INTO `ref_group_sales` (`id`, `nama_group`, `komisi`) VALUES
(4, 'Tidak Aktif', 0),
(5, '123213', 100),
(7, 'Reseller A', 40);

-- --------------------------------------------------------

--
-- Table structure for table `ref_item_rakitan`
--

CREATE TABLE `ref_item_rakitan` (
  `id` int(11) NOT NULL,
  `id_perakitan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_pokok` double NOT NULL,
  `harga_jual` double NOT NULL,
  `diskon` double NOT NULL,
  `tipe_diskon` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis`
--

CREATE TABLE `ref_jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_jenis`
--

INSERT INTO `ref_jenis` (`id`, `jenis`, `ket`) VALUES
(1, 'LAPTOP/NOTEBOOK', 'ini merupakan jenis laptop'),
(2, 'PRINTER', ''),
(3, 'PERANGAT PC', ''),
(4, 'PC', ''),
(5, 'LCD', ''),
(6, 'AKSESORIS', ''),
(7, 'UPS', ''),
(8, 'STORAGE', ''),
(9, 'NETWORKING', ''),
(10, 'PROYEKTOR', '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_merek`
--

CREATE TABLE `ref_merek` (
  `id` int(11) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_merek`
--

INSERT INTO `ref_merek` (`id`, `merek`, `ket`) VALUES
(1, 'Sony', 's'),
(2, 'Asus', 'snsv'),
(3, 'Lenovo', '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_ongkir`
--

CREATE TABLE `ref_ongkir` (
  `id` int(11) NOT NULL,
  `ekspedisi` varchar(50) NOT NULL,
  `biaya_1` int(11) NOT NULL,
  `biaya_2` int(11) NOT NULL,
  `biaya_3` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ongkir`
--

INSERT INTO `ref_ongkir` (`id`, `ekspedisi`, `biaya_1`, `biaya_2`, `biaya_3`, `ket`) VALUES
(1, 'GO-war', 8000, 7500, 5000, '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_satuan`
--

CREATE TABLE `ref_satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_satuan`
--

INSERT INTO `ref_satuan` (`id`, `satuan`, `ket`) VALUES
(10, 'pcs', 'satuan pcs'),
(11, 'gr', 'satuan gr'),
(12, 'box', ''),
(13, 'm', ''),
(14, 'roll', '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_status_transaksi`
--

CREATE TABLE `ref_status_transaksi` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_status_transaksi`
--

INSERT INTO `ref_status_transaksi` (`id`, `status`, `ket`) VALUES
(1, 0, 'ongoing'),
(2, 1, 'checkout'),
(3, 2, 'hold/pending');

-- --------------------------------------------------------

--
-- Table structure for table `ref_sub_jenis`
--

CREATE TABLE `ref_sub_jenis` (
  `id` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `sub_jenis` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_sub_jenis`
--

INSERT INTO `ref_sub_jenis` (`id`, `id_jenis`, `sub_jenis`, `ket`) VALUES
(1, 1, 'LCD', 'ini lcd laptop');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tipe_printer`
--

CREATE TABLE `ref_tipe_printer` (
  `id` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_tipe_printer`
--

INSERT INTO `ref_tipe_printer` (`id`, `tipe`) VALUES
(1, 'dotmatrix'),
(2, 'thermal');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tipe_rakitan`
--

CREATE TABLE `ref_tipe_rakitan` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_tipe_rakitan`
--

INSERT INTO `ref_tipe_rakitan` (`id`, `id_produk`, `tipe`) VALUES
(3, 1, ''),
(4, 2, ''),
(5, 3, ''),
(6, 4, ''),
(7, 5, ''),
(1, 61, ''),
(2, 62, '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_varian`
--

CREATE TABLE `ref_varian` (
  `id` int(11) NOT NULL,
  `varian` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_varian`
--

INSERT INTO `ref_varian` (`id`, `varian`, `ket`) VALUES
(2, '4gb/128gb', '');

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
-- Indexes for table `dat_img_produk`
--
ALTER TABLE `dat_img_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_file` (`nama_file`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `dat_item_penjualan`
--
ALTER TABLE `dat_item_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_konversi_satuan`
--
ALTER TABLE `dat_konversi_satuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `satuan` (`satuan`);

--
-- Indexes for table `dat_level_user`
--
ALTER TABLE `dat_level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_master_penjualan`
--
ALTER TABLE `dat_master_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_order_detail`
--
ALTER TABLE `dat_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_pelanggan`
--
ALTER TABLE `dat_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`),
  ADD KEY `group_pelanggan` (`group_pelanggan`);

--
-- Indexes for table `dat_pembayaran_piutang`
--
ALTER TABLE `dat_pembayaran_piutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_piutang`
--
ALTER TABLE `dat_piutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_produk`
--
ALTER TABLE `dat_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_item` (`kode_item`),
  ADD KEY `id_cover_img` (`id_cover_img`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_sub_jenis` (`id_sub_jenis`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_varian` (`id_varian`),
  ADD KEY `is_active` (`is_active`),
  ADD KEY `is_rakit` (`is_rakit`);

--
-- Indexes for table `dat_sales`
--
ALTER TABLE `dat_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_idx` (`group_sales_id`),
  ADD KEY `index3` (`kode_sales`);

--
-- Indexes for table `dat_stok_toko`
--
ALTER TABLE `dat_stok_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_supplier`
--
ALTER TABLE `dat_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index2` (`kode_supplier`,`nama`);

--
-- Indexes for table `dat_toko`
--
ALTER TABLE `dat_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dat_user`
--
ALTER TABLE `dat_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konf_print`
--
ALTER TABLE `konf_print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_login`
--
ALTER TABLE `log_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_bank`
--
ALTER TABLE `ref_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_emoney`
--
ALTER TABLE `ref_emoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_group_pelanggan`
--
ALTER TABLE `ref_group_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_group_sales`
--
ALTER TABLE `ref_group_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index2` (`nama_group`);

--
-- Indexes for table `ref_item_rakitan`
--
ALTER TABLE `ref_item_rakitan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perakitan` (`id_perakitan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ref_jenis`
--
ALTER TABLE `ref_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_merek`
--
ALTER TABLE `ref_merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_ongkir`
--
ALTER TABLE `ref_ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_satuan`
--
ALTER TABLE `ref_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_status_transaksi`
--
ALTER TABLE `ref_status_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_sub_jenis`
--
ALTER TABLE `ref_sub_jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_jenis` (`sub_jenis`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `ref_tipe_printer`
--
ALTER TABLE `ref_tipe_printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_tipe_rakitan`
--
ALTER TABLE `ref_tipe_rakitan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`,`tipe`);

--
-- Indexes for table `ref_varian`
--
ALTER TABLE `ref_varian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dat_img_produk`
--
ALTER TABLE `dat_img_produk`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dat_item_penjualan`
--
ALTER TABLE `dat_item_penjualan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dat_konversi_satuan`
--
ALTER TABLE `dat_konversi_satuan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dat_level_user`
--
ALTER TABLE `dat_level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dat_master_penjualan`
--
ALTER TABLE `dat_master_penjualan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dat_order_detail`
--
ALTER TABLE `dat_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dat_pelanggan`
--
ALTER TABLE `dat_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dat_pembayaran_piutang`
--
ALTER TABLE `dat_pembayaran_piutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dat_piutang`
--
ALTER TABLE `dat_piutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dat_produk`
--
ALTER TABLE `dat_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dat_sales`
--
ALTER TABLE `dat_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dat_stok_toko`
--
ALTER TABLE `dat_stok_toko`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dat_supplier`
--
ALTER TABLE `dat_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dat_toko`
--
ALTER TABLE `dat_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dat_user`
--
ALTER TABLE `dat_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konf_print`
--
ALTER TABLE `konf_print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_login`
--
ALTER TABLE `log_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ref_bank`
--
ALTER TABLE `ref_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ref_emoney`
--
ALTER TABLE `ref_emoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_group_pelanggan`
--
ALTER TABLE `ref_group_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_group_sales`
--
ALTER TABLE `ref_group_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_item_rakitan`
--
ALTER TABLE `ref_item_rakitan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_jenis`
--
ALTER TABLE `ref_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ref_merek`
--
ALTER TABLE `ref_merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_ongkir`
--
ALTER TABLE `ref_ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_satuan`
--
ALTER TABLE `ref_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ref_status_transaksi`
--
ALTER TABLE `ref_status_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_sub_jenis`
--
ALTER TABLE `ref_sub_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_tipe_printer`
--
ALTER TABLE `ref_tipe_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_tipe_rakitan`
--
ALTER TABLE `ref_tipe_rakitan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_varian`
--
ALTER TABLE `ref_varian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_sales`
--
ALTER TABLE `dat_sales`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`group_sales_id`) REFERENCES `ref_group_sales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
