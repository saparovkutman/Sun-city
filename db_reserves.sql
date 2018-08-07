-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2018 г., 17:38
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

--
-- Дамп данных таблицы `category_one`
--

INSERT INTO `category_one` (`id`, `title`, `description`, `image_name`) VALUES
(8, 'Jacky Cheung A Classic Tour - 2018 Macao', 'Suncity Group Presents 《Jacky Cheung A Classic Tour - 2018 Macao》. Joining hands with affiliates Sun Entertainment Culture and Sun Travel, Suncity Group《Jacky Cheung A Classic Tour-2018 Macao》Accommodation Package, out now!', '636b2c64dbf86da3bb7af704452e23a0.jpg');

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
(24, 'service', 'new', 'e8e80116e26e439bf4f288017e4ec4fb.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services_book`
--

CREATE TABLE `services_book` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `services_restaurants`
--

CREATE TABLE `services_restaurants` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `services_tickets_show`
--

CREATE TABLE `services_tickets_show` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `services_transports`
--

CREATE TABLE `services_transports` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category_one_info`
--

CREATE TABLE `sub_category_one_info` (
  `id` int(11) NOT NULL,
  `price` varchar(222) NOT NULL,
  `type_package` varchar(255) NOT NULL,
  `package_includes_one` text NOT NULL,
  `package_includes_two` text NOT NULL,
  `package_includes_three` text NOT NULL,
  `book_now_text` text NOT NULL,
  `ticket_text` text NOT NULL,
  `ticket_type` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_category_one_info`
--

INSERT INTO `sub_category_one_info` (`id`, `price`, `type_package`, `package_includes_one`, `package_includes_two`, `package_includes_three`, `book_now_text`, `ticket_text`, `ticket_type`, `category_id`) VALUES
(6, 'LLLLLL LLLLLLL', 'LLLLL LLLLL', 'LLLLLLL LLLLLLL', 'LLLLLL LLLLLLL', 'LLLLLLL LLLLLLL', 'LLLLLL LLLLLLLLL', 'LLLLLL LLLLLLLLLL', 'LLLLLL LLLLL', 8),
(7, 'jjjjjjjjjjjjjjjjjjjjjjjj', 'JJHjjjjjjjjjjj', 'JJJJJJJJJJJ', 'JJJJJJJJJJJJJJJJ', 'JJJJJJJJJJJJJJJJ', 'JJJJJJJJJJJJJ', 'JJJJJJJJJJ', 'KKK', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category_two`
--

CREATE TABLE `sub_category_two` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Индексы таблицы `services_book`
--
ALTER TABLE `services_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_restaurants`
--
ALTER TABLE `services_restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_tickets_show`
--
ALTER TABLE `services_tickets_show`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_transports`
--
ALTER TABLE `services_transports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category_one_info`
--
ALTER TABLE `sub_category_one_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category_two`
--
ALTER TABLE `sub_category_two`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category_one`
--
ALTER TABLE `category_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category_three`
--
ALTER TABLE `category_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_two`
--
ALTER TABLE `category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `services_book`
--
ALTER TABLE `services_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services_restaurants`
--
ALTER TABLE `services_restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services_tickets_show`
--
ALTER TABLE `services_tickets_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services_transports`
--
ALTER TABLE `services_transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sub_category_one_info`
--
ALTER TABLE `sub_category_one_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `sub_category_two`
--
ALTER TABLE `sub_category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
