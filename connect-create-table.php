<?php
// Подключение к базе. БД создана вручную
$conn = mysqli_connect('localhost', 'root', '', 'doska_obyavleniy') or die('Ошибка соединения с БД');
mysqli_set_charset($conn, "utf8") or die('Не установлена кодировка');

// создаем базу данных
$sql = "CREATE DATABASE IF NOT EXISTS doska_obyavleniy DEFAULT CHARSET utf8
COLLATE utf8_general_ci";
mysqli_query($conn, $sql);

// Создание таблицу регистрации пользователей. 
$sql = "CREATE TABLE IF NOT EXISTS `doska_obyavleniy`.`reg_users` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`name` VARCHAR(96) NOT NULL ,
`password` VARCHAR(96) NOT NULL ,
`email` VARCHAR(96) NOT NULL ,
`phone` VARCHAR(16) NOT NULL ,
`rendKey` VARCHAR(96),
`time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`ban` VARCHAR(3) NOT NULL DEFAULT 'нет',
PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
mysqli_query($conn, $sql); // создаем таблицу

// категории - родительсая таблица, справочник
$sql = "CREATE TABLE IF NOT EXISTS `categories` (
  `id_cat` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB;";
mysqli_query($conn, $sql); // создаем таблицу

$sql = "INSERT INTO `categories` (`id_cat`, `name_cat`) VALUES
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
(13, 'Другое');";
mysqli_query($conn, $sql); // записываем в таблицу

// регионы - родительсая таблица, справочник
$sql = "CREATE TABLE IF NOT EXISTS `regions` (
  `id_region` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name_region` varchar(255) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB;";
mysqli_query($conn, $sql); // создаем таблицу

$sql = "INSERT INTO `regions` (`id_region`, `name_region`) VALUES
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
(13, 'Другое');";
mysqli_query($conn, $sql); // записываем в таблицу

// таблица объявлений
 $sql = "CREATE TABLE IF NOT EXISTS `doska_obyavleniy`.`ads` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(255) NOT NULL ,
`phone` VARCHAR(255) NOT NULL ,
`title` VARCHAR(255) NOT NULL ,
`text` TEXT NOT NULL ,
`priority` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
`id_user` INT UNSIGNED NOT NULL ,
`photo` VARCHAR(300) NOT NULL ,
`confirm` ENUM('0','1') NOT NULL DEFAULT '0' ,
`is_actual` ENUM('0','1') NOT NULL DEFAULT '1' ,
`price` DECIMAL(12, 2) NOT NULL ,
`time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
`id_categories` INT NOT NULL ,
`id_regions` INT NOT NULL , PRIMARY KEY (`id`)
  ) ENGINE = InnoDB;";
mysqli_query($conn, $sql); // создаем таблицу

