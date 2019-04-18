/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.38-MariaDB : Database - cajero_automatico
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`cajero_automatico` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cajero_automatico`;

/*Table structure for table `transacciones` */

DROP TABLE IF EXISTS `transacciones`;

CREATE TABLE `transacciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` decimal(9,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `transacciones` */

insert  into `transacciones`(`id`,`monto`,`fecha`) values (1,'500.00','2019-04-18'),(2,'258.00','2019-04-18'),(3,'700.00','2019-04-18'),(4,'122.00','2019-04-18'),(5,'333.00','2019-04-18'),(6,'255.00','2019-04-18'),(7,'888.00','2019-04-18'),(8,'555.00','2019-04-18'),(9,'778.00','2019-04-18'),(10,'233.00','2019-04-18'),(11,'600.00','2019-04-18'),(12,'900.00','2019-04-18'),(13,'558.00','2019-04-18'),(14,'222.00','2019-04-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
