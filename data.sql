-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.26-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for unis
CREATE DATABASE IF NOT EXISTS `unis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `unis`;


-- Dumping structure for table unis.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `nomorhp` varchar(50) DEFAULT NULL,
  `tempattinggal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table unis.mahasiswa: ~4 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`nim`, `nama`, `fakultas`, `prodi`, `agama`, `nomorhp`, `tempattinggal`) VALUES
	(2, 'si 2 update', 'teknik update', 'teknik informatik update', 'islam update', '12123', 'asd update'),
	(21, 'OOP2', 'teknik ', '20.00', 'pa papa', '', ''),
	(12331, 'mahasiswa 12331', 'teknik', 'teknik', 'islam', '99199', 'mars'),
	(99099, 'mahasiswa 99099', '99099', '99099', 'islam', '20202', '9909922 update');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;


-- Dumping structure for table unis.matakuliah
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `dosen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

-- Dumping data for table unis.matakuliah: ~0 rows (approximately)
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` (`kode`, `nama`, `fakultas`, `jam`, `dosen`) VALUES
	(21, 'OOP2', 'Teknik', '20-00', 'pa papa update');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
