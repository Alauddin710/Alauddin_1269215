-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 09:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `m_name` VARCHAR(50), IN `m_address` VARCHAR(100), IN `m_contact` VARCHAR(20))   INSERT INTO manufacturer VALUES (NULL,m_name,m_address,m_contact)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_students` (IN `st_name` VARCHAR(50), IN `st_address` VARCHAR(100), IN `st_mobile` VARCHAR(20))   INSERT INTO students VALUES (NULL,st_name,st_address,st_mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Walton', 'Savar', '46465464'),
(4, 'Ximoy', 'motijhell', '0015246465');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `delete_product` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE manufacturer_id =old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Walton Tv', 20000, 1),
(2, 'Walton Fridge', 8000, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_info_view`
-- (See below for the actual view)
--
CREATE TABLE `product_info_view` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `rid` int(11) NOT NULL,
  `rmodule_name` varchar(20) NOT NULL,
  `rtotal_marks` int(5) NOT NULL,
  `rstudent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`rid`, `rmodule_name`, `rtotal_marks`, `rstudent_id`) VALUES
(1, 'HTML', 50, 1),
(2, 'PHP', 20, 1),
(3, 'HTML', 50, 2),
(4, 'PHP', 20, 2),
(5, 'HTML', 50, 3),
(6, 'PHP', 20, 3),
(7, 'HTML', 50, 4),
(8, 'PHP', 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stid` int(11) NOT NULL,
  `stname` varchar(50) NOT NULL,
  `staddress` varchar(100) NOT NULL,
  `stmobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stid`, `stname`, `staddress`, `stmobile`) VALUES
(1, 'alo', 'Dighol ', '01743612710'),
(2, 'razu', 'Notun', '01917787078'),
(3, 'naymur', 'Chuadanga', '01743612710'),
(4, 'Dipu', 'Barishal', '01917787078'),
(7, 'alom', 'mirpur', '01246544'),
(8, 'Roton', 'mirpur', '6566');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `delete_result` AFTER DELETE ON `students` FOR EACH ROW DELETE FROM results WHERE rstudent_id=OLD.stid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_result_view`
-- (See below for the actual view)
--
CREATE TABLE `students_result_view` (
`stid` int(11)
,`stname` varchar(50)
,`stmobile` varchar(20)
,`rtotal_marks` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'alo', 'abcd123'),
(2, 'alauddin', 'abcd123');

-- --------------------------------------------------------

--
-- Structure for view `product_info_view`
--
DROP TABLE IF EXISTS `product_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_info_view`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `p`.`price` AS `price`, `m`.`name` AS `manufacturer_name` FROM (`product` `p` join `manufacturer` `m`) WHERE `m`.`id` = `p`.`manufacturer_id` AND `p`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `students_result_view`
--
DROP TABLE IF EXISTS `students_result_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_result_view`  AS SELECT `students`.`stid` AS `stid`, `students`.`stname` AS `stname`, `students`.`stmobile` AS `stmobile`, `results`.`rtotal_marks` AS `rtotal_marks` FROM (`students` join `results`) WHERE `students`.`stid` = `results`.`rstudent_id``rstudent_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
