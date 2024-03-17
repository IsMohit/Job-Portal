-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 04:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `location` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `resume` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `salary` varchar(1000) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `schedule` varchar(1000) NOT NULL,
  `requirements` varchar(2000) NOT NULL,
  `qualifications` varchar(2000) NOT NULL,
  `skills` varchar(2000) NOT NULL,
  `job_description` varchar(5000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobinfo`
--

INSERT INTO `jobinfo` (`id`, `location`, `job`, `salary`, `job_type`, `schedule`, `requirements`, `qualifications`, `skills`, `job_description`, `image`) VALUES
(1, 'Hyderabad', 'Cyber Security Expert', '60000 - 75000 per month', 'full time', 'any shift', '*education : graduate\r\n*age : 25+\r\n*language : hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*knowledge of cyber security (Preferred)\r\n*total work : 3 years (required)', '*ethical hacking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/cse.jpeg'),
(2, 'Mumbai', 'Senior Web Developer', '50000 - 80000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*PHP: 1year (Preferred)\r\n*web design (Preferred)\r\n*total work : 3 years (required)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/swd.jpg'),
(3, 'Pune', 'Data Scientist', '40000 - 60000 per month', 'part time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 1+ years', '*bachelor\'s (Preferred)\r\n*Knowledge about data (Preferred)\r\n*total work : 2 years (required)', '*python', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/ds.jpg'),
(4, 'Pune', 'Junior Web Developer', '30000 - 60000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 20+\r\n*language : marathi, hindi, english\r\n*experience : fresher', '*bachelor\'s (Preferred)\r\n*master\'s (optional)\r\n*web design (Preferred)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/jwd.jpg'),
(5, 'Banglore', 'Human Resource', '70000 - 90000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*total work : 3 years (required)', '*Management Skills', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/hr.jpg'),
(6, 'Chennai', 'Designer', '40000 - 60000 per month', 'work from home', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 2+ years', '*bachelor\'s (Preferred)', '*Knowledge of UI/UX\r\n*Expert in Desiging', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/design.jpg'),
(7, 'Hyderabad', 'Full-Stack Developer', '30000 - 50000 per month', 'Work from home', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*PHP: 1year (Preferred)\r\n*web design (Preferred)\r\n*total work : 3 years (required)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/fsd.jpg'),
(8, 'Hyderabad', 'Junior Web Developer', '40000 - 50000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 20+\r\n*language : marathi, hindi, english', '*bachelor\'s (Preferred)\r\n*web design (Preferred)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/jwd.jpg'),
(9, 'Chennai', 'Full-Stack Developer', '85000 - 90000 per month', 'full time', 'night shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*PHP: 1year (Preferred)\r\n*web design (Preferred)\r\n*total work : 3 years (required)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/fsd.jpg'),
(10, 'Pune', 'Human Resource', '60000 - 80000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*total work : 3 years (required)', '*Management skills', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/hr.jpg'),
(11, 'Banglore', 'Designer', '40000 - 50000 per month', 'part time', 'day shift', '*education : graduate\n*age : 20+\n*language : marathi, hindi, english\n*experience : 1+ years', '*bachelor\'s (Preferred)\r\n*UI/UX tools skills', '*Knowledge of UI/UX tools', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/design.jpg'),
(12, 'Mumbai', 'Data Scientist', '72000 - 88000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*total work : 3 years (required)', '*python and data expertise', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/ds.jpg'),
(14, 'Banglore', 'Senior Web Developer', '80000 - 95000 per month', 'work from home', 'night shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*PHP: 1year (Preferred)\r\n*web design (Preferred)\r\n*total work : 3 years (required)', '*HTML5 ans CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/swd.jpg'),
(15, 'Mumbai', 'Database Admin', '75000 - 80000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 20+\r\n*language : hindi, english\r\n*experience : 2+ years', '*bachelor\'s (Preferred)\r\n*database handling (Preferred)\r\n*total work : 2 years (required)', '*mysql\r\n*any db server', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/dba.jpg'),
(16, 'Chennai', 'Database Admin', '75000 - 80000 per month', 'full time', 'any shift', '*education : graduate\r\n*age : 25+\r\n*language : hindi, english\r\n*experience : 2+ years', '*bachelor\'s (Preferred)\r\n*Database handling (Preferred)', '*any db server\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/dba.jpg'),
(25, 'Mumbai', 'Full-Stack Developer', '80000 - 95000 per month', 'full time', 'day shift', '*education : graduate\r\n*age : 25+\r\n*language : marathi, hindi, english\r\n*experience : 3+ years', '*bachelor\'s (Preferred)\r\n*PHP: 1year (Preferred)\r\n*web design (Preferred)\r\n*total work : 3 years (required)', '*HTML5 and CSS3\r\n*JavaScript\r\n*node.js\r\n*php\r\n*mysql', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, modi sunt animi inventore ipsa delectus, sit aspernatur voluptate accusantium eius ducimus minima consectetur nisi beatae porro cupiditate. Laudantium, fugit.', 'images/fsd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `resume` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `name`, `password`, `address`, `image`, `description`, `qualification`, `skills`, `resume`) VALUES
('admin.root@rmcs.com', 'admin', 'admin321', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
