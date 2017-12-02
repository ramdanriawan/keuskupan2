-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 12:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuskupan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khonghucu'),
(7, 'Lainnya'),
(8, 'Kato -> Non Kato'),
(9, 'Kato -> Kristen'),
(10, 'katekumen');

-- --------------------------------------------------------

--
-- Table structure for table `di_luar_paroki`
--

CREATE TABLE `di_luar_paroki` (
  `id` int(11) NOT NULL,
  `kode` int(5) NOT NULL,
  `di_luar_paroki` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `di_luar_paroki`
--

INSERT INTO `di_luar_paroki` (`id`, `kode`, `di_luar_paroki`) VALUES
(1, 201, 'St. Matheus, Kuala Kapuas (1952)'),
(2, 202, 'St. Yohanes Don Bosco, Sampit (1952)'),
(3, 203, 'St. Mikael, Tamiang Layang'),
(4, 204, 'St. Maria de la Salette, (1965)'),
(5, 205, 'St. Perawan Maria, Palangkaraya (1963)'),
(6, 206, 'St. Paulus, Buntok (1965)'),
(7, 207, 'St. Paulus, Pangkalan Bun (1967)'),
(8, 208, 'St. Clemens, Puruk Cahu (1967)'),
(9, 209, 'St. Petrus, Sukamara (1967)'),
(10, 210, 'St. Petrus & Paulus, Ampah (1967)'),
(11, 211, 'St. Yohanes, Patas (1978)'),
(12, 212, 'St. Arnoldus Janssen, Kuala Kurun (1985)'),
(13, 213, 'Raja Semesta Alam, Nanga Bulik (1985)'),
(14, 214, 'Ecce Homi, Parenggean (1985)'),
(15, 215, 'St. Yosef Freinandemetz, Katingan (1987)'),
(16, 216, 'St. Gabriel, Pulang Pisau (1987)'),
(17, 217, 'Hati Kudus Yesus, Rantau Pulut (1987)'),
(18, 218, 'St. Theresia, Rungan/Manuhing (1996)'),
(19, 219, 'Petrus Kanisius, Kandui (1999)'),
(20, 220, 'Maria Bunda Karmel, Kasongan'),
(21, 200, 'Luar Paroki di Keuskpan'),
(22, 300, 'Luar Keuskupan'),
(23, 500, 'Stanislaus Mojosongo'),
(24, 221, 'St. Josef, Kondangan'),
(25, 222, 'Yesus Gembala yang Baik, Palangkaraya'),
(26, 223, 'St. Montfort, PIR BUTONG'),
(27, 224, 'St. Theresia, Saripoi');

-- --------------------------------------------------------

--
-- Table structure for table `golongan_darah`
--

CREATE TABLE `golongan_darah` (
  `id` int(11) NOT NULL,
  `golongan_darah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan_darah`
--

INSERT INTO `golongan_darah` (`id`, `golongan_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O'),
(4, 'AB'),
(5, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `hub_dngn_kepala_rt`
--

CREATE TABLE `hub_dngn_kepala_rt` (
  `id` int(11) NOT NULL,
  `hub_dngn_kepala_rt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hub_dngn_kepala_rt`
--

INSERT INTO `hub_dngn_kepala_rt` (`id`, `hub_dngn_kepala_rt`) VALUES
(1, 'Kepala Rumah Tangga'),
(2, 'Pasangan'),
(3, 'Anak'),
(4, 'Kakak-Adik'),
(5, 'Anak Adopsi/Anak Tiri'),
(6, 'Cucu'),
(7, 'Orang Tua/Mertua (single)'),
(8, 'Famili Lain'),
(9, 'Pembantu/Sopir/Tukang Kebun'),
(10, 'Lain - Lain');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sosial`
--

CREATE TABLE `jabatan_sosial` (
  `id` int(11) NOT NULL,
  `jabatan_sosial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_sosial`
--

INSERT INTO `jabatan_sosial` (`id`, `jabatan_sosial`) VALUES
(1, 'RT/RW/Kelurahan'),
(2, 'Pengurus LSM'),
(3, 'Pengurus Ormas/Partai/Politik'),
(4, 'Warga Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki Laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `keterlibatan`
--

CREATE TABLE `keterlibatan` (
  `id` int(11) NOT NULL,
  `keterlibatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterlibatan`
--

INSERT INTO `keterlibatan` (`id`, `keterlibatan`) VALUES
(1, 'Anggota Dewan Paroki'),
(2, 'Pengurus Tim Kerja'),
(3, 'Pengurus Lingkungan'),
(4, 'Pengurus Kelompok Kategorial'),
(5, 'Pengurus Ormas Kablik'),
(6, 'Warga Umat '),
(7, 'Anggota Dewan Paroki'),
(8, 'Pengurus Tim Kerja'),
(9, 'Pengurus Lingkungan'),
(10, 'Pengurus Kelompok Kategorial'),
(11, 'Pengurus Ormas Kablik'),
(12, 'Warga Umat Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `keuskupan_lainnya`
--

CREATE TABLE `keuskupan_lainnya` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `lainnya` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuskupan_lainnya`
--

INSERT INTO `keuskupan_lainnya` (`id`, `kode`, `lainnya`) VALUES
(1, 1, 'Kos Di Dalam Paroki');

-- --------------------------------------------------------

--
-- Table structure for table `kode_bidang_studi`
--

CREATE TABLE `kode_bidang_studi` (
  `id` int(11) NOT NULL,
  `bidang_studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_bidang_studi`
--

INSERT INTO `kode_bidang_studi` (`id`, `bidang_studi`) VALUES
(1, 'Adminsitrasi'),
(2, 'Agribisnis/Perikanan'),
(3, 'Akuntansi'),
(4, 'Akupuntur'),
(5, 'Analis Kesehatan'),
(6, 'Analis Lingkungan'),
(7, 'Antropoligi/Sejarah'),
(8, 'Arsitektur'),
(9, 'Asuransi'),
(10, 'Bimbingan Konseling'),
(11, 'Biologi'),
(12, 'Desain'),
(13, 'Ekonomi'),
(14, 'Farmasi'),
(15, 'Film, Televisi, Radio'),
(16, 'Filsafat/Agama/Teologi'),
(17, 'Fisika'),
(18, 'Fisioterapi'),
(19, 'Fotografi/Grafika/Seni'),
(20, 'Gegrafi/Geofisika/Geologi'),
(21, 'Gizi'),
(22, 'Hubungan Internasional'),
(23, 'Hukum'),
(24, 'Humaniora'),
(25, 'Jurnalistik'),
(26, 'Kajian Kepolisian'),
(27, 'Kajian Ketahanan/Tentara'),
(28, 'Kajian Budaya/Wanita'),
(29, 'Kearsipan'),
(30, 'Kebidanan'),
(31, 'Kedokteran Gigi'),
(32, 'Kedokteran Spesialis'),
(33, 'Kedokteran Umum'),
(34, 'Keperawatan/Kesehatan'),
(35, 'Keuangan dan Perbankan'),
(36, 'Kimia'),
(37, 'Komputer'),
(38, 'Kriminologi'),
(39, 'Manajemen'),
(40, 'Matamatika'),
(41, 'Pekerja Sosial'),
(42, 'Pemandu Wisata'),
(43, 'Penata Tari'),
(44, 'Pendidikan'),
(45, 'Pendidikan Dasar'),
(46, 'Pendidikan Fisika'),
(47, 'Pendidikan Guru Sekolah Dasar'),
(48, 'Pendidikan Luar Biasa'),
(49, 'Pendidikan Luar Sekolah'),
(50, 'Perencanaan Wilayah dan Kota'),
(51, 'Perhotelan/Pariwisata'),
(52, 'Pertambangan/Gas/Minyak'),
(53, 'Perpajakan'),
(54, 'Perpustakaan'),
(55, 'Pertanian/Perkebunan'),
(56, 'Politik / Pemerintahan'),
(57, 'Psikologi'),
(58, 'Sosiologi'),
(59, 'Statistika'),
(60, 'Teknik'),
(61, 'Teknik Kimia'),
(62, 'Lingkungan/Kehutanan/Kelautan'),
(63, 'Teknik Sipil'),
(64, 'Ternak/Kedokteran Hewan'),
(65, 'Transportasi/Pelayaran/ Penerbangan'),
(66, 'Sastra/Bahasa'),
(67, 'Ketrampilan Kain/Keramik/Kayu/Boga'),
(68, 'Pertahanan'),
(69, 'Sekretaris'),
(70, 'Komunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `kode_keuskupan`
--

CREATE TABLE `kode_keuskupan` (
  `id` int(11) NOT NULL,
  `kode` int(5) NOT NULL,
  `nama_keuskupan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_keuskupan`
--

INSERT INTO `kode_keuskupan` (`id`, `kode`, `nama_keuskupan`) VALUES
(1, 301, 'Agats-Asmats'),
(2, 302, 'Ambon'),
(3, 303, 'Atambus'),
(4, 304, 'Bandung'),
(5, 305, 'Banjarmasin'),
(6, 306, 'Bogor'),
(7, 307, 'Denpasar'),
(8, 308, 'Ende'),
(9, 309, 'Jakarta'),
(10, 310, 'Jayapura'),
(11, 311, 'Ketapang'),
(12, 312, 'Kupang'),
(13, 313, 'Larantuka'),
(14, 314, 'Makasar'),
(15, 315, 'Malang'),
(16, 316, 'Manado'),
(17, 317, 'Manukwari-Sorong'),
(18, 318, 'Maumere'),
(19, 319, 'Medan'),
(20, 320, 'Merauke'),
(21, 321, 'Padang'),
(22, 322, 'Palangkaraya'),
(23, 323, 'Palembang'),
(24, 324, 'Pangkalpinang'),
(25, 325, 'Pontianak'),
(26, 326, 'Purwokerto'),
(27, 327, 'Ruteng'),
(28, 328, 'Samarinda'),
(29, 329, 'Sanggau'),
(30, 330, 'Semarang'),
(31, 331, 'Sibolga'),
(32, 332, 'Sintang'),
(33, 333, 'Surabaya'),
(34, 334, 'Tanjungkarang'),
(35, 335, 'Tanjung Selor'),
(36, 336, 'Timika'),
(37, 337, 'Weetebuta'),
(38, 338, 'TNI/POLRI'),
(39, 339, 'Luar Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pekerjaan`
--

CREATE TABLE `kode_pekerjaan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `jenis_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pekerjaan`
--

INSERT INTO `kode_pekerjaan` (`id`, `kode`, `jenis_pekerjaan`) VALUES
(1, 3, 'Ahli (spesial - lainnya)'),
(2, 1, 'Ahli Ekonomi'),
(3, 2, 'Ahli Hukum: Pengacara, Hakim, Jaksa, Notaris'),
(4, 0, 'Anak Berusia Kurang dari 6 th'),
(5, 4, 'Apoteker'),
(6, 5, 'Bidan'),
(7, 70, 'Buruh Pabrik'),
(8, 72, 'Buruh Perusahaan'),
(9, 71, 'Buruh Tambang'),
(10, 6, 'Buruh Tani Dan Ternak'),
(11, 7, 'Dokter Gigi'),
(12, 8, 'Dokter Hewan'),
(13, 9, 'Dokter Umum/Ahli'),
(14, 10, 'Guide Turis'),
(15, 67, 'Guru Agama di Sekolah'),
(16, 62, 'Ibu Rumah Tangga'),
(17, 53, 'Jasa ''Uang'': Penggandaan Uang'),
(18, 11, 'Juru Masak, Pengolahan Makanan'),
(19, 66, 'Katekis/Tenaga Pastoral'),
(20, 75, 'Konsultan'),
(21, 12, 'Kontraktor'),
(22, 65, 'Mahasiswa'),
(23, 59, 'Manager'),
(24, 69, 'Nelayan'),
(25, 13, 'Olahragawan'),
(26, 14, 'Pandai Besi'),
(27, 24, 'Pedagang/Usaha Besar'),
(28, 15, 'Pedagang/Usaha Kecil'),
(29, 57, 'Pedagang/Usaha Sedang'),
(30, 16, 'Pejabat DPR'),
(31, 17, 'Pejabat Pelaksana: Tata Usaha, Administrasi'),
(32, 18, 'Pekerja Kasar/Buruh'),
(33, 20, 'Pekerja Rumah Tangga'),
(34, 33, 'Pekerja Sosial'),
(35, 64, 'Pelajar'),
(36, 19, 'Pemahat, Pelukis, Seniman'),
(37, 21, 'Pemborong'),
(38, 22, 'Pemegang Kas, Bendaharawan'),
(39, 73, 'Peneliti'),
(40, 23, 'Pemelihara/Tenaga Gedung'),
(41, 25, 'Penerbangan/Pelayaran (Pilot, Pramugari)'),
(42, 26, 'Pengajar Prasekolah'),
(43, 27, 'Pengajar SD'),
(44, 28, 'Pengajar SLB'),
(46, 29, 'Pengajar SLTA'),
(47, 29, 'Pengajar SLTP'),
(48, 31, 'Pengajar Universitas'),
(49, 32, 'Pengarang, Wartawan, Penulis'),
(50, 54, 'Pengrajin: Kulit, Tembaga'),
(51, 52, 'Penjual Jasa: Tukang Pijat, Tukang Salon, Courir'),
(52, 34, 'Pensiun (pernah pegawai)'),
(53, 35, 'Perawat'),
(54, 36, 'Petani dan Peternak'),
(55, 63, 'PHK'),
(56, 37, 'PNS/Pegawai/Karyawan'),
(57, 38, 'Polisi, TNI'),
(58, 39, 'Psikolog'),
(59, 40, 'Satpam/Security'),
(60, 61, 'Sedang Mencari Kerja'),
(61, 58, 'Serabutan/Tenaga Lepas'),
(62, 41, 'Sopir'),
(63, 55, 'Suster/Br/Rm'),
(64, 56, 'Swasta'),
(65, 42, 'Teknisi, Operator/Ahli Mesin'),
(66, 74, 'Tenaga Administrasi'),
(67, 68, 'Tenaga Jasa: Pelayanan Toko, dkk'),
(68, 43, 'Tenaga Management'),
(69, 44, 'Tenaga Pemasaran, Penjualan, Sales'),
(70, 60, 'Tidak Bekerja'),
(71, 45, 'Tidak Dapat Bekerja'),
(72, 46, 'Tukang Batu'),
(73, 47, 'Tukang Cat'),
(74, 48, 'Tukang Jahit'),
(75, 49, 'Tukang Kayu'),
(76, 50, 'Tukang Las'),
(77, 51, 'Tukang Listrik, Bengkel');

-- --------------------------------------------------------

--
-- Table structure for table `kode_suku_bangsa`
--

CREATE TABLE `kode_suku_bangsa` (
  `id` int(11) NOT NULL,
  `etnis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_suku_bangsa`
--

INSERT INTO `kode_suku_bangsa` (`id`, `etnis`) VALUES
(1, 'Ambon'),
(2, 'Bali'),
(3, 'Batak'),
(4, 'Betawi'),
(5, 'Bugis'),
(6, 'Dayak'),
(7, 'Flores'),
(8, 'Papua'),
(9, 'Jawa'),
(10, 'Madura'),
(11, 'Makasar'),
(12, 'Minangkabau'),
(13, 'Nias'),
(14, 'Sumbawa'),
(15, 'Sunda'),
(16, 'Timor'),
(17, 'Tionghoa'),
(18, 'Toraja'),
(19, 'Non Indonesia'),
(20, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `komuni_pertama`
--

CREATE TABLE `komuni_pertama` (
  `id` int(11) NOT NULL,
  `komuni_pertama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komuni_pertama`
--

INSERT INTO `komuni_pertama` (`id`, `komuni_pertama`) VALUES
(1, 'Sudah'),
(2, 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_ekonomi`
--

CREATE TABLE `kondisi_ekonomi` (
  `id` int(11) NOT NULL,
  `kondisi_ekonomi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_ekonomi`
--

INSERT INTO `kondisi_ekonomi` (`id`, `kondisi_ekonomi`) VALUES
(1, 'Bisa Membantu'),
(2, 'Biasa'),
(3, 'Perlu dibantu');

-- --------------------------------------------------------

--
-- Table structure for table `lingkungan`
--

CREATE TABLE `lingkungan` (
  `id` int(11) NOT NULL,
  `id_anggota_keluarga` int(11) NOT NULL,
  `wilayah` varchar(150) NOT NULL,
  `lingkungan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingkungan`
--

INSERT INTO `lingkungan` (`id`, `id_anggota_keluarga`, `wilayah`, `lingkungan`) VALUES
(1, 2008544, 'Wilayah Pusat', '42343');

-- --------------------------------------------------------

--
-- Table structure for table `list_anggota_keluarga`
--

CREATE TABLE `list_anggota_keluarga` (
  `id` int(11) NOT NULL,
  `id_anggota_keluarga` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `tempat_dan_tgl_lahir` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hub_dngn_kepala_rt` varchar(200) NOT NULL,
  `suku_bangsa` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `bidang_studi` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `golongan_darah` varchar(200) NOT NULL,
  `status_kesehatan` varchar(200) NOT NULL,
  `waktu_baptis` varchar(200) NOT NULL,
  `tempat_dan_tgl_baptis` varchar(200) NOT NULL,
  `tempat_dan_tahun_penguatan` varchar(200) NOT NULL,
  `status_perkawinan` varchar(200) NOT NULL,
  `jabatan_sosial` varchar(200) NOT NULL,
  `tempat_tinggal` varchar(200) NOT NULL,
  `komuni_pertama` varchar(200) NOT NULL,
  `status_gerejawi` varchar(200) NOT NULL,
  `keterlibatan` varchar(200) NOT NULL,
  `liber_baptizatorum` varchar(200) NOT NULL,
  `foto_profile` varchar(150) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_anggota_keluarga`
--

INSERT INTO `list_anggota_keluarga` (`id`, `id_anggota_keluarga`, `nama`, `agama`, `tempat_dan_tgl_lahir`, `jenis_kelamin`, `hub_dngn_kepala_rt`, `suku_bangsa`, `pendidikan`, `bidang_studi`, `pekerjaan`, `golongan_darah`, `status_kesehatan`, `waktu_baptis`, `tempat_dan_tgl_baptis`, `tempat_dan_tahun_penguatan`, `status_perkawinan`, `jabatan_sosial`, `tempat_tinggal`, `komuni_pertama`, `status_gerejawi`, `keterlibatan`, `liber_baptizatorum`, `foto_profile`, `catatan`) VALUES
(419, 1816558, 'lala', 'Kristen', 'fsdfsdf', 'perempuan', 'Anak', 'Batak', 'SLTA (Jika Tamat)', 'Biologi', 'Dokter Gigi', 'O', 'Sulit Mengurus Diri Sendiri', 'Dewasa dari islam', 'SDFSf', 'sdfsf', 'Belum Nikah', 'Pengurus LSM', 'Ketapang', 'Sudah', 'Misa di gereja setempat, aktif di paroki lain', 'Pengurus Tim Kerja', '42423', '', 'fsdfsdf'),
(421, 8107604, 'nganu2', 'Katolik', 'sdfsfs', 'Laki Laki', 'Pasangan', 'Sumbawa', '2. ', 'Fisika', 'Guide Turis', 'A', 'Kesulitan Mengingat', 'Dewasa dari hindu', 'sfsdf', 'sdfsf', 'Sah Katolik', 'Warga Biasa', 'Larantuka', 'Belim', 'Misa di gereja setempat, aktif di paroki lain', 'Pengurus Lingkungan', '32424', '', 'sdfsf'),
(422, 8107604, 'nganu3', 'Hindu', 'sfsd', 'perempuan', 'Kepala Rumah Tangga', 'Betawi', 'D1/D2/D3 (Jika Masih Belajar di Sekolah/Perguruan ', 'Film, Televisi, Radio', 'Guru Agama di Sekolah', 'B', 'Bisu / Tuli', 'Dewasa dari hindu', 'sfsdf', 'sdfsdf', 'Sah Beda Gereja', 'Pengurus Ormas/Partai/Politik', 'Makasar', 'Belim', 'Misa di gereja setempat, aktif di paroki lain', 'Pengurus Lingkungan', '42342', '', 'sdfsf'),
(423, 8107604, 'nganu4', 'Kristen', 'sfs', 'perempuan', 'Pasangan', 'Timor', 'D1/D2/D3 (Jika Masih Belajar di Sekolah/Perguruan ', 'Fotografi/Grafika/Seni', 'Ibu Rumah Tangga', 'B', 'Bisu / Tuli', 'Dewasa dari islam', 'sfsfd', 'sdfsfs', 'Sah Katolik', 'RT/RW/Kelurahan', 'Kupang', 'Sudah', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Ormas Kablik', '23424', '', 'sdfsfs'),
(424, 8107604, 'nganu7', 'Kristen', 'sfsdfs', 'perempuan', 'Anak', 'Tionghoa', 'SLTA (Jika Tamat)', 'Fisika', 'Ibu Rumah Tangga', 'AB', 'Bisu / Tuli', 'Dewasa dari hindu', 'sdfsd', 'sdfsfs', 'Sah Katolik', 'RT/RW/Kelurahan', 'Larantuka', 'Belim', 'Misa di gereja setempat, aktif di paroki lain', 'Pengurus Kelompok Kategorial', '42342', '', 'sfsdf'),
(427, 1816558, 'nganu100', 'Katolik', 'sdfsfs', 'Laki Laki', 'Kepala Rumah Tangga', 'Timor', '3. ', 'Filsafat/Agama/Teologi', 'Guru Agama di Sekolah', 'B', 'Sulit Mengurus Diri Sendiri', 'Saat usia 9-18', 'sdfsd', 'sdfsfs', 'Sah Katolik', 'Pengurus LSM', 'Kupang', 'Belim', 'Misa di gereja setempat, aktif di paroki lain', 'Pengurus Tim Kerja', '42342', '', 'sdfsfs'),
(428, 1816558, 'nganu101', 'Katolik', 'sdfsdf', 'perempuan', 'Anak', 'Sunda', 'SLTP (Jika Tamat)', 'Farmasi', 'Dokter Gigi', 'A', 'Sulit Mengurus Diri Sendiri', 'Dewasa dari islam', 'sdfsd', 'sdfsf', 'Sah Katolik', 'RT/RW/Kelurahan', 'Kupang', 'Belim', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Tim Kerja', '24324', '', 'sdfsfs'),
(429, 1816558, 'fdsfdsfdsfdsf', 'Kristen', 'fdsfds', 'perempuan', 'Pasangan', 'Batak', 'SD (Jika Tamat)', 'Filsafat/Agama/Teologi', 'Dokter Umum/Ahli', 'B', 'Cacat Fisik', 'Dewasa dari hindu', 'fsdf', 'sdf', 'Sah Beda Gereja', 'Pengurus Ormas/Partai/Politik', 'Ambon', 'Sudah', 'Misa & aktif gereja paroki lain', 'Pengurus Lingkungan', '5345345', '', 'sdfdsf'),
(430, 1816558, 'dfsfdsfsdfdsfdsfdsf', 'Budha', 'dsfsdfds', 'Laki Laki', 'Kepala Rumah Tangga', 'Betawi', 'SD (Jika Tamat)', 'Farmasi', 'Dokter Umum/Ahli', 'O', 'Cacat Fisik', 'Dewasa dari islam', 'fdsf', 'sdfsdf', 'Sah Beda Agama', 'Pengurus LSM', 'Kupang', 'Belim', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Tim Kerja', '234535345345', 'C:/xampp/htdocs/project/keuskupan/foto_profile/gambar1.jpg', 'fdsfsd'),
(431, 1816558, 'sdfdsfdsfdsfsdfsdfsdf', 'Hindu', 'fsdfsdf', 'perempuan', 'Kakak-Adik', 'Betawi', 'SD (Jika Tamat)', 'Film, Televisi, Radio', 'Guru Agama di Sekolah', 'O', 'Cacat Fisik', 'Saat usia 9-18', 'fsdfsd', 'fdsfsdf', 'Sah Beda Gereja', 'Pengurus LSM', 'Ketapang', 'Belim', 'Misa & aktif gereja paroki lain', 'Pengurus Kelompok Kategorial', '4234234', 'http://192.168.43.222/project/keuskupan/foto_profile/gambar1.jpg', 'fsdfdsf'),
(432, 8107604, 'fsdfsdf', 'Katolik', 'dsfsdf', 'Laki Laki', 'Kakak-Adik', 'Bugis', 'SLTA (Jika Tamat)', 'Ekonomi', 'Guide Turis', 'O', 'Buta', 'Saat usia 9-18', 'fsdfds', 'fdsfdsf', 'Sah Beda Agama', 'Pengurus LSM', 'Larantuka', 'Belim', 'Misa di gereja setempat, aktif di lingkungan', 'Pengurus Lingkungan', '4234234', 'http://192.168.43.222/project/keuskupan/foto_profile/nganu22.jpg', 'fdsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `list_kepala_keluarga`
--

CREATE TABLE `list_kepala_keluarga` (
  `id` int(11) NOT NULL,
  `id_anggota_keluarga` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `latlng` varchar(50) NOT NULL,
  `telp` int(11) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `lingkungan` varchar(150) NOT NULL,
  `status_nikah` varchar(50) NOT NULL,
  `tempat_atau_tgl_nikah` varchar(50) NOT NULL,
  `liber_matrimonium` varchar(50) NOT NULL,
  `kondisi_ekonomi` varchar(50) NOT NULL,
  `jenis_rumah_tangga` varchar(50) NOT NULL,
  `foto_profile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kepala_keluarga`
--

INSERT INTO `list_kepala_keluarga` (`id`, `id_anggota_keluarga`, `nama`, `agama`, `alamat`, `latlng`, `telp`, `wilayah`, `lingkungan`, `status_nikah`, `tempat_atau_tgl_nikah`, `liber_matrimonium`, `kondisi_ekonomi`, `jenis_rumah_tangga`, `foto_profile`) VALUES
(10, 1816558, 'yess', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(11, 9442443, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(12, 6335784, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(13, 3944335, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(14, 5823272, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(15, 1236755, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(16, 5728240, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(17, 2218658, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(18, 9396301, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(19, 6931243, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(20, 6974365, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(21, 8721466, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(22, 3264831, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(24, 6107543, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(25, 2550445, 'yes3', 'Hindu', 'yes', '', 423, '34e324', '', 'Sah Beda Gereja', 'sdfsf', 'sdfsdf', 'Biasa', 'sdfsdf', ''),
(26, 1686096, 'yes', 'budha', 'yes', '', 423, '34e324', '', 'dsfsd', 'sdfsf', 'sdfsdf', 'biasa', 'sdfsdf', ''),
(30, 9241394, 'nganu99', 'Islam', 'sfsd', '', 243242, '24324', '', 'Hidup Bersama Tanpa Ikatan', 'dfdfs', 'dsfs', 'Bisa Membantu', 'sdfsfd', ''),
(31, 3473571, 'sdfsdf', 'katolik', 'jakarta', '-6.17511,106.8650395', 2147483647, 'fdsfdsfdsf', '', 'Sah Beda Agama', 'fsdfds', 'fsdfdsf', 'biasa', 'sdfdsf', 'C:/xampp/htdocs//project/keuskupan/foto_profile/'),
(32, 9263916, 'fdsfdsf', 'islam', 'jl. h. ibrahim rt 19 no 94 kel. rawasari kec. kota baru jambi', '-1.627002,103.5676565', 2147483647, 'fsdfdsf', '', 'Janda / Duda Mati', 'fdsfsdf', 'sdfdsf', 'biasa', 'sdfsdf', 'C:/xampp/htdocs//project/keuskupan/foto_profile/nganu4.png'),
(33, 4400268, 'dsfsdf', 'katolik', 'fdsfds', ',', 2147483647, 'sdfdsf', '', 'Sah Beda Agama', 'fsdfsdf', 'fsdf', 'bisa_membantu', 'fdsfdsf', 'http://192.168.43.222/project/keuskupan/foto_profile/nganu3.gif'),
(34, 9319946, 'sdfsdfds', 'kristen', 'sdfsdfs', ',', 423432, 'Wilayah/Stasi Tewangrangkang', 'sdfsfdsdf', 'Sah Katolik', 'dfsd', 'sdfsf', 'bisa_membantu', 'sdfdsf', 'http://localhost/project/keuskupan/foto_profile/records.png'),
(35, 2008544, 'dfsfsdf', 'katolik', 'sdfsfdsf', ',', 423432, 'Wilayah Pusat', '42343', 'Rm/Br/Sr bekerja di Paroki', '43243', '24324', 'bisa_membantu', '432432', 'http://localhost/project/keuskupan/foto_profile/records.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `id_anggota_keluarga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `session`, `id_anggota_keluarga`) VALUES
(3, 'user1', 'user1', 'list_kepala_keluarga', 8107604),
(4, 'admin', 'admin', 'admin', NULL),
(5, 'ngawur', 'ngawur', 'list_kepala_keluarga', 4647186),
(6, 'yes', 'yes', 'list_kepala_keluarga', 6169616),
(7, 'yes2', 'yes', 'list_kepala_keluarga', 7359985),
(8, 'yes3', 'yes', 'list_kepala_keluarga', 1816558),
(9, 'yes4', 'yes', 'list_kepala_keluarga', 9442443),
(10, 'yes5', 'yes', 'list_kepala_keluarga', 6335784),
(11, 'yes6', 'yes', 'list_kepala_keluarga', 3944335),
(12, 'yes7', 'yes', 'list_kepala_keluarga', 5823272),
(13, 'yes8', 'yes', 'list_kepala_keluarga', 1236755),
(14, 'yes9', 'yes', 'list_kepala_keluarga', 5728240),
(15, 'yes10', 'yes', 'list_kepala_keluarga', 2218658),
(16, 'yes11', 'yes', 'list_kepala_keluarga', 9396301),
(17, 'yes12', 'yes', 'list_kepala_keluarga', 6931243),
(18, 'yes13', 'yes', 'list_kepala_keluarga', 6974365),
(19, 'yes14', 'yes', 'list_kepala_keluarga', 8721466),
(20, 'yes15', 'yes', 'list_kepala_keluarga', 3264831),
(21, 'yes16', 'yes', 'list_kepala_keluarga', 7413543),
(22, 'yes17', 'yes', 'list_kepala_keluarga', 6107543),
(23, 'yes18', 'yes', 'list_kepala_keluarga', 2550445),
(24, 'yes19', 'yes', 'list_kepala_keluarga', 1686096),
(25, 'yes20', 'yes', 'list_kepala_keluarga', 9143890),
(26, 's', 's', 'list_kepala_keluarga', 2605102),
(27, 'nganu', 'nganu', 'list_kepala_keluarga', 1391113),
(28, 'user3', 'user2', 'list_kepala_keluarga', 9241394),
(29, 'ulala_uwaw_uwaw', '123', 'list_kepala_keluarga', 3473571),
(30, 'fsfsdfdsf', '1234', 'list_kepala_keluarga', 9263916),
(31, 'dsfdsfds', '1234', 'list_kepala_keluarga', 4400268),
(32, 'sdfsdf', '123', 'list_kepala_keluarga', 9319946),
(33, 'fsdfsdf', '123', 'list_kepala_keluarga', 2008544);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `kategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan`, `kategory`) VALUES
(1, 'Belum Sekolah (Jika Tamat)', 'masih_belajar'),
(2, 'SD (Jika Tamat)', 'tamat'),
(3, 'SLTP (Jika Tamat)', 'tamat'),
(4, 'SLTA (Jika Tamat)', 'tamat'),
(5, 'Diploma (D1/D2/D3) (Jika Tamat)', 'tamat'),
(6, 'Sarjana (Jika Tamat)', 'tamat'),
(7, 'S2/Akta 5 (Jika Tamat)', 'tamat'),
(8, 'S3 (Jika Tamat)', 'tamat'),
(9, 'Usia 7-12 tdk Skl (Jika Tamat)', 'tamat'),
(10, 'Usia 13-15 tdk Skl (Jika Tamat)', 'tamat'),
(11, 'Buta Aksara (Jika Tamat)', 'tamat'),
(12, 'SD (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(13, 'SLTP (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(14, 'SLTA/SMA (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(15, 'D1/D2/D3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(16, 'S1 / D4 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(17, 'S2/Akta 5 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(18, 'S3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(19, 'SD (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(20, 'SLTP (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(21, 'SLTA (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(22, 'S1/D2/D3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(23, 'S1/D4 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(24, 'S2/Akta 5', 'masih_belajar'),
(25, 'S3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik)', 'masih_belajar'),
(26, 'SD (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(27, 'SLTP (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(28, 'SLTA/SMA (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(29, 'D1/D2/D3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(30, 'S1/D4 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(31, 'S2/Akta 5 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non'),
(32, 'S3 (Jika Masih Belajar di Sekolah/Perguruan Tinggi Non Katolik)', 'masih_belajar_non');

-- --------------------------------------------------------

--
-- Table structure for table `status_gerejawi`
--

CREATE TABLE `status_gerejawi` (
  `id` int(11) NOT NULL,
  `status_gerejawi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_gerejawi`
--

INSERT INTO `status_gerejawi` (`id`, `status_gerejawi`) VALUES
(1, 'Misa di gereja setempat, aktif di lingkungan'),
(2, 'Misa di gereja setempat, aktif di paroki lain'),
(3, 'Misa & aktif gereja paroki lain'),
(4, 'Misa di luar gereja setempat, aktif di lingkungan paroki'),
(5, 'kadang kadang misa ekaristi'),
(6, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_kesehatan`
--

CREATE TABLE `status_kesehatan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `status_kesehatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kesehatan`
--

INSERT INTO `status_kesehatan` (`id`, `kode`, `status_kesehatan`) VALUES
(1, 0, 'Normal'),
(2, 1, 'Cacat Fisik'),
(3, 2, 'Buta'),
(4, 4, 'Bisu / Tuli'),
(5, 8, 'Sulit Mengurus Diri Sendiri'),
(6, 16, 'Kesulitan Mengingat'),
(7, 32, 'Penyakit Kronis'),
(8, 55, 'Pikun');

-- --------------------------------------------------------

--
-- Table structure for table `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` int(11) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `status_perkawinan`) VALUES
(1, 'Belum Nikah'),
(2, 'Sah Katolik'),
(3, 'Sah Beda Agama'),
(4, 'Sah Beda Gereja'),
(5, 'Nikah di Luar Gereja'),
(6, 'Di Tinggalkan Pasangannya'),
(7, 'Krisis Berkepanjangan'),
(8, 'Janda / Duda Mati'),
(9, 'Rm/Br/Sr dari Paroki'),
(10, 'Rm/Br/Sr bekerja di Paroki'),
(11, 'Hidup Bersama Tanpa Ikatan'),
(12, 'Nikah Adat'),
(13, 'Nikah Efek Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_baptis`
--

CREATE TABLE `waktu_baptis` (
  `id` int(11) NOT NULL,
  `waktu_baptis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_baptis`
--

INSERT INTO `waktu_baptis` (`id`, `waktu_baptis`) VALUES
(1, 'Saat usia 0-7th'),
(2, 'Saat usia 9-18'),
(3, 'Dewasa dari islam'),
(4, 'Dewasa dari hindu'),
(5, 'Dewasa dari budha'),
(6, 'Dewasa dari khonghucu'),
(7, 'Dewasa dari kristen'),
(8, 'Dewasa dari lain-lain'),
(9, 'Belum baptis'),
(10, 'Katekumen (Bayi+Anak)');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `wilayah` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `wilayah`) VALUES
(1, 'Wilayah Pusat'),
(2, 'Wilayah/Stasi Tewangrangkang'),
(3, 'Wilayah/Stasi Buntutbali'),
(4, 'Wilayah/Stasi Tangkiling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `di_luar_paroki`
--
ALTER TABLE `di_luar_paroki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hub_dngn_kepala_rt`
--
ALTER TABLE `hub_dngn_kepala_rt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_sosial`
--
ALTER TABLE `jabatan_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterlibatan`
--
ALTER TABLE `keterlibatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuskupan_lainnya`
--
ALTER TABLE `keuskupan_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_bidang_studi`
--
ALTER TABLE `kode_bidang_studi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`id`);

--
-- Indexes for table `kode_keuskupan`
--
ALTER TABLE `kode_keuskupan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pekerjaan`
--
ALTER TABLE `kode_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_suku_bangsa`
--
ALTER TABLE `kode_suku_bangsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komuni_pertama`
--
ALTER TABLE `komuni_pertama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_ekonomi`
--
ALTER TABLE `kondisi_ekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lingkungan`
--
ALTER TABLE `lingkungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_anggota_keluarga`
--
ALTER TABLE `list_anggota_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_kepala_keluarga`
--
ALTER TABLE `list_kepala_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_anggota_keluarga` (`id_anggota_keluarga`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_gerejawi`
--
ALTER TABLE `status_gerejawi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_kesehatan`
--
ALTER TABLE `status_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_baptis`
--
ALTER TABLE `waktu_baptis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `di_luar_paroki`
--
ALTER TABLE `di_luar_paroki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hub_dngn_kepala_rt`
--
ALTER TABLE `hub_dngn_kepala_rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jabatan_sosial`
--
ALTER TABLE `jabatan_sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keterlibatan`
--
ALTER TABLE `keterlibatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `keuskupan_lainnya`
--
ALTER TABLE `keuskupan_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kode_bidang_studi`
--
ALTER TABLE `kode_bidang_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `kode_keuskupan`
--
ALTER TABLE `kode_keuskupan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `kode_pekerjaan`
--
ALTER TABLE `kode_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `kode_suku_bangsa`
--
ALTER TABLE `kode_suku_bangsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `komuni_pertama`
--
ALTER TABLE `komuni_pertama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kondisi_ekonomi`
--
ALTER TABLE `kondisi_ekonomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lingkungan`
--
ALTER TABLE `lingkungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list_anggota_keluarga`
--
ALTER TABLE `list_anggota_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;
--
-- AUTO_INCREMENT for table `list_kepala_keluarga`
--
ALTER TABLE `list_kepala_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `status_gerejawi`
--
ALTER TABLE `status_gerejawi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status_kesehatan`
--
ALTER TABLE `status_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `waktu_baptis`
--
ALTER TABLE `waktu_baptis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
