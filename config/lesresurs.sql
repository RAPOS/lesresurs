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
	(1, 'RAPOS', '49ca5bdc41b0ad3b828258875030e223');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_gallery: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_gallery` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_images
DROP TABLE IF EXISTS `l_images`;
CREATE TABLE IF NOT EXISTS `l_images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `path` varchar(256) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_images: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `l_images` DISABLE KEYS */;
INSERT INTO `l_images` (`id_image`, `name`, `path`, `extension`, `status`) VALUES
	(1, '97f9218c10810b108a6f93b5b4d5d395', 'files/images/1/97f9218c10810b108a6f93b5b4d5d395.jpg', 'jpg', b'0'),
	(2, '492c40f197ac0cf169d0380bed3d0614', 'files/images/2/492c40f197ac0cf169d0380bed3d0614.jpg', 'jpg', b'0'),
	(3, '61f1a5efb1d0d82bc93d0c6487be37e3', 'files/images/3/61f1a5efb1d0d82bc93d0c6487be37e3.jpg', 'jpg', b'0'),
	(4, 'ae509b7dc9f6cd3a77d376497feaa9c9', 'files/images/4/ae509b7dc9f6cd3a77d376497feaa9c9.jpg', 'jpg', b'0'),
	(5, 'd3c669381ef29d88d045c53035eeaada', 'files/images/5/d3c669381ef29d88d045c53035eeaada.jpg', 'jpg', b'0'),
	(6, '322739f65975501ec7909da019a69a5f', 'files/images/6/322739f65975501ec7909da019a69a5f.jpg', 'jpg', b'0'),
	(7, '5565c163ccf08ddf1e50056c5cc3c687', 'files/images/7/5565c163ccf08ddf1e50056c5cc3c687.jpg', 'jpg', b'0'),
	(8, '04da127422689c9480800cd7024a05fa', 'files/images/8/04da127422689c9480800cd7024a05fa.jpg', 'jpg', b'0'),
	(9, 'f365540a3dd4fc9f96b5bdd43d1e1ac6', 'files/images/9/f365540a3dd4fc9f96b5bdd43d1e1ac6.jpg', 'jpg', b'0'),
	(10, '8e9233aff6b406b95a0c52494da17f66', 'files/images/10/8e9233aff6b406b95a0c52494da17f66.jpg', 'jpg', b'0'),
	(11, 'ada844d0672ccdbe32c3480c0ecaf289', 'files/images/11/ada844d0672ccdbe32c3480c0ecaf289.jpg', 'jpg', b'0'),
	(12, 'e9b330d767f93a8567d505be924111fb', 'files/images/12/e9b330d767f93a8567d505be924111fb.jpg', 'jpg', b'0'),
	(13, 'ec217b8a2b28a4fecc439b7acfbf839c', 'files/images/13/ec217b8a2b28a4fecc439b7acfbf839c.jpg', 'jpg', b'0'),
	(14, 'a9c5fb412d2f4e9bf211bc4fc1605f23', 'files/images/14/a9c5fb412d2f4e9bf211bc4fc1605f23.jpg', 'jpg', b'0'),
	(15, '8c7cb6b7779f700a71af4a0d8f7ccfbb', 'files/images/15/8c7cb6b7779f700a71af4a0d8f7ccfbb.jpg', 'jpg', b'0'),
	(16, '24a486f34bddefc13e55e7aa1a6b603e', 'files/images/16/24a486f34bddefc13e55e7aa1a6b603e.jpg', 'jpg', b'0'),
	(17, '3216ab31a8ecec03d609046fe18b1f65', 'files/images/17/3216ab31a8ecec03d609046fe18b1f65.jpg', 'jpg', b'0'),
	(18, 'ca68fb558e299b9906bf604fd1a1de6e', 'files/images/18/ca68fb558e299b9906bf604fd1a1de6e.jpg', 'jpg', b'0'),
	(19, '448e96adfe7cf2a6c3c6162b64b03fdf', 'files/images/19/448e96adfe7cf2a6c3c6162b64b03fdf.jpg', 'jpg', b'0'),
	(20, 'cb155120c2475b3d982d35b049481a9f', 'files/images/20/cb155120c2475b3d982d35b049481a9f.jpg', 'jpg', b'0'),
	(21, '51e4a3fe680111088aff1edaecd488b5', 'files/images/21/51e4a3fe680111088aff1edaecd488b5.jpg', 'jpg', b'0'),
	(22, 'd2460ad407feb12384ff5bb9a50b436c', 'files/images/22/d2460ad407feb12384ff5bb9a50b436c.jpg', 'jpg', b'0'),
	(23, 'b50ffbbf1ce08993aa339049887de814', 'files/images/23/b50ffbbf1ce08993aa339049887de814.jpg', 'jpg', b'0'),
	(24, 'ccc1b508f6b76e6410c95629a5dd52e1', 'files/images/24/ccc1b508f6b76e6410c95629a5dd52e1.jpg', 'jpg', b'0'),
	(25, '4777e47938223aea2c89da85b666fbb5', 'files/images/25/4777e47938223aea2c89da85b666fbb5.jpg', 'jpg', b'0'),
	(26, '8aa5bfb3c0f5b41b40282b4b244ecf02', 'files/images/26/8aa5bfb3c0f5b41b40282b4b244ecf02.jpg', 'jpg', b'0');
/*!40000 ALTER TABLE `l_images` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_mainpage
DROP TABLE IF EXISTS `l_mainpage`;
CREATE TABLE IF NOT EXISTS `l_mainpage` (
  `site` int(2) NOT NULL,
  `text_activity` text NOT NULL,
  `text_production` text NOT NULL,
  `keywords` text,
  `description` text,
  UNIQUE KEY `site` (`site`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_mainpage: 1 rows
/*!40000 ALTER TABLE `l_mainpage` DISABLE KEYS */;
INSERT INTO `l_mainpage` (`site`, `text_activity`, `text_production`, `keywords`, `description`) VALUES
	(1, '<p>Основным направлением деятельности компании &laquo;Лес Ресурс&raquo; является заготовка, переработка и продажа леса. Собственные производственные мощности и лесосырьевые базы в долгосрочной аренде дают нам возможность поставлять заказчикам древевесину и пиломатериалы в любых объемах. <br /><br />Ежегодная производственная мощность предприятия составляет порядка 100 тыс. кубометров леса кругляка. &laquo;Лес Ресурс&raquo; с 2008 года производит высококачественную продукцию и поставляет ее на территории Уральского Федерального округа. <a href="#">Купить лес кругляк</a> можно в любое время года. Вся лесопродукция отвечает всем экологическим и техническим нормам, действующим на территории РФ.</p>', '<p>Качество продукции компании &laquo;Лес Ресурс&raquo; находится под постоянным контролем на каждом этапе производства. Использование передовых технологий в деревеозаготовке и высококачественное оборудование позволяет снизить стоимость нашей продукции и исключить брак. <br /><br />Полный производственный цикл, позволяет нам оперативно поставлять широкий ассортимент продукции стабильного качества. В перечне выпускаемой продукции:&nbsp;<a href="#">лес кругляк</a>, <a href="#">пиловочник комлевой</a>, <a href="#">хвойный и лиственный</a>, <a href="#">тонкомер</a> и <a href="#">баланс</a>.</p>', '', '');
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
