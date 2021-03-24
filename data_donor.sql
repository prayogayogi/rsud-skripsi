-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utd_mukomuko`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_donor`
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
  `tanggal` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_donor`
--

INSERT INTO `data_donor` (`id`, `nama_pendonor`, `nama_pasien`, `ruang_pasien`, `gol_darah`, `alamat_pendonor`, `agama`, `no_tali`, `pekerjaan`, `jenis_kelamin`, `bb_tensi`, `hb`, `hiv`, `hcv`, `hbsag`, `sypilis`, `tgl_donor`, `tanggal`, `no_hp`, `petugas`) VALUES
(5, 'mustajirun', 'stok utd', 'stok utd', 'A', 'tunggang', 'islam', '143 x 4559', 'tani', 'Laki-Laki', '120/80', '15,7', '+', '-', '-', '-', 1604185200, '2020-11-01', '085832354488', 'yogi prayoga'),
(6, 'arjun', 'stok utd', 'stok utd', 'B', 'ponpan', 'islam', '143x5907', 'swasta', 'Laki-Laki', '120/80', '14,0', '-', '-', '-', '-', 1604185200, '2020-11-01', '', 'yogi prayoga'),
(7, 'osadi saputra', 'stok utd', 'stok utd', 'AB', 'penarik', 'islam', '143x5906', 'satpam', 'Laki-Laki', '110/70', '13,0', '-', '-', '-', '-', 1604444400, '2020-11-04', '081377686383', 'yogi prayoga'),
(8, 'endra', 'safinayul', 'angrek', 'A', 'penarik', 'islam', '-', 'tni', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1604444400, '2020-11-04', '082283833657', 'yogi prayoga'),
(9, 'pubri', 'turi', 'melati', 'A', 'ujung padang', 'islam', '588833', 'irt', 'Perempuan', '110/70', '13,4', '+', '-', '-', '-', 1604530800, '2020-11-05', '', 'yogi prayoga'),
(10, 'badri santoso', 'monika putri', 'angrek', 'B', 'kodim', 'islam', 'v30/0929', 'tni', 'Laki-Laki', '120/70', '14,5', '-', '-', '-', '-', 1605481200, '2020-11-16', '081346205667', 'yogi prayoga'),
(11, 'nina', 'hundarmi', 'icu', 'B', 'sp2 air manjunto', 'islam', '-', 'irt', 'Perempuan', '-', '-', '-', '-', '-', '-', 1604444400, '2020-11-04', '081288115359', 'yogi prayoga'),
(12, 'indra', 'puput', 'melati', 'AB', 'ipuh', 'islam', 'l4589007', 'pns', 'Laki-Laki', '110/70', '15,0', '-', '-', '-', '-', 1605135600, '2020-11-12', '082378413848', 'yogi prayoga'),
(13, 'nida', 'nita andila', 'vip', 'AB', 'penarik', 'islam', '143x6093', 'penarik', 'Perempuan', '110/80', '13,8', '-', '-', '-', '-', 1605135600, '2020-11-12', '085267949598', 'yogi prayoga'),
(14, 'ali', 'nuryati', 'igd', 'O', 'mukomuko', 'islam', '143X537', 'rsud mukomuko', 'Laki-Laki', '120/80', '15,0', '-', '-', '-', '-', 1604358000, '2020-11-03', '', 'yogi prayoga'),
(15, 'arianda', 'lailatul kadar', 'hd', 'O', 'lusan', 'islam', '-', 'rsud mukomuko', 'Laki-Laki', '130/80', '13,1', '-', '-', '-', '-', 1604617200, '2020-11-06', '', 'yogi prayoga'),
(16, 'muh harifin', 'basori', 'icu', 'B', 'sp 10', 'islam', '143x55328', 'mahasiswa', 'Laki-Laki', '120/90', '16,0', '-', '-', '-', '-', 1606086000, '2020-11-23', '082269000349', 'yogi prayoga'),
(17, 'joko', 'basori', 'iccu', 'B', 'sp 9', 'islam', '243x5236', 'swasta', 'Laki-Laki', '120/70', '14,8', '-', '-', '-', '-', 1606086000, '2020-11-23', '082281782558', 'yogi prayoga'),
(18, 'dwi', 'sudah diambil', 'stok utd', 'O', 'sp 9', 'islam', '143x6138', 'swasta', 'Laki-Laki', '110/70', '14,9', '-', '-', '-', '-', 1606086000, '2020-11-23', '085339300826', 'yogi prayoga'),
(19, 'jumain', 'warsini', 'al barrah', 'O', 'sp 6', 'islam', '143x3881', 'swasta', 'Laki-Laki', '120/70', '14,5', '-', '-', '-', '-', 1606086000, '2020-11-23', '082215803087', 'yogi prayoga'),
(20, 'sandi pranadi', 'nuraji', '-', 'A', 'arah tiga', 'islam', '143x5052', 'swasta', 'Laki-Laki', '130/90', '15,4', '-', '-', '-', '-', 1606172400, '2020-11-24', '085379222181', 'yogi prayoga'),
(21, 'gempur', 'sudah diambil', 'stok utd', 'A', '-', 'islam', '149c8388', 'swasta', 'Perempuan', '120/80', '14,0', '-', '-', '-', '-', 1608246000, '2020-12-18', '', 'yogi prayoga'),
(22, 'jajat', 'stok utd', 'stok utd', 'A', '-', 'islam', '143x6361', 'pns', 'Laki-Laki', '110/70', '15,0', '-', '-', '-', '-', 1607036400, '2020-12-04', '', 'yogi prayoga'),
(23, 'rianto', 'rita', 'iccu', 'B', 'pt agro', 'islam', '149c8430', 'swasta', 'Laki-Laki', '120/80', '15,5', '-', '-', '-', '-', 1608246000, '2020-12-18', '', 'yogi prayoga'),
(26, 'sus', 'afrudin', 'mawar', 'O', 'ujung padang', 'islam', '149c6365', 'pns', 'Laki-Laki', '110/70', '13,1', '-', '-', '-', '-', 1608246000, '2020-12-18', '082267693352', 'yogi prayoga'),
(28, 'agus', 'nanik', 'anggerta', 'A', 'pt agro', 'islam', '149c8383', 'pns', 'Laki-Laki', '110/80', '14,9', '-', '-', '-', '-', 1608246000, '2020-12-18', '085267879790', 'yogi prayoga'),
(29, 'sussanto', 'afrudin', 'mawar', 'AB', 'ujuang padang', 'islam', '149c6365', 'pns', 'Perempuan', '110/70', '13,1', '-', '-', '-', '-', 1608246000, '2020-12-18', '085267693352', 'yogi prayoga'),
(31, 'm.okta', 'aldinu', 'melati', 'A', 'kodim', 'islam', '149c4614', 'tni', 'Laki-Laki', '110/70', '16,0', '-', '-', '-', '-', 1608505200, '2020-12-21', '082183076496', 'yogi prayoga'),
(32, 'kirmansyah', 'aliando', 'melati', 'A', 'kodim', 'islam', '149c5630', 'tni', 'Laki-Laki', '120/70', '13,0', '-', '-', '-', '-', 1608505200, '2020-12-21', '081250341633', 'yogi prayoga'),
(33, 'fernandes', 'afrudin', 'mawar', 'O', 'ujung padang', 'islam', '149c5971', '-', 'Laki-Laki', '110/70', '15,1', '-', '-', '-', '-', 1608505200, '2020-12-21', '085273687315', 'yogi prayoga'),
(34, 'adi wijaya', 'nonik', 'anggrek', 'A', 'ujung padang', 'islam', '149c5222', 'swasta', 'Laki-Laki', '110/70', '14,5', '-', '-', '-', '-', 1608678000, '2020-12-23', '085363085622', 'yogi prayoga'),
(35, 'abran', 'nonik', 'anggrek', 'A', 'koto jaya', 'islam', '149cb238', 'swasta', 'Laki-Laki', '110/70', '14,2', '-', '-', '-', '-', 1608678000, '2020-12-23', '082285457738', 'yogi prayoga'),
(36, 'dimas', 'iga gusti', 'anggrek', 'A', 'lubuksanai', 'islam', '148y4766', 'swasta', 'Laki-Laki', '70/80', '14,8', '-', '-', '-', '-', 1609801200, '2021-01-05', '', 'Yogi pra'),
(37, 'ponijam', 'anita', 'anggrek', 'B', 'pt.agro', 'islam', '148y4763', 'swasta', 'Laki-Laki', '92', '14,8', '-', '-', '-', '-', 1609801200, '2021-01-05', '', 'Yogi pra'),
(38, 'kasili nardian', 'stok utd', 'stok utd', 'A', 'b.ratu', 'islam', '139c8518', 'pns', 'Laki-Laki', '140/90', '13,0', '-', '-', '-', '-', 1609887600, '2021-01-06', '085267630887', 'Yogi pra'),
(39, 'fersi', 'caurly', 'anggrek', 'A', 'b.ratu', 'islam', '14844646', 'swasta', 'Laki-Laki', '110/80', '14,1', '-', '-', '-', '-', 1609974000, '2021-01-07', '', 'Yogi pra'),
(40, 'suci', 'caury', 'anggrek', 'A', 'b.ratu', 'islam', '1497727', 'swasta', 'Perempuan', '110/80', '12,5', '-', '-', '-', '-', 1609974000, '2021-01-07', '082268053271', 'Yogi pra'),
(41, 'jianto', 'delvi', 'albara', 'B', 'lunang', 'islam', '149c8450', 'swasta', 'Laki-Laki', '120/60', '13,2', '-', '-', '-', '-', 1609974000, '2021-01-07', '085278829124', 'Yogi pra'),
(42, 'ridho arisandi', 'jabarawi', '-', 'O', 'ujungpadang', 'islam', '149c7171', 'swasta', 'Laki-Laki', '120/70', '15,5', '-', '-', '-', '-', 1609974000, '2021-01-07', '082371782152', 'Yogi pra'),
(43, 'istrianto', 'mustopa aprian', 'vip', 'A', 'mekarmulya', 'islam', '149c7340', 'swasta', 'Laki-Laki', '130/70', '13,7', '-', '-', '-', '-', 1610665200, '2021-01-15', '085273331235', 'Yogi pra'),
(44, 'didik susanto', 'din afriando', 'mawar', 'B', 'setiabudi', 'islam', '149c760', 'wirawasta', 'Laki-Laki', '120/80', '14,2', '-', '-', '-', '-', 1610665200, '2021-01-15', '082213146169', 'Yogi pra'),
(45, 'dedi setiawan', 'siti', 'anggrek', 'A', 'selaganjaya', 'islam', '149c7138', 'mahasiswa', 'Laki-Laki', '110/70', '14,5', '-', '-', '-', '-', 1611010800, '2021-01-19', '082381194131', 'Yogi pra'),
(46, 'indrianti', 'sumidan', 'mawar', 'B', 'airdikit', 'islam', '149c7984', 'swasta`', 'Perempuan', '120/80', '12,5', '-', '-', '-', '-', 1611010800, '2021-01-19', '085384560246', 'Yogi pra'),
(47, 'iksan', 'adelia', 'melati', 'O', 'sp5', 'islam', '149c2060', 'swasta', 'Laki-Laki', '120/80', '16,0', '-', '-', '-', '-', 1611010800, '2021-01-19', '', 'Yogi pra'),
(48, 'rrefin rinaldo', 'stok utd', 'stok utd', 'A', 'sp6', 'islam', '149c8046', 'tni', 'Laki-Laki', '120/80', '15,5', '-', '-', '-', '-', 1611270000, '2021-01-22', '085215590400', 'Yogi pra'),
(49, 'ego prawira', 'sumari', 'senin', 'B', 'penarik', 'islam', '149c7912', 'tni', 'Laki-Laki', '110/70', '16,5', '-', '-', '-', '-', 1611270000, '2021-01-22', '082283180597', 'Yogi pra'),
(50, 'oyon', 'wulandari', 'anggrek', 'O', 'bantal', 'islam', '149c8150', 'nelayan', 'Laki-Laki', '130/80', '12,5', '-', '-', '-', '-', 1611270000, '2021-01-22', '', 'Yogi pra'),
(51, 'syahbudin', 'bunsu', 'icu', 'AB', 'tunggang', 'islam', '148y5129', 'buruh', 'Laki-Laki', '130/80', '15,9', '-', '-', '-', '-', 1611270000, '2021-01-22', '082282590438', 'Yogi pra'),
(52, 'wahyudi', 'mardesi', 'vip', 'A', 'arahtiga', 'islam', '149c7998', 'tani', 'Laki-Laki', '120/80', '14,0', '-', '-', '-', '-', 1611615600, '2021-01-26', '', 'Yogi pra'),
(53, 'dimas saputra', 'miswanto', 'icu', 'O', 'lunag', 'islam', '149c7040', 'swasta', 'Laki-Laki', '140/80', '16,8', '-', '-', '-', '-', 1611615600, '2021-01-26', '085263722116', 'Yogi pra'),
(54, 'erik', 'stok utd', 'stok utd', 'O', 'agungjaya', 'islam', '149c7820', 'tani', 'Laki-Laki', '120/80', '13,1', '-', '-', '-', '-', 1612134000, '2021-02-01', '', 'Yogi pra'),
(55, 'linggi pratama', 'ria julita', 'angrek', 'B', 'kodim', 'islam', '140k9114', 'tni', 'Laki-Laki', '110/70', '15,5', '-', '-', '-', '-', 1612134000, '2021-02-01', '082372759225', 'Yogi pra'),
(56, 'johlan', 'herwati', 'anggrek', 'O', 'penarik', 'islam', '149c851', 'swasta', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1612134000, '2021-02-01', '082306179279', 'Yogi pra'),
(57, 'abdulah', 'usi lestari', 'mawar', 'AB', 'lusan', 'islam', '143x7117', 'k.honorer', 'Laki-Laki', '14/80', '14,5', '-', '-', '-', '-', 1612306800, '2021-02-03', '', 'Yogi pra'),
(58, 'andreas', 'eva jumati', 'icu', 'A', 'sp3', 'islam', '149x7644', 'swasta', 'Laki-Laki', '110/70', '13,9', '-', '-', '-', '-', 1612738800, '2021-02-08', '082211743662', 'Yogi pra'),
(59, 'alfa', 'silyawana', 'hd', 'O', 'sp3', 'islam', '-', 'swasta', 'Laki-Laki', '140/80', '16,2', '-', '-', '-', '-', 1612738800, '2021-02-08', '082280168386', 'Yogi pra'),
(60, 'rizal', 'bekti', 'mawar', 'B', 'b.ratu', 'islam', '149x8918', 'swasta', 'Laki-Laki', '120/80', '12,5', '-', '-', '-', '-', 1612825200, '2021-02-09', '085366346866', 'Yogi pra'),
(61, 'idris', 'm.yadi', 'seruni', 'A', 'nibung', 'islam', '143x7606', '-', 'Laki-Laki', '120/70', '13,0', '-', '-', '-', '-', 1613516400, '2021-02-17', '', 'Yogi pra'),
(62, 'adri', 'dwi', 'mawar', 'B', 'lubukmukti', 'islam', '140k8624', 'awasta', 'Laki-Laki', '120/80', '13,0', '-', '-', '-', '-', 1613516400, '2021-02-17', '085267546368', 'Yogi pra'),
(63, 'agino', 'jusmarni', 'icu', 'O', 'lubukbangka', 'islam', '149x8440', 'swasta', 'Laki-Laki', '110/70', '-', '-', '-', '-', '-', 1613516400, '2021-02-17', '', 'Yogi pra'),
(64, 'samsul', 'tono', 'seruni', 'A', 'sp2', 'islam', '149x8537', 'swasta', 'Laki-Laki', '130/80', '14,2', '-', '-', '-', '-', 1613689200, '2021-02-19', '082283950140', 'Yogi pra'),
(65, 'gendri', 'kurnadi', 'seruni', 'B', 'arahtiga', 'islam', '143x5625', 'tani', 'Laki-Laki', '110/70', '15,5', '-', '-', '-', '-', 1613689200, '2021-02-19', '082269527335', 'Yogi pra'),
(66, 'rudi h', 'hurhajat', 'mawar', 'A', 'porles', 'islam', '149c6672', 'porli', 'Laki-Laki', '150/100', '14,7', '-', '-', '-', '-', 1614034800, '2021-02-23', '082269224317', 'Yogi pra'),
(67, 'yopi', 'widiya', 'melati', 'B', 'lunang', 'islam', '149x7755', 'pns', 'Laki-Laki', '120/70', '12,8', '-', '-', '-', '-', 1614034800, '2021-02-23', '', 'Yogi pra'),
(74, 'tia', 'stok utd', 'stok utd', 'O', 'mukomuko', 'islam', '12ewrfs', 'tani', 'Laki-Laki', '120/30', '12,5', '-', '-', '-', '-', 1607727600, '2021-02-24', '082281735896', 'Yogi prayoga'),
(75, 'manda', 'stok utd', 'stok utd', 'B', 'AgungJaya', 'islam', '123,.4jgs', 'tani', 'Laki-Laki', '120/60', '13,5', '-', '-', '-', '-', 1616314515, '2021-03-21', '', 'Yogi prayoga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_donor`
--
ALTER TABLE `data_donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_donor`
--
ALTER TABLE `data_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
