-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2018 pada 02.33
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adatoko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `namaToko` varchar(10) NOT NULL,
  `alamatToko` varchar(30) NOT NULL,
  `noTelp` int(13) NOT NULL,
  `k_lat` double NOT NULL,
  `k_long` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `email`, `password`, `namaToko`, `alamatToko`, `noTelp`, `k_lat`, `k_long`) VALUES
(1, '', 'asd', 'ABC', 'Kopo Permai III blok 36A no 8', 2147483647, -6.919781271197032, 0),
(2, 'Sapi@gmail.com', 'kuda', 'Sapi', 'Kopo', 2147483647, -6.974309621547178, 107.73019025000008);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksicheckout`
--

CREATE TABLE `transaksicheckout` (
  `firstName` varchar(16) DEFAULT NULL,
  `lastName` varchar(16) DEFAULT NULL,
  `companyName` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `negara` varchar(32) NOT NULL,
  `address` varchar(56) NOT NULL,
  `kota` varchar(16) NOT NULL,
  `kodePos` int(8) NOT NULL,
  `noTelepon` int(12) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `idTransaksi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksicheckout`
--

INSERT INTO `transaksicheckout` (`firstName`, `lastName`, `companyName`, `email`, `negara`, `address`, `kota`, `kodePos`, `noTelepon`, `komentar`, `idTransaksi`) VALUES
('Muhammad Adrian', 'Zubir', 'ada', 'adrianzbrr1@gmail.com', 'usa', 'Kopo Permai III blok 36A no 8', 'Bandung', 40227, 2147483647, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `transaksicheckout`
--
ALTER TABLE `transaksicheckout`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksicheckout`
--
ALTER TABLE `transaksicheckout`
  MODIFY `idTransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
