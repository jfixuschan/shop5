-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 11:40
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `name` varchar(50) NOT NULL,
  `descr` varchar(180) NOT NULL,
  `img` varchar(30) NOT NULL,
  `price` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`name`, `descr`, `img`, `price`, `id`) VALUES
('футболка евангелион', 'любимая футболка', 'img/4.jpg', '3000руб', 1),
('Худи Гарвард', 'Любимое худи', 'img/5.jpg', '2500руб', 2),
('Портрет Дориана Грея', 'любимая книга', 'img/6.jpg', '250руб', 3),
('Гитара', 'моя гитара', 'img/7.jpg', '7000руб', 4),
('Рубашка', 'моя рубашка', 'img/9.jpg', '2500руб', 5),
('Overwatch', 'любимая игра', 'img/10.jpg', '2500руб', 6),
('Frankenstein Girls', 'любимый альбом', 'img/11.jpeg', '3000руб', 7),
('Таро Светлый Дух', 'мои карты таро', 'img/12.jpg', '800руб', 8),
('ред бул зеленый', 'любимый напиток', 'img/8.jpg', '50000руб', 9),
('тетрадь Русский сувенир', 'любимая тетрадь', 'img/13.jpg', '250руб', 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
