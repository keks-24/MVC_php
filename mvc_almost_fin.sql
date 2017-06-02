-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2017 г., 01:28
-- Версия сервера: 5.7.16-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'test', 'test@test.com', 'test '),
(2, 'Nick', 'second`', 'fsdfsf'),
(3, 'lolka', 'ghgjhghj@hjghjghj/k;lk', 'verni about'),
(4, 'рапрп', 'вввввввввввв\"пориро', 'ппорро\r\n'),
(5, 'test', 'test@test.com', 'туц туц туц\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `alias` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `is_published` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `alias`, `title`, `content`, `is_published`) VALUES
(1, 'Page 1', 'This is test page', '<b> This is test page </b>\r\n<p> Проверка работы хтмл кода в текст боксе, и его отображение в поле контент </p>', 1),
(4, 'Comivoyajer', 'Task comivoyajer', 'Тут будет задача', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `seller_info`
--

CREATE TABLE `seller_info` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name_company` varchar(100) NOT NULL,
  `place_car` varchar(100) NOT NULL,
  `cont_email` varchar(100) NOT NULL,
  `cont_phone` varchar(100) NOT NULL,
  `start_p` varchar(100) NOT NULL,
  `finish_p` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `seller_info`
--

INSERT INTO `seller_info` (`id`, `name_company`, `place_car`, `cont_email`, `cont_phone`, `start_p`, `finish_p`) VALUES
(1, 'FP Test', '30', 'mr.keks24@gmail.com', '930330152', '30.67', '36.27'),
(2, 'test', '40', 'test@mail.ru', '0930001122', '40.40', '99.99'),
(4, 'test', '3000', 'fgdfgdfgdf', 'gfdgdfgdf', 'gdfgdf', 'gdfgdf');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `login` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'admin',
  `password` char(32) NOT NULL,
  `is_active` tinyint(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `role`, `password`, `is_active`) VALUES
(4, 'admin', 'mr.keks24@gmail.com', 'admin', '73bea939d199ee63e0a028cab38c8b7b', 1),
(5, 'keks', 'test@gmail.com', 'customer', 'ed316bfacf8f6903be0f69f2f0851f29', 1),
(11, 'Jhon', 'Jhon@mail.ru', 'seller', '6bced27a0e90bcb749b89914d5f529df', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
