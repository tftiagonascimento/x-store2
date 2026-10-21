-- MySQL dump 10.13  Distrib 8.0.46, for Win64 (x86_64)
--
-- Host: localhost    Database: x_store
-- ------------------------------------------------------
-- Server version	8.0.46

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `imagem_url` varchar(255) NOT NULL,
  `categoria` varchar(50) NOT NULL DEFAULT 'Geral',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Iphone 17','muito pica pra jogar pou',2.50,'https://media.gazetadopovo.com.br/2017/02/1bb3d975c17784892d30e51965581b75-gpLarge.png','Eletronicos'),(2,'barco ovelha','tem uma ovelha na proa',750000.00,'https://tse4.mm.bing.net/th/id/OIP.E5QJPOFNcfleWNWNB5ka-wHaD5?r=0&rs=1&pid=ImgDetMain&o=7&rm=3','Diversos'),(3,'Notebook Acer nitro 5','meu sonho de consumo',9999999.00,'https://m.media-amazon.com/images/I/81Ivn5DIxhL._AC_SL1500_.jpg','Casa'),(4,'Corvettezin','pops and bang',1000000.00,'https://www.motortrend.com/files/6850a4a22333c400081007bb/026-2026-chevrolet-corvette-zr1x-reveal.jpg?w=768&width=768&q=75&format=webp','Diversos'),(5,'Makita.','Makita.',99999999.00,'https://tse2.mm.bing.net/th/id/OIP.KpctkwCic7uMDiTMf9Ei5QHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3','Diversos'),(7,'kitnet','em são paulo',50000000.00,'https://tse1.explicit.bing.net/th/id/OIP.Q_zYaxMylhSrJrSJ-wALoAHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3','Casa'),(9,'Teclado Mecânico','é a mesma merda q um normal',350.00,'https://tse3.mm.bing.net/th/id/OIP.zRvcSRpzLHsdixOgq7Vq7QHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3','Eletronicos'),(10,'Café','hmmm, quentinho',12.50,'https://tse1.explicit.bing.net/th/id/OIP.Ocr7wT-7XgC3vuexidaEEQHaE7?r=0&rs=1&pid=ImgDetMain&o=7&rm=3','Alimentos'),(12,'Camisa com Capuz','Ficar engual um noia',120.00,'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=400&q=80','Vestuario'),(13,'Cadeira Ergonómica','pra essas costa troncha tua',850.00,'https://product-hub-prd.madeiramadeira.com.br/925260/images/73d784b3-378c-41c3-91d6-fc7a9414a4ec893c7aa49252601851500x1500.jpg','Casa'),(14,'Cream cracker','com um cafézin',49.90,'https://mercantilnovaera.vteximg.com.br/arquivos/ids/192191-1000-1000/Biscoito-Cream-Cracker-MARILAN-Pacote-400g.jpg?v=637741553822500000','Alimentos'),(15,'Panelas Polishop','Panelas bonitinhas',199.99,'https://gastronominho.com.br/wp-content/uploads/2021/06/Panelas-Ichef-Polishop-SHARK-SERIES.jpg','Diversos'),(16,'Bolo de Rolo','é de rolo',35.00,'https://dicavida.com.br/wp-content/uploads/2025/02/d0038ae1-bolo-de-rolo-tm-doces-brasileiros-mariana-dias-6350-baixa-2.jpg','Alimentos'),(17,'siauei','bagui fei do caraikkkkk',0.50,'https://down-br.img.susercontent.com/file/br-11134207-7r98o-lw0jehq3rzbmfd','Vestuario'),(18,'Rebimboca','A parafuseta se compra separadamente',350.00,'https://blog.autobitts.com.br/wp-content/uploads/2017/12/ab-rebimboca-da-parafuseta.jpg','Eletronicos'),(19,'Prato típico africano','k',12.50,'https://img.freepik.com/fotos-premium/conceito-de-nutricao-pouco-saudavel-e-fome-a-vista-superior-fecha-a-foto-do-prato-vazio-e-talheres-na-mesa-de-madeira_352249-152.jpg','Alimentos'),(20,'Televisão','pra assistir nba',50.00,'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6541/6541863ld.jpg','Eletronicos'),(21,'Chapéu do quico','Quico invejoso quis q colocasse o dele tbm',120.00,'https://i.pinimg.com/originals/14/a9/66/14a96681532fce33a721f4dbd0c7773d.jpg','Vestuario'),(22,'Facão do Dexter','pra cortar pão, ou gente',850.00,'https://static3.tcdn.com.br/img/img_prod/469103/faca_de_acougueiro_profissional_com_cabo_branco_5520_12_em_aco_inoxidavel_mundial_151182_1_8852bd09dc6727618134d977c13f9c2c.jpg','Casa'),(23,'Chapéu do chaves','isso isso isso',49.90,'https://http2.mlstatic.com/D_NQ_NP_978104-MLB51220103431_082022-O.webp','Vestuario'),(27,'Mouse gamer','click click',39.00,'https://i5.walmartimages.com/seo/RGB-Wired-Gaming-Mouse-Ergonomic-With-7-Backlight-Modes-6-Keys-4-Speed-Adjustable-For-Laptop-PC-Gamers-Wireless-Mouth-Mouses-Computers-Moue-Mice_1942ec8b-4122-4d2e-950f-1272baef4f21.1e56fd2dcecbfce38210fdc8a7f77730.jpeg','Casa'),(28,'aborguer de siri','sirigueijo canibal',666.00,'https://img.odcdn.com.br/wp-content/uploads/2026/02/hambrguer-de-siri-bob-esponja-1920x1080.jpg','Geral'),(29,'aborguer de siri','sirigueijo canibal',666.00,'https://img.odcdn.com.br/wp-content/uploads/2026/02/hambrguer-de-siri-bob-esponja-1920x1080.jpg','Geral'),(30,'aborguer de siri','sirigueijo canibal',666.00,'https://img.odcdn.com.br/wp-content/uploads/2026/02/hambrguer-de-siri-bob-esponja-1920x1080.jpg','Geral'),(31,'aborguer de siri','sirigueijo canibal',666.00,'https://img.odcdn.com.br/wp-content/uploads/2026/02/hambrguer-de-siri-bob-esponja-1920x1080.jpg','Alimentos');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'tiago@admin','sacidepatinete');
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

-- Dump completed on 2026-10-21  1:35:38
