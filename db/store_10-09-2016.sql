-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for store
DROP DATABASE IF EXISTS `store`;
CREATE DATABASE IF NOT EXISTS `store` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `store`;


-- Dumping structure for table store.addresses
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id_addr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cli_id` int(10) unsigned DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `state` varchar(64) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postal` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_addr`),
  KEY `cli_id` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table store.addresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;


-- Dumping structure for table store.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_cat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cat`),
  KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table store.category: ~5 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_cat`, `url`, `name`) VALUES
	(1, 'pc-ta', 'PC-ta'),
	(2, 'monitors', 'Monitors'),
	(3, 'hdd', 'HDD'),
	(4, 'keyboards', 'Keyboards'),
	(5, 'mice', 'Mice');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table store.clients
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `regg` tinyint(3) unsigned DEFAULT '0',
  `pass` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Dumping data for table store.clients: ~3 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`cli_id`, `name`, `phone`, `mail`, `regg`, `pass`) VALUES
	(21, 'test', '1234567', 'test@t.t', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
	(23, 'Bat Svetko', '124124', 's@s.s', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
	(24, 'd', '1234567', 'd@d.d', 0, '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


-- Dumping structure for table store.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id_ord` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_addr` int(10) unsigned DEFAULT NULL,
  `amount` float(9,2) DEFAULT NULL,
  `payment_type` tinyint(3) unsigned DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT '0',
  `vreme` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ord`),
  KEY `id_addr` (`id_addr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table store.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table store.order_data
DROP TABLE IF EXISTS `order_data`;
CREATE TABLE IF NOT EXISTS `order_data` (
  `id_od` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ord` int(10) unsigned DEFAULT NULL,
  `id_prod` int(10) unsigned DEFAULT NULL,
  `qty` int(10) unsigned DEFAULT NULL,
  `price` float(9,2) DEFAULT NULL,
  `price_2` float(9,2) DEFAULT NULL,
  PRIMARY KEY (`id_od`),
  KEY `id_ord` (`id_ord`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table store.order_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_data` ENABLE KEYS */;


-- Dumping structure for table store.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id_prod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `proizvoditel` varchar(255) DEFAULT NULL,
  `price` float(9,2) DEFAULT NULL,
  `price_2` float(9,2) DEFAULT NULL,
  `id_cat` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table store.products: ~3 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id_prod`, `url`, `name`, `opis`, `proizvoditel`, `price`, `price_2`, `id_cat`) VALUES
	(1, 'imb', 'IMB', 'laptop', NULL, 999.90, NULL, 1),
	(2, 'apple', 'Apple', 'shtaiga', NULL, 666.66, NULL, 1),
	(3, 'lenovo', 'Lenovo', 'dyrvo', NULL, 777.66, NULL, 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table store.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(32) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `role` char(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table store.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
