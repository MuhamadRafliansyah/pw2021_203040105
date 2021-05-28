-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 09.39
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otomotif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `otomotif`
--

CREATE TABLE `otomotif` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `categori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `otomotif`
--

INSERT INTO `otomotif` (`id`, `img`, `nama`, `description`, `price`, `categori`) VALUES
(3, 'baut.jpg', 'Baut Light', 'Screw Kit Blok Mesin ZX636 Lightec', 'Rp 1600.000', 'Otomotif'),
(4, 'bautrem.jpg', 'Baut Banjo', 'Bold baut kasar Lightech', 'Rp 125000', 'Otomotif'),
(5, 'handleBrembo.jpg', 'Master Rem', 'Brembo Rcs 15 untuk cbr150 R15 GSXR150 NMAX', 'Rp 4000.0000', 'Otomotif'),
(6, 'tabungminyakrem.jpg', 'Tabung Min', 'Reservoir Fluid Brembo kecil', 'Rp 300.000', 'Otomotif'),
(7, 'tutuptangki.jpg', 'Fuel cap N', 'Fuel cap ninja250fi 2018 zx25r Tracer', 'Rp 750.000', 'Otomotif'),
(8, 'underbond.jpg', 'footstep', 'Underbond Kawasaki Ninja250 Bpro', 'Rp 1550.000', 'Otomotif'),
(9, 'KaliperBrembo.jpg', 'KaliperBre', '\"Belakang untuk motor X-Max Grey Red logo', 'Rp 2750.000', 'Otomotif'),
(10, 'underbondwr3.jpg', 'Underbond ', 'Underbond WR3', 'Rp 2500.00', 'Otomotif'),
(21, 'OZ.jpg', 'Velg oz Ra', 'velg oz racing italy', 'Rp 50.000.000', 'Otomotif'),
(22, 'Accosatto.jpg', 'kopling ac', 'kopling untuk segala jenis motor', 'Rp 2600.000', 'Otomotif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'tubes', '$2y$10$KuxnpaXXNokpAzUgib4qxOPRcD8dRo69cQLLBSdUMm.uqFCFRcmke'),
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
