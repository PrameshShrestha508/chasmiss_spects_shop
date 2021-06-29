-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 03:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chasmiss`
--

-- --------------------------------------------------------

--
-- Table structure for table `glass`
--

CREATE TABLE `glass` (
  `glass_id` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `color` varchar(25) NOT NULL,
  `size` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glass`
--

INSERT INTO `glass` (`glass_id`, `gname`, `price`, `gender`, `color`, `size`, `description`, `image`) VALUES
(4, 'Raben', '979', 'female', 'red', 'm', 'svsvsvsv', 'glass2.jpg'),
(7, 'mod', '70000', 'male', 'red', 'm', 'It is a part , Tribhuvan University. The vision of the department is to enable TU to play a key role in the global IT scenario through world class education, research and innovation', 'glass10.jpg'),
(8, 'raben', '979', 'male', 'red', 's', 'hello', 'glass2.jpg'),
(9, 'Peter Jones Transparent Cateye ', '428', 'female', 'Transparent ', 'x', 'Frame comes with zero power anti glare lenses. Frame Size - Small, Frame Material - Plastic, Frame Colo', 'glass8.jpg'),
(10, 'Ray Bune', '120', 'male', 'black', 's', 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in repreh', 'glass2.jpg'),
(11, 'Rinosin Glasses', '428', 'male', 'golden color', 'm', 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in repreh', 'glass1.png'),
(12, 'Macro Meldey', '979', 'male', 'black', 'm', 'Lots of innovative ideas come to my mind whenever  I enter the college premise, which has always helped to boost my determination and motivate me to go further. Maybe that is what we call the magic of  college environment. Same things used to happen with ', 'glass11.jpg'),
(13, 'Oakley Glasses', '1005', 'male', 'black', 'm', 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in repreh', 'glass2.jpg'),
(14, 'Arsh Enterprises Full Rim Cat Eye ', '1005', 'female', 'red', 's', 'Ideal For Women, Girls, Ladies (Use For work on Computer/Laptop, Reading and For The Style)', 'arsh1.jpg'),
(15, 'Arsh Enterprises Ladies Cat Eye Full Rim Spectacles Frames', '979', 'female', 'red', 'm', 'Ideal For Women, Girls, Ladies (Use For work on Computer/Laptop, Reading and For The Style)', 'arsh4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `cart_id` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`cart_id`, `gname`, `buyer`, `gender`, `price`, `image`) VALUES
(1, 'raben', 'pramesh shrestha', 'male', '979', 'glass2.jpg'),
(4, 'Peter Jones Transparent Cateye ', 'pramesh shrestha', 'female', '428', 'glass8.jpg'),
(6, 'Rinosin Glasses', 'pramesh shrestha', 'male', '428', 'glass1.png'),
(11, 'Arsh Enterprises Full Rim Cat Eye ', 'Hari bahadur', 'female', '1005', 'arsh1.jpg'),
(12, 'mod', 'pramesh shrestha', 'male', '70000', 'glass10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(2552) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `paymentMethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `country`, `name`, `email`, `phone`, `address`, `product`, `price`, `date`, `paymentMethod`) VALUES
(1, 'Nepal', 'Pramesh Shrestha', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'rayeenon', '244', '2021-06-02', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `address`, `password`, `usertype`) VALUES
(1, 'pramesh shrestha', 'pramesh@gmail.com', '6546444334', 'pharsatikar', '123', 'ADMIN'),
(6, 'Hari bahadur', 'pramesh@gmail.com', '6546444334', 'pharsatikar', '123', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glass`
--
ALTER TABLE `glass`
  ADD PRIMARY KEY (`glass_id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glass`
--
ALTER TABLE `glass`
  MODIFY `glass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
