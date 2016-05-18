-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.19-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных lesresurs
DROP DATABASE IF EXISTS `lesresurs`;
CREATE DATABASE IF NOT EXISTS `lesresurs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lesresurs`;


-- Дамп структуры для таблица lesresurs.l_actions
DROP TABLE IF EXISTS `l_actions`;
CREATE TABLE IF NOT EXISTS `l_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `header` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_actions: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_actions` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_admins
DROP TABLE IF EXISTS `l_admins`;
CREATE TABLE IF NOT EXISTS `l_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_admins: 1 rows
/*!40000 ALTER TABLE `l_admins` DISABLE KEYS */;
INSERT INTO `l_admins` (`id`, `name`, `password`) VALUES
	(1, 'RAPOS', 'a8052bfa80a5a8d6fb9a1fd1940eddeb');
/*!40000 ALTER TABLE `l_admins` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_articles
DROP TABLE IF EXISTS `l_articles`;
CREATE TABLE IF NOT EXISTS `l_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `header` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_articles: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_articles` DISABLE KEYS */;
INSERT INTO `l_articles` (`id`, `id_image`, `header`, `text`, `date`) VALUES
	(1, 1, 'Экологические последствия лесозаготовок', 'Пиловочник - это прямые брёвна естественной влажности, пригодные для напила пиломатериалов. Пиловочником\r\nназывают бревна диаметром от 14 см до 45 см., для хвойных пород от 3,0 до 6,5 м.(ГОСТ 9463-88), для\r\nлиственных - длина от 1,0 до 6,0 м.(ГОСТ 9462-88). Простыми словами - это круглый лес, вывезенный\r\nлесовозом на пилораму, из которого можно пилить брус или доски.\r\n<br>\r\n<br>\r\nНижняя часть дерева (в основном березы) называется фанкряж - это фанерное сырье. Его разрезают на\r\nтонкий шпон толщиной 1,5-2мм. Это должна быть очень качественна древесина без сучков с диаметром больше\r\n20 см и менее 35 см. - примерно 5-6 метров из 30-ти метрового дерева. Остально идет на щепу или в баланс.\r\n<br>\r\n<br>\r\nБалансом называют верхнюю часть дерева или кривые бревна из которых не возможно выпилить\r\nкачественную прямую доску. Баланс как правило идет на целлюлозные комбинаты, или дробиться на щепу для\r\nдальнейшего использования.\r\n<br>\r\n<br>\r\nКомпания "Комплесоторг" занимается покупкой и продаже пиловочника с доставкой до вашего производства.', '10.05.2016');
/*!40000 ALTER TABLE `l_articles` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_contacts
DROP TABLE IF EXISTS `l_contacts`;
CREATE TABLE IF NOT EXISTS `l_contacts` (
  `site` int(2) NOT NULL,
  `text_form` text NOT NULL,
  `text_place` text NOT NULL,
  `text_contact` text NOT NULL,
  `keywords` text,
  `description` text,
  UNIQUE KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_contacts: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_contacts` DISABLE KEYS */;
INSERT INTO `l_contacts` (`site`, `text_form`, `text_place`, `text_contact`, `keywords`, `description`) VALUES
	(1, 'Компания «Лес Ресурс» предлагает поставки леса кругляка в больших объёмах на постоянной основе. Продажа кругляка из отборных хвойных пород древесины производится партиями любого объёма по выгодным ценам.', 'Свердловская область<br>\r\nгород Полевской<br>\r\nВосточно промышленный район<br>\r\nтерритория Северского завода ЖБИ', 'Продажа леса<br>\r\n8(34350)34590<br>\r\n<br>\r\nОтдел продажи пиломатериалов<br>\r\n(34350)35931<br>\r\n(34350)34535', NULL, NULL);
/*!40000 ALTER TABLE `l_contacts` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_feedback
DROP TABLE IF EXISTS `l_feedback`;
CREATE TABLE IF NOT EXISTS `l_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(64) NOT NULL,
  `response` text,
  `ip` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_feedback: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_feedback` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_gallery
DROP TABLE IF EXISTS `l_gallery`;
CREATE TABLE IF NOT EXISTS `l_gallery` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_gallery: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_gallery` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_images
DROP TABLE IF EXISTS `l_images`;
CREATE TABLE IF NOT EXISTS `l_images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `path` varchar(256) NOT NULL,
  `extension` varchar(5) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_images: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_images` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_mainpage
DROP TABLE IF EXISTS `l_mainpage`;
CREATE TABLE IF NOT EXISTS `l_mainpage` (
  `site` int(2) NOT NULL,
  `images` text,
  `text_activity` text NOT NULL,
  `text_production` text NOT NULL,
  `keywords` text,
  `description` text,
  UNIQUE KEY `site` (`site`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_mainpage: 0 rows
/*!40000 ALTER TABLE `l_mainpage` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_mainpage` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_productions
DROP TABLE IF EXISTS `l_productions`;
CREATE TABLE IF NOT EXISTS `l_productions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `id_image` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_productions: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_productions` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_productions` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
