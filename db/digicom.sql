-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2021 pada 02.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `judul_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `nama_instansi` varchar(255) DEFAULT NULL,
  `alamat_instansi` text DEFAULT NULL,
  `telp` varchar(128) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_buat` datetime DEFAULT NULL,
  `nomor_surat` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `instansi_tujuan` varchar(255) DEFAULT NULL,
  `alamat_tujuan` text DEFAULT NULL,
  `kota_tujuan` varchar(255) DEFAULT NULL,
  `kode_pos` char(50) DEFAULT NULL,
  `salam_buka` varchar(255) DEFAULT NULL,
  `salam_tutup` varchar(255) DEFAULT NULL,
  `isi_surat` text DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `jenis_instansi` varchar(255) DEFAULT NULL,
  `nomor_identitas` varchar(255) DEFAULT NULL,
  `jenis_surat` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `pengirim`, `penerima`, `nama_instansi`, `alamat_instansi`, `telp`, `website`, `email`, `kota`, `tgl_surat`, `tgl_buat`, `nomor_surat`, `perihal`, `lampiran`, `instansi_tujuan`, `alamat_tujuan`, `kota_tujuan`, `kode_pos`, `salam_buka`, `salam_tutup`, `isi_surat`, `jabatan`, `jenis_instansi`, `nomor_identitas`, `jenis_surat`, `style`, `logo`) VALUES
(1, 'Novianto Hendrawan S.Pd.', 'Yth. Bapak/Ibu Guru', 'SMK SEBELAS MARET', ' Jalan Soekarno-Hatta No.18 Kota Malang', '(031) 47189231', NULL, 'smksebelasmaret@gmail.com', NULL, '2021-05-13', '2021-05-11 00:00:00', '13/Ed/XI/2021	', 'Edaran', '', 'SMK Sebelas Maret', NULL, 'Malang', NULL, 'Dengan hormat,', 'Hormat Kami,', '<p class=\"MsoNormal\" style=\"margin-bottom:3.0pt;text-align:justify;line-height:\r\n135%;tab-stops:1.0cm 2.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:\r\n135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Sehubungan akan berakhirnya tahun\r\najaran 2020/2021, maka bersamaan dengan hal tersebut akan diadakannya<a name=\"_GoBack\"></a> perpisahan kelas XII. Adapaun kegiatan tersebut akan\r\ndilaksanakan pada:<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:135%;tab-stops:1.0cm 63.8pt 70.9pt 127.6pt 5.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Hari,tanggal&nbsp; :&nbsp; Senin,\r\n5 April 2021<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:135%;tab-stops:1.0cm 63.8pt 70.9pt 127.6pt 5.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 09.00\r\ns.d 12.00 WIB<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:3.0pt;text-align:justify;line-height:\r\n135%;tab-stops:1.0cm 63.8pt 70.9pt 127.6pt 5.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Aula\r\nSMK Sebelas Maret<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:3.0pt;text-align:justify;line-height:\r\n135%;tab-stops:1.0cm 2.0cm 70.9pt 127.6pt 5.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Demi\r\nkelancaran kegiatan tersebut, Kami mohon bantuan partisipasi Bapak/Ibu guru\r\ndalam menyiapkan acara tersebut satu hari sebelum acara dimulai.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:3.0pt;text-align:justify;line-height:\r\n135%;tab-stops:1.0cm 2.0cm 70.9pt 127.6pt 5.0cm\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:135%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Demikian\r\nsurat edaran ini Kami sampaikan, atas perhatian serta kerjasamanya Kami&nbsp; sampaikan terima kasih.<o:p></o:p></span></p>', 'Kepala sekolah', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'NIP 160412607066 200 1', 'Dinas', 'Block', '7_1620740377.png'),
(2, '', '', '', ' ', '', NULL, '', NULL, '2021-05-19', '2021-05-11 00:00:00', '', '', '', '', NULL, 'Malang', NULL, '', '', '', '', '', '', 'Dinas', 'Block', '7_1620740603.png'),
(3, 'Richa Widyagama', 'Yth. Direktur ', 'PT MATAHARI PUTRA PRIMA', ' Jalan Basuki Rahmat No.11 Tulungagung 66371', '03747168', 'www.matahariputraprima.com', 'Matahariputraprima@gmail.com', NULL, '2021-05-21', '2021-05-12 00:00:00', '119/PE/XI/2021', 'Pesanan Barang', '', 'PT Makmur Jaya', ' Jalan Sumbersari 26', 'Trenggalek', '66381', 'Dengan hormat,', 'Hormat Kami, ', '<p class=\"MsoNormal\" style=\"margin-bottom:12.0pt;text-align:justify;line-height:\r\n125%\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:125%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">penawaran\r\nSaudara tanggal 9 Oktober 2021, nomor 201/SP/X/2021 telah Kami terima dengan\r\nbaik. Berkaitan dengan hal tersebut perusahaan Kami berkeinginan untuk memesan\r\nkain batik sebagai berikut:<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:125%\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:\r\n125%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:12.0pt;text-align:justify;line-height:\r\n125%\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:125%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Pembayaran\r\nKami lakukan secara kredit sesuai dengan ketentuan dari perusahaan Saudara.\r\nPembayaran pertama akan Kami lakukan setelah barang tiba di perusahaan Kami,\r\ndengan cara transfer ke rekening Saudara.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align:justify;line-height:125%\"><span lang=\"IN\" style=\"font-size:12.0pt;line-height:125%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Kami\r\nharap barang segera tiba di perusahaan Kami. Atas perhatian dan kerjasamanya\r\nKami sampaikan terima kasih.<o:p></o:p></span></p>', 'Manajer Pemasaran', NULL, NULL, 'Niaga', 'Block', '7_1620761525.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_user`
--

CREATE TABLE `surat_user` (
  `id_user` int(5) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_user`
--

INSERT INTO `surat_user` (`id_user`, `id_surat`, `id_tugas`) VALUES
(7, 1, 1),
(7, 2, 1),
(7, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `deskripsi` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_siswa`
--

CREATE TABLE `tugas_siswa` (
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_submit` date NOT NULL,
  `status` enum('Selesai','Belum','Terlambat','') NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no_telp` varchar(128) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `kelas`, `no_telp`, `level`) VALUES
(1, '001', '$2y$10$o5rjA/.eXBdYrTIQssm4hO3HO7Fa3yLP6yyvnChAloFY.dc3B7VvS', 'sada', '', NULL, 0),
(2, '002', '$2y$10$zS1FH8IKaTuzH.vos.EjseqXn4YSXNpm1YM3cZt3aCfsj7MGVQCNu', 'sada', '', NULL, 0),
(3, '003', '$2y$10$JBl8t5dQOEKTRbg7sKCOleRJxLh7rJRDB3lc8j3zBZbfLv/BrDHQa', 'oke', '', NULL, 0),
(4, '01', '$2y$10$fv02/IJtQIAqJaqnv8rG6etvvLr7vzvLyhzvHE6.jI0ihwT0cjh9G', 'hafizh arrozaq', '', NULL, 1),
(5, '1', '$2y$10$XqRgqReuz9cW4OCe/13pr.kXZ6OLpxl3MVIfrGsPmfR04sX79ghgO', 'hafizh', '', NULL, 1),
(6, 'guru', '$2y$10$2/zq8OAqIefo2F3mziHqv.uAeLFVxfIRe0ZjV9rzGiGWU9yhEYTNS', 'Lulu Iwana', '', NULL, 0),
(7, 'siswa', '$2y$10$WzxE9C3SqEG0fM.yQGozV.nNMKPL6eDl6mBoAsJzu4jDa0izuxeJ2', 'Lulu Iwana', '', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
