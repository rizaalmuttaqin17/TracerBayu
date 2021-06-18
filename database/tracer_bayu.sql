-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 20.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_bayu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_kuisioner` int(10) UNSIGNED DEFAULT NULL,
  `id_kuisioner_pilihan` int(10) UNSIGNED DEFAULT NULL,
  `jawaban` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_user`, `id_kuisioner`, `id_kuisioner_pilihan`, `jawaban`, `created_at`) VALUES
(413, 3, 16, 153, '5', '2021-06-18 17:47:11'),
(414, 3, 16, 154, '4', '2021-06-18 17:47:11'),
(415, 3, 16, 155, '5', '2021-06-18 17:47:11'),
(416, 3, 16, 156, '5', '2021-06-18 17:47:11'),
(417, 3, 16, 157, '5', '2021-06-18 17:47:11'),
(418, 3, 16, 158, '5', '2021-06-18 17:47:11'),
(419, 3, 16, 159, '5', '2021-06-18 17:47:11'),
(420, 3, 16, 160, '3', '2021-06-18 17:47:11'),
(421, 3, 16, 161, '3', '2021-06-18 17:47:11'),
(422, 3, 16, 162, '4', '2021-06-18 17:47:11'),
(423, 3, 16, 163, '4', '2021-06-18 17:47:11'),
(424, 3, 16, 164, '4', '2021-06-18 17:47:11'),
(425, 3, 16, 165, '4', '2021-06-18 17:47:11'),
(426, 3, 16, 166, '4', '2021-06-18 17:47:11'),
(427, 3, 16, 167, '3', '2021-06-18 17:47:11'),
(428, 3, 16, 168, '4', '2021-06-18 17:47:11'),
(429, 3, 16, 169, '4', '2021-06-18 17:47:11'),
(430, 3, 16, 170, '4', '2021-06-18 17:47:11'),
(431, 3, 16, 171, '4', '2021-06-18 17:47:11'),
(432, 3, 16, 172, '4', '2021-06-18 17:47:11'),
(433, 3, 16, 173, '3', '2021-06-18 17:47:11'),
(434, 3, 16, 174, '4', '2021-06-18 17:47:11'),
(435, 3, 16, 175, '4', '2021-06-18 17:47:11'),
(436, 3, 16, 176, '4', '2021-06-18 17:47:11'),
(437, 3, 16, 177, '4', '2021-06-18 17:47:11'),
(438, 3, 16, 178, '3', '2021-06-18 17:47:11'),
(439, 3, 16, 179, '4', '2021-06-18 17:47:11'),
(440, 3, 16, 180, '4', '2021-06-18 17:47:11'),
(466, 3, 16, 178, '1', '2021-06-18 17:51:08'),
(467, 3, 16, 179, '1', '2021-06-18 17:51:08'),
(468, 3, 16, 180, '1', '2021-06-18 17:51:08'),
(493, 3, 16, 177, '1', '2021-06-18 17:51:41'),
(521, 3, 16, 177, '1', '2021-06-18 17:52:08'),
(549, 3, 16, 177, '1', '2021-06-18 17:52:27'),
(577, 3, 16, 177, '1', '2021-06-18 17:53:00'),
(581, 3, 16, 177, '1', '2021-06-18 17:53:29'),
(582, 3, 1, 1, '1', '2021-06-18 17:54:30'),
(583, 3, 2, 4, '4', '2021-06-18 17:54:32'),
(584, 3, 3, 19, '19', '2021-06-18 17:54:34'),
(585, 3, 4, 20, '1', '2021-06-18 17:54:36'),
(586, 3, 5, 21, '2', '2021-06-18 17:54:37'),
(587, 3, 6, 22, '3', '2021-06-18 17:54:39'),
(588, 3, 7, 24, '24', '2021-06-18 17:54:40'),
(590, 3, 8, 25, '25', '2021-06-18 17:55:35'),
(591, 3, 8, 26, '26', '2021-06-18 17:55:35'),
(592, 3, 8, 25, '25', '2021-06-18 17:55:37'),
(593, 3, 8, 26, '26', '2021-06-18 17:55:37'),
(594, 3, 9, 31, '31', '2021-06-18 17:55:39'),
(595, 3, 10, 39, '1231231awdawd', '2021-06-18 17:55:45'),
(596, 3, 10, 37, '1231231awdawd', '2021-06-18 17:55:50'),
(597, 3, 10, 39, '123123', '2021-06-18 17:56:30'),
(598, 3, 10, 36, '123123', '2021-06-18 17:56:35'),
(599, 3, 10, 37, '', '2021-06-18 17:56:40'),
(600, 3, 11, 66, '66', '2021-06-18 17:56:42'),
(601, 3, 12, 40, '1', '2021-06-18 17:56:46'),
(602, 3, 12, 41, '2', '2021-06-18 17:56:46'),
(603, 3, 12, 42, '3', '2021-06-18 17:56:46'),
(604, 3, 13, 43, '43', '2021-06-18 17:56:48'),
(605, 3, 14, 50, '50', '2021-06-18 17:56:50'),
(606, 3, 15, 52, '52', '2021-06-18 17:56:55'),
(607, 3, 15, 53, '53', '2021-06-18 17:56:55'),
(608, 3, 15, 54, '54', '2021-06-18 17:56:55'),
(609, 3, 15, 55, '55', '2021-06-18 17:56:55'),
(664, 3, 1, 1, '1', '2021-06-18 18:00:00'),
(665, 3, 2, 4, '4', '2021-06-18 18:00:01'),
(666, 3, 3, 19, '19', '2021-06-18 18:00:03'),
(667, 3, 4, 20, '1', '2021-06-18 18:00:04'),
(668, 3, 5, 21, '2', '2021-06-18 18:00:05'),
(669, 3, 6, 22, '3', '2021-06-18 18:00:06'),
(670, 3, 7, 24, '24', '2021-06-18 18:00:07'),
(671, 3, 8, 25, '25', '2021-06-18 18:00:08'),
(672, 3, 8, 26, '26', '2021-06-18 18:00:08'),
(673, 3, 9, 31, '31', '2021-06-18 18:00:09'),
(674, 3, 10, 37, '', '2021-06-18 18:00:10'),
(675, 3, 10, 39, '1231231awdawd', '2021-06-18 18:00:16'),
(676, 3, 10, 39, '1231231awdawd', '2021-06-18 18:00:19'),
(677, 3, 11, 66, '66', '2021-06-18 18:00:21'),
(678, 3, 12, 40, '1', '2021-06-18 18:00:22'),
(679, 3, 12, 41, '2', '2021-06-18 18:00:22'),
(680, 3, 12, 42, '3', '2021-06-18 18:00:22'),
(681, 3, 13, 43, '43', '2021-06-18 18:00:23'),
(682, 3, 14, 50, '50', '2021-06-18 18:00:24'),
(683, 3, 15, 52, '52', '2021-06-18 18:00:26'),
(684, 3, 15, 53, '53', '2021-06-18 18:00:26'),
(685, 3, 15, 54, '54', '2021-06-18 18:00:26'),
(686, 3, 15, 55, '55', '2021-06-18 18:00:26'),
(741, 3, 17, 181, '5', '2021-06-18 18:01:39'),
(742, 3, 17, 182, '4', '2021-06-18 18:01:39'),
(743, 3, 17, 183, '4', '2021-06-18 18:01:39'),
(744, 3, 17, 184, '4', '2021-06-18 18:01:39'),
(745, 3, 17, 185, '3', '2021-06-18 18:01:39'),
(746, 3, 17, 186, '5', '2021-06-18 18:01:39'),
(747, 3, 17, 187, '5', '2021-06-18 18:01:39'),
(748, 3, 17, 188, '4', '2021-06-18 18:01:39'),
(749, 3, 17, 189, '5', '2021-06-18 18:01:39'),
(750, 3, 17, 190, '1', '2021-06-18 18:01:39'),
(751, 3, 17, 191, '5', '2021-06-18 18:01:39'),
(752, 3, 17, 192, '5', '2021-06-18 18:01:39'),
(753, 3, 17, 193, '5', '2021-06-18 18:01:39'),
(754, 3, 17, 194, '5', '2021-06-18 18:01:39'),
(755, 3, 17, 195, '1', '2021-06-18 18:01:39'),
(756, 3, 17, 196, '1', '2021-06-18 18:01:39'),
(757, 3, 17, 197, '5', '2021-06-18 18:01:39'),
(758, 3, 17, 198, '5', '2021-06-18 18:01:39'),
(759, 3, 17, 199, '5', '2021-06-18 18:01:39'),
(760, 3, 17, 201, '5', '2021-06-18 18:01:39'),
(761, 3, 17, 202, '5', '2021-06-18 18:01:39'),
(762, 3, 17, 203, '5', '2021-06-18 18:01:39'),
(763, 3, 17, 204, '5', '2021-06-18 18:01:39'),
(764, 3, 17, 205, '5', '2021-06-18 18:01:39'),
(765, 3, 17, 206, '5', '2021-06-18 18:01:39'),
(766, 3, 17, 207, '5', '2021-06-18 18:01:39'),
(767, 3, 17, 208, '5', '2021-06-18 18:01:39'),
(768, 1, 1, 1, '1', '2021-06-18 18:06:16'),
(769, 1, 2, 4, '4', '2021-06-18 18:06:18'),
(770, 1, 3, 18, '18', '2021-06-18 18:06:19'),
(771, 1, 2, 4, '4', '2021-06-18 18:06:22'),
(772, 1, 3, 18, '18', '2021-06-18 18:06:23'),
(773, 1, 4, 20, '12312313', '2021-06-18 18:06:25'),
(774, 1, 5, 21, '3123123123', '2021-06-18 18:06:27'),
(775, 1, 6, 22, '13123123', '2021-06-18 18:06:28'),
(776, 3, 1, 1, '1', '2021-06-18 18:06:33'),
(777, 3, 2, 4, '4', '2021-06-18 18:06:35'),
(778, 3, 3, 19, '19', '2021-06-18 18:06:37'),
(779, 3, 4, 20, '1', '2021-06-18 18:06:37'),
(780, 3, 2, 16, '16', '2021-06-18 18:06:42'),
(781, 3, 1, 1, '1', '2021-06-18 18:06:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan_prodi`
--

CREATE TABLE `jurusan_prodi` (
  `id` int(11) NOT NULL,
  `jurusan_prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jurusan_prodi`
--

INSERT INTO `jurusan_prodi` (`id`, `jurusan_prodi`) VALUES
(1, 'PS. Pengelolaan Hutan (PH)'),
(2, 'PS. Pengelohan Hasil Hutan (PH)'),
(3, 'PS. Budidaya Tanaman Perkebunan (BTP)'),
(4, 'PS. Teknologi Perkebunan (THP)'),
(5, 'PS. Pengelolaan Lingkunan (PL)'),
(6, 'PS. Teknologi Geomatika (TG)'),
(7, 'PS. Pengelolaan Perkebunan (PP)'),
(8, 'PS. Teknologui Rekayasa Perangkat Lunak (TRPL)'),
(9, 'PS. Rekayasa Kayu (RK)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `pertanyaan`) VALUES
(1, 'Kapan anda mulai mencari pekerjaan?Mohon pekerjaan sambilan tidak dimasukkan'),
(2, 'Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu'),
(3, 'Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?'),
(4, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?'),
(5, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?'),
(6, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?'),
(7, 'Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?'),
(8, 'Bagaimana anda menggambarkan situasi anda saat ini? Jawaban bisa lebih dari satu'),
(9, 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?'),
(10, 'Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?'),
(11, 'Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)'),
(12, 'Kira-kira berapa pendapatan anda setiap bulannya?'),
(13, 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?'),
(14, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?'),
(15, 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu'),
(16, 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?'),
(17, 'Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner_pilihan`
--

CREATE TABLE `kuisioner_pilihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kuisioner` int(10) UNSIGNED DEFAULT NULL,
  `type_pilihan` enum('Pilih','Isi','Rating','PilihIsi','PilihBanyak') DEFAULT 'Pilih',
  `pilihan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kuisioner_pilihan`
--

INSERT INTO `kuisioner_pilihan` (`id`, `id_kuisioner`, `type_pilihan`, `pilihan`) VALUES
(1, 1, 'Pilih', 'Kira-kira bulan sebelum lulus '),
(2, 1, 'Pilih', 'Kira-kira bulan sesudah lulus '),
(3, 1, 'Pilih', 'Saya tidak mencari kerja '),
(4, 2, 'Pilih', 'Melalui iklan di koran/majalah, brosur'),
(5, 2, 'Pilih', 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada'),
(6, 2, 'Pilih', 'Pergi ke bursa/pameran kerja'),
(7, 2, 'Pilih', 'Dihubungi oleh perusahaan'),
(8, 2, 'Pilih', 'Menghubungi Kemenakertrans'),
(9, 2, 'Pilih', 'Menghubungi agen tenaga kerja komersial/swasta '),
(10, 2, 'Pilih', 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas'),
(11, 2, 'Pilih', 'Menghubungi kantor kemahasiswaan/hubungan alumni'),
(12, 2, 'Pilih', 'Membangun jejaring (network) sejak masih kuliah'),
(13, 2, 'Pilih', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.) '),
(14, 2, 'Pilih', 'Membangun bisnis sendiri'),
(15, 2, 'Pilih', 'Melalui penempatan kerja atau magang'),
(16, 2, 'Pilih', 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah '),
(17, 2, 'Pilih', 'Lainnya'),
(18, 3, 'Pilih', 'Kira-kira  bulan sebelum lulus ujian'),
(19, 3, 'Pilih', 'Kira-kira  bulan setelah lulus ujian'),
(20, 4, 'Isi', NULL),
(21, 5, 'Isi', NULL),
(22, 6, 'Isi', NULL),
(23, 7, 'Pilih', 'Ya'),
(24, 7, 'Pilih', 'Tidak'),
(25, 8, 'PilihBanyak', 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana'),
(26, 8, 'PilihBanyak', 'Saya menikah'),
(27, 8, 'PilihBanyak', 'Saya sibuk dengan keluarga dan anak-anak'),
(28, 8, 'PilihBanyak', 'Saya sekarang sedang mencari pekerjaan'),
(29, 8, 'PilihBanyak', 'Lainnya'),
(30, 9, 'Pilih', 'Tidak'),
(31, 9, 'Pilih', 'Tidak, tapi saya sedang menunggu hasil lamaran kerja'),
(32, 9, 'Pilih', ' Ya, saya akan mulai bekerja dalam 2 minggu ke depan'),
(33, 9, 'Pilih', ' Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan'),
(34, 9, 'Pilih', ' Lainnya'),
(35, 10, 'Pilih', ' Instansi pemerintah (termasuk BUMN)'),
(36, 10, 'Pilih', 'Organisasi non-profit/Lembaga Swadaya Masyarakat'),
(37, 10, 'Pilih', 'Perusahaan swasta'),
(38, 10, 'Pilih', 'Wiraswasta/perusahaan sendiri'),
(39, 10, 'PilihIsi', 'Lainnya, tuliskan:'),
(40, 12, 'Isi', 'Dari Pekerjaan Utama'),
(41, 12, 'Isi', 'Dari Lembur dan Tips'),
(42, 12, 'Isi', 'Dari Pekerjaan Lainnya'),
(43, 13, 'Pilih', ' Sangat Erat'),
(44, 13, 'Pilih', 'Erat'),
(45, 13, 'Pilih', 'Cukup Erat'),
(46, 13, 'Pilih', 'Kurang Erat'),
(47, 13, 'Pilih', 'Tidak Sama Sekali '),
(48, 14, 'Pilih', 'Setingkat Lebih Tinggi'),
(49, 14, 'Pilih', 'Tingkat yang Sama'),
(50, 14, 'Pilih', 'Setingkat Lebih Rendah'),
(51, 14, 'Pilih', 'Tidak Perlu Pendidikan Tinggi'),
(52, 15, 'PilihBanyak', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.'),
(53, 15, 'PilihBanyak', 'Saya belum mendapatkan pekerjaan yang lebih sesuai.'),
(54, 15, 'PilihBanyak', 'Di pekerjaan ini saya memeroleh prospek karir yang baik. '),
(55, 15, 'PilihBanyak', ' Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.'),
(56, 15, 'PilihBanyak', 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.'),
(57, 15, 'PilihBanyak', 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. '),
(58, 15, 'PilihBanyak', 'Pekerjaan saya saat ini lebih aman/terjamin/secure'),
(59, 15, 'PilihBanyak', 'Pekerjaan saya saat ini lebih menarik'),
(60, 15, 'PilihBanyak', ' Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.'),
(61, 15, 'PilihBanyak', 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.'),
(62, 15, 'PilihBanyak', 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.'),
(63, 15, 'PilihBanyak', 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.'),
(64, 15, 'PilihBanyak', 'Lainnya'),
(65, 11, 'Pilih', 'Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu'),
(66, 11, 'Pilih', '\r\nKehutanan dan penebangan kayu \r\n'),
(67, 11, 'Pilih', '\r\nPerikanan  \r\n'),
(68, 11, 'Pilih', '\r\nPertambangan batu bara dan lignit  \r\n'),
(69, 11, 'Pilih', '\r\nPertambangan minyak bumi dan gas alam dan panas bumi\r\n'),
(70, 11, 'Pilih', '\r\nPertambangan bijih logam  \r\n'),
(71, 11, 'Pilih', '\r\nPertambangan dan penggalian lainnya \r\n'),
(72, 11, 'Pilih', '\r\nJasa pertambangan \r\n'),
(73, 11, 'Pilih', '\r\nIndustri makanan  \r\n'),
(74, 11, 'Pilih', '\r\nIndustri minuman  \r\n'),
(75, 11, 'Pilih', '\r\nIndustri pengolahan tembakau \r\n'),
(76, 11, 'Pilih', '\r\nIndustri tekstil  \r\n'),
(77, 11, 'Pilih', '\r\nIndustri pakaian jadi \r\n'),
(78, 11, 'Pilih', '\r\nIndustri kulit, barang dari kulit dan alas kaki \r\n'),
(79, 11, 'Pilih', '\r\nIndustri kayu, barang dari kayu dan gabus (tidak termasuk furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya \r\n'),
(80, 11, 'Pilih', '\r\nIndustri kertas dan barang dari kertas \r\n'),
(81, 11, 'Pilih', '\r\nIndustri pencetakan dan reproduksi media rekaman\r\n'),
(82, 11, 'Pilih', '\r\nIndustri produk dari batu bara dan pengilangan minyak bumi\r\n'),
(83, 11, 'Pilih', '\r\nIndustri bahan kimia dan barang dari bahan kimia  \r\n'),
(84, 11, 'Pilih', '\r\nIndustri farmasi, produk obat kimia dan obat tradisional  \r\n'),
(85, 11, 'Pilih', '\r\nIndustri karet, barang dari karet dan plastik  \r\n'),
(86, 11, 'Pilih', '\r\nIndustri barang galian bukan logam \r\n'),
(87, 11, 'Pilih', '\r\nIndustri logam dasar\r\n'),
(88, 11, 'Pilih', '\r\n Industri barang logam, bukan mesin dan peralatannya \r\n'),
(89, 11, 'Pilih', '\r\nIndustri komputer, barang elektronik dan optik\r\n'),
(90, 11, 'Pilih', '\r\nIndustri peralatan listrik\r\n'),
(91, 11, 'Pilih', '\r\nIndustri mesin dan perlengkapan ytdl\r\n'),
(92, 11, 'Pilih', '\r\nIndustri kendaraan bermotor, trailer dan semi trailer\r\n'),
(93, 11, 'Pilih', '\r\nIndustri alat angkutan lainnya\r\n'),
(94, 11, 'Pilih', '\r\nIndustri furnitur\r\n'),
(95, 11, 'Pilih', '\r\nIndustri pengolahan lainnya\r\n'),
(96, 11, 'Pilih', '\r\nJasa reparasi dan pemasangan mesin dan peralatan \r\n'),
(97, 11, 'Pilih', '\r\nPengadaan listrik, gas, uap/air panas dan udara dingin\r\n'),
(98, 11, 'Pilih', '\r\nPengadaan air\r\n'),
(99, 11, 'Pilih', '\r\nPengolahan limbah\r\n'),
(100, 11, 'Pilih', '\r\nPengolahan sampah dan daur ulang\r\n'),
(101, 11, 'Pilih', '\r\nJasa pembersihan dan pengelolaan sampah lainnya\r\n'),
(102, 11, 'Pilih', '\r\nKonstruksi gedung \r\n'),
(103, 11, 'Pilih', '\r\nKonstruksi bangunan sipil \r\n'),
(104, 11, 'Pilih', '\r\nKonstruksi khusus\r\n'),
(105, 11, 'Pilih', '\r\nPerdagangan, reparasi dan perawatan mobil dan sepeda motor\r\n'),
(106, 11, 'Pilih', '\r\nPerdagangan besar, bukan mobil dan sepeda motor\r\n'),
(107, 11, 'Pilih', '\r\nPerdagangan eceran, bukan mobil dan motor\r\n'),
(108, 11, 'Pilih', '\r\nAngkutan darat dan angkutan melalui saluran pipa \r\n'),
(109, 11, 'Pilih', '\r\nAngkutan Air\r\n'),
(110, 11, 'Pilih', '\r\nAngkutan udara\r\n'),
(111, 11, 'Pilih', '\r\nPergudangan dan jasa penunjang angkutan\r\n'),
(112, 11, 'Pilih', '\r\nPos dan kurir\r\n'),
(113, 11, 'Pilih', '\r\nPenyediaan akomodasi\r\n'),
(114, 11, 'Pilih', '\r\nPenyediaan makanan dan minuman \r\n'),
(115, 11, 'Pilih', '\r\nPenerbitan \r\n'),
(116, 11, 'Pilih', '\r\nProduksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik \r\n'),
(117, 11, 'Pilih', '\r\nPenyiaran dan pemrograman \r\n'),
(118, 11, 'Pilih', '\r\nTelekomunikasi \r\n'),
(119, 11, 'Pilih', '\r\nKegiatan pemrograman, konsultasi komputer dan kegiatan yang berhubungan dengan itu \r\n'),
(120, 11, 'Pilih', '\r\nKegiatan jasa informasi \r\n'),
(121, 11, 'Pilih', '\r\nJasa keuangan, bukan asuransi dan dana pensiun \r\n'),
(122, 11, 'Pilih', '\r\nAsuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib \r\n'),
(123, 11, 'Pilih', '\r\nJasa penunjang jasa keuangan, asuransi dan dana pensiun\r\n'),
(124, 11, 'Pilih', '\r\nReal estat \r\n'),
(125, 11, 'Pilih', '\r\nJasa hukum dan akuntansi \r\n'),
(126, 11, 'Pilih', '\r\nKegiatan kantor pusat dan konsultasi manajemen \r\n'),
(127, 11, 'Pilih', '\r\nJasa arsitektur dan teknik sipil; analisis dan uji teknis \r\n'),
(128, 11, 'Pilih', '\r\nPenelitian dan pengembangan ilmu pengetahuan \r\n'),
(129, 11, 'Pilih', '\r\nPeriklanan dan penelitian pasar \r\n'),
(130, 11, 'Pilih', '\r\nJasa profesional, ilmiah dan teknis lainnya \r\n'),
(131, 11, 'Pilih', '\r\nJasa kesehatan hewan\r\n'),
(132, 11, 'Pilih', '\r\nJasa persewaan dan sewa guna usaha tanpa hak opsi \r\n'),
(133, 11, 'Pilih', '\r\nJasa ketenagakerjaan \r\n'),
(134, 11, 'Pilih', '\r\nJasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya\r\n'),
(135, 11, 'Pilih', '\r\nJasa keamanan dan penyelidikan \r\n'),
(136, 11, 'Pilih', '\r\nJasa untuk gedung dan pertamanan \r\n'),
(137, 11, 'Pilih', '\r\nJasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya\r\n'),
(138, 11, 'Pilih', '\r\nAdministrasi pemerintahan, pertahanan dan jaminan sosial wajib\r\n'),
(139, 11, 'Pilih', '\r\nJasa pendidikan \r\n'),
(140, 11, 'Pilih', '\r\nJasa kesehatan manusia \r\n'),
(141, 11, 'Pilih', '\r\nJasa kegiatan sosial di dalam panti \r\n'),
(142, 11, 'Pilih', '\r\nJasa kegiatan sosial di luar panti\r\n'),
(143, 11, 'Pilih', '\r\nKegiatan hiburan, kesenian dan kreativitas\r\n'),
(144, 11, 'Pilih', '\r\nPerpustakaan, arsip, museum dan kegiatan kebudayaan lainnya\r\n'),
(145, 11, 'Pilih', '\r\nKegiatan perjudian dan pertaruhan \r\n'),
(146, 11, 'Pilih', '\r\nKegiatan olahraga dan rekreasi lainnya \r\n'),
(147, 11, 'Pilih', '\r\nKegiatan keanggotaan organisasi\r\n'),
(148, 11, 'Pilih', '\r\nJasa reparasi komputer dan barang keperluan pribadi dan perlengkapan rumah tangga \r\n'),
(149, 11, 'Pilih', '\r\nJasa perorangan lainnya \r\n'),
(150, 11, 'Pilih', '\r\nJasa perorangan yang melayani rumah tangga \r\n'),
(151, 11, 'Pilih', '\r\nKegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan \r\n'),
(152, 11, 'Pilih', '\r\nKegiatan badan internasional dan badan ekstra internasional lainnya \r\n'),
(153, 16, 'Rating', '\r\nPengetahuan di bidang atau disiplin ilmu anda\r\n'),
(154, 16, 'Rating', '\r\nPengetahuan umum\r\n'),
(155, 16, 'Rating', '\r\nBahasa Inggris\r\n'),
(156, 16, 'Rating', '\r\nKetrampilan internet \r\n'),
(157, 16, 'Rating', '\r\nKetrampilan komputer\r\n'),
(158, 16, 'Rating', '\r\nBerpikir kritis\r\n'),
(159, 16, 'Rating', '\r\nKetrampilan riset\r\n'),
(160, 16, 'Rating', '\r\nKemampuan belajar\r\n'),
(161, 16, 'Rating', '\r\nKemampuan berkomunikasi \r\n'),
(162, 16, 'Rating', '\r\nBekerja di bawah tekanan\r\n'),
(163, 16, 'Rating', '\r\nManajemen waktu\r\n'),
(164, 16, 'Rating', '\r\nBekerja secara mandiri\r\n'),
(165, 16, 'Rating', '\r\nBekerja dalam tim/bekerjasama dengan orang lain\r\n'),
(166, 16, 'Rating', '\r\nKemampuan dalam memecahkan masalah\r\n'),
(167, 16, 'Rating', '\r\nNegosiasi \r\n'),
(168, 16, 'Rating', '\r\nKemampuan analisis\r\n'),
(169, 16, 'Rating', '\r\nToleransi \r\n'),
(170, 16, 'Rating', '\r\nKemampuan adaptasi\r\n'),
(171, 16, 'Rating', '\r\nLoyalitas\r\n'),
(172, 16, 'Rating', '\r\nIntegritas \r\n'),
(173, 16, 'Rating', '\r\nBekerja dengan orang yang berbeda budaya maupun latar belakang\r\n'),
(174, 16, 'Rating', '\r\nKepemimpinan\r\n'),
(175, 16, 'Rating', '\r\nKemampuan dalam memegang tanggungjawab\r\n'),
(176, 16, 'Rating', '\r\nInisiatif \r\n'),
(177, 16, 'Rating', '\r\nManajemen proyek/program\r\n'),
(178, 16, 'Rating', '\r\nKemampuan untuk memresentasikan ide/produk/laporan\r\n'),
(179, 16, 'Rating', '\r\nKemampuan dalam menulis laporan, memo dan dokumen\r\n'),
(180, 16, 'Rating', '\r\nKemampuan untuk terus belajar sepanjang hayat\r\n'),
(181, 17, 'Rating', '\r\nPengetahuan di bidang atau disiplin ilmu anda\r\n'),
(182, 17, 'Rating', '\r\nPengetahuan di luar bidang atau disiplin ilmu anda\r\n'),
(183, 17, 'Rating', '\r\nPengetahuan umum\r\n'),
(184, 17, 'Rating', '\r\nKetrampilan internet\r\n'),
(185, 17, 'Rating', '\r\nKetrampilan komputer\r\n'),
(186, 17, 'Rating', '\r\nBerpikir kritis\r\n'),
(187, 17, 'Rating', '\r\nKetrampilan riset \r\n'),
(188, 17, 'Rating', '\r\nKemampuan belajar\r\n'),
(189, 17, 'Rating', '\r\nKemampuan berkomunikasi\r\n'),
(190, 17, 'Rating', '\r\nBekerja di bawah tekanan \r\n'),
(191, 17, 'Rating', '\r\nManajemen waktu\r\n'),
(192, 17, 'Rating', '\r\nBekerja secara mandiri\r\n'),
(193, 17, 'Rating', '\r\nBekerja dalam tim/bekerjasama dengan orang lain\r\n'),
(194, 17, 'Rating', '\r\nKemampuan dalam memecahkan masalah\r\n'),
(195, 17, 'Rating', '\r\nNegosiasi \r\n'),
(196, 17, 'Rating', '\r\nKemampuan analisis\r\n'),
(197, 17, 'Rating', '\r\nToleransi \r\n'),
(198, 17, 'Rating', '\r\nKemampuan adaptasi\r\n'),
(199, 17, 'Rating', '\r\nLoyalitas\r\n'),
(201, 17, 'Rating', '\r\nBekerja dengan orang yang berbeda budaya maupun latar belakang\r\n'),
(202, 17, 'Rating', '\r\nKepemimpinan \r\n'),
(203, 17, 'Rating', '\r\nKemampuan dalam memegang tanggungjawab\r\n'),
(204, 17, 'Rating', '\r\nInisiatif \r\n'),
(205, 17, 'Rating', '\r\nManajemen proyek/program\r\n'),
(206, 17, 'Rating', '\r\nKemampuan untuk memresentasikan ide/produk/laporan\r\n'),
(207, 17, 'Rating', '\r\nKemampuan dalam menulis laporan, memo dan dokumen\r\n'),
(208, 17, 'Rating', '\r\nKemampuan untuk terus belajar sepanjang hayat\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(150) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'none.png',
  `alamat` text DEFAULT NULL,
  `perguruan_tinggi` varchar(255) DEFAULT NULL,
  `id_jurusan_prodi` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('Admin','User') DEFAULT 'User',
  `data_diri` enum('Lengkap','Belum Lengkap') DEFAULT 'Belum Lengkap',
  `status_pengisian` enum('Sudah','Belum') DEFAULT 'Belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nim`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `foto`, `alamat`, `perguruan_tinggi`, `id_jurusan_prodi`, `email`, `password`, `role`, `data_diri`, `status_pengisian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eko Pujianto', 'H161600482', 'Samarinda', '2021-06-04', '085828949395', 'collage (2).jpg', 'awdawd', NULL, 5, 'ekopujianto48@gmail.com', 'ca9905f316c6dade9b58ff3e4400e743', 'User', 'Lengkap', 'Sudah', NULL, NULL, NULL),
(2, 'Indah', NULL, NULL, NULL, NULL, 'none.png', NULL, NULL, NULL, 'indah@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', 'User', 'Lengkap', 'Belum', NULL, NULL, NULL),
(3, 'Eko Pujiantooo', 'H161600482', 'Samarinda', '2021-06-04', '085828949395', 'photo_2020-12-20_21-12-55 (2)-removebg-preview (2).jpg', 'awdawd', NULL, 8, 'eko@gmail.com', 'ca9905f316c6dade9b58ff3e4400e743', 'User', 'Lengkap', 'Sudah', NULL, NULL, NULL),
(4, 'Tes1', NULL, NULL, NULL, NULL, 'none.png', NULL, NULL, NULL, 'tes@gmail.com', 'ca9905f316c6dade9b58ff3e4400e743', 'User', 'Belum Lengkap', 'Belum', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jawaban_user1_idx` (`id_user`),
  ADD KEY `fk_jawaban_jawaban_pilihan1_idx` (`id_kuisioner_pilihan`),
  ADD KEY `FK_jawaban_kuisioner` (`id_kuisioner`);

--
-- Indeks untuk tabel `jurusan_prodi`
--
ALTER TABLE `jurusan_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisioner_pilihan`
--
ALTER TABLE `kuisioner_pilihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jawaban_pilihan_kuisioner_idx` (`id_kuisioner`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_jurusan_prodi` (`id_jurusan_prodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=782;

--
-- AUTO_INCREMENT untuk tabel `jurusan_prodi`
--
ALTER TABLE `jurusan_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kuisioner_pilihan`
--
ALTER TABLE `kuisioner_pilihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `FK_jawaban_kuisioner` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuisioner` (`id`),
  ADD CONSTRAINT `FK_jawaban_kuisioner_pilihan` FOREIGN KEY (`id_kuisioner_pilihan`) REFERENCES `kuisioner_pilihan` (`id`),
  ADD CONSTRAINT `fk_jawaban_user1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kuisioner_pilihan`
--
ALTER TABLE `kuisioner_pilihan`
  ADD CONSTRAINT `fk_jawaban_pilihan_kuisioner` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuisioner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_jurusan_prodi` FOREIGN KEY (`id_jurusan_prodi`) REFERENCES `jurusan_prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
