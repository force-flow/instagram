-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 15:26
-- Версия сервера: 5.6.38
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
-- База данных: `bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `text` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `text`, `img`, `user_id`) VALUES
(1, 'test', 'images/slon.jpg', 8),
(2, 'test 2', 'images/slon2.jpg', 4),
(3, 'asdasd', 'images/winter.jpg', 4),
(5, 'zxcvbn', 'images/op.jpg', 7),
(6, '1233', 'images/skif.jpg', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `sectask`
--

CREATE TABLE `sectask` (
  `id` int(10) NOT NULL,
  `mail` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `login` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `avatar` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sectask`
--

INSERT INTO `sectask` (`id`, `mail`, `name`, `login`, `password`, `avatar`) VALUES
(3, 'test@mail.ru', 'myname', 'mylogin', '][poi', 'images/avatar.png'),
(4, 'test@mail.ru', 'imya', 'bootstrap4', '123456', 'images/avatar.png'),
(5, 'test@mail.ru', 'zxcxzc', 'qwerty123', '/.,mn', 'images/avatar.png'),
(6, 'test@mail.ru', 'instagram', 'Nstrm', 'asdfgh', 'images/avatar.png\r\n'),
(7, 'test@mail.ru', 'jmih\r\n', 'log', 'gol', 'images/avatar.png'),
(8, 'test@mail.ru', 'test', 'testlogin', 'testpass', 'images/avatar.png'),
(9, 'test@mail.ru', '123', '321', '123', 'images/slon.jpg'),
(10, 'test@mail.ru', 'test', 'trems', '9876', 'images/avatar.png\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sectask`
--
ALTER TABLE `sectask`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `sectask`
--
ALTER TABLE `sectask`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
