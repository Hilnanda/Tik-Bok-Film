-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 11:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `ID_AKUN` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`ID_AKUN`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_FILM` int(11) NOT NULL,
  `JUDUL_FILM` varchar(255) NOT NULL,
  `TAHUN_FILM` varchar(20) NOT NULL,
  `SINOPSIS_FILM` varchar(1000) NOT NULL,
  `POSTER_FILM` varchar(1000) NOT NULL,
  `JADWAL_TAYANG` varchar(20) NOT NULL,
  `KETERANGAN_FILM` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_FILM`, `JUDUL_FILM`, `TAHUN_FILM`, `SINOPSIS_FILM`, `POSTER_FILM`, `JADWAL_TAYANG`, `KETERANGAN_FILM`) VALUES
(15, 'Malang Melintang', '2019', 'asdawdwasd', 'rasuk21.jpg', 'Pagi', 'ghj'),
(16, 'Abracadabra', '2019', 'asdawdwasd', 'abracadabra.jpg', 'Malam', 'asdwasd'),
(17, 'Rasuk 2', '2019', 'asdasd', 'rasuk22.jpg', 'Pagi', 'asdwa');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `ID_KURSI` varchar(5) NOT NULL,
  `STATUS` varchar(5) NOT NULL,
  `NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`ID_KURSI`, `STATUS`, `NO`) VALUES
('A1', 'A', 1),
('A2', 'A', 2),
('A3', 'A', 3),
('A4', 'A', 4),
('A5', 'A', 5),
('A6', 'A', 6),
('B1', 'A', 7),
('B2', 'A', 8),
('B3', 'A', 9),
('B4', 'A', 10),
('B5', 'A', 11),
('B6', 'A', 12),
('C1', 'A', 13),
('C2', 'A', 14),
('C3', 'A', 15),
('C4', 'A', 16),
('C5', 'A', 17),
('C6', 'A', 18),
('D1', 'A', 19),
('D2', 'A', 20),
('D3', 'A', 21),
('D4', 'A', 22),
('D5', 'A', 23),
('D6', 'A', 24),
('E1', 'A', 25),
('E2', 'A', 26),
('E3', 'A', 27),
('E4', 'A', 28),
('E5', 'A', 29),
('E6', 'A', 30),
('F1', 'A', 31),
('F2', 'A', 32),
('F3', 'A', 33),
('F4', 'A', 34),
('F5', 'A', 35),
('F6', 'A', 36),
('G1', 'A', 37),
('G2', 'A', 38),
('G3', 'A', 39),
('G4', 'A', 40),
('G5', 'A', 41),
('G6', 'A', 42);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_FILM` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `HARGA` int(11) NOT NULL,
  `JUMLAH_TIKET` int(11) NOT NULL,
  `JADWAL_NONTON` varchar(100) NOT NULL,
  `NO_KURSI` varchar(20) NOT NULL,
  `RANDOM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `ID_FILM`, `NAMA`, `HARGA`, `JUMLAH_TIKET`, `JADWAL_NONTON`, `NO_KURSI`, `RANDOM`) VALUES
(22, 17, 'Hilnanda%20Ardiansyah', 25000, 1, 'Pagi', '2', 'QFbJL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`ID_AKUN`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_FILM`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`ID_KURSI`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `ID_AKUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID_FILM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
