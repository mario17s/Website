-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 09, 2022 la 09:06 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `scandi`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `destinatii`
--

CREATE TABLE `destinatii` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `oras` varchar(50) NOT NULL,
  `tara` varchar(50) NOT NULL,
  `nr_zile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `destinatii`
--

INSERT INTO `destinatii` (`id`, `nume`, `oras`, `tara`, `nr_zile`) VALUES
(1, 'Mica Sirena', 'Copenhaga', 'Danemarca', 2),
(3, 'Gamla Stan', 'Stockholm', 'Suedia', 3),
(4, 'Stadion', 'Helsinki', 'Finlanda', 1);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `destinatii`
--
ALTER TABLE `destinatii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `destinatii`
--
ALTER TABLE `destinatii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
