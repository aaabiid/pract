-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 19 2024 г., 14:22
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fofa1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Text` text NOT NULL,
  `Post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `Pid`, `Uid`, `Text`, `Post_date`) VALUES
(12, 1, 1, 'Тестовый комментарий', '2021-12-24'),
(13, 2, 16, 'Это новый комментарий', '2021-12-25');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `image` text NOT NULL,
  `Text` text NOT NULL,
  `Tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `Uid`, `image`, `Text`, `Tags`) VALUES
(1, 1, 'images/1.jpg', 'Рабочий стол', 'Мост, город закат'),
(2, 1, 'images/2.jpg', 'Мост', 'Мост, Город, закат'),
(3, 1, 'images/3.jpg', 'Водопад', 'мост, город, закат'),
(4, 1, 'images/4.jpg', 'Клубника', 'Мост, город, закат'),
(6, 1, 'https://w.forfun.com/fetch/35/35872f1a059ab8781b5c541d435e0be7.jpeg', 'когда что то натворили', 'Мост, город, закат'),
(7, 1, 'https://bogatyr.club/uploads/posts/2023-12/1702597178_bogatyr-club-p-sobaki-porodi-korgi-foni-pinterest-47.jpg', 'собака', 'Мост, город, закат'),
(8, 1, 'https://w.forfun.com/fetch/d2/d2be8de30f627c539c7829e3cf40f939.jpeg', 'какое-нибудь описание', 'Мост, город, закат'),
(9, 1, 'https://get.wallhere.com/photo/mountains-looking-away-long-hair-anime-anime-girls-blue-eyes-open-mouth-sky-clouds-school-uniform-dark-hair-original-characters-bangs-solo-Coffee-Kizoku-screenshot-computer-wallpaper-mangaka-121042.jpg', 'фу', 'Мост, город, закат'),
(10, 1, 'https://img.goodfon.ru/original/2048x1362/e/14/mma-fight-ground.jpg', 'мма', 'Мост, город, закат'),
(11, 1, 'https://auto.vercity.ru/gallery/img/automobiles/Dodge/2008%20Dodge%20Challenger%20SRT8/900x/2008%20Dodge%20Challenger%20SRT8%20088.jpg', 'я красивый ?', 'Мост, город, закат'),
(23, 17, 'https://images.wallpaperscraft.ru/image/single/kot_zelenyj_fon_bliki_78445_1280x720.jpg', 'Кошка', ''),
(24, 11, 'https://fastly.picsum.photos/id/1029/1920/1080.jpg?hmac=BQZeJjvc4Wya8t9NUpQbpz8gRgGMmz7DH9IX6oP2O9s', '123', ''),
(25, 23, 'https://fastly.picsum.photos/id/1029/1920/1080.jpg?hmac=BQZeJjvc4Wya8t9NUpQbpz8gRgGMmz7DH9IX6oP2O9s', 'qwerqwr', ''),
(26, 23, 'https://picsum.photos/200/300', 'test', ''),
(27, 23, 'https://fastly.picsum.photos/id/1029/1920/1080.jpg?hmac=BQZeJjvc4Wya8t9NUpQbpz8gRgGMmz7DH9IX6oP2O9s', 'qwerqwr', ''),
(28, 23, '', '', ''),
(29, 23, 'https://fastly.picsum.photos/id/1029/1920/1080.jpg?hmac=BQZeJjvc4Wya8t9NUpQbpz8gRgGMmz7DH9IX6oP2O9s', 'tes', ''),
(30, 23, '2134123', 'tes', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `password` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `password`, `Email`) VALUES
(1, 'Катя', '123йцу', 'test@mail.com'),
(9, '', '1234', 'qwertyuiop@gmail.com'),
(10, '', '123йцу', 'test@mail.com'),
(11, '', '123', '123'),
(12, '', '123', '123'),
(13, '', '123456789', 'asdfghjkl'),
(14, '', '123456789', 'asdfghjkl'),
(15, '', '123456789', 'asdfghjkl'),
(16, '', 'zxc', 'zxc'),
(17, '', '123', 'fofa'),
(18, '', '123', '123'),
(21, '', '321', '321'),
(22, '', '123', 'alex@mail.ru'),
(23, '', 'admin', 'admin'),
(24, '', 'qwerty12345', 'srzako@mail.ru'),
(25, '', '123', 'tttt@mail.ru'),
(26, '', 'qwerty12345', 'zako@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pid` (`Pid`),
  ADD KEY `Uid` (`Uid`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Uid` (`Uid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Pid`) REFERENCES `photos` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
