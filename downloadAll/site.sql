-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 25 2019 г., 10:43
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advertisement`
--

INSERT INTO `advertisement` (`id`, `title`, `text`, `img`, `author_id`, `date`) VALUES
(1, 'Important title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptas dignissimos dicta voluptate expedita id voluptatem cumque esse vitae, enim non beatae totam sequi eaque nam in sapiente sit porro asperiores. Harum vitae impedit, cum iste, accusantium quasi eius cupiditate id facilis excepturi debitis iusto illum blanditiis sapiente. Libero mollitia, amet maiores, molestiae praesentium ut aut, error eaque id dicta ducimus voluptate, hic architecto fugit obcaecati aperiam. Aspernatur, nostrum dolorum accusantium vitae? Quos aperiam nemo officiis in magnam earum ', 'img/1.jpg', 2, '2019-09-21 17:35:03'),
(2, 'Supertitle', '222Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptas dignissimos dicta voluptate expedita id voluptatem cumque esse vitae, enim non beatae totam sequi eaque nam in sapiente sit porro asperiores. Harum vitae impedit, cum iste, accusantium quasi eius cupiditate id facilis excepturi debitis iusto illum blanditiis sapiente. Libero mollitia, amet maiores, molestiae praesentium ut aut, error eaque id dicta ducimus voluptate, hic architecto fugit obcaecati aperiam. Aspernatur, nostrum dolorum accusantium vitae? Quos aperiam nemo officiis in magnam earum ', 'img/2.jpg', 1, '2019-09-21 17:35:03'),
(3, 'Some new article', '333Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus vel eligendi? Ut voluptatibus corporis doloremque aliquam maiores quasi adipisci rerum error dolorem!', 'img/3.jpg', 1, '2019-09-22 21:38:30'),
(4, 'Broken chair', 'I guess I should put it in a trash', 'img/4.jpg', 3, '2019-09-22 21:38:30'),
(5, 'Top one', 'some text just to check', 'img/5.jpg', 2, '2019-09-23 16:39:14'),
(17, 'For deletion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptas dignissimos dicta voluptate expedita id voluptatem cumque esse vitae, enim non beatae totam sequi eaque nam in sapiente sit porro asperiores. Harum vitae impedit, cum iste, accusantium quasi eius cupiditate id facilis excepturi debitis iusto illum blanditiis sapiente. Libero mollitia, amet maiores, molestiae praesentium ut aut, error eaque id dicta ducimus voluptate, hic architecto fugit obcaecati aperiam. Aspernatur, nostrum dolorum accusantium vitae? Quos aperiam nemo officiis in magnam earum ', 'img/6.jpg', 4, '2019-09-21 17:35:03'),
(19, 'Next Name', 'Description that you need to by this thing', 'img/7.jpg', 3, '2019-09-24 20:22:00'),
(20, 'Hello', 'What are you doing?', 'img/8.jpg', 2, '2019-09-24 21:00:40'),
(21, 'Selling', 'Just need money', 'img/9.jpg', 3, '2019-09-24 21:19:23'),
(22, 'Tired', 'This is all i can and even don\'t understand what I did and why it still works somehow :/', 'img/10.jpg', 3, '2019-09-24 21:20:38'),
(23, '11th', 'I hope that the first advertisement is gone. ', 'img/catwallpaper.jpg', 3, '2019-09-24 21:21:43');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `phone_numbers` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `author`, `emails`, `phone_numbers`, `password`) VALUES
(1, 'Anton', 'mail@mail.ru', '3801234567', 'password1'),
(2, 'Sergey', 'mail2@mail.ru', '3805763857', '123'),
(3, 'Vasya', 'oop@mail.ru', '380746345637', '123'),
(4, 'Gena', 'tarara@ya.ru', '380746345567', 'kngjkdnhfhfnh');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
