-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 10:15 AM
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
-- Database: `primerides`
--

-- --------------------------------------------------------

--
-- Table structure for table `car-details`
--

CREATE TABLE `car-details` (
  `carid` int(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `features` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `color1` varchar(7) DEFAULT NULL,
  `color2` varchar(7) DEFAULT NULL,
  `color3` varchar(7) DEFAULT NULL,
  `color4` varchar(7) DEFAULT NULL,
  `color5` varchar(7) DEFAULT NULL,
  `color6` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car-details`
--

INSERT INTO `car-details` (`carid`, `carname`, `tag`, `price`, `features`, `description`, `img1`, `img2`, `img3`, `color1`, `color2`, `color3`, `color4`, `color5`, `color6`) VALUES
(1, 'Lamborghini Urus', 'SUV', '600', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle f', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle f', '6661e0f5127577.95570768.jpg', '6661e0f512bc46.82977783.jpg', '6661e0f512ecd8.38360798.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Lamborghini Urus', 'SUV', '600', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle. ', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle.', '6661e26d7a3db7.45464945.jpg', '6661e26d7a8c62.23878549.jpg', '6661e26d7b0603.24014204.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(3, ' McLaren 750S', 'Sports', '800', 'This high-performance sports car is part of McLaren&#039;s renowned Super Series, known for its striking design, exceptional aerodynamics, and impressive power output. The &quot;750S&quot; badge indicates it produces around 750 horsepower, offering an exhilarating driving experience with advanced engineering and cutting-edge technology.', 'This high-performance sports car is part of McLaren&#039;s renowned Super Series, known for its striking design, exceptional aerodynamics, and impressive power output. The &quot;750S&quot; badge indicates it produces around 750 horsepower, offering an exhilarating driving experience with advanced engineering and cutting-edge technology.', '6661e68cb349d0.89279542.png', '6661e68cb3c0f8.85242901.png', '6661e68cb402e9.69588391.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Porsche 911', 'Sports', '500', 'This high-performance sports car is part of McLaren&#039;s renowned Super Series, known for its striking design, exceptional aerodynamics, and impressive power output. The &quot;750S&quot; badge indicates it produces around 750 horsepower, offering an exhilarating driving experience with advanced engineering and cutting-edge technology.', 'This high-performance sports car is part of McLaren&#039;s renowned Super Series, known for its striking design, exceptional aerodynamics, and impressive power output. The &quot;750S&quot; badge indicates it produces around 750 horsepower, offering an exhilarating driving experience with advanced engineering and cutting-edge technology.', '6661e752c65a66.34344262.jpg', '6661e752c6b9b9.32628570.jpg', '6661e752c71a58.05829387.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Aston martin DB12', 'Sports', '600', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle f', ' The Lamborghini Urus is a luxury high-performance SUV that combines supercar power with SUV versatility. It features a 641-hp 4.0-liter twin-turbo V8 engine, capable of 0-60 mph in 3.5 seconds and a top speed of 190 mph. Its aggressive design includes sharp lines and a prominent grille, while the interior boasts high-quality materials and advanced technology like a digital instrument cluster and a large touchscreen infotainment system. Multiple driving modes adjust the suspension and throttle f', 'Your-DB12 Coupe.jpeg', 'Your-DB12 Coupe (2).jpeg', 'Your-DB12 Coupe (3).jpeg', '#FF0000', '#0000FF', '#00FF00', '#000000', '#808080', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
