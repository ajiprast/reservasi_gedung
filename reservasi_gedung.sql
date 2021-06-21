-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi_gedung`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `nama_diskon` varchar(30) NOT NULL,
  `hari` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `nama_diskon`, `hari`, `diskon`, `keterangan`) VALUES
(2, 'min 10 hari sewa', 10, 40, 'minimal penyewaan 10 hari untuk mendapatkan diskon 40%'),
(3, 'min 2 hari sewa', 2, 10, 'minimal penyewaan 2 hari untuk mendapatkan diskon 10%'),
(4, 'min 5 hari sewa', 5, 30, 'jika menyewa lebih dari 5 hari maka dapat diskon 30%');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL,
  `harga_reservasi` int(11) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `harga_reservasi`, `fasilitas`) VALUES
(1, 'Acara Malam', 7000000, 'air conditioner, sound sistem, kursi futura 260 seat\r\n'),
(2, 'Full service', 14000000, 'sound sistem, kursi 240 seat, alat presmanan, meja makan dll'),
(3, 'Pemakaian Out Door', 20000000, 'SDA, outdoor / sebelah timur gedung, area parkir untuk acara katering');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nomor_reservasi` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `lama_reservasi` int(11) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nomor_reservasi`, `id_user`, `id_gedung`, `nik`, `nama_pelanggan`, `tgl_mulai`, `tgl_akhir`, `total_bayar`, `lama_reservasi`, `no_hp`, `keterangan`, `status`) VALUES
(32, 'PW000001', 1, 3, 1234, 'andri', '2021-03-15', '2021-03-17', 37800000, 3, '098765787', 'pernikahan anak saya', 2),
(33, 'PW000033', 1, 4, 1234, 'rohman', '2021-03-23', '2021-03-24', 36000000, 2, '98997979', 'anak saya sunatan pak', 3),
(34, 'pw000002', 2, 4, 1234, 'sewon', '2021-02-10', '2021-03-15', 50000000, 5, '098777', 'sunatan', 3),
(35, 'PW000035', 1, 3, 1234, 'reza', '2021-04-07', '2021-04-10', 50400000, 4, '092398', '12345678', 3),
(36, 'PW000036', 1, 4, 1234, 'mega', '2021-03-30', '2021-03-31', 36000000, 2, '9898898958', 'pernikahan', 3),
(38, 'PW000038', 1, 3, 123456788, 'via', '2021-05-30', '2021-05-31', 25200000, 2, '08965', 'sewa 2 hari ya pak', 2),
(40, 'PW000040', 1, 3, 2147483647, 'Aji Prasetiyo', '2021-06-08', '2021-06-11', 50400000, 4, '082324039344', 'asdasdas', 4),
(41, 'PW000041', 1, 4, 2147483647, 'Vallen', '2021-06-02', '2021-06-04', 54000000, 3, '0823246999', 'Kemping', 3),
(42, 'PW000042', 1, 2, 2147483647, 'Novianti', '2021-06-22', '2021-06-26', 49000000, 5, '83123222339', 'asdassaaa', 3),
(43, 'PW000043', 1, 2, 2147483647, 'Aji Prasetiyo', '2021-06-17', '2021-06-20', 50400000, 4, '08232443444', 'adASDASFSA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `di_reservasi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`di_reservasi`, `id_pelanggan`, `tgl_reservasi`) VALUES
(64, 33, '2021-03-23'),
(65, 33, '2021-03-24'),
(66, 35, '2021-04-07'),
(67, 35, '2021-04-08'),
(68, 35, '2021-04-09'),
(69, 35, '2021-04-10'),
(70, 36, '2021-03-30'),
(71, 36, '2021-03-31'),
(76, 41, '2021-06-02'),
(77, 41, '2021-06-03'),
(78, 41, '2021-06-04'),
(79, 42, '2021-06-22'),
(80, 42, '2021-06-23'),
(81, 42, '2021-06-24'),
(82, 42, '2021-06-25'),
(83, 42, '2021-06-26'),
(84, 43, '2021-06-17'),
(85, 43, '2021-06-18'),
(86, 43, '2021-06-19'),
(87, 43, '2021-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pelanggan`, `testi`) VALUES
(2, 29, 'menurut saya pengelola sangat ramah dan membantu sekali dalam menangani masalah-masalah yang ada pada saat acara'),
(3, 36, 'sangat menyentuh hati'),
(4, 35, 'pelayananya memuaskan anak saya suka'),
(5, 43, 'Mantap tempat luas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `image`, `password`, `role_id`) VALUES
(39, 'Novianti', 'default.jpg', '$2y$10$gIeIf6iBnW6m7zAFT6Pm6e.Eypquyoz/CfEAf.eVWyuOzzdyA3H6a', 2),
(44, 'andri', 'default.jpg', '$2y$10$hdxW4fDVQn.Ckz009u/D0eMxNoz50sPwAAUn1e/8J3xVELb77CEYe', 1),
(45, 'rahmat', 'default.jpg', '$2y$10$IuaXi7DJNmuepOyTu4Y4eOpKmyR7ST3wSM1BWaMAMLSp4cwcW39Qi', 2),
(46, 'Mega', 'default.jpg', '$2y$10$i1FJ.PdB3NmMw.g.8PWNFu.9Wp0dkNRRKCsvzJQgFqMDkwbf0y9Cm', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`di_reservasi`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `di_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
