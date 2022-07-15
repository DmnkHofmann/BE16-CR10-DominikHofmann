-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_dominikhofmann_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_dominikhofmann_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be16_cr10_dominikhofmann_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `ISBN_code` int(15) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(30) NOT NULL,
  `publish_date` int(11) NOT NULL,
  `availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES
(1, 'Interstellar', 'interstellar.jpg', 1001001, 'Interstellar is about Earths last chance to find a habitable planet before a lack of resources causes the human race to go extinct.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros Studios', 'USA', 2014, 'Yes'),
(2, 'Inception', 'inception.jpg', 1001002, 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O', 'DVD', 'Christopher', 'Nolan', 'Warner Bros Studios', 'USA', 2010, 'Yes'),
(3, 'Batman Dark Knight', 'batman.jpg', 1001003, 'Batman, Lieutenant James Gordon, and new District Attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City, until a mysterious and sadistic criminal mastermind known only as \"The Joker\" appears in Gotham', 'DVD', 'Christopher', 'Nolan', 'Warner Bros Studios', 'USA', 2008, 'No'),
(4, 'Seven', 'seven.jpg', 1001004, 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.', 'DVD', 'Dave', 'Fincher', 'New Line Cinema', 'USA', 1995, 'Yes'),
(9, 'Call on me', 'callonme.jpg', 1001005, 'The song is known for its music video, which features several women (including DeAnne Berry as the dance instructor) and a man performing aerobics in a sexually suggestive manner.', 'CD', 'Eric', 'Prydz', 'Ministry of Sound', 'UK', 2004, 'Yes'),
(10, 'No Stress', 'nostress.jpg', 1001006, 'No Stress is a 2008 song recorded by the French house record producer and DJ Laurent Wolf.', 'CD', 'Laurent', 'Wolf', 'Ministry of Sound', 'France', 2008, 'Yes'),
(11, 'Watercolor', 'watercolor.jpg', 1001007, 'Watercolour is the first single from the third album Immersion by Australian drum and bass band Pendulum.', 'CD', 'Rob', 'Swire', 'Warner Music UK', 'Australia', 2010, 'Yes'),
(12, 'Crush', 'Crush.jpg', 1001008, 'Crush is the fourth single from Australian drum and bass band Pendulum released from their third studio album, Immersion', 'CD', 'Rob', 'Swire', 'Warner Music UK', 'Australia', 2010, 'No'),
(13, 'Harry Potter and the sorcerer ', 'hpstone.jpg', 1001009, 'Featuring vivid descriptions and an imaginative story line, it followed the adventures of the unlikely hero Harry Potter, a lonely orphan who discovers that he is actually a wizard and enrolls in the Hogwarts School of Witchcraft and Wizardry', 'Book', 'J.K', 'Rowling', 'Carlsen', 'United Kingdom', 1997, 'Yes'),
(14, 'Harry Potter and the Goblet of', 'hpgoblet.jpg', 1001010, 'The Tri-Wizard Tournament is open. Four champions are selected to compete in three terrifying tasks in order to win the Tri-Wizard Cup.', 'Book', 'J.K', 'Rowling', 'Carlsen', 'United Kingdom', 2000, 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
