/*
SQLyog Ultimate v9.02 
MySQL - 5.5.27 : Database - penilaian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `matapelajaran` */

DROP TABLE IF EXISTS `matapelajaran`;

CREATE TABLE `matapelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `matapelajaran` */

insert  into `matapelajaran`(`id`,`subject`,`update_date`) values (1,'PHP','2013-07-22 19:35:20');
insert  into `matapelajaran`(`id`,`subject`,`update_date`) values (2,'Java','2013-07-22 19:35:26');
insert  into `matapelajaran`(`id`,`subject`,`update_date`) values (3,'ASP','2013-07-22 23:13:22');
insert  into `matapelajaran`(`id`,`subject`,`update_date`) values (4,'C++','2013-07-22 19:35:33');
insert  into `matapelajaran`(`id`,`subject`,`update_date`) values (5,'Jquery','2013-07-22 19:35:46');

/*Table structure for table `murid` */

DROP TABLE IF EXISTS `murid`;

CREATE TABLE `murid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `murid` */

insert  into `murid`(`id`,`name`,`address`,`update_date`) values (5,'Andy Laser','jakarta serikat','2013-07-22 23:05:12');
insert  into `murid`(`id`,`name`,`address`,`update_date`) values (6,'Dablun','Purwokerto','2013-07-22 23:05:44');
insert  into `murid`(`id`,`name`,`address`,`update_date`) values (7,'Patar','Bekasi Selatan','2013-07-22 23:44:22');
insert  into `murid`(`id`,`name`,`address`,`update_date`) values (8,'Nanang','Pluit, Jakarta','2013-07-22 23:44:58');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `murid_id` int(11) NOT NULL,
  `matapelajaran_id` int(11) NOT NULL,
  `nilai` decimal(3,2) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `nilai` */

insert  into `nilai`(`id`,`murid_id`,`matapelajaran_id`,`nilai`,`update_date`) values (1,5,1,'9.00','2013-07-22 23:42:06');
insert  into `nilai`(`id`,`murid_id`,`matapelajaran_id`,`nilai`,`update_date`) values (2,5,2,'8.00','2013-07-22 23:42:19');
insert  into `nilai`(`id`,`murid_id`,`matapelajaran_id`,`nilai`,`update_date`) values (4,8,1,'9.00','2013-07-22 23:45:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
