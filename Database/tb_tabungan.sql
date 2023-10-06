-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2023 pada 08.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_bank_raksa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `No_KTP` int(40) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Alamat_Lengkap` text NOT NULL,
  `No_Handphone` int(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Jenis_Tabungan` varchar(50) NOT NULL,
  `Tabungan_Awal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tabungan`
--

INSERT INTO `tb_tabungan` (`id_tabungan`, `Email`, `Nama_Lengkap`, `No_KTP`, `Jenis_Kelamin`, `Alamat_Lengkap`, `No_Handphone`, `Pekerjaan`, `Jenis_Tabungan`, `Tabungan_Awal`) VALUES
(1, 'haikal1080p@gmail.com', 'Haikal Jibran A', 2147483647, 'Laki-Laki', 'Jl.Pramuka Lembur Sukun Rt/Rw:04/01 Purwawinangun Kuningan Jawa Barat', 987654321, 'Direktur', 'Ciremaiku', 10000000),
(2, 'Luffymail@Gmail.com', 'Monkey D Luffy ', 2147483647, 'Laki-Laki', 'Jl.nama jalan nama lingkungan Rt/Rw:01/01 kelurahan kecamatan kabupaten', 987654321, 'pekerjaan', 'Tamades', 500000),
(3, 'nicorobin123@gmail.com', 'Nico Robin', 2147483647, 'Perempuan', 'Jl.nama jalan nama lingkungan Rt/Rw:01/01 kelurahan kecamatan kabupaten', 987654321, 'pekerjaan', 'Taprona', 700000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
