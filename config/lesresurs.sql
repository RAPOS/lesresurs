-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.38-log - MySQL Community Server (GPL)
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
  `header` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(64) NOT NULL,
  `id_image` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `keywords` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_actions: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_actions` DISABLE KEYS */;
INSERT INTO `l_actions` (`id`, `header`, `text`, `date`, `id_image`, `status`, `keywords`, `description`) VALUES
	(1, '1 куб доска 50', '<p>Срочно продаём</p>', '17-05-2016', 37, 0, NULL, NULL);
/*!40000 ALTER TABLE `l_actions` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_admins
DROP TABLE IF EXISTS `l_admins`;
CREATE TABLE IF NOT EXISTS `l_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_admins: 1 rows
/*!40000 ALTER TABLE `l_admins` DISABLE KEYS */;
INSERT INTO `l_admins` (`id`, `name`, `password`, `email`) VALUES
	(1, 'RAPOS', '49ca5bdc41b0ad3b828258875030e223', NULL);
/*!40000 ALTER TABLE `l_admins` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_articles
DROP TABLE IF EXISTS `l_articles`;
CREATE TABLE IF NOT EXISTS `l_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `header` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(64) NOT NULL,
  `keywords` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_articles: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_articles` DISABLE KEYS */;
INSERT INTO `l_articles` (`id`, `id_image`, `header`, `text`, `date`, `keywords`, `description`) VALUES
	(1, 41, 'Экологические последствия лесозаготовок', '<p>Пиловочник - это прямые брёвна естественной влажности, пригодные для напила пиломатериалов. Пиловочником называют бревна диаметром от 14 см до 45 см., для хвойных пород от 3,0 до 6,5 м.(ГОСТ 9463-88), для лиственных - длина от 1,0 до 6,0 м.(ГОСТ 9462-88). Простыми словами - это круглый лес, вывезенный лесовозом на пилораму, из которого можно пилить брус или доски. <br /> <br /> Нижняя часть дерева (в основном березы) называется фанкряж - это фанерное сырье. Его разрезают на тонкий шпон толщиной 1,5-2мм. Это должна быть очень качественна древесина без сучков с диаметром больше 20 см и менее 35 см. - примерно 5-6 метров из 30-ти метрового дерева. Остально идет на щепу или в баланс. <br /> <br /> Балансом называют верхнюю часть дерева или кривые бревна из которых не возможно выпилить качественную прямую доску. Баланс как правило идет на целлюлозные комбинаты, или дробиться на щепу для дальнейшего использования. <br /> <br /> Компания "Комплесоторг" занимается покупкой и продаже пиловочника с доставкой до вашего производства.</p>', '20.05.2016', NULL, NULL);
/*!40000 ALTER TABLE `l_articles` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_banners
DROP TABLE IF EXISTS `l_banners`;
CREATE TABLE IF NOT EXISTS `l_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `header` varchar(64) NOT NULL,
  `link_more` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_banners: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_banners` ENABLE KEYS */;


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

-- Дамп данных таблицы lesresurs.l_contacts: ~1 rows (приблизительно)
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_feedback: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `l_feedback` DISABLE KEYS */;
INSERT INTO `l_feedback` (`id`, `email`, `name`, `subject`, `text`, `date`, `response`, `ip`) VALUES
	(1, 'hostmas@bk.ru', 'RAPOS', 'TEST', 'TEST', '1463737004', NULL, '127.0.0.1'),
	(2, 'hostmas@bk.ru', 'RAPOS', 'sad', 'sadasd', '1463737213', NULL, '127.0.0.1'),
	(3, 'hostmas@bk.ru', 'RAPOS', 'sadsadasd', 'sadasd', '1463737264', NULL, '127.0.0.1'),
	(4, 'hostmas@bk.ru', 'RAPOS', 'asd asd asd ', 'sa das d', '1463737322', NULL, '127.0.0.1'),
	(5, 'hostmas@bk.ru', 'RAPOS', 'dsadas', 'dsadasd', '1463737526', '<p>5456465464646464</p>', '127.0.0.1');
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
  `status` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_images: ~96 rows (приблизительно)
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
	(26, '8aa5bfb3c0f5b41b40282b4b244ecf02', 'files/images/26/8aa5bfb3c0f5b41b40282b4b244ecf02.jpg', 'jpg', b'0'),
	(27, 'f0c3646526539f53c8ec83753c94e7b5', 'files/images/27/f0c3646526539f53c8ec83753c94e7b5.jpg', 'jpg', b'0'),
	(28, '1c7564393de2e298516ec77d856c7478', 'files/images/28/1c7564393de2e298516ec77d856c7478.jpg', 'jpg', b'0'),
	(29, 'cc0ea02433e24790c4d10fe47022a5ed', 'files/images/29/cc0ea02433e24790c4d10fe47022a5ed.jpg', 'jpg', b'0'),
	(30, '6323d7573aa3a444899c4ecbbc6b744a', 'files/images/30/6323d7573aa3a444899c4ecbbc6b744a.jpg', 'jpg', b'0'),
	(31, '19514f9dc9e26fcd643bcd2e4829a6be', 'files/images/31/19514f9dc9e26fcd643bcd2e4829a6be.jpg', 'jpg', b'0'),
	(32, '44167a855e462f723e62cae75b6c8e0f', 'files/images/32/44167a855e462f723e62cae75b6c8e0f.jpg', 'jpg', b'0'),
	(33, 'd9ca3c1d20f3e1fe7aebfe5c6481ed68', 'files/images/33/d9ca3c1d20f3e1fe7aebfe5c6481ed68.jpg', 'jpg', b'0'),
	(34, '82e1c37a42854b08c22974ff04c70704', 'files/images/34/82e1c37a42854b08c22974ff04c70704.jpg', 'jpg', b'1'),
	(35, '586803d9360675d03a4fbbe2f8e367f6', 'files/images/35/586803d9360675d03a4fbbe2f8e367f6.jpg', 'jpg', b'0'),
	(36, '64c700d4958af11ae08c9825ce1aa00f', 'files/images/36/64c700d4958af11ae08c9825ce1aa00f.jpg', 'jpg', b'0'),
	(37, '1a2f3d076b3994f19f8a2baf8c8b9462', 'files/images/37/1a2f3d076b3994f19f8a2baf8c8b9462.jpg', 'jpg', b'0'),
	(38, '732b706a99f8b1f1fc48ae52dffa05da', 'files/images/38/732b706a99f8b1f1fc48ae52dffa05da.jpg', 'jpg', b'0'),
	(40, '9775476faafa9ae3e8e6ac0b41c86e7b', 'files/images/40/9775476faafa9ae3e8e6ac0b41c86e7b.jpg', 'jpg', b'0'),
	(41, '052009e702861ca222bbe16993be94ed', 'files/images/41/052009e702861ca222bbe16993be94ed.jpg', 'jpg', b'1'),
	(42, '8216a98fb486272d7d3ddcdc69341071', 'files/images/42/8216a98fb486272d7d3ddcdc69341071.jpg', 'jpg', b'1'),
	(44, 'aa3c6c20d3e714c15cd3a482a0cebf08', 'files/images/44/aa3c6c20d3e714c15cd3a482a0cebf08.jpg', 'jpg', b'0'),
	(45, '815c75c237e2b0a8d525419470389804', 'files/images/45/815c75c237e2b0a8d525419470389804.jpg', 'jpg', b'0'),
	(46, '05781784b9e213eeafc8db10f99293d2', 'files/images/46/05781784b9e213eeafc8db10f99293d2.jpg', 'jpg', b'0'),
	(47, 'ee9bf8168be372555f0d652ced39c900', 'files/images/47/ee9bf8168be372555f0d652ced39c900.jpg', 'jpg', b'0'),
	(48, '74d761b501715e9bddd46cd7f819f8f9', 'files/images/48/74d761b501715e9bddd46cd7f819f8f9.jpg', 'jpg', b'0'),
	(49, '8d718c377419cf0d25a99921245333f7', 'files/images/49/8d718c377419cf0d25a99921245333f7.jpg', 'jpg', b'0'),
	(50, 'a5d4a60a66e0b434877ad2787f49f301', 'files/images/50/a5d4a60a66e0b434877ad2787f49f301.jpg', 'jpg', b'0'),
	(51, '79b142633655782de921d2a14f361192', 'files/images/51/79b142633655782de921d2a14f361192.jpg', 'jpg', b'0'),
	(52, 'ff0e573087121f34dd0c4a76b3bc73be', 'files/images/52/ff0e573087121f34dd0c4a76b3bc73be.jpg', 'jpg', b'0'),
	(53, 'f02b04d76e727ce2795da2f58b2644ca', 'files/images/53/f02b04d76e727ce2795da2f58b2644ca.jpg', 'jpg', b'0'),
	(54, '0a7d2180511d88bc7006416720f325eb', 'files/images/54/0a7d2180511d88bc7006416720f325eb.jpg', 'jpg', b'0'),
	(58, '9c6a8e82254d25a6a91bc9d3698b1844', 'files/images/58/9c6a8e82254d25a6a91bc9d3698b1844.jpg', 'jpg', b'0'),
	(59, '353da3e577b8fa9d3cc213e68570bddb', 'files/images/59/353da3e577b8fa9d3cc213e68570bddb.jpg', 'jpg', b'0'),
	(60, '5b0dc11d2a48d09bd81bfc6368dcd324', 'files/images/60/5b0dc11d2a48d09bd81bfc6368dcd324.jpg', 'jpg', b'0'),
	(61, 'e1261db2da69e0bef8ead7b4a38014af', 'files/images/61/e1261db2da69e0bef8ead7b4a38014af.jpg', 'jpg', b'0'),
	(62, 'dbdcb09a9f0a21b817f1aaeff64c7a15', 'files/images/62/dbdcb09a9f0a21b817f1aaeff64c7a15.jpg', 'jpg', b'0'),
	(63, '54bfe9d50339b7950503d92e180967e2', 'files/images/63/54bfe9d50339b7950503d92e180967e2.jpg', 'jpg', b'0'),
	(64, '7bba93d6329a3fc4ca08f466e4dade4c', 'files/images/64/7bba93d6329a3fc4ca08f466e4dade4c.jpg', 'jpg', b'0'),
	(65, 'dbd28c05d1b56e15598fa69b3c4eadc5', 'files/images/65/dbd28c05d1b56e15598fa69b3c4eadc5.jpg', 'jpg', b'0'),
	(66, '5521914c3eb094ab6b8a1b1e67dd4cd9', 'files/images/66/5521914c3eb094ab6b8a1b1e67dd4cd9.jpg', 'jpg', b'0'),
	(67, 'dd5f1f95bac848c3fbbd5cc48de137fd', 'files/images/67/dd5f1f95bac848c3fbbd5cc48de137fd.jpg', 'jpg', b'0'),
	(68, '583a81a48d7d33366b6ee536fbfebeea', 'files/images/68/583a81a48d7d33366b6ee536fbfebeea.jpg', 'jpg', b'0'),
	(69, 'da4c2c534c4d074b4e1aa9b615555368', 'files/images/69/da4c2c534c4d074b4e1aa9b615555368.jpg', 'jpg', b'0'),
	(70, 'b0b1e616c80b8a19f541622bffc88b75', 'files/images/70/b0b1e616c80b8a19f541622bffc88b75.jpg', 'jpg', b'0'),
	(71, 'cb97ca85706d53c0d8bf2f8a45337cda', 'files/images/71/cb97ca85706d53c0d8bf2f8a45337cda.jpg', 'jpg', b'0'),
	(72, 'be39ca0d66f014d10f75760ac6c5f7b7', 'files/images/72/be39ca0d66f014d10f75760ac6c5f7b7.jpg', 'jpg', b'0'),
	(73, 'de1162c9401d225e6db0b6954422eedf', 'files/images/73/de1162c9401d225e6db0b6954422eedf.jpg', 'jpg', b'0'),
	(74, '72bd1f21398dac5551aeeaf1f865e790', 'files/images/74/72bd1f21398dac5551aeeaf1f865e790.jpg', 'jpg', b'0'),
	(75, '5a3f4af39f7bf4ae5b73ec69b33c938d', 'files/images/75/5a3f4af39f7bf4ae5b73ec69b33c938d.jpg', 'jpg', b'0'),
	(76, '13ffe06dcdba55648086b16b4f2c482f', 'files/images/76/13ffe06dcdba55648086b16b4f2c482f.jpg', 'jpg', b'0'),
	(77, '1f89d183aef1848ac54f38a93aeae527', 'files/images/77/1f89d183aef1848ac54f38a93aeae527.jpg', 'jpg', b'0'),
	(78, 'f0c17580c38459880096c0c225c4ebfb', 'files/images/78/f0c17580c38459880096c0c225c4ebfb.jpg', 'jpg', b'0'),
	(79, '3207e6bd0802baab06add59d9f5d0481', 'files/images/79/3207e6bd0802baab06add59d9f5d0481.jpg', 'jpg', b'0'),
	(80, '01fb9431752d8142e7cb7ca8cec42f40', 'files/images/80/01fb9431752d8142e7cb7ca8cec42f40.jpg', 'jpg', b'0'),
	(81, 'a3c0f7f7fd29ed73806bf9cd3ecdf932', 'files/images/81/a3c0f7f7fd29ed73806bf9cd3ecdf932.jpg', 'jpg', b'0'),
	(82, 'ff1612e92cf0ebca3c0b801443cf3d43', 'files/images/82/ff1612e92cf0ebca3c0b801443cf3d43.jpg', 'jpg', b'0'),
	(83, 'e5f29bb5b3eec6072cae79278c7db929', 'files/images/83/e5f29bb5b3eec6072cae79278c7db929.jpg', 'jpg', b'0'),
	(84, '4c07f11409f16f39771d620fca582b0a', 'files/images/84/4c07f11409f16f39771d620fca582b0a.jpg', 'jpg', b'0'),
	(85, 'fc70daa41bba8789020545265348a559', 'files/images/85/fc70daa41bba8789020545265348a559.jpg', 'jpg', b'0'),
	(86, '3e892840747509fe6ccaf8f3ca7eae47', 'files/images/86/3e892840747509fe6ccaf8f3ca7eae47.jpg', 'jpg', b'0'),
	(87, '0e3edf059b425e4d44608cbbca8405d9', 'files/images/87/0e3edf059b425e4d44608cbbca8405d9.jpg', 'jpg', b'0'),
	(88, '4979b207cc4ec4ec091ff0a477cbb264', 'files/images/88/4979b207cc4ec4ec091ff0a477cbb264.jpg', 'jpg', b'0'),
	(89, '0150d861b952b193527e55ab02571362', 'files/images/89/0150d861b952b193527e55ab02571362.jpg', 'jpg', b'0'),
	(90, '0c392fac20409ead39c8f52106209d97', 'files/images/90/0c392fac20409ead39c8f52106209d97.jpg', 'jpg', b'0'),
	(91, '96f171029c1007e2505d61644a82519a', 'files/images/91/96f171029c1007e2505d61644a82519a.jpg', 'jpg', b'1'),
	(92, '93d202497d266cc5ef0d62b66bb2fc30', 'files/images/92/93d202497d266cc5ef0d62b66bb2fc30.jpg', 'jpg', b'1'),
	(93, '8333d343f135a54bdb6a3d461932f2a3', 'files/images/93/8333d343f135a54bdb6a3d461932f2a3.jpg', 'jpg', b'1'),
	(94, '7fb222bed83ccee4a14be0f0b745ffb3', 'files/images/94/7fb222bed83ccee4a14be0f0b745ffb3.jpg', 'jpg', b'1'),
	(95, 'df8030dcc223def1b38056471bf281a5', 'files/images/95/df8030dcc223def1b38056471bf281a5.jpg', 'jpg', b'1'),
	(96, '6b265961c57b1ed39b9c9aafba010b91', 'files/images/96/6b265961c57b1ed39b9c9aafba010b91.jpg', 'jpg', b'1'),
	(97, '5d606062f3753fc28cd108d45af2d44e', 'files/images/97/5d606062f3753fc28cd108d45af2d44e.jpg', 'jpg', b'1'),
	(98, 'bf25a720ef7aaa711e81030aec2a80bd', 'files/images/98/bf25a720ef7aaa711e81030aec2a80bd.jpg', 'jpg', b'1'),
	(99, 'c89a592289cbf730efb384056e0f3bd7', 'files/images/99/c89a592289cbf730efb384056e0f3bd7.jpg', 'jpg', b'1'),
	(100, 'b40b8cf0f8b65ab74c0c93029395b44b', 'files/images/100/b40b8cf0f8b65ab74c0c93029395b44b.jpg', 'jpg', b'1'),
	(101, '81b96c6f0c5e3861da3240c1cf7627f7', 'files/images/101/81b96c6f0c5e3861da3240c1cf7627f7.jpg', 'jpg', b'0');
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


-- Дамп структуры для таблица lesresurs.l_orders
DROP TABLE IF EXISTS `l_orders`;
CREATE TABLE IF NOT EXISTS `l_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '0',
  `phone` varchar(64) NOT NULL DEFAULT '0',
  `date` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_orders: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `l_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_orders` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_productions
DROP TABLE IF EXISTS `l_productions`;
CREATE TABLE IF NOT EXISTS `l_productions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `id_image` int(11) NOT NULL,
  `date` text NOT NULL,
  `keywords` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_productions: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_productions` DISABLE KEYS */;
INSERT INTO `l_productions` (`id`, `header`, `text`, `id_image`, `date`, `keywords`, `description`) VALUES
	(1, 'Проверка', '<p>Описание продукта</p>', 42, '20.05.2016', '', '');
/*!40000 ALTER TABLE `l_productions` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_productionspage
DROP TABLE IF EXISTS `l_productionspage`;
CREATE TABLE IF NOT EXISTS `l_productionspage` (
  `site` int(2) NOT NULL,
  `text_header` varchar(64) NOT NULL,
  `text_block` text NOT NULL,
  `images` text,
  `keywords` text,
  `description` text,
  UNIQUE KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_productionspage: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_productionspage` DISABLE KEYS */;
INSERT INTO `l_productionspage` (`site`, `text_header`, `text_block`, `images`, `keywords`, `description`) VALUES
	(1, 'Предложение', '<p>Компания &laquo;Лес Ресурс&raquo; предлагает поставки леса кругляка в больших объёмах на постоянной основе. Продажа кругляка из отборных хвойных пород древесины производится партиями любого объёма по привлекательным ценам. Заготовка и продажа леса высокого качества ведётся квалифицированными специалистами на базе современного оборудования. Производственный комплекс с мощной лесозаготовительной техникой позволяет компания &laquo;Лес Ресурс&raquo; качественно и быстро заготавливать лес строевой и пиловочник с высокой точностью обработки.</p>', 'null', '', '');
/*!40000 ALTER TABLE `l_productionspage` ENABLE KEYS */;


-- Дамп структуры для таблица lesresurs.l_settings
DROP TABLE IF EXISTS `l_settings`;
CREATE TABLE IF NOT EXISTS `l_settings` (
  `site` int(2) NOT NULL,
  `site_name` text NOT NULL,
  `link_vk` text NOT NULL,
  `link_instagram` text NOT NULL,
  `link_twitter` text NOT NULL,
  `email_order` varchar(64) NOT NULL,
  `email_contact` varchar(64) NOT NULL,
  UNIQUE KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы lesresurs.l_settings: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `l_settings` DISABLE KEYS */;
INSERT INTO `l_settings` (`site`, `site_name`, `link_vk`, `link_instagram`, `link_twitter`, `email_order`, `email_contact`) VALUES
	(1, 'ООО «ЛЕС РЕСУРС»', '#', '#', '#', 'mann_aiv@mail.ru', 'mann_aiv@mail.ru');
/*!40000 ALTER TABLE `l_settings` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
