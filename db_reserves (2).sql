-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 11 2018 г., 10:56
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
-- Структура таблицы `accommodation_package`
--

CREATE TABLE `accommodation_package` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `type_of_document` varchar(255) NOT NULL,
  `document_number` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `additional_guests` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `additional_price` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accommodation_package`
--

INSERT INTO `accommodation_package` (`id`, `date`, `name`, `family_name`, `type_of_document`, `document_number`, `contact_number`, `notes`, `additional_guests`, `payment_method`, `package_price`, `additional_price`, `total`, `cat_id`, `user_id`) VALUES
(1, '08.08.18', 'mr Ben', 'Joy', 'Passport', '123456789', '0123456789987654321', '#example#example#example#', 'mr Jack', 'card', '0.5%', '10%', '$2600', 1, 2),
(2, 'option1', 'sadsa', 'asasa', 'asasas', 'sasasas', 'sasas', 'asasasasasasa', 'option2', 'option3', '', '', '', 0, 0),
(3, 'option1', 'Djou', 'mr.Djenson', 'PASSPORT', '121212212121', '45454545454545454', 'VIP', 'August 18', 'August 19', '7,500', 'additional_price', 'total', 0, 0),
(4, 'option1', 'Djou', 'mr.Djenson', 'PASSPORT', '121212212121', '45454545454545454', 'SASASASASAS', 'August 18', 'August 19', '7,500', '10%', '8,250', 0, 0),
(5, 'August 17', 'sadsa', 'asasa', 'PASSPORT', '121212212121', '45454545454545454', 'sssssssssss', 'August 18', 'August 17', '7,500', '10%', '8,250', 0, 0),
(6, 'August 17', 'sadsa', 'mr.Djenson', 'PASSPORT', '121212212121', 'sasas', 'qwwwwwwwwwww', 'August 18', 'August 17', '7,500', '10%', '8,250', 0, 0),
(7, 'August 17', 'Djou', 'asasa', 'PASSPORT', '121212212121', '45454545454545454', '', 'August 17', 'August 18', '7,500', '10%', '8,250', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `all_users`
--

CREATE TABLE `all_users` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `all_users`
--

INSERT INTO `all_users` (`id`, `email`, `password`, `fullname`, `sex`, `phone_number`, `created`, `last_login`) VALUES
(1, 'sdfdsf', '$2y$10$.p1l.waxA4QxeC5OLig9M.RxBoXo8wuR/CvDoVt9QlPiVs7bQcOv2', '123456', '123456', '123456', '2018-08-09 16:49:02', '0000-00-00 00:00:00'),
(2, 's.k_92@inbox.ru', '$2y$10$q.KmO8qtVys2Di26X/95aeL1c0PY.y/Pdk4aQoJMmKoYQTJF06wm6', 'Ulan', '', '09800909009', '2018-08-09 16:55:10', '2018-08-09 16:55:11'),
(3, 'pantera@mail.ru', '$2y$10$J3SZoqCs6boMGnyDewhl1.9MuklAxzk0VDm/Dq5w5GUqB5BC92Iwm', 'dsfsd', '', '234324', '2018-08-10 14:11:05', '2018-08-10 14:26:11'),
(4, 'saparovkutman@gmail.com', '$2y$10$NgoWX40qXZl3FGNLwxzymuk3cHR4iY4GRFLR6tz3eNG0jy/UJi8ny', 'Kutman', '', '0772922222', '2018-08-10 14:44:01', '2018-08-10 15:10:44');

-- --------------------------------------------------------

--
-- Структура таблицы `booking_package`
--

CREATE TABLE `booking_package` (
  `id` int(11) NOT NULL,
  `departure_point` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `count_people` varchar(255) NOT NULL,
  `date_of_departure` varchar(255) NOT NULL,
  `date_of_change` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking_package`
--

INSERT INTO `booking_package` (`id`, `departure_point`, `destination`, `count_people`, `date_of_departure`, `date_of_change`, `cat_id`, `user_id`) VALUES
(1, 'Bishkek', 'Osh', '5', '02.03.18', '02.05.18', 1, 2),
(3, 'Biskek', 'Macao', '1', '12.03.18', '15.05.18', 1, 0),
(4, 'Osh', 'Macao', '1', '12.03.18', '15.05.18', 1, 0),
(5, 'Osh', 'Macao', '1', '12.03.18', '15.05.18', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `booking_restaurants`
--

CREATE TABLE `booking_restaurants` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `houre` varchar(255) NOT NULL,
  `minute` varchar(255) NOT NULL,
  `count_people` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking_restaurants`
--

INSERT INTO `booking_restaurants` (`id`, `date`, `houre`, `minute`, `count_people`, `cat_id`, `user_id`) VALUES
(1, '12.02.18', '15.45', '', '5', 1, 2),
(2, '6546', '6546', '', '654', 6, 5),
(9, '2018-08-10', '13', '45', '1', 3, 0),
(10, '2018-08-02', '12', '45', '1', 3, 0);

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

--
-- Дамп данных таблицы `category_three`
--

INSERT INTO `category_three` (`id`, `title`, `description`, `image_name`) VALUES
(1, 'example #1', 'example #1example #1example #1example #1example #1example #1example #1example #1example #1', 'bce7c4f308c4aa0f1e68a586153b0a4b.jpg');

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
(22, 'Бронирование отелей', 'example #1example #1example #1example #1example #1example #1example #1example #1example #1example #1example #1example #1example #1', '6b0ab4bfa9fb673262716fba2a5392bc.jpg'),
(23, 'Бронирование билетов ', 'example#2example#2example#2example#2example#2example#2example#2example#2example#2example#2example#2example#2example#2example#2', '28222b35b5029b6f73e7a93810d69a39.jpg'),
(24, 'Бронирование столов', 'example#3example#3example#3example#3example#3example#3example#3example#3example#3example#3example#3example#3example#3example#3', 'ffb222224e37c62a8316b1ec0889c7d6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_name` int(11) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Дамп данных таблицы `services_book`
--

INSERT INTO `services_book` (`id`, `title`, `description`, `img_name`) VALUES
(1, 'new 1', 'new 1new 1new 1', ''),
(2, 'new 2', 'new 2 new 2', '');

-- --------------------------------------------------------

--
-- Структура таблицы `services_restaurants`
--

CREATE TABLE `services_restaurants` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `services_restaurants`
--

INSERT INTO `services_restaurants` (`id`, `title`, `description`, `date_time`, `img_name`) VALUES
(2, 'Ресторан Кыргызстан', 'desc desc desc desc descdescv vdesc', '05:00-12:00', 'efd145809405bd7a1c672d165730482f.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services_tickets_show`
--

CREATE TABLE `services_tickets_show` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `services_tickets_show`
--

INSERT INTO `services_tickets_show` (`id`, `title`, `description`, `date_time`, `img_name`) VALUES
(1, 'new 1', 'new new new', '20:00 - 08:00', ''),
(2, 'new 2', 'new new new', '17:00 - 20:00', '');

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
-- Структура таблицы `sub_category_three`
--

CREATE TABLE `sub_category_three` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `total_rooms` varchar(11) NOT NULL,
  `occupied` varchar(11) NOT NULL,
  `idle` varchar(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `cat_three_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_category_three`
--

INSERT INTO `sub_category_three` (`id`, `title`, `description`, `total_rooms`, `occupied`, `idle`, `image_name`, `cat_three_id`) VALUES
(1, 'jannat', '*****', '120', '80', '40', '', '1');

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

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_booking`
--

CREATE TABLE `ticket_booking` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `count_people` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ticket_booking`
--

INSERT INTO `ticket_booking` (`id`, `date`, `type`, `count_people`, `cat_id`, `user_id`) VALUES
(1, '12.02.18', '15.45', '5', 4, 2),
(2, '2018-08-11', 'VIP reserve', '1', 4, 0),
(3, '2018-08-08', 'VIP reserve', '1', 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `transportation_services`
--

CREATE TABLE `transportation_services` (
  `id` int(11) NOT NULL,
  `departure_point` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `count_people` varchar(255) NOT NULL,
  `date_of_departure` varchar(255) NOT NULL,
  `date_of_change` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transportation_services`
--

INSERT INTO `transportation_services` (`id`, `departure_point`, `destination`, `count_people`, `date_of_departure`, `date_of_change`, `cat_id`, `user_id`) VALUES
(1, 'Bishkek', 'Osh', '5', '02.03.18', '02.05.18', 2, 2),
(2, 'Biskek', 'Macao', '1', '12.03.18', '15.05.18', 2, 0),
(3, 'Biskek', 'Macao', '1', '12.03.18', '15.05.18', 2, 0),
(4, 'Osh', 'Macao', '1', '12.03.18', '15.05.18', 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_admin`
--

INSERT INTO `users_admin` (`id`, `login`, `email`, `password`, `created`, `last_login`) VALUES
(1, 'admin', 'admin@mail.ru', '$2y$10$eBx3Prn/3v3DRKQBV/AcROro9SvuQJLCE/5aPQ8D522nX35foztw.', '2018-08-08 10:47:00', '2018-08-10 14:30:35');

-- --------------------------------------------------------

--
-- Структура таблицы `VIP_booking_services`
--

CREATE TABLE `VIP_booking_services` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `vip_booking` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `type_of_chip` varchar(255) NOT NULL,
  `review_type` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `VIP_booking_services`
--

INSERT INTO `VIP_booking_services` (`id`, `client_name`, `vip_booking`, `date`, `time`, `total`, `type_of_chip`, `review_type`, `number_phone`, `requirements`, `cat_id`, `user_id`) VALUES
(1, 'mr Ben', '5', '02.03.18', '15.45', '6', 'gold', 'vip', '010203040506070809', 'IMPORTANT', 1, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accommodation_package`
--
ALTER TABLE `accommodation_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking_package`
--
ALTER TABLE `booking_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking_restaurants`
--
ALTER TABLE `booking_restaurants`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
-- Индексы таблицы `sub_category_three`
--
ALTER TABLE `sub_category_three`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category_two`
--
ALTER TABLE `sub_category_two`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transportation_services`
--
ALTER TABLE `transportation_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `VIP_booking_services`
--
ALTER TABLE `VIP_booking_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accommodation_package`
--
ALTER TABLE `accommodation_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `booking_package`
--
ALTER TABLE `booking_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `booking_restaurants`
--
ALTER TABLE `booking_restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `category_one`
--
ALTER TABLE `category_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_three`
--
ALTER TABLE `category_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category_two`
--
ALTER TABLE `category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services_book`
--
ALTER TABLE `services_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services_restaurants`
--
ALTER TABLE `services_restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services_tickets_show`
--
ALTER TABLE `services_tickets_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT для таблицы `sub_category_three`
--
ALTER TABLE `sub_category_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sub_category_two`
--
ALTER TABLE `sub_category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ticket_booking`
--
ALTER TABLE `ticket_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `transportation_services`
--
ALTER TABLE `transportation_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `VIP_booking_services`
--
ALTER TABLE `VIP_booking_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
