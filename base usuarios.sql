/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.24-MariaDB : Database - usuarios
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`usuarios` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `usuarios`;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `usuid` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`usuid`,`correo`,`pass`) values 
(1,'erick.chinchin@istvidanueva.edu.ec','12345'),
(2,'erickchp@hotmail.com','2468'),
(3,'erick.ponce@gmail.com','13579');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;



-----------------------------------------------------------------------------
SELECT * FROM usuarios

INSERT INTO usuarios VALUES (1,'erick.chinchin@istvidanueva.edu.ec','12345')

INSERT INTO usuarios VALUES (2,'erickchp@hotmail.com','2468')

INSERT INTO usuarios VALUES (3,'erick.ponce@gmail.com','13579')


SELECT * FROM usuarios  WHERE correo = 'erick.chinchin@istvidanueva.edu.ec'&& pass =123;

TRUNCATE TABLE usuarios
