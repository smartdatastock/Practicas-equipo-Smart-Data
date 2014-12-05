/*
SQLyog Ultimate v11.42 (64 bit)
MySQL - 5.1.41 : Database - control
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`control` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `control`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `alumno_grupo` */

insert  into `alumno_grupo`(`Id`,`id_alumno`,`id_grupo`) values (2,10,3),(3,12,2);

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Avatar` varchar(30) DEFAULT NULL,
  `Orden` varchar(30) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `grupo` */

insert  into `grupo`(`Id`,`Nombre`,`Avatar`,`Orden`,`Estatus`) values (1,'TIC-71',NULL,'1',1),(2,'TIC-72',NULL,'2',1),(3,'TIC-73',NULL,'3',1);

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`Id`,`id_materia`,`id_maestro`) values (1,3,7),(4,4,7),(5,1,9),(6,4,8),(7,2,8);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Avatar` varchar(30) DEFAULT NULL,
  `Orden` varchar(30) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `materia` */

insert  into `materia`(`Id`,`Nombre`,`Avatar`,`Orden`,`Estatus`) values (1,'Programacion',NULL,NULL,1),(2,'Base de Datos',NULL,NULL,1),(3,'Redes',NULL,NULL,1),(4,'Sistemas Operativos',NULL,NULL,1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apat` varchar(30) DEFAULT NULL,
  `Amat` varchar(30) DEFAULT NULL,
  `Nivel` int(11) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  `Psw` varchar(30) DEFAULT NULL,
  `User` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`Id`,`Nombre`,`Apat`,`Amat`,`Nivel`,`Estatus`,`Psw`,`User`) values (1,'..','.Mucino.','..',1,1,'123','aaa'),(6,'.Pablo.','.Rivera.','.Lopez.',1,1,'123','zzz'),(7,'Joel','Herrera','Cruz',2,1,'123','abc'),(8,'Manuel','Robles','Lara',2,1,'123','abcd'),(9,'Raul','Aloso','Perez',2,1,'123','pelos'),(10,'pepe','lopez','lara',3,1,NULL,NULL),(11,'pablito','lara','ramos',3,1,NULL,NULL),(12,'gerardo','ortiz','lara',3,1,NULL,NULL),(13,'pedrito','pajaro','martinez',3,1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
