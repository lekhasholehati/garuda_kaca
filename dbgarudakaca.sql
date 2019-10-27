-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2019 pada 16.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgarudakaca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `kode_admin` varchar(20) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `kode_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ADM0001', 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `jenis_kaca` varchar(25) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `ketebalan` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `jenis_kaca` varchar(25) NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `ketebalan` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `tgl_order`, `jenis_kaca`, `ukuran`, `ketebalan`, `qty`, `harga`, `keterangan`) VALUES
(1, '2019-10-19', 'Rayben', '50x30', '10mm', 4, '800000', 'aaaaaaaaaaa'),
(2, '2019-10-22', 'Black', '12x13', '4mm', 1, '800000', 'bbgfc'),
(4, '2019-10-19', 'Rayben', '50x30', '3mm', 6, '500000', 'bvcbvnvn'),
(5, '2019-10-12', 'Polos', '12x13', '4mm', 7, '200000', 'sdafasas'),
(6, '2019-10-05', 'Es', '50x30', '4mm', 5, '200000', 'sdaad'),
(7, '2019-10-19', 'Cermin', '36x300', '4mm', 12, '200000', 'dsfsf'),
(8, '2019-10-19', 'Polos', '50x30', '3mm', 2, '200000', 'sgadfh'),
(9, '2019-10-19', 'Polos', '12x13', '4mm', 4, '200000', 'wfrsrs'),
(10, '2019-10-18', 'Polos', '12x13', '5mm', 6, '200000', 'dgdsdsdg'),
(11, '2019-10-19', 'Polos', '50x30', '6mm', 1, '200000', 'hvvbv'),
(12, '2019-10-30', 'Polos', '12x13', '8mm', 4, '500000', 'dsgdsgd'),
(13, '2019-10-25', 'Polos', '12x13', '10mm', 6, '800000', 'bvccbb'),
(14, '2019-10-19', 'Rayben', '12x13', '4mm', 2, '200000', 'bvn'),
(15, '2019-10-19', 'Rayben', '12x13', '5mm', 3, '200000', 'bvbcc'),
(16, '2019-10-18', 'Rayben', '12x13', '6mm', 2, '200000', 'vxzvbn'),
(17, '2019-10-24', 'Rayben', '12x13', '8mm', 4, '200000', 'vcvxnnm'),
(18, '2019-10-25', 'Black', '12x13', '8mm', 2, '200000', 'sdajdn'),
(19, '2019-10-26', 'Black', '12x13', '3mm', 4, '200000', 'sdnam'),
(20, '2019-10-17', 'Black', '50x30', '10mm', 1, '800000', 'cxcz'),
(22, '2019-10-22', 'Es', '36x300', '6mm', 4, '500000', 'gfdhfjhjgff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
