-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Jul 2019 pada 10.56
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go-meeting`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_presensi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_presensi` (
`id` bigint(20) unsigned
,`nama` varchar(255)
,`id_user` bigint(20) unsigned
,`kehadiran` varchar(50)
,`id_rapat` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_rapat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_rapat` (
`id` int(11) unsigned
,`tanggal` date
,`keterangan` mediumtext
,`id_event` int(11)
,`notulensi` longtext
,`nama` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` longtext,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `deskripsi`, `tanggal`) VALUES
(1, 'SWITER', 'SWITER (Studi Wisata Islam Terpadu) Adalah acara yang sangat seru! Di dalamya terdapat lingkungan yang baik insyaa Allah. Kita belajar bagaimana cara berorganisasi, belajar tentang Islam, muhasabah, pengabdian masyarakat, dan kegiatan lain yang pastinya seru banget! ', '2019-07-21'),
(15, 'SYIAR RAMADHAN', 'Acara untuk menyambut bulan suci ramadhan, di dalamnya terdapat banyak acara beberapa di antaranya adalah buka bersama, kajian islam ramadhan, tilawah al quran, dll.', '2019-05-06'),
(16, 'UPGRADING', 'Adalah sebuah event untuk meningkatkan mutu SDM organisator. Event ini diharapkan mampu membangkitkan semangat para organisator untuk menjadi lebih baik dari hari yang telah lalu.', '2019-07-21'),
(17, 'SEMINAR', 'TEMA : VICTORY OF YOUTH MOSLEM', '2019-08-21'),
(18, 'SUNATAN MASSAL', 'Kegiatan sosial yang bekerjasama dengan CSR Universitas Esa Unggul dan masyarakat sekitar.', '2019-04-23'),
(19, 'HUT ESA UNGGUL', '', '2019-08-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_rapat` int(11) UNSIGNED NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `kehadiran` varchar(50) NOT NULL DEFAULT 'Belum hadir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_rapat`, `id_event`, `id_user`, `kehadiran`) VALUES
(1, 1, 1, 'Belum hadir'),
(1, 1, 2, 'Hadir'),
(1, 1, 3, 'Belum hadir'),
(1, 1, 4, 'Hadir'),
(1, 1, 5, 'Belum hadir'),
(1, 1, 6, 'Hadir'),
(1, 1, 7, 'Hadir'),
(1, 1, 8, 'Belum hadir'),
(1, 1, 9, 'Belum hadir'),
(1, 1, 10, 'Belum hadir'),
(1, 1, 11, 'Belum hadir'),
(1, 1, 12, 'Belum hadir'),
(1, 1, 13, 'Belum hadir'),
(1, 1, 14, 'Belum hadir'),
(1, 1, 15, 'Belum hadir'),
(1, 1, 16, 'Hadir'),
(2, 17, 1, 'Belum hadir'),
(2, 17, 2, 'Belum hadir'),
(2, 17, 3, 'Hadir'),
(2, 17, 4, 'Hadir'),
(2, 17, 5, 'Belum hadir'),
(2, 17, 6, 'Belum hadir'),
(2, 17, 7, 'Belum hadir'),
(2, 17, 8, 'Hadir'),
(2, 17, 9, 'Belum hadir'),
(2, 17, 10, 'Belum hadir'),
(2, 17, 11, 'Belum hadir'),
(2, 17, 12, 'Belum hadir'),
(2, 17, 13, 'Belum hadir'),
(2, 17, 14, 'Belum hadir'),
(2, 17, 15, 'Belum hadir'),
(2, 17, 16, 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat`
--

CREATE TABLE `rapat` (
  `id` int(11) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `notulensi` longtext,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `rapat`
--

INSERT INTO `rapat` (`id`, `tanggal`, `keterangan`, `notulensi`, `id_event`) VALUES
(1, '2019-04-23', 'Depan RC, Jam 4 Sore', 'Rapat berjalan dengan lancar.\r\nDiharapkan semua tetap semangat! ', 1),
(2, '2019-04-23', 'Masjid Lantai 1, Jam 9', NULL, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `jabatan`, `no_hp`, `level`, `created_at`, `updated_at`) VALUES
(1, 'hanifny', '3c59dc048e8850243be8079a5c74d079', 'Hanif Nuryanto', 'Administrator', '085774987703', 0, '2019-04-19 10:26:16', '2019-04-19 10:26:16'),
(2, 'elsa', '3c59dc048e8850243be8079a5c74d079', 'Elsa Diana Putri', 'Koor. Divisi Sekretaris Himastika', '085772121979', 1, '2019-04-19 14:24:07', '2019-04-19 14:24:07'),
(3, 'umar', '3c59dc048e8850243be8079a5c74d079', 'Umar Faqih', 'Ketua Himastika', '085641534771', 2, '2019-04-21 01:29:41', '2019-04-21 01:29:41'),
(4, 'anihsr', 'f7177163c833dff4b38fc8d2872f1ec6', 'Hasriani', 'Staff Divisi Humas dan Sosial Himastika', '082293995184', 2, '2019-04-19 14:47:36', '2019-04-19 14:47:36'),
(5, 'wawan', '3c59dc048e8850243be8079a5c74d079', 'Wawan Syahputra', 'Staff Divisi Humas dan Sosial Himastika', '085765357856', 2, '2019-04-21 03:46:29', '2019-04-21 03:46:29'),
(6, 'hanif', '3c59dc048e8850243be8079a5c74d079', 'Hanif Nuryanto', 'Koor. Divisi Humas dan Sosial Himastika', '085774987703', 2, '2019-04-21 09:02:31', '2019-04-21 09:02:31'),
(7, 'raul', '3c59dc048e8850243be8079a5c74d079', 'Raul Irawan Hermanto', 'Koor. Kominfo Himastika', '087886324598', 2, '2019-04-21 03:51:23', '2019-04-21 03:51:23'),
(8, 'rizki', '3c59dc048e8850243be8079a5c74d079', 'Rizki Akbaraziz Dwiyatno', 'Staff Kominfo Himastika', '083215468777', 2, '2019-04-21 03:53:11', '2019-04-21 03:53:11'),
(9, 'fitria', '3c59dc048e8850243be8079a5c74d079', 'Fitria Fajri Utami', 'Koor. Bendahara Himastika', '085694857569', 2, '2019-04-21 03:56:00', '2019-04-21 03:56:00'),
(10, 'mustika', '3c59dc048e8850243be8079a5c74d079', 'Mustika Dewi Kurnianingtyas', 'Staff Bendahara Himastika', '087666569112', 2, '2019-04-21 03:59:03', '2019-04-21 03:59:03'),
(11, 'mustajab', '3c59dc048e8850243be8079a5c74d079', 'Mustajab', 'Koor. Divisi Pendidikan dan Keilmuan Himastika', '085788888880', 2, '2019-04-21 04:01:58', '2019-04-21 04:01:58'),
(12, 'anisa', '3c59dc048e8850243be8079a5c74d079', 'Anisa Ul Kusna', 'Staff Divisi Pendidikan dan Keilmuan Himastika', '085799999998', 2, '2019-04-21 04:02:55', '2019-04-21 04:02:55'),
(13, 'rio', '3c59dc048e8850243be8079a5c74d079', 'Rio Ferdian Hidayat', 'Koor. Minat dan Bakat Himastika', '0859648523645', 2, '2019-04-21 04:04:42', '2019-04-21 04:04:42'),
(14, 'efrida', '3c59dc048e8850243be8079a5c74d079', 'Efrida Permata Sari', 'Staff Minat dan Bakat Himastika', '085966485625', 2, '2019-04-21 04:06:07', '2019-04-21 04:06:07'),
(15, 'fikri', '3c59dc048e8850243be8079a5c74d079', 'Fikri Hambali', 'Staff Minat dan Bakat Himastika', '085566995687', 2, '2019-04-21 04:07:03', '2019-04-21 04:07:03'),
(16, 'faiz', '3c59dc048e8850243be8079a5c74d079', 'Faiz Indria Mahendra', 'Staff Minat dan Bakat Himastika', '088856655456', 2, '2019-04-21 04:07:45', '2019-04-21 04:07:45'),
(17, 'dicky', '3c59dc048e8850243be8079a5c74d079', 'Moch Dicky ', 'Manajer Singkong', '0003222222', 2, '2019-04-24 08:00:29', '2019-04-24 08:00:29');

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_presensi`
--
DROP TABLE IF EXISTS `detail_presensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_presensi`  AS  select `users`.`id` AS `id`,`users`.`nama` AS `nama`,`presensi`.`id_user` AS `id_user`,`presensi`.`kehadiran` AS `kehadiran`,`presensi`.`id_rapat` AS `id_rapat` from (((`users` join `presensi` on((`presensi`.`id_user` = `users`.`id`))) join `rapat` on((`presensi`.`id_rapat` = `rapat`.`id`))) join `events` on((`rapat`.`id_event` = `events`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_rapat`
--
DROP TABLE IF EXISTS `detail_rapat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_rapat`  AS  select `rapat`.`id` AS `id`,`rapat`.`tanggal` AS `tanggal`,`rapat`.`keterangan` AS `keterangan`,`rapat`.`id_event` AS `id_event`,`rapat`.`notulensi` AS `notulensi`,`events`.`nama` AS `nama` from (`rapat` join `events` on((`rapat`.`id_event` = `events`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD KEY `FK_presensi_events` (`id_event`),
  ADD KEY `FK_presensi_users` (`id_user`),
  ADD KEY `FK_presensi_rapat` (`id_rapat`);

--
-- Indeks untuk tabel `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rapat_events` (`id_event`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `FK_presensi_events` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `FK_presensi_rapat` FOREIGN KEY (`id_rapat`) REFERENCES `rapat` (`id`),
  ADD CONSTRAINT `FK_presensi_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `rapat`
--
ALTER TABLE `rapat`
  ADD CONSTRAINT `rapat_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
