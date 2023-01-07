/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.19-MariaDB : Database - db_web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_web` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_web`;

/*Table structure for table `tbl_detailtransaksi` */

DROP TABLE IF EXISTS `tbl_detailtransaksi`;

CREATE TABLE `tbl_detailtransaksi` (
  `Id_Detailtrans` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Transaksi` int(11) DEFAULT NULL,
  `Kode_Invoice` varchar(25) DEFAULT NULL,
  `Harga` varchar(10) DEFAULT NULL,
  `Garansi` varchar(50) DEFAULT NULL,
  `Status_Transaksi` enum('Belum Bayar','DP','Sudah Lunas') NOT NULL,
  `Status_Servis` enum('Dibatalkan','Menunggu Sparepart','On Process','Siap Diambil','Sudah Diambil') NOT NULL,
  `Tanggal_Keluar` date DEFAULT NULL,
  `Konfirmasi` enum('Belum Konfirmasi','Sudah Konfirmasi') NOT NULL,
  PRIMARY KEY (`Id_Detailtrans`),
  KEY `tbl_detailtransaksi_ibfk_1` (`Id_Transaksi`),
  CONSTRAINT `tbl_detailtransaksi_ibfk_1` FOREIGN KEY (`Id_Transaksi`) REFERENCES `tbl_transaksi` (`Id_Transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_detailtransaksi` */

insert  into `tbl_detailtransaksi`(`Id_Detailtrans`,`Id_Transaksi`,`Kode_Invoice`,`Harga`,`Garansi`,`Status_Transaksi`,`Status_Servis`,`Tanggal_Keluar`,`Konfirmasi`) values 
(6,2,'KDI001002','650000','2 Bulan','Belum Bayar','Sudah Diambil','2023-01-07','Belum Konfirmasi'),
(7,4,'KDI001003','75000','7 Hari','Sudah Lunas','Sudah Diambil','2023-01-08','Belum Konfirmasi'),
(8,5,'KDI001004','250000','1 Bulan','Belum Bayar','Sudah Diambil','2023-01-08','Sudah Konfirmasi'),
(9,6,'KDI001005','550000','3 Bulan','Sudah Lunas','Menunggu Sparepart','2023-01-09','Sudah Konfirmasi');

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `Id_Pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Pelanggan` varchar(50) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `No_Wa` varchar(13) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`Id_Pelanggan`,`Nama_Pelanggan`,`Nama`,`No_Wa`,`Alamat`) values 
(4,'CUSTOMER LANGGANAN','DIKI','089736267287','Bandar Jaya'),
(5,'CUSTOMER UMUM','Dinda Ayuni','08958477363','Bandar Lampung'),
(6,'METROKOMPUTER','Dinda Ananda','08958477363','Jln.Makam Pahlawan Bandar Lampung'),
(7,'PUTRAKOMPUTER','Danang Rahmat','089521937647','Jln.Cik Ditiro Bandar Lampung');

/*Table structure for table `tbl_pricelist` */

DROP TABLE IF EXISTS `tbl_pricelist`;

CREATE TABLE `tbl_pricelist` (
  `Id_Pricelist` varchar(11) NOT NULL,
  `Nama_Servis` varchar(50) DEFAULT NULL,
  `Harga` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Pricelist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pricelist` */

insert  into `tbl_pricelist`(`Id_Pricelist`,`Nama_Servis`,`Harga`) values 
('PRI001','Install Ulang Windows 10','75000'),
('PRI002','Service Tuneup Laptop / Komputer','250000'),
('PRI003','Rakit Pc Gaming','150000');

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `Id_Transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `Id_User` varchar(11) DEFAULT NULL,
  `Id_Pelanggan` int(11) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL,
  `Tipe` enum('Laptop','Printer','Proyektor','PC AIO','PC Build Up','PC Rakitan','Scanner','Monitor') DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Kelengkapan` varchar(100) DEFAULT NULL,
  `Kendala` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Transaksi`),
  KEY `Id_User` (`Id_User`),
  KEY `tbl_transaksi_ibfk_3` (`Id_Pelanggan`),
  CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `tbl_user` (`Id_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_transaksi_ibfk_3` FOREIGN KEY (`Id_Pelanggan`) REFERENCES `tbl_pelanggan` (`Id_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`Id_Transaksi`,`Id_User`,`Id_Pelanggan`,`Tanggal_Masuk`,`Tipe`,`Model`,`Kelengkapan`,`Kendala`) values 
(2,'US01',4,'2023-01-06','PC Build Up','Asus X554U','Charger dan Tas','Mati Total dan Instal Ulang'),
(4,'US02',7,'2023-01-06','Laptop','Lenovo Ideapad 3','Charger dan Tas','Install  Ulang Windows 10'),
(5,'US03',6,'2023-01-06','Printer','canon Mp287','Tanpa Kabel','Printer Rusak Cartridge Hitam (810)'),
(6,'US01',5,'2023-01-07','PC AIO','Pc Asus 24aoi','Charger','Upgrade Ram 8gb ddr4 (PC)');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `Id_User` varchar(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Level` enum('Administrator','User','Teknisi') NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_User`),
  KEY `tbl_user_ibfk_1` (`Level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`Id_User`,`Username`,`Password`,`Level`,`Nama`) values 
('US01','admin','21232f297a57a5a743894a0e4a801fc3','Administrator','Dhimas Rizaldy'),
('US02','teknisi1','491b4c7ab9757487389b0fbea6a1d2ea','Teknisi','Sabda Adjie Saputra'),
('US03','teknisi2','3a4bd8b8554827fe98db41e5ac1950b6','Teknisi','Setiawan Rivaldo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
