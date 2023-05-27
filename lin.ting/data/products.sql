-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 09:38 AM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tinglin_ixd608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `data_create` datetime NOT NULL,
  `data_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `data_create`, `data_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'ring', 'ring@flurry.com', 'http://ring.com', '15', 'toy', '2023-05-23 06:24:33', '2023-05-23 06:24:33', 'It's soft and playful', 'ring.jpg', 'ring_1.jpg,ring_2.jpg'),
(2, 'ballholder', 'ballholder@flurry.com', 'http://ballholder.com', '20', 'toy', '2023-05-23 06:36:38', '2023-05-23 06:36:38', 'catch and free ', 'ballholder.jpg', 'ballholder_1.jpg,ballholder_2.jpg'),
(4, 'houses', 'houses@flurry.com', 'http://houses.com', '10', 'toy', '2023-05-23 06:42:36', '2023-05-23 06:42:36', 'easy to play', 'houses.jpg', 'houses_1.jpg,houses_2.jpg'),
(5, 'triangle', 'triangle@flurry.com', 'http://triangle.com', '15', 'toy', '2023-05-23 06:46:41', '2023-05-23 06:46:41', 'loop in a loop', 'triangle.jpg', 'triangle_1.jpg,triangle_2.jpg'),
(6, 'threeset', 'threeset@flurry.com', 'http://threeset.com', '30', 'toy', '2023-05-23 06:50:56', '2023-05-23 06:50:56', 'combo', 'threeset.jpg', 'threeset_1.jpg,threeset_2'),
(15, 'back', 'back@flurry.com', 'http://back.com', '20', 'toy', '2023-05-23 09:37:02', '2023-05-23 09:37:02', 'comfy, butter feel', 'back.jpg', 'back_1.jpg,back_2.jpg'),
(11, 'combofour', 'combofour@flurry', 'http://combofour.com', '25', 'toy', '2023-05-23 09:23:48', '2023-05-23 09:23:48', '', 'combofour.jpg', 'combofour_1.jpg,combofour_2.jpg'),
(9, 'popbag', 'popbag@flurry.com', 'http://popbag.com', '5', 'toy', '2023-05-23 09:16:26', '2023-05-23 09:16:26', 'fragrance-free ', 'popbag.jpg', 'popbag_1.jpg,popbag_2.jpg'),
(10, 'ball', 'ball@flurry.com', 'http://ball.com', '5', 'toy', '2023-05-23 09:20:05', '2023-05-23 09:20:05', 'three in a bag', 'ball.jpg', 'ball_1.jpg, ball_2.jpg'),
(12, 'combothree', 'combothree@flurry.com', 'http://combothree.com', '30', 'toy', '2023-05-23 09:28:50', '2023-05-23 09:28:50', 'three n a set', 'combothree.jpg', 'combothree_1.jpg,combothree_2.jpg'),
(13, 'combotwo', 'combotwo@flurry.com', 'http://combotwo.com', '25', 'toy', '2023-05-23 09:30:07', '2023-05-23 09:30:07', 'two in a set', 'combotwo.jpg', 'combotwo_1.jpg,combotwo_2.jpg'),
(14, 'comboone', 'comboone@flurry.com', 'http://comboone.com', '50', 'toy', '2023-05-23 09:33:57', '2023-05-23 09:33:57', 'three in a set', 'comboone.jpg', 'comboone_1.jpg,comboone_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
