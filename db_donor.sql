-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2021 pada 02.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_donor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `gol_darah` varchar(225) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `tgl_lahir` int(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `berat_badan` int(20) NOT NULL,
  `tgl_donor` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `gol_darah`, `alamat`, `pekerjaan`, `gender`, `tempat_tgl_lahir`, `tgl_lahir`, `no_hp`, `berat_badan`, `tgl_donor`) VALUES
(1, 'andi', 'A', 'muko muko', 'tani', 'Laki-Laki', 'mukomuko', 2021, 2147483647, 50, 1613698640);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(5) NOT NULL,
  `aktif` int(5) NOT NULL,
  `tgl_daftar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `aktif`, `tgl_daftar`) VALUES
(1, 'yogik', 'yogik@gmail.com', 'default.jpg', '$2y$10$SVgrYMNsRjlanN2DnKi8repunUplWUpob7tkk4/2Zw3Vhe3nLFZ4q', 1, 1, 1613698207),
(2, 'petugas', 'petugas@gmail.com', 'foto1.jpg', '$2y$10$UhZ/NgZPrx0KGC4T8lCY7OzaqIG8OcN6Ps7yQmg3Aja7f5pG4pwYS', 2, 1, 1613698684);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
