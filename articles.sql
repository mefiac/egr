-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2016 г., 15:10
-- Версия сервера: 5.5.45
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `articles`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `name`, `date`) VALUES
(1, 'Книга 33', '2016-02-09'),
(7, 'Книга 4', '2016-02-16'),
(8, 'Белочка пришла', '2016-02-16'),
(13, 'cat', '2011-11-11'),
(14, 'cat', '2011-11-11'),
(15, 'cat', '2011-11-11'),
(16, 'cat', '2011-11-11'),
(19, 'cat', '2011-11-11'),
(32, 'dog', '2022-11-12'),
(34, 'dogs', '2022-11-14'),
(35, '212adsadsa', '2011-11-11'),
(36, 'Проверка', '2011-11-11'),
(37, 'sadasd', '2011-11-11'),
(38, '22wewqewqe', '2011-11-11'),
(39, '2212', '2022-11-21'),
(40, 'Статья', '2022-11-21'),
(41, 'Проверка еще', '2016-03-24');

-- --------------------------------------------------------

--
-- Структура таблицы `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=100 ;

--
-- Дамп данных таблицы `autor`
--

INSERT INTO `autor` (`id_autor`, `name`) VALUES
(1, 'Вася'),
(2, 'Петя'),
(3, 'Дима'),
(4, 'Коля'),
(5, 'autor0'),
(6, 'autor1'),
(7, 'autor2'),
(8, 'autor3'),
(9, 'autor4'),
(10, 'autor5'),
(11, 'autor6'),
(12, 'autor7'),
(13, 'autor8'),
(14, 'autor9'),
(15, 'autor10'),
(16, 'autor11'),
(17, 'autor12'),
(18, 'autor13'),
(19, 'autor14'),
(20, 'autor15'),
(21, 'autor16'),
(22, 'autor17'),
(23, 'autor18'),
(24, 'autor19'),
(25, 'autor20'),
(26, 'autor21'),
(27, 'autor22'),
(28, 'autor23'),
(29, 'autor24'),
(30, 'autor25'),
(31, 'autor26'),
(32, 'autor27'),
(33, 'autor28'),
(34, 'autor29'),
(35, 'autor30'),
(36, 'autor31'),
(37, 'autor32'),
(38, 'autor33'),
(39, 'autor34'),
(40, 'autor35'),
(41, 'autor36'),
(42, 'autor37'),
(43, 'autor38'),
(44, 'autor39'),
(45, 'autor40'),
(46, 'autor41'),
(47, 'autor42'),
(48, 'autor43'),
(49, 'autor44'),
(50, 'autor45'),
(51, 'autor46'),
(52, 'autor47'),
(53, 'autor48'),
(54, 'autor49'),
(55, 'autor50'),
(56, 'autor51'),
(57, 'autor52'),
(58, 'autor53'),
(59, 'autor54'),
(60, 'autor55'),
(61, 'autor56'),
(62, 'autor57'),
(63, 'autor58'),
(64, 'autor59'),
(65, 'autor60'),
(66, 'autor61'),
(67, 'autor62'),
(68, 'autor63'),
(69, 'autor64'),
(70, 'autor65'),
(71, 'autor66'),
(72, 'autor67'),
(73, 'autor68'),
(74, 'autor69'),
(75, 'autor70'),
(76, 'autor71'),
(77, 'autor72'),
(78, 'autor73'),
(79, 'autor74'),
(80, 'autor75'),
(81, 'autor76'),
(82, 'autor77'),
(83, 'autor78'),
(84, 'autor79'),
(85, 'autor80'),
(86, 'autor81'),
(87, 'autor82'),
(88, 'autor83'),
(89, 'autor84'),
(90, 'autor85'),
(91, 'autor86'),
(92, 'autor87'),
(93, 'autor88'),
(94, 'autor89'),
(95, 'autor90'),
(96, 'autor91'),
(97, 'autor92'),
(98, 'autor93'),
(99, 'autor94');

-- --------------------------------------------------------

--
-- Структура таблицы `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id_article` bigint(20) NOT NULL,
  `id_autor` int(11) NOT NULL,
  KEY `id_article` (`id_article`),
  KEY `id_autor` (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `temp`
--

INSERT INTO `temp` (`id_article`, `id_autor`) VALUES
(1, 2),
(7, 5),
(34, 3),
(34, 2),
(34, 1),
(36, 2),
(36, 3),
(37, 2),
(37, 3),
(38, 1),
(38, 2),
(38, 3),
(39, 2),
(39, 3),
(40, 2),
(40, 3),
(41, 3),
(41, 31);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `temp`
--
ALTER TABLE `temp`
  ADD CONSTRAINT `temp_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
