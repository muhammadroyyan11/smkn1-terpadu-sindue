-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 07.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_terpadu_sindue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_legalisir`
--

CREATE TABLE `alumni_legalisir` (
  `legalisir_id` int(11) NOT NULL,
  `npsn` char(15) NOT NULL,
  `nis` char(15) NOT NULL,
  `nisn` char(15) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `tahun_pelajaran` varchar(15) NOT NULL,
  `verifikasi` int(2) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tujuan` varchar(191) NOT NULL,
  `ket_pengajuan` varchar(191) NOT NULL,
  `status_pengajuan` int(2) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jum_bayar` int(15) NOT NULL,
  `file_bayar` varchar(191) NOT NULL,
  `status_bayar` int(2) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `ket_pengambilan` varchar(191) NOT NULL,
  `alamat_terbaru` varchar(255) NOT NULL,
  `status_ambil` int(2) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni_legalisir`
--

INSERT INTO `alumni_legalisir` (`legalisir_id`, `npsn`, `nis`, `nisn`, `nama_siswa`, `tahun_pelajaran`, `verifikasi`, `tgl_pengajuan`, `tujuan`, `ket_pengajuan`, `status_pengajuan`, `tgl_bayar`, `jum_bayar`, `file_bayar`, `status_bayar`, `tgl_pengambilan`, `ket_pengambilan`, `alamat_terbaru`, `status_ambil`, `datecreate`) VALUES
(1, '40200733', '2147483647', '111111111111111', 'aaaaaaaaaaaaa', '2021/2022', 0, '2024-01-12', 'CPNS', 'Untuk CPNS Kemdikbud\r\n', 2, '0000-00-00', 200000, '', 0, '0000-00-00', '', '', 0, '2024-01-12 16:41:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_mapel`
--

CREATE TABLE `alumni_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(250) NOT NULL,
  `no_urut` int(2) NOT NULL,
  `kelompok` varchar(10) NOT NULL,
  `rombel` char(15) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `aktif_skl` int(1) NOT NULL,
  `aktif_transkip` int(1) NOT NULL,
  `tasm` varchar(6) NOT NULL,
  `npsn` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_nilai`
--

CREATE TABLE `alumni_nilai` (
  `id_nilai` int(11) NOT NULL,
  `npsn` char(15) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `rombel` char(15) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `nilai` int(6) NOT NULL,
  `semester` int(1) NOT NULL,
  `tasm` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_pengumuman`
--

CREATE TABLE `alumni_pengumuman` (
  `id` int(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_pengumuman`
--

INSERT INTO `alumni_pengumuman` (`id`, `npsn`, `id_user`, `judul`, `deskripsi`, `tgl`, `jenis`) VALUES
(1, '20604616', 2023121103, 'aaaa', '<p>aaaaaaaa</p>\r\n', '2023-12-13 20:25:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_register`
--

CREATE TABLE `alumni_register` (
  `alumni_id` int(11) NOT NULL,
  `npsn` char(15) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tahun_pelajaran` varchar(15) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `nis` char(15) NOT NULL,
  `nisn` char(15) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tasm` varchar(11) NOT NULL,
  `alumni_aktif` int(2) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(191) NOT NULL,
  `perbaikan` int(2) NOT NULL,
  `file_ijazah` varchar(191) NOT NULL,
  `aktive_ijazah` int(2) NOT NULL,
  `verifikasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni_register`
--

INSERT INTO `alumni_register` (`alumni_id`, `npsn`, `no_surat`, `tahun_pelajaran`, `nama_siswa`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `keterangan`, `alamat_siswa`, `status`, `datecreate`, `tasm`, `alumni_aktif`, `telp`, `email`, `perbaikan`, `file_ijazah`, `aktive_ijazah`, `verifikasi`) VALUES
(4, '40200733', '1111', '2021/2022', 'aaaaaaaaaaaaa', '2147483647', '111111111111111', 'A', '2023-12-13', 'Lulus', 'aaaaaaaa', 1, '2024-01-13 05:48:47', '2023', 1, '', '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_user_access_menu`
--

CREATE TABLE `alumni_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_user_access_menu`
--

INSERT INTO `alumni_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_user_menu`
--

CREATE TABLE `alumni_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_user_menu`
--

INSERT INTO `alumni_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_user_role`
--

CREATE TABLE `alumni_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_user_role`
--

INSERT INTO `alumni_user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'student'),
(4, 'teacher'),
(5, 'staff'),
(6, 'guest');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_user_sub_menu`
--

CREATE TABLE `alumni_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_user_sub_menu`
--

INSERT INTO `alumni_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'lulus/user', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Perbaharui Data', 'lulus/perbaharui', 'fas fa-paste', 1),
(3, 2, 'Upload Ijazah', 'lulus/upload_ijazah', 'fas fa-comment-dollar', 0),
(4, 2, 'Legalisir', 'lulus/legalisir', 'fas fa-comment-dollar', 1),
(5, 2, 'Bukti Bayar', 'lulus/pembayaran', 'fas fa-comment-dollar', 0),
(6, 2, 'Pengambilan', 'lulus/jadwal', 'fas fa-envelope-open-text', 1),
(7, 3, 'Pengumuman', 'lulus/pengumuman', 'fas fa-bullhorn', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_notif`
--

CREATE TABLE `c_notif` (
  `id` char(50) NOT NULL,
  `no_referensi` char(10) NOT NULL,
  `email_target` char(100) NOT NULL,
  `email_client` char(100) NOT NULL,
  `read` enum('Y','N') NOT NULL DEFAULT 'N',
  `tanggal` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lsp_data_asesor`
--

CREATE TABLE `lsp_data_asesor` (
  `id_asesor` int(11) NOT NULL,
  `nama_asesor` varchar(191) NOT NULL,
  `no_registrasi` char(25) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lsp_data_asesor`
--

INSERT INTO `lsp_data_asesor` (`id_asesor`, `nama_asesor`, `no_registrasi`, `alamat`, `status`, `datetime`) VALUES
(1, 'Adam Wahida', 'MET.000.002831 2019', 'Kota Surakarta, Jawa Tengah', 1, '0000-00-00 00:00:00'),
(2, 'Agung Hujatnika', 'MET.000.009746 2019', 'Bandung, Jawa Barat', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lsp_data_skema`
--

CREATE TABLE `lsp_data_skema` (
  `id_skema` int(11) NOT NULL,
  `kode_skema` char(50) NOT NULL,
  `nama_skema` varchar(191) NOT NULL,
  `kategori` int(2) NOT NULL,
  `bidang` int(2) NOT NULL,
  `mea` int(2) NOT NULL,
  `unit` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lsp_data_skema`
--

INSERT INTO `lsp_data_skema` (`id_skema`, `kode_skema`, `nama_skema`, `kategori`, `bidang`, `mea`, `unit`, `status`, `datetime`) VALUES
(1, 'SKM/0917/00018/2/2019/028', 'Aktor Teater', 1, 2, 1, 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lsp_data_tuk`
--

CREATE TABLE `lsp_data_tuk` (
  `id_tuk` int(11) NOT NULL,
  `kode` char(50) NOT NULL,
  `jenis_tuk` varchar(25) NOT NULL,
  `nama_tuk` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lsp_data_tuk`
--

INSERT INTO `lsp_data_tuk` (`id_tuk`, `kode`, `jenis_tuk`, `nama_tuk`, `alamat`, `status`, `datetime`) VALUES
(1, 'SS-030/LSPKEB/X/2021', 'Sewaktu', 'Ambhara Hotel, Jakarta', 'Jl. Iskandarsyah Raya No.1, Blok M', 1, '0000-00-00 00:00:00'),
(2, 'SS-331/LSPKEB/X/2022', 'Sewaktu', 'Aston Makassarr', 'Jl. Sultan Hasanuddin No.10, Baru, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90174', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lsp_profile`
--

CREATE TABLE `lsp_profile` (
  `id_profil` int(11) NOT NULL,
  `no_sk` char(25) NOT NULL,
  `no_lisensi` char(20) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `no_telp` char(35) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `no_fax` char(15) NOT NULL,
  `email` varchar(191) NOT NULL,
  `website` varchar(191) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `logo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lsp_profile`
--

INSERT INTO `lsp_profile` (`id_profil`, `no_sk`, `no_lisensi`, `jenis`, `no_telp`, `no_hp`, `no_fax`, `email`, `website`, `masa_berlaku`, `logo`) VALUES
(1, 'KEP.1081/BNSP/V/2021', 'BNSP-LSP-917-ID', 'LSP Pihak Kedua', '021-5725562 atau 021-5725512', '087888118801', '021-5725562', 'lsp.kebudayaan@gmail.com', 'https://kebudayaan.kemdikbud.go.id/full-assessment-lsp-p-2-kebudayaan-oleh-bnsp/', '2023-12-15', 'logo_anak_desa.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_kelas`
--

CREATE TABLE `l_kelas` (
  `l_kelas_id` int(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `tingkat` char(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_kelas`
--

INSERT INTO `l_kelas` (`l_kelas_id`, `npsn`, `tingkat`, `kelas`, `create_date`) VALUES
(6, '', 'AKL', 'AKUNTANSI KEUANGAN LEMBAGA', '2023-03-18 06:46:08'),
(7, '', 'LKM', 'LAYANAN KESEHATAN MASYARAKAT', '2023-03-18 06:47:37'),
(8, '', 'TKR', 'TEKNIK KENDARAAN RINGAN', '2023-03-18 06:52:56'),
(9, '', 'TKJ', 'TEKNIK KOMPUTER DAN JARINGAN', '2023-03-18 06:53:30'),
(10, '', 'TP', 'TEKNIK PENGELASAN', '2023-03-18 06:53:39'),
(11, '', 'TBSM', 'TEKNIK BISNIS SEPEDA MOTOR', '2023-03-18 06:54:07'),
(13, '', 'DKP', 'DESAIN KOMUNIKASI VISUAL', '2023-03-18 07:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_tahun`
--

CREATE TABLE `l_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun_aktif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_tahun`
--

INSERT INTO `l_tahun` (`id_tahun`, `tahun_aktif`) VALUES
(2, '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL DEFAULT '0',
  `idpk` varchar(255) NOT NULL,
  `idguru` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jml_soal` int(5) NOT NULL,
  `jml_esai` int(5) NOT NULL DEFAULT 0,
  `tampil_pg` int(5) NOT NULL,
  `tampil_esai` int(5) NOT NULL DEFAULT 0,
  `bobot_pg` int(5) NOT NULL,
  `bobot_esai` int(5) NOT NULL DEFAULT 0,
  `level` varchar(5) NOT NULL,
  `opsi` int(1) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(2) NOT NULL,
  `kkm` int(3) DEFAULT NULL,
  `soal_agama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kode`, `idpk`, `idguru`, `nama`, `jml_soal`, `jml_esai`, `tampil_pg`, `tampil_esai`, `bobot_pg`, `bobot_esai`, `level`, `opsi`, `kelas`, `date`, `status`, `kkm`, `soal_agama`) VALUES
(1, 'COBA-TES', 'a:1:{i:0;s:5:\"semua\";}', '285', 'COBA', 1, 1, 1, 1, 1, 1, 'semua', 3, 'a:1:{i:0;s:5:\"semua\";}', '2023-10-14 18:28:40', '1', 1, ''),
(2, 'BANK_SOAL_A', 'a:1:{i:0;s:5:\"semua\";}', '285', 'COBA', 1, 1, 1, 1, 1, 1, 'semua', 3, 'a:1:{i:0;s:5:\"semua\";}', '2023-10-15 17:05:38', '1', 1, ''),
(3, 'COBA-A', 'a:1:{i:0;s:5:\"semua\";}', '285', 'IPA', 10, 5, 10, 5, 50, 50, 'Dasar', 3, 'a:1:{i:0;s:5:\"semua\";}', '2023-10-15 17:12:38', '1', 75, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_beasiswa`
--

CREATE TABLE `m_beasiswa` (
  `beasiswa_id` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nik` int(25) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `th_pelajaran` varchar(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_beasiswa`
--

INSERT INTO `m_beasiswa` (`beasiswa_id`, `nis`, `nik`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `th_pelajaran`, `keterangan`, `status`, `datecreate`) VALUES
(3, 2147483647, 0, 'aaaaaaaaaaa', '', '0000-00-00', '2023/2024', 'prestasi ', 1, '2023-12-12 23:43:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_contacts`
--

CREATE TABLE `m_contacts` (
  `no` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `wa` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `softfile` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_desa`
--

CREATE TABLE `m_desa` (
  `id` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_desa`
--

INSERT INTO `m_desa` (`id`, `kecamatan_id`, `desa`) VALUES
(1, 1, 'MASAINGI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_ekstra`
--

CREATE TABLE `m_ekstra` (
  `id` int(2) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_ekstra`
--

INSERT INTO `m_ekstra` (`id`, `kd_campus`, `kd_sekolah`, `nama`) VALUES
(1, '', '', 'Pramuka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_guru`
--

CREATE TABLE `m_guru` (
  `id` int(3) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `tingkat` char(11) NOT NULL,
  `nip` char(15) DEFAULT NULL,
  `nama_guru` varchar(191) NOT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `is_bk` enum('2','1') DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `stat_data` enum('A','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jurusan`
--

CREATE TABLE `m_jurusan` (
  `kode_jurusan` char(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jurusan_id` char(10) NOT NULL,
  `npsn` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_jurusan`
--

INSERT INTO `m_jurusan` (`kode_jurusan`, `jurusan`, `jurusan_id`, `npsn`) VALUES
('IF', 'INFORMATIKA', '', '20604616'),
('MUL', 'MULTIMEDIA', '', '20604616');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kecamatan`
--

CREATE TABLE `m_kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_kecamatan`
--

INSERT INTO `m_kecamatan` (`kecamatan_id`, `kota_id`, `kecamatan`) VALUES
(1, 1, 'SINDUE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kelas`
--

CREATE TABLE `m_kelas` (
  `id` int(3) NOT NULL,
  `tingkat` char(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `npsn` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_kelas`
--

INSERT INTO `m_kelas` (`id`, `tingkat`, `nama`, `npsn`) VALUES
(1, 'X', 'X', '20604616'),
(2, 'XI', 'XI', '20604616'),
(3, 'XII', 'XII', '20604616'),
(4, 'XIII', 'XIII', '20604616');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kota`
--

CREATE TABLE `m_kota` (
  `kota_id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_kota`
--

INSERT INTO `m_kota` (`kota_id`, `provinsi_id`, `kota`) VALUES
(1, 1, 'DONGGALA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_lulus`
--

CREATE TABLE `m_lulus` (
  `lulus_id` int(11) NOT NULL,
  `npsn` char(15) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tahun_pelajaran` varchar(15) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `nis` int(15) NOT NULL,
  `nisn` char(15) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tasm` varchar(11) NOT NULL,
  `cek_lulus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_lulus`
--

INSERT INTO `m_lulus` (`lulus_id`, `npsn`, `no_surat`, `tahun_pelajaran`, `nama_siswa`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `keterangan`, `alamat_siswa`, `status`, `datecreate`, `tasm`, `cek_lulus`) VALUES
(1, '40200733', '1111', '2021/2022', 'aaaaaaaaaaaaa', 2147483647, '111111111111111', 'A', '2023-12-13', 'Lulus', 'aaaaaaaa', 1, '2023-12-13 13:24:39', '2023', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_lulus_data`
--

CREATE TABLE `m_lulus_data` (
  `id_data` int(11) NOT NULL,
  `kata_pembuka` text NOT NULL,
  `kata_isi` text NOT NULL,
  `kata_penutup` text NOT NULL,
  `tanggal_publis` datetime NOT NULL,
  `logo` varchar(191) NOT NULL,
  `kota` varchar(191) NOT NULL,
  `ttd_kepsek` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_lulus_data`
--

INSERT INTO `m_lulus_data` (`id_data`, `kata_pembuka`, `kata_isi`, `kata_penutup`, `tanggal_publis`, `logo`, `kota`, `ttd_kepsek`) VALUES
(0, '<p>aaaaaaaaa</p>\r\n', '<p>aaaaaaaaaa</p>\r\n', '<p>aaaaaaaaa</p>\r\n', '1970-01-01 07:00:00', '1.png', 'aaaaaa', 'Untitled-1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mapel`
--

CREATE TABLE `m_mapel` (
  `id` int(3) NOT NULL,
  `npsn` char(11) NOT NULL,
  `nama_mapel` varchar(150) NOT NULL,
  `kode_mapel` varchar(11) NOT NULL,
  `tingkat` char(11) NOT NULL,
  `kelompok` enum('A','B','C','C1','D') NOT NULL,
  `tambahan_sub` enum('NO','PAI','MULOK') NOT NULL,
  `kd_singkat` varchar(10) NOT NULL,
  `kkm` int(2) NOT NULL,
  `is_sikap` enum('0','1') NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_mapel`
--

INSERT INTO `m_mapel` (`id`, `npsn`, `nama_mapel`, `kode_mapel`, `tingkat`, `kelompok`, `tambahan_sub`, `kd_singkat`, `kkm`, `is_sikap`, `kd_campus`, `kd_sekolah`) VALUES
(1, '20604616', 'Pendidikan Agama dan Budi Pekerti ', 'AGM', '', 'A', 'NO', '', 0, '0', '', ''),
(2, '20604616', 'Pendidikan Pancasila', 'PC', '', 'A', 'NO', '', 0, '0', '', ''),
(3, '20604616', 'Bahasa Indonesia', 'BHS', '', 'A', 'NO', '', 0, '0', '', ''),
(4, '20604616', 'Matematika', 'MTK', '', 'A', 'NO', '', 0, '0', '', ''),
(5, '20604616', 'Seni Budaya', 'SB', '', 'A', 'NO', '', 0, '0', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_naik_kelas`
--

CREATE TABLE `m_naik_kelas` (
  `naik_id` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `tingkat` char(11) NOT NULL,
  `tingkat_active` int(1) NOT NULL,
  `th_active` varchar(6) NOT NULL,
  `nis` char(25) NOT NULL,
  `npsn` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_naik_kelas`
--

INSERT INTO `m_naik_kelas` (`naik_id`, `kd_campus`, `kd_sekolah`, `tingkat`, `tingkat_active`, `th_active`, `nis`, `npsn`) VALUES
(7, '', '', 'X', 0, '2023', '1111', '20604616'),
(8, '', '', 'X', 0, '2023', '202310001', '20604616'),
(9, '', '', 'X', 0, '2023', '333333333333', '20604616');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_provinsi`
--

CREATE TABLE `m_provinsi` (
  `provinsi_id` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_provinsi`
--

INSERT INTO `m_provinsi` (`provinsi_id`, `provinsi`) VALUES
(1, ' SULAWESI TENGAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_ruang`
--

CREATE TABLE `m_ruang` (
  `kode_ruang` char(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `npsn` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_ruang`
--

INSERT INTO `m_ruang` (`kode_ruang`, `keterangan`, `npsn`) VALUES
('X-IPS', 'X-IPS', '20604616'),
('X-MUL', 'X-MUL', '20604616');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_sekolah`
--

CREATE TABLE `m_sekolah` (
  `sekolah_id` int(11) NOT NULL,
  `npyp` char(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `nss` char(15) NOT NULL,
  `nds` char(15) NOT NULL,
  `nama_sekolah` varchar(191) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sekolah_provinsi_id` int(11) NOT NULL,
  `sekolah_kota_id` int(11) NOT NULL,
  `sekolah_kecamatan_id` int(11) NOT NULL,
  `telp` varchar(18) NOT NULL,
  `kodepos` varchar(11) NOT NULL,
  `email` varchar(191) NOT NULL,
  `web` varchar(191) NOT NULL,
  `sebutan_kepala` varchar(191) NOT NULL,
  `nip` char(50) NOT NULL,
  `kurikulum` longtext NOT NULL,
  `sejarah` longtext NOT NULL,
  `kop_1` varchar(191) NOT NULL,
  `kop_2` varchar(191) NOT NULL,
  `logo` varchar(191) NOT NULL,
  `akreditasi` varchar(191) NOT NULL,
  `visi_misi` text NOT NULL,
  `mars` text NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `klikchat` text NOT NULL,
  `livechat` text NOT NULL,
  `nolivechat` text NOT NULL,
  `infobayar` text NOT NULL,
  `syarat` text NOT NULL,
  `instagram_src` varchar(256) NOT NULL,
  `instagram_usrc` varchar(256) NOT NULL,
  `banner` varchar(191) NOT NULL,
  `active_banner` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_active_psb` int(1) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `maps_kecil` text NOT NULL,
  `maps_sedang` text NOT NULL,
  `sekola_status` varchar(191) NOT NULL,
  `sekolah_waktu` varchar(191) NOT NULL,
  `sekolah_jenjang` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_sekolah`
--

INSERT INTO `m_sekolah` (`sekolah_id`, `npyp`, `npsn`, `nss`, `nds`, `nama_sekolah`, `alamat`, `sekolah_provinsi_id`, `sekolah_kota_id`, `sekolah_kecamatan_id`, `telp`, `kodepos`, `email`, `web`, `sebutan_kepala`, `nip`, `kurikulum`, `sejarah`, `kop_1`, `kop_2`, `logo`, `akreditasi`, `visi_misi`, `mars`, `favicon`, `klikchat`, `livechat`, `nolivechat`, `infobayar`, `syarat`, `instagram_src`, `instagram_usrc`, `banner`, `active_banner`, `is_active`, `is_active_psb`, `date_create`, `maps_kecil`, `maps_sedang`, `sekola_status`, `sekolah_waktu`, `sekolah_jenjang`) VALUES
(1, '0', '69758313', '0', '0', 'SMK NEGERI 1 TERPADU SINDUE', 'JL.Pendidikan No 17', 1, 1, 1, '0451491326', '94353', 'smkn1terpadusindue@gmail.com', 'www.smkn1terpadusindue.sch.id', 'Alias', '-', '<h3><strong>KURIKULUM MERDEKA SMK</strong></h3>\r\n\r\n<p>Struktur kurikulum SMK/MAK terbagi menjadi 2 (dua), yaitu:</p>\r\n\r\n<ul>\r\n	<li>Pembelajaran intrakurikuler; dan</li>\r\n	<li>Projek Penguatan Profil Pelajar Pancasila yang dialokasikan dari total JP mata pelajaran umum dan beberapa mata pelajaran pilihan per tahun.</li>\r\n</ul>\r\n\r\n<p>Pembelajaran intrakuler di SMK/MAK pun terbagi menjadi 2 (dua), yaitu kelompok mata pelajaran umum dan kejuruan.</p>\r\n\r\n<h3>Kelompok Umum</h3>\r\n\r\n<p>Kelompok mata pelajaran yang berfungsi membentuk murid menjadi pribadi yang utuh, sesuai fase perkembangannya. Murid diharapkan memiliki norma-norma kehidupan sebagai makhluk individu dan makhluk sosial, sebagai warga negara Indonesia dan warga dunia.</p>\r\n\r\n<p>Beberapa mata pelajaran yang termasuk dalam kelompok umum:</p>\r\n\r\n<ul>\r\n	<li><strong>Projek IPAS.</strong> Mata pelajaran yang mengembangkan literasi sains dengan aspek-aspek ilmu pengetahuan alam dan sosial. Mata pelajaran ini disampaikan dalam tema-tema kehidupan yang kontekstual dan aktual.</li>\r\n	<li><strong>Bahasa Inggris</strong> dan <strong>Matematika.</strong> Di kelas 10, kedua mata pelajaran ini berisi materi umum dan dasar. Sementara di kelas 11 dan 12, fokus dua mata pelajaran ini adalah pendalamam materi secara kontekstual terhadap substansi kejuruan pada masing-masing Program Keahlian. Keahlian.</li>\r\n	<li><strong>Informatika.</strong> Mata pelajaran ini dirancang sama dengan satuan pendidikan lain tapi bisa disesuaikan dengan Program Keahlian peserta didik.</li>\r\n</ul>\r\n\r\n<h3>Kelompok Kejuruan</h3>\r\n\r\n<p>Kelompok mata pelajaran yang berfungsi membentuk murid agar memiliki kompetensi sesuai perkembangan dunia kerja, serta ilmu pengetahuan, teknologi, seni dan budaya.</p>\r\n\r\n<p>Beberapa mata pelajaran Kelompok Kejuruan yang ada di SMK/MAK:</p>\r\n\r\n<ul>\r\n	<li><strong>Mata Pelajaran Kejuruan.</strong> Di kelas 10, Mata Pelajaran Kejuruan berpusat pada pelajaran dasar-dasar Program Keahlian. Di kelas 11 dan 12, mata pelajaran ini mencakup kelompok unit kompetensi yang dikembangkan secara lebih teknis sesuai Konsentrasi Keahlian yang dipilih.</li>\r\n	<li><strong>Mata Pelajaran Kreatif dan Kewirausahaan.</strong> Mata pelajaran ini menjadi alat bagi murid untuk mengaktualisisasikan dan mengekspresikan kompetensi yang dikuasai. Hal ini dilakukan melalui pembuatan produk atau pekerjaan layanan jasa secara kreatif dan bernilai ekonomis.</li>\r\n	<li><strong>Mata Pelajaran Pilihan.</strong> Mata pelajaran yang dipilih oleh murid sesuai dengan renjana (passion) untuk pengembangan diri, melanjutkan pendidikan, berwirausaha, maupun bekerja pada bidang yang dipilih. Murid dapat mendalami mata pelajaran kejuruan di konsentrasi keahliannya, mata pelajaran kejuruan lintas konsentrasi keahlian, mata pelajaran umum, atau mata pelajaran kelompok pilihan yang diajarkan di fase F SMA/MA.</li>\r\n</ul>\r\n\r\n<h3>Pemilihan Konsentrasi Pada Satu Program Keahlian</h3>\r\n\r\n<p>Ada beberapa hal terkait pemilihan konsentrasi pada satu Program Keahlian yang perlu diperhatikan:</p>\r\n\r\n<ol>\r\n	<li>Pemilihan konsentrasi dilakukan berdasarkan kebutuhan tenaga kerja di dunia kerja yang menjadi sasaran murid.</li>\r\n	<li>Satu program keahlian bisa mencakup satu atau lebih konsentrasi.</li>\r\n	<li>Jika ada konsentrasi yang berbeda dalam satu program keahlian, maka akan diselenggarakan dalam rombongan belajar yang berbeda.</li>\r\n</ol>\r\n', '<p>Assalamualaikum Wr.Wb.<br />\r\n<br />\r\nSelamat datang di website SMAN 1 BUNGURAN UTARA,<br />\r\n<br />\r\nAlhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Perkembangan tekhnologi menuntut perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berkarakter ,kreatif, inovasi dan unggul dalam prestasi serta kompetitif dalam dunia Digital.<br />\r\n<br />\r\nWebsite SMAN 1 BUNGURAN UTARA&nbsp; merupakan pintu gerbang untuk memperoleh informasi tentang kegiatan sekolah, prestasi akademik maupun non akademik kepada orangtua/wali siswa, maupun masyarakat secara luas serta sebagai ajang komunikasi antara guru, siswa, alumni dan masyarakat. Pemanfaatan lainnya adalah website sekolah sebagai media pembelajaran dan evaluasi online.<br />\r\n<br />\r\nSemoga website ini dapat bermanfaat khususnya dalam meningkatkan mutu pendidikan di SMAN 1 BUNGURAN UTARA dan dunia pendidikan pada umumnya. Aamiin.<br />\r\n<br />\r\nWassalamualaikum Wr.Wb</p>\r\n', '', '', 'Logo_Tutwuri1.png', 'Ketentuan_Tutwuri.png', '<p>Assalamualaikum Wr.Wb.<br />\r\n<br />\r\nSelamat datang di website SMAN 1 BUNGURAN UTARA,<br />\r\n<br />\r\nAlhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Perkembangan tekhnologi menuntut perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berkarakter ,kreatif, inovasi dan unggul dalam prestasi serta kompetitif dalam dunia Digital.<br />\r\n<br />\r\nWebsite SMAN 1 BUNGURAN UTARA&nbsp; merupakan pintu gerbang untuk memperoleh informasi tentang kegiatan sekolah, prestasi akademik maupun non akademik kepada orangtua/wali siswa, maupun masyarakat secara luas serta sebagai ajang komunikasi antara guru, siswa, alumni dan masyarakat. Pemanfaatan lainnya adalah website sekolah sebagai media pembelajaran dan evaluasi online.<br />\r\n<br />\r\nSemoga website ini dapat bermanfaat khususnya dalam meningkatkan mutu pendidikan di SMAN 1 BUNGURAN UTARA dan dunia pendidikan pada umumnya. Aamiin.<br />\r\n<br />\r\nWassalamualaikum Wr.Wb</p>\r\n', '<p>Assalamualaikum Wr.Wb.<br />\r\n<br />\r\nSelamat datang di website SMAN 1 BUNGURAN UTARA,<br />\r\n<br />\r\nAlhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Perkembangan tekhnologi menuntut perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berkarakter ,kreatif, inovasi dan unggul dalam prestasi serta kompetitif dalam dunia Digital.<br />\r\n<br />\r\nWebsite SMAN 1 BUNGURAN UTARA&nbsp; merupakan pintu gerbang untuk memperoleh informasi tentang kegiatan sekolah, prestasi akademik maupun non akademik kepada orangtua/wali siswa, maupun masyarakat secara luas serta sebagai ajang komunikasi antara guru, siswa, alumni dan masyarakat. Pemanfaatan lainnya adalah website sekolah sebagai media pembelajaran dan evaluasi online.<br />\r\n<br />\r\nSemoga website ini dapat bermanfaat khususnya dalam meningkatkan mutu pendidikan di SMAN 1 BUNGURAN UTARA dan dunia pendidikan pada umumnya. Aamiin.<br />\r\n<br />\r\nWassalamualaikum Wr.Wb</p>\r\n', '', '', '', 'Terima kasih sudah mendaftar di SMKN 1 SUAK TAPEH, Harap segera mengisi dan mencetak formulir dan surat pernyataan secara online \r\nsilahkan kunjungi website \r\nwww.ppdb.smkn1suaktapeh.sch.id/login    \r\n\r\nSilahkan login menggunakan username dan password yang sudah di buat pada saat pendaftaran\r\n', '<p>aaaaaaaaaaaaaaa</p>\r\n', '<p>1. Mengisi Dan mencetak Formulir pendaftaran di website https://www.ppdb.smkn1suaktapeh.sch.id</p>\r\n\r\n<p>2. Foto Copy Ijazah</p>\r\n\r\n<p>3. Foto Copy Nilai Rapor Semester 1-5</p>\r\n\r\n<p>3. Foto Copy KK</p>\r\n\r\n<p>4. Foto Copy Akte Kelahiran</p>\r\n\r\n<p>5. Foto 2x3 dan 3x4</p>\r\n\r\n<p>6. KIP <strong><em>( Bagi Yang Memiliki )</em></strong></p>\r\n', '', '', 'newsletter-1.jpg', 1, 1, 1, '2024-01-13 06:25:43', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.053712750944!2d119.83723600000002!3d-0.692558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bc75b6ac67cfb%3A0xd78434a867d660d0!2sSMK%20AL%20-%20AMIIN%20WANI!5e0!3m2!1sid!2sus!4v1702288272693!5m2!1sid!2sus\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.053712750944!2d119.83723600000002!3d-0.692558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bc75b6ac67cfb%3A0xd78434a867d660d0!2sSMK%20AL%20-%20AMIIN%20WANI!5e0!3m2!1sid!2sus!4v1702288272693!5m2!1sid!2sus\" width=\"1500\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Negeri', 'Pagi / 6 Hari', 'SMK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_siswa`
--

CREATE TABLE `m_siswa` (
  `siswa_id` int(11) NOT NULL,
  `npyp` char(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `tingkat` char(11) NOT NULL,
  `th_active` char(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` char(25) NOT NULL DEFAULT '0',
  `nisn` char(11) NOT NULL DEFAULT '0',
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sek_asal` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL,
  `anakke` int(2) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `sek_asal_alamat` varchar(50) NOT NULL,
  `diterima_kelas` varchar(15) NOT NULL,
  `diterima_tgl` date NOT NULL,
  `diterima_smt` varchar(3) NOT NULL,
  `ijazah_no` varchar(50) NOT NULL,
  `ijazah_thn` varchar(4) NOT NULL,
  `skhun_no` varchar(50) NOT NULL,
  `skhun_thn` varchar(4) NOT NULL,
  `ortu_ayah` varchar(50) NOT NULL,
  `ortu_ibu` varchar(50) NOT NULL,
  `ortu_ayah_pkj` varchar(30) NOT NULL,
  `ortu_ibu_pkj` varchar(30) NOT NULL,
  `ortu_alamat` varchar(50) NOT NULL,
  `ortu_notelp` varchar(13) NOT NULL,
  `desa` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `kota` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `notelp_rumah` varchar(13) NOT NULL,
  `wali` varchar(20) NOT NULL,
  `wali_alamat` varchar(50) NOT NULL,
  `wali_pkj` varchar(13) NOT NULL,
  `inputID` int(2) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_update` datetime NOT NULL,
  `stat_data` enum('A','K','M','L') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `th_masuk` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_siswa`
--

INSERT INTO `m_siswa` (`siswa_id`, `npyp`, `npsn`, `tingkat`, `th_active`, `nama`, `nis`, `nisn`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `sek_asal`, `alamat`, `status`, `anakke`, `notelp`, `sek_asal_alamat`, `diterima_kelas`, `diterima_tgl`, `diterima_smt`, `ijazah_no`, `ijazah_thn`, `skhun_no`, `skhun_thn`, `ortu_ayah`, `ortu_ibu`, `ortu_ayah_pkj`, `ortu_ibu_pkj`, `ortu_alamat`, `ortu_notelp`, `desa`, `kecamatan`, `kota`, `provinsi`, `notelp_rumah`, `wali`, `wali_alamat`, `wali_pkj`, `inputID`, `tgl_input`, `tgl_update`, `stat_data`, `foto`, `is_active`, `th_masuk`) VALUES
(1, '', '20604616', 'X', '2023', 'aaaaaaaaaaa', '1111', '111111111', 'aaaaaaaaaa', '2023-12-05', 'L', 'Katolik', '', '', 'AK', 1, '', '', 'X', '0000-00-00', 'X', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-12-12 23:40:10', '0000-00-00 00:00:00', 'K', 'default.jpg', 0, '2023'),
(2, '', '20604616', 'X', '2023', 'siswa 1', '202310001', '222300101', 'Jogya', '2023-12-12', 'L', 'Katolik', '', '', 'AK', 0, '85805156113', '', 'X', '2023-12-12', 'X', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-12-12 23:40:10', '0000-00-00 00:00:00', 'K', 'default.jpg', 0, '20232'),
(3, '', '20604616', 'X', '2023', 'bbbbbbbbbbbbbbbbb', '333333333333', '33333333333', 'aaaaaaaaaa', '2023-12-13', 'P', 'Islam', '', '1', 'An', 1, '1', '', 'X', '0000-00-00', 'X', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-12-12 23:40:10', '0000-00-00 00:00:00', 'K', 'default.jpg', 0, '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_vaksin`
--

CREATE TABLE `m_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `nik` char(30) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `vaksin_1` varchar(191) NOT NULL,
  `vaksin_2` varchar(191) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_vaksin`
--

INSERT INTO `m_vaksin` (`id_vaksin`, `nik`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `vaksin_1`, `vaksin_2`, `createdate`) VALUES
(1, '111111111111111111', 'aaaaaaaaaaaaa', '', '0000-00-00', 'Ketentuan_Tutwuri.png', 'Logo_Tutwuri.png', '2023-12-12 23:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_webinar`
--

CREATE TABLE `m_webinar` (
  `id_webinar` int(11) NOT NULL,
  `nip` char(50) NOT NULL,
  `nama_pendidik` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `webinar_1` varchar(191) NOT NULL,
  `webinar_2` varchar(191) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_webinar`
--

INSERT INTO `m_webinar` (`id_webinar`, `nip`, `nama_pendidik`, `tempat_lahir`, `tanggal_lahir`, `webinar_1`, `webinar_2`, `createdate`) VALUES
(1, '1111111111', 'aaaaaa', '', '0000-00-00', 'Logo_Tutwuri.png', 'Ketentuan_Tutwuri.png', '2023-12-12 23:44:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` char(25) NOT NULL,
  `npyp` char(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salah_password` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `qr_code_image` varchar(125) NOT NULL,
  `is_active` int(1) NOT NULL,
  `qr_code_use` int(2) NOT NULL,
  `is_online` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `blokir` enum('0','1') NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kode_pegawai` varchar(125) NOT NULL,
  `bagian_shift` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik`, `npyp`, `npsn`, `nama_pegawai`, `email_pegawai`, `username`, `password`, `salah_password`, `role_id`, `img`, `qr_code_image`, `is_active`, `qr_code_use`, `is_online`, `last_login`, `blokir`, `date_create`, `kode_pegawai`, `bagian_shift`) VALUES
('2023121101', '', '20604616', 'admin_all', 'all@smkn1terpadusindue.sch.id', '', '$2y$10$ZJfBttHtoKqkSSiGqM3cB.OTevr9LMJF6WkwAgE7Jg.nixJq19hYu', 0, 5, 'default.jpg', '', 1, 0, 1, NULL, '0', '2024-01-13 06:09:45', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_access_menu`
--

CREATE TABLE `pegawai_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai_access_menu`
--

INSERT INTO `pegawai_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(14, 2, 4),
(15, 2, 5),
(16, 2, 6),
(17, 1, 11),
(18, 2, 7),
(19, 2, 16),
(23, 1, 12),
(25, 1, 13),
(28, 3, 12),
(29, 3, 13),
(41, 1, 14),
(42, 1, 15),
(43, 1, 16),
(44, 1, 17),
(45, 1, 18),
(46, 1, 19),
(47, 1, 20),
(48, 1, 21),
(52, 4, 22),
(53, 1, 22),
(54, 1, 23),
(55, 1, 27),
(56, 1, 28),
(57, 1, 29),
(58, 1, 30),
(59, 1, 31),
(60, 1, 32),
(61, 1, 33),
(62, 1, 34),
(63, 1, 35),
(64, 1, 36),
(68, 5, 8),
(69, 5, 9),
(70, 5, 10),
(71, 5, 11),
(72, 5, 12),
(73, 5, 13),
(74, 5, 14),
(75, 6, 32),
(76, 6, 33),
(77, 6, 34),
(78, 6, 35),
(79, 6, 36),
(80, 8, 1),
(81, 8, 2),
(83, 8, 4),
(84, 8, 3),
(85, 8, 5),
(86, 8, 6),
(87, 8, 7),
(88, 8, 8),
(89, 8, 9),
(90, 8, 10),
(91, 8, 11),
(92, 8, 12),
(93, 8, 13),
(94, 8, 14),
(95, 8, 15),
(96, 8, 16),
(97, 8, 32),
(98, 8, 33),
(99, 8, 34),
(100, 8, 35),
(101, 8, 36),
(102, 3, 8),
(103, 3, 9),
(104, 3, 10),
(105, 3, 11),
(106, 3, 14),
(107, 4, 32),
(108, 4, 33),
(109, 4, 34),
(110, 4, 35),
(111, 4, 36),
(112, 5, 1),
(113, 5, 2),
(114, 5, 3),
(115, 5, 4),
(116, 5, 5),
(117, 5, 6),
(118, 5, 7),
(119, 5, 15),
(120, 5, 16),
(121, 5, 32),
(122, 5, 33),
(123, 5, 34),
(124, 5, 35),
(125, 5, 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_data`
--

CREATE TABLE `pegawai_data` (
  `data_id` int(11) NOT NULL,
  `nik` char(25) NOT NULL,
  `email_pribadi` varchar(255) NOT NULL,
  `email` char(100) NOT NULL,
  `nama_lengkap` char(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `departemen_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `atasan1` char(100) NOT NULL,
  `atasan2` char(100) NOT NULL,
  `hrd` char(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `npsn` char(15) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pegawai_data`
--

INSERT INTO `pegawai_data` (`data_id`, `nik`, `email_pribadi`, `email`, `nama_lengkap`, `alamat`, `telp`, `foto`, `tgl_lahir`, `tgl_masuk`, `tgl_keluar`, `departemen_id`, `jabatan_id`, `lokasi_id`, `atasan1`, `atasan2`, `hrd`, `create_date`, `npsn`, `status`) VALUES
(1, '2023121101', 'smkn1terpadusindue@gmail.com', 'web@smkn1terpadusindue.sch.id', 'admin_all', '-', '-', 'default.jpg', '0000-00-00', '2023-12-11', '0000-00-00', 0, 0, 0, '', '', '', '2024-01-10 02:48:30', '40200733', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_menu`
--

CREATE TABLE `pegawai_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` char(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `m_icon` varchar(3000) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai_menu`
--

INSERT INTO `pegawai_menu` (`id`, `nama_menu`, `url`, `m_icon`, `date_create`) VALUES
(1, 'Panel_Setting', 'data_persiapan', 'bi bi-palette-fill', '2023-11-07 14:47:31'),
(2, 'Master_pegawai', 'master_pegawai', 'bi bi-person-circle', '2023-11-07 15:15:52'),
(3, 'Master_Siswa', 'master_siswa', 'bi bi-person-circle', '2023-11-07 15:16:18'),
(4, 'Web_Profil', 'web_data_profil', 'bi bi-globe2', '2023-11-07 16:19:08'),
(5, 'Web_Kesiswaan', 'web_data_kesiswaan', 'bi bi-globe2', '2023-11-07 16:19:52'),
(6, 'Web_Informasi', 'web_data_informasi', 'bi bi-globe2', '2023-11-07 16:20:18'),
(7, 'Web_Kegiatan', 'web_data_kegiatan', 'bi bi-globe2', '2023-11-07 16:20:47'),
(8, 'PPDB_Dashboard', 'ppdb_admin_dashboard', 'bi bi-journal-text', '2023-11-07 18:13:46'),
(9, 'PPDB_Setting', 'ppdb_admin_setting', 'bi bi-journal-text', '2023-11-07 18:14:17'),
(10, 'PPDB_Daftar', 'ppdb_admin_pendaftar', 'bi bi-journal-text', '2023-11-07 18:14:39'),
(11, 'PPDB_Biaya', 'ppdb_admin_biaya', 'bi bi-journal-text', '2023-11-07 18:15:09'),
(12, 'PPDB_Info', 'ppdb_admin_info', 'bi bi-journal-text', '2023-11-07 18:15:39'),
(13, 'PPDB_Tes_Masuk', 'ppdb_admin_tesmasuk', 'bi bi-journal-text', '2023-11-07 18:16:06'),
(14, 'PPDB_Laporan', 'ppdb_admin_laporan', 'bi bi-journal-text', '2023-11-07 18:17:05'),
(15, 'Sekolah_Setting', 'sekolah_setting', 'bi bi-house', '2023-11-07 19:42:22'),
(16, 'LSP', 'lsp', 'bi bi-award', '2023-11-07 19:42:42'),
(32, 'Lulus_Dashboard', 'lulus_dashboard', 'bi bi-mortarboard', '2023-11-07 22:19:17'),
(33, 'Lulus_Setting', 'lulus_setting', 'bi bi-mortarboard', '2023-11-07 22:19:36'),
(34, 'Lulus_Data', 'lulus_data', 'bi bi-mortarboard', '2023-11-07 22:19:55'),
(35, 'Lulus_Legalisir', 'lulus_legalisir', 'bi bi-mortarboard', '2023-11-07 22:20:12'),
(36, 'Lulus_Laporan', 'lulus_laporan', 'bi bi-mortarboard', '2023-11-07 22:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_role`
--

CREATE TABLE `pegawai_role` (
  `id` int(11) NOT NULL,
  `role` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai_role`
--

INSERT INTO `pegawai_role` (`id`, `role`, `status`, `date_create`) VALUES
(1, 'administrator', 1, '2023-11-07 16:12:54'),
(2, 'admin_web', 3, '2023-12-11 09:26:53'),
(3, 'admin_ppdb', 3, '2023-12-11 09:26:57'),
(4, 'admin_lulus', 3, '2023-12-11 09:27:00'),
(5, 'admin_all', 3, '2023-12-11 09:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_sub_menu`
--

CREATE TABLE `pegawai_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul_menu` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `s_icon` varchar(191) NOT NULL,
  `is_active` int(1) NOT NULL,
  `order_id` int(11) NOT NULL,
  `hide` int(1) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai_sub_menu`
--

INSERT INTO `pegawai_sub_menu` (`id`, `menu_id`, `judul_menu`, `url`, `s_icon`, `is_active`, `order_id`, `hide`, `date_create`) VALUES
(1, 1, 'Master Provinsi', 'data_persiapan/persiapan_provinsi', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:49:52'),
(2, 1, 'Master Kota', 'data_persiapan/persiapan_kota', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:50:10'),
(3, 1, 'Master Kecamatan', 'data_persiapan/persiapan_kecamatan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:50:31'),
(4, 1, 'Master Desa', 'data_persiapan/persiapan_desa', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:50:52'),
(5, 1, 'Master Tahun', 'data_persiapan/persiapan_tahun', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:51:10'),
(6, 1, 'Master Kelas', 'data_persiapan/persiapan_kelas', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:51:29'),
(7, 1, 'Master Ruangan', 'data_persiapan/persiapan_ruang', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:51:47'),
(8, 1, 'Master Mata Pelajaran', 'data_persiapan/persiapan_mapel', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:52:09'),
(9, 1, 'Master Jurusan', 'data_persiapan/persiapan_jurusan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 14:52:28'),
(10, 2, 'Data Pegawai', 'master_pegawai/data_pegawai', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 15:53:44'),
(11, 2, 'Status Pegawai', 'master_pegawai/status_pegawai', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 15:54:11'),
(12, 3, 'Data Siswa', 'master_siswa/data_siswa', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 15:55:33'),
(13, 3, 'Daftar Ulang', 'master_siswa/naik_kelas', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 15:55:49'),
(14, 3, 'Daftar Rombel', 'master_siswa/atur_kelas', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 15:56:06'),
(15, 4, 'Profil Sekolah', 'web_data_profil/profil_sekolah', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:22:09'),
(16, 4, 'Profil Sambutan', 'web_data_profil/profil_kepsek', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:22:31'),
(17, 4, 'Profil Guru', 'web_data_profil/profil_guru', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:22:50'),
(18, 4, 'Profil Slide', 'web_data_profil/profil_slide', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:23:10'),
(19, 4, 'Profil Fasilitas', 'web_data_profil/profil_fasilitas', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:23:35'),
(20, 4, 'Profil RunText', 'web_data_profil/profil_info', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:23:53'),
(21, 5, 'OSIS', 'web_data_kesiswaan/kesiswaan_osis', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:32:42'),
(22, 5, 'Ekstrakurikuler', 'web_data_kesiswaan/kesiswaan_ekstra', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:33:08'),
(23, 5, 'Prestasi', 'web_data_kesiswaan/kesiswaan_prestasi', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:33:29'),
(24, 6, 'Vaksin', 'web_data_informasi/vaksin', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:47:38'),
(25, 6, 'Beasiswa', 'web_data_informasi/beasiswa', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:47:56'),
(26, 6, 'Webinar', 'web_data_informasi/webinar', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:48:15'),
(27, 7, 'P5 SMK', 'web_data_kegiatan/p5', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-12-10 16:49:49'),
(28, 7, 'Portal', 'web_data_kegiatan/portal', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:49:00'),
(29, 7, 'Berita', 'web_data_kegiatan/berita', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:49:18'),
(30, 7, 'Galery', 'web_data_kegiatan/galery', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:49:35'),
(31, 7, 'Video', 'web_data_kegiatan/video', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 16:49:51'),
(32, 8, 'Dashboard', 'ppdb_admin_dashboard/dashboard', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:18:23'),
(33, 9, 'Master Sekolah', 'ppdb_admin_setting/master_sekolah', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:18:48'),
(34, 9, 'Master Jenis Daftar', 'ppdb_admin_setting/master_jenis_daftar', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:19:07'),
(35, 9, 'Master Kuota', 'ppdb_admin_setting/master_kuota', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:19:25'),
(36, 9, 'Master Periode', 'ppdb_admin_setting/master_periode', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:19:44'),
(37, 9, 'Master Mapel', 'ppdb_admin_setting/master_mapel', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:20:04'),
(38, 9, 'Master Bank', 'ppdb_admin_setting/master_bank', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 18:20:23'),
(39, 10, 'Data Pendaftar', 'ppdb_admin_pendaftar/data_pendaftar', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:26:48'),
(40, 10, 'Pendaftar Diterima', 'ppdb_admin_pendaftar/pendaftar_diterima', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:27:08'),
(41, 10, 'Pendaftar Cadangan', 'ppdb_admin_pendaftar/pendaftar_cadangan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:27:26'),
(42, 11, 'Master Biaya', 'ppdb_admin_biaya/master_biaya', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:31:07'),
(43, 11, 'Pembayaran', 'ppdb_admin_biaya/pembayaran', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:31:26'),
(44, 11, 'Verifikasi Biaya', 'ppdb_admin_biaya/verifikasi_biaya', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:31:45'),
(45, 12, 'Persyaratan', 'ppdb_admin_info/info_persyaratan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:33:51'),
(46, 12, 'Pembayaran', 'ppdb_admin_info/info_pembayaran', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:34:09'),
(47, 12, 'Pengumuman', 'ppdb_admin_info/data_pengumuman', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:34:31'),
(48, 13, 'Quiz', 'ppdb_admin_tesmasuk/quiz', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:35:47'),
(49, 14, 'Laporan Pendaftaran', 'ppdb_admin_laporan/laporan_pendaftaran', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-12-10 16:53:15'),
(50, 14, 'Laporan Biaya', 'ppdb_admin_laporan/laporan_biaya', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-12-10 16:53:29'),
(51, 14, 'Laporan Hasil Tes', 'ppdb_admin_laporan/laporan_hasil_tes', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-12-10 16:53:47'),
(58, 15, 'Data kontak', 'sekolah_setting/data_kontak', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:45:21'),
(59, 16, 'Profile', 'lsp/profile', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:54:37'),
(60, 16, 'Data Tuk', 'lsp/data_tuk', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:54:55'),
(61, 16, 'Data Asesor', 'lsp/data_asesor', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:55:12'),
(62, 16, 'Data Skema', 'lsp/data_skema', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-07 19:55:27'),
(104, 32, 'Dashboard', 'lulus_dashboard/dashboard', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:55:25'),
(105, 33, 'Atur Surat', 'lulus_setting/atur_surat', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:55:44'),
(106, 33, 'Input Siswa', 'lulus_setting/input_siswa', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:56:07'),
(107, 33, 'Input Nilai', 'lulus_setting/input_nilai', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:56:29'),
(108, 33, 'Pengumuman', 'lulus_setting/pengumuman', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:56:50'),
(109, 34, 'Data Aktivasi', 'lulus_data/data_aktivasi', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:57:52'),
(110, 34, 'Perbaikan Data', 'lulus_data/data_terbaru', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:58:10'),
(111, 34, 'Scan Ijazah', 'lulus_data/scan_ijazah', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:58:36'),
(112, 35, 'Verifikasi Data', 'lulus_legalisir/verifikasi_data', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:59:07'),
(113, 35, 'Pengajuan Legalisir', 'lulus_legalisir/pengajuan_legalisir', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:59:35'),
(114, 35, 'Biaya Legalisir', 'lulus_legalisir/biaya_legalisir', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 02:59:58'),
(115, 35, 'Ambil Legalisir', 'lulus_legalisir/ambil_legalisir', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 03:00:25'),
(116, 36, 'Laporan Kelulusan', 'lulus_laporan/laporan_kelulusan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 03:01:02'),
(117, 36, 'Laporan Alumni', 'lulus_laporan/laporan_alumni', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 03:01:22'),
(118, 36, 'Laporan Legalisir', 'lulus_laporan/laporan_legalisir', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 03:01:46'),
(119, 6, 'Jurusan', 'web_data_informasi/jurusan', 'bi bi-arrow-right-circle', 1, 1, 1, '2023-11-09 18:00:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_bank`
--

CREATE TABLE `ppdb_bank` (
  `kode_bank` char(25) NOT NULL,
  `nama_bank` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppdb_bank`
--

INSERT INTO `ppdb_bank` (`kode_bank`, `nama_bank`, `status`, `datecreate`) VALUES
('001', 'Bayar Cash', 1, '2021-12-23 16:57:25'),
('002', 'Bank BRI', 1, '2021-12-23 16:57:21'),
('008', 'Bank Mandiri', 1, '2021-12-23 16:57:18'),
('009', 'Bank BNI', 1, '2021-08-13 08:47:23'),
('014', 'Bank BCA', 1, '2021-08-13 08:47:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_bayar`
--

CREATE TABLE `ppdb_bayar` (
  `id_bayar` varchar(20) NOT NULL,
  `id_user` char(15) NOT NULL,
  `id_daftar` int(10) NOT NULL,
  `periode` varchar(191) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `bank` varchar(191) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `keterangan` varchar(191) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `verifikasi` int(1) NOT NULL DEFAULT 0,
  `hapus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_biaya`
--

CREATE TABLE `ppdb_biaya` (
  `id_biaya` varchar(50) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `periode` varchar(191) NOT NULL,
  `nama_biaya` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_biaya`
--

INSERT INTO `ppdb_biaya` (`id_biaya`, `kd_campus`, `kd_sekolah`, `periode`, `nama_biaya`, `jumlah`, `status`) VALUES
('UG', '', '', 'Periode 1', 'SMKN 1 Suak Tapeh', 1400000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_daftar`
--

CREATE TABLE `ppdb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(20) DEFAULT NULL,
  `periode` varchar(191) NOT NULL,
  `jenis_daftar` varchar(50) DEFAULT NULL,
  `baju` varchar(10) DEFAULT NULL,
  `nis` char(30) DEFAULT NULL,
  `nisn` char(30) NOT NULL,
  `nik` char(50) DEFAULT NULL,
  `no_kk` char(30) DEFAULT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `npsn_asal` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(128) DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `saudara` int(11) DEFAULT NULL,
  `tinggi` int(3) DEFAULT NULL,
  `berat` int(3) DEFAULT NULL,
  `status_keluarga` varchar(50) DEFAULT NULL,
  `no_kip` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `tinggal` varchar(128) DEFAULT NULL,
  `jarak` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `transportasi` varchar(128) DEFAULT NULL,
  `foto` varchar(128) NOT NULL,
  `kelas` varchar(55) DEFAULT NULL,
  `jurusan` varchar(11) DEFAULT '',
  `jenjang` varchar(11) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `tempat_ayah` varchar(128) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `status_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `tempat_ibu` varchar(128) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `status_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `nik_wali` varchar(16) DEFAULT NULL,
  `nama_wali` varchar(128) DEFAULT NULL,
  `tempat_wali` varchar(128) DEFAULT NULL,
  `tgl_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(16) DEFAULT NULL,
  `no_ijazah` varchar(128) DEFAULT NULL,
  `no_shun` varchar(128) DEFAULT NULL,
  `no_ujian` varchar(128) DEFAULT NULL,
  `file_kip` varchar(256) DEFAULT NULL,
  `file_kk` varchar(256) DEFAULT NULL,
  `file_ijazah` varchar(256) DEFAULT NULL,
  `file_akte` varchar(256) DEFAULT NULL,
  `file_shun` varchar(256) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `alasan_keluar` varchar(100) DEFAULT NULL,
  `surat_keluar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `aktif` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `petugas_daftar` varchar(10) DEFAULT NULL,
  `petugas_konfirmasi` varchar(10) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tahun_daftar` varchar(5) NOT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `bayar` varchar(100) DEFAULT NULL,
  `online` int(1) DEFAULT 0,
  `password` text DEFAULT NULL,
  `password_x` varchar(191) NOT NULL,
  `is_active` int(1) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_daftar`
--

INSERT INTO `ppdb_daftar` (`id_daftar`, `no_daftar`, `periode`, `jenis_daftar`, `baju`, `nis`, `nisn`, `nik`, `no_kk`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `agama`, `no_hp`, `npsn_asal`, `asal_sekolah`, `anak_ke`, `saudara`, `tinggi`, `berat`, `status_keluarga`, `no_kip`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `tinggal`, `jarak`, `waktu`, `transportasi`, `foto`, `kelas`, `jurusan`, `jenjang`, `email`, `nik_ayah`, `nama_ayah`, `tempat_ayah`, `tgl_lahir_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nik_ibu`, `nama_ibu`, `tempat_ibu`, `tgl_lahir_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nik_wali`, `nama_wali`, `tempat_wali`, `tgl_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `no_ijazah`, `no_shun`, `no_ujian`, `file_kip`, `file_kk`, `file_ijazah`, `file_akte`, `file_shun`, `tgl_keluar`, `alasan_keluar`, `surat_keluar`, `level`, `aktif`, `status`, `petugas_daftar`, `petugas_konfirmasi`, `tgl_daftar`, `tahun_daftar`, `tgl_konfirmasi`, `bayar`, `online`, `password`, `password_x`, `is_active`, `createdate`) VALUES
(2, 'PPDB20231001', 'Gelombang 1', 'Siswa Baru', NULL, NULL, '', '111111111111111111', NULL, 'aaaaaaa', 'aaaaaaa', '2023-12-13', NULL, NULL, '085695669612', '10646616', 'SMP/ MTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png', 'X', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00', '20231', NULL, NULL, 0, '$2y$10$wWnrgoHwC4NOUH0jcRSz4OvcY33LxmXOUf.MQTP5BK76dM4Guz6B2', 'aaaaaaaaa', 1, '2023-12-13 12:46:00'),
(3, 'PPDB2024101', 'Gelombang 1', 'Siswa Baru', NULL, NULL, '', '222222222222222222', NULL, 'Anak Desa', 'Jogya', '2024-01-12', NULL, NULL, '085695669612', '10646616', 'SMP/ MTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png', 'X', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00', '2024', NULL, NULL, 0, '$2y$10$SdHfSLAGNJuK9a8sjk8HIeTg0hAxgiEG1q9QCMMv42u9Vld/P09uO', '12345678', 1, '2024-01-12 02:26:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_histori`
--

CREATE TABLE `ppdb_histori` (
  `id` int(11) NOT NULL,
  `id_permohonan` varchar(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jenis`
--

CREATE TABLE `ppdb_jenis` (
  `id_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_jenis`
--

INSERT INTO `ppdb_jenis` (`id_jenis`, `nama_jenis`, `status`) VALUES
('SMK', 'Siswa Baru', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jenjang`
--

CREATE TABLE `ppdb_jenjang` (
  `id_jenjang` varchar(5) NOT NULL,
  `nama_jenjang` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_jurusan`
--

CREATE TABLE `ppdb_jurusan` (
  `id_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `kuota` int(10) DEFAULT NULL,
  `jenis_daftar` varchar(50) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_jurusan`
--

INSERT INTO `ppdb_jurusan` (`id_jurusan`, `nama_jurusan`, `kuota`, `jenis_daftar`, `status`) VALUES
('K111108', 'SMKN 1 Suak Tapeh', 300, 'Siswa Baru', 1),
('XI', 'SMKN 1 Suak Tapeh', 300, '1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_kontak`
--

CREATE TABLE `ppdb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `nama_kontak` varchar(50) DEFAULT NULL,
  `no_kontak` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_kursus`
--

CREATE TABLE `ppdb_kursus` (
  `id_kursus` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `id_guru` char(15) DEFAULT NULL,
  `id_mapel` varchar(30) DEFAULT NULL,
  `kelas` varchar(191) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_mapel`
--

CREATE TABLE `ppdb_mapel` (
  `id_mapel` varchar(30) NOT NULL,
  `nama_mapel` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppdb_mapel`
--

INSERT INTO `ppdb_mapel` (`id_mapel`, `nama_mapel`, `status`, `datecreate`) VALUES
('BHS', 'Bahasa Indonesia', 1, '2021-07-31 03:55:33'),
('BING', 'BAHASA INGGRIS', 1, '2021-07-31 03:55:45'),
('IPA', 'Ilmu Pengetahuan Alam', 1, '2021-07-31 03:56:06'),
('MTK', 'Matematika', 1, '2023-12-13 12:32:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_materi`
--

CREATE TABLE `ppdb_materi` (
  `id_materi` int(255) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `id_guru` char(15) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_buka` datetime NOT NULL,
  `tgl_tutup` datetime NOT NULL,
  `komentar` int(1) NOT NULL,
  `jawab` int(1) NOT NULL,
  `kuis` int(1) NOT NULL,
  `kelas` varchar(191) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppdb_materi`
--

INSERT INTO `ppdb_materi` (`id_materi`, `kd_campus`, `kd_sekolah`, `id_guru`, `nama_mapel`, `isi`, `tgl_buka`, `tgl_tutup`, `komentar`, `jawab`, `kuis`, `kelas`, `status`) VALUES
(1, '', '', '21212121', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 'Kelas 10', 1),
(7, '', '20604616', '2023121102', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_nilai_quiz`
--

CREATE TABLE `ppdb_nilai_quiz` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` varchar(20) NOT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `benar` int(2) DEFAULT NULL,
  `salah` int(2) DEFAULT NULL,
  `jawaban` text DEFAULT NULL,
  `ta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_pengumuman`
--

CREATE TABLE `ppdb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_pengumuman`
--

INSERT INTO `ppdb_pengumuman` (`id_pengumuman`, `kd_campus`, `kd_sekolah`, `id_user`, `judul`, `pengumuman`, `tgl`, `jenis`) VALUES
(6, '', '', 12082021, 'INFO PENTING', '<p>DIBERITAHUKAN KEPADA SELURUH CALON SISWA BARU UNTUK MENGAMBIL KARTU TES AKADEMIK DAN WAWANCARA PADA TANGGAL 25 MEI 2023</p>\r\n', '2023-05-28 14:52:00', 1),
(7, '', '', 12082021, 'PENGUMUMAN PESERTA DIDIK BARU TAHUN 2023', '<p>HASIL PESERTA DIDIK BARU DAPAT DI UNDUH MELALUI LINK BERIKUT INI : <a href=\"https://bit.ly/Pengumuman_Lulus_ppdb\" target=\"_blank\">https://bit.ly/Pengumuman_Lulus_ppdb</a></p>\r\n', '2023-05-28 23:42:48', 2),
(8, '', '', 0, 'Lapangan Sekolah', '<p>aaaaaaaaaaaaa</p>\r\n', '2023-12-13 20:18:31', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_periode`
--

CREATE TABLE `ppdb_periode` (
  `id` int(10) UNSIGNED NOT NULL,
  `periode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_selesai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pelajaran` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ppdb_periode`
--

INSERT INTO `ppdb_periode` (`id`, `periode`, `tgl_mulai`, `tgl_selesai`, `tahun`, `tahun_pelajaran`, `status`, `is_active`, `created_date`) VALUES
(1, 'Periode 1', '2023-03-10', '2023-05-27', '2023', '2023/2024', '', 0, '2024-01-12 02:20:31'),
(3, 'Gelombang 1', '2024-01-12', '2024-01-31', '2024', '2024/2025', 'Aktif', 1, '2024-01-12 02:21:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_sekolah`
--

CREATE TABLE `ppdb_sekolah` (
  `npsn` varchar(16) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_sekolah`
--

INSERT INTO `ppdb_sekolah` (`npsn`, `nama_sekolah`, `alamat`, `status`) VALUES
('10646616', 'SMP/ MTS', 'Jl. Palembang-Betung', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_soal`
--

CREATE TABLE `ppdb_soal` (
  `id_soal` int(11) NOT NULL,
  `id_banksoal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `nomor` int(5) DEFAULT NULL,
  `soal` longtext DEFAULT NULL,
  `jenis` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_soal_opsi`
--

CREATE TABLE `ppdb_soal_opsi` (
  `id_opsi` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `opsi` text DEFAULT NULL,
  `benar` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_tugas`
--

CREATE TABLE `ppdb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `id_guru` char(15) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `tugas` mediumtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `tgl_buka` datetime NOT NULL,
  `tgl_tutup` datetime NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `komentar` int(11) NOT NULL,
  `file_guru` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_tugas_jawab`
--

CREATE TABLE `ppdb_tugas_jawab` (
  `id` int(11) NOT NULL,
  `kd_campus` char(11) NOT NULL,
  `kd_sekolah` char(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `id_siswa` varchar(20) NOT NULL,
  `jawaban` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_user_access_menu`
--

CREATE TABLE `ppdb_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_user_access_menu`
--

INSERT INTO `ppdb_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_user_menu`
--

CREATE TABLE `ppdb_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_user_menu`
--

INSERT INTO `ppdb_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_user_role`
--

CREATE TABLE `ppdb_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_user_role`
--

INSERT INTO `ppdb_user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'student'),
(4, 'teacher'),
(5, 'staff'),
(6, 'guest');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb_user_sub_menu`
--

CREATE TABLE `ppdb_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppdb_user_sub_menu`
--

INSERT INTO `ppdb_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'ppdb/user', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Formulir', 'ppdb/formulir', 'fas fa-paste', 1),
(3, 2, 'Pembayaran', 'ppdb/pembayaran', 'fas fa-comment-dollar', 0),
(4, 2, 'Tes Masuk', 'ppdb/tes_masuk', 'fas fa-envelope-open-text', 1),
(5, 3, 'Pengumuman', 'ppdb/pengumuman', 'fas fa-bullhorn', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_artikel`
--

CREATE TABLE `profil_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(191) NOT NULL,
  `deskripsi` longtext CHARACTER SET latin1 DEFAULT NULL,
  `status` int(1) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `user_update` varchar(191) NOT NULL,
  `tanggal_terbit` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_artikel`
--

INSERT INTO `profil_artikel` (`id_artikel`, `judul_artikel`, `deskripsi`, `status`, `gambar`, `user_update`, `tanggal_terbit`, `datecreate`) VALUES
(1, 'aa', '<p>tesssssss</p>\r\n', 1, 'Logo_Tutwuri.png', 'admin_all', '2023-12-13', '2023-12-12 23:45:32'),
(2, 'Penerimaan Raport Semester 1', '<p>aaaaaaaaaaaa</p>\r\n', 1, 'template.JPG', 'admin_all', '2024-01-04', '2024-01-04 09:06:35'),
(3, 'Kegitan Kebersihan Sekolah', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>\r\n', 1, 'dashboard.JPG', 'admin_all', '2024-01-04', '2024-01-04 09:06:54'),
(4, 'Penerimaan Raport Semester 1', '<p>-</p>\r\n', 1, 'Add_a_subheading.png', 'admin_all', '2024-01-09', '2024-01-07 09:58:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_belajar`
--

CREATE TABLE `profil_belajar` (
  `belajar_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_belajar`
--

INSERT INTO `profil_belajar` (`belajar_id`, `judul`, `text`, `gambar`, `link`, `status`, `datecreated`) VALUES
(1, 'PPDB', 'tessss', 'bi bi-person-circle', 'https://cbt.sekolah.sch.id/', 1, '2024-01-09 05:01:38'),
(2, 'SKL', 'Kelulusan', 'bi bi-person-circle', 'https://cbt.smkn1suaktapeh.sch.id/', 1, '2024-01-09 05:01:51'),
(3, 'CBT', 'Ujian Online', 'bi bi-person-circle', 'https://cbt.smkn1suaktapeh.sch.id/', 1, '2024-01-09 05:02:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_ekstra`
--

CREATE TABLE `profil_ekstra` (
  `ekstra_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_ekstra`
--

INSERT INTO `profil_ekstra` (`ekstra_id`, `judul`, `text`, `gambar`, `status`, `createdate`) VALUES
(1, 'Futsal', 'Futsal Club', '2.png', 1, '2024-01-08 08:40:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_fasilitas`
--

CREATE TABLE `profil_fasilitas` (
  `id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_fasilitas`
--

INSERT INTO `profil_fasilitas` (`id`, `judul`, `text`, `gambar`, `status`, `datecreate`) VALUES
(1, 'Lab Komputer', 'Lab Komputer', 'Ketentuan_Tutwuri.png', 1, '2024-01-08 08:04:56'),
(2, 'Mobil Bus', 'Mobil Bus', '22.png', 1, '2024-01-08 08:04:30'),
(4, 'Halaman ', 'Halaman Sekolah', 'Layanan_Kami_-_19052023.png', 1, '2024-01-08 08:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_galeri`
--

CREATE TABLE `profil_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(1) NOT NULL,
  `user_update` varchar(250) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_galeri`
--

INSERT INTO `profil_galeri` (`id_galeri`, `judul_galeri`, `deskripsi`, `status`, `user_update`, `gambar`, `datecreate`) VALUES
(1, 'aaaaaaaaa', '<p>aaaaaaaaaaaaaaaa</p>\r\n', 1, 'admin_all', 'Logo_Tutwuri.png', '2023-12-12 23:45:50'),
(2, 'Komputer', '<p>aaaaaaaaaaa</p>\r\n', 1, 'admin_all', '2.png', '2024-01-06 02:07:52'),
(3, 'Komputer', '<p>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</p>\r\n', 1, 'admin_all', '1.png', '2024-01-09 05:47:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_galeri_sub`
--

CREATE TABLE `profil_galeri_sub` (
  `id_galeri_sub` int(11) NOT NULL,
  `id_galeri` int(11) DEFAULT NULL,
  `foto` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_galeri_sub`
--

INSERT INTO `profil_galeri_sub` (`id_galeri_sub`, `id_galeri`, `foto`, `datecreate`) VALUES
(1, 3, '11.png', '2024-01-09 05:41:38'),
(2, 3, '21.png', '2024-01-09 05:41:43'),
(3, 3, '3.png', '2024-01-09 05:41:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_guru`
--

CREATE TABLE `profil_guru` (
  `profil_id` int(11) NOT NULL,
  `nama_guru` varchar(191) NOT NULL,
  `mengajar` varchar(191) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_guru`
--

INSERT INTO `profil_guru` (`profil_id`, `nama_guru`, `mengajar`, `gambar`, `status`, `createdate`) VALUES
(1, 'Maya Sari S.Pd', 'Guru Kelas', 'avatar.png', 1, '0000-00-00 00:00:00'),
(2, 'Suherman S.Pd', 'Matematika', 'avatar3.png', 1, '0000-00-00 00:00:00'),
(3, 'Herlina S.Pd', 'Bahasa Inggris', 'avatar2.png', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_info`
--

CREATE TABLE `profil_info` (
  `id` int(11) NOT NULL,
  `text_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_info`
--

INSERT INTO `profil_info` (`id`, `text_info`) VALUES
(0, '<p>tessssss</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_jurusan`
--

CREATE TABLE `profil_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(191) NOT NULL,
  `deskripsi` longtext CHARACTER SET latin1 DEFAULT NULL,
  `status` int(1) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `user_update` varchar(191) NOT NULL,
  `tanggal_terbit` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_jurusan`
--

INSERT INTO `profil_jurusan` (`id_jurusan`, `jurusan`, `deskripsi`, `status`, `gambar`, `user_update`, `tanggal_terbit`, `datecreate`) VALUES
(1, 'PHP e-mail reminder ', '<p>You&#39;re on the correct path. The only important thing left to do is to create cron job for your <strong>PHP </strong>script to run it once everyday. Your script will have to check if the record is outdated and don&#39;t forget to modify your schema to contain the boolean field \"NotificationSent\" to avoid sending mail notification everyday. More on cron jobs: http://www.developertutorials.com/blog/<strong>php</strong>/running-<strong>php</strong>-cron-jobs-regular-scheduled-tasks-in-<strong>php</strong>-172/ A script draft:</p>\r\n', 1, 'Ketentuan_Tutwuri.png', '', '', '2024-01-09 03:29:03'),
(2, 'Bootstrap', '<p>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</p>\r\n', 1, '1.png', '', '', '2024-01-09 03:30:18'),
(3, 'Changelog', '<p>PHP 5.1.0: Added E_STRICT and E_NOTICE time zone errors. Valid range of timestamp is now from Fri, 13 Dec 1901 20:45:54 GMT to Tue, 19 Jan 2038 03:14:07 GMT. Before version 5.1.0 timestamp was limited from 01-01-1970 to 19-01-2038 on some systems (e.g. Windows).<br>\r\nPHP 5.1.1: Added constants of standard date/time formats that can be used to specify the format parameter</p>\r\n', 1, '2.png', '', '', '2024-01-09 03:32:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_kepsek`
--

CREATE TABLE `profil_kepsek` (
  `nip` int(35) NOT NULL,
  `nama_kepsek` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `kata_sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_kepsek`
--

INSERT INTO `profil_kepsek` (`nip`, `nama_kepsek`, `foto`, `kata_sambutan`) VALUES
(1, 'Alias', 'Logo_Tutwuri2.png', '<p>Assalamualaikum Wr.Wb.<br />\r\n<br />\r\nSelamat datang di website SMAN 1 BUNGURAN UTARA,<br />\r\n<br />\r\nAlhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Perkembangan tekhnologi menuntut perubahan dan peningkatan di bidang pendidikan dalam menyiapkan peserta didik untuk mewujudkan Sumber Daya Manusia yang berbudi pekerti luhur, berbudaya, berkarakter ,kreatif, inovasi dan unggul dalam prestasi serta kompetitif dalam dunia Digital.<br />\r\n<br />\r\nWebsite SMAN 1 BUNGURAN UTARA&nbsp; merupakan pintu gerbang untuk memperoleh informasi tentang kegiatan sekolah, prestasi akademik maupun non akademik kepada orangtua/wali siswa, maupun masyarakat secara luas serta sebagai ajang komunikasi antara guru, siswa, alumni dan masyarakat. Pemanfaatan lainnya adalah website sekolah sebagai media pembelajaran dan evaluasi online.<br />\r\n<br />\r\nSemoga website ini dapat bermanfaat khususnya dalam meningkatkan mutu pendidikan di SMAN 1 BUNGURAN UTARA dan dunia pendidikan pada umumnya. Aamiin.<br />\r\n<br />\r\nWassalamualaikum Wr.Wb</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_osis`
--

CREATE TABLE `profil_osis` (
  `osis_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_osis`
--

INSERT INTO `profil_osis` (`osis_id`, `judul`, `text`, `gambar`, `status`, `createdate`) VALUES
(1, 'Hermansyah', 'Ketua OSIS 2023/2024', 'Logo_Tutwuri.png', 1, '2024-01-08 08:35:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_p5`
--

CREATE TABLE `profil_p5` (
  `id_p5` int(11) NOT NULL,
  `p5` varchar(191) NOT NULL,
  `deskripsi` longtext CHARACTER SET latin1 DEFAULT NULL,
  `status` int(1) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `user_update` varchar(191) NOT NULL,
  `tanggal_terbit` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_p5`
--

INSERT INTO `profil_p5` (`id_p5`, `p5`, `deskripsi`, `status`, `gambar`, `user_update`, `tanggal_terbit`, `datecreate`) VALUES
(1, 'Budaya satuan pendidikan', '<p>Sebagai bagian dari budaya sekolah, 6 dimensi Profil Pelajar Pancasila diintegrasikan ke dalam iklim sekolah, kebijakan, pola interaksi dan komunikasi, serta norma yang berlaku di satuan pendidikan.</p>\r\n', 1, 'Ketentuan_Tutwuri.png', '', '', '2024-01-09 03:58:01'),
(2, 'Pembelajaran intrakurikuler', '<p>Sebagai bagian dari pembelajaran intrakurikuler, Capaian Pembelajaran, tujuan pembelajaran, atau materi/topik pembelajaran sudah menginkorporasikan 6 dimensi Profil Pelajar Pancasila di dalamnya.</p>\r\n', 1, '3.png', '', '', '2024-01-09 03:58:26'),
(3, 'Pembelajaran kokurikuler (Projek Penguatan Profil Pelajar Pancasila)', '<p>Sebagai bagian dari pembelajaran kokurikuler, 6 dimensi Profil Pelajar Pancasila dijadikan pilihan untuk menjadi tujuan dan capaian dalam kegiatan Projek Penguatan Profil Pelajar Pancasila . Dimensi Profil Pelajar Pancasila yang dipilih untuk menjadi fokus tujuan kegiatan juga kemudian menjadi dasar pelaksanaan asesmen projek.</p>\r\n', 1, '1.png', '', '', '2024-01-09 03:58:58'),
(4, 'Pembelajaran ekstrakurikuler', '<p>Sebagai bagian dari pembelajaran ekstrakurikuler, 6 dimensi Profil Pelajar Pancasila diintegrasikan dalam kegiatan pengembangan minat dan bakat.</p>\r\n', 1, '2.png', '', '', '2024-01-09 03:59:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_prestasi`
--

CREATE TABLE `profil_prestasi` (
  `prestasi_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_prestasi`
--

INSERT INTO `profil_prestasi` (`prestasi_id`, `judul`, `text`, `gambar`, `status`, `createdate`) VALUES
(1, 'Herdiana', 'Juara 1 Tingakat Nasional Lomba Catur', 'Logo_Tutwuri.png', 1, '2024-01-08 08:45:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_slide`
--

CREATE TABLE `profil_slide` (
  `slide_id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_slide`
--

INSERT INTO `profil_slide` (`slide_id`, `judul`, `text`, `gambar`, `status`, `datecreate`) VALUES
(1, 'tesss', 'tesss', 'Ketentuan_Tutwuri.png', 1, '2023-12-12 23:42:06'),
(2, 'asss', 'tasasss', 'features-background.jpg', 1, '2024-01-04 09:17:42'),
(3, 'ddddddd', 'dddddddddddd', 'newsletter-1.jpg', 1, '2024-01-04 09:17:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_video`
--

CREATE TABLE `profil_video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL,
  `url_video` varchar(191) NOT NULL,
  `gambar_video` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `user_update` varchar(191) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_video`
--

INSERT INTO `profil_video` (`id_video`, `judul_video`, `deskripsi`, `url_video`, `gambar_video`, `status`, `user_update`, `datecreate`) VALUES
(1, 'aaaaaa', '', 'https://www.youtube.com/live/qzM4Y3_kZyU?si=V_Ij7yjIA7l6J-v4', 'Logo_Tutwuri.png', 1, 'admin_all', '2024-01-07 09:55:12'),
(2, 'TANPA DICUT', '', 'https://youtu.be/aivFi1qGMfE?si=RVvytgkvrVFFZce-', '2.png', 1, 'admin_all', '2024-01-07 09:57:45'),
(3, 'Video 1', '', 'https://youtu.be/aivFi1qGMfE?si=RVvytgkvrVFFZce-', 'Add_a_subheading.png', 1, 'admin_all', '2024-01-07 09:57:54'),
(4, 'Aplikasi ASIMSE 4.0', '', 'https://youtu.be/aivFi1qGMfE?si=RVvytgkvrVFFZce-', '3.png', 1, 'admin_all', '2024-01-07 09:58:05'),
(5, 'Pesan Mas Menteri tentang Kurikulum Merdeka', '', 'https://youtu.be/aivFi1qGMfE?si=RVvytgkvrVFFZce-', '1.png', 1, 'admin_all', '2024-01-07 09:58:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_data_kontak`
--

CREATE TABLE `sekolah_data_kontak` (
  `id_kontak` int(11) NOT NULL,
  `npyp` char(11) NOT NULL,
  `npsn` char(11) NOT NULL,
  `nama_kontak` varchar(50) DEFAULT NULL,
  `no_kontak` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `nik` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah_data_kontak`
--

INSERT INTO `sekolah_data_kontak` (`id_kontak`, `npyp`, `npsn`, `nama_kontak`, `no_kontak`, `status`, `nik`) VALUES
(8, '', '69758313', NULL, 'aaaaaaaa', 1, '2023121101');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas_siswa`
--

CREATE TABLE `t_kelas_siswa` (
  `id` int(5) NOT NULL,
  `npsn` char(11) NOT NULL,
  `id_kelas` char(11) NOT NULL,
  `id_siswa` char(25) NOT NULL,
  `rombel` char(15) NOT NULL,
  `ta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kelas_siswa`
--

INSERT INTO `t_kelas_siswa` (`id`, `npsn`, `id_kelas`, `id_siswa`, `rombel`, `ta`) VALUES
(1, '20604616', 'X', '1111', 'X-MUL', '2023'),
(2, '20604616', 'X', '333333333333', 'X-MUL', '2023'),
(3, '20604616', 'X', '202310001', 'X-MUL', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_naik_kelas`
--

CREATE TABLE `t_naik_kelas` (
  `id` int(6) NOT NULL,
  `id_siswa` char(25) NOT NULL,
  `tasm` char(5) NOT NULL,
  `naik` enum('Y','N','L','T') NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `catatan_wali` longtext NOT NULL,
  `penilaian` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tahun`
--

CREATE TABLE `t_tahun` (
  `id` int(3) NOT NULL,
  `npsn` char(11) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `nik` char(15) NOT NULL,
  `nip_kepsek` varchar(30) NOT NULL,
  `tgl_raport_pts` date NOT NULL,
  `tgl_raport_pas` date NOT NULL,
  `tgl_raport_pat` date NOT NULL,
  `semester` char(15) NOT NULL,
  `th_pelajaran` varchar(25) NOT NULL,
  `nama_kepsek` varchar(191) NOT NULL,
  `tahun_aktif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tahun`
--

INSERT INTO `t_tahun` (`id`, `npsn`, `tahun`, `aktif`, `nik`, `nip_kepsek`, `tgl_raport_pts`, `tgl_raport_pas`, `tgl_raport_pat`, `semester`, `th_pelajaran`, `nama_kepsek`, `tahun_aktif`) VALUES
(1, '20604616', '20211', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2021/2022', '', '2021'),
(2, '20604616', '20212', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2021/2022', '', '2021'),
(3, '20604616', '20221', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2022/2023', '', '2022'),
(4, '20604616', '20222', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2022/2023', '', '2022'),
(5, '20604616', '20231', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2023/2024', '', '2023'),
(8, '20604616', '20232', 'Y', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2023/2024', '', '2023'),
(9, '20604616', '20241', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2024/2025', '', '2024'),
(10, '20604616', '20242', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2024/2025', '', '2024'),
(11, '20604616', '20251', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2025/2026', '', '2025'),
(12, '20604616', '20252', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2025/2026', '', '2025'),
(13, '20604616', '20261', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2026/2027', '', '2026'),
(14, '20604616', '20262', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2026/2027', '', '2026'),
(15, '20604616', '20271', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '1', '2027/2028', '', '2027'),
(16, '20604616', '20272', 'N', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '2', '2027/2028', '', '2027');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`ip`, `date`, `hits`, `online`, `time`) VALUES
('::1', '2023-12-11', 26, '1702292709', '2023-12-11 18:01:18'),
('::1', '2023-12-12', 4, '1702398536', '2023-12-12 22:18:08'),
('::1', '2023-12-13', 1, '1702423444', '2023-12-13 06:24:04'),
('::1', '2023-12-15', 27, '1702648881', '2023-12-15 20:35:49'),
('::1', '2023-12-16', 1, '1702693706', '2023-12-16 09:28:26'),
('::1', '2023-12-24', 8, '1703382417', '2023-12-24 08:44:30'),
('::1', '2023-12-25', 8, '1703440306', '2023-12-25 00:38:46'),
('::1', '2023-12-27', 3, '1703696399', '2023-12-27 10:24:41'),
('::1', '2023-12-28', 1, '1703697182', '2023-12-28 00:13:02'),
('::1', '2023-12-29', 66, '1703869049', '2023-12-29 00:56:37'),
('127.0.0.1', '2023-12-29', 5, '1703789694', '2023-12-29 01:38:31'),
('::1', '2023-12-30', 50, '1703874677', '2023-12-30 00:04:51'),
('::1', '2023-12-31', 49, '1703959648', '2023-12-31 00:19:24'),
('::1', '2024-01-04', 305, '1704359879', '2024-01-04 02:00:04'),
('::1', '2024-01-05', 4, '1704432037', '2024-01-05 12:14:55'),
('::1', '2024-01-06', 49, '1704527616', '2024-01-06 06:24:32'),
('::1', '2024-01-07', 300, '1704624950', '2024-01-07 11:51:26'),
('::1', '2024-01-08', 540, '1704708694', '2024-01-08 06:00:04'),
('::1', '2024-01-09', 323, '1704819121', '2024-01-09 08:15:56'),
('::1', '2024-01-10', 83, '1704854691', '2024-01-10 00:03:53'),
('::1', '2024-01-12', 52, '1705077062', '2024-01-12 08:49:39'),
('::1', '2024-01-13', 24, '1705127163', '2024-01-13 08:34:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni_legalisir`
--
ALTER TABLE `alumni_legalisir`
  ADD PRIMARY KEY (`legalisir_id`,`nis`) USING BTREE;

--
-- Indeks untuk tabel `alumni_mapel`
--
ALTER TABLE `alumni_mapel`
  ADD PRIMARY KEY (`id_mapel`) USING BTREE;

--
-- Indeks untuk tabel `alumni_nilai`
--
ALTER TABLE `alumni_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `alumni_pengumuman`
--
ALTER TABLE `alumni_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni_register`
--
ALTER TABLE `alumni_register`
  ADD PRIMARY KEY (`alumni_id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `alumni_user_access_menu`
--
ALTER TABLE `alumni_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni_user_menu`
--
ALTER TABLE `alumni_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni_user_role`
--
ALTER TABLE `alumni_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni_user_sub_menu`
--
ALTER TABLE `alumni_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lsp_data_asesor`
--
ALTER TABLE `lsp_data_asesor`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indeks untuk tabel `lsp_data_skema`
--
ALTER TABLE `lsp_data_skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- Indeks untuk tabel `lsp_data_tuk`
--
ALTER TABLE `lsp_data_tuk`
  ADD PRIMARY KEY (`id_tuk`);

--
-- Indeks untuk tabel `lsp_profile`
--
ALTER TABLE `lsp_profile`
  ADD PRIMARY KEY (`id_profil`) USING BTREE;

--
-- Indeks untuk tabel `l_kelas`
--
ALTER TABLE `l_kelas`
  ADD PRIMARY KEY (`l_kelas_id`);

--
-- Indeks untuk tabel `l_tahun`
--
ALTER TABLE `l_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `m_beasiswa`
--
ALTER TABLE `m_beasiswa`
  ADD PRIMARY KEY (`beasiswa_id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `m_contacts`
--
ALTER TABLE `m_contacts`
  ADD PRIMARY KEY (`no`) USING BTREE;

--
-- Indeks untuk tabel `m_desa`
--
ALTER TABLE `m_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_ekstra`
--
ALTER TABLE `m_ekstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_guru`
--
ALTER TABLE `m_guru`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `m_jurusan`
--
ALTER TABLE `m_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indeks untuk tabel `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_kota`
--
ALTER TABLE `m_kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `m_lulus`
--
ALTER TABLE `m_lulus`
  ADD PRIMARY KEY (`lulus_id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `m_lulus_data`
--
ALTER TABLE `m_lulus_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `m_mapel`
--
ALTER TABLE `m_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_naik_kelas`
--
ALTER TABLE `m_naik_kelas`
  ADD PRIMARY KEY (`naik_id`) USING BTREE,
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `m_provinsi`
--
ALTER TABLE `m_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indeks untuk tabel `m_ruang`
--
ALTER TABLE `m_ruang`
  ADD PRIMARY KEY (`kode_ruang`);

--
-- Indeks untuk tabel `m_sekolah`
--
ALTER TABLE `m_sekolah`
  ADD PRIMARY KEY (`sekolah_id`);

--
-- Indeks untuk tabel `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`siswa_id`) USING BTREE,
  ADD UNIQUE KEY `nis` (`nis`,`npsn`) USING BTREE;

--
-- Indeks untuk tabel `m_vaksin`
--
ALTER TABLE `m_vaksin`
  ADD PRIMARY KEY (`id_vaksin`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `m_webinar`
--
ALTER TABLE `m_webinar`
  ADD PRIMARY KEY (`id_webinar`),
  ADD UNIQUE KEY `email` (`nip`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `email_pegawai` (`email_pegawai`);

--
-- Indeks untuk tabel `pegawai_access_menu`
--
ALTER TABLE `pegawai_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai_data`
--
ALTER TABLE `pegawai_data`
  ADD PRIMARY KEY (`data_id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `pegawai_menu`
--
ALTER TABLE `pegawai_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_menu` (`nama_menu`);

--
-- Indeks untuk tabel `pegawai_role`
--
ALTER TABLE `pegawai_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai_sub_menu`
--
ALTER TABLE `pegawai_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `ppdb_bank`
--
ALTER TABLE `ppdb_bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indeks untuk tabel `ppdb_bayar`
--
ALTER TABLE `ppdb_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `ppdb_biaya`
--
ALTER TABLE `ppdb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indeks untuk tabel `ppdb_daftar`
--
ALTER TABLE `ppdb_daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD UNIQUE KEY `no_daftar` (`no_daftar`);

--
-- Indeks untuk tabel `ppdb_histori`
--
ALTER TABLE `ppdb_histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb_jenis`
--
ALTER TABLE `ppdb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `ppdb_jenjang`
--
ALTER TABLE `ppdb_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `ppdb_jurusan`
--
ALTER TABLE `ppdb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `ppdb_kontak`
--
ALTER TABLE `ppdb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `ppdb_kursus`
--
ALTER TABLE `ppdb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indeks untuk tabel `ppdb_mapel`
--
ALTER TABLE `ppdb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `ppdb_materi`
--
ALTER TABLE `ppdb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `ppdb_nilai_quiz`
--
ALTER TABLE `ppdb_nilai_quiz`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `ppdb_pengumuman`
--
ALTER TABLE `ppdb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `ppdb_periode`
--
ALTER TABLE `ppdb_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb_sekolah`
--
ALTER TABLE `ppdb_sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `ppdb_soal`
--
ALTER TABLE `ppdb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `ppdb_soal_opsi`
--
ALTER TABLE `ppdb_soal_opsi`
  ADD PRIMARY KEY (`id_opsi`);

--
-- Indeks untuk tabel `ppdb_tugas`
--
ALTER TABLE `ppdb_tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD UNIQUE KEY `id_kursus` (`id_kursus`);

--
-- Indeks untuk tabel `ppdb_tugas_jawab`
--
ALTER TABLE `ppdb_tugas_jawab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kursus` (`id_kursus`) USING BTREE;

--
-- Indeks untuk tabel `ppdb_user_access_menu`
--
ALTER TABLE `ppdb_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb_user_menu`
--
ALTER TABLE `ppdb_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb_user_role`
--
ALTER TABLE `ppdb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb_user_sub_menu`
--
ALTER TABLE `ppdb_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_artikel`
--
ALTER TABLE `profil_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `profil_belajar`
--
ALTER TABLE `profil_belajar`
  ADD PRIMARY KEY (`belajar_id`);

--
-- Indeks untuk tabel `profil_ekstra`
--
ALTER TABLE `profil_ekstra`
  ADD PRIMARY KEY (`ekstra_id`);

--
-- Indeks untuk tabel `profil_fasilitas`
--
ALTER TABLE `profil_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_galeri`
--
ALTER TABLE `profil_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `profil_galeri_sub`
--
ALTER TABLE `profil_galeri_sub`
  ADD PRIMARY KEY (`id_galeri_sub`);

--
-- Indeks untuk tabel `profil_guru`
--
ALTER TABLE `profil_guru`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indeks untuk tabel `profil_info`
--
ALTER TABLE `profil_info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_jurusan`
--
ALTER TABLE `profil_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `profil_kepsek`
--
ALTER TABLE `profil_kepsek`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `profil_osis`
--
ALTER TABLE `profil_osis`
  ADD PRIMARY KEY (`osis_id`);

--
-- Indeks untuk tabel `profil_p5`
--
ALTER TABLE `profil_p5`
  ADD PRIMARY KEY (`id_p5`);

--
-- Indeks untuk tabel `profil_prestasi`
--
ALTER TABLE `profil_prestasi`
  ADD PRIMARY KEY (`prestasi_id`);

--
-- Indeks untuk tabel `profil_slide`
--
ALTER TABLE `profil_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indeks untuk tabel `profil_video`
--
ALTER TABLE `profil_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indeks untuk tabel `sekolah_data_kontak`
--
ALTER TABLE `sekolah_data_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `t_kelas_siswa`
--
ALTER TABLE `t_kelas_siswa`
  ADD PRIMARY KEY (`id_kelas`,`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_siswa` (`npsn`,`id_siswa`) USING BTREE;

--
-- Indeks untuk tabel `t_naik_kelas`
--
ALTER TABLE `t_naik_kelas`
  ADD PRIMARY KEY (`id_siswa`,`tasm`,`penilaian`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indeks untuk tabel `t_tahun`
--
ALTER TABLE `t_tahun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni_legalisir`
--
ALTER TABLE `alumni_legalisir`
  MODIFY `legalisir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni_mapel`
--
ALTER TABLE `alumni_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `alumni_nilai`
--
ALTER TABLE `alumni_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `alumni_pengumuman`
--
ALTER TABLE `alumni_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni_register`
--
ALTER TABLE `alumni_register`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lsp_data_asesor`
--
ALTER TABLE `lsp_data_asesor`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lsp_data_skema`
--
ALTER TABLE `lsp_data_skema`
  MODIFY `id_skema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lsp_data_tuk`
--
ALTER TABLE `lsp_data_tuk`
  MODIFY `id_tuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lsp_profile`
--
ALTER TABLE `lsp_profile`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `l_kelas`
--
ALTER TABLE `l_kelas`
  MODIFY `l_kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `l_tahun`
--
ALTER TABLE `l_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_beasiswa`
--
ALTER TABLE `m_beasiswa`
  MODIFY `beasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_desa`
--
ALTER TABLE `m_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_ekstra`
--
ALTER TABLE `m_ekstra`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_kelas`
--
ALTER TABLE `m_kelas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `m_kota`
--
ALTER TABLE `m_kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_lulus`
--
ALTER TABLE `m_lulus`
  MODIFY `lulus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_mapel`
--
ALTER TABLE `m_mapel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `m_naik_kelas`
--
ALTER TABLE `m_naik_kelas`
  MODIFY `naik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `m_provinsi`
--
ALTER TABLE `m_provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_sekolah`
--
ALTER TABLE `m_sekolah`
  MODIFY `sekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_siswa`
--
ALTER TABLE `m_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `m_vaksin`
--
ALTER TABLE `m_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_webinar`
--
ALTER TABLE `m_webinar`
  MODIFY `id_webinar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai_access_menu`
--
ALTER TABLE `pegawai_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `pegawai_data`
--
ALTER TABLE `pegawai_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pegawai_menu`
--
ALTER TABLE `pegawai_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pegawai_role`
--
ALTER TABLE `pegawai_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai_sub_menu`
--
ALTER TABLE `pegawai_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_daftar`
--
ALTER TABLE `ppdb_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ppdb_histori`
--
ALTER TABLE `ppdb_histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_kontak`
--
ALTER TABLE `ppdb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_kursus`
--
ALTER TABLE `ppdb_kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_materi`
--
ALTER TABLE `ppdb_materi`
  MODIFY `id_materi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ppdb_nilai_quiz`
--
ALTER TABLE `ppdb_nilai_quiz`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_pengumuman`
--
ALTER TABLE `ppdb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ppdb_periode`
--
ALTER TABLE `ppdb_periode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ppdb_soal`
--
ALTER TABLE `ppdb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb_soal_opsi`
--
ALTER TABLE `ppdb_soal_opsi`
  MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ppdb_tugas`
--
ALTER TABLE `ppdb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil_artikel`
--
ALTER TABLE `profil_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil_belajar`
--
ALTER TABLE `profil_belajar`
  MODIFY `belajar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_ekstra`
--
ALTER TABLE `profil_ekstra`
  MODIFY `ekstra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_fasilitas`
--
ALTER TABLE `profil_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil_galeri`
--
ALTER TABLE `profil_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_galeri_sub`
--
ALTER TABLE `profil_galeri_sub`
  MODIFY `id_galeri_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_guru`
--
ALTER TABLE `profil_guru`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_jurusan`
--
ALTER TABLE `profil_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_kepsek`
--
ALTER TABLE `profil_kepsek`
  MODIFY `nip` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_osis`
--
ALTER TABLE `profil_osis`
  MODIFY `osis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_p5`
--
ALTER TABLE `profil_p5`
  MODIFY `id_p5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil_prestasi`
--
ALTER TABLE `profil_prestasi`
  MODIFY `prestasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_slide`
--
ALTER TABLE `profil_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_video`
--
ALTER TABLE `profil_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sekolah_data_kontak`
--
ALTER TABLE `sekolah_data_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_kelas_siswa`
--
ALTER TABLE `t_kelas_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_naik_kelas`
--
ALTER TABLE `t_naik_kelas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_tahun`
--
ALTER TABLE `t_tahun`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
