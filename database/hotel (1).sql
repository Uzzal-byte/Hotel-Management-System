-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 10:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_room`
--

CREATE TABLE `add_room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hotel_id` int(50) NOT NULL,
  `wifi` varchar(100) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `ac_per_day` int(50) NOT NULL,
  `body_message` varchar(100) NOT NULL,
  `body_message_per_day` int(50) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `meal_per_day` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `bed_cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_room`
--

INSERT INTO `add_room` (`id`, `name`, `hotel_id`, `wifi`, `ac`, `ac_per_day`, `body_message`, `body_message_per_day`, `meal`, `meal_per_day`, `image`, `price`, `bed_cost`) VALUES
(5, 'RDA109', 1, 'yes', 'yes', 100, 'yes', 500, 'yes', 1000, '680ad26a-d657-4264-b35c-82d7b32639e0.jpg', 1000, 500),
(6, 'RDA107', 1, 'yes', 'yes', 100, 'yes', 500, 'yes', 1000, '05.jpg', 1200, 600),
(7, 'RDA108', 1, 'yes', 'yes', 100, 'yes', 500, 'yes', 1000, '07.jpg', 1500, 700);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `sl_id` int(20) NOT NULL,
  `bed_no` varchar(100) NOT NULL,
  `room_id` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `bed_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`sl_id`, `bed_no`, `room_id`, `check_in`, `check_out`, `user_id`, `status`, `bed_image`) VALUES
(3, 'RDA109-1', '5', '', '', 0, 0, '11.jpg'),
(4, 'RDA109-2', '5', '', '', 0, 0, '12.jpg'),
(5, 'RDA107-1', '6', '', '', 0, 0, '11.jpg'),
(6, 'RDA107-2', '6', '', '', 0, 0, '12.jpg'),
(7, 'RDA108-1', '7', '', '', 0, 0, '14.jpg'),
(8, 'RDA108-2', '7', '', '', 0, 0, '14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `bed_no` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `num_days` int(50) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `spa` varchar(100) NOT NULL,
  `total` int(50) NOT NULL,
  `statas` int(50) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `comission` int(30) NOT NULL,
  `earn` int(30) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `visa_image` varchar(100) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `bed_id` int(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `bed_no`, `check_in`, `check_out`, `num_days`, `ac`, `meal`, `spa`, `total`, `statas`, `account_number`, `transaction_id`, `comission`, `earn`, `cus_name`, `email`, `mobile`, `image`, `visa_image`, `cus_address`, `bed_id`, `date`) VALUES
(16, 7, 'RDA109-2', '2019-06-21', '2019-06-22', 2, 'yes', 'yes', '', 1995, 2, '01546541645', '01241jhghjgfjh', 5, 105, 'sumon', 'facebookhghj126@gmail.com', '1938531102', 'ddff7841-53ae-4db7-a2c5-2728771c2d82.jpg', '20f5a4ec-22d5-4125-b133-6baa098a4193.jpg', 'hkjk, hkhk', 4, ''),
(17, 7, 'RDA107-2', '2019-06-21', '2019-06-24', 2, 'yes', 'no', '', 3705, 1, '		none', 'none', 5, 195, 'Boishakhibd', 'ssk58021@gmail.com', '1938531102', '9cf3e750-f5d4-47c5-aa8a-30ff0f503c79.jpg', '815ed802-ed70-41b9-afcf-02b2d1ac6419.jpg', 'jhamgora', 6, ''),
(18, 0, 'RDA109-2', '2019-07-15', '2019-07-16', 2, 'no', 'no', 'no', 1000, 1, '		none', 'none', 0, 0, 'sksojib', 'ssk58021@gmail.com', '01718825371', 'bus3.jpg', 'bus8.jpg', 'dhaka', 4, '2019-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(30) NOT NULL,
  `date` varchar(100) NOT NULL,
  `cost` int(20) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `date`, `cost`, `desc`) VALUES
(1, '2019-07-12', 1000, ' sdds'),
(2, '2019-07-12', 3000, ' room rent');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `feature_image` varchar(100) NOT NULL,
  `gallary_images` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `wifi` varchar(100) NOT NULL,
  `meal` varchar(200) NOT NULL,
  `meal_price` int(20) NOT NULL,
  `car_parking` varchar(150) NOT NULL,
  `gym` varchar(150) NOT NULL,
  `gym_price` int(20) NOT NULL,
  `code_name` varchar(50) NOT NULL,
  `swiming_pol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `description`, `location`, `country`, `feature_image`, `gallary_images`, `status`, `wifi`, `meal`, `meal_price`, `car_parking`, `gym`, `gym_price`, `code_name`, `swiming_pol`) VALUES
(1, 'radision', '', 'uttara,dhaka', 'China', 'g3.jpg', '', 1, 'Wifi', 'Meal', 1000, 'Car parking', 'Gym', 150, 'RDSN', 'Swiming pol');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`, `type`) VALUES
(1, 'Admin', '1234', 1),
(2, 'manager', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `marchant_earn`
--

CREATE TABLE `marchant_earn` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `total_sell` int(11) NOT NULL,
  `comision _rate` int(11) NOT NULL,
  `earn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marchant_login`
--

CREATE TABLE `marchant_login` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `comission` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marchant_login`
--

INSERT INTO `marchant_login` (`id`, `username`, `email`, `mobile`, `password`, `address`, `city`, `status`, `comission`, `fullname`, `image`) VALUES
(5, 'sazzad', 'ssk58021@gmail.com', 1938531102, '7d514ea48be82366c2bd145f0c6f5540', 'dhaka', 'uttara', 0, 0, 'sazzad', 'teamb1.jpg'),
(6, 'sazzad', 'ssk58021@gmail.com', 1938531102, '7d514ea48be82366c2bd145f0c6f5540', 'dhaka', 'uttara', 1, 5, 'sazzad', 'teamb1.jpg'),
(7, 'sksojib', 'ssk58021@gmail.com', 1718825371, 'b94b96942f89a9c19982e222340a5026', 'dhaka', 'uttara', 1, 5, 'sksojib', 'teamb4.jpg'),
(8, 'farzana', 'ssk58021@gmail.com', 1718825371, 'user123', 'dhaka', 'uttara', 1, 5, 'sksojib', 'teamb4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Most funny video | | try to not laugh', 'job offer', 'good  morning');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(1, 'Mr.', 'sk', 'sojib', 'Single Room', 'Single', 1, '2019-05-09', '2019-05-11', 300.00, 303.00, 0.00, 'Room only', 3.00, 2),
(2, 'Mr.', 'sksojib', 'ghjf', 'Guest House', 'Single', 1, '2019-05-09', '2019-05-11', 360.00, 378.00, 14.40, 'Full Board', 3.60, 2),
(1, 'Mr.', 'sojib423', 'ghjf', 'Deluxe Room', 'Double', 1, '2019-05-09', '2019-05-11', 440.00, 448.80, 0.00, 'Room only', 8.80, 2),
(2, 'Mr.', 'sojib42', 'ghjf', 'Deluxe Room', 'Double', 1, '2019-05-09', '2019-05-11', 440.00, 466.40, 17.60, 'Breakfast', 8.80, 2),
(3, 'Mr.', 'Boishakhibd1', 'ghjf', 'Deluxe Room', 'Double', 1, '2019-05-09', '2019-05-11', 440.00, 448.80, 0.00, 'Room only', 8.80, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `sl` int(20) NOT NULL,
  `bed_no` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`sl`, `bed_no`, `check_in`, `check_out`, `user_id`, `status`) VALUES
(1, '4', '2019-07-15', '2019-07-16', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  `room_nmbr` int(30) DEFAULT NULL,
  `price` int(30) NOT NULL,
  `hotel_id` int(20) NOT NULL,
  `hotel_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`, `room_nmbr`, `price`, `hotel_id`, `hotel_name`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL, NULL, 0, 0, ''),
(2, 'Superior Room', 'Double', 'Free', NULL, NULL, 0, 0, ''),
(3, 'Superior Room', 'Triple', 'Free', NULL, NULL, 0, 0, ''),
(4, 'Single Room', 'Quad', 'Free', NULL, NULL, 0, 0, ''),
(5, 'Superior Room', 'Quad', 'Free', NULL, NULL, 0, 0, ''),
(6, 'Deluxe Room', 'Single', 'Free', NULL, NULL, 0, 0, ''),
(7, 'Deluxe Room', 'Double', 'Free', 0, NULL, 0, 0, ''),
(8, 'Deluxe Room', 'Triple', 'Free', NULL, NULL, 0, 0, ''),
(9, 'Deluxe Room', 'Quad', 'Free', NULL, NULL, 0, 0, ''),
(10, 'Guest House', 'Single', 'Free', 0, NULL, 0, 0, ''),
(11, 'Guest House', 'Double', 'Free', NULL, NULL, 0, 0, ''),
(12, 'Guest House', 'Quad', 'Free', NULL, NULL, 0, 0, ''),
(13, 'Single Room', 'Single', 'Free', 0, NULL, 0, 0, ''),
(14, 'Single Room', 'Double', 'Free', NULL, NULL, 0, 0, ''),
(15, 'Single Room', 'Triple', 'Free', NULL, NULL, 0, 0, ''),
(16, 'Guest House', 'Triple', 'Free', NULL, NULL, 0, 0, ''),
(17, '', 'Single', 'Free', NULL, NULL, 0, 0, ''),
(18, '105', 'Triple', 'Free', NULL, NULL, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(1, 'Mr.', 'sojib423', 'ghjf', 'ssk58021@gmail.com', 'Sri Lankan', 'Bangladesh', '1938531102', 'Deluxe Room', 'Double', '1', 'Room only', '2019-05-09', '2019-05-11', 'Conform', 2),
(2, 'Mr.', 'sojib42', 'ghjf', 'ssk58021@gmail.com', 'Sri Lankan', 'Bangladesh', '1938531102', 'Deluxe Room', 'Double', '1', 'Breakfast', '2019-05-09', '2019-05-11', 'Conform', 2),
(4, 'Dr.', 'sarif', 'ghjf', 'facebookhghj126@gmail.com', 'Sri Lankan', 'Bangladesh', '1938531102', 'Deluxe Room', 'Double', '1', 'Room only', '2019-05-09', '2019-05-11', 'Not Conform', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_room`
--
ALTER TABLE `add_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marchant_earn`
--
ALTER TABLE `marchant_earn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marchant_login`
--
ALTER TABLE `marchant_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_room`
--
ALTER TABLE `add_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `sl_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marchant_earn`
--
ALTER TABLE `marchant_earn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marchant_login`
--
ALTER TABLE `marchant_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
