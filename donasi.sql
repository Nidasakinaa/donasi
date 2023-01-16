-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2023 pada 07.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formdonasi`
--

CREATE TABLE `formdonasi` (
  `nomor` int(100) NOT NULL,
  `nama` varchar(85) NOT NULL,
  `telepon` int(65) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenisDonasi` varchar(100) NOT NULL,
  `pengkhususanDonasi` varchar(150) NOT NULL,
  `metodePembayaran` varchar(150) NOT NULL,
  `jumlahRp` int(97) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `formdonasi`
--

INSERT INTO `formdonasi` (`nomor`, `nama`, `telepon`, `email`, `jenisDonasi`, `pengkhususanDonasi`, `metodePembayaran`, `jumlahRp`) VALUES
(22, 'kukuh', 812309, 'ahdkd@gmailc.com', 'Zakat', 'Program Ekonomi', 'gopay', 1900),
(23, 'gading', 2147483647, 'kjasfj@gmail.com', 'Zakat', 'Sedekah Shubuh', 'gopay', 9000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `formdonasi`
--
ALTER TABLE `formdonasi`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `formdonasi`
--
ALTER TABLE `formdonasi`
  MODIFY `nomor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
