-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 16.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `No_telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `Email`, `Nama`, `Alamat`, `No_telp`) VALUES
(4, 'user1@gmail.com', 'nanan', 'kampung baru', '089523234551'),
(5, 'bejo@email.com', 'jobe', NULL, NULL),
(6, 'yikan232@gmail.com', 'lohe', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_Pembayaran` int(20) NOT NULL,
  `Total_Pembayaran` varchar(100) DEFAULT NULL,
  `Metode_pembayaran` varchar(255) DEFAULT NULL,
  `Tanggal_Pembayaran` varchar(50) NOT NULL,
  `Status_Pembayaran` varchar(255) NOT NULL,
  `Id_Pesanan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`Id_Pembayaran`, `Total_Pembayaran`, `Metode_pembayaran`, `Tanggal_Pembayaran`, `Status_Pembayaran`, `Id_Pesanan`) VALUES
(15, 'Rp. 566.000', 'virtual_account', '2023-06-07', 'Lunas', NULL),
(16, 'Rp. 566.000', 'virtual_account', '2023-06-07', 'Lunas', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `Id_pesanan` int(20) NOT NULL,
  `Tanggal_Pesanan` varchar(50) NOT NULL,
  `Tanggal_Pengiriman` varchar(50) DEFAULT NULL,
  `Id_Produk` int(20) NOT NULL,
  `Lama_sewa` int(100) NOT NULL,
  `Total_Harga` varchar(255) DEFAULT NULL,
  `Status_Pesanan` varchar(255) NOT NULL,
  `notif` varchar(50) DEFAULT NULL,
  `Harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`Id_pesanan`, `Tanggal_Pesanan`, `Tanggal_Pengiriman`, `Id_Produk`, `Lama_sewa`, `Total_Harga`, `Status_Pesanan`, `notif`, `Harga`) VALUES
(40, '2023-06-07', '2023-06-07', 2, 2, '266', 'Sampai', 'ambil paket', 133),
(41, '2023-06-07', '2023-06-07', 6, 3, '300', 'Dikirim', 'dalam perjalanan', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `Id_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(255) NOT NULL,
  `Deskripsi_Produk` varchar(255) NOT NULL,
  `Harga_Sewa_perHari` int(100) NOT NULL,
  `Stok` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Id_Produk`, `Nama_Produk`, `Deskripsi_Produk`, `Harga_Sewa_perHari`, `Stok`, `foto`) VALUES
(2, 'Pakaian Adat Ulos', '1 set lengkap dengan aksesoris, fit L to XL', 133, 'tersedia', 'ulos.jpg'),
(4, 'Pakaian Adat Lampung', '1 set lengkap,  fit L to XL', 120, 'tersedia', 'lampung.jpg'),
(6, 'Pakaian Adat Aceh', '1 set lengkap, L fit to XL', 100, 'tersedia', 'aceh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Id_Pembayaran`),
  ADD KEY `Id_Pesanan` (`Id_Pesanan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`Id_pesanan`),
  ADD KEY `Id_Produk` (`Id_Produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_Produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_Pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `Id_pesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_Produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`Id_Pesanan`) REFERENCES `pesanan` (`Id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`Id_Produk`) REFERENCES `produk` (`Id_Produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
