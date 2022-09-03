-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 02:45 PM
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
-- Database: `wdpf51_exam2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_students` (IN `st_name` VARCHAR(50), IN `st_address` VARCHAR(100), IN `st_mobile` VARCHAR(20))   INSERT INTO students VALUES(NULL,st_name,st_address,st_mobile)$$

DELIMITER ;

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
(1, 'HTML', 500, 1),
(2, 'HTML1', 200, 1),
(5, 'JAVA', 300, 3),
(6, 'JAVA', 400, 3),
(7, 'PHP', 400, 4),
(8, 'PHP1', 600, 4),
(9, 'MYSQL', 300, 5),
(10, 'MYSQL1', 200, 5);

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
(1, 'alo', 'mirpur', '01743612710'),
(3, 'amin', 'mirpur', '5454564'),
(4, 'Fayzulla', 'mirpur', '56446564'),
(5, 'Fayzulla', 'mirpur', '56446564');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `student_delete` AFTER DELETE ON `students` FOR EACH ROW DELETE FROM results WHERE rstudent_id=old.stid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_results_vies`
-- (See below for the actual view)
--
CREATE TABLE `student_results_vies` (
`stid` int(11)
,`stname` varchar(50)
,`stmobile` varchar(20)
,`rmodule_name` varchar(20)
,`rtotal_marks` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'abcd123');

-- --------------------------------------------------------

--
-- Structure for view `student_results_vies`
--
DROP TABLE IF EXISTS `student_results_vies`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_results_vies`  AS SELECT `students`.`stid` AS `stid`, `students`.`stname` AS `stname`, `students`.`stmobile` AS `stmobile`, `results`.`rmodule_name` AS `rmodule_name`, `results`.`rtotal_marks` AS `rtotal_marks` FROM (`students` join `results`) WHERE `students`.`stid` = `results`.`rstudent_id` ORDER BY `students`.`stname` ASC  ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
