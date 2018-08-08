-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 08 2018 г., 17:57
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sub_category_one_info`
--
ALTER TABLE `sub_category_one_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sub_category_one_info`
--
ALTER TABLE `sub_category_one_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
