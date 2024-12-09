-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: database:3306
-- Время создания: Дек 09 2024 г., 06:32
-- Версия сервера: 8.4.0
-- Версия PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `docker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `entrance`
--

CREATE TABLE `entrance` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `datetime` date NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `entrance`
--

INSERT INTO `entrance` (`id`, `product_id`, `datetime`, `Quantity`) VALUES
(1, 2, '2024-12-09', 2578),
(2, 2, '2024-12-09', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `article` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`article`, `name`, `price`) VALUES
(1, 'dsfdasf', 5000),
(2, 'Кабачок', 1000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `entrance`
--
ALTER TABLE `entrance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`article`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `entrance`
--
ALTER TABLE `entrance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `article` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `entrance`
--
ALTER TABLE `entrance`
  ADD CONSTRAINT `entrance_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`article`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
