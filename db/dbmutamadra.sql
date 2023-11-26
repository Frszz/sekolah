-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 18.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmutamadra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sekolah`
--

CREATE TABLE `daftar_sekolah` (
  `id` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `surat_registrasi` varchar(250) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_sekolah`
--

INSERT INTO `daftar_sekolah` (`id`, `id_sekolah`, `surat_registrasi`, `tgl_buka`, `tgl_tutup`) VALUES
(2, 1, 'b9a9618d9361607061ebdd638ab16d1b.pdf', '2023-11-04', '2023-11-27'),
(3, 2, 'd18b3926dce8fb8ef585aed9c5fc78f7.pdf', '2023-11-15', '2023-11-30'),
(4, 3, '309e86265ed110c4b430ed576000fac6.pdf', '2023-11-09', '2023-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `pas_foto` varchar(250) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `email_pendaftar` varchar(100) NOT NULL,
  `nohp_pendaftar` varchar(20) NOT NULL,
  `tujuan` enum('Siswa Baru','Perpindahan') NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tujuan_sekolah` varchar(100) NOT NULL,
  `surat_daftar` varchar(250) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Diproses','Diterima','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kab_kota` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `jenjang` enum('SMA','SMP') DEFAULT NULL,
  `surat_sekolah` varchar(250) DEFAULT NULL,
  `email_sekolah` varchar(100) NOT NULL,
  `password_sekolah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `npsn`, `nama_sekolah`, `alamat`, `kab_kota`, `kecamatan`, `jenjang`, `surat_sekolah`, `email_sekolah`, `password_sekolah`) VALUES
(1, '102030', 'SMA ISLAM AL-ULUM TERPADU', 'Jl. Tuasan', 'Medan', 'Medan Tembung', 'SMA', '317dcfe830bf86720d28a7ac1fd7905f.pdf', 'alulum@gmail.com', '444'),
(2, '7267263', 'SMPN 4 Percontohan', 'Jl. Boy', 'Aceh Tamiang', 'Karang Baru', 'SMP', 'fa4325ddb7f1b432776aa60034e2bf7c.pdf', 'blabla@gmail.com', '123'),
(3, '111', 'SMA Muhammadiyah', 'Sunggal', 'Medan', 'Medan Sunggal', 'SMA', 'bc32e11cd571b15c990d9e7edd14cdf3.pdf', 'cekulah@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `email_siswa` varchar(100) NOT NULL,
  `password_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `id_sekolah`, `nisn`, `nama_siswa`, `tmpt_lahir`, `tgl_lahir`, `no_hp`, `gender`, `alamat`, `email_siswa`, `password_siswa`) VALUES
(1, 1, '0702213184', 'Aldito Fayyadh Yustihar', 'Aceh', '2004-04-04', '087878992615', 'Laki-laki', 'Jl. Pancing', 'aldito@gmail.com', '123'),
(2, 1, '444333', 'Budi Ahuy', 'London', '2023-11-09', '081234', 'Perempuan', ' Jl. Street ', 'fix@gmail.com', '123'),
(3, 2, '999', 'Robert', 'Konoha', '2023-11-12', '06158292763', 'Laki-laki', ' Block. 5', 'siswa@gmail.com', '123'),
(4, 3, '6969', 'Santoso Kurniawan', 'Amerika', '2023-11-15', '08123456789', 'Laki-laki', ' Jl. Mawar', 'brace@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indeks untuk tabel `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_sekolah`
--
ALTER TABLE `daftar_sekolah`
  ADD CONSTRAINT `daftar_sekolah_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`);

--
-- Ketidakleluasaan untuk tabel `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD CONSTRAINT `daftar_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `daftar_siswa_ibfk_2` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
