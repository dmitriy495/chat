-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 26 2017 г., 18:28
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user`, `message`) VALUES
(10, 'Nina', 'sa'),
(12, 'Nina', 'Test message'),
(16, 'Admin', 'qq'),
(17, 'Admin', 'ss'),
(18, 'Admin', 'ss'),
(19, 'Admin', 'ss'),
(32, 'Admin', 'qq'),
(33, 'Admin', 'qq'),
(34, 'Admin', 'qq'),
(35, 'Admin', 'AA'),
(36, 'Admin', 'sasasasa'),
(47, 'dimka', 'qq guys'),
(48, 'dimka', 'Hello'),
(49, 'dimka', 'message'),
(50, 'dimka', 'ds'),
(51, 'dimka', 'ds'),
(52, 'dimka', 'ds'),
(53, 'dimka', '12'),
(58, 'Admin', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(66, 'Admin', 'sasa'),
(67, 'Admin', 'sasa'),
(68, 'Admin', 'sasa'),
(69, 'Admin', 'dsds'),
(70, 'Admin', 'sasa'),
(73, 'Admin', 'o <b>o</b>'),
(74, 'Admin', 'o_o'),
(75, 'Admin', '21'),
(76, 'Admin', '21'),
(77, 'Admin', 'sas'),
(78, 'Admin', 'sasa'),
(79, 'Admin', 'sa'),
(80, 'Admin', 'hello'),
(83, 'Admin', 'sasa'),
(84, 'Admin', 'sasa'),
(85, 'Admin', 'sasa'),
(86, 'Admin', 'sasa'),
(88, 'Nina', 'Hello!'),
(95, 'Admin', 'test'),
(97, 'Admin', 'test'),
(98, 'Admin', 'test'),
(99, 'Admin', 'test'),
(103, 'Admin', '444');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(3, 'Admin', '0123', 'dmitriy.495@mail.ru'),
(8, 'Leonid', '123', 'leonid@mail.ru'),
(10, 'user1', '123', 'trtrtr@mail.ru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
