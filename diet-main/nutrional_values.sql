-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Mar 2023, 19:46
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
-- Struktura tabeli dla tabeli `nutrional_values`
--

CREATE TABLE `nutrional_values` (
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
-- Zrzut danych tabeli `nutrional_values`
--

INSERT INTO `nutrional_values` (`id`, `name`, `quantity`, `kcal`, `protein`, `fat`, `carbohydrates`, `dietaryfiber`, `sodium`, `potassium`, `calcium`, `phosphor`, `magnesium`, `vitaminA`, `vitaminD`, `vitaminE`, `vitaminB1`, `vitaminB2`, `vitaminB3`, `vitaminC`) VALUES
(1, 'Natural Yoghurt 2%', 100, 60, 4.3, 2, 6.2, 0, 63, 200, 170, 122, 17, 16, 0.03, 0.03, 0.046, 0.216, 0.14, 1),
(2, 'Cottage Chesse 5%', 100, 133, 18.7, 4.7, 3.7, 0, 44, 113, 94, 227, 9, 39, 0.09, 0.08, 0.03, 0.45, 0.18, 0),
(3, 'Egg', 100, 139, 12.5, 9.7, 0.6, 0, 141, 133, 47, 204, 12, 272, 1.7, 0.73, 0.064, 0.542, 0.06, 0),
(4, 'Chicken Breast', 100, 99, 21.5, 1.3, 0, 0, 55, 385, 5, 240, 33, 6, 0, 0.3, 0.09, 0.153, 12.44, 0),
(5, 'Cod Fish', 100, 78, 17.7, 0.7, 0, 0, 72, 356, 9, 184, 25, 7, 1, 0.44, 0.055, 0.046, 2.3, 2),
(6, 'Canola Oil', 100, 884, 0, 884, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26.73, 0, 0, 0, 0),
(7, 'Olive Oil', 100, 884, 0, 99.6, 0.2, 0, 1, 0, 0, 1, 0, 0, 0, 11.95, 0, 0, 0, 0),
(8, 'Buckwheat Groats', 100, 347, 12.6, 3.1, 69.3, 5.9, 5, 443, 25, 459, 218, 0, 0, 0.31, 0.541, 0.127, 1.95, 0),
(9, 'Millet Groats', 100, 352, 10.5, 2.9, 71.6, 3.2, 5, 220, 10, 240, 100, 0, 0, 0.1, 0.73, 0.38, 2.3, 0),
(10, 'Oat Flakes', 100, 379, 11.9, 7.2, 69.3, 6.9, 5, 379, 54, 433, 129, 0, 0, 1.8, 0.462, 0.151, 0.87, 0),
(11, 'Tomato', 100, 20, 0.9, 0.2, 4.1, 1.2, 8, 282, 9, 21, 8, 107, 0, 1.22, 0.064, 0.042, 1, 23),
(12, 'Broccoli', 100, 31, 3, 0.4, 5.2, 2.5, 7, 385, 48, 66, 23, 153, 0, 1.3, 0.07, 0.12, 0.6, 83),
(13, 'Pumpkin', 100, 33, 1.3, 0.3, 7.7, 2.8, 4, 278, 66, 43, 14, 496, 0, 1.03, 0.05, 0.12, 0.5, 8),
(14, 'Green Peas', 100, 87, 6.7, 0.4, 17, 6, 2, 353, 22, 122, 29, 68, 0, 0.39, 0.34, 0.16, 2.7, 34.2),
(15, 'Carrot', 100, 33, 1, 0.2, 8.7, 3.6, 82, 282, 36, 32, 16, 1656, 0, 0.51, 0, 44, 0.054, 0.45),
(16, 'Cucumber', 100, 14, 0.7, 0.1, 2.9, 0.5, 11, 125, 15, 23, 8, 28, 0, 0.16, 0.029, 0.038, 0.19, 8),
(17, 'Red paprika', 100, 32, 1.3, 0.5, 6.6, 2, 3, 255, 13, 31, 11, 528, 0, 2.9, 0.04, 0.12, 1.6, 144),
(18, 'Potato', 100, 80, 1.9, 0.1, 18.3, 1.5, 7, 443, 4, 56, 23, 1, 0, 0.05, 0.087, 0.046, 1.46, 14),
(19, 'Champignon', 100, 21, 2.7, 0.4, 2.6, 2, 6, 289, 11, 165, 12, 2, 1.94, 0.11, 0.023, 0.599, 4.81, 5),
(20, 'Pineapple', 100, 56, 0.4, 0.2, 13.6, 1.2, 1, 220, 17, 12, 15, 7, 0, 0.1, 0.09, 0.04, 0.4, 15),
(21, 'Avocado', 100, 166, 2, 15.3, 7.4, 3.3, 10, 600, 11, 41, 39, 7, 0, 1.3, 0.11, 0.12, 1.9, 8),
(22, 'Banana', 100, 9, 1, 0.3, 23.5, 1.7, 1, 395, 6, 20, 33, 8, 0, 0.27, 0.04, 0.1, 0.5, 9),
(23, 'Peach', 100, 50, 1, 0.2, 11.9, 1.9, 3, 200, 9, 24, 8, 99, 0, 0.96, 0.022, 0.054, 0.97, 2.7),
(24, 'Black Berries', 100, 51, 0.8, 0.6, 12.2, 3.2, 1, 62, 15, 14, 2, 6, 0, 1.88, 0.018, 0.018, 0.28, 14.7),
(25, 'Gean', 100, 63, 1, 0.3, 14.3, 1.3, 2, 202, 13, 16, 7, 12, 0, 0.13, 0.041, 0.049, 0.33, 15),
(26, 'Apple', 100, 50, 0.4, 0.4, 12.1, 2, 2, 134, 4, 9, 3, 4, 0, 0.49, 0.34, 0.026, 0.17, 9.2),
(27, 'Raspberry', 100, 42, 1.3, 0.3, 12, 6.7, 2, 203, 35, 33, 20, 3, 0, 0.48, 0.018, 0.062, 0.26, 31.4),
(28, 'Almonds', 100, 597, 20, 52, 20.5, 12.9, 14, 778, 239, 454, 269, 0, 0, 24, 0.21, 0.78, 3.4, 5.6),
(29, 'Walnut', 100, 657, 16, 60.3, 18, 6.5, 4, 474, 87, 332, 99, 8, 0, 2.6, 0.39, 0.12, 1.19, 5.8),
(30, 'Sunflower Seeds', 100, 573, 24.4, 43.7, 24.6, 6, 3, 793, 131, 784, 359, 5, 0, 27.81, 1.318, 0.263, 6.97, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nutrional_values`
--
ALTER TABLE `nutrional_values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `nutrional_values`
--
ALTER TABLE `nutrional_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
