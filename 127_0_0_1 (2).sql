-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 06 2019 г., 03:52
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dn_sait`
--
CREATE DATABASE IF NOT EXISTS `dn_sait` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dn_sait`;

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(10) NOT NULL,
  `text` varchar(355) NOT NULL,
  `user_id` int(10) NOT NULL,
  `idost_i` int(10) NOT NULL,
  `img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id2` int(10) NOT NULL,
  `img` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `user_id` varchar(355) NOT NULL,
  `glav` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id2`, `img`, `text`, `user_id`, `glav`) VALUES
(1, 'image/Beha.jpg', 'Мне 2к тебе майнкравт а я счастлев', '2', 'Как Играть В МАЙНКРАВТ'),
(13, 'image/A_Bathing_Ape_(logo).png', 'АЛЬЯНС СОСАТ', '6', 'ЗА ОРДУ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(355) NOT NULL,
  `pasword` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `login` varchar(355) NOT NULL,
  `avatar` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pasword`, `name`, `login`, `avatar`) VALUES
(2, 'Lohander@gmail.com', 'VorZakona228', 'Зубенко Михаил Петрович', 'MAFIOZNIK', 'image/mafioznik.jpg'),
(4, 'KrutoiPacanTurma228@gmail.com', '228AUE', 'Крутой Пасан', 'KrutoiBabnik228', 'image/Beha.jpg'),
(5, 'NIHUIA@gmail.com', '123', 'HACH AHMEDOV', '123', 'image/5857960.jpg'),
(6, 'jake200506@mail.ru', '1234', 'MAINCRAFTER TATAR', '1234', 'image/dr.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id2`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
