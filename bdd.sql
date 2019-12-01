-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour carpenter_brut
CREATE DATABASE IF NOT EXISTS `carpenter_brut` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `carpenter_brut`;

-- Listage de la structure de la table carpenter_brut. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table carpenter_brut.admin : ~0 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `login`, `password`) VALUES
	(1, 'admin', '$2y$10$/85O2wbMRIetd7h96DkZSeLInl1RImUoMyGY34VOmqSyIQcsPaqsm');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table carpenter_brut. message
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `firstname` char(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `ip` char(50) NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table carpenter_brut.message : ~0 rows (environ)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id`, `date`, `hour`, `email`, `name`, `firstname`, `content`, `ip`) VALUES
	(1, '2019-12-01', '11:24:32', 'gerard@winston.com', 'Winston', 'Gérard', 'Black jack gabion poop deck yo-ho-ho hempen halter main sheet shrouds. Pinnace Corsair Pirate Round topmast splice the main brace to go on account bilge rat. Brig nipperkin spike lateen sail wench jack gabion.', '127.0.0.1');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
