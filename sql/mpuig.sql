-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 06:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpuig`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `dateTime` datetime NOT NULL,
  `isValidated` tinyint(1) NOT NULL DEFAULT '0',
  `userId` int(11) NOT NULL,
  `restaurantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cuisinetype`
--

CREATE TABLE `cuisinetype` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuisinetype`
--

INSERT INTO `cuisinetype` (`id`, `name`) VALUES
(1, 'African'),
(2, 'Albanian'),
(3, 'Algerian'),
(4, 'American'),
(5, 'Arabic'),
(6, 'Argentinean'),
(7, 'Armenian'),
(8, 'Asian'),
(9, 'Australian'),
(10, 'Austrian'),
(11, 'Bahamian'),
(12, 'Balti'),
(13, 'Bangladeshi'),
(14, 'Bar'),
(15, 'Barbecue'),
(16, 'Basque'),
(17, 'Belgian'),
(18, 'Brazilian'),
(19, 'Brew Pub'),
(20, 'British'),
(21, 'Cafe'),
(22, 'Cajun & Creole'),
(23, 'Cantonese'),
(24, 'Caribbean'),
(25, 'Central American'),
(26, 'Central Asian'),
(27, 'Central European'),
(28, 'Chinese'),
(29, 'Colombian'),
(30, 'Contemporary'),
(31, 'Cuban'),
(32, 'Danish'),
(33, 'Deli'),
(34, 'Diner'),
(35, 'Dutch'),
(36, 'Eastern European'),
(37, 'Ecuadorean'),
(38, 'European'),
(39, 'Fast Food'),
(40, 'Filipino'),
(41, 'French'),
(42, 'Fusion'),
(43, 'Gastropub'),
(44, 'German'),
(45, 'Greek'),
(46, 'Grill'),
(47, 'Hawaiian'),
(48, 'Healthy'),
(49, 'Hong Kong'),
(50, 'Imperial Chinese'),
(51, 'Indian'),
(52, 'Indonesian'),
(53, 'International'),
(54, 'Irish'),
(55, 'Israeli'),
(56, 'Italian'),
(57, 'Japanese'),
(58, 'Korean'),
(59, 'Latin'),
(60, 'Lebanese'),
(61, 'Mediterranean'),
(62, 'Mexican'),
(63, 'Middle Eastern'),
(64, 'Moroccan'),
(65, 'Nepali'),
(66, 'NorthEastern Chinese'),
(67, 'Pakistani'),
(68, 'Persian'),
(69, 'Peruvian'),
(70, 'Pizza'),
(71, 'Polish'),
(72, 'Portuguese'),
(73, 'Pub'),
(74, 'Scandinavian'),
(75, 'Seafood'),
(76, 'Shanghai'),
(77, 'Soups'),
(78, 'South American'),
(79, 'Spanish'),
(80, 'Steakhouse'),
(81, 'Street Food'),
(82, 'Sushi'),
(83, 'Swedish'),
(84, 'Swiss'),
(85, 'Szechuan'),
(86, 'Taiwanese'),
(87, 'Thai'),
(88, 'Tunisian'),
(89, 'Turkish'),
(90, 'Venezuelan'),
(91, 'Vietnamese'),
(92, 'Wine Bar');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(500) NOT NULL,
  `restaurantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filePath`, `restaurantId`) VALUES
(1, 'http://img2.rtve.es/i/?w=1600&i=1429107523835.jpg', 1),
(2, 'https://www.formulatv.com/images/noticias/73600/73635/7_30b37638d4.jpg', 2),
(3, 'https://www.lavanguardia.com/r/GODO/LV/p4/WebSite/2017/03/31/Recortada/img_randres_20170331-092323_imagenes_lv_terceros_pie_rte_raco_de_la_paella_valencia-kdsH-U421335208134WWD-992x558@LaVanguardia-Web.jpg', 3),
(4, 'https://eltertulianoblog.files.wordpress.com/2017/06/cuy-chactado.jpg?w=800&h=450&crop=1', 4),
(5, 'http://cadenaser00.epimg.net/emisora/imagenes/2017/10/19/ser_cuenca/1508422914_684312_1508423109_noticia_normal.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text,
  `openingHours` varchar(200) DEFAULT NULL,
  `priceCategory` varchar(10) DEFAULT NULL,
  `locality` varchar(200) DEFAULT NULL,
  `route` varchar(200) DEFAULT NULL,
  `streetNumber` varchar(20) DEFAULT NULL,
  `postalCode` varchar(20) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `phoneNumber` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `isTrending` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `description`, `openingHours`, `priceCategory`, `locality`, `route`, `streetNumber`, `postalCode`, `latitude`, `longitude`, `phoneNumber`, `website`, `email`, `rating`, `isTrending`) VALUES
(1, 'La Bottega de Michele', 'La mayor decepción', 'Wed\r\n9:00 AM - 5:00 PM\r\nThu - Tue\r\n12:00 AM - 10:30 AM\r\n1:00 PM - 11:00 PM', '$$-$$$', 'Palma de Mallorca\r\n', 'Calle Fabrica', '17', '07013', 39.5721647, 2.6392585, '+34 971 45 48 92', 'http://www.labottegadimichele.com/', 'marmoreno76@yahoo.es', 4.5, 1),
(2, 'Millo Cocina Mestiza', 'No merece una reseña', 'Mon - Sat\r\n7:30 PM - 11:00 PM', '$$', 'Palma de Mallorca', 'Calle Caro', '30', '07013', 39.5731122, 2.6385228, '+34 871 04 04 13', 'https://www.millorestaurant.com/', 'restaurante-millo@hotmail.com', 4.98, 1),
(3, 'La Nueva Burguesa', 'Un oscuro misterio', 'Mon - Sat\r\n12:30 PM - 3:30 PM\r\n7:00 PM - 11:00 PM', '$$-$$$', 'Palma de Mallorca', 'Calle Sant Magi', '76', '07013', 39.5705883, 2.6361307, '+34 871 50 95 30', 'http://lanuevaburguesa.com/', NULL, 4.12, 1),
(4, 'Norice Palma', 'Posiblemente, la PEOR experiencia culinaria de mi vida\r\n\r\n', 'Sun\r\n9:00 AM - 11:30 PM\r\nMon - Sat\r\n12:30 PM - 4:00 PM\r\n7:30 PM - 11:30 PM', '$$', 'Palma de Mallorca', 'Plaça de Sant Antoni', '17', '07002', 39.5713068, 2.6559727, '+34 871 11 53 08', 'https://www.noricepalma.com', NULL, 3.98, 0),
(5, 'Taller de Mar', 'Malo, feo y caro', NULL, '$$$', 'Palma de Mallorca', 'Calle Cotoner', '54', '07013', 39.570985, 2.6368594, '+34 971 28 93 75', 'http://www.tallerdemar.com', 'reservas@tallerdemar.com', 4.34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantcuisinetype`
--

CREATE TABLE `restaurantcuisinetype` (
  `id` int(11) NOT NULL,
  `restaurantId` int(11) NOT NULL,
  `cuisineTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurantcuisinetype`
--

INSERT INTO `restaurantcuisinetype` (`id`, `restaurantId`, `cuisineTypeId`) VALUES
(1, 1, 56),
(2, 1, 61),
(3, 1, 38),
(4, 2, 59),
(5, 2, 42),
(6, 2, 53),
(7, 3, 46),
(8, 3, 48),
(9, 3, 53),
(10, 4, 8),
(11, 4, 87),
(12, 4, 42),
(13, 5, 57),
(14, 5, 56),
(15, 5, 61);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurantId` (`restaurantId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `cuisinetype`
--
ALTER TABLE `cuisinetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurantId` (`restaurantId`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantcuisinetype`
--
ALTER TABLE `restaurantcuisinetype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurantId` (`restaurantId`),
  ADD KEY `cuisineTypeId` (`cuisineTypeId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuisinetype`
--
ALTER TABLE `cuisinetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurantcuisinetype`
--
ALTER TABLE `restaurantcuisinetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_Comment_Restaurant` FOREIGN KEY (`restaurantId`) REFERENCES `restaurant` (`id`),
  ADD CONSTRAINT `FK_Comment_User` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_Image_Restaurant` FOREIGN KEY (`restaurantId`) REFERENCES `restaurant` (`id`);

--
-- Constraints for table `restaurantcuisinetype`
--
ALTER TABLE `restaurantcuisinetype`
  ADD CONSTRAINT `FK_RestaurantCuisineType_CuisineType` FOREIGN KEY (`cuisineTypeId`) REFERENCES `cuisinetype` (`id`),
  ADD CONSTRAINT `FK_RestaurantCuisineType_Restaurant` FOREIGN KEY (`restaurantId`) REFERENCES `restaurant` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
