-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 11.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `client` varchar(30) NOT NULL,
  `pic_leader` varchar(1000) NOT NULL,
  `project_leader` varchar(30) NOT NULL,
  `email_leader` varchar(30) NOT NULL,
  `start_date` varchar(30) NOT NULL,
  `end_date` varchar(30) NOT NULL,
  `progres` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `monitoring`
--

INSERT INTO `monitoring` (`id`, `project_name`, `client`, `pic_leader`, `project_leader`, `email_leader`, `start_date`, `end_date`, `progres`) VALUES
(1, 'Pembuatan SI kalsel', 'Bakeuda Prov, Kalsel', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1614331069/attached_image/good-girl-syndrome-ketika-bersikap-baik-justru-membuat-tidak-bahagia.jpg', 'Indra Setiawan', 'indra.setiawan@gmail.com', '14 Jan 2022', '14 Agu 2022', 30),
(2, 'Learning Management System', 'Ruang Guru', 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWVufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Hilman Syahputera', 'hilman.syah@gmail.com', '30 Jan 2022', '10 Mar 2022', 80),
(3, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'https://images.unsplash.com/photo-1508341591423-4347099e1f19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bWVufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Febri Gunawan', 'febri.gunawan@gmail.com', '02 Feb 2022', '03 Mei 2022', 40),
(4, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'https://img.freepik.com/free-photo/handsome-confident-smiling-man-with-hands-crossed-chest_176420-18743.jpg?w=2000', 'Handoko Aji', 'handoko.aji@gmail.com', '02 Sep 2021', '15 Jan 2022', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
