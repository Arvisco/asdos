-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 08:12 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdos`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasilsawnormal`
--

CREATE TABLE `hasilsawnormal` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilsawscheffe`
--

CREATE TABLE `hasilsawscheffe` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilsmartnormal`
--

CREATE TABLE `hasilsmartnormal` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilsmartscheffe`
--

CREATE TABLE `hasilsmartscheffe` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilwpnormal`
--

CREATE TABLE `hasilwpnormal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilwpscheffe`
--

CREATE TABLE `hasilwpscheffe` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `pics` varchar(200) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `c2` int(5) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `pics`, `nama`, `nim`, `keterangan`, `c2`) VALUES
(1, 'IMG_20230212_205413_655 - Ilham Kind Ink.webp', 'ILHAM', 192569, 'Mahir dalam bidang elektronika dan juga bahasa pemograman java, Mengajarkan apa yang mereka belum mengerti, dan juga merespon latihan ataupun tugas yang telah di berikan, Mengajarkan mereka bagaimana caranya', 3),
(2, '0D4BF812-3F36-44C2-9F5D-43CBB13CC58C - Safira Maruapey.jpeg', 'Safira T Maruapey', 192556, 'Saya mahir dibidang web khususnya bahasa pemrograman php, Saya bertanggung jawab dalam menyelesaikan tugas saya sebagai asisten dosen dari awal hinga akhir dari jam mata kuliah. Saya membuka pintu lab', 2),
(3, '27575283-2412-4D64-9DBB-76D4F8D7C8EB - Nur Madinah.jpeg', 'Nur Madinah Yandriswan', 202282, 'Mahir dalam public speaking dan bersosialisasi, Tanggung jawab dalam  waktu dan pemberian nilai mahasiswan dikarenakan ada beberapa dosen yang menyerahkan penilaian tugas2 kepada asisten dosen,  Inisi', 3),
(4, '9E15C46E-BAE5-4A9B-90FE-1F3817949BC8 - Jamet Indo ASMR.jpeg', 'Muhammad Khaidir', 192445, 'Saya mahir di bidang coding, tapi agak susah untuk mengajar orang, Selama menjadi asdos, saya harus selalu lebih siap terlebih dahulu di banding dosen sebelum jam praktikum di mulai, Saya pernah membu', 4),
(5, 'itachi-uchiha-naruto-1 - Rhadi Indrawan.jpg', 'rhadi indrawan', 192467, 'Mahir web, tdk pernah alpa, biasa ditinggal sendiri di ruangan, sering bicara sama mahasiswa', 4),
(6, '4A64B9D5-25EE-4387-B0D6-C21561C8FB58 - Sabiq A.M.jpeg', 'Muhammad sabiq al mubaraq', 192539, 'Iya dibutuhkan , saya mahir di bidang analis, iya sangat dibutuhkan, hadir disetiap pertemuan salah satunya, memberikan arahan ke mahasiswa, saling sharing para saat kuliah.', 2),
(7, 'IMG_9434 - Ferdinand J. Anggu.JPG', 'Ferdinand Juandy Anggu', 192553, 'Saya tidak mahir apa apa cuman mengetahui dasar dasar dari matakuliah yang saya ambil dengan  tujuan bisa membagikan ilmu itu ke junior saya, Ada beberapa tugas yang di berikan oleh dosen dan saya ber', 3),
(8, 'DSC00056(3) - Alfian Ramadhan.JPG', 'Alfian Ramadhan', 192484, 'Mahir dalam segala bentuk perintah SQL, Tanggung Jawab saya yaitu tetap terus memberikan arahan kepada mahasiswa yang kebingungan atau kesulitan dalam mengerjakan soal praktikum, Membantu mahasiswa ya', 1),
(9, 'IMG-20220524-WA0014 - Judhistira Ooka Pratama.jpg', 'Judhistira Ooka Pratama ', 202249, 'Bisa pemrograman sedikit, sma dan tau buat website sma mobile sdkt, Bisa masuk asdos di jam 7.30, Ada gaji nya, Yaa bersosialisasi \r\n', 1),
(10, 'image - Ahmad Syaiful Yusuf.jpg', 'Ahmad Syaiful Yusuf', 192187, 'Bicara, Masuk di jadwal yang telah sya daftari, Menunggu depan ruangan, Komunikasi dengan dosen apabila berhalangan datang', 3),
(11, 'Dokumen dari Dimas - Dimas anugerah pratama.jpg', 'Dimas anugerah pratama', 212031, 'untuk menjadi seorang asisten dosen pada mata kuliah praktikum algoritma pemrograman tentunya diperlukan pemahaman yang baik terhadap materi yang akan diajarkan dan kemampuan komunikasi yang baik pula', 4),
(12, '20220122_204527 - muh ainul rahmat.jpg', 'Muh ainul rahmat', 192476, 'Melakukan praktek, Hadir dalam mata kuliah tersebut, Membantu dosen utama, Membuka ruang diskusi', 4),
(13, 'WhatsApp Image 2023-02-17 at 15.27.23.jpeg', 'Ade Ryan Alqadri', 192465, 'Algoritma, Mengajar yang kurang paham, Melihat situasi yg tidak tau, yaa diajar, Percaya diri dari dulu', 1),
(14, 'Profil - Muhammad Ardiansyah.png', 'Muhammad Ardiansyah', 192477, 'Mobile, Datang tepat waktu, Dapat memahami kesalahan, Dapat beradaptasi\r\n', 4),
(15, '20230203_032909 - awewew geo.jpg', 'Lora', 192375, 'Sangat cocok dan mahir , Saya sudah memiliki pengalaman dan banyak pelajaran, Tegas dan baik, Saling sapa', 4),
(16, 'IMG-20230121-WA0014 - Syiah.jpg', 'M. Fiqri Haikhar Anwar', 192310, 'Pemrograman , Ya, Syaa mengikuti asdos dengan sungguh2, Ya', 1),
(17, '_DSC0348 - kurang tidur.JPG', 'ahmad abroar', 202309, 'web programming, IPK bisa menjadi tolak ukur, IPK saya 3.5+, lalukan koordinasi sebelum melakukan hal inisiatif apapun, selalu konsultasi dengan dosen maupun mahasiswa', 5),
(18, '34 - Ikhwan Fauzan.jpg', 'Ikhwan Fauzan', 202031, 'programming dan problem solving, datang tepat waktu saat jam prsktikum, memberikan quiz ringan sebelum praktikum dimulai, berdiskusi dengan dosen sebelum dan setelah praktikum ', 5),
(19, 'IMG20220909114815 - BAHARUDDIN.jpg', 'BAHARUDDIN ', 202208, 'saya mahir di bidang pemrograman, bukti bahwa saya bertanggung jawab,mata kuliah saya sendiri tidak saya masuki, tidak memiliki inisiatif, Saya sering menegur mahasiswa, atau bahkan menjalin silaturah', 4),
(20, 'D2A31599-ADF0-4960-9883-A2C7B3DD005C - Regita Cahyani.jpeg', 'Regita', 211019, 'Mahir dalam matkul tersebut, Contohnya saya memasuki matkul tersebut, tidak memiliki inisiatif, Selalu mengajak komunikasi ', 3),
(21, '20221113_161917 - Andi Hanifah Putri Rani.jpg', 'Andi Hanifah Putri Rani', 192325, 'Jika sebuah kodingan terdapat sebuah error saya bisa paham dan memperbaiki dimana letak salahnya, bisa dikatakan seperti teliti dalam menganalisa sesuatu, Dalam melakukan sesuatu saya selalu memberika', 3),
(22, '4B498E0D-990B-43CA-ADEE-6BCFD31CEF09 - Ahmad Ramadhan.jpeg', 'Ahmad Ramadhan', 192108, 'Mahir di bidang melakukan komunikasi, saya bertanggung jawab untuk mengayomi mahasiswa yang saya ajar serta bertanggung jawab memberikan pemgetahuan yang saya punya kepada mahasiswa, Inisiatif dalam a', 3),
(23, 'IMG-20230210-WA0009 - A. Marwan Prasetyawan Marzuki.jpg', 'A. Marwan Prasetyawan Marzuki', 192004, 'Terkait mata kuliah tersebut, saya mampu melakukan pemetaan contoh kasus peta administrasi. Diluar dari pada itu saya mampu pemrograman web, desktop berbasis C# dan python, serta java android., Contoh', 3),
(24, 'IMG_20210414_082758_208 - Arjum Nur Ramadhan.jpg', 'Arjum Nur Ramadhan', 192453, 'Kodingan, Membantu mahasiswa,Memberikan materi lebih, Sering berdialog\r\n', 1),
(25, '', 'Stefani Harjono', 192094, 'dapat mengatur waktu dengan baik, menguasai materi yang di ajarkan, Selalu hadir dalam setiap pertemuan, Segera mendaftarkan diri tanpa paksaan dari pihak manapun, Dapat berkomunikasi dengan dosen yang bersangkutan untuk membantu mengatur mahasiswa', 4),
(27, '', 'Priestly Bulan Lobo', 182254, 'Praktikum PBO : A, kemampuan menguasi birokrasi, kepemimpinan, dan intelegensia. mengikuti arahan sari dosen pada kampus dan juga memahami kondisi dari mahasiswa yang akan di didik.mengearahkan sebelum jadwal kuliah dengan jelas dan praktis, menjada hubungan dengan dosen dan juga bersikap terbuka terhadap mahasiswa', 5),
(28, '', 'Benaya Wira Satya', 192474, 'Saya mahir di bidang algoritma dan java, saya memiliki sikap yang tegas dan keras, iya saya punya, komunitas yang baik', 4),
(29, '', 'Zaenal Abidin', 202004, 'Saya mahir di bidang web, aplikasi, dan arduino. dan memiliki integritas serta lolyalitas tinggi, mampu bersosialisasi dengan baik dan mudah berbaur maupun beradaptasi.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nidn` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nidn`, `name`, `pin`) VALUES
(2, 90213, 'Yesaaya', 99);

-- --------------------------------------------------------

--
-- Table structure for table `wp_w`
--

CREATE TABLE `wp_w` (
  `id` int(11) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  `w5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_w`
--

INSERT INTO `wp_w` (`id`, `metode`, `w1`, `w2`, `w3`, `w4`, `w5`) VALUES
(13, 'scheffe', -4.3, -5.4, -0.3, 3.65, 7.35),
(14, 'normal', 0.33, 0.2, 0.8, 0.6, 0.4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasilsawnormal`
--
ALTER TABLE `hasilsawnormal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilsawscheffe`
--
ALTER TABLE `hasilsawscheffe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilsmartnormal`
--
ALTER TABLE `hasilsmartnormal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilsmartscheffe`
--
ALTER TABLE `hasilsmartscheffe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilwpnormal`
--
ALTER TABLE `hasilwpnormal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilwpscheffe`
--
ALTER TABLE `hasilwpscheffe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_w`
--
ALTER TABLE `wp_w`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasilsawnormal`
--
ALTER TABLE `hasilsawnormal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilsawscheffe`
--
ALTER TABLE `hasilsawscheffe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilsmartnormal`
--
ALTER TABLE `hasilsmartnormal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilsmartscheffe`
--
ALTER TABLE `hasilsmartscheffe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilwpnormal`
--
ALTER TABLE `hasilwpnormal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilwpscheffe`
--
ALTER TABLE `hasilwpscheffe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_w`
--
ALTER TABLE `wp_w`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
