-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 11:24 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2db`
--

-- --------------------------------------------------------

--
-- Table structure for table `additive`
--

CREATE TABLE `additive` (
  `PrimarykeyAdditive` int(11) NOT NULL,
  `ingredientId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `additive`
--

INSERT INTO `additive` (`PrimarykeyAdditive`, `ingredientId`, `productId`) VALUES
(1, 17, 1),
(3, 34, 3),
(4, 35, 3),
(5, 49, 6);

-- --------------------------------------------------------

--
-- Table structure for table `allergie`
--

CREATE TABLE `allergie` (
  `PrimarykeyAllergie` int(11) NOT NULL,
  `ingredientId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allergie`
--

INSERT INTO `allergie` (`PrimarykeyAllergie`, `ingredientId`, `productId`) VALUES
(1, 18, 1),
(2, 23, 2),
(3, 24, 3),
(4, 26, 3),
(5, 41, 5),
(6, 42, 5),
(7, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `favoris`
--

CREATE TABLE `favoris` (
  `PrimarykeyFavoris` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favoris`
--

INSERT INTO `favoris` (`PrimarykeyFavoris`, `userId`, `produitId`) VALUES
(64, 31, 2),
(63, 30, 1),
(62, 29, 2),
(61, 29, 1),
(60, 29, 3),
(59, 15, 6),
(57, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `PrimarykeyHistory` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`PrimarykeyHistory`, `userId`, `produitId`, `date`) VALUES
(262, 30, 1, '2020-12-13 07:56:25'),
(264, 31, 2, '2020-12-13 08:09:06'),
(244, 30, 3, '2020-12-13 07:39:40'),
(194, 15, 5, '2020-10-02 21:26:09'),
(200, 28, 6, '2020-10-02 22:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `PrimarykeyIngredient` int(11) NOT NULL,
  `nameIngred` varchar(255) NOT NULL,
  `imageIngred` varchar(255) NOT NULL,
  `produitId` int(11) NOT NULL,
  `value` varchar(11) NOT NULL,
  `isAdditives` int(1) NOT NULL,
  `isAllergic` int(1) NOT NULL,
  `isOriginalInfo` int(1) NOT NULL,
  `isNutritionalFact` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`PrimarykeyIngredient`, `nameIngred`, `imageIngred`, `produitId`, `value`, `isAdditives`, `isAllergic`, `isOriginalInfo`, `isNutritionalFact`) VALUES
(1, 'Dried potatoes', 'Driedpotatoes.jpg', 1, '0', 0, 0, 0, 0),
(2, 'Corn Oil', 'CornOil.jpg', 1, '0', 0, 0, 0, 0),
(3, 'Cottonseed Oil', 'CottonseedOil.jpg', 1, '0', 0, 0, 0, 0),
(4, 'HIGH OLEIC SOYBEAN', 'HIGH_OLEIC_SOYBEAN.jpg', 1, '0', 0, 0, 0, 0),
(5, 'Sun Flower Oil', 'SunFlowerOil.jpg', 1, '0', 0, 0, 0, 0),
(7, 'Degerminated Yellow Corn Flour', 'DegerminatedYellowCornFlour.jpg', 1, '0', 0, 0, 0, 0),
(8, 'Cornstarch', 'cornstarch.jpg', 1, '0', 0, 0, 0, 0),
(9, 'Rice Flour', 'RiceFlour.jpg', 1, '0', 0, 0, 0, 0),
(10, 'maltodextrin', 'MALTODEXTRIN.jpg', 1, '0', 0, 0, 0, 0),
(11, 'Mono And Diglycerides', 'MONO-ANDDIGLYCERIDES.jpg', 1, '0', 0, 0, 0, 0),
(12, 'Salt', 'salt.jpg', 1, '1.3g', 0, 0, 0, 0),
(13, 'Wheat Starch', 'WHEATSTARCH.jpg', 1, '0', 0, 0, 0, 0),
(14, 'Sugar', 'sugar.jpg', 1, '1.2g', 0, 0, 0, 0),
(15, 'Saturated fatty acide', '\"\"', 1, '3.6g', 0, 0, 0, 0),
(16, 'Fat/lipides', '\"\"', 1, '31g', 0, 0, 0, 0),
(17, 'E471 - Mono- and dietary fatty acids', '\"\"', 1, '\"\"', 0, 0, 0, 0),
(18, 'Gluten', '\"\"', 1, '\"\"', 0, 0, 0, 0),
(19, 'Fat/lipids', '\"\"', 2, '56.2g', 0, 0, 0, 0),
(20, 'Saturated fatty acide', '\"\"', 2, '11.1', 0, 0, 0, 0),
(21, 'Sugar', 'sugar.jpg', 2, '8.5g', 0, 0, 0, 0),
(22, 'Salt', 'salt.jpg', 2, '0.6', 0, 0, 0, 0),
(23, 'Soja', 'Soja.jpg', 2, '\"\"', 0, 0, 0, 0),
(24, 'fresh milk', 'freshMilk.jpg', 3, '0', 0, 1, 0, 0),
(25, 'water', 'water.jpg', 3, '0', 0, 0, 0, 0),
(26, 'milk protein', 'milk protein.jpg', 3, '0', 0, 1, 0, 0),
(27, ' lactic ferments', ' lactic ferments.jpg', 3, '0', 0, 1, 0, 0),
(28, 'melting salts: calcium phosphates', 'melting salts: calcium phosphates.jpg', 3, '0', 1, 0, 0, 0),
(29, 'cream', 'cream.jpg', 3, '33%', 0, 0, 0, 0),
(30, 'Fat/lipides', '\"\"', 3, '29g', 0, 0, 0, 0),
(31, 'Acide gras sature', '\"\"', 3, '19.4', 0, 0, 0, 0),
(32, 'Sugar', 'Sugar.jpg', 3, '2g', 0, 0, 0, 0),
(33, 'Salt', '\"\"', 3, '1.4g', 0, 0, 0, 0),
(34, 'E452-Polyphosphates', '\"\"', 3, '0', 1, 0, 0, 0),
(35, 'E331-Citrate de soduim', '\"\"', 3, '0', 1, 0, 0, 0),
(36, 'E407 - carraghenances', '\"\"', 3, '0', 1, 0, 0, 0),
(37, 'Fat/lipides', '\"\"', 5, '17 g', 0, 0, 0, 0),
(38, 'Acide gras sature', '\"\"', 5, '4.3g', 0, 0, 0, 0),
(39, 'Sugar', '\"\"', 5, '15g', 0, 0, 0, 0),
(40, 'Salt', '\"\"', 5, '0.03', 0, 0, 0, 0),
(41, 'Gluten', '\"\"', 5, '0', 0, 0, 0, 0),
(42, 'Avoine', '\"\"', 5, '0', 0, 0, 0, 0),
(43, 'Dark Chocolat', '\"\"', 5, '0', 0, 0, 0, 0),
(44, 'flour', '\"\"', 5, '0', 0, 0, 0, 0),
(45, 'Fat/lipides', '\"\"', 6, '5.7 g', 0, 0, 0, 0),
(46, 'Acide gras sature', 'Acide gras sature.jpg', 6, '0.6 g', 0, 0, 0, 0),
(47, 'Sugar', 'Sugar.jpg', 6, '3.5 g', 0, 0, 0, 0),
(48, 'Salt', 'Salt.jpg', 6, '1.1 g', 0, 0, 0, 0),
(49, 'E300 - Acide ascorbique', '\"\"', 6, '0', 0, 0, 0, 0),
(50, 'Gluten', '\"\"', 6, '0', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nutriscore`
--

CREATE TABLE `nutriscore` (
  `PrimarykeyNutriScore` int(11) NOT NULL,
  `imageNutri` varchar(255) NOT NULL,
  `class` varchar(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `colorBorder` varchar(40) NOT NULL,
  `colorBackground` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutriscore`
--

INSERT INTO `nutriscore` (`PrimarykeyNutriScore`, `imageNutri`, `class`, `description`, `colorBorder`, `colorBackground`) VALUES
(1, 'Nutri-A.png', 'A', 'Absence of sugars, salt, lipids', '#038141', '#6fb792'),
(2, 'Nutri-B.png', 'B', 'No or little of sugars, salt, lipids', '#85bb2f', '#a7cd6a\r\n'),
(3, 'Nutri-C.png', 'C', 'Little quantity of sugars, salt, lipids ', '#fecb02', '#fee274'),
(4, 'nutri-D.png', 'D', 'Considerable quantity of sugars, salt, lipids', '#ee8100', ' #f5b76f'),
(5, 'nutri-E.png', 'E', 'Extensive amount of sugars, salt, lipids', '#e63e11', '#f29a82');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionfacts`
--

CREATE TABLE `nutritionfacts` (
  `PrimarykeyNutriFacts` int(11) NOT NULL,
  `ingredientId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutritionfacts`
--

INSERT INTO `nutritionfacts` (`PrimarykeyNutriFacts`, `ingredientId`, `productId`) VALUES
(1, '16', 1),
(2, '15', 1),
(3, '14', 1),
(4, '12', 1),
(5, '19', 2),
(6, '20', 2),
(7, '21', 2),
(8, '22', 2),
(9, '37', 5),
(10, '38', 5),
(11, '39', 5),
(12, '40', 5),
(14, '45', 6),
(15, '46', 6),
(16, '47', 6),
(17, '48', 6);

-- --------------------------------------------------------

--
-- Table structure for table `originalinfo`
--

CREATE TABLE `originalinfo` (
  `PrimaryKeyOrig` int(11) NOT NULL,
  `ingredientId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `originalinfo`
--

INSERT INTO `originalinfo` (`PrimaryKeyOrig`, `ingredientId`, `productId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 25, 3),
(11, 43, 5),
(12, 44, 5);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `PrimarykeyProduits` int(11) NOT NULL,
  `nameProd` varchar(255) NOT NULL,
  `codeBar` varchar(255) NOT NULL,
  `NuritionalScoreId` int(11) NOT NULL,
  `imageProd` varchar(255) NOT NULL,
  `nbIngred` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`PrimarykeyProduits`, `nameProd`, `codeBar`, `NuritionalScoreId`, `imageProd`, `nbIngred`) VALUES
(1, 'Pringles Original Chips', '5281028460020', 4, 'pringelsOriginal.jpg', 0),
(2, 'Creamy Peanut Butter', '5287000271226', 5, 'CreamyPeanutButter.jpg', 0),
(3, 'kiri', '5283009804243', 4, 'kiri.jpg', 12),
(5, 'Croustillant chocolat', '', 3, 'Croustillant chocolat.jpg', 0),
(6, 'Flour crackers', '\"\"', 1, 'Flour crackers.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `phone` int(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `vkey` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `FirstName`, `LastName`, `phone`, `Email`, `vkey`, `verified`, `Password`) VALUES
(3, 'Kamar', 'Omar', 0, 'amar@gmail.com', '', 1, 'amar123'),
(4, 'omar', 'el ali', 81256987, 'omar@gmail.com', '', 0, 'omar123'),
(5, 'noor', 'el ali', 87542103, 'noor@gmail.com', '', 0, 'noor123'),
(6, 'ffghj', 'hgfy', 59286, 'fcgftff@gvhjjk.cg', 'ggfsrtdtdt', 0, '123456'),
(7, 'Amal', 'amal', 789654, 'amal@dtf.com', 'cda281fe8a956f90e5b7214fbc3e202f', 0, 'amal123'),
(8, 'Amal', 'ELALi', 54855881, 'amal2@gmail.com', '212646cd7c193737c477e0d92d54e5be', 0, 'amal2123'),
(13, 'Amar', 'ELALi', 81215877, 'amarelali99@gmail.com', 'dad0b25b7054c6ceb758cb375497c45e', 0, 'amar123'),
(14, 'Alaa', 'Hawshar', 71525255, 'hawshar.alaa@gmail.com', 'ee523385d9aa1814f49313e00e4c4618', 1, 'alaa123'),
(15, 'Marwa', 'Ayoub', 87542100, 'marwa.ayoub@gmail.com', 'eaf33f6a07571963441b60cec996d467', 1, '123marwa'),
(22, 'Kamar', 'dev', 81255877, 'developer@uni.com', '126db123d82b140f3e0e15aafc84e8a5', 1, 'developer123'),
(23, 'Olivier', 'Rassi', 70634337, 'olivier.rassi@gmail.com', '54f8628ea22bd07b047474a5cd84fc66', 0, 'olivier123'),
(28, 'amar', 'Omar', 70437754, 'amarelali99@gmail.com', 'de26cd39bdae5a85878533ff0b950cb3', 1, '123'),
(30, 'Amar ', 'Omar', 81215888, 'amar@isae.com', '55f89124467396ba1b0c8e9ac4b147e0', 1, '123456'),
(25, 'abdl nour', 'el ali', 123456, 'nour@gmail.com', '1a7a51d4b209afddf65cd0302398c095', 1, 'nour123'),
(26, 'Abood', 'Omar', 789456, 'abood@gmail', 'f0a73adccbca87bd876ae1d711011ea4', 1, 'abood123'),
(31, 'amar ', 'elali', 71223344, 'elaliamar00@mail.com', '3789fdf67e4e2dd1cf6ea7efd1e30da3', 1, '123456789'),
(29, 'amar', 'pres', 81111222, 'amar@isae.edu.lb', '8b3926a47f1071314d0c7c91f8edeee4', 1, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additive`
--
ALTER TABLE `additive`
  ADD PRIMARY KEY (`PrimarykeyAdditive`);

--
-- Indexes for table `allergie`
--
ALTER TABLE `allergie`
  ADD PRIMARY KEY (`PrimarykeyAllergie`);

--
-- Indexes for table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`PrimarykeyFavoris`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`PrimarykeyHistory`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`PrimarykeyIngredient`);

--
-- Indexes for table `nutriscore`
--
ALTER TABLE `nutriscore`
  ADD PRIMARY KEY (`PrimarykeyNutriScore`);

--
-- Indexes for table `nutritionfacts`
--
ALTER TABLE `nutritionfacts`
  ADD PRIMARY KEY (`PrimarykeyNutriFacts`);

--
-- Indexes for table `originalinfo`
--
ALTER TABLE `originalinfo`
  ADD PRIMARY KEY (`PrimaryKeyOrig`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`PrimarykeyProduits`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additive`
--
ALTER TABLE `additive`
  MODIFY `PrimarykeyAdditive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `allergie`
--
ALTER TABLE `allergie`
  MODIFY `PrimarykeyAllergie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `PrimarykeyFavoris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `PrimarykeyHistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `PrimarykeyIngredient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `nutriscore`
--
ALTER TABLE `nutriscore`
  MODIFY `PrimarykeyNutriScore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nutritionfacts`
--
ALTER TABLE `nutritionfacts`
  MODIFY `PrimarykeyNutriFacts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `originalinfo`
--
ALTER TABLE `originalinfo`
  MODIFY `PrimaryKeyOrig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `PrimarykeyProduits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
