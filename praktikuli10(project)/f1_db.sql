-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2026 at 09:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `circuits`
--

CREATE TABLE `circuits` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `length_km` decimal(5,3) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `circuit_website` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `circuits`
--

INSERT INTO `circuits` (`id`, `name`, `location`, `length_km`, `image_url`, `circuit_website`, `description`) VALUES
(1, 'Bahrain International Circuit', 'Sakhir, Bahrain', 5.412, 'images/circuits/1.avif', 'https://www.formula1.com/en/racing/2026/Bahrain.html', 'Desert night race track.'),
(2, 'Jeddah Corniche Circuit', 'Jeddah, Saudi Arabia', 6.174, 'images/circuits/2.avif', 'https://www.formula1.com/en/racing/2026/Saudi_Arabia.html', 'Fastest street circuit.'),
(3, 'Albert Park Circuit', 'Melbourne, Australia', 5.278, 'images/circuits/3.png', 'https://www.formula1.com/en/racing/2026/Australia.html', 'Lakeside street track.'),
(4, 'Shanghai International Circuit', 'Shanghai, China', 5.451, 'images/circuits/4.png', 'https://www.formula1.com/en/racing/2026/China.html', 'Unique shang layout.'),
(5, 'Suzuka International Racing Course', 'Suzuka, Japan', 5.807, 'images/circuits/5.png', 'https://www.formula1.com/en/racing/2026/Japan.html', 'Iconic figure-eight track.'),
(6, 'Miami International Autodrome', 'Miami, USA', 5.412, 'images/circuits/g.png', 'https://www.formula1.com/en/racing/2026/Miami.html', 'Hard Rock Stadium track.'),
(7, 'Autodromo Enzo e Dino Ferrari', 'Imola, Italy', 4.909, 'images/circuits/7.png', 'https://www.formula1.com/en/racing/2026/EmiliaRomagna.html', 'Historic Italian track.'),
(8, 'Circuit de Monaco', 'Monte Carlo, Monaco', 3.337, 'images/circuits/8.png', 'https://www.formula1.com/en/racing/2026/Monaco.html', 'The crown jewel of F1.'),
(9, 'Circuit de Barcelona-Catalunya', 'Montmelo, Spain', 4.657, 'images/circuits/9.png', 'https://www.formula1.com/en/racing/2026/Spain.html', 'Classic testing ground track.'),
(10, 'Circuit Gilles Villeneuve', 'Montreal, Canada', 4.361, 'images/circuits/10.png', 'https://www.formula1.com/en/racing/2026/Canada.html', 'High speed track on Notre Dame island.'),
(11, 'Red Bull Ring', 'Spielberg, Austria', 4.318, 'images/circuits/11.png', 'https://www.formula1.com/en/racing/2026/Austria.html', 'Short and fast track.'),
(12, 'Silverstone Circuit', 'Silverstone, United Kingdom', 5.891, 'images/circuits/12.png', 'https://www.formula1.com/en/racing/2026/Great_Britain.html', 'The birthplace of F1.'),
(13, 'Circuit de Spa-Francorchamps', 'Stavelot, Belgium', 7.004, 'images/circuits/13.png', 'https://www.formula1.com/en/racing/2026/Belgium.html', 'Legendary track.'),
(14, 'Hungaroring', 'Mogyorod, Hungary', 4.381, 'images/circuits/14.png', 'https://www.formula1.com/en/racing/2026/Hungary.html', 'Tight and twisty circuit.'),
(15, 'Circuit Zandvoort', 'Zandvoort, Netherlands', 4.259, 'images/circuits/15.png', 'https://www.formula1.com/en/racing/2026/Netherlands.html', 'Old-school track with banked corners.'),
(16, 'Autodromo Nazionale Monza', 'Monza, Italy', 5.793, 'images/circuits/16.png', 'https://www.formula1.com/en/racing/2026/Italy.html', 'The Temple of Speed.'),
(17, 'Baku City Circuit', 'Baku, Azerbaijan', 6.003, 'images/circuits/17.png', 'https://www.formula1.com/en/racing/2026/Azerbaijan.html', 'Fast street circuit.'),
(18, 'Marina Bay Street Circuit', 'Singapore', 4.940, 'images/circuits/18.png', 'https://www.formula1.com/en/racing/2026/Singapore.html', 'Demanding night race.'),
(19, 'Circuit of the Americas', 'Austin, USA', 5.513, 'images/circuits/19.png', 'https://www.formula1.com/en/racing/2026/United_States.html', 'Modern track with huge elevation change.'),
(20, 'Autodromo Hermanos Rodriguez', 'Mexico City, Mexico', 4.304, 'images/circuits/20.png', 'https://www.formula1.com/en/racing/2026/Mexico.html', 'Highest altitude track on calendar.'),
(21, 'Autodromo Jose Carlos Pace', 'Sao Paulo, Brazil', 4.309, 'images/circuits/21.png', 'https://www.formula1.com/en/racing/2026/Brazil.html', 'Legendary Interlagos circuit.'),
(22, 'Las Vegas Strip Circuit', 'Las Vegas, USA', 6.201, 'images/circuits/22.png', 'https://www.formula1.com/en/racing/2026/Las_Vegas.html', 'High speed down the famous strip.'),
(23, 'Lusail International Circuit', 'Lusail, Qatar', 5.419, 'images/circuits/23.png', 'https://www.formula1.com/en/racing/2026/Qatar.html', 'Fast, flowing desert track.'),
(24, 'Yas Marina Circuit', 'Abu Dhabi, UAE', 5.281, 'images/circuits/24.png', 'https://www.formula1.com/en/racing/2026/Abu_Dhabi.html', 'The traditional season finale.');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `driver_website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `number`, `team_id`, `bio`, `image_url`, `driver_website`) VALUES
(1, 'Lewis Hamilton', 44, NULL, 'Seven-time World Champion, one of the greatest drivers in the history of the sport.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png', 'https://www.lewishamilton.com'),
(2, 'Max Verstappen', 1, NULL, 'Current dominant World Champion, known for his aggressive and flawless driving style.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png', 'https://www.verstappen.com'),
(3, 'Charles Leclerc', 16, NULL, 'Ferrari star driver, famous for his incredible one-lap speed and qualifying performances.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png', 'https://www.charlesleclerc.com'),
(4, 'Lando Norris', 4, NULL, 'McLaren top driver, a fan favorite with elite race pace and exceptional consistency.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png', 'https://www.landonorris.com'),
(5, 'Fernando Alonso', 14, NULL, 'Two-time World Champion, a true grid legend known for maximizing any cars performance.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/F/FERALO01_Fernando_Alonso/feralo01.png', 'https://www.fernandoalonso.com'),
(6, 'George Russell', 63, NULL, 'Mercedes powerhouse driver, determined, highly analytical, and consistently fast.', 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png', 'https://www.georgerussell63.com');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `id` int(11) NOT NULL,
  `race_name` varchar(100) NOT NULL,
  `circuit_id` int(11) DEFAULT NULL,
  `race_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`id`, `race_name`, `circuit_id`, `race_date`) VALUES
(1, 'Bahrain Grand Prix', 1, '2026-03-01'),
(2, 'Saudi Arabian Grand Prix', 2, '2026-03-08'),
(3, 'Australian Grand Prix', 3, '2026-03-22'),
(4, 'Chinese Grand Prix', 4, '2026-04-05'),
(5, 'Japanese Grand Prix', 5, '2026-04-19'),
(6, 'Miami Grand Prix', 6, '2026-05-03'),
(7, 'Emilia Romagna Grand Prix', 7, '2026-05-17'),
(8, 'Monaco Grand Prix', 8, '2026-05-24'),
(9, 'Spanish Grand Prix', 9, '2026-06-07'),
(10, 'Canadian Grand Prix', 10, '2026-06-14'),
(11, 'Austrian Grand Prix', 11, '2026-06-28'),
(12, 'British Grand Prix', 12, '2026-07-05'),
(13, 'Belgian Grand Prix', 13, '2026-07-19'),
(14, 'Hungarian Grand Prix', 14, '2026-07-26'),
(15, 'Dutch Grand Prix', 15, '2026-08-23'),
(16, 'Italian Grand Prix', 16, '2026-08-30'),
(17, 'Azerbaijan Grand Prix', 17, '2026-09-13'),
(18, 'Singapore Grand Prix', 18, '2026-09-20'),
(19, 'United States Grand Prix', 19, '2026-10-11'),
(20, 'Mexico City Grand Prix', 20, '2026-10-25'),
(21, 'Sao Paulo Grand Prix', 21, '2026-11-01'),
(22, 'Las Vegas Grand Prix', 22, '2026-11-22'),
(23, 'Qatar Grand Prix', 23, '2026-11-29'),
(24, 'Abu Dhabi Grand Prix', 24, '2026-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo_url`, `website`) VALUES
(1, 'Mercedes-AMG Petronas', 'https://media.formula1.com/content/dam/fom-website/teams/2024/mercedes.png', 'https://www.mercedesamgf1.com'),
(2, 'Oracle Red Bull Racing', 'https://media.formula1.com/content/dam/fom-website/teams/2024/red-bull-racing.png', 'https://www.redbullracing.com'),
(3, 'Scuderia Ferrari', 'https://media.formula1.com/content/dam/fom-website/teams/2024/ferrari.png', 'https://www.ferrari.com/en-EN/formula1'),
(4, 'McLaren Formula 1 Team', 'https://media.formula1.com/content/dam/fom-website/teams/2024/mclaren.png', 'https://www.mclaren.com/racing/formula-1'),
(5, 'Aston Martin Aramco', 'https://media.formula1.com/content/dam/fom-website/teams/2024/aston-martin.png', 'https://www.astonmartinf1.com'),
(6, 'Alpine F1 Team', 'https://media.formula1.com/content/dam/fom-website/teams/2024/alpine.png', 'https://www.alpinecars.com/en/racing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$DwA.JvmULT8yUn0b.86WoeH8cBtmtH9j0AsO4LJG9i1cEjJqITJvm', 'admin'),
(2, 'giorgikvantaliani', '$2y$10$PY.MlyyiiuKV49WatEMM4ek0daqAk3NijJ9H0bEJBd19MOX.y.vNK', 'user'),
(3, 'giorgikvant', '$2y$10$C8pew06Au/aYN80fORPPcOUjQ3dKIi6UCYPOgSGbHX.8sQ5g.R7u.', 'user'),
(4, 'emila', '$2y$10$0V0N5G/N1a.QXjcqIwWKmep6i2kV9odLCc7xJT0MokRXRWBPY2v1W', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circuits`
--
ALTER TABLE `circuits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id`),
  ADD KEY `circuit_id` (`circuit_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circuits`
--
ALTER TABLE `circuits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `races`
--
ALTER TABLE `races`
  ADD CONSTRAINT `races_ibfk_1` FOREIGN KEY (`circuit_id`) REFERENCES `circuits` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
