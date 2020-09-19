-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: gines 2
-- ------------------------------------------------------
-- Server version 	5.5.5-10.1.37-MariaDB
-- Date: Sat, 18 Jul 2020 14:09:11 +0200

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
-- Table structure for table `apagar`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apagar` (
  `id_apagar` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `pagocl` decimal(10,2) NOT NULL,
  `disponible` decimal(10,2) NOT NULL,
  `ater` decimal(10,2) NOT NULL,
  `aterPago` decimal(10,2) NOT NULL,
  `aterSaldo` decimal(10,2) NOT NULL,
  `municipalidad` decimal(10,2) NOT NULL,
  `municipalidadPago` decimal(10,2) NOT NULL,
  `municipalidadSaldo` decimal(10,2) NOT NULL,
  `empleador` decimal(10,2) NOT NULL,
  `empleadorPago` decimal(10,2) NOT NULL,
  `empleadorSaldo` decimal(10,2) NOT NULL,
  `sindicato` decimal(10,2) NOT NULL,
  `sindicatoPago` decimal(10,2) NOT NULL,
  `sindicatoSaldo` decimal(10,2) NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `ivaPago` decimal(10,2) NOT NULL,
  `ivaSaldo` decimal(10,2) NOT NULL,
  `sicore` decimal(10,2) NOT NULL,
  `sicorePago` decimal(10,2) NOT NULL,
  `sicoreSaldo` decimal(10,2) NOT NULL,
  `ganancias` decimal(10,2) NOT NULL,
  `gananciasPago` decimal(10,2) NOT NULL,
  `gananciasSaldo` decimal(10,2) NOT NULL,
  `autonomo` decimal(10,2) NOT NULL,
  `autonomoPago` decimal(10,2) NOT NULL,
  `autonomoSaldo` decimal(10,2) NOT NULL,
  `caja` decimal(10,2) NOT NULL,
  `cajaPago` decimal(10,2) NOT NULL,
  `cajaSaldo` decimal(10,2) NOT NULL,
  `aportes` decimal(10,2) NOT NULL,
  `aportesPago` decimal(10,2) NOT NULL,
  `aportesSaldo` decimal(10,2) NOT NULL,
  `cpceer` decimal(10,2) NOT NULL,
  `cpceerPago` decimal(10,2) NOT NULL,
  `cpceerSaldo` decimal(10,2) NOT NULL,
  `matricula` decimal(10,2) NOT NULL,
  `matriculaPago` decimal(10,2) NOT NULL,
  `matriculaSaldo` decimal(10,2) NOT NULL,
  `suss` decimal(10,2) NOT NULL,
  `sussPago` decimal(10,2) NOT NULL,
  `sussSaldo` decimal(10,2) NOT NULL,
  `ley4035` decimal(10,2) NOT NULL,
  `ley4035Pago` decimal(10,2) NOT NULL,
  `ley4035Saldo` decimal(10,2) NOT NULL,
  `honorarios` decimal(10,2) NOT NULL,
  `honorariosPago` decimal(10,2) NOT NULL,
  `honorariosSaldo` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `monotributo` decimal(10,2) NOT NULL,
  `monotributoSaldo` decimal(10,2) NOT NULL,
  `monotributoPago` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_apagar`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apagar`
--

LOCK TABLES `apagar` WRITE;
/*!40000 ALTER TABLE `apagar` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `apagar` VALUES (1,6692,0.00,0.00,1000.00,1000.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,500.00,250.00,250.00,'2020-06-16',2000.15,1000.15,1000.00),(2,7372,0.00,0.00,600.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'2020-06-16',1447.06,947.06,500.00),(3,7637,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'2020-06-19',0.69,0.00,0.69);
/*!40000 ALTER TABLE `apagar` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `apagar` with 3 row(s)
--

--
-- Table structure for table `ater`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ater` (
  `id_ater` int(11) NOT NULL AUTO_INCREMENT,
  `id_condicion` int(11) NOT NULL,
  `liberal_simplificado` tinyint(1) NOT NULL,
  `liberal_general` tinyint(1) NOT NULL,
  `ingresos_brutos_simplificado` tinyint(1) NOT NULL,
  `ingresos_brutos_general` tinyint(1) NOT NULL,
  `convenio_multilateral` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_ater`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `ater_ibfk_1` FOREIGN KEY (`id_condicion`) REFERENCES `condiciontributaria` (`id_condicion`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4573 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ater`
--

LOCK TABLES `ater` WRITE;
/*!40000 ALTER TABLE `ater` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ater` VALUES (4310,6604,0,0,0,0,0),(4311,6605,0,0,0,0,0),(4312,6606,0,0,0,0,0),(4313,6607,0,0,0,0,0),(4314,6608,0,0,0,0,0),(4315,6609,0,0,0,0,0),(4316,6610,0,0,0,0,0),(4317,6611,0,0,0,0,0),(4318,6612,0,0,0,0,0),(4319,6613,0,0,0,0,0),(4320,6614,0,0,0,0,0),(4321,6615,0,0,0,0,0),(4322,6616,0,0,0,0,0),(4323,6617,0,0,0,0,0),(4324,6618,0,0,0,0,0),(4325,6619,0,0,0,0,0),(4326,6620,0,0,0,0,0),(4327,6621,0,0,0,0,0),(4328,6622,0,0,0,0,0),(4329,6623,0,0,0,0,0),(4330,6624,0,0,0,0,0),(4331,6625,0,0,0,0,0),(4332,6626,0,0,0,0,0),(4333,6627,0,0,0,0,0),(4334,6628,0,0,0,0,0),(4335,6629,0,0,0,0,0),(4336,6630,0,0,0,0,0),(4337,6631,0,0,0,0,0),(4338,6632,0,0,0,0,0),(4339,6633,0,0,0,0,0),(4340,6634,0,0,0,0,0),(4341,6635,0,0,0,0,0),(4342,6636,0,0,0,0,0),(4343,6637,0,0,0,0,0),(4344,6638,0,0,0,0,0),(4345,6639,0,0,0,0,0),(4346,6640,0,0,0,0,0),(4347,6641,0,0,0,0,0),(4348,6642,0,0,0,0,0),(4349,6643,0,0,0,0,0),(4350,6644,0,0,0,0,0),(4351,6645,0,0,0,0,0),(4352,6646,0,0,0,0,0),(4353,6647,0,0,0,0,0),(4354,6648,0,0,0,0,0),(4355,6649,0,0,0,0,0),(4356,6650,0,0,0,0,0),(4357,6651,0,0,0,0,0),(4358,6652,0,0,0,0,0),(4359,6653,0,0,0,0,0),(4360,6654,0,0,0,0,0),(4361,6655,0,0,0,0,0),(4362,6656,0,0,0,0,0),(4363,6657,0,0,0,0,0),(4364,6658,0,0,0,0,0),(4365,6659,0,0,0,0,0),(4366,6660,0,0,0,0,0),(4367,6661,0,0,0,0,0),(4368,6662,0,0,0,0,0),(4369,6663,0,0,0,0,0),(4370,6664,0,0,0,0,0),(4371,6665,0,0,0,0,0),(4372,6666,0,0,0,0,0),(4373,6667,0,0,0,0,0),(4374,6668,0,0,0,0,0),(4375,6669,0,0,0,0,0),(4376,6670,0,0,0,0,0),(4377,6671,0,0,0,0,0),(4378,6672,0,0,0,0,0),(4379,6673,0,0,0,0,0),(4380,6674,0,0,0,0,0),(4381,6675,0,0,0,0,0),(4382,6676,0,0,0,0,0),(4383,6677,0,0,0,0,0),(4384,6678,0,0,0,0,0),(4385,6679,0,0,0,0,0),(4386,6680,0,0,0,0,0),(4387,6681,0,0,0,0,0),(4388,6682,0,0,0,0,0),(4389,6683,0,0,0,0,0),(4390,6684,0,0,0,0,0),(4391,6685,0,0,0,0,0),(4392,6686,0,0,0,0,0),(4393,6687,0,0,0,0,0),(4394,6688,0,0,0,0,0),(4395,6689,0,0,0,0,0),(4396,6690,0,0,0,0,0),(4397,6691,0,0,0,0,0),(4398,6692,0,0,0,0,0),(4399,6693,0,0,0,0,0),(4400,6694,0,0,0,0,0),(4401,6695,0,0,0,0,0),(4402,6696,0,0,0,0,0),(4403,6697,0,0,0,0,0),(4404,6698,0,0,0,0,0),(4405,6699,0,0,0,0,0),(4406,6700,0,0,0,0,0),(4407,6701,0,0,0,0,0),(4408,6702,0,0,0,0,0),(4409,6703,0,0,0,0,0),(4410,6704,0,0,0,0,0),(4411,6705,0,0,0,0,0),(4412,6706,0,0,0,0,0),(4413,6707,0,0,0,0,0),(4414,6708,0,0,0,0,0),(4415,6709,0,0,0,0,0),(4416,6710,0,0,0,0,0),(4417,6711,0,0,0,0,0),(4418,6712,0,0,0,0,0),(4419,6713,0,0,0,0,0),(4420,6714,0,0,0,0,0),(4421,6715,0,0,0,0,0),(4422,6716,0,0,0,0,0),(4423,6717,0,0,0,0,0),(4424,6718,0,0,0,0,0),(4425,6719,0,0,0,0,0),(4426,6720,0,0,0,0,0),(4427,6721,0,0,0,0,0),(4428,6722,0,0,0,0,0),(4429,6723,0,0,0,0,0),(4430,6724,0,0,0,0,0),(4431,6725,0,0,0,0,0),(4432,6726,0,0,0,0,0),(4433,6727,0,0,0,0,0),(4434,6728,0,0,0,0,0),(4435,6729,0,0,0,0,0),(4436,6730,0,0,0,0,0),(4437,6731,0,0,0,0,0),(4438,6732,0,0,0,0,0),(4439,6733,0,0,0,0,0),(4440,6734,0,0,0,0,0),(4441,6735,0,0,0,0,0),(4442,6736,0,0,0,0,0),(4443,6737,0,0,0,0,0),(4444,6738,0,0,0,0,0),(4445,6739,0,0,0,0,0),(4446,6740,0,0,0,0,0),(4447,6741,0,0,0,0,0),(4448,6742,0,0,0,0,0),(4449,6743,0,0,0,0,0),(4450,6744,0,0,0,0,0),(4451,6745,0,0,0,0,0),(4452,6746,0,0,0,0,0),(4453,6747,0,0,0,0,0),(4454,6748,0,0,0,0,0),(4455,6749,0,0,0,0,0),(4456,6750,0,0,0,0,0),(4457,6751,0,0,0,0,0),(4458,6752,0,0,0,0,0),(4459,6753,0,0,0,0,0),(4460,6754,0,0,0,0,0),(4461,6755,0,0,0,0,0),(4462,6756,0,0,0,0,0),(4463,6757,0,0,0,0,0),(4464,6758,0,0,0,0,0),(4465,6759,0,0,0,0,0),(4466,6760,0,0,0,0,0),(4467,6761,0,0,0,0,0),(4468,6762,0,0,0,0,0),(4469,6763,0,0,0,0,0),(4470,6764,0,0,0,0,0),(4471,6765,0,0,0,0,0),(4472,6766,0,0,0,0,0),(4473,6767,0,0,0,0,0),(4474,6768,0,0,0,0,0),(4475,6769,0,0,0,0,0),(4476,6770,0,0,0,0,0),(4477,6771,0,0,0,0,0),(4478,6772,0,0,0,0,0),(4479,6773,0,0,0,0,0),(4480,6774,0,0,0,0,0),(4481,6775,0,0,0,0,0),(4482,6776,0,0,0,0,0),(4483,6777,0,0,0,0,0),(4484,6778,0,0,0,0,0),(4485,6779,0,0,0,0,0),(4486,6780,0,0,0,0,0),(4487,6781,0,0,0,0,0),(4488,6782,0,0,0,0,0),(4489,6783,0,0,0,0,0),(4490,6784,0,0,0,0,0),(4491,6785,0,0,0,0,0),(4492,6786,0,0,0,0,0),(4493,6787,0,0,0,0,0),(4494,6788,0,0,0,0,0),(4495,6789,0,0,0,0,0),(4496,6790,0,0,0,0,0),(4497,6791,0,0,0,0,0),(4498,6792,0,0,0,0,0),(4499,6793,0,0,0,0,0),(4500,6794,0,0,0,0,0),(4501,6795,0,0,0,0,0),(4502,6796,0,0,0,0,0),(4503,6797,0,0,0,0,0),(4504,6798,0,0,0,0,0),(4505,6799,0,0,0,0,0),(4506,6800,0,0,0,0,0),(4507,6801,0,0,0,0,0),(4508,6802,0,0,0,0,0),(4509,6803,0,0,0,0,0),(4510,6804,0,0,0,0,0),(4511,6805,0,0,0,0,0),(4512,6806,0,0,0,0,0),(4513,6807,0,0,0,0,0),(4514,6808,0,0,0,0,0),(4515,6809,0,0,0,0,0),(4516,6810,0,0,0,0,0),(4517,6811,0,0,0,0,0),(4518,6812,0,0,0,0,0),(4519,6813,0,0,0,0,0),(4520,6814,0,0,0,0,0),(4521,6815,0,0,0,0,0),(4522,6816,0,0,0,0,0),(4523,6817,0,0,0,0,0),(4524,6818,0,0,0,0,0),(4525,6819,0,0,0,0,0),(4526,6820,0,0,0,0,0),(4527,6821,0,0,0,0,0),(4528,6822,0,0,0,0,0),(4529,6823,0,0,0,0,0),(4530,6824,0,0,0,0,0),(4531,6825,0,0,0,0,0),(4532,6826,0,0,0,0,0),(4533,6827,0,0,0,0,0),(4534,6828,0,0,0,0,0),(4535,6829,0,0,0,0,0),(4536,6830,0,0,0,0,0),(4537,6831,0,0,0,0,0),(4538,6832,0,0,0,0,0),(4539,6833,0,0,0,0,0),(4540,6834,0,0,0,0,0),(4541,6835,0,0,0,0,0),(4542,6836,0,0,0,0,0),(4543,6837,0,0,0,0,0),(4544,6838,0,0,0,0,0),(4545,6839,0,0,0,0,0),(4546,6840,0,0,0,0,0),(4547,6841,0,0,0,0,0),(4548,6842,0,0,0,0,0),(4549,6843,0,0,0,0,0),(4550,6844,0,0,0,0,0),(4551,6845,0,0,0,0,0),(4552,6846,0,0,0,0,0),(4553,6847,0,0,0,0,0),(4554,6848,0,0,0,0,0),(4555,6849,0,0,0,0,0),(4556,6850,0,0,0,0,0),(4557,6851,0,0,0,0,0),(4558,6852,0,0,0,0,0),(4559,6853,0,0,0,0,0),(4560,6854,0,0,0,0,0),(4561,6855,0,0,0,0,0),(4562,6856,0,0,0,0,0),(4563,6857,0,0,0,0,0),(4564,6858,0,0,0,0,0),(4565,6859,0,0,0,0,0),(4566,6860,0,0,0,0,0),(4567,6861,0,0,0,0,0),(4568,6862,0,0,0,0,0),(4569,6863,0,0,0,0,0),(4570,6864,0,0,0,0,0),(4571,6865,0,0,0,0,0),(4572,6866,0,0,0,0,0);
/*!40000 ALTER TABLE `ater` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `ater` with 263 row(s)
--

--
-- Table structure for table `casaparticular`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casaparticular` (
  `id_casa` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleador` int(11) NOT NULL,
  `mayor_edad` tinyint(1) NOT NULL,
  `menor_edad` tinyint(1) NOT NULL,
  `jubilado` tinyint(1) NOT NULL,
  `menos_12` tinyint(1) NOT NULL,
  `menos_16` tinyint(1) NOT NULL,
  `mayor_16` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_casa`),
  KEY `id_empleador` (`id_empleador`),
  CONSTRAINT `casaparticular_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador` (`id_empleador`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casaparticular`
--

LOCK TABLES `casaparticular` WRITE;
/*!40000 ALTER TABLE `casaparticular` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `casaparticular` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `casaparticular` with 0 row(s)
--

--
-- Table structure for table `cliente_usuario`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente_usuario` (
  `id_clus` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_clus`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_usuario`
--

LOCK TABLES `cliente_usuario` WRITE;
/*!40000 ALTER TABLE `cliente_usuario` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `cliente_usuario` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `cliente_usuario` with 0 row(s)
--

--
-- Table structure for table `clientes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nro_cliente` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `denominacion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL,
  `observaciones` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=8424 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `clientes` VALUES (8161,'A-001','ALCALA Alejandra','154066090','ale-alcala@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8162,'A-002','ALEGRO SebastiÃƒÂ¡n','011-01564750124','alegroseba@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8163,'A-003','ALMEIDA, Nicolas','154469942','alnico34@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8164,'A-004','ALTERINI, Pablo','0345-154986963','alterini_ccv@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00','30715815954'),(8165,'A-005','ALTERINI, Gerardo','155105148','gerardoalterini@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8166,'A-006','ALVAREZ, Javier','154686890','javialavarez2000@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8167,'A-007','ALVAREZ, Julieta','155-122613 ','alvarezjuli@gigared.com','0000-00-00','0000-00-00','0000-00-00',''),(8168,'A-008','ALVAREZ, Juan Carlos','154610323','alvarezjuancarlos44@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8169,'A-009','ALDAO, Edgardo (Polaco)','155-180299','edgardoaldao@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8170,'A-010','ALBORNOZ, Emanuel','154064012','albornozema@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8171,'A-011','Asoc. Ciruj. Cardiov. Y Torac','4072894','','0000-00-00','0000-00-00','0000-00-00','33712477879'),(8172,'A-012','AVERO, Nancy','154734744','nancy@mindsestudio.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8173,'A-013','ARANDA, Alicia','','','0000-00-00','0000-00-00','0000-00-00',''),(8174,'A-014','ARMANDO, Luciano','155037422','nitoarmando@hotmail.com','2042-03-07','0000-00-00','0000-00-00',''),(8175,'A-015','Aso. De Escuela de Aerobismo','','','0000-00-00','0000-00-00','0000-00-00','30642237027'),(8176,'A-016','ASTOR Producciones Creativas','4342226','','0000-00-00','0000-00-00','0000-00-00','30711439621'),(8177,'A-017','ADUVER','154573672','nicolas_gastiazoro@hotmail.com','0000-00-00','0000-00-00','0000-00-00','30714211338'),(8178,'A-018','ASTUDILLA Laura Maria Jose','154666606','lalyas919@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8179,'A-020','AMAYA, Diego RaÃƒÂºl','154658838','drdiegoamaya@gmail.com','0000-00-00','0000-00-00','0000-00-00','Tel. 4233724'),(8180,'A-021','ARROYO, Paulina','0343-154743325','paulinaarroyo98@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8181,'A-022','AIZAGA, MarÃƒÂ­a Ines','154159989','','0000-00-00','0000-00-00','0000-00-00',''),(8182,'A-023','ARMANDOLA, Carla','154403505','Ã‚Â carla_armandola@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8183,'A-024','ALTERINI PABLO ANIBAL Y FOLONIER DAVID S.SOC.','','','0000-00-00','2043-07-00','0000-00-00','30715815954'),(8184,'A-025','ARENALES Juan Pastor','','','0000-00-00','0000-00-00','0000-00-00','Empleado Gerardo Alterini'),(8185,'A-026','ALFIERI, Juan','0342- 155264792','','0000-00-00','0000-00-00','0000-00-00',''),(8186,'A-027','AREVALO, Aurelio Alberto','','','0000-00-00','0000-00-00','0000-00-00',''),(8187,'','B','','','0000-00-00','0000-00-00','0000-00-00',''),(8188,'B-001','BASTIDA, Ramiro','','','2042-08-06','0000-00-00','0000-00-00',''),(8189,'B-002','BILLORDO, Federico','154046270','fedebillordo@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8190,'B-003',' BUFALIZA, Liliana Emma','154711282 - 4231631','','2042-02-02','0000-00-00','0000-00-00',''),(8191,'B-004','BOLATTI, Abel','155242307/4314891','nik_014x100pre_proo@hotmail.es\n','2042-04-02','0000-00-00','0000-00-00',''),(8192,'B-005','BENABEN Santiago','154562481/4349371','sbenaben@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8193,'B-006','BENITEZ, MarÃƒÂ­a Dolores ','155217499','doloresbenitezmed@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8194,'B-007','BIOLETTI Maria Florencia','154574159','lolebioletti@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8195,'B-008','BENEDETTI,  Luciano Manuel','155099961','lucianoebenedetti@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8196,'','C','','','0000-00-00','0000-00-00','0000-00-00',''),(8197,'C-001','CANIZA, Magdalena','154692303','maguisaltaquetealcanza@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8198,'C-002','CABELLO BARRIOS, Luisina','0343-154502326','','0000-00-00','0000-00-00','0000-00-00',''),(8199,'C-003','CARGNEL, Pablo','156211209','pcargnel@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8200,'C-004','CINQUINI, Egidio','154551084','prontobus@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8201,'C-005','CUESTA, Pablo','154733237','','0000-00-00','0000-00-00','0000-00-00',''),(8202,'C-006','CVM ARGENTINA SRL','154696800','pmoreyra@lamcard.com.ar','0000-00-00','0000-00-00','0000-00-00','30712211772'),(8203,'C-007','CUADRA Elizabeth Alicia','155004422','chipi275@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8204,'C-008','Calderon Diz Yamila','0343/155432925','yamilacalderondiz@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8205,'C-009','CABELLO Miguel','154628030','miguelcabello796@yahoo.com','0000-00-00','0000-00-00','0000-00-00',''),(8206,'C-010','CAMOIRANO Mariano Adolfo','0343-154670388','camoiranomariano@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8207,'C-011','CAHUIPE SRL','154553686//4973074','marceloverze@hotmail.com','0000-00-00','2042-03-06','0000-00-00','30-71479142-3'),(8208,'C-012','CARAMA SIMPLE SOCIEDAD','154670388','camoiranomariano@gmail.com','0000-00-00','0000-00-00','0000-00-00','30-71513402-7'),(8209,'C-013','CINQUINI Ana Laura','','','0000-00-00','0000-00-00','0000-00-00',''),(8210,'C-014','CAPORALE Felisa Maria del Huerto ','154065035','huerto2013caporale@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8211,'C-015','CANIZA Jorge','154254260','','0000-00-00','0000-00-00','0000-00-00',''),(8212,'C-016','CASALAS, Jeronimo','154535141','jeronimocasalas@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8213,'C-017','CAPORALE, Jose Eduardo','','','0000-00-00','0000-00-00','0000-00-00',''),(8214,'C-018','COMMENDATORE, Luciano','0343-154177169','commendatorioluciano@gmail.com','2043-04-09','0000-00-00','0000-00-00',''),(8215,'C-019','COOPERATIVA LA INTEGRAL','155 306677','cooperativalaintegral@gmail.com','0000-00-00','2043-02-05','0000-00-00','33712482279'),(8216,'C-020','CERRELLA, Martin Alejandro','0343-154468126','tin6_cho@hotmail.com','0000-00-00','2043-06-09','0000-00-00',''),(8217,'C-021','COSTA DEL PAIRIRY SA','','','0000-00-00','0000-00-00','0000-00-00',''),(8218,'C-022','CERRUDO, Silvana Soledad','0343-155107641','cerrudosilvana927@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8219,'C-023','CAMINOS, MÃƒÂ³nica','','','0000-00-00','0000-00-00','0000-00-00',''),(8220,'C-024','CESPEDES, Sonia','','','0000-00-00','0000-00-00','0000-00-00',''),(8221,'C-025','COMAS, Georgina Alejandra','0343-154657526','georgicomas1@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8222,'C-026','CULO,  Guido','0343-154631691','','0000-00-00','0000-00-00','0000-00-00',''),(8223,'C-027','CAMPOS, Juan','','','0000-00-00','0000-00-00','0000-00-00',''),(8224,'C-028','COS Federico Yamil','0351-152821660','','0000-00-00','0000-00-00','0000-00-00',''),(8225,'C-029','CORPS S.A.S.','','','0000-00-00','0000-00-00','0000-00-00','30716608189'),(8226,'C-030','CARELLI Nicolas','0343-154622367','nicocarelli@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8227,'','D','','','0000-00-00','0000-00-00','0000-00-00',''),(8228,'D-001','DETALLES','4230658','msgabas@gmail.com - manuelgabas@hotmail.com -','0000-00-00','0000-00-00','0000-00-00','30576577164'),(8229,'D-002','DE MATIAS VICTOR','155053347','victordemattia@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8230,'D-003','DIANA, Maximiliano','154573148 - 4071358','lucianazapata1@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8231,'D-004','DI VIRGILIO Maria de los Milagros','','','0000-00-00','0000-00-00','0000-00-00',''),(8232,'D-005','DI VIRGILIO Justo','0343-154584398','justod_94@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8233,'D-006','DIVIPA SA','','','0000-00-00','0000-00-00','0000-00-00','30710426208'),(8234,'D-007','DI VIRGILIO HernÃƒÂ¡n','155123603','','0000-00-00','0000-00-00','0000-00-00',''),(8235,'D-008','DIANA Cristhian Orlando','','','0000-00-00','0000-00-00','0000-00-00',''),(8236,'D-010','DE BUENO, Amadeo Ladislao','','','0000-00-00','0000-00-00','0000-00-00',''),(8237,'D-011','DENING Patricia','0343-154051851','dening_p@yahoo.com','0000-00-00','0000-00-00','0000-00-00',''),(8238,'','E','','','0000-00-00','0000-00-00','0000-00-00',''),(8239,'E-001','ESTUDIO LK S.R.L.','154488054','estudio.arq.lk@gmail.com','0000-00-00','0000-00-00','0000-00-00','33712206379'),(8240,'E-002','ECCLESIA JUAN LUIS','156232502','juanec-279@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8241,'E-003','ELIAS Eduardo','154650681','dreduardoelias@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8242,'E-004','EMILIO CONSTRUCCIONES SRL','','','0000-00-00','0000-00-00','0000-00-00',''),(8243,'E-005','EL SILENCIO SRL','','','0000-00-00','0000-00-00','0000-00-00','30710758286'),(8244,'E-006','ESTABLECIMIENTO DON EDUARDO S.R.L','','','0000-00-00','2043-07-00','0000-00-00','30709599638'),(8245,'E-007','ECHANDI HOMERO','','','0000-00-00','0000-00-00','0000-00-00',''),(8246,'E-008','ECHANDI, HOMERO AGUSTIN','','','0000-00-00','0000-00-00','0000-00-00',''),(8247,'','F','','','0000-00-00','0000-00-00','0000-00-00',''),(8248,'F-001','FELDMAN, Juan Gabriel','154469411','juan7_13@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8249,'F-002','FUNDACIÃƒÂ“N MUJERES ','155300030','','0000-00-00','0000-00-00','0000-00-00','30710473273'),(8250,'F-003','FUNDACIÃƒÂ“N FUNGALEA','','','0000-00-00','0000-00-00','0000-00-00','30715318128'),(8251,'F-004','FIDEICOMISO CALLE MISIONES 722','','','0000-00-00','0000-00-00','0000-00-00',''),(8252,'F-005','FUNDACIÃƒÂ“N LA HENDIJA','4242558','editorial@lahendija.org.ar - difusionindepend','0000-00-00','0000-00-00','0000-00-00','30671170241'),(8253,'F-006','FAES SEBASTIAN ANTONIO','03438-15405327','','0000-00-00','0000-00-00','0000-00-00',''),(8254,'F-007','FIDEICOMISO DEL PARACAO','154474252','','0000-00-00','0000-00-00','0000-00-00','33716545259'),(8255,'F-008','FALCHINI LUIS EDUARDO','','luifa763@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8256,'','G','','','0000-00-00','0000-00-00','0000-00-00',''),(8257,'G-001','GARAY, LucÃƒÂ­a','154742302','victordemattia@yahoo.com.ar/inducelgroup@hotm','0000-00-00','0000-00-00','0000-00-00',''),(8258,'G-002','GARCIA ABIB, Omar Antonio','154054165','omarga000@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8259,'G-003','GARCIA, Jorge Omar','156218094','omargarciadf@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8260,'G-004','GARCIA ABIB, Sabrina Soledad','154715964','sabrinagarciaa@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8261,'G-005','GAREIS, Natalia','154673291','natalia_gareis@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8262,'G-006','GREGORUTTI, Pablo','154163589','pablo@calzadosbeter.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8263,'G-007','GARMENDIA. JoaquÃƒÂ­n','154502680','joaquin_g84@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8264,'G-008','GABAS, Gisela','','','0000-00-00','0000-00-00','0000-00-00',''),(8265,'G-009','GABAS, ManueL','','','0000-00-00','0000-00-00','0000-00-00',''),(8266,'G-010','GABAS, ÃƒÂlvaro','','','0000-00-00','0000-00-00','0000-00-00',''),(8267,'G-011','GOMEZ, Demetrio Antonio','4355743','vendedortgomez@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8268,'G-012','GIUSTI, Federico','154723319','fedemanuelgiusti@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8269,'G-013','GRUPO DEL ESTE SALUD S.A.S','','','0000-00-00','0000-00-00','0000-00-00','30716447495'),(8270,'G-014','GIACOMINI, ValentÃƒÂ­n','154475632','giacomini590@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8271,'G-015','GALLARDO, Daniel','154383917','uer.admi@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8272,'','H','','','0000-00-00','0000-00-00','0000-00-00',''),(8273,'H-001','HERRLEIN, Viviana','154578017','viviherrlein@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8274,'H-002','HERR KESSLER AdriÃƒÂ¡n','154540898','','0000-00-00','0000-00-00','0000-00-00',''),(8275,'H-003','HOFSTETER, MÃƒÂ³nica','','','0000-00-00','0000-00-00','0000-00-00',''),(8276,'','I','','','0000-00-00','0000-00-00','0000-00-00',''),(8277,'I-001','INDEPENDIENTE BOCHAS CLUB','','','0000-00-00','0000-00-00','0000-00-00',''),(8278,'','J','','','0000-00-00','0000-00-00','0000-00-00',''),(8279,'J-001','JROMEI CARLOS','156203001','','0000-00-00','0000-00-00','0000-00-00',''),(8280,'J-002','JACOB, SUSANA','','','0000-00-00','0000-00-00','0000-00-00',''),(8281,'J-003','JOZAMI, NAHIR','','','0000-00-00','0000-00-00','0000-00-00','Maneja Santana'),(8282,'','K','','','0000-00-00','0000-00-00','0000-00-00',''),(8283,'K-001','KAUFMANN Pablo','154488054','','0000-00-00','0000-00-00','0000-00-00',''),(8284,'K-002','KREITZER, Lucrecia Luisa','0343-155309902','lucreciak05@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8285,'','L','','','0000-00-00','0000-00-00','0000-00-00',''),(8286,'L-001','LENCINA, Jose Javier','','','0000-00-00','0000-00-00','0000-00-00',''),(8287,'L-002','LEMOS, Javier','154432403','javier_lemos@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8288,'L-003','LESCANO, Claudia','154544386/4076668','','0000-00-00','0000-00-00','0000-00-00',''),(8289,'L-004','LIUZZI, Juan','154627799','petyi_128@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8290,'L-005','LOBOS, Rocio','154488247','lobosrocio@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8291,'L-006','LUERO, Claudia','156112249/154284236','claudialuero@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8292,'L-007','LUJAN. Maria Victoria','154572707','mvllujan@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8293,'L-008','LAMMERTYN, Mariana','','','0000-00-00','0000-00-00','0000-00-00','DPT pablo10'),(8294,'L-009','LDV S.A','','','0000-00-00','0000-00-00','0000-00-00','30712017380'),(8295,'L-010','LABRIOLA, Maria del Huerto','156200985','huertolabriola@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8296,'L-011','LOPEZ Sebastian','154051988','','0000-00-00','2043-10-01','0000-00-00',''),(8297,'L-012','LA UNION SA','156237279','','0000-00-00','2043-10-01','0000-00-00','30532312244'),(8298,'L-013','LEITES Rocio Marina','02355-15476304','musica.rociomarina@hotmail.com','2035-11-08','0000-00-00','0000-00-00',''),(8299,'','M','','','0000-00-00','0000-00-00','0000-00-00',''),(8300,'M-001','MANASSERO Miguel Angel','0342-154629403','marmoleriamanassero@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8301,'M-002','MARMOLERIA MANASSERO HNOS. SRL','0342-4602727','marmoleriamanassero@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8302,'M-003','MANASSERO Oscar SH','','','0000-00-00','0000-00-00','0000-00-00',''),(8303,'M-004','MEGLIO, Alejandro','156201175','alejandromeglio@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8304,'M-005',' MENDEZ, Maria Victoria ','154408117','victoria_mendez@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8305,'M-006','MENDEZ, Maria Florencia','154046938','flomendez\n@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8306,'M-007','MARTINEZ, Romina Maria Mirta','154170807','rominama@hotmail.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8307,'M-008','MARTINO Emanuel M. Bruera Leonardo Damian S.H','154722277','brueraleo@gmail.com','0000-00-00','0000-00-00','0000-00-00','30714988456'),(8308,'M-009','MENIS, Mariana Florencia','0341-155312132','marianamenis47@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8309,'M-010','MUZIO Priscila','','priscilar','0000-00-00','0000-00-00','0000-00-00',''),(8310,'M-011','MENDEZ, Mirna','0343-156232655','mirnamendez5@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8311,'M-012','MUTEVERRIA Walkyria','4310170','','0000-00-00','0000-00-00','0000-00-00',''),(8312,'M-013','MIRANDA, Fabricio Maximiliano','4310170/155161288','fmiranda130@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8313,'M-014','MEDINA, Marcelo Eloy','154289243','mmedina@uno.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8314,'M-015','MONZON, Maria Belen','154709216','mariabelen.monzon@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8315,'M-016','MASLEIN, Mercedes','154298089','mermaslein@hotmail.com.ar','2043-04-04','2043-02-08','0000-00-00',''),(8316,'M-017','MENDEZ, Maria Ines','156205749','ines_mendez@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8317,'M-018','MARTINEZ, Fernanda','155054614','martinezfernanda99@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8318,'M-019','MARÃƒÂA , Daniel Khalil','','','0000-00-00','0000-00-00','0000-00-00',''),(8319,'M-020','MATTHEWS, Melissa','','','0000-00-00','0000-00-00','0000-00-00',''),(8320,'M-021','MOREYRA,  Francisco','','','0000-00-00','0000-00-00','0000-00-00',''),(8321,'M-022','MANASSERO, AndrÃƒÂ©s Emilio','','','0000-00-00','0000-00-00','0000-00-00',''),(8322,'M-023','MONZON, Octavio de la Cruz','','','0000-00-00','0000-00-00','0000-00-00',''),(8323,'','N','','','0000-00-00','0000-00-00','0000-00-00',''),(8324,'N-001','Navarro Sebastian','154561200','sebasn123@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8325,'N-002','NIEMIZ, Lucas','154584628','lucas@mindsestudio.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8326,'N-003','NORIEGA, Juan Pablo','154168810','','0000-00-00','0000-00-00','0000-00-00',''),(8327,'N-004','NED SRL','','','0000-00-00','0000-00-00','0000-00-00',''),(8328,'N-005','Niemiz Osvaldo','','','0000-00-00','2043-10-01','0000-00-00',''),(8329,'N-006','Niemiz Omar','','','0000-00-00','2043-10-01','0000-00-00',''),(8330,'N-007','NAVARRO Francisco Antonio','154561204','fran_dedis@hotmail.com','0000-00-00','0000-00-00','0000-00-00','1'),(8331,'','O','','','0000-00-00','0000-00-00','0000-00-00',''),(8332,'O-001','OLIVO, Antonio Daniel','','','0000-00-00','0000-00-00','0000-00-00',''),(8333,'','P','','','0000-00-00','0000-00-00','0000-00-00',''),(8334,'P-001','PELLEGRINI, Ivana','155172222','ivipele@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8335,'P-002','PELLEGRINI, NicolÃƒÂ¡s','154050442','nicolasmpellegrini@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8336,'P-003','PRETTIS, Leonel','156218812','','0000-00-00','0000-00-00','0000-00-00',''),(8337,'P-004','PREIZS, Alan','154159989','alanpreisz@hotmail.com','2042-09-08','0000-00-00','0000-00-00',''),(8338,'P-005','PUTALLAZ, Daniel','154756333','','0000-00-00','0000-00-00','0000-00-00',''),(8339,'P-006','POLETTI Daniela Soledad','156203749','polettidanielasoledad@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8340,'P-007','POLETTI, Luciana Mariela','154155724','polettiluciana@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8341,'P-008','PUTALLAZ - JROMEI SH','154756333-Fijo 4390266','','0000-00-00','0000-00-00','0000-00-00','30-7146881x-8'),(8342,'P-009','PORQUERES MERCEDES','155070812','','0000-00-00','0000-00-00','0000-00-00',''),(8343,'P-010','PAMPA RIEGO SRL','AndÃƒÂ©s: 154605105 - Guido: 154251710','anbutta@pampariego.com','0000-00-00','0000-00-00','0000-00-00',''),(8344,'P-011','PUSULA JUAN CRUZ','0343-155233383','jpusula@intramed.net','0000-00-00','0000-00-00','0000-00-00',''),(8345,'P-012','PELLEGRINI, SERGIO OSCAR','156985400','monivicami@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8346,'P-013','POPPER','154553686','marceloverze@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8347,'P-014','PINEDA CARLA NAHIR','','carlapineda_@hotmail.com','0000-00-00','0000-00-00','0000-00-00','Matricula 22/10/2014'),(8348,'P-015','PASTRE RICARDO RAUL','156438336','ricardopastre@hotmail.com,ar','0000-00-00','0000-00-00','0000-00-00',''),(8349,'P-016','PEREZ, MARIA DEL CONSUELO CARMEN','','','0000-00-00','0000-00-00','0000-00-00',''),(8350,'P-017','PICEDA, Camila Daniela','','ckkpiceda@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8351,'P-018','POLETTI,  Fernanda Gaston ','156201202 / 154636466/4319026','GASTON_POLETTI@GMAIL.COM','0000-00-00','0000-00-00','0000-00-00',''),(8352,'P-019','POLETTI, Marcela ','155121314','marcelapoletti@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8353,'','R','','','0000-00-00','0000-00-00','0000-00-00',''),(8354,'R-001','RAMOS, Augusto','154504787','augusramos@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8355,'R-002','RECALDE,  Marcos','155066595','','0000-00-00','0000-00-00','0000-00-00',''),(8356,'R-003','RIERA, MARIA JOSE','154551760','rieramariajose@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8357,'R-004','RODRIGUEZ PAULIN, Maximiliano','156223797','','2042-09-03','0000-00-00','0000-00-00',''),(8358,'R-005','ROMERO, Diego','155011883','diego@mindsestudio.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8359,'R-006','ROTSTEIN, Estela','','','0000-00-00','0000-00-00','0000-00-00',''),(8360,'R-007','REINOSO, Carlos Abel','154054985','','0000-00-00','0000-00-00','0000-00-00',''),(8361,'R-008','ROUDE, GastÃƒÂ³n Andres','154650121','roude79@hotmail.com','0000-00-00','2042-12-06','0000-00-00',''),(8362,'R-009','RAMALLO,  Julieta Ileana','0345-154986962','julietai_ramallo@hotmail.com','0000-00-00','2042-10-08','0000-00-00',''),(8363,'R-010','RAMOS, Valentin','154505076','','0000-00-00','0000-00-00','0000-00-00',''),(8364,'R-011','ROSSO, Maria Antonia','','rossokuky24@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8365,'R-012','RICKER, Alicia','011-1557290789','jorgetayar@andesmar.com.ar','0000-00-00','2043-10-01','0000-00-00','Esposa de Tayar'),(8366,'R-013','RAMIREZ, Matias Gabriel Ramon ','155313017','matiasrmirez339@gmail.com','0000-00-00','0000-00-00','0000-00-00','Paga Silvina Santana'),(8367,'R-014','REVILLA, Mirna Irene','156116424','irenerev@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8368,'R-015','RAMALLO, Mirta','','','0000-00-00','0000-00-00','0000-00-00',''),(8369,'R-016','RAMALLO, Evangelina','','','0000-00-00','0000-00-00','0000-00-00',''),(8370,'R-017','RUIZ, Miguel Angel','154058234','','0000-00-00','0000-00-00','0000-00-00',''),(8371,'R-018','ROLDAN Gisela ','','','0000-00-00','0000-00-00','0000-00-00','Novia de Federico Cos'),(8372,'','S','','','0000-00-00','0000-00-00','0000-00-00',''),(8373,'S-001','SARMIENTO, Ignacio','154058434','pilar-inmobiliaria@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8374,'S-002','SEMAER','154605105','anbutta@semaer.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8375,'S-003','SANTA CANDIDA S.A.','156223797','santacandidasa@hotmail.com (ContraseÃƒÂ±a: ba','0000-00-00','0000-00-00','0000-00-00',''),(8376,'S-004','SIOCH MartÃƒÂ­n','154163887','martinsioch@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8377,'S-005','SECCHI, Matias','154619566','matiassecchi@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8378,'S-006','SUCESIÃƒÂ“N PEDERZOLLI','','administracion@devetac.com.ar','0000-00-00','0000-00-00','0000-00-00','20063736032'),(8379,'S-007','SANTANA Silvina BelÃƒÂ©n','','santanasilvinab@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8380,'S-008','SANTANA Johana BelÃƒÂ©n','','','0000-00-00','0000-00-00','0000-00-00',''),(8381,'S-009','SKLADNY, Bettina','','','0000-00-00','0000-00-00','0000-00-00',''),(8382,'S-010','SANTA MARIA, Maximiliano','','','0000-00-00','0000-00-00','0000-00-00','Empleado de Gerardo'),(8383,'S-011','SCHMIDT Guillermo','','','0000-00-00','0000-00-00','0000-00-00','Empleado de Gerardo'),(8384,'S-012','SCHMIDT, Mariano','','mariano.daniel084@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8385,'S-013','SALZMAN, Armando Carlos','4242558 - 4240856','difusionindependiente@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8386,'S-014','SCHIRO, Diana Nelly','','','0000-00-00','0000-00-00','0000-00-00',''),(8387,'','T','','','0000-00-00','0000-00-00','0000-00-00',''),(8388,'T-001','TOMASSI Dario','156224094','','0000-00-00','2043-10-01','0000-00-00','Cober:  Mat 4938 - C: 2801'),(8389,'T-002','TAYAR Jorge','011-1557290789','jorgetayar@andesmar.com.ar','0000-00-00','2043-10-01','0000-00-00','Se liquida junto con Alicia Ricker'),(8390,'','U','','','0000-00-00','0000-00-00','0000-00-00',''),(8391,'U-001','UER','4242473 // 4347322','uer.admi@gmail.com','0000-00-00','0000-00-00','0000-00-00','30681103364'),(8392,'U-002','URQUIZA Club de Tenis','155066595','priscilaar.muzio@gmail.com','0000-00-00','0000-00-00','0000-00-00','30521106987'),(8393,'U-003','URIBURU, Carlos Horacio ','154158910','churiburu@gmail.com','0000-00-00','2042-05-04','0000-00-00',''),(8394,'U-004','ULRICH, Alcides RubÃƒÂ©n','15230884','alcidesulrich@hotmail.com','0000-00-00','2043-10-08','0000-00-00',''),(8395,'','V','','','0000-00-00','0000-00-00','0000-00-00',''),(8396,'V-001','VACA, Mariano','','nanovacas4@hotmail.com','0000-00-00','0000-00-00','0000-00-00','30714067717'),(8397,'V-002','VILLANUEVA, Gustavo','-','-','0000-00-00','0000-00-00','0000-00-00',''),(8398,'V-003','VINAGRE, JuliÃƒÂ¡n','156230318','julianvinagre@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8399,'V-004','VERZEÃƒÂ‘ASSI, Manuel','','','0000-00-00','0000-00-00','0000-00-00',''),(8400,'V-005','VICENTIN, German','154253988','alisadistribuciones@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8401,'V-006','VAZQUEZ. Jonathan Eduardo','','','0000-00-00','0000-00-00','0000-00-00',''),(8402,'V-007','VERZEÃƒÂ‘ASSI Marcelo','154553686','marceloverze@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8403,'V-008','VEGA, Luciana','154654637','','0000-00-00','0000-00-00','0000-00-00',''),(8404,'V-009','VAZQUEZ, Rocio Estefania Ayelen','154637301','','0000-00-00','2043-01-03','0000-00-00','Cristian Gomez'),(8405,'V-010','VALENZUELA, Javier','155306677','cooperativalaintegral@gmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8406,'V-011','VAZQUEZ, IvÃƒÂ¡n Rodrigo','','','0000-00-00','0000-00-00','0000-00-00',''),(8407,'V-012','VALLE, Francisco Javier','155061381','panchovalle10@gmaail.com','0000-00-00','0000-00-00','0000-00-00',''),(8408,'V-013','VICENTÃƒÂN, Jorge Luis','154059062','','0000-00-00','0000-00-00','0000-00-00',''),(8409,'V-014','VICENTIN, Rafael','154059043','rafavicen@yahoo.com.ar','0000-00-00','0000-00-00','0000-00-00',''),(8410,'','W','','','0000-00-00','0000-00-00','0000-00-00',''),(8411,'W-001','WEBER, Andres','156217769','','0000-00-00','0000-00-00','0000-00-00',''),(8412,'W-002','WEBER, Arturo Ernesto','4226286','aweber@ta.telecom.com.ar','2042-01-04','0000-00-00','0000-00-00',''),(8413,'W-003','WETZEL, Gloria ','155108410','gloriawetzel60@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8414,'W-004','WIND, Lilian','0343-154401323','dralilianwindfurlan@hotmail.com','2042-08-08','0000-00-00','0000-00-00',''),(8415,'W-005','WEBER,  Tania Pamela','','','0000-00-00','0000-00-00','0000-00-00',''),(8416,'','Z','','','0000-00-00','0000-00-00','0000-00-00',''),(8417,'Z-001','ZAPATA, Luciana','156101886 / 407-1358','lucianazapata1@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8418,'Z-002','ZONI, GermÃƒÂ¡n','154043671','estudioarete@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8419,'Z-003','ZABALA, Anton','154065223','anton016@hotmail.com','0000-00-00','0000-00-00','0000-00-00',''),(8420,'Z-004','ZONZOGNI, Mario Rodolfo','154639330','zonzognim@hotmail.com\n','0000-00-00','0000-00-00','0000-00-00',''),(8421,'','','','','0000-00-00','0000-00-00','0000-00-00',''),(8422,'','','','','0000-00-00','0000-00-00','0000-00-00',''),(8423,'','','','','0000-00-00','0000-00-00','0000-00-00','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `clientes` with 263 row(s)
--

--
-- Table structure for table `condiciontributaria`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condiciontributaria` (
  `id_condicion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `afim` tinyint(1) NOT NULL,
  `sindicato` tinyint(1) NOT NULL,
  `afip` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `ingresos_brutos` int(11) NOT NULL,
  PRIMARY KEY (`id_condicion`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `condiciontributaria_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6867 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condiciontributaria`
--

LOCK TABLES `condiciontributaria` WRITE;
/*!40000 ALTER TABLE `condiciontributaria` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `condiciontributaria` VALUES (6604,8161,0,0,'Monotributista',157959),(6605,8162,0,0,'No Inscripto',0),(6606,8163,0,0,'Monotributista',364550),(6607,8164,0,0,'Monotributista',1111),(6608,8165,0,0,'Monotributista',280550),(6609,8166,0,0,'Monotributista',11111),(6610,8167,0,0,'Monotributista',835300),(6611,8168,0,0,'Exento',0),(6612,8169,0,0,'Monotributista',2147483647),(6613,8170,0,0,'Monotributista',114675),(6614,8171,0,0,'Exento',0),(6615,8172,0,0,'Monotributista',85050),(6616,8173,0,0,'Monotributista',1111111),(6617,8174,0,0,'Monotributista',692975),(6618,8175,0,0,'Exento',0),(6619,8176,0,0,'R.I',0),(6620,8177,0,0,'Exento',0),(6621,8178,0,0,'Monotributista',297622),(6622,8179,0,0,'Monotributista',222222),(6623,8180,0,0,'Monotributista',111111),(6624,8181,0,0,'Monotributista',111111),(6625,8182,0,0,'Monotributista',953734),(6626,8183,0,0,'R.I',0),(6627,8184,0,0,'Monotributista',1111111),(6628,8185,0,0,'-',0),(6629,8186,0,0,'Monotributista',11111),(6630,8187,0,0,'',0),(6631,8188,0,0,'Monotributista',11111),(6632,8189,0,0,'Monotributista',774756),(6633,8190,0,0,'Monotributista',111111111),(6634,8191,0,0,'Monotributista',1),(6635,8192,0,0,'Monotributista',1101577),(6636,8193,0,0,'Monotributista',111111111),(6637,8194,0,0,'Monotributista',0),(6638,8195,0,0,'Monotributista',125328),(6639,8196,0,0,'',0),(6640,8197,0,0,'Monotributista',0),(6641,8198,0,0,'Monotributista',0),(6642,8199,0,0,'Monotributista',1295769),(6643,8200,0,0,'Monotributista',359957),(6644,8201,0,0,'Monotributista',0),(6645,8202,0,0,'R.I',0),(6646,8203,0,0,'Monotributista',258570),(6647,8204,0,0,'Monotributista',635000),(6648,8205,0,0,'Monotributista',83565),(6649,8206,0,0,'Monotributista',0),(6650,8207,0,0,'',0),(6651,8208,0,0,'R.I',0),(6652,8209,0,0,'Monotributista',0),(6653,8210,0,0,'Monotributista',0),(6654,8211,0,0,'',0),(6655,8212,0,0,'Monotributista',639145),(6656,8213,0,0,'-',0),(6657,8214,0,0,'Monotributista',139430),(6658,8215,0,0,'R.I',0),(6659,8216,0,0,'Monotributista',0),(6660,8217,0,0,'R.I',0),(6661,8218,0,0,'Monotributista',8825),(6662,8219,0,0,'Monotributista',0),(6663,8220,0,0,'Monotributista',294395),(6664,8221,0,0,'Monotributista',0),(6665,8222,0,0,'Monotributista',129140),(6666,8223,0,0,'',0),(6667,8224,0,0,'Monotributista',0),(6668,8225,0,0,'R.I',0),(6669,8226,0,0,'Monotributista',0),(6670,8227,0,0,'',0),(6671,8228,0,0,'R.I',0),(6672,8229,0,0,'Monotributista',0),(6673,8230,0,0,'R.I',0),(6674,8231,0,0,'R.I',0),(6675,8232,0,0,'Monotributista',0),(6676,8233,0,0,'R.I',0),(6677,8234,0,0,'Monotributista',853901),(6678,8235,0,0,'Monotributista',0),(6679,8236,0,0,'Monotributista',0),(6680,8237,0,0,'R.I',0),(6681,8238,0,0,'',0),(6682,8239,0,0,'R.I',0),(6683,8240,0,0,'Monotributista',540641),(6684,8241,0,0,'Monotributista',927927),(6685,8242,0,0,'R.I',0),(6686,8243,0,0,'R.I',0),(6687,8244,0,0,'R.I',0),(6688,8245,0,0,'Monotributista',0),(6689,8246,0,0,'',0),(6690,8247,0,0,'',0),(6691,8248,0,0,'Monotributista',558609),(6692,8249,0,0,'Exento',0),(6693,8250,0,0,'Exento',0),(6694,8251,0,0,'R.I',0),(6695,8252,0,0,'Exento',0),(6696,8253,0,0,'R.I',0),(6697,8254,0,0,'R.I',0),(6698,8255,0,0,'Monotributista',0),(6699,8256,0,0,'',0),(6700,8257,0,0,'R.I',0),(6701,8258,0,0,'Monotributista',0),(6702,8259,0,0,'Monotributista',0),(6703,8260,0,0,'Monotributista',0),(6704,8261,0,0,'Monotributista',503952),(6705,8262,0,0,'No Inscripto',0),(6706,8263,0,0,'',0),(6707,8264,0,0,'Monotributista',0),(6708,8265,0,0,'',0),(6709,8266,0,0,'Monotributista',746148),(6710,8267,0,0,'Monotributista',0),(6711,8268,0,0,'Monotributista',0),(6712,8269,0,0,'RI',0),(6713,8270,0,0,'Monotributista',0),(6714,8271,0,0,'Monotributista',0),(6715,8272,0,0,'',0),(6716,8273,0,0,'Monotributista',1372943),(6717,8274,0,0,'Monotributista',0),(6718,8275,0,0,'Monotributista',0),(6719,8276,0,0,'',0),(6720,8277,0,0,'',0),(6721,8278,0,0,'',0),(6722,8279,0,0,'Monotributista',0),(6723,8280,0,0,'',0),(6724,8281,0,0,'Monotributista',0),(6725,8282,0,0,'',0),(6726,8283,0,0,'Monotributista',212394),(6727,8284,0,0,'Monotributista',126451),(6728,8285,0,0,'',0),(6729,8286,0,0,'Monotributista',0),(6730,8287,0,0,'Monotributista',974194),(6731,8288,0,0,'Monotributista',0),(6732,8289,0,0,'Monotributista',682691),(6733,8290,0,0,'Monotributista',133043),(6734,8291,0,0,'Monotributista',971500),(6735,8292,0,0,'Monotributista',0),(6736,8293,0,0,'',0),(6737,8294,0,0,'R.I',0),(6738,8295,0,0,'Monotributista',0),(6739,8296,0,0,'Monotributista',81090),(6740,8297,0,0,'R.I',0),(6741,8298,0,0,'Monotributista',243200),(6742,8299,0,0,'',0),(6743,8300,0,0,'Monotributista',0),(6744,8301,0,0,'R.I',0),(6745,8302,0,0,'R.I',0),(6746,8303,0,0,'Monotributista',483723),(6747,8304,0,0,'Monotributista',251599),(6748,8305,0,0,'Monotributista',148100),(6749,8306,0,0,'Monotributista',1078697),(6750,8307,0,0,'Monotributista',0),(6751,8308,0,0,'Monotributista',376517),(6752,8309,0,0,'',0),(6753,8310,0,0,'Monotributista',549329),(6754,8311,0,0,'-',0),(6755,8312,0,0,'Monotributista',105000),(6756,8313,0,0,'-',0),(6757,8314,0,0,'Monotributista',258263),(6758,8315,0,0,'Monotributista',0),(6759,8316,0,0,'Monotributista',29300),(6760,8317,0,0,'Monotributista',156460),(6761,8318,0,0,'Monotributista',0),(6762,8319,0,0,'Monotributista',38322),(6763,8320,0,0,'',0),(6764,8321,0,0,'',0),(6765,8322,0,0,'',0),(6766,8323,0,0,'',0),(6767,8324,0,0,'Monotributista',574800),(6768,8325,0,0,'Monotributista',216393),(6769,8326,0,0,'Monotributista',0),(6770,8327,0,0,'',0),(6771,8328,0,0,'-',0),(6772,8329,0,0,'-',0),(6773,8330,0,0,'Monotributista',44800),(6774,8331,0,0,'',0),(6775,8332,0,0,'Monotributista',432016),(6776,8333,0,0,'',0),(6777,8334,0,0,'Monotributista',429540),(6778,8335,0,0,'R.I',0),(6779,8336,0,0,'Monotributista',0),(6780,8337,0,0,'Monotributista',0),(6781,8338,0,0,'Monotributista',0),(6782,8339,0,0,'Monotributista',248828),(6783,8340,0,0,'Monotributista',0),(6784,8341,0,0,'Monotributista',0),(6785,8342,0,0,'',0),(6786,8343,0,0,'R.I',0),(6787,8344,0,0,'Monotributista',777676),(6788,8345,0,0,'Monotributista',466515),(6789,8346,0,0,'R.I',0),(6790,8347,0,0,'Monotributista',0),(6791,8348,0,0,'Monotributista',230636),(6792,8349,0,0,'Monotributista',0),(6793,8350,0,0,'Monotributista',0),(6794,8351,0,0,'Monotributista',87309),(6795,8352,0,0,'Monotributista',97910),(6796,8353,0,0,'',0),(6797,8354,0,0,'Monotributista',732408),(6798,8355,0,0,'Monotributista',0),(6799,8356,0,0,'R.I',0),(6800,8357,0,0,'Monotributista',0),(6801,8358,0,0,'Monotributista',0),(6802,8359,0,0,'Monotributista',621000),(6803,8360,0,0,'Monotributista',574370),(6804,8361,0,0,'Monotributista',1571564),(6805,8362,0,0,'Monotributista',0),(6806,8363,0,0,'Monotributista',1271125),(6807,8364,0,0,'-',0),(6808,8365,0,0,'Monotributista',0),(6809,8366,0,0,'Monotributista',0),(6810,8367,0,0,'Monotributista',225905),(6811,8368,0,0,'-',0),(6812,8369,0,0,'-',0),(6813,8370,0,0,'Monotributista',0),(6814,8371,0,0,'Monotributista',0),(6815,8372,0,0,'',0),(6816,8373,0,0,'Monotributista',0),(6817,8374,0,0,'R.I',0),(6818,8375,0,0,'EXENTO',0),(6819,8376,0,0,'Monotributista',0),(6820,8377,0,0,'Monotributista',0),(6821,8378,0,0,'R.I',0),(6822,8379,0,0,'Monotributista',292895),(6823,8380,0,0,'',0),(6824,8381,0,0,'Monotributista',0),(6825,8382,0,0,'Monotributista',0),(6826,8383,0,0,'Monotributista',0),(6827,8384,0,0,'',0),(6828,8385,0,0,'Monotributo',0),(6829,8386,0,0,'Monotributo',0),(6830,8387,0,0,'',0),(6831,8388,0,0,'Monotributista',423176),(6832,8389,0,0,'Monotributista',238273),(6833,8390,0,0,'',0),(6834,8391,0,0,'Exento',0),(6835,8392,0,0,'Exento',0),(6836,8393,0,0,'Monotributista',724960),(6837,8394,0,0,'Monotributista',0),(6838,8395,0,0,'',0),(6839,8396,0,0,'Monotributista',343550),(6840,8397,0,0,'Monotributista',267085),(6841,8398,0,0,'Monotributista',0),(6842,8399,0,0,'Monotributista',0),(6843,8400,0,0,'Monotributista',0),(6844,8401,0,0,'Monotributista',101503),(6845,8402,0,0,'Monotributista',0),(6846,8403,0,0,'R.I',0),(6847,8404,0,0,'Monotributista',0),(6848,8405,0,0,'Monotributista',0),(6849,8406,0,0,'Monotributista',0),(6850,8407,0,0,'Monotributista',0),(6851,8408,0,0,'R.I',0),(6852,8409,0,0,'R.I',0),(6853,8410,0,0,'',0),(6854,8411,0,0,'Monotributista',0),(6855,8412,0,0,'Monotributista',311000),(6856,8413,0,0,'R.I',0),(6857,8414,0,0,'Monotributista',613197),(6858,8415,0,0,'',108000),(6859,8416,0,0,'',0),(6860,8417,0,0,'R.I',0),(6861,8418,0,0,'Monotributista',0),(6862,8419,0,0,'Monotributista',0),(6863,8420,0,0,'-',0),(6864,8421,0,0,'',0),(6865,8422,0,0,'',0),(6866,8423,0,0,'',0);
/*!40000 ALTER TABLE `condiciontributaria` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `condiciontributaria` with 263 row(s)
--

--
-- Table structure for table `convenio_multilateral`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convenio_multilateral` (
  `id_multilateral` int(11) NOT NULL AUTO_INCREMENT,
  `id_ater` int(11) NOT NULL,
  `caba` tinyint(1) NOT NULL,
  `bs_as` tinyint(1) NOT NULL,
  `cordoba` tinyint(1) NOT NULL,
  `santa_fe` tinyint(1) NOT NULL,
  `misiones` tinyint(1) NOT NULL,
  `chaco` tinyint(1) NOT NULL,
  `entre_rios` tinyint(1) NOT NULL,
  `tucuman` tinyint(1) NOT NULL,
  `mendoza` tinyint(1) NOT NULL,
  `tierra_del_fuego` tinyint(1) NOT NULL,
  `la_pampa` tinyint(1) NOT NULL,
  `santa_cruz` tinyint(1) NOT NULL,
  `rio_negro` tinyint(1) NOT NULL,
  `corrientes` tinyint(1) NOT NULL,
  `san_luis` tinyint(1) NOT NULL,
  `salta` tinyint(1) NOT NULL,
  `jujuy` tinyint(1) NOT NULL,
  `san_juan` tinyint(1) NOT NULL,
  `chubut` tinyint(1) NOT NULL,
  `neuquen` tinyint(1) NOT NULL,
  `la_rioja` tinyint(1) NOT NULL,
  `santiago_estero` tinyint(1) NOT NULL,
  `formosa` tinyint(1) NOT NULL,
  `catamarca` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_multilateral`),
  KEY `id_ater` (`id_ater`),
  CONSTRAINT `convenio_multilateral_ibfk_1` FOREIGN KEY (`id_ater`) REFERENCES `ater` (`id_ater`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4434 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convenio_multilateral`
--

LOCK TABLES `convenio_multilateral` WRITE;
/*!40000 ALTER TABLE `convenio_multilateral` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `convenio_multilateral` VALUES (4171,4310,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4172,4311,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4173,4312,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4174,4313,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4175,4314,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4176,4315,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4177,4316,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4178,4317,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4179,4318,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4180,4319,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4181,4320,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4182,4321,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4183,4322,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4184,4323,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4185,4324,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4186,4325,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4187,4326,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4188,4327,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4189,4328,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4190,4329,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4191,4330,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4192,4331,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4193,4332,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4194,4333,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4195,4334,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4196,4335,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4197,4336,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4198,4337,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4199,4338,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4200,4339,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4201,4340,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4202,4341,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4203,4342,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4204,4343,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4205,4344,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4206,4345,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4207,4346,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4208,4347,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4209,4348,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4210,4349,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4211,4350,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4212,4351,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4213,4352,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4214,4353,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4215,4354,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4216,4355,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4217,4356,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4218,4357,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4219,4358,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4220,4359,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4221,4360,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4222,4361,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4223,4362,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4224,4363,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4225,4364,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4226,4365,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4227,4366,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4228,4367,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4229,4368,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4230,4369,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4231,4370,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4232,4371,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4233,4372,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4234,4373,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4235,4374,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4236,4375,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4237,4376,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4238,4377,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4239,4378,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4240,4379,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4241,4380,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4242,4381,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4243,4382,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4244,4383,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4245,4384,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4246,4385,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4247,4386,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4248,4387,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4249,4388,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4250,4389,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4251,4390,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4252,4391,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4253,4392,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4254,4393,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4255,4394,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4256,4395,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4257,4396,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4258,4397,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4259,4398,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4260,4399,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4261,4400,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4262,4401,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4263,4402,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4264,4403,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4265,4404,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4266,4405,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4267,4406,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4268,4407,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4269,4408,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4270,4409,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4271,4410,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4272,4411,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4273,4412,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4274,4413,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4275,4414,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4276,4415,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4277,4416,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4278,4417,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4279,4418,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4280,4419,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4281,4420,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4282,4421,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4283,4422,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4284,4423,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4285,4424,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4286,4425,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4287,4426,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4288,4427,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4289,4428,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4290,4429,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4291,4430,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4292,4431,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4293,4432,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4294,4433,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4295,4434,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4296,4435,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4297,4436,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4298,4437,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4299,4438,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4300,4439,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4301,4440,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4302,4441,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4303,4442,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4304,4443,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4305,4444,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4306,4445,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4307,4446,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4308,4447,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4309,4448,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4310,4449,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4311,4450,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4312,4451,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4313,4452,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4314,4453,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4315,4454,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4316,4455,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4317,4456,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4318,4457,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4319,4458,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4320,4459,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4321,4460,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4322,4461,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4323,4462,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4324,4463,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4325,4464,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4326,4465,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4327,4466,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4328,4467,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4329,4468,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4330,4469,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4331,4470,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4332,4471,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4333,4472,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4334,4473,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4335,4474,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4336,4475,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4337,4476,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4338,4477,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4339,4478,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4340,4479,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4341,4480,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4342,4481,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4343,4482,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4344,4483,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4345,4484,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4346,4485,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4347,4486,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4348,4487,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4349,4488,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4350,4489,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4351,4490,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4352,4491,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4353,4492,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4354,4493,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4355,4494,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4356,4495,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4357,4496,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4358,4497,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4359,4498,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4360,4499,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4361,4500,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4362,4501,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4363,4502,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4364,4503,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4365,4504,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4366,4505,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4367,4506,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4368,4507,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4369,4508,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4370,4509,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4371,4510,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4372,4511,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4373,4512,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4374,4513,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4375,4514,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4376,4515,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4377,4516,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4378,4517,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4379,4518,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4380,4519,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4381,4520,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4382,4521,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4383,4522,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4384,4523,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4385,4524,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4386,4525,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4387,4526,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4388,4527,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4389,4528,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4390,4529,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4391,4530,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4392,4531,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4393,4532,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4394,4533,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4395,4534,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4396,4535,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4397,4536,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4398,4537,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4399,4538,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4400,4539,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4401,4540,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4402,4541,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4403,4542,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4404,4543,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4405,4544,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4406,4545,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4407,4546,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4408,4547,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4409,4548,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4410,4549,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4411,4550,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4412,4551,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4413,4552,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4414,4553,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4415,4554,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4416,4555,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4417,4556,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4418,4557,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4419,4558,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4420,4559,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4421,4560,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4422,4561,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4423,4562,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4424,4563,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4425,4564,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4426,4565,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4427,4566,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4428,4567,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4429,4568,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4430,4569,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4431,4570,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4432,4571,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4433,4572,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `convenio_multilateral` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `convenio_multilateral` with 263 row(s)
--

--
-- Table structure for table `conveniosindical`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conveniosindical` (
  `id_sindical` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleador` int(11) NOT NULL,
  `comercio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `sanidad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `smata` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `uom` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `gastronomico` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `utedyc` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_sindical`),
  KEY `id_condicion` (`id_empleador`),
  CONSTRAINT `conveniosindical_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador` (`id_empleador`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conveniosindical`
--

LOCK TABLES `conveniosindical` WRITE;
/*!40000 ALTER TABLE `conveniosindical` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `conveniosindical` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `conveniosindical` with 0 row(s)
--

--
-- Table structure for table `datosfiscales`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosfiscales` (
  `id_datosfiscales` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_persona` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cuit` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cuit_juridico` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `riesgo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_afim` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_dpt` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_sindicato` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_fiscal` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cuit_titular` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_datosfiscales`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `datosfiscales_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12034 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosfiscales`
--

LOCK TABLES `datosfiscales` WRITE;
/*!40000 ALTER TABLE `datosfiscales` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `datosfiscales` VALUES (11771,8161,'Activo','fisica','27182742010','0','1','','','','aleja0304','0'),(11772,8162,'Inactivo','fisica','20325098989','0','','','','','AFIP0343','0'),(11773,8163,'Activo','fisica','20294473654','0','1','','','','Estudio0833','0'),(11774,8164,'Activo','fisica','20276181735','0','1','','estudio2019','','Paa27618173j','0'),(11775,8165,'Activo','fisica','20301643757','0','1','','','','11flyy11','0'),(11776,8166,'Activo','fisica','20281327705','0','1','','','','Estudio0833','0'),(11777,8167,'Activo','fisica','27258617857','0','1','','','','Estudio01051','0'),(11778,8168,'Activo','fisica','20059511557','0','1','','','','Estudio0833','0'),(11779,8169,'Inactivo','fisica','20241512291','0','','','','','Estudio0833','0'),(11780,8170,'Activo','fisica','20326693627','0','1','estudio0833','omar1985','','Estudio0833','0'),(11781,8171,'Activo','juridica','0','20082807854','2','estudio0833','estudio2019','Tg5TT1','Ciardi2019','33712477879'),(11782,8172,'Activo','fisica','27274669832','0','1','','','','Estudio0833','0'),(11783,8173,'Activo','fisica','27227616801','0','1','','','','dino2014','0'),(11784,8174,'Activo','fisica','20260162560','0','1','','','','Biofeld3117','0'),(11785,8175,'Activo','juridica','0','20274660482','1','pololo88','estudio2019','twuH2O','Estudio0833','30642237027'),(11786,8176,'Activo','juridica','0','20136686349','3','ESTUDIO0833','estudio2019','pololo88','Rafael2019','30711439621'),(11787,8177,'Activo','juridica','0','20148303100','1','pololo88','','','Basadr0010','30714211338'),(11788,8178,'Activo','fisica','27301643867','0','1','estudio0833','','','lalyas919','0'),(11789,8179,'Activo','fisica','20130439358','0','1','','','','Estudio0833','0'),(11790,8180,'Inactivo','fisica','27409906163','0','1','','','','estudio0833','0'),(11791,8181,'Inactivo','fisica','27326088167','0','','pololo88','','','pololo88','0'),(11792,8182,'Activo','fisica','27303222397','0','1','','','','Carla22583','0'),(11793,8183,'Inactivo','juridica','0','20276181735','1','','','','guic07','30715815954'),(11794,8184,'Inactivo','fisica','20190037674','0','1','','','','estudio0833','0'),(11795,8185,'Activo','fisica','20292555831','0','1','','','','nogoya123','0'),(11796,8186,'Inactivo','fisica','20165615671','0','1','','','','Estudio0833','0'),(11797,8187,'Activo','juridica','0','','','','','','',''),(11798,8188,'Inactivo','fisica','20301640545','0','','','','','pr0band0','0'),(11799,8189,'Activo','fisica','20285888396','0','1','','','','Juanab2014','0'),(11800,8190,'Activo','fisica','27110716147','0','1','','','','Estudio0833','0'),(11801,8191,'Inactivo','fisica','20061376578','0','','pololo88','','','abel2013','0'),(11802,8192,'Activo','fisica','20263322984','0','2','','','','Estudio0833','0'),(11803,8193,'Inactivo','fisica','27325094007','0','','','','','lola1986','0'),(11804,8194,'Inactivo','fisica','27340148962','0','','','','','MARI2016','0'),(11805,8195,'Activo','fisica','20291213228','0','1','','','','Benedetti2140','0'),(11806,8196,'Activo','juridica','0','','','','','','',''),(11807,8197,'Inactivo','fisica','27290420615','0','','','','','magui1409','0'),(11808,8198,'Inactivo','fisica','27319082226','0','','ESTUDIO0833','','','cabello2012','0'),(11809,8199,'Activo','fisica','20231906445','0','3','','','','Capocheta01','0'),(11810,8200,'Activo','fisica','20177243443','0','1','','','','Estudio0833','0'),(11811,8201,'Inactivo','fisica','20261504279','0','','estudio0833','','','CUES2008','0'),(11812,8202,'Activo','juridica','0','20201894167','3','estudio0833','','','Estudio0833','30712211772'),(11813,8203,'Activo','fisica','24301642993','0','1','','','','Estudio0833','0'),(11814,8204,'Activo','fisica','27270846225','0','1','','','','Escorpio31','0'),(11815,8205,'Activo','fisica','20127297968','0','1','','','','miranda16','0'),(11816,8206,'Inactivo','fisica','20312328195','0','','','','','mago2819','0'),(11817,8207,'Inactivo','juridica','0','20317245751','','','pololo101','','marce2014','30-71479142'),(11818,8208,'Inactivo','juridica','0','20312328195','','','','','mago2819','30-71513402'),(11819,8209,'Inactivo','fisica','27385146022','0','','','','','pololo88','0'),(11820,8210,'Activo','fisica','27108759017','0','1','','','','Estudio0833','0'),(11821,8211,'Inactivo','fisica','20110454571','0','','','','','pololo88','0'),(11822,8212,'Activo','fisica','20290249490','0','2','casalas07','','','Casalas349','0'),(11823,8213,'Activo','fisica','20130434127','0','1','','','','JOSE1958','0'),(11824,8214,'Activo','fisica','23312326469','0','1','','','','19xsNCRQ','0'),(11825,8215,'Activo','juridica','0','20253232448','2','ESTUDIO02','','','pololo88','33712482279'),(11826,8216,'Activo','fisica','20328313554','0','1','','','','estudio0833','0'),(11827,8217,'Activo','juridica','0','','1','','','','',''),(11828,8218,'Activo','fisica','27347269277','0','1','','','','estudio0833','0'),(11829,8219,'Activo','fisica','27136689652','0','1','','','','estudio0833','0'),(11830,8220,'Activo','fisica','27184583947','0','1','','','','estudio0833','0'),(11831,8221,'Activo','fisica','27401600812','0','1','','','','Georginacomas2340','0'),(11832,8222,'Activo','fisica','20287937947','0','1','guido7947','','','Estudio0833','0'),(11833,8223,'Activo','fisica','20234502116','0','1','','','','juan39campos','0'),(11834,8224,'Activo','fisica','20359637838','0','1','','','','Estudio0833','0'),(11835,8225,'Activo','juridica','0','20255469011','1','','Estudio083','','DARIO9011a','30716608189'),(11836,8226,'Activo','fisica','20305582140','0','1','','','','Estudio0833','0'),(11837,8227,'Activo','juridica','0','','','','','','',''),(11838,8228,'Activo','fisica','20058864154','0','3','POLOLO88','estudio2019','pololo88','estudio0833','0'),(11839,8229,'Inactivo','fisica','20102293739','0','','','','','VICTOR73','0'),(11840,8230,'Activo','fisica','20287837802','0','2','pololo88','pololo101','pololo88','maxi3780','0'),(11841,8231,'Activo','fisica','23337953034','0','3','','','','Estudio0833','0'),(11842,8232,'Inactivo','fisica','20382012748','0','1','','','','marcela65','0'),(11843,8233,'Activo','juridica','0','23337953034','3','','','','Estudio0833','30710426208'),(11844,8234,'Activo','fisica','23174420459','0','3','','','','LOLA2003','0'),(11845,8235,'Activo','fisica','20318478733','0','1','','','','Estudio0833','0'),(11846,8236,'Activo','fisica','20382614683','0','1','','','','Estudio0833','0'),(11847,8237,'Activo','fisica','27138152974','0','1','','','','Estudio2974','0'),(11848,8238,'Activo','juridica','0','','','','','','',''),(11849,8239,'Inactivo','juridica','0','20296207161','2','ESTUDIO0833','estudio084','','Estudio0833','33712206379'),(11850,8240,'Activo','fisica','20340142927','0','1','','','','Juan270988','0'),(11851,8241,'Activo','fisica','20148304603','0','1','','','','luis2017','0'),(11852,8242,'Inactivo','juridica','0','20062601486','','20062601486','','','MANA6914',''),(11853,8243,'Activo','juridica','0','27173924777','1','','','','Estudio0833','30710758286'),(11854,8244,'Activo','juridica','0','20244896740','3','','','','Estudio0833','30709599638'),(11855,8245,'Activo','fisica','20215121209','0','1','','','','Estudio0833','0'),(11856,8246,'Activo','fisica','20059243706','0','1','','','','Estudio0833','0'),(11857,8247,'Activo','juridica','0','','','','','','',''),(11858,8248,'Activo','fisica','20315211191','0','1','','','','JuanGF1012','0'),(11859,8249,'Activo','juridica','0','27110717836','1','','','','Estudio0833','30710473273'),(11860,8250,'Activo','juridica','0','20315214263','1','','','','pololo88','30715318128'),(11861,8251,'Inactivo','juridica','0','27281631395','3','','','','Estudio083',''),(11862,8252,'Activo','juridica','0','20085801539','1','hendi1989','estudio083','','LAURA007','30671170241'),(11863,8253,'Activo','fisica','20322752092','0','1','','','','18yami28SE','0'),(11864,8254,'Activo','juridica','0','20274660482','3','','','','Estudio0833','33716545259'),(11865,8255,'Activo','fisica','20164379443','0','1','','','','ERYA9443','0'),(11866,8256,'Activo','juridica','0','','','','','','',''),(11867,8257,'Inactivo','fisica','27216310840','0','','estudio0833','','','lucia183','0'),(11868,8258,'Inactivo','fisica','23315214009','0','','','','','omar1985','0'),(11869,8259,'Inactivo','fisica','20108249898','0','','','','','jorge00','0'),(11870,8260,'Inactivo','fisica','27325097979','0','1','','','','sabrina98','0'),(11871,8261,'Activo','fisica','27287230910','0','1','','','','Estudio0833','0'),(11872,8262,'Activo','fisica','20319952609','0','1','','','','pablo260','0'),(11873,8263,'Inactivo','fisica','20310175049','0','','','','','brunolara0507','0'),(11874,8264,'Activo','fisica','27235782508','0','1','','','','Olazabal4787','0'),(11875,8265,'Activo','fisica','20058864154','0','1','','','','estudio0833','0'),(11876,8266,'Activo','fisica','20315214263','0','1','','','','pololo88','0'),(11877,8267,'Inactivo','fisica','20146871896','0','1','','','','colon1280','0'),(11878,8268,'Inactivo','fisica','20315210225','0','','','','','boortmeerbeek12','0'),(11879,8269,'Activo','juridica','0','20276181735','','','','','Paa27618173j','30716447495'),(11880,8270,'Activo','fisica','20357066744','0','1','','','','Estudio2019','0'),(11881,8271,'Activo','fisica','20139153392','0','1','','','','2019Daniel','0'),(11882,8272,'Activo','juridica','0','','','','','','',''),(11883,8273,'Activo','fisica','27223420198','0','3','','estudio2019','','Estudio0833','0'),(11884,8274,'Inactivo','fisica','20382608225','0','1','','','','estudio0833','0'),(11885,8275,'Inactivo','fisica','27333226567','0','','','','','gisela15','0'),(11886,8276,'Activo','juridica','0','','','','','','',''),(11887,8277,'Inactivo','juridica','0','20-05949535-7','','','','','lorenzo2016',''),(11888,8278,'Activo','juridica','0','','','','','','',''),(11889,8279,'Inactivo','fisica','20127723835','0','','pololo88','pololo202/pololo88','pololo88','jromei383','0'),(11890,8280,'Activo','fisica','27057164730','0','1','','','','Estudio0833','0'),(11891,8281,'Activo','fisica','27346803415','0','1','','','','Estudio0833 ','0'),(11892,8282,'Activo','juridica','0','','','','','','',''),(11893,8283,'Activo','fisica','20296207161','0','1','','','','Estudio0833','0'),(11894,8284,'Activo','fisica','27127299027','0','1','estudio0833','','123456','LucreciaK2020','0'),(11895,8285,'Activo','juridica','0','','','','','','',''),(11896,8286,'Inactivo','fisica','20336244456','0','','','','','pololo88','0'),(11897,8287,'Activo','fisica','20131827297','0','3','','','','Estudio0833','0'),(11898,8288,'Inactivo','fisica','27225149114','0','','estudio0833','','','CLAUDIA9114','0'),(11899,8289,'Activo','fisica','20286479856','0','1','','','','Juan128900','0'),(11900,8290,'Activo','fisica','27298559493','0','1','','','','Estudio0833','0'),(11901,8291,'Activo','fisica','27160484433','0','1','BRITOS04','','','11CVLGnena','0'),(11902,8292,'Inactivo','fisica','27331301758','0','1','estudio0833','','','maria2013','0'),(11903,8293,'Activo','fisica','27227153917','0','','estudio0833','','','LPfm20189416','0'),(11904,8294,'Activo','juridica','0','23337953034','3','','','','Estudio0833','30712017380'),(11905,8295,'Activo','fisica','27131824241','0','1','','estudio2019','','Estudio0833','0'),(11906,8296,'Activo','fisica','20270063838','0','1','estudio0833','','','estudio0833','0'),(11907,8297,'Activo','juridica','0','20059495527','3','MIRIAM03','estudio2019','','Estudio0833','30532312244'),(11908,8298,'Activo','fisica','27392653584','0','1','','','','roci1010','0'),(11909,8299,'Activo','juridica','0','','','','','','',''),(11910,8300,'Inactivo','fisica','20104520201','0','','','','','MANA1914','0'),(11911,8301,'Inactivo','juridica','0','20062601486','','','','','MANA6914',''),(11912,8302,'Inactivo','juridica','0','20062523396','','','','','MANA1438',''),(11913,8303,'Activo','fisica','20284712596','0','1','','','','Juanvalen128','0'),(11914,8304,'Activo','fisica','23310170364','0','1','','','','Estudio0833','0'),(11915,8305,'Activo','fisica','27308626380','0','1','','','','Estudio0833','0'),(11916,8306,'Activo','fisica','27298554556','0','1','','','','Estudio0833','0'),(11917,8307,'Inactivo','fisica','20303224557','0','','sh988456','','','eman4557','0'),(11918,8308,'Activo','fisica','27291213559','0','1','','','','junio2014','0'),(11919,8309,'Activo','fisica','27286764288','0','1','','','','amoabonjovi17','0'),(11920,8310,'Activo','fisica','27276105774','0','1','','','','Estudio0833','0'),(11921,8311,'Inactivo','fisica','27028101673','0','1','','','','estudio0833','0'),(11922,8312,'Activo','fisica','20294470361','0','1','','','','Estudio0833','0'),(11923,8313,'Inactivo','fisica','20271570385','0','','','','','memdigmb21','0'),(11924,8314,'Activo','fisica','27268092493','0','1','','','','estudio0833','0'),(11925,8315,'Inactivo','fisica','27333225412','0','','','','','mercedes14','0'),(11926,8316,'Activo','fisica','23265644724','0','1','','','','julio1978','0'),(11927,8317,'Activo','fisica','27178979170','0','1','','','','Maria0504111','0'),(11928,8318,'Activo','fisica','20322567740','0','1','','','','estudio0833','0'),(11929,8319,'Activo','fisica','27338384381','0','1','','','','Meli0906','0'),(11930,8320,'Activo','fisica','20372904225','0','1','','','','Estudio0833','0'),(11931,8321,'Activo','fisica','20323277517','0','1','Estudio0833','Estudio083','','Estudio0833','0'),(11932,8322,'Activo','fisica','20390277947','0','1','','','','Estudio2019','0'),(11933,8323,'Activo','juridica','0','','','','','','',''),(11934,8324,'Activo','fisica','20274664852','0','1','','','','Estudio0833','0'),(11935,8325,'Activo','fisica','20290246785','0','1','estudio0833','','','Estudio0833','0'),(11936,8326,'Activo','fisica','20276074661','0','','estudio0833','','','RiBer1980','0'),(11937,8327,'Inactivo','juridica','0','20223063269','','','','','negro06',''),(11938,8328,'Activo','fisica','20059495527','0','3','MIRIAM03','','','estudio0833','0'),(11939,8329,'Activo','fisica','20084520846','0','3','','','','Estudio0833','0'),(11940,8330,'Activo','fisica','20325096080','0','1','','','','estudio0833','0'),(11941,8331,'Activo','juridica','0','','','','','','',''),(11942,8332,'Activo','fisica','20170441312','0','1','estudio0833','','','estudio0833','0'),(11943,8333,'Activo','juridica','0','','','','','','',''),(11944,8334,'Activo','fisica','27320960725','0','1','','','','Iosper2018','0'),(11945,8335,'Activo','fisica','20308293034','0','2','','','','Estudio0833','0'),(11946,8336,'Inactivo','fisica','20315218919','0','','','','','pololo88','0'),(11947,8337,'Inactivo','fisica','20315217017','0','1','','','','pololo88','0'),(11948,8338,'Inactivo','fisica','20230369314','0','','','','','POLOLO88','0'),(11949,8339,'Activo','fisica','27315212133','0','1','','','','poletti2016','0'),(11950,8340,'Inactivo','fisica','27334240571','0','','','','','estudio0833','0'),(11951,8341,'Inactivo','juridica','0','20230369314','','pololo88','','','POLOLO88','30-7146881x'),(11952,8342,'Activo','fisica','27058015712','0','1','','','','merce1948','0'),(11953,8343,'Inactivo','juridica','0','20214635772','','BUTTAOA72','BUTAOA72','BUTTA0A72','BUTTAOA72',''),(11954,8344,'Activo','fisica','20350287281','0','1','','','','estudio0833','0'),(11955,8345,'Activo','fisica','20121334101','0','1','','','','Estudio0833','0'),(11956,8346,'Inactivo','juridica','0','20317245751','','','','','marce2014',''),(11957,8347,'Inactivo','fisica','27357085107','0','','','','','carla1991','0'),(11958,8348,'Activo','fisica','20217707650','0','1','','','','Estudio0833','0'),(11959,8349,'Inactivo','fisica','27113798551','0','1','','','','colu1980','0'),(11960,8350,'Inactivo','fisica','23398367014','0','1','','','','estudio0833','0'),(11961,8351,'Activo','fisica','20245929545','0','1','','','','Fernando21','0'),(11962,8352,'Activo','fisica','27205539617','0','1','','','','Marcela961','0'),(11963,8353,'Activo','juridica','0','','','','','','',''),(11964,8354,'Activo','fisica','23328312689','0','1','','','','Ramos12345','0'),(11965,8355,'Inactivo','fisica','23105933789','0','','','','','pedro797','0'),(11966,8356,'Activo','fisica','27298112901','0','1','','','','Estudio0833','0'),(11967,8357,'Inactivo','fisica','20328331005','0','','','','','Rodriguez3100','0'),(11968,8358,'Activo','fisica','20286766758','0','1','','','','Estudio0833','0'),(11969,8359,'Activo','fisica','27009304083','0','1','','','','Estela2013','0'),(11970,8360,'Activo','fisica','20184169194','0','1','','','','Estudio0833','0'),(11971,8361,'Activo','fisica','20277955734','0','1','','t1a6z4h8','','River202019','0'),(11972,8362,'Activo','fisica','27289134587','0','1','','','','estudio0833','0'),(11973,8363,'Activo','fisica','23350289739','0','1','pololo88','','','pololo88','0'),(11974,8364,'Activo','fisica','23059145304','0','1','','','','Estudio0833','0'),(11975,8365,'Activo','fisica','27146049228','0','1','','','','estudio0833','0'),(11976,8366,'Activo','fisica','20374706706','0','1','','','','monotributo0711','0'),(11977,8367,'Activo','fisica','27219123324','0','1','','','','estudio0833','0'),(11978,8368,'Activo','fisica','27063930372','0','1','','','','mirta2015','0'),(11979,8369,'Activo','fisica','23319081534','0','1','','','','Evange2019','0'),(11980,8370,'Activo','fisica','20237084323','0','1','','','','Estudio0833','0'),(11981,8371,'Activo','fisica','23360999084','0','','','','','Estudio0833','0'),(11982,8372,'Activo','juridica','0','','','','','','',''),(11983,8373,'Inactivo','fisica','20319080652','0','','','','','sarig85','0'),(11984,8374,'Inactivo','juridica','0','20214635772','','','','','BUTTAOA72',''),(11985,8375,'Inactivo','juridica','0','','','','','','',''),(11986,8376,'Inactivo','fisica','20286769080','0','','','','','pablo908','0'),(11987,8377,'Inactivo','fisica','20309224850','0','','','','','matias986730','0'),(11988,8378,'Inactivo','juridica','0','20170444168','','','','','deve4168','20063736032'),(11989,8379,'Activo','fisica','23345496564','0','1','estudio0833','estudio083','estudio0833','estudiosm17','0'),(11990,8380,'Inactivo','fisica','27335030058','0','','','','','SANTA2007','0'),(11991,8381,'Activo','fisica','27932844031','0','1','','','','Tini1126','0'),(11992,8382,'Inactivo','fisica','20352994082','0','','','','','pololo88','0'),(11993,8383,'Inactivo','fisica','20372230356','0','','','','','estudio0833','0'),(11994,8384,'Inactivo','fisica','23310170259','0','','mariaeva2013','','','evita2013','0'),(11995,8385,'Activo','fisica','20085801539','0','1','','','','LAURA007','0'),(11996,8386,'Activo','fisica','27035767652','0','','','','','Estudio0833','0'),(11997,8387,'Activo','juridica','0','','','','','','',''),(11998,8388,'Activo','fisica','20118075006','0','1','','','','dario500','0'),(11999,8389,'Activo','fisica','20131822724','0','2','','','','JORGE272','0'),(12000,8390,'Activo','juridica','0','','','','','','',''),(12001,8391,'Activo','juridica','0','20083560615','3','','estudio2019','cTbg6L','Josecu2019','30681103364'),(12002,8392,'Inactivo','juridica','0','20110712023','','pololo88','pololo102','nMhyRw','ESTU139','30521106987'),(12003,8393,'Activo','fisica','20077057774','0','1','','','','Estudio0833','0'),(12004,8394,'Inactivo','fisica','20230001155','0','1','','','','estudio0833','0'),(12005,8395,'Activo','juridica','0','','','','','','',''),(12006,8396,'Activo','fisica','20235786290','0','2','estudio0833','','','estudio0833','0'),(12007,8397,'Activo','fisica','20223424490','0','1','','','','Estudio1971','0'),(12008,8398,'Inactivo','fisica','20274663910','0','1','','','','Estudio0833','0'),(12009,8399,'Inactivo','fisica','20282572800','0','','','','','manolo2014','0'),(12010,8400,'Inactivo','fisica','20336246041','0','','','','','ESTUDIO0833','0'),(12011,8401,'Activo','fisica','20345864920','0','1','estudio0833','','','Estudio0833','0'),(12012,8402,'Inactivo','fisica','20317245751','0','','','','','marce2014','0'),(12013,8403,'Activo','fisica','27294479428','0','1','ERICA2017','estudio2018','pololo88','ERICA2017','0'),(12014,8404,'Inactivo','fisica','37223263','0','','','','','','0'),(12015,8405,'Activo','fisica','20253232448','0','1','','','','pololo88','0'),(12016,8406,'Inactivo','fisica','20357063303','0','1','','','','estudio0833','0'),(12017,8407,'Activo','fisica','23427315029','0','1','estudio0833','','','valarti8419','0'),(12018,8408,'Activo','fisica','20185889859','0','1','','','','Estudio0833','0'),(12019,8409,'Inactivo','fisica','20136686349','0','1','','','','Rafael2019','0'),(12020,8410,'Activo','juridica','0','','','','','','',''),(12021,8411,'Inactivo','fisica','20331301575','0','1','','','','pololo88','0'),(12022,8412,'Activo','fisica','20128436104','0','1','','','','Estudio0833','0'),(12023,8413,'Inactivo','fisica','27136506515','0','','estudio0833','','','gloria2012','0'),(12024,8414,'Activo','fisica','27176319513','0','1','','','','Estudio0833','0'),(12025,8415,'Activo','fisica','27305588917','0','1','estudio0833','','','tania311','0'),(12026,8416,'Activo','juridica','0','','','','','','',''),(12027,8417,'Activo','fisica','27286767996','0','3','estudio0833','estudio2019','ZAPATA1234','Estudio0833','0'),(12028,8418,'Activo','fisica','20276072995','0','1','','','','Estudio0833','0'),(12029,8419,'Inactivo','fisica','20325095149','0','1','','','','pololo88','0'),(12030,8420,'Activo','fisica','20179636582','0','1','','','','JuanPeron22','0'),(12031,8421,'','juridica','0','|','','','','','',''),(12032,8422,'','juridica','0','','','','','','',''),(12033,8423,'','juridica','0','','','','','','','');
/*!40000 ALTER TABLE `datosfiscales` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `datosfiscales` with 263 row(s)
--

--
-- Table structure for table `empleador`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleador` (
  `id_empleador` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `casa_particular` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `convenio_sindical` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_empleador`),
  KEY `id_condicion` (`id_cliente`),
  CONSTRAINT `empleador_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleador`
--

LOCK TABLES `empleador` WRITE;
/*!40000 ALTER TABLE `empleador` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `empleador` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `empleador` with 0 row(s)
--

--
-- Table structure for table `facturacion`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturacion` (
  `id_facturacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_condicion` int(11) NOT NULL,
  `manual` tinyint(1) NOT NULL,
  `electronica` tinyint(1) NOT NULL,
  `controlador_fiscal` tinyint(1) NOT NULL,
  `web_service` tinyint(1) NOT NULL,
  `factura_linea` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_facturacion`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `facturacion_ibfk_1` FOREIGN KEY (`id_condicion`) REFERENCES `condiciontributaria` (`id_condicion`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4542 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturacion`
--

LOCK TABLES `facturacion` WRITE;
/*!40000 ALTER TABLE `facturacion` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `facturacion` VALUES (4279,6604,0,0,0,0,0),(4280,6605,0,0,0,0,0),(4281,6606,0,0,0,0,0),(4282,6607,0,0,0,0,0),(4283,6608,0,0,0,0,0),(4284,6609,0,0,0,0,0),(4285,6610,0,0,0,0,0),(4286,6611,0,0,0,0,0),(4287,6612,0,0,0,0,0),(4288,6613,0,0,0,0,0),(4289,6614,0,0,0,0,0),(4290,6615,0,0,0,0,0),(4291,6616,0,0,0,0,0),(4292,6617,0,0,0,0,0),(4293,6618,0,0,0,0,0),(4294,6619,0,0,0,0,0),(4295,6620,0,0,0,0,0),(4296,6621,0,0,0,0,0),(4297,6622,0,0,0,0,0),(4298,6623,0,0,0,0,0),(4299,6624,0,0,0,0,0),(4300,6625,0,0,0,0,0),(4301,6626,0,0,0,0,0),(4302,6627,0,0,0,0,0),(4303,6628,0,0,0,0,0),(4304,6629,0,0,0,0,0),(4305,6630,0,0,0,0,0),(4306,6631,0,0,0,0,0),(4307,6632,0,0,0,0,0),(4308,6633,0,0,0,0,0),(4309,6634,0,0,0,0,0),(4310,6635,0,0,0,0,0),(4311,6636,0,0,0,0,0),(4312,6637,0,0,0,0,0),(4313,6638,0,0,0,0,0),(4314,6639,0,0,0,0,0),(4315,6640,0,0,0,0,0),(4316,6641,0,0,0,0,0),(4317,6642,0,0,0,0,0),(4318,6643,0,0,0,0,0),(4319,6644,0,0,0,0,0),(4320,6645,0,0,0,0,0),(4321,6646,0,0,0,0,0),(4322,6647,0,0,0,0,0),(4323,6648,0,0,0,0,0),(4324,6649,0,0,0,0,0),(4325,6650,0,0,0,0,0),(4326,6651,0,0,0,0,0),(4327,6652,0,0,0,0,0),(4328,6653,0,0,0,0,0),(4329,6654,0,0,0,0,0),(4330,6655,0,0,0,0,0),(4331,6656,0,0,0,0,0),(4332,6657,0,0,0,0,0),(4333,6658,0,0,0,0,0),(4334,6659,0,0,0,0,0),(4335,6660,0,0,0,0,0),(4336,6661,0,0,0,0,0),(4337,6662,0,0,0,0,0),(4338,6663,0,0,0,0,0),(4339,6664,0,0,0,0,0),(4340,6665,0,0,0,0,0),(4341,6666,0,0,0,0,0),(4342,6667,0,0,0,0,0),(4343,6668,0,0,0,0,0),(4344,6669,0,0,0,0,0),(4345,6670,0,0,0,0,0),(4346,6671,0,0,0,0,0),(4347,6672,0,0,0,0,0),(4348,6673,0,0,0,0,0),(4349,6674,0,0,0,0,0),(4350,6675,0,0,0,0,0),(4351,6676,0,0,0,0,0),(4352,6677,0,0,0,0,0),(4353,6678,0,0,0,0,0),(4354,6679,0,0,0,0,0),(4355,6680,0,0,0,0,0),(4356,6681,0,0,0,0,0),(4357,6682,0,0,0,0,0),(4358,6683,0,0,0,0,0),(4359,6684,0,0,0,0,0),(4360,6685,0,0,0,0,0),(4361,6686,0,0,0,0,0),(4362,6687,0,0,0,0,0),(4363,6688,0,0,0,0,0),(4364,6689,0,0,0,0,0),(4365,6690,0,0,0,0,0),(4366,6691,0,0,0,0,0),(4367,6692,0,0,0,0,0),(4368,6693,0,0,0,0,0),(4369,6694,0,0,0,0,0),(4370,6695,0,0,0,0,0),(4371,6696,0,0,0,0,0),(4372,6697,0,0,0,0,0),(4373,6698,0,0,0,0,0),(4374,6699,0,0,0,0,0),(4375,6700,0,0,0,0,0),(4376,6701,0,0,0,0,0),(4377,6702,0,0,0,0,0),(4378,6703,0,0,0,0,0),(4379,6704,0,0,0,0,0),(4380,6705,0,0,0,0,0),(4381,6706,0,0,0,0,0),(4382,6707,0,0,0,0,0),(4383,6708,0,0,0,0,0),(4384,6709,0,0,0,0,0),(4385,6710,0,0,0,0,0),(4386,6711,0,0,0,0,0),(4387,6712,0,0,0,0,0),(4388,6713,0,0,0,0,0),(4389,6714,0,0,0,0,0),(4390,6715,0,0,0,0,0),(4391,6716,0,0,0,0,0),(4392,6717,0,0,0,0,0),(4393,6718,0,0,0,0,0),(4394,6719,0,0,0,0,0),(4395,6720,0,0,0,0,0),(4396,6721,0,0,0,0,0),(4397,6722,0,0,0,0,0),(4398,6723,0,0,0,0,0),(4399,6724,0,0,0,0,0),(4400,6725,0,0,0,0,0),(4401,6726,0,0,0,0,0),(4402,6727,0,0,0,0,0),(4403,6728,0,0,0,0,0),(4404,6729,0,0,0,0,0),(4405,6730,0,0,0,0,0),(4406,6731,0,0,0,0,0),(4407,6732,0,0,0,0,0),(4408,6733,0,0,0,0,0),(4409,6734,0,0,0,0,0),(4410,6735,0,0,0,0,0),(4411,6736,0,0,0,0,0),(4412,6737,0,0,0,0,0),(4413,6738,0,0,0,0,0),(4414,6739,0,0,0,0,0),(4415,6740,0,0,0,0,0),(4416,6741,0,0,0,0,0),(4417,6742,0,0,0,0,0),(4418,6743,0,0,0,0,0),(4419,6744,0,0,0,0,0),(4420,6745,0,0,0,0,0),(4421,6746,0,0,0,0,0),(4422,6747,0,0,0,0,0),(4423,6748,0,0,0,0,0),(4424,6749,0,0,0,0,0),(4425,6750,0,0,0,0,0),(4426,6751,0,0,0,0,0),(4427,6752,0,0,0,0,0),(4428,6753,0,0,0,0,0),(4429,6754,0,0,0,0,0),(4430,6755,0,0,0,0,0),(4431,6756,0,0,0,0,0),(4432,6757,0,0,0,0,0),(4433,6758,0,0,0,0,0),(4434,6759,0,0,0,0,0),(4435,6760,0,0,0,0,0),(4436,6761,0,0,0,0,0),(4437,6762,0,0,0,0,0),(4438,6763,0,0,0,0,0),(4439,6764,0,0,0,0,0),(4440,6765,0,0,0,0,0),(4441,6766,0,0,0,0,0),(4442,6767,0,0,0,0,0),(4443,6768,0,0,0,0,0),(4444,6769,0,0,0,0,0),(4445,6770,0,0,0,0,0),(4446,6771,0,0,0,0,0),(4447,6772,0,0,0,0,0),(4448,6773,0,0,0,0,0),(4449,6774,0,0,0,0,0),(4450,6775,0,0,0,0,0),(4451,6776,0,0,0,0,0),(4452,6777,0,0,0,0,0),(4453,6778,0,0,0,0,0),(4454,6779,0,0,0,0,0),(4455,6780,0,0,0,0,0),(4456,6781,0,0,0,0,0),(4457,6782,0,0,0,0,0),(4458,6783,0,0,0,0,0),(4459,6784,0,0,0,0,0),(4460,6785,0,0,0,0,0),(4461,6786,0,0,0,0,0),(4462,6787,0,0,0,0,0),(4463,6788,0,0,0,0,0),(4464,6789,0,0,0,0,0),(4465,6790,0,0,0,0,0),(4466,6791,0,0,0,0,0),(4467,6792,0,0,0,0,0),(4468,6793,0,0,0,0,0),(4469,6794,0,0,0,0,0),(4470,6795,0,0,0,0,0),(4471,6796,0,0,0,0,0),(4472,6797,0,0,0,0,0),(4473,6798,0,0,0,0,0),(4474,6799,0,0,0,0,0),(4475,6800,0,0,0,0,0),(4476,6801,0,0,0,0,0),(4477,6802,0,0,0,0,0),(4478,6803,0,0,0,0,0),(4479,6804,0,0,0,0,0),(4480,6805,0,0,0,0,0),(4481,6806,0,0,0,0,0),(4482,6807,0,0,0,0,0),(4483,6808,0,0,0,0,0),(4484,6809,0,0,0,0,0),(4485,6810,0,0,0,0,0),(4486,6811,0,0,0,0,0),(4487,6812,0,0,0,0,0),(4488,6813,0,0,0,0,0),(4489,6814,0,0,0,0,0),(4490,6815,0,0,0,0,0),(4491,6816,0,0,0,0,0),(4492,6817,0,0,0,0,0),(4493,6818,0,0,0,0,0),(4494,6819,0,0,0,0,0),(4495,6820,0,0,0,0,0),(4496,6821,0,0,0,0,0),(4497,6822,0,0,0,0,0),(4498,6823,0,0,0,0,0),(4499,6824,0,0,0,0,0),(4500,6825,0,0,0,0,0),(4501,6826,0,0,0,0,0),(4502,6827,0,0,0,0,0),(4503,6828,0,0,0,0,0),(4504,6829,0,0,0,0,0),(4505,6830,0,0,0,0,0),(4506,6831,0,0,0,0,0),(4507,6832,0,0,0,0,0),(4508,6833,0,0,0,0,0),(4509,6834,0,0,0,0,0),(4510,6835,0,0,0,0,0),(4511,6836,0,0,0,0,0),(4512,6837,0,0,0,0,0),(4513,6838,0,0,0,0,0),(4514,6839,0,0,0,0,0),(4515,6840,0,0,0,0,0),(4516,6841,0,0,0,0,0),(4517,6842,0,0,0,0,0),(4518,6843,0,0,0,0,0),(4519,6844,0,0,0,0,0),(4520,6845,0,0,0,0,0),(4521,6846,0,0,0,0,0),(4522,6847,0,0,0,0,0),(4523,6848,0,0,0,0,0),(4524,6849,0,0,0,0,0),(4525,6850,0,0,0,0,0),(4526,6851,0,0,0,0,0),(4527,6852,0,0,0,0,0),(4528,6853,0,0,0,0,0),(4529,6854,0,0,0,0,0),(4530,6855,0,0,0,0,0),(4531,6856,0,0,0,0,0),(4532,6857,0,0,0,0,0),(4533,6858,0,0,0,0,0),(4534,6859,0,0,0,0,0),(4535,6860,0,0,0,0,0),(4536,6861,0,0,0,0,0),(4537,6862,0,0,0,0,0),(4538,6863,0,0,0,0,0),(4539,6864,0,0,0,0,0),(4540,6865,0,0,0,0,0),(4541,6866,0,0,0,0,0);
/*!40000 ALTER TABLE `facturacion` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `facturacion` with 263 row(s)
--

--
-- Table structure for table `liquidacionmensual`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liquidacionmensual` (
  `id_liquidacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `afip` int(11) NOT NULL,
  `ater` int(11) NOT NULL,
  `municipalidad` int(11) NOT NULL,
  `empleador` int(11) NOT NULL,
  `sindicato` int(11) NOT NULL,
  `siager` int(11) NOT NULL,
  `sicore` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ob` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fin` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_liquidacion`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `liquidacionmensual_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liquidacionmensual`
--

LOCK TABLES `liquidacionmensual` WRITE;
/*!40000 ALTER TABLE `liquidacionmensual` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `liquidacionmensual` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `liquidacionmensual` with 0 row(s)
--

--
-- Table structure for table `monotributo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monotributo` (
  `id_monotributo` int(11) NOT NULL AUTO_INCREMENT,
  `id_condicion` int(11) NOT NULL,
  `actividad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `adicional` int(11) NOT NULL,
  `recategorizacion` tinyint(1) NOT NULL,
  `ingresos_brutos` decimal(10,2) NOT NULL,
  `totalpagar` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_monotributo`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `monotributo_ibfk_1` FOREIGN KEY (`id_condicion`) REFERENCES `condiciontributaria` (`id_condicion`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3466 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monotributo`
--

LOCK TABLES `monotributo` WRITE;
/*!40000 ALTER TABLE `monotributo` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `monotributo` VALUES (3306,6604,'Bienes','E',0,0,157959.00,1614.00),(3307,6606,'Bienes','E',0,0,364550.00,1614.00),(3308,6607,'Bienes','E',1,0,1111.00,2303.00),(3309,6608,'Bienes','E',0,0,280550.00,1614.00),(3310,6609,'Bienes','E',1,0,11111.00,2303.00),(3311,6610,'Bienes','H',0,0,835300.00,4529.63),(3312,6612,'Bienes','K',1,0,99999999.99,9738.22),(3313,6613,'Bienes','E',0,0,114675.00,1614.00),(3314,6615,'Bienes','E',0,0,85050.00,1614.00),(3315,6616,'Bienes','K',1,0,1111111.00,9738.22),(3316,6617,'Bienes','G',0,0,692975.00,2327.55),(3317,6621,'Bienes','E',0,0,297622.00,1614.00),(3318,6622,'Bienes','H',1,0,222222.00,5218.63),(3319,6623,'Bienes','E',1,0,111111.00,2303.00),(3320,6624,'Bienes','E',1,0,111111.00,2303.00),(3321,6625,'Bienes','H',0,0,953734.43,4529.63),(3322,6627,'Bienes','K',1,0,1111111.00,9738.22),(3323,6629,'Bienes','E',1,0,11111.00,2303.00),(3324,6631,'Bienes','E',1,0,11111.00,2303.00),(3325,6632,'Bienes','G',0,0,774755.64,2327.55),(3326,6633,'Bienes','K',1,0,99999999.99,9738.22),(3327,6634,'Bienes','A',1,0,1.00,1293.00),(3328,6635,'Bienes','H',0,0,1101576.51,4529.63),(3329,6636,'Bienes','K',1,0,99999999.99,9738.22),(3330,6637,'Bienes','A',1,0,0.00,1293.00),(3331,6638,'Bienes','E',0,0,125328.00,1614.00),(3332,6640,'Bienes','A',1,0,0.00,1293.00),(3333,6641,'Bienes','A',1,0,0.00,1293.00),(3334,6642,'Bienes','I',0,0,1295769.00,6812.79),(3335,6643,'Bienes','E',0,0,359957.00,1614.00),(3336,6644,'Bienes','A',1,0,0.00,1293.00),(3337,6646,'Bienes','E',0,0,258570.00,1614.00),(3338,6647,'Bienes','F',0,0,635000.00,1960.34),(3339,6648,'Bienes','E',0,0,83565.00,1614.00),(3340,6649,'Bienes','A',1,0,0.00,1293.00),(3341,6652,'Bienes','A',1,0,0.00,1293.00),(3342,6653,'Bienes','A',1,0,0.00,1293.00),(3343,6655,'Bienes','F',0,0,639145.00,1960.34),(3344,6657,'Bienes','E',0,0,139430.00,1614.00),(3345,6659,'Bienes','A',1,0,0.00,1293.00),(3346,6661,'Bienes','E',0,0,8825.00,1614.00),(3347,6662,'Bienes','A',1,0,0.00,1293.00),(3348,6663,'Bienes','E',0,0,294395.00,1614.00),(3349,6664,'Bienes','A',1,0,0.00,1293.00),(3350,6665,'Bienes','E',0,0,129140.00,1614.00),(3351,6667,'Bienes','A',1,0,0.00,1293.00),(3352,6669,'Bienes','A',1,0,0.00,1293.00),(3353,6672,'Bienes','A',1,0,0.00,1293.00),(3354,6675,'Bienes','A',1,0,0.00,1293.00),(3355,6677,'Bienes','H',0,0,853901.48,4529.63),(3356,6678,'Bienes','A',1,0,0.00,1293.00),(3357,6679,'Bienes','A',1,0,0.00,1293.00),(3358,6683,'Bienes','E',0,0,540640.88,1614.00),(3359,6684,'Bienes','H',0,0,927927.20,4529.63),(3360,6688,'Bienes','A',1,0,0.00,1293.00),(3361,6691,'Bienes','F',0,0,558609.00,1960.34),(3362,6698,'Bienes','A',1,0,0.00,1293.00),(3363,6701,'Bienes','A',1,0,0.00,1293.00),(3364,6702,'Bienes','A',1,0,0.00,1293.00),(3365,6703,'Bienes','A',1,0,0.00,1293.00),(3366,6704,'Bienes','E',0,0,503951.69,1614.00),(3367,6707,'Bienes','A',1,0,0.00,1293.00),(3368,6709,'Bienes','G',0,0,746148.36,2327.55),(3369,6710,'Bienes','A',1,0,0.00,1293.00),(3370,6711,'Bienes','A',1,0,0.00,1293.00),(3371,6713,'Bienes','A',1,0,0.00,1293.00),(3372,6714,'Bienes','A',1,0,0.00,1293.00),(3373,6716,'Bienes','K',0,0,1372943.00,9049.22),(3374,6717,'Bienes','A',1,0,0.00,1293.00),(3375,6718,'Bienes','A',1,0,0.00,1293.00),(3376,6722,'Bienes','A',1,0,0.00,1293.00),(3377,6724,'Bienes','A',1,0,0.00,1293.00),(3378,6726,'Bienes','E',0,0,212394.16,1614.00),(3379,6727,'Bienes','E',0,0,126451.00,1614.00),(3380,6729,'Bienes','A',1,0,0.00,1293.00),(3381,6730,'Bienes','H',0,0,974194.00,4529.63),(3382,6731,'Bienes','A',1,0,0.00,1293.00),(3383,6732,'Bienes','F',0,0,682691.00,1960.34),(3384,6733,'Bienes','E',0,0,133043.00,1614.00),(3385,6734,'Bienes','H',0,0,971500.00,4529.63),(3386,6735,'Bienes','A',1,0,0.00,1293.00),(3387,6738,'Bienes','A',1,0,0.00,1293.00),(3388,6739,'Bienes','E',0,0,81090.00,1614.00),(3389,6741,'Bienes','E',0,0,243200.00,1614.00),(3390,6743,'Bienes','A',1,0,0.00,1293.00),(3391,6746,'Bienes','E',0,0,483723.00,1614.00),(3392,6747,'Bienes','E',0,0,251599.00,1614.00),(3393,6748,'Bienes','E',0,0,148100.00,1614.00),(3394,6749,'Bienes','H',0,0,1078697.00,4529.63),(3395,6750,'Bienes','A',1,0,0.00,1293.00),(3396,6751,'Bienes','E',0,0,376517.00,1614.00),(3397,6753,'Bienes','E',0,0,549329.00,1614.00),(3398,6755,'Bienes','E',0,0,105000.00,1614.00),(3399,6757,'Bienes','E',0,0,258262.90,1614.00),(3400,6758,'Bienes','A',1,0,0.00,1293.00),(3401,6759,'Bienes','E',0,0,29300.00,1614.00),(3402,6760,'Bienes','E',0,0,156460.00,1614.00),(3403,6761,'Bienes','A',1,0,0.00,1293.00),(3404,6762,'Bienes','E',0,0,38322.00,1614.00),(3405,6767,'Bienes','F',0,0,574800.00,1960.34),(3406,6768,'Bienes','E',0,0,216393.00,1614.00),(3407,6769,'Bienes','A',1,0,0.00,1293.00),(3408,6773,'Bienes','E',0,0,44800.00,1614.00),(3409,6775,'Bienes','E',0,0,432016.00,1614.00),(3410,6777,'Bienes','E',0,0,429540.00,1614.00),(3411,6779,'Bienes','A',1,0,0.00,1293.00),(3412,6780,'Bienes','A',1,0,0.00,1293.00),(3413,6781,'Bienes','A',1,0,0.00,1293.00),(3414,6782,'Bienes','E',0,0,248828.00,1614.00),(3415,6783,'Bienes','A',1,0,0.00,1293.00),(3416,6784,'Bienes','A',1,0,0.00,1293.00),(3417,6787,'Bienes','G',0,0,777675.60,2327.55),(3418,6788,'Bienes','E',0,0,466515.00,1614.00),(3419,6790,'Bienes','A',1,0,0.00,1293.00),(3420,6791,'Bienes','E',0,0,230636.00,1614.00),(3421,6792,'Bienes','A',1,0,0.00,1293.00),(3422,6793,'Bienes','A',1,0,0.00,1293.00),(3423,6794,'Bienes','E',0,0,87309.00,1614.00),(3424,6795,'Bienes','E',0,0,97910.37,1614.00),(3425,6797,'Bienes','G',0,0,732408.00,2327.55),(3426,6798,'Bienes','A',1,0,0.00,1293.00),(3427,6800,'Bienes','A',1,0,0.00,1293.00),(3428,6801,'Bienes','A',1,0,0.00,1293.00),(3429,6802,'Bienes','F',0,0,621000.00,1960.34),(3430,6803,'Bienes','F',0,0,574370.00,1960.34),(3431,6804,'Bienes','K',0,0,1571564.00,9049.22),(3432,6805,'Bienes','A',1,0,0.00,1293.00),(3433,6806,'Bienes','I',0,0,1271125.00,6812.79),(3434,6808,'Bienes','A',1,0,0.00,1293.00),(3435,6809,'Bienes','A',1,0,0.00,1293.00),(3436,6810,'Bienes','E',0,0,225905.00,1614.00),(3437,6813,'Bienes','A',1,0,0.00,1293.00),(3438,6814,'Bienes','A',1,0,0.00,1293.00),(3439,6816,'Bienes','A',1,0,0.00,1293.00),(3440,6819,'Bienes','A',1,0,0.00,1293.00),(3441,6820,'Bienes','A',1,0,0.00,1293.00),(3442,6822,'Bienes','E',0,0,292895.00,1614.00),(3443,6824,'Bienes','A',1,0,0.00,1293.00),(3444,6825,'Bienes','A',1,0,0.00,1293.00),(3445,6826,'Bienes','A',1,0,0.00,1293.00),(3446,6831,'Bienes','E',0,0,423176.00,1614.00),(3447,6832,'Bienes','E',0,0,238273.00,1614.00),(3448,6836,'Bienes','G',0,0,724960.00,2327.55),(3449,6837,'Bienes','A',1,0,0.00,1293.00),(3450,6839,'Bienes','E',0,0,343550.00,1614.00),(3451,6840,'Bienes','E',0,0,267085.00,1614.00),(3452,6841,'Bienes','A',1,0,0.00,1293.00),(3453,6842,'Bienes','A',1,0,0.00,1293.00),(3454,6843,'Bienes','A',1,0,0.00,1293.00),(3455,6844,'Bienes','E',0,0,101503.00,1614.00),(3456,6845,'Bienes','A',1,0,0.00,1293.00),(3457,6847,'Bienes','A',1,0,0.00,1293.00),(3458,6848,'Bienes','A',1,0,0.00,1293.00),(3459,6849,'Bienes','A',1,0,0.00,1293.00),(3460,6850,'Bienes','A',1,0,0.00,1293.00),(3461,6854,'Bienes','A',1,0,0.00,1293.00),(3462,6855,'Bienes','E',0,0,311000.00,1614.00),(3463,6857,'Bienes','F',0,0,613197.00,1960.34),(3464,6861,'Bienes','A',1,0,0.00,1293.00),(3465,6862,'Bienes','A',1,0,0.00,1293.00);
/*!40000 ALTER TABLE `monotributo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `monotributo` with 160 row(s)
--

--
-- Table structure for table `monotributomensual`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monotributomensual` (
  `id_monotributoMensual` int(11) NOT NULL AUTO_INCREMENT,
  `mes` date NOT NULL,
  `monto` int(11) NOT NULL,
  `id_monotributo` int(11) NOT NULL,
  PRIMARY KEY (`id_monotributoMensual`),
  KEY `id_monotributo` (`id_monotributo`),
  CONSTRAINT `monotributomensual_ibfk_1` FOREIGN KEY (`id_monotributo`) REFERENCES `monotributo` (`id_monotributo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28691 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monotributomensual`
--

LOCK TABLES `monotributomensual` WRITE;
/*!40000 ALTER TABLE `monotributomensual` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `monotributomensual` VALUES (27754,'2020-01-01',13163,3306),(27755,'2020-02-01',13163,3306),(27756,'2020-03-01',13163,3306),(27757,'2020-04-01',13163,3306),(27758,'2020-05-01',13163,3306),(27759,'2020-06-01',13163,3306),(27760,'2020-07-01',13163,3306),(27761,'2020-08-01',13163,3306),(27762,'2020-09-01',13163,3306),(27763,'2020-10-01',13163,3306),(27764,'2020-11-01',13163,3306),(27765,'2020-12-01',13163,3306),(27766,'2020-01-01',30379,3307),(27767,'2020-02-01',30379,3307),(27768,'2020-03-01',30379,3307),(27769,'2020-04-01',30379,3307),(27770,'2020-05-01',30379,3307),(27771,'2020-06-01',30379,3307),(27772,'2020-07-01',30379,3307),(27773,'2020-08-01',30379,3307),(27774,'2020-09-01',30379,3307),(27775,'2020-10-01',30379,3307),(27776,'2020-11-01',30379,3307),(27777,'2020-12-01',30379,3307),(27778,'2020-01-01',23379,3309),(27779,'2020-02-01',23379,3309),(27780,'2020-03-01',23379,3309),(27781,'2020-04-01',23379,3309),(27782,'2020-05-01',23379,3309),(27783,'2020-06-01',23379,3309),(27784,'2020-07-01',23379,3309),(27785,'2020-08-01',23379,3309),(27786,'2020-09-01',23379,3309),(27787,'2020-10-01',23379,3309),(27788,'2020-11-01',23379,3309),(27789,'2020-12-01',23379,3309),(27790,'2020-01-01',69608,3311),(27791,'2020-02-01',69608,3311),(27792,'2020-03-01',69608,3311),(27793,'2020-04-01',69608,3311),(27794,'2020-05-01',69608,3311),(27795,'2020-06-01',69608,3311),(27796,'2020-07-01',69608,3311),(27797,'2020-08-01',69608,3311),(27798,'2020-09-01',69608,3311),(27799,'2020-10-01',69608,3311),(27800,'2020-11-01',69608,3311),(27801,'2020-12-01',69608,3311),(27802,'2020-01-01',9556,3313),(27803,'2020-02-01',9556,3313),(27804,'2020-03-01',9556,3313),(27805,'2020-04-01',9556,3313),(27806,'2020-05-01',9556,3313),(27807,'2020-06-01',9556,3313),(27808,'2020-07-01',9556,3313),(27809,'2020-08-01',9556,3313),(27810,'2020-09-01',9556,3313),(27811,'2020-10-01',9556,3313),(27812,'2020-11-01',9556,3313),(27813,'2020-12-01',9556,3313),(27814,'2020-01-01',7088,3314),(27815,'2020-02-01',7088,3314),(27816,'2020-03-01',7088,3314),(27817,'2020-04-01',7088,3314),(27818,'2020-05-01',7088,3314),(27819,'2020-06-01',7088,3314),(27820,'2020-07-01',7088,3314),(27821,'2020-08-01',7088,3314),(27822,'2020-09-01',7088,3314),(27823,'2020-10-01',7088,3314),(27824,'2020-11-01',7088,3314),(27825,'2020-12-01',7088,3314),(27826,'2020-01-01',57748,3316),(27827,'2020-02-01',57748,3316),(27828,'2020-03-01',57748,3316),(27829,'2020-04-01',57748,3316),(27830,'2020-05-01',57748,3316),(27831,'2020-06-01',57748,3316),(27832,'2020-07-01',57748,3316),(27833,'2020-08-01',57748,3316),(27834,'2020-09-01',57748,3316),(27835,'2020-10-01',57748,3316),(27836,'2020-11-01',57748,3316),(27837,'2020-12-01',57748,3316),(27838,'2020-01-01',24802,3317),(27839,'2020-02-01',24802,3317),(27840,'2020-03-01',24802,3317),(27841,'2020-04-01',24802,3317),(27842,'2020-05-01',24802,3317),(27843,'2020-06-01',24802,3317),(27844,'2020-07-01',24802,3317),(27845,'2020-08-01',24802,3317),(27846,'2020-09-01',24802,3317),(27847,'2020-10-01',24802,3317),(27848,'2020-11-01',24802,3317),(27849,'2020-12-01',24802,3317),(27850,'2020-01-01',79478,3321),(27851,'2020-02-01',79478,3321),(27852,'2020-03-01',79478,3321),(27853,'2020-04-01',79478,3321),(27854,'2020-05-01',79478,3321),(27855,'2020-06-01',79478,3321),(27856,'2020-07-01',79478,3321),(27857,'2020-08-01',79478,3321),(27858,'2020-09-01',79478,3321),(27859,'2020-10-01',79478,3321),(27860,'2020-11-01',79478,3321),(27861,'2020-12-01',79478,3321),(27862,'2020-01-01',64563,3325),(27863,'2020-02-01',64563,3325),(27864,'2020-03-01',64563,3325),(27865,'2020-04-01',64563,3325),(27866,'2020-05-01',64563,3325),(27867,'2020-06-01',64563,3325),(27868,'2020-07-01',64563,3325),(27869,'2020-08-01',64563,3325),(27870,'2020-09-01',64563,3325),(27871,'2020-10-01',64563,3325),(27872,'2020-11-01',64563,3325),(27873,'2020-12-01',64563,3325),(27874,'2020-01-01',91798,3328),(27875,'2020-02-01',91798,3328),(27876,'2020-03-01',91798,3328),(27877,'2020-04-01',91798,3328),(27878,'2020-05-01',91798,3328),(27879,'2020-06-01',91798,3328),(27880,'2020-07-01',91798,3328),(27881,'2020-08-01',91798,3328),(27882,'2020-09-01',91798,3328),(27883,'2020-10-01',91798,3328),(27884,'2020-11-01',91798,3328),(27885,'2020-12-01',91798,3328),(27886,'2020-01-01',10444,3331),(27887,'2020-02-01',10444,3331),(27888,'2020-03-01',10444,3331),(27889,'2020-04-01',10444,3331),(27890,'2020-05-01',10444,3331),(27891,'2020-06-01',10444,3331),(27892,'2020-07-01',10444,3331),(27893,'2020-08-01',10444,3331),(27894,'2020-09-01',10444,3331),(27895,'2020-10-01',10444,3331),(27896,'2020-11-01',10444,3331),(27897,'2020-12-01',10444,3331),(27898,'2020-01-01',107981,3334),(27899,'2020-02-01',107981,3334),(27900,'2020-03-01',107981,3334),(27901,'2020-04-01',107981,3334),(27902,'2020-05-01',107981,3334),(27903,'2020-06-01',107981,3334),(27904,'2020-07-01',107981,3334),(27905,'2020-08-01',107981,3334),(27906,'2020-09-01',107981,3334),(27907,'2020-10-01',107981,3334),(27908,'2020-11-01',107981,3334),(27909,'2020-12-01',107981,3334),(27910,'2020-01-01',29996,3335),(27911,'2020-02-01',29996,3335),(27912,'2020-03-01',29996,3335),(27913,'2020-04-01',29996,3335),(27914,'2020-05-01',29996,3335),(27915,'2020-06-01',29996,3335),(27916,'2020-07-01',29996,3335),(27917,'2020-08-01',29996,3335),(27918,'2020-09-01',29996,3335),(27919,'2020-10-01',29996,3335),(27920,'2020-11-01',29996,3335),(27921,'2020-12-01',29996,3335),(27922,'2020-01-01',21548,3337),(27923,'2020-02-01',21548,3337),(27924,'2020-03-01',21548,3337),(27925,'2020-04-01',21548,3337),(27926,'2020-05-01',21548,3337),(27927,'2020-06-01',21548,3337),(27928,'2020-07-01',21548,3337),(27929,'2020-08-01',21548,3337),(27930,'2020-09-01',21548,3337),(27931,'2020-10-01',21548,3337),(27932,'2020-11-01',21548,3337),(27933,'2020-12-01',21548,3337),(27934,'2020-01-01',52917,3338),(27935,'2020-02-01',52917,3338),(27936,'2020-03-01',52917,3338),(27937,'2020-04-01',52917,3338),(27938,'2020-05-01',52917,3338),(27939,'2020-06-01',52917,3338),(27940,'2020-07-01',52917,3338),(27941,'2020-08-01',52917,3338),(27942,'2020-09-01',52917,3338),(27943,'2020-10-01',52917,3338),(27944,'2020-11-01',52917,3338),(27945,'2020-12-01',52917,3338),(27946,'2020-01-01',6964,3339),(27947,'2020-02-01',6964,3339),(27948,'2020-03-01',6964,3339),(27949,'2020-04-01',6964,3339),(27950,'2020-05-01',6964,3339),(27951,'2020-06-01',6964,3339),(27952,'2020-07-01',6964,3339),(27953,'2020-08-01',6964,3339),(27954,'2020-09-01',6964,3339),(27955,'2020-10-01',6964,3339),(27956,'2020-11-01',6964,3339),(27957,'2020-12-01',6964,3339),(27958,'2020-01-01',53262,3343),(27959,'2020-02-01',53262,3343),(27960,'2020-03-01',53262,3343),(27961,'2020-04-01',53262,3343),(27962,'2020-05-01',53262,3343),(27963,'2020-06-01',53262,3343),(27964,'2020-07-01',53262,3343),(27965,'2020-08-01',53262,3343),(27966,'2020-09-01',53262,3343),(27967,'2020-10-01',53262,3343),(27968,'2020-11-01',53262,3343),(27969,'2020-12-01',53262,3343),(27970,'2020-01-01',11619,3344),(27971,'2020-02-01',11619,3344),(27972,'2020-03-01',11619,3344),(27973,'2020-04-01',11619,3344),(27974,'2020-05-01',11619,3344),(27975,'2020-06-01',11619,3344),(27976,'2020-07-01',11619,3344),(27977,'2020-08-01',11619,3344),(27978,'2020-09-01',11619,3344),(27979,'2020-10-01',11619,3344),(27980,'2020-11-01',11619,3344),(27981,'2020-12-01',11619,3344),(27982,'2020-01-01',735,3346),(27983,'2020-02-01',735,3346),(27984,'2020-03-01',735,3346),(27985,'2020-04-01',735,3346),(27986,'2020-05-01',735,3346),(27987,'2020-06-01',735,3346),(27988,'2020-07-01',735,3346),(27989,'2020-08-01',735,3346),(27990,'2020-09-01',735,3346),(27991,'2020-10-01',735,3346),(27992,'2020-11-01',735,3346),(27993,'2020-12-01',735,3346),(27994,'2020-01-01',24533,3348),(27995,'2020-02-01',24533,3348),(27996,'2020-03-01',24533,3348),(27997,'2020-04-01',24533,3348),(27998,'2020-05-01',24533,3348),(27999,'2020-06-01',24533,3348),(28000,'2020-07-01',24533,3348),(28001,'2020-08-01',24533,3348),(28002,'2020-09-01',24533,3348),(28003,'2020-10-01',24533,3348),(28004,'2020-11-01',24533,3348),(28005,'2020-12-01',24533,3348),(28006,'2020-01-01',10762,3350),(28007,'2020-02-01',10762,3350),(28008,'2020-03-01',10762,3350),(28009,'2020-04-01',10762,3350),(28010,'2020-05-01',10762,3350),(28011,'2020-06-01',10762,3350),(28012,'2020-07-01',10762,3350),(28013,'2020-08-01',10762,3350),(28014,'2020-09-01',10762,3350),(28015,'2020-10-01',10762,3350),(28016,'2020-11-01',10762,3350),(28017,'2020-12-01',10762,3350),(28018,'2020-01-01',71158,3355),(28019,'2020-02-01',71158,3355),(28020,'2020-03-01',71158,3355),(28021,'2020-04-01',71158,3355),(28022,'2020-05-01',71158,3355),(28023,'2020-06-01',71158,3355),(28024,'2020-07-01',71158,3355),(28025,'2020-08-01',71158,3355),(28026,'2020-09-01',71158,3355),(28027,'2020-10-01',71158,3355),(28028,'2020-11-01',71158,3355),(28029,'2020-12-01',71158,3355),(28030,'2020-01-01',45053,3358),(28031,'2020-02-01',45053,3358),(28032,'2020-03-01',45053,3358),(28033,'2020-04-01',45053,3358),(28034,'2020-05-01',45053,3358),(28035,'2020-06-01',45053,3358),(28036,'2020-07-01',45053,3358),(28037,'2020-08-01',45053,3358),(28038,'2020-09-01',45053,3358),(28039,'2020-10-01',45053,3358),(28040,'2020-11-01',45053,3358),(28041,'2020-12-01',45053,3358),(28042,'2020-01-01',77327,3359),(28043,'2020-02-01',77327,3359),(28044,'2020-03-01',77327,3359),(28045,'2020-04-01',77327,3359),(28046,'2020-05-01',77327,3359),(28047,'2020-06-01',77327,3359),(28048,'2020-07-01',77327,3359),(28049,'2020-08-01',77327,3359),(28050,'2020-09-01',77327,3359),(28051,'2020-10-01',77327,3359),(28052,'2020-11-01',77327,3359),(28053,'2020-12-01',77327,3359),(28054,'2020-01-01',46551,3361),(28055,'2020-02-01',46551,3361),(28056,'2020-03-01',46551,3361),(28057,'2020-04-01',46551,3361),(28058,'2020-05-01',46551,3361),(28059,'2020-06-01',46551,3361),(28060,'2020-07-01',46551,3361),(28061,'2020-08-01',46551,3361),(28062,'2020-09-01',46551,3361),(28063,'2020-10-01',46551,3361),(28064,'2020-11-01',46551,3361),(28065,'2020-12-01',46551,3361),(28066,'2020-01-01',41996,3366),(28067,'2020-02-01',41996,3366),(28068,'2020-03-01',41996,3366),(28069,'2020-04-01',41996,3366),(28070,'2020-05-01',41996,3366),(28071,'2020-06-01',41996,3366),(28072,'2020-07-01',41996,3366),(28073,'2020-08-01',41996,3366),(28074,'2020-09-01',41996,3366),(28075,'2020-10-01',41996,3366),(28076,'2020-11-01',41996,3366),(28077,'2020-12-01',41996,3366),(28078,'2020-01-01',62179,3368),(28079,'2020-02-01',62179,3368),(28080,'2020-03-01',62179,3368),(28081,'2020-04-01',62179,3368),(28082,'2020-05-01',62179,3368),(28083,'2020-06-01',62179,3368),(28084,'2020-07-01',62179,3368),(28085,'2020-08-01',62179,3368),(28086,'2020-09-01',62179,3368),(28087,'2020-10-01',62179,3368),(28088,'2020-11-01',62179,3368),(28089,'2020-12-01',62179,3368),(28090,'2020-01-01',114412,3373),(28091,'2020-02-01',114412,3373),(28092,'2020-03-01',114412,3373),(28093,'2020-04-01',114412,3373),(28094,'2020-05-01',114412,3373),(28095,'2020-06-01',114412,3373),(28096,'2020-07-01',114412,3373),(28097,'2020-08-01',114412,3373),(28098,'2020-09-01',114412,3373),(28099,'2020-10-01',114412,3373),(28100,'2020-11-01',114412,3373),(28101,'2020-12-01',114412,3373),(28102,'2020-01-01',17700,3378),(28103,'2020-02-01',17700,3378),(28104,'2020-03-01',17700,3378),(28105,'2020-04-01',17700,3378),(28106,'2020-05-01',17700,3378),(28107,'2020-06-01',17700,3378),(28108,'2020-07-01',17700,3378),(28109,'2020-08-01',17700,3378),(28110,'2020-09-01',17700,3378),(28111,'2020-10-01',17700,3378),(28112,'2020-11-01',17700,3378),(28113,'2020-12-01',17700,3378),(28114,'2020-01-01',10538,3379),(28115,'2020-02-01',10538,3379),(28116,'2020-03-01',10538,3379),(28117,'2020-04-01',10538,3379),(28118,'2020-05-01',10538,3379),(28119,'2020-06-01',10538,3379),(28120,'2020-07-01',10538,3379),(28121,'2020-08-01',10538,3379),(28122,'2020-09-01',10538,3379),(28123,'2020-10-01',10538,3379),(28124,'2020-11-01',10538,3379),(28125,'2020-12-01',10538,3379),(28126,'2020-01-01',81183,3381),(28127,'2020-02-01',81183,3381),(28128,'2020-03-01',81183,3381),(28129,'2020-04-01',81183,3381),(28130,'2020-05-01',81183,3381),(28131,'2020-06-01',81183,3381),(28132,'2020-07-01',81183,3381),(28133,'2020-08-01',81183,3381),(28134,'2020-09-01',81183,3381),(28135,'2020-10-01',81183,3381),(28136,'2020-11-01',81183,3381),(28137,'2020-12-01',81183,3381),(28138,'2020-01-01',56891,3383),(28139,'2020-02-01',56891,3383),(28140,'2020-03-01',56891,3383),(28141,'2020-04-01',56891,3383),(28142,'2020-05-01',56891,3383),(28143,'2020-06-01',56891,3383),(28144,'2020-07-01',56891,3383),(28145,'2020-08-01',56891,3383),(28146,'2020-09-01',56891,3383),(28147,'2020-10-01',56891,3383),(28148,'2020-11-01',56891,3383),(28149,'2020-12-01',56891,3383),(28150,'2020-01-01',11087,3384),(28151,'2020-02-01',11087,3384),(28152,'2020-03-01',11087,3384),(28153,'2020-04-01',11087,3384),(28154,'2020-05-01',11087,3384),(28155,'2020-06-01',11087,3384),(28156,'2020-07-01',11087,3384),(28157,'2020-08-01',11087,3384),(28158,'2020-09-01',11087,3384),(28159,'2020-10-01',11087,3384),(28160,'2020-11-01',11087,3384),(28161,'2020-12-01',11087,3384),(28162,'2020-01-01',80958,3385),(28163,'2020-02-01',80958,3385),(28164,'2020-03-01',80958,3385),(28165,'2020-04-01',80958,3385),(28166,'2020-05-01',80958,3385),(28167,'2020-06-01',80958,3385),(28168,'2020-07-01',80958,3385),(28169,'2020-08-01',80958,3385),(28170,'2020-09-01',80958,3385),(28171,'2020-10-01',80958,3385),(28172,'2020-11-01',80958,3385),(28173,'2020-12-01',80958,3385),(28174,'2020-01-01',6758,3388),(28175,'2020-02-01',6758,3388),(28176,'2020-03-01',6758,3388),(28177,'2020-04-01',6758,3388),(28178,'2020-05-01',6758,3388),(28179,'2020-06-01',6758,3388),(28180,'2020-07-01',6758,3388),(28181,'2020-08-01',6758,3388),(28182,'2020-09-01',6758,3388),(28183,'2020-10-01',6758,3388),(28184,'2020-11-01',6758,3388),(28185,'2020-12-01',6758,3388),(28186,'2020-01-01',20267,3389),(28187,'2020-02-01',20267,3389),(28188,'2020-03-01',20267,3389),(28189,'2020-04-01',20267,3389),(28190,'2020-05-01',20267,3389),(28191,'2020-06-01',20267,3389),(28192,'2020-07-01',20267,3389),(28193,'2020-08-01',20267,3389),(28194,'2020-09-01',20267,3389),(28195,'2020-10-01',20267,3389),(28196,'2020-11-01',20267,3389),(28197,'2020-12-01',20267,3389),(28198,'2020-01-01',40310,3391),(28199,'2020-02-01',40310,3391),(28200,'2020-03-01',40310,3391),(28201,'2020-04-01',40310,3391),(28202,'2020-05-01',40310,3391),(28203,'2020-06-01',40310,3391),(28204,'2020-07-01',40310,3391),(28205,'2020-08-01',40310,3391),(28206,'2020-09-01',40310,3391),(28207,'2020-10-01',40310,3391),(28208,'2020-11-01',40310,3391),(28209,'2020-12-01',40310,3391),(28210,'2020-01-01',20967,3392),(28211,'2020-02-01',20967,3392),(28212,'2020-03-01',20967,3392),(28213,'2020-04-01',20967,3392),(28214,'2020-05-01',20967,3392),(28215,'2020-06-01',20967,3392),(28216,'2020-07-01',20967,3392),(28217,'2020-08-01',20967,3392),(28218,'2020-09-01',20967,3392),(28219,'2020-10-01',20967,3392),(28220,'2020-11-01',20967,3392),(28221,'2020-12-01',20967,3392),(28222,'2020-01-01',12342,3393),(28223,'2020-02-01',12342,3393),(28224,'2020-03-01',12342,3393),(28225,'2020-04-01',12342,3393),(28226,'2020-05-01',12342,3393),(28227,'2020-06-01',12342,3393),(28228,'2020-07-01',12342,3393),(28229,'2020-08-01',12342,3393),(28230,'2020-09-01',12342,3393),(28231,'2020-10-01',12342,3393),(28232,'2020-11-01',12342,3393),(28233,'2020-12-01',12342,3393),(28234,'2020-01-01',89891,3394),(28235,'2020-02-01',89891,3394),(28236,'2020-03-01',89891,3394),(28237,'2020-04-01',89891,3394),(28238,'2020-05-01',89891,3394),(28239,'2020-06-01',89891,3394),(28240,'2020-07-01',89891,3394),(28241,'2020-08-01',89891,3394),(28242,'2020-09-01',89891,3394),(28243,'2020-10-01',89891,3394),(28244,'2020-11-01',89891,3394),(28245,'2020-12-01',89891,3394),(28246,'2020-01-01',31376,3396),(28247,'2020-02-01',31376,3396),(28248,'2020-03-01',31376,3396),(28249,'2020-04-01',31376,3396),(28250,'2020-05-01',31376,3396),(28251,'2020-06-01',31376,3396),(28252,'2020-07-01',31376,3396),(28253,'2020-08-01',31376,3396),(28254,'2020-09-01',31376,3396),(28255,'2020-10-01',31376,3396),(28256,'2020-11-01',31376,3396),(28257,'2020-12-01',31376,3396),(28258,'2020-01-01',45777,3397),(28259,'2020-02-01',45777,3397),(28260,'2020-03-01',45777,3397),(28261,'2020-04-01',45777,3397),(28262,'2020-05-01',45777,3397),(28263,'2020-06-01',45777,3397),(28264,'2020-07-01',45777,3397),(28265,'2020-08-01',45777,3397),(28266,'2020-09-01',45777,3397),(28267,'2020-10-01',45777,3397),(28268,'2020-11-01',45777,3397),(28269,'2020-12-01',45777,3397),(28270,'2020-01-01',8750,3398),(28271,'2020-02-01',8750,3398),(28272,'2020-03-01',8750,3398),(28273,'2020-04-01',8750,3398),(28274,'2020-05-01',8750,3398),(28275,'2020-06-01',8750,3398),(28276,'2020-07-01',8750,3398),(28277,'2020-08-01',8750,3398),(28278,'2020-09-01',8750,3398),(28279,'2020-10-01',8750,3398),(28280,'2020-11-01',8750,3398),(28281,'2020-12-01',8750,3398),(28282,'2020-01-01',21522,3399),(28283,'2020-02-01',21522,3399),(28284,'2020-03-01',21522,3399),(28285,'2020-04-01',21522,3399),(28286,'2020-05-01',21522,3399),(28287,'2020-06-01',21522,3399),(28288,'2020-07-01',21522,3399),(28289,'2020-08-01',21522,3399),(28290,'2020-09-01',21522,3399),(28291,'2020-10-01',21522,3399),(28292,'2020-11-01',21522,3399),(28293,'2020-12-01',21522,3399),(28294,'2020-01-01',2442,3401),(28295,'2020-02-01',2442,3401),(28296,'2020-03-01',2442,3401),(28297,'2020-04-01',2442,3401),(28298,'2020-05-01',2442,3401),(28299,'2020-06-01',2442,3401),(28300,'2020-07-01',2442,3401),(28301,'2020-08-01',2442,3401),(28302,'2020-09-01',2442,3401),(28303,'2020-10-01',2442,3401),(28304,'2020-11-01',2442,3401),(28305,'2020-12-01',2442,3401),(28306,'2020-01-01',13038,3402),(28307,'2020-02-01',13038,3402),(28308,'2020-03-01',13038,3402),(28309,'2020-04-01',13038,3402),(28310,'2020-05-01',13038,3402),(28311,'2020-06-01',13038,3402),(28312,'2020-07-01',13038,3402),(28313,'2020-08-01',13038,3402),(28314,'2020-09-01',13038,3402),(28315,'2020-10-01',13038,3402),(28316,'2020-11-01',13038,3402),(28317,'2020-12-01',13038,3402),(28318,'2020-01-01',3194,3404),(28319,'2020-02-01',3194,3404),(28320,'2020-03-01',3194,3404),(28321,'2020-04-01',3194,3404),(28322,'2020-05-01',3194,3404),(28323,'2020-06-01',3194,3404),(28324,'2020-07-01',3194,3404),(28325,'2020-08-01',3194,3404),(28326,'2020-09-01',3194,3404),(28327,'2020-10-01',3194,3404),(28328,'2020-11-01',3194,3404),(28329,'2020-12-01',3194,3404),(28330,'2020-01-01',47900,3405),(28331,'2020-02-01',47900,3405),(28332,'2020-03-01',47900,3405),(28333,'2020-04-01',47900,3405),(28334,'2020-05-01',47900,3405),(28335,'2020-06-01',47900,3405),(28336,'2020-07-01',47900,3405),(28337,'2020-08-01',47900,3405),(28338,'2020-09-01',47900,3405),(28339,'2020-10-01',47900,3405),(28340,'2020-11-01',47900,3405),(28341,'2020-12-01',47900,3405),(28342,'2020-01-01',18033,3406),(28343,'2020-02-01',18033,3406),(28344,'2020-03-01',18033,3406),(28345,'2020-04-01',18033,3406),(28346,'2020-05-01',18033,3406),(28347,'2020-06-01',18033,3406),(28348,'2020-07-01',18033,3406),(28349,'2020-08-01',18033,3406),(28350,'2020-09-01',18033,3406),(28351,'2020-10-01',18033,3406),(28352,'2020-11-01',18033,3406),(28353,'2020-12-01',18033,3406),(28354,'2020-01-01',3733,3408),(28355,'2020-02-01',3733,3408),(28356,'2020-03-01',3733,3408),(28357,'2020-04-01',3733,3408),(28358,'2020-05-01',3733,3408),(28359,'2020-06-01',3733,3408),(28360,'2020-07-01',3733,3408),(28361,'2020-08-01',3733,3408),(28362,'2020-09-01',3733,3408),(28363,'2020-10-01',3733,3408),(28364,'2020-11-01',3733,3408),(28365,'2020-12-01',3733,3408),(28366,'2020-01-01',36001,3409),(28367,'2020-02-01',36001,3409),(28368,'2020-03-01',36001,3409),(28369,'2020-04-01',36001,3409),(28370,'2020-05-01',36001,3409),(28371,'2020-06-01',36001,3409),(28372,'2020-07-01',36001,3409),(28373,'2020-08-01',36001,3409),(28374,'2020-09-01',36001,3409),(28375,'2020-10-01',36001,3409),(28376,'2020-11-01',36001,3409),(28377,'2020-12-01',36001,3409),(28378,'2020-01-01',35795,3410),(28379,'2020-02-01',35795,3410),(28380,'2020-03-01',35795,3410),(28381,'2020-04-01',35795,3410),(28382,'2020-05-01',35795,3410),(28383,'2020-06-01',35795,3410),(28384,'2020-07-01',35795,3410),(28385,'2020-08-01',35795,3410),(28386,'2020-09-01',35795,3410),(28387,'2020-10-01',35795,3410),(28388,'2020-11-01',35795,3410),(28389,'2020-12-01',35795,3410),(28390,'2020-01-01',20736,3414),(28391,'2020-02-01',20736,3414),(28392,'2020-03-01',20736,3414),(28393,'2020-04-01',20736,3414),(28394,'2020-05-01',20736,3414),(28395,'2020-06-01',20736,3414),(28396,'2020-07-01',20736,3414),(28397,'2020-08-01',20736,3414),(28398,'2020-09-01',20736,3414),(28399,'2020-10-01',20736,3414),(28400,'2020-11-01',20736,3414),(28401,'2020-12-01',20736,3414),(28402,'2020-01-01',64806,3417),(28403,'2020-02-01',64806,3417),(28404,'2020-03-01',64806,3417),(28405,'2020-04-01',64806,3417),(28406,'2020-05-01',64806,3417),(28407,'2020-06-01',64806,3417),(28408,'2020-07-01',64806,3417),(28409,'2020-08-01',64806,3417),(28410,'2020-09-01',64806,3417),(28411,'2020-10-01',64806,3417),(28412,'2020-11-01',64806,3417),(28413,'2020-12-01',64806,3417),(28414,'2020-01-01',38876,3418),(28415,'2020-02-01',38876,3418),(28416,'2020-03-01',38876,3418),(28417,'2020-04-01',38876,3418),(28418,'2020-05-01',38876,3418),(28419,'2020-06-01',38876,3418),(28420,'2020-07-01',38876,3418),(28421,'2020-08-01',38876,3418),(28422,'2020-09-01',38876,3418),(28423,'2020-10-01',38876,3418),(28424,'2020-11-01',38876,3418),(28425,'2020-12-01',38876,3418),(28426,'2020-01-01',19220,3420),(28427,'2020-02-01',19220,3420),(28428,'2020-03-01',19220,3420),(28429,'2020-04-01',19220,3420),(28430,'2020-05-01',19220,3420),(28431,'2020-06-01',19220,3420),(28432,'2020-07-01',19220,3420),(28433,'2020-08-01',19220,3420),(28434,'2020-09-01',19220,3420),(28435,'2020-10-01',19220,3420),(28436,'2020-11-01',19220,3420),(28437,'2020-12-01',19220,3420),(28438,'2020-01-01',7276,3423),(28439,'2020-02-01',7276,3423),(28440,'2020-03-01',7276,3423),(28441,'2020-04-01',7276,3423),(28442,'2020-05-01',7276,3423),(28443,'2020-06-01',7276,3423),(28444,'2020-07-01',7276,3423),(28445,'2020-08-01',7276,3423),(28446,'2020-09-01',7276,3423),(28447,'2020-10-01',7276,3423),(28448,'2020-11-01',7276,3423),(28449,'2020-12-01',7276,3423),(28450,'2020-01-01',8159,3424),(28451,'2020-02-01',8159,3424),(28452,'2020-03-01',8159,3424),(28453,'2020-04-01',8159,3424),(28454,'2020-05-01',8159,3424),(28455,'2020-06-01',8159,3424),(28456,'2020-07-01',8159,3424),(28457,'2020-08-01',8159,3424),(28458,'2020-09-01',8159,3424),(28459,'2020-10-01',8159,3424),(28460,'2020-11-01',8159,3424),(28461,'2020-12-01',8159,3424),(28462,'2020-01-01',61034,3425),(28463,'2020-02-01',61034,3425),(28464,'2020-03-01',61034,3425),(28465,'2020-04-01',61034,3425),(28466,'2020-05-01',61034,3425),(28467,'2020-06-01',61034,3425),(28468,'2020-07-01',61034,3425),(28469,'2020-08-01',61034,3425),(28470,'2020-09-01',61034,3425),(28471,'2020-10-01',61034,3425),(28472,'2020-11-01',61034,3425),(28473,'2020-12-01',61034,3425),(28474,'2020-01-01',51750,3429),(28475,'2020-02-01',51750,3429),(28476,'2020-03-01',51750,3429),(28477,'2020-04-01',51750,3429),(28478,'2020-05-01',51750,3429),(28479,'2020-06-01',51750,3429),(28480,'2020-07-01',51750,3429),(28481,'2020-08-01',51750,3429),(28482,'2020-09-01',51750,3429),(28483,'2020-10-01',51750,3429),(28484,'2020-11-01',51750,3429),(28485,'2020-12-01',51750,3429),(28486,'2020-01-01',47864,3430),(28487,'2020-02-01',47864,3430),(28488,'2020-03-01',47864,3430),(28489,'2020-04-01',47864,3430),(28490,'2020-05-01',47864,3430),(28491,'2020-06-01',47864,3430),(28492,'2020-07-01',47864,3430),(28493,'2020-08-01',47864,3430),(28494,'2020-09-01',47864,3430),(28495,'2020-10-01',47864,3430),(28496,'2020-11-01',47864,3430),(28497,'2020-12-01',47864,3430),(28498,'2020-01-01',130964,3431),(28499,'2020-02-01',130964,3431),(28500,'2020-03-01',130964,3431),(28501,'2020-04-01',130964,3431),(28502,'2020-05-01',130964,3431),(28503,'2020-06-01',130964,3431),(28504,'2020-07-01',130964,3431),(28505,'2020-08-01',130964,3431),(28506,'2020-09-01',130964,3431),(28507,'2020-10-01',130964,3431),(28508,'2020-11-01',130964,3431),(28509,'2020-12-01',130964,3431),(28510,'2020-01-01',105927,3433),(28511,'2020-02-01',105927,3433),(28512,'2020-03-01',105927,3433),(28513,'2020-04-01',105927,3433),(28514,'2020-05-01',105927,3433),(28515,'2020-06-01',105927,3433),(28516,'2020-07-01',105927,3433),(28517,'2020-08-01',105927,3433),(28518,'2020-09-01',105927,3433),(28519,'2020-10-01',105927,3433),(28520,'2020-11-01',105927,3433),(28521,'2020-12-01',105927,3433),(28522,'2020-01-01',18825,3436),(28523,'2020-02-01',18825,3436),(28524,'2020-03-01',18825,3436),(28525,'2020-04-01',18825,3436),(28526,'2020-05-01',18825,3436),(28527,'2020-06-01',18825,3436),(28528,'2020-07-01',18825,3436),(28529,'2020-08-01',18825,3436),(28530,'2020-09-01',18825,3436),(28531,'2020-10-01',18825,3436),(28532,'2020-11-01',18825,3436),(28533,'2020-12-01',18825,3436),(28534,'2020-01-01',24408,3442),(28535,'2020-02-01',24408,3442),(28536,'2020-03-01',24408,3442),(28537,'2020-04-01',24408,3442),(28538,'2020-05-01',24408,3442),(28539,'2020-06-01',24408,3442),(28540,'2020-07-01',24408,3442),(28541,'2020-08-01',24408,3442),(28542,'2020-09-01',24408,3442),(28543,'2020-10-01',24408,3442),(28544,'2020-11-01',24408,3442),(28545,'2020-12-01',24408,3442),(28546,'2020-01-01',35265,3446),(28547,'2020-02-01',35265,3446),(28548,'2020-03-01',35265,3446),(28549,'2020-04-01',35265,3446),(28550,'2020-05-01',35265,3446),(28551,'2020-06-01',35265,3446),(28552,'2020-07-01',35265,3446),(28553,'2020-08-01',35265,3446),(28554,'2020-09-01',35265,3446),(28555,'2020-10-01',35265,3446),(28556,'2020-11-01',35265,3446),(28557,'2020-12-01',35265,3446),(28558,'2020-01-01',19856,3447),(28559,'2020-02-01',19856,3447),(28560,'2020-03-01',19856,3447),(28561,'2020-04-01',19856,3447),(28562,'2020-05-01',19856,3447),(28563,'2020-06-01',19856,3447),(28564,'2020-07-01',19856,3447),(28565,'2020-08-01',19856,3447),(28566,'2020-09-01',19856,3447),(28567,'2020-10-01',19856,3447),(28568,'2020-11-01',19856,3447),(28569,'2020-12-01',19856,3447),(28570,'2020-01-01',60413,3448),(28571,'2020-02-01',60413,3448),(28572,'2020-03-01',60413,3448),(28573,'2020-04-01',60413,3448),(28574,'2020-05-01',60413,3448),(28575,'2020-06-01',60413,3448),(28576,'2020-07-01',60413,3448),(28577,'2020-08-01',60413,3448),(28578,'2020-09-01',60413,3448),(28579,'2020-10-01',60413,3448),(28580,'2020-11-01',60413,3448),(28581,'2020-12-01',60413,3448),(28582,'2020-01-01',28629,3450),(28583,'2020-02-01',28629,3450),(28584,'2020-03-01',28629,3450),(28585,'2020-04-01',28629,3450),(28586,'2020-05-01',28629,3450),(28587,'2020-06-01',28629,3450),(28588,'2020-07-01',28629,3450),(28589,'2020-08-01',28629,3450),(28590,'2020-09-01',28629,3450),(28591,'2020-10-01',28629,3450),(28592,'2020-11-01',28629,3450),(28593,'2020-12-01',28629,3450),(28594,'2020-01-01',22257,3451),(28595,'2020-02-01',22257,3451),(28596,'2020-03-01',22257,3451),(28597,'2020-04-01',22257,3451),(28598,'2020-05-01',22257,3451),(28599,'2020-06-01',22257,3451),(28600,'2020-07-01',22257,3451),(28601,'2020-08-01',22257,3451),(28602,'2020-09-01',22257,3451),(28603,'2020-10-01',22257,3451),(28604,'2020-11-01',22257,3451),(28605,'2020-12-01',22257,3451),(28606,'2020-01-01',8459,3455),(28607,'2020-02-01',8459,3455),(28608,'2020-03-01',8459,3455),(28609,'2020-04-01',8459,3455),(28610,'2020-05-01',8459,3455),(28611,'2020-06-01',8459,3455),(28612,'2020-07-01',8459,3455),(28613,'2020-08-01',8459,3455),(28614,'2020-09-01',8459,3455),(28615,'2020-10-01',8459,3455),(28616,'2020-11-01',8459,3455),(28617,'2020-12-01',8459,3455),(28618,'2020-01-01',25917,3462),(28619,'2020-02-01',25917,3462),(28620,'2020-03-01',25917,3462),(28621,'2020-04-01',25917,3462),(28622,'2020-05-01',25917,3462),(28623,'2020-06-01',25917,3462),(28624,'2020-07-01',25917,3462),(28625,'2020-08-01',25917,3462),(28626,'2020-09-01',25917,3462),(28627,'2020-10-01',25917,3462),(28628,'2020-11-01',25917,3462),(28629,'2020-12-01',25917,3462),(28630,'2020-01-01',51100,3463),(28631,'2020-02-01',51100,3463),(28632,'2020-03-01',51100,3463),(28633,'2020-04-01',51100,3463),(28634,'2020-05-01',51100,3463),(28635,'2020-06-01',51100,3463),(28636,'2020-07-01',51100,3463),(28637,'2020-08-01',51100,3463),(28638,'2020-09-01',51100,3463),(28639,'2020-10-01',51100,3463),(28640,'2020-11-01',51100,3463),(28641,'2020-12-01',51100,3463),(28642,'2020-07-14',11111,3310),(28643,'2020-07-14',11111,3310),(28644,'2020-07-14',1111,3308),(28645,'2020-07-14',1111,3308),(28646,'2020-07-14',2147483647,3312),(28647,'2020-07-14',2147483647,3312),(28648,'2020-07-14',1111111,3315),(28649,'2020-07-14',1111111,3315),(28650,'2020-07-14',222222,3318),(28651,'2020-07-14',222222,3318),(28652,'2020-07-14',222222,3318),(28653,'2020-07-14',222222,3318),(28654,'2020-07-14',111111,3320),(28655,'2020-07-14',111111,3320),(28656,'2020-07-14',11111,3323),(28657,'2020-07-14',11111,3323),(28658,'2020-07-14',111111,3319),(28659,'2020-07-14',111111,3319),(28660,'2020-07-14',1111111,3322),(28661,'2020-07-14',1111111,3322),(28662,'2020-07-14',11111,3324),(28663,'2020-07-14',11111,3324),(28664,'2020-07-14',111111111,3326),(28665,'2020-07-14',111111111,3326),(28666,'2020-07-14',0,3327),(28667,'2020-08-14',0,3327),(28668,'2020-09-14',0,3327),(28669,'2020-10-14',0,3327),(28670,'2020-11-14',0,3327),(28671,'2020-12-14',0,3327),(28672,'2021-01-14',0,3327),(28673,'2021-02-14',0,3327),(28674,'2021-03-14',0,3327),(28675,'2021-04-14',0,3327),(28676,'2021-05-14',0,3327),(28677,'2019-07-14',0,3327),(28678,'2019-07-15',8547009,3329),(28679,'2019-08-15',8547009,3329),(28680,'2019-09-15',8547009,3329),(28681,'2019-10-15',8547009,3329),(28682,'2019-11-15',8547009,3329),(28683,'2019-12-15',8547009,3329),(28684,'2020-01-15',8547009,3329),(28685,'2020-02-15',8547009,3329),(28686,'2020-03-15',8547009,3329),(28687,'2020-04-15',8547009,3329),(28688,'2020-05-15',8547009,3329),(28689,'2020-06-15',8547009,3329),(28690,'2020-07-15',8547009,3329);
/*!40000 ALTER TABLE `monotributomensual` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `monotributomensual` with 937 row(s)
--

--
-- Table structure for table `pago_simplificado`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago_simplificado` (
  `id_simplificado` int(11) NOT NULL AUTO_INCREMENT,
  `id_condicion` int(11) NOT NULL,
  `montoSimplificado` int(11) NOT NULL,
  PRIMARY KEY (`id_simplificado`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `pago_simplificado_ibfk_1` FOREIGN KEY (`id_condicion`) REFERENCES `condiciontributaria` (`id_condicion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago_simplificado`
--

LOCK TABLES `pago_simplificado` WRITE;
/*!40000 ALTER TABLE `pago_simplificado` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pago_simplificado` VALUES (271,6609,600),(272,6607,600),(273,6616,3324),(274,6622,756),(275,6622,756),(276,6622,756),(277,6622,756),(278,6624,600),(279,6624,600),(280,6629,600),(281,6629,600),(282,6623,600),(283,6623,600),(284,6627,3324),(285,6627,3324),(286,6631,600),(287,6631,600),(288,6633,7176),(289,6633,7176),(290,6634,600),(291,6634,600),(292,6636,7176),(293,6636,7176);
/*!40000 ALTER TABLE `pago_simplificado` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pago_simplificado` with 23 row(s)
--

--
-- Table structure for table `pagos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `autonomo` decimal(10,2) NOT NULL,
  `caja` decimal(10,2) NOT NULL,
  `aportes` decimal(10,2) NOT NULL,
  `cpceer` decimal(10,2) NOT NULL,
  `matricula` decimal(10,2) NOT NULL,
  `suss` decimal(10,2) NOT NULL,
  `ley4035` decimal(10,2) NOT NULL,
  `honorarios` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `pagoCliente` decimal(10,0) NOT NULL,
  `saldoIntegrar` decimal(10,2) NOT NULL,
  `pagoBanco` decimal(10,2) NOT NULL,
  `monotributo` decimal(10,2) NOT NULL,
  `ater` decimal(10,2) NOT NULL,
  `municipalidad` decimal(10,2) NOT NULL,
  `sindicato` decimal(10,2) NOT NULL,
  `empleador` decimal(10,2) NOT NULL,
  `sicore` decimal(10,2) NOT NULL,
  `ganancias` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pagos` VALUES (1,8161,'2020-07-15',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1.00,1615.00,0,0.00,0.00,1614.00,0.00,0.00,0.00,0.00,0.00,0.00);
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pagos` with 1 row(s)
--

--
-- Table structure for table `regimenretencion`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regimenretencion` (
  `id_regimen` int(11) NOT NULL AUTO_INCREMENT,
  `id_condicion` int(11) NOT NULL,
  `sicore_iva` tinyint(1) NOT NULL,
  `sicore_ganancia` tinyint(1) NOT NULL,
  `siager_liberales` tinyint(1) NOT NULL,
  `siager_ingresos_brutos` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_regimen`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `regimenretencion_ibfk_1` FOREIGN KEY (`id_condicion`) REFERENCES `condiciontributaria` (`id_condicion`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4511 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regimenretencion`
--

LOCK TABLES `regimenretencion` WRITE;
/*!40000 ALTER TABLE `regimenretencion` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `regimenretencion` VALUES (4248,6604,0,0,0,0),(4249,6605,0,0,0,0),(4250,6606,0,0,0,0),(4251,6607,0,0,0,0),(4252,6608,0,0,0,0),(4253,6609,0,0,0,0),(4254,6610,0,0,0,0),(4255,6611,0,0,0,0),(4256,6612,0,0,0,0),(4257,6613,0,0,0,0),(4258,6614,0,0,0,0),(4259,6615,0,0,0,0),(4260,6616,0,0,0,0),(4261,6617,0,0,0,0),(4262,6618,0,0,0,0),(4263,6619,0,0,0,0),(4264,6620,0,0,0,0),(4265,6621,0,0,0,0),(4266,6622,0,0,0,0),(4267,6623,0,0,0,0),(4268,6624,0,0,0,0),(4269,6625,0,0,0,0),(4270,6626,0,0,0,0),(4271,6627,0,0,0,0),(4272,6628,0,0,0,0),(4273,6629,0,0,0,0),(4274,6630,0,0,0,0),(4275,6631,0,0,0,0),(4276,6632,0,0,0,0),(4277,6633,0,0,0,0),(4278,6634,0,0,0,0),(4279,6635,0,0,0,0),(4280,6636,0,0,0,0),(4281,6637,0,0,0,0),(4282,6638,0,0,0,0),(4283,6639,0,0,0,0),(4284,6640,0,0,0,0),(4285,6641,0,0,0,0),(4286,6642,0,0,0,0),(4287,6643,0,0,0,0),(4288,6644,0,0,0,0),(4289,6645,0,0,0,0),(4290,6646,0,0,0,0),(4291,6647,0,0,0,0),(4292,6648,0,0,0,0),(4293,6649,0,0,0,0),(4294,6650,0,0,0,0),(4295,6651,0,0,0,0),(4296,6652,0,0,0,0),(4297,6653,0,0,0,0),(4298,6654,0,0,0,0),(4299,6655,0,0,0,0),(4300,6656,0,0,0,0),(4301,6657,0,0,0,0),(4302,6658,0,0,0,0),(4303,6659,0,0,0,0),(4304,6660,0,0,0,0),(4305,6661,0,0,0,0),(4306,6662,0,0,0,0),(4307,6663,0,0,0,0),(4308,6664,0,0,0,0),(4309,6665,0,0,0,0),(4310,6666,0,0,0,0),(4311,6667,0,0,0,0),(4312,6668,0,0,0,0),(4313,6669,0,0,0,0),(4314,6670,0,0,0,0),(4315,6671,0,0,0,0),(4316,6672,0,0,0,0),(4317,6673,0,0,0,0),(4318,6674,0,0,0,0),(4319,6675,0,0,0,0),(4320,6676,0,0,0,0),(4321,6677,0,0,0,0),(4322,6678,0,0,0,0),(4323,6679,0,0,0,0),(4324,6680,0,0,0,0),(4325,6681,0,0,0,0),(4326,6682,0,0,0,0),(4327,6683,0,0,0,0),(4328,6684,0,0,0,0),(4329,6685,0,0,0,0),(4330,6686,0,0,0,0),(4331,6687,0,0,0,0),(4332,6688,0,0,0,0),(4333,6689,0,0,0,0),(4334,6690,0,0,0,0),(4335,6691,0,0,0,0),(4336,6692,0,0,0,0),(4337,6693,0,0,0,0),(4338,6694,0,0,0,0),(4339,6695,0,0,0,0),(4340,6696,0,0,0,0),(4341,6697,0,0,0,0),(4342,6698,0,0,0,0),(4343,6699,0,0,0,0),(4344,6700,0,0,0,0),(4345,6701,0,0,0,0),(4346,6702,0,0,0,0),(4347,6703,0,0,0,0),(4348,6704,0,0,0,0),(4349,6705,0,0,0,0),(4350,6706,0,0,0,0),(4351,6707,0,0,0,0),(4352,6708,0,0,0,0),(4353,6709,0,0,0,0),(4354,6710,0,0,0,0),(4355,6711,0,0,0,0),(4356,6712,0,0,0,0),(4357,6713,0,0,0,0),(4358,6714,0,0,0,0),(4359,6715,0,0,0,0),(4360,6716,0,0,0,0),(4361,6717,0,0,0,0),(4362,6718,0,0,0,0),(4363,6719,0,0,0,0),(4364,6720,0,0,0,0),(4365,6721,0,0,0,0),(4366,6722,0,0,0,0),(4367,6723,0,0,0,0),(4368,6724,0,0,0,0),(4369,6725,0,0,0,0),(4370,6726,0,0,0,0),(4371,6727,0,0,0,0),(4372,6728,0,0,0,0),(4373,6729,0,0,0,0),(4374,6730,0,0,0,0),(4375,6731,0,0,0,0),(4376,6732,0,0,0,0),(4377,6733,0,0,0,0),(4378,6734,0,0,0,0),(4379,6735,0,0,0,0),(4380,6736,0,0,0,0),(4381,6737,0,0,0,0),(4382,6738,0,0,0,0),(4383,6739,0,0,0,0),(4384,6740,0,0,0,0),(4385,6741,0,0,0,0),(4386,6742,0,0,0,0),(4387,6743,0,0,0,0),(4388,6744,0,0,0,0),(4389,6745,0,0,0,0),(4390,6746,0,0,0,0),(4391,6747,0,0,0,0),(4392,6748,0,0,0,0),(4393,6749,0,0,0,0),(4394,6750,0,0,0,0),(4395,6751,0,0,0,0),(4396,6752,0,0,0,0),(4397,6753,0,0,0,0),(4398,6754,0,0,0,0),(4399,6755,0,0,0,0),(4400,6756,0,0,0,0),(4401,6757,0,0,0,0),(4402,6758,0,0,0,0),(4403,6759,0,0,0,0),(4404,6760,0,0,0,0),(4405,6761,0,0,0,0),(4406,6762,0,0,0,0),(4407,6763,0,0,0,0),(4408,6764,0,0,0,0),(4409,6765,0,0,0,0),(4410,6766,0,0,0,0),(4411,6767,0,0,0,0),(4412,6768,0,0,0,0),(4413,6769,0,0,0,0),(4414,6770,0,0,0,0),(4415,6771,0,0,0,0),(4416,6772,0,0,0,0),(4417,6773,0,0,0,0),(4418,6774,0,0,0,0),(4419,6775,0,0,0,0),(4420,6776,0,0,0,0),(4421,6777,0,0,0,0),(4422,6778,0,0,0,0),(4423,6779,0,0,0,0),(4424,6780,0,0,0,0),(4425,6781,0,0,0,0),(4426,6782,0,0,0,0),(4427,6783,0,0,0,0),(4428,6784,0,0,0,0),(4429,6785,0,0,0,0),(4430,6786,0,0,0,0),(4431,6787,0,0,0,0),(4432,6788,0,0,0,0),(4433,6789,0,0,0,0),(4434,6790,0,0,0,0),(4435,6791,0,0,0,0),(4436,6792,0,0,0,0),(4437,6793,0,0,0,0),(4438,6794,0,0,0,0),(4439,6795,0,0,0,0),(4440,6796,0,0,0,0),(4441,6797,0,0,0,0),(4442,6798,0,0,0,0),(4443,6799,0,0,0,0),(4444,6800,0,0,0,0),(4445,6801,0,0,0,0),(4446,6802,0,0,0,0),(4447,6803,0,0,0,0),(4448,6804,0,0,0,0),(4449,6805,0,0,0,0),(4450,6806,0,0,0,0),(4451,6807,0,0,0,0),(4452,6808,0,0,0,0),(4453,6809,0,0,0,0),(4454,6810,0,0,0,0),(4455,6811,0,0,0,0),(4456,6812,0,0,0,0),(4457,6813,0,0,0,0),(4458,6814,0,0,0,0),(4459,6815,0,0,0,0),(4460,6816,0,0,0,0),(4461,6817,0,0,0,0),(4462,6818,0,0,0,0),(4463,6819,0,0,0,0),(4464,6820,0,0,0,0),(4465,6821,0,0,0,0),(4466,6822,0,0,0,0),(4467,6823,0,0,0,0),(4468,6824,0,0,0,0),(4469,6825,0,0,0,0),(4470,6826,0,0,0,0),(4471,6827,0,0,0,0),(4472,6828,0,0,0,0),(4473,6829,0,0,0,0),(4474,6830,0,0,0,0),(4475,6831,0,0,0,0),(4476,6832,0,0,0,0),(4477,6833,0,0,0,0),(4478,6834,0,0,0,0),(4479,6835,0,0,0,0),(4480,6836,0,0,0,0),(4481,6837,0,0,0,0),(4482,6838,0,0,0,0),(4483,6839,0,0,0,0),(4484,6840,0,0,0,0),(4485,6841,0,0,0,0),(4486,6842,0,0,0,0),(4487,6843,0,0,0,0),(4488,6844,0,0,0,0),(4489,6845,0,0,0,0),(4490,6846,0,0,0,0),(4491,6847,0,0,0,0),(4492,6848,0,0,0,0),(4493,6849,0,0,0,0),(4494,6850,0,0,0,0),(4495,6851,0,0,0,0),(4496,6852,0,0,0,0),(4497,6853,0,0,0,0),(4498,6854,0,0,0,0),(4499,6855,0,0,0,0),(4500,6856,0,0,0,0),(4501,6857,0,0,0,0),(4502,6858,0,0,0,0),(4503,6859,0,0,0,0),(4504,6860,0,0,0,0),(4505,6861,0,0,0,0),(4506,6862,0,0,0,0),(4507,6863,0,0,0,0),(4508,6864,0,0,0,0),(4509,6865,0,0,0,0),(4510,6866,0,0,0,0);
/*!40000 ALTER TABLE `regimenretencion` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `regimenretencion` with 263 row(s)
--

--
-- Table structure for table `saldo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `autonomo` decimal(10,2) NOT NULL,
  `caja` decimal(10,2) NOT NULL,
  `aportes` decimal(10,2) NOT NULL,
  `cpceer` decimal(10,2) NOT NULL,
  `matricula` decimal(10,2) NOT NULL,
  `suss` decimal(10,2) NOT NULL,
  `ley4035` decimal(10,2) NOT NULL,
  `honorarios` decimal(10,2) NOT NULL,
  `ganancias` decimal(10,2) NOT NULL,
  `sicore` decimal(10,2) NOT NULL,
  `empleador` decimal(10,2) NOT NULL,
  `sindicato` decimal(10,2) NOT NULL,
  `municipalidad` decimal(10,2) NOT NULL,
  `ater` decimal(10,2) NOT NULL,
  `monotributo` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_saldo`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saldo`
--

LOCK TABLES `saldo` WRITE;
/*!40000 ALTER TABLE `saldo` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `saldo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `saldo` with 0 row(s)
--

--
-- Table structure for table `tabla_monotributo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabla_monotributo` (
  `id_tablaMonotributo` int(11) NOT NULL AUTO_INCREMENT,
  `ingresos` decimal(10,2) NOT NULL,
  `categoria` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `impuesto_servicio` decimal(10,2) NOT NULL,
  `impuesto_bienes` decimal(10,2) NOT NULL,
  `obra_social` decimal(10,2) NOT NULL,
  `sipa` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_tablaMonotributo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabla_monotributo`
--

LOCK TABLES `tabla_monotributo` WRITE;
/*!40000 ALTER TABLE `tabla_monotributo` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tabla_monotributo` VALUES (3,1.00,'A',111.00,111.00,689.00,493.00),(5,1.00,'B',215.00,215.00,689.00,542.00),(6,500.00,'C',368.00,340.00,689.00,596.00),(7,10.00,'D',605.00,559.00,689.00,656.00),(8,552511.00,'E',1151.00,892.00,689.00,722.00),(9,690639.00,'F',1583.54,1165.86,689.00,794.48),(10,828767.94,'G',2014.37,1453.62,689.00,873.93),(11,1151066.58,'H',4604.26,3568.31,689.00,961.32),(12,1352503.24,'I',0.00,5755.33,689.00,1057.46),(13,100.00,'J',0.00,6763.00,689.00,1163.00),(14,1726599.88,'K',0.00,7769.70,689.00,1279.52);
/*!40000 ALTER TABLE `tabla_monotributo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tabla_monotributo` with 11 row(s)
--

--
-- Table structure for table `usuarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `privilegios` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `rango` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `usuarios` VALUES (5,'Maxi','fernandez','','maxi','f63b096a3073587a26e0e10999a60c7efd3293f7','usuario'),(6,'Eneas','Chavez','','Eneas','f59f14df2efa110cbbef9301694d8eff7c86e27f','usuario'),(7,'Omar','Garcia Abib','','Omar','4a6db2314c199446c0e2d3e48e30295622c96639','usuario'),(8,'Mauri','Fucks','','Mauri','3b7060c3143628ce82b700a7fd8b7d1a5ce8323c','usuario'),(9,'IvÃ¡n','Mafei','','Ivan','a15f8b81a160b4eebe5c84e9e3b65c87b9b2f18e','usuario'),(10,'Alvaro','Gabas','','Alvaro','5b2d0c210c4a9fd6aeaf2eaedf8273be993c90c2','usuario'),(11,'Dario','Jhontson','','Dario','b4b6f4f33b4a889af08937e9e280b8e367ec4640','admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `usuarios` with 7 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sat, 18 Jul 2020 14:09:11 +0200
