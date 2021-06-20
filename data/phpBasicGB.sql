-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2021 at 03:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpBasicGB`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `item_count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `item_id`, `session_id`, `item_count`) VALUES
(27, 5, '16ef80add163f3b05cc958b51c9873c1', 1),
(28, 3, '16ef80add163f3b05cc958b51c9873c1', 1),
(32, 4, 'de2a82071535d36988926e86874ae495', 1),
(33, 4, 'e2a12bdffc7821cbb320b3c93a4a4d30', 1),
(34, 6, 'e2a12bdffc7821cbb320b3c93a4a4d30', 1),
(35, 4, 'ad655d389f33702eb3145eb1a8a7fae6', 1),
(36, 3, 'b8759578433768ce921e42b6479edfb6', 1),
(37, 3, '8c8eda9f1815b92448c4c4b41dc46e4e', 1),
(38, 4, '8c8eda9f1815b92448c4c4b41dc46e4e', 1),
(39, 4, '4406448a92c53a4ef73b449bfa244b01', 1),
(41, 3, '4406448a92c53a4ef73b449bfa244b01', 1),
(42, 4, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(44, 3, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(45, 5, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(46, 4, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(47, 4, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(48, 5, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(49, 3, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(50, 3, '0c3d0307a6d29232c3fc0ab3baac3305', 1),
(51, 3, 'a85c0f27e366974811c941c95d5ea759', 1),
(52, 3, '3cfaebac419675fc3b212cf720b9d3d5', 1),
(53, 4, '3cfaebac419675fc3b212cf720b9d3d5', 1),
(54, 3, 'f68af9dcd23b146f58ddce14054f26fa', 1),
(55, 4, 'f68af9dcd23b146f58ddce14054f26fa', 1),
(57, 4, 'a44b04b9539095ca16ef4363fc49f63b', 1),
(59, 4, '7ee52e26947c5ba99a8bef1bef965952', 1),
(61, 4, '0fe80fef516ec326d51e38de976e9518', 1),
(62, 5, '0fe80fef516ec326d51e38de976e9518', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(288) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `image` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `description`, `price`, `view`, `image`) VALUES
(3, 'Властелин колец', 'Перед вами трилогия «Властелин Колец». Своеобразная «Библия от фэнтези». Книга книг ХХ века. Самое популярное, самое читаемое, самое культовое произведение ушедшего столетия.\r\n.В первой книге, «Хранители Кольца», хоббит Фродо Торбинс, племянник знаменитого Бильбо Торбинса, отправляется в поход, от завершения которого зависит судьба всего Средиземья. Кольцо, оставленное ему дядей, разыскивает темный властелин Мордора, и это кольцо может решить исход кровопролитной войны, охватившей мирный некогда край. В поход вместе с Фродо выступают чародей Гэндальф и представители разных земель и народов Средиземья… ', 400, 58, '01book.jpg'),
(4, 'Космобиолухи', 'С выходом на пенсию жизнь только начинается — особенно если вы еще молоды душой и крепки телом! Отставной космодесантник Станислав Петухов узнал это на собственном опыте, одним пасмурным осенним днем нечаянно купив грузовой космический корабль и получив в придачу разношерстную, но полную энтузиазма команду, в которой есть даже боевой киборг и не менее боевая кошка. А с таким стартовым комплектом приключения не заставят себя долго ждать! Научные экспедиции, космические пираты и всевозможные формы жизни прямо-таки соревнуются за внимание маленькой, но гордой транспортной компании, не теряющей оптимизма в абсолютно любой ситуации. Секретная база Альянса? Найдем! Парочка странных инопланетян, опоздавших на последний рейс до Мерака? Загружайте! Шайка работорговцев? Сейчас мы ей покажем, где хассы зимуют! А главное, помните: любить ваш лиса, и он любить вас! \r\n\r\nЕсли Вам нравится жанр юмористической фантастики, то эту книгу определенно стоит прочитать.', 700, 53, '02book.jpg'),
(5, '1984', 'Своеобразный антипод второй великой антиутопии XX века - \"О дивный новый мир\" Олдоса Хаксли. Что, в сущности, страшнее: доведенное до абсурда \"общество потребления\" - или доведенное до абсолюта \"общество идеи\"?\r\nПо Оруэллу, нет и не может быть ничего ужаснее тотальной несвободы...', 200, 43, '03book.jpg'),
(6, 'Гравити Фолз. Дневник 3', 'Гравити Фолз. Дневник 3 - книга, которая фигурирует в мультфильме. Авторская разработка самого создателя мультсериала!\r\nКнига раскрывает секреты городка Гравити Фолз и другие загадки, не раскрытые в мульфильме. ', 1500, 22, '04book.jpg'),
(12, 'test', 'description', 100, 0, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(288) NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `likes`) VALUES
(3, '01.jpg', 1),
(4, '02.jpg', 3),
(7, '03.jpg', 1),
(8, '04.jpg', 0),
(9, '05.jpg', 0),
(10, '06.jpg', 0),
(11, '07.jpg', 2),
(12, '08.jpg', 4),
(13, '09.jpg', 0),
(14, '10.jpg', 0),
(15, '11.jpg', 0),
(16, '12.jpg', 0),
(17, '13.jpg', 1),
(18, '14.jpg', 1),
(19, '15.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(188) NOT NULL,
  `phone` varchar(188) NOT NULL,
  `session_id` text NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(188) NOT NULL DEFAULT 'processed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`, `order_date`, `status`) VALUES
(2, '2222', '22222', '16ef80add163f3b05cc958b51c9873c1', '2021-06-10', 'finish'),
(3, 'dddd', 'ssss', 'cf19e93bb57dae52a621f31256fa2539', '2021-06-10', 'Доставлен'),
(4, 'ввввв', 'ааааа', 'f0bb6fe25a274bb73f9ddab4500a7c8b', '2021-06-10', 'Оформлен'),
(5, 'dddd', '2222', 'de2a82071535d36988926e86874ae495', '2021-06-10', 'finish'),
(6, 'fff', 'qqq', 'e2a12bdffc7821cbb320b3c93a4a4d30', '2021-06-10', 'Оформлен'),
(7, '22', 'rrrr', 'ad655d389f33702eb3145eb1a8a7fae6', '2021-06-10', 'finish'),
(14, 'test', 'test', 'f68af9dcd23b146f58ddce14054f26fa', '2021-06-10', 'Оформлен'),
(15, 'ddddd', 'eeeeee', 'a44b04b9539095ca16ef4363fc49f63b', '2021-06-10', 'Оформлен'),
(16, 'mm', 'nn', '7ee52e26947c5ba99a8bef1bef965952', '2021-06-10', 'truble');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(188) NOT NULL,
  `pass` int(11) NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', 123, '107061954560b5228057e5b9.00709034'),
(2, 'user1', 456, 'ffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
