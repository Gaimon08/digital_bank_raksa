-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2023 pada 03.25
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
-- Struktur dari tabel `tb_kredit_kab`
--

CREATE TABLE `tb_kredit_kab` (
  `id_KAB` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `No_KTP` int(40) NOT NULL,
  `Alamat_Lengkap` text NOT NULL,
  `No_Handphone` int(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Jenis_Agunan` varchar(50) NOT NULL,
  `Agunan_Atas_Nama` varchar(50) NOT NULL,
  `Jumlah_Pinjaman` int(50) NOT NULL,
  `Lama_Pinjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kredit_kab`
--

INSERT INTO `tb_kredit_kab` (`id_KAB`, `Email`, `Nama_Lengkap`, `No_KTP`, `Alamat_Lengkap`, `No_Handphone`, `Pekerjaan`, `Jenis_Agunan`, `Agunan_Atas_Nama`, `Jumlah_Pinjaman`, `Lama_Pinjaman`) VALUES
(12, 'pirateskingroger@gmail.com', 'Gol D Roger', 12345678, 'alamat', 987654321, 'Pirate', 'BPKB Kendaraan Bermotor', 'Pemohon/Pasangan', 10000000, '6 Tahun (72 Bulan)'),
(13, 'rorozoro@gmail.com', 'Roronoa Zoro', 12345678, 'alamat', 987654321, 'pekerjaan', 'Surat Kuasa Potong Gaji', 'Keluarga', 10000000, '7,5 Tahun (90 Bulan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kredit_kmk`
--

CREATE TABLE `tb_kredit_kmk` (
  `id_KMK` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `No_KTP` int(40) NOT NULL,
  `Alamat_Lengkap` text NOT NULL,
  `No_Handphone` int(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Jenis_Agunan` varchar(50) NOT NULL,
  `Agunan_Atas_Nama` varchar(50) NOT NULL,
  `Jumlah_Pinjaman` int(50) NOT NULL,
  `Lama_Pinjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kredit_kmk`
--

INSERT INTO `tb_kredit_kmk` (`id_KMK`, `Email`, `Nama_Lengkap`, `No_KTP`, `Alamat_Lengkap`, `No_Handphone`, `Pekerjaan`, `Jenis_Agunan`, `Agunan_Atas_Nama`, `Jumlah_Pinjaman`, `Lama_Pinjaman`) VALUES
(0, 'Luffymail@Gmail.com', 'Monkey D Luffy', 12345678, 'Egghead, New World', 1234, 'Pekerjaan', 'SK Pegawai Terakhir', 'Pemohon/Pasangan', 100, '1 Tahun (12 Bulan)'),
(5, 'rorozoro@gmail.com', 'Roronoa Zoro', 12345678, 'alamat ', 987654321, 'pekerjaan', 'SK Pegawai Terakhir', 'Pemohon/Pasangan', 1000000, '8 Tahun (96 Bulan)'),
(6, 'pirateskingroger@gmail.com', 'Gol D Roger', 123456789, 'alamat', 987654321, '', 'Sertifikat Pendidik', 'Keluarga', 1000000, '2,5 Tahun (30 Bulan)'),
(7, 'haikal1080p@gmail.com', 'Haikal Jibran A', 12345678, 'Jl.Pramuka Lembur Sukun Rt/Rw:04/01 Purwawinangun Kuningan Jawa Barat', 987654321, '', 'BPKB Kendaraan Bermotor', 'Keluarga', 10000000, '4 Tahun (48 Bulan)'),
(10, 'Fauzan123@gmail.com', 'Fauzan DM.', 12345678, 'alamat', 987654321, 'siswa', 'Sertifikat Pendidik', 'Orang Lain', 10000000, '7 Tahun (84 Bulan)'),
(11, 'nicorobin123@gmail.com', 'Nico Robin', 12345678, 'alamat lengkap', 987654321, 'Arkeolog', 'Deposito Berjangka RWAP', 'Pemohon/Pasangan', 10000000, '8 Tahun (96 Bulan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaduan_nasabah`
--

CREATE TABLE `tb_pengaduan_nasabah` (
  `id_pengaduan` int(11) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_wa` int(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengaduan_nasabah`
--

INSERT INTO `tb_pengaduan_nasabah` (`id_pengaduan`, `subjek`, `nama`, `no_wa`, `pesan`, `waktu`, `tanggal`) VALUES
(1, 'Penarikan Dana', 'Fansyah Dwi Krisnady', 8591483, 'Penarikan dana saya bermasalah mohon di cek lagi', '05:56:23', '2023-09-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(2) NOT NULL,
  `jenis_kelamin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `nama`, `username`, `password`, `level`, `jenis_kelamin`) VALUES
(1, 'Fansyah Dwi Krisnady', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, 'Yuyun Yunike', 'Costumer', 'abeeaf288026f9ef42fa63a74830f35eb7f3d233', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kredit_kab`
--
ALTER TABLE `tb_kredit_kab`
  ADD PRIMARY KEY (`id_KAB`);

--
-- Indeks untuk tabel `tb_kredit_kmk`
--
ALTER TABLE `tb_kredit_kmk`
  ADD PRIMARY KEY (`id_KMK`);

--
-- Indeks untuk tabel `tb_pengaduan_nasabah`
--
ALTER TABLE `tb_pengaduan_nasabah`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kredit_kab`
--
ALTER TABLE `tb_kredit_kab`
  MODIFY `id_KAB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kredit_kmk`
--
ALTER TABLE `tb_kredit_kmk`
  MODIFY `id_KMK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pengaduan_nasabah`
--
ALTER TABLE `tb_pengaduan_nasabah`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
