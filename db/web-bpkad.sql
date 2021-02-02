-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bpkad-web
-- ------------------------------------------------------
-- Server version	5.7.24

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
  `slug_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,4,6,'latihan-agenda','Latihan Agenda','<p>Latihan</p>','Publish','Agenda','adad',NULL,'daad',0,NULL,'2020-09-12','2020-09-12','08:00:00','17:00:00','AWS Indonesia','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','2020-09-12 23:46:53','2020-09-12 23:42:16','2020-09-13 00:09:38');
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
  `id_kategori` int(11) DEFAULT '0',
  `updater` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `slug_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_berita` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Berita',
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,4,0,'-','undang-undang','Undang - Undang','<table align=\"center\" border=\"1\" bordercolor=\"#ccc\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse:collapse\">\n<caption>\n<p>&nbsp;</p>\n</caption>\n<thead>\n<tr>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">No.</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Judul Arsip</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Deskripsi</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Jenis Arsip</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Download</div>\n</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td style=\"text-align:center\">1</td>\n<td style=\"text-align:center\">Undang Undang Nomor 12 Tahun 2008</td>\n<td style=\"text-align:center\">Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</td>\n<td style=\"text-align:center\">Produk Hukum</td>\n<td style=\"text-align:center\"><a href=\"http://localhost:8080/bpkad-web/download/unduh/6\"><input name=\"Download\" type=\"button\" value=\"Download\" /></a></td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n</tbody>\n</table>','Publish','Layanan',NULL,'logo-dinas-1611050443.png',NULL,NULL,1,NULL,NULL,'2021-01-18 04:40:37','2021-01-18 04:40:29','2021-01-22 21:03:28'),(2,4,1,'-','wagub-minta-pemkabpemkot-responsif-positif-rekomendasi-bpk','Wagub Minta Pemkab/Pemkot Responsif Positif Rekomendasi BPK','<p>KAB MAJALENGKA - Wakil Gubernur Jawa Barat Uu Ruzhanul Ulum pemkab/pemkot merespons positif rekomendasi penilaian laporan keuangan oleh Badan Pemeriksa Keuangan (BPK).</p>\r\n\r\n<p>Menurutnya, pemeriksaan BPK sangat penting karena akan menjadi parameter setiap instansi pemerintah berkenaan dengan ketertiban, transparansi, dan akuntabilitas pengelolaan keuangan negara di Jabar.&nbsp;</p>\r\n\r\n<p>&ldquo;Penilaian atau pemeriksaan dari BPK ini adalah sangat penting, sekaligus untuk membuat citra bagi pemerintah daerah, apakah sudah benar-benar merealisasikan anggaran dari tahun ke tahun sesuai dengan keharusannya, tentang akuntabilitas, transparansi, ataupun hal yang lain,&rdquo; sebut&nbsp;<em>Kang</em>&nbsp;Uu pada acara &quot;<em>Entry Meeting</em>&nbsp;Pemeriksaan Interim LKPD TA. 2020&quot; bersama BPK Perwakilan Provinsi Jawa Barat secara Virtual, dari Kabupaten Majalengka, Senin (1/2/2021).</p>\r\n\r\n<p>&ldquo;Oleh karena itu saya berharap pada seluruh pemerintah, kepala dinas di seluruh kabupaten/kota dan provinsi, untuk bisa bekerja sama dengan BPK, memberikan data-data yang terbaik dan benar (valid), dan juga responsif apa yang diharapkan dan diminta BPK,&rdquo; katanya.&nbsp;</p>\r\n\r\n<p><em>Kang</em>&nbsp;Uu juga mengimbau agar pihak pemerintah daerah dapat segera menindaklanjuti hasil rekomendasi BPK, sebagai upaya optimalisasi perbaikan pengelolaan keuangan negara di Jabar.</p>\r\n\r\n<p>&ldquo;Harapan kami, apapun yang jadi rekomendasi BPK, pemerintah daerah kabupaten/kota termasuk provinsi untuk segera ditindaklanjuti sesuai dengan waktu yang telah ditetapkan,&rdquo; arahnya.</p>\r\n\r\n<p><em>Kang&nbsp;</em>Uu menyebut, dalam proses penyusunan laporan keuangan ini masih ditemukan kendala yang menjadi kelemahan laporan keuangan Jabar. Sebagai upaya identifikasi dan evaluasi atas tata kelola keuangan yang telah dilaksanakan,&nbsp;<em>Kang&nbsp;</em>Uu berharap ada kesamaan teori dan rumusan formula penghitungan antara pemprov dengan BPK.</p>\r\n\r\n<p>&ldquo;Karena memang teori yang dipakai, cara menghitung yang dipakai, kadang berbeda. Oleh karena itu, harapan kami ada satu kesamaan dalam penilaian, dalam teori, sehingga disaat ada kerugian negara di daerah maupun provinsi bisa benar-benar disepakati jumlahnya, sehingga kami (pemda) tidak merasa ada yang tidak pas,&rdquo; jelas&nbsp;<em>Kang&nbsp;</em>Uu.</p>\r\n\r\n<p>Lebih lanjut Kang Uu juga berharap, melalui pemeriksaan ini para kepala dinas dan jajarannya semakin termotivasi melakukan langkah-langkah perbaikan, peningkatan kualitas, kewajaran, dan kebenaran sewaktu menyajikan informasi keuangan dalam pembuatan laporan yang sesuai standar akuntansi pemerintahan, kecukupan pengungkapan laporan keuangan, kepatuhan pada peraturan perundang-undangan, serta efektivitas sistem pengendalian<em>&nbsp;intern</em>. (Pun)</p>\r\n\r\n<p>(sumber: jabarprov.go.id)</p>','Publish','Berita',NULL,'wagub-1612253340.jpg',NULL,NULL,NULL,NULL,NULL,'2021-02-02 08:09:00','2021-02-02 08:08:05','2021-02-02 08:09:00'),(3,4,1,'-','peninjauan-veledrom-sebagai-aset-milik-pemerintah-provinsi-jawa-barat-di-kota-cimahi','Peninjauan Veledrom sebagai Aset Milik Pemerintah Provinsi Jawa Barat di Kota Cimahi','<p>Kepala BPKAD, Dra. Nanin Hayani Adam , M.Si meninjau&nbsp;aset milik Pemerintah Provinsi Jawa Barat &nbsp;bersama Komisi I DPRD Provinsi Jawa Barat, Veledrom, merupakan salah satu aset Pemerintah Provinsi Jawa Barat yang terletak di kota Cimahi yang dipergunakan sebagai area untuk olahraga balap sepeda khususnya balap sepeda trek.&nbsp;</p>','Publish','Berita',NULL,'veledrom-1612253382.jpg',NULL,NULL,NULL,NULL,NULL,'2021-02-02 08:09:42','2021-02-02 08:09:03','2021-02-02 08:09:42'),(4,4,1,'-','peninjauan-aset-milik-pemerintah-provinsi-jawa-barat-di-balai-pengembangan-perbibitan-ternak-domba-dan-kambing-margawati-kabupaten-garut','Peninjauan Aset milik Pemerintah Provinsi Jawa Barat di Balai Pengembangan Perbibitan Ternak Domba dan Kambing Margawati Kabupaten Garut.','<p>Sekretaris BPKAD&nbsp;Juneidy Ak, CA&nbsp;bersama Kepala Bidang Pengelolaan Aset Daerah Dwi Agus Sulistyo, S.T., M.T mendampingi Komisi I DPRD Provinsi Jawa Barat ke Kabupaten Garut dalam rangka Peninjauan Aset milik Pemerintah Provinsi Jawa Barat di Balai Pengembangan Perbibitan Ternak Domba dan Kambing Margawati Kabupaten Garut.</p>','Publish','Berita',NULL,'garut-1612253414.jpg',NULL,NULL,NULL,NULL,NULL,'2021-02-02 08:10:14','2021-02-02 08:09:50','2021-02-02 08:10:14');
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
  `judul_download` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_download` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` VALUES (1,1,4,'Undang Undang Nomor 12 Tahun 2008','Artikel','<p>Undang Undang Nomor 12 Tahun 2008</p>','undang-undang-nomor-12-tahun-2008-1610944263.pdf',NULL,12,'2021-01-19 04:41:16');
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
  `judul_galeri` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_galeri` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (1,1,4,'BPKAD','Homepage','Test','12-1611305339.jpg','http://bpkad.jabarprov.go.id',NULL,'Publish',NULL,'Ya','2021-01-22 08:48:59'),(2,1,4,'BPKAD-Test','Homepage','Donk','13-1611305324.jpg','http://bpkad.jabarprov.go.id',2,'Publish',NULL,'Ya','2021-01-22 08:48:44');
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
  `id_user` int(11) DEFAULT '0',
  `judul_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_heading`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heading`
--

LOCK TABLES `heading` WRITE;
/*!40000 ALTER TABLE `heading` DISABLE KEYS */;
INSERT INTO `heading` VALUES (1,0,'Berita dan Artikel','<p>Berita dan Artikel</p>','heading-03-1600256326-1611032712.jpg','Berita','2021-01-19 05:05:12'),(2,0,'Tentang','<p>Tentang</p>','landing2-1611344929.jpg','Tentang','2021-01-22 19:48:49'),(3,0,'Halaman Kontak','<p>Halaman Kontak</p>','kontak-1600257025-1611032631.jpg','Kontak','2021-01-19 05:03:51'),(4,0,'Board and Team','<p>Board and Team</p>','board-and-team-300-1600260175-1611032756.jpg','Team','2021-01-19 05:05:56'),(5,0,'Layanan','<p>Layanan</p>','static-1611345042.jpg','Layanan','2021-01-22 19:50:42'),(6,0,'Dokumen','<p>Dokumen</p>','dokumen-1600317093-1611032780.jpg','Dokumen','2021-01-19 05:06:20');
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
  `slug_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,4,'berita','Berita',1,0,'2020-09-12 21:36:42'),(2,4,'artikel','Artikel',2,NULL,'2021-01-18 04:21:24');
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
  `slug_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_download`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_download`
--

LOCK TABLES `kategori_download` WRITE;
/*!40000 ALTER TABLE `kategori_download` DISABLE KEYS */;
INSERT INTO `kategori_download` VALUES (1,'produk-hukum','Produk Hukum',NULL,1),(2,'rekapitulasi','Rekapitulasi',NULL,2);
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
  `slug_kategori_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_galeri`
--

LOCK TABLES `kategori_galeri` WRITE;
/*!40000 ALTER TABLE `kategori_galeri` DISABLE KEYS */;
INSERT INTO `kategori_galeri` VALUES (1,'kegiatan-kedinasan','Kegiatan-Kedinasan',2),(2,'kegiatan-umum','Kegiatan Umum',1);
/*!40000 ALTER TABLE `kategori_galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_link`
--

DROP TABLE IF EXISTS `kategori_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_link` (
  `id_kategori_link` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_link`
--

LOCK TABLES `kategori_link` WRITE;
/*!40000 ALTER TABLE `kategori_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_staff`
--

DROP TABLE IF EXISTS `kategori_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_staff`
--

LOCK TABLES `kategori_staff` WRITE;
/*!40000 ALTER TABLE `kategori_staff` DISABLE KEYS */;
INSERT INTO `kategori_staff` VALUES (1,'Test','Test','Tes',1);
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
  `namaweb` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_singkat` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatext` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_google_plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_timeout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_feeds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_bawah_peta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_page` text COLLATE utf8mb4_unicode_ci,
  `disqus_shortname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'bpkad-jabarprov-go-id',
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konfigurasi`
--

LOCK TABLES `konfigurasi` WRITE;
/*!40000 ALTER TABLE `konfigurasi` DISABLE KEYS */;
INSERT INTO `konfigurasi` VALUES (1,'Badan Pengelolaan Keuangan dan Aset Daerah','Struktur Organisasi','Bersama Kita Bisa','Jabar Juara Lahir Batin Dengan Kolaborasi dan Inovasi','<p><img alt=\"struktur organisasi\" src=\"https://i.ibb.co/0ynNzLn/Struktur-Organisasi-BPKAD2021-3-page-0001.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BPKAD Provinsi Jawa Barat merupakan Perangkat Daerah yang di bentuk berdasarkan Peraturan Daerah Nomor 6 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Jawa Barat yang merupakan penggabungan tugas dan fungsi dari Biro Keuangan dan Biro Pengelolaan Barang Milik Daerah. Selanjutnya untuk memenuhi ketentuan-ketentuan sebagaimana tersebut diatas, BPKAD juga menyusun Rencana Strategis tahun 2017-2018 yang dalam hal ini menggabungkan, menyesuaikan, dan melanjutkan Rencana Strategis Biro Keuangan dan Rencana Strategis Biro Pengelolaan Barang Milik Daerah yang telah disusun sebelumnya (Tahun 2013-2018). Hal ini merupakan upaya dari BPKAD dalam mempertahankan dan bahkan meningkatkan pencapaian kinerja yang telah diraih oleh Biro Keuangan dan Biro Pengelolaan Barang Milik Daerah.<br />\r\n<br />\r\n<strong>Visi BPKAD Provinsi Jawa Barat :&nbsp;</strong></p>\r\n\r\n<p>Badan Pengelolaan Keuangan dan Aset Daerah Provinsi Jawa Barat menetapkan komitmen untuk mewujudkan visi BPKAD kedepan yaitu: &rdquo;Mewujudkan Pengelolaan Keuangan dan Aset Daerah yang Akuntabel&rdquo;.</p>\r\n\r\n<p><br />\r\n<strong>Misi&nbsp;BPKAD Provinsi Jawa Barat :&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li>Meningkatkan akuntabilitas pengelolaan keuangan dan aset daerah serta&nbsp;&nbsp; pembinaan pengelolaan keuangan kabupaten/kota;</li>\r\n	<li>Meningkatkan kualitas pengelolaan barang milik daerah;</li>\r\n	<li>Meningkatkan kompetensi aparatur pengelola keuangan dan barang milik daerah.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>Tujuan&nbsp; BPKAD Provinsi Jawa Barat:&nbsp;</strong></p>\r\n\r\n<p>Tujuan BPKAD dalam melaksanakan tupoksinya adalah :</p>\r\n\r\n<ul>\r\n	<li>Mewujudkan&nbsp; manajemen&nbsp; pengelolaan keuangan daerah yang handal dan terintegrasi berbasis teknologi informasi&nbsp; serta Mewujudkan pengelolaan keuangan daerah kab./Kota yang akuntabel dan taat azaz;</li>\r\n	<li>Mewujudkan&nbsp; manajemen pengelolaan barang daerah&nbsp; yang&nbsp; tertib dan optimal yang&nbsp; terintegrasi berbasis teknologi informasi;</li>\r\n	<li>Mewujudkan&nbsp; manajemen pengelolaan sdm keuangan dan barang milik daerah Profesional dan kompeten.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sasaran</strong>&nbsp;<strong>BPKAD</strong>&nbsp;<strong>Provinsi Jawa Barat:&nbsp;</strong></p>\r\n\r\n<p>Sasaran merupakan suatu kondisi ideal yang hendak dicapai dalam rangka pengelolaan keuangan dan asset daerah. Sasaran yang ingin dicapai tersebut antara lain :</p>\r\n\r\n<ul>\r\n	<li>Meningkatnya kualitas pengelolaan keuangan daerah;</li>\r\n	<li>Meningkatnya kualitas pengelolaan aset daerah;</li>\r\n	<li>Meningkatkan kapasitas dan akuntabilitas kinerja pengelolaan keuangan dan aset daerah;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tugas Pokok BPKAD Provinsi Jawa Barat&nbsp;</strong></p>\r\n\r\n<p>Pengelolaan&nbsp; Keuangan Dan Aset&nbsp; Daerah Pemerintah Daerah&nbsp; Provinsi&nbsp; Jawa Barat&nbsp; mempunyai&nbsp; tugas&nbsp; pokok melaksanakan&nbsp;&nbsp; fungsi penunjang urusan&nbsp;&nbsp; pemerintahan&nbsp;&nbsp;&nbsp; bidang&nbsp;&nbsp; keuangan,&nbsp;&nbsp;&nbsp; aspek&nbsp;&nbsp;&nbsp; pengelolaan keuangan dan aset Daerah, meliputi anggaran, perbendaharaan, akuntansi&nbsp; dan&nbsp; pelaporan serta&nbsp; pengelolaan&nbsp; barang&nbsp; milik Daerah yang&nbsp; menjadi&nbsp; kewenangan&nbsp; Daerah&nbsp; Provinsi, melaksanakan&nbsp;&nbsp; tugas dekonsentrasi&nbsp;&nbsp;&nbsp; sampai&nbsp;&nbsp; dengan&nbsp;&nbsp; dibentuk&nbsp;&nbsp; Sekretariat&nbsp;&nbsp;&nbsp; Gubernur sebagai&nbsp; Wakil Pemerintah&nbsp; Pusat&nbsp; dan&nbsp; melaksanakan&nbsp; tugas pembantuan sesuai&nbsp; bidang tugasnya</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Fungsi BPKAD Provinsi Jawa Barat</strong></p>\r\n\r\n<p>Dalam menyelenggarakan tugas pokok sebagaimana tersebut di atas, BPKAD Provinsi Jawa Barat mempunyai fungsi :</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Penyelenggaraan perumusan kebijakan teknis di bidang pengelolaan keuangan dan asset daerah yang menjadi kewenangan Provinsi;</li>\r\n		<li>Penyelenggaraan pengelolaan keuangan dan asset daerah yang menjadi kewenangan Provinsi;</li>\r\n		<li>Penyelenggaraan administrasi Badan;</li>\r\n		<li>Penyelenggaraan evaluasi dan pelaporan Badan; dan</li>\r\n		<li>Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya</li>\r\n	</ol>\r\n	</li>\r\n</ol>','Website Resmi Badan Pengelolaan Keuangan dan Aset Daerah','https://bpkad.jabarprov.go.id','bpkad@jabarprov.go.id',NULL,'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115','022 - 4233347',NULL,'022 - 4233347','logo-bpkad.png','favicon.png',NULL,NULL,'https://web.facebook.com/BpkadJabar','https://twitter.com/bpkadjabarprov','https://www.instagram.com/bpkadjabarprov/','https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q','Badan Pengelolaan Keuangan dan Aset Daerah','BPKAD PROV JABAR','bpkadjabarprov','','BPKAD','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.634383807166!2d107.618288!3d-6.901534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5543cd68e7b6719d!2sBadan%20Pengelolaan%20Keuangan%20dan%20Aset%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1610946848456!5m2!1sen!2sid\" width=\"250\" height=\"250\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>','logo-dinas.png','fsH_KhUWfho','balairung-budiutomo-01.jpg','smtp','ssl://mail.mail.com','465','12','info@mail.com','1234','<a class=\"twitter-timeline\" data-width=\"400\" data-height=\"500\" href=\"https://twitter.com/bpkadjabarprov?ref_src=twsrc%5Etfw\">Tweets by bpkadjabarprov</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>','Badan Pengelolaan Keuangan dan Aset Daerah',4,'2021-01-22 19:41:40','BPKAD PROV JABAR','https://www.youtube.com/channel/UCZPhYb-0GV5t_FKE1c2u1ZA','<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbpkadjabar&tabs=timeline,messages&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId\" width=\"400\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>','bpkad-jabarprov-go-id');
/*!40000 ALTER TABLE `konfigurasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `link` (
  `id_link` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_link` int(11) DEFAULT '1',
  `id_user` int(11) NOT NULL,
  `judul_link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_galeri` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_link`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link`
--

LOCK TABLES `link` WRITE;
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` VALUES (1,NULL,4,'SIPKD',NULL,NULL,'sipkd-1612253000.png','https://sipkd.jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 01:58:48'),(2,NULL,4,'JDIH',NULL,NULL,'jdih-1612252969.png','https://jdih.jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 02:19:25'),(3,NULL,4,'LPSE',NULL,NULL,'lpse-logo-1612252941.png','https://lpse.jabarprov.go.id/eproc4',NULL,NULL,NULL,NULL,'2021-01-28 02:20:08'),(4,NULL,4,'ppid',NULL,NULL,'ppid-1612253703.png','http://ppid.jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 02:20:26'),(5,NULL,4,'pikobar',NULL,NULL,'pikobar-1612253817.jpg','https://pikobar.jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 02:22:09'),(6,NULL,4,'jabarprov.go.id',NULL,NULL,'jabarprov-1612253690.jpg','https://jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 02:22:38'),(7,NULL,4,'humas jabar',NULL,NULL,'humas-jabar-1612252820.png','http://humas.jabarprov.go.id/',NULL,NULL,NULL,NULL,'2021-01-28 02:23:08');
/*!40000 ALTER TABLE `link` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_01_19_044523_create_contacts_table',1),(2,'2021_01_23_143749_create_agenda_table',0),(3,'2021_01_23_143749_create_berita_table',0),(4,'2021_01_23_143749_create_contacts_table',0),(5,'2021_01_23_143749_create_download_table',0),(6,'2021_01_23_143749_create_galeri_table',0),(7,'2021_01_23_143749_create_heading_table',0),(8,'2021_01_23_143749_create_kategori_table',0),(9,'2021_01_23_143749_create_kategori_download_table',0),(10,'2021_01_23_143749_create_kategori_galeri_table',0),(11,'2021_01_23_143749_create_kategori_staff_table',0),(12,'2021_01_23_143749_create_konfigurasi_table',0),(13,'2021_01_23_143749_create_users_table',0),(14,'2021_01_23_143749_create_video_table',0),(15,'2021_01_27_082849_create_agenda_table',0),(16,'2021_01_27_082849_create_berita_table',0),(17,'2021_01_27_082849_create_contacts_table',0),(18,'2021_01_27_082849_create_download_table',0),(19,'2021_01_27_082849_create_galeri_table',0),(20,'2021_01_27_082849_create_heading_table',0),(21,'2021_01_27_082849_create_kategori_table',0),(22,'2021_01_27_082849_create_kategori_download_table',0),(23,'2021_01_27_082849_create_kategori_galeri_table',0),(24,'2021_01_27_082849_create_kategori_staff_table',0),(25,'2021_01_27_082849_create_konfigurasi_table',0),(26,'2021_01_27_082849_create_users_table',0),(27,'2021_01_27_082849_create_video_table',0);
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
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rahasia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Admin','Admin@admin.com','admin1','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Admin',NULL,'c22b7437-89d4-4de9-a07e-79162006e03f-2-1611721150.jpg','2021-01-18 03:51:24'),(5,'Ujang Dadang','admin@gmail.com','admin2','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Admin',NULL,'c22b7437-89d4-4de9-a07e-79162006e03f-1611721263.jpg','2021-01-27 04:21:03');
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
  `judul` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'Video Profil Nanin Nayani Adam','Video','BPKAD JABAR','ZWgVhhfL_9M',1,'maxresdefault-1611106825.jpg',4,'2021-01-20 01:40:48');
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

-- Dump completed on 2021-02-02 15:58:52
