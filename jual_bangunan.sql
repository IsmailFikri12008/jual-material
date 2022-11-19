-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2022 pada 06.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jual_bangunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `categori` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`id`, `nama`, `merek`, `stok`, `categori`, `harga`, `gambar`, `deskripsi`) VALUES
(19, 'GRC CV. MuliaAbadi', 'GRC CV. MuliaAbadi', 'Banyak', 'GRC CV. MuliaAbadi', 'Rp. ,-', '6378647335ed1.jpg', 'GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan baru,bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung serat alkali.'),
(20, 'GRC CV. MuliaAbadi', 'GRC CV. MuliaAbadi', 'Banyak', 'GRC CV. MuliaAbadi', 'Rp. ,-', '6378649b0bbb4.jpg', 'GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan baru,bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung serat alkali.'),
(21, 'GRC CV. MuliaAbadi', 'GRC CV. MuliaAbadi', 'Banyak', 'GRC CV. MuliaAbadi', 'Rp. ,-', '637864b1d0923.jpg', 'GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan baru,bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung serat alkali.'),
(22, 'GRC CV. MuliaAbadi', 'GRC CV. MuliaAbadi', 'Banyak', 'GRC CV. MuliaAbadi', 'Rp. ,-', '637864c8b52d7.jpg', 'GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan baru,bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung serat alkali.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ismail', '$2y$10$GwgYHWVsUQr5Z8TNgkUvq.8D7w1XYQfpICsH851QzlkTMI8nEyasy'),
(2, 'unpas', '$2y$10$UP/N/Sbo9WUi/oPLOgxt1upGtfcj7FfS8MD66jLCEqScbnenwAvT6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
