-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Mai 2013 um 14:52
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `webtec`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `weather_info`
--

CREATE TABLE IF NOT EXISTS `weather_info` (
  `wind_strength` varchar(45) NOT NULL,
  `wind_direction` varchar(45) NOT NULL,
  `air_pressure` varchar(45) NOT NULL,
  `temperature` varchar(45) NOT NULL,
  `clouds` binary(1) NOT NULL,
  `rain` binary(1) NOT NULL,
  `wave_hight` varchar(45) NOT NULL,
  `wave_direction` varchar(45) NOT NULL,
  `notice` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `temperature_scales` varchar(45) NOT NULL,
  `idWeather_Info` int(11) NOT NULL,
  PRIMARY KEY (`idWeather_Info`),
  UNIQUE KEY `idWeather_Info` (`idWeather_Info`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `weather_info`
--

INSERT INTO `weather_info` (`wind_strength`, `wind_direction`, `air_pressure`, `temperature`, `clouds`, `rain`, `wave_hight`, `wave_direction`, `notice`, `date`, `time`, `temperature_scales`, `idWeather_Info`) VALUES
('0 - 0,2', 'N = 0Âº or 360Âº', '30', '45', 'Y', 'Y', '', '', '', '0000-00-00', '00:00:00', 'ÂºC', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
