-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 15 2022 г., 13:52
-- Версия сервера: 10.3.13-MariaDB-log
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
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `diploms`
--

CREATE TABLE `diploms` (
  `diplom_id` int(11) NOT NULL,
  `tl_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_topic` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `diploms`
--

INSERT INTO `diploms` (`diplom_id`, `tl_id`, `teacher_id`, `date_topic`, `student_id`) VALUES
(1, 7, 3, '2022-11-24', 4),
(2, 5, 5, '2022-11-17', 2),
(3, 3, 5, '2022-11-30', 8),
(4, 2, 6, '2022-11-07', 10),
(5, 6, 8, '2022-11-23', 2),
(6, 6, 4, '2022-11-15', 6),
(7, 10, 8, '2022-11-01', 2),
(8, 1, 7, '2022-11-24', 7),
(9, 2, 2, '2022-11-28', 3),
(10, 1, 4, '2022-11-21', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `scores`
--

CREATE TABLE `scores` (
  `student_id` int(11) NOT NULL,
  `score_on_the_exam` int(11) NOT NULL,
  `score_on_the_defense_of_the_diplom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `scores`
--

INSERT INTO `scores` (`student_id`, `score_on_the_exam`, `score_on_the_defense_of_the_diplom`) VALUES
(1, 5, 4),
(2, 3, 5),
(3, 3, 3),
(4, 5, 5),
(5, 4, 4),
(6, 4, 3),
(7, 5, 5),
(8, 3, 5),
(9, 4, 3),
(10, 2, 5),
(11, 5, 5),
(12, 2, 5),
(13, 3, 4),
(14, 4, 4),
(15, 5, 5),
(16, 4, 4),
(17, 3, 4),
(18, 4, 4),
(19, 3, 2),
(20, 4, 3),
(21, 4, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `Surname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Patronymic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offset_card_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`student_id`, `Surname`, `Name`, `Patronymic`, `offset_card_number`, `Faculty`, `Group`) VALUES
(1, 'Павлова', 'Милана', 'Евгеньевна', '1104', 'Биологический', '25'),
(2, 'Головина', 'Мира', 'Артуровна', '1804', 'Психология', '36'),
(3, 'Давыдов', 'Михаил', 'Глебович', '1500', 'Военное обучение', '101'),
(4, 'Павлов', 'Тихон', 'Константинович', '1901', 'Военное обучение', '101'),
(5, 'Царева', 'Алиса', 'Романова', '1759', 'Геологический', '37'),
(6, 'Лапина', 'Алиса', 'Кирилловна', '2800', 'Химический', '13'),
(7, 'Соколов', 'Вячеслав', 'Русланович', '3000', 'Геологический 	', '37'),
(8, 'Карасев', 'Александр', 'Владимирович', '3750', 'Искусство\r\n', '10'),
(9, 'Колесников', 'Даниил', 'Маркович', '4510', 'Исторический', '56'),
(10, 'Артёмова', 'Милана', 'Адамовна', '1000', 'Географический', '67'),
(11, 'Систейкин', 'Георгий', 'Николаевич', '3501', 'Психология', '36'),
(12, 'Тестив', 'Тест', 'Тестович', '3674', 'Военное обучение', '101'),
(13, 'Шаруда', 'Дмитрий', 'Степанович', '3502', 'Биологический', '25'),
(14, 'Кочетков', 'Виталий', 'Тимурович', '1355', 'Химический', '13'),
(15, 'Александров', 'Богдан', 'Олегович', '2530', 'Экономический', '1'),
(16, 'Кратц', 'Генрих', 'Александрович', '1337', 'Экономический', '1'),
(17, 'Смирнов', 'Дмитрий', 'Александрович', '1016', 'Искусство\r\n', '10'),
(18, 'Дорофеев', 'Артемий', 'Фёдорович', '1780', 'Химический', '13'),
(19, 'Воробьёв', 'Даниил', 'Алексеевич', '1580', ' 	Психология', '36'),
(20, 'Урусов', 'Денис', 'Юринович', '1104', 'Военное обучение', '101'),
(21, 'Герасимов', 'Лев', 'Михайлович', '2091', 'Химический', '37'),
(22, 'Фамилия', 'Имя', 'Отчество', '4000', 'Психология', '37');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `Surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Extent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rank` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `Surname`, `Name`, `Patronymic`, `Extent`, `Rank`, `Department`, `Telephone`, `Email`) VALUES
(1, 'Озеров', 'Венедикт', 'Севастьянович', 'Доцент', 'Доцент', 'Бакалавриат', '+7 (956) 558-52-52', 'venedikt26071979@hotmail.com'),
(2, 'Лозанов', 'Юрий', 'Лаврентиич', 'Профессор', 'Профессор', 'Специалитет', '+7 (958) 522-50-90', 'yuriy5434@gmail.com'),
(3, 'Яценковский', 'Сергей', 'Иванович', 'Профессор', 'Профессор', 'Магистратура', '+7 (916) 613-37-78', 'sergey4338@yandex.ru'),
(4, 'Убыш', 'Антон', 'Вениаминович', 'Доцент', 'Доцент', 'Специалитет', '+7 (917) 404-65-84', 'anton78@gmail.com'),
(5, 'Мирсиянов', 'Антон', 'Лукьевич', 'Доцент', 'Доцент', 'Магистратура', '+7 (942) 479-69-12', 'anton9308@rambler.ru'),
(6, 'Цехановецкий', 'Герасим', 'Арсеньевич', 'Профессор', 'Профессор', 'Бакалавриат', '+7 (925) 967-40-61', 'gerasim1977@outlook.com'),
(7, 'Милова', 'Марьяна', 'Марьяна', 'Доцент', 'Доцент', 'Бакалавриат', '+7 (965) 628-29-20', 'maryana4796@yandex.ru'),
(8, 'Ковальчук', 'Татьяна', 'Егоровна', 'Профессор', 'Профессор', 'Магистратура', '+7 (992) 114-97-99', 'tatyana79@ya.ru'),
(9, 'Воронова', 'Евгения', 'Викторовна', 'Доцент', 'Доцент', 'Специалитет', '+7 (922) 362-14-17', 'evgeniya9043@outlook.com'),
(10, 'Лилов', 'Иван', 'Захарович', 'Доцент', 'Доцент', 'Бакалавриат', '+7 (958) 811-38-80', 'ivan1995@ya.ru'),
(11, 'Капустов', 'Валерий', 'Ефимович', 'Профессор', 'Преподователь', 'Магистратура', '+7 (929) 126-30-26', 'vasiliy15@outlook.com'),
(12, 'Ховрунов', 'Давид', 'Тимофеевич', 'Профессор', 'Профессор', 'Магистратура', '+7 (919) 249-43-42', 'david1985@outlook.com'),
(13, 'Сабанцева', 'Вера', 'Тимофеевна', 'Преподователь', 'Профессор', 'Магистратура', '+7 (990) 719-13-34', 'vera1963@mail.ru'),
(14, 'Лещёв', 'Георгий', 'Иванович', 'Доцент', 'Доцент и профессор', 'Специалитет', '+7 (953) 102-52-12', 'georgiy1972@rambler.ru'),
(15, 'Кабаева', 'Зоя', 'Ираклиевна', 'Профессор', 'Преподователь', 'Бакалавриат', '+7 (987) 930-61-12', 'zoya23@gmail.com'),
(16, 'Козлова', 'Мира', 'Владимировна', 'Доцент', 'Профессор', 'Магистратура', '+7 (880) 555-35-35 ', 'kozlova56@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `topic_list`
--

CREATE TABLE `topic_list` (
  `tl_id` int(11) NOT NULL,
  `tl_title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `topic_list`
--

INSERT INTO `topic_list` (`tl_id`, `tl_title`) VALUES
(1, 'Проблемы и перспективы совершенствования государственного управления.'),
(2, 'Фрилансеры в сфере услуг.'),
(3, 'Социальная мобильность в современном обществе'),
(4, 'Неформальная занятость в Российской Федерации.'),
(5, 'Сиротство как проблема государства.'),
(6, 'Значение социальных сетей в современном обществе.'),
(7, 'Социологический прогноз на 21 век.'),
(8, 'Методы социализации школьников в России.'),
(9, 'Методики антистрессового управления персоналом.'),
(10, 'Миграционные процессы как причина социальных преобразований.'),
(11, 'Исследование лего игрушек');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diploms`
--
ALTER TABLE `diploms`
  ADD PRIMARY KEY (`diplom_id`),
  ADD KEY `diploms_fk0` (`tl_id`),
  ADD KEY `diploms_fk1` (`teacher_id`),
  ADD KEY `diploms_fk2` (`student_id`);

--
-- Индексы таблицы `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`student_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Индексы таблицы `topic_list`
--
ALTER TABLE `topic_list`
  ADD PRIMARY KEY (`tl_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diploms`
--
ALTER TABLE `diploms`
  MODIFY `diplom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `topic_list`
--
ALTER TABLE `topic_list`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `diploms`
--
ALTER TABLE `diploms`
  ADD CONSTRAINT `diploms_fk0` FOREIGN KEY (`tl_id`) REFERENCES `topic_list` (`tl_id`),
  ADD CONSTRAINT `diploms_fk1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`),
  ADD CONSTRAINT `diploms_fk2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Ограничения внешнего ключа таблицы `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
