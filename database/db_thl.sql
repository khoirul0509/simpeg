-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2022 pada 13.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_admin`
--

CREATE TABLE `m_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `last_login` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_admin`
--

INSERT INTO `m_admin` (`id_admin`, `username`, `password`, `nama_admin`, `level`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Pusat', 1, 0),
(2, 'operator', '4b583376b2767b923c3e1da60d10de59', 'Operator', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_agama`
--

CREATE TABLE `m_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_agama`
--

INSERT INTO `m_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jenjang`
--

CREATE TABLE `m_jenjang` (
  `id_jenjang` int(11) NOT NULL,
  `nama_jenjang` varchar(50) DEFAULT NULL,
  `nama_pendidikan` varchar(66) DEFAULT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `tahun_lulus` int(11) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_jenjang`
--

INSERT INTO `m_jenjang` (`id_jenjang`, `nama_jenjang`, `nama_pendidikan`, `nama_sekolah`, `tahun_lulus`, `pegawai_id`) VALUES
(1, 'SMP', 'SMP N 3', 'Uw', 2010, 979),
(2, 'SD', 'sekolad dasar', 'Uw', 2010, 979);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jenjang_`
--

CREATE TABLE `m_jenjang_` (
  `id_jenjang` int(10) NOT NULL,
  `nama_jenjang` enum('SD','SMP','SMA/Sederajat','DI','DII','DIII','DIV','S-1','S-2') NOT NULL,
  `nama_pendidikan` text NOT NULL,
  `nama_sekolah` text NOT NULL,
  `tahun_lulus` text NOT NULL,
  `pegawai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_jenjang_`
--

INSERT INTO `m_jenjang_` (`id_jenjang`, `nama_jenjang`, `nama_pendidikan`, `nama_sekolah`, `tahun_lulus`, `pegawai_id`) VALUES
(1, 'S-1', 'S-1 Pendidikan', 'UB', '2012', 979);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_riwayat_kontrak`
--

CREATE TABLE `m_riwayat_kontrak` (
  `id_riwayat` int(150) NOT NULL,
  `id_pegawai` int(130) NOT NULL,
  `tgl_mulai_kontrak` date NOT NULL,
  `tgl_akhir_kontrak` date NOT NULL,
  `no_kontrak` varchar(25) NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `is_kontrak_awal` int(11) DEFAULT 0,
  `nama_file` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_riwayat_kontrak`
--

INSERT INTO `m_riwayat_kontrak` (`id_riwayat`, `id_pegawai`, `tgl_mulai_kontrak`, `tgl_akhir_kontrak`, `no_kontrak`, `tgl_kontrak`, `is_kontrak_awal`, `nama_file`) VALUES
(1, 979, '2021-07-01', '2021-12-31', '88357687875121', '2021-12-31', 1, 'e0ffb46a398dabd5a2be41ee6ae06110.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_status_kawin`
--

CREATE TABLE `m_status_kawin` (
  `id_status` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_status_kawin`
--

INSERT INTO `m_status_kawin` (`id_status`, `status`) VALUES
(1, 'Kawin'),
(2, 'Belum Kawin'),
(3, 'Cerai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_thl`
--

CREATE TABLE `m_thl` (
  `id_pegawai` int(50) NOT NULL,
  `id_jenjang` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status_kawin` varchar(26) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `gelar_depan` varchar(5) NOT NULL,
  `gelar_belakang` varchar(5) NOT NULL,
  `jenjang_pendidikan` varchar(49) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `tgl_mulai_kontrak_awal` date NOT NULL,
  `tgl_akhir_kontrak_awal` date NOT NULL,
  `no_kontrak_awal` varchar(25) NOT NULL,
  `tgl_kontrak_awal` date NOT NULL,
  `kdunor` varchar(500) NOT NULL,
  `pekerjaan` varchar(400) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `no_bpjs_tenagakerja` varchar(20) NOT NULL,
  `no_bpjs_kesehatan` varchar(20) NOT NULL,
  `status_kontrak` enum('AKTIV','TIDAK AKTIV','','') NOT NULL,
  `add_at` datetime NOT NULL,
  `add_by` int(6) NOT NULL,
  `edit_at` datetime NOT NULL,
  `edit_by` int(6) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_thl`
--

INSERT INTO `m_thl` (`id_pegawai`, `id_jenjang`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kawin`, `agama`, `gelar_depan`, `gelar_belakang`, `jenjang_pendidikan`, `pendidikan`, `tgl_mulai_kontrak_awal`, `tgl_akhir_kontrak_awal`, `no_kontrak_awal`, `tgl_kontrak_awal`, `kdunor`, `pekerjaan`, `alamat`, `npwp`, `no_bpjs_tenagakerja`, `no_bpjs_kesehatan`, `status_kontrak`, `add_at`, `add_by`, `edit_at`, `edit_by`, `foto`) VALUES
(979, 1, '234737533532646', 'santi', 'MALANG', '1993-04-01', 'laki-laki', 'kawin', 'islam', 'drs', 'sp', 'SMA', 'pertanian', '1998-04-03', '1932-02-01', '822/12/SK/409/2019', '1992-10-05', 'Dinas Pertanian', 'serabutan', 'jl.teratai no.19', '2424354657', '7890008776', '555667', 'AKTIV', '2021-10-22 18:17:50', 0, '0000-00-00 00:00:00', 0, '89436d276176a76d4ae23ae8ad7f9ce8.jpg'),
(980, 0, '234737533532646', 'santo', 'MALANG', '1990-03-01', 'laki-laki', 'belum kawin', 'islam', '', 'S.Pd', 'D-III', 's1 akutansi', '2022-01-01', '2022-12-31', '822/12/SK/409/2021', '2021-12-31', 'bksdm', 'Teknisi', 'malang jawa timur', '2424354657', '11234557', '121325354654', 'AKTIV', '2022-01-11 21:41:17', 0, '0000-00-00 00:00:00', 0, 'abdb80f85e6ba8b9fbde6a9c52c0cd9a.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `m_agama`
--
ALTER TABLE `m_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `m_jenjang`
--
ALTER TABLE `m_jenjang`
  ADD PRIMARY KEY (`id_jenjang`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indeks untuk tabel `m_jenjang_`
--
ALTER TABLE `m_jenjang_`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `m_riwayat_kontrak`
--
ALTER TABLE `m_riwayat_kontrak`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_riwayat` (`id_riwayat`);

--
-- Indeks untuk tabel `m_status_kawin`
--
ALTER TABLE `m_status_kawin`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `m_thl`
--
ALTER TABLE `m_thl`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_agama`
--
ALTER TABLE `m_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `m_jenjang`
--
ALTER TABLE `m_jenjang`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_riwayat_kontrak`
--
ALTER TABLE `m_riwayat_kontrak`
  MODIFY `id_riwayat` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_status_kawin`
--
ALTER TABLE `m_status_kawin`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_thl`
--
ALTER TABLE `m_thl`
  MODIFY `id_pegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=981;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_jenjang_`
--
ALTER TABLE `m_jenjang_`
  ADD CONSTRAINT `m_jenjang__ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `m_thl` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
