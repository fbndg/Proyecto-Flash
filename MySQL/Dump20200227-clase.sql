-- MySQL dump 10.13  Distrib 5.7.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: flashtore
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.10-MariaDB

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
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `idAdmin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idRol` int(10) unsigned DEFAULT NULL,
  `nombreAdmin` varchar(10) NOT NULL,
  `password` varchar(4) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `administradores_roles` (`idRol`),
  CONSTRAINT `administradores_roles` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,1,'Atila','1111'),(2,1,'fbn','2222');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idcategoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Desktop'),(2,'Notebook'),(3,'Impresora'),(4,'Nei');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` bigint(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `idTipoDoc` int(10) DEFAULT NULL,
  `nroDoc` int(10) NOT NULL,
  `idEstadoCivil` int(10) DEFAULT NULL,
  `idNacionalidad` int(10) DEFAULT NULL,
  `idSexo` int(10) unsigned DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `idPais` int(10) DEFAULT NULL,
  `idProvincia` int(10) DEFAULT NULL,
  `idLocalidad` int(10) DEFAULT NULL,
  `barrio` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idUser` (`idUser`),
  KEY `clientes_estadoscivil` (`idEstadoCivil`),
  KEY `clientes_nacionalidades` (`idNacionalidad`),
  KEY `clientes_sexos` (`idSexo`),
  KEY `clientes_paises` (`idPais`),
  KEY `clientes_provincias` (`idProvincia`),
  KEY `clientes_localidades` (`idLocalidad`),
  KEY `clientes_tiposdoc` (`idTipoDoc`),
  CONSTRAINT `clientes_estadoscivil` FOREIGN KEY (`idEstadoCivil`) REFERENCES `estadoscivil` (`idEstadoCivil`),
  CONSTRAINT `clientes_localidades` FOREIGN KEY (`idLocalidad`) REFERENCES `localidades` (`idLocalidad`),
  CONSTRAINT `clientes_nacionalidades` FOREIGN KEY (`idNacionalidad`) REFERENCES `nacionalidades` (`idNacionalidad`),
  CONSTRAINT `clientes_paises` FOREIGN KEY (`idPais`) REFERENCES `paises` (`idPais`),
  CONSTRAINT `clientes_provincias` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`),
  CONSTRAINT `clientes_sexos` FOREIGN KEY (`idSexo`) REFERENCES `sexos` (`idSexo`),
  CONSTRAINT `clientes_tiposdoc` FOREIGN KEY (`idTipoDoc`) REFERENCES `tiposdoc` (`idTipoDoc`),
  CONSTRAINT `clientes_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,1,'Leticia natalia','Fernandez',NULL,16778533,NULL,NULL,NULL,3518962017,NULL,NULL,NULL,'bella vista','Mayor 962'),(2,2,'Claudia sandra','Vilchez',NULL,38159147,NULL,NULL,NULL,3513698568,NULL,NULL,NULL,'bella vista','Alejandro centeno 1658'),(3,3,'Matias benjamin','Bustamante',NULL,39249751,NULL,NULL,NULL,3518745215,NULL,NULL,NULL,'bella vista','Emilio achaval 1060'),(4,4,'Anahi','Vallejos',NULL,33267148,NULL,NULL,NULL,3517489630,NULL,NULL,NULL,'Guemes','Domingo funes 1257'),(5,5,'Gaston martina','Centeno',NULL,38526475,NULL,NULL,NULL,3513698562,NULL,NULL,NULL,'Caceres','Santa maria 1410'),(6,6,'Julian nahuel','Calvano',NULL,37992568,NULL,NULL,NULL,3515874962,NULL,NULL,NULL,'Bella vista','Venus 998'),(7,7,'Cristian javier','Costa',NULL,27582367,NULL,NULL,NULL,3516987451,NULL,NULL,NULL,'Bella vista','Bambilla 960'),(8,8,'Alba azul','Pereyra',NULL,25469158,NULL,NULL,NULL,3513698598,NULL,NULL,NULL,'Bella vista','Jose de iriarte 1100'),(9,9,'Paola andrea','Solis',NULL,31259248,NULL,NULL,NULL,3518957426,NULL,NULL,NULL,'Bella vista','Corro 1050');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicioniva`
--

DROP TABLE IF EXISTS `condicioniva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicioniva` (
  `idCondicionIva` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `condicion` varchar(21) NOT NULL,
  PRIMARY KEY (`idCondicionIva`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicioniva`
--

LOCK TABLES `condicioniva` WRITE;
/*!40000 ALTER TABLE `condicioniva` DISABLE KEYS */;
INSERT INTO `condicioniva` VALUES (1,'Responsable inscripto'),(2,'Monotributista'),(3,'Exento'),(4,'No responsable'),(5,'Consumidor final');
/*!40000 ALTER TABLE `condicioniva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentos`
--

DROP TABLE IF EXISTS `descuentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descuentos` (
  `iDescuento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descuento` varchar(15) DEFAULT NULL,
  `monto` decimal(5,2) NOT NULL,
  PRIMARY KEY (`iDescuento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuentos`
--

LOCK TABLES `descuentos` WRITE;
/*!40000 ALTER TABLE `descuentos` DISABLE KEYS */;
INSERT INTO `descuentos` VALUES (1,'efectivo',500.00),(2,'promocion',250.00),(3,'acumulativo',200.00),(4,'no acumulativo',150.00);
/*!40000 ALTER TABLE `descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallesfactura`
--

DROP TABLE IF EXISTS `detallesfactura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallesfactura` (
  `iDetalleFactura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) unsigned NOT NULL,
  `iDescuento` int(10) unsigned NOT NULL,
  `precioUnitario` decimal(7,2) NOT NULL,
  `preciOferta` decimal(7,2) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`iDetalleFactura`),
  KEY `detallesFactura_productos` (`idProducto`),
  KEY `detallesFactura_descuentos` (`iDescuento`),
  CONSTRAINT `detallesFactura_descuentos` FOREIGN KEY (`iDescuento`) REFERENCES `descuentos` (`iDescuento`),
  CONSTRAINT `detallesFactura_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallesfactura`
--

LOCK TABLES `detallesfactura` WRITE;
/*!40000 ALTER TABLE `detallesfactura` DISABLE KEYS */;
INSERT INTO `detallesfactura` VALUES (1,1,1,14839.00,13490.00,1),(2,2,2,13995.00,0.00,1),(3,3,3,14990.00,0.00,1),(4,4,4,1595.00,0.00,1),(5,5,1,15990.00,0.00,1),(6,6,2,16495.00,0.00,1),(7,7,3,30990.00,0.00,1),(8,8,4,14990.00,0.00,1),(9,9,1,14990.00,0.00,1),(10,10,1,19790.00,19790.00,1),(11,11,2,1949.00,0.00,1),(12,12,3,22549.00,20499.00,1),(13,13,4,7170.00,0.00,1),(14,14,2,8749.00,0.00,1),(15,15,3,12999.00,0.00,1),(16,16,4,12189.00,0.00,1),(17,17,1,1449.00,0.00,1),(18,18,2,1544.00,0.00,1);
/*!40000 ALTER TABLE `detallesfactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `idEstado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'pendiente'),(2,'enviado'),(3,'confirmado'),(4,'rechazado'),(7,'pendiente5');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadoscivil`
--

DROP TABLE IF EXISTS `estadoscivil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadoscivil` (
  `idEstadoCivil` int(11) NOT NULL AUTO_INCREMENT,
  `estadoCivil` varchar(25) NOT NULL,
  PRIMARY KEY (`idEstadoCivil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadoscivil`
--

LOCK TABLES `estadoscivil` WRITE;
/*!40000 ALTER TABLE `estadoscivil` DISABLE KEYS */;
INSERT INTO `estadoscivil` VALUES (1,'Soltera\\o'),(2,'Casada\\o'),(3,'Viuda\\o'),(4,'Divorciada\\o');
/*!40000 ALTER TABLE `estadoscivil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `idFactura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iDetalleFactura` int(10) unsigned NOT NULL,
  `fecha` date NOT NULL,
  `precioTotal` decimal(8,2) NOT NULL,
  `idCondicionIva` int(10) unsigned NOT NULL,
  `idFormaPago` int(10) unsigned NOT NULL,
  `idDescuento` int(10) unsigned NOT NULL,
  `idFormaEnvio` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idFactura`),
  KEY `facturas_detallesfactura` (`iDetalleFactura`),
  KEY `facturas_condicioniva` (`idCondicionIva`),
  KEY `facturas_formaspago` (`idFormaPago`),
  KEY `facturas_descuentos` (`idDescuento`),
  KEY `facturas_formasenvio` (`idFormaEnvio`),
  CONSTRAINT `facturas_condicioniva` FOREIGN KEY (`idCondicionIva`) REFERENCES `condicioniva` (`idCondicionIva`),
  CONSTRAINT `facturas_descuentos` FOREIGN KEY (`idDescuento`) REFERENCES `descuentos` (`iDescuento`),
  CONSTRAINT `facturas_detallesfactura` FOREIGN KEY (`iDetalleFactura`) REFERENCES `detallesfactura` (`iDetalleFactura`),
  CONSTRAINT `facturas_formasenvio` FOREIGN KEY (`idFormaEnvio`) REFERENCES `formasenvio` (`idFormaEnvio`),
  CONSTRAINT `facturas_formaspago` FOREIGN KEY (`idFormaPago`) REFERENCES `formaspago` (`idFormaPago`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,1,'2019-10-10',12990.00,1,1,1,1,NULL,NULL),(2,2,'2019-07-01',13995.00,1,1,1,1,NULL,NULL),(3,3,'2019-06-05',14990.00,1,1,1,1,NULL,NULL),(4,4,'2019-12-20',15495.00,1,1,1,1,NULL,NULL),(5,5,'2019-12-23',15990.00,1,1,1,1,NULL,NULL),(6,6,'2019-12-24',16495.00,1,1,1,1,NULL,NULL),(7,7,'2019-12-24',30990.00,1,1,1,1,NULL,NULL),(8,8,'2019-12-12',14990.00,1,1,1,1,NULL,NULL),(9,9,'2019-12-01',14990.00,1,1,1,1,NULL,NULL),(10,10,'2019-11-23',17749.00,1,1,1,1,NULL,NULL),(11,11,'2019-11-01',19490.00,1,1,1,1,NULL,NULL),(12,12,'2019-10-25',20349.00,1,1,1,1,NULL,NULL),(13,13,'2019-12-23',7170.00,1,1,1,1,NULL,NULL),(14,14,'2019-12-21',8749.00,1,1,1,1,NULL,NULL),(15,15,'2019-12-15',12999.00,1,1,1,1,NULL,NULL),(16,16,'2019-11-10',12189.00,1,1,1,1,NULL,NULL),(17,17,'2019-12-13',14499.00,1,1,1,1,NULL,NULL),(18,18,'2019-12-16',15449.00,1,1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formasenvio`
--

DROP TABLE IF EXISTS `formasenvio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formasenvio` (
  `idFormaEnvio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formaEnvio` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `costo` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idFormaEnvio`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formasenvio`
--

LOCK TABLES `formasenvio` WRITE;
/*!40000 ALTER TABLE `formasenvio` DISABLE KEYS */;
INSERT INTO `formasenvio` VALUES (1,'Envio a domicilio',NULL,80.00),(2,'Envio en un dia',NULL,70.00),(3,'Mismo dia',NULL,100.00),(4,'Enviado por el vendedor',NULL,60.00),(5,'Recogida en un punto',NULL,30.00),(6,'Correo',NULL,50.00),(7,'Envio a domicilio',NULL,80.00),(8,'Envio en un dia',NULL,70.00),(9,'Mismo dia',NULL,100.00),(10,'Enviado por el vendedor',NULL,60.00),(11,'Recogida en un punto',NULL,30.00),(12,'Correo',NULL,50.00),(13,'Envio a domicilio',NULL,80.00),(14,'Envio en un dia',NULL,70.00),(15,'Mismo dia',NULL,100.00),(16,'Enviado por el vendedor',NULL,60.00),(17,'Recogida en un punto',NULL,30.00),(18,'Correo',NULL,50.00);
/*!40000 ALTER TABLE `formasenvio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formaspago`
--

DROP TABLE IF EXISTS `formaspago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formaspago` (
  `idFormaPago` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formaPago` varchar(20) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFormaPago`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formaspago`
--

LOCK TABLES `formaspago` WRITE;
/*!40000 ALTER TABLE `formaspago` DISABLE KEYS */;
INSERT INTO `formaspago` VALUES (1,'PayPal',NULL),(2,'Tarjetas',NULL),(3,'Contra reembolso',NULL),(4,'Transferencia banc',NULL),(5,'Mercado pago',NULL),(6,'Moneda virtual',NULL),(7,'Banca online',NULL);
/*!40000 ALTER TABLE `formaspago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(80) NOT NULL,
  PRIMARY KEY (`idImagen`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'dk1.png'),(2,'dk2.png'),(3,'dk3.png'),(4,'dk4.png'),(5,'dk5.png'),(6,'dk6.png'),(7,'noteb1.png'),(8,'noteb2.png'),(9,'noteb3.png'),(10,'noteb4.png'),(11,'noteb5.png'),(12,'noteb6.png'),(13,'imp1.png'),(14,'imp2.png'),(15,'imp3.png'),(16,'imp4.png'),(17,'imp5.png'),(18,'imp6.png'),(19,'imp6.png'),(38,'zE4zmBa7Va5URLbrSuFjjlOExcT9vTnB0Shp5uQT.jpeg'),(39,'xFtRpwJIr8n9THEx8fiN29oZB4lLHgpWyGZfluWD.png');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidades`
--

DROP TABLE IF EXISTS `localidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidades` (
  `idLocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(30) NOT NULL,
  `idProvincia` int(11) NOT NULL,
  PRIMARY KEY (`idLocalidad`),
  KEY `localidades_provincias` (`idProvincia`),
  CONSTRAINT `localidades_provincias` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidades`
--

LOCK TABLES `localidades` WRITE;
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` VALUES (1,'Ciudad de Córdoba',1);
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `idMarca` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'AMD'),(2,'Intel'),(3,'Mini Intel'),(4,'Dell'),(5,'CX'),(6,'Asus'),(7,'Bangho'),(8,'HP'),(9,'Brother'),(10,'Xerox');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(30) NOT NULL,
  PRIMARY KEY (`idModelo`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (19,'FX505DV'),(20,'erererere'),(21,'FST10115'),(22,'FST10113'),(23,'FST3639'),(24,'FST617'),(25,'FST11122'),(26,'FST3624'),(27,'I3481_I341TSUBS_120'),(28,'CX9115W'),(29,'CX23500W'),(30,'G37A0CEGHFDC140'),(31,'90NB0IR7-M08930'),(32,'6FU25LT-ABM'),(33,'84UE0300631'),(34,'84UE0700231'),(35,'DCP-1617NW'),(36,'M203DW'),(37,'4ZB84A'),(38,'HL-L2360DW');
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacionalidades`
--

DROP TABLE IF EXISTS `nacionalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nacionalidades` (
  `idNacionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` varchar(30) NOT NULL,
  PRIMARY KEY (`idNacionalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
INSERT INTO `nacionalidades` VALUES (1,'Argentina');
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(20) NOT NULL,
  PRIMARY KEY (`idPais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Argentina');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(120) NOT NULL,
  `idMarca` int(10) unsigned DEFAULT NULL,
  `idCategoria` int(10) unsigned DEFAULT NULL,
  `precioUnitario` decimal(7,2) NOT NULL,
  `precioferta` decimal(7,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `idModelo` int(11) DEFAULT NULL,
  `idImagen` int(11) DEFAULT NULL,
  `borrar` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idProducto`),
  KEY `productos_marcas` (`idMarca`),
  KEY `productos_categorias` (`idCategoria`),
  KEY `productos_modelos` (`idModelo`),
  KEY `productos_imagenes` (`idImagen`),
  CONSTRAINT `productos_categorias` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idcategoria`),
  CONSTRAINT `productos_imagenes` FOREIGN KEY (`idImagen`) REFERENCES `imagenes` (`idImagen`),
  CONSTRAINT `productos_marcas` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`),
  CONSTRAINT `productos_modelos` FOREIGN KEY (`idModelo`) REFERENCES `modelos` (`idModelo`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'PC AMD APU A6 7480 SSD 120GB 4GB',1,1,14839.00,13490.00,10,21,1,NULL,NULL,NULL,10),(2,'',2,1,13995.00,13490.00,15,22,2,NULL,NULL,NULL,9),(3,'',1,1,14990.00,0.00,10,23,3,NULL,NULL,NULL,8),(4,'',2,1,15495.00,0.00,20,24,4,NULL,NULL,NULL,0),(5,'',1,1,15990.00,0.00,25,25,5,NULL,NULL,NULL,0),(6,'',2,1,16495.00,0.00,15,26,6,NULL,NULL,NULL,0),(7,'',4,2,30990.00,0.00,10,27,7,NULL,NULL,NULL,10),(8,'',5,2,14990.00,0.00,15,28,8,NULL,NULL,NULL,9),(9,'',6,2,14990.00,0.00,10,29,9,NULL,NULL,NULL,8),(10,'',7,2,19799.00,17999.00,20,30,10,NULL,NULL,NULL,0),(11,'',7,2,19490.00,0.00,25,31,11,NULL,NULL,NULL,0),(12,'',8,2,22549.00,0.00,15,32,12,NULL,NULL,NULL,0),(13,'',9,3,7170.00,0.00,10,33,13,NULL,NULL,NULL,10),(14,'',8,3,8749.00,0.00,10,34,14,NULL,NULL,NULL,9),(15,'',10,3,12999.00,0.00,10,35,15,NULL,NULL,NULL,8),(16,'',9,3,12189.00,0.00,20,36,16,NULL,NULL,NULL,0),(17,'',8,3,14499.00,0.00,25,37,17,NULL,NULL,NULL,0),(18,'',9,3,15449.00,0.00,15,38,18,NULL,NULL,NULL,0),(97,'Asus TUF | 15.6\" 120Hz | Ryzen 7 | RTX 2060 | 16GB | 512GB NVMe',6,2,90000.00,65000.00,20,19,38,1,'2020-02-27 20:45:03','2020-02-27 22:41:10',0),(98,'teteree',3,2,3.00,13.00,3,20,39,NULL,'2020-02-28 01:13:03','2020-02-28 01:13:03',0);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `provincia` varchar(30) NOT NULL,
  `idPais` int(11) NOT NULL,
  PRIMARY KEY (`idProvincia`),
  KEY `provincias_paises` (`idPais`),
  CONSTRAINT `provincias_paises` FOREIGN KEY (`idPais`) REFERENCES `paises` (`idPais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Córdoba',1);
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRol` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rol` varchar(21) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Usuario'),(3,'Cliente'),(4,'Visitante');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexos`
--

DROP TABLE IF EXISTS `sexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexos` (
  `idSexo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`idSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,'Femenino'),(2,'Masculino'),(3,'Otro');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposdoc`
--

DROP TABLE IF EXISTS `tiposdoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposdoc` (
  `idTipoDoc` int(10) NOT NULL AUTO_INCREMENT,
  `tipoDoc` varchar(20) NOT NULL,
  PRIMARY KEY (`idTipoDoc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposdoc`
--

LOCK TABLES `tiposdoc` WRITE;
/*!40000 ALTER TABLE `tiposdoc` DISABLE KEYS */;
INSERT INTO `tiposdoc` VALUES (1,'DNI'),(2,'Pasaporte'),(3,'Libreta de Enrolamie'),(4,'Libreta Civica');
/*!40000 ALTER TABLE `tiposdoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idRol` int(10) unsigned DEFAULT NULL,
  `name` varchar(105) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(105) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_roles` (`idRol`),
  CONSTRAINT `users_roles` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,3,'asd','asd','0000-00-00 00:00:00','asd','asd','0000-00-00 00:00:00',NULL),(2,3,'asd','asd1',NULL,'asd','asd','0000-00-00 00:00:00',NULL),(3,3,'asd','asd2',NULL,'asd','asd',NULL,NULL),(4,3,'asd','asd3',NULL,'asd','asd',NULL,NULL),(5,3,'asd','asd4',NULL,'asd','asd',NULL,NULL),(6,3,'asd','asd5',NULL,'asd','asd',NULL,NULL),(7,3,'asd','asd6',NULL,'asd','asd',NULL,NULL),(8,3,'asd','asd7',NULL,'asd','asd',NULL,NULL),(9,3,'asd','asd8',NULL,'asd','asd',NULL,NULL),(10,1,'atila','atilaelrey@live.com.ar',NULL,'$2y$10$JrVhn3ZZ3kVecCtIgk/2/OttU8uTuHZdE1.97XE6tzUyfLdVScBEq','58A680YdYxWxkYU5RooFggOiUz08kWj13ukN5tmR1TRPwnZre2wflECPgQ4r','2020-02-21 01:47:19','2020-02-21 01:47:19'),(11,2,'Atila2','atilaelrey2@live.com.ar',NULL,'$2y$10$H3aDQGaxbK04Q1axhcXQ1epp0YAlgBaDHRRaRuLe50GMfdHkXdZju',NULL,'2020-02-27 17:10:13','2020-02-27 17:10:13'),(12,2,'lucho','lucho@test.com',NULL,'$2y$10$JnJKZzLGXWQA5G4n00TzEeeP9dp2tKmKyocSVTTndfRk0DVvhZjSq',NULL,'2020-02-28 01:04:11','2020-02-28 01:04:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `tipoDoc` varchar(15) NOT NULL,
  `nroDoc` int(11) NOT NULL,
  `estadoCivil` varchar(15) NOT NULL,
  `nacionalidad` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `pais` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `barrio` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idRol` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

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

-- Dump completed on 2020-02-27 20:22:23
