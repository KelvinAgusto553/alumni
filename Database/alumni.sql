-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 24 Jun 2024 pada 19.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_lulus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_alumni`, `jenis_kelamin`, `telepon`, `alamat`, `kecamatan`, `kota`, `kode_pos`, `program_studi`, `angkatan`, `tanggal_masuk`, `tanggal_lulus`) VALUES
(3, 'Wahyu', 'L', '0812-8879-9993', 'Jl. Loji', 'Loji Barat', 'Kab. Karawang', 33445, 'Teknik Informatika', 2020, '2024-06-04', '2024-06-14'),
(4, 'Kelvin Agusto', 'L', '', 'Jl. Raya Ciselang No. 4A', 'Cikampek Utara', 'Kab. Karawang', 41373, 'Teknik Informatika', 2021, '2024-06-12', '2024-06-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `jenis_kelamin`) VALUES
(1, 'Ronald, S.Kom., M.Kom.', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelulusan`
--

CREATE TABLE `kelulusan` (
  `id_kelulusan` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `ipk` varchar(255) NOT NULL,
  `jml_semester` varchar(255) NOT NULL,
  `status` enum('Lulus','Belum Lulus','Mengulang','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelulusan`
--

INSERT INTO `kelulusan` (`id_kelulusan`, `id_alumni`, `id_ortu`, `tanggal_lulus`, `ipk`, `jml_semester`, `status`) VALUES
(2, 2, 1, '0000-00-00', '3.90', '8 Semester', 'Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lulus`
--

CREATE TABLE `lulus` (
  `id_lulus` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `status` enum('Lulus','Belum Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lulus`
--

INSERT INTO `lulus` (`id_lulus`, `id_alumni`, `status`) VALUES
(1, 2, 'Lulus'),
(3, 3, 'Lulus'),
(5, 4, 'Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `jml_sks` varchar(255) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `jml_sks`, `id_dosen`) VALUES
(2, 'Algoritma Dasar', '3 SKS', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usertype`, `nama_lengkap`, `status`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Administrator', '1'),
(5, 'kelvin', 'dc0026f5522b59bff313ecf34181ddc7', 0, 'Kelvin Agusto', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  ADD PRIMARY KEY (`id_kelulusan`);

--
-- Indeks untuk tabel `lulus`
--
ALTER TABLE `lulus`
  ADD PRIMARY KEY (`id_lulus`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id_kelulusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lulus`
--
ALTER TABLE `lulus`
  MODIFY `id_lulus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
