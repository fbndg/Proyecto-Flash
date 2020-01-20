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
  `idProducto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `categorias_productos` (`idProducto`),
  CONSTRAINT `categorias_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Desktop',1),(2,'Notebook',2),(3,'Impresora',3),(4,'Nei',4);
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
  `idCondicionIva` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipoDoc` varchar(15) NOT NULL,
  `nroDoc` int(10) NOT NULL,
  `estadoCivil` varchar(15) NOT NULL,
  `nacionalidad` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `pais` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `barrio` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idRol` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `clientes_condicionIva` (`idCondicionIva`),
  KEY `clientes_productos` (`idProducto`),
  KEY `clientes_roles` (`idRol`),
  CONSTRAINT `clientes_condicionIva` FOREIGN KEY (`idCondicionIva`) REFERENCES `condicioniva` (`idCondicionIva`),
  CONSTRAINT `clientes_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  CONSTRAINT `clientes_roles` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,1,1,'Leticia natalia','Fernandez','D.N.I.',16778533,'soltero','argentina','f','lettymar@gmail.com',3518962017,'argentina','cordoba','cordoba','bella vista','Mayor 962',3),(2,2,2,'Claudia sandra','Vilchez','Pasaporte',38159147,'asadoo','argentina','f','clausanvilchez@gmail.com',3513698568,'argentina','cordoba','cordoba','bella vista','Alejandro centeno 1658',3),(3,3,3,'Matias benjamin','Bustamante','L.E.',39249751,'divorciado','argentina','m','bustamant_matias@gmail.com',3518745215,'argentina','cordoba','cordoba','bella vista','Emilio achaval 1060',3),(4,4,4,'Anahi','Vallejos','L.C.',33267148,'viudo','argentina','f','kittyvallejos86@gmail.com',3517489630,'argentina','cordoba','cordoba','Guemes','Domingo funes 1257',3),(5,5,5,'Gaston martina','Centeno','D.N.I.',38526475,'soltero','argentina','m','gastoncarp93@gmail.com',3513698562,'argentina','cordoba','cordoba','Caceres','Santa maria 1410',3),(6,1,6,'Julian nahuel','Calvano','Pasaporte',37992568,'Casado','Argentina','M','aguilacalvano@gmail.com',3515874962,'Argentina','Cordoba','Cordoba','Bella vista','Venus 998',3),(7,2,7,'Cristian javier','Costa','L.E.',27582367,'Divorciado','Argentina','M','costasonico@gmail.com',3516987451,'Argentina','Cordoba','Cordoba','Bella vista','Bambilla 960',3),(8,3,8,'Alba azul','Pereyra','L.C.',25469158,'Viudo','Argentina','F','bluealba@gmail.com',3513698598,'Argentina','Cordoba','Cordoba','Bella vista','Jose de iriarte 1100',3),(9,4,9,'Paola andrea','Solis','D.N.I.',31259248,'Soltero','Argentina','F','lolitasolis@gmail.com',3518957426,'Argentina','Cordoba','Cordoba','Bella vista','Corro 1050',3);
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
  `idFactura` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `idFormaPago` int(10) unsigned NOT NULL,
  `iDescuento` int(10) unsigned NOT NULL,
  `idFormaEnvio` int(10) unsigned NOT NULL,
  `precioUnitario` decimal(7,2) NOT NULL,
  `preciOferta` decimal(7,2) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `idCliente` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`iDetalleFactura`),
  KEY `detallesFactura_facturas` (`idFactura`),
  KEY `detallesFactura_productos` (`idProducto`),
  KEY `detallesFactura_formasPago` (`idFormaPago`),
  KEY `detallesFactura_descuentos` (`iDescuento`),
  KEY `detallesFactura_formasEnvio` (`idFormaEnvio`),
  KEY `detallesfactura_clientes` (`idCliente`),
  CONSTRAINT `detallesFactura_descuentos` FOREIGN KEY (`iDescuento`) REFERENCES `descuentos` (`iDescuento`),
  CONSTRAINT `detallesFactura_facturas` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`idFactura`),
  CONSTRAINT `detallesFactura_formasEnvio` FOREIGN KEY (`idFormaEnvio`) REFERENCES `formasenvio` (`idFormaEnvio`),
  CONSTRAINT `detallesFactura_formasPago` FOREIGN KEY (`idFormaPago`) REFERENCES `formaspago` (`idFormaPago`),
  CONSTRAINT `detallesFactura_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  CONSTRAINT `detallesfactura_clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallesfactura`
--

LOCK TABLES `detallesfactura` WRITE;
/*!40000 ALTER TABLE `detallesfactura` DISABLE KEYS */;
INSERT INTO `detallesfactura` VALUES (1,1,1,1,1,1,14839.00,13490.00,1,1),(2,2,2,2,2,2,13995.00,0.00,1,2),(3,3,3,3,3,3,14990.00,0.00,1,3),(4,4,4,4,4,4,1595.00,0.00,1,4),(5,5,5,5,1,5,15990.00,0.00,1,1),(6,6,6,6,2,6,16495.00,0.00,1,2),(7,7,7,7,3,7,30990.00,0.00,1,3),(8,8,8,1,4,8,14990.00,0.00,1,4),(9,9,9,2,1,9,14990.00,0.00,1,1),(10,10,10,1,1,2,19790.00,19790.00,1,2),(11,11,11,2,2,3,1949.00,0.00,1,3),(12,12,12,3,3,4,22549.00,20499.00,1,4),(13,13,13,4,4,1,7170.00,0.00,1,1),(14,14,14,5,2,5,8749.00,0.00,1,2),(15,15,15,6,3,6,12999.00,0.00,1,3),(16,16,16,7,4,7,12189.00,0.00,1,4),(17,17,17,1,1,8,1449.00,0.00,1,1),(18,18,18,2,2,9,1544.00,0.00,1,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'pendiente'),(2,'enviado'),(3,'confirmado'),(4,'rechazado');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `idFactura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iDetalleFactura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precioTotal` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idFactura`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,1,'2019-10-10',12990.00),(2,2,'2019-07-01',13995.00),(3,3,'2019-06-05',14990.00),(4,4,'2019-12-20',15495.00),(5,5,'2019-12-23',15990.00),(6,6,'2019-12-24',16495.00),(7,7,'2019-12-24',30990.00),(8,8,'2019-12-12',14990.00),(9,9,'2019-12-01',14990.00),(10,10,'2019-11-23',17749.00),(11,11,'2019-11-01',19490.00),(12,12,'2019-10-25',20349.00),(13,13,'2019-12-23',7170.00),(14,14,'2019-12-21',8749.00),(15,15,'2019-12-15',12999.00),(16,16,'2019-11-10',12189.00),(17,17,'2019-12-13',14499.00),(18,18,'2019-12-16',15449.00);
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
  `idEstado` int(10) unsigned NOT NULL,
  `formaEnvio` varchar(25) NOT NULL,
  `fechaEnvio` date NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `costo` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idFormaEnvio`),
  KEY `formasEnvio_estados` (`idEstado`),
  CONSTRAINT `formasEnvio_estados` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formasenvio`
--

LOCK TABLES `formasenvio` WRITE;
/*!40000 ALTER TABLE `formasenvio` DISABLE KEYS */;
INSERT INTO `formasenvio` VALUES (1,1,'Envio a domicilio','2019-12-12',NULL,80.00),(2,2,'Envio en un dia','2019-07-02',NULL,70.00),(3,3,'Mismo dia','2019-06-05',NULL,100.00),(4,4,'Enviado por el vendedor','2019-12-23',NULL,60.00),(5,1,'Recogida en un punto','2019-12-27',NULL,30.00),(6,2,'Correo','2019-12-30',NULL,50.00),(7,3,'Envio a domicilio','2019-12-26',NULL,80.00),(8,4,'Envio en un dia','2019-12-13',NULL,70.00),(9,1,'Mismo dia','2019-12-01',NULL,100.00),(10,2,'Enviado por el vendedor','2019-11-26',NULL,60.00),(11,3,'Recogida en un punto','2019-11-05',NULL,30.00),(12,4,'Correo','2019-10-30',NULL,50.00),(13,1,'Envio a domicilio','2019-12-23',NULL,80.00),(14,2,'Envio en un dia','2019-12-22',NULL,70.00),(15,3,'Mismo dia','2019-12-15',NULL,100.00),(16,4,'Enviado por el vendedor','2019-11-13',NULL,60.00),(17,1,'Recogida en un punto','2019-12-17',NULL,30.00),(18,2,'Correo','2019-12-23',NULL,50.00);
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
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `idMarca` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  `idCategoria` int(10) unsigned NOT NULL,
  `modelo1` varchar(30) NOT NULL,
  `modelo2` varchar(30) DEFAULT NULL,
  `modelo3` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idMarca`),
  KEY `marcas_categorias` (`idCategoria`),
  CONSTRAINT `marcas_categorias` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'AMD',1,'7480','Apu A6','Athlon'),(2,'Intel',1,'Celeron','Dual Core',NULL),(3,'Mini Intel',1,'Celeron',NULL,NULL),(4,'Dell',2,'Inspiron',NULL,NULL),(5,'CX',2,'Touch 360','Cloudbook',NULL),(6,'Asus',2,'X540M',NULL,NULL),(7,'Bangho',2,'Zero M4',NULL,NULL),(8,'HP',4,'240 G7','M203dw','Multifuncion M135W'),(9,'Brother',3,'Laser Monocromatica',NULL,NULL),(10,'Xerox',3,'Multifuncion',NULL,NULL);
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idMarca` int(10) unsigned DEFAULT NULL,
  `idCategoria` int(10) unsigned DEFAULT NULL,
  `precioUnitario` decimal(7,2) NOT NULL,
  `precioferta` decimal(7,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `idFactura` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `productos_marcas` (`idMarca`),
  KEY `productos_categorias` (`idCategoria`),
  KEY `productos_facturas` (`idFactura`),
  CONSTRAINT `productos_categorias` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idcategoria`),
  CONSTRAINT `productos_facturas` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`idFactura`),
  CONSTRAINT `productos_marcas` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,1,14839.00,13490.00,10,1),(2,2,1,13995.00,13490.00,15,2),(3,1,1,14990.00,0.00,10,3),(4,2,1,15495.00,0.00,20,4),(5,1,1,15990.00,0.00,25,5),(6,3,1,16495.00,0.00,15,6),(7,4,2,30990.00,0.00,10,7),(8,5,2,14990.00,0.00,15,8),(9,6,4,14990.00,0.00,10,9),(10,7,2,19799.00,17999.00,20,10),(11,7,2,19490.00,0.00,25,11),(12,8,4,22549.00,0.00,15,12),(13,9,3,7170.00,0.00,10,13),(14,8,4,8749.00,0.00,10,14),(15,10,3,12999.00,0.00,10,15),(16,9,3,12189.00,0.00,20,16),(17,8,4,14499.00,0.00,25,17),(18,9,3,15449.00,0.00,15,18);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRol` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreAdmin` varchar(10) DEFAULT NULL,
  `passwordAdmin` varchar(4) DEFAULT NULL,
  `idUsuario` int(10) unsigned DEFAULT NULL,
  `nombreUsuario` varchar(10) DEFAULT NULL,
  `passwordUsuario` varchar(8) DEFAULT NULL,
  `idCliente` int(10) unsigned DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(15) DEFAULT NULL,
  `idAdmin` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idRol`),
  KEY `roles_usuarios` (`idUsuario`),
  KEY `roles_clientes` (`idCliente`),
  KEY `roles_administradores` (`idAdmin`),
  CONSTRAINT `roles_administradores` FOREIGN KEY (`idAdmin`) REFERENCES `administradores` (`idAdmin`),
  CONSTRAINT `roles_clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  CONSTRAINT `roles_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Atila','1111',NULL,'lety','111111',1,'Leticia natalia','Fernandez',1),(2,'fbn','2222',NULL,'clau','222222',2,'Claudia sandra','Vilchez',1),(3,NULL,NULL,NULL,'matty','333333',3,'Matias benjamin','Bustamante',NULL),(4,NULL,NULL,NULL,'anna','444444',4,'Anahi','Vallejos',NULL),(5,NULL,NULL,NULL,'gasty','555555',5,'Gaston martin','Centeno',NULL),(6,NULL,NULL,NULL,'july','666666',6,'Julian nahuel','Calvano',NULL),(7,NULL,NULL,NULL,'crist','777777',7,'Cristian javier','Costa',NULL),(8,NULL,NULL,NULL,'alba','888888',8,'Alba azul','Pereyra',NULL),(9,NULL,NULL,NULL,'pao','999999',9,'Paola andrea','Solis',NULL),(10,NULL,NULL,1,'mary','101010',NULL,NULL,NULL,NULL),(11,NULL,NULL,2,'hugo','1111110',NULL,NULL,NULL,NULL),(12,NULL,NULL,3,'ema','121212',NULL,NULL,NULL,NULL),(13,NULL,NULL,4,'gra','131313',NULL,NULL,NULL,NULL),(14,NULL,NULL,5,'mauri','141414',NULL,NULL,NULL,NULL),(15,NULL,NULL,6,'lucho','151515',NULL,NULL,NULL,NULL),(16,NULL,NULL,7,'lily','161616',NULL,NULL,NULL,NULL),(17,NULL,NULL,8,'mary','171717',NULL,NULL,NULL,NULL),(18,NULL,NULL,9,'any','181818',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
  PRIMARY KEY (`idUsuario`),
  KEY `usuarios_roles` (`idRol`),
  CONSTRAINT `usuarios_roles` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`)
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

-- Dump completed on 2020-01-20 17:35:30
