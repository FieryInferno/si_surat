-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zirat`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `diteruskan` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `dgn_hormat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `perihal` text NOT NULL,
  `catatan` text NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_smasuk` int(11) NOT NULL,
  `v_read` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `tujuan` text NOT NULL,
  `teruntuk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `no_surat`, `diteruskan`, `dari`, `dgn_hormat`, `tgl_surat`, `tgl_diterima`, `sifat`, `perihal`, `catatan`, `id_pegawai`, `id_smasuk`, `v_read`, `tanggapan`, `tujuan`, `teruntuk`) VALUES
(6, '882/1525/Mutasi/2015', 'sdasdas', 'qwqw', 'Proses lebih lanjut', '0000-00-00', '2019-06-11', 'Segera', 'qwqwqw', 'sadsdads', 0, 0, 1, '', '', ''),
(7, '12233', 'Sekcam', '', 'Tanggapan dan saran', '0000-00-00', '2020-08-05', 'Segera', '', 'jajal ae gae disposisi', 0, 0, 1, '', '', ''),
(8, '122334', 'Bag.Umum dan Kepegawaian', '', 'Proses lebih lanjut', '0000-00-00', '2020-08-26', 'Rahasia', '', 'percobaan', 0, 0, 1, '', '', ''),
(9, '11111', 'Bag.Umum dan Kepegawaian', '', 'Tanggapan dan saran', '0000-00-00', '2020-09-05', 'Segera', '', 'aaaaaaaaaaa', 0, 0, 1, '', '', ''),
(10, '4', 'Bag. Pemberdayaan Masyarakat', '', 'Proses lebih lanjut', '0000-00-00', '2020-09-17', 'Segera', '', 'ccccccccccc', 0, 0, 1, '', '', ''),
(11, '5', 'Sekcam', '', 'Koordinasi dan konfirmasi', '0000-00-00', '2020-09-10', 'SangatSegera', '', 'qqqqqqq', 0, 0, 1, '', '', ''),
(12, '06/09/2020', 'Bag.Umum dan Kepegawaian', '', 'Tanggapan dan saran', '0000-00-00', '2020-09-06', 'Segera', '', 'di lanjut', 0, 0, 1, '', '', ''),
(13, '121229202', 'Bag. Pembangunan', 'perguruan', 'Proses lebih lanjut', '0000-00-00', '2020-10-29', 'Rahasia', 'rapat penting', 'percobaan', 0, 0, 1, '', '', ''),
(15, '06/12/2020', 'Kepala', 'saya sendiri', 'Proses lebih lanjut', '0000-00-00', '2020-12-31', 'Biasa', 'dicoba dulu ya', 'ok', 0, 0, 1, '0', '', ''),
(16, 'v/12/33/2020', 'Kasubag', 'saya sendiri2', 'Tanggapan dan saran', '0000-00-00', '2020-12-23', 'Segera', 'percobaan ulang', 'oke', 0, 0, 1, '0', '', ''),
(17, '03/tpa/XII/05/2020', 'staff', '', 'Proses lebih lanjut', '0000-00-00', '2020-12-06', 'Segera', 'udangan', 'okkkke', 0, 0, 1, '', '', ''),
(18, '123/12/3030', 'Bag. Umum dan Kepegawaian', 'kecamatan', 'Proses lebih lanjut', '0000-00-00', '2020-12-30', 'Segera', 'percobaan lagi', 'balasan surat', 0, 0, 1, '', '', ''),
(19, '13/13/13/13/', 'Operator', 'kabupaten', 'Tanggapan dan Saran', '0000-00-00', '2020-12-30', 'Biasa', 'lagi lagi dan lagi', 'lanjutkan', 0, 0, 1, '', '', ''),
(20, '14/14/14/1', 'Operator', 'runah', 'Proses lebih lanjut', '0000-00-00', '2020-12-23', 'Segera', 'okelah', 'buatkan surat keluar', 0, 0, 1, '', '', ''),
(21, '1/1/2021', '', 'rumah saya', 'Proses lebih lanjut', '0000-00-00', '2020-12-31', '', 'percobaan ke 4', 'buat surat keluar ya', 0, 0, 1, '', '', ''),
(22, '09/TPA/IX/2020', 'Operator', 'TPA AL-HIJROH 102', 'Proses lebih lanjut', '0000-00-00', '2020-12-23', '', 'mengundang untuk mengadakan rapat bersama', 'buat surat keluar okw', 0, 0, 1, '0', '', ''),
(23, '10/TPA/IX/2020', 'Operator', 'TPA AL-HIJROH 102', 'Proses lebih lanjut', '0000-00-00', '2020-12-25', '', 'mengajak untuk rapat', 'surat keluar', 0, 0, 1, '0', '', ''),
(24, '11/TPA/IX/2020', 'Operator', 'TPA AL-HIJROH 102', 'Proses lebih lanjut', '0000-00-00', '2020-12-30', 'Biasa', 'undangan', 'surat keluar', 0, 0, 1, '0', '', ''),
(25, '12/TPA/IX/2020', 'Operator', 'TPA AL-HIJROH 102', 'Koordinasi dan konfirmasi', '2020-12-28', '2020-12-29', 'Segera', 'rapat penting', 'langsug menujuj lokasi', 0, 0, 1, '0', '', ''),
(26, '1222222', 'Kasubag', 'tapa', '', '2021-01-13', '2021-01-15', 'Biasa', 'ajakan', '', 0, 0, 1, '0', '', 'Kasubag Tata Usaha'),
(27, '12345', 'Operator', 'Muhammadiyah', 'Proses lebih lanjut', '2021-01-24', '2021-01-25', '', 'experiment ke-30', 'buat surat keluar', 0, 0, 1, '0', 'Kepala Kantor Kesyahbandaran dan Otoritas Pelabuhan Gresik II', '');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id_skeluar` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `kode_surat` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `ditujukan` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `sifat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id_smasuk` int(11) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `kode_surat` varchar(30) NOT NULL,
  `kategori` varchar(29) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `ditujukan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id_smasuk`, `no_surat`, `kode_surat`, `kategori`, `pengirim`, `perihal`, `tgl_masuk`, `ditujukan`, `keterangan`, `foto`, `id_pegawai`) VALUES
(1, 'hhhh', 'hhhhh', 'Undangan', 'hhh', 'fdfdyt', '2021-10-12', 'hfj', 'gdgjg', 'Surat_hhhh.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `soft_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `pangkat`, `jabatan`, `akses`, `username`, `password`, `soft_delete`) VALUES
(19, '199825042022021002', 'Hana Nining Eka Nur Jayanti', 'Penata Tk.1', 'Admin', 'Admin', 'bismillah', 'bismillah', 0),
(20, '196105041982091001', 'Drs. YIYIN SODIKIN, M.Si ', 'Pembina TK.1 ', 'Kepala', 'kepala', 'yiyin', 'yiyin', 0),
(21, '196503181987031005', 'HERU KIATNO, S.Pd, M.Si', 'Pembina TK.1', 'kasubag', 'Kasubag', 'heru', 'heru', 0),
(23, '197209202007012013', 'LINA SI', 'Penata', 'Kasubag Program dan Keuangan', 'Operator', 'lina', 'lina', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_independen`
--

CREATE TABLE `surat_independen` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_partner` varchar(191) NOT NULL,
  `nama_supervisor` varchar(191) NOT NULL,
  `ketua_tim` varchar(191) NOT NULL,
  `nama_anggota_1` varchar(191) NOT NULL,
  `nama_anggota_2` varchar(191) NOT NULL,
  `nama_klien` varchar(191) NOT NULL,
  `alamat_klien` varchar(191) NOT NULL,
  `telp` int(191) NOT NULL,
  `aktivitas_utama_klien` varchar(191) NOT NULL,
  `jenis_jasa_profesi` varchar(191) NOT NULL,
  `periode_pelaksanaan` varchar(191) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_independen`
--

INSERT INTO `surat_independen` (`id`, `tanggal`, `nama_partner`, `nama_supervisor`, `ketua_tim`, `nama_anggota_1`, `nama_anggota_2`, `nama_klien`, `alamat_klien`, `telp`, `aktivitas_utama_klien`, `jenis_jasa_profesi`, `periode_pelaksanaan`, `created_at`, `updated_at`) VALUES
(1, '2021-10-06', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 3, 'a', 'a', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_skeluar`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai_2` (`id_pegawai`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_smasuk`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai_2` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `surat_independen`
--
ALTER TABLE `surat_independen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id_skeluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_smasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `surat_independen`
--
ALTER TABLE `surat_independen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
