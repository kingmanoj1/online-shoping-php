-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 06:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_pass` varchar(15) NOT NULL,
  `a_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pass`, `a_email`) VALUES
(51, 'Manoj', 'manoj', 'manoj@gmail.com'),
(53, 'Anjali', 'anjali', 'anjali@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `cart_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`cart_id`, `c_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE `cart2` (
  `cart_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'ladies wear'),
(2, 'footwear'),
(3, 'gents wear'),
(4, 'kidswear');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Haldwani'),
(2, 2, 'Bareilly');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_address` text NOT NULL,
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_address`, `city_id`, `state_id`, `c_email`, `c_pass`) VALUES
(1, 'Lavita  Pandey', 'Awas Vikas Colony Haldwani', 1, 1, 'lavitapandey@gmail.com', 'lavi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `qty` int(3) NOT NULL,
  `amt` int(7) NOT NULL,
  `order_address` text NOT NULL,
  `order_mobile` bigint(10) NOT NULL,
  `order_shipname` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `amt`, `order_address`, `order_mobile`, `order_shipname`, `date`) VALUES
(1, 1, 1, 2, 1200, 'Awas vikas', 9876543212, 'khjghgj', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_size` varchar(5) NOT NULL,
  `category_id` int(10) NOT NULL,
  `p_reorder` int(3) NOT NULL,
  `p_discription` text NOT NULL,
  `discount` int(3) NOT NULL,
  `p_max` int(4) NOT NULL,
  `p_cost` int(5) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_company` varchar(20) NOT NULL,
  `p_stock` int(4) NOT NULL,
  `a_cost` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_size`, `category_id`, `p_reorder`, `p_discription`, `discount`, `p_max`, `p_cost`, `p_image`, `p_company`, `p_stock`, `a_cost`) VALUES
(1, 'skirt', '32', 1, 50, 'Best fitted.', 0, 25, 600, 'image5.jpg', 'xyz', 50, 600),
(2, 'shoes', '8', 2, 20, 'comfortable', 0, 50, 1000, 'f11.jpg', 'xyz', 50, 1000),
(3, 'T-shirt', 'L', 3, 10, 'Best fitted', 5, 50, 475, 'mtshirt1.jpg', 'fgh', 50, 500),
(4, 'Jeans', '32', 3, 20, 'narrow.', 0, 50, 1500, 'bjeans3.jpg', 'jhg', 56, 1500),
(5, 'saree', '6m', 1, 45, 'silk saree', 0, 47, 2000, 'gs13.jpg', 'lkj', 65, 2000),
(6, 'Shirt', 'XL', 3, 56, 'Durable', 10, 45, 900, 'mshirt1.jpg', 'bnhy', 50, 1000),
(7, 'saree', '6m', 1, 54, 'cotton saree', 0, 42, 3000, 'gs2.jpg', 'ujk', 45, 3000),
(8, 'jeans', '30', 1, 40, 'best fitted', 0, 34, 2000, 'gjeans2.jpg', 'hhg', 78, 2000),
(9, 'Top', 'L', 1, 34, 'good', 20, 44, 800, 'gtop4.jpg', 'xg', 89, 1000),
(10, 'Jacket', 'XL', 3, 67, 'durable', 30, 54, 2100, 'j1.jpg', 'gfh', 76, 3000),
(11, 'Shirt', 'M', 3, 34, 'comfortable', 0, 50, 500, 'mshirt5.jpg', 'sfdg', 67, 500),
(12, 'Pullover', 'L', 3, 54, 'woolen', 0, 34, 1500, 'j3.jpg', 'gfghf', 67, 1500),
(13, 'skirt', '30', 1, 20, 'Good Quality', 0, 50, 1000, 'image6.jpg', 'abc', 100, 1000),
(14, 'Shoes', '6', 2, 30, 'Comfortable Sole', 10, 100, 900, 'f7.jpg', 'jbbn', 200, 1000),
(15, 'jeans', '34', 3, 100, 'Best fitted', 0, 100, 2000, 'bjeans1.jpg', 'mbnb', 1000, 2000),
(16, 'saree', '6m', 1, 100, 'Silk saree', 0, 200, 2000, 'gs8.jpg', 'jbnv', 500, 2000),
(17, 'Shirt', '40', 3, 300, 'Best fitted', 0, 500, 1000, 'mshirt3.jpg', 'mbnbcb', 900, 1000),
(18, 'Dress', '20', 4, 30, 'Best Quality', 0, 300, 1000, 'kd7.jpg', 'mxnxnx', 300, 1000),
(19, 'shoes', '6', 2, 300, 'Comfortable sole', 0, 1200, 1200, 'f2.jpg', 'mxjnss', 1000, 1200),
(20, 'Dress', '20', 4, 300, 'Perfect', 10, 500, 900, 'kd1.jpg', 'bbxbx', 1200, 1000),
(21, 'Dress', '20', 4, 200, 'Perfect design', 0, 700, 1200, 'kd2.jpg', 'bxzczcx', 768, 1200),
(22, 'Shoes', '5', 2, 76, 'Comfortable sole', 0, 600, 1500, 'f3.jpg', 'nxnx', 1000, 1500),
(23, 'sShirt', '40', 3, 500, 'Best fitted', 0, 768, 1000, 'mshirt4.jpg', 'kssshs', 600, 1000),
(24, 'Dress', '22', 4, 667, 'Perfect', 10, 546, 900, 'kd3.jpg', 'jaa', 850, 1000),
(25, 'Shoes', '5', 2, 768, 'Comfortable sole', 0, 768, 1500, 'f4.jpg', 'aajja', 1000, 1500),
(26, 'Dress', '24', 4, 978, 'Perfect', 0, 987, 1000, 'kd4.jpg', 'hss', 6789, 1000),
(27, 'Dress', '26', 4, 958, 'Perfect', 10, 876, 1800, 'kd5.jpg', 'sjss', 987, 2000),
(28, 'Dress', '27', 4, 98, 'Perfect', 0, 768, 1500, 'kd6.jpg', 'ssjss', 298, 1500),
(29, 'shoes', '7', 2, 786, 'Comfortable', 0, 985, 1500, 'f12.jpg', 'hfk', 500, 1500),
(30, 'Dress', '20', 4, 87, 'Perfect', 0, 400, 1200, 'kd8.jpg', 'hhfdss', 900, 1200),
(31, 'Jeans', '34', 3, 784, 'Perfect fit', 0, 2458, 2000, 'bjeans2.jpg', 'jfkf', 2000, 2000),
(32, 'Dress', '20', 4, 45, 'Perfect', 0, 987, 1200, 'kd12.jpg', 'kdhfg', 1000, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `q_id` int(10) NOT NULL,
  `queries` text NOT NULL,
  `c_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`q_id`, `queries`, `c_id`, `date`) VALUES
(1, 'Sleeves are attached or not?', 1, '2018-04-10'),
(2, 'Can a 4\'12\" girl can wear this?', 1, '2018-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `an_id` int(10) NOT NULL,
  `q_id` int(10) NOT NULL,
  `a_id` int(10) NOT NULL,
  `answer` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`an_id`, `q_id`, `a_id`, `answer`, `date`) VALUES
(1, 1, 51, 'Yes from inside', '2018-04-11'),
(2, 2, 51, 'Yes, its free size.', '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'uttrakhand'),
(2, 'uttarpradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `cart2`
--
ALTER TABLE `cart2`
  ADD PRIMARY KEY (`cart_id`,`p_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `pk2` (`state_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `pk11` (`city_id`),
  ADD KEY `pk12` (`state_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `pk9` (`p_id`),
  ADD KEY `pk10` (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `pk3` (`category_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `pk6` (`c_id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`an_id`),
  ADD KEY `pk7` (`q_id`),
  ADD KEY `pk8` (`a_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `an_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart1`
--
ALTER TABLE `cart1`
  ADD CONSTRAINT `cart1_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `cart2`
--
ALTER TABLE `cart2`
  ADD CONSTRAINT `cart2_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart1` (`cart_id`),
  ADD CONSTRAINT `cart2_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `pk2` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `pk11` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pk12` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `pk10` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pk9` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `pk3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `query`
--
ALTER TABLE `query`
  ADD CONSTRAINT `pk6` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solution`
--
ALTER TABLE `solution`
  ADD CONSTRAINT `pk7` FOREIGN KEY (`q_id`) REFERENCES `query` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pk8` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
