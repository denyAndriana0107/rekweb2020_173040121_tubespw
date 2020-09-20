-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 02:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040121`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya_indonesia`
--

CREATE TABLE `budaya_indonesia` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Berasal` varchar(32) NOT NULL,
  `Tujuan` varchar(32) NOT NULL,
  `Deskripsi` varchar(1024) NOT NULL,
  `Gambar` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budaya_indonesia`
--

INSERT INTO `budaya_indonesia` (`Id`, `Nama`, `Berasal`, `Tujuan`, `Deskripsi`, `Gambar`) VALUES
(1, 'Tari Suanggi', 'Papua', 'Upacara keagamaan', 'Merupakan tari yang mengisahkan seorang istri yang mati akibat korban angi-angi (Jejadian).tarian daerah inipyn memiliki gerakan yang cenderung pada ritual dan upacara keagamaan. Suanggi merupakan roh jahat (Kapes) karena belum ditebus dan belum mendapatkan kenyamanan di alam bakanya.', 'suanggi.jpg'),
(2, 'Upacara Potong Jari', 'Papua', 'Upacara kematian', 'Meski tergolong ekstreme, tapi upcara potong jari ini dilakukan untuk memaknai kesedihan seseorang yang tinggilah pergi (meninggal) oleh orang yang mereka cintai. Tidak hanya dengan menangisi mereka, tetapi masyarakt papua akan memotong jari mereka setiap kali mereka kehilangan anggota keluarga. Dan tradisi tersebut sifatnya wajib. Dengan memotong jari mereka, masyarakat pengunungan tengah papua beranggapan bahwa memotong jari adalah simbol dari sakit dan pedihnya seseorang yang kehilangan sebagian anggota keluarganya.', 'potongjari.jpg'),
(3, 'Tanam Sasi', 'Papua', 'Upacara keagamaan', 'Merupakan bentuk upacara kematian yang dilakukan oleh Suku Marin,Dimana Sasi adalah sejenis kayu yang ditanam ketika seseorang meninggal selama 40 hari. Kemudian Sasi tersebut akan dicabut setelah mencapai 1000 hari.', 'TanamSasi.jpg'),
(4, 'Penguburan Mayat di Trunyan', 'Bali', 'Upacara kematian', 'Tradisi ini dikenal di Desa Trunyan. Mayat orang yang telah mati hanya akan digeletakkan di sekitar pohon yang ada di hutan di dekat Desa Trunyan. Pohonnya pun bukan pohon biasa / sembarangan. Melainkan pepohonan taru dan menyan yang mampu mengeluarkan enzim dan bau wangi. Hal tersebut dimaksudkan agar bau busuk dari mayat tidak akan menguar. Dengan pohon taru dan menyan, mayat malah menjadi wangi.', 'Penguburan.jpg'),
(5, 'Ritual Tiwah', 'Kalimantan Tengah', 'Upacara kematian', 'Ritual Tiwah merupakan sejenis upacara mengantarkan tulang belulang orang yang sudah meninggal ke tempat peristirahatan terakhirnya yaitu sandung, dengan harapan orang yang ditiwahkan mencapai syurga.	', 'itualtiwah.jpg'),
(6, 'Reneuh Mundingeun', 'Sunda', 'Upacara syukuran', 'Reneuh mundingeun merupakan sebuah upacara adat yang dialkukan ketika seorang perempuan telah hamil dan memasuki usia 12 bulan. Normalnya, wanita akan mengandung sampai dengan usia kandungan 9 bulan, tetapi beberapa kasus terdapat usia kandungan hingga 12 bulan, seperti munding (kerbau). Tujuan dilakukannya upacara ini adalah agar wanita tersebut segera melahirkan. Kebudayaan suku sunda yang satu ini memang jarang diketahui bahkan oleh masyarakatnya sendiri.', 'beuneuh.jpg'),
(7, 'Merarik', 'Lombok', 'Upacara pernikahan', 'Merarik merupakan bahasa sasak yang artinya menikah. Masyarakat Lombok memiliki cara yang unik untuk melangsungkan upacara pernikahan yakni dengan mempelai laki-laki menculik mempelai perempuan kemudian di bawa ke rumahnya. Tentunya hal tersebut sudah melalui kesepakan sebelumnya. Setelah proses penculikan, keesokan harinya akan dilakukan prosesi ijab qobul agar pernikahan kedua mempelai sah.', 'merarik.jpg'),
(8, 'Ngurek', 'Banten', 'Upacara keagamaan', 'Ngurek ini merupakan sebuah upacara yang memiliki sedikit kemiripan dengan debus. Dimana para pelaku yang teriibat dalam upacara ini wajib menusuk tubuhnya dengan menggunakan keris. Makna dan tujuan dari upacara ini adalah untuk meyakinkan manusia tentang Tuhan Yang Maha Esa. Ketika para pelaku melakukan upacara ini, mereka yakin dan hanya meminta pertolongan untuk dilindungi Oleh Sang Kuasa. Hal tersebutlah yang disampaikan pada upacara ini. Bahwa sebagai manusia kita hanya boleh meyakini pertolongan sang kuasa.', 'gurek.jpg'),
(9, 'Mekare Kare', 'Bali', 'Upacara keagamaan', 'Pada upacara ini orang akan terlibat saling menghantamkan daun pandan berduri untuk dipersembahkan pada Dewa Indra. Namun jangan khawatir. Meski saling menghantam dengan pandan berduri sekalipun, para pelaku tidak akan merasakan kesakitan. Beradarah dan lecet pada kulit mereka tidak akan terasa sakit dan setelahnya akan diobati serta disucikan oleh para pemangku adat.', 'mekarekare.jpg'),
(10, 'Kebo-Keboan', 'Banyuwangi	', 'Upacara minta hujan	', 'Merupakan ritual yang diperkirakan sudah ada sejak abad ke-18, dan biasanya diselenggarakan pada tanggal 1-10 bulan syura. Tujuannya untuk meminta hujan turun ditengah musim kemarau. Upacara ini biasanya diadakan pada hari minggu. Sesuai namanya, ritual ini biasanya mendandani orang menjadi seekor kebo. Diiringi dengan musik tradisional, kebo-keboan itu mulai membajak sawah berlaga seperti kerbau asli, dan bisa saja menyeruduk para penonton, tidak jarang kebo-keboan ini kesurupan dan menjadi liar. Hati-hati ya nontonnya jangan dekat-dekat.', 'kebokeboan.jpg'),
(11, 'Mapasilaga Tegong', 'Toraja', 'Upacara keagamaan', 'Mapasilaga Tegong adalah budaya adu banteng. Adu sesama banteng ya bukan manusia. Tradisi ini dibawa secara turun temurun yang dilakukan di Tana Toraja. Tradisi ini diadakan hanya untuk menghormati para leluhur saja, kerbau yang diadu pun tidak sembarangan, masyarakat tersebut membeli kerbau albino untuk bertempur. Cukup mahal lho untuk kerbau jenis ini.', 'MapasilagaTedong.jpg'),
(12, 'Pasola', 'NTT', 'Upacara syukuran', 'Pasola artinya lembing kayu yang digunakan untuk melempar, “pa” dari pasola adalah kalimat imbuhan. Pasola berarti melemparkan lembing kayu sambil memacu seekor kuda. Tradisi ini dilakukan oleh masyarakat Sumba, NTT. biasanya diadakan sekali setiap tahun tepatnya di bulan Februari.', 'Pasola.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budaya_indonesia`
--
ALTER TABLE `budaya_indonesia`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budaya_indonesia`
--
ALTER TABLE `budaya_indonesia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
