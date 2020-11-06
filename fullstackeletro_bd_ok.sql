-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackeletro_bd
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `enviopedidos`
--

DROP TABLE IF EXISTS `enviopedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enviopedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(100) DEFAULT NULL,
  `endereco` varchar(500) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `produto` varchar(50) DEFAULT NULL,
  `quantidade` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enviopedidos`
--

LOCK TABLES `enviopedidos` WRITE;
/*!40000 ALTER TABLE `enviopedidos` DISABLE KEYS */;
INSERT INTO `enviopedidos` VALUES (1,'Diego Ribeiro','Rua A','12345678','microondas',7),(2,'Rogério Santos','Rua B','12345678','geladeira',5),(3,'Maria das Graças','Rua Sentido Sul, 13','1140591685','fogao',1),(25,'Amanda Soares','Rua treze de maio, 25','1140591688','Fogão',2),(24,'Vitor Moreira','Rua João Medeiros, 14','1140505010','Fogão',3),(23,'Valdir Ribeiro','Rua Apostolo Bartolomeu, 370 - São Paulo - SP','40591620','Lava Roupas',5);
/*!40000 ALTER TABLE `enviopedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mensagens` (
  `msg_cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `motivo` varchar(30) DEFAULT NULL,
  `mensagem` varchar(200) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagens`
--

LOCK TABLES `mensagens` WRITE;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` VALUES (12,'Diego Ribeiro','diego@hotmail.com','Elogios','O site está ficando show, continue assim! ','2020-10-29 18:51:56'),(48,'Maria das Graças','maria@hotmail.com','Problemas Técnicos (site)','A página de pagamento está fora do ar. ','2020-10-29 19:34:39'),(15,'Maria das Graças','maria@hotmail.com','Problemas Técnicos (site)','A página de pagamento está fora do ar. ','2020-10-29 18:57:30'),(16,'Maria das Graças','maria@hotmail.com','Problemas Técnicos (site)','A página de pagamento está fora do ar. ','2020-10-29 18:59:16'),(17,'Maria das Graças','maria@hotmail.com','Problemas Técnicos (site)','A página de pagamento está fora do ar. ','2020-10-29 18:59:26'),(13,'Diego Ribeiro','diego.ribeiro@soap.com.br','Elogios','Afonso, obrigado pela ajuda de sempre, vc é o melhor monitor, haha :D','2020-10-29 18:53:05'),(47,'Maria das Graças','maria@hotmail.com','Problemas Técnicos (site)','A página de pagamento está fora do ar. ','2020-10-29 19:33:52'),(68,'Amanda Soares','amanda.soares@hotmail.com','Elogios','O site está ficando show, parabéns! Continue assim...','2020-11-03 14:35:27');
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `prod_cod` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `precoVenda` int(11) DEFAULT NULL,
  `imagem` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`prod_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'geladeira','Geladeira Grost Brastemp Side Inverse 375L',3389,2899,'imagens/geladeira.jpg'),(2,'geladeira','Geladeira Brastemp Side Porta Dupla 540L',6389,5019,'imagens/geladeria 2.jpg'),(3,'geladeira','Geladeira Brastemp 540L Porta Dupla Suporte para Água',7389,6019,'imagens/geladeira 3.jpg'),(4,'fogao','Fogao 4 bocas Eletrolux com Mesa de Vidro',1299,1059,'imagens/fogao 2.jpg'),(5,'fogao','Fogão Brastemp Preto 6 Bocas de Vidro',3389,3000,'imagens/Fogao 22.jpg'),(6,'microondas','Microondas 25L Espelhado Eletrolux 220V',509,450,'imagens/microondas.jpg'),(7,'microondas','Microondas Tabajara 20L Cinza e Branco Automático',320,290,'imagens/microondas 2.jpg'),(8,'microondas','Microondas Philco 25L Branco Espelhado',320,290,'imagens/microondas33.jpg'),(9,'lavaroupas','Lava e Seca Roupas Samsung Ecobubble 15kg',4150,3900,'imagens/Lavaroupas.jpg'),(10,'lavaroupas','Máquina de Lavar Brastemp Advanced 12Kg',2509,2100,'imagens/lava roupas 2.jpg'),(11,'lavaloucas','Lava Louças Brastemp - 14 Serviços',4100,3690,'imagens/lava loucas.jpg'),(12,'lavaloucas','Lava Louças Brastemp 10 Serviços - 220V',3690,3290,'imagens/lava loucas 2.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fullstackeletro_bd'
--

--
-- Dumping routines for database 'fullstackeletro_bd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 14:41:02
