-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Kwi 2023, 19:54
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `diet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `kcal` int(11) NOT NULL,
  `protein` float NOT NULL,
  `fat` float NOT NULL,
  `carbohydrates` float NOT NULL,
  `dietaryfiber` float NOT NULL,
  `sodium` int(11) NOT NULL,
  `potassium` int(11) NOT NULL,
  `calcium` int(11) NOT NULL,
  `phosphor` int(11) NOT NULL,
  `magnesium` int(11) NOT NULL,
  `vitaminA` float NOT NULL,
  `vitaminD` float NOT NULL,
  `vitaminE` float NOT NULL,
  `vitaminB1` float NOT NULL,
  `vitaminB2` float NOT NULL,
  `vitaminB3` float NOT NULL,
  `vitaminC` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `menu`
--

INSERT INTO `menu` (`id`, `name`, `quantity`, `kcal`, `protein`, `fat`, `carbohydrates`, `dietaryfiber`, `sodium`, `potassium`, `calcium`, `phosphor`, `magnesium`, `vitaminA`, `vitaminD`, `vitaminE`, `vitaminB1`, `vitaminB2`, `vitaminB3`, `vitaminC`) VALUES
(81, 'Natural yoghurt 2%', 200, 120, 8.6, 4, 12.4, 0, 126, 400, 340, 244, 34, 32, 0.06, 0.06, 0.092, 0.432, 0.28, 2),
(82, 'Oat flakes', 50, 190, 5.95, 3.6, 34.65, 3.45, 3, 190, 27, 217, 65, 0, 0, 0.9, 0.231, 0.0755, 0.435, 0),
(83, 'Black berries', 40, 20, 0.32, 0.24, 4.88, 1.28, 0, 25, 6, 6, 1, 2.4, 0, 0.752, 0.0072, 0.0072, 0.112, 5.88),
(84, 'Potato', 120, 96, 2.28, 0.12, 21.96, 1.8, 8, 532, 5, 67, 28, 1.2, 0, 0.06, 0.1044, 0.0552, 1.752, 16.8),
(85, 'Chicken breast', 110, 109, 23.65, 1.43, 0, 0, 61, 424, 6, 264, 36, 6.6, 0, 0.33, 0.099, 0.1683, 13.684, 0),
(86, 'Olive oil', 5, 44, 0, 4.98, 0.001, 0, 0, 0, 0, 0, 0, 0, 0, 0.5975, 0, 0, 0, 0),
(87, 'Broccoli', 80, 25, 2.4, 0.32, 4.16, 2, 6, 308, 38, 53, 18, 122.4, 0, 1.04, 0.056, 0.096, 0.48, 66.4),
(88, 'Banana', 200, 198, 2, 0.6, 47, 3.4, 2, 790, 12, 40, 66, 16, 0, 0.54, 0.08, 0.2, 1, 18),
(89, 'Buckwheat groats', 50, 174, 6.3, 1.55, 34.65, 2.95, 3, 222, 13, 230, 109, 0, 0, 0.155, 0.2705, 0.0635, 0.975, 0),
(90, 'Canola oil', 5, 44, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.3365, 0, 0, 0, 0),
(91, 'Egg', 110, 153, 13.75, 10.67, 0.66, 0, 155, 146, 52, 224, 13, 299.2, 1.87, 0.803, 0.0704, 0.5962, 0.066, 0),
(92, 'Raspberry', 50, 21, 0.65, 0.15, 6, 3.35, 1, 102, 18, 17, 10, 1.5, 0, 0.24, 0.009, 0.031, 0.13, 15.7);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
