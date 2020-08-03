-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2020 pada 10.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_maju`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `harga` int(120) NOT NULL,
  `stok` int(225) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `expiret` date NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_brg`, `kategori`, `harga`, `stok`, `tgl_kirim`, `expiret`, `gambar`) VALUES
(26, 'Chki bool', 'snack', 5000, 20, '2020-07-01', '2024-07-01', 'balls.jpg'),
(29, 'twisco', 'snack', 5000, 20, '2020-07-01', '2020-07-01', 'twistko.jpg'),
(30, 'pepsi', 'minuman', 5000, 20, '2020-07-01', '2024-07-01', 'pepsi.jpg'),
(31, 'Royco', 'bumbu', 5000, 20, '2020-07-31', '2024-07-30', 'royco.jpg'),
(32, 'aqua', 'minuman', 5000, 20, '2020-07-01', '2030-07-01', 'aqua.jpeg'),
(33, 'fanta', 'minuman', 5000, 20, '2020-07-01', '2024-07-01', 'fanta.png'),
(36, 'sprite', 'minuman', 5000, 20, '2020-07-01', '2024-07-29', 'sprite.jpg'),
(37, 'Oops', 'snack', 5000, 20, '2020-07-01', '2024-07-01', 'Oops.png'),
(38, 'twister', 'snack', 10000, 20, '2020-07-01', '2024-07-01', 'twister.png'),
(39, 'Chiki bool coklat', 'snack', 5000, 20, '2020-07-01', '2024-07-01', 'ballscoklat.jpg'),
(40, 'coca cola', 'minuman', 5000, 20, '2020-07-01', '2024-07-01', 'cocacola.jpg'),
(41, 'BEAR  BRAND', 'minuman', 10000, 20, '2020-07-01', '2024-07-01', 'bear_brand.jpg'),
(42, 'chitato', 'snack', 5000, 20, '2020-07-01', '2024-07-01', 'chitato_keju.jpg'),
(43, 'Megic lezat', 'bumbu', 5000, 20, '2020-07-01', '2024-07-29', 'magic_lezat.jpeg'),
(44, 'Chitato Origin', 'snack', 5000, 20, '2020-07-01', '2024-07-01', 'chitato_origin.jpg'),
(45, 'Masako', 'bumbu', 5000, 20, '2020-07-01', '2024-07-01', 'masako.png'),
(46, 'Cheetos', 'snack', 5000, 20, '2020-07-02', '2024-07-02', 'cheetos.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
