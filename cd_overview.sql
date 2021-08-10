-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 10. srp 2021, 15:48
-- Verze serveru: 10.4.20-MariaDB
-- Verze PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `cd_overview`
--
CREATE DATABASE IF NOT EXISTS `cd_overview` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cd_overview`;

-- --------------------------------------------------------

--
-- Struktura tabulky `cds`
--

CREATE TABLE `cds` (
  `ID` int(11) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Album` varchar(50) NOT NULL,
  `Picture` longtext NOT NULL DEFAULT '\'resources/assets/default_cover.jpg\'',
  `Genre` varchar(50) DEFAULT NULL,
  `ReleaseDate` varchar(5) DEFAULT NULL,
  `Price` decimal(15,2) DEFAULT NULL,
  `Rating` int(1) DEFAULT 0,
  `Slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `cds`
--

INSERT INTO `cds` (`ID`, `Author`, `Album`, `Picture`, `Genre`, `ReleaseDate`, `Price`, `Rating`, `Slug`) VALUES
(1, 'Nirvana', 'In Utero', 'https://img.discogs.com/PgYUflMvzbRyB4eMLP30KEqG0rg=/fit-in/600x594/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-375979-1491700347-7263.jpeg.jpg', 'Rock', '1993', '0.33', 3, 'nirvana-in-utero'),
(2, 'Pearl Jam', 'Ten', 'https://img.discogs.com/7fZaeEGs2C3Wya2_FjboCVGLQWQ=/fit-in/600x597/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-367664-1408907054-7204.jpeg.jpg', 'Rock', '1991', '0.50', 1, 'pearl-jam-ten'),
(3, 'Guns N\' Roses', 'Use Your Illusion II', 'https://img.discogs.com/06PcK0H8RhnyXpQ084Sc4w9fNhY=/fit-in/600x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1012497-1404064701-3493.jpeg.jpg', 'Rock', '1991', '0.50', 4, 'guns-n-roses-use-your-illusion-ii'),
(4, 'Queen', 'Innuendo', 'https://img.discogs.com/l0k4aHJBFyfk90ms-5yYbdDtnJk=/fit-in/600x598/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6811292-1427124502-6745.jpeg.jpg', 'Rock, Pop', '1990', '1.25', 5, 'queen-innuendo'),
(5, 'Various', 'Lost Highway', 'https://img.discogs.com/CRH3uzCpuzHQefzQSHNXdQ2NMSs=/fit-in/600x597/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-405043-1257730874.jpeg.jpg', 'Electronic, Jazz, Rock, Stage & Screen', '1996', '0.89', 2, 'various-lost-highway'),
(6, 'Blues Traveler', 'Four', 'resources/assets/default_cover.jpg', NULL, NULL, NULL, 0, 'blues-traveler-four');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `cds`
--
ALTER TABLE `cds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
