-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2021 pada 13.02
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
-- Struktur dari tabel `data_donor`
--

CREATE TABLE `data_donor` (
  `id` int(11) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `ruang_pasien` varchar(25) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `alamat_pendonor` varchar(225) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `no_tali` varchar(100) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bb_tensi` varchar(10) NOT NULL,
  `hb` varchar(10) NOT NULL,
  `hiv` varchar(10) NOT NULL,
  `hcv` varchar(10) NOT NULL,
  `hbsag` varchar(10) NOT NULL,
  `sypilis` varchar(10) NOT NULL,
  `tgl_donor` int(225) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_donor`
--

INSERT INTO `data_donor` (`id`, `nama_pendonor`, `nama_pasien`, `ruang_pasien`, `gol_darah`, `alamat_pendonor`, `agama`, `no_tali`, `pekerjaan`, `jenis_kelamin`, `bb_tensi`, `hb`, `hiv`, `hcv`, `hbsag`, `sypilis`, `tgl_donor`, `no_hp`, `petugas`) VALUES
(5, 'mustajirun', 'yanti', '-', 'A', 'tunggang', 'islam', '143 x 4559', 'tani', 'Laki-Laki', '120/80', '15,7', '-', '-', '-', '-', 1604185200, '085832354488', 'yogi prayoga'),
(6, 'arjun', 'yulis arnita', '-', 'A', 'ponpan', 'islam', '143x5907', 'swasta', 'Laki-Laki', '120/80', '14,0', '-', '-', '-', '-', 1604185200, '', 'yogi prayoga'),
(7, 'osadi saputra', 'resding pangabean', '-', 'A', 'penarik', 'islam', '143x5906', 'satpam', 'Laki-Laki', '110/70', '13,0', '-', '-', '-', '-', 1604444400, '081377686383', 'yogi prayoga'),
(8, 'endra', 'safinayul', 'angrek', 'A', 'penarik', 'islam', '-', 'tni', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1604444400, '082283833657', 'yogi prayoga'),
(9, 'pubri', 'turi', 'melati', 'A', 'ujung padang', 'islam', '588833', 'irt', 'Perempuan', '110/70', '13,4', '-', '-', '-', '-', 1604530800, '', 'yogi prayoga'),
(10, 'badri santoso', 'monika putri', 'angrek', 'B', 'kodim', 'islam', 'v30/0929', 'tni', 'Laki-Laki', '120/70', '14,5', '-', '-', '-', '-', 1605481200, '081346205667', 'yogi prayoga'),
(11, 'nina', 'hundarmi', 'icu', 'B', 'sp2 air manjunto', 'islam', '-', 'irt', 'Perempuan', '-', '-', '-', '-', '-', '-', 1604444400, '081288115359', 'yogi prayoga'),
(12, 'indra', 'puput', 'melati', 'AB', 'ipuh', 'islam', 'l4589007', 'pns', 'Laki-Laki', '110/70', '15,0', '-', '-', '-', '-', 1605135600, '082378413848', 'yogi prayoga'),
(13, 'nida', 'nita andila', 'vip', 'AB', 'penarik', 'islam', '143x6093', 'penarik', 'Perempuan', '110/80', '13,8', '-', '-', '-', '-', 1605135600, '085267949598', 'yogi prayoga'),
(14, 'ali', 'nuryati', 'igd', 'O', 'mukomuko', 'islam', '143X537', 'rsud mukomuko', 'Laki-Laki', '120/80', '15,0', '-', '-', '-', '-', 1604358000, '', 'yogi prayoga'),
(15, 'arianda', 'lailatul kadar', 'hd', 'O', 'lusan', 'islam', '-', 'rsud mukomuko', 'Laki-Laki', '130/80', '13,1', '-', '-', '-', '-', 1604617200, '', 'yogi prayoga'),
(16, 'muh harifin', 'basori', 'icu', 'B', 'sp 10', 'islam', '143x55328', 'mahasiswa', 'Laki-Laki', '120/90', '16,0', '-', '-', '-', '-', 1606086000, '082269000349', 'yogi prayoga'),
(17, 'joko', 'basori', 'iccu', 'B', 'sp 9', 'islam', '243x5236', 'swasta', 'Laki-Laki', '120/70', '14,8', '-', '-', '-', '-', 1606086000, '082281782558', 'yogi prayoga'),
(18, 'dwi', 'stok utd', 'stok utd', 'O', 'sp 9', 'islam', '143x6138', 'swasta', 'Laki-Laki', '110/70', '14,9', '-', '-', '-', '-', 1606086000, '085339300826', 'yogi prayoga'),
(19, 'jumain', 'warsini', 'al barrah', 'O', 'sp 6', 'islam', '143x3881', 'swasta', 'Laki-Laki', '120/70', '14,5', '-', '-', '-', '-', 1606086000, '082215803087', 'yogi prayoga'),
(20, 'sandi pranadi', 'nuraji', '-', 'A', 'arah tiga', 'islam', '143x5052', 'swasta', 'Laki-Laki', '130/90', '15,4', '-', '-', '-', '-', 1606172400, '085379222181', 'yogi prayoga'),
(21, 'gempur', 'stok utd', 'stok utd', 'A', '-', 'islam', '149c8388', 'swasta', 'Perempuan', '120/80', '14,0', '-', '-', '-', '-', 1608246000, '', 'yogi prayoga'),
(22, 'jajat', 'stok utd', 'stok utd', 'A', '-', 'islam', '143x6361', 'pns', 'Laki-Laki', '110/70', '15,0', '-', '-', '-', '-', 1607036400, '', 'yogi prayoga'),
(23, 'rianto', 'rita', 'iccu', 'B', 'pt agro', 'islam', '149c8430', 'swasta', 'Laki-Laki', '120/80', '15,5', '-', '-', '-', '-', 1608246000, '', 'yogi prayoga'),
(26, 'sus', 'afrudin', 'mawar', 'O', 'ujung padang', 'islam', '149c6365', 'pns', 'Laki-Laki', '110/70', '13,1', '-', '-', '-', '-', 1608246000, '082267693352', 'yogi prayoga'),
(28, 'agus', 'nanik', 'anggerta', 'A', 'pt agro', 'islam', '149c8383', 'pns', 'Laki-Laki', '110/80', '14,9', '-', '-', '-', '-', 1608246000, '085267879790', 'yogi prayoga'),
(29, 'sus', 'afrudin', 'mawar', 'AB', 'ujuang padang', 'islam', '149c6365', 'pns', 'Perempuan', '110/70', '13,1', '-', '-', '-', '-', 1608246000, '085267693352', 'yogi prayoga'),
(31, 'm.okta', 'aldinu', 'melati', 'A', 'kodim', 'islam', '149c4614', 'tni', 'Laki-Laki', '110/70', '16,0', '-', '-', '-', '-', 1608505200, '082183076496', 'yogi prayoga'),
(32, 'kirmansyah', 'aliando', 'melati', 'A', 'kodim', 'islam', '149c5630', 'tni', 'Laki-Laki', '120/70', '13,0', '-', '-', '-', '-', 1608505200, '081250341633', 'yogi prayoga'),
(33, 'fernandes', 'afrudin', 'mawar', 'O', 'ujung padang', 'islam', '149c5971', '-', 'Laki-Laki', '110/70', '15,1', '-', '-', '-', '-', 1608505200, '085273687315', 'yogi prayoga'),
(34, 'adi wijaya', 'nonik', 'anggrek', 'A', 'ujung padang', 'islam', '149c5222', 'swasta', 'Laki-Laki', '110/70', '14,5', '-', '-', '-', '-', 1608678000, '085363085622', 'yogi prayoga'),
(35, 'abran', 'nonik', 'anggrek', 'A', 'koto jaya', 'islam', '149cb238', 'swasta', 'Laki-Laki', '110/70', '14,2', '-', '-', '-', '-', 1608678000, '082285457738', 'yogi prayoga'),
(36, 'dimas', 'iga gusti', 'anggrek', 'A', 'lubuksanai', 'islam', '148y4766', 'swasta', 'Laki-Laki', '70/80', '14,8', '-', '-', '-', '-', 1609801200, '', 'Yogi pra'),
(37, 'ponijam', 'anita', 'anggrek', 'B', 'pt.agro', 'islam', '148y4763', 'swasta', 'Laki-Laki', '92', '14,8', '-', '-', '-', '-', 1609801200, '', 'Yogi pra'),
(38, 'kasili nardian', 'stok utd', 'stok utd', 'A', 'b.ratu', 'islam', '139c8518', 'pns', 'Laki-Laki', '140/90', '13,0', '-', '-', '-', '-', 1609887600, '085267630887', 'Yogi pra'),
(39, 'fersi', 'caurly', 'anggrek', 'A', 'b.ratu', 'islam', '14844646', 'swasta', 'Laki-Laki', '110/80', '14,1', '-', '-', '-', '-', 1609974000, '', 'Yogi pra'),
(40, 'suci', 'caury', 'anggrek', 'A', 'b.ratu', 'islam', '1497727', 'swasta', 'Perempuan', '110/80', '12,5', '-', '-', '-', '-', 1609974000, '082268053271', 'Yogi pra'),
(41, 'jianto', 'delvi', 'albara', 'B', 'lunang', 'islam', '149c8450', 'swasta', 'Laki-Laki', '120/60', '13,2', '-', '-', '-', '-', 1609974000, '085278829124', 'Yogi pra'),
(42, 'ridho arisandi', 'jabarawi', '-', 'O', 'ujungpadang', 'islam', '149c7171', 'swasta', 'Laki-Laki', '120/70', '15,5', '-', '-', '-', '-', 1609974000, '082371782152', 'Yogi pra'),
(43, 'istrianto', 'mustopa aprian', 'vip', 'A', 'mekarmulya', 'islam', '149c7340', 'swasta', 'Laki-Laki', '130/70', '13,7', '-', '-', '-', '-', 1610665200, '085273331235', 'Yogi pra'),
(44, 'didik susanto', 'din afriando', 'mawar', 'B', 'setiabudi', 'islam', '149c760', 'wirawasta', 'Laki-Laki', '120/80', '14,2', '-', '-', '-', '-', 1610665200, '082213146169', 'Yogi pra'),
(45, 'dedi setiawan', 'siti', 'anggrek', 'A', 'selaganjaya', 'islam', '149c7138', 'mahasiswa', 'Laki-Laki', '110/70', '14,5', '-', '-', '-', '-', 1611010800, '082381194131', 'Yogi pra'),
(46, 'indrianti', 'sumidan', 'mawar', 'B', 'airdikit', 'islam', '149c7984', 'swasta`', 'Perempuan', '120/80', '12,5', '-', '-', '-', '-', 1611010800, '085384560246', 'Yogi pra'),
(47, 'iksan', 'adelia', 'melati', 'O', 'sp5', 'islam', '149c2060', 'swasta', 'Laki-Laki', '120/80', '16,0', '-', '-', '-', '-', 1611010800, '', 'Yogi pra'),
(48, 'rrefin rinaldo', 'stok utd', 'stok utd', 'A', 'sp6', 'islam', '149c8046', 'tni', 'Laki-Laki', '120/80', '15,5', '-', '-', '-', '-', 1611270000, '085215590400', 'Yogi pra'),
(49, 'ego prawira', 'sumari', 'senin', 'B', 'penarik', 'islam', '149c7912', 'tni', 'Laki-Laki', '110/70', '16,5', '-', '-', '-', '-', 1611270000, '082283180597', 'Yogi pra'),
(50, 'oyon', 'wulandari', 'anggrek', 'O', 'bantal', 'islam', '149c8150', 'nelayan', 'Laki-Laki', '130/80', '12,5', '-', '-', '-', '-', 1611270000, '', 'Yogi pra'),
(51, 'syahbudin', 'bunsu', 'icu', 'AB', 'tunggang', 'islam', '148y5129', 'buruh', 'Laki-Laki', '130/80', '15,9', '-', '-', '-', '-', 1611270000, '082282590438', 'Yogi pra'),
(52, 'wahyudi', 'mardesi', 'vip', 'A', 'arahtiga', 'islam', '149c7998', 'tani', 'Laki-Laki', '120/80', '14,0', '-', '-', '-', '-', 1611615600, '', 'Yogi pra'),
(53, 'dimas saputra', 'miswanto', 'icu', 'O', 'lunag', 'islam', '149c7040', 'swasta', 'Laki-Laki', '140/80', '16,8', '-', '-', '-', '-', 1611615600, '085263722116', 'Yogi pra'),
(54, 'erik', 'stok utd', 'stok utd', 'A', 'agungjaya', 'islam', '149c7820', 'tani', 'Laki-Laki', '120/80', '13,1', '-', '-', '-', '-', 1612134000, '', 'Yogi pra'),
(55, 'linggi pratama', 'ria julita', 'angrek', 'B', 'kodim', 'islam', '140k9114', 'tni', 'Laki-Laki', '110/70', '15,5', '-', '-', '-', '-', 1612134000, '082372759225', 'Yogi pra'),
(56, 'johlan', 'herwati', 'anggrek', 'O', 'penarik', 'islam', '149c851', 'swasta', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1612134000, '082306179279', 'Yogi pra'),
(57, 'abdulah', 'usi lestari', 'mawar', 'AB', 'lusan', 'islam', '143x7117', 'k.honorer', 'Laki-Laki', '14/80', '14,5', '-', '-', '-', '-', 1612306800, '', 'Yogi pra'),
(58, 'andreas', 'eva jumati', 'icu', 'A', 'sp3', 'islam', '149x7644', 'swasta', 'Laki-Laki', '110/70', '13,9', '-', '-', '-', '-', 1612738800, '082211743662', 'Yogi pra'),
(59, 'alfa', 'silyawana', 'hd', 'O', 'sp3', 'islam', '-', 'swasta', 'Laki-Laki', '140/80', '16,2', '-', '-', '-', '-', 1612738800, '082280168386', 'Yogi pra'),
(60, 'rizal', 'bekti', 'mawar', 'B', 'b.ratu', 'islam', '149x8918', 'swasta', 'Laki-Laki', '120/80', '12,5', '-', '-', '-', '-', 1612825200, '085366346866', 'Yogi pra'),
(61, 'idris', 'm.yadi', 'seruni', 'A', 'nibung', 'islam', '143x7606', '-', 'Laki-Laki', '120/70', '13,0', '-', '-', '-', '-', 1613516400, '', 'Yogi pra'),
(62, 'adri', 'dwi', 'mawar', 'B', 'lubukmukti', 'islam', '140k8624', 'awasta', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1613516400, '085267546368', 'Yogi pra'),
(63, 'agino', 'jusmarni', 'icu', 'O', 'lubukbangka', 'islam', '149x8440', 'swasta', 'Laki-Laki', '110/70', '-', '-', '-', '-', '-', 1613516400, '', 'Yogi pra'),
(64, 'samsul', 'tono', 'seruni', 'A', 'sp2', 'islam', '149x8537', 'swasta', 'Laki-Laki', '130/80', '14,2', '-', '-', '-', '-', 1613689200, '082283950140', 'Yogi pra'),
(65, 'gendri', 'kurnadi', 'seruni', 'B', 'arahtiga', 'islam', '143x5625', 'tani', 'Laki-Laki', '110/70', '15,5', '-', '-', '-', '-', 1613689200, '082269527335', 'Yogi pra'),
(66, 'rudi h', 'hurhajat', 'mawar', 'A', 'porles', 'islam', '149c6672', 'porli', 'Laki-Laki', '150/100', '14,7', '-', '-', '-', '-', 1614034800, '082269224317', 'Yogi pra'),
(67, 'yopi', 'widiya', 'melati', 'B', 'lunang', 'islam', '149x7755', 'pns', 'Laki-Laki', '120/70', '12,8', '-', '-', '-', '-', 1614034800, '', 'Yogi pra');

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
(10, 'Yogi prayoga', 'admin@gmail.com', 'foto1.jpg', '$2y$10$ZGVi5T8bSdxJEQHYYmI7A.LWIVcQ4nPfdebLXT0nraiCf9mhQefAm', 1, 1, 1614261070),
(11, 'petugas1', 'petugas@gmail.com', 'foto5.jpg', '$2y$10$8pCn6wKyK/oHiCJE8/q3COjpPYPCOGdndC0eGNS1s1e/vIeE1rtoC', 2, 1, 1614261115);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
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
-- AUTO_INCREMENT untuk tabel `data_donor`
--
ALTER TABLE `data_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
