-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2020 pada 06.07
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_journal`
--

CREATE TABLE `data_journal` (
  `id` int(11) NOT NULL,
  `namajurnal` varchar(50) NOT NULL,
  `jdl_publikasi` varchar(100) NOT NULL,
  `jns_publikasi` varchar(50) NOT NULL,
  `thn` year(4) NOT NULL,
  `issn` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `halaman` varchar(10) NOT NULL,
  `indexscopus` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `namadosen` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `username` int(11) NOT NULL,
  `editor` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_journal`
--

INSERT INTO `data_journal` (`id`, `namajurnal`, `jdl_publikasi`, `jns_publikasi`, `thn`, `issn`, `url`, `volume`, `nomor`, `halaman`, `indexscopus`, `penulis`, `namadosen`, `nidn`, `username`, `editor`, `status`) VALUES
(18, 'hapnan', 'arsad', 'test', 2019, '1213123123', 'https://www.google.com', '12', '12', '12', '12', '1', 'test', '1233445678', 15, 18, 1),
(19, 'asdasdas', 'asdsadsad', 'asdasdads', 2019, 'asdasdsad', 'asasdasdas', 'asasdsad', 'asasdasddsa', 'asadsasdas', 'adsasdasd', 'asdadad', 'asdasdads', 'asdsdadsad', 15, 18, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_proceeding`
--

CREATE TABLE `data_proceeding` (
  `id` int(11) NOT NULL,
  `jdl_makalah` varchar(50) NOT NULL,
  `nm_forum` varchar(50) NOT NULL,
  `tgk_forum_ilm` varchar(20) NOT NULL,
  `thn_pelaksanaan` year(4) NOT NULL,
  `url_jurnal` varchar(100) NOT NULL,
  `ins_penyelenggara` varchar(20) NOT NULL,
  `wkt_dari` date NOT NULL,
  `wkt_sampai` date NOT NULL,
  `tmp_pelaksanaan` varchar(20) NOT NULL,
  `sts_pemakaian` varchar(20) NOT NULL,
  `nm_dsn` varchar(100) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `username` int(11) NOT NULL,
  `editor` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_proceeding`
--

INSERT INTO `data_proceeding` (`id`, `jdl_makalah`, `nm_forum`, `tgk_forum_ilm`, `thn_pelaksanaan`, `url_jurnal`, `ins_penyelenggara`, `wkt_dari`, `wkt_sampai`, `tmp_pelaksanaan`, `sts_pemakaian`, `nm_dsn`, `nidn`, `prodi`, `username`, `editor`, `status`) VALUES
(6, 'test', 'test', 'test', 0000, 'test', 'test', '0000-00-00', '0000-00-00', 'test', 'test', 'test', 'test', 'test', 17, 0, 0),
(7, 'test', 'test', 'test', 2019, 'https://www.google.com', 'test', '2018-01-01', '2018-01-03', 'test', 'test', 'test', 'test', 'test', 17, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nidn`) VALUES
(1, 'test', '12345667'),
(2, 'test2', '0987655');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_jurnal`
--

CREATE TABLE `edit_jurnal` (
  `id` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL,
  `id_jurnal` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_pros`
--

CREATE TABLE `edit_pros` (
  `id` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL,
  `id_pros` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(5) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Editor\r\n'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_user`, `alias`, `username`, `email`, `password`, `level`) VALUES
(15, 'Hapnan arsad riski', 'A11.2017.10743', 'hapnan', 'hapnanarsad@gmail.com', '$2y$10$TrtQvHCB2WIsRVb6YWhFFuwSzetRlplWZa97pNXjtqmrfKvZVMlly', 1),
(17, 'Amalina Farikha', 'sayangku', 'amlin', 'myfuturewife@gmail.com', '$2y$10$XqQcxAK2dHg4tGhJL44k0OpijmxmH4JSNb2ygSBkhLgMSa6x9jcJe', 3),
(18, 'Aziz Adnan', '12345678890', 'aziz', 'azizadnan@gmail.com', '$2y$10$.zWBPAObzNWJxzJBogy0dePQqaSEdCwhEk8.Utl.dDKZol44eTfG2', 2),
(19, 'Geraldhi Theo', 'A11.2017.10744', 'theo', 'theoganteng111@gmail.com', '$2y$10$k0vlxiz0l.xf6FxKpelaCOjRE8YajlOCA6ZXAuvNJVlhM/CUcx7ju', 1),
(20, 'sayang', '11312321123', 'aku', 'akusayang@gmail.com', '$2y$10$9Ll0uxyAhYv8risFUpnCeestyWgXqke1wRLQZOeGqpYF529QZrkOG', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_journal`
--
ALTER TABLE `data_journal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userinput` (`username`);

--
-- Indeks untuk tabel `data_proceeding`
--
ALTER TABLE `data_proceeding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edit_jurnal`
--
ALTER TABLE `edit_jurnal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_editor` (`id_editor`),
  ADD KEY `id_jurnal` (`id_jurnal`);

--
-- Indeks untuk tabel `edit_pros`
--
ALTER TABLE `edit_pros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editor` (`id_editor`),
  ADD KEY `pros` (`id_pros`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_journal`
--
ALTER TABLE `data_journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_proceeding`
--
ALTER TABLE `data_proceeding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `edit_jurnal`
--
ALTER TABLE `edit_jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_journal`
--
ALTER TABLE `data_journal`
  ADD CONSTRAINT `userinput` FOREIGN KEY (`username`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `data_proceeding`
--
ALTER TABLE `data_proceeding`
  ADD CONSTRAINT `data_proceeding_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `edit_jurnal`
--
ALTER TABLE `edit_jurnal`
  ADD CONSTRAINT `edit_jurnal_ibfk_1` FOREIGN KEY (`id_editor`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `edit_jurnal_ibfk_2` FOREIGN KEY (`id_jurnal`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `edit_pros`
--
ALTER TABLE `edit_pros`
  ADD CONSTRAINT `editor` FOREIGN KEY (`id_editor`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pros` FOREIGN KEY (`id_pros`) REFERENCES `data_proceeding` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userrole` FOREIGN KEY (`level`) REFERENCES `level` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
