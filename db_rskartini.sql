-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 09.21
-- Versi server: 10.4.22-MariaDB-log
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rskartini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama`, `pekerjaan`, `keterangan`, `gambar`) VALUES
(2, 'SUJONO', 'KALIREJO', 'Saya sangat terkesan dengan pelayanan di Rumah Sakit Kartini Kalirejo Lampung. Dokter dan perawatnya sangat ramah dan profesional. Saya merasa didengarkan dan diperlakukan dengan sangat baik. Terima kasih banyak atas perawatan yang luar biasa!', '24052024105818.jpg'),
(3, 'RUSTAM', 'KALIREJO', 'Pengalaman saya di Rumah Sakit Kartini Kalirejo benar-benar luar biasa. Fasilitasnya modern dan bersih, serta stafnya sangat perhatian. Saya merasa tenang dan nyaman selama masa perawatan saya. Saya pasti akan merekomendasikan rumah sakit ini kepada teman dan keluarga.', '24052024112331.jpg'),
(4, 'FATIMAH', 'KALIREJO', 'aya ingin berterima kasih kepada tim medis di Rumah Sakit Kartini Kalirejo atas perawatan yang sangat baik. Mereka sangat responsif terhadap kebutuhan saya dan memberikan solusi yang efektif. Saya merasa diprioritaskan dan didukung sepenuhnya selama saya berada di sana.', '24052024112412.jpg'),
(5, 'Muhammad Iwan', 'KALIREJO', 'Saya sangat menghargai keramahan dan profesionalisme dokter dan perawat di Rumah Sakit Kartini Kalirejo. Mereka menjelaskan prosedur dengan jelas dan memberikan perawatan yang sangat baik. Saya merasa aman dan dipercayakan sepenuhnya kepada mereka. Terima kasih atas semua bantuan dan dukungannya.', '24052024112528.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_sesi` varchar(200) DEFAULT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL DEFAULT 0,
  `gambar` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_sesi`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`, `jenis`) VALUES
(3, 'a428a7b8462014d7785e326960247cd9', 'POLI PENYAKIT DALAM', '17/05/2024', '2024-05-24 06:55:43', '<p>diagnosis, pengobatan, dan manajemen penyakit-penyakit dalam tubuh manusia, terutama yang mempengaruhi organ dalam seperti jantung, paru-paru, ginjal, hati, dan saluran pencernaan</p>\r\n', 1, '17052024023728.jpg', 'poli'),
(4, '0b02978d639315d1a8a9a7e225ac646d', 'Selamat Hari Raya Waisak! Semoga kedamaian dan kebijaksanaan selalu menyertai langkah-langkah kita', '24/05/2024', '2024-05-24 06:55:54', '<p>Rumah Sakit Kartini Kalirejo Lampung Tengah dengan ini mengucapkan Selamat Hari Raya Waisak kepada seluruh umat Buddha yang merayakannya. Semoga kedamaian dan kebijaksanaan senantiasa menyertai langkah-langkah kita semua.<br />\r\nHari Raya Waisak merupakan perayaan penting dalam agama Buddha yang diperingati untuk memperingati kelahiran, pencerahan, dan Parinirvana Sang Buddha Gautama. Di tengah kesibukan kita, perayaan ini mengingatkan kita akan pentingnya kedamaian batin dan kebijaksanaan dalam menjalani kehidupan.<br />\r\nRumah Sakit Kartini Kalirejo Lampung Tengah berharap bahwa semangat kebijaksanaan dan kedamaian yang terpancar dari perayaan Hari Raya Waisak akan menginspirasi kita semua untuk menjalani hidup dengan penuh kasih sayang, pengertian, dan toleransi.<br />\r\nSemoga kebahagiaan dan kedamaian senantiasa menghiasi hati kita semua. Selamat Hari Raya Waisak!</p>\r\n', 4, '24052024113559.jpg', 'informasi'),
(5, '0c38361f5a3cf3be4ecb5cf5e709e36d', 'Edukasi Mengenai TBC Diluncurkan di Ruang Tunggu Poli Rumah Sakit Umum Kartini', '24/05/2024', '2024-05-24 06:55:56', '<p>Di era yang semakin terhubung seperti sekarang ini, edukasi kesehatan adalah kunci penting untuk mencegah penyakit menular. Dalam upaya untuk meningkatkan kesadaran masyarakat tentang Tuberkulosis (TBC), Rumah Sakit Umum Kartini diadakan program edukasi di ruang tunggu Poli. Program ini bertujuan untuk memberikan pengetahuan yang lebih baik tentang TBC kepada pasien dan pengunjung.</p>\r\n\r\n<p>TBC tetap menjadi masalah kesehatan masyarakat yang signifikan di banyak negara, termasuk di Indonesia. Meskipun telah ada kemajuan dalam diagnosis dan pengobatan, kesadaran akan penyakit ini tetap penting untuk mengurangi angka penularan dan meningkatkan akses ke perawatan.</p>\r\n\r\n<p>Dalam program edukasi ini, para pasien dan pengunjung RS Umum Kartini disuguhi dengan berbagai materi edukatif yang disajikan secara visual dan audio di ruang tunggu Poli. Mulai dari infografis yang mudah dipahami hingga video singkat yang menjelaskan tentang penyebab, gejala, diagnosis, dan pengobatan TBC, program ini dirancang untuk memberikan informasi yang komprehensif.</p>\r\n\r\n<p>Selain itu, tim medis dan konselor kesehatan hadir untuk memberikan penjelasan lebih lanjut dan menjawab pertanyaan yang mungkin timbul dari para pasien. Hal ini memberikan kesempatan bagi individu untuk mendapatkan pemahaman yang lebih baik tentang TBC dan bagaimana cara menghadapinya.</p>\r\n\r\n<p>&quot;Kami berkomitmen untuk tidak hanya menyediakan perawatan medis yang berkualitas, tetapi juga untuk meningkatkan kesadaran masyarakat tentang kesehatan,&quot; kata Dr. Anisa, Direktur Medis RS Umum Kartini. &quot;Program edukasi ini adalah langkah konkret kami dalam upaya pencegahan dan pengendalian TBC.&quot;</p>\r\n\r\n<p>Program edukasi mengenai TBC di ruang tunggu Poli RS Umum Kartini diharapkan dapat menjadi contoh bagi rumah sakit lainnya untuk memperluas upaya edukasi serupa. Dengan pengetahuan yang lebih baik tentang TBC, diharapkan akan terjadi peningkatan dalam deteksi dini, pengobatan yang lebih efektif, dan pada akhirnya, penurunan angka kasus TBC di masyarakat</p>\r\n', 2, '24052024014346.jpg', 'informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(100) DEFAULT NULL,
  `program` varchar(100) NOT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `warga_siswa` varchar(20) DEFAULT NULL,
  `foto` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(128) DEFAULT NULL,
  `id_jurusan` varchar(30) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `transportasi` varchar(128) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `no_ijazah` varchar(128) DEFAULT NULL,
  `no_shun` varchar(128) DEFAULT NULL,
  `no_ujian` varchar(128) DEFAULT NULL,
  `no_kip` varchar(30) DEFAULT NULL,
  `kip` varchar(256) DEFAULT NULL,
  `kk` text DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `ijazah` varchar(256) DEFAULT NULL,
  `akta` varchar(256) DEFAULT NULL,
  `status_upload` varchar(2) DEFAULT '0',
  `aktif` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT 0,
  `password` text DEFAULT NULL,
  `show_pass` varchar(100) DEFAULT NULL,
  `id_sesi` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`, `jenis`) VALUES
(2, 'Obat Terbaik Adalah Tubuh Anda', 'konsep yang menekankan kemampuan alami tubuh manusia untuk menyembuhkan dan memperbaiki dirinya sendiri. ', '17052024013525.jpg', 'slide'),
(3, 'Kesahatan Metal masa depan', 'Menjaga kesehatan bukan hanya soal hidup lebih lama, tetapi juga soal hidup lebih baik.', '17052024013621.jpg', 'slide');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `gambar`, `keterangan`) VALUES
(1, 'dr.kta', '24052024092233.jpg', 'das');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'RSU KARTINI', '(0729) 370028', 'RUMAH SAKIT UMUM KARTINI', 'rumahsakitkartini@yahoo.com', 'Jl. Kartini No.104, Kali Rejo, Kec. Kalirejo, Kabupaten Lampung Tengah, Lampung 34174', '<p>Rumah Sakit Kartini Lampung adalah salah satu fasilitas pelayanan kesehatan terkemuka di Provinsi Lampung, Indonesia. RS Kartini Lampung menyediakan layanan medis dan perawatan berkualitas tinggi dalam berbagai spesialisasi, termasuk layanan gawat darurat, bedah, kandungan, dan lainnya. Rumah sakit ini dikenal karena staf medisnya yang terampil dan terlatih serta fasilitas modern yang mendukung proses perawatan pasien. RS Kartini Lampung berkomitmen untuk memberikan pelayanan kesehatan yang holistik dan bermutu tinggi kepada masyarakat Lampung dan sekitarnya.</p>\r\n', '24052024101408.jpg', 'mardybest@gmail.com'),
(2, 're', '', 'MARDIYANTO', '19081989578978975', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png'),
(2, 'ad', 'rsukartini', '61cc0e405f4b518d264c089ac8b642ef', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
