-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 04 2018 г., 12:54
-- Версия сервера: 5.7.20
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_reserves`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category_one`
--

CREATE TABLE `category_one` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category_three`
--

CREATE TABLE `category_three` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category_two`
--

CREATE TABLE `category_two` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_two`
--

INSERT INTO `category_two` (`id`, `title`, `description`, `image_name`) VALUES
(15, '\'primer 1\'', '\'primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1primer 1\'', '\'dc0964eec98ecdfe625e8ce93e579939.png\''),
(16, '\'primer 2\'', '\'primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2primer 2\'', '\'094f6a3a42e0b849d4928464021b52fa.jpg\''),
(17, '\'primer 3\'', '\'primer 3primer 3primer 3primer 3primer 3primer 3primer 3\'', '\'642616d72e96e3b4f2303fbfe5f42632.jpg\''),
(18, '\'primer 4\'', '\'primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4primer 4\'', '\'a1e35e308c3ec200010a30c967f6d971.jpg\''),
(19, '\'primer 5\'', '\'primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5primer 5\'', '\'456a3cf041304dc9fed07beeed677351.jpg\'');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category_one`
--
ALTER TABLE `category_one`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_three`
--
ALTER TABLE `category_three`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_two`
--
ALTER TABLE `category_two`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category_one`
--
ALTER TABLE `category_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_three`
--
ALTER TABLE `category_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_two`
--
ALTER TABLE `category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
