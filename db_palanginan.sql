# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.2.9-MariaDB
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2022-07-11 20:09:38
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for db_palanginan
CREATE DATABASE IF NOT EXISTS `db_palanginan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_palanginan`;


# Dumping structure for table db_palanginan.table_sumbong
CREATE TABLE IF NOT EXISTS `table_sumbong` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(50) DEFAULT '0',
  `Name` varchar(50) DEFAULT '0',
  `Email` varchar(50) DEFAULT '0',
  `Subject` varchar(500) DEFAULT '0',
  `Contact` varchar(50) DEFAULT NULL,
  `Purok` varchar(50) DEFAULT '0',
  `Barangay` varchar(50) DEFAULT '0',
  `Message` longtext,
  `File_Name` varchar(500) DEFAULT '',
  `Date` datetime DEFAULT NULL,
  `Status` varchar(11) DEFAULT '2',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

# Dumping data for table db_palanginan.table_sumbong: ~0 rows (approximately)
/*!40000 ALTER TABLE `table_sumbong` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sumbong` ENABLE KEYS */;


# Dumping structure for table db_palanginan.table_summon
CREATE TABLE IF NOT EXISTS `table_summon` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(500) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Contact` varchar(500) DEFAULT NULL,
  `Street` varchar(500) DEFAULT NULL,
  `Purok` varchar(500) DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Date_Fixed` datetime DEFAULT NULL,
  `Attempt` varchar(50) DEFAULT '1',
  `Photo` varchar(50) DEFAULT NULL,
  `Agreement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Reference` (`Reference`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

# Dumping data for table db_palanginan.table_summon: ~0 rows (approximately)
/*!40000 ALTER TABLE `table_summon` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_summon` ENABLE KEYS */;


# Dumping structure for table db_palanginan.table_user
CREATE TABLE IF NOT EXISTS `table_user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Date_Created` datetime DEFAULT NULL,
  `Last_Update` datetime DEFAULT NULL,
  `Status` varchar(50) DEFAULT 'Active',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# Dumping data for table db_palanginan.table_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `table_user` DISABLE KEYS */;
INSERT INTO `table_user` (`ID`, `Username`, `Password`, `Name`, `Email`, `Contact`, `Date_Created`, `Last_Update`, `Status`) VALUES
	(1, 'admin', 'admin', 'Barangay Palanginan', '', '09151383826', NULL, '2022-07-11 19:07:02', 'Active');
/*!40000 ALTER TABLE `table_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
