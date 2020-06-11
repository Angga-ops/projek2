-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 05:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denisyashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `provinsi`, `kota`, `alamat_lengkap`) VALUES
(1, 'Jawa Barat', 'Cirebon', 'Desa Jemaras Lor');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_delivery`
--

CREATE TABLE `alamat_delivery` (
  `id` bigint(20) NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) NOT NULL,
  `no_hp` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `kabkot` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_delivery`
--

INSERT INTO `alamat_delivery` (`id`, `id_users`, `nama`, `no_hp`, `provinsi`, `kabkot`, `alamat`, `catatan`, `created_at`, `updated_at`) VALUES
(19, 21, 'Eva Fadhillah Asriyantie', '085722263545', 'Jawa Barat', 'Indramayu', 'Desa Ujungaris', NULL, '2020-05-30 10:11:38', '2020-05-30 10:17:30'),
(21, 15, 'Nada Qonita Amalia', '085721718411', 'Jawa Barat', 'Kabupaten Indramayu', 'Desa Ujungaris RT/RW 001/002 BLOK DUA Gg. H. Zaenudin Kec. Widasari', NULL, '2020-05-31 23:15:17', '2020-06-09 02:06:01'),
(22, 16, 'Aura Nur Fathimah', '087678900655', 'Jawa Barat', 'Kabupaten Indramayu', 'Desa Ujungaris', NULL, '2020-05-31 23:21:54', '2020-05-31 23:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_keranjang`, `id_produk`, `nama_produk`, `kode_produk`, `harga`, `qty`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(5, 1, 'Dress Silver', 'DS001', 420000, 2, 'auranurfathimah@gmail.com', 'ACpCOFNrK090tQ8yZwGLTqIdAWw3eMCbIGlUH625', NULL, NULL),
(9, 4, 'Gelang Jodoh', 'GJ001', 10000, 2, 'nadaqonita01@gmail.com', 'hbOVxbSq0Ekp7JGztdGUTjgJwc9smnVsD43PQspu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_pesanan` bigint(20) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `jumlah_bayar` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `invoice` varchar(191) NOT NULL,
  `kabkot` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Belum Bayar','Menunggu Konfirmasi','Pesanan Dibatalkan','Pesanan Dikemas','Pesanan Dikirim','Pesanan Diterima') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_pesanan`, `id`, `id_produk`, `qty`, `jumlah_bayar`, `date_time`, `invoice`, `kabkot`, `provinsi`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(34, 15, 12, 1, '67500', '2020-06-09 09:06:01', '55394', 'Kabupaten Indramayu', 'Jawa Barat', 'Desa Ujungaris RT/RW 001/002 BLOK DUA Gg. H. Zaenudin Kec. Widasari', 'Belum Bayar', '2020-06-09 02:06:01', '2020-06-09 02:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk`
--

CREATE TABLE `detail_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detailtransaksi` bigint(20) NOT NULL,
  `id_pesanan` bigint(20) NOT NULL,
  `id_transaksi` bigint(20) NOT NULL,
  `status` enum('belum_bayar','dikemas','dikirim','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kabkot`
--

CREATE TABLE `kabkot` (
  `id_kabkot` bigint(20) NOT NULL,
  `nama_kabkot` varchar(191) NOT NULL,
  `id_provinsi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabkot`
--

INSERT INTO `kabkot` (`id_kabkot`, `nama_kabkot`, `id_provinsi`) VALUES
(1, 'Kabupaten Indramayu', 12),
(2, 'Kabupaten Cirebon', 12),
(3, 'Kota Cirebon', 12),
(4, 'Kabupaten Bandung', 12),
(5, 'Kabupaten Bandung Barat', 12),
(6, 'Kabupaten Bekasi', 12),
(7, 'Kabupaten Bogor', 12),
(8, 'Kabupaten Ciamis', 12),
(9, 'Kabupaten Cianjur', 12),
(10, 'Kabupaten Garut', 12),
(11, 'Kabupaten Karawang', 12),
(12, 'Kabupaten Kuningan', 12),
(13, 'Kabupaten Majalengka', 12),
(14, 'Kabupaten Pangandaran', 12),
(15, 'Kabupaten Purwakarta', 12),
(16, 'Kabupaten Subang', 12),
(17, 'Kabupaten Sukabumi', 12),
(18, 'Kabupaten Sumedang', 12),
(19, 'Kabupaten Tasikmalaya', 12),
(20, 'Kota Bandung', 12),
(21, 'Kota Banjar', 12),
(22, 'Kota Bekasi', 12),
(23, 'Kota Bogor', 12),
(24, 'Kota Cimahi', 12),
(25, 'Kota Depok', 12),
(26, 'Kota Sukabumi', 12),
(27, 'Kota Tasikmalaya', 12);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `sub_kat` int(11) NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `sub_kat`, `nama_kategori`, `deskripsi`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pakaian Pria', 'Pakaian yang dipakai oleh Pria', 'pakaian-pria', 1, '2020-05-13 23:24:00', '2020-05-13 23:24:27'),
(2, 1, 'Pakaian Wanita', 'Pakaian yang dipakai oleh Wanita', 'pakaian-wanita', 1, '2020-05-13 23:24:02', '2020-05-13 23:25:03'),
(3, 1, 'Pakaian Anak', 'Pakaian yang dipakai oleh Anak', 'pakaian-anak', 1, '2020-05-13 23:28:29', '2020-05-13 23:28:29'),
(4, 1, 'Sepatu', 'Sepatu yang dipakai semua orang', 'sepatu', 1, '2020-05-13 23:29:09', '2020-05-13 23:29:09'),
(5, 1, 'Tas', 'Tas yang dipakai semua orang', 'tas', 1, '2020-05-13 23:29:32', '2020-05-13 23:29:32'),
(6, 2, 'Topi', 'Topi merupakan aksesoris yang dipakai semua orang', 'aksesoris-topi', 1, '2020-05-13 23:30:42', '2020-05-13 23:30:42'),
(7, 2, 'Gelang', 'Gelang merupakan aksesoris yang dipakai semua orang', 'aksesoris-gelang', 1, '2020-05-13 23:31:23', '2020-05-13 23:31:23'),
(8, 2, 'Kalung', 'Kalung merupakan aksesoris yang dipakai semua orang', 'aksesoris-kalung', 1, '2020-05-13 23:31:45', '2020-05-13 23:31:45'),
(9, 2, 'Anting', 'Anting merupakan aksesoris yang dipakai semua orang', 'aksesoris-anting', 1, '2020-05-13 23:32:01', '2020-05-13 23:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` bigint(20) NOT NULL,
  `nama_kec` varchar(191) NOT NULL,
  `id_kabkot` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`, `id_kabkot`) VALUES
(1, 'Anjatan', 1),
(2, 'Arahan', 1),
(3, 'Balongan', 1),
(4, 'Bangodua', 1),
(5, 'Bongas', 1),
(6, 'Cantigi', 1),
(7, 'Cikedung', 1),
(8, 'Gabuswetan', 1),
(9, 'Gantar', 1),
(10, 'Haurgeulis', 1),
(11, 'Indramayu', 1),
(12, 'Jatibarang', 1),
(13, 'Juntinyuat', 1),
(14, 'Kandanghaur', 1),
(15, 'Karangampel', 1),
(16, 'Kedokan Bunder', 1),
(17, 'Kertasemaya', 1),
(18, 'Krangkeng', 1),
(19, 'Kroya', 1),
(20, 'Lelea', 1),
(21, 'Lohbener', 1),
(22, 'Losarang', 1),
(23, 'Pasekan', 1),
(24, 'Patrol', 1),
(25, 'Sindang', 1),
(26, 'Sliyeg', 1),
(27, 'Sukagumiwang', 1),
(28, 'Sukra', 1),
(29, 'Tukdana', 1),
(30, 'Terisi', 1),
(31, 'Widasari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `keranjang`
--
DELIMITER $$
CREATE TRIGGER `delete_keranjang` AFTER DELETE ON `keranjang` FOR EACH ROW INSERT INTO riwayat_keranjang (id_users, id_produk, qty, session_id, tgl_perubahan) VALUES (OLD.id_users, OLD.id_produk, OLD.qty, OLD.session_id, SYSDATE())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2020_04_21_172116_create_detail_produk_table', 1),
(20, '2014_10_12_000000_create_users_table', 2),
(21, '2014_10_12_100000_create_password_resets_table', 2),
(22, '2020_05_14_061535_create_kategori_table', 2),
(23, '2020_05_14_061643_create_produk_table', 3),
(26, '2020_05_14_061919_create_detail_produk_table', 4),
(27, '2020_05_15_080515_create_keranjang_table', 4),
(28, '2020_05_26_091052_create_cartkeranjang_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anhyelee7@gmail.com', '$2y$10$OVB2bkFuhLwqiJA8DTbsYuZZ8g/MB9N5D9wSprcdJS783RO2Veqby', '2020-05-15 09:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `kode_produk`, `deskripsi`, `harga`, `stok`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dress Silver', 'DS001', 'Dress Silver berbahan halus, lembut, nyaman dan sangat cocok digunakan untuk berpesta', 420000, 4, 'wanita1.png', '2020-05-13 23:37:03', '2020-05-30 10:17:30'),
(2, 1, 'Adidas Black Green', 'ABG001', 'Adidas Black Green berbahan halus, lembut, nyaman dan sangat cocok digunakan untuk berolahraga', 130000, 11, 'pria1.png', '2020-05-13 23:39:03', '2020-05-13 23:39:34'),
(3, 3, 'Baju Anak Kembar', 'BAK001', 'Baju untuk anak kembar yang lucu unch', 200000, 10, 'anak1.jpg', '2020-05-13 23:40:03', '2020-06-07 08:51:34'),
(4, 7, 'Gelang Jodoh', 'GJ001', 'Kelak anda dan pasangan anda akan berjodoh selamanya jika menggunakan gelang ini', 10000, 100, 'gelang1.jpg', '2020-05-13 23:42:03', '2020-06-08 12:00:03'),
(5, 4, 'Sepatu Olahraga', 'SO001', 'Merk ori dijamin aman', 265000, 3, 'sepatu1.jpg', '2020-05-13 23:43:03', '2020-05-13 23:44:04'),
(6, 5, 'Black Bag', 'BB001', 'Merk ori dijamin aman', 500000, 42, 'tas1.jpg', '2020-05-13 23:45:03', '2020-06-09 01:03:26'),
(7, 6, 'Topi Hitam', 'TH001', 'Topi Hitam Kupu-Kupu', 999999, 90, 'topi1.jpg', '2020-05-13 23:46:40', '2020-05-31 23:15:18'),
(12, 8, 'Kalung Blossom', 'BAG001', 'Kalung bagaikan langit di sore hari, berwarna hijau, sehijau hatiku', 67500, 49, '39200.jpg', '2020-06-01 00:36:16', '2020-06-09 02:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pembeli`
--

CREATE TABLE `profile_pembeli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `kabkot` varchar(191) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_pembeli`
--

INSERT INTO `profile_pembeli` (`id`, `id_users`, `jenis_kelamin`, `tanggal_lahir`, `no_hp`, `provinsi`, `kabkot`, `alamat`, `image`) VALUES
(1, 15, '', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` bigint(20) NOT NULL,
  `nama_provinsi` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatra Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Barat'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Tenggara'),
(30, 'Sulawesi Utara'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_keranjang`
--

CREATE TABLE `riwayat_keranjang` (
  `id_riwcart` bigint(20) NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `session_id` varchar(191) NOT NULL,
  `tgl_perubahan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_keranjang`
--

INSERT INTO `riwayat_keranjang` (`id_riwcart`, `id_users`, `id_produk`, `qty`, `session_id`, `tgl_perubahan`) VALUES
(32, 15, 12, 1, 'HWLVOcQiffyGTErOKTYFyldVNZ2Pz33DbdQgD9SN', '2020-06-09 09:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_pesanan` bigint(20) NOT NULL,
  `bank_asal` varchar(255) NOT NULL,
  `nama_pemilik_rek` varchar(255) NOT NULL,
  `jumlah_bayar` double(8,0) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `email_verified_at`, `password`, `jenis_kelamin`, `tanggal_lahir`, `no_hp`, `provinsi`, `kabkot`, `alamat`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Nada Qonita Amalia', 'qonita_nada', 'nadaqonita01@gmail.com', '2020-05-27 06:22:11', '$2y$10$ANQ9MJ0Ny/GK4Fo38JT9L.ZBIYj.JatntS3yzPRstlfVJPNDKuYAW', 'Perempuan', '2000-04-01', '085721718411', 'Jawa Barat', 'Kabupaten Indramayu', 'Desa Ujungaris RT/RW 001/002 BLOK DUA Gg. H. Zaenudin Kec. Widasari', '92350.png', 'rIQniHQBT1VS1baVLQKsA0klMsie1QOI5vdwriKurlEqVjRGwsImXrNHJTvp', '2020-05-27 06:15:16', '2020-06-09 02:06:01'),
(16, 'Aura Nur Fathimah', 'auranurfaa', 'auranurfathimah@gmail.com', '2020-05-27 08:13:34', '$2y$10$4JWYj4AW5H9VuL/7hOfLnuL5Z.sHF22ma8MxJna6Vc2AyGtueYwZW', 'Perempuan', '2008-10-15', '087678900655', 'Jawa Barat', 'Kabupaten Indramayu', 'Desa Ujungaris', '8964.png', NULL, '2020-05-27 08:10:09', '2020-05-31 23:21:54'),
(20, 'Nurlaela Khasannah', 'elaaa12', 'nurlaelakhsnnh12@gmail.com', '2020-05-27 16:51:21', '$2y$10$HORsbLpIGFAAJxqBlpc5muAsWThVxnxde41Chw0xxuix4FZKrQ6NC', 'Perempuan', '2000-03-12', '089654334213', 'Jawa Barat', 'Cirebon', 'Klangenan', '61837.jpg', NULL, '2020-05-27 16:41:33', '2020-05-28 00:14:54'),
(21, 'Eva Fadhillah Asriyantie', 'evafasriyantie', 'evafadhillah67@gmail.com', '2020-05-29 23:43:19', '$2y$10$huHET0csyVSo6Ux5Wm9JkOPVX81NxjC5uBw5Q1ZFRwYzXw1Od3yFO', '', '0000-00-00', '085722263545', 'Jawa Barat', 'Indramayu', 'Desa Ujungaris', '', NULL, '2020-05-29 23:42:18', '2020-05-30 10:17:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `alamat_delivery`
--
ALTER TABLE `alamat_delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id` (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_produk_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detailtransaksi`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `kabkot`
--
ALTER TABLE `kabkot`
  ADD PRIMARY KEY (`id_kabkot`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`),
  ADD KEY `id_kabkot` (`id_kabkot`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `keranjang_id_produk_foreign` (`id_produk`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `produk_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `profile_pembeli`
--
ALTER TABLE `profile_pembeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `riwayat_keranjang`
--
ALTER TABLE `riwayat_keranjang`
  ADD PRIMARY KEY (`id_riwcart`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alamat_delivery`
--
ALTER TABLE `alamat_delivery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_pesanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `detail_produk`
--
ALTER TABLE `detail_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabkot`
--
ALTER TABLE `kabkot`
  MODIFY `id_kabkot` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile_pembeli`
--
ALTER TABLE `profile_pembeli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `riwayat_keranjang`
--
ALTER TABLE `riwayat_keranjang`
  MODIFY `id_riwcart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat_delivery`
--
ALTER TABLE `alamat_delivery`
  ADD CONSTRAINT `alamat_delivery_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD CONSTRAINT `detail_produk_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `detail_pesanan` (`id_pesanan`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `kabkot`
--
ALTER TABLE `kabkot`
  ADD CONSTRAINT `kabkot_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kabkot`) REFERENCES `kabkot` (`id_kabkot`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `keranjang_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `profile_pembeli`
--
ALTER TABLE `profile_pembeli`
  ADD CONSTRAINT `profile_pembeli_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `riwayat_keranjang`
--
ALTER TABLE `riwayat_keranjang`
  ADD CONSTRAINT `riwayat_keranjang_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `riwayat_keranjang_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `detail_pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
