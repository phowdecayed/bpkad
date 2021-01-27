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
  `slug_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 0,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `id_kategori` int(11) DEFAULT 0,
  `updater` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `slug_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_berita` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Berita',
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,4,0,'-','undang-undang','Undang - Undang','<table align=\"center\" border=\"1\" bordercolor=\"#ccc\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse:collapse\">\n<caption>\n<p>&nbsp;</p>\n</caption>\n<thead>\n<tr>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">No.</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Judul Arsip</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Deskripsi</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Jenis Arsip</div>\n</th>\n<th scope=\"col\">\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Download</div>\n</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td style=\"text-align:center\">1</td>\n<td style=\"text-align:center\">Undang Undang Nomor 12 Tahun 2008</td>\n<td style=\"text-align:center\">Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</td>\n<td style=\"text-align:center\">Produk Hukum</td>\n<td style=\"text-align:center\"><a href=\"http://localhost:8080/bpkad-web/download/unduh/6\"><input name=\"Download\" type=\"button\" value=\"Download\" /></a></td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n</tbody>\n</table>','Publish','Layanan',NULL,'logo-dinas-1611050443.png',NULL,NULL,1,NULL,NULL,'2021-01-18 04:40:37','2021-01-18 04:40:29','2021-01-22 21:03:28'),(2,4,1,'-','jabar-juara','Jabar Juara','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel consequat lacus, quis facilisis risus. Etiam scelerisque, ligula quis vulputate vehicula, nisi turpis condimentum augue, ac vulputate magna nisl at orci. Sed scelerisque congue gravida. Pellentesque ultricies lectus congue velit egestas placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer mattis dolor arcu, id aliquet mi vehicula at. Praesent congue, massa a congue condimentum, sapien quam mollis tellus, eu egestas lacus tellus a ante. Ut nibh neque, egestas eget sem sodales, lacinia suscipit odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet leo nibh. Vestibulum viverra libero a sem cursus, ultrices malesuada ligula cursus. Etiam mattis ut quam at scelerisque. Sed euismod malesuada risus.</p>\n\n<p>Pellentesque erat justo, egestas sed gravida a, fermentum eu tellus. Quisque placerat odio sed neque commodo, ut mollis leo sagittis. Vestibulum malesuada augue ac risus tempor, sed consequat elit laoreet. Nunc convallis non justo non suscipit. Vivamus at metus ipsum. Aliquam ultrices congue aliquet. Mauris dignissim, metus sit amet aliquet posuere, magna tellus condimentum ex, interdum sollicitudin magna nisl vel massa.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget sem sem. Mauris luctus nisi nec tortor posuere aliquet. Pellentesque sit amet sapien leo. Suspendisse nisi ante, consequat in tincidunt eget, rhoncus eget risus. Aliquam mattis auctor consectetur. Fusce non rutrum odio. Praesent pulvinar, justo non volutpat molestie, velit sem elementum magna, at mattis orci magna non metus. Quisque et arcu placerat, imperdiet lectus sed, iaculis justo. Donec mollis urna turpis, in sollicitudin dolor posuere sed.</p>\n\n<p>Sed eget pharetra odio, nec congue ipsum. Proin posuere eros vitae felis sagittis, eget convallis lacus vestibulum. Aliquam sagittis tincidunt sollicitudin. Duis imperdiet sed justo eu congue. Donec nec magna vel tortor tincidunt rutrum. Praesent aliquam congue est, eget vestibulum neque imperdiet sit amet. Quisque at metus quis leo lobortis tincidunt. Aliquam erat volutpat. Cras nec luctus mi. Duis fermentum et leo nec viverra. Cras sit amet eleifend ipsum. Nullam justo massa, pulvinar fermentum tempor vel, rutrum sed felis. In at consectetur ligula, vitae rutrum tellus. Curabitur nec elit tincidunt, venenatis metus id, hendrerit elit. Donec pharetra, ex vitae lobortis lacinia, dolor ligula sollicitudin magna, eu pellentesque est ex a lorem.</p>\n\n<p>Curabitur nec lobortis magna, iaculis iaculis massa. Sed luctus eget arcu vitae elementum. Morbi vel sagittis diam, sed faucibus nisl. Praesent ut mattis quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam massa dui, tincidunt in vulputate vitae, tincidunt id justo. Suspendisse potenti. Maecenas mollis elit justo, vitae imperdiet metus aliquam quis. Suspendisse imperdiet, sem ut commodo congue, tortor nibh molestie lectus, vel lacinia sem sem in libero. Duis finibus gravida nisl et efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>','Publish','Berita',NULL,'2d182c0b00f8fbfbf9ced554271176ba-1611033232.jpg','fa-rocket',NULL,NULL,NULL,NULL,'2021-01-19 05:13:53','2021-01-19 05:07:13','2021-01-22 14:20:43'),(3,4,2,'-','ujang-kemod','ujang Kemod','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel consequat lacus, quis facilisis risus. Etiam scelerisque, ligula quis vulputate vehicula, nisi turpis condimentum augue, ac vulputate magna nisl at orci. Sed scelerisque congue gravida. Pellentesque ultricies lectus congue velit egestas placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer mattis dolor arcu, id aliquet mi vehicula at. Praesent congue, massa a congue condimentum, sapien quam mollis tellus, eu egestas lacus tellus a ante. Ut nibh neque, egestas eget sem sodales, lacinia suscipit odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet leo nibh. Vestibulum viverra libero a sem cursus, ultrices malesuada ligula cursus. Etiam mattis ut quam at scelerisque. Sed euismod malesuada risus.</p>\n\n<p>Pellentesque erat justo, egestas sed gravida a, fermentum eu tellus. Quisque placerat odio sed neque commodo, ut mollis leo sagittis. Vestibulum malesuada augue ac risus tempor, sed consequat elit laoreet. Nunc convallis non justo non suscipit. Vivamus at metus ipsum. Aliquam ultrices congue aliquet. Mauris dignissim, metus sit amet aliquet posuere, magna tellus condimentum ex, interdum sollicitudin magna nisl vel massa.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget sem sem. Mauris luctus nisi nec tortor posuere aliquet. Pellentesque sit amet sapien leo. Suspendisse nisi ante, consequat in tincidunt eget, rhoncus eget risus. Aliquam mattis auctor consectetur. Fusce non rutrum odio. Praesent pulvinar, justo non volutpat molestie, velit sem elementum magna, at mattis orci magna non metus. Quisque et arcu placerat, imperdiet lectus sed, iaculis justo. Donec mollis urna turpis, in sollicitudin dolor posuere sed.</p>\n\n<p>Sed eget pharetra odio, nec congue ipsum. Proin posuere eros vitae felis sagittis, eget convallis lacus vestibulum. Aliquam sagittis tincidunt sollicitudin. Duis imperdiet sed justo eu congue. Donec nec magna vel tortor tincidunt rutrum. Praesent aliquam congue est, eget vestibulum neque imperdiet sit amet. Quisque at metus quis leo lobortis tincidunt. Aliquam erat volutpat. Cras nec luctus mi. Duis fermentum et leo nec viverra. Cras sit amet eleifend ipsum. Nullam justo massa, pulvinar fermentum tempor vel, rutrum sed felis. In at consectetur ligula, vitae rutrum tellus. Curabitur nec elit tincidunt, venenatis metus id, hendrerit elit. Donec pharetra, ex vitae lobortis lacinia, dolor ligula sollicitudin magna, eu pellentesque est ex a lorem.</p>\n\n<p>Curabitur nec lobortis magna, iaculis iaculis massa. Sed luctus eget arcu vitae elementum. Morbi vel sagittis diam, sed faucibus nisl. Praesent ut mattis quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam massa dui, tincidunt in vulputate vitae, tincidunt id justo. Suspendisse potenti. Maecenas mollis elit justo, vitae imperdiet metus aliquam quis. Suspendisse imperdiet, sem ut commodo congue, tortor nibh molestie lectus, vel lacinia sem sem in libero. Duis finibus gravida nisl et efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>','Publish','Berita',NULL,'10-1611326347.jpg',NULL,NULL,1,NULL,NULL,'2021-01-19 05:14:37','2021-01-19 05:14:23','2021-01-22 14:39:07'),(4,4,2,'-','uwoww','uwoww','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>\n\n<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>\n\n<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>\n\n<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>\n\n<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>','Publish','Berita',NULL,'12-1611332785.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-22 16:26:25','2021-01-22 16:25:28','2021-01-22 16:26:25'),(5,4,1,'-','dooor','dooor','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>\n\n<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>\n\n<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>\n\n<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>\n\n<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>','Publish','Berita',NULL,'22-1611332818.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-22 16:26:58','2021-01-22 16:26:39','2021-01-22 16:26:58'),(6,4,2,'-','loggg','loggg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>\n\n<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>\n\n<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>\n\n<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>\n\n<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>','Publish','Berita',NULL,'6-2-1611332985.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-22 16:29:45','2021-01-22 16:29:33','2021-01-22 16:29:45'),(7,4,1,'-','dorooon','dorooon','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique faucibus ante, quis pulvinar velit iaculis vulputate. Integer bibendum et neque non condimentum. Suspendisse in ex non arcu commodo consectetur at non sem. Vestibulum convallis malesuada justo, et tempor arcu auctor sed. Mauris ultricies finibus sem, id accumsan odio luctus a. Nam lobortis urna sit amet elit fringilla tempus. Donec pulvinar aliquam dui, vitae rhoncus purus porta ac. In ac tempor dolor. Donec ultricies purus ac augue ornare cursus. Aenean pretium pharetra mauris vitae hendrerit. Donec et odio suscipit, dictum nibh a, mollis metus. Nunc blandit elementum risus, quis fringilla dui maximus ac. Nulla viverra velit est, non scelerisque lorem imperdiet at. Duis sit amet sem eu leo ullamcorper ultricies.</p>\n\n<p>In feugiat neque quis urna volutpat, sed hendrerit felis vestibulum. Donec ullamcorper nisi a est lacinia, nec dapibus ex mattis. Morbi ullamcorper purus vel diam condimentum auctor. Etiam finibus eget nisi id euismod. Suspendisse ut dignissim orci. Vivamus vel interdum urna, ut viverra libero. Sed nec quam dapibus, consequat nisl sit amet, dapibus neque. Mauris porta mauris in lacus porta pulvinar.</p>\n\n<p>In vitae auctor nunc. Vivamus vel dolor eget mi euismod pellentesque id eu odio. Sed eleifend nisi eget magna placerat ullamcorper. In ut eros leo. Ut id libero et dui tincidunt tempus. Curabitur risus justo, elementum vitae volutpat bibendum, sollicitudin non nisl. Pellentesque est augue, varius placerat lacus tristique, luctus aliquet nulla. Nam id ligula neque. Proin laoreet ut lectus in vestibulum. Phasellus eu dolor risus. Ut euismod vulputate laoreet. Sed vel semper metus, in accumsan tortor. Proin non rhoncus enim, quis finibus nisl.</p>\n\n<p>Sed consectetur vel diam id commodo. Etiam sit amet turpis arcu. Sed id bibendum purus, et ultrices tortor. Nullam iaculis nisl vel venenatis auctor. Aenean et rhoncus lacus. Etiam gravida rutrum sem a maximus. Phasellus ultricies eleifend nunc, vehicula finibus augue aliquam vitae. Sed sem felis, lobortis eu venenatis a, consectetur quis ligula. Nam egestas lobortis luctus. Vivamus sed volutpat orci. Nulla arcu sapien, vestibulum non est sed, elementum sollicitudin orci. Fusce tincidunt ante diam, id mattis metus sagittis et. Suspendisse ac eros cursus ex tristique fringilla.</p>\n\n<p>Cras consequat interdum nulla. Fusce rhoncus vulputate sem, non accumsan ante ullamcorper a. Donec at euismod neque. Ut turpis ante, consequat vel tellus ac, maximus pulvinar nisl. Cras cursus purus sapien, ac aliquet nisi finibus eget. Morbi scelerisque condimentum velit ac pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris pretium, purus id suscipit laoreet, neque lectus lobortis mi, a accumsan ante ante at nibh.</p>','Publish','Berita',NULL,'18-1611333809.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-22 16:43:29','2021-01-22 16:43:04','2021-01-22 16:43:29'),(8,4,2,'-','lorem-ipsum','Lorem Ipsum','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo, nisi volutpat mattis ultricies, est velit tincidunt erat, ut interdum tortor risus sed arcu. Fusce interdum eget magna molestie consectetur. Aliquam rhoncus ante nisl, lobortis convallis erat malesuada ut. Donec lobortis vulputate bibendum. Cras sit amet porta erat. Vivamus porta nulla eget sapien blandit, nec fringilla libero tristique. Curabitur libero ex, imperdiet ac lectus sit amet, congue iaculis ipsum.</p>\r\n\r\n<p>Pellentesque tristique lacus blandit augue tincidunt, sit amet ornare nunc tristique. Curabitur ut leo et elit varius luctus eu ac mauris. Ut ullamcorper libero id felis molestie, vel mattis risus semper. Donec vulputate, justo at dignissim blandit, odio orci gravida urna, sed hendrerit lorem erat sed lectus. Etiam placerat sodales maximus. Donec suscipit efficitur arcu. Phasellus ac mauris at orci gravida dignissim vel et elit. Aenean interdum, turpis non imperdiet tincidunt, magna elit sollicitudin elit, eu maximus magna est id sem. Cras et blandit purus.</p>\r\n\r\n<p>Vivamus fermentum pretium vestibulum. Pellentesque laoreet, ligula eget malesuada iaculis, orci mauris congue tortor, a cursus est diam sit amet ipsum. Curabitur mollis eros in elit suscipit laoreet. Nam porttitor auctor justo, a maximus turpis suscipit vel. Fusce a dui dapibus, lobortis lorem eget, egestas quam. Vivamus a tincidunt dolor. Sed eleifend gravida congue.</p>\r\n\r\n<p>Proin porta purus non tortor gravida rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent ultricies dolor non felis ultrices, ac auctor ligula cursus. Ut semper odio metus, dapibus lobortis leo condimentum ac. Ut vel vestibulum magna. Vivamus condimentum maximus aliquet. Nullam in dignissim leo. Mauris id vestibulum arcu, in suscipit lectus. Nunc dapibus sed ipsum et condimentum. Vestibulum placerat varius cursus. Vestibulum efficitur risus risus, vel dictum lacus interdum id. Cras non purus in orci viverra pellentesque. Donec vestibulum sodales urna eu porttitor. Donec tincidunt lectus lorem. Curabitur sed justo enim.</p>\r\n\r\n<p>Donec varius pulvinar dui at posuere. In hac habitasse platea dictumst. Sed vel augue fringilla, fringilla tellus id, porttitor libero. Integer in massa quis nibh scelerisque posuere eu eu orci. Maecenas eget dolor ut nibh tincidunt ullamcorper et non sem. Sed vitae erat ut diam porttitor vestibulum placerat vel mi. Curabitur dolor nulla, ultricies nec diam sit amet, consequat interdum tortor. Suspendisse efficitur malesuada faucibus. Curabitur nisi ipsum, vulputate eget congue eu, lobortis et leo. Ut facilisis lectus vel enim pellentesque, eget laoreet elit aliquam. Fusce sollicitudin ipsum nunc, id vehicula massa pretium ut. Pellentesque tincidunt massa velit, nec ultrices ante vehicula viverra. Fusce ac dolor nibh. Praesent libero nisl, varius ac odio nec, mollis mattis leo. Sed ullamcorper dolor lacus, at commodo nibh luctus at. Maecenas rutrum malesuada arcu finibus porta.</p>','Publish','Berita',NULL,'78847618-3181187181896522-7322660115713097728-o-1611713193.jpg',NULL,NULL,NULL,NULL,NULL,'2021-01-27 02:06:33','2021-01-27 02:04:47','2021-01-27 02:06:33');
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
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 0,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (1,1,4,'BPKAD','Homepage','Test','12-1611305339.jpg','http://bpkad.jabarprov.go.id',NULL,'Publish',NULL,'Ya','2021-01-22 08:48:59'),(2,1,4,'BPKAD-Test','Homepage','Donk','13-1611305324.jpg','http://bpkad.jabarprov.go.id',NULL,'Publish',NULL,'Ya','2021-01-22 08:48:44');
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
  `judul_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_download`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
-- Table structure for table `kategori_staff`
--

DROP TABLE IF EXISTS `kategori_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `tentang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_google_plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `facebook_page` text COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `disqus_shortname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'bpkad-jabarprov-go-id',
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konfigurasi`
--

LOCK TABLES `konfigurasi` WRITE;
/*!40000 ALTER TABLE `konfigurasi` DISABLE KEYS */;
INSERT INTO `konfigurasi` VALUES (1,'Badan Pengelolaan Keuangan dan Aset Daerah','Struktur Organisasi','Bersama Kita Bisa','Jabar Juara Lahir Batin Dengan Kolaborasi dan Inovasi','<p style=\"text-align:center\"><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/7/77/Struktur_Organisasi_Pusdiklat.png\" style=\"height:612px; width:712px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a justo rutrum, suscipit dolor nec, accumsan orci. Maecenas leo mi, mollis ac velit vitae, eleifend feugiat tortor. Integer libero ante, ultrices ac hendrerit ac, ultricies ac nibh. Integer aliquet, tellus non semper aliquet, magna lacus suscipit tortor, a varius nisl libero in massa. In at suscipit ipsum. Ut ut tincidunt risus. Ut vitae maximus ligula, in dapibus metus. Fusce quis ligula ac eros molestie dictum. Sed justo leo, dignissim ut purus ultricies, tristique aliquet urna.</p>\r\n\r\n<p style=\"text-align:justify\">Mauris sed ultrices diam. Morbi luctus laoreet ullamcorper. Suspendisse aliquet libero et auctor interdum. Aenean mattis odio eget lacus fermentum, eget semper diam semper. Sed pretium scelerisque enim in efficitur. Quisque pretium lorem quis leo ullamcorper placerat. Nam aliquet lectus id fermentum varius. Donec ut turpis eget ligula suscipit ornare quis a nisl. Mauris facilisis ipsum dolor, eu dignissim tortor molestie ac. Aliquam nec enim in arcu sollicitudin consectetur. Duis aliquet, arcu ut rutrum luctus, enim eros bibendum tellus, ac dapibus odio sem eu purus.</p>\r\n\r\n<p style=\"text-align:justify\">Donec maximus neque lacus, sit amet lacinia felis semper at. Vestibulum at lacus vitae enim ultrices condimentum. Integer eget dui metus. Nunc purus enim, accumsan ac dui vitae, rhoncus tristique dui. Proin a imperdiet ante. Donec sed dapibus urna, non mollis urna. Integer tincidunt, nibh vel congue finibus, ligula neque semper leo, a bibendum felis eros ac est. Sed interdum arcu vel dapibus pharetra. Nullam efficitur nisl nunc, eu venenatis magna accumsan sagittis. Quisque non accumsan mauris.</p>\r\n\r\n<p style=\"text-align:justify\">Vestibulum eu quam nec urna ullamcorper dictum ut at nibh. Curabitur ut porta lacus. Donec congue convallis purus, in vulputate urna luctus ut. Vestibulum massa risus, accumsan eget porttitor semper, pulvinar nec orci. Integer ac accumsan turpis. Curabitur pharetra lorem eu felis interdum, et rhoncus nisi blandit. Praesent vestibulum ornare metus nec bibendum. Ut dictum turpis quis sagittis elementum. Vivamus venenatis est ut risus dignissim, in viverra ligula auctor. Sed pretium erat vel luctus tempus. Praesent nec purus at augue eleifend condimentum. Morbi id accumsan ipsum, quis varius arcu. Mauris nec nisi ac libero egestas dignissim sit amet ut ante. Vivamus egestas arcu a ligula sodales venenatis.</p>\r\n\r\n<p style=\"text-align:justify\">Nullam a fringilla velit. Integer ullamcorper nunc faucibus efficitur hendrerit. Sed ut feugiat lectus. Praesent a egestas tortor. In ac metus sit amet velit semper rhoncus. Proin et erat tristique magna venenatis consequat fringilla id ex. Quisque feugiat enim in mollis ornare. Nullam lacus orci, elementum ut sem et, accumsan dignissim metus. Phasellus metus turpis, tristique id ligula ac, bibendum fermentum quam. Nam orci mi, condimentum at dapibus eget, pulvinar eget mauris. Pellentesque sollicitudin nunc est, sed hendrerit libero iaculis ut. Sed accumsan mauris enim, sit amet faucibus velit pellentesque nec. Maecenas porta dictum elit quis molestie. Nunc dignissim tortor vel maximus malesuada.</p>','Website Resmi Badan Pengelolaan Keuangan dan Aset Daerah','https://bpkad.jabarprov.go.id','bpkad@jabarprov.go.id',NULL,'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115','022 - 4233347',NULL,'022 - 4233347','logo-bpkad.png','favicon.png',NULL,NULL,'https://web.facebook.com/BpkadJabar','https://twitter.com/bpkadjabarprov','https://www.instagram.com/bpkadjabarprov/','https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q','Badan Pengelolaan Keuangan dan Aset Daerah','BPKAD PROV JABAR','BPKAD Provinsi Jawa Barat','','BPKAD','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.634383807166!2d107.618288!3d-6.901534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5543cd68e7b6719d!2sBadan%20Pengelolaan%20Keuangan%20dan%20Aset%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1610946848456!5m2!1sen!2sid\" width=\"250\" height=\"250\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>','logo-dinas.png','fsH_KhUWfho','balairung-budiutomo-01.jpg','smtp','ssl://mail.mail.com','465','12','info@mail.com','1234','<a class=\"twitter-timeline\" data-width=\"500\" data-height=\"365\" href=\"https://twitter.com/bpkadjabarprov?ref_src=twsrc%5Etfw\">Tweets by bpkadjabarprov</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>','Badan Pengelolaan Keuangan dan Aset Daerah',4,'2021-01-22 19:41:40','BPKAD PROV JABAR','https://www.youtube.com/channel/UCZPhYb-0GV5t_FKE1c2u1ZA','<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbpkadjabar&tabs=timeline%2C%20messages&width=360&height=385&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=424845868955585\" width=\"360\" height=\"400\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>','bpkad-jabarprov-go-id');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_01_19_044523_create_contacts_table',1),(2,'2021_01_23_143749_create_agenda_table',0),(3,'2021_01_23_143749_create_berita_table',0),(4,'2021_01_23_143749_create_contacts_table',0),(5,'2021_01_23_143749_create_download_table',0),(6,'2021_01_23_143749_create_galeri_table',0),(7,'2021_01_23_143749_create_heading_table',0),(8,'2021_01_23_143749_create_kategori_table',0),(9,'2021_01_23_143749_create_kategori_download_table',0),(10,'2021_01_23_143749_create_kategori_galeri_table',0),(11,'2021_01_23_143749_create_kategori_staff_table',0),(12,'2021_01_23_143749_create_konfigurasi_table',0),(13,'2021_01_23_143749_create_users_table',0),(14,'2021_01_23_143749_create_video_table',0);
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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

-- Dump completed on 2021-01-27 13:38:12
