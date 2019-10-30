-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 17 2019 г., 01:03
-- Версия сервера: 5.6.43-log
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_lvl1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `idimages` int(10) UNSIGNED NOT NULL,
  `imageFile` varchar(500) NOT NULL,
  `popularity` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`idimages`, `imageFile`, `popularity`) VALUES
(1, 'chicken-4474176_640.jpg', 0000000001),
(2, 'dog-4504013_640.jpg', 0000000011),
(3, 'road-4450611_640.jpg', 0000000003),
(4, 'zebra-283869_640.jpg', 0000000023),
(5, 'yet-another-flower-1399208-640x425.jpg', 0000000012),
(6, 'ladybird-1367182-640x480.jpg', 0000000054),
(7, 'effi-1-1366221-639x479.jpg', 0000000112),
(8, 'volcanic-mt-ngauruhoe-1378772-640x480.jpg', 0000000003),
(9, 'horse-1393073-639x426.jpg', 0000000021),
(10, 'cat-1364386-640x480.jpg', 0000000008);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`),
  ADD UNIQUE KEY `idimages_UNIQUE` (`idimages`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
