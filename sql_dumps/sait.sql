-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2024 г., 09:55
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogg`
--

CREATE TABLE `catalogg` (
  `id` int NOT NULL,
  `dostypno` tinyint(1) DEFAULT '1',
  `namee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` set('Ногинск','Дубай') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateauto` set('Внедорожник','Бизнес','Премиум','Спорткар','Комфорт') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `god` int NOT NULL,
  `typemot` set('Бензин','Дизель','Электро') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` float NOT NULL,
  `loshad` int NOT NULL,
  `max` int NOT NULL,
  `mid` int NOT NULL,
  `min` int NOT NULL,
  `fullopes` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogg`
--

INSERT INTO `catalogg` (`id`, `dostypno`, `namee`, `city`, `cateauto`, `fullname`, `god`, `typemot`, `volume`, `loshad`, `max`, `mid`, `min`, `fullopes`) VALUES
(2, 1, 'Jaguar', 'Дубай', 'Бизнес', 'Jaguar XF', 2012, 'Бензин', 5, 250, 6590, 5931, 5272, 'Jaguar XF в 2012 относился к 1 поколению, выпускался в кузове: седан, универсал. Автомобиль комплектовался моторами объёмом: 2.0, 2.2, 3.0, 5.0 л. В 2012 году Jaguar XF прошел рестайлинг.'),
(3, 1, 'KIA', 'Дубай', 'Внедорожник', 'KIA SPORTAGE', 2022, 'Бензин', 7.4, 190, 7500, 6750, 6000, 'Кроссовер от компании Kia Motors. Производится с 1992 года. В настоящий момент выпускается пятое поколение Sportage. '),
(4, 1, 'Lexus', 'Ногинск', 'Комфорт', 'Lexus IS', 2018, 'Бензин', 2.3, 245, 14000, 10200, 8500, 'Спортивный автомобиль среднего класса, продаваемый брендом Lexus. Ранее IS выпускался в Японии под названием Toyota Altezza. Первое поколение Altezza появилось в Японии в октябре 1998 года, в то время как Lexus IS дебютировал в Европе в 1999 году и в Северной Америке в 2000 году.  '),
(5, 1, 'Toyota', 'Дубай', 'Внедорожник', 'Toyota RAV4', 2017, 'Бензин', 2.5, 199, 8500, 7000, 5500, 'Компактный кроссовер, запущенный в производство в Японии в 1994 году. Первое поколение позиционировалось компанией Toyota как молодёжный автомобиль для активного отдыха, отсюда и происхождение названия, цифра «4» указывает на постоянный полный привод.'),
(6, 1, 'Mazda', 'Ногинск', 'Спорткар', ' Mazda 6', 2021, 'Бензин', 2.1, 194, 5990, 5391, 4792, 'Динамика важна не только на дороге. Mazda6 стремительно расширяет список инновационных технологий, делающих каждый день за рулем комфортнее и безопаснее. Беспроводное подключение Apple CarPlay/Android Auto, адаптивный круиз-контроль MRCC, полностью светодиодная адаптивная система освещения ALH - узнайте подробнее, как именно Mazda6 ускоряет темп прогресса.'),
(7, 1, 'Bugatti', 'Дубай', 'Спорткар', 'Bugatti Chiron', 2022, 'Бензин', 8, 1500, 680000, 350000, 20000, 'Bugatti Chiron дебютировал на международном ежегодном женевском автосалоне в 2016 году. Автомобиль пришел на смену модели Veyron и был назван в честь автомобильного гонщика Луи-Александра Широна.  Внешность новинки во многом повторяет концепт Vision Gran Turismo, увидевший свет осенью 2015 года. У гиперкара потрясающая оптика головного освещения, состоящая из четырех светодиодных элементов в каждой фаре.');

-- --------------------------------------------------------

--
-- Структура таблицы `deleted`
--

CREATE TABLE `deleted` (
  `id` int NOT NULL,
  `dostypno` tinyint(1) NOT NULL,
  `namee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` set('Ногинск','Дубай') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cateauto` set('Внедорожник','Бизнес','Премиум','Спорткар','Комфорт') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fullname` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `god` int NOT NULL,
  `typemot` set('Бензин','Дизель','Электро') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `volume` float NOT NULL,
  `loshad` int NOT NULL,
  `max` int NOT NULL,
  `mid` int NOT NULL,
  `min` int NOT NULL,
  `fullopes` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogg`
--
ALTER TABLE `catalogg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogg`
--
ALTER TABLE `catalogg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `deleted`
--
ALTER TABLE `deleted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
