-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2023 at 06:23 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `category_note` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_note`, `create_at`, `update_at`) VALUES
(1, 'Front End', 'Không có', '2023-08-05 11:15:55', '2023-08-05 11:15:55'),
(2, 'Back End', 'Không có', '2023-08-05 11:16:11', '2023-08-05 11:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `price`, `description`, `category_id`, `create_at`, `update_at`) VALUES
(8, 'Kiến Thức Nhập Môn IT', '1.png', '220000', 'Để có cái nhìn tổng quan hơn về ngành lập trình web', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(10, 'Lập trình C++ cơ bản, nâng cao', '2.png', '220000', 'Khóa học lập trình C++ từ cơ bản tới nâng cao ', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(11, 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(12, 'Responsive Với Grid System', '4.png', '220000', 'Trong khóa này chúng ta sẽ học về Responsive', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(13, 'Lập Trình JavaScript Cơ Bản', '5.png', '220000', 'Javascript cơ bản cho người chưa từng học lập trình.', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(14, 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(45, 'Node & ExpressJS', '6.png', '220000', 'Học Back-end với Node & ExpressJS framework', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(57, 'Làm việc với Terminal & Ubuntu', '624faac11d109.png', '220000', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(58, 'Bootstrap 5', 'Thiết kế chưa có tên.jpg', '220000', 'Bootstrap là một framework HTML CSS Javascript ', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(60, 'Laravel Framework ', '5-2-300x169.jpg', '220000', 'Laravel là một PHP framework, có mã nguồn mở và miễn phí', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(61, 'VueJS Framework ', '1-4-300x169.jpg', '220000', 'Vue.jslà một framework Javascript hỗ trợ bạn xây dựng web ', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(62, 'Lập trình PHP', '2-4-300x169.jpg', '220000', 'PHP là ngôn ngữ script phía server đa năng, đa mục đích', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(63, 'Lập trình Java', '3-5-300x169.jpg', '220000', 'Java là một ngôn ngữ lập trình phổ biến về web', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(64, 'Typescript  Framework ', 'Thiet-ke-chua-co-ten-300x169.jpg', '220000', 'TypeScript là một dự án mã nguồn mở phát triển bởi Microsoft ', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(66, 'Spring Boot Framework ', 'Spring-BOOT.webp', '220000', 'Spring Boot là một extension của Spring Framework ', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18'),
(67, 'ASP.NET Framework ', 'asp.jpg', '220000', 'ASP.Net là một nền tảng dành cho phát triển web', 0, '2023-08-05 10:41:18', '2023-08-05 10:41:18');

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
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `course_id`, `name`, `image`, `price`, `description`, `create_at`, `update_at`) VALUES
(5, '8', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Trong khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(6, '9', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan về ngành IT chuyên ngành Web\r\n', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(7, '10', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(13, '11', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan về ngành IT ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(14, '11', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(19, '11', 'Xây Dựng Website với ReactJS', '8.png', '120,000VNĐ', 'Lập trình ReactJS từ cơ bản tới nâng cao', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(20, '13', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(21, '8', 'Responsive Với Grid System', '4.png', '50,000VNĐ', 'Trong khóa này chúng ta sẽ học về Responsive', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(22, '8', 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(23, '8', 'Lập Trình JavaScript Cơ Bản', '5.png', '100,000VNĐ', 'Javascript cơ bản cho người chưa từng học lập trình.', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(24, '11', 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan hơn về ngành lập trình web', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(25, '11', 'Lập trình C++ cơ bản, nâng cao', '2.png', '100,000VNĐ', 'Khóa học lập trình C++ từ cơ bản tới nâng cao ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(26, '11', 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(27, '11', 'Responsive Với Grid System', '4.png', '50,000VNĐ', 'Trong khóa này chúng ta sẽ học về Responsive', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(28, '11', 'Lập Trình JavaScript Cơ Bản', '5.png', '100,000VNĐ', 'Javascript cơ bản cho người chưa từng học lập trình.', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(29, '11', 'Lập Trình JavaScript Nâng Cao', '6.png', '100,000VNĐ', 'Hiểu sâu hơn về cách Javascript hoạt động', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(32, '6', 'Lập Trình JavaScript Nâng Cao', '6.png', 'Free', 'Hiểu sâu hơn về cách Javascript hoạt động', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(33, '6', 'Lập trình C++ cơ bản, nâng cao', '2.png', 'Free', 'Khóa học lập trình C++ từ cơ bản tới nâng cao ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(41, '21', 'HTML CSS từ Zero đến Hero', '3.png', 'Free', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(42, '21', 'Làm việc với Terminal & Ubuntu', '7.png', 'Free', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(43, '21', 'Lập Trình JavaScript Nâng Cao', '6.png', 'Free', 'Hiểu sâu hơn về cách Javascript hoạt động', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(44, '21', 'Làm việc với Terminal & Ubuntu', '7.png', 'Free', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(45, '21', 'Xây Dựng Website với ReactJS', '8.png', 'Free', 'Lập trình web bằng ReactJS từ cơ bản tới nâng cao', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(46, '21', 'Responsive Với Grid System', '4.png', 'Free', 'Trong khóa này chúng ta sẽ học về Responsive', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(83, '23', 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(84, '23', 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(88, '23', 'Làm việc với Terminal & Ubuntu', '624faac11d109.png', '220000', 'Sở hữu một Terminal hiện đại, mạnh mẽ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(89, '23', 'Lập Trình JavaScript Cơ Bản', '5.png', '220000', 'Javascript cơ bản cho người chưa từng học lập trình.', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(91, '14', 'Kiến Thức Nhập Môn IT', '1.png', '220000', 'Để có cái nhìn tổng quan hơn về ngành lập trình web', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(94, '14', 'Lập trình C++ cơ bản, nâng cao', '2.png', '220000', 'Khóa học lập trình C++ từ cơ bản tới nâng cao ', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(95, '19', 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(96, '19', 'Node & ExpressJS', '6.png', '220000', 'Học Back-end với Node & ExpressJS framework', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(97, '19', 'Lập Trình JavaScript Nâng Cao', '12.png', '220000', 'Hiểu sâu hơn về cách Javascript hoạt động', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(98, '22', 'HTML CSS từ Zero đến Hero', '3.png', '220000', 'Khóa này chúng ta sẽ xây dựng giao diện Website', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(99, '22', 'Kiến Thức Nhập Môn IT', '1.png', '220000', 'Để có cái nhìn tổng quan hơn về ngành lập trình web', '2023-08-05 10:42:23', '2023-08-05 10:42:23'),
(100, '22', 'Làm việc với Terminal & Ubuntu', '624faac11d109.png', '220000', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến', '2023-08-05 10:42:23', '2023-08-05 10:42:23');

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
(22, 'Nhật Huy', 'huylnpc05258@fpt.edu.vn', '704f51d8f2ff0877319d7b669f20b7a4', '2023-08-04 16:46:15', '2023-08-04 16:46:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
