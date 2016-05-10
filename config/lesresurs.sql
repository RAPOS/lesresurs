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
-- Дамп данных таблицы lesresurs.l_actions: ~0 rows (приблизительно)
DELETE FROM `l_actions`;
/*!40000 ALTER TABLE `l_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_actions` ENABLE KEYS */;

-- Дамп данных таблицы lesresurs.l_articles: ~1 rows (приблизительно)
DELETE FROM `l_articles`;
/*!40000 ALTER TABLE `l_articles` DISABLE KEYS */;
INSERT INTO `l_articles` (`id`, `id_image`, `header`, `text`, `date`) VALUES
	(1, 1, 'Экологические последствия лесозаготовок', 'Пиловочник - это прямые брёвна естественной влажности, пригодные для напила пиломатериалов. Пиловочником\r\nназывают бревна диаметром от 14 см до 45 см., для хвойных пород от 3,0 до 6,5 м.(ГОСТ 9463-88), для\r\nлиственных - длина от 1,0 до 6,0 м.(ГОСТ 9462-88). Простыми словами - это круглый лес, вывезенный\r\nлесовозом на пилораму, из которого можно пилить брус или доски.\r\n<br>\r\nНижняя часть дерева (в основном березы) называется фанкряж - это фанерное сырье. Его разрезают на\r\nтонкий шпон толщиной 1,5-2мм. Это должна быть очень качественна древесина без сучков с диаметром больше\r\n20 см и менее 35 см. - примерно 5-6 метров из 30-ти метрового дерева. Остально идет на щепу или в баланс.\r\n<br>\r\nБалансом называют верхнюю часть дерева или кривые бревна из которых не возможно выпилить\r\nкачественную прямую доску. Баланс как правило идет на целлюлозные комбинаты, или дробиться на щепу для\r\nдальнейшего использования.\r\n<br>\r\nКомпания "Комплесоторг" занимается покупкой и продаже пиловочника с доставкой до вашего производства.', '10.05.2016');
/*!40000 ALTER TABLE `l_articles` ENABLE KEYS */;

-- Дамп данных таблицы lesresurs.l_contacts: ~1 rows (приблизительно)
DELETE FROM `l_contacts`;
/*!40000 ALTER TABLE `l_contacts` DISABLE KEYS */;
INSERT INTO `l_contacts` (`site`, `text_form`, `text_place`, `text_contact`, `keywords`, `description`) VALUES
	(1, 'Компания «Лес Ресурс» предлагает поставки леса кругляка в больших объёмах на постоянной основе. Продажа кругляка из отборных хвойных пород древесины производится партиями любого объёма по выгодным ценам.', 'Свердловская область<br>\r\nгород Полевской<br>\r\nВосточно промышленный район<br>\r\nтерритория Северского завода ЖБИ', 'Продажа леса<br>\r\n8(34350)34590<br>\r\n<br>\r\nОтдел продажи пиломатериалов<br>\r\n(34350)35931<br>\r\n(34350)34535', NULL, NULL);
/*!40000 ALTER TABLE `l_contacts` ENABLE KEYS */;

-- Дамп данных таблицы lesresurs.l_feedback: ~0 rows (приблизительно)
DELETE FROM `l_feedback`;
/*!40000 ALTER TABLE `l_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_feedback` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
