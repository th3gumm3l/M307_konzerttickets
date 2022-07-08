-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Jul 2022 um 14:33
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kurseictbz_30714`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `concerts`
--

DROP TABLE IF EXISTS `concerts`;
CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `concerts`
--

INSERT INTO `concerts` (`id`, `artist`) VALUES
(1, 'The Beatles'),
(2, 'Elvis Presley'),
(3, 'Michael Jackson'),
(4, 'Madonna'),
(5, 'Elton John'),
(6, 'ABBA'),
(7, 'Led Zeppelin'),
(8, 'Pink Floyd'),
(9, 'Mariah Carey'),
(10, 'Céline Dion'),
(11, 'AC/DC'),
(12, 'Whitney Houston'),
(13, 'Queen'),
(14, 'The Rolling Stones'),
(15, 'Rihanna'),
(16, 'Taylor Swift'),
(17, 'Eminem'),
(18, 'Garth Brooks'),
(19, 'Eagles'),
(20, 'U2'),
(21, 'Billy Joel'),
(22, 'Phil Collins'),
(23, 'Aerosmith'),
(24, 'Frank Sinatra'),
(25, 'Barbra Streisand'),
(26, 'Bon Jovi'),
(27, 'Genesis'),
(28, 'Donna Summer'),
(29, 'Neil Diamond'),
(30, 'Kanye West'),
(31, 'Bruce Springsteen'),
(32, 'Bee Gees'),
(33, 'Julio Iglesias'),
(34, 'Dire Straits'),
(35, 'Lady Gaga'),
(36, 'Metallica'),
(37, 'Bruno Mars'),
(38, 'Jay Z'),
(39, 'Rod Stewart'),
(40, 'Britney Spears'),
(41, 'Fleetwood Mac'),
(42, 'George Strait'),
(43, 'Backstreet Boys'),
(44, 'Guns N’ Roses'),
(45, 'Prince'),
(46, 'Paul McCartney'),
(47, 'Kenny Rogers'),
(48, 'Janet Jackson'),
(49, 'Chicago'),
(50, 'The Carpenters'),
(51, 'Bob Dylan'),
(52, 'George Michael'),
(53, 'Bryan Adams'),
(54, 'Def Leppard'),
(55, 'Cher'),
(56, 'Lionel Richie'),
(57, 'Olivia Newton-John'),
(58, 'Stevie Wonder'),
(59, 'Tina Turner'),
(60, 'Kiss'),
(61, 'The Who'),
(62, 'Barry White'),
(63, 'Katy Perry'),
(64, 'Santana'),
(65, 'Earth, Wind & Fire'),
(66, 'Beyoncé'),
(67, 'Shania Twain'),
(68, 'R.E.M.'),
(69, 'B’z'),
(70, 'Coldplay'),
(71, 'Van Halen'),
(72, 'Red Hot Chili Peppers'),
(73, 'The Doors'),
(74, 'Barry Manilow'),
(75, 'Johnny Hallyday'),
(76, 'The Black Eyed Peas'),
(77, 'Journey'),
(78, 'Kenny G'),
(79, 'Enya'),
(80, 'Green Day'),
(81, 'Tupac Shakur'),
(82, 'Nirvana'),
(83, 'The Police'),
(84, 'Bob Marley'),
(85, 'Depeche Mode'),
(86, 'Aretha Franklin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `payed` tinyint(1) NOT NULL DEFAULT 0,
  `paymentterm` int(11) NOT NULL,
  `paymentdate` varchar(255) NOT NULL,
  `overdue` varchar(255) NOT NULL,
  `fk_concertID` int(11) NOT NULL,
  `fk_userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `amount`, `payed`, `paymentterm`, `paymentdate`, `overdue`, `fk_concertID`, `fk_userID`) VALUES
(13, '2022-07-08', 3, 0, 0, 'd', 'd', 11, 13);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prename` varchar(190) NOT NULL,
  `name` varchar(190) NOT NULL,
  `email` varchar(190) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `prename`, `name`, `email`, `phone`) VALUES
(13, 'Tim', 'Bernhard', 'tim.bernhard@me.com', '0763446047');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_concertID` (`fk_concertID`),
  ADD KEY `fk_userID` (`fk_userID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_concertID` FOREIGN KEY (`fk_concertID`) REFERENCES `concerts` (`id`),
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`fk_userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
