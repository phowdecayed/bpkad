-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: localhost    Database: web-bpkad
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (23,4,0,'ID','-','layanan-konsultasi-strategis','Layanan Konsultasi Strategis','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Layanan Konsultasi kami ideal untuk Anda saat membutuhkan dukungan dalam menyelaraskan tujuan strategis keberlanjutan perusahaan Anda dengan penatalayanan air yang baik dan mengembangkan rencana untuk tindakan tingkat wilayah operasional dan daerah tangkapan air. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dari menilai kesiapan wilayah operasional Anda terhadap Standar AWS, hingga penilaian risiko air dalam rantai pasokan dan mengembangkan peta jalan menuju tindakan pengelolaan air yang baik di lokasi, rantai pasokan, dan tingkat daerah tangkapan, kami dapat membantu Anda dalam perjalanan. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Kami bekerja sama dengan penyedia layanan terakreditasi, kredensial profesional, dan terlatih AWS, bergantung pada kebutuhan spesifik perusahaan Anda. Ingin tahu lebih banyak? Hubungi kami dan untuk sesi konsultasi terbuka.</span></span></p>','Publish','Terjadi','Layanan Konsultasi Strategis','26-image-section-aws-indonesia-contact-1600218408.jpg',NULL,NULL,1,NULL,NULL,'2020-09-16 01:06:48','2020-09-16 01:06:08','2020-09-16 01:06:48'),(24,4,0,'ID','-','pelatihan-standar-dan-sistem-aws','Pelatihan Standar dan Sistem AWS','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Program pelatihan Standar dan Sistem AWS interaktif selama 1, 2, dan 3 hari mencakup presentasi, studi kasus, serta latihan individu dan kelompok. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Berhasil menyelesaikan program pelatihan Spesialis memungkinkan Anda memenuhi syarat untuk menjadi penyedia layanan AWS yang terakreditasi, sebagai auditor, pelatih, dan konsultan. Ini juga mendukung Anda untuk membangun kapasitas internal untuk mengelola dan mengimplementasikan penatalayanan air dan sertifikasi AWS. Kami memberikan pelatihan dalam Bahasa Indonesia dan Bahasa Inggris.</span></span></p>','Publish','Terjadi','Pelatihan Standar dan Sistem AWS','26-image-section-aws-indonesia-contact-1600218481.jpg',NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:08:01','2020-09-16 01:07:31','2020-09-16 01:08:01'),(25,4,0,'ID','-','studi-kasus','Studi Kasus','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Jelajahi studi kasus Indonesia dan contoh penerapan penatalayanan air yang baik di seluruh Indonesia dari berbagai sektor.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber 2019 Hevea |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber Processing Site Online Survey 2019 Hevea I</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Hospitality Sector Hotel Indigo Seminyak IHG |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GAA Hevea Connect<strong>&nbsp;|&nbsp;</strong></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Brantas mapping |&nbsp;</span></span></li>\r\n</ul>','Publish','Materi','Studi Kasus',NULL,NULL,NULL,1,NULL,NULL,'2020-09-16 01:26:05','2020-09-16 01:23:28','2020-09-16 01:26:05'),(26,4,0,'ID','-','platform-e-tools-untuk-anggota-aws','Platform e-Tools untuk Anggota AWS','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Cari tahu lebih lanjut tentang e-standar AWS, Panduan juga Modul Pembelajaran Online penatalayanan air di <a href=\"https://tools.a4ws.org/my-account/subscriptions/\" style=\"color:#0563c1; text-decoration:underline\">AWS Tool Hub</a>. Akses gratis untuk semua Anggota AWS dan non-anggota dapat membayar biaya untuk membuat akun.</span></span></p>','Publish','Materi','Platform e-Tools untuk Anggota AWS',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:28:44','2020-09-16 01:27:50','2020-09-16 01:28:44'),(27,4,0,'ID','-','webinars','Webinars','<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dapatkan wawasan Anda mengenai Standar dan Sistem AWS melalui webinar AWS dan diskusi penting lainnya tentang topik penatalayanan air di Indonesia.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Development Report 2020 Launch by UNESCO &amp; Climate Tracker </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://unesdoc.unesco.org/ark:/48223/pf0000372985.locale=en\" style=\"color:#0563c1; text-decoration:underline\">Laporan</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GWPSEA Webinar COVID-19 Belajar dari Krisis untuk Pengelolaan Air Terpadu yang Lebih<br />\r\n	Rekaman: <a href=\"https://www.facebook.com/GlobalWaterPartnershipSoutheastAsia/videos/271658824268924/?_rdc=1&amp;_rdr\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Air Tanah untuk Tanah Air</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"bit.ly/youtube-airtanah\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Online Consultation &ndash; the Principles for Addressing Water-related Disaster Risk Reduction and COVID-19 </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://www.gwp.org/en/GWP-South-East-Asia/WE-ACT/keep-updated/News-and-Activities/2020/help-gwp-pan-asia-consultation-meeting/\" style=\"color:#0563c1; text-decoration:underline\">Summary</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">AWS Member Webinars: Spotlight on Indonesia Brantas River Basin, East Java</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/4530186227396155147\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Week #AtHome 2020 &ndash; Water Stewardship in Agriculture</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/8511901561510833158\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n</ul>','Publish','Materi','Webinars',NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-16 01:31:45','2020-09-16 01:30:55','2020-09-16 01:31:45'),(29,4,0,'ID','-','undang-undang','Undang - Undang','<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1000px\">\r\n	<caption>\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Undang Undang</p>\r\n	</caption>\r\n	<tbody>\r\n		<tr>\r\n			<td>No.</td>\r\n			<td>Judul Arsip</td>\r\n			<td>Deskripsi</td>\r\n			<td>Jenis Arsip</td>\r\n			<td>Download</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Undang Undang Nomor 12 Tahun 2008</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>Produk Hukum</td>\r\n			<td><a href=\"http://localhost:8080/bpkad-web/download/unduh/6\"><input name=\"Download\" type=\"button\" value=\"Download\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>','Publish','Layanan',NULL,NULL,NULL,NULL,1,NULL,NULL,'2021-01-18 04:40:37','2021-01-18 04:40:29','2021-01-18 04:41:35'),(30,4,6,'ID','-','undang-undangaa','Undang - Undangaa','<p>tetet</p>','Publish','Berita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-01-18 04:43:59','2021-01-18 04:43:54','2021-01-18 04:44:43'),(31,4,6,'ID','-','123','123','<p>wewewewe</p>','Publish','Berita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-01-18 04:47:40','2021-01-18 04:47:30','2021-01-18 04:47:40');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
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
INSERT INTO `download` VALUES (6,1,4,'ID','Undang Undang Nomor 12 Tahun 2008','Download','<p>Undang Undang Nomor 12 Tahun 2008</p>','undang-undang-nomor-12-tahun-2008-1610944263.pdf',NULL,8,'2021-01-18 04:31:13');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (15,4,4,'ID','Java Web Media','Homepage',NULL,'banner-3-1-1600727828.jpg','https://javawebmedia.com/kursus',NULL,'Publish',NULL,'Ya','2020-09-21 22:38:56');
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
INSERT INTO `heading` VALUES (1,0,'Berita dan Updates','<p>Berita dan Updates</p>','heading-03-1600256326.jpg','Berita','2020-09-16 11:38:46'),(2,0,'AWS Indonesia','<p>AWS Indonesia</p>','aws-indonesia-1600259780.jpg','AWS','2020-09-16 12:36:20'),(3,0,'Halaman Kontak','<p>Halaman Kontak</p>','kontak-1600257025.jpg','Kontak','2020-09-16 11:50:25'),(4,0,'Board and Team','<p>Board and Team</p>','board-and-team-300-1600260175.jpg','Team','2020-09-16 12:42:55'),(5,0,'Layanan','<p>Penatalayanan air memungkinkan pengguna air bekerjasama untuk mengidentifikasi dan mencapai tujuan bersama untuk pengelolaan air yang berkelanjutan dan keamanan air bersama. Penatalayanan air yang baik didefinisikan sebagai penggunaan air yang adil secara sosial dan budaya, berkelanjutan secara lingkungan dan menguntungkan secara ekonomi, dicapai melalui proses inklusif pemangku kepentingan yang mencakup tindakan berbasis wilayah operasional dan daerah tangkapan air (DAS).</p>\r\n<p>AWS Indonesia meripakan promosi dan penerapan penatalayanan air yang baik dan standar penatalayanan air internasional (<a href=\"https://a4ws.org/the-aws-standard-2-0/\">AWS Standard</a>) di Indonesia sebagai mitra negara <a href=\"https://waterstewardship.org.au/\">Alliance for Water Stewardship Asia-Pacific</a> dan <a href=\"https://a4ws.org/about/\">Alliance for Water Stewardship SCIO</a>.</p>\r\n<p>Apakah Anda tertarik untuk mempelajari lebih lanjut mengenai penatalayanan air dan aktivitas kami di Indonesia? Apakah Anda Manajer Sustainability atau Engineer Air yang ingin menerapkan penatalayanan air di wilayah operasional Anda? Hubungi kami dan mari kita mulai penatalayanan air bersama-sama.</p>','layanan-1600315713.jpg','Layanan','2020-09-17 04:08:33'),(6,0,'Dokumen','<p>Dokumen</p>','dokumen-1600317093.jpg','Dokumen','2020-09-17 04:31:33');
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
INSERT INTO `kategori` VALUES (6,4,'ID','berita','Berita',3,0,'2020-09-12 21:36:42'),(8,4,'ID','artikel','Artikel',2,NULL,'2021-01-18 04:21:24'),(9,4,'ID','info-lelang','Info Lelang',1,NULL,'2021-01-18 04:21:43');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_agenda`
--

DROP TABLE IF EXISTS `kategori_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_agenda` (
  `id_kategori_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_agenda` varchar(255) NOT NULL,
  `nama_kategori_agenda` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_agenda`
--

LOCK TABLES `kategori_agenda` WRITE;
/*!40000 ALTER TABLE `kategori_agenda` DISABLE KEYS */;
INSERT INTO `kategori_agenda` VALUES (4,'ID','kegiatan-eksternal','Kegiatan Eksternal',NULL,2),(6,'ID','kegiatan-internal','Kegiatan Internal',NULL,1);
/*!40000 ALTER TABLE `kategori_agenda` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_download`
--

LOCK TABLES `kategori_download` WRITE;
/*!40000 ALTER TABLE `kategori_download` DISABLE KEYS */;
INSERT INTO `kategori_download` VALUES (1,'ID','peraturan-lainnya','Peraturan Lainnya','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1),(4,'ID','produk-hukum','Produk Hukum','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',0),(5,'ID','peraturan-gubernur','Peraturan Gubernur','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',2),(6,'ID','rekapitulasi','Rekapitulasi','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',3);
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
INSERT INTO `kategori_galeri` VALUES (4,'ID','kegiatan','Kegiatan',2),(6,'ID','kegiatan-kampus','Kegiatan Kampus',1);
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
