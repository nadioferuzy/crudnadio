# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2021-07-12 17:50:51
# Generator: MySQL-Front 6.1  (Build 1.15)


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES ('1612502457','Nadio Feruzy','Sistem Informasi'),('200192','eve','teknik informatika');
