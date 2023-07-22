-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jul 2023 um 13:37
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be19_cr4_marvinvandyck_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_marvinvandyck_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be19_cr4_marvinvandyck_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `title` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `isbn_code` int(11) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(20) NOT NULL,
  `author_last_name` varchar(20) NOT NULL,
  `publisher_name` varchar(20) NOT NULL,
  `publisher_address` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  `pieces` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`title`, `image`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `pieces`) VALUES
('Pirates of the Caribbean: On Stranger Tides', 'PotC1.jpg', 1, 'Pirates of the Caribbean: On Stranger Tides is a 2011 American fantasy swashbuckler film directed by Rob Marshall.', 'DVD', 'Ted', 'Elliott', 'Walt Disney Pictures', 'Burbank, California', '2011-05-07', 16),
('Pirates of the Caribbean: The Curse of the Black P', 'PotC2.jpg', 2, 'In 1720, while sailing to Port Royal, Jamaica, aboard HMS Dauntless, Governor Weatherby Swann\'s crew encounters a shipwreck and recovers a boy, Will Turner. Swann\'s daughter, Elizabeth, discovers a golden pirate medallion around Will\'s neck, and takes it.', 'DVD', 'Ted', 'Elliott', 'Walt Disney Pictures', 'Burbank, California', '2003-06-28', 0),
('Pirates of the Caribbean: Dead Men Tell No Tales', 'PotC3.png', 3, 'Thirteen years after the battle of Calypso\'s maelstrom, a twelve-year-old Henry Turner boards the Flying Dutchman and informs his father, Will, that the curse which binds Will to the Dutchman and only permits him to step on land once a decade can be broke', 'DVD', 'Jeff', 'Nathanson', 'Walt Disney Pictures', 'Burbank, California', '2017-05-11', 20),
('The Hobbit', 'Hobbit2.jpg', 4, 'Gandalf tricks Bilbo Baggins into hosting a party for Thorin Oakenshield and his band of twelve dwarves (Dwalin, Balin, Kili, Fili, Dori, Nori, Ori, Oin, Gloin, Bifur, Bofur, and Bombur), who go over plans reclaiming their ancient home, Lonely Mountain, a', 'Book', 'John Ronald Reuel', 'Tolkien', 'George Allen Unwin', 'Crows Nest, New South Wales, Australia', '1937-09-21', 11),
('The Hobbit: An Unexpected Journey', 'Hobbit1.jpg', 5, 'Approaching his 111th birthday, the Hobbit Bilbo Baggins begins writing the story of his adventure 60 years earlier for his nephew, Frodo.', 'DVD', 'John Ronald Reuel', 'Tolkien', 'Warner Bros. Picture', 'Burbank, California, U.S.', '2012-11-28', 0),
('The Hobbit: The Battle of the Five Armies', 'Hobbit3.jpg', 6, 'Bilbo and the Dwarves watch from the Lonely Mountain as the dragon Smaug sets Laketown ablaze.', 'DVD', 'John Ronald Reuel', 'Tolkien', 'Warner Bros. Picture', 'Burbank, California, U.S.', '2014-12-01', 23),
('The Lord of the Rings', 'LordOfTheRing.jpg', 7, 'Bilbo celebrates his eleventy-first (111th) birthday and leaves the Shire suddenly, passing the Ring to Frodo Baggins, his cousin[e] and heir. Neither hobbit is aware of the Ring\'s origin, but the wizard Gandalf suspects it is a Ring of Power.', 'Book', 'John Ronald Reuel', 'Tolkien', 'George Allen Unwin', 'Crows Nest, New South Wales, Australia', '1954-07-29', 5),
('Avatar', 'Avatar1.jpg', 8, 'In 2154, the natural resources of the Earth have been depleted and is suffering ecocide. The Resources Development Administration (RDA) mines the valuable mineral unobtanium on Pandora, a moon in the Alpha Centauri star system.', 'DVD', 'James', 'Cameron', '20th Century Studios', 'Century City, Los Angeles, California, USA', '2009-12-10', 54),
('Avatar: The Way of Water', 'Avatar2.jpg', 9, 'Sixteen years after the Na\'vi repelled the RDA invasion of Pandora, Jake Sully lives as chief of the Omatikaya clan and raises a family with Neytiri.', 'DVD', 'James', 'Cameron', '20th Century Studios', 'Century City, Los Angeles, California, USA', '2022-12-06', 0),
('Harry Potter and the Philosopher\'s Stone', 'Harry.jpg', 10, 'Late one night, Albus Dumbledore and Minerva McGonagall, professors at Hogwarts School of Witchcraft and Wizardry, along with groundskeeper Rubeus Hagrid, deliver an orphaned infant wizard named Harry Potter to his Muggle aunt and uncle, Petunia and Verno', 'DVD', 'Joanne Kathleen', 'Rowling', 'Warner Bros. Picture', 'Burbank, California, U.S.', '2001-11-04', 9);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`isbn_code`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `isbn_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
