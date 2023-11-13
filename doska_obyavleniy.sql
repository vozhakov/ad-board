-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2021 г., 23:12
-- Версия сервера: 8.0.15
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
-- База данных: `doska_obyavleniy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `priority` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(10) UNSIGNED NOT NULL,
  `photo` varchar(300) NOT NULL,
  `confirm` enum('0','1') NOT NULL DEFAULT '0',
  `is_actual` enum('0','1') NOT NULL DEFAULT '1',
  `price` decimal(12,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_categories` int(11) NOT NULL,
  `id_regions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ads`
--

INSERT INTO `ads` (`id`, `name`, `phone`, `title`, `text`, `id_user`, `photo`, `confirm`, `is_actual`, `price`, `id_categories`, `id_regions`) VALUES
(1, 'Вася1', '66666666', 'Объявление 1', 'целые кластеры себе подобных.', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611170843361f_Desert.jpg', '0', '1', '1000.00', 2, 2),
(2, 'Вася2', '66666666', ' Продам', 'себе подобных.', 2, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611172a1a02fc_Lighthouse.jpg', '0', '1', '111111.00', 2, 3),
(3, 'Вася3', '66666666', ' Продам', 'внутренней политики объединены в ', 3, 'D:/OSPanel_5_3_5/domains/phptr/uploads/61117302a63dd_Desert.jpg', '0', '1', '1000.00', 3, 4),
(4, 'Вася4', '44444444', ' Продам', 'а также некоторые о', 6, 'D:/OSPanel_5_3_5/domains/phptr/uploads/6111732877e46_Lighthouse.jpg', '0', '1', '111111.00', 4, 5),
(5, 'Вася5', '55555', ' Продам111', 'но неопровержимые выводы, а также ', 7, 'D:/OSPanel_5_3_5/domains/phptr/uploads/6111734d4dd00_Lighthouse.jpg', '0', '1', '1000.00', 5, 6),
(8, 'Вася1', '66666666', ' Продам1', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/61142aab3e9f6_Lighthouse.jpg', '0', '1', '1000.00', 1, 1),
(9, 'Вася1', '66666666', ' Продам 2', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611432f6a6467_Desert.jpg', '0', '1', '1000.00', 1, 1),
(10, 'Вася1', '66666666', ' Продам 3', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/61143340b72bd_Lighthouse.jpg', '0', '1', '1000.00', 1, 1),
(11, 'Вася1', '66666666', ' Продам 4', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/61143357a0973_Desert.jpg', '0', '1', '111111.00', 1, 1),
(17, 'Вася1', '66666666', ' Продам 5', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, '', '0', '1', '1.00', 1, 1),
(18, 'Вася1', '66666666', ' Продам 6', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/6114384929798_Lighthouse.jpg', '0', '1', '1000.00', 1, 1),
(19, 'Вася1', '66666666', ' Продам 7', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/61143875a52f9_Desert.jpg', '0', '1', '111111.00', 1, 1),
(20, 'Вася1', '66666666', ' Продам 8', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/6114389c338d7_Desert.jpg', '0', '1', '1111.00', 1, 1),
(21, 'Вася1', '66666666', ' Продам 9', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438b26fdb1_Desert.jpg', '0', '1', '1000.00', 1, 1),
(22, 'Вася1', '66666666', ' Продам 10', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(23, 'Вася1', '66666666', ' Продам 11', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(24, 'Вася1', '66666666', ' Продам 12', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(25, 'Вася1', '66666666', ' Продам 13', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(26, 'Вася1', '66666666', ' Продам 17', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(27, 'Вася1', '66666666', ' Продам 16', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(28, 'Вася1', '66666666', ' Продам 15', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(29, 'Вася1', '66666666', ' Продам 14', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(30, 'Вася1', '66666666', ' Продам 25', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(31, 'Вася1', '66666666', ' Продам 24', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(32, 'Вася1', '66666666', ' Продам 23', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(33, 'Вася1', '66666666', ' Продам 22', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(34, 'Вася1', '66666666', ' Продам 21', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(35, 'Вася1', '66666666', ' Продам 20', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(36, 'Вася1', '66666666', ' Продам 19', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(37, 'Вася1', '66666666', ' Продам 18', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру ', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611438c7b118b_Lighthouse.jpg', '0', '1', '111111.00', 1, 1),
(38, 'Вася1', '66666666', 'Недвижимость 3', 'целые кластеры себе подобных.', 1, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611170843361f_Desert.jpg', '0', '1', '1000.00', 2, 2),
(39, 'Вася2', '66666666', 'Недвижимость 4', 'себе подобных.', 2, 'D:/OSPanel_5_3_5/domains/phptr/uploads/611172a1a02fc_Lighthouse.jpg', '0', '1', '111111.00', 2, 3),
(40, 'Иван', '12345678', 'Продам автомобиль', 'Хороший автомобиль', 8, 'D:/OSPanel_5_3_5/domains/phptr/uploads/6116961968600_нет фото цвет.jpg', '0', '1', '5000.00', 1, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_cat` tinyint(3) UNSIGNED NOT NULL,
  `name_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_cat`, `name_cat`) VALUES
(1, 'Транспорт'),
(2, 'Недвижимость'),
(3, 'Личные вещи'),
(4, 'Электроника, техника'),
(5, 'Дом и сад, мебель, бытовое'),
(6, 'Текстиль'),
(7, 'Животные'),
(8, 'Услуги и предложения'),
(9, 'Хобби, Отдых, Спорт'),
(10, 'Оборудование'),
(11, 'Строительные товары'),
(12, 'Продукты питания'),
(13, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id_region` tinyint(3) UNSIGNED NOT NULL,
  `name_region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id_region`, `name_region`) VALUES
(1, 'Алтайский край'),
(2, 'Амурская область'),
(3, 'Архангельская область'),
(4, 'Астраханская область'),
(5, 'Белгородская область'),
(6, 'Брянская область'),
(7, 'Владимирская область'),
(8, 'Волгоградская область'),
(9, 'Вологодская область'),
(10, 'Воронежская область'),
(11, 'г. Москва'),
(12, 'Еврейская автономная область'),
(13, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `reg_users`
--

CREATE TABLE `reg_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(96) NOT NULL,
  `password` varchar(96) NOT NULL,
  `email` varchar(96) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `rendKey` varchar(96) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ban` varchar(3) NOT NULL DEFAULT 'нет'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg_users`
--

INSERT INTO `reg_users` (`id`, `name`, `password`, `email`, `phone`, `rendKey`, `ban`) VALUES
(1, 'Вася1', '$2y$10$9nUhcgfq.Le5AXZRvdXG0.CpmC8Bo7YOSDepuUjZvNuvfBoLt4tFK', 't1@test.ru', '66666666', '){D%^T?o', 'нет'),
(2, 'Вася2', '$2y$10$GF9q5xEFY3Sbk6xUb18Pau62ZHMcIR4n5GWrCCPVN7RY8z9eQ0S76', 't2@test.ru', '66666666', '%,hzNL,]', 'нет'),
(3, 'Вася3', '$2y$10$SyR/hI.aBta1bJTNhvJZUu.EUMZPDl6qlXTQH63Cyfw57m7BhgHgW', 't3@test.ru', '66666666', ':]4FAa12', 'нет'),
(6, 'Вася4', '$2y$10$e7RTMxMsg/flD6nEWjdKq.wlxRpLgxlA1fPvH4Mgj2qboFYKdgwSK', 't4@test.ru', '44444444', 'WUcQ1rv1', 'нет'),
(7, 'Вася5', '$2y$10$YKfUpgcoagWDC/Xxpa/5f.M48reKd2WasQQcQWOWDnOBmuI5mnqZu', 't5@test.ru', '55555', '\"!XG/^%E', 'нет'),
(8, 'Иван', '$2y$10$Hu7zpC8WpQMRrvZlG56RhOh/9PKl4EWgoktLGYJGUpfFT6NJbAqTa', 'test6@test.ru', '12345678', '2$lD3Fjr', 'нет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`),
  ADD KEY `id_regions` (`id_regions`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_region`);

--
-- Индексы таблицы `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id_region` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
