-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2019 at 06:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pt_tiga_sinar_mandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT '0',
  `kategori_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `finishing_id` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga_beli` int(11) NOT NULL DEFAULT '0',
  `harga_jual` int(11) NOT NULL DEFAULT '0',
  `harga_jual_disc` int(11) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  `gudang_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode`, `nama`, `stok`, `kategori_id`, `jenis_id`, `finishing_id`, `satuan`, `harga_beli`, `harga_jual`, `harga_jual_disc`, `keterangan`, `gudang_id`, `created_at`) VALUES
(2, 'BARANG-01', 'NAMA BARANG-01', 10, 1, 1, 1, 'UNIT', 5000, 10000, 9500, 'KETERANGAN BARANG-01', 1, '2019-01-27 11:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `kode`, `nama`, `alamat`, `phone`, `fax`, `contact_person`, `email`, `keterangan`) VALUES
(1, 'PELANGGAN-001', 'NAMA PELANGGAN-001', 'ALAMAT PELANGGAN-001', '12345678', '12345678', '12345678', 'PELANGGAN-001@email.com', ''),
(2, 'PELANGGAN-002', 'NAMA PELANGGAN-002', 'ALAMAT PELANGGAN-002', '12345678', '12345678', '12345678', 'PELANGGAN-002@email.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finishing`
--

CREATE TABLE `tbl_finishing` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finishing`
--

INSERT INTO `tbl_finishing` (`id`, `kode`, `nama`) VALUES
(1, 'FINISHING-01', 'FINISHING-01'),
(2, 'FINISHING-02', 'FINISHING-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gudang`
--

CREATE TABLE `tbl_gudang` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gudang`
--

INSERT INTO `tbl_gudang` (`id`, `kode`, `nama`, `alamat`, `active`) VALUES
(1, 'GUDANG-01', 'NAMA GUDANG-01', 'ALAMAT GUDANG-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_harga_jual`
--

CREATE TABLE `tbl_harga_jual` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id`, `kode`, `nama`) VALUES
(1, 'BENTUK-01', 'BENTUK-01'),
(2, 'BENTUK-02', 'BENTUK-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `kode`, `nama`) VALUES
(1, 'KATEGORI-01', 'KATEGORI-01'),
(2, 'KATEGORI-02', 'KATEGORI-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `aksi` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role`, `aksi`, `status`) VALUES
(1, 'admin', '', 1),
(2, 'super_admin', '', 1),
(3, 'sales', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `kode`, `nama`, `alamat`, `phone`, `fax`, `contact_person`, `email`, `keterangan`) VALUES
(1, 'SUPPLIER-01', 'NAMA SUPPLIER-01', 'ALAMAT SUPPLIER-01', '12345678', '12345678', '12345678', 'SUPPLIER-01@email.com', ''),
(2, 'SUPPLIER-02', 'NAMA SUPPLIER-02', 'ALAMAT SUPPLIER-02', '12345678', '12345678', '12345678', 'SUPPLIER-02@email.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_customer`
--

CREATE TABLE `tbl_transaksi_customer` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_customer_detail`
--

CREATE TABLE `tbl_transaksi_customer_detail` (
  `id` int(11) NOT NULL,
  `transaksi_customer_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT '0',
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_supplier`
--

CREATE TABLE `tbl_transaksi_supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_supplier_detail`
--

CREATE TABLE `tbl_transaksi_supplier_detail` (
  `id` int(11) NOT NULL,
  `transaksi_supplier_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT '0',
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_id`, `username`, `nama`, `password`, `phone`, `alamat`, `email`, `role`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', '12345678', 'alamat admin', 'admin@admin.com', 'super_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_id` (`kategori_id`),
  ADD UNIQUE KEY `jenis_id` (`jenis_id`),
  ADD UNIQUE KEY `finishing_id` (`finishing_id`),
  ADD UNIQUE KEY `gudang_id` (`gudang_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_finishing`
--
ALTER TABLE `tbl_finishing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gudang`
--
ALTER TABLE `tbl_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_harga_jual`
--
ALTER TABLE `tbl_harga_jual`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barang_id` (`barang_id`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi_customer`
--
ALTER TABLE `tbl_transaksi_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_transaksi_customer_detail`
--
ALTER TABLE `tbl_transaksi_customer_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksi_customer_id` (`transaksi_customer_id`),
  ADD UNIQUE KEY `barang_id` (`barang_id`);

--
-- Indexes for table `tbl_transaksi_supplier`
--
ALTER TABLE `tbl_transaksi_supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `tbl_transaksi_supplier_detail`
--
ALTER TABLE `tbl_transaksi_supplier_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksi_supplier_id` (`transaksi_supplier_id`),
  ADD UNIQUE KEY `barang_id` (`barang_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_finishing`
--
ALTER TABLE `tbl_finishing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gudang`
--
ALTER TABLE `tbl_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_harga_jual`
--
ALTER TABLE `tbl_harga_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_transaksi_customer`
--
ALTER TABLE `tbl_transaksi_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi_customer_detail`
--
ALTER TABLE `tbl_transaksi_customer_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi_supplier`
--
ALTER TABLE `tbl_transaksi_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi_supplier_detail`
--
ALTER TABLE `tbl_transaksi_supplier_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `tbl_jenis` (`id`),
  ADD CONSTRAINT `tbl_barang_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `tbl_kategori` (`id`),
  ADD CONSTRAINT `tbl_barang_ibfk_3` FOREIGN KEY (`finishing_id`) REFERENCES `tbl_finishing` (`id`),
  ADD CONSTRAINT `tbl_barang_ibfk_4` FOREIGN KEY (`gudang_id`) REFERENCES `tbl_gudang` (`id`);

--
-- Constraints for table `tbl_harga_jual`
--
ALTER TABLE `tbl_harga_jual`
  ADD CONSTRAINT `tbl_harga_jual_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `tbl_barang` (`id`);

--
-- Constraints for table `tbl_transaksi_customer`
--
ALTER TABLE `tbl_transaksi_customer`
  ADD CONSTRAINT `tbl_transaksi_customer_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_transaksi_customer_detail`
--
ALTER TABLE `tbl_transaksi_customer_detail`
  ADD CONSTRAINT `tbl_transaksi_customer_detail_ibfk_1` FOREIGN KEY (`transaksi_customer_id`) REFERENCES `tbl_transaksi_customer` (`id`),
  ADD CONSTRAINT `tbl_transaksi_customer_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `tbl_barang` (`id`);

--
-- Constraints for table `tbl_transaksi_supplier`
--
ALTER TABLE `tbl_transaksi_supplier`
  ADD CONSTRAINT `tbl_transaksi_supplier_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `tbl_supplier` (`id`);

--
-- Constraints for table `tbl_transaksi_supplier_detail`
--
ALTER TABLE `tbl_transaksi_supplier_detail`
  ADD CONSTRAINT `tbl_transaksi_supplier_detail_ibfk_1` FOREIGN KEY (`transaksi_supplier_id`) REFERENCES `tbl_transaksi_supplier` (`id`),
  ADD CONSTRAINT `tbl_transaksi_supplier_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `tbl_barang` (`id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_role` (`role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
