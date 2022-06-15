-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Dumping structure for table test.abc
CREATE TABLE IF NOT EXISTS `abc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ACTION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table test.abc: ~5 rows (approximately)
/*!40000 ALTER TABLE `abc` DISABLE KEYS */;
REPLACE INTO `abc` (`id`, `ACTION`) VALUES
	(1, 'NEW PRODUCT ADDED IN PRODUCT TABLE'),
	(2, 'NEW PRODUCT ADDED IN PRODUCT TABLE'),
	(3, 'NEW PRODUCT ADDED IN PRODUCT TABLE'),
	(4, 'NEW PRODUCT ADDED IN PRODUCT TABLE'),
	(5, 'NEW PRODUCT ADDED IN PRODUCT TABLE');
/*!40000 ALTER TABLE `abc` ENABLE KEYS */;

-- Dumping structure for table test.department
CREATE TABLE IF NOT EXISTS `department` (
  `dpt_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dpt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table test.department: ~4 rows (approximately)
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
REPLACE INTO `department` (`dpt_id`, `department_name`) VALUES
	(1, 'sales'),
	(2, 'hr'),
	(3, 'development'),
	(4, 'tester');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;

-- Dumping structure for table test.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `dpt_id` int(11) DEFAULT NULL,
  `emp_salary` int(11) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.employee: ~8 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
REPLACE INTO `employee` (`emp_id`, `emp_name`, `dpt_id`, `emp_salary`, `department`) VALUES
	(1, 'heramb', 3, 30000, 'dev'),
	(2, 'shefali', 2, 50000, 'hr'),
	(3, 'raj', 4, 20000, 'hr'),
	(4, 'yogesh', 4, 20000, 'tester'),
	(5, 'anu', 2, 45000, 'tester'),
	(6, 'amit', 3, 60000, 'dev'),
	(7, 'harsh', 1, 40000, 'dev'),
	(8, 'sana', 1, 40000, 'sales');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

-- Dumping structure for procedure test.get_products
DELIMITER //
CREATE PROCEDURE `get_products`()
BEGIN
SELECT * FROM product WHERE id=1;END//
DELIMITER ;

-- Dumping structure for procedure test.get_products_by_id
DELIMITER //
CREATE PROCEDURE `get_products_by_id`(
	IN `a` INT
)
BEGIN
SELECT * FROM product WHERE id=a;END//
DELIMITER ;

-- Dumping structure for procedure test.get_product_by_id_and_title
DELIMITER //
CREATE PROCEDURE `get_product_by_id_and_title`(IN a INT(10) ,IN b VARCHAR(50))
BEGIN
SELECT * FROM product WHERE id=a AND title=b;end//
DELIMITER ;

-- Dumping structure for table test.global_history
CREATE TABLE IF NOT EXISTS `global_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) NOT NULL DEFAULT '',
  `action` varchar(50) NOT NULL DEFAULT '',
  `dt_datetime` datetime NOT NULL,
  `quote_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `premium_amount` int(100) NOT NULL,
  `proposal_id` int(100) NOT NULL,
  `proposal_details` varchar(50) NOT NULL DEFAULT '',
  `pay_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Dumping data for table test.global_history: ~45 rows (approximately)
/*!40000 ALTER TABLE `global_history` DISABLE KEYS */;
REPLACE INTO `global_history` (`id`, `table_name`, `action`, `dt_datetime`, `quote_id`, `name`, `premium_amount`, `proposal_id`, `proposal_details`, `pay_id`, `amount`) VALUES
	(1, 'quote', 'delete', '2019-10-15 13:12:17', 12, 'GIC', 444, 0, '', 0, 0),
	(2, 'quote', 'insert', '2019-10-15 13:13:03', 12, 'GODIGIT', 122, 0, '', 0, 0),
	(3, 'quote', 'update', '2019-10-15 13:13:20', 12, 'GODIGIT', 1223, 0, '', 0, 0),
	(4, 'proposal', 'delete', '2019-10-15 13:13:37', 2, '', 0, 6, 'ray', 0, 0),
	(5, 'proposal', 'insert', '2019-10-15 13:13:58', 2, '', 0, 7, 'HIII', 0, 0),
	(6, 'proposal', 'update', '2019-10-15 13:14:04', 7, '', 0, 4, 'OOO', 0, 0),
	(7, 'payment', 'delete', '2019-10-15 13:14:20', 2, '', 0, 2, '', 2, 144),
	(8, 'payment', 'insert', '2019-10-15 13:14:36', 4, '', 0, 3, '', 2, 8000),
	(9, 'payment', 'update', '2019-10-15 13:14:46', 4, '', 0, 3, '', 2, 17000),
	(10, 'quote', 'insert', '2019-10-15 15:30:09', 9, 'gg', 12, 0, '', 0, 0),
	(11, 'quote', 'insert', '2019-10-15 15:35:19', 13, 'pp', 12, 0, '', 0, 0),
	(12, 'proposal', 'insert', '2019-10-15 15:45:16', 1, '', 0, 9, 'asas', 0, 0),
	(13, 'payment', 'insert', '2019-10-15 15:54:18', 1, '', 0, 3, '', 4, 5000),
	(14, 'quote', 'update', '2019-10-15 16:39:34', 1, 'godigit', 1000, 0, '', 0, 0),
	(15, 'quote', 'update', '2019-10-15 16:40:05', 1, 'godigit', 1078, 0, '', 0, 0),
	(16, 'quote', 'update', '2019-10-15 16:44:21', 8, 'ttt', 5, 0, '', 0, 0),
	(17, 'quote', 'delete', '2019-10-15 16:44:36', 10, 'ppp', 4, 0, '', 0, 0),
	(18, 'quote', 'update', '2019-10-15 18:09:05', 1, 'godigit', 107, 0, '', 0, 0),
	(19, 'proposal', 'update', '2019-10-15 18:12:43', 4, '', 0, 2, 'oojkh', 0, 0),
	(20, 'proposal', 'insert', '2019-10-15 18:13:13', 9, '', 0, 10, 'asas', 0, 0),
	(21, 'payment', 'insert', '2019-10-15 18:18:14', 1, '', 0, 2, '', 5, 5000),
	(22, 'payment', 'update', '2019-10-15 18:23:03', 1, '', 0, 2, '', 5, 5004),
	(23, 'proposal', 'delete', '2019-10-15 18:28:48', 9, '', 0, 10, 'asas', 0, 0),
	(24, 'proposal', 'delete', '2019-10-15 18:28:53', 1, '', 0, 9, 'asas', 0, 0),
	(25, 'payment', 'delete', '2019-10-15 18:29:11', 1, '', 0, 2, '', 5, 5004),
	(26, 'payment', 'update', '2019-10-15 18:29:25', 1, '', 0, 3, '', 4, 5044),
	(27, 'payment', 'delete', '2019-10-15 18:29:27', 1, '', 0, 3, '', 4, 5044),
	(28, 'payment', 'update', '2019-10-15 18:35:16', 4, '', 0, 3, '', 2, 17004),
	(29, 'payment', 'update', '2019-10-15 18:35:23', 4, '', 0, 3, '', 2, 17004),
	(30, 'quote', 'delete', '2019-10-15 18:43:10', 13, 'pp', 12, 0, '', 0, 0),
	(31, 'quote', 'delete', '2019-10-15 18:44:12', 12, 'GODIGIT', 1223, 0, '', 0, 0),
	(32, 'quote', 'update', '2019-10-15 18:44:21', 11, 'uu', 1551, 0, '', 0, 0),
	(33, 'quote', 'insert', '2019-10-15 18:44:35', 14, 'okay', 12, 0, '', 0, 0),
	(34, 'proposal', 'delete', '2019-10-15 18:44:42', 1, '', 0, 8, 'hh', 0, 0),
	(35, 'quote', 'insert', '2019-10-15 18:44:59', 15, 'gg', 1000, 0, '', 0, 0),
	(36, 'proposal', 'delete', '2019-10-15 18:45:07', 2, '', 0, 7, 'HIII', 0, 0),
	(37, 'proposal', 'delete', '2019-10-15 18:45:08', 2, '', 0, 5, 'hh', 0, 0),
	(38, 'proposal', 'update', '2019-10-15 18:45:20', 8, '', 0, 4, 'OpO', 0, 0),
	(39, 'proposal', 'insert', '2019-10-15 18:45:36', 9, '', 0, 11, 'abci', 0, 0),
	(40, 'payment', 'delete', '2019-10-15 18:45:49', 4, '', 0, 3, '', 2, 17004),
	(41, 'payment', 'update', '2019-10-15 18:45:56', 1, '', 0, 1, '', 1, 1204),
	(42, 'payment', 'insert', '2019-10-15 18:46:09', 9, '', 0, 2, '', 6, 12007),
	(43, 'payment', 'delete', '2019-10-15 18:46:12', 9, '', 0, 2, '', 6, 12007),
	(44, 'payment', 'insert', '2019-10-15 18:48:11', 1, '', 0, 2, '', 8, 8888),
	(45, 'payment', 'update', '2019-10-15 18:48:25', 1, '', 0, 2, '', 8, 888),
	(46, 'quote', 'update', '2019-10-16 10:05:23', 1, 'godigit', 107, 0, '', 0, 0),
	(47, 'quote', 'update', '2019-10-16 10:06:48', 2, 'gic', 1000, 0, '', 0, 0),
	(48, 'proposal', 'delete', '2019-10-16 10:07:05', 9, '', 0, 11, 'abci', 0, 0),
	(49, 'payment', 'insert', '2019-10-16 10:07:33', 9, '', 0, 2, '', 9, 1000),
	(50, 'quote', 'insert', '2019-10-16 17:36:24', 16, 'pp', 111, 0, '', 0, 0),
	(51, 'quote', 'delete', '2019-10-16 17:36:43', 16, 'pp', 111, 0, '', 0, 0),
	(52, 'quote', 'update', '2019-10-16 17:37:07', 2, 'gic', 1007, 0, '', 0, 0),
	(53, 'payment', 'delete', '2019-10-16 17:37:20', 9, '', 0, 2, '', 9, 1000),
	(54, 'payment', 'delete', '2019-10-16 17:37:21', 1, '', 0, 2, '', 8, 888),
	(55, 'payment', 'update', '2019-10-16 17:37:26', 1, '', 0, 1, '', 1, 120444),
	(56, 'payment', 'insert', '2019-10-17 12:28:47', 1, '', 0, 3, '', 2, 55),
	(57, 'proposal', 'delete', '2019-10-17 12:36:21', 8, '', 0, 4, 'OpO', 0, 0),
	(58, 'quote', 'insert', '2019-10-18 10:10:11', 16, 'bajaj', 1000, 0, '', 0, 0),
	(59, 'quote', 'update', '2019-10-18 10:10:20', 16, 'bajaj', 1001, 0, '', 0, 0),
	(60, 'quote', 'delete', '2019-10-18 10:10:23', 16, 'bajaj', 1001, 0, '', 0, 0);
/*!40000 ALTER TABLE `global_history` ENABLE KEYS */;

-- Dumping structure for table test.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 if menu is root level or menuid if this is child on any menu',
  `link` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0 for disabled menu or 1 for enabled menu',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table test.menu: ~30 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
REPLACE INTO `menu` (`menu_id`, `menu_name`, `parent_id`, `link`, `status`) VALUES
	(1, 'Home', 0, '#home', '1'),
	(2, 'Web development', 0, '#web-dev', '1'),
	(3, 'WordPress Development', 0, '#wp-dev', '1'),
	(4, 'About w3school.info', 0, '#w3school-info', '1'),
	(5, 'AWS ADMIN', 2, '#', '1'),
	(6, 'PHP', 2, '#', '1'),
	(7, 'Javascript', 2, '#', '1'),
	(8, 'Elastic Ip', 5, '#electic-ip', '1'),
	(9, 'Load balacing', 5, '#load-balancing', '1'),
	(10, 'Cluster Indexes', 5, '#cluster-indexes', '1'),
	(11, 'Rds Db setup', 5, '#rds-db', '1'),
	(12, 'Framework Development', 6, '#', '1'),
	(13, 'Ecommerce Development', 6, '#', '1'),
	(14, 'Cms Development', 6, '#', '1'),
	(21, 'News & Media', 6, '#', '1'),
	(22, 'Codeigniter', 12, '#codeigniter', '1'),
	(23, 'Cake', 12, '#cake-dev', '1'),
	(24, 'Opencart', 13, '#opencart', '1'),
	(25, 'Magento', 13, '#magento', '1'),
	(26, 'Wordpress', 14, '#wordpress-dev', '1'),
	(27, 'Joomla', 14, '#joomla-dev', '1'),
	(28, 'Drupal', 14, '#drupal-dev', '1'),
	(29, 'Ajax', 7, '#ajax-dev', '1'),
	(30, 'Jquery', 7, '#jquery-dev', '1'),
	(31, 'Themes', 3, '#theme-dev', '1'),
	(32, 'Plugins', 3, '#plugin-dev', '1'),
	(33, 'Custom Post Types', 3, '#', '1'),
	(34, 'Options', 3, '#wp-options', '1'),
	(35, 'Testimonials', 33, '#testimonial-dev', '1'),
	(36, 'Portfolios', 33, '#portfolio-dev', '1');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table test.payment
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `quote_id` int(10) NOT NULL,
  `proposal_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `q` (`quote_id`),
  KEY `pro` (`proposal_id`),
  CONSTRAINT `pro` FOREIGN KEY (`proposal_id`) REFERENCES `proposal` (`proposal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table test.payment: ~1 rows (approximately)
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
REPLACE INTO `payment` (`pay_id`, `quote_id`, `proposal_id`, `amount`) VALUES
	(1, 1, 1, 120444),
	(2, 1, 3, 55);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;

-- Dumping structure for table test.payment_history
CREATE TABLE IF NOT EXISTS `payment_history` (
  `action` varchar(10) DEFAULT 'insert',
  `revision` int(6) NOT NULL AUTO_INCREMENT,
  `dt_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_id` int(11) NOT NULL,
  `quote_id` int(10) NOT NULL,
  `proposal_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`revision`),
  KEY `q` (`quote_id`),
  KEY `pro` (`proposal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table test.payment_history: ~2 rows (approximately)
/*!40000 ALTER TABLE `payment_history` DISABLE KEYS */;
REPLACE INTO `payment_history` (`action`, `revision`, `dt_datetime`, `pay_id`, `quote_id`, `proposal_id`, `amount`) VALUES
	('insert', 1, '2019-10-14 18:34:12', 2, 2, 1, 2000),
	('update', 2, '2019-10-14 18:37:02', 1, 1, 1, 12000),
	('delete', 3, '2019-10-14 18:39:33', 2, 2, 1, 2000),
	('insert', 4, '2019-10-15 11:39:59', 2, 2, 2, 144);
/*!40000 ALTER TABLE `payment_history` ENABLE KEYS */;

-- Dumping structure for table test.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table test.product: ~8 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`id`, `title`, `description`, `created_at`) VALUES
	(1, 'samsung s10', 'punch hole display', '2019-10-04 09:45:00'),
	(2, 'iphone Xs max', 'super retina display', '2019-10-16 12:01:26'),
	(3, 'redmi k20', 'snapdragon 730', '2019-10-16 12:01:53'),
	(4, 'POCO F1', 'Snapdragon 845 processor', '2019-10-16 12:02:07'),
	(5, 'samsung a50', 'infinity u display', '2019-10-16 12:02:53'),
	(6, 'REDMI NOTE 8', 'quad camera', '2019-10-17 02:54:52'),
	(7, 'samsung a50', 'okk', '2019-10-17 02:55:47'),
	(9, 'SAMSUNG', 'M32', '2022-05-10 03:05:28');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table test.proposal
CREATE TABLE IF NOT EXISTS `proposal` (
  `proposal_id` int(10) NOT NULL AUTO_INCREMENT,
  `quote_id` int(10) NOT NULL DEFAULT '0',
  `proposal_details` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`proposal_id`),
  KEY `quote_id` (`quote_id`),
  CONSTRAINT `quote_id` FOREIGN KEY (`quote_id`) REFERENCES `quote` (`quote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table test.proposal: ~4 rows (approximately)
/*!40000 ALTER TABLE `proposal` DISABLE KEYS */;
REPLACE INTO `proposal` (`proposal_id`, `quote_id`, `proposal_details`) VALUES
	(1, 1, 'abc'),
	(2, 4, 'oojkh'),
	(3, 6, '11');
/*!40000 ALTER TABLE `proposal` ENABLE KEYS */;

-- Dumping structure for table test.proposal_history
CREATE TABLE IF NOT EXISTS `proposal_history` (
  `action` varchar(10) DEFAULT 'insert',
  `revision` int(6) NOT NULL AUTO_INCREMENT,
  `dt_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proposal_id` int(11) NOT NULL,
  `quote_id` int(10) NOT NULL DEFAULT '0',
  `proposal_details` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`revision`),
  KEY `quote_id` (`quote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table test.proposal_history: ~6 rows (approximately)
/*!40000 ALTER TABLE `proposal_history` DISABLE KEYS */;
REPLACE INTO `proposal_history` (`action`, `revision`, `dt_datetime`, `proposal_id`, `quote_id`, `proposal_details`) VALUES
	('insert', 1, '2019-10-14 18:12:42', 2, 2, 'klj'),
	('update', 2, '2019-10-14 18:16:15', 2, 7, 'klj'),
	('insert', 3, '2019-10-14 18:20:28', 2, 4, 'ddd'),
	('delete', 5, '2019-10-14 18:21:18', 2, 4, 'ddd'),
	('insert', 6, '2019-10-15 11:35:03', 2, 4, 'oo');
/*!40000 ALTER TABLE `proposal_history` ENABLE KEYS */;

-- Dumping structure for table test.quote
CREATE TABLE IF NOT EXISTS `quote` (
  `quote_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `premium_amount` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table test.quote: ~11 rows (approximately)
/*!40000 ALTER TABLE `quote` DISABLE KEYS */;
REPLACE INTO `quote` (`quote_id`, `name`, `premium_amount`) VALUES
	(1, 'godigit', 107),
	(2, 'gic', 1007),
	(4, 'eee', 1244),
	(5, 'yyy', 0),
	(6, '0kkkk', 0),
	(7, 'iii', 11),
	(8, 'ttt', 5),
	(9, 'gg', 12),
	(11, 'uu', 1551),
	(14, 'okay', 12),
	(15, 'gg', 1000);
/*!40000 ALTER TABLE `quote` ENABLE KEYS */;

-- Dumping structure for table test.quote_history
CREATE TABLE IF NOT EXISTS `quote_history` (
  `action` varchar(10) DEFAULT 'insert',
  `revision` int(6) NOT NULL AUTO_INCREMENT,
  `dt_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quote_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `premium_amount` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`revision`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table test.quote_history: ~8 rows (approximately)
/*!40000 ALTER TABLE `quote_history` DISABLE KEYS */;
REPLACE INTO `quote_history` (`action`, `revision`, `dt_datetime`, `quote_id`, `name`, `premium_amount`) VALUES
	('insert', 1, '2019-10-14 17:58:16', 6, '0kkkk', 0),
	('update', 2, '2019-10-14 18:01:44', 4, 'eee', 1244),
	('insert', 3, '2019-10-14 18:02:57', 7, 'ttt', 444),
	('delete', 4, '2019-10-14 18:03:06', 3, 'gg', 122),
	('insert', 5, '2019-10-15 11:25:29', 8, 'GGG', 12),
	('update', 6, '2019-10-15 11:29:30', 7, 'ttt', 4),
	('update', 7, '2019-10-15 11:30:50', 7, 'ttt', 44),
	('delete', 8, '2019-10-15 11:32:01', 8, 'GGG', 12),
	('delete', 9, '2019-10-15 11:43:02', 7, 'ttt', 44),
	('insert', 10, '2019-10-15 11:48:39', 7, 'iii', 11);
/*!40000 ALTER TABLE `quote_history` ENABLE KEYS */;

-- Dumping structure for procedure test.usp_get_products
DELIMITER //
CREATE PROCEDURE `usp_get_products`()
BEGIN
select * from product;
END//
DELIMITER ;

-- Dumping structure for table test.xyz
CREATE TABLE IF NOT EXISTS `xyz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.xyz: ~0 rows (approximately)
/*!40000 ALTER TABLE `xyz` DISABLE KEYS */;
/*!40000 ALTER TABLE `xyz` ENABLE KEYS */;

-- Dumping structure for trigger test.abc
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.abc AFTER INSERT ON test.product FOR EACH ROW
INSERT INTO test.abc(ACTION) VALUES('NEW PRODUCT ADDED IN PRODUCT TABLE')//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.payment_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.payment_delete BEFORE DELETE ON test.payment FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,pay_id,quote_id,proposal_id,amount) SELECT 'payment','delete',NOW(),d.*
FROM test.payment AS d WHERE d.pay_id=OLD.pay_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.payment_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.payment_update AFTER UPDATE ON test.payment FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,pay_id,quote_id,proposal_id,amount) SELECT 'payment','update',NOW(),d.*
FROM test.payment AS d WHERE d.pay_id=NEW.pay_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.pay_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.pay_insert AFTER INSERT ON test.payment FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,pay_id,quote_id,proposal_id,amount) SELECT 'payment','insert',NOW(),d.*
FROM test.payment AS d WHERE d.pay_id=NEW.pay_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.proposal_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.proposal_delete BEFORE DELETE ON test.proposal FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,proposal_id,quote_id,proposal_details) SELECT 'proposal','delete',NOW(),d.*
FROM test.proposal AS d WHERE d.proposal_id=OLD.proposal_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.proposal_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.proposal_update AFTER UPDATE ON test.proposal FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,proposal_id,quote_id,proposal_details) SELECT 'proposal','update',NOW(),di.*
FROM test.proposal AS di WHERE di.proposal_id=NEW.proposal_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.pro_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.pro_insert AFTER INSERT ON test.proposal FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,proposal_id,quote_id,proposal_details) SELECT 'proposal','insert',NOW(),d.*
FROM test.proposal AS d WHERE d.proposal_id=NEW.proposal_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.quote_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.quote_delete BEFORE DELETE ON test.quote FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,quote_id,NAME,premium_amount) SELECT 'quote','delete',NOW(),d.*
FROM test.quote AS d WHERE d.quote_id=OLD.quote_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.quote_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.quote_update AFTER UPDATE ON test.quote FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,quote_id,NAME,premium_amount) SELECT 'quote','update',NOW(),d.*
FROM test.quote AS d WHERE d.quote_id=NEW.quote_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger test.q_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER test.q_insert AFTER INSERT ON test.quote FOR EACH ROW
INSERT INTO test.global_history(table_name,action,dt_datetime,quote_id,name,premium_amount) SELECT 'quote','insert',NOW(),d.*
FROM test.quote AS d WHERE d.quote_id=NEW.quote_id//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
