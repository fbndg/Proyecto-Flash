-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: flashtore
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB

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
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,1,'Atila','1111'),(2,1,'fbn','2222');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Desktop'),(2,'Notebook'),(3,'Impresora'),(4,'Nei');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,1,'Leticia natalia','Fernandez',NULL,16778533,NULL,NULL,NULL,3518962017,NULL,NULL,NULL,'bella vista','Mayor 962'),(2,2,'Claudia sandra','Vilchez',NULL,38159147,NULL,NULL,NULL,3513698568,NULL,NULL,NULL,'bella vista','Alejandro centeno 1658'),(3,3,'Matias benjamin','Bustamante',NULL,39249751,NULL,NULL,NULL,3518745215,NULL,NULL,NULL,'bella vista','Emilio achaval 1060'),(4,4,'Anahi','Vallejos',NULL,33267148,NULL,NULL,NULL,3517489630,NULL,NULL,NULL,'Guemes','Domingo funes 1257'),(5,5,'Gaston martina','Centeno',NULL,38526475,NULL,NULL,NULL,3513698562,NULL,NULL,NULL,'Caceres','Santa maria 1410'),(6,6,'Julian nahuel','Calvano',NULL,37992568,NULL,NULL,NULL,3515874962,NULL,NULL,NULL,'Bella vista','Venus 998'),(7,7,'Cristian javier','Costa',NULL,27582367,NULL,NULL,NULL,3516987451,NULL,NULL,NULL,'Bella vista','Bambilla 960'),(8,8,'Alba azul','Pereyra',NULL,25469158,NULL,NULL,NULL,3513698598,NULL,NULL,NULL,'Bella vista','Jose de iriarte 1100'),(9,9,'Paola andrea','Solis',NULL,31259248,NULL,NULL,NULL,3518957426,NULL,NULL,NULL,'Bella vista','Corro 1050');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `condicioniva`
--

LOCK TABLES `condicioniva` WRITE;
/*!40000 ALTER TABLE `condicioniva` DISABLE KEYS */;
INSERT INTO `condicioniva` VALUES (1,'Responsable inscripto'),(2,'Monotributista'),(3,'Exento'),(4,'No responsable'),(5,'Consumidor final');
/*!40000 ALTER TABLE `condicioniva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `descuentos`
--

LOCK TABLES `descuentos` WRITE;
/*!40000 ALTER TABLE `descuentos` DISABLE KEYS */;
INSERT INTO `descuentos` VALUES (1,'efectivo',500.00),(2,'promocion',250.00),(3,'acumulativo',200.00),(4,'no acumulativo',150.00);
/*!40000 ALTER TABLE `descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `detallesfactura`
--

LOCK TABLES `detallesfactura` WRITE;
/*!40000 ALTER TABLE `detallesfactura` DISABLE KEYS */;
INSERT INTO `detallesfactura` VALUES (1,1,1,1,14839.00,13490.00,1),(2,2,2,2,13995.00,0.00,1),(3,3,3,3,14990.00,0.00,1),(4,4,4,4,1595.00,0.00,1),(5,5,5,1,15990.00,0.00,1),(6,6,6,2,16495.00,0.00,1),(7,7,7,3,30990.00,0.00,1),(8,8,8,4,14990.00,0.00,1),(9,9,9,1,14990.00,0.00,1),(10,10,10,1,19790.00,19790.00,1),(11,11,11,2,1949.00,0.00,1),(12,12,12,3,22549.00,20499.00,1),(13,13,13,4,7170.00,0.00,1),(14,14,14,2,8749.00,0.00,1),(15,15,15,3,12999.00,0.00,1),(16,16,16,4,12189.00,0.00,1),(17,17,17,1,1449.00,0.00,1),(18,18,18,2,1544.00,0.00,1);
/*!40000 ALTER TABLE `detallesfactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'pendiente'),(2,'enviado'),(3,'confirmado'),(4,'rechazado'),(7,'pendiente5');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estadoscivil`
--

LOCK TABLES `estadoscivil` WRITE;
/*!40000 ALTER TABLE `estadoscivil` DISABLE KEYS */;
INSERT INTO `estadoscivil` VALUES (1,'Soltero');
/*!40000 ALTER TABLE `estadoscivil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,1,'2019-10-10',12990.00,1,1,1,1,NULL,NULL),(2,2,'2019-07-01',13995.00,1,1,1,1,NULL,NULL),(3,3,'2019-06-05',14990.00,1,1,1,1,NULL,NULL),(4,4,'2019-12-20',15495.00,1,1,1,1,NULL,NULL),(5,5,'2019-12-23',15990.00,1,1,1,1,NULL,NULL),(6,6,'2019-12-24',16495.00,1,1,1,1,NULL,NULL),(7,7,'2019-12-24',30990.00,1,1,1,1,NULL,NULL),(8,8,'2019-12-12',14990.00,1,1,1,1,NULL,NULL),(9,9,'2019-12-01',14990.00,1,1,1,1,NULL,NULL),(10,10,'2019-11-23',17749.00,1,1,1,1,NULL,NULL),(11,11,'2019-11-01',19490.00,1,1,1,1,NULL,NULL),(12,12,'2019-10-25',20349.00,1,1,1,1,NULL,NULL),(13,13,'2019-12-23',7170.00,1,1,1,1,NULL,NULL),(14,14,'2019-12-21',8749.00,1,1,1,1,NULL,NULL),(15,15,'2019-12-15',12999.00,1,1,1,1,NULL,NULL),(16,16,'2019-11-10',12189.00,1,1,1,1,NULL,NULL),(17,17,'2019-12-13',14499.00,1,1,1,1,NULL,NULL),(18,18,'2019-12-16',15449.00,1,1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `formasenvio`
--

LOCK TABLES `formasenvio` WRITE;
/*!40000 ALTER TABLE `formasenvio` DISABLE KEYS */;
INSERT INTO `formasenvio` VALUES (1,'Envio a domicilio',NULL,80.00),(2,'Envio en un dia',NULL,70.00),(3,'Mismo dia',NULL,100.00),(4,'Enviado por el vendedor',NULL,60.00),(5,'Recogida en un punto',NULL,30.00),(6,'Correo',NULL,50.00),(7,'Envio a domicilio',NULL,80.00),(8,'Envio en un dia',NULL,70.00),(9,'Mismo dia',NULL,100.00),(10,'Enviado por el vendedor',NULL,60.00),(11,'Recogida en un punto',NULL,30.00),(12,'Correo',NULL,50.00),(13,'Envio a domicilio',NULL,80.00),(14,'Envio en un dia',NULL,70.00),(15,'Mismo dia',NULL,100.00),(16,'Enviado por el vendedor',NULL,60.00),(17,'Recogida en un punto',NULL,30.00),(18,'Correo',NULL,50.00);
/*!40000 ALTER TABLE `formasenvio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `formaspago`
--

LOCK TABLES `formaspago` WRITE;
/*!40000 ALTER TABLE `formaspago` DISABLE KEYS */;
INSERT INTO `formaspago` VALUES (1,'PayPal',NULL),(2,'Tarjetas',NULL),(3,'Contra reembolso',NULL),(4,'Transferencia banc',NULL),(5,'Mercado pago',NULL),(6,'Moneda virtual',NULL),(7,'Banca online',NULL);
/*!40000 ALTER TABLE `formaspago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `localidades`
--

LOCK TABLES `localidades` WRITE;
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` VALUES (1,'all');
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'AMD'),(2,'Intel'),(3,'Mini Intel'),(4,'Dell'),(5,'CX'),(6,'Asus'),(7,'Bangho'),(8,'HP'),(9,'Brother'),(10,'Xerox');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
INSERT INTO `nacionalidades` VALUES (1,'Argentino');
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Argentina',1);
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,1,14839.00,13490.00,10,NULL,NULL,NULL,NULL,NULL),(2,2,1,13995.00,13490.00,15,NULL,NULL,NULL,NULL,NULL),(3,1,1,14990.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(4,2,1,15495.00,0.00,20,NULL,NULL,NULL,NULL,NULL),(5,1,1,15990.00,0.00,25,NULL,NULL,NULL,NULL,NULL),(6,3,1,16495.00,0.00,15,NULL,NULL,NULL,NULL,NULL),(7,4,2,30990.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(8,5,2,14990.00,0.00,15,NULL,NULL,NULL,NULL,NULL),(9,6,2,14990.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(10,7,2,19799.00,17999.00,20,NULL,NULL,NULL,NULL,NULL),(11,7,2,19490.00,0.00,25,NULL,NULL,NULL,NULL,NULL),(12,8,2,22549.00,0.00,15,NULL,NULL,NULL,NULL,NULL),(13,9,3,7170.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(14,8,4,8749.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(15,10,3,12999.00,0.00,10,NULL,NULL,NULL,NULL,NULL),(16,9,3,12189.00,0.00,20,NULL,NULL,NULL,NULL,NULL),(17,8,4,14499.00,0.00,25,NULL,NULL,NULL,NULL,NULL),(18,9,3,15449.00,0.00,15,NULL,NULL,NULL,NULL,NULL),(95,1,1,70000.00,65000.00,15,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Córdoba',1);
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Usuario'),(3,'Cliente'),(4,'');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,'Masculino');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tiposdoc`
--

LOCK TABLES `tiposdoc` WRITE;
/*!40000 ALTER TABLE `tiposdoc` DISABLE KEYS */;
INSERT INTO `tiposdoc` VALUES (1,'DNI');
/*!40000 ALTER TABLE `tiposdoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,0,'asd','asd','0000-00-00 00:00:00','asd','asd','0000-00-00 00:00:00',NULL),(2,0,'asd','asd1',NULL,'asd','asd','0000-00-00 00:00:00',NULL),(3,0,'asd','asd2',NULL,'asd','asd',NULL,NULL),(4,0,'asd','asd3',NULL,'asd','asd',NULL,NULL),(5,0,'asd','asd4',NULL,'asd','asd',NULL,NULL),(6,0,'asd','asd5',NULL,'asd','asd',NULL,NULL),(7,0,'asd','asd6',NULL,'asd','asd',NULL,NULL),(8,0,'asd','asd7',NULL,'asd','asd',NULL,NULL),(9,0,'asd','asd8',NULL,'asd','asd',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'lety','111111','Leticia natalia','Fernandez','D.N.I.',16778533,'Soltero','Argentina','F','lettymar@gmail.com',3518962017,'Argentina','Cordoba','Cordoba','Bella vista','Mayor 962',2),(2,'clau','222222','Claudia sandra','Vilchez','Pasaporte',38159147,'Casado','Argentina','F','clausanvilchez@gmail.com',3513698568,'Argentina','Cordoba','Cordoba','Bella vista','Alejandro centeno 1658',2),(3,'maty','333333','Matias benjamin','Bustamante','L.E.',39249751,'Divorciado','Argentina','M','bustamant_matias@gmail.com',3518745215,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 1060',2),(4,'anna','444444','Anahi','Vallejos','L.C.',33267148,'Viudo','Argentina','F','kittyvallejos86@gmail.com',3517489630,'Argentina','Cordoba','Cordoba','Guemes','Domingo funes 1257',2),(5,'gasty','555555','Gaston martin','Centeno','D.N.I.',38526475,'Soltero','Argentina','M','gastoncarp93@gmail.com',3513698562,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1410',2),(6,'july','666666','Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998',2),(7,'crist','777777','Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960',2),(8,'alba','888888','Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100',2),(9,'pao','999999','Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050',2),(10,'mary','101010','Mariana paola','Paz','Pasaporte',30265048,'Casado','Argentina','F','pazmary@gmail.com',3512015748,'Argentina','Cordoba','Cordoba','Caceres','Los cocos 1100',2),(11,'hugo','111110','Hugo mario','Basualdo','L.E.',14696889,'Divorciado','Argentina','M','hugo.basualdo@yahoo.com.ar',3517895206,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1254',2),(12,'ema','121212','Cristian emanuel','Otazo','L.C.',27393589,'Viudo','Argentina','M','xtianemaotazo@gmail.com',3516982014,'Argentina','Cordoba','Cordoba','Observatorio','Mariano moreno 890',2),(13,'gra','131313','Graciela mabel','Fantini','D.N.I.',14582693,'Soltero','Argentina','F','grace.fantini@gmail.com',3517845962,'Argentina','Cordoba','Cordoba','Guemes','Marcelo alvear 1120',2),(14,'mauri','141414','Mauro ignacio','Pugliese','Pasaporte',38429513,'Casado','Argentina','M','bustermaster@gmail.com',3516985623,'Argentina','Cordoba','Cordoba','Bella vista','Elpidio gonzalez 1210',2),(15,'lucho','151515','Luis claudio','Rojas','L.E.',20693257,'Divorciado','Argentina','M','luisesteban69@gmail.com',3517896523,'Argentina','Cordoba','Cordoba','Bella vista','Fuencarral 954',2),(16,'lily','161616','Liliana soledad','Sosa','L.C.',21708569,'Viudo','Argentina','F','lisosaliana@yahoo.com.ar',3512698745,'Argentina','Cordoba','Cordoba','Caceres','Santa maria 1024',2),(17,'mary','171717','Maria soledad','Fernandez','D.N.I.',32846313,'Soltero','Argentina','F','marysolfernandez@gmail.com',3515874698,'Argentina','Cordoba','Cordoba','Bella vista','Emilio achaval 986',2),(18,'any','181818','Ana laura','Sosa','Pasaporte',12245028,'Casado','Argentina','F','sosanalaura@gmail.com',3516258963,'Argentina','Cordoba','Cordoba','Guemes','Peru 440',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-17 16:15:17
