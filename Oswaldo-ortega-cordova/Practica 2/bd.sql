/*
SQLyog Ultimate v9.02 
MySQL - 5.6.16 : Database - practica1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`practica1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `practica1`;

/*Table structure for table `calificacion` */

DROP TABLE IF EXISTS `calificacion`;

CREATE TABLE `calificacion` (
  `id_puntaje` int(22) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(22) DEFAULT NULL,
  `id_pregunta` int(22) DEFAULT NULL,
  `calificacion` int(22) DEFAULT NULL,
  PRIMARY KEY (`id_puntaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `calificacion` */

LOCK TABLES `calificacion` WRITE;

UNLOCK TABLES;

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id_pregunta` int(22) NOT NULL AUTO_INCREMENT,
  `pregunta` text,
  `respuesta` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

LOCK TABLES `preguntas` WRITE;

insert  into `preguntas`(`id_pregunta`,`pregunta`,`respuesta`) values (1,'¿Cuál es la capital de Brazil? \r\n<br> <input type=\'radio\' name=\'a\' value=\'a\'> Ecuador \r\n<br> <input type=\'radio\' name=\'a\' value=\'b\'>Brazilia \r\n<br> <input type=\'radio\' name=\'a\' value=\'c\'>Argentina','b'),(2,'¿Cual es la velocidad de la luz? <br> <input type=\'radio\' name=\'b\' value=\'a\'>2000 km por hora \r\n<br> <input type=\'radio\' name=\'b\' value=\'b\'>360,000 km por segundo','b'),(3,'¿Quien es el mejor jugador del mundo?\r\n<br> <input type=\'radio\' name=\'c\' value=\'a\'> Samuel Etoo \r\n<br> <input type=\'radio\' name=\'c\' value=\'b\'> Messi \r\n<br> <input type=\'radio\' name=\'c\' value=\'c\'> C. Ronaldo','c'),(4,'¿Donde fue el mundial en el 2010?\r\n<br> <input type=\'radio\' name=\'d\' value=\'a\'> Sudafrica \r\n<br> <input type=\'radio\' name=\'d\' value=\'b\'> Sudamerica \r\n<br> <input type=\'radio\' name=\'d\' value=\'c\'> Africa','a'),(5,'¿Qué nación gano el mundial de Brazil?\r\n<br> <input type=\'radio\' name=\'e\' value=\'a\'> España \r\n<br> <input type=\'radio\' name=\'e\' value=\'b\'> Brazil \r\n<br> <input type=\'radio\' name=\'e\' value=\'c\'> Alemaña','c'),(6,'¿Cuantos años lleva el cruz azul sin ganar un campeonato en la liga mexicana?\r\n<br> <input type=\'radio\' name=\'f\' value=\'a\'> 17años \r\n<br> <input type=\'radio\' name=\'f\' value=\'b\'> 18 años \r\n<br> <input type=\'radio\' name=\'f\' value=\'c\'> 16 años','a'),(7,'¿Como se llamo el balon utilizado en sudafrica?\r\n<br> <input type=\'radio\' name=\'g\' value=\'a\'> Moto \r\n<br> <input type=\'radio\' name=\'g\' value=\'b\'> Yabulany \r\n<br> <input type=\'radio\' name=\'g\' value=\'c\'> Chamilo','b'),(8,'¿Donde se va a jugar el proximo mundial de futbol?\r\n<br> <input type=\'radio\' name=\'h\' value=\'a\'> Quatar \r\n<br> <input type=\'radio\' name=\'h\' value=\'b\'> Europa \r\n<br> <input type=\'radio\' name=\'h\' value=\'c\'> Quito','a'),(9,'¿Cuál es el mejor jugador pagado?\r\n<br> <input type=\'radio\' name=\'i\' value=\'a\'> Messi \r\n<br> <input type=\'radio\' name=\'i\' value=\'b\'> C.Ronaldo \r\n<br> <input type=\'radio\' name=\'i\' value=\'c\'> Gareth Bale','c'),(10,'¿En que año fue el mundial en México?\r\n<br> <input type=\'radio\' name=\'j\' value=\'a\'> 1978 \r\n<br> <input type=\'radio\' name=\'j\' value=\'b\'> 1968 \r\n<br> <input type=\'radio\' name=\'j\' value=\'c\'> 1969','b'),(11,'¿En que año se retiro C. Blanco de la selección?\r\n<br> <input type=\'radio\' name=\'k\' value=\'a\'> 2010 \r\n<br> <input type=\'radio\' name=\'k\' value=\'b\'> 2012 \r\n<br> <input type=\'radio\' name=\'k\' value=\'c\'> 2013','b'),(12,'¿Qué equipo mexicano lleva mas campeonatos en la liga mexicana?\r\n<br> <input type=\'radio\' name=\'l\' value=\'a\'> America \r\n<br> <input type=\'radio\' name=\'l\' value=\'b\'> Toluca \r\n<br> <input type=\'radio\' name=\'l\' value=\'c\'> Chivas','c'),(13,'¿En que equipo juega Ronaldinho Gaucho?\r\n<br> <input type=\'radio\' name=\'m\' value=\'a\'> Barcelona \r\n<br> <input type=\'radio\' name=\'m\' value=\'b\'> Corintias \r\n<br> <input type=\'radio\' name=\'m\' value=\'c\'> Queretaro','c');

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(22) DEFAULT NULL,
  `pass` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`id_usuario`,`nombre`,`pass`) values (1,'alex','123');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
