-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2020 pada 10.50
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ereport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cat_khusus_siswa`
--

CREATE TABLE `tbl_cat_khusus_siswa` (
  `id_cat` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_pembina` varchar(5) NOT NULL,
  `tgl_input` varchar(30) NOT NULL,
  `ket_catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cat_khusus_siswa`
--

INSERT INTO `tbl_cat_khusus_siswa` (`id_cat`, `id_siswa`, `id_pembina`, `tgl_input`, `ket_catatan`) VALUES
(4, '101002', 'P-2', '04 February 2020', 'Siswa kurang bisa bergaul dengan teman, dan cenderung menutup diri'),
(5, '101001', 'P-2', '03 February 2020', 'Siswa tidak bias tidur dalam keadaan lampu mati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `id_counter` int(11) NOT NULL,
  `id_pembina` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_counter`
--

INSERT INTO `tbl_counter` (`id_counter`, `id_pembina`, `id_ortu`, `id_mapel`, `id_indikator`, `id_pelanggaran`) VALUES
(1, 1, 1, 2, 8, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_indikator_nikar`
--

CREATE TABLE `tbl_indikator_nikar` (
  `id_indikator` varchar(5) NOT NULL,
  `aspek_indikator` varchar(50) NOT NULL,
  `ket_indikator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_indikator_nikar`
--

INSERT INTO `tbl_indikator_nikar` (`id_indikator`, `aspek_indikator`, `ket_indikator`) VALUES
('IK-1', 'Spiritualitas', 'Memiliki itikad yang benar dan kehendak baik untuk membangun lingkungan dan sesama'),
('IK-2', 'Spiritualitas', 'Menghayati ibadah dan doa yang teraplikasi dalam kehidupan nyata'),
('IK-3', 'Akademik', 'Memiliki kemauan dan daya tahan untuk belajar'),
('IK-4', 'Akademik', 'Menunjukan kompetensi yang dipilih secara nyata'),
('IK-5', 'Sikap Moral', 'Menerima kekurangan, sadar dan berani mengampuni atau meminta maaf'),
('IK-6', 'Sikap Moral', 'Terbuka dan menghormati keragaman yang ada'),
('IK-7', 'Sikap Kerja', 'Terus menerus berlatih dan mengembangkan diri'),
('IK-8', 'Sikap Kerja', 'Mengerjakan dan menyelesaikan tugas dengan benar dan tepat waktu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_indikator_plg`
--

CREATE TABLE `tbl_indikator_plg` (
  `id_indikator_plg` int(5) NOT NULL,
  `ket_indikator_plg` text NOT NULL,
  `tingkat_plg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_indikator_plg`
--

INSERT INTO `tbl_indikator_plg` (`id_indikator_plg`, `ket_indikator_plg`, `tingkat_plg`) VALUES
(1, 'Terlambat mengikuti kegiatan doa pagi/malam bersama', 'Ringan'),
(2, 'Siswa tidak melaksanakan tugas piket sesuai jadwal', 'Ringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_nilai`
--

CREATE TABLE `tbl_jenis_nilai` (
  `id_jenis_nilai` int(11) NOT NULL,
  `ket_jenis_nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_nilai`
--

INSERT INTO `tbl_jenis_nilai` (`id_jenis_nilai`, `ket_jenis_nilai`) VALUES
(1, 'Ulangan Harian (UH)'),
(2, 'Post Test (Quiz)'),
(3, 'Penilaian Tengah Semester (PTS)'),
(4, 'Penilaian Akhir Semester (PAS)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X RPL'),
(2, 'X MM'),
(3, 'X BKP'),
(4, 'X TKRO'),
(5, 'X TB'),
(6, 'XI RPL'),
(7, 'XI MM'),
(8, 'XI BKP'),
(9, 'XI TKRO'),
(10, 'XI TB'),
(11, 'XII RPL'),
(12, 'XII MM'),
(13, 'XII BKP'),
(14, 'XII TKRO'),
(15, 'XII TB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kop`
--

CREATE TABLE `tbl_kop` (
  `id_kop` int(10) NOT NULL,
  `nama_yayasan` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `telp_instansi` varchar(50) NOT NULL,
  `email_instansi` varchar(50) NOT NULL,
  `rek_instansi` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kop`
--

INSERT INTO `tbl_kop` (`id_kop`, `nama_yayasan`, `nama_instansi`, `alamat_instansi`, `telp_instansi`, `email_instansi`, `rek_instansi`, `logo`) VALUES
(1, 'Yayasan Bagimu Negeriku Semarang', 'Wisma Remaja Bagimu Negeriku Semarang', 'Wonorejo, RT 01 RW 01 Kel. Pesantren, Kec. Mijen, Semarang', '024-70557724 (Putri) , +6289667722424 (Putra)', 'wrbagimunegeriku@gmail.com', 'BRI 0325-01008829-53-5 / BCA 426-039-3931 a.n. Kumalasari / Lindawati Djojo', 'logo_bn.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `jenis_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `jenis_mapel`) VALUES
('M-2', 'Matematika', 'Non Produktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_niak`
--

CREATE TABLE `tbl_niak` (
  `id_niak` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `kelas_siswa` varchar(15) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `jenis_nilai` varchar(30) NOT NULL,
  `penilaian_ke` int(2) NOT NULL,
  `besar_nilai` int(3) NOT NULL,
  `ket_nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_niak`
--

INSERT INTO `tbl_niak` (`id_niak`, `id_siswa`, `kelas_siswa`, `mapel`, `tgl_penilaian`, `jenis_nilai`, `penilaian_ke`, `besar_nilai`, `ket_nilai`) VALUES
(9, '101004', 'X MM', 'Matematika', '2020-01-24', 'Ulangan Harian (UH)', 2, 22, 'Tidak Tuntas'),
(16, '101001', 'X RPL', 'Matematika', '2020-01-27', 'Ulangan Harian (UH)', 1, 2, 'Tidak Tuntas'),
(17, '101002', 'X RPL', 'Matematika', '2020-01-27', 'Ulangan Harian (UH)', 1, 3, 'Tidak Tuntas'),
(18, '101003', 'X MM', 'Matematika', '2020-01-27', 'Ulangan Harian (UH)', 1, 4, 'Tidak Tuntas'),
(19, '101004', 'X MM', 'Matematika', '2020-01-27', 'Ulangan Harian (UH)', 1, 5, 'Tidak Tuntas'),
(20, '101005', 'X TB', 'Matematika', '2020-01-27', 'Ulangan Harian (UH)', 1, 12, 'Tidak Tuntas'),
(21, '101001', 'X RPL', 'Matematika', '2020-01-30', 'Ulangan Harian (UH)', 3, 90, 'Tuntas'),
(22, '101002', 'X RPL', 'Matematika', '2020-01-30', 'Ulangan Harian (UH)', 3, 77, 'Tuntas'),
(23, '101003', 'X MM', 'Matematika', '2020-01-30', 'Ulangan Harian (UH)', 3, 88, 'Tuntas'),
(24, '101004', 'X MM', 'Matematika', '2020-01-30', 'Ulangan Harian (UH)', 3, 99, 'Tuntas'),
(25, '101005', 'X TB', 'Matematika', '2020-01-30', 'Ulangan Harian (UH)', 3, 44, 'Tidak Tuntas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nikar`
--

CREATE TABLE `tbl_nikar` (
  `id_nikar` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `kelas_siswa` varchar(10) NOT NULL,
  `tgl_penilaian` varchar(20) NOT NULL,
  `sesi_penilaian` varchar(5) NOT NULL,
  `id_pembina` varchar(5) NOT NULL,
  `status_penilaian` varchar(30) NOT NULL,
  `nilai1` int(3) NOT NULL,
  `nilai2` int(3) NOT NULL,
  `nilai3` int(3) NOT NULL,
  `nilai4` int(3) NOT NULL,
  `nilai5` int(3) NOT NULL,
  `nilai6` int(3) NOT NULL,
  `nilai7` int(3) NOT NULL,
  `nilai8` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nikar`
--

INSERT INTO `tbl_nikar` (`id_nikar`, `id_siswa`, `kelas_siswa`, `tgl_penilaian`, `sesi_penilaian`, `id_pembina`, `status_penilaian`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`) VALUES
(3, '101001', 'X RPL', '27 January 2020', 'UTS-1', 'P-1', 'Sudah Di Kerjakan', 66, 66, 66, 66, 66, 66, 69, 66),
(4, '101002', 'X RPL', '28 January 2020', 'UTS-1', 'P-2', 'Sudah Di Kerjakan', 77, 77, 77, 77, 77, 77, 77, 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ortu`
--

CREATE TABLE `tbl_ortu` (
  `id_ortu` varchar(11) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `jk_ortu` varchar(11) NOT NULL,
  `agama_ortu` varchar(20) NOT NULL,
  `telp_ortu` varchar(15) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `foto_ortu` varchar(50) NOT NULL,
  `hub_dg_anak` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ortu`
--

INSERT INTO `tbl_ortu` (`id_ortu`, `nama_ortu`, `jk_ortu`, `agama_ortu`, `telp_ortu`, `alamat_ortu`, `foto_ortu`, `hub_dg_anak`, `username`, `password`, `level`, `id_siswa`) VALUES
('O-1', 'Sugik', 'L', 'Islam', '3333-3333-3333', 'dffdfdf', '4.jpg', 'Ayah Kandung', 'ortuku', '202cb962ac59075b964b07152d234b70', 'Ortu', '101001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggaran`
--

CREATE TABLE `tbl_pelanggaran` (
  `id_plg` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_pembina` varchar(5) NOT NULL,
  `tgl_plg` date NOT NULL,
  `tempat_plg` varchar(100) NOT NULL,
  `indikator_plg` varchar(20) NOT NULL,
  `detail_plg` text NOT NULL,
  `surat_plg` varchar(50) NOT NULL,
  `tgl_input` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`id_plg`, `id_siswa`, `id_pembina`, `tgl_plg`, `tempat_plg`, `indikator_plg`, `detail_plg`, `surat_plg`, `tgl_input`) VALUES
(1, '101001', 'P-1', '2020-01-28', 'aulaxxxxx', '1', 'dasadasddasdaddasddsadsdasdsdsxxxx', 'data_siswax.xls', '29 January 2020'),
(2, '101001', 'P-2', '2020-01-29', 'sassassasassa', '1', 'saddasddasd', 'data_siswa.xls', '28 January 2020'),
(3, '101001', 'P-2', '2020-02-01', 'czxxxcxczxczzcx', '1', 'xczxczxczxczxczxcz', 'Tidak Ada Surat Pelanggaran', '01 February 2020'),
(4, '101001', 'P-2', '2020-02-03', 'Asrama', '2', 'Siswa tidak melakukan piket wajib karena bermain HP', 'Tidak Ada Surat Pelanggaran', '03 February 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembina`
--

CREATE TABLE `tbl_pembina` (
  `id_pembina` varchar(5) NOT NULL,
  `nama_pembina` varchar(50) NOT NULL,
  `jk_pembina` varchar(10) NOT NULL,
  `ttl_pembina` date NOT NULL,
  `telp_pembina` varchar(20) NOT NULL,
  `alamat_pembina` text NOT NULL,
  `foto_pembina` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembina`
--

INSERT INTO `tbl_pembina` (`id_pembina`, `nama_pembina`, `jk_pembina`, `ttl_pembina`, `telp_pembina`, `alamat_pembina`, `foto_pembina`, `username`, `password`, `level`) VALUES
('P-2', 'willy', 'L', '2020-01-28', '0897-0908-9766', 'nnnnnnnnnnnnnnnnnnn', '4.jpg', 'willy', '202cb962ac59075b964b07152d234b70', 'Pembina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `telp_siswa` varchar(20) NOT NULL,
  `agama_siswa` varchar(20) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `kelas_siswa` varchar(10) NOT NULL,
  `foto_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `jk_siswa`, `telp_siswa`, `agama_siswa`, `alamat_siswa`, `kelas_siswa`, `foto_siswa`) VALUES
('101001', 'Ado', 'P', '0891-2345-6789', 'Kristen', 'Mijen', 'X RPL', '9.png'),
('101002', 'Beto', 'L', '0812-9876-0912', 'Katholik', 'Ngaliyan', 'X RPL', '6.jpg'),
('101003', 'Cito', 'L', '0872-8976-2138', 'Konghucu', 'Mangkang', 'X MM', '4.jpg'),
('101004', 'Dito', 'L', '0830-4762-9817', 'Hindu', 'Penggaron', 'X MM', '4.jpg'),
('101005', 'Yato', 'L', '0848-9381-7782', 'Budha', 'Pendrikan', 'X TB', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `jk`, `username`, `password`, `level`) VALUES
(1, 'Antonius', 'Pria', 'anton', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_cat_khusus_siswa`
--
ALTER TABLE `tbl_cat_khusus_siswa`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indeks untuk tabel `tbl_counter`
--
ALTER TABLE `tbl_counter`
  ADD PRIMARY KEY (`id_counter`);

--
-- Indeks untuk tabel `tbl_indikator_nikar`
--
ALTER TABLE `tbl_indikator_nikar`
  ADD PRIMARY KEY (`id_indikator`);

--
-- Indeks untuk tabel `tbl_indikator_plg`
--
ALTER TABLE `tbl_indikator_plg`
  ADD PRIMARY KEY (`id_indikator_plg`);

--
-- Indeks untuk tabel `tbl_jenis_nilai`
--
ALTER TABLE `tbl_jenis_nilai`
  ADD PRIMARY KEY (`id_jenis_nilai`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_kop`
--
ALTER TABLE `tbl_kop`
  ADD PRIMARY KEY (`id_kop`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_niak`
--
ALTER TABLE `tbl_niak`
  ADD PRIMARY KEY (`id_niak`);

--
-- Indeks untuk tabel `tbl_nikar`
--
ALTER TABLE `tbl_nikar`
  ADD PRIMARY KEY (`id_nikar`);

--
-- Indeks untuk tabel `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indeks untuk tabel `tbl_pembina`
--
ALTER TABLE `tbl_pembina`
  ADD PRIMARY KEY (`id_pembina`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_cat_khusus_siswa`
--
ALTER TABLE `tbl_cat_khusus_siswa`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_indikator_plg`
--
ALTER TABLE `tbl_indikator_plg`
  MODIFY `id_indikator_plg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_nilai`
--
ALTER TABLE `tbl_jenis_nilai`
  MODIFY `id_jenis_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kop`
--
ALTER TABLE `tbl_kop`
  MODIFY `id_kop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_niak`
--
ALTER TABLE `tbl_niak`
  MODIFY `id_niak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_nikar`
--
ALTER TABLE `tbl_nikar`
  MODIFY `id_nikar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  MODIFY `id_plg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
