-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 10:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `image`) VALUES
(15, 'Blue Orange Illustrated Kids Summer Camp Announcement.png');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `school` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_materials`
--

CREATE TABLE `lecture_materials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_materials_5`
--

CREATE TABLE `lecture_materials_5` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecture_materials_5`
--

INSERT INTO `lecture_materials_5` (`id`, `title`, `filename`) VALUES
(0, 'P1', 'Revision - Answers.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_materials_6to9`
--

CREATE TABLE `lecture_materials_6to9` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecture_materials_6to9`
--

INSERT INTO `lecture_materials_6to9` (`id`, `title`, `filename`) VALUES
(1, 'a', 'Revision - Answers.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_materials_al`
--

CREATE TABLE `lecture_materials_al` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecture_materials_al`
--

INSERT INTO `lecture_materials_al` (`id`, `title`, `filename`) VALUES
(1, 'B1', 'Developing GUI Application with C# .Net and MSSql.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_materials_ol`
--

CREATE TABLE `lecture_materials_ol` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecture_materials_ol`
--

INSERT INTO `lecture_materials_ol` (`id`, `title`, `filename`) VALUES
(1, 'P', 'Revision - Answers.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links_5`
--

CREATE TABLE `links_5` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links_5`
--

INSERT INTO `links_5` (`id`, `title`, `link`) VALUES
(1, 'A', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=');

-- --------------------------------------------------------

--
-- Table structure for table `links_6to9`
--

CREATE TABLE `links_6to9` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links_al`
--

CREATE TABLE `links_al` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links_al`
--

INSERT INTO `links_al` (`id`, `title`, `link`) VALUES
(1, 'A', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=');

-- --------------------------------------------------------

--
-- Table structure for table `links_ol`
--

CREATE TABLE `links_ol` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links_ol`
--

INSERT INTO `links_ol` (`id`, `title`, `link`) VALUES
(1, 'A', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8'),
(2, 'ASSA', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8'),
(3, 'ASSA', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `person`, `message`) VALUES
(7, 'Mihika', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `messages_5`
--

CREATE TABLE `messages_5` (
  `id` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages_6to9`
--

CREATE TABLE `messages_6to9` (
  `id` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages_al`
--

CREATE TABLE `messages_al` (
  `id` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages_ol`
--

CREATE TABLE `messages_ol` (
  `id` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `quizno` int(11) NOT NULL,
  `quizlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_5`
--

CREATE TABLE `quiz_5` (
  `id` int(11) NOT NULL,
  `quizno` int(11) NOT NULL,
  `quizlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_5`
--

INSERT INTO `quiz_5` (`id`, `quizno`, `quizlink`) VALUES
(1, 0, 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_6to9`
--

CREATE TABLE `quiz_6to9` (
  `id` int(11) NOT NULL,
  `quizno` varchar(11) NOT NULL,
  `quizlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_al`
--

CREATE TABLE `quiz_al` (
  `id` int(11) NOT NULL,
  `quizno` varchar(11) NOT NULL,
  `quizlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_al`
--

INSERT INTO `quiz_al` (`id`, `quizno`, `quizlink`) VALUES
(1, 'Quiz1', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8'),
(2, 'Quiz1', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_ol`
--

CREATE TABLE `quiz_ol` (
  `id` int(11) NOT NULL,
  `quizno` varchar(11) NOT NULL,
  `quizlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_ol`
--

INSERT INTO `quiz_ol` (`id`, `quizno`, `quizlink`) VALUES
(1, 'Quiz1', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8'),
(2, 'Quiz1', 'https://www.google.com/search?q=FLEXQUIZ&oq=FLEXQUIZ&aqs=chrome..69i57j0i10i512l9.2096j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `request` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `monday` varchar(1000) NOT NULL,
  `tuesday` varchar(1000) NOT NULL,
  `wednesday` varchar(1000) NOT NULL,
  `thursday` varchar(1000) NOT NULL,
  `friday` varchar(1000) NOT NULL,
  `Saturday` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `Saturday`) VALUES
(7, 'Maths (9am-12 noon) ', 'English (2pm-5 pm)', 'Science (9am-12 noon)', 'History (9am-12 noon)', 'Religion (8am-11 am)', 'Revision(8am-5pm)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` int(2) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'Admin', 117100100, 'admin@gmail.com', 0, 'admin123'),
(38, 'Oshadi Weerathunga', 117100100, 'Grade13@gmail.com', 13, '13131313'),
(40, 'Virantha Kapuliyadda', 117100100, 'Grade9@gmail.com', 9, '99999999'),
(41, 'Maths teacher', 117100100, 'teacher@gmail.com', 1, '000000000'),
(43, 'Grade4 Student', 117100100, 'grade4@gmail.com', 4, '444444444'),
(49, 'Grade4 another student', 117100100, 'another4@gmail.com', 4, '444444444'),
(50, 'Grade5Student', 117100100, 'grade5@gmail.com', 5, '555555555'),
(51, 'Science Teacher', 117100100, 'Science@gmail.com', 1, '000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_materials`
--
ALTER TABLE `lecture_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_materials_6to9`
--
ALTER TABLE `lecture_materials_6to9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_materials_al`
--
ALTER TABLE `lecture_materials_al`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_materials_ol`
--
ALTER TABLE `lecture_materials_ol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_5`
--
ALTER TABLE `links_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_6to9`
--
ALTER TABLE `links_6to9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_al`
--
ALTER TABLE `links_al`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_ol`
--
ALTER TABLE `links_ol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_5`
--
ALTER TABLE `messages_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_6to9`
--
ALTER TABLE `messages_6to9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_al`
--
ALTER TABLE `messages_al`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_ol`
--
ALTER TABLE `messages_ol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_5`
--
ALTER TABLE `quiz_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_6to9`
--
ALTER TABLE `quiz_6to9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_al`
--
ALTER TABLE `quiz_al`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_ol`
--
ALTER TABLE `quiz_ol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecture_materials`
--
ALTER TABLE `lecture_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lecture_materials_6to9`
--
ALTER TABLE `lecture_materials_6to9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecture_materials_al`
--
ALTER TABLE `lecture_materials_al`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecture_materials_ol`
--
ALTER TABLE `lecture_materials_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `links_5`
--
ALTER TABLE `links_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links_6to9`
--
ALTER TABLE `links_6to9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links_al`
--
ALTER TABLE `links_al`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links_ol`
--
ALTER TABLE `links_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages_5`
--
ALTER TABLE `messages_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages_6to9`
--
ALTER TABLE `messages_6to9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages_al`
--
ALTER TABLE `messages_al`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages_ol`
--
ALTER TABLE `messages_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quiz_5`
--
ALTER TABLE `quiz_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_6to9`
--
ALTER TABLE `quiz_6to9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_al`
--
ALTER TABLE `quiz_al`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_ol`
--
ALTER TABLE `quiz_ol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
