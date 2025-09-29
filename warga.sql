-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rt`
--

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `nik`, `alamat`, `no_hp`, `created_at`) VALUES
(1, 'Ahmad Suryadi', '3201010101010001', 'Jl. Melati No. 12', '081234567890', '2025-08-03 07:10:59'),
(2, 'Budi Santoso', '3201010101010002', 'Jl. Kenanga No. 21', '081234567891', '2025-08-03 07:10:59'),
(3, 'Citra Dewi', '3201010101010003', 'Jl. Mawar No. 7', '081234567892', '2025-08-03 07:10:59'),
(4, 'Dedi Purnama', '3201010101010004', 'Jl. Anggrek No. 15', '081234567893', '2025-08-03 07:10:59'),
(5, 'Eka Putri', '3201010101010005', 'Jl. Dahlia No. 19', '081234567894', '2025-08-03 07:10:59'),
(6, 'Farhan Rizky', '3201010101010006', 'Jl. Melur No. 22', '081234567895', '2025-08-03 07:10:59'),
(7, 'Gita Prameswari', '3201010101010007', 'Jl. Kamboja No. 3', '081234567896', '2025-08-03 07:10:59'),
(8, 'Hendra Gunawan', '3201010101010008', 'Jl. Sawo No. 4', '081234567897', '2025-08-03 07:10:59'),
(9, 'Indah Permata', '3201010101010009', 'Jl. Cemara No. 5', '081234567898', '2025-08-03 07:10:59'),
(10, 'Joko Widodo', '3201010101010010', 'Jl. Mahoni No. 6', '081234567899', '2025-08-03 07:10:59'),
(11, 'Kartika Sari', '3201010101010011', 'Jl. Cendana No. 8', '081234567900', '2025-08-03 07:10:59'),
(12, 'Lukman Hakim', '3201010101010012', 'Jl. Mangga No. 9', '081234567901', '2025-08-03 07:10:59'),
(13, 'Mega Cahaya', '3201010101010013', 'Jl. Flamboyan No. 10', '081234567902', '2025-08-03 07:10:59'),
(14, 'Nanda Saputra', '3201010101010014', 'Jl. Durian No. 11', '081234567903', '2025-08-03 07:10:59'),
(15, 'Oktaviani Putri', '3201010101010015', 'Jl. Salak No. 12', '081234567904', '2025-08-03 07:10:59'),
(16, 'Purnama Adi', '3201010101010016', 'Jl. Rambutan No. 13', '081234567905', '2025-08-03 07:10:59'),
(17, 'Qori Maulana', '3201010101010017', 'Jl. Belimbing No. 14', '081234567906', '2025-08-03 07:10:59'),
(18, 'Rina Anggraini', '3201010101010018', 'Jl. Kedondong No. 15', '081234567907', '2025-08-03 07:10:59'),
(19, 'Sigit Pratama', '3201010101010019', 'Jl. Alpukat No. 16', '081234567908', '2025-08-03 07:10:59'),
(20, 'Taufik Hidayat', '3201010101010020', 'Jl. Pepaya No. 17', '081234567909', '2025-08-03 07:10:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
