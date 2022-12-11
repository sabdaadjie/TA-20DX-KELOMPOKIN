/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_toko
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_toko` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_toko`;

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `Id_Produk` varchar(6) NOT NULL,
  `Kategori` enum('Laptop','Ram','Hardisk','Speaker','Keyboard') NOT NULL,
  `Nama_Produk` varchar(255) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Stok_Produk` int(20) NOT NULL,
  `Spesifikasi` text NOT NULL,
  `Foto_Produk` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`Id_Produk`,`Kategori`,`Nama_Produk`,`Harga`,`Stok_Produk`,`Spesifikasi`,`Foto_Produk`) values 
('P001','Hardisk','Hardisk Seagate 500 GB','500000',10,'Hardisk Kualitas Terbaik','Hardisk.png'),
('P002','Laptop','Laptop Asus X441SA','3500000',5,'Laptop Terbaik','Laptop Asus.png'),
('P003','Ram','Ram Vgen 8 GB DDR4','450000',20,'Ram Laptop Original','Ram.png'),
('P004','Speaker','Speaker Simbada CST-6000','650000',10,'Speaker Original Simbada','Speaker.png'),
('P005','Keyboard','Keybloard Logitec B100','125000',10,'Keybaord Logitech B100 Kualitas Terbaik','Keyboard Logitec.png'),
('P006','Laptop','Acer Swift 5','5000000',10,'Laptop Acer Swift 5 Kualitas Terbaik','acer swift 5.png'),
('P007','Laptop','Lenovo Slim 5 Pro','6500000',15,'Lenovo Slim 5 Pro Kualitas Terbaik','lenovo slim 5 pro.png'),
('P008','Hardisk','hardisk WD Blue 1 TB','850000',20,'Hardisk WD Blue 1 TB Kualitas Terbaik','HDD WdBlue 1tb.png'),
('P009','Ram','Ram Corsair 8 GB DDR4','650000',17,'Ram Corsair 8 GB DDR4 Kualitas Terbaik','Ram Corsair 8gb.png'),
('P010','Speaker','Speaker Fantech F100','250000',10,'Speaker Fantech F100 Kualitas Terbaik','Speaker Fantech F100.png');

/*Table structure for table `tbl_servis` */

DROP TABLE IF EXISTS `tbl_servis`;

CREATE TABLE `tbl_servis` (
  `Id_Servis` varchar(6) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kategori` enum('Laptop','Komputer','Printer','Proyektor') NOT NULL,
  `Tipe` varchar(100) NOT NULL,
  `Kendala` text NOT NULL,
  `Status` enum('Sedang Proses','Selesai','') NOT NULL,
  `Biaya` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Servis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_servis` */

insert  into `tbl_servis`(`Id_Servis`,`Nama`,`Kategori`,`Tipe`,`Kendala`,`Status`,`Biaya`) values 
('NS001','Dhimas Rizaldy','Laptop','Asus Rog AF550','Instal Ulang Windows 10','Sedang Proses','75000'),
('NS002','Sabda Adjie Saputra','Printer','Epson L3110','Paper Jam','Sedang Proses','50000'),
('NS003','Ridho','Komputer','PC BuildUp Hp','Tune Up Komputer','Selesai','150000'),
('NS004','Faldo','Proyektor','Epson W-B5','Servis PowerSupply','Sedang Proses','150000');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `Id_User` varchar(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` enum('Admin','User') NOT NULL,
  `Nama` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`Id_User`,`Username`,`Password`,`Level`,`Nama`) values 
('US001','Admin','admin123','Admin','Dimas'),
('US002','User1','user1','User','User A'),
('US003','User2','user2','User','User B'),
('US004','User3','user3','User','User C');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
