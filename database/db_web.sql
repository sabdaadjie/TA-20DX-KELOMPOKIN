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

/*Table structure for table `tbl_jabatan` */

DROP TABLE IF EXISTS `tbl_jabatan`;

CREATE TABLE `tbl_jabatan` (
  `Id_Jabatan` varchar(11) NOT NULL,
  `Nama_Jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_jabatan` */

insert  into `tbl_jabatan`(`Id_Jabatan`,`Nama_Jabatan`) values 
('J001','Administrator'),
('J002','Teknisi'),
('J003','Kasir'),
('J004','Owner');

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `Id_Pelanggan` varchar(11) NOT NULL,
  `Nama_Pelanggan` varchar(50) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `No_Wa` varchar(13) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`Id_Pelanggan`,`Nama_Pelanggan`,`Nama`,`No_Wa`,`Alamat`) values 
('P001','CUSTOMER','Dinda Ananda','089521937388','Bandar Lampung'),
('P002','METROKOMPUTER','Diki Chandra','089521937388','Kalianda');

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
('PRI001','Install Ulang Windows 10','50000'),
('PRI002','Service Tuneup Laptop / Komputer','250000'),
('PRI003','Rakit Pc Gaming','150000');

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `Id_Transaksi` varchar(11) NOT NULL,
  `Kode_Invoice` varchar(11) DEFAULT NULL,
  `Id_User` varchar(11) DEFAULT NULL,
  `Id_Pelanggan` varchar(11) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL,
  `Tipe` varchar(50) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Kelengkapan` varchar(100) DEFAULT NULL,
  `Kendala` varchar(100) DEFAULT NULL,
  `Harga` varchar(10) DEFAULT NULL,
  `Garansi` varchar(50) DEFAULT NULL,
  `Status_Transaksi` enum('Belum Dibayar','DP','Sudah Lunas') DEFAULT NULL,
  `Status` enum('On Process','Menunggu Sparepart','Siap Diambil','Sudah Diambil','Dibatalkan') DEFAULT NULL,
  `Tanggal_Keluar` date DEFAULT NULL,
  `Konfirmasi` enum('Belum Konfirmasi','Sudah Konfirmasi') DEFAULT NULL,
  PRIMARY KEY (`Id_Transaksi`),
  KEY `Id_Pelanggan` (`Id_Pelanggan`),
  KEY `Id_User` (`Id_User`),
  CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`Id_Pelanggan`) REFERENCES `tbl_pelanggan` (`Id_Pelanggan`),
  CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `tbl_user` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`Id_Transaksi`,`Kode_Invoice`,`Id_User`,`Id_Pelanggan`,`Tanggal_Masuk`,`Tipe`,`Model`,`Kelengkapan`,`Kendala`,`Harga`,`Garansi`,`Status_Transaksi`,`Status`,`Tanggal_Keluar`,`Konfirmasi`) values 
('TRS001','09032020123','US001','P001','2022-12-17','Laptop','Asus X554U','Charger dan Tas','Instal Ualng Windows 10','150000','2 Bulan','','',NULL,'Sudah Konfirmasi');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `Id_User` varchar(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL,
  `Id_Jabatan` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`Id_User`),
  KEY `Id_Jabatan` (`Id_Jabatan`),
  CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`Id_Jabatan`) REFERENCES `tbl_jabatan` (`Id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`Id_User`,`UserName`,`Password`,`Id_Jabatan`) values 
('US001','DhimasRizaldy','admin','J001'),
('US002','admin','dimas123','J002');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
