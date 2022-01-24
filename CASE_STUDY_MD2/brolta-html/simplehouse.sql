-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2022 at 04:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `CATEGORY_ID` int(11) NOT NULL,
  `LOAIHANG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`CATEGORY_ID`, `LOAIHANG`) VALUES
(1, 'Rifle'),
(2, 'Knife'),
(3, 'SMG'),
(4, 'Heavy'),
(5, 'Pistol');

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `PRODUCT_ID` int(11) NOT NULL,
  `TENSANPHAM` varchar(255) NOT NULL,
  `GIATIEN` int(11) NOT NULL,
  `MOTA` varchar(255) NOT NULL,
  `URL` text NOT NULL,
  `CATEGORY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`PRODUCT_ID`, `TENSANPHAM`, `GIATIEN`, `MOTA`, `URL`, `CATEGORY_ID`) VALUES
(9, 'AWP | Medusa (Well-Worn)', 200, 'Item type: Sniper Rifle', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17P7NdShR7eO3g5C0mvLwOq7c2DkAvJQg27iT9NWm2VK3rkU6YmmiI4SVJAQ9MljUr1O5ku7ug8K1usnXiSw07gvX0uU', 1),
(11, 'AK-47 | Imminent Arabesque', 1000, 'Được Tung Của và Nga Ngố viện trợ', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJegJa_t2vq42Ok_7hPvXQxmoGvMQj2ryX9oqi3wDl8ktuYmj2J9CSegA7aVuErlC6xObq1sS_ot2XnodZA39N', 1),
(24, 'AK-47 | Fire Serpent Arabesque', 559, 'Field-Tested', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszOeC9H_9mkhIWFg8j1OO-GqWlD6dN-teTE8YXghRrkqRVqMGzzIYeTIAVqaQuErlbvlb-80JfuusvJmHFr6SRxsXzfm0fkn1gSOc02RC4r', 1),
(25, '★ StatTrak™  AWP | Oni Taiji', 2000, '1 hit 1 kill', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PLfYQJK7dK4jYG0m_7zO6-fkmgJv8AhjLjA8In0ilHiqEI_a23zcoTEe1M5ZF6Fq1O4wLu5jMK0vYOJlyWmaDxZcQ/360fx360f', 1),
(26, '★ StatTrak™  AK-47 | X-Ray ', 890, 'Factory New', 'https://s1.cs.money/Z9Rly7M_large_preview.png', 1),
(29, 'StatTrak™ Glock-18 | Wasteland Rebel 999 ', 199, '(Battle-Scarred)', 'https://s1.cs.money/IipxylP_large_preview.png', 5),
(31, 'Souvenir SG 553 | Integrale ', 599, '(Factory New)', 'https://s1.cs.money/wlHnsm7_large_preview.png', 1),
(32, '★ Butterfly Knife | Gamma Doppler', 299, 'Dao sắc lắm không đùa được đâu bạn ơi', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqPD1PrbQqW9e-NV9j_v-5YT0m1HnlB81NDG3OtDBJlBoaF7X_1i3wLjvg5G1uZrNmnNj7ihztHfazhyziB5LaLdu0KCACQLJ4CaO33U', 2),
(33, 'StatTrak™ AK-47 | Asiimov', 399, 'Súng nhựa', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV092lnYmGmOHLP7LWnn8fvpMkjOqS99Smiwzk_0VvamH0LIHEdwFqYw2G_QC3lefsjZS4uJXLyWwj5HclxVTx0A', 1),
(34, 'Desert Eagle | Blaze (Factory New)', 199, 'Item location: DMarket NFT Blockchain', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLJTjtO7dGzh7-HnvD8J_XVkjoFuMYiiLqUrI-k3le3r0s5amj7d9eTI1I-M1rW-Fm_xO-50Jfvot2XnhS4_w8U', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD CONSTRAINT `PRODUCT_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `CATEGORY` (`CATEGORY_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
