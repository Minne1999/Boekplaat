-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 apr 2017 om 12:00
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boekenlijst`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `mail`, `wachtwoord`, `admin`) VALUES
(1, '201457@edu.rocfriesepoort.nl', 'test123', 1),
(6, '199202@edu.rocfriesepoort.nl', 'test123', 0),
(9, '200321@edu.rocfriesepoort.nl', 'test123', 0),
(10, '200773@edu.rocfriesepoort.nl', 'test123', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeken`
--

CREATE TABLE `boeken` (
  `id` int(11) NOT NULL,
  `boek` varchar(255) NOT NULL,
  `uitgever` varchar(255) NOT NULL,
  `isbn` bigint(33) NOT NULL,
  `jaaruitgave` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `prijs` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `boeken`
--

INSERT INTO `boeken` (`id`, `boek`, `uitgever`, `isbn`, `jaaruitgave`, `status`, `prijs`) VALUES
(1, 'Binas / 6e havo/vwo / deel informatieboek', 'Noordhoff Uitgevers B.V.', 9789001817497, 2013, 'nieuw', '555.95'),
(2, 'Basisboek wiskunde', 'Stuttgart Bosch', 9789043016735, 2009, 'zo goed als nieuw', '601.99'),
(3, 'Basisvaardigheden wiskunde', 'Noordhoff Uitgevers B.V.', 9789001834159, 2014, 'gebruikt', '100.00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexen voor tabel `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `boeken`
--
ALTER TABLE `boeken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
