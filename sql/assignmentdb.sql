-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2023 at 06:19 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `price`, `description`) VALUES
(8, 'Kiến Thức Nhập Môn IT', '1.png', '220000', 'Để có cái nhìn tổng quan hơn về ngành lập trình web'),
(10, 'Lập trình C++ cơ bản, nâng cao', '2.png', '220000', 'Khóa học lập trình C++ từ cơ bản tới nâng cao '),
(11, 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(12, 'Responsive Với Grid System', '4.png', '220000', 'Trong khóa này chúng ta sẽ học về Responsive'),
(13, 'Lập Trình JavaScript Cơ Bản', '5.png', '220000', 'Javascript cơ bản cho người chưa từng học lập trình.'),
(14, 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(45, 'Node & ExpressJS', '6.png', '220000', 'Học Back-end với Node & ExpressJS framework'),
(57, 'Làm việc với Terminal & Ubuntu', '624faac11d109.png', '220000', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int NOT NULL,
  `course_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `course_id`, `name`, `image`, `price`, `description`) VALUES
(5, '8', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Trong khóa này chúng ta sẽ xây dựng giao diện Website'),
(6, '9', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan về ngành IT chuyên ngành Web\r\n'),
(7, '10', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến'),
(13, '11', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan về ngành IT '),
(14, '11', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ '),
(19, '11', 'Xây Dựng Website với ReactJS', '8.png', '120,000VNĐ', 'Lập trình ReactJS từ cơ bản tới nâng cao'),
(20, '13', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(21, '8', 'Responsive Với Grid System', '4.png', '50,000VNĐ', 'Trong khóa này chúng ta sẽ học về Responsive'),
(22, '8', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ '),
(23, '8', 'Lập Trình JavaScript Cơ Bản', '5.png', '100,000VNĐ', 'Javascript cơ bản cho người chưa từng học lập trình.'),
(24, '11', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan hơn về ngành lập trình web'),
(25, '11', 'Lập trình C++ cơ bản, nâng cao', '2.png', '100,000VNĐ', 'Khóa học lập trình C++ từ cơ bản tới nâng cao '),
(26, '11', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(27, '11', 'Responsive Với Grid System', '4.png', '50,000VNĐ', 'Trong khóa này chúng ta sẽ học về Responsive'),
(28, '11', 'Lập Trình JavaScript Cơ Bản', '5.png', '100,000VNĐ', 'Javascript cơ bản cho người chưa từng học lập trình.'),
(29, '11', 'Lập Trình JavaScript Nâng Cao', '6.png', '100,000VNĐ', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(32, '6', 'Lập Trình JavaScript Nâng Cao', '6.png', 'Free', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(33, '6', 'Lập trình C++ cơ bản, nâng cao', '2.png', 'Free', 'Khóa học lập trình C++ từ cơ bản tới nâng cao '),
(41, '21', 'HTML CSS từ Zero đến Hero', '3.png', 'Free', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(42, '21', 'Làm việc với Terminal & Ubuntu', '7.png', 'Free', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến'),
(43, '21', 'Lập Trình JavaScript Nâng Cao', '6.png', 'Free', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(44, '21', 'Làm việc với Terminal & Ubuntu', '7.png', 'Free', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến'),
(45, '21', 'Xây Dựng Website với ReactJS', '8.png', 'Free', 'Lập trình web bằng ReactJS từ cơ bản tới nâng cao'),
(46, '21', 'Responsive Với Grid System', '4.png', 'Free', 'Trong khóa này chúng ta sẽ học về Responsive'),
(83, '23', 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(84, '23', 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(88, '23', 'Làm việc với Terminal & Ubuntu', '624faac11d109.png', '220000', 'Sở hữu một Terminal hiện đại, mạnh mẽ'),
(89, '23', 'Lập Trình JavaScript Cơ Bản', '5.png', '220000', 'Javascript cơ bản cho người chưa từng học lập trình.'),
(91, '14', 'Kiến Thức Nhập Môn IT', '1.png', '220000', 'Để có cái nhìn tổng quan hơn về ngành lập trình web'),
(94, '14', 'Lập trình C++ cơ bản, nâng cao', '2.png', '220000', 'Khóa học lập trình C++ từ cơ bản tới nâng cao '),
(95, '19', 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website'),
(96, '19', 'Node & ExpressJS', '6.png', '220000', 'Học Back-end với Node & ExpressJS framework'),
(97, '19', 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_at`, `update_at`) VALUES
(14, 'Lâm Nhật Huy', 'lamnhathuy0393418721@gmail.com', '53a9b54c9b63e0634b97685d0ca0315e', '2023-08-03 09:49:22', '2023-08-03 09:49:22'),
(19, 'huydev', 'huydev@gmail.com', '7827ad1d5ae977e13fb3c5d3771828c8', '2023-08-03 13:06:47', '2023-08-03 13:06:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
