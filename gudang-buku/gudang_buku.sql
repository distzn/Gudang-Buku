-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 04.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `tahun_rilis`, `sinopsis`, `id_penulis`, `id_penerbit`, `id_genre`) VALUES
(1, 'Bocchi The Rock!', '2017', 'menceritakan tentang seorang gadis bernama Hitori yang kesepian dan sering cemas. Untuk menghilangkan rasa sepi, dia mencoba untuk bermain gitar. Kemudian Hitori bertemu dengan Nijika, seorang pemain drum yang mengundangnya untuk bergabung dengan Band Kessoku.', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_genre`
--

INSERT INTO `tb_genre` (`id_genre`, `nama_genre`) VALUES
(1, 'komik'),
(2, 'novel'),
(9, 'Fiksi Ilmiah'),
(10, 'Fantasy'),
(11, 'Fiksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `telp_penerbit` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `telp_penerbit`, `email`, `alamat`) VALUES
(1, 'houbunsha', '08232323244', 'houbunsha@gmail.com', 'JL Sukmadik RT 004/05'),
(2, 'Media Factory', '089999243432', 'Mediafact@gmail.com', 'Jl. Mars RT 008/06 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `telp_penulis` varchar(13) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_penulis`, `telp_penulis`, `jk`, `email`, `alamat`) VALUES
(1, 'Aki Hamaji', '083432423422', 'L', 'hamaji89@gmail.com', 'Jl. Sutrisno Rt 009/01 No 69'),
(2, 'Makoto Shinkai', '08732892234', 'L', 'Makoto32@gmail.com', 'Jl. Cakwe RT 003/02'),
(5, 'Rusdi', '082199330101', 'L', 'rusdi@gmail.com', 'Jl. Pamulang 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indeks untuk tabel `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `tb_penulis` (`id_penulis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id_genre`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
