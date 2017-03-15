-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 07:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `tempat` varchar(64) NOT NULL,
  `waktu` datetime NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `slug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama`, `url`, `tempat`, `waktu`, `penyelenggara`, `isi`, `slug`) VALUES
(2, 'Agenda', 'http://www.pens.ac.id/', 'PENS', '2016-11-17 06:33:11', 'Mahasiswa PENS', '<p>...........</p>', 'agenda'),
(3, 'coba post agenda', 'http://localhost:8080/depanel/agenda', 'pens', '2016-11-23 16:27:51', 'Mahasiswa PENS', '<p>ini untuk posting agenda</p>', 'coba-post-agenda');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `judul` varchar(128) NOT NULL,
  `id` int(1) NOT NULL,
  `url` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `posisi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`judul`, `id`, `url`, `gambar`, `keterangan`, `posisi`) VALUES
('banner (tes)r', 4, 'http://localhost:8080/phpmyadmin/', 'mantab.png', '<p>gambar banner</p>', 1),
('cobak', 5, 'http://localhost:8080/depanel/banner', 'images.jpg', '<p>123</p>', 1),
('tes', 7, 'http://www.pens.ac.id/', 'Hydrangeas.jpg', '<p>banner</p>', 1),
('coba posting banner', 8, 'http://gametech.pens.ac.id/', '10403420_1416136095355349_7891134739849532333_n.jpg', 'tes', 0),
('percobaan input data banner', 9, '', 'Screenshot_24.png', '<p>lorem ipsum dolor sit amet</p>', 0),
('tes', 10, 'http://gametech.pens.ac.id/', 'P_20151222_195220.jpg', '<p><strong>tes</strong> tes <strong>tes</strong></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(3) NOT NULL,
  `nama_dp` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kadep` varchar(128) NOT NULL,
  `gambar_k` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama_dp`, `deskripsi`, `gambar`, `kadep`, `gambar_k`, `link`) VALUES
(28, 'Teknik Elektronika', '<p>Teknik Elektronika</p>', 'Logo_PENS.png', 'tes', 'Screenshot_6.png', 'teknik-elektronika'),
(29, 'Teknik Informatika dan Komputer', '<p>tes</p>', '0b94c2177400bb8f1641cfb53e971557.png', 'kadep', '0df32b5d160b3b17f5d8dc4b13bf0965.png', 'teknik-informatika-dan-komputer'),
(30, 'Teknik Mekanika dan Energy', '<p>tes</p>', '01.jpg', 'tes', '02.jpg', 'teknik-mekanika-dan-energy'),
(34, 'Teknik Multimedia Kreatif', '<p>multimedia dan game technology</p>', 'P_20160715_143859.jpg', 'Pak Basuki', 'P_20160718_115734.jpg', 'teknik-multimedia-kreatif');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(2) NOT NULL,
  `job` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job`) VALUES
(1, 'PENULIS'),
(2, 'EDITOR'),
(3, 'FOTOGRAFER');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(5) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_departemen` int(3) NOT NULL,
  `warna` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `url`, `deskripsi`, `id_departemen`, `warna`) VALUES
(20, 'Teknik Elektronika', 'http://elektronika.pens.ac.id/', '<p>Teknik Elektronika, Elka, Departemen Teknik Elektro</p>', 28, '#fcf158'),
(21, 'Teknik Telekomunikasi', 'http://telekomunikasi.pens.ac.id/', '<p>Teknik Telekomunikasi, Telkom, Departemen Teknik Elektro</p>', 28, '#17e83a'),
(22, 'Teknik Elektro Industri', 'http://elin.pens.ac.id/', '<p>Teknik Elektro Industri, Elin, Departemen Teknik Elektro Industri</p>', 28, '#f70000'),
(23, 'Teknik Informatika', 'http://it.pens.ac.id/', '<p>Teknik Informatika, IT, Departemen Teknik Informatika dan Komputer</p>', 29, '#0025f7'),
(24, 'Teknik Mekatronika', 'http://mekatronika.pens.ac.id/', '<p>Teknik Mekatronika, Meka, Departemen Mekanika dan Energy</p>', 30, '#ffa500'),
(26, 'Teknik Komputer', 'http://tekkom.pens.ac.id/', '<p>Teknik Komputer, Tekkom, Departemen Teknik Informatika dan Komputer</p>', 29, '#00d6f7'),
(27, 'Teknologi Multimedia Broadcasting', 'http://mmb.pens.ac.id/', '<p>Teknologi Multimedia Broadcasting, MMB, Departemen Multimedia Kreatif</p>', 34, '#ff00ff'),
(29, 'Sistem Pembangkitan Energy', 'http://energi.pens.ac.id/', '<p>Sistem Pembangkitan Energy, SPE, Departemen Mekanika dan Energy</p>', 30, '#f4a460'),
(30, 'Teknologi Game', 'http://gametech.pens.ac.id/', '<p>Game Technology, GT, Departemen Multimedia Kreatif</p>', 34, '#ff00ff');

-- --------------------------------------------------------

--
-- Table structure for table `kartun`
--

CREATE TABLE `kartun` (
  `judul` varchar(128) NOT NULL,
  `id` int(1) NOT NULL,
  `url` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `posisi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartun`
--

INSERT INTO `kartun` (`judul`, `id`, `url`, `gambar`, `keterangan`, `posisi`) VALUES
('ini adalah kartun pens', 7, 'http://www.pens.ac.id/', '20151129223354.png', '<p>tes <strong>tes</strong> coba</p>', 1),
('Tes Kartun PENS (edit)', 8, 'http://www.pens.ac.id/', 'Penguins.jpg', '<p>coba</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug`, `deskripsi`) VALUES
(2, 'Kegiatan Kampus', 'kegiatan-kampus', '<p>&nbsp;ini untuk kegiatan kampus</p>'),
(4, 'Kegiatan Kemahasiswa', 'kegiatan-kemahasiswaan', '<p>ini untuk kegiatan kemahasiswaan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(8) NOT NULL,
  `id_post` varchar(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsflash`
--

CREATE TABLE `newsflash` (
  `id` int(5) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `posisi` int(2) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsflash`
--

INSERT INTO `newsflash` (`id`, `judul`, `url`, `gambar`, `keterangan`, `posisi`, `tgl`) VALUES
(35, 'cobak', 'http://gametech.pens.ac.id/', '20151129223354.png', '<p><strong>tes</strong> coba</p>', 0, '2016-11-25 08:23:26'),
(36, 'tes (edit)', 'https://en.wikipedia.org/wiki/Herzog_Zwei', 'Lighthouse.jpg', '<p>kartun pens</p>', 1, '2016-11-25 08:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(8) NOT NULL,
  `judul_id` varchar(128) NOT NULL,
  `isi_id` text NOT NULL,
  `judul_en` varchar(128) NOT NULL,
  `isi_en` text NOT NULL,
  `tanggal` date NOT NULL,
  `url_id` varchar(128) NOT NULL,
  `url_en` varchar(128) NOT NULL,
  `gambar_url` varchar(128) NOT NULL,
  `gambar_keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `judul_id`, `isi_id`, `judul_en`, `isi_en`, `tanggal`, `url_id`, `url_en`, `gambar_url`, `gambar_keterangan`) VALUES
(2, 'cobak ', '<p>tes</p>', 'tes', '<p>tes</p>', '2016-11-24', 'cobak', 'tes', 'Chrysanthemum.jpg', '<p>tes</p>'),
(3, 'coba form page (edit)', '<p>coba form page</p>', 'coba form page', '<p>coba form page</p>', '2016-11-25', 'coba-form-page-edit', 'coba-form-page', 'Koala.jpg', '<p>coba form page</p>'),
(4, 'page (edit)', '<p>isi page</p>', 'page', '<p>isi page</p>', '2016-11-25', 'page-edit', 'page', 'Desert.jpg', '<p>ini gambar</p>'),
(5, 'page page page', '<p>page page page</p>', 'page page page', '<p>page page page</p>', '2016-12-11', 'page-page-page', 'page-page-page', 'Lighthouse.jpg', '<p>page page page</p>'),
(9, 'percobaan', '<p>percobaan</p>', 'try', '<p>try</p>', '2017-01-05', 'percobaan', 'try', '10403420_1416136095355349_7891134739849532333_n.jpg', '<p>tes</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `jabatan`, `nama`, `email`, `password`) VALUES
(1, 'Editor', 'alhamdulillah', 'editor@pens.ac.id', '4a132947923208b6399ff8ae2b7f15d0'),
(2, 'Penulis', 'editor', 'Tes2@pens.ac.id', 'pens.ac.id'),
(3, 'Fotografer', 'Tes3', 'Tes3@pens.ac.id', 'pens.ac.id'),
(4, 'Penulis', 'penulis', 'penulis@pens.ac.id', '25f9e794323b453885f5181f1b624d0b'),
(5, 'Fotografer', 'Potograper', 'potograper@pens.ac.id', '123'),
(6, 'Penulis', 'editor satu', 'editor@pens.ac.id', 'editor'),
(7, 'Fotografer', 'fotograper', 'editor3@pens.ac.id', '1'),
(8, 'Editor', 'Hamba Allah', 'akhirat@pens.ac.id', '927b67a2488cee0c1ff61a0b43695f30'),
(9, 'Editor', 'imam', 'imam@pens.ac.id', 'eaccb8ea6090a40a98aa28c071810371'),
(10, 'Editor', 'makmum', 'makmum@pens.ac.id', 'd1652854004deea0c780d18d1451ebfb'),
(11, 'Editor', 'makmum2', 'makmum2@pens.ac.id', 'e3927076338a374d6584844878b22097'),
(12, 'Editor', 'rahmat', 'rahmat@pens.ac.id', 'af2a4c9d4c4956ec9d6ba62213eed568');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(8) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `judul_id` varchar(128) NOT NULL,
  `isi_id` text NOT NULL,
  `judul_en` varchar(128) NOT NULL,
  `isi_en` text NOT NULL,
  `featured` int(1) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_penulis` varchar(128) NOT NULL,
  `id_editor` varchar(128) NOT NULL,
  `url_id` varchar(128) NOT NULL,
  `url_en` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar_keterangan` varchar(256) NOT NULL,
  `id_fotografer` varchar(128) NOT NULL,
  `youtube` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_kategori`, `judul_id`, `isi_id`, `judul_en`, `isi_en`, `featured`, `tanggal`, `id_penulis`, `id_editor`, `url_id`, `url_en`, `gambar`, `gambar_keterangan`, `id_fotografer`, `youtube`) VALUES
(34, 2, 'coba postingan', '<p>coba postingan</p>', 'coba postingan', '<p>coba postingan inggris</p>', 0, '2016-12-11 00:53:38', 'penulis satu', 'editor', 'coba-postingan', 'coba-postingan', 'Hydrangeas.jpg', '<p>coba postingan</p>', 'Tes3', 'https://www.youtube.com/        '),
(35, 2, 'kegiatan mahasiswa (edit)', '<p>kegiatan mahasiswa</p>', 'kegiatan mahasiswa', '<p>kegiatan mahasiswa</p>', 1, '2016-12-13 02:13:42', 'alhamdulillah', 'editor', 'kegiatan-mahasiswa-edit', 'kegiatan-mahasiswa', '10330327_320546964776284_4653750909297841901_n.jpg', '<p>tes</p>', 'Tes3', 'https://www.youtube.com/ '),
(37, 4, 'ini adalah berita', '<p>berita</p>\r\n<p><img src="http://dl.hiapphere.com/data/icon/201409/HiAppHere_com_kov.theme.lumos.png" alt="" width="100" height="100" /></p>', 'inggris', '<p>inggris</p>', 0, '2016-12-14 01:41:38', 'alhamdulillah', 'editor', 'ini-adalah-berita', 'inggris', '10455867_320546868109627_5145855421508938942_n.jpg', '', 'Tes3', 'https://www.youtube.com/'),
(39, 2, 'tes', '<p>ini isi</p>', 'translate', '<p>translate</p>', 1, '2016-12-15 13:47:00', 'alhamdulillah', 'editor', 'tes', 'translate', '10411395_320546724776308_3150925878946839712_n.jpg', '<p>tes</p>', 'Tes3', 'https://www.youtube.com/'),
(40, 4, 'percobaan post pens', '<p>percobaan post pens</p>', 'percobaan post pens', '<p style="padding-left: 30px;">percobaan post pens</p>', 0, '2016-12-21 05:23:33', 'penulis', 'editor satu', 'percobaan-post-pens', 'percobaan-post-pens', '10411395_320546724776308_3150925878946839712_n.jpg', '<p>percobaan post pens</p>', 'fotograper', 'https://www.youtube.com/'),
(41, 2, 'pens post', '<p>percobaan post pens</p>', 'percobaan post pens', '<p>percobaan post pens</p>', 1, '2016-12-21 05:23:55', 'alhamdulillah', 'editor', 'pens-post', 'percobaan-post-pens', '', '<p>percobaan post pens</p>', 'Tes3', 'https://www.youtube.com/  '),
(42, 4, 'cobaa mari instal ulang', '<p>cobaa mari instal ulang</p>', 'cobaa mari instal ulang', '<p>cobaa mari instal ulang</p>', 1, '2016-12-22 21:54:20', 'penulis', 'editor satu', 'cobaa-mari-instal-ulang', 'cobaa-mari-instal-ulang', '10384453_320547021442945_5322277923220718657_n.jpg', '<p>cobaa mari instal ulang</p>', 'Potograper', 'youtube.com '),
(43, 4, 'coba posting pens post', '<p>coba posting pens post</p>', 'coba posting pens post', '<p>coba posting pens post</p>', 0, '2016-12-29 13:39:56', 'penulis', 'editor satu', 'coba-posting-pens-post', 'coba-posting-pens-post', 'Logo_PENS.png', '', 'Tes3', 'youtube.com'),
(44, 4, 'cobak posting berita', '<p>cobak posting berita</p>', 'cobak posting berita', '<p>cobak posting berita</p>', 0, '2016-12-30 13:26:46', 'alhamdulillah', 'editor', 'cobak-posting-berita', 'cobak-posting-berita', '10403420_1416136095355349_7891134739849532333_n.jpg', '<p>cobak posting berita</p>', 'Tes3', 'youtube.com'),
(45, 2, 'testing new form', '<p>testing new form</p>', 'testing new form', '<p>testing new form</p>', 1, '2017-01-05 15:56:49', 'editor', 'alhamdulillah', 'testing-new-form', 'testing-new-form', 'Screenshot_61.png', '<p>.....</p>', '', 'youtube.com '),
(46, 2, 'Percobaan Featured', '<p>Percobaan Featured</p>', 'Percobaan Featured', '<p>Percobaan Featured</p>', 1, '2017-01-07 04:49:52', 'penulis', 'makmum', 'percobaan-featured', 'percobaan-featured', 'FB_IMG_14638321363566564.jpg', '<p>.....</p>', '', ''),
(48, 2, 'no featured no image', '<p>no featured no image</p>', 'no featured no image', '<p>no featured no image</p>', 0, '2017-01-07 05:29:32', 'editor', 'alhamdulillah', 'no-featured-no-image', 'no-featured-no-image', '', '', '', ''),
(50, 2, 'new post', '<p><strong style="background-color: initial;"><em>EEPIS Online</em></strong> <em style="background-color: initial;">- </em><span style="background-color: initial;">Ujian Akhir Semester (UAS) merupakan salah satu kegiatan evaluasi hasil belajar dari sebuah institusi pendidikan. Evaluasi ini memberikan penilaian terhadap kemampuan peserta didik dalam menerima, memahami, dan menguasai studi sesuai dengan kurikulum yang telah ditetapkan. Sama seperti dengan institusi pendidikan lainnya, Politeknik Elektronika Negeri Surabaya (PENS) turut menggelar UAS yang dimulai Selasa (03/01). Peserta UAS sendiri merupakan mahasiswa PENS yang memiliki presentase kehadiran lebih dari 75%.</span></p>\r\n<p>Evaluasi yang rutin tiap semester ini terbagi menjadi tiga kloter. Kloter pertama untuk mahasiswa D3 yang berlangsung pukul 08.00-12.00 WIB, disusul mahasiswa D4 pada pukul 13.00 - 16.00 WIB, sedangkan dimalam harinya dilangsungkan UAS bagi mahasiswa program Lanjut Jenjang (LJ). Dalam pelaksanaan UAS kali ini, setiap harinya mengujikan rata-rata dua mata kuliah yang berbeda.</p>\r\n<p>Meskipun hanya berlangsung sampai Senin (09/01), untuk mempersiapkan ujian ini cukup menghabiskan waktu, tenaga dan pikiran. Banyak mahasiswa yang rela belajar hingga tengah malam. Pasalnya sebagian besar dosen memberikan poin UAS lebih besar, sehingga menjadikan evaluasi per semester ini kesempatan emas bagi mahasiswa untuk memaksimalkan nilai. Selain itu sebagian besar mahasiswa yang memaksimalkan belajarnya, memiliki tujuan agar tidak menjalani Ujian Perbaikan (UP). UP sendiri diadakan bagi mereka yang nilainya belum mencukupi standar nilai dan biasanya diselenggarakan satu minggu setelah UAS. &nbsp;</p>\r\n<p>Secara kasat mata tidak ada yang membedakan UAS ini dengan tahun sebelumnya. Namun sebenarnya terdapat sedikit perbedaan pada UAS kali ini. Evaluasi ini diselenggarakan tepat pasca libur tahun baru 2017. Waktu pelaksanaan tersebut memberikan keuntungan bagi mahasiswa. &ldquo;UAS kali ini persiapannya lebih matang, karena saat libur tahun baru bisa digunakan untuk belajar,&rdquo; ujar Arvianti Yulia Ma&rsquo;ulfa mahasiswa kelas 2 D4 Teknik Informatika.</p>', 'new post', '<p>new post</p>', 1, '2017-01-07 06:38:35', 'editor', 'alhamdulillah', 'new-post', 'new-post', '1453031532383.jpg', '<p>ini gambar</p>', '', '  '),
(51, 4, 'percobaan', '<p>tes tes</p>', 'ok', '<p>ok</p>', 0, '2017-01-07 10:41:27', 'penulis', 'Hamba Allah', 'percobaan', 'ok', '', '', '', ''),
(52, 2, 'Mahasiswa MMK Gelar Tasyakuran', '<p><strong><em>EEPIS Online&nbsp;</em></strong>&ndash; Selasa malam (27/12), mahasiswa Departemen Teknologi Multimedia Kreatif (MMK) telah mengikuti acara tasyakuran yang diselenggarakan di&nbsp;<em>hall</em>&nbsp;gedung D4 Politeknik Elektronika Negeri Surabaya (PENS). Acara kali ini digagas oleh tiga mahasiswa program studi Multimedia Broadcasting (MMB) yaitu Asmara Susanto, Muhammad Idris Setiawan dan Sony Gusti Baghtiar. Ketiganya menggelar tasyukuran sebagai wujud syukur atas prestasi yang telah mereka raih dalam bidang industri kreatif.</p>\r\n<p>Acara yang di mulai sekitar pukul 18.00 WIB ini dibuka dengan sambutan oleh Asmara Susanto selaku penggagas sekaligus penyelenggara acara. Tasyukuran dilanjutkan dengan sambutan yang disampaikan oleh Bayu Dwi Hartomo selaku Ketua Himpunan Mahasiswa Multimedia Broadcasting (HIMA MMB). Dalam sambutannya, mahasiswa yang akrab disapa Bayu ini mengajak mahasiswa yang hadir untuk menjadikan acara ini sebagai sarana mengungkapkan rasa syukur. &ldquo;Mari kita jadikan acara ini media bersyukur, mengakrabkan diri satu sama lain, dan mengharap berkah Tuhan Yang Maha Esa,&rdquo; tutur mahasiswa tingkat semester akhir ini.</p>\r\n<p>Tasyakuran ini digelar sebagai wujud rasa syukur atas prestasi yang diperoleh mahasiswa MMK. Prestasi ini lebih dikhususkan mengenai bisnis industri kreatif yang digagas beberapa mahasiswa MMK yakni&nbsp;<em>rekamin.id</em>&nbsp;yang baru-baru ini telah berhasil diluncurkan. Tidak hanya itu, acara ini juga dimaksudkan sebagai doa bersama untuk kebaikan dan kesuksesan seluruh mahasiswa MMK.</p>\r\n<p>Seusai sambutan, Ustad Faisol selaku penceramah menyampaikan kajian di tengah acara. Beliau menegaskan menyampaikan mengenai pentingnya mensyukuri nikmat yang telah diberikan Tuhan selama ini. Dengan selalu bersyukur, secara tidak langsung akan menambah berkat dan rezeki masing-masing orang. Usai penyampaian materi, acara ini dilanjutkan dengan doa bersama yang dipimpin langsung oleh Ustad Faisol.</p>\r\n<p>Acara ini ditutup dengan pemotongan empat buah tumpeng yang kemudian dilanjutkan dengan makan bersama. Harapannya setelah diadakan tasyakuran ini, dapat membawa berkat dan kelancaran bagi mahasiswa MMK, baik yang akan melaksanakan UAS maupun yang sedang menjalani Proyek Akhir. Di akhir acara Asmara Susanto juga berpesan agar mahasiswa MMK terus berprestasi dan menjadi mahasiswa seutuhnya yaitu pemuda yang haus akan karya.&nbsp;<strong>(mus/zya)</strong></p>', 'Lorem Ipsum Dolor Sit Amet', '<p><strong><em>EEPIS Online&nbsp;</em></strong>&ndash; Selasa malam (27/12), mahasiswa Departemen Teknologi Multimedia Kreatif (MMK) telah mengikuti acara tasyakuran yang diselenggarakan di&nbsp;<em>hall</em>&nbsp;gedung D4 Politeknik Elektronika Negeri Surabaya (PENS). Acara kali ini digagas oleh tiga mahasiswa program studi Multimedia Broadcasting (MMB) yaitu Asmara Susanto, Muhammad Idris Setiawan dan Sony Gusti Baghtiar. Ketiganya menggelar tasyukuran sebagai wujud syukur atas prestasi yang telah mereka raih dalam bidang industri kreatif.</p>\r\n<p>Acara yang di mulai sekitar pukul 18.00 WIB ini dibuka dengan sambutan oleh Asmara Susanto selaku penggagas sekaligus penyelenggara acara. Tasyukuran dilanjutkan dengan sambutan yang disampaikan oleh Bayu Dwi Hartomo selaku Ketua Himpunan Mahasiswa Multimedia Broadcasting (HIMA MMB). Dalam sambutannya, mahasiswa yang akrab disapa Bayu ini mengajak mahasiswa yang hadir untuk menjadikan acara ini sebagai sarana mengungkapkan rasa syukur. &ldquo;Mari kita jadikan acara ini media bersyukur, mengakrabkan diri satu sama lain, dan mengharap berkah Tuhan Yang Maha Esa,&rdquo; tutur mahasiswa tingkat semester akhir ini.</p>\r\n<p>Tasyakuran ini digelar sebagai wujud rasa syukur atas prestasi yang diperoleh mahasiswa MMK. Prestasi ini lebih dikhususkan mengenai bisnis industri kreatif yang digagas beberapa mahasiswa MMK yakni&nbsp;<em>rekamin.id</em>&nbsp;yang baru-baru ini telah berhasil diluncurkan. Tidak hanya itu, acara ini juga dimaksudkan sebagai doa bersama untuk kebaikan dan kesuksesan seluruh mahasiswa MMK.</p>\r\n<p>Seusai sambutan, Ustad Faisol selaku penceramah menyampaikan kajian di tengah acara. Beliau menegaskan menyampaikan mengenai pentingnya mensyukuri nikmat yang telah diberikan Tuhan selama ini. Dengan selalu bersyukur, secara tidak langsung akan menambah berkat dan rezeki masing-masing orang. Usai penyampaian materi, acara ini dilanjutkan dengan doa bersama yang dipimpin langsung oleh Ustad Faisol.</p>\r\n<p>Acara ini ditutup dengan pemotongan empat buah tumpeng yang kemudian dilanjutkan dengan makan bersama. Harapannya setelah diadakan tasyakuran ini, dapat membawa berkat dan kelancaran bagi mahasiswa MMK, baik yang akan melaksanakan UAS maupun yang sedang menjalani Proyek Akhir. Di akhir acara Asmara Susanto juga berpesan agar mahasiswa MMK terus berprestasi dan menjadi mahasiswa seutuhnya yaitu pemuda yang haus akan karya.&nbsp;<strong>(mus/zya)</strong></p>', 1, '2017-01-09 17:09:14', 'editor satu', 'alhamdulillah', 'mahasiswa-mmk-gelar-tasyakuran', 'lorem-ipsum-dolor-sit-amet', 'atm_ktp.jpg', '<p>ini adalah gambar</p>', '', ''),
(54, 2, 'Percobaan Featuredd', '<p>Percobaan Featured</p>', 'Percobaan Featured', '<p>Percobaan Featured</p>', 1, '2017-01-16 06:34:01', 'editor', 'makmum', 'percobaan-featuredd', 'percobaan-featured', '10330446_1509664679275977_494630134157031993_n.jpg', '<p>Percobaan Featured</p>', '', ''),
(55, 2, 'testing upload berita pens', '<p>testing</p>', 'testing', '<p>testing</p>', 0, '2017-01-25 13:28:33', 'penulis', 'makmum', 'testing-upload-berita-pens', 'testing', '', '<p>ok</p>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
  `no` int(32) NOT NULL,
  `img` varchar(128) NOT NULL,
  `ket` varchar(256) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_img`
--

INSERT INTO `tbl_img` (`no`, `img`, `ket`, `tgl`) VALUES
(1, 'images.jpg', 'coba', '2016-10-11 06:25:02'),
(2, '1.jpg', 'tes', '2016-10-11 06:28:07'),
(3, '1.jpg', 'tes', '2016-10-13 16:52:13'),
(4, '1.jpg', '', '2016-10-13 17:06:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartun`
--
ALTER TABLE `kartun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsflash`
--
ALTER TABLE `newsflash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url_id` (`url_id`);

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kartun`
--
ALTER TABLE `kartun`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsflash`
--
ALTER TABLE `newsflash`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `no` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
