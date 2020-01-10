/*
SQLyog Enterprise v12.5.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - dbquiz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `pesanno` char(100) DEFAULT NULL,
  `pesantgl` date DEFAULT NULL,
  `pesankdbrg` char(10) DEFAULT NULL,
  `pesannmbrg` varchar(100) DEFAULT NULL,
  `pesanharga` double DEFAULT NULL,
  `pesanjml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`pesanno`,`pesantgl`,`pesankdbrg`,`pesannmbrg`,`pesanharga`,`pesanjml`) values 
('P001','2020-01-09','B001','T-SHIRT',140000,5),
('P002','2020-01-10','B002','Mouse Wireless',95000,4);

/*Table structure for table `usr` */

DROP TABLE IF EXISTS `usr`;

CREATE TABLE `usr` (
  `usrid` char(20) DEFAULT NULL,
  `usrpass` char(100) DEFAULT NULL,
  `usrnama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usr` */

insert  into `usr`(`usrid`,`usrpass`,`usrnama`) values 
('0910169','$2y$10$9m1DwQ70NffyxGNX3mYu9.D/TkRsvUgkaZzkk4/OttVd5RVlfmAmK','Novinaldi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
