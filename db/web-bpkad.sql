-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bpkad-web
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori_agenda` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_agenda` varchar(255) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_agenda` varchar(20) NOT NULL,
  `jenis_agenda` varchar(20) NOT NULL,
  `keywords` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 0,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,4,6,'ID','latihan-agenda','Latihan Agenda','<p>Latihan</p>','Publish','Agenda','adad',NULL,'daad',0,NULL,'2020-09-12','2020-09-12','08:00:00','17:00:00','AWS Indonesia','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','2020-09-12 23:46:53','2020-09-12 23:42:16','2020-09-13 00:09:38');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT 0,
  `bahasa` enum('ID','EN') NOT NULL,
  `updater` varchar(32) DEFAULT '-',
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) DEFAULT 'Berita',
  `keywords` text DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (23,4,0,'ID','-','layanan-konsultasi-strategis','Layanan Konsultasi Strategis','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Layanan Konsultasi kami ideal untuk Anda saat membutuhkan dukungan dalam menyelaraskan tujuan strategis keberlanjutan perusahaan Anda dengan penatalayanan air yang baik dan mengembangkan rencana untuk tindakan tingkat wilayah operasional dan daerah tangkapan air. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dari menilai kesiapan wilayah operasional Anda terhadap Standar AWS, hingga penilaian risiko air dalam rantai pasokan dan mengembangkan peta jalan menuju tindakan pengelolaan air yang baik di lokasi, rantai pasokan, dan tingkat daerah tangkapan, kami dapat membantu Anda dalam perjalanan. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Kami bekerja sama dengan penyedia layanan terakreditasi, kredensial profesional, dan terlatih AWS, bergantung pada kebutuhan spesifik perusahaan Anda. Ingin tahu lebih banyak? Hubungi kami dan untuk sesi konsultasi terbuka.</span></span></p>','Publish','Terjadi','Layanan Konsultasi Strategis','26-image-section-aws-indonesia-contact-1600218408.jpg',NULL,NULL,1,NULL,NULL,'2020-09-16 01:06:48','2020-09-16 01:06:08','2020-09-16 01:06:48'),(24,4,0,'ID','-','pelatihan-standar-dan-sistem-aws','Pelatihan Standar dan Sistem AWS','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Program pelatihan Standar dan Sistem AWS interaktif selama 1, 2, dan 3 hari mencakup presentasi, studi kasus, serta latihan individu dan kelompok. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Berhasil menyelesaikan program pelatihan Spesialis memungkinkan Anda memenuhi syarat untuk menjadi penyedia layanan AWS yang terakreditasi, sebagai auditor, pelatih, dan konsultan. Ini juga mendukung Anda untuk membangun kapasitas internal untuk mengelola dan mengimplementasikan penatalayanan air dan sertifikasi AWS. Kami memberikan pelatihan dalam Bahasa Indonesia dan Bahasa Inggris.</span></span></p>','Publish','Terjadi','Pelatihan Standar dan Sistem AWS','26-image-section-aws-indonesia-contact-1600218481.jpg',NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:08:01','2020-09-16 01:07:31','2020-09-16 01:08:01'),(25,4,0,'ID','-','studi-kasus','Studi Kasus','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Jelajahi studi kasus Indonesia dan contoh penerapan penatalayanan air yang baik di seluruh Indonesia dari berbagai sektor.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber 2019 Hevea |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber Processing Site Online Survey 2019 Hevea I</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Hospitality Sector Hotel Indigo Seminyak IHG |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GAA Hevea Connect<strong>&nbsp;|&nbsp;</strong></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Brantas mapping |&nbsp;</span></span></li>\r\n</ul>','Publish','Materi','Studi Kasus',NULL,NULL,NULL,1,NULL,NULL,'2020-09-16 01:26:05','2020-09-16 01:23:28','2020-09-16 01:26:05'),(26,4,0,'ID','-','platform-e-tools-untuk-anggota-aws','Platform e-Tools untuk Anggota AWS','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Cari tahu lebih lanjut tentang e-standar AWS, Panduan juga Modul Pembelajaran Online penatalayanan air di <a href=\"https://tools.a4ws.org/my-account/subscriptions/\" style=\"color:#0563c1; text-decoration:underline\">AWS Tool Hub</a>. Akses gratis untuk semua Anggota AWS dan non-anggota dapat membayar biaya untuk membuat akun.</span></span></p>','Publish','Materi','Platform e-Tools untuk Anggota AWS',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:28:44','2020-09-16 01:27:50','2020-09-16 01:28:44'),(27,4,0,'ID','-','webinars','Webinars','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dapatkan wawasan Anda mengenai Standar dan Sistem AWS melalui webinar AWS dan diskusi penting lainnya tentang topik penatalayanan air di Indonesia.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Development Report 2020 Launch by UNESCO &amp; Climate Tracker </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://unesdoc.unesco.org/ark:/48223/pf0000372985.locale=en\" style=\"color:#0563c1; text-decoration:underline\">Laporan</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GWPSEA Webinar COVID-19 Belajar dari Krisis untuk Pengelolaan Air Terpadu yang Lebih<br />\r\n	Rekaman: <a href=\"https://www.facebook.com/GlobalWaterPartnershipSoutheastAsia/videos/271658824268924/?_rdc=1&amp;_rdr\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Air Tanah untuk Tanah Air</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"bit.ly/youtube-airtanah\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Online Consultation &ndash; the Principles for Addressing Water-related Disaster Risk Reduction and COVID-19 </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://www.gwp.org/en/GWP-South-East-Asia/WE-ACT/keep-updated/News-and-Activities/2020/help-gwp-pan-asia-consultation-meeting/\" style=\"color:#0563c1; text-decoration:underline\">Summary</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">AWS Member Webinars: Spotlight on Indonesia Brantas River Basin, East Java</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/4530186227396155147\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Week #AtHome 2020 &ndash; Water Stewardship in Agriculture</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/8511901561510833158\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n</ul>','Publish','Materi','Webinars',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:31:45','2020-09-16 01:30:55','2020-09-16 01:31:45'),(29,4,0,'ID','-','undang-undang','Undang - Undang','<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1150px\">\r\n	<caption>\r\n	<p>&nbsp;</p>\r\n	</caption>\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">No.</div>\r\n			</th>\r\n			<th scope=\"col\">\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Judul Arsip</div>\r\n			</th>\r\n			<th scope=\"col\">\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Deskripsi</div>\r\n			</th>\r\n			<th scope=\"col\">\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Jenis Arsip</div>\r\n			</th>\r\n			<th scope=\"col\">\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Download</div>\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">1</td>\r\n			<td style=\"text-align:center\">Undang Undang Nomor 12 Tahun 2008</td>\r\n			<td style=\"text-align:center\">Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</td>\r\n			<td style=\"text-align:center\">Produk Hukum</td>\r\n			<td style=\"text-align:center\"><a href=\"http://localhost:8080/bpkad-web/download/unduh/6\"><input name=\"Download\" type=\"button\" value=\"Download\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>','Publish','Layanan',NULL,'logo-dinas-1611050443.png',NULL,NULL,1,NULL,NULL,'2021-01-18 04:40:37','2021-01-18 04:40:29','2021-01-19 10:00:43'),(33,4,6,'ID','-','jabar-juara','Jabar Juara','<p>dan seperti itu</p>','Publish','Berita',NULL,'2d182c0b00f8fbfbf9ced554271176ba-1611033232.jpg','fa-rocket',NULL,NULL,NULL,NULL,'2021-01-19 05:13:53','2021-01-19 05:07:13','2021-01-19 05:13:53'),(34,4,8,'ID','-','ujang-kemod','ujang Kemod','<p>wow</p>','Publish','Berita',NULL,'731e9b7b0a91adca351a12bf72cb2e32-1611033277.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-19 05:14:37','2021-01-19 05:14:23','2021-01-19 05:14:37');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_download` varchar(200) DEFAULT NULL,
  `jenis_download` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` VALUES (6,7,4,'ID','Undang Undang Nomor 12 Tahun 2008','Artikel','<p>Undang Undang Nomor 12 Tahun 2008</p>','undang-undang-nomor-12-tahun-2008-1610944263.pdf',NULL,11,'2021-01-19 04:41:16');
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (20,6,4,'ID','BPKAD','Homepage','Test','12-1611305339.jpg','http://bpkad.jabarprov.go.id',NULL,'Publish',NULL,'Ya','2021-01-22 08:48:59'),(21,6,4,'ID','BPKAD-Test','Homepage','Donk','13-1611305324.jpg','http://bpkad.jabarprov.go.id',NULL,'Publish',NULL,'Ya','2021-01-22 08:48:44');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heading`
--

DROP TABLE IF EXISTS `heading`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heading` (
  `id_heading` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT 0,
  `judul_heading` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `halaman` varchar(255) DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_heading`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heading`
--

LOCK TABLES `heading` WRITE;
/*!40000 ALTER TABLE `heading` DISABLE KEYS */;
INSERT INTO `heading` VALUES (1,0,'Berita dan Artikel','<p>Berita dan Artikel</p>','heading-03-1600256326-1611032712.jpg','Berita','2021-01-19 05:05:12'),(2,0,'Tentang','<p>Tentang</p>','aws-indonesia-1600259780-1611032677.jpg','Tentang','2021-01-22 02:00:50'),(3,0,'Halaman Kontak','<p>Halaman Kontak</p>','kontak-1600257025-1611032631.jpg','Kontak','2021-01-19 05:03:51'),(4,0,'Board and Team','<p>Board and Team</p>','board-and-team-300-1600260175-1611032756.jpg','Team','2021-01-19 05:05:56'),(5,0,'Layanan','<p>Layanan</p>','layanan-1600315713-1611032802.jpg','Layanan','2021-01-19 05:06:53'),(6,0,'Dokumen','<p>Dokumen</p>','dokumen-1600317093-1611032780.jpg','Dokumen','2021-01-19 05:06:20');
/*!40000 ALTER TABLE `heading` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (6,4,'ID','berita','Berita',3,0,'2020-09-12 21:36:42'),(8,4,'ID','artikel','Artikel',2,NULL,'2021-01-18 04:21:24');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_download`
--

DROP TABLE IF EXISTS `kategori_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_download` (
  `id_kategori_download` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_download` varchar(255) NOT NULL,
  `nama_kategori_download` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_download`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_download`
--

LOCK TABLES `kategori_download` WRITE;
/*!40000 ALTER TABLE `kategori_download` DISABLE KEYS */;
INSERT INTO `kategori_download` VALUES (7,'ID','produk-hukum','Produk Hukum',NULL,1),(8,'ID','rekapitulasi','Rekapitulasi',NULL,2);
/*!40000 ALTER TABLE `kategori_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_galeri`
--

DROP TABLE IF EXISTS `kategori_galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_galeri`
--

LOCK TABLES `kategori_galeri` WRITE;
/*!40000 ALTER TABLE `kategori_galeri` DISABLE KEYS */;
INSERT INTO `kategori_galeri` VALUES (4,'ID','kegiatan-kedinasan','Kegiatan-Kedinasan',2),(6,'ID','kegiatan-umum','Kegiatan Umum',1);
/*!40000 ALTER TABLE `kategori_galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_staff`
--

DROP TABLE IF EXISTS `kategori_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_staff` varchar(255) NOT NULL,
  `nama_kategori_staff` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_staff`
--

LOCK TABLES `kategori_staff` WRITE;
/*!40000 ALTER TABLE `kategori_staff` DISABLE KEYS */;
INSERT INTO `kategori_staff` VALUES (4,'ID','senyum-programmer','Senyum Programmer','Yeay...selain tim tutor kita juga ada tim programmer yang bekerja full time maupun part time',2),(6,'ID','happy-tutor','Happy Tutor','Java Web Media didampingi oleh tutor-tutor dan instruktur yang berpengalaman di bidangnya.',1);
/*!40000 ALTER TABLE `kategori_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konfigurasi`
--

DROP TABLE IF EXISTS `konfigurasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_youtube` varchar(255) DEFAULT 'NULL',
  `youtube` varchar(255) DEFAULT 'NULL',
  `facebook_page` text DEFAULT 'NULL',
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konfigurasi`
--

LOCK TABLES `konfigurasi` WRITE;
/*!40000 ALTER TABLE `konfigurasi` DISABLE KEYS */;
INSERT INTO `konfigurasi` VALUES (1,'ID','Badan Pengelolaan Keuangan dan Aset Daerah',NULL,'Bersama Kita Bisa','Jabar Juara Lahir Batin Dengan Kolaborasi dan Inovasi',NULL,'Website Resmi Badan Pengelolaan Keuangan dan Aset Daerah','https://bpkad.jabarprov.go.id','bpkad@jabarprov.go.id',NULL,'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115','022 - 4233347',NULL,'022 - 4233347','logo-bpkad.png','favicon.png',NULL,NULL,'https://web.facebook.com/BpkadJabar','https://twitter.com/bpkadjabarprov','https://www.instagram.com/bpkadjabarprov/','https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q','Badan Pengelolaan Keuangan dan Aset Daerah','BPKAD PROV JABAR','BPKAD Provinsi Jawa Barat','','BPKAD','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.634383807166!2d107.618288!3d-6.901534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5543cd68e7b6719d!2sBadan%20Pengelolaan%20Keuangan%20dan%20Aset%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1610946848456!5m2!1sen!2sid\" width=\"250\" height=\"250\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>','logo-dinas.png','fsH_KhUWfho','balairung-budiutomo-01.jpg','smtp','ssl://mail.mail.com','465','12','info@mail.com','1234','bpkad.jabarprov.go.id','Badan Pengelolaan Keuangan dan Aset Daerah',4,'2021-01-22 09:03:20','BPKAD PROV JABAR','https://www.youtube.com/channel/UCZPhYb-0GV5t_FKE1c2u1ZA','<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FBpkadJabar&tabs=timeline%2C%20messages&width=450&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId=424845868955585\" width=\"450\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"1\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>');
/*!40000 ALTER TABLE `konfigurasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_01_19_044523_create_contacts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Herman Maulana','Admin@admin.com','admin1','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Admin',NULL,'testimonials-1.jpg','2021-01-18 03:51:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `video` text NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `bahasa` varchar(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (68,'Video Profil Nanin Nayani Adam','Homepage','BPKAD JABAR','ZWgVhhfL_9M',1,'Indonesia','maxresdefault-1611106825.jpg',4,'2021-01-20 01:40:48');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bpkad-web'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-22 16:15:00
