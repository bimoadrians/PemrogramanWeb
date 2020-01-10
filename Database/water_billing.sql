-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 02:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(4) NOT NULL,
  `id_mst` int(4) NOT NULL,
  `id_plnggn` int(4) NOT NULL,
  `jml_bulan_lalu` int(12) NOT NULL,
  `jml_bulan_ini` int(12) NOT NULL,
  `harga_satuan` int(12) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status_bayar` enum('Sudah Bayar','Belum Bayar','','') NOT NULL,
  `jml_bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_mst`, `id_plnggn`, `jml_bulan_lalu`, `jml_bulan_ini`, `harga_satuan`, `tgl_bayar`, `status_bayar`, `jml_bayar`) VALUES
(1, 3, 1, 35000, 40000, 1000, '2019-05-02', 'Sudah Bayar', 40000),
(2, 3, 2, 30000, 35000, 1000, '2019-05-03', 'Sudah Bayar', 35000),
(3, 4, 1, 40000, 30000, 1000, '2019-06-03', 'Sudah Bayar', 30000),
(4, 4, 2, 35000, 40000, 1000, '0000-00-00', 'Belum Bayar', 0),
(5, 3, 3, 40000, 42000, 1000, '2019-05-03', 'Sudah Bayar', 42000),
(6, 3, 4, 37000, 33000, 1000, '2019-05-04', 'Belum Bayar', 33000),
(7, 4, 3, 42000, 47000, 1000, '2019-06-03', 'Sudah Bayar', 47000),
(9, 3, 5, 44000, 45000, 1000, '2019-05-03', 'Sudah Bayar', 45000),
(10, 4, 5, 45000, 40000, 1000, '2019-06-02', 'Sudah Bayar', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `master_transaksi`
--

CREATE TABLE `master_transaksi` (
  `id_master_transaksi` int(4) NOT NULL,
  `id_op` int(4) NOT NULL,
  `tanggal_generate` date NOT NULL,
  `periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_transaksi`
--

INSERT INTO `master_transaksi` (`id_master_transaksi`, `id_op`, `tanggal_generate`, `periode`) VALUES
(1, 1, '2019-02-28', '2019-02-01'),
(2, 1, '2019-03-30', '2019-03-01'),
(3, 1, '2019-04-30', '2019-04-01'),
(4, 1, '2019-05-31', '2019-05-01'),
(5, 1, '2019-06-30', '2019-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `username`, `password`) VALUES
(1, 'Adimas', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(4) NOT NULL COMMENT 'ID Pelanggan',
  `noPelanggan` varchar(10) NOT NULL COMMENT 'Nomor Pelanggan',
  `noRumah` varchar(5) NOT NULL COMMENT 'Nomor Rumah Pelanggan',
  `noKK` bigint(16) NOT NULL COMMENT 'Nomor KK Pelanggan',
  `alamat` varchar(100) NOT NULL COMMENT 'Alamat Pelanggan',
  `hpPelanggan` bigint(13) NOT NULL COMMENT 'Nomor HP Pelanggan',
  `teleponPelanggan` bigint(12) NOT NULL COMMENT 'Nomor Telepon Rumah Pelanggan',
  `namaPelanggan` varchar(50) NOT NULL COMMENT 'Nama Lengkap Pelanggan',
  `status` enum('Sudah Bayar','Belum Bayar','','') NOT NULL COMMENT 'Status Pelanggan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `noPelanggan`, `noRumah`, `noKK`, `alamat`, `hpPelanggan`, `teleponPelanggan`, `namaPelanggan`, `status`) VALUES
(1, '0000000001', '12', 3185746508926543, 'Jl.Malioboro no.12', 81712344321, 8561245, 'Hendra', 'Sudah Bayar'),
(2, '0000000002', '2', 3257456339674536, 'Jl.Durian no.2 ,Surakarta', 81566758456, 875125553, 'Sri Mulyati', 'Belum Bayar'),
(3, '0000000003', '4', 31857417654339276, 'Jl. Slamet Riyadi no.4, Surakarta', 87756478123, 821333976, 'Faisyal', 'Sudah Bayar'),
(4, '0000000004', '14', 3275236664552987, 'Jl.Apel no.14, Kartasura', 85208772433, 8677123, 'Nursinta', 'Belum Bayar'),
(5, '0000000005', '3', 32574112876542312, 'Jl.Medan no.3 , Jebres', 87716341889, 8345674, 'Sutarjo', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `idTarif` int(2) NOT NULL,
  `tipe` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `batasBawah` int(2) NOT NULL,
  `batasAtas` int(2) NOT NULL,
  `tarifAir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`idTarif`, `tipe`, `nama`, `batasBawah`, `batasAtas`, `tarifAir`) VALUES
(1, '1A', 'Sosial Umum', 0, 10, 650),
(2, '1B', 'Sosial Umum', 11, 20, 650),
(3, '1C', 'Sosial Umum', 21, 120, 650),
(4, '2A', 'Rumah Tangga', 0, 10, 800),
(5, '2B', 'Rumah Tangga', 11, 20, 900),
(6, '2C', 'Rumah Tangga', 21, 120, 1000),
(7, '3A', 'Sekolah', 0, 10, 3500),
(8, '3B', 'Sekolah', 11, 20, 3900),
(9, '3C', 'Sekolah', 21, 120, 4200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_mst` (`id_mst`),
  ADD KEY `id_plnggn` (`id_plnggn`);

--
-- Indexes for table `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD PRIMARY KEY (`id_master_transaksi`),
  ADD KEY `id_op` (`id_op`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`idTarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_transaksi`
--
ALTER TABLE `master_transaksi`
  MODIFY `id_master_transaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_mst`) REFERENCES `master_transaksi` (`id_master_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_plnggn`) REFERENCES `pelanggan` (`idPelanggan`);

--
-- Constraints for table `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD CONSTRAINT `master_transaksi_ibfk_1` FOREIGN KEY (`id_op`) REFERENCES `operator` (`id_operator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
