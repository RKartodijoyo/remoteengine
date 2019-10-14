-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2019 pada 15.06
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alarm`
--

CREATE TABLE `alarm` (
  `ID` int(5) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `STATUS1` tinyint(1) NOT NULL,
  `STATUS2` tinyint(1) NOT NULL,
  `WARNA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alarm`
--

INSERT INTO `alarm` (`ID`, `NAMA`, `STATUS1`, `STATUS2`, `WARNA`) VALUES
(1, 'LOPSS', 0, 0, 0),
(2, 'OVERSPEED', 0, 0, 0),
(3, 'HIGH FUEL DIFFERENTIAL', 0, 0, 0),
(4, 'PARTICLE DETECTOR', 0, 0, 0),
(5, 'HIGH OIL DIFFERENTIAL', 0, 0, 1),
(6, 'LOW JACKET WATER', 0, 0, 1),
(7, 'LOW OIL PRESSURE', 0, 0, 1),
(8, 'LOW FUEL PRESSURE', 0, 0, 1),
(9, 'HIGH CRANKCASE', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hmi`
--

CREATE TABLE `hmi` (
  `ID` int(5) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TANGGAL` date NOT NULL,
  `WAKTU` time NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `WARNA` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hmi`
--

INSERT INTO `hmi` (`ID`, `NAMA`, `TANGGAL`, `WAKTU`, `STATUS`, `WARNA`) VALUES
(1, 'HIGH OIL DIFFERENTIAL', '2019-10-09', '15:11:12', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alarm`
--
ALTER TABLE `alarm`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `hmi`
--
ALTER TABLE `hmi`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
