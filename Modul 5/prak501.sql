-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 
-- Versi server: 127.0.0.1-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: prak501
--

-- --------------------------------------------------------

--
-- Struktur tabel buku
--

CREATE TABLE buku (
  id_buku int(11) NOT NULL,
  judul_buku varchar(500) DEFAULT NULL,
  penulis varchar(500) DEFAULT NULL,
  penerbit varchar(250) DEFAULT NULL,
  tahun_terbit int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel buku
--

INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES
(1, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980),
(2, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2009),
(3, 'Harry Potter and the Sorcerer','J.K. Rowling', 'Bloomsbury (UK), Scholastic (US)', 2019),
(4, 'The Hobbit', 'J.R.R. Tolkien', 'George Allen & Unwin', 1937);

-- --------------------------------------------------------

--
-- Struktur tabel member
--

CREATE TABLE member (
  id_member int(11) NOT NULL,
  nama_member varchar(250) DEFAULT NULL,
  nomor_member varchar(15) DEFAULT NULL,
  alamat text DEFAULT NULL,
  tgl_mendaftar datetime DEFAULT NULL,
  tgl_terakhir_bayar date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel member
--

INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES
(1, 'Ridhani Setiadi', '08219780', 'Handil Bakti', '2024-07-05 03:50:19', '2024-07-07'),
(2, 'Zaki', '08219781', 'HKSN', '2024-07-05 04:40:20', '2024-07-08'),
(3, 'Kholid', '08219782', 'Jl. Cemara Raya', '2024-07-07 14:30', '2024-07-10'),
(5, 'Syauqi', '08219783', 'Banua Anyar', '2024-07-08 16:45:00', '2023-07-15'),
(6, 'Dimas', '08219784', 'Banjarbaru', '2024-07-09 20:30:00', '2023-07-17'),
(7, 'Indra', '08219785', 'Martapura', '2024-07-17 23:15:00', '2023-07-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel peminjaman
--

CREATE TABLE peminjaman (
  id_peminjaman int(11) NOT NULL,
  tgl_pinjam date DEFAULT NULL,
  tgl_kembali date DEFAULT NULL,
  id_member int(11) DEFAULT NULL,
  id_buku int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel peminjaman
--

INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali, id_member, id_buku) VALUES
(1, '2024-05-03', '2024-05-07', 1, 1),
(2, '2024-05-04', '2024-05-08', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel buku
--
ALTER TABLE buku
  ADD PRIMARY KEY (id_buku);

--
-- Indeks untuk tabel member
--
ALTER TABLE member
  ADD PRIMARY KEY (id_member);

--
-- Indeks untuk tabel peminjaman
--
ALTER TABLE peminjaman
  ADD PRIMARY KEY (id_peminjaman) USING BTREE,
  ADD KEY id_member (id_member),
  ADD KEY id_buku (id_buku);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel buku
--
ALTER TABLE buku
  MODIFY id_buku int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21315;

--
-- AUTO_INCREMENT untuk tabel member
--
ALTER TABLE member
  MODIFY id_member int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123214;

--
-- AUTO_INCREMENT untuk tabel peminjaman
--
ALTER TABLE peminjaman
  MODIFY id_peminjaman int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel peminjaman
--
ALTER TABLE peminjaman
  ADD CONSTRAINT peminjaman_ibfk_1 FOREIGN KEY (id_buku) REFERENCES buku (id_buku),
  ADD CONSTRAINT peminjaman_ibfk_2 FOREIGN KEY (id_member) REFERENCES member (id_member);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;