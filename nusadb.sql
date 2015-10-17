-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: nusadb
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjualan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan`
--

LOCK TABLES `penjualan` WRITE;
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` VALUES (1,'TRX/2015/0001','2015-01-25'),(2,'TRX/2015/0002','2015-01-31'),(3,'TRX/2015/0003','2015-02-10'),(4,'TRX/2015/0004','2015-03-03'),(5,'TRX/2015/0005','2015-05-17');
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan_detil`
--

DROP TABLE IF EXISTS `penjualan_detil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjualan_detil` (
  `id_penjualan` int(10) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_satuan` int(25) NOT NULL,
  `jumlah_dijual` int(25) NOT NULL,
  KEY `id_penjualan` (`id_penjualan`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan_detil`
--

LOCK TABLES `penjualan_detil` WRITE;
/*!40000 ALTER TABLE `penjualan_detil` DISABLE KEYS */;
INSERT INTO `penjualan_detil` VALUES (1,1,20000,3),(1,2,25000,5),(1,3,12000,1),(2,2,25000,2),(3,3,12000,2),(4,2,25000,4),(4,3,12000,1),(5,1,20000,3),(5,2,25000,1),(5,3,12000,2);
/*!40000 ALTER TABLE `penjualan_detil` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-17  8:26:12
