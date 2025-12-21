-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Des 2025 pada 07.05
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pwd2025`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Yasutora Sado', 'Chado@gmail.com', '\"Semakin kompleks seseorang,semakin lemah mereka.\"- Yasutora Sado\r\n\"Hal yang kita sebut sekuatan itu dinamis, terus berubah.\"- Yasutora Sado\r\n\"benar sekali. Sangat penting. Mungkin Bahkan lebih penting daripada hidupku.\"- Yasutora Sado', '2025-12-15 13:57:35'),
(2, 'Sosuke Aizen', 'Aizenthegoat@gmail.com', '\"Sejak awal, tak seorang pun pernah berdiri di surga, bukan kau, bukan aku, bahkan para dewa. Namun, kekosongan yang tak tertahankan itu telah berakhir. Mulai sekarang... aku akan berdiri di surga.\", serta pandangannya bahwa \"Tidak ada yang namanya \'kebenaran\' atau \'kebohongan\' di dunia ini... Yang ada hanyalah fakta-fakta yang jelas dan nyata. Namun, semua makhluk... hanya mengakui \'fakta\' yang nyaman bagi mereka, dan menganggapnya sebagai \'kebenaran\'.\"- Sosuke Aizen', '2025-12-15 13:57:35'),
(3, 'El Primo', 'PrimoSlam@gmail.com', '\"Waktunya pertunjukan.\"\r\n\"El Primo!\"\r\n\"Demi penderitaan dan demi kemuliaan!\"\r\n\"El Primo, ada di sini.\"\r\n\"Pertunjukan harus terus berlanjut.\"\r\n\"Sin dolor, ¡no hay gloria!\"\r\n\"Adiós mundo cruel.\"\r\n- El Primo.', '2025-12-15 13:57:35'),
(7, 'halo', 'dfghj@gmail.com', 'qwertyuiop', '2025-12-15 13:57:35'),
(8, 'halo', 'dfghj@gmail.com', 'qwertyuiop', '2025-12-15 13:57:35'),
(9, 'Rafa Alghifari', 'Rafaalghifari295@gmail.com', 'qwertyuiop', '2025-12-15 13:57:35'),
(10, 'Rafa', '12@gmail.com', 'qwertyuioafasdnlsadlladkla', '2025-12-15 13:57:35'),
(11, 'Rafa', '12@gmail.com', 'qwertyuioafasdnlsadlladkla', '2025-12-15 13:57:35'),
(12, 'Rafa', '12@gmail.com', 'qwertyuioafasdnlsadlladkla', '2025-12-15 13:57:35'),
(13, 'yes sir', 'yey@gmail.com', 'asdfghjkll', '2025-12-15 13:57:35'),
(14, 'Rafa', 'Rafaalghifari295@gmail.com', 'halo dunia', '2025-12-15 13:57:35'),
(15, 'Wildan', '12@gmail.com', 'sdjnksnfjj', '2025-12-15 13:57:35'),
(16, 'hatsune miku', 'hatsune@gmail.com', 'qwertyusds,k', '2025-12-15 13:57:35'),
(17, 'qwt', '12@gmail.com', 'hai juga kalian', '2025-12-15 13:57:35'),
(18, 'halo', 'Rafaalghifari295@gmail.com', 'tes 123456', '2025-12-15 13:57:35'),
(19, 'qwerty', 'dfghj@gmail.com', 'weqwertyuio', '2025-12-15 13:57:35'),
(20, 'halo', '12@gmail.com', 'qwertyuiopp', '2025-12-15 13:57:35'),
(21, 'Rafa Alghifari', 'yahaha@gmial.com', 'werusdskflkadf', '2025-12-15 13:57:35'),
(22, 'rafa', 'Rafaalghifari295@gmail.com', 'Saya rafa dan pasti saya akan ke jepang', '2025-12-15 14:04:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
