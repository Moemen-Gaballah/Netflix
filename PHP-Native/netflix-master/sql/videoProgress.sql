-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2020. Jan 02. 16:41
-- Kiszolgáló verziója: 10.1.41-MariaDB-0+deb9u1
-- PHP verzió: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `reeceflix`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `videoProgress`
--

CREATE TABLE `videoProgress` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `videoId` int(11) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `dateModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `videoProgress`
--
ALTER TABLE `videoProgress`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `videoProgress`
--
ALTER TABLE `videoProgress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
