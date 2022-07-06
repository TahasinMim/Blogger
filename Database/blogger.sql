-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 04:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(100) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `keywords` text NOT NULL,
  `image` text NOT NULL,
  `comments` int(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `author`, `content`, `keywords`, `image`, `comments`, `date`, `status`) VALUES
(1, 'Interesting Alternative Investment Ideas Worth Checking Out', 'Jhon Doe', 'Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we\'re working to tackle the global oral health crisis. The incredible resilient women and children that we\'ve met inspire our ideas and every single one of them has an unspoken story worth sharing.', 'investment, technology, digital', 'blog-1.jpg', 2, '2022-06-18', 'published'),
(2, 'Four places you need to visit if you are a nature lover', 'Sam Mazin', 'One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme itself, but the support that accompanies it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme itself, but the support that accompanies it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Don’t take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Could you not take our word for it? Hundreds of reviews from our customers say so.', 'nature, travel, lifestyle', 'blog-2.jpg', 0, '2022-06-19', 'published'),
(3, 'The Road to Hail Saudi Arabia', 'Kyle Glaser', 'Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing. Learn how we are working to tackle the global oral health crisis. The incredible resilient women and children that we have met inspire our ideas and every single one of them has an unspoken story worth sharing.', 'Travel, Road, KSA', 'blog-3.jpg', 1, '2022-06-20', 'published'),
(4, 'Baseball Golden Age Of Young Talent Is Now', 'Harry Rees', 'One of the best aspects of the theme is not the theme ifself, but the support that comes along with it.  take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it.  take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme itself, but the support that accompanies it.  take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme itself, but the support that accompanies it.  take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it.  take our word for it. Hundreds of reviews from our customers say so. One of the best aspects of the theme is not the theme ifself, but the support that comes along with it. Could you not take our word for it? Hundreds of reviews from our customers say so.', 'Sports, Baseball, outdoor', 'blog-4.jpg', 0, '2022-06-20', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(100) NOT NULL,
  `blog_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `blog_id`, `name`, `email`, `comment`, `date`) VALUES
(1, 1, 'Kazi Afrime Ahamed', 'afrimectg@gmail.com', 'nice', '2022-06-18 16:23:24'),
(2, 3, 'sabuj', 'sabuj@gmail.com', 'great post', '2022-06-18 16:30:53'),
(3, 1, 'amir', 'amir@yahoo.com', 'thanks for sharing', '2022-06-18 16:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Kazi Afrime Ahamed', 'afrimectg@gmail.com', 'Greetings', 'A formal greeting is a polite and respectful way of recognizing or welcoming someone', '2022-06-18 17:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `position`, `status`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin', 'approved'),
(2, 'user', 'user@user.com', 'user', 'subscriber', 'approved'),
(3, 'tahasin', 'taha@gmail.com', '1234', 'subscriber', 'unapproved'),
(4, 'araf', 'araf@gmail.com', '1234', 'subscriber', 'unapproved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
