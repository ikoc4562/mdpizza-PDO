-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u8648962_vtpizza
-- ------------------------------------------------------
-- Server version	10.0.38-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminsayfa`
--

DROP TABLE IF EXISTS `adminsayfa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminsayfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text NOT NULL,
  `ustid` int(11) NOT NULL,
  `codeID` varchar(225) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(225) NOT NULL,
  `include` varchar(225) NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminsayfa`
--

LOCK TABLES `adminsayfa` WRITE;
/*!40000 ALTER TABLE `adminsayfa` DISABLE KEYS */;
INSERT INTO `adminsayfa` (`id`, `adi`, `ustid`, `codeID`, `link`, `icon`, `include`, `durum`, `tarih`) VALUES (11,'Admin Sayfa',0,'A47E903A','','fa-arrows','',0,'2014-06-22 16:03:42'),(12,'Sayfalar',11,'B828A1BC','','fa-arrows','sayfa/admin/adminsayfa.php',1,'2014-06-22 16:04:55'),(23,'İçerik Yönetimi',0,'FEB8400D','','fa-edit','denemmeme',0,'2014-06-23 06:18:41'),(24,'Sayfalar',23,'03BD2BA1','','','sayfa/icerik/sayfa.php',1,'2014-06-23 06:19:17'),(30,'Slider Yönetimi',28,'B6F7CFED','','','sayfa/siteyonetimi/sliderindex.php',0,'2014-07-01 03:40:05'),(32,'Sayfa Parçacıkları',28,'D2EFF768','','','sayfa/siteyonetimi/sayfaparcacigi.php',1,'2014-07-01 05:23:20'),(33,'Institutionaalinen',0,'DB976F03','','fa-gear','',0,'2014-07-02 02:44:29'),(34,'Tietoa',33,'314A55E5','','','sayfa/kurumsal/index.php',1,'2014-07-02 02:46:01'),(105,'Järjestelmänvalvojien Luettelo',83,'731D1FFC','','','sayfa/uyeler/index.php',1,'2018-07-07 09:51:02'),(104,'Tarjous',103,'79D282FC','','','sayfa/kategoriler/index.php',1,'2018-07-06 17:05:24'),(103,'Tarjous Hallinta',0,'5221291C','','fa-building-o','',1,'2018-07-06 17:04:34'),(39,'Kullanıcılar',0,'BE75F4FF','','fa-users','',0,'2014-07-03 02:32:25'),(41,'Yöneticiler',39,'6F4BF901','','','sayfa/kullanicilar/yoneticiler.php',1,'2014-07-07 03:00:08'),(42,'Kullanıcı Grupları',39,'35B160DC','','','sayfa/kullanicilar/usergroup.php',1,'2014-07-07 04:03:10'),(101,'Tuotehallinta',0,'48BEA99C','','fa-edit','',1,'2019-08-10 12:08:42'),(96,'Menü',95,'2539E0F9','','','sayfa/slider/fotograf.php',1,'2018-05-25 11:03:24'),(95,'Slider Yönetimi',0,'60B8B65C','','fa-sign-in','',0,'2018-05-25 11:01:06'),(98,'Reklam Ekle',97,'CFEE3986','','','sayfa/reklamlar/fotograf.php',1,'2018-05-25 22:06:14'),(62,'Eğitmenler',90,'713572E6','','','sayfa/Egitmenler/index.php',1,'2014-10-09 11:01:30'),(97,'Reklamlar',0,'48BEA99C','','fa-bar-chart-o','',0,'2018-05-25 22:05:05'),(77,'Varaukset / Viestit',0,'CC3A483E','','fa-envelope','',1,'2014-10-14 05:24:10'),(78,'Varaus',77,'31E247D7','','','sayfa/Oneri/index.php',1,'2014-10-14 05:24:48'),(92,'Türk Müziği',69,'51C9E6F8','','','sayfa/turkmuzigi/index.php',1,'2018-05-24 14:06:30'),(83,'Käyttäjien Hallinta',0,'CDB2FA2E','','fa-bullhorn','sayfa/Users/index.php',1,'2014-11-01 09:03:53'),(102,'Tuotteet',101,'F5E0906E','','a-bar-chart-o','sayfa/magaza/index.php',1,'2018-07-01 20:16:18');
/*!40000 ALTER TABLE `adminsayfa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booktable`
--

DROP TABLE IF EXISTS `booktable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booktable` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `person` int(3) NOT NULL,
  `message` text NOT NULL,
  `aktif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booktable`
--

LOCK TABLES `booktable` WRITE;
/*!40000 ALTER TABLE `booktable` DISABLE KEYS */;
INSERT INTO `booktable` (`id`, `name`, `email`, `phone`, `date`, `time`, `person`, `message`, `aktif`) VALUES (17,'Fatih Meric KOC','ikoc4562@gmail.com','+1 (286) 436-5215','2020-03-28','16:30:00',4,'Tämä on testi viestin. älä vasta ',1),(18,'Maddison Molloy','expiry@mdkebab.com','0688 241 88 63','0000-00-00','00:00:00',0,'ATTN: mdkebab.com / MD Kebab-Pizzeria SERVICES\r\nThis notice EXPIRES ON: Mar 28, 2020.\r\n\r\nWe\'ve tried to contact you but were unable to reach you.\r\n\r\nPlease Visit: ?https://bit.ly/3akChDu??? ASAP.\r\n\r\nFor information and to make a discretionary payment for mdkebab.com services.\r\n\r\n\r\n\r\n\r\n03282020090510.\r\n',0);
/*!40000 ALTER TABLE `booktable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indirim`
--

DROP TABLE IF EXISTS `indirim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indirim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `explain99` varchar(500) DEFAULT NULL,
  `normaali` float NOT NULL,
  `aktif` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indirim`
--

LOCK TABLES `indirim` WRITE;
/*!40000 ALTER TABLE `indirim` DISABLE KEYS */;
INSERT INTO `indirim` (`id`, `name`, `explain99`, `normaali`, `aktif`) VALUES (2,'Pizzeria + 1.5L Juoma +sprite','',15,1);
/*!40000 ALTER TABLE `indirim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `explain99` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `normaali` float NOT NULL,
  `perhe` float DEFAULT NULL,
  `tyyppi` int(2) NOT NULL,
  `aktif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `name`, `explain99`, `normaali`, `perhe`, `tyyppi`, `aktif`) VALUES (5,'SISIA','salami, ananas, aurajuusto, valkosipuli',8.5,16,1,1),(3,'SALAMI','',8,14,1,1),(4,'OPERA','kinkku, tonnikala, ananas',8.5,16,1,1),(6,'AMERICANO','kinkku, ananas, aurajuusto',8.5,16,1,1),(7,'SULTAN','ananas, aurajuusto, kebab, kana, jalapeno',10.9,19.9,2,1),(8,'SEKANDARIA','kinkku,salami,pekoni,kebab,pepperoni',10.9,19.9,2,1),(9,'VEGETARIANA','',8.5,16,1,1),(10,'MEXICANO','ananas,jalopeno,pepperoni',8.5,16,1,1),(11,'POLLO','kana,kebab,salami,aurajuusto',9,18,1,1),(12,'DILLINGER','kinkku,salami,jauheliha,sipuli',9.5,18,1,1),(13,'JULIA','kinkku,ananas,katkarappu,aurajuusto',9.5,18,1,1),(15,'SMETANA','chili(vihrea),fetajuusto,kebab,sipuli,smetana,tomaatti',9.5,18,1,1),(16,'FRUTTI DI MARE','katkarappu,tonnikala,valkosipuli',9.5,18,1,1),(18,'MAKKARAKORI','',5.9,NULL,4,1),(19,'FALAFEL PITALEIVALLA',NULL,7.5,NULL,6,1),(20,'KANAPITALEIPA','kananliha,currymajoneesi,ranskalaiset perunat,salaatti',8,NULL,5,1),(21,'SUPER SALAMI ','kinkku,salami,kebab,aurajuusto',49,39,1,1),(22,'TANUR PIZZA ','tomaatti,paprika,sipuli,kebab,fetajuusto',9.5,18,1,1),(23,'ROMA','kinkku,salami,pekoni,kananmuna',9.5,18,1,1),(24,'TAABI SPECIAL','kinkku,salami.kebab,pekoni',9.5,18,1,1),(25,'OMA VALINTA','4 taytetta valinnan mukaan',9.5,18,1,1),(26,'M-DREAMS','kinkku,aurajuusto,salami,kana,kebab',10.9,19.9,2,1),(27,'EMPIRE','katkarappu,kinkku,salami,sipuli,tuplajuusto',10.9,19.9,2,1),(28,'ANSAR ','sipuli,kebab,jauheliha,tomaatti,jalopeno',10.9,19.9,2,1),(29,'MIKKELI CITY ','ananas,aurajuusto,jauheliha,kinkku,paprika,salami',11.9,20.9,2,1),(30,'MD ERIKOINEN PIZZA ','kebab,pekoni,salami,sipuli,tomaatti,chili,smetana,valkosipuli',11.9,20.9,2,1),(31,'PITALEIPAKEBAB',NULL,7.5,NULL,3,1),(32,'KEBAB RANKALASILLA','ranskalaiset perunat,kebab,jaavuorisalaatti,kurkku,tomaatti,chili',8.5,NULL,3,1),(33,'KEBAB LOHKOPERUNOILLA','lohkoperunat,kebab,jaavuorisalaatti,kurkku,tomaatti,chili',8.5,NULL,3,1),(34,'KEBAB RISILLA','basmatiriisia,kebab,jaavuorisalaatti,kurkku,tomaatti,chili',8.5,NULL,3,1),(35,'ISKENDER KEBAB','uunituore viipaloitu leipa,maustamaton jogurtti,kebab,jaavuorisalaatti,kurkku,tomaatti,chili',8.5,NULL,3,1),(36,'KEBAB VALKOSIPULIPERUNOILLA','valkosipuliperunoita,maustamateita jogurttia kebabliha,salaattia',9,NULL,3,1),(37,'KEBAB KERMAPERUNOILLA','kermaperunoita,maustamateita jogurttia kebabliha,salaattia',9,NULL,3,1),(38,'KEBAB JUUSTOPERUNOILLA','juustoperunoita,maustamateita jogurttia kebabliha,salaattia',9,NULL,3,1),(39,'KEBAB CALZONE','sisaanleivottu kebabliha,sipulia,tomaattia,edamjuustoa',9,NULL,3,1),(41,'KEBABSALAATILLA','kebablihaa,amerikansalaattia,kurkkua,tomaattia,turkinpippuria',9,NULL,3,1),(42,'ANATOLIA KEBAB ','sisaanleivottu kebablihaa,sipulia,edamjuustoa,jalapenoa,aurajuusto talon tomaattikastiketta ja valitsemasi kebab kastike',10,NULL,3,1),(43,'NAURAVAT NAKIT RANKALAISILLA',NULL,5.9,NULL,4,1),(44,'LASTEN KINKKU-ANANASPIZZA',NULL,5.9,NULL,4,1),(45,'LASTEN JAUHELIHAPIZZA',NULL,5.9,NULL,4,1),(46,'KANAKEBAB RANSKALAISILLA','kananliha,currymajoneesi,lohkoperunat,salaatti',9,NULL,5,1),(47,'KANA KEBAB RIISILLA','kananliha,currymajoneesi,riisi,salatti',9,NULL,5,1),(48,'KANAKEBAB LOHKOPERUNOILLA','kananliha,currymajoneesi,lohkoperunat,salaatti',9,NULL,5,1),(49,'KANAKEBAB SALAATILLA','kananliha,leipa,currymajoneesi,salaatti',9,NULL,5,1),(50,'KANAKEBAB KERMAPERUNOILLA','kananliha,kermaperunat,currymajoneesi,salaatti',10,NULL,5,1),(51,'FALAFEL RIISILLA',NULL,8.5,NULL,6,1),(52,'FALAFEL SALATILLA',NULL,8.5,NULL,6,1),(53,'FALAFEL RANKALAISILLA',NULL,8.5,NULL,6,1),(54,'FALAFEL LOHKOPERUNOILLA',NULL,9,NULL,6,1),(55,'FALAFEL RULLA',NULL,9,NULL,6,1),(56,'FALAFEL AURARULLA',NULL,9,NULL,6,1),(57,'FETAJUUSTORULLA','fetajuusto,kebab,majoneesi,salaatti,tomatti',9,NULL,7,1),(58,'AURAJUUSTORULLA','aurajuusto,kebab,majoneesi,salaatti,tomatti',9,NULL,7,1),(59,'KANADONER-RULLA','kananliha,majoneesi,salaatti,tomatti',9,NULL,7,1),(60,'KEBABRULLA','chilipippuri,kebab,kebabkastikke,kurkku,salaatti,tomatti',9,NULL,7,1),(61,'KASVISRULLA','kasviksia,majoneesi,salaatti,tomatti,sipulirenkaat,motzerella tikku',9,NULL,7,1),(62,'1,5L PULLO',NULL,4.5,NULL,8,1),(63,'0,5 PULLO',NULL,3,NULL,8,1),(64,'KAHVI',NULL,1.5,NULL,8,1),(65,'MAITO',NULL,1,NULL,8,1),(66,'DENEME äöi 99','deneme icerikäöi 99',13.99,29.99,1,0);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oneri`
--

DROP TABLE IF EXISTS `oneri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oneri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) NOT NULL,
  `soyadi` varchar(255) DEFAULT NULL,
  `gorevi` longtext NOT NULL,
  `adres` longtext,
  `Telefon` longtext,
  `email` longtext NOT NULL,
  `aciklama` longtext NOT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL,
  `unvan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=211 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oneri`
--

LOCK TABLES `oneri` WRITE;
/*!40000 ALTER TABLE `oneri` DISABLE KEYS */;
INSERT INTO `oneri` (`id`, `adi`, `soyadi`, `gorevi`, `adres`, `Telefon`, `email`, `aciklama`, `tarih`, `aktif`, `unvan`) VALUES (12,'Mete','ARAS','','','','metebaskan2012@gmail.com','Merhaba,\r\n\r\nUlusal Haritacılık Kuruluşu olarak tanıtılan Harita Genel Komutanlığının internet üzerindeki web adresinde bulunan iletişim bölümünde gösterdiğiniz haritanın \"Google Haritalar\" olması, taşıdığınız sıfat ile bir ikilem oluşturmuyor mu?\r\nKendi veriniz mi yok yoksa uygulamanız mı yok?\r\n\r\nMete ARAS','14-11-2014',1,''),(180,'isa',NULL,'',NULL,NULL,'ikoc4562@gmail.com','konu',NULL,NULL,NULL),(181,'fatihmeric97',NULL,'',NULL,NULL,'fatihmeric97@gmail.com','ne var kocum',NULL,NULL,NULL),(182,'fatihmeric97',NULL,'',NULL,NULL,'fatihmeric97@gmail.com','deneme mesaji',NULL,NULL,NULL),(183,'fatihmeric97',NULL,'',NULL,NULL,'ikoc4562@gmail.com','deneme mesaji',NULL,NULL,NULL),(184,'EuMedzPh',NULL,'',NULL,NULL,'','levitra sale philippines <a href=\" https://edmedz.com/# \">cheapest cialis generic</a> viagra sale asda',NULL,NULL,NULL),(185,'Noreen Sperry',NULL,'',NULL,NULL,'noreplymonkeydigital@gmail.com','hi there\r\nAs per your inquiry, here is your unique domains backlinks package quotation and options for fatihmerickoc.com\r\n\r\nhttps://www.arteseo.co/quotaion/\r\n\r\n\r\n\r\nthank you\r\nMikle\r\narteseo.co@gmail.com',NULL,NULL,NULL),(186,'CialisOnline',NULL,'',NULL,NULL,'','how can i order cialis <a href=\" http://tadmedz.com/# \">how does cialis work</a> buy cialis without rx',NULL,NULL,NULL),(187,'tadmedzcom',NULL,'',NULL,NULL,'','best place order cialis <a href=\" http://tadmedz.com/# \">how long does 20mg cialis keep in system</a> buy cialis daily use',NULL,NULL,NULL),(188,'isa KOC',NULL,'',NULL,NULL,'ikoc4562@gmail.com','deneme',NULL,NULL,NULL),(189,'CialisOnline',NULL,'',NULL,NULL,'','viagra super force for sale <a href=\" http://tadmedz.com/# \">otc cialis</a> cheapest cialis viagra',NULL,NULL,NULL),(190,'CialisOnline',NULL,'',NULL,NULL,'','levitra super active cheap us <a href=\" http://tadmedz.com/# \">when will cialis go generic</a> cheap generic viagra online',NULL,NULL,NULL),(191,'tadmedzcom',NULL,'',NULL,NULL,'','coupon for cialis <a href=\" http://tadmedz.com/# \">cialis vidalista</a> buy cialis in the usa',NULL,NULL,NULL),(192,'CialisOnline',NULL,'',NULL,NULL,'','where to buy cialis online in canada <a href=\" http://tadmedz.com/# \">does viagra or cialis help with pe</a> cheapest generic cialis uk',NULL,NULL,NULL),(193,'Eric Jones',NULL,'',NULL,NULL,'eric@talkwithwebvisitor.com','Cool website!\r\n\r\nMy nameâ€™s Eric, and I just found your site - fatihmerickoc.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what youâ€™re doing is pretty cool.\r\n \r\nBut if you donâ€™t mind me asking â€“ after someone like me stumbles across fatihmerickoc.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nIâ€™m guessing some, but I also bet youâ€™d like moreâ€¦ studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHereâ€™s a thought â€“ what if there was an easy way for every visitor to â€œraise their handâ€ to get a phone call from you INSTANTLYâ€¦ the second they hit your site and said, â€œcall me now.â€\r\n\r\nYou can â€“\r\n  \r\nTalk With Web Visitor is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know IMMEDIATELY â€“ so that you can talk to that lead while theyâ€™re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads â€“ the difference between contacting someone within 5 minutes versus 30 minutes later can be huge â€“ like 100 times better!\r\n\r\nThatâ€™s why we built out our new SMS Text With Lead featureâ€¦ because once youâ€™ve captured the visitorâ€™s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities â€“ even if you donâ€™t close a deal then and there, you can follow up with text messages for new offers, content links, even just â€œhow you doing?â€ notes to build a relationship.\r\n\r\nWouldnâ€™t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=fatihmerickoc.com\r\n',NULL,NULL,NULL),(194,'SSL Security',NULL,'',NULL,NULL,'noreply@esslcerts.com','This message is to alert you that the Free 1-Year subscription of the SSL certificate (HTTPS) on your website is no longer valid. This means that hackers can now snoop in on your website easily. Online viruses, bad actors or competitors can steal your sensitive personal information as well as your customers\' registration data for malicious purposes. \n\n Further, an invalid or expired SSL also infringes GDPR (General Data Protection Regulation; effective May 25, 2018). Article 32 of GDPR requires that regulated information must be protected with appropriate technical and organizational measures, including encryption of personal data and the ability to ensure the ongoing confidentiality of systems and services. \n\n As a result of this, Google has also started to mark all connections to your website as \"insecure\". You can check this by looking at the security status (to the left of the web address) of your website in any web browser. You will see that there is no Green PADLOCK visible next to your web address. \n\n To fix this problem, you are required to re-deploy an SSL certificate on your website now: https://esslcerts.com/fatihmerickoc.com/a/1583092966/v5 \n\n This will encrypt data and secure all connections on your website. The digital certificate will be emailed to you within minutes after verification. \n\n WARNING: Your website may stop functioning securely within 72 hours if it is reported as a malicious website, as a result of hosting insecure content. For more information see part 7.2P of our service agreement. We can not be held liable for any financial or technical losses resulting from this. \n\n Secure your website now: https://esslcerts.com/fatihmerickoc.com/a/1583092966/v5',NULL,NULL,NULL),(195,'LegPostWak',NULL,'',NULL,NULL,'legpostinform@yandex.com','ÐŸÐ°Ð²Ð»Ð¾Ð´Ð°Ñ€ Ð·Ð°ÐºÐ»Ð°Ð´ÐºÐ¸ 24/7 Ð¡ÐºÐ¾Ñ€Ð¾ÑÑ‚ÑŒ ÐœÐµÑ„ÐµÐ´Ñ€Ð¾Ð½ Ð¡Ð¿Ð°Ð¹Ñ ÐÐ½Ð°ÑˆÐ° @legpost24h \r\n \r\nÐ’ÑÐµÐ¼ Ð¿Ñ€Ð¸Ð²ÐµÑ‚, Ð²ÑÐµÐ³Ð´Ð° Ð² Ð½Ð°Ð»Ð¸Ñ‡Ð¸Ð¸ ÐÐ¼Ñ„ÐµÑ‚Ð°Ð¼Ð¸Ð½, Ð¡ÐºÐ¾Ñ€Ð¾ÑÑ‚ÑŒ, ÐœÐ”ÐŸÐ’, ÐœÐµÑ„ÐµÐ´Ñ€Ð¾Ð½. ÐœÑÑƒ-Ð¼ÑÑƒ, ÑÐ¿Ð°Ð¹Ñ Ð¡ÐŸ, Ð°Ð»ÑŒÑ„Ð°, Ð¸Ð½Ð¾Ð³Ð´Ð° Ð±Ñ‹Ð²Ð°ÐµÑ‚ Ð½Ð°Ñ‚ÑƒÑ€ÐºÐ°. \r\n \r\nÐ’Ð¾Ñ‚ Ð¼Ð¾Ð¹ Ð±Ð¾Ñ‚ Ñ‚ÐµÐ»ÐµÐ³Ñ€Ð°Ð¼: @legpost24h \r\nÐ’Ð¾Ñ‚ Ð¼Ð¾Ð¹ ÑÐ°Ð¹Ñ‚: www.legpost.cc www.legpost.biz \r\nÐžÐ±Ñ‰Ð¸Ð¹ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³ Ð² Ñ‚Ð¾Ñ€Ðµ: http://xmarket3gpgw2ftz.onion \r\n \r\nÐ£Ð´Ð°Ñ‡Ð½Ñ‹Ñ… Ð¿Ð¾ÐºÑƒÐ¿Ð¾Ðº Ð¸ ÑÑ‚Ð¾Ð¿Ñ€Ð¾Ñ†ÐµÐ½Ñ‚Ð½Ñ‹Ñ… Ð½Ð°Ñ…Ð¾Ð´Ð¾Ð²!',NULL,NULL,NULL),(196,'Viagra Online',NULL,'',NULL,NULL,'','cheap viagra from uk <a href=\" http://vclph24.com/# \">viagra prescriptions over internet</a> buy cialis daily online\r\nviagra buy online canada http://vclph24.com how can i order viagra online',NULL,NULL,NULL),(197,'Viagra Online',NULL,'',NULL,NULL,'','levitra online sale <a href=\" http://vclph24.com/# \">sildenafil vs viagra</a> cialis online pharmacy\r\ngeneric cialis cost http://vclph24.com viagra buy singapore',NULL,NULL,NULL),(198,'SSL Security',NULL,'',NULL,NULL,'noreply@esslcerts.com','This message is to alert you that the Free 1-Year subscription of the SSL certificate (HTTPS) on your website is no longer valid. This means that hackers can now snoop in on your website easily. Online viruses, bad actors or competitors can steal your sensitive personal information as well as your customers\' registration data for malicious purposes. \n\n Further, an invalid or expired SSL also infringes GDPR (General Data Protection Regulation; effective May 25, 2018). Article 32 of GDPR requires that regulated information must be protected with appropriate technical and organizational measures, including encryption of personal data and the ability to ensure the ongoing confidentiality of systems and services. \n\n As a result of this, Google has also started to mark all connections to your website as \"insecure\". You can check this by looking at the security status (to the left of the web address) of your website in any web browser. You will see that there is no Green PADLOCK visible next to your web address. \n\n To fix this problem, you are required to re-deploy an SSL certificate on your website now: https://esslcerts.com/fatihmerickoc.com/a/1584028312/v5 \n\n This will encrypt data and secure all connections on your website. The digital certificate will be emailed to you within minutes after verification. \n\n WARNING: Your website may stop functioning securely within 72 hours if it is reported as a malicious website, as a result of hosting insecure content. For more information see part 7.2P of our service agreement. We can not be held liable for any financial or technical losses resulting from this. \n\n Secure your website now: https://esslcerts.com/fatihmerickoc.com/a/1584028312/v5',NULL,NULL,NULL),(199,'DomainWeb Station',NULL,'',NULL,NULL,'noreply@domainwebstation.com','This message is to inform you that your invoice no. 1711206752 to be due on 2020-03-16 is SUSPENDED. Please ensure that you make payment AS SOON AS POSSIBLE to avoid any TERMINATION of service to fatihmerickoc.com. \n\nDo take note that if no payment is made in the next 3 business days, your data will be purged and deleted. \n\nhttps://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1584309240&p=v1 \n\nDisclaimer notice: We can not be held legally liable for any claims, damage or loss that you may incur because of the cancellation of fatihmerickoc.com. Any such damages may include but are not exclusively limited to: monetary losses, deleted data without backups, loss of position in search rankings, missed appointments, undelivered email and any other service, business or technical damages that you may incur. For more information please refer section 19.a.3.f of our Terms of Service. \n\nThis is the final renewal message that we are required to communicate in regards to the expiration fatihmerickoc.com. \n\nSECURE ONLINE PAYMENT: https://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1584309240&p=v1 \n\nAll online services will be restored automatically on fatihmerickoc.com upon confirmation of payment. We thank you for your cooperation and continued business.',NULL,NULL,NULL),(200,'SSL Security',NULL,'',NULL,NULL,'noreply@esslcerts.com','This message is to alert you that the Free 1-Year subscription of the SSL certificate (HTTPS) on your website is no longer valid. This means that hackers can now snoop in on your website easily. Online viruses, bad actors or competitors can steal your sensitive personal information as well as your customers\' registration data for malicious purposes. \n\n Further, an invalid or expired SSL also infringes GDPR (General Data Protection Regulation; effective May 25, 2018). Article 32 of GDPR requires that regulated information must be protected with appropriate technical and organizational measures, including encryption of personal data and the ability to ensure the ongoing confidentiality of systems and services. \n\n As a result of this, Google has also started to mark all connections to your website as \"insecure\". You can check this by looking at the security status (to the left of the web address) of your website in any web browser. You will see that there is no Green PADLOCK visible next to your web address. \n\n To fix this problem, you are required to re-deploy an SSL certificate on your website now: https://esslcerts.com/fatihmerickoc.com/a/1584363091/v5 \n\n This will encrypt data and secure all connections on your website. The digital certificate will be emailed to you within minutes after verification. \n\n WARNING: Your website may stop functioning securely within 72 hours if it is reported as a malicious website, as a result of hosting insecure content. For more information see part 7.2P of our service agreement. We can not be held liable for any financial or technical losses resulting from this. \n\n Secure your website now: https://esslcerts.com/fatihmerickoc.com/a/1584363091/v5',NULL,NULL,NULL),(201,'ViaPh24',NULL,'',NULL,NULL,'','sildenafil citrate generic viagra 100mg http://viaph24.com - how long does viagra last',NULL,NULL,NULL),(202,'Cialis Online',NULL,'',NULL,NULL,'','cialis tolerance http://ciaph24.com - cialis without doctor prescription',NULL,NULL,NULL),(203,'Melissa Connery',NULL,'',NULL,NULL,'expiry@fatihmerickoc.com','ATTN: fatihmerickoc.com / FMK-Technology SERVICE\r\nThis notice EXPIRES ON: Mar 20, 2020.\r\n\r\nWe tried to contact you but were unable to reach you.\r\n\r\nPlease Visit: https://cutt.ly/ztk2857 ASAP.\r\n\r\nFor information and to make a discretionary payment for fatihmerickoc.com services.\r\n\r\n\r\n\r\n03202020201123.\r\n',NULL,NULL,NULL),(204,'DomainWeb Station',NULL,'',NULL,NULL,'noreply@domainwebstation.com','This message is to inform you that your invoice no. 1509500123 to be due on 2020-03-21 is SUSPENDED. Please ensure that you make payment AS SOON AS POSSIBLE to avoid any TERMINATION of service to fatihmerickoc.com. \n\nDo take note that if no payment is made in the next 3 business days, your data will be purged and deleted. \n\nhttps://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1584752010&p=v1 \n\nDisclaimer notice: We can not be held legally liable for any claims, damage or loss that you may incur because of the cancellation of fatihmerickoc.com. Any such damages may include but are not exclusively limited to: monetary losses, deleted data without backups, loss of position in search rankings, missed appointments, undelivered email and any other service, business or technical damages that you may incur. For more information please refer section 19.a.3.f of our Terms of Service. \n\nThis is the final renewal message that we are required to communicate in regards to the expiration fatihmerickoc.com. \n\nSECURE ONLINE PAYMENT: https://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1584752010&p=v1 \n\nAll online services will be restored automatically on fatihmerickoc.com upon confirmation of payment. We thank you for your cooperation and continued business.',NULL,NULL,NULL),(205,'alexa24ph',NULL,'',NULL,NULL,'','generic viagra available http://alexa24ph.com - what is viagra',NULL,NULL,NULL),(206,'DomainWeb Station',NULL,'',NULL,NULL,'noreply@domainwebstation.com','This message is to inform you that your invoice no. 1382074806 to be due on 2020-03-26 is SUSPENDED. Please ensure that you make payment AS SOON AS POSSIBLE to avoid any TERMINATION of service to fatihmerickoc.com. \n\nDo take note that if no payment is made in the next 3 business days, your data will be purged and deleted. \n\nhttps://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1585249152&p=v1 \n\nDisclaimer notice: We can not be held legally liable for any claims, damage or loss that you may incur because of the cancellation of fatihmerickoc.com. Any such damages may include but are not exclusively limited to: monetary losses, deleted data without backups, loss of position in search rankings, missed appointments, undelivered email and any other service, business or technical damages that you may incur. For more information please refer section 19.a.3.f of our Terms of Service. \n\nThis is the final renewal message that we are required to communicate in regards to the expiration fatihmerickoc.com. \n\nSECURE ONLINE PAYMENT: https://domainwebstation.com/?n=fatihmerickoc.com&r=a&t=1585249152&p=v1 \n\nAll online services will be restored automatically on fatihmerickoc.com upon confirmation of payment. We thank you for your cooperation and continued business.',NULL,NULL,NULL),(207,'tadal24ph',NULL,'',NULL,NULL,'','cialis before and after http://tadal24ph.com - where to bay cialis (tadalafil) pills 80mg',NULL,NULL,NULL),(208,'Eric Jones',NULL,'',NULL,NULL,'eric@talkwithwebvisitor.com','Hey, this is Eric and I ran across fatihmerickoc.com a few minutes ago.\r\n\r\nLooks greatâ€¦ but now what?\r\n\r\nBy that I mean, when someone like me finds your website â€“ either through Search or just bouncing around â€“ what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a siteâ€™s visitors disappear and are gone forever after just a moment.\r\n\r\nHereâ€™s an ideaâ€¦\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your siteâ€¦\r\n \r\nYou can â€“\r\n  \r\nTalk With Web Visitor is a software widget thatâ€™s works on your site, ready to capture any visitorâ€™s Name, Email address and Phone Number.  It signals you the moment they let you know theyâ€™re interested â€“ so that you can talk to that lead while theyâ€™re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nYouâ€™ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even betterâ€¦ once youâ€™ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you donâ€™t close a deal right away, you can follow up with text messages for new offers, content links, even just â€œhow you doing?â€ notes to build a relationship.\r\n\r\nPretty sweet â€“ AND effective.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial â€“ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right nowâ€¦ donâ€™t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=fatihmerickoc.com\r\n',NULL,NULL,NULL),(209,'Eric Jones',NULL,'',NULL,NULL,'eric@talkwithwebvisitor.com','Hey there, I just found your site, quick questionâ€¦\r\n\r\nMy nameâ€™s Eric, I found fatihmerickoc.com after doing a quick search â€“ you showed up near the top of the rankings, so whatever youâ€™re doing for SEO, looks like itâ€™s working well.\r\n\r\nSo hereâ€™s my question â€“ what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappearâ€¦ forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work â€“ and the great site youâ€™ve built â€“ go to waste?\r\n\r\nBecause the odds are theyâ€™ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut hereâ€™s a thoughtâ€¦ what if you could make it super-simple for someone to raise their hand, say, â€œokay, letâ€™s talkâ€ without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can â€“ thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know IMMEDIATELY â€“ so that you can talk to that lead while theyâ€™re still there at your site.\r\n  \r\nYou know, strike when the ironâ€™s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast â€“ the difference between contacting someone within 5 minutes versus 30 minutes later is huge â€“ like 100 times better!\r\n\r\nThatâ€™s why you should check out our new SMS Text With Lead feature as wellâ€¦ once youâ€™ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be â€“ even if they donâ€™t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the ironâ€™s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to learn more about everything Talk With Web Visitor can do for your business â€“ youâ€™ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial â€“ you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that donâ€™t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=fatihmerickoc.com\r\n',NULL,NULL,NULL),(210,'Eric Jones',NULL,'',NULL,NULL,'eric@talkwithwebvisitor.com','Hey there, I just found your site, quick questionâ€¦\r\n\r\nMy nameâ€™s Eric, I found fatihmerickoc.com after doing a quick search â€“ you showed up near the top of the rankings, so whatever youâ€™re doing for SEO, looks like itâ€™s working well.\r\n\r\nSo hereâ€™s my question â€“ what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappearâ€¦ forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work â€“ and the great site youâ€™ve built â€“ go to waste?\r\n\r\nBecause the odds are theyâ€™ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut hereâ€™s a thoughtâ€¦ what if you could make it super-simple for someone to raise their hand, say, â€œokay, letâ€™s talkâ€ without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can â€“ thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitorâ€™s Name, Email address and Phone Number.  It lets you know IMMEDIATELY â€“ so that you can talk to that lead while theyâ€™re still there at your site.\r\n  \r\nYou know, strike when the ironâ€™s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast â€“ the difference between contacting someone within 5 minutes versus 30 minutes later is huge â€“ like 100 times better!\r\n\r\nThatâ€™s why you should check out our new SMS Text With Lead feature as wellâ€¦ once youâ€™ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be â€“ even if they donâ€™t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the ironâ€™s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to learn more about everything Talk With Web Visitor can do for your business â€“ youâ€™ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial â€“ you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that donâ€™t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=fatihmerickoc.com\r\n',NULL,NULL,NULL);
/*!40000 ALTER TABLE `oneri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tyyppi`
--

DROP TABLE IF EXISTS `tyyppi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tyyppi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tyyppi`
--

LOCK TABLES `tyyppi` WRITE;
/*!40000 ALTER TABLE `tyyppi` DISABLE KEYS */;
INSERT INTO `tyyppi` (`id`, `nimi`) VALUES (1,'PIZZAT'),(2,'ERIKOIS PIZZAT'),(3,'KEBABIT'),(4,'LASTEN ANNOKSET'),(5,'KANA DÖNER KABABIT'),(6,'FALAFEL'),(7,'RULLA MIX'),(8,'JUOMAT');
/*!40000 ALTER TABLE `tyyppi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeID` varchar(50) NOT NULL,
  `adsoyad` varchar(50) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `kayittarihi` text NOT NULL,
  `songiristarihi` text NOT NULL,
  `uyegrubu` varchar(30) NOT NULL,
  `durum` int(11) NOT NULL,
  `sifre` varchar(225) NOT NULL,
  `groupID` int(11) NOT NULL,
  `dogumtarihi` varchar(30) NOT NULL,
  `cinsiyet` varchar(20) NOT NULL,
  `avatar` varchar(225) NOT NULL,
  `telefon` varchar(225) NOT NULL,
  `ceptelefonu` varchar(225) NOT NULL,
  `ilid` int(11) NOT NULL,
  `ulkeid` int(11) NOT NULL,
  `tckimlik` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uyeler`
--

LOCK TABLES `uyeler` WRITE;
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;
INSERT INTO `uyeler` (`id`, `codeID`, `adsoyad`, `eposta`, `kayittarihi`, `songiristarihi`, `uyegrubu`, `durum`, `sifre`, `groupID`, `dogumtarihi`, `cinsiyet`, `avatar`, `telefon`, `ceptelefonu`, `ilid`, `ulkeid`, `tckimlik`) VALUES (2,'213124','Hallintomies','isakoc','','','',1,'isakoc',1,'09-09-1996','bayan','','','',1,1,'12312431231234'),(7,'213124','fatih','fatih@gmail.com','','','',0,'',0,'','','','','',0,0,'');
/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'u8648962_vtpizza'
--

--
-- Dumping routines for database 'u8648962_vtpizza'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-28 17:24:29
